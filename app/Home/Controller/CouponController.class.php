<?php
	namespace Home\Controller;
	use Think\Controller;
	class CouponController extends BaseController{
		public function __construct(){
			parent::__construct();
		}

		// 首次获取数据
		public function index(){
			$cate=I('GET.cate');
			$search=I('GET.search');
			$model=M('tao');
			$map=array(
				'end_time'	=>array('EGT',date('Y-m-d')),				
			);
			if($cate!=''&&$cate!='all'){
				$map['slug']=$cate;
			}
			if($search!=''){
				$map['goods_name']=array('like','%'.$search.'%');
			}
			$field='tao.id,goods_id,goods_name,goods_thumbnail,goods_price,coupon_link,add_time,coupon_denomination,coupon_link2,tao_link2';
			$res=$model->field($field)->where($map)->join('tao_category on tao_category.uid=tao.cate')->order('add_time desc')->limit(20)->select();

			$res=array_map(array(__CLASS__,'self_reg'), $res);
			$this->assign('res',$res);

			// 获取分类列表
			$category=$this->categorys();
			$this->assign('cate',$category);
			$this->display();
		}
		// 分页获取数据
		public function get_page(){
			$cate=I('POST.cate');
			$page=I('POST.page');
			$search=I('GET.search');
			$model=M('tao');
			$map=array(
				'end_time'	=>array('EGT',date('Y-m-d')),
			);
			if($cate!=''&&$cate!='all'){
				$map['slug']=$cate;
			}
			if($search!=''){
				$map['goods_name']=array('like','%'.$search.'%');
			}
			$field='tao.id,goods_id,goods_name,goods_thumbnail,goods_price,coupon_link,add_time,coupon_denomination,coupon_link2';
			$res=$model->field($field)->where($map)->join('tao_category on tao_category.uid=tao.cate')->order('add_time desc')->page($page,20)->select();
			$res=array_map(array(__CLASS__,'self_reg'), $res);
			if($res)
				echo message(200,'success',$res);
			else
				echo message(301,'fialed','no-data');
		}

		// 正则表达式提取优惠券面值
		private function self_reg($res){
			if($res){
				// 排除无优惠券的情况
				if($res['coupon_denomination']=='无'||$res['coupon_denomination']==''){
					$res['coupon_denomination']=0;
				}else{
					$isMatched = preg_match('/(?<=减)\d+/', $res['coupon_denomination'], $matches);
					if($isMatched)
						$res['coupon_denomination']=$matches[0];
					else{
						// 再次匹配其他的优惠券格式
						$isMatched2=preg_match('/\d+/', $res['coupon_denomination'], $matches2);
						if($isMatched2)
							$res['coupon_denomination']=$matches2[0];
					}
				}
				// 替换优惠券中的pid值	
				if($this->pid!=''){
					$res['coupon_link2']=preg_replace('/(?<=pid\=)\w+/',$this->pid, $res['coupon_link2']);	
				}	
			}
			return $res;
		}

		// api转换优惠券的淘口令
		private function tao_word($data){
			date_default_timezone_set('Asia/Shanghai'); 
			vendor('tao.TopSdk');
			$c = new \TopClient;
		    $c->appkey = '23813322';
		    $c->secretKey = 'c62c9204e3f39870d5ab9d9e20adb13d';
		    $c->format='json';
		    $c->checkRequest=false;

		    $req = new \WirelessShareTpwdCreateRequest;
		    $tpwd_param = new \GenPwdIsvParamDto;
		    $tpwd_param->ext="{\"xx\":\"xx\"}";
		    $tpwd_param->logo=$data['logo'];
		    $tpwd_param->url=$data['link'];
		    $tpwd_param->text=trim($data['title']);
		    $req->setTpwdParam(json_encode($tpwd_param));
		    $resp = $c->execute($req);
		    return $resp;
		}

		//优惠生成次数只有在点击获取的时候才会生成
		public function replace_taoword(){
			if($this->pid!=''){
				// 替换掉优惠券淘口令
				$data=array(
					'title'		=>I('POST.title'),
					'link'		=>I('POST.link'),
					'logo'		=>I('POST.logo'),
				);
				$coupon_word=($this->tao_word($data)->model);
				echo  message(200,'success',array('coupon_words'=>$coupon_word));
			}else{
				echo  message(201,'success');
			}
		}

		public function coupon(){
			$goods_id=I('GET.goods_id');
			$model=M('tao');
			$res=$model->field('goods_id,goods_name,goods_thumbnail,goods_price,coupon_denomination,coupon_word,coupon_link2')->where(array('id'=>$goods_id))->find();
			if($res){
				$res=$this->self_reg($res);
			}
			$this->assign('res',$res);
			$this->display();
		}


		// 获取分类列表
		private function categorys(){
			$model=M('tao_category');
			$res=$model->select();
			if($res)
				return $res;
			else 
				return null;
		}

		// 商品跳转中间页面
		public function goods_goto(){
			$goods_id=I('GET.goods_id');
			$ua=$_SERVER['HTTP_USER_AGENT'];
			$is_wechat=strpos($ua, 'MicroMessenger');
			if($is_wechat){
				redirect(U('coupon?goods_id='.$goods_id));
			}else{
				$model=M('tao');
				$res=$model->field('coupon_link2')->where(array('id'=>$goods_id))->find();
				redirect($res['coupon_link2']);
			}
		}

	}
?>
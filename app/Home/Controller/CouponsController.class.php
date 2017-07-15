<?php
	namespace Home\Controller;
	use Think\controller;
	class CouponsController extends BaseController{
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			date_default_timezone_set('Asia/Shanghai'); 
			vendor('tao.TopSdk');
			// 获取分类列表
			$category=$this->categorys();
			$this->assign('cate',$category);
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
			}
			return $res;
		}
	}
?>
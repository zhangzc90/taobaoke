<?php
	namespace Admin\Controller;
	use Think\Controller;
	class TaoController extends BaseController{
		private $model;
		public function __construct(){		
			parent::__construct();
			$this->model=M('tao');
		}

		public function tao_new(){
			$model=M('tao_category');
			$cate=$model->select();
			$this->assign('cate',$cate);
			$this->display();
		}
		// 数据导入操作
		public function import_data(){
			$cate=I('POST.cate');
			// 循环输出时，实时返回结果状态
			ob_end_clean();
			ob_implicit_flush(1);
			// 接收文件
			set_time_limit(0); 
			if (!empty($_FILES['file_xls']['name'])){
				$tmp_file = $_FILES ['file_xls'] ['tmp_name'];
				$file_types = explode ( ".", $_FILES ['file_xls'] ['name'] );
				$file_type = $file_types [count ( $file_types ) - 1];
				/*判别是不是.xls文件，判别是不是excel文件*/
				header("Content-type: text/html; charset=utf-8");
				if (strtolower ( $file_type ) != "xls"){
					echo '文件格式错误，请重新上传';
				}else{
					/*设置上传路径*/
					$savePath = $_SERVER['DOCUMENT_ROOT'].HOME.'upload/excel/';
					/*以时间来命名上传的文件*/
					$str=date('Ymdhis'); 
					$file_name =$str.".".$file_type;
					/*是否上传成功*/
					if (!move_uploaded_file($tmp_file,$savePath.$file_name)){
						echo '上传失败</br>';
					}else{
						echo '上传成功</br>';						
						$data=$this->get_excel($savePath.$file_name);
						$result=$this->importTodatabase($data,$cate);
						//上传完成后删除当前文件
						sleep(1);
						unlink($savePath.$file_name);
					}
				}
			}else
				echo '请选择要上传的文件';
			redirect(U('Tao/tao_new'),3, '页面跳转中...');
		}
		// 获取excel中数据
		private function get_excel($file){
			vendor('PHPExcel.PHPExcel.IOFactory');
			$fileType=\PHPExcel_IOFactory::identify($file);//获取文件类型
			$reader=\PHPExcel_IOFactory::createReader($fileType);//获取文件读取的对象
			$sheetName='Page1';
			$reader->setLoadSheetsOnly($sheetName);//加载指定的sheet
			$objExcel=$reader->load($file);
			$rows=array();//行数据集合
			$sheets=array();
			foreach ($objExcel->getWorksheetIterator() as $sheet) {//读取sheet
				foreach($sheet->getRowIterator() as $row){//读取行数据
					if($row->getRowIndex()<2)//略过第一行数据
						continue;
					$row_array=array();					
					foreach($row->getCellIterator() as $cell){
						array_push($row_array, $cell->getValue());					
					}
					array_push($rows, $row_array);
				}
				array_push($sheets, $rows);
			}
			return $sheets;
		}

		// 将excel中的数据导入到数据库中去
		private function importTodatabase($data,$cate){
			foreach ($data as $sheet) { //sheeets
				echo '<div style="line-height:1.8;font-size:12px;font-family:Microsoft YaHei;padding:10px;color:#474748;">';
				foreach ($sheet as $row) {  //行
					$map=array(
						'add_time'				=>time(),
						'goods_id'				=>$row[0],
						'goods_name'			=>$row[1],
						'goods_thumbnail'		=>$row[2],
						'goods_detail'			=>$row[3],
						'shop_name'				=>$row[4],
						'goods_price'			=>$row[5],
						'goods_sell'			=>$row[6],
						'income'				=>$row[7],
						'commission'			=>$row[8],
						'seller_name'			=>$row[9],
						'tao_link'				=>$row[10],
						'tao_link2'				=>$row[11],
						'tao_word'				=>$row[12],
						'coupon_number'			=>$row[13],
						'coupon_rest'			=>$row[14],
						'coupon_denomination'	=>$row[15],
						'start_time'			=>$row[16],
						'end_time'				=>$row[17],
						'coupon_link2'			=>$row[18],
						'coupon_word'			=>$row[19],
						'coupon_link'			=>$row[20],
						'is_marketing'			=>$row[21],
						'plan'					=>$row[22],
						'cate'					=>$cate,
					);
					$res=$this->model->add($map);
					if($res)
						echo '『'.$row[1].'』----导入成功···<br/>';
				}
				echo '</div>';
			}
		}

		// 清空失效商品
		public function tao_delete(){
			$this->display();
		}

		// 清空商品操作
		public function tao_delete_submit(){
			$map=array(
				'user_goods'	=>0,
				'end_time'		=>array('LT',date('Y-m-d')),
			);
			// 检测是否有失效的商品
			$count=$this->model->where($map)->count();
			if(!$count){
				echo message(305,'no-data','当前无可清理的失效商品');
				return;
			}
			// 开启事务
			$this->model->startTrans();
			// 插入到log中去
			$mlog=M('tao_logs');
			$insert=$mlog->addAll($this->model->where($map)->select());

			// 删除数据
			$res=$this->model->where($map)->delete();
			if($insert&&$res){
				$this->model->commit();
				echo message(200,'success','清理成功');
			}else{
				$this->model->rollback();
				echo message(301,'failed','清理失败');
			}
		}

		// 批量导入的商品列表
		public function tao_list(){
			$search=I('GET.search');
			$p=I('GET.p');
			$map=array(
				'user_goods'	=>0,				
			);
			if($search!='')
				$map['goods_name']=array('LIKE','%'.$search.'%');
			
			$field='id,goods_thumbnail,goods_name,goods_detail,goods_price,income,commission,tao_link,coupon_number,coupon_denomination,coupon_link,start_time,end_time,add_time';
			$res=$this->model->field($field)->where($map)->page($p,30)->order('add_time desc')->select();

			$count=$this->model->where($map)->count();
			$page=new \Think\Page($count,30);
			if($res)
				$this->assign('list',array('data'=>$res,'page'=>$page->show()));
			else
				$this->assign('list',null);
			$this->display();
		}
		// 后台删除单个的商品
		public function tao_list_delete(){
			$uid=I('POST.uid');
			$mlog=M('tao_logs');
			// 开启实务
			$this->model->startTrans();
			$temp=$this->model->where(array('id'=>$uid))->find();
			$insert=$mlog->add($temp);
			$res=$this->model->where(array('id'=>$uid))->delete();
			if($insert&&$temp&&$res){
				$this->model->commit();
				echo message(200,'success','删除成功');
			}
			else{
				$this->model->rollback();
				echo message(301,'failed','删除失败');
			}
		}

		// 已删除的商品列表
		public function tao_delete_list(){
			$p=I('GET.p');
			$map=array(
				'user_goods'	=>0,				
			);
			$model=M('tao_logs');
			$field='id,goods_thumbnail,goods_name,goods_detail,goods_price,income,commission,tao_link,coupon_number,coupon_denomination,coupon_link,start_time,end_time,add_time';
			$res=$model->field($field)->where($map)->page($p,30)->select();

			$count=$model->where($map)->count();
			$page=new \Think\Page($count,30);
			if($res)
				$this->assign('list',array('data'=>$res,'page'=>$page->show()));
			else
				$this->assign('list',null);
			$this->display();
		}	
	}
?>
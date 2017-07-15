<?php
	namespace Home\Controller;
	use Think\Controller;
	class BaseController extends Controller{
		public function __construct(){
			parent::__construct();

			$model=D('Option');
			$result=$model->get_data(array('option_name'=>'basic_option'));
			$base_info=unserialize($result['option_value']);
			$this->assign('base_info',$base_info);
		}

		// 时间格式转换
		public function Bdate_format($date){
			$model=D('Option');
			$result=$model->get_data(array('option_name'=>'date_format'));
			$date_type=$result['option_value'];
			$return_date='';
			if($date_type=='hommization'){
				//这里输出的是人性化的时间格式的转换结果 
				 $object=new \Org\Util\Date();
				 $return_date=$object->timeDiff($date);
			}else{
				$date_array=explode('|',$date_type);
				$return_date=date($date_array[0].' '.$date_array[1],$date);
			}
			return $return_date;
		}
	}
?>
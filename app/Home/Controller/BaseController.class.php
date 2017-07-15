<?php
	namespace Home\Controller;
	use Think\Controller;
	class BaseController extends Controller{
		protected $pid;
		public function __construct(){
			parent::__construct();
			// 获取用户的PID
			$uid=I('GET.uid');
			$this->pid=$this->get_pid($uid);
			$this->assign('uid',$uid);

			// 设置项
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

		// 获取用户PID
		protected function get_pid($uid){
			$model=M('tao_users');
			$res=$model->where(array('uid'=>$uid,'enable'=>1))->find();
			if($res)
				return $res['pid'];
			else
				return null;
		}
	}
?>
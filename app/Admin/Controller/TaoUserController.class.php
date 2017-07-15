<?php
	namespace Admin\Controller;
	use Think\Controller;
	class TaoUserController extends BaseController{
		private $model;
		public function __construct(){
			parent::__construct();
			$this->model=M('tao_users');
		}

		public function user_list(){
			$p=I('GET.p');
			$res=$this->model->page($p,50)->order('enable desc')->select();

			$count=$this->model->count();
			$page=new \Think\Page($count,50);
			
			$this->assign('list',array('data'=>$res,'page'=>$page->show()));
			$this->display();
		}

		public function user_new(){
			$uid=I('GET.uid');
			$res=$this->model->where(array('uid'=>$uid))->find();
			$this->assign('user',$res);
			$this->display();
		}

		public function user_new_post(){
			$data=I('POST.');
			$data['time']=time();
			if($data['uid']==''){
				$res=$this->model->add($data);
			}else{
				$res=$this->model->where(array('uid'=>$data['uid']))->save($data);
			}	
			if($res)
				echo message(200,'success','提交成功');
			else
				echo message(301,'failed','提交失败');
		}
	}
?>
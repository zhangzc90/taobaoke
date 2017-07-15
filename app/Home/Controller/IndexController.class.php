<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
	public function __construct(){
		parent::__construct();		
	}
    public function index(){
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

}
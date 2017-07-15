<?php
	namespace Home\Controller;
	use Think\Controller;
	class TopicController extends BaseController{
		public function __construct(){
			parent::__construct();
		}
		// 新闻列表页面
		public function index(){
			$data=I('GET.');
			$model=D('Archive');
			// 查询条件
			$map=array(
				// 未删除状态
				'post_type_delete'	=>'open',
				// 处于发布状态
				'post_status'		=>'publish',
			);

			// 对于分类或标签的查询区分
			if(isset($data['category'])){
				$slug=$data['category'];
				// $map['term_taxonomy']='category';
				// 查询出来对应的分类的ID
				$model_term=D('Terms');
				$term=$model_term->get_term_byID(array('slug'=>$slug));
				if($term['term_id'])
					$map['term_taxonomy_id']=$term['term_id'];

				$join='w_term_relationship on w_term_relationship.object_id=w_post.ID';				
			}else if(isset($data['tag'])){
				$slug=$data['tag'];
				// $map['term_taxonomy']='post_tag';

				// 查询出来对应的分类的ID
				$model_term=D('Terms');
				$term=$model_term->get_term_byID(array('slug'=>$slug));
				if($term['term_id'])
					$map['term_taxonomy_id']=$term['term_id'];
				
				$join='w_term_relationship on w_term_relationship.object_id=w_post.ID';
			}
			
			// 要显示的数据
			$field='w_post.ID as id,post_date,post_title,post_thumbnail,post_describe,post_seqencing,user_nickname,post_status,w_users.ID as userid';
			// 排序
			$sort='post_seqencing desc,post_date desc';

			$list=$model->posts_list($map,$data['p'],$join,$sort,$field,$total=5);

			// 读取分类文章对应的分类
			$list['list']=array_map(array(__CLASS__,'call_taxonomy'),$list['list']);
			$this->assign('list',$list);
					
			// 获取分类和标签列表
			$terms=$this->get_terms();
			$this->assign('terms',$terms);
			$this->display();
		}

		// 文章页面
		public function archive(){
			$arc_id=I('GET.uid');
			$model=D('Archive');
			// 显示的是文章
			$field='w_post.*,user_nickname';
			$join='w_users on w_users.ID=w_post.post_author';
			$result=$model->post_single(array('w_post.ID'=>$arc_id,'post_status'=>'publish','post_type_delete'=>'open'),$field,$join);
			// 转换内容
			$result['post_content']=htmlspecialchars_decode($result['post_content']);
			// 转换时间
			$result['post_date']=$this->Bdate_format((int)$result['post_date']);
			$this->assign('archive',$result);
			// 获取分类属性
			$model=D('Relation');
			// 文章的分类
			$selected_cate=$model->get_relations(array('object_id'=>$arc_id,'tag_or_category'=>'category'));
			// 文章的标签
			$selected_tag=$model->get_relations(array('object_id'=>$arc_id,'tag_or_category'=>'tag'),'*','w_term on w_term.term_id=w_term_relationship.term_taxonomy_id');
			$this->assign('selected_cate',$selected_cate);
			$this->assign('selected_tag',$selected_tag);

			$this->display();
		}

		// 获取所有的分类和标签
		private function get_terms(){
			$model=D('Terms');
			$category=$model->get_terms(array('term_taxonomy'=>'category'));
			$tags=$model->get_terms(array('term_taxonomy'=>'post_tag'));
			return array('category'=>$category,'tags'=>$tags);
		}

		// 回调函数找出对应的分类信息与标签信息
		private function call_taxonomy($param){
			if($param){
				// 时间格式转换
				$param['post_date']=$this->Bdate_format((int)$param['post_date']);
				// 查找分类与标签
				$id=$param['ID']!=null?$param['ID']:$param['id'];
				$model=D('Relation');
				$category=$model->get_relations(array('object_id'=>$id,'tag_or_category'=>'category'),'term_id,name,term_taxonomy','join w_term on w_term.term_id=w_term_relationship.term_taxonomy_id');
				if($category)
					$param['category']=$category;	
				// 获取
				$tags=$model->get_relations(array('object_id'=>$id,'tag_or_category'=>'tag'),'term_id,name,term_taxonomy','join w_term on w_term.term_id=w_term_relationship.term_taxonomy_id');
				if($tags)
					$param['tags']=$tags;
			}
			return $param;
		}
	}
?>
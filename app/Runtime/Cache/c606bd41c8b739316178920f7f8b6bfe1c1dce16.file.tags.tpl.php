<?php /* Smarty version Smarty-3.1.6, created on 2017-06-10 11:23:52
         compiled from "./ThemeAdmin/default\Archive\tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28794593b664817c801-56204151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c606bd41c8b739316178920f7f8b6bfe1c1dce16' => 
    array (
      0 => './ThemeAdmin/default\\Archive\\tags.tpl',
      1 => 1487573644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28794593b664817c801-56204151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'id' => 0,
    'userlevel' => 0,
    'tags' => 0,
    'item' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_593b66486235e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593b66486235e')) {function content_593b66486235e($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userlevel']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('username'=>$_tmp1,'id'=>$_tmp2,'level'=>$_tmp3,'title'=>'标签'), 0);?>

<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-tags"></i> 标签</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="<?php echo @ADMIN;?>
">首页</a></li>
				<li><i class="fa fa-tags"></i>标签</li>	
			</ol>
		</div>
		<div class='col-md-12'>
			<div class='error_report'>
				错误：
				<span class='text-danger'></span>
			</div>
		</div>
	</div>
	<div class='row'>
		<div class='col-md-5'>
			<h4>添加新标签</h4>
			<br>
			<div class='form'>
				<div class='form-group'>
					<label>名称</label>
					<input id='termname' type='text' class='form-control'>
					<div class='help-block'>这将是它在站点上显示的名字。</div>
				</div>
				<div class='form-group'>
					<label>别名</label>
					<input id='termslug' type='text' class='form-control'>
					<div class='help-block'>“别名”是在URL中使用的别称，它可以令URL更美观。通常使用小写，只能包含字母，数字和连字符（-）。</div>
				</div>
				<button id='tag_new' class='btn btn-danger'>添加新标签</button>
			</div>
		</div>
		<div class='col-md-7'>
			<div class='category form-inline'>
				<div class='form-group'>
					<select id='handle_type' class='form-control'>
						<option value='none'>批量操作</option>
						<option value='delete'>删除</option>
					</select>
					<button id='delete_tags' class='btn btn-sm btn-default' data-d='delete_all'>应用</button>
				</div>
			</div>
			<div class='panel panel-default'>
				<div class='panel-body'>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>
									<input id='select_all' type='checkbox'>
								</th>
								<th class='th_second'>名称</th>
								<th>别名</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
								<tr>
									<td><input class='checkbox' type='checkbox' data-uid="<?php echo $_smarty_tpl->tpl_vars['item']->value['term_id'];?>
"></td>
									<td>
										<a href="tags_edit.html?tag_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['term_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
										<div class='handle'>
											<a href="tags_edit.html?tag_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['term_id'];?>
">编辑</a>
											<span class='grey'>|</span>
											<a class='delete_tag danger' href="javascript:void(0);" data-uid="<?php echo $_smarty_tpl->tpl_vars['item']->value['term_id'];?>
">删除</a>
											<span class='grey'>|</span>
											<a href="#">查看</a>
										</div>
									</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<div class='text-right'>
						<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo @THEMEADMIN;?>
assets/css/public.css">
<link rel="stylesheet" type="text/css" href="<?php echo @THEMEADMIN;?>
assets/css/category.css">
<script type="text/javascript" src='<?php echo @JS;?>
ajax.js'></script>
<script type="text/javascript" src='<?php echo @THEMEADMIN;?>
assets/js/terms.js'></script>
<script type="text/javascript">
	$(function(){
		$('#select_all').click(function(){
			var this_check=$(this).prop('checked');
			if(this_check)
				$('.checkbox').prop('checked',true);
			else
				$('.checkbox').prop('checked',false);
			$(':disabled').prop('checked',false);
		});
	});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
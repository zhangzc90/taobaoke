<?php /* Smarty version Smarty-3.1.6, created on 2017-06-28 10:36:00
         compiled from "./ThemeAdmin/default\Tao\tao_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10574593b6532afbb86-16956130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3dfa39ad04d91464828b4d686a22a0b7cc35dba' => 
    array (
      0 => './ThemeAdmin/default\\Tao\\tao_new.tpl',
      1 => 1498617358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10574593b6532afbb86-16956130',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_593b6532b707f',
  'variables' => 
  array (
    'userlevel' => 0,
    'username' => 0,
    'id' => 0,
    'cate' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593b6532b707f')) {function content_593b6532b707f($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userlevel']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'淘宝客商品添加','level'=>$_tmp1,'username'=>$_tmp2,'id'=>$_tmp3), 0);?>

<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-plus-square"></i> 添加商品</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="<?php echo @ADMIN;?>
">首页</a></li>
				<li><i class="fa fa-plus-square"></i>添加商品</li>	
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
		<div class='col-md-12'>
			<div class='panel panel-default'>
				<div class='panel-body'>
					<form class='form-horizontal' action='import_data' method='post' enctype="multipart/form-data">
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>选择要导入的分类</label>
							<div class='col-md-6 col-xs-12'>
								<select class='form-control' name='cate'>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
										<option value='<?php echo $_smarty_tpl->tpl_vars['item']->value["uid"];?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
									<?php } ?>
								</select>
								<div class='help-block'>*勾选全部商品时默认为无分类*</div>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>选择文件</label>
							<div class='col-md-6 col-xs-12'>
								<input name='file_xls' type='file' class='form-control' >
							</div>
							<div>
								<input id='submit' class='btn btn-danger' type='submit' value='提交'>
							</div>
						</div>
					</form>
					<div>
						<img style='width:100%;' src="<?php echo @THEMEADMIN;?>
assets/img/example.png">
						<div class='help-block'>
							*请遵循以上表格字段进行导入操作*
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo @THEMEADMIN;?>
assets/css/public.css">

<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2017-06-28 10:38:30
         compiled from "./ThemeAdmin/default\Tao\tao_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2786359412375c2fc58-36291995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cadd62e3d4675c64bd8fe49dd82f6a773382c3f' => 
    array (
      0 => './ThemeAdmin/default\\Tao\\tao_delete.tpl',
      1 => 1498099449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2786359412375c2fc58-36291995',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59412375d8a35',
  'variables' => 
  array (
    'userlevel' => 0,
    'username' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59412375d8a35')) {function content_59412375d8a35($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userlevel']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'删除失效商品','level'=>$_tmp1,'username'=>$_tmp2,'id'=>$_tmp3), 0);?>

<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-motorcycle"></i> 一键清空失效商品</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="<?php echo @ADMIN;?>
">首页</a></li>
				<li><i class="fa fa-motorcycle"></i>一键清空失效商品</li>	
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
					<div class='form-horizontol'>
						<div class='form-group'>
							<label class='col-md-2 col-xs-12'>清空失效条目</label>
							<div class='col-md-6 col-xs-12'>
								<button id='crash' class='btn btn-danger'>清空失效商品</button>
								<div class='help-block'>
									*本操作将会清空所有已过期优惠券,请谨慎选择，删除后不可恢复！
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo @THEMEADMIN;?>
assets/css/public.css">
<script type="text/javascript" src='<?php echo @JS;?>
ajax.js'></script>
<script type="text/javascript" src='<?php echo @THEMEADMIN;?>
assets/js/tao.js'></script>
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
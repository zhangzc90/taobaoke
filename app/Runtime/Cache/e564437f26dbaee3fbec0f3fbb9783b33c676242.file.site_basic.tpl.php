<?php /* Smarty version Smarty-3.1.6, created on 2017-06-10 11:23:57
         compiled from "./ThemeAdmin/default\Option\site_basic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7304593b664d17b822-50630610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e564437f26dbaee3fbec0f3fbb9783b33c676242' => 
    array (
      0 => './ThemeAdmin/default\\Option\\site_basic.tpl',
      1 => 1488163976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7304593b664d17b822-50630610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'id' => 0,
    'userlevel' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_593b664d41cd2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593b664d41cd2')) {function content_593b664d41cd2($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userlevel']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('username'=>$_tmp1,'id'=>$_tmp2,'level'=>$_tmp3,'title'=>'基本参数设置'), 0);?>

<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-asterisk"></i> 基本参数设置</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="<?php echo @ADMIN;?>
">首页</a></li>
				<li><i class="fa fa-asterisk"></i>基本参数设置</li>	
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
					<div class='form-horizontal'>
						<input id='s_id' type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> 
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>网站名称</label>
							<div class='col-md-6 col-xs-12'>
								<input id='name' type='text' class='form-control' value="<?php echo $_smarty_tpl->tpl_vars['val']->value['site_name'];?>
">
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>关键词(keywords)</label>
							<div class='col-md-6 col-xs-12'>
								<input id='keywords' type='text' class='form-control' value="<?php echo $_smarty_tpl->tpl_vars['val']->value['keywords'];?>
">
							</div>
							<div class='help-block'>多个关键词请用英文逗号‘,’隔开</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>描述(desciption)</label>
							<div class='col-md-6 col-xs-12'>
								<textarea id='describe' class='form-control' rows="5" style='resize:none;'><?php echo $_smarty_tpl->tpl_vars['val']->value['describe'];?>
</textarea>
							</div>	
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>备案号</label>
							<div class='col-md-6 col-xs-12'>
								<input id='record' type='text' class='form-control' value="<?php echo $_smarty_tpl->tpl_vars['val']->value['record'];?>
">
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>底部版权信息</label>
							<div class='col-md-6 col-xs-12'>
								<input id='copyright' type='text' class='form-control' value="<?php echo $_smarty_tpl->tpl_vars['val']->value['copyright'];?>
">
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>统计代码</label>
							<div class='col-md-6 col-xs-12'>
								<textarea id='code' class='form-control' rows='5' style='resize:none;'><?php echo $_smarty_tpl->tpl_vars['val']->value['code'];?>
</textarea>
							</div>
							<div class='help-block'>目前仅支持第三方的统计代码</div>
						</div>
						<button id='site_submit' class='btn btn-danger'>更新</button>
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
assets/js/option.js'></script>
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
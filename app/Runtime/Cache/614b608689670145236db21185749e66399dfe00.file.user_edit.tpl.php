<?php /* Smarty version Smarty-3.1.6, created on 2017-05-17 18:09:33
         compiled from "./ThemeAdmin/default\User\user_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6101591c215d694234-58484252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '614b608689670145236db21185749e66399dfe00' => 
    array (
      0 => './ThemeAdmin/default\\User\\user_edit.tpl',
      1 => 1487315426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6101591c215d694234-58484252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'id' => 0,
    'userlevel' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_591c215da12fa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c215da12fa')) {function content_591c215da12fa($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userlevel']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('username'=>$_tmp1,'id'=>$_tmp2,'level'=>$_tmp3,'title'=>'用户编辑'), 0);?>

<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-pencil-square-o"></i> 用户编辑</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="<?php echo @ADMIN;?>
">首页</a></li>
				<li><i class="fa fa-pencil-square-o"></i>用户编辑</li>
			</ol>
		</div>
	</div>
	<div class='row'>
		<div class='col-md-12'>
			<div class='error_report'>
				错误：
				<span class='text-danger'>错误提示</span>
			</div>
		</div>
		<div class='col-md-12'>
			<div class='panel panel-default'>
				<div class='panel-body'>
					<input id='user_id' type='hidden' value='<?php echo $_GET['id'];?>
'>
					<div class='form-horizontal'>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12 control-label'>用户名</label>
							<div class='col-md-6 col-xs-12'>
								<input type='text' class='form-control' value='<?php echo $_smarty_tpl->tpl_vars['info']->value["user_login"];?>
' disabled="true">
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12 control-label'>用户昵称</label>
							<div class='col-md-6 col-xs-12'>
								<input id='username' type='text' class='form-control' value='<?php echo $_smarty_tpl->tpl_vars['info']->value["user_nickname"];?>
'>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12 control-label'>电子邮件</label>
							<div class='col-md-6 col-xs-12'>
								<input id='useremail' type='email' class='form-control' value='<?php echo $_smarty_tpl->tpl_vars['info']->value["user_email"];?>
'>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12 control-label'>角色</label>
							<div class='col-md-6 col-xs-12'>
								<select id='user_role' class='form-control'>
									<option value='general' <?php if ($_smarty_tpl->tpl_vars['info']->value['w_user_level']==1){?>selected="true"<?php }?>>普通</option>
									<option value='super' <?php if ($_smarty_tpl->tpl_vars['info']->value['w_user_level']==9){?>selected="true"<?php }?>>管理员</option>
								</select>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12 control-label'>状态</label>
							<div class='col-md-6 col-xs-12'>
								<select id='userstatus' class='form-control'>
									<option value='forbidden' <?php if ($_smarty_tpl->tpl_vars['info']->value['user_status']==0){?>selected="true"<?php }?>>禁用</option>
									<option value='normal' <?php if ($_smarty_tpl->tpl_vars['info']->value['user_status']==1){?>selected="true"<?php }?>>正常</option>
								</select>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12 control-label'>密码重置</label>
							<div class='col-md-6 col-xs-12'>
								<button id='reset_pass' class='btn btn-info'>重置当前用户密码</button>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12 control-label'>注册时间</label>
							<div class='col-md-6 col-xs-12'>
								<span class='text-default'></span>
							</div>
						</div>
						<button id='user_edit' class='btn btn-danger'>更新用户信息</button>
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
assets/js/users.js'></script>
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
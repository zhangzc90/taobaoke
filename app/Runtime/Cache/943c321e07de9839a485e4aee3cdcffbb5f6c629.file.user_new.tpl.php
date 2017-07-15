<?php /* Smarty version Smarty-3.1.6, created on 2017-07-07 11:05:35
         compiled from "./ThemeAdmin/default\TaoUser\user_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114225957559ab19320-82687523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '943c321e07de9839a485e4aee3cdcffbb5f6c629' => 
    array (
      0 => './ThemeAdmin/default\\TaoUser\\user_new.tpl',
      1 => 1499396727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114225957559ab19320-82687523',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5957559ad66f2',
  'variables' => 
  array (
    'userlevel' => 0,
    'username' => 0,
    'id' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957559ad66f2')) {function content_5957559ad66f2($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userlevel']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'淘宝客用户添加','level'=>$_tmp1,'username'=>$_tmp2,'id'=>$_tmp3), 0);?>

<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-plus-square-o"></i> 淘宝客用户添加</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="<?php echo @ADMIN;?>
">首页</a></li>
				<li><i class="fa fa-plus-square-o"></i>淘宝客用户添加</li>	
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
						<div class='form-group'>
							<input id='uid' type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['user']->value['uid'];?>
">
							<label class='col-md-1 col-xs-12'>姓名</label>
							<div class='col-md-6 col-xs-12'>
								<input id='name' class='form-control' type='text' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["name"];?>
'>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>个性域名</label>
							<div class='col-md-6 col-xs-12'>
								<input id='domain' class='form-control' type='text' disabled="" value='<?php echo $_smarty_tpl->tpl_vars['user']->value["domain"];?>
'>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>联系方式</label>
							<div class='col-md-6 col-xs-12'>
								<input id='tel' class='form-control' type='text' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["tel"];?>
'> 
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>邮箱</label>
							<div class='col-md-6 col-xs-12'>
								<input id='email' class='form-control' type='text' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["email"];?>
'>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>PID</label>
							<div class='col-md-6 col-xs-12'>
								<input id='pid' class='form-control' type='text' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["pid"];?>
'>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>状态</label>
							<div class='col-md-6 col-xs-12'>
								<div class='radio'>
									<label>
										<input class='status' type='radio' name='status'  <?php if ($_smarty_tpl->tpl_vars['user']->value['enable']==0){?>checked<?php }?> value='0'>禁用
									</label>
									<label>
										<input class='status' type='radio' name='status' value='1' <?php if ($_smarty_tpl->tpl_vars['user']->value['enable']==1){?>checked<?php }?>>启用
									</label>
								</div>
								<div class='button'><br>
									<button id='submit' class='btn btn-danger'>提交</button>
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
assets/js/tao_user.js'></script>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
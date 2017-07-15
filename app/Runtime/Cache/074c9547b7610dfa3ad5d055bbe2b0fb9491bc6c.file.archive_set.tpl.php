<?php /* Smarty version Smarty-3.1.6, created on 2017-06-10 11:23:53
         compiled from "./ThemeAdmin/default\Option\archive_set.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16427593b66497ab582-15310436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '074c9547b7610dfa3ad5d055bbe2b0fb9491bc6c' => 
    array (
      0 => './ThemeAdmin/default\\Option\\archive_set.tpl',
      1 => 1488784554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16427593b66497ab582-15310436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'id' => 0,
    'userlevel' => 0,
    'date_format' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_593b6649df8c9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593b6649df8c9')) {function content_593b6649df8c9($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp64\\www\\taobaoke\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userlevel']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('username'=>$_tmp1,'id'=>$_tmp2,'level'=>$_tmp3,'title'=>'文章设置'), 0);?>

<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-gear"></i> 文章设置</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="<?php echo @ADMIN;?>
">首页</a></li>
				<li><i class="fa fa-gear"></i>文章设置</li>	
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
							<label class='col-md-1 col-xs-12'>日期格式</label>
							<div class='col-md-11 col-xs-12'>
								<label>
									<span class='date_text'><input type='radio' name='date_radio' value='Y年m月d日' <?php if ($_smarty_tpl->tpl_vars['date_format']->value[0]=='Y年m月d日'){?>checked<?php }?>> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,'%Y年%m月%d日');?>
</span>
									<code>Y年m月d日</code>
								</label><br><br>
								<label>
									<span class='date_text'><input type='radio' name='date_radio' value='Y-m-d' <?php if ($_smarty_tpl->tpl_vars['date_format']->value[0]=='Y-m-d'){?>checked<?php }?>> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,'%Y-%m-%d');?>
</span>
									<code>Y-m-d</code>
								</label><br><br>
								<label>
									<span class='date_text'><input type='radio' name='date_radio' value='m/d/Y' <?php if ($_smarty_tpl->tpl_vars['date_format']->value[0]=='m/d/Y'){?>checked<?php }?>> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,'%m/%d/%Y');?>
</span>
									<code>m/d/Y</code>
								</label><br><br>
								<label>
									<span class='date_text'><input type='radio' name='date_radio' value='d/m/Y' <?php if ($_smarty_tpl->tpl_vars['date_format']->value[0]=='d/m/Y'){?>checked<?php }?>> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,'%d/%m/%Y');?>
</span>
									<code>d/m/Y</code>
								</label>
							</div>
						</div>
						<br>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>时间格式</label>
							<div class='col-md-11 col-xs-12'>
								<label>
									<span class='date_text'><input type='radio' name='time_radio' value='A h:i' <?php if ($_smarty_tpl->tpl_vars['date_format']->value[1]=='A h:i'){?>checked<?php }?>> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,'%p %I:%M');?>
</span>
									<code>A h:i</code>
								</label><br><br>
								<label>
									<span class='date_text'><input type='radio' name='time_radio' value='h:i A' <?php if ($_smarty_tpl->tpl_vars['date_format']->value[1]=='h:i A'){?>checked<?php }?>> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,'%I:%M %p');?>
</span>
									<code>h:i A</code>
								</label><br><br>
								<label>
									<span class='date_text'><input type='radio' name='time_radio' value='H:i' <?php if ($_smarty_tpl->tpl_vars['date_format']->value[1]=='H:i'){?>checked<?php }?>> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,'%H:%M');?>
</span>
									<code>H:i</code>
								</label><br><br>
								<label>
									<span class='date_text'><input type='radio' name='time_radio' value='H:i:s' <?php if ($_smarty_tpl->tpl_vars['date_format']->value[1]=='H:i:s'){?>checked<?php }?>> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,'%H:%M:%S');?>
</span>
									<code>H:i:s</code>
								</label><br><br>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>特殊格式</label>
							<div class='col-md-11 col-xs-12'>
								<label>
									<span class='date_text'>
										<input type='radio' name='hommization' value='hommization' <?php if ($_smarty_tpl->tpl_vars['date_format']->value=='hommization'){?>checked<?php }?>>
										人性化显示
									</span>
								</label><br><br>
							</div>
						</div>
						<button id='arc_save' class='btn btn-danger'>保存更改</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo @THEMEADMIN;?>
assets/css/public.css">
<link rel="stylesheet" type="text/css" href="<?php echo @THEMEADMIN;?>
assets/css/archive.css">
<script type="text/javascript" src='<?php echo @JS;?>
ajax.js'></script>
<script type="text/javascript" src='<?php echo @THEMEADMIN;?>
assets/js/option.js'></script>
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
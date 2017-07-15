<?php /* Smarty version Smarty-3.1.6, created on 2017-07-07 11:55:23
         compiled from "./ThemeAdmin/default\Archive\post_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14427595f062bd84fa1-74765439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd072e309c47e1a049094d351a2c7a0d229546199' => 
    array (
      0 => './ThemeAdmin/default\\Archive\\post_view.tpl',
      1 => 1487994206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14427595f062bd84fa1-74765439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_595f062bf1789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595f062bf1789')) {function content_595f062bf1789($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp64\\www\\taobaoke\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
	<title>文章预览-<?php echo $_smarty_tpl->tpl_vars['result']->value['post_title'];?>
</title>
	<meta charset='utf-8'>
	<style type="text/css">
		body{
			padding: 0;
			margin: 0;
			font-family: -apple-system, "Helvetica Neue", Arial, "PingFang SC", "lucida grande", "lucida sans unicode", lucida, helvetica, "Hiragino Sans GB", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;
			color: #9a999e;
			background-color: #F3F3F3;
		}
		.container{
			width:960px;
			margin: 0 auto;
			background-color: #ffffff;
			padding: 15px 20px;
		}
		.describe{
			font-size: 13px;
			border:1px solid #c5c5c5;
			padding: 10px;
			background-color: #fff;
		}
		.date{
			padding: 10px 0;
			font-size: 13px;
		}
	</style>
</head>
<body>
	<div class='container'>
		<div class='title'>
			<h3><?php echo $_smarty_tpl->tpl_vars['result']->value['post_title'];?>
</h3>
		</div>
		<div class='date'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['result']->value['post_date'],'%Y-%m-%d %H:%M:%S');?>
</div>
		<div class='describe'>
			<?php echo $_smarty_tpl->tpl_vars['result']->value['post_describe'];?>

		</div>
		<div class='body'>
			<?php echo $_smarty_tpl->tpl_vars['result']->value['post_content'];?>

		</div>
	</div>
</body>
</html><?php }} ?>
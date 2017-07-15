<?php /* Smarty version Smarty-3.1.6, created on 2017-07-07 16:47:58
         compiled from "./Theme/default\Topic\archive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16481595f44df347501-72714863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3c4e4dbda74eef5e7c3e6b19cda586e6de61240' => 
    array (
      0 => './Theme/default\\Topic\\archive.tpl',
      1 => 1499417276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16481595f44df347501-72714863',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_595f44df4837f',
  'variables' => 
  array (
    'archive' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595f44df4837f')) {function content_595f44df4837f($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>($_smarty_tpl->tpl_vars['archive']->value['post_title'])), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo @THEME;?>
assets/css/topic.css">
<div class='container'>
	<!-- banner -->
	<div class='thumbnail'>
		<img src="<?php echo @HOME;?>
<?php echo $_smarty_tpl->tpl_vars['archive']->value['post_thumbnail'];?>
">
	</div>
	<!-- 标题 -->
	<div class='title'>
		<h3><?php echo $_smarty_tpl->tpl_vars['archive']->value['post_title'];?>
</h3>
	</div>
	<!-- 发布时间作者 -->
	<div class='time'>
		<div class='time-flex'><?php echo $_smarty_tpl->tpl_vars['archive']->value['post_date'];?>
发布</div>
		<div class='author'><?php echo $_smarty_tpl->tpl_vars['archive']->value['user_nickname'];?>
</div>
	</div>
	<!-- 内容 -->
	<div class='content'>
		<?php echo $_smarty_tpl->tpl_vars['archive']->value['post_content'];?>

	</div>
	<div class='footer'>@好物推荐</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
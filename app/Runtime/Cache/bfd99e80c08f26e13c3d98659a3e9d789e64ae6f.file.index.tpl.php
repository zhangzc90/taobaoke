<?php /* Smarty version Smarty-3.1.6, created on 2017-07-07 16:17:58
         compiled from "./Theme/default\Topic\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30524595f2d79bad9d8-74033859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfd99e80c08f26e13c3d98659a3e9d789e64ae6f' => 
    array (
      0 => './Theme/default\\Topic\\index.tpl',
      1 => 1499415475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30524595f2d79bad9d8-74033859',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_595f2d79c4279',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595f2d79c4279')) {function content_595f2d79c4279($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'好物推荐'), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo @THEME;?>
assets/css/topic.css">
<div class='container'>
	<!-- banner -->
	<div class='thumbnail'>
		<img src="http://img03.liwushuo.com/image/150403/pathnthpk.jpg-w720">
	</div>
	<!-- 标题 -->
	<div class='title'>
		<h3>2017大学新生入学指南】有了这些，宿舍才像家</h3>
	</div>
	<!-- 发布时间作者 -->
	<div class='time'>
		<div class='time-flex'>26小时前发布</div>
		<div class='author'>好物君</div>
	</div>
	<!-- 内容 -->
	<div class='content'>

	</div>
	<div class='footer'>@好物推荐</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
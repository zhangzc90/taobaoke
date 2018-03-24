<?php /* Smarty version Smarty-3.1.6, created on 2017-08-23 10:29:56
         compiled from "./Theme/default/Index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2006620591599ce8a4df46c3-19805608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf9aa5c3b44c818f53b4ab3ee84b5ff554443b61' => 
    array (
      0 => './Theme/default/Index/index.tpl',
      1 => 1501638658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2006620591599ce8a4df46c3-19805608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cate' => 0,
    'key' => 0,
    'uid' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_599ce8a4e819e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599ce8a4e819e')) {function content_599ce8a4e819e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'淘宝严选'), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo @THEME;?>
assets/css/index.css">
<div class='container'>
	<div class='search'>
		<form action='javascript:search();' method='GET'>
			<input class='search_text' type='search' placeholder='好物搜索'>
		</form>
	</div>
	<!-- menu -->
	<div class="menu swiper-container">
        <div class="swiper-wrapper">
           <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
           		<?php if ($_smarty_tpl->tpl_vars['key']->value>0){?>
           		 <div class="swiper-slide">
	            	<a  href="<?php echo @HOME;?>
coupon/index.html?<?php if ($_smarty_tpl->tpl_vars['uid']->value!=''){?>uid=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
&<?php }?>cate=<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
	            </div>
	            <?php }?>
           <?php } ?>
        </div>
    </div>
	<div class="banner swiper-container">
        <div class="swiper-wrapper">
			<div class="swiper-slide">
				<a  href="#">
					<img src="<?php echo @THEME;?>
assets/img/201323023231.png">
				</a>
			</div>
        </div>
    </div>
	<div class='tips'>
		<div class='flex'>
			<div class='text t1'>30天无忧退货</div>
		</div>
		<div class='flex'>
			<div class='text t2'>淘宝合作平台</div>
		</div>
		<div class='flex'>
			<div class='text t3'>48小时快速退款</div>
		</div>
	</div>
	<div class='content'>
		<div class='item'>
			<img src="<?php echo @THEME;?>
assets/img/Fig_LXTm-3vzDRVVbBiWsTPm6LOw.jpg">
		</div>
		<div class='item'>
			<img src="<?php echo @THEME;?>
assets/img/FoEcWaH5I5pvVANVQ7coKjjGkNcm.jpg">
		</div>
		<div class='item'>
			<img src="<?php echo @THEME;?>
assets/img/FoLajQfXmqPzRg23YyWqcPxrFbD-.jpg">
		</div>
		<div class='item'>
			<img src="<?php echo @THEME;?>
assets/img/For0xqvz-BwlS4i5ojkl1Ss1yfdr.jpg">
		</div>
		<div class='item'>
			<img src="<?php echo @THEME;?>
assets/img/Fsip_SYt0iVsyyTuMHMBT4Vuq4Qa.jpg">
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo @ORG;?>
swiper/swiper-3.4.2.min.css">
<script type="text/javascript" src='<?php echo @ORG;?>
swiper/swiper-3.4.2.min.js'></script>
<script type="text/javascript" src='<?php echo @THEME;?>
assets/js/index.js'></script>
<input id='uid' type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
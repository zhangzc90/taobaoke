<?php /* Smarty version Smarty-3.1.6, created on 2017-07-03 16:20:28
         compiled from "./Theme/default\Coupon\coupon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19593a53ebc22e96-94406655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64b98df75aca9117fa2230ad9978a41867727b89' => 
    array (
      0 => './Theme/default\\Coupon\\coupon.tpl',
      1 => 1499070026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19593a53ebc22e96-94406655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_593a53ebcd12a',
  'variables' => 
  array (
    'res' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593a53ebcd12a')) {function content_593a53ebcd12a($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo @THEME;?>
assets/css/detail.css">
<div class='container'>
	<input id='goods-id' type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['res']->value['goods_id'];?>
">
	<div class='thumbnail'>
		<div class='img'>
			<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value['goods_thumbnail'];?>
">
		</div>
		<div class='title'>
			<?php echo $_smarty_tpl->tpl_vars['res']->value['goods_name'];?>

		</div>
		<div class='coupon'>
			<div class='price'>
				<div class='n-price'>券后价:<span>￥<?php echo $_smarty_tpl->tpl_vars['res']->value["goods_price"]-$_smarty_tpl->tpl_vars['res']->value['coupon_denomination'];?>
</span></div>
				<div class='o-price'>原价:￥<?php echo $_smarty_tpl->tpl_vars['res']->value['goods_price'];?>
</div>
			</div>
			<div class='coup'>
				<div class='coup1'>专享优惠券</div>
				<div class='coup2'>￥<span><?php echo $_smarty_tpl->tpl_vars['res']->value['coupon_denomination'];?>
元</span></div>
			</div>
		</div>		
	</div>
	<div class='detail'> 
		<div class='label'>下拉查看商品详细消息</div>
		<div id='describe' class='content'></div>
	</div>
</div>
<!-- menu -->
<div class='menu-bar'>
	<div class='menu-item'>
		<a href="<?php echo @HOME;?>
coupon/index.html<?php if ($_smarty_tpl->tpl_vars['uid']->value!=''){?>?uid=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
<?php }?>">
			<div class='ico'><img src="<?php echo @THEME;?>
assets/img/home.png"></div>
			<div class='name'>首页</div>
		</a>
	</div>
	<div class='menu-item'>
		<img class='gif' src="<?php echo @THEME;?>
assets/img/0-11.gif">
	</div>
	<div id='taokl' class='menu-item-lg' data-link="<?php echo $_smarty_tpl->tpl_vars['res']->value['coupon_link2'];?>
">用淘口令领券</div>
</div>
<div class='cover'>
	<div class='box'>
		<div class='box-title'>口令购买
			<div class='close'>X</div>
		</div>
		<div class='box-content'>
			<div class='kouling'>
				<div class='kouling-title'>长按框内 > 拷贝</div>
				<div><span id='coupon-words'><?php echo $_smarty_tpl->tpl_vars['res']->value['coupon_word'];?>
</span></div>
			</div>
			<div class='clip'>
				<button id='clip-btn' class='btn' data-clipboard-action="copy" data-clipboard-target="#coupon-words" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['res']->value['coupon_word'];?>
">点击复制</button>
			</div>
		</div>
		<div class='box-footer'>
			<div>在售原价：<span class='fo-price'>￥<?php echo $_smarty_tpl->tpl_vars['res']->value['goods_price'];?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;券后价：<span class='fn-price'>￥<?php echo $_smarty_tpl->tpl_vars['res']->value['goods_price']-$_smarty_tpl->tpl_vars['res']->value['coupon_denomination'];?>
<span></div>
			<div>点击复制购买口令</div>
			<div>注:若复制失败，请【长按框内-拷贝】</div>
		</div>
		<div class='tips'>
			
		</div>
	</div>
</div>
<script type="text/javascript" src='<?php echo @THEME;?>
assets/js/clipboard.min.js'></script>
<script type="text/javascript" src='<?php echo @JS;?>
ajax.js'></script>
<script type="text/javascript" src='<?php echo @THEME;?>
assets/js/detail.js'></script>
<input id='uid' type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
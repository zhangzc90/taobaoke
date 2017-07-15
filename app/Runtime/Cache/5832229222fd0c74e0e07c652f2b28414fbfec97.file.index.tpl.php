<?php /* Smarty version Smarty-3.1.6, created on 2017-07-04 11:32:51
         compiled from "./Theme/default\Coupon\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286785939283416d523-87111741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5832229222fd0c74e0e07c652f2b28414fbfec97' => 
    array (
      0 => './Theme/default\\Coupon\\index.tpl',
      1 => 1499138822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286785939283416d523-87111741',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_593928341730b',
  'variables' => 
  array (
    'cate' => 0,
    'key' => 0,
    'uid' => 0,
    'item' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593928341730b')) {function content_593928341730b($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp64\\www\\taobaoke\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'优惠券领取'), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo @ORG;?>
swiper/swiper-3.4.2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo @THEME;?>
assets/css/coupon.css">
<div class='container'>
	<div class='banner'>
		<img src="<?php echo @THEME;?>
assets/img/banner.png">
	</div>
	<form action='javascript:search();' method='GET'>
		<div class='search'>
			<div class='search_input'>
				<input id='search_text' class='form-control' tpye='search' placeholder='好物搜索' value='<?php echo $_GET['search'];?>
'>
			</div>
			<div class='search_btn'>
				<button id='search'>搜索</button>
			</div>
		</div>
	</form>
	<div class="category swiper-container">
        <div class="swiper-wrapper">
           <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
           		 <div class="swiper-slide <?php if ($_GET['cate']==''&&$_smarty_tpl->tpl_vars['key']->value==0){?>active<?php }?>">
	            	<a  href="<?php echo @HOME;?>
coupon/index.html?<?php if ($_smarty_tpl->tpl_vars['uid']->value!=''){?>uid=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
&<?php }?>cate=<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
	            </div>
           <?php } ?>
        </div>
    </div>
	<div class='coupon-list'>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<div class='list-item'>
				<div class='detail' data-goods='<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
' data-link="<?php echo $_smarty_tpl->tpl_vars['item']->value['coupon_link2'];?>
">
					<div class='img'>
						<img src='<?php echo $_smarty_tpl->tpl_vars['item']->value["goods_thumbnail"];?>
'>
					</div>
					<div class='title'>
						<h4><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value["goods_name"],20,'···');?>
</h4>
					</div>
					<div class='price'>
						<div class='o-price'>￥<?php echo $_smarty_tpl->tpl_vars['item']->value["goods_price"];?>
元</div>
						<div class='n-price'>券后:<span>￥<?php echo $_smarty_tpl->tpl_vars['item']->value["goods_price"]-$_smarty_tpl->tpl_vars['item']->value['coupon_denomination'];?>
元</span></div>
					</div>
					<div class='coupon'>
						<div class='coup1'>省￥<?php echo $_smarty_tpl->tpl_vars['item']->value["coupon_denomination"];?>
元</div>
						<div class='coup2'>领券</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class='more'></div>
	<input id='cate' type='hidden' value='<?php echo $_GET['cate'];?>
'>
</div>
<input type='hidden' id='base_path' value='<?php echo @THEME;?>
assets/img/'>
<script type="text/javascript" src='<?php echo @THEME;?>
assets/js/jquery.scrollLoading.js'></script>
<script type="text/javascript" src='<?php echo @JS;?>
ajax.js'></script>
<script type="text/javascript" src='<?php echo @THEME;?>
assets/js/coupon.js'></script>
<script type="text/javascript" src='<?php echo @ORG;?>
swiper/swiper-3.4.2.min.js'></script>
<input id='uid' type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
<input id='hsearch' type='hidden' value="<?php echo $_GET['search'];?>
">
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>
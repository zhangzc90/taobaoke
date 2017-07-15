<?php /* Smarty version Smarty-3.1.6, created on 2017-06-15 16:50:54
         compiled from "./ThemeAdmin/default\Tao\tao_delete_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253959423eb34d2dd0-75359479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24a30ced41901cc7909760193ab50c1a123dcc87' => 
    array (
      0 => './ThemeAdmin/default\\Tao\\tao_delete_list.tpl',
      1 => 1497516651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253959423eb34d2dd0-75359479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59423eb38a74c',
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59423eb38a74c')) {function content_59423eb38a74c($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp64\\www\\taobaoke\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp64\\www\\taobaoke\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'商品删除记录'), 0);?>

<style type="text/css">
	.thumb{
		width: 40px;
		height: 40px;
	}
</style>
<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-retweet"></i> 商品删除记录</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="<?php echo @ADMIN;?>
">首页</a></li>
				<li><i class="fa fa-retweet"></i>商品删除记录</li>	
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
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>商品图</th>
								<th>商品名称</th>
								<th>详情链接</th>
								<th>商品价格</th>
								<th>收入比例</th>
								<th>佣金</th>
								<th>淘宝客链接</th>
								<th>优惠券数量</th>
								<th>优惠券面额</th>
								<th>优惠券链接</th>
								<th>领券时间</th>
								<th>添加时间</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
								<tr>
									<td style='padding:8px;'>
										<img class='thumb' src="<?php echo $_smarty_tpl->tpl_vars['item']->value['goods_thumbnail'];?>
">
									</td>
									<td title="<?php echo $_smarty_tpl->tpl_vars['item']->value['goods_name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['goods_name'],10,'…');?>
</td>
									<td><a class='clip' data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['item']->value['goods_detail'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['goods_detail'];?>
" href="javascript:;">复制详情链接</a></td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['goods_price'];?>
元</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['income'];?>
%</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['commission'];?>
元</td>
									<td><a class='clip' data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['item']->value['tao_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['tao_link'];?>
" href="javascrip:;">复制淘宝客链接</a></td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['coupon_number'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['coupon_denomination'];?>
</td>
									<td><a class='clip' data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['item']->value['coupon_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['coupon_link'];?>
" href="javascrip:;">复制优惠券链接</a></td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['start_time'];?>
~<?php echo $_smarty_tpl->tpl_vars['item']->value['end_time'];?>
</td>
									<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],'%Y-%m-%d %H:%M:%S');?>
</td>		
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<div class='text-center'><?php echo $_smarty_tpl->tpl_vars['list']->value['page'];?>
</div>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo @THEMEADMIN;?>
assets/css/public.css">
<script type="text/javascript" src='<?php echo @THEME;?>
assets/js/clipboard.min.js'></script>
<script type="text/javascript" src='<?php echo @JS;?>
ajax.js'></script>
<script type="text/javascript">
	$(function(){
		// 复制并在新的窗口中打开链接
	    var clipboard = new Clipboard('.clip');
	    clipboard.on('success', function(e) {
	        // alert('复制成功:'+e.text);
	        window.open(e.text);
	    });
	    clipboard.on('error', function(e) {
	        console.log(e);
	    });
	});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
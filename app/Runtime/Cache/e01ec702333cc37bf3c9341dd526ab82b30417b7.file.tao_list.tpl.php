<?php /* Smarty version Smarty-3.1.6, created on 2017-07-07 19:36:54
         compiled from "./ThemeAdmin/default\Tao\tao_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109215942231071c536-01555525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e01ec702333cc37bf3c9341dd526ab82b30417b7' => 
    array (
      0 => './ThemeAdmin/default\\Tao\\tao_list.tpl',
      1 => 1499427410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109215942231071c536-01555525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_594223108c9bd',
  'variables' => 
  array (
    'userlevel' => 0,
    'username' => 0,
    'id' => 0,
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594223108c9bd')) {function content_594223108c9bd($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp64\\www\\taobaoke\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp64\\www\\taobaoke\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userlevel']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'已导入商品列表','level'=>$_tmp1,'username'=>$_tmp2,'id'=>$_tmp3), 0);?>

<style type="text/css">
	.thumb{
		width: 40px;
		height: 40px;
	}
</style>
<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-database"></i> 已导入商品列表</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="<?php echo @ADMIN;?>
">首页</a></li>
				<li><i class="fa fa-database"></i>已导入商品列表</li>	
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
		<div class='col-md-6'>
			<input id='search_text' class='form-control' type='search' placeholder='请输入要查询的商品名称' value='<?php echo $_GET['search'];?>
'>			
		</div>
		<div class='col-md-1'>
			<button id='search' class='btn btn-danger'>搜索</button>
		</div>
		<div class='col-md-12 text-left'>
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
								<th>专题推广链接</th>
								<th>领券时间</th>
								<th>添加时间</th>
								<th>操作</th>
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
									<td><a class='clip' data-clipboard-text="http://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo @HOME;?>
Coupon/goods_goto.html?goods_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="http://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo @HOME;?>
Coupon/goods_goto.html?goods_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="javascrip:;">复制专题推广链接</a></td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['start_time'];?>
~<?php echo $_smarty_tpl->tpl_vars['item']->value['end_time'];?>
</td>	
									<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],'%Y-%m-%d %H:%M:%S');?>
</td>		
									<td>
										<button data-uid='<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
' class='delete btn btn-sm btn-danger'>删除</button>
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
	        alert('复制成功:'+e.text);
	        window.open(e.text);
	    });
	    clipboard.on('error', function(e) {
	        console.log(e);
	    });
	    // 搜索
	    $('#search').click(function(){
	    	var text=$('#search_text').val();
	    	window.location.href='<?php echo @ADMIN;?>
tao/tao_list.html?search='+text;
	    });

	    // 删除对应ed商品
	    $('.delete').click(function(){
	    	var _this=$(this);
	    	var uid=$(this).data('uid');
	    	if(!confirm('是否删除当前商品？'))
	    		return;
	    	var setting={
	            'url':'<?php echo @ADMIN;?>
tao/tao_list_delete',
	            'success':function(data){
	            	if(data['code']==200){
	            		setTimeout(function(){
	            			_this.parent().parent().remove();
	            		},1000);
	            	}
	            },
	        };
	        Ajax.setConfig(setting);
	        Ajax.submit({'uid':uid});
		});
    
	});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
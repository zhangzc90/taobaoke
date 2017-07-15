<?php /* Smarty version Smarty-3.1.6, created on 2017-07-07 11:19:18
         compiled from "./ThemeAdmin/default\TaoUser\user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1916159575598817c22-16138822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43ec0175b30a8f8b786ef2e2905a3ea650bc51d1' => 
    array (
      0 => './ThemeAdmin/default\\TaoUser\\user_list.tpl',
      1 => 1499397554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1916159575598817c22-16138822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59575598aa85b',
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
<?php if ($_valid && !is_callable('content_59575598aa85b')) {function content_59575598aa85b($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp64\\www\\taobaoke\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userlevel']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'淘宝客用户列表','level'=>$_tmp1,'username'=>$_tmp2,'id'=>$_tmp3), 0);?>

<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-address-card"></i> 淘宝客用户列表</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="<?php echo @ADMIN;?>
">首页</a></li>
				<li><i class="fa fa-address-card"></i>淘宝客用户列表</li>	
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
								<th>用户编号</th>
								<!-- <th>个性域名</th> -->
								<th>用户姓名</th>
								<th>联系方式</th>
								<th>邮箱</th>
								<th>PID</th>
								<th>注册时间</th>
								<th>状态</th>
								<th>地址</th>
								<th>编辑</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
</td>
									<!-- <td><?php echo $_smarty_tpl->tpl_vars['item']->value['domain'];?>
</td> -->
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['tel'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['pid'];?>
</td>
									<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</td>
									<td><?php if ($_smarty_tpl->tpl_vars['item']->value['enable']==1){?>正常<?php }else{ ?>禁用<?php }?></td>
									<td>
										<a class='clip' href="javascript:;"  data-clipboard-text="http://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo @HOME;?>
Coupon/index.html?uid=<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
" title="http://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo @HOME;?>
Coupon/index.html?uid=<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
">一键获取用户推广地址</a>
									</td>
									<td>
										<a href='<?php echo @ADMIN;?>
TaoUser/user_new.html?uid=<?php echo $_smarty_tpl->tpl_vars['item']->value["uid"];?>
' class='btn btn-danger'>编辑</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<div class='text-center'>
						<?php echo $_smarty_tpl->tpl_vars['list']->value['page'];?>

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
<script type="text/javascript" src='<?php echo @ORG;?>
clipboard/clipboard.min.js'></script>
<script type="text/javascript">	
    var clipboard = new Clipboard('.clip');

    clipboard.on('success', function(e) {
        alert('获取成功，现在可将用户连接粘贴到其他位置');
        setTimeout(function(){
        	window.open(e.text);
        },500);
    });

    clipboard.on('error', function(e) {
        alert('获取失败');
    }); 
</script>
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
{include file='../tpl/header.tpl' title='淘宝客用户列表'  level={$userlevel} username={$username} id={$id}}
<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-address-card"></i> 淘宝客用户列表</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="{$smarty.const.ADMIN}">首页</a></li>
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
							{foreach $list['data'] as $item}
								<tr>
									<td>{$item['uid']}</td>
									<!-- <td>{$item['domain']}</td> -->
									<td>{$item['name']}</td>
									<td>{$item['tel']}</td>
									<td>{$item['email']}</td>
									<td>{$item['pid']}</td>
									<td>{$item['time']|date_format:'%Y-%m-%d %H:%M:%S'}</td>
									<td>{if $item['enable'] eq 1}正常{else if}禁用{/if}</td>
									<td>
										<a class='clip' href="javascript:;"  data-clipboard-text="http://{$smarty.server.SERVER_NAME}{$smarty.const.HOME}Coupon/index.html?uid={$item['uid']}" title="http://{$smarty.server.SERVER_NAME}{$smarty.const.HOME}Coupon/index.html?uid={$item['uid']}">一键获取用户推广地址</a>
									</td>
									<td>
										<a href='{$smarty.const.ADMIN}TaoUser/user_new.html?uid={$item["uid"]}' class='btn btn-danger'>编辑</a>
									</td>
								</tr>
							{/foreach}
						</tbody>
					</table>
					<div class='text-center'>
						{$list['page']}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="{$smarty.const.THEMEADMIN}assets/css/public.css">
<script type="text/javascript" src='{$smarty.const.JS}ajax.js'></script>
<script type="text/javascript" src='{$smarty.const.THEMEADMIN}assets/js/tao_user.js'></script>
<script type="text/javascript" src='{$smarty.const.ORG}clipboard/clipboard.min.js'></script>
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
{include file='../tpl/footer.tpl'}
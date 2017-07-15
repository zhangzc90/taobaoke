{include file='../tpl/header.tpl' title='淘宝客用户添加'  level={$userlevel} username={$username} id={$id}}
<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-plus-square-o"></i> 淘宝客用户添加</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="{$smarty.const.ADMIN}">首页</a></li>
				<li><i class="fa fa-plus-square-o"></i>淘宝客用户添加</li>	
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
					<div class='form-horizontal'>
						<div class='form-group'>
							<input id='uid' type='hidden' value="{$user['uid']}">
							<label class='col-md-1 col-xs-12'>姓名</label>
							<div class='col-md-6 col-xs-12'>
								<input id='name' class='form-control' type='text' value='{$user["name"]}'>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>个性域名</label>
							<div class='col-md-6 col-xs-12'>
								<input id='domain' class='form-control' type='text' disabled="" value='{$user["domain"]}'>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>联系方式</label>
							<div class='col-md-6 col-xs-12'>
								<input id='tel' class='form-control' type='text' value='{$user["tel"]}'> 
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>邮箱</label>
							<div class='col-md-6 col-xs-12'>
								<input id='email' class='form-control' type='text' value='{$user["email"]}'>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>PID</label>
							<div class='col-md-6 col-xs-12'>
								<input id='pid' class='form-control' type='text' value='{$user["pid"]}'>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>状态</label>
							<div class='col-md-6 col-xs-12'>
								<div class='radio'>
									<label>
										<input class='status' type='radio' name='status'  {if $user['enable'] eq 0}checked{/if} value='0'>禁用
									</label>
									<label>
										<input class='status' type='radio' name='status' value='1' {if $user['enable'] eq 1}checked{/if}>启用
									</label>
								</div>
								<div class='button'><br>
									<button id='submit' class='btn btn-danger'>提交</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="{$smarty.const.THEMEADMIN}assets/css/public.css">
<script type="text/javascript" src='{$smarty.const.JS}ajax.js'></script>
<script type="text/javascript" src='{$smarty.const.THEMEADMIN}assets/js/tao_user.js'></script>

{include file='../tpl/footer.tpl'}
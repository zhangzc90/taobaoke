{include file='../tpl/header.tpl' title='删除失效商品'  level={$userlevel} username={$username} id={$id}}
<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-motorcycle"></i> 一键清空失效商品</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="{$smarty.const.ADMIN}">首页</a></li>
				<li><i class="fa fa-motorcycle"></i>一键清空失效商品</li>	
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
					<div class='form-horizontol'>
						<div class='form-group'>
							<label class='col-md-2 col-xs-12'>清空失效条目</label>
							<div class='col-md-6 col-xs-12'>
								<button id='crash' class='btn btn-danger'>清空失效商品</button>
								<div class='help-block'>
									*本操作将会清空所有已过期优惠券,请谨慎选择，删除后不可恢复！
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
<script type="text/javascript" src='{$smarty.const.THEMEADMIN}assets/js/tao.js'></script>
{include file='../tpl/footer.tpl'}
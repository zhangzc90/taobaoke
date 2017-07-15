{include file='../tpl/header.tpl' title='淘宝客商品添加'  level={$userlevel} username={$username} id={$id}}
<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-plus-square"></i> 添加商品</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="{$smarty.const.ADMIN}">首页</a></li>
				<li><i class="fa fa-plus-square"></i>添加商品</li>	
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
					<form class='form-horizontal' action='import_data' method='post' enctype="multipart/form-data">
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>选择要导入的分类</label>
							<div class='col-md-6 col-xs-12'>
								<select class='form-control' name='cate'>
									{foreach $cate as $item}
										<option value='{$item["uid"]}'>{$item['name']}</option>
									{/foreach}
								</select>
								<div class='help-block'>*勾选全部商品时默认为无分类*</div>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-1 col-xs-12'>选择文件</label>
							<div class='col-md-6 col-xs-12'>
								<input name='file_xls' type='file' class='form-control' >
							</div>
							<div>
								<input id='submit' class='btn btn-danger' type='submit' value='提交'>
							</div>
						</div>
					</form>
					<div>
						<img style='width:100%;' src="{$smarty.const.THEMEADMIN}assets/img/example.png">
						<div class='help-block'>
							*请遵循以上表格字段进行导入操作*
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="{$smarty.const.THEMEADMIN}assets/css/public.css">

{include file='../tpl/footer.tpl'}
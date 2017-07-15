{include file='../tpl/header.tpl' title='商品删除记录'  level={$userlevel} username={$username} id={$id}}
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
				<li><i class="fa fa-home"></i><a href="{$smarty.const.ADMIN}">首页</a></li>
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
							{foreach $list['data'] as $item}
								<tr>
									<td style='padding:8px;'>
										<img class='thumb' src="{$item['goods_thumbnail']}">
									</td>
									<td title="{$item['goods_name']}">{$item['goods_name']|truncate:10:'…'}</td>
									<td><a class='clip' data-clipboard-text="{$item['goods_detail']}" title="{$item['goods_detail']}" href="javascript:;">复制详情链接</a></td>
									<td>{$item['goods_price']}元</td>
									<td>{$item['income']}%</td>
									<td>{$item['commission']}元</td>
									<td><a class='clip' data-clipboard-text="{$item['tao_link']}" title="{$item['tao_link']}" href="javascrip:;">复制淘宝客链接</a></td>
									<td>{$item['coupon_number']}</td>
									<td>{$item['coupon_denomination']}</td>
									<td><a class='clip' data-clipboard-text="{$item['coupon_link']}" title="{$item['coupon_link']}" href="javascrip:;">复制优惠券链接</a></td>
									<td>{$item['start_time']}~{$item['end_time']}</td>
									<td>{$item['add_time']|date_format:'%Y-%m-%d %H:%M:%S'}</td>		
								</tr>
							{/foreach}
						</tbody>
					</table>
					<div class='text-center'>{$list['page']}</div>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="{$smarty.const.THEMEADMIN}assets/css/public.css">
<script type="text/javascript" src='{$smarty.const.THEME}assets/js/clipboard.min.js'></script>
<script type="text/javascript" src='{$smarty.const.JS}ajax.js'></script>
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
{include file='../tpl/footer.tpl'}
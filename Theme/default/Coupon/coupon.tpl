{include file='../tpl/header.tpl'}
<link rel="stylesheet" type="text/css" href="{$smarty.const.THEME}assets/css/detail.css">
<div class='container'>
	<input id='goods-id' type='hidden' value="{$res['goods_id']}">
	<div class='thumbnail'>
		<div class='img'>
			<img src="{$res['goods_thumbnail']}">
		</div>
		<div class='title'>
			{$res['goods_name']}
		</div>
		<div class='coupon'>
			<div class='price'>
				<div class='n-price'>券后价:<span>￥{$res["goods_price"]-$res['coupon_denomination']}</span></div>
				<div class='o-price'>原价:￥{$res['goods_price']}</div>
			</div>
			<div class='coup'>
				<div class='coup1'>专享优惠券</div>
				<div class='coup2'>￥<span>{$res['coupon_denomination']}元</span></div>
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
		<a href="{$smarty.const.HOME}coupon/index.html{if $uid neq ''}?uid={$uid}{/if}">
			<div class='ico'><img src="{$smarty.const.THEME}assets/img/home.png"></div>
			<div class='name'>首页</div>
		</a>
	</div>
	<div class='menu-item'>
		<img class='gif' src="{$smarty.const.THEME}assets/img/0-11.gif">
	</div>
	<div id='taokl' class='menu-item-lg' data-link="{$res['coupon_link2']}">用淘口令领券</div>
</div>
<div class='cover'>
	<div class='box'>
		<div class='box-title'>口令购买
			<div class='close'>X</div>
		</div>
		<div class='box-content'>
			<div class='kouling'>
				<div class='kouling-title'>长按框内 > 拷贝</div>
				<div><span id='coupon-words'>{$res['coupon_word']}</span></div>
			</div>
			<div class='clip'>
				<button id='clip-btn' class='btn' data-clipboard-action="copy" data-clipboard-target="#coupon-words" data-clipboard-text="{$res['coupon_word']}">点击复制</button>
			</div>
		</div>
		<div class='box-footer'>
			<div>在售原价：<span class='fo-price'>￥{$res['goods_price']}</span>&nbsp;&nbsp;&nbsp;&nbsp;券后价：<span class='fn-price'>￥{$res['goods_price']-$res['coupon_denomination']}<span></div>
			<div>点击复制购买口令</div>
			<div>注:若复制失败，请【长按框内-拷贝】</div>
		</div>
		<div class='tips'>
			
		</div>
	</div>
</div>
<script type="text/javascript" src='{$smarty.const.THEME}assets/js/clipboard.min.js'></script>
<script type="text/javascript" src='{$smarty.const.JS}ajax.js'></script>
<script type="text/javascript" src='{$smarty.const.THEME}assets/js/detail.js'></script>
<input id='uid' type='hidden' value="{$uid}">
{include file='../tpl/footer.tpl'}
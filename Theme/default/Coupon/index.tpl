{include file='../tpl/header.tpl' title='优惠券领取'}
<link rel="stylesheet" type="text/css" href="{$smarty.const.ORG}swiper/swiper-3.4.2.min.css">
<link rel="stylesheet" type="text/css" href="{$smarty.const.THEME}assets/css/coupon.css">
<div class='container'>
	<form action='javascript:search();' method='GET'>
		<div class='search'>
			<div class='search_input'>
				<input id='search_text' class='form-control' tpye='search' placeholder='好物搜索' value='{$smarty.get.search}'>
			</div>
			<div class='search_btn'>
				<button id='search'>搜索</button>
			</div>
		</div>
	</form>
	<div class="category swiper-container">
        <div class="swiper-wrapper">
           {foreach $cate as $key => $item}
           		 <div class="swiper-slide {if $smarty.get.cate  eq '' and $key eq 0}active{/if}">
	            	<a  href="{$smarty.const.HOME}coupon/index.html?{if $uid neq ''}uid={$uid}&{/if}cate={$item['slug']}">{$item['name']}</a>
	            </div>
           {/foreach}
        </div>
    </div>
	<div class='coupon-list'>
		{foreach $res as $item}
			<div class='list-item'>
				<div class='detail' data-goods='{$item["id"]}' data-link="{$item['coupon_link2']}">
					<div class='img'>
						<img src='{$item["goods_thumbnail"]}'>
					</div>
					<div class='title'>
						<h4>{$item["goods_name"]|truncate:20:'···'}</h4>
					</div>
					<div class='price'>
						<div class='o-price'>￥{$item["goods_price"]}元</div>
						<div class='n-price'>券后:<span>￥{$item["goods_price"]-$item['coupon_denomination']}元</span></div>
					</div>
					<div class='coupon'>
						<div class='coup1'>省￥{$item["coupon_denomination"]}元</div>
						<div class='coup2'>领券</div>
					</div>
				</div>
			</div>
		{/foreach}
	</div>
	<div class='more'></div>
	<input id='cate' type='hidden' value='{$smarty.get.cate}'>
</div>
<input type='hidden' id='base_path' value='{$smarty.const.THEME}assets/img/'>
<script type="text/javascript" src='{$smarty.const.THEME}assets/js/jquery.scrollLoading.js'></script>
<script type="text/javascript" src='{$smarty.const.JS}ajax.js'></script>
<script type="text/javascript" src='{$smarty.const.THEME}assets/js/coupon.js'></script>
<script type="text/javascript" src='{$smarty.const.ORG}swiper/swiper-3.4.2.min.js'></script>
<input id='uid' type='hidden' value="{$uid}">
<input id='hsearch' type='hidden' value="{$smarty.get.search}">
{include file='../tpl/footer.tpl'}


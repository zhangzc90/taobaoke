{include file='../tpl/header.tpl' title='好物严选'}
<link rel="stylesheet" type="text/css" href="{$smarty.const.THEME}assets/css/index.css">
<div class='container'>
	<div class='search'>
		<form action='javascript:search();' method='GET'>
			<input class='search_text' type='search' placeholder='好物搜索'>
		</form>
	</div>
	<!-- menu -->
	<div class="menu swiper-container">
        <div class="swiper-wrapper">
           {foreach $cate as $key => $item}
           		{if $key gt 0}
           		 <div class="swiper-slide">
	            	<a  href="{$smarty.const.HOME}coupon/index.html?{if $uid neq ''}uid={$uid}&{/if}cate={$item['slug']}">{$item['name']}</a>
	            </div>
	            {/if}
           {/foreach}
        </div>
    </div>
	<div class="banner swiper-container">
        <div class="swiper-wrapper">
			<div class="swiper-slide">
				<a  href="#">
					<img src="{$smarty.const.THEME}assets/img/201323023231.png">
				</a>
			</div>
        </div>
    </div>
	<div class='tips'>
		<div class='flex'>
			<div class='text t1'>30天无忧退货</div>
		</div>
		<div class='flex'>
			<div class='text t2'>淘宝合作平台</div>
		</div>
		<div class='flex'>
			<div class='text t3'>48小时快速退款</div>
		</div>
	</div>
	<div class='content'>
		<div class='item'>
			<img src="{$smarty.const.THEME}assets/img/Fig_LXTm-3vzDRVVbBiWsTPm6LOw.jpg">
		</div>
		<div class='item'>
			<img src="{$smarty.const.THEME}assets/img/FoEcWaH5I5pvVANVQ7coKjjGkNcm.jpg">
		</div>
		<div class='item'>
			<img src="{$smarty.const.THEME}assets/img/FoLajQfXmqPzRg23YyWqcPxrFbD-.jpg">
		</div>
		<div class='item'>
			<img src="{$smarty.const.THEME}assets/img/For0xqvz-BwlS4i5ojkl1Ss1yfdr.jpg">
		</div>
		<div class='item'>
			<img src="{$smarty.const.THEME}assets/img/Fsip_SYt0iVsyyTuMHMBT4Vuq4Qa.jpg">
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="{$smarty.const.ORG}swiper/swiper-3.4.2.min.css">
<script type="text/javascript" src='{$smarty.const.ORG}swiper/swiper-3.4.2.min.js'></script>
<script type="text/javascript" src='{$smarty.const.THEME}assets/js/index.js'></script>
<input id='uid' type='hidden' value="{$uid}">
{include file='../tpl/footer.tpl'}
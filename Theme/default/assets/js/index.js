$(function(){
	// swiper加载
	var banner = new Swiper ('.banner', {
        scrollbarHide: true,
        slidesPerView: 'auto',
        grabCursor: true,
	});
	// swiper加载
	var menu = new Swiper ('.menu', {
		autoPlay:5000,
        scrollbarHide: true,
        slidesPerView: 'auto',
        grabCursor: true,
        freeMode : true,
	});
	// 设置item的固定高度
	$('.content .item').height($('.content .item').width()/2.14);
	// 菜单顶部固定
	$(window).scroll(function(){
		var scrollTop = $(this).scrollTop(); 
		if(scrollTop>100)
			$('.menu').addClass('menu-top');
		else
			$('.menu').removeClass('menu-top');
	});

	var search=function(){
		var text=$('.search_text').val();
		var uid=$('#uid').val();
		var uid_text='';
		if(uid!='')
			uid_text='uid='+uid+'&';
		window.location.href='coupon/index.html?'+uid_text+'search='+text;
	}
	$('.search_text').on('keypress',function(){
		if(event.keyCode == 13){
			search();
		}
	})
});
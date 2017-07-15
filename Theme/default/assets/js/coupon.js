$(function(e){
	// swiper加载
	var mySwiper = new Swiper ('.category', {
        scrollbarHide: true,
        slidesPerView: 'auto',
        grabCursor: true,
        freeMode : true,
	});

	// 自动定位菜单位置
	e(".category .swiper-slide").find("a").each(function() {
		if ((e(e(this))[0].href).toLowerCase() == (String(window.location)).toLowerCase()) {
			e(this).parent().addClass('active');
			var index = $(".category .swiper-slide").index(e(this).parent());
			mySwiper.slideTo(index);
		}
	});

	// 图片懒加载
	$(".img img").scrollLoading();
	var page=1;//页数
	var stop_getpage=true;
	var appendData=function(){
		var search_text=$('#hsearch').val();
		var search='';
		if(search_text!='')
			search='&search='+search_text;
		var setting={
            'url':'get_page?uid='+$('#uid').val()+search,
            'load':function(){
            	$('.more').html('数据加载中···');
            },
            'success':function(data){
				if(data['code']=='200'){
					$('.more').html('');
					var path=$('#base_path').val()+'loading.jpg';
					var goods=data['data'];
					for(var i=0;i<goods.length;i++){
						var goods_name=goods[i]['goods_name'].substr(1,24);
						var coupon_denomination=goods[i]['coupon_denomination']==null?'':goods[i]['coupon_denomination']
						var n_price=parseInt(goods[i]['goods_price'])-parseInt(goods[i]['coupon_denomination']);
						$('.coupon-list').append("<div class='list-item'><div class='detail' data-goods='"+goods[i]['id']+"' data-link='"+goods[i]['coupon_link2']+"'><div class='img'><img src='"+path+"' data-url='"+goods[i]['goods_thumbnail']+"'></div><div class='title'><h4>"+goods_name+"···</h4></div><div class='price'><div class='o-price'>￥"+goods[i]['goods_price']+"</div><div class='n-price'>券后:<span>￥"+n_price+"元</span></div></div><div class='coupon'><div class='coup1'>省￥"+coupon_denomination+"元</div><div class='coup2'>领券</div></div></div>");
						// 图片懒加载
						$(".img img").scrollLoading();
						//图片自动高度
						$('.list-item .detail .img').css({'height':$('.list-item .detail .img').width()});
					}
				}else{
					$('.more').html('我们也是有底线的···');
					stop_getpage=false;
				}
            },
        };
        Ajax.setConfig(setting);
        if(stop_getpage)
        	Ajax.submit({'page':++page,'cate':$('#cate').val()});
	}
	// 浏览器类型判断
	var isWeiXin=function(){ 
		var ua = window.navigator.userAgent.toLowerCase(); 
		if(ua.match(/MicroMessenger/i) == 'micromessenger'){ 
			return true; 
		}else{ 
			return false; 
		} 
	} 
	// 点击跳转
	$('.coupon-list').on('click','.detail',function(){
		if(isWeiXin()){
			var goods_id=$(this).data('goods');
			var uid=$('#uid').val();
			if(uid!='')
				window.location.href='coupon.html?uid='+uid+'&goods_id='+goods_id;
			else
				window.location.href='coupon.html?goods_id='+goods_id;
		}else{
			var url=$(this).data('link');
			if(url!=''){
				window.location.href=url;
			}
		}
	});

	// 下拉加载
	$(window).scroll(function(){
		var scrollTop = $(this).scrollTop();    //滚动条距离顶部的高度
		var scrollHeight = $(document).height();   //当前页面的总高度
		var clientHeight = $(this).height();    //当前可视的页面高度
		//距离顶部+当前高度>=文档总高度 即代表滑动到底部 count++;
		 //每次滑动count加1
		if(scrollTop + clientHeight >= scrollHeight){ 
			//调用筛选方法，count为当前分页数
			appendData();			
		}else if(scrollTop<=0){ 
			//滚动条距离顶部的高度小于等于0 TODO
			console.log("下拉刷新，要在这调用啥方法？");
		}

		// 分类菜单上移
		if(scrollTop>200){
			$('.category').addClass('cate-top');
		}else{
			$('.category').removeClass('cate-top');
		}
	});

	//图片自动高度
	$('.list-item .detail .img').css({'height':$('.list-item .detail .img').width()});


	var search=function(){
		var text=$('#search_text').val();
		var uid=$('#uid').val();
		var uid_text='';
		if(uid!='')
			uid_text='uid='+uid+'&';
		window.location.href='index.html?'+uid_text+'search='+text;
	}
	// 搜索框
	$('#search').click(function(){
		search();
	});
	$('#search_text').on('keypress',function(){
		if(event.keyCode == 13){
			search();
		}
	})
});
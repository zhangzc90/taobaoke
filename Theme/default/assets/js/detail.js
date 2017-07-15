$(function(){
	// clipboard
  	var clipboard = new Clipboard('#clip-btn');
  	clipboard.on('success', function(e) {
    	$('.tips').html('口令复制成功');
    	$('.clip .btn').html('复制成功')
    	$('.clip .btn').css('background','#66cc00');
    	$('.tips').show();
    });
    clipboard.on('error', function(e) {
        $('.tips').html('口令复制失败,请尝试长按复制');
	    $('.tips').show();
    });
	$('#taokl').click(function(){
		var link=$(this).data('link');
		// 数据提交操作
		var setting={
            'url':'replace_taoword/?uid='+$('#uid').val(),
            'success':function(data){
            	if(data['code']==200){
            		$('#coupon-words').html(data['data']['coupon_words']);
            		$('#clip-btn').attr('data-clipboard-text',data['data']['coupon_words']);
            	}
            	$('.cover').show();
            },
        };
        Ajax.setConfig(setting);
        Ajax.submit({'title':$('.title').html(),'link':link,'logo':$('.img img').attr('src')});		
	});
	$('.box-title .close').click(function(){
		$('.cover').hide();
	});

	function ask(){
		var goods_id=$('#goods-id').val();
		$.ajax({
			type: 'get',
			url: 'http://api.m.taobao.com/h5/mtop.taobao.detail.getdesc/6.0/',
			data: {data: '{"id":"'+goods_id+'"}'},
			dataType: 'jsonp',
			jsonpCallback: 'detailCallback',
			success: function(data){
				if (data.hasOwnProperty('data') && data.data.hasOwnProperty('pcDescContent')) {
					$('#describe').html(data.data.pcDescContent);
				}
			}
		});	
    }
    function detailCallback(data) {
	    if (data.hasOwnProperty('data') && data.data.hasOwnProperty('pcDescContent')) {
	    	console.log(data.data.pcDescContent);
	    }
	}
	ask();
});
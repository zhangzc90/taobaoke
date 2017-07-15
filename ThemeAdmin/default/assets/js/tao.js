$(function(){
	$('#crash').click(function(){
		if(!confirm('是否进行删除操作？'))
			return;
		// 数据提交操作
		var setting={
            'url':'tao_delete_submit',
            'success':function(data){
            	if(data['code']==200){
            		alert(data['data']);
            	}else{
            		alert(data['data']);	
            	}
            },
        };
        Ajax.setConfig(setting);
        Ajax.submit();
	});
});
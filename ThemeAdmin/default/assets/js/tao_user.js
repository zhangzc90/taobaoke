$(function(){
	var phoneVali=function(phone){
        var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
        if(myreg.test(phone))
            return true; //正确
        else
            return false;//错误
    }
    // 中文字符检测
	var CheckChinese=function(val){     
		var reg =/[\u4E00-\u9FFF]/;
		if(reg.test(val)){     
			return false;  
		}else
			return true;
	}
	// 邮箱验证
	var CheckMail=function(val){
		var reg =/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/ ;
		if(!reg.test(val)){
			return false;
		}else
			return true;
	}
	var sub_data=function(){
		var name=$('#name').val(),domain=$('#domain').val(),tel=$('#tel').val(),email=$('#email').val(),pid=$('#pid').val(),status=$('.status:checked').val();
		var uid=$('#uid').val();
		if(name==''){
			$('.error_report .text-danger').html('姓名不能为空');
			$('.error_report').show();
			return false;
		}else if(!phoneVali(tel)){
			$('.error_report .text-danger').html('手机号码格式错误');
			$('.error_report').show();
			return false;
		}else if(!CheckMail(email)){
			$('.error_report .text-danger').html('邮箱地址错误');
			$('.error_report').show();
			return false;
		}else if(pid==''){
			$('.error_report .text-danger').html('PID不能为空');
			$('.error_report').show();
			return false;
		}
		return {'uid':uid,'name':name,'domain':domain,'tel':tel,'email':email,'pid':pid,'enable':status};
		
	}
	$('#submit').click(function(){
		var data=sub_data();
		if(!data)
			return;

		if(!confirm('检验数据无误，现在提交？'))
			return;
		// 数据提交操作
		var setting={
            'url':'user_new_post',
            'success':function(data){
            	if(data['code']==200){
            		window.location.href='user_list.html';
            	}else{
            		$('.error_report .text-danger').html(data['data']);
					$('.error_report').show();
            	}
            }
        };
        Ajax.setConfig(setting);
        Ajax.submit(data);
	});
});
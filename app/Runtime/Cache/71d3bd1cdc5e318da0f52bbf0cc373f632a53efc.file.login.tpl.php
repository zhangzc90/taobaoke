<?php /* Smarty version Smarty-3.1.6, created on 2017-06-10 10:39:12
         compiled from "./ThemeAdmin/default\Index\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19631593b5bd0828b88-01943222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d3bd1cdc5e318da0f52bbf0cc373f632a53efc' => 
    array (
      0 => './ThemeAdmin/default\\Index\\login.tpl',
      1 => 1487300714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19631593b5bd0828b88-01943222',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_593b5bd0b7a9f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593b5bd0b7a9f')) {function content_593b5bd0b7a9f($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
	<head>
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>登录-Login</title>		

		<!-- Favicon and touch icons -->
		<link rel="shortcut icon" href="<?php echo @THEMEADMIN;?>
assets/ico/favicon.ico" type="image/x-icon" />

	    <!-- Css files -->
	    <link href="<?php echo @ORG;?>
boot/bootstrap.min.css" rel="stylesheet">		
		<link href="<?php echo @THEMEADMIN;?>
assets/css/jquery.mmenu.css" rel="stylesheet">		
		<link href="<?php echo @THEMEADMIN;?>
assets/css/font-awesome.min.css" rel="stylesheet">
	    <link href="<?php echo @THEMEADMIN;?>
assets/css/style.min.css" rel="stylesheet">

	    <!--[if !IE]><!-->
			<script src="<?php echo @ORG;?>
jquery/jquery-2.1.0.min.js"></script>
		<!--<![endif]-->
		<!--[if IE]>		
			<script src="<?php echo @ORG;?>
jquery/jquery-1.8.2.min.js"></script>
		<![endif]-->	

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
<body>
	<div class="container-fluid content">
		<div class="row">
			<div id="content" class="col-sm-12 full">
				<div class="row">
					<div class="login-box">
					
						<div class="header">
						Login
						</div>			
					
						<div class="text-with-hr">
							<span>or</span>
						</div>
					
						<div class="form-horizontal login">
							<fieldset class="col-sm-12">
								<div class="form-group">
									<div class="controls row">
										<div class="input-group col-sm-12">	
											<input type="text" class="form-control" id="username" placeholder=""/>
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
										</div>	
									</div>
								</div>
							
								<div class="form-group">
									<div class="controls row">
										<div class="input-group col-sm-12">	
											<input type="password" class="form-control" id="password" placeholder="Password"/>
											<span class="input-group-addon"><i class="fa fa-key"></i></span>
										</div>	
									</div>
								</div>
								<!-- <div class="confirm">
									<input type="checkbox" name="remember"/>
									<label for="remember">Remember me</label>
								</div> -->
								<div class='row'>
									<small>
										<div class='text-center help-block'></div>
									</small>
								</div>
								<div class="row">			
									<button id='submit'  class="btn btn-lg btn-primary col-xs-12">登录</button>	
								</div>				
							</fieldset>
						</div>
						<div class="clearfix"></div>	
					</div>
				</div><!--/row-->	
			</div>			
		</div><!--/row-->
		<script type="text/javascript" src='<?php echo @JS;?>
ajax.js'></script>
		<script type="text/javascript">
			$(function(){
				$('#submit').click(function(){
					var username=$('#username').val();
					var password=$('#password').val();
					
                    var data={'username':username,'password':password};
                    
					var setting={
                        'url':'login_submit',
                        'success':success,
                    };
                    Ajax.setConfig(setting);
                    Ajax.submit(data);
				});
				// 登录成功
				var success=function(data){
					if(data['code']==200){
						window.location.href='../index';
					}else{
						$('.help-block').html(data['data']);
					}
				}
			});
		</script><?php }} ?>
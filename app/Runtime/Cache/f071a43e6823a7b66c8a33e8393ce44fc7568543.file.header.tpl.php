<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 10:38:21
         compiled from "D:\wamp64\www\Demo\ThemeAdmin\default\tpl\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241345913ce9dd26ae8-58304381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f071a43e6823a7b66c8a33e8393ce44fc7568543' => 
    array (
      0 => 'D:\\wamp64\\www\\Demo\\ThemeAdmin\\default\\tpl\\header.tpl',
      1 => 1490854746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241345913ce9dd26ae8-58304381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'username' => 0,
    'level' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5913ce9e57f2d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913ce9e57f2d')) {function content_5913ce9e57f2d($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
	<head>
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>		

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
		<!-- start: 顶部菜单 -->
		<div class="navbar" role="navigation">
			<div class="container-fluid">				
				<ul class="nav navbar-nav navbar-actions navbar-left">
					<li class="visible-md visible-lg"><a href="#" id="main-menu-toggle"><i class="fa fa-th-large" title='收起或展开菜单'></i></a></li>
					<li class="visible-xs visible-sm"><a href="#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>			
				</ul>
				<!-- 搜索框 -->
				<!-- <form class="navbar-form navbar-left">
					<button type="submit" class="fa fa-search"></button>
					<input type="text" class="form-control" placeholder="Search..."></a>
				</form> -->
				<!-- 顶部右侧菜单 -->
		        <ul class="nav navbar-nav navbar-right">
					<!-- <li class="dropdown visible-md visible-lg">
		        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="badge">5</span></a>
		        		<ul class="dropdown-menu">
							<li class="dropdown-menu-header">
								<strong>Messages</strong>
								<div class="progress thin">
								  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
								    <span class="sr-only">30% Complete (success)</span>
								  </div>
								</div>
							</li>
							<li class="avatar">
								<a href="page-inbox.html">
									<img class="avatar" src="<?php echo @THEMEADMIN;?>
assets/img/avatar1.jpg">
									<div>New message</div>
									<small>1 minute ago</small>
									<span class="label label-info">NEW</span>
								</a>
							</li>
							<li class="avatar">
								<a href="page-inbox.html">
									<img class="avatar" src="<?php echo @THEMEADMIN;?>
assets/img/avatar2.jpg">
									<div>New message</div>
									<small>3 minute ago</small>
									<span class="label label-info">NEW</span>
								</a>
							</li>
							<li class="avatar">
								<a href="page-inbox.html">
									<img class="avatar" src="<?php echo @THEMEADMIN;?>
assets/img/avatar3.jpg">
									<div>New message</div>
									<small>4 minute ago</small>
									<span class="label label-info">NEW</span>
								</a>
							</li>
							<li class="avatar">
								<a href="page-inbox.html">
									<img class="avatar" src="<?php echo @THEMEADMIN;?>
assets/img/avatar4.jpg">
									<div>New message</div>
									<small>30 minute ago</small>
								</a>
							</li>
							<li class="avatar">
								<a href="page-inbox.html">
									<img class="avatar" src="<?php echo @THEMEADMIN;?>
assets/img/avatar5.jpg">
									<div>New message</div>
									<small>1 hours ago</small>
								</a>
							</li>						
							<li class="dropdown-menu-footer text-center">
								<a href="page-inbox.html">View all messages</a>
							</li>	
		        		</ul>
		      		</li>
					<li class="dropdown visible-md visible-lg">
		        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="badge">3</span></a>
		        		<ul class="dropdown-menu">
							<li class="dropdown-menu-header">
								<strong>Notifications</strong>
								<div class="progress thin">
								  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
								    <span class="sr-only">30% Complete (success)</span>
								  </div>
								</div>
							</li>							
	                        <li class="clearfix">
								<i class="fa fa-comment"></i> 
	                            <a href="page-activity.html" class="notification-user"> Sharon Rose </a> 
	                            <span class="notification-action"> replied to your </span> 
	                            <a href="page-activity.html" class="notification-link"> comment</a>
	                        </li>
	                        <li class="clearfix">
	                            <i class="fa fa-pencil"></i> 
	                            <a href="page-activity.html" class="notification-user"> Nadine </a> 
	                            <span class="notification-action"> just write a </span> 
	                            <a href="page-activity.html" class="notification-link"> post</a>
	                        </li>
	                        <li class="clearfix">
	                            <i class="fa fa-trash-o"></i> 
	                            <a href="page-activity.html" class="notification-user"> Lorenzo </a> 
	                            <span class="notification-action"> just remove <a href="#" class="notification-link"> 12 files</a></span> 
	                        </li>                        
							<li class="dropdown-menu-footer text-center">
								<a href="page-activity.html">View all notification</a>
							</li>
		        		</ul>
		      		</li>  -->
					<li class="dropdown visible-md visible-lg">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gears"></i></a>					
						<ul class="dropdown-menu update-menu" role="menu">
							<li><a href="<?php echo @ADMIN;?>
Archive/post_new.html"><i class="fa fa-plus-square"></i> 写文章 </a>
	                        </li>
	                        <li><a href="<?php echo @ADMIN;?>
Pages/page_new.html"><i class="fa fa-plus-square"></i> 新建页面 </a>
	                        </li>
						</ul>
					</li>
					<li class="dropdown visible-md visible-lg">
		        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class='fa fa-user' style='margin: 22px 0 0 0;width: 32px;text-align: center;color: #c8c8c8;font-size: 18px;'></b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
		        		<ul class="dropdown-menu">
							<li class="dropdown-menu-header">
								<strong>帐号信息</strong>
							</li>						
							<li><a href="<?php echo @ADMIN;?>
User/profile.html"><i class="fa fa-user"></i> 个人信息</a></li>
							<!-- <li><a href="page-login.html"><i class="fa fa-lock"></i> 密码修改</a></li> -->
							<!--<li><a href="page-invoice.html"><i class="fa fa-usd"></i> Payments <span class="label label-default">10</span></a></li>
							<li><a href="gallery.html"><i class="fa fa-file"></i> File <span class="label label-primary">27</span></a></li> -->
							<!-- <li class="divider"></li>						 -->
							<li><a onclick="return confirm('是否退出系统?');" href="<?php echo @ADMIN;?>
?m=index&a=logout"><i class="fa fa-sign-out"></i> 退出登录</a></li>	
		        		</ul>
		      		</li>
					<li><a onclick="return confirm('是否退出系统?');" href="<?php echo @ADMIN;?>
?m=index&a=logout"><i class="fa fa-power-off"></i></a></li>
				</ul>
			</div>		
		</div>
		<!-- end: 顶部菜单 -->
		<div class="container-fluid content">
			<div class="row">					
				<!-- start: Main Menu -->
				<div class="sidebar ">
					<div class="sidebar-collapse">
						<div class="sidebar-header t-center">
	                        <span><img class="text-logo" src="<?php echo @THEMEADMIN;?>
assets/img/logo.png"><i class="fa fa-space-shuttle fa-3x blue"></i></span>
	                    </div>										
						<div class="sidebar-menu">
							<ul class="nav nav-sidebar">
								<li><a href="<?php echo @ADMIN;?>
"><i class="fa fa-tachometer"></i><span class="text">  概况</span></a></li>
								<li>
									<a href="#"><i class="fa fa-file-text"></i><span class="text"> 自定义页面</span> <span class="fa fa-angle-down pull-right"></span></a>
									<ul class="nav sub">
										<li><a href="<?php echo @ADMIN;?>
Pages/page_list.html"><i class="fa fa-list-alt"></i><span class="text"> 所有页面</span></a></li>
										<li><a href="<?php echo @ADMIN;?>
Pages/page_new.html"><i class="fa fa-plus-square"></i><span class="text"> 新建页面</span></a></li>
									</ul>	
								</li>
								<li>
									<a href="#"><i class="fa fa-list-alt"></i><span class="text"> 内容管理</span> <span class="fa fa-angle-down pull-right"></span></a>
									<ul class="nav sub">
										<li><a href="<?php echo @ADMIN;?>
Archive/category.html"><i class="fa fa-bars"></i><span class="text"> 分类目录</span></a></li>
										<li><a href="<?php echo @ADMIN;?>
Archive/post_list.html"><i class="fa fa-archive"></i><span class="text"> 所有文章</span></a></li>
										<li><a href="<?php echo @ADMIN;?>
Archive/post_new.html"><i class="fa fa-plus-square"></i><span class="text"> 写文章</span></a></li>
										<li><a href="<?php echo @ADMIN;?>
Archive/tags.html"><i class="fa fa-tags"></i><span class="text"> 标签</span></a></li>
										<li><a href="<?php echo @ADMIN;?>
Option/archive_set.html"><i class="fa fa-gear"></i><span class="text"> 文章设置</span></a></li>
									</ul>
								</li>
								<!-- <li><a href="typography.html"><i class="fa fa-comments"></i><span class="text"> 评论</span></a></li> -->
								<!-- 系统设置与用户管理只有管理员才可以操作 -->
								<?php if ($_smarty_tpl->tpl_vars['level']->value=='10'){?>
								<li>
									<a href="#"><i class="fa fa-cogs"></i><span class="text"> 系统设置</span> <span class="fa fa-angle-down pull-right"></span></a>
									<ul class="nav sub">
										<li><a href="<?php echo @ADMIN;?>
Option/site_basic.html"><i class="fa fa-asterisk"></i><span class="text"> 基本参数</span></a></li>
										<!-- <li><a href="<?php echo @ADMIN;?>
Option/wechat.html"><i class="fa fa-weixin"></i><span class="text"> 微信公众号设置</span></a></li>
										<li><a href="icons-font-awesome.html"><i class="fa fa-envelope"></i><span class="text"> 云片短信</span></a></li> -->	
									</ul>
								</li>
								<li>
									<a href="#"><i class="fa fa-user"></i><span class="text"> 用户</span> <span class="fa fa-angle-down pull-right"></span></a>
									<ul class="nav sub">
										<li><a href="<?php echo @ADMIN;?>
User/profile.html"><i class="fa fa-info-circle"></i><span class="text"> 个人信息</span></a></li>
										<!-- <li><a href="<?php echo @ADMIN;?>
Archive/user_pass.html"><i class="fa fa-lock"></i><span class="text"> 密码修改</span></a></li> -->
										<li><a href="<?php echo @ADMIN;?>
User/users.html"><i class="fa fa-users"></i><span class="text"> 用户管理</span></a></li>
										<li><a href="<?php echo @ADMIN;?>
User/user_new.html"><i class="fa fa-user-plus"></i><span class="text"> 添加新用户</span></a></li>
									</ul>
								</li>
								<?php }?>
								
								<li><a href="<?php echo @ADMIN;?>
Archive/trash.html"><i class="fa fa-trash-o"></i><span class="text">  回收站</span></a></li>
								<?php if ($_smarty_tpl->tpl_vars['level']->value=='10'){?>
								<li>
									<a href="#"><i class="fa fa-folder-open-o"></i><span class="text"> 日志</span><span class="fa fa-angle-down pull-right"></a>
									<ul class="nav sub">
										<li><a href="<?php echo @ADMIN;?>
Log/arc_log.html"><i class="fa fa-sticky-note-o"></i><span class="text"> 文章</span></a></li>
										<li><a href="<?php echo @ADMIN;?>
Log/login_log.html"><i class="fa fa-sign-in"></i><span class="text"> 用户登录</span></a></li>
									</ul>
								</li>
								<?php }?>
							</ul>
						</div>					
					</div>
					<div class="sidebar-footer">					
						
						<div class="sidebar-brand">
							hello world
						</div>
						
						<ul class="sidebar-terms">
							<!-- <li><a href="index.html#">Terms</a></li>
							<li><a href="index.html#">Privacy</a></li>
							<li><a href="index.html#">Help</a></li>
							<li><a href="index.html#">About</a></li> -->
						</ul>
						
						<div class="copyright text-center">
							<small>poweredby <i class="fa fa-star"></i> <a href='#'>zhangzc</a></small>
						</div>					
					</div>		
				</div>
				<!-- end: Main Menu -->
		<script type="text/javascript">
			// $(window).bind('beforeunload',function(){
			// 	return '确定离开此页面吗？';
			// });
		</script><?php }} ?>
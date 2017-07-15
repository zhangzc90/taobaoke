<?php

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

// 定义应用目录
define('APP_PATH','./app/');

// 定义一些系统需要用到的常量
define('IMG','/taobaoke/public/img/');
define('JS','/taobaoke/public/js/');
define('CSS','/taobaoke/public/css/');
// 前台与后台具体后台路径
define('HOME','/taobaoke/');
define('ADMIN','/taobaoke/Admin/');
define('THEME','/taobaoke/Theme/default/');
define('THEMEADMIN','/taobaoke/ThemeAdmin/default/');
// JS第三方类库包内容
define('ORG','/taobaoke/public/ext/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
<?php
header("content-type:text/html;charset=utf-8");

//启用bug调试
define('APP_DEBUG',TRUE);

//定义前台Home绝对路径
define('Home_CSS_URL','/Cancer/hospital/Public/css/');
define('Home_IMG_URL','/Cancer/hospital/Public/img/');
define('Home_JS_URL','/Cancer/hospital/Public/js/');

//定义后台Admin绝对路径
define('Admin_CSS_URL','/Cancer/hospital/Admin/Public/css/');
define('Admin_IMG_URL','/Cancer/hospital/Admin/Public/img/');
define('Admin_JS_URL','/Cancer/hospital/Admin/Public/js/');

//任何一个项目都要引入这个文件
include('../ThinkPHP/ThinkPHP.php');
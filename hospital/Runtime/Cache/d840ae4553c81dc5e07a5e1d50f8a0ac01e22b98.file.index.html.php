<?php /* Smarty version Smarty-3.1.6, created on 2016-01-05 19:46:14
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:924600965567a395f8757a6-63784011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd840ae4553c81dc5e07a5e1d50f8a0ac01e22b98' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Index/index.html',
      1 => 1451994139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '924600965567a395f8757a6-63784011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567a395f8c774',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567a395f8c774')) {function content_567a395f8c774($_smarty_tpl) {?><html>
<head>
     <meta http-equiv=content-type content="text/html; charset=utf-8" />
     <meta http-equiv=pragma content=no-cache />
     <meta http-equiv=cache-control content=no-cache />
     <meta http-equiv=expires content=-1000 />
        
        <title>管理中心 v1.0</title>
</head>
<!--  frameset标签的src属性不能设置“相对路径”相对路径会受到路由最后一级地址的影响而使得请求有可能失败*-->
    <!-- 如下的<?php echo @__CONTROLLER__;?>
不需要php的echo输出。会直接变为具体的常量信息，
    	tp框架本身有“替换机制”，会把其替换为对应的常量内容
     -->
<frameset rows="60,*">
		<frame name="head" src="<?php echo @__CONTROLLER__;?>
/head.html" frameborder="no" noresize="noresize">
	<frameset cols="180,*" frameborder="no" noresize="noresize">
		<frame name="left" src="<?php echo @__CONTROLLER__;?>
/left.html">
		<frame name="right" src="<?php echo @__CONTROLLER__;?>
/right.html">
	</frameset>
</frameset>
</html><?php }} ?>
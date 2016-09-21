<?php /* Smarty version Smarty-3.1.6, created on 2016-01-02 12:16:01
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\medicalrecordmanagement.html" */ ?>
<?php /*%%SmartyHeaderCode:3092956472122d7a2d1-07542716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0e07cc2b795bf971ed3c4870f8bebaefc90e2dc' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\medicalrecordmanagement.html',
      1 => 1451483610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3092956472122d7a2d1-07542716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56472122dd01e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56472122dd01e')) {function content_56472122dd01e($_smarty_tpl) {?><html>
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
<frameset cols="300,*" frameborder="no" noresize="noresize">
    <frame name="left" src="<?php echo @__CONTROLLER__;?>
/left.html">
    <frame name="right" src="<?php echo @__CONTROLLER__;?>
/chakanbinli_search.html">
</frameset>
</html><?php }} ?>
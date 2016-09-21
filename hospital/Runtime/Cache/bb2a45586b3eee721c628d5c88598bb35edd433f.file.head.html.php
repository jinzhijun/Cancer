<?php /* Smarty version Smarty-3.1.6, created on 2016-01-09 13:05:07
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Home/View/Index/head.html" */ ?>
<?php /*%%SmartyHeaderCode:4121435755677e4be928de2-94895006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb2a45586b3eee721c628d5c88598bb35edd433f' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Home/View/Index/head.html',
      1 => 1451994143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4121435755677e4be928de2-94895006',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5677e4be997dd',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5677e4be997dd')) {function content_5677e4be997dd($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS_URL;?>
/bigmed_head.css"/>
</head>
<body align="center">
<div id="container">
<div class="top">
<span class="top1">
欢迎<b><?php echo $_SESSION['user_name'];?>
</b><a href="#">修改密码</a>
<a style="color: #fff"  onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo @__MODULE__;?>
/User/logout" target="_top">注销</a> 
</span>
<span class="top2"><a href="#">帮助</a>&nbsp;|&nbsp;<a href="#">意见反馈</a><select id="lan" name="lan"><option>中文</option><option>English</option></select></span>
</div>
<div class="img1"><img src="<?php echo @Home_IMG_URL;?>
/cancer_head.png"></div>
<div class="box" width=100%<?php ?>>
<ul id="nav" width=100%<?php ?>>
	<li><a href="<?php echo @__MODULE__;?>
/Binli/medicalrecordmanagement.html" target="showcontent">病历管理</a></li>
	<li><a href="<?php echo @__MODULE__;?>
/Workflow/step1.html" target="showcontent">工作流</a></li>
	<li><a href="<?php echo @__MODULE__;?>
/Treatment/search.html" target="showcontent">治疗方案建议</a></li>
	<li><a href="<?php echo @__MODULE__;?>
/Report/search.html" target="showcontent">查看报告</a></li>
	<li><a href="<?php echo @__MODULE__;?>
/Queryinformation/queryinformation.html" target="showcontent">查询信息</a></li>
	<li><a href="<?php echo @__MODULE__;?>
/Reference/search.html" target="showcontent">查询参考文献</a></li>
	<li><a href="<?php echo @__MODULE__;?>
/Consulation/patientconsultation.html" target="showcontent">病人会诊</a></li>
</ul>
</div>
</div>
</body>
</html>
<?php }} ?>
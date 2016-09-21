<?php /* Smarty version Smarty-3.1.6, created on 2015-12-13 16:49:49
         compiled from "D:\xampp\htdocs\Cancer\hospital\Home\View\Works\medicalrecordmanagement_1.html" */ ?>
<?php /*%%SmartyHeaderCode:7425566d312dc12e81-30285838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '919ecb118f41c7811730980a2e24808675345e91' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Cancer\\hospital\\Home\\View\\Works\\medicalrecordmanagement_1.html',
      1 => 1449996474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7425566d312dc12e81-30285838',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_566d312dc2288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566d312dc2288')) {function content_566d312dc2288($_smarty_tpl) {?><html>
    <head></heda>
<body>
<font size="4" color="black">
<form name="form1" method="post" action="medicalrecordmanagement_search.php">
	<table border="0px">
	<tr><td><span class="left" >病历号:<input type="text" name="medicalid" id="medicalid"></span>&nbsp;&nbsp;<span class="left">姓名:<input type="text" name="name1" id="name1"></span></td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><span class="left">疾病名称:<input type="text" name="medicalname" id="medicalname" size="70"></span></td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><span class="left">基因:<input type="text" name="gene" id="gene"></span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="left">基因属性：</span><input type=radio name="">ALL<input type=radio name="">+<input type=radio name="">-
	&nbsp;&nbsp;&nbsp;<input type="submit"  name="Submit" class="btn_grey" value="查询"  size="50" onClick="return check(form1)"></td></tr>
	</table>
</form>
</font>
</center>
<a href="medicalrecordmanagement_1_view.php">查看</a>
<body>
</html>
<?php }} ?>
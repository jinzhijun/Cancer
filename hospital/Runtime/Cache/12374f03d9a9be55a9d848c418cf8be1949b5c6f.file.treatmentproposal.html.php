<?php /* Smarty version Smarty-3.1.6, created on 2015-11-15 15:35:21
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\treatmentproposal.html" */ ?>
<?php /*%%SmartyHeaderCode:3258556482e2b01e3f4-87129904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12374f03d9a9be55a9d848c418cf8be1949b5c6f' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\treatmentproposal.html',
      1 => 1447572913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3258556482e2b01e3f4-87129904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56482e2b05cc0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56482e2b05cc0')) {function content_56482e2b05cc0($_smarty_tpl) {?><html>
<head>
<meta charset="utf-8"> 
<title></title>
<link rel="stylesheet" type="text/css" href="treatmentproposal.css"/>
<style type="text/css">
body{
	border:1px solid silver;
	width:800px;
	height:auto;
	margin:0 auto;
	/* background-color:blue; */
}
#td1{
	background-color:#FFE4C4;
	
}
span{
	backgroud-color:#a2d2ff;
	text-align:center;
	font-family:Arial,Helvetica,sans-serif;
	font-size:12px;
	padding:10px;
}
span.left{
	margin-right:30px;
	background-color:#a9d6ff;
}
</style>
</head>
<body><center>
<font size="4" color="black">
<form name="form1" method="post" action="treatmentproposal_search.php">
	<table border="0px">
	<tr><td id="td1">治疗方案建议</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><span class="left" >病历号:<input type="text" name="medicalid" id="medicalid"></span>&nbsp;&nbsp;<span class="left">姓名:<input type="text" name="name" id="name"></span>
			&nbsp;&nbsp;&nbsp;<input type="submit"  name="Submit" class="btn_grey" value="查询"  size="50" onClick="return check(form1)"></td></tr>
	</table>
</form>
<script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.medicalid.value==""){
			alert("请输入病历号！");form.medicalid.focus();return false;
		}
		if(form.name.value==""){
			alert("请输入姓名！");form.name.focus();return false;
		}
form.submit();
}
</script>
</font>
</center>
</body>
</html>
<?php }} ?>
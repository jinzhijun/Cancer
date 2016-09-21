<?php /* Smarty version Smarty-3.1.6, created on 2015-11-15 15:25:14
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\viewreport.html" */ ?>
<?php /*%%SmartyHeaderCode:308425648335a895f38-07250090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d88b309072e2dd62d7c3a53561da1063eb999cb' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\viewreport.html',
      1 => 1447572307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308425648335a895f38-07250090',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5648335a8dc44',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5648335a8dc44')) {function content_5648335a8dc44($_smarty_tpl) {?><html>
<title></title>
<head>
<link rel="stylesheet" type="text/css" href="viewreport.css"/>
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
<form name="form1" method="post" action="viewreport_research.php">
	<table border="0">
	<tr><td id=td1>查看报告</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><span class="left">病历号&nbsp;&nbsp;:<input type="text" name="medicalid" id="medical"></span>&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="left">姓名&nbsp;&nbsp;:<input type="text" name="name" id="name"></span>
	&nbsp;&nbsp;&nbsp;<input type="submit"  name="Submit" class="btn_grey" value="查询"  size="50" onClick="return check(form1)"></td>
	</tr>
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
</center>
</body>
</html><?php }} ?>
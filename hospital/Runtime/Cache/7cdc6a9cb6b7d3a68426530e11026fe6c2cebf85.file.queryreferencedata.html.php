<?php /* Smarty version Smarty-3.1.6, created on 2015-11-15 15:32:33
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\queryreferencedata.html" */ ?>
<?php /*%%SmartyHeaderCode:21519564835118406f6-90943567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cdc6a9cb6b7d3a68426530e11026fe6c2cebf85' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\queryreferencedata.html',
      1 => 1447572748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21519564835118406f6-90943567',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5648351188e90',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5648351188e90')) {function content_5648351188e90($_smarty_tpl) {?><html>
<title></title>
<head>
<link rel="stylesheet" type="text/css" href="queryreferencedata.css"/>
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
<form name="myform" method="post" action="queryreferencedata_research.php">
	<table border=0px>
	<tr><td id=td1>查询参考文献</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><span class="left">标题&nbsp;&nbsp;:<input type="text" name="title" id="title"></span>&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="left">疾病类型&nbsp;&nbsp;:<input type="text" name="diseaseclass" id="diseaseclass"></span></td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><span class="left">关键词&nbsp;&nbsp;:<input type="text" name="keyword" id="keyword"></span>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit"  name="Submit" class="btn_grey" value="查询"  size="50" onClick="return check(myform)"></td>
	</tr>
	</table>
</form>
<script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.title.value==""){
			alert("请输入标题！");form.title.focus();return false;
		}
		if(form.medicalclass.value==""){
			alert("请输入疾病类型！");form.medicalclass.focus();return false;
		}
		if(form.keyword.value==""){
			alert("请输入关键词！");form.keyword.focus();return false;
		}
form.submit();
}
</script>
</center>
</body>
</html>
<?php }} ?>
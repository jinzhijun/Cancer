<?php /* Smarty version Smarty-3.1.6, created on 2015-11-09 15:14:22
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\biomarkermutationsubset_search.html" */ ?>
<?php /*%%SmartyHeaderCode:6361564046d4c84a90-05433998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3db84c02f4e42c3633a1dc156a07155bcef7317d' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\biomarkermutationsubset_search.html',
      1 => 1447053040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6361564046d4c84a90-05433998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564046d4cb771',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564046d4cb771')) {function content_564046d4cb771($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<font size="4" color="black">
<p><b>生物标记突变子集查询</b></p>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<font size="3" color="black">
<form name="myform" method="post" action="biomarkermutationsubset_search.php">
	<tr>
	<td align="right">Disease Name</td><td><input type="text" name="diseasename" id="diseasename" size="25"></td>
	<td align="right">&nbsp;Mutation Category</td><td><input type="text" name="mutationcategoey" id="mutationcategory" size="25"></td>
	<td>&nbsp;<input type=submit name="Submit" value="Search" onclick="return check(myform)">
		&nbsp;<a href="biomarkermutationsubset_add.php">Add New</a>
	</td>
	</tr>
</form>
<script language="javascript">
	function check(form){				//��֤���Ƿ�Ϊ��
		if(form.diseasename.value==""){
			alert("������diseasename��");form.diseasename.focus();return false;
		}
		if(form.mutationcategory.value==""){
			alert("������mutationcategory��");form.mutationcategory.focus();return false;
		}
form.submit();
}
</script>
</table>
</td>
</tr>
</table>
</tr>
</table>
</font>
</body>
</html><?php }} ?>
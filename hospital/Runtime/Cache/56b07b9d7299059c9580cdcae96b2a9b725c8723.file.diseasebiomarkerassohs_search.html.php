<?php /* Smarty version Smarty-3.1.6, created on 2015-11-09 15:14:11
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\diseasebiomarkerassohs_search.html" */ ?>
<?php /*%%SmartyHeaderCode:100165640467a5fc1c8-16619915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56b07b9d7299059c9580cdcae96b2a9b725c8723' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\diseasebiomarkerassohs_search.html',
      1 => 1447052979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100165640467a5fc1c8-16619915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5640467a62ee5',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640467a62ee5')) {function content_5640467a62ee5($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<font size="4" color="black">
<p><b>疾病生物标记Hs查询</b></p>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<font size="3" color="black">
<form name="myform" method="post" action="diseasebiomarkerssslhs_search.php">
	<tr>
		<td align="right">Disease Name</td><td><input type="text" name="diseasename" id="diseasename" size="25"></td>
		<td align="right">&nbsp;Gene Symbol</td><td><input type="text" name="genesymbol" id="genesymbol" size="25"></td>
		<td>&nbsp;<input type=submit name="Submit" value="Search" onclick="return check(myform)">
			&nbsp;<a href="diseasebiomarkerassohs_add.php">Add New</a>
		</td>
	</tr>
</form>
<script language="javascript">
	function check(form){				//��֤���Ƿ�Ϊ��
		if(form.diseasename.value==""){
			alert("������diseasename��");form.diseasename.focus();return false;
		}
		if(form.genesymbol.value==""){
			alert("������genesymbol��");form.genesymbol.focus();return false;
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
<?php /* Smarty version Smarty-3.1.6, created on 2015-12-23 14:20:19
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/diseasebiomarkerassohs_search.html" */ ?>
<?php /*%%SmartyHeaderCode:1084332221567a3d23a94960-99926438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb10be391d58d5f43a47cd7451c7efb5d550d997' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/diseasebiomarkerassohs_search.html',
      1 => 1450696936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1084332221567a3d23a94960-99926438',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567a3d23ae0b4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567a3d23ae0b4')) {function content_567a3d23ae0b4($_smarty_tpl) {?><html>
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
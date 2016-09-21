<?php /* Smarty version Smarty-3.1.6, created on 2015-12-27 19:03:36
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/disease_add1.html" */ ?>
<?php /*%%SmartyHeaderCode:2031279068567fc588db3fb8-29769146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78b086a4f4c8564ee70127fa35d49b7f2c8ae01a' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/disease_add1.html',
      1 => 1450696937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2031279068567fc588db3fb8-29769146',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567fc588e120c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567fc588e120c')) {function content_567fc588e120c($_smarty_tpl) {?><html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
<font size="4" color="black">
	<p><b>添加疾病信息</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr><td align="right">MeSH ID:</td><td><input type="text" name="meshid"></td><td align="right">Type:</td><td><input type="text" name="type"></td></tr>
	<tr><td align="right">Sub Type:</td><td><input type="text" name="subtype"></td><td align="right">Disease Name:</td><td><input type="text" name="diseasename"></td></tr>
	<tr><td align="right">Alias:</td><td><input type="text" name="alias"></td><td align="right">Chinese Name:</td><td><input type="text" name="chinesename"></td></tr>
	<tr><td align="right">Description:</td>
		<td><textarea name="description" cols="70" rows="3"></textarea></td>
		<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	
</table>
</form>
<hr/>
<tr>
	<td align="center">
	<input type="submit"  name="Submit" class="btn_grey" value="Save" onClick="return check(form1)">
	
	</td>
</tr>
</font>
</body>
</html><?php }} ?>
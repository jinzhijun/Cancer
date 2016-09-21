<?php /* Smarty version Smarty-3.1.6, created on 2015-12-27 20:59:25
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/reference_add1.html" */ ?>
<?php /*%%SmartyHeaderCode:1958235823567fe0ad9526c5-90867342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd525590fb27a432d63ed9873edfce99859041a1a' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/reference_add1.html',
      1 => 1451221054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1958235823567fe0ad9526c5-90867342',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567fe0ad9b581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567fe0ad9b581')) {function content_567fe0ad9b581($_smarty_tpl) {?><html>
<body>
<font size="4" color="black">
	<p><b>添加参考文献信息</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr>
	<td align="right">Article Title:</td><td><input type="text" name="articletitle"></td>
	<td align="right">Category:</td><td><select name="category">
			<option>Disease Diagnosis</option>
			<option>                 </option>
			</select></td>
	</tr>
	<tr>
	<td align="right">Disease Type:</td><td><input type="text" name="diseasetype"></td>
	<td align="right">author:</td><td><input type="text" name="author"></td>
	</tr>
	<tr>
	<td align="right">Description:</td><td><textarea name="description" cols="50" rows="10"></textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Year:</td><td><select name="year">
		<option></option>
		<option></option>
	</select></td>
	<td align="right">Published:</td><td><input type="text" name="published"></td>
	</tr>
	<tr>
	<td align="rigth">Reference Type:</td><td><select name="referencetype">
		<option>Web Link</option>
		<option></option>
	</select>
	</td>
	<td align="right">PubmedID:</td><td><input type="text" name="pubmedid"></td>
	</tr>
	<tr>
	<td align="right">Link:</td><td><input type="text" name="link"></td>
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
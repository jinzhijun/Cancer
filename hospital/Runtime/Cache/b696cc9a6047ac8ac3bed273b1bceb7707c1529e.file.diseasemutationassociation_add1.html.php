<?php /* Smarty version Smarty-3.1.6, created on 2015-12-27 19:17:09
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/diseasemutationassociation_add1.html" */ ?>
<?php /*%%SmartyHeaderCode:1976585468567fc8b5c6e194-32506081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b696cc9a6047ac8ac3bed273b1bceb7707c1529e' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/diseasemutationassociation_add1.html',
      1 => 1450696936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1976585468567fc8b5c6e194-32506081',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567fc8b5cc536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567fc8b5cc536')) {function content_567fc8b5cc536($_smarty_tpl) {?><html>
<body>
<font size="4" color="black">
	<p><b>添加疾病突变关联分析信息</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr><td align="right">Disease Name:</td>
		<td><select name="diseasename">
			<option>Esophsgeal and Esophagogastic Junction cancer</option>
			<option></option>
			</select>
		</td>
	</tr>
	<tr><td align="right">Mutation:</td>
		<td><textarea name="mutation" cols="60" rows="3">
		</textarea>
		</td>
	</tr>
	<tr><td align="right">Biomarker Type:</td>
		<td><select name="biomarkertype" >
			<option>Drug Predictive Biomarker</option>
			<option></option>
			</select></td>
	</tr>
	<tr><td align="right">Reference:</td><td><input type="text" name="reference" id="reference">Reference id is separated by "."</td></tr>
	<tr><td align="right">Medication Guide(Chinese):</td><td><textarea name="medicationguide" cols="60" rows="3"></textarea></td></tr>
	<tr><td align="right">Medication Guide(English):</td><td><textarea name="medicationguideenglish" cols="60" rows="3"></textarea></td></tr>
	<tr><td align="right">Significance of Gene Testing(Chinese):</td><td><textarea name="sogtchinese" cols="80" rows="10"></textarea></td></tr>
	<tr><td align="right">Description:</td><td><textarea name="description" cols="80" rows="10"></textarea></td></tr>
	<tr>
	<td colspan="2">Last updated:<input type="text" name="lastupdated">&nbsp;&nbsp;Operator:<input type="text" name="operator"></td>
	</tr>
        <tr>
	<td align="center">
	<input type="submit"  name="Submit" class="btn_grey" value="Save" onClick="return check(form1)">
	
	</td>
</tr>
</table>
</form>
<hr/>
</font>
</body>
</html><?php }} ?>
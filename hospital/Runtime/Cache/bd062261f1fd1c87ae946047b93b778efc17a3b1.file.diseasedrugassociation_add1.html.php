<?php /* Smarty version Smarty-3.1.6, created on 2015-12-27 19:51:19
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/diseasedrugassociation_add1.html" */ ?>
<?php /*%%SmartyHeaderCode:1997426960567fd0b7516374-96613126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd062261f1fd1c87ae946047b93b778efc17a3b1' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/diseasedrugassociation_add1.html',
      1 => 1450696936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1997426960567fd0b7516374-96613126',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567fd0b756db8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567fd0b756db8')) {function content_567fd0b756db8($_smarty_tpl) {?><html>
<body>
<font size="4" color="black">
	<p><b>添加疾病药物关联分析信息</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr>
		<td align="right">Disease Name:</td><td><input type="text" name="diseasename"></td>
		<td align="right">Disease Stage:</td>
		<td><select name="diseasestage">
			<option>&nbsp;</option>
			<option>&nbsp;</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="right">Drug Name:</td><td><input type="text" name="drugname"></td>
		<td align="right">Drug Stage:</td><td><select name="drugstage">
			<option>Approved</option>
			<option>        </option>
			</select>
		</td>
	</tr>
	<tr><td align="right">Approved Year:</td><td><select name="approvedyear">
		<option></option>
		<option></option>
		</select>
		</td><td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">Drug Stage Description:</td><td><textarea name="drugstagedescription" cols="60" rows="3"></textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Association Description:</td><td><textarea name="associationdescription" cols="60" rows="3"></textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Clinical Application Description:</td><td><textarea name="clinicalapplicationdescription" cols="60" rows="3"></textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr>
	<td align="right">Last updated:</td><td><input type="text" name="lastipdate"></td><td align="right">Operator:</td><td><input type="text" name="operator"></td>
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
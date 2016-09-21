<?php /* Smarty version Smarty-3.1.6, created on 2015-11-12 19:59:19
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\reference_add.html" */ ?>
<?php /*%%SmartyHeaderCode:20166564047d202a7a0-21186320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54fb9660c426526115ecf294e5826013ad4a2003' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\reference_add.html',
      1 => 1447329526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20166564047d202a7a0-21186320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564047d207c84',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564047d207c84')) {function content_564047d207c84($_smarty_tpl) {?><<?php ?>?php 
	require_once '../login/common.php';
	checkUserValidate1();
?<?php ?>>
<html>
<body>
<font size="4" color="black">
	<p><b>添加参考文献信息</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/reference_add1">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr>
	<td align="right">Article Title:</td><td><input type="text" name="articletitle" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ArticalTitle'];?>
"></td>
	<td align="right">Category:</td><td><select name="category" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Category'];?>
">
			<option>Disease Diagnosis</option>
			<option>                 </option>
			</select></td>
	</tr>
	<tr>
	<td align="right">Disease Type:</td><td><input type="text" name="diseasetype" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseType'];?>
"></td>
	<td align="right">Author:</td><td><input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Author'];?>
"></td>
	</tr>
	<tr>
	<td align="right">Description:</td><td><textarea name="description" cols="50" rows="10" ><?php echo $_smarty_tpl->tpl_vars['info']->value['Description'];?>
</textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Year:</td><td><select name="year" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Year'];?>
">
		<option>2012</option>
		<option>2013</option>
                <option>2014</option>
	</select></td>
	<td align="right">Published:</td><td><input type="text" name="published" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Published'];?>
"></td>
	</tr>
	<tr>
	<td align="rigth">Reference Type:</td><td><select name="referencetype" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ReferenceType'];?>
">
		<option>Web Link</option>
		<option></option>
	</select>
	</td>
	<td align="right">PubmedID:</td><td><input type="text" name="pubmedid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['PubmedID'];?>
"></td>
	</tr>
	<tr>
	<td align="right">Link:</td><td><input type="text" name="link" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Link'];?>
"></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Keywords:</td><td><input type="text" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Keywords'];?>
"></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
        <tr>
	<td align="center">
	<input type="submit"  name="Submit" class="btn_grey" value="Save" onClick="return check(form1)">
	
	</td>
</tr>
</table>
</form>
<hr/>
<
<script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.articletitle.value==""){
			alert("请输入Article Title！");form.articletitle.focus();return false;
		}
		if(form.category.value==""){
			alert("请输入Category！");form.category.focus();return false;
		}
		if(form.diseasetype.value==""){
			alert("请输入Disease Type！");form.diseasetype.focus();return false;
		}
		if(form.author.value==""){
			alert("请输入Author！");form.author.focus();return false;
		}
		if(form.description.value==""){
			alert("请输入Description！");form.description.focus();return false;
		}
		if(form.year.value==""){
			alert("请输入Year！");form.year.focus();return false;
		}
		if(form.published.value==""){
			alert("请输入Published！");form.published.focus();return false;
		}
		if(form.referencetype.value==""){
			alert("请输入Reference Type！");form.referencetype.focus();return false;
		}
		if(form.pubmedid.value==""){
			alert("请输入PubmedID！");form.pubmedid.focus();return false;
		}
		if(form.link.value==""){
			alert("请输入Link！");form.link.focus();return false;
		}
		if(form.keywords.value==""){
			alert("请输入Keywords！");form.keywords.focus();return false;
		}
form.submit();
}
</script>
</font>
</body>
</html><?php }} ?>
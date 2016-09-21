<?php /* Smarty version Smarty-3.1.6, created on 2015-12-27 21:16:20
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/reference_xiugai.html" */ ?>
<?php /*%%SmartyHeaderCode:1761585752567fdf5a24d6b4-09261534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13a6bbe22f344c3327e2b752be5131ed4289ae0b' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/reference_xiugai.html',
      1 => 1451222178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1761585752567fdf5a24d6b4-09261534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567fdf5a2ed73',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567fdf5a2ed73')) {function content_567fdf5a2ed73($_smarty_tpl) {?><html>
<body>
<font size="4" color="black">
	<p><b>添加</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/reference_update">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ID'];?>
"/>
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
	<td align="right">Drug:</td><td><input type="text" name="drug" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Drug'];?>
"></td>
	<td align="right">Biomarker:</td><td><input type="text" name="biomarker" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Biomarker'];?>
"></td>
	</tr>
	<tr>
	<td align="right">Year:</td><td><select name="year" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Year'];?>
">
		<option>2012</option>
		<option>2013</option>
                <option>2014</option>
	</select></td>
	
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


	<td align="right">Journal:</td><td><input type="text" name="journal" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Journal'];?>
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
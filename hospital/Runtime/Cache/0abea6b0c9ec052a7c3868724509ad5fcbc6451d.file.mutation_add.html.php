<?php /* Smarty version Smarty-3.1.6, created on 2015-11-14 19:07:58
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\mutation_add.html" */ ?>
<?php /*%%SmartyHeaderCode:19220564039dea76265-37488460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0abea6b0c9ec052a7c3868724509ad5fcbc6451d' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\mutation_add.html',
      1 => 1447499275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19220564039dea76265-37488460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564039deac447',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564039deac447')) {function content_564039deac447($_smarty_tpl) {?><html>
<head><title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body align="left">
<tr><td>
<font size="4" color="black">
<p><b>添加突变信息</b></p>
</font>
</td></tr>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/mutation_add1">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr><td align="right">Gene:</td><td><input type="text" name="gene" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Gene'];?>
"></td>
		<td align="right">Category:</td><td><select name="category" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Category'];?>
">
			<option>point mutation</option>
			<option>insertion</option>
			<option>deletion</option>
			<option>overexpress</option>
			<option>amplification</option>
			<option>transloction</option>
			<option>inversion</option>
			<option>reverse inversion</option>
			<option>methylation</option>
			<option>MSI</option>
			<option>CTC</option>
			</select>
		</td></tr>
	<tr><td align="right">Accession:</td><td><input type="text" name="accession" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Accession'];?>
"></td><td align="right">Accession Version:</td><td><input type="text" name="accessionversion" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AccessionVersion'];?>
"></td></tr>
	<tr><td align="right">Description:</td><td><textarea name="description" cols="50" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['Description'];?>

			</textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Operator:</td><td><input type="text" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Operator'];?>
"></td><td align="right">Last Updated:</td><td><input type="text" name="lastupdated" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['LastUpdated'];?>
"></td></tr>

<tr>
	<td align="center">
	<input type=submit name="Submit" class="btn_grey" value="Save" onclick="return check(form1)">
	
	</td>
</tr>
</table>
</form>
<hr/>




<script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.gene.value==""){
			alert("请输入gene！");form.gene.focus();return false;
		}
		if(form.category.value==""){
			alert("请输入category！");form.category.focus();return false;
		}
		if(form.accession.value==""){
			alert("请输入accession！");form.accession.focus();return false;
		}
		if(form.accessionversion.value==""){
			alert("请输入accessionversion！");form.accessionversion.focus();return false;
		}
		if(form.description.value==""){
			alert("请输入description！");form.description.focus();return false;
		}
		if(form.operator.value==""){
			alert("请输入operator！");form.operator.focus();return false;
		}
		if(form.lastupdated.value==""){
			alert("请输入lastupdated！");form.lastupdated.focus();return false;
		}

form.submit();
}
</script>
</font>
</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2015-11-14 19:08:46
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\disease_add.html" */ ?>
<?php /*%%SmartyHeaderCode:27907564041a19579c5-54651489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dff0f26bf15ff80f0fd6d224ef981fdbebde7346' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\disease_add.html',
      1 => 1447499323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27907564041a19579c5-54651489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564041a19961d',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564041a19961d')) {function content_564041a19961d($_smarty_tpl) {?><html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
<font size="4" color="black">
	<p><b>添加疾病信息</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/disease_add1">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr><td align="right">MeSH ID:</td><td><input type="text" name="meshid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['MeSHID'];?>
"></td><td align="right">Type:</td><td><input type="text" name="type" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Type'];?>
"></td></tr>
	<tr><td align="right">Sub Type:</td><td><input type="text" name="subtype" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['SubType'];?>
"></td><td align="right">Disease Name:</td><td><input type="text" name="diseasename" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseName'];?>
"></td></tr>
	<tr><td align="right">Alias:</td><td><input type="text" name="alias" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Alias'];?>
"></td><td align="right">Chinese Name:</td><td><input type="text" name="chinesename" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ChineseName'];?>
"></td></tr>
	<tr><td align="right">Description:</td>
		<td><textarea name="description" cols="70" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['Description'];?>
</textarea></td>
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
<script language="javascript">
	function check(form){				//��֤���Ƿ�Ϊ��
		if(form.meshid.value==""){
			alert("请输入meshid");form.meshid.focus();return false;
		}
		if(form.type.value==""){
			alert("请输入type");form.type.focus();return false;
		}
		if(form.subtype.value==""){
			alert("请输入subtype");form.subtype.focus();return false;
		}
		if(form.diseasename.value==""){
			alert("请输入diseasename");form.diseasename.focus();return false;
		}
		if(form.alias.value==""){
			alert("请输入alias");form.alias.focus();return false;
		}
		if(form.chinesename.value==""){
			alert("请输入chinesename");form.chinesename.focus();return false;
		}
		if(form.description.value==""){
			alert("请输入description");form.description.focus();return false;
		}
form.submit();
}
</script>
</font>
</body>
</html><?php }} ?>
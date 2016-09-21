<?php /* Smarty version Smarty-3.1.6, created on 2015-11-09 15:14:22
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\biomarkermutationsubset_add.html" */ ?>
<?php /*%%SmartyHeaderCode:7432564047ceecfcc7-32115276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '550c1e65813992377aed15198753eac44b1ff15b' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\biomarkermutationsubset_add.html',
      1 => 1447053061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7432564047ceecfcc7-32115276',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564047cef0e4d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564047cef0e4d')) {function content_564047cef0e4d($_smarty_tpl) {?><html>
<body>
<font size="4" color="black">
	<p><b>添加生物标记突变子集信息</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="biomarkermutationsubset_add_save.php">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr>
	<td align="right">Biomarker:</td><td><select name="biomarker">
		<option>NR-27</option>
		<option></option>
		</select></td>
	<td align="right">Mutation Category:</td><td><select name="mutationcategory">
		<option>CTC</option>
		<option></option>
		</select></td>
	</tr>
	<tr>
	<td align="right">Description:</td><td><textarea name="description" cols="50" rows="10"></textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td colspan="4" align="left"><p><b>Mutation Details</b><a href="#">Add</a></p></td>
	</tr>
</table>
</form>
<hr/>
<tr>
	<td align="center">
	<input type="submit"  name="Submit" class="btn_grey" value="Save" onClick="return check(form1)">
	<input type="submit"  name="Submit2" value="Close" onClick="history.go(-1)">
	</td>
</tr>

<script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.biomarker.value==""){
			alert("请输入biomarker！");form.biomarker.focus();return false;
		}
		if(form.mutationcategory.value==""){
			alert("请输入mutation category！");form.mutationcategory.focus();return false;
		}
		if(form.description.value==""){
			alert("请输入description！");form.description.focus();return false;
		}
form.submit();
}
</script>
</font>
</body>
</html><?php }} ?>
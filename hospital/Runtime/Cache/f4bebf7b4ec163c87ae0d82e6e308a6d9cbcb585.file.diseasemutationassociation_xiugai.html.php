<?php /* Smarty version Smarty-3.1.6, created on 2015-12-27 19:28:18
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/diseasemutationassociation_xiugai.html" */ ?>
<?php /*%%SmartyHeaderCode:2122549455567fcaebc4e911-15667470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4bebf7b4ec163c87ae0d82e6e308a6d9cbcb585' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/diseasemutationassociation_xiugai.html',
      1 => 1451215688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2122549455567fcaebc4e911-15667470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567fcaebcd721',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567fcaebcd721')) {function content_567fcaebcd721($_smarty_tpl) {?><html>
<body>
<font size="4" color="black">
	<p><b>添加疾病突变关联分析信息</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/diseasemutationassociation_update">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ID'];?>
"/>
	<tr><td align="right">Disease Name:</td>
		<td><select name="diseasename" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseName'];?>
">
			<option>Esophsgeal and Esophagogastic Junction cancer</option>
			<option></option>
			</select>
		</td>
	</tr>
	<tr><td align="right">Mutation:</td>
		<td><textarea name="mutation" cols="60" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['MutationCategory'];?>

		</textarea>
		</td>
	</tr>
	<tr><td align="right">Biomarker Type:</td>
		<td><select name="biomarkertype" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['BiomarkerType'];?>
">
			<option>Drug Predictive Biomarker</option>
			<option></option>
			</select></td>
	</tr>
	<tr><td align="right">Reference:</td><td><input type="text" name="reference" id="reference" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Reference'];?>
">Reference id is separated by "."</td></tr>
	<tr><td align="right">Medication Guide:</td><td><textarea name="medicationguide" cols="60" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['MedicationGuide_CN'];?>
</textarea></td></tr>
	<tr><td align="right">Medication Guide(English):</td><td><textarea name="medicationguideenglish" cols="60" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['MedicationGuide'];?>
</textarea></td></tr>
	<tr><td align="right">Significance of Gene Testing(Chinese):</td><td><textarea name="sogtchinese" cols="80" rows="10"><?php echo $_smarty_tpl->tpl_vars['info']->value['SignificanceOfGeneTesting'];?>
</textarea></td></tr>
	<tr><td align="right">Description:</td><td><textarea name="description" cols="80" rows="10"><?php echo $_smarty_tpl->tpl_vars['info']->value['Description'];?>
</textarea></td></tr>
	<tr>
	<td colspan="2">Last updated:<input type="text" name="lastupdated" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['LastUpdated'];?>
">&nbsp;&nbsp;Operator:<input type="text" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Operator'];?>
"></td>
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
		if(form.diseasename.value==""){
			alert("请输入diseasename！");form.diseasename.focus();return false;
		}
		if(form.mutation.value==""){
			alert("请输入mutation！");form.mutation.focus();return false;
		}
		if(form.biomarkertype.value==""){
			alert("请输入biomarkertype！");form.biomarkertype.focus();return false;
		}
		if(form.reference.value==""){
			alert("请输入reference！");form.reference.focus();return false;
		}
		if(form.medicationguide.value==""){
			alert("请输入medicationguide！");form.medicationguide.focus();return false;
		}
		if(form.medicationguideenglish.value==""){
			alert("请输入medicationguideenglish！");form.medicationguideenglish.focus();return false;
		}
		if(form.sogtchinese.value==""){
			alert("请输入sogtchinese！");form.sogtchinese.focus();return false;
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
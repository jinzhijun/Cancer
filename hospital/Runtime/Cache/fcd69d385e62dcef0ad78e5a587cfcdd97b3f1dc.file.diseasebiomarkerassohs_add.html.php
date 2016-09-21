<?php /* Smarty version Smarty-3.1.6, created on 2015-11-09 15:14:12
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\diseasebiomarkerassohs_add.html" */ ?>
<?php /*%%SmartyHeaderCode:23802564047c4841b04-97982886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd69d385e62dcef0ad78e5a587cfcdd97b3f1dc' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\diseasebiomarkerassohs_add.html',
      1 => 1447053009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23802564047c4841b04-97982886',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564047c48baca',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564047c48baca')) {function content_564047c48baca($_smarty_tpl) {?><html>
<body>
<font size="4" color="black">
		<p><b>添加疾病生物标记Hs信息</b></p>
</font><br>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="diseasebiomarkerassohs_add_save.php">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr>
	<td align="right">Mutation Subset:</td><td><select name="mutationsubset">
		<option>BGPR Inhibitor Sensitive Mutations-NSCLC</option>
		<option></option>
		</select>
		</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Disease:</td><td><select name="disease">
		<option>Esophageal and Esophagogastic Junction cancer</option>
		<option></option>
		</select>
	</td>
	<td align="right">Mutation Master:</td><td><select name="mutationmaster">
			<option>MQTCHI</option>
			<option></option>
	</td>
	</tr>
	<tr>
	<td align="right">Biomarker Category:</td><td><select name="biomarkercategory">
		<option></option>
		<option></option>
		</select>
	</td>
	<td align="right">Biomarker Type:</td><td><select name="biomarkertype">
			<option></option>
			<option></option>
	</td>
	</tr>
	<tr>
	<td align="right">Biomarker Description:</td><td><textarea name="biomarkerdescription" cols="50" rows="20"></textarea>
	</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Normal Range Lower Bounder:</td><td><input type="text" name="nrlb"></td>
	<td align="right">Normal Range Upper Bounder:</td><td><input type="text" name="nrub"></td>
	</tr>
	<tr>
	<td align="right">Sensitivity:</td><td><input type="text" name="sensitivity"></td>
	<td align="right">Specificity:</td><td><input type="text" name="specificity"></td>
	</tr>
	<tr>
	<td align="right">CI:</td><td><input type="text" name="ci"></td>
	<td align="right">OR:</td><td><input type="text" name="or"></td>
	</tr>
	<tr>
	<td align="right">RefSNP Number:</td><td><input type="text" name="refsnpnumber"></td>
	<td align="right">Percentage:</td><td><input type="text" name="percentage"></td>
	</tr>
	<tr>
	<td align="right">RNA Overexpression:</td><td>
		<select name="rnaoverexpression">
			<option></option>
			<option></option>
		</select></td>
	<td align="right">Source:</td><td>
		<select name="source">
			<option></option>
			<option></option>
		</select></td>
	</tr>
	<tr>
	<td align="right">Testing Method:</td><td><input type="text" name="testingmethod"</td>
	<td align="right">Reference:</td><td><input type="text" name="reference"></td>
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
		if(form.mutationsubset.value==""){
			alert("请输入mutationsubset！");form.mutationsubset.focus();return false;
		}
		if(form.disease.value==""){
			alert("请输入disease！");form.disease.focus();return false;
		}
		if(form.mutationmaster.value==""){
			alert("请输入mutationmaster！");form.mutationmaster.focus();return false;
		}
		if(form.biomarkercategory.value==""){
			alert("请输入biomarkercategory！");form.biomarkercategory.focus();return false;
		}
		if(form.biomarkertype.value==""){
			alert("请输入biomarkertype！");form.biomarkertype.focus();return false;
		}
		if(form.biomarkerdescription.value==""){
			alert("请输入biomarkerdescription！");form.biomarkerdescription.focus();return false;
		}
		if(form.normalrangelowerbounder.value==""){
			alert("请输入normalrangelowerbounder！");form.normalrangelowerbounder.focus();return false;
		}
		if(form.normalrangeupperbounder.value==""){
			alert("请输入normalrangeupperbounder！");form.normalrangeupperbounder.focus();return false;
		}
		if(form.sensitivity.value==""){
			alert("请输入sensitivity！");form.sensitivity.focus();return false;
		}
		if(form.specificity.value==""){
			alert("请输入specificity！");form.specificity.focus();return false;
		}
		if(form.ci.value==""){
			alert("请输入ci！");form.ci.focus();return false;
		}
		if(form.or.value==""){
			alert("请输入or！");form.or.focus();return false;
		}
		if(form.refsnpnumber.value==""){
			alert("请输入refsnpnumber！");form.refsnpnumber.focus();return false;
		}
		if(form.percentage.value==""){
			alert("请输入percentage！");form.percentage.focus();return false;
		}
		if(form.rnaoverexpression.value==""){
			alert("请输入rnaoverexpression！");form.rnaoverexpression.focus();return false;
		}
		if(form.source.value==""){
			alert("请输入source！");form.source.focus();return false;
		}
		if(form.testingmethod.value==""){
			alert("请输入testingmethod！");form.testingmethod.focus();return false;
		}
		if(form.reference.value==""){
			alert("请输入reference！");form.reference.focus();return false;
		}
form.submit();
}
</script>
</font>
</body>
</html><?php }} ?>
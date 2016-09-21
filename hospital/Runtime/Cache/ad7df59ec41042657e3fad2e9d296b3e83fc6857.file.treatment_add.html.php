<?php /* Smarty version Smarty-3.1.6, created on 2015-12-27 20:22:56
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/treatment_add.html" */ ?>
<?php /*%%SmartyHeaderCode:731186520567fd61bb71087-83829263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad7df59ec41042657e3fad2e9d296b3e83fc6857' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/treatment_add.html',
      1 => 1451218975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '731186520567fd61bb71087-83829263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567fd61bc7aef',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567fd61bc7aef')) {function content_567fd61bc7aef($_smarty_tpl) {?><html>
<body>
<font size="4" color="black">
	<p><b>添加治疗计划</b></p>
</font>
<hr/>
<font size="1" color="black">
<form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/treatment_add1">
	<table border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr>
	<td align="right">Disease Name:</td><td><input type="text" name="diseasename" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseName'];?>
"></td>
	<td align="right">Disease Sub Type:</td><td><input type="text" name="diseasesubtype" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseSubType'];?>
"></td>
	<td align="right">Disease Stage:</td><td><select name="diseasestage" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseStage'];?>
">
			<option>      </option>
			<option>      </option>
			</select>
	</td>
	</tr>
	<tr>
	<td align="right">Drug Category:</td><td><select name="category" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugCategory'];?>
">
		<option>None</option>
		<option></option>
		</select></td>
	<td align="right">Ranking:</td><td><input type="text" name="ranking" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Ranking'];?>
"></td>
	<td align="right">Status:</td><td><input type="text" name="status" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Status'];?>
"></td>
	</tr>
	<tr>
	<td align="right">OS(Month):</td><td><input type="text" name="os" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['OS_month'];?>
"></td>
	<td align="right">Hazard rato(OS):</td><td><input type="text" name="hazardratioos" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['HazardRatio_OS'];?>
"></td>
	<td align="right">CI(OS):</td><td><input type="text" name="cios" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['CI_OS'];?>
"></td>
	</tr>
	<tr>
	<td align="right">PFS(Month):</td><td><input type="text" name="pfs" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['PFSMonth'];?>
"></td>
	<td align="right">Hazard rato(PFS):</td><td><input type="text" name="hazardratiopfs" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['HazardRatio_PFS'];?>
"></td>
	<td align="right">CI(PFS):</td><td><input type="text" name="cipfs" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['CI_PFS'];?>
"></td>
	</tr>
	<tr>
	<td align="right">Response Rate:</td><td><input type="text" name="responserate" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ResponseRate'];?>
"></td>
	<td align="right">Compared Control:</td><td><input type="text" name="comparedcontrol" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ComparedControl'];?>
"></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Reference:</td><td><input type="text" name="reference" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Reference'];?>
">Reference id is separated by","</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Who Can Take:</td><td><input type="text" name="whocantake" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['WhoCanTake'];?>
"></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">EBM levels of evidence:</td><td><select name="ebm" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['EBMlevels'];?>
">
		<option></option>
		<option></option>
		</select> 
	</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Evidence Source:</td><td><select name="evidencesource" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['EvidenceSource'];?>
">
		<option></option>
		<option></option>
		</select> 
	</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Description(Chinese):</td><td><textarea name="descriptionchinese" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['Description_Chinese'];?>
</textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">Drug:</td><td><textarea name="drug" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['Drug'];?>
</textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Biomarker:</td><td><textarea name="biomarker" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['Biomarker'];?>
</textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	
	<tr>
	<td align="right">Clinical Information:</td><td><textarea name="climicalinformation" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['ClinicalInformation'];?>
</textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Clinical Chinese Information:</td><td><textarea name="clinicalchineseinformation" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['ClinicalChineseInformation'];?>
</textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Side effects:</td><td><textarea name="sideeffects" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['SideEffects'];?>
</textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
        <tr>
	<td align="right">Last updated:</td><td><input type="text" name="lastipdated" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['LastUpdated'];?>
"></td>
	<td align="right">Operator:</td><td><input type="text" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Operator'];?>
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
		if(form.diseasename.value==""){
			alert("请输入diseasename！");form.diseasename.focus();return false;
		}
		if(form.diseasesubtype.value==""){
			alert("请输入diseasesubtype！");form.diseasesubtype.focus();return false;
		}
		
		
		if(form.ranking.value==""){
			alert("请输入ranking！");form.rangking.focus();return false;
		}
		if(form.status.value==""){
			alert("请输入status！");form.status.focus();return false;
		}
		if(form.osmonth.value==""){
			alert("请输入osmonth！");form.osmonth.focus();return false;
		}
		if(form.hazardratoos.value==""){
			alert("请输入hazardratoos！");form.hazardratoos.focus();return false;
		}
		if(form.cios.value==""){
			alert("请输入cios！");form.cios.focus();return false;
		}
		if(form.pfsmonth.value==""){
			alert("请输入pfsmonth！");form.pfsmonth.focus();return false;
		}
		if(form.hazardratopfs.value==""){
			alert("请输入hazardratopfs！");form.hazardratopfs.focus();return false;
		}
		if(form.cipfs.value==""){
			alert("请输入cipfs！");form.cipfs.focus();return false;
		}
		if(form.responserate.value==""){
			alert("请输入responserate！");form.responserate.focus();return false;
		}
		if(form.comparedcontrol.value==""){
			alert("请输入comparedcontrol！");form.comparedcontrol.focus();return false;
		}
		if(form.whocantake.value==""){
			alert("请输入whocantake！");form.whocantake.focus();return false;
		}
		
		
		if(form.descriptionchinese.value==""){
			alert("请输入descriptionchinese！");form.descriptionchinese.focus();return false;
		}
		if(form.drug.value==""){
			alert("请输入drug！");form.drug.focus();return false;
		}
		if(form.biomarker.value==""){
			alert("请输入biomarker！");form.biomarker.focus();return false;
		}
		if(form.lastupdated.value==""){
			alert("请输入lastupdated！");form.lastupdated.focus();return false;
		}
		if(form.operator.value==""){
			alert("请输入operator！");form.operator.focus();return false;
		}
		if(form.clinicalinformation.value==""){
			alert("请输入clinicalinformation！");form.clinicalinformation.focus();return false;
		}
		if(form.clinicalchineseinformation.value==""){
			alert("请输入clinicalchineseinformation！");form.clinicalchineseinformation.focus();return false;
		}
		if(form.sideeffect.value==""){
			alert("请输入sideeffect！");form.sideeffect.focus();return false;
		}
form.submit();
}
</script>
</font>
</body>
</html><?php }} ?>
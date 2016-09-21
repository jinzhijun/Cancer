<?php /* Smarty version Smarty-3.1.6, created on 2015-12-27 20:35:06
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/treatment_xiugai.html" */ ?>
<?php /*%%SmartyHeaderCode:1414006926567fd8aa54c925-14213688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dac575f1734b9926179f75c764c5b2759cc504cb' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/treatment_xiugai.html',
      1 => 1451219671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1414006926567fd8aa54c925-14213688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567fd8aa624a7',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567fd8aa624a7')) {function content_567fd8aa624a7($_smarty_tpl) {?><html>
<body>
<font size="4" color="black">
	<p><b>添加治疗计划</b></p>
</font>
<hr/>
<font size="1" color="black">
<form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/treatment_update">
	<table border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ID'];?>
"/>
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
	<td align="right">Clinical Information:</td><td><textarea name="clinicalinformation" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['ClinicalInformation'];?>
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
	<td align="right">Last updated:</td><td><input type="text" name="lastupdated" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['LastUpdated'];?>
"></td>
	<td align="right">Operator:</td><td><input type="text" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Operator'];?>
"></td>
	<td>&nbsp;</td><td>&nbsp;</td>
        </tr>
        <tr>
	<td align="center">
	<input type="submit"  name="Submit" class="btn_grey" value="Save" onClick="">
	
	</td>
</tr>
</table>
</form>
<hr/>
</font>
</body>
</html><?php }} ?>
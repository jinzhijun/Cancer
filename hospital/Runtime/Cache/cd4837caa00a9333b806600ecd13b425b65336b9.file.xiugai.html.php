<?php /* Smarty version Smarty-3.1.6, created on 2016-01-05 11:12:05
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Treatment\xiugai.html" */ ?>
<?php /*%%SmartyHeaderCode:1230856863912432f22-58280795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd4837caa00a9333b806600ecd13b425b65336b9' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Treatment\\xiugai.html',
      1 => 1451963502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1230856863912432f22-58280795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5686391262ae1',
  'variables' => 
  array (
    'info' => 0,
    'info_A' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5686391262ae1')) {function content_5686391262ae1($_smarty_tpl) {?><html>
<head>
	<link href="<?php echo @Admin_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
<style type="text/css">
		.div_head{
    font-size: 13px;
    margin: 10px 5px;
    padding-left: 10px;
    line-height: 25px;
    height:25px;
    background-color: #E8F2FC;
    border-bottom: solid #1c94c4 1px
}
</style>
</head>
<body>
<font size="4" color="black">
	<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：治疗计划-》修改治疗计划</span>
            </span>
        </div>
</font>
<hr/>
<font size="1" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
 <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ID'];?>
"/>
	<table class="table_a" border="1" width="100%">
	<tr>
	<td align="right">Disease Name:</td><td><input type="text" name="DiseaseName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseName'];?>
"></td>
	<td align="right">Disease Sub Type:</td><td><input type="text" name="DiseaseSubType" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseSubType'];?>
"></td>
	<td align="right">Disease Stage:</td>
	<td>
	<select name="DiseaseStage">
			<option value="0">--------请选择-------</option>
               <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseStage'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseStage'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_A']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseStage'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseStage'];?>
</option>
                 <?php } ?>
			</select>
	</td>
	</tr>
	<tr>
	<td align="right">Drug Category:</td>
	<td>
	<select name="DrugCategory">
		<option value="0">--------请选择-------</option>
                <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugCategory'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['info']->value['DrugCategory'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_A']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['DrugCategory'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugCategory'];?>
</option>
                 <?php } ?>
		</select></td>
	<td align="right">Ranking:</td><td><input type="text" name="Ranking" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Ranking'];?>
"></td>
	<td align="right">Status:</td><td><input type="text" name="Status" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Status'];?>
"></td>
	</tr>
	<tr>
	<td align="right">OS(Month):</td><td><input type="text" name="OS_month" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['OS_month'];?>
"></td>
	<td align="right">Hazard rato(OS):</td><td><input type="text" name="HazardRatio_OS" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['HazardRatio_OS'];?>
"></td>
	<td align="right">CI(OS):</td><td><input type="text" name="CI_OS" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['CI_OS'];?>
"></td>
	</tr>
	<tr>
	<td align="right">PFS(Month):</td><td><input type="text" name="PFSMonth" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['PFSMonth'];?>
"></td>
	<td align="right">Hazard rato(PFS):</td><td><input type="text" name="HazardRatio_PFS" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['HazardRatio_PFS'];?>
"></td>
	<td align="right">CI(PFS):</td><td><input type="text" name="CI_PFS" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['CI_PFS'];?>
"></td>
	</tr>
	<tr>
	<td align="right">Response Rate:</td><td><input type="text" name="ResponseRate" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ResponseRate'];?>
"></td>
	<td align="right">Compared Control:</td><td><input type="text" name="ComparedControl" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ComparedControl'];?>
"></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Reference:</td><td><input type="text" name="Reference" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Reference'];?>
">Reference id is separated by","</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Who Can Take:</td><td><input type="text" name="WhoCanTake" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['WhoCanTake'];?>
"></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">EBM levels of evidence:</td>
	<td>
	<select name="EBMlevels">
		<option value="0">--------请选择-------</option>
                <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['EBMlevels'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['info']->value['EBMlevels'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_A']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['EBMlevels'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['EBMlevels'];?>
</option>
                 <?php } ?>
		</select> 
	</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Evidence Source:</td>
	<td>
	<select name="EvidenceSource">
		<option value="0">--------请选择-------</option>
                <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['EvidenceSource'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['info']->value['EvidenceSource'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_A']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['EvidenceSource'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['EvidenceSource'];?>
</option>
                 <?php } ?>
		</select> 
	</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Description(Chinese):</td><td><textarea name="Description_Chinese" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['Description_Chinese'];?>
</textarea></td>
	<td align="right">Drug Name:</td><td><input type="text" name="DrugName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugName'];?>
"></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">Drug:</td><td><textarea name="Drug" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['Drug'];?>
</textarea></td>
	<td align="right">Mutation:</td><td><input type="text" name="Mutation" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Mutation'];?>
"></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Biomarker:</td><td><textarea name="Biomarker" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['Biomarker'];?>
</textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	
	<tr>
	<td align="right">Clinical Information:</td><td><textarea name="ClinicalInformation" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['ClinicalInformation'];?>
</textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Clinical Chinese Information:</td><td><textarea name="ClinicalChineseInformation" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['ClinicalChineseInformation'];?>
</textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Side effects:</td><td><textarea name="SideEffects" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['SideEffects'];?>
</textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
     <tr>
	<td align="right">Last Updated:</td><td><input type="text" name="LastUpdated" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['LastUpdated'];?>
" readonly="readonly"></td><td  align="right">Operator:</td><td><input type="text" name="Operator" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Operator'];?>
" readonly="readonly"></td>
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
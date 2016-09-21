<?php /* Smarty version Smarty-3.1.6, created on 2015-12-26 15:41:30
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/drug_xiuai.html" */ ?>
<?php /*%%SmartyHeaderCode:37115345567e44aa719326-03747978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5647c7fcfaff7279e5f6ff1b097c2e9172aa6d26' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/drug_xiuai.html',
      1 => 1451114950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37115345567e44aa719326-03747978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567e44aa82dc9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567e44aa82dc9')) {function content_567e44aa82dc9($_smarty_tpl) {?><html>

<body>
<font size="4" color="black">
<p><b>添加药物</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/drug_update">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ID'];?>
"/>
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr><td align="right">drugBankId:</td><td><input type="text" name="drugbankid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugBankID'];?>
"></td><td align="right">Synonyms:</td><td><input type="text" name="sysnoyms" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Synonyms'];?>
"></td></tr>
	<tr><td align="right">Drug Name:</td><td><input type="text" name="drugname" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugName'];?>
"></td><td align="right">Drug Chinese Name:</td><td><input type="text" name="drugchinesename" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugChineseName'];?>
"></td></tr>
	<tr><td align="right">Maker:</td><td><input type="text" name="maker" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Maker'];?>
"></td><td align="right">Maker(CN):</td><td><input type="text" name="makercn" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Maker_CN'];?>
"></td></tr>
	<tr><td align="right">tradename:</td><td><input type="text" name="tradename" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['TradeName'];?>
"></td><td align="right">Target:</td><td><input type="text" name="target" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Target'];?>
"></td></tr>
	<tr><td align="right">Class:</td><td><input type="text" name="class" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Class'];?>
"></td><td align="right">Chinese Brand Name:</td><td><input type="text" name="chinesebrandname" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ChineseBrandName'];?>
"></td></tr>
	<tr><td align="right">Average Price:</td><td><input type="text" name="averageprice" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AveragePrice'];?>
"></td><td align="right">Drug Stage:</td><td><input type="text" name="drugstage" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugStage'];?>
"></td></tr>
        <tr><td align="right">Drug Status</td><td><input type="text" name="drugstatus" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugStatus'];?>
"></td>
	<td align="right">Avaliable In China:</td><td><select name="avaliableinchina" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AvailableInChina'];?>
">
	<option>yes</option>
	<option>no</option>
	</select>
	</td>
	</tr>
	<tr><td align="right">Country:</td><td><select name="country" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Country'];?>
">
	<option></option>
	<option></option>
	</select>
	</td>
	
	<tr><td align="right">Full Prescribing Information:</td><td><input type="text" name="fpi" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['FullPrescribingInformation'];?>
"></td>
		<td align="right">Full Prescribing Information(CN):</td><td><input type="text" name="fpicn" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['FullPrescribingInformation_CN'];?>
"></td>
	</tr>
	<tr><td align="right">Description:</td><td><textarea cols="50" rows="5" name="description"><?php echo $_smarty_tpl->tpl_vars['info']->value['Description'];?>
</textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Description(CN):</td><td><textarea cols="50" rows="5" name="description_cn"><?php echo $_smarty_tpl->tpl_vars['info']->value['Description_CN'];?>
</textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Side Effect:</td><td><textarea cols="50" rows="3" name="sideeffect"><?php echo $_smarty_tpl->tpl_vars['info']->value['SideEffect'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr><br>
	<tr><td align="right">Mechanism Of Action:</td><td><textarea cols="50" rows="3" name="mechanismofaction"><?php echo $_smarty_tpl->tpl_vars['info']->value['MechanismOfAction'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Mechanism Of Action(CN):</td><td><textarea cols="50" rows="3" name="mechanismofaction_cn"><?php echo $_smarty_tpl->tpl_vars['info']->value['MechanismOfAction_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Contraindication:</td><td><textarea cols="50" rows="3" name="contraindication"><?php echo $_smarty_tpl->tpl_vars['info']->value['Contraindication'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Contraindication(CN):</td><td><textarea cols="50" rows="3" name="contraindication_cn"><?php echo $_smarty_tpl->tpl_vars['info']->value['Contraindication_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Attention:</td><td><textarea cols="50" rows="3" name="attention"><?php echo $_smarty_tpl->tpl_vars['info']->value['Attention'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Attention(CN):</td><td><textarea cols="50" rows="3" name="attention_cn"><?php echo $_smarty_tpl->tpl_vars['info']->value['Attention_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td align="right">Untoward Effect:</td><td><textarea cols="50" rows="3" name="untowardeffect"><?php echo $_smarty_tpl->tpl_vars['info']->value['UntowardEffect'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Untoward Effect(CN):</td><td><textarea cols="50" rows="3" name="untowardeffect_cn"><?php echo $_smarty_tpl->tpl_vars['info']->value['UntowardEffect_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Pharmaeutical Composition:</td><td><textarea cols="50" rows="3" name="pharmaeuticalcomposition"><?php echo $_smarty_tpl->tpl_vars['info']->value['PharmaceuticalComposition'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Pharmaeutical Composition(CN):</td><td><textarea cols="50" rows="3" name="pharmaeuticalcomposition_cn"><?php echo $_smarty_tpl->tpl_vars['info']->value['PharmaceuticalComposition_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Drug Interaction:</td><td><textarea cols="50" rows="3" name="druginteraction"><?php echo $_smarty_tpl->tpl_vars['info']->value['DrugInteraction'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Drug Interaction(CN):</td><td><textarea cols="50" rows="3" name="druginteraction_cn"><?php echo $_smarty_tpl->tpl_vars['info']->value['DrugInteraction_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	
        <tr><td align="right">Event:</td><td><textarea cols="50" rows="3" name="event"><?php echo $_smarty_tpl->tpl_vars['info']->value['Event'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td align="right">Event(CN):</td><td><textarea cols="50" rows="3" name="event_cn"><?php echo $_smarty_tpl->tpl_vars['info']->value['Event_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td align="right">Date:</td><td><textarea cols="50" rows="3" name="date"><?php echo $_smarty_tpl->tpl_vars['info']->value['Date'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td align="center">
		<input type="submit" name="Submit" class="btn_grey" value="Save" onclick="return check(form1)">
		
</td>
</tr>
		</table>

</form>
<hr/>

<script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.drugbankid.value==""){
			alert("请输入drugbankid！");form.drugbankid.focus();return false;
		}
		if(form.synonyms.value==""){
			alert("请输入synonyms！");form.synonyms.focus();return false;
		}
		if(form.drugname.value==""){
			alert("请输入drugname！");form.drugname.focus();return false;
		}
		if(form.drugchinesename.value==""){
			alert("请输入drugchinesename！");form.drugchinesename.focus();return false;
		}
		if(form.maker.value==""){
			alert("请输入maker！");form.maker.focus();return false;
		}
		if(form.makercn.value==""){
			alert("请输入makercn！");form.makercn.focus();return false;
		}
		if(form.tradename.value==""){
			alert("请输入tradename！");form.tradename.focus();return false;
		}
		if(form.target.value==""){
			alert("请输入target！");form.target.focus();return false;
		}
		if(form.class.value==""){
			alert("请输入class！");form.class.focus();return false;
		}
		if(form.chinesebrandname.value==""){
			alert("请输入chinesebrandname！");form.chinesebrandname.focus();return false;
		}
		if(form.averageprice.value==""){
			alert("请输入averageprice！");form.averageprice.focus();return false;
		}
		if(form.drugstage.value==""){
			alert("请输入drugstage！");form.drugstage.focus();return false;
		}
		if(form.drugstatus.value==""){
			alert("请输入drugstatus！");form.isrelease.focus();return false;
		}
		if(form.avaliableinchina.value==""){
			alert("请输入avaliableinchina！");form.avaliableinchina.focus();return false;
		}
		
		
		if(form.fpi.value==""){
			alert("请输入fpi！");form.fpi.focus();return false;
		}
		if(form.fpicn.value==""){
			alert("请输入fpicn！");form.fpicn.focus();return false;
		}
		if(form.description.value==""){
			alert("请输入description！");form.description.focus();return false;
		}
		if(form.descriptioncn.value==""){
			alert("请输入descriptioncn！");form.descriptioncn.focus();return false;
		}
		if(form.sideeffect.value==""){
			alert("请输入sideeffect！");form.sideeffect.focus();return false;
		}
		if(form.moa.value==""){
			alert("请输入moa！");form.moa.focus();return false;
		}
		if(form.moacn.value==""){
			alert("请输入moacn！");form.moacn.focus();return false;
		}
		if(form.contraindication.value==""){
			alert("请输入contraindication！");form.contraindication.focus();return false;
		}
		if(form.contraindicationcn.value==""){
			alert("请输入contraindicationcn！");form.contraindicationcn.focus();return false;
		}
		if(form.attention.value==""){
			alert("请输入attention！");form.attention.focus();return false;
		}
		if(form.untowardeffect.value==""){
			alert("请输入untowardeffect！");form.untowardeffect.focus();return false;
		}
		if(form.untowardeffectcn.value==""){
			alert("请输入untowardeffectcn！");form.untowardeffectcn.focus();return false;
		}
		if(form.pharmaeuticalcomposition.value==""){
			alert("请输入pharmaeuticalcomposition！");form.pharmaeuticalcomposition.focus();return false;
		}
		if(form.pharmaeuticalcompositioncn.value==""){
			alert("请输入pharmaeuticalcompositioncn！");form.pharmaeuticalcompositioncn.focus();return false;
		}
		if(form.druginteraction.value==""){
			alert("请输入druginteraction！");form.druginteraction.focus();return false;
		}
		if(form.druginteractioncn.value==""){
			alert("请输入druginteractioncn！");form.druginteractioncn.focus();return false;
		}
form.submit();
}
</script>
</font>
</body>
</html><?php }} ?>
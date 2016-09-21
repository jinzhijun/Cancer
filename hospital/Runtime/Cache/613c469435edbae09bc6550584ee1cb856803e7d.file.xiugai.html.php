<?php /* Smarty version Smarty-3.1.6, created on 2016-01-05 19:26:10
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Drug\xiugai.html" */ ?>
<?php /*%%SmartyHeaderCode:3008456852fd67f6ca0-35996307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '613c469435edbae09bc6550584ee1cb856803e7d' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Drug\\xiugai.html',
      1 => 1451993163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3008456852fd67f6ca0-35996307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56852fd6abdc4',
  'variables' => 
  array (
    'info' => 0,
    'info_A' => 0,
    'v' => 0,
    'info_B' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56852fd6abdc4')) {function content_56852fd6abdc4($_smarty_tpl) {?><html>
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
</style></head>
<body>
<font size="4" color="black">
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：药物-》修改药物</span>
            </span>
        </div>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ID'];?>
"/>
	<table class="table_a" border="1" width="100%">
	<tr><td align="right">drugBankId:</td><td><input type="text" name="DrugBankID" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugBankID'];?>
"></td><td align="right">Synonyms:</td><td><input type="text" name="sysnoyms" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Synonyms'];?>
"></td></tr>
	<tr><td align="right">Synonyms:</td><td><input type="text" name="Synonyms" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Synonyms'];?>
"></td><td align="right"></td><td></td></tr>
	<tr><td align="right">Drug Name:</td><td><input type="text" name="DrugName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugName'];?>
"></td><td align="right">Drug Chinese Name:</td><td><input type="text" name="DrugChineseName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugChineseName'];?>
"></td></tr>
	<tr><td align="right">Maker:</td><td><input type="text" name="Maker" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Maker'];?>
"></td><td align="right">Maker(CN):</td><td><input type="text" name="Maker_CN" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Maker_CN'];?>
"></td></tr>
	<tr><td align="right">tradename:</td><td><input type="text" name="TradeName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['TradeName'];?>
"></td><td align="right">Target:</td><td><input type="text" name="Target" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Target'];?>
"></td></tr>
	<tr><td align="right">Class:</td><td><input type="text" name="Class" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Class'];?>
"></td><td align="right">Chinese Brand Name:</td><td><input type="text" name="ChineseBrandName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ChineseBrandName'];?>
"></td></tr>
	<tr><td align="right">Average Price:</td><td><input type="text" name="AveragePrice" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AveragePrice'];?>
"></td><td align="right">Drug Stage:</td><td><input type="text" name="DrugStage" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugStage'];?>
"></td></tr>
        <tr><td align="right">Drug Status</td><td><input type="text" name="DrugStatus" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugStatus'];?>
"></td>
	<td align="right">Avaliable In China:</td>
	<td>
		<select name="AvailableInChina">
			<option value="0">---------请选择------</option>
                
                <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AvailableInChina'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['info']->value['AvailableInChina'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_A']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['AvailableInChina'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=''){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['AvailableInChina'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['AvailableInChina'];?>
</option>
                <?php }?>
                 <?php } ?>
                }
		</select>
	</td>
	</tr>
	<tr><td align="right">Country:</td>
	<td><select name="Country">
                <option value="0">--------------请选择----------------</option>
                
                <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Country'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['info']->value['Country'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_B']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['Country'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2!=''){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['Country'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['Country'];?>
</option>
                <?php }?>
                 <?php } ?>
                }
        </select>
	</td>
	
	<tr><td align="right">Full Prescribing Information:</td><td><input type="text" name="FullPrescribingInformation" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['FullPrescribingInformation'];?>
"></td>
		<td align="right">Full Prescribing Information(CN):</td><td><input type="text" name="FullPrescribingInformation_CN" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['FullPrescribingInformation_CN'];?>
"></td>
	</tr>
	<tr><td align="right">Description:</td><td><textarea cols="50" rows="5" name="Description"><?php echo $_smarty_tpl->tpl_vars['info']->value['Description'];?>
</textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Description(CN):</td><td><textarea cols="50" rows="5" name="Description_CN"><?php echo $_smarty_tpl->tpl_vars['info']->value['Description_CN'];?>
</textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Side Effect:</td><td><textarea cols="50" rows="3" name="SideEffect"><?php echo $_smarty_tpl->tpl_vars['info']->value['SideEffect'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr><br>
	<tr><td align="right">Mechanism Of Action:</td><td><textarea cols="50" rows="3" name="MechanismOfAction"><?php echo $_smarty_tpl->tpl_vars['info']->value['MechanismOfAction'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Mechanism Of Action(CN):</td><td><textarea cols="50" rows="3" name="MechanismOfAction_CN"><?php echo $_smarty_tpl->tpl_vars['info']->value['MechanismOfAction_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Contraindication:</td><td><textarea cols="50" rows="3" name="Contraindication"><?php echo $_smarty_tpl->tpl_vars['info']->value['Contraindication'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Contraindication(CN):</td><td><textarea cols="50" rows="3" name="Contraindication_CN"><?php echo $_smarty_tpl->tpl_vars['info']->value['Contraindication_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Attention:</td><td><textarea cols="50" rows="3" name="Attention"><?php echo $_smarty_tpl->tpl_vars['info']->value['Attention'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Attention(CN):</td><td><textarea cols="50" rows="3" name="Attention_CN"><?php echo $_smarty_tpl->tpl_vars['info']->value['Attention_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td align="right">Untoward Effect:</td><td><textarea cols="50" rows="3" name="UntowardEffect"><?php echo $_smarty_tpl->tpl_vars['info']->value['UntowardEffect'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Untoward Effect(CN):</td><td><textarea cols="50" rows="3" name="UntowardEffect_CN"><?php echo $_smarty_tpl->tpl_vars['info']->value['UntowardEffect_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Pharmaeutical Composition:</td><td><textarea cols="50" rows="3" name="PharmaceuticalComposition"><?php echo $_smarty_tpl->tpl_vars['info']->value['PharmaceuticalComposition'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Pharmaeutical Composition(CN):</td><td><textarea cols="50" rows="3" name="PharmaceuticalComposition_CN"><?php echo $_smarty_tpl->tpl_vars['info']->value['PharmaceuticalComposition_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Drug Interaction:</td><td><textarea cols="50" rows="3" name="DrugInteraction"><?php echo $_smarty_tpl->tpl_vars['info']->value['DrugInteraction'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Drug Interaction(CN):</td><td><textarea cols="50" rows="3" name="DrugInteraction_CN"><?php echo $_smarty_tpl->tpl_vars['info']->value['DrugInteraction_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	
        <tr><td align="right">Event:</td><td><textarea cols="50" rows="3" name="Event"><?php echo $_smarty_tpl->tpl_vars['info']->value['Event'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td align="right">Event(CN):</td><td><textarea cols="50" rows="3" name="Event_CN"><?php echo $_smarty_tpl->tpl_vars['info']->value['Event_CN'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td align="right">Date:</td><td><textarea cols="50" rows="3" name="Date"><?php echo $_smarty_tpl->tpl_vars['info']->value['Date'];?>
</textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td align="center">
<tr>
	<td align="right">Last Updated:</td><td><input type="text" name="LastUpdated" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['LastUpdated'];?>
" readonly="readonly"></td><td  align="right">Operator:</td><td><input type="text" name="Operator" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Operator'];?>
" readonly="readonly"></td>
</tr>
<tr>
	<td align="center">
	<input type="submit"  name="Submit" class="btn_grey" value="Save" onClick="return check(form1)"></td>
<!--	<td><input type="submit"  name="Submit2" value="Close" onClick="history.go(-1)">
	</td>-->
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
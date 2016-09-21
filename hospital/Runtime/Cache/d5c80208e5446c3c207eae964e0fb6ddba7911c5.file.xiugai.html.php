<?php /* Smarty version Smarty-3.1.6, created on 2016-01-05 18:36:27
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Diseasemutationassociation\xiugai.html" */ ?>
<?php /*%%SmartyHeaderCode:406156861b62539df2-25922387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5c80208e5446c3c207eae964e0fb6ddba7911c5' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Diseasemutationassociation\\xiugai.html',
      1 => 1451990155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '406156861b62539df2-25922387',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56861b6263bb2',
  'variables' => 
  array (
    'info' => 0,
    'info_A' => 0,
    'v' => 0,
    'info_B' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56861b6263bb2')) {function content_56861b6263bb2($_smarty_tpl) {?><html>
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
                <span style="float: left;">当前位置是：疾病突变关联分析-》修改疾病突变关联分析</span>
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
	<tr><td align="right">MeSH ID:</td><td><input type="text" name="MeSHID" id="MeSHID" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['MeSHID'];?>
"></td></tr>
	<tr><td align="right">Disease Name:</td>
		<td><select name="DiseaseName">
			 <option value="0">-----------------------------------------------请选择-------------------------------------------</option>
                
                <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseName'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseName'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_A']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseName'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=''){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseName'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseName'];?>
</option>
                <?php }?>
                 <?php } ?>
                }
		</td>
	</tr>
	<tr><td align="right">dbSNP ID:</td><td><input type="text" name="dbSNPID" id="dbSNPID" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['dbSNPID'];?>
"></td></tr>
	<tr><td align="right">Mutation Category:</td>
		<td><textarea name="MutationCategory" cols="60" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['MutationCategory'];?>
</textarea>
		</td>
	</tr>
	<tr><td align="right">Biomarker:</td><td><input type="text" name="Biomarker" id="Biomarker" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Biomarker'];?>
"></td></tr>
	<tr><td align="right">Biomarker Type:</td>
		<td>
		<select name="BiomarkerType">
			<option value="0">-----------------------------------------------请选择-------------------------------------------</option>
                
                <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['BiomarkerType'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['info']->value['BiomarkerType'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_B']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['GeneType'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2!=''){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['GeneType'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['GeneType'];?>
</option>
                <?php }?>
                 <?php } ?>
                }
		</select>
		</td>
	</tr>
	<tr><td align="right">Reference:</td><td><input type="text" name="Reference" id="reference" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Reference'];?>
">Reference id is separated by "."</td></tr>
	<tr><td align="right">Medication Guide(Chinese):</td><td><textarea name="MedicationGuide_CN" cols="60" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['MedicationGuide_CN'];?>
</textarea></td></tr>
	<tr><td align="right">Medication Guide(English):</td><td><textarea name="MedicationGuide" cols="60" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['MedicationGuide'];?>
</textarea></td></tr>
	<tr><td align="right">Significance of Gene Testing(Chinese):</td><td><textarea name="SignificanceOfGeneTesting" cols="80" rows="10"><?php echo $_smarty_tpl->tpl_vars['info']->value['SignificanceOfGeneTesting'];?>
</textarea></td></tr>
	<tr><td align="right">Description:</td><td><textarea name="Description" cols="80" rows="10"><?php echo $_smarty_tpl->tpl_vars['info']->value['Description'];?>
</textarea></td></tr>
	<tr>
	<td colspan="2">Last updated:<input type="text" name="LastUpdated}" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['LastUpdated'];?>
" readonly="readonly">&nbsp;&nbsp;Operator:<input type="text" name="Operator" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Operator'];?>
" readonly="readonly"></td>
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
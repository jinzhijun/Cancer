<?php /* Smarty version Smarty-3.1.6, created on 2016-01-05 20:03:41
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Mutation/tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:1853602713568bb11d5c4394-41559626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a5dd1002d4c0904d8b2dc29591065a06dab8025' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Mutation/tianjia.html',
      1 => 1451994140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1853602713568bb11d5c4394-41559626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_568bb11d6acdf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568bb11d6acdf')) {function content_568bb11d6acdf($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/Cancer/ThinkPHP/Library/Vendor/Smarty/plugins/modifier.date_format.php';
?><html>
<head><title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
<body align="left">
<tr><td>
<font size="4" color="black">
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：生物标记突变-》添加生物标记突变</span>
            </span>
        </div>
</font>
</td></tr>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
	<table class="table_a" border="1" width="100%">
	<tr><td align="right">Gene ID:</td><td><input type="text" name="GeneID" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['GeneID'];?>
"></td><td>&nbsp;</td></tr>
	<tr><td align="right">Gene Name:</td><td><input type="text" name="GeneName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['GeneName'];?>
"></td>
		<td align="right">Category:</td><td><select name="Category" >
			 <option value="0">----------------请选择-----------------</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['Category'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=''){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['Category'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['Category'];?>
</option>
                <?php }?>
                 <?php } ?>
                }
			</select>
		</td></tr>
	<tr><td align="right">Accession:</td><td><input type="text" name="Accession" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Accession'];?>
"></td><td align="right">Accession Version:</td><td><input type="text" name="AccessionVersion" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AccessionVersion'];?>
"></td></tr>
	<tr><td align="right">Description:</td><td><textarea name="Description" cols="50" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['Description'];?>
</textarea></td><td align="right">Gene:</td><td><input type="text" name="Gene" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Gene'];?>
"></td></tr>

	<tr><td align="right">DNAsource:</td><td><input type="text" name="DNAsource" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DNAsource'];?>
"></td><td align="right">cDNApostion:</td><td><input type="text" name="cDNApostion" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cDNApostion'];?>
"></td></tr>
	<tr><td align="right">Chrom:</td><td><input type="text" name="Chrom" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Chrom'];?>
"></td><td align="right">Exon:</td><td><input type="text" name="Exon" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Exon'];?>
"></td></tr>
	<tr><td align="right">Codons:</td><td><input type="text" name="Codons" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Codons'];?>
"></td><td align="right">CDSmutationSyntax:</td><td><input type="text" name="CDSmutationSyntax" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['CDSmutationSyntax'];?>
"></td></tr>
	<tr><td align="right">AminoAcidSubstitution:</td><td><input type="text" name="AminoAcidSubstitution" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AminoAcidSubstitution'];?>
"></td><td align="right">HgPosition:</td><td><input type="text" name="HgPosition" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['HgPosition'];?>
"></td></tr>
	<tr><td align="right">RefSNP:</td><td><input type="text" name="RefSNP" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['RefSNP'];?>
"></td><td align="right">RefSeqatpos:</td><td><input type="text" name="RefSeqatpos" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['RefSeqatpos'];?>
"></td></tr>
	<tr><td align="right">AlternativeSeq:</td><td><input type="text" name="AlternativeSeq" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AlternativeSeq'];?>
"></td><td align="right">DrugSensitivity:</td><td><input type="text" name="DrugSensitivity" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugSensitivity'];?>
"></td></tr>
	<tr><td align="right">DrugRiskSensitivity:</td><td><input type="text" name="DrugRiskSensitivity" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugRiskSensitivity'];?>
"></td><td align="right">TargetDrugs:</td><td><input type="text" name="TargetDrugs" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['TargetDrugs'];?>
"></td></tr>
	<tr><td align="right">AssociatedDiseaseName:</td><td><input type="text" name="AssociatedDiseaseName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AssociatedDiseaseName'];?>
"></td><td align="right">ReferenceLink:</td><td><input type="text" name="ReferenceLink" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ReferenceLink'];?>
"></td></tr>
	<tr><td align="right">MutationDescription:</td><td><textarea name="MutationDescription" cols="50" rows="10"><?php echo $_smarty_tpl->tpl_vars['info']->value['MutationDescription'];?>
</textarea></td></tr>
	<tr><td align="right">Last Updated:</td><td><input type="text" name="lastupdated" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M');?>
" readonly="readonly"></td><td align="right">Operator:</td><td><input type="text" name="operator" value="<?php echo $_SESSION['admin_name'];?>
" readonly="readonly"></td></tr>

<tr>
	<td align="center">
	<input type=submit name="Submit" class="btn_grey" value="Save" onclick="return check(form1)">
	
	</td>
</tr>
</table>
</form>
<hr/>




<script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.gene.value==""){
			alert("请输入gene！");form.gene.focus();return false;
		}
		if(form.category.value==""){
			alert("请输入category！");form.category.focus();return false;
		}
		if(form.accession.value==""){
			alert("请输入accession！");form.accession.focus();return false;
		}
		if(form.accessionversion.value==""){
			alert("请输入accessionversion！");form.accessionversion.focus();return false;
		}
		if(form.description.value==""){
			alert("请输入description！");form.description.focus();return false;
		}
		if(form.operator.value==""){
			alert("请输入operator！");form.operator.focus();return false;
		}
		if(form.lastupdated.value==""){
			alert("请输入lastupdated！");form.lastupdated.focus();return false;
		}

form.submit();
}
</script>
</font>
</body>
</html><?php }} ?>
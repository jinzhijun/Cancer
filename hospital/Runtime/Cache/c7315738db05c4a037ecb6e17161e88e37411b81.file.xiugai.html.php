<?php /* Smarty version Smarty-3.1.6, created on 2015-12-31 19:07:58
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\BiomarkerPrimer\xiugai.html" */ ?>
<?php /*%%SmartyHeaderCode:214056850c64b5a032-86028963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7315738db05c4a037ecb6e17161e88e37411b81' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\BiomarkerPrimer\\xiugai.html',
      1 => 1451560073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214056850c64b5a032-86028963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56850c64cc551',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56850c64cc551')) {function content_56850c64cc551($_smarty_tpl) {?><html>
    <HEAD>
      <script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.diseasename.value==""){
			alert("请输入diseasename！");form.diseasename.focus();return false;
		}
		if(form.productlength.value==""){
			alert("请输入productlength！");form.productlength.focus();return false;
		}
		if(form.genesymble.value==""){
			alert("请输入genesymble！");form.genesymble.focus();return false;
		}
		if(form.primerdescription.value==""){
			alert("请输入primerdescription！");form.primerdescription.focus();return false;
		}
		if(form.fortemplatestrand.value==""){
			alert("请输入for_templatestrand！");form.fortemplatestrand.focus();return false;
		}
		if(form.forstart.value==""){
			alert("请输入for_start！");form.forstart.focus();return false;
		}
		if(form.forstop.value==""){
			alert("请输入for_stop！");form.forstop.focus();return false;
		}
		if(form.fortim.value==""){
			alert("请输入for_tim！");form.fortim.focus();return false;
		}
		if(form.forgc.value==""){
			alert("请输入for_gc%！");form.forgc.focus();return false;
		}
		if(form.forprimersequence.value==""){
			alert("请输入for_primersequence！");form.forprimersequence.focus();return false;
		}
		if(form.revtemplatestrand.value==""){
			alert("请输入rev_templatestrand！");form.revtemplatestrand.focus();return false;
		}
		if(form.revstart.value==""){
			alert("请输入rev_start！");form.revstart.focus();return false;
		}
		if(form.revstop.value==""){
			alert("请输入rev_stop！");form.revstop.focus();return false;
		}
		if(form.revtim.value==""){
			alert("请输入rev_tim！");form.revtim.focus();return false;
		}
		if(form.revgc.value==""){
			alert("请输入rev_gc%！");form.revgc.focus();return false;
		}
		if(form.revprimersequence.value==""){
			alert("请输入rev_primersequence！");form.revprimersequence.focus();return false;
		}
form.submit();
}
</script>
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
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：生物标记引物-》修改生物标记引物</span>
            </span>
        </div>
<font size="3" color="black">
<form name="myform" method="post" action="<?php echo @__SELF__;?>
">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ID'];?>
"/>
	<table class="table_a" border="1" width="100%" >
	<tr><td>
	<font size="4" color="black">
		<p><b>Biomarker Primer Details</b></p>
	</font>
	</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	
	<tr><td align="right">Disease Name:</td><td><input type="text" name="DiseaseName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseName'];?>
"></td><td align="right">Product Length:</td><td><input type="text" name="ProductLength" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ProductLength'];?>
"></td></tr>
	<tr><td align="right">Gene Symbol:</td><td><input type="text" name="GeneSymbol" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['GeneSymbol'];?>
"></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Gene ID:</td><td><input type="text" name="GeneID" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['GeneID'];?>
"></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Primer Description:</td><td><textarea cols="50" rows="5" name="PrimerDescription" value=""><?php echo $_smarty_tpl->tpl_vars['info']->value['PrimerDescription'];?>
</textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>
	<font size="4" color="black">
		<p><b>Forward Primer</b></p>
	</font></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">
	Template Strand:</td><td><select name="For_TemplateStrand" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['For_TemplateStrand'];?>
">
	<option>Plus</option>
	<option>Minus</option>
	</select></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Start:</td><td><input type="text" name="For_Start" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['For_Start'];?>
"></td><td align="right">Stop:</td><td><input type="text" name="For_Stop" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['For_Stop'];?>
"></td></tr>
	<tr><td align="right">Tim:</td><td><input type="text" name="For_Tm" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['For_Tm'];?>
"></td><td align="right">GC%:</td><td><input type="text" name="For_GC" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['For_GC'];?>
"></td></tr>
	<tr><td align="right">Primer Sequence:</td><td><textarea cols="50" rows="3" name="For_PrimerSequence" value=""><?php echo $_smarty_tpl->tpl_vars['info']->value['For_PrimerSequence'];?>
</textarea></td>
	<td align="right">Sample Type:</td><td><input type="text" name="SampleType" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['SampleType'];?>
"></td></tr>
	<tr><td>
	<font size="4" color="black">
		<p><b>Reverse Primer</b></p>
	</font></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">
	Template Strand:</td><td><select name="Rev_TemplateStrand" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Rev_TemplateStrand'];?>
">
		<option>Plus</option>
		<option>Minus</option>
	</select>
	</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">Start:</td><td><input type="text" name="Rev_Start" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Rev_Start'];?>
"></td><td align="right">Stop:</td><td><input type="text" name="Rev_Stop" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Rev_Stop'];?>
"></td></tr>
	<tr><td align="right">Tim:</td><td><input type="text" name="Rev_Tm" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Rev_Tm'];?>
"></td><td align="right">GC%:</td><td><input type="text" name="Rev_GC" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Rev_GC'];?>
"></td></tr>
	<tr>
		<td align="right">Primer Sequence:</td><td><textarea cols="30" roe=ws="10" name="Rev_PrimerSequence" value=""><?php echo $_smarty_tpl->tpl_vars['info']->value['Rev_PrimerSequence'];?>

	</textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
        <tr><td align="center">
	<input type=submit name="Submit"  class="btn_grey" value="Save" onClick="return check(myform)">
<!--	<input type=submit name="Submit"  value="Close" onClick="history.go(-1)"></td>-->
	</tr>
</table>
</form>
<hr/>
	
</center>
</font>
</body>
</html><?php }} ?>
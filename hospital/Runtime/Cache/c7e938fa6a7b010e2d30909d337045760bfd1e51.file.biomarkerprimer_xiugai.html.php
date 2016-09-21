<?php /* Smarty version Smarty-3.1.6, created on 2015-11-12 13:39:44
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\biomarkerprimer_xiugai.html" */ ?>
<?php /*%%SmartyHeaderCode:30575644262039c973-17561824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7e938fa6a7b010e2d30909d337045760bfd1e51' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\biomarkerprimer_xiugai.html',
      1 => 1447306694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30575644262039c973-17561824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5644262045367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5644262045367')) {function content_5644262045367($_smarty_tpl) {?><html>
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
    </head>
<body>
<font size="3" color="black">
<form name="myform" method="post" action="<?php echo @__CONTROLLER__;?>
/biomarkerprimer_add1">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" >
	<tr><td>
	<font size="4" color="black">
		<p><b>Biomarker Primer Details</b></p>
	</font>
	</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	
	<tr><td align="right">Disease Name:</td><td><input type="text" name="diseasename" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseName'];?>
"></td><td align="right">Product Length:</td><td><input type="text" name="productlength" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ProductLength'];?>
"></td></tr>
	<tr><td align="right">Gene Symble:</td><td><input type="text" name="genesymble" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['GeneSymbol'];?>
"></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Primer Description:</td><td><textarea cols="50" rows="5" name="primerdescription" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['PrimerDescription'];?>
"></textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>
	<font size="4" color="black">
		<p><b>Forward Primer</b></p>
	</font></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">
	Template Strand:</td><td><select name="fortemplatestrand" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['For_TemplateStrand'];?>
">
	<option>Plus</option>
	<option>Minus</option>
	</select></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Start:</td><td><input type="text" name="forstart" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['For_Start'];?>
"></td><td align="right">Stop:</td><td><input type="text" name="forstop" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['For_Stop'];?>
"></td></tr>
	<tr><td align="right">Tim:</td><td><input type="text" name="fortim" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['For_Tim'];?>
"></td><td align="right">GC%:</td><td><input type="text" name="forgc" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['For_GC'];?>
"></td></tr>
	<tr><td align="right">Primer Sequence:</td><td><textarea cols="50" rows="3" name="forprimersequence" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['For_PrimerSequence'];?>
"></textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>
	<font size="4" color="black">
		<p><b>Reverse Primer</b></p>
	</font></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">
	Template Strand:</td><td><select name="revtemplatestrand" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Rev_TemplateStrand'];?>
">
		<option>Plus</option>
		<option>Minus</option>
	</select>
	</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">Start:</td><td><input type="text" name="revstart" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Rev_Start'];?>
"></td><td align="right">Stop:</td><td><input type="text" name="revstop" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Rev_Stop'];?>
"></td></tr>
	<tr><td align="right">Tim:</td><td><input type="text" name="revtim" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Rev_Tm'];?>
"></td><td align="right">GC%:</td><td><input type="text" name="revgc" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Rev_GC'];?>
"></td></tr>
	<tr>
		<td align="right">Primer Sequence:</td><td><textarea cols="30" roe=ws="10" name="revprimersequence" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Rev_PrimerSequence'];?>
">
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
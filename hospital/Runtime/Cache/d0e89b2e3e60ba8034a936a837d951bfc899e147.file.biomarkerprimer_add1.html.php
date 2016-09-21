<?php /* Smarty version Smarty-3.1.6, created on 2015-11-12 12:13:27
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\biomarkerprimer_add1.html" */ ?>
<?php /*%%SmartyHeaderCode:32123564411e75974f2-85339846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0e89b2e3e60ba8034a936a837d951bfc899e147' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\biomarkerprimer_add1.html',
      1 => 1447300097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32123564411e75974f2-85339846',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564411e760c81',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564411e760c81')) {function content_564411e760c81($_smarty_tpl) {?><html>
<body>
<font size="3" color="black">
<form name="myform" method="post" action="biomarkerprimer_add_save.php">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" >
	<tr><td>
	<font size="4" color="black">
		<p><b>Biomarker Primer Details</b></p>
	</font>
	</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	
	<tr><td align="right">Disease Name:</td><td><input type="text" name="biodiseasename"></td><td align="right">Product Length:</td><td><input type="text" name="bioproductlength"></td></tr>
	<tr><td align="right">Gene Symble:</td><td><input type="text" name="biogenesymble"></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Primer Description:</td><td><textarea cols="50" rows="5" name="bioprimerdescription"></textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>
	<font size="4" color="black">
		<p><b>Forward Primer</b></p>
	</font></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">
	Template Strand:</td><td><select name="fortemplatestrand">
	<option>Plus</option>
	<option>Minus</option>
	</select></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Start:</td><td><input type="text" name="forstart"></td><td align="right">Stop:</td><td><input type="text" name="forstop"></td></tr>
	<tr><td align="right">Tim:</td><td><input type="text" name="fortim"></td><td align="right">GC%:</td><td><input type="text" name="forgc"></td></tr>
	<tr><td align="right">Primer Sequence:</td><td><textarea cols="50" rows="3" name="forprimersequence"></textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>
	<font size="4" color="black">
		<p><b>Reverse Primer</b></p>
	</font></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">
	Template Strand:</td><td><select name="revtemplatestrand">
		<option>Plus</option>
		<option>Minus</option>
	</select>
	</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">Start:</td><td><input type="text" name="revstart"></td><td align="right">Stop:</td><td><input type="text" name="revstop"></td></tr>
	<tr><td align="right">Tim:</td><td><input type="text" name="revtim"></td><td align="right">GC%:</td><td><input type="text" name="revgc"></td></tr>
	<tr>
		<td align="right">Primer Sequence:</td><td><textarea cols="30" roe=ws="10" name="revprimersequence">
	</textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
</table>
</form>
<hr/>
	<tr><td align="center">
	<input type=submit name="Submit"  class="btn_grey" value="Save" onClick="return check(myform)">
	<input type=submit name="Submit"  value="Close" onClick="history.go(-1)"></td>
	</tr>
</center>

<script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.biodiseasename.value==""){
			alert("请输入bio_diseasename！");form.biodiseasename.focus();return false;
		}
		if(form.bioproductlength.value==""){
			alert("请输入bio_productlength！");form.bioproductlength.focus();return false;
		}
		if(form.biogenesymble.value==""){
			alert("请输入bio_genesymble！");form.biogenesymble.focus();return false;
		}
		if(form.bioprimerdescription.value==""){
			alert("请输入bio_primerdescription！");form.bioprimerdescription.focus();return false;
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
</font>
</body>
</html><?php }} ?>
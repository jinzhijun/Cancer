<?php /* Smarty version Smarty-3.1.6, created on 2015-11-12 16:17:31
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\refseqs_add.html" */ ?>
<?php /*%%SmartyHeaderCode:389956403b48b4fc33-52904861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08aa9ec0d0cdbcf2acfdce1a9d9a4ffed782feea' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\refseqs_add.html',
      1 => 1447316233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '389956403b48b4fc33-52904861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56403b48b9614',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56403b48b9614')) {function content_56403b48b9614($_smarty_tpl) {?><html>
<head></head>
<body>
<font size="4" color="black">
	<p><b>添加参考序列</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/refseqs_add1">
	<table border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr><td align="right">Gene:</td><td><select name="gene" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Gene'];?>
">
		<option>1p19q</option>
		<option>     </option>
		</td>
		<td align="right">Accession:</td><td><input type="text" name="accession" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Accession'];?>
"></td></tr>
	<tr><td align="right">Accession Version:</td><td><input type="text" name="accessionversion" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AccessionVersion'];?>
"></td><td align="right">Exons Start:</td><td><input type="text" name="exonsstart" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ExonsStart'];?>
"></td></tr>
	<tr><td align="right">Exons Start Aminoacid:</td><td><input type="text" name="exonsstartaminoacid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ExonsStartAminoacid'];?>
"></td><td align="right">Exons End:</td><td><input type="text" name="exonsend" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ExonsEnd'];?>
"></td></tr>
	<tr><td align="right">CDS Start:</td><td><input type="text" name="cdsstart" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['CDSstart'];?>
"></td><td align="right">CDS End:</td><td><input type="text" name="cdsend" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['CDSend'];?>
"></td></tr>
	<tr><td align="right">Sequence:</td><td><textarea name="sequence" cols="50" rows="2" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Sequence'];?>
"></textarea></td><td>&nbsp;</td></tr>
</table>
</form>
<hr/>
<tr>
	<td align="center">
	<input type="submit"  name="Submit" class="btn_grey" value="Save" onClick="return check(form1)">
<!--	<input type="submit"  name="Submit2" value="Close" onClick="history.go(-1)">-->
	</td>
</tr>

<script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.gene.value==""){
			alert("请输入gene！");form.gene.focus();return false;
		}
		if(form.accession.value==""){
			alert("请输入accession！");form.accession.focus();return false;
		}
		if(form.accessionversion.value==""){
			alert("请输入accession version！");form.accessionversion.focus();return false;
		}
		if(form.exonsstart.value==""){
			alert("请输入exons start！");form.exonsstart.focus();return false;
		}
		if(form.exonsstartaminoacid.value==""){
			alert("请输入exons start aminoacid！");form.exonsstartaminoacid.focus();return false;
		}
		if(form.exonsend.value==""){
			alert("请输入exons end！");form.exonsend.focus();return false;
		}
		if(form.cdsstart.value==""){
			alert("请输入cds start！");form.cdsstart.focus();return false;
		}
		if(form.cdsend.value==""){
			alert("请输入cds end！");form.cdsend.focus();return false;
		}
		if(form.sequence.value==""){
			alert("请输入sequence！");form.sequence.focus();return false;
		}
form.submit();
}
</script>
<center>Copyright @Academy Of Military Medical Sciences</center>
</font>
</body>
</html><?php }} ?>
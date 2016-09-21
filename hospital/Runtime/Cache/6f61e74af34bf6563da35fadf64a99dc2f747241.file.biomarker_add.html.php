<?php /* Smarty version Smarty-3.1.6, created on 2015-12-14 09:12:02
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\biomarker_add.html" */ ?>
<?php /*%%SmartyHeaderCode:412756402ff91a8964-58525046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f61e74af34bf6563da35fadf64a99dc2f747241' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\biomarker_add.html',
      1 => 1450018376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '412756402ff91a8964-58525046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56402ff91eaff',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56402ff91eaff')) {function content_56402ff91eaff($_smarty_tpl) {?><html>
    <head>
        <script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.geneid.value==""){
			alert("请输入geneid！");form.geneid.focus();return false;
		}
		if(form.genesymbol.value==""){
			alert("请输入genesymbol！");form.genesymbol.focus();return false;
		}
		if(form.synonyms.value==""){
			alert("请输入synonyms！");form.synonyms.focus();return false;
		}
		if(form.genetype.value==""){
			alert("请输入genetype！");form.genetype.focus();return false;
		}
		if(form.chromosome.value==""){
			alert("请输入chromosome！");form.chromosome.focus();return false;
		}
		
		if(form.start.value==""){
			alert("请输入start！");form.start.focus();return false;
		}
		if(form.end.value==""){
			alert("请输入end！");form.end.focus();return false;
		}
		
form.submit();
}
</script>
    </head>
<body>
   
<font size="4" color="black">
	<p><b>添加生物标记</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/biomarker_add1">
        
	<table width="700" height="350" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr><td align="right">Gene ID:</td><td><input type="text" name="geneid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['GeneID'];?>
"></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Gene Symbol:</td><td><input type="text" name="genesymbol" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['GeneSymbol'];?>
"></td><td align="right">Synonyms:</td><td><input type="text" name="synonyms" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Synonyms'];?>
"></td></tr>
	<tr><td align="right">Gene Type:</td><td><input type="text" name="genetype" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['GeneType'];?>
"></td><td align="right">Chromosome:</td><td><input type="text" name="chromosome" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Chromosome'];?>
"></td></tr>
	<tr><td align="right">Strand:</td>
		<td><select name="strand" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Strand'];?>
">
			<option>+</option>
			<option>-</option>
		</select></td>
	<td align="right">Start:</td><td><input type="text" name="start" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Start'];?>
"></td>
	</tr>
	<tr>
	<td  align="right">
	End:</td><td><input type="text" name="end" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['End'];?>
">
	</td>
	<td  align="right">
	Category:</td><td>
	<select name="category" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Category'];?>
">
	<option>Circulating Tumor Cell</option>
	<option>                      </option>
	<option>                      </option>
	<option>                      </option>
	<option>                      </option>
	</select>
	</td>
	</tr>
	<tr>
	<td align="right">Last Updated:</td><td><input type="text" name="lastipdated" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['LastUpdated'];?>
"></td><td  align="right">Operator:</td><td><input type="text" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Operator'];?>
"></td>
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

<center>Copyright @Academy Of Military Medical Sciences</center>
</font>
</body>
</html><?php }} ?>
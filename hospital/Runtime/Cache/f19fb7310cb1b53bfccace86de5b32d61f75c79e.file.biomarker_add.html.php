<?php /* Smarty version Smarty-3.1.6, created on 2015-12-28 12:02:00
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/biomarker_add.html" */ ?>
<?php /*%%SmartyHeaderCode:409353456567a39645d7312-54964787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f19fb7310cb1b53bfccace86de5b32d61f75c79e' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/biomarker_add.html',
      1 => 1451275317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '409353456567a39645d7312-54964787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567a3964669cc',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567a3964669cc')) {function content_567a3964669cc($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/Cancer/ThinkPHP/Library/Vendor/Smarty/plugins/modifier.date_format.php';
?><html>
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
	<tr><td align="right">Gene ID:</td><td><input type="text" name="geneid" ></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Gene Symbol:</td><td><input type="text" name="genesymbol" value=""></td><td align="right">Synonyms:</td><td><input type="text" name="synonyms" value=""></td></tr>
	<tr><td align="right">Gene Type:</td><td><input type="text" name="genetype" value=""></td><td align="right">Chromosome:</td><td><input type="text" name="chromosome" value=""></td></tr>
	<tr><td align="right">Strand:</td>
		<td><select name="strand" value="">
			<option>+</option>
			<option>-</option>
		</select></td>
	<td align="right">Start:</td><td><input type="text" name="start" value=""></td>
	</tr>
	<tr>
	<td  align="right">
	End:</td><td><input type="text" name="end" value="">
	</td>
	<td  align="right">Category:</td><td>
	
<select >
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<option value="$k"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
		<?php } ?>
	</select>
	</td>
	</tr>
	<tr>
	<td align="right">Last Updated:</td><td><input tupe="text" name="lastupdated" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M');?>
" readonly="true" style="background:#CCCCCC"></td><td  align="right">Operator:</td><td><input type="text" name="operator" value="<?php echo $_SESSION['admin_name'];?>
"  readonly="true" style="background:#CCCCCC"></td>
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
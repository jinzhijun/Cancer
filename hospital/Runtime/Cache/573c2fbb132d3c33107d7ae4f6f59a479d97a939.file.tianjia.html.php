<?php /* Smarty version Smarty-3.1.6, created on 2016-04-25 10:29:31
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Biomarker\tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:76575684de6eabdd86-03430638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '573c2fbb132d3c33107d7ae4f6f59a479d97a939' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Biomarker\\tianjia.html',
      1 => 1461550978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76575684de6eabdd86-03430638',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5684de6ecf831',
  'variables' => 
  array (
    'info' => 0,
    'info_A' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5684de6ecf831')) {function content_5684de6ecf831($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\Cancer\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
   
<font size="4" color="black">
	<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：生物标记-》添加生物标记</span>
            </span>
        </div>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
        
	<table class="table_a" border="1" width="100%">
	<tr><td align="right">Gene ID:</td><td><input type="text" name="GeneID" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['GeneID'];?>
"></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Gene Symbol:</td><td><input type="text" name="GeneSymbol" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['GeneSymbol'];?>
"></td><td align="right">Synonyms:</td><td><input type="text" name="Synonyms" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Synonyms'];?>
"></td></tr>
	<tr><td align="right">Gene Type:</td><td><input type="text" name="GeneType" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['GeneType'];?>
"></td><td align="right">Chromosome:</td><td><input type="text" name="Chromosome" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Chromosome'];?>
"></td></tr>
	<tr><td align="right">Strand:</td>
		<td><select name="Strand" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Strand'];?>
">
				<option value="0">---------------请选择-----------</option>
			<option>+</option>
			<option>-</option>
		</select></td>
	<td align="right">Start:</td><td><input type="text" name="Start" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Start'];?>
"></td>
	</tr>
	<tr>
	<td  align="right">
	End:</td><td><input type="text" name="End" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['End'];?>
">
	</td>
	<td  align="right">
	Category:</td><td>
		<select name="Category">
                <option value="0">-----------------------------------------------请选择-------------------------------------------</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_A']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
	</td>
	</tr>
	<tr>
	<td align="right">Last Updated:</td><td><input type="text" name="LastUpdated" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M');?>
" readonly="readonly"></td><td  align="right">Operator:</td><td><input type="text" name="Operator" value="<?php echo $_SESSION['admin_name'];?>
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
</font>
</body>
</html><?php }} ?>
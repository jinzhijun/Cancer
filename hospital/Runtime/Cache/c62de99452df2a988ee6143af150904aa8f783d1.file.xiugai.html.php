<?php /* Smarty version Smarty-3.1.6, created on 2016-04-25 13:09:33
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Refseqs\xiugai.html" */ ?>
<?php /*%%SmartyHeaderCode:306575685253101f671-70605918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c62de99452df2a988ee6143af150904aa8f783d1' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Refseqs\\xiugai.html',
      1 => 1461550990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306575685253101f671-70605918',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_568525311290b',
  'variables' => 
  array (
    'info' => 0,
    'info_A' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568525311290b')) {function content_568525311290b($_smarty_tpl) {?><html>
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
</style>
</head>
<body>
<font size="4" color="black">
	<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：参考序列-》修改参考序列</span>
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
	<tr><td align="right">Gene:</td><td><select name="Gene" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Gene'];?>
">
		<option value="0">-----------------请选择------------------</option>
                
                <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Gene'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['info']->value['Gene'];?>
</option>
                
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_A']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['Gene'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=''){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['Gene'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['Gene'];?>
</option>
                <?php }?>
                <?php } ?>
                
		</td>
		<td align="right">Accession:</td><td><input type="text" name="Accession" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Accession'];?>
"></td></tr>
	<tr><td align="right">Accession Version:</td><td><input type="text" name="AccessionVersion" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AccessionVersion'];?>
"></td><td align="right">Exons Start:</td><td><input type="text" name="ExonsStart" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ExonsStart'];?>
"></td></tr>
	<tr><td align="right">Exons Star:</td><td><input type="text" name="ExonsStar" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ExonsStar'];?>
"></td><td align="right">Exons End:</td><td><input type="text" name="ExonsEnd" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ExonsEnd'];?>
"></td></tr>
	<tr><td align="right">CDS Start:</td><td><input type="text" name="CDSstart" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['CDSstart'];?>
"></td><td align="right">CDS End:</td><td><input type="text" name="CDSend" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['CDSend'];?>
"></td></tr>
	<tr><td align="right">Sequence:</td><td><textarea name="Sequence" cols="50" rows="10"><?php echo $_smarty_tpl->tpl_vars['info']->value['Sequence'];?>
</textarea></td><td>&nbsp;</td></tr>
	<tr>
	<td align="right">Last Updated:</td><td><input type="text" name="LastUpdated" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['LastUpdated'];?>
" readonly="readonly"></td><td  align="right">Operator:</td><td><input type="text" name="Operator" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Operator'];?>
" readonly="readonly"></td>
</tr>
</table>
<tr>
	<td align="center">
	<input type="submit"  name="Submit" class="btn_grey" value="Save" onClick="return check(form1)">
<!--	<input type="submit"  name="Submit2" value="Close" onClick="history.go(-1)">-->
	</td>
</tr>
</form>
<hr/>


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

</font>
</body>
</html><?php }} ?>
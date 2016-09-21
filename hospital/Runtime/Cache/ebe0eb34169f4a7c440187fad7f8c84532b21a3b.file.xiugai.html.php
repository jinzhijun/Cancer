<?php /* Smarty version Smarty-3.1.6, created on 2016-01-05 16:00:32
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Disease\xiugai.html" */ ?>
<?php /*%%SmartyHeaderCode:248695686154589b1a1-11276469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebe0eb34169f4a7c440187fad7f8c84532b21a3b' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Disease\\xiugai.html',
      1 => 1451980753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248695686154589b1a1-11276469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_568615459857e',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568615459857e')) {function content_568615459857e($_smarty_tpl) {?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
                <span style="float: left;">当前位置是：疾病-》修改疾病</span>
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
	<tr><td align="right">MeSH ID:</td><td><input type="text" name="MeSHID" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['MeSHID'];?>
"></td><td align="right">Type:</td><td><input type="text" name="Type" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Type'];?>
"></td></tr>
	<tr><td align="right">Sub Type:</td><td><input type="text" name="SubType" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['SubType'];?>
"></td><td align="right">Disease Name:</td><td><input type="text" name="DiseaseName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseName'];?>
"></td></tr>
	<tr><td align="right">Alias:</td><td><input type="text" name="Alias" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Alias'];?>
"></td><td align="right">Chinese Name:</td><td><input type="text" name="ChineseName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ChineseName'];?>
"></td></tr>
	<tr><td align="right">Description:</td>
		<td><textarea name="Description" cols="70" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['Description'];?>
</textarea></td>
		<td align="right">Disease Stage:</td><td><input type="text" name="DiseaseStage" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseStage'];?>
"></td>
	</tr>
	<tr>
	<td align="right">Last Updated:</td><td><input type="text" name="LastUpdated" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['LastUpdated'];?>
" readonly="readonly"></td><td  align="right">Operator:</td><td><input type="text" name="Operator" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Operator'];?>
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
	function check(form){
		if(form.meshid.value==""){
			alert("请输入meshid");form.meshid.focus();return false;
		}
		if(form.type.value==""){
			alert("请输入type");form.type.focus();return false;
		}
		if(form.subtype.value==""){
			alert("请输入subtype");form.subtype.focus();return false;
		}
		if(form.diseasename.value==""){
			alert("请输入diseasename");form.diseasename.focus();return false;
		}
		if(form.alias.value==""){
			alert("请输入alias");form.alias.focus();return false;
		}
		if(form.chinesename.value==""){
			alert("请输入chinesename");form.chinesename.focus();return false;
		}
		if(form.description.value==""){
			alert("请输入description");form.description.focus();return false;
		}
form.submit();
}
</script>
</font>
</body>
</html><?php }} ?>
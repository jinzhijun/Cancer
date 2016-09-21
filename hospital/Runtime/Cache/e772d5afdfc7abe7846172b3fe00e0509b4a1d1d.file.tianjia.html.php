<?php /* Smarty version Smarty-3.1.6, created on 2016-01-05 15:59:01
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Disease\tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:26096568613ecb14ff6-91009040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e772d5afdfc7abe7846172b3fe00e0509b4a1d1d' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Disease\\tianjia.html',
      1 => 1451980739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26096568613ecb14ff6-91009040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_568613ecb18e7',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568613ecb18e7')) {function content_568613ecb18e7($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\Cancer\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><html>
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
                <span style="float: left;">当前位置是：疾病-》添加疾病</span>
            </span>
        </div>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
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
	<td align="right">Last Updated:</td><td><input type="text" name="LastUpdated" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M');?>
" readonly="readonly"></td><td  align="right">Operator:</td><td><input type="text" name="Operator" value="<?php echo $_SESSION['admin_name'];?>
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
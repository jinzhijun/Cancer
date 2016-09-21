<?php /* Smarty version Smarty-3.1.6, created on 2016-01-05 19:47:46
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Reference/tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:1351640137568bad62a1b794-56393197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70a85e54ba1c4413699dabc27d970bf6d8b8532c' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Reference/tianjia.html',
      1 => 1451994140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1351640137568bad62a1b794-56393197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_568bad62aeb9e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568bad62aeb9e')) {function content_568bad62aeb9e($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/Cancer/ThinkPHP/Library/Vendor/Smarty/plugins/modifier.date_format.php';
?><html>
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
                <span style="float: left;">当前位置是：参考文献-》添加参考文献</span>
            </span>
        </div>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
	<table class="table_a" border="1" width="100%">
	<tr>
	<td align="right">Article Title:</td><td><input type="text" name="ArticalTitle" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ArticalTitle'];?>
"></td>
	<td align="right">Category:</td>
	<td>
	<select name="Category" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Category'];?>
">
			   <option value="0">---------------请选择----------------</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['Category'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['Category'];?>
</option>
                 <?php } ?>
			</select></td>
	</tr>
	<tr>
	<td align="right">Disease Type:</td><td><input type="text" name="DiseaseType" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseType'];?>
"></td>
	<td align="right">Author:</td><td><input type="text" name="Author" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Author'];?>
"></td>
	</tr>
	<tr>
	<td align="right">Drug:</td><td><input type="text" name="Drug" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Drug'];?>
"></td>
	<td align="right">Biomarker:</td><td><input type="text" name="Biomarker" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Biomarker'];?>
"></td>
	</tr>
	<tr>
	<td align="right">Year:</td>
	<td>
	<select name="Year" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Year'];?>
">
		 <option value="0">---------------请选择----------------</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['Year'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['Year'];?>
</option>
                 <?php } ?>
	</select></td>
	
	</tr>
	<tr>
	
	</td>
	<td align="right">PubmedID:</td><td><input type="text" name="PubmedID" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['PubmedID'];?>
"></td>
	</tr>
	<tr>

	
	<td align="right">Journal:</td><td><input type="text" name="Journal" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Journal'];?>
"></td>
	<td>&nbsp;</td><td>&nbsp;</td>
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
	function check(form){				//验证表单是否为空
		if(form.articletitle.value==""){
			alert("请输入Article Title！");form.articletitle.focus();return false;
		}
		if(form.category.value==""){
			alert("请输入Category！");form.category.focus();return false;
		}
		if(form.diseasetype.value==""){
			alert("请输入Disease Type！");form.diseasetype.focus();return false;
		}
		if(form.author.value==""){
			alert("请输入Author！");form.author.focus();return false;
		}
		if(form.description.value==""){
			alert("请输入Description！");form.description.focus();return false;
		}
		if(form.year.value==""){
			alert("请输入Year！");form.year.focus();return false;
		}
		if(form.published.value==""){
			alert("请输入Published！");form.published.focus();return false;
		}
		if(form.referencetype.value==""){
			alert("请输入Reference Type！");form.referencetype.focus();return false;
		}
		if(form.pubmedid.value==""){
			alert("请输入PubmedID！");form.pubmedid.focus();return false;
		}
		if(form.link.value==""){
			alert("请输入Link！");form.link.focus();return false;
		}
		if(form.keywords.value==""){
			alert("请输入Keywords！");form.keywords.focus();return false;
		}
form.submit();
}
</script>
</font>
</body>
</html><?php }} ?>
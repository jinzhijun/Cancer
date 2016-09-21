<?php /* Smarty version Smarty-3.1.6, created on 2016-01-04 10:06:02
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Reference\search_handle.html" */ ?>
<?php /*%%SmartyHeaderCode:188235689d38a402b80-14819752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89225442d1abaadb68ba13fb9dee71e45d858a8c' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Reference\\search_handle.html',
      1 => 1451873132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188235689d38a402b80-14819752',
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
  'unifunc' => 'content_5689d38a4972a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5689d38a4972a')) {function content_5689d38a4972a($_smarty_tpl) {?><html>
<title></title>
<head>
<style type="text/css">
    body{
	border:1px solid silver;
	width:800px;
	height:auto;
	margin:0 auto;
	/* background-color:blue; */
}
span{
	backgroud-color:#a2d2ff;
	text-align:center;
	font-family:Arial,Helvetica,sans-serif;
	font-size:12px;
	padding:10px;
}
.table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
</style>
</head>
<body><center>
<form name="myform" method="post" action="<?php echo @__SELF__;?>
">
	<table border=0px>
	<tr><td id=td1><strong>查询参考文献</strong></td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><span class="left">标题&nbsp;&nbsp;:<input type="text" name="title" id="title"></span>&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="left">疾病类型&nbsp;&nbsp;:<input type="text" name="diseaseclass" id="diseaseclass"></span></td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><span class="left">关键词&nbsp;&nbsp;:<input type="text" name="keyword" id="keyword"></span>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit"  name="Submit" class="btn_grey" value="查询"  size="50" onClick="return check(myform)"></td>
	</tr>
	</table>
</form>
</center>
<br>
<br>
<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>参考文献</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                    <tr id="product1">
<!--                        <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</font></td>-->
                        <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
</font></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ArticalTitle'];?>
</td>
                    </tr>
                    <?php } ?>
</table>
</body>
</html>
<?php }} ?>
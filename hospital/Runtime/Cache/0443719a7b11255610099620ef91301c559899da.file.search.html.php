<?php /* Smarty version Smarty-3.1.6, created on 2016-01-04 10:08:46
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Reference\search.html" */ ?>
<?php /*%%SmartyHeaderCode:55745689d3786507b0-19602379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0443719a7b11255610099620ef91301c559899da' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Reference\\search.html',
      1 => 1451873324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55745689d3786507b0-19602379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5689d37870fe6',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5689d37870fe6')) {function content_5689d37870fe6($_smarty_tpl) {?><html>
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
<form name="myform" method="post" action="<?php echo @__CONTROLLER__;?>
/search_handle">
	<table border=0px>
	<tr><td id=td1><strong>查询参考文献</strong></td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><span class="left">标题:<input type="text" name="title" id="title"></span></td>
		<td><span class="left">疾病类型:<input type="text" name="diseaseclass" id="diseaseclass"></span></td>
	    <td><span class="left">关键词:<input type="text" name="keyword" id="keyword"></span></td>
	</tr>
	<tr><center><td colspan="3"><input type="submit"  name="Submit" class="btn_grey" value="查询"  size="50" onClick="return check(myform)"></td></center>
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
                    <tr>
                      <td colspan="100" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                      </td>
                    </tr>
</table>
</body>
</html>
<?php }} ?>
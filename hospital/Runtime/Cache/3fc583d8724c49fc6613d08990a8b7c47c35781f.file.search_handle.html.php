<?php /* Smarty version Smarty-3.1.6, created on 2016-01-01 16:49:32
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Reference\search_handle.html" */ ?>
<?php /*%%SmartyHeaderCode:2201956863d9ce5a8f5-71944637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fc583d8724c49fc6613d08990a8b7c47c35781f' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Reference\\search_handle.html',
      1 => 1451638157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2201956863d9ce5a8f5-71944637',
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
  'unifunc' => 'content_56863d9d02dab',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56863d9d02dab')) {function content_56863d9d02dab($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
 .table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
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
                <span style="float: left;">当前位置是：参考文献-》参考文献查询</span>
            </span>
        </div>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<font size="3" color="black">
<form name="myform" method="post" action="<?php echo @__CONTROLLER__;?>
/search_handle">
	<tr>
		<td align="right">ID</td><td><input type="text" name="id" id="id" size="25"></td>
		<td align="right">&nbsp;Article Title</td><td><input type="text" name="articletitle" id="articletitle" size="25"></td>
		<td>&nbsp;<input type=submit name="Submit" value="Search" onclick="">
	
		</td>
	</tr>
</form>
</table>
<br><br>

<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>Artical Title</td>
                        <td>Category</td>
                        <td>Disease Type</td>
                        <td>Drug</td>
                        <td>Biomarker</td>
                        <td>Author</td>
                        <td>Year</td>
                        <td>Journal</td>
                        <td>PubmedID</td>
                        <td align="center">操作</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Category'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseType'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Drug'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Biomarker'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Author'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Year'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Journal'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['PubmedID'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/xiugai/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">修改</a></td>
                         <td><a href="<?php echo @__CONTROLLER__;?>
/delete/newIdDelet/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
" onclick="if (confirm('确定要删除吗？')) return true; else return false;">删除</a></td>
                    </tr>
                    <?php } ?>
                   
</table>
</font>
</body>
</html><?php }} ?>
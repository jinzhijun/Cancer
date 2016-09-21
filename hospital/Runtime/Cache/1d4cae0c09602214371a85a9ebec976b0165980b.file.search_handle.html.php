<?php /* Smarty version Smarty-3.1.6, created on 2016-01-05 13:52:36
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Biomarker\search_handle.html" */ ?>
<?php /*%%SmartyHeaderCode:42755684dc8d62fb84-44719794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d4cae0c09602214371a85a9ebec976b0165980b' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Biomarker\\search_handle.html',
      1 => 1451567932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42755684dc8d62fb84-44719794',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5684dc8d89cd9',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5684dc8d89cd9')) {function content_5684dc8d89cd9($_smarty_tpl) {?><html>
<title></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
                <span style="float: left;">当前位置是：生物标记-》生物标记查询</span>
            </span>
        </div>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<font size="3" color="black">
<form name="myform" method="post" action="<?php echo @__SELF__;?>
">
	<tr><td align="right">基因符号</td><td align="left"><input type="text" name="genesymbol" id="genesymbol" size="25"></td>
	    <td align="right">&nbsp;同义密码子</td><td align="left"><input type="text" name="synonyms" id="synonyms" size="25"></td>
            <td align="right">&nbsp;<input type="submit" name="Submit" value="查询" onclick=''/></td>
	
	</tr>
</form>
</table>
<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>Gene ID</td>
                        <td>Gene Symbol</td>
                        <td>Synonyms</td>
                        <td>Gene Type</td>
                        <td>Chromosome</td>
                        <td>Strand</td>
                        <td>Start</td>
                        <td>End</td>
                        <td>Category</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
</font></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['GeneID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['GeneSymbol'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Synonyms'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['GeneType'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Chromosome'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Strand'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Start'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['End'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Category'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/xiugai/genes_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">修改</a></td>
                       <td><a href="<?php echo @__CONTROLLER__;?>
/delete/newIdDelet/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
" onclick="if (confirm('确定要删除吗？')) return true; else return false;">删除</a></td>
                    </tr>
                    <?php } ?>
                    
</table>
</body>
</html><?php }} ?>
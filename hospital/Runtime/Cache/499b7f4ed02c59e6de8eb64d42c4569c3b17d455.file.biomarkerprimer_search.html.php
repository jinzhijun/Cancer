<?php /* Smarty version Smarty-3.1.6, created on 2015-11-13 18:49:43
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\biomarkerprimer_search.html" */ ?>
<?php /*%%SmartyHeaderCode:42005640362e2a2272-76758355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '499b7f4ed02c59e6de8eb64d42c4569c3b17d455' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\biomarkerprimer_search.html',
      1 => 1447411615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42005640362e2a2272-76758355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5640362e2e490',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640362e2e490')) {function content_5640362e2e490($_smarty_tpl) {?><html>
<title></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
 .table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
</style>
</head>
<body>
<font size="4" color="black">
<p><b>生物标记引物查询</b></p>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<fonr size="3" color="black">
<form name="myform" method="post" action="<?php echo @__CONTROLLER__;?>
/biomarkerprimer_search1"
	<tr>
		<td align="right">Disease Name</td><td><input type="text" name="diseasename" id="diseasename" size="25"></td>
		<td align="right">&nbsp;Gene Symbol</td><td><input type="text" name="genesymbol" id="genesymbol" size="25"></td>
		<td align="right">&nbsp;<input type="submit" name="Submit" value="Search" onclick=""></td>
		
	</tr>
</form>
</table>   
<br><br>

<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                         <td>序号</td>
                        <td>Disease Name</td>
                        <td>Product Length</td>
                        <td>Gene Symbol</td>
                        <td>Gene ID</td>
                        <td>Primer Description</td>
                        <td>Sample Type</td>
                        <td>For_Template Strand</td>
                        <td>For_Start</td>
                        <td>For_Stop</td>
                        <td>For_Tm</td>
                        <td>For_GC</td>
                        <td>For_Primer Sequence</td>
                        <td>Rev_Template Strand</td>
                        <td>Rev_Start</td>
                        <td>Rev_Stop</td>
                        <td>Rev_Tm</td>
                        <td>Rev_GC</td>
                        <td>Rev_Primer Sequence</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ProductLength'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['GeneSymbol'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['GeneID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['PrimerDescription'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['SampleType'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['For_TemplateStrand'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['For_Start'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['For_Stop'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['For_Tm'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['For_GC'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['For_PrimerSequence'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Rev_TemplateStrand'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Rev_Start'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Rev_Stop'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Rev_Tm'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Rev_GC'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Rev_PrimerSequence'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/biomarkerprimer_xiugai/genes_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseName'];?>
">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/biomarkerprimer_delete/newIdDelet/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
" onclick="if (confirm('确定要删除吗？')) return true; else return false;">删除</a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                      <td colspan="100" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                      </td>
                    </tr>
</table>

</body>
</html><?php }} ?>
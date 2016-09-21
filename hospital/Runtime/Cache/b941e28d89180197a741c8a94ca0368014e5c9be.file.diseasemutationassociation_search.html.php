<?php /* Smarty version Smarty-3.1.6, created on 2015-11-13 19:09:56
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\diseasemutationassociation_search.html" */ ?>
<?php /*%%SmartyHeaderCode:287775640424655dba1-32113607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b941e28d89180197a741c8a94ca0368014e5c9be' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\diseasemutationassociation_search.html',
      1 => 1447412929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287775640424655dba1-32113607',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5640424659083',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640424659083')) {function content_5640424659083($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
 .table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
</style>
</head>
<body>
<font size="4" color="black">
<p><b>疾病突变关联分析查询</b></p>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<font size="3" color="black">
<form name="myform" method="post" action="<?php echo @__CONTROLLER__;?>
/diseasemutationassociation_search1">
	<tr>
		<td align="right">Disease Name</td>
		<td><input type="text" name="diseasename" id="diseasename" size="25"></td>
		<td>&nbsp;
		<input type="submit" name="Submit" value="Search" onclick="return check(myform)">
		
		
		</td>
	</tr>
</form>
</table>
<br><br>
<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>DiseaseName</td>
                        <td>Mutation</td>
                        <td>Biomarker</td>
                        <td>Reference</td>
                        <td>MedicationGuide_CN</td>
                        <td>MedicationGuide</td>
                        <td>Significance Of GeneTesting</td>
                        <td>Description</td>
                        <td>LastUpdated</td>
                        <td>Operator</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MutationCatrgory'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Biomarker'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Reference'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MedicationGuide_CN'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MedicationGuide'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['SignificanceOfGeneTesting'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Description'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['LastUpdated'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Operator'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/diseasemutationassociation_xiugai/genes_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseName'];?>
">修改</a></td>
                         <td><a href="<?php echo @__CONTROLLER__;?>
/diseasemutationassociation_delete/newIdDelet/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
" onclick="if (confirm('确定要删除吗？')) return true; else return false;">删除</a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                      <td colspan="100" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                      </td>
                    </tr>
</table>
</font>
</body>
</html><?php }} ?>
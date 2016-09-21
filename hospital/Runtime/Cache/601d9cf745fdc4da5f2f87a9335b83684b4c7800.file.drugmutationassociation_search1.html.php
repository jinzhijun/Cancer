<?php /* Smarty version Smarty-3.1.6, created on 2015-11-14 18:53:54
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\drugmutationassociation_search1.html" */ ?>
<?php /*%%SmartyHeaderCode:13930564712c295d715-65697215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '601d9cf745fdc4da5f2f87a9335b83684b4c7800' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\drugmutationassociation_search1.html',
      1 => 1447498144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13930564712c295d715-65697215',
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
  'unifunc' => 'content_564712c29ea13',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564712c29ea13')) {function content_564712c29ea13($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
 .table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
</style>
</head>
<body>
<font size="4" color="black">
<p><b>药物突变关联分析查询</b></p>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<font size="3" color="black">
<form name="myform" method="post" action="<?php echo @__SELF__;?>
">
	<tr>
		<td align="right">Drug Name</td><td><input type="text" name="drugname" id="drugname" size="25"></td>
		<td>&nbsp;<input type="submit" name="Submit" value="Search" onclick=""></td>
	</tr>
</form>
</table>
<br><br>

<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>Drug Name</td>
                        <td>Mutation</td>
                        <td>Biomarker Type</td>
                        <td>Reference</td>
                        <td>Medication Guide</td>
                        <td>MedicationGuide_English</td>
                        <td>Significance Of Gene Testing_Chinese</td>
                        <td>Description</td>
                        <td>Operator</td>
                        <td>LastUpdate</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Mutation'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['BiomarkerType'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Reference'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MedicationGuide'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MedicationGuide_English'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['SignificanceOfGeneTesting_Chinese'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Description'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Operator'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['LastUpdate'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/drugmutationassociation_xiugai/genes_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/drugmutationassociation_delete/newIdDelet/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
" onclick="if (confirm('确定要删除吗？')) return true; else return false;">删除</a></td>
                    </tr>
                    <?php } ?>
                   
</table>
</font>
</body>
</html><?php }} ?>
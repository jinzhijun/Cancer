<?php /* Smarty version Smarty-3.1.6, created on 2015-11-13 18:57:47
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\refseqs_search.html" */ ?>
<?php /*%%SmartyHeaderCode:2093856403b46ab30e1-61538071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '936ab3972eeda9b87ad95ea2138075578acffdd1' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\refseqs_search.html',
      1 => 1447412210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2093856403b46ab30e1-61538071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56403b46af95f',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56403b46af95f')) {function content_56403b46af95f($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
 .table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
</style>
</head>
<body>
<font size="4" color="black">
<p><b>参考序列查询</b></p>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<font size="3" color="black">
<form name="myform" method="post" action="<?php echo @__CONTROLLER__;?>
/refseqs_search1">
	<tr>
		<td align="right">Accession</td><td><input type="text" name="accession" id="accession" size="25"></td>
		<td align="right">Sequence</td><td><input type="text" name="sequence" id="sequence" size="25"></td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
		<td align="right">CDS Start</td><td><input type="text" name="cdsstart" id="cdsstart" size="25"></td>
		<td align="right">CDS End</td><td><input type="text" name="cdsend" id="cdsend" size="25"></td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
		<td colspan="2" align="center">
		<input type=submit name="Submit" value="Search" onclick="">
		</td>
		
	</tr>
</form>

</table>
<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>Gene</td>
                        <td>Accession</td>
                        <td>AccessionVersion</td>
                        <td>Exons Start</td>
                        <td>Exons End</td>
                        <td>Exons Star</td>
                        <td>CDS Start</td>
                        <td>CDS End</td>
                        <td>Sequence</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Gene'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Accession'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['AccessionVersion'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ExonsStart'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ExonsEnd'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ExonsStar'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['CDSstart'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['CDSend'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Sequence'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/refseqs_xiugai/genes_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['Gene'];?>
">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/refseqs_delete/newIdDelet/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
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
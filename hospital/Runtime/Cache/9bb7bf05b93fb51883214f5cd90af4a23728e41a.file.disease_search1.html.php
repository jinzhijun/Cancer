<?php /* Smarty version Smarty-3.1.6, created on 2015-11-12 17:17:10
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\disease_search1.html" */ ?>
<?php /*%%SmartyHeaderCode:17018564458e5935e82-00449698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bb7bf05b93fb51883214f5cd90af4a23728e41a' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\disease_search1.html',
      1 => 1447319818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17018564458e5935e82-00449698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564458e59a731',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564458e59a731')) {function content_564458e59a731($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
 .table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
</style>
</head>
<body>
<font size="4" color="black">
<p><b>疾病查询</b></p>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<font size="3" color="black">
<form name="myform" method="post" action="<?php echo @__SELF__;?>
">
	<tr>
		<td align="right">Disease Name</td><td><input type="text" name="diseasename" id="diseasename" size="25"></td>
		<td align="right">&nbsp;Type</td><td><input type="text" name="type" id="type" size="25"></td>
		<td align="right">&nbsp;<input type=submit name="Submit" value="Search" onclick=""></td>
		
	</tr>
</form>
</table>
<br><br>
<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>MeSHID</td>
                        <td>Type</td>
                        <td>Sub Type</td>
                        <td>Alias</td>
                        <td>Disease Name</td>
                        <td>Chinese Name</td>
                        <td>Description</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MeSHID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Type'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['SubType'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Alias'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ChineaseName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Description'];?>
</td>
                        
                        <td><a href="<?php echo @__CONTROLLER__;?>
/disease_xiugai/genes_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['MeSHID'];?>
">修改</a></td>
                        <td><a href="javascript:;" onclick="delete_product(1)">删除</a></td>
                    </tr>
                    <?php } ?>
                    
</table>
</font>
</body>
</html><?php }} ?>
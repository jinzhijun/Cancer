<?php /* Smarty version Smarty-3.1.6, created on 2016-01-05 15:34:36
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Drugdiseaseassociation\search_handle.html" */ ?>
<?php /*%%SmartyHeaderCode:150856862d5fb1f4c0-40086416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a849dd949ee4bcdb2584859223a761bacb912e98' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Drugdiseaseassociation\\search_handle.html',
      1 => 1451979126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150856862d5fb1f4c0-40086416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56862d5fc57d0',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56862d5fc57d0')) {function content_56862d5fc57d0($_smarty_tpl) {?><html>
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
                <span style="float: left;">当前位置是：疾病药物关联分析-》疾病药物关联分析查询</span>
            </span>
        </div>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<font size="3" color="black">
<form name="myform" method="post" action="<?php echo @__SELF__;?>
">
	<tr>
		<td align="right">Disease Name</td><td><input type="text" name="diseasename" id="diseasename" size="25"></td>
		<td align="right">&nbsp;Drug Name</td><td><input type="text" name="drugname" id="drugname" size="25"></td>
                <td>&nbsp;<input type=submit name="Submit" value="Search" onclick=""></td>
		
		
	</tr>
</form>
</table>
<br><br>
<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                       <td>MeSHID</td>
                        <td>Disease Name</td>
                        <td>Disease Stage</td>
                        <td>DrugbankID</td>
                        <td>Drug Name</td>
                        <td>Drug Stage</td>
                        <td>Started Year</td>
                        <td>Approved Year</td>
                        <td>Drug Stage Description</td>
                        <td>Association Description</td>
                        <td>Clinical Application Description</td>
                        <td>Operator</td>
                        <td>Last Update</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MeSHID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseStage'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugbankID'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugStage'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['StartedYear'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ApprovedYear'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugStageDescription'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['AssociationDescription'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ClinicalApplicationDescription'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Operator'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['LastUpdated'];?>
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
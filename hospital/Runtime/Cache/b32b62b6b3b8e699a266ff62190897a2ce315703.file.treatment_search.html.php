<?php /* Smarty version Smarty-3.1.6, created on 2015-11-14 15:56:44
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Genes\treatment_search.html" */ ?>
<?php /*%%SmartyHeaderCode:2542656404648393704-77206472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b32b62b6b3b8e699a266ff62190897a2ce315703' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Genes\\treatment_search.html',
      1 => 1447487568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2542656404648393704-77206472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564046483c638',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564046483c638')) {function content_564046483c638($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
 .table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
</style>
</head>
<body>
<font size="4" color="black">
<p><b>治疗计划查询</b></p>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<font size="3" color="black">
<form name="myform" method="post" action="<?php echo @__CONTROLLER__;?>
/treatment_search1">
	<tr>
		<td >Disease Name
			<input type="text" name="diseasename" id="diseasename" size="25">
			<input type=submit name="Submit" value="Search" onclick="">
			
		</td>
	</tr>
</form>
</table>
<br><br>

<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>DiseaseName</td>
                        <td>DiseaseSubType</td>
                        <td>DiseaseStage</td>
                        <td>DrugCategory</td>
                        <td>Ranking</td>
                        <td>Status</td>
                        <td>OS_month</td>
                        <td>HazardRatio_OS</td>
                        <td>CI_OS</td>
                         <td>PFSMonth</td>
                        <td>HazardRatio_PFS</td>
                        <td>CI_PFS</td>
                        <td>ResponseRate</td>
                        <td>ComparedControl</td>
                        <td>Reference</td>
                        <td>WhoCanTake</td>
                        <td>EBMlevels</td>
                        <td>EvidenceSource</td>
                         <td>Description_Chinese</td>
                        <td>Drug</td>
                        <td>Biomarker</td>
                        <td>DrugName</td>
                        <td>Mutation</td>
                        <td>ClinicalInformation</td>
                         <td>ClinicalChineseInformation</td>
                        <td>SideEffects</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseSubType'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseStage'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugCategory'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Ranking'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Status'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['OS_month'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['HazardRatio_OS'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['CI_OS'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['PFSMonth'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['HazardRatio_PFS'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['CI_PFS'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ResponseRate'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ComparedControl'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Reference'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['WhoCanTake'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['EBMlevels'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['EvidenceSource'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Description_Chinese'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Drug'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Biomarker'];?>
</td>
                       
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Mutation'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ClinicalInformation'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ClinicalChineseInformation'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['SideEffects'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['LastUpdated'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Operator'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/treatment_xiugai/genes_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/treatment_delete/newIdDelet/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
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
<?php /* Smarty version Smarty-3.1.6, created on 2015-12-26 13:36:18
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/mutation_search.html" */ ?>
<?php /*%%SmartyHeaderCode:1942143991567a39e6e0f0f8-24815564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56a93c41024660fd8d98d6a525d1d5c37c332eff' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/mutation_search.html',
      1 => 1451108044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1942143991567a39e6e0f0f8-24815564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567a39e6f1605',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567a39e6f1605')) {function content_567a39e6f1605($_smarty_tpl) {?><html>
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
<p><b>生物标记突变查询</b></p>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<fonr size="3" color="black">
<form name="myform" method="post" action="<?php echo @__CONTROLLER__;?>
/mutation_search1"
	<tr>
		<td align="left">Gene Name<input type="text" name="genename">
			
		</td>
		<td>&nbsp;<input type="submit" name="Submit" value="Search" onclick="submit()">
		</td>
		
	</tr>
</form>
</table>
<br><br>
<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>Gene ID</td>
                        <td>Gene Name</td>
                        <td>Category</td>
                        <td>Accession</td>
                        <td>Accession Version</td>
                        <td>Description</td>
                        <td>Gene</td>
                        <td>DNA source</td>
                        <td>cDNA position</td>
                         <td>Chrom</td>
                        <td>Exon</td>
                        <td>Codons</td>
                        <td>CDS mutation syntax</td>
                        <td>Amino Acid substitution</td>
                        <td>hg position</td>
                        <td>RefSNP</td>
                        <td>ref seq  at pos</td>
                        <td>alternative seq</td>
                         <td>Drug Sensitivity</td>
                        <td>Drug Risk Sensitivity</td>
                        <td>Target Drugs</td>
                        <td>Associated Disease Name</td>
                        <td>Reference Link</td>
                        <td>Mutation description</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['GeneID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['GeneName'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Category'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Accession'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['AccessionVersion'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Description'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Gene'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DNAsource'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cDNApostion'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Chrom'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Exon'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Codons'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['CDSmutationSyntax'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['AminoAcidSubstitution'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['HgPosition'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['RefSNP'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['RefSeqatpos'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['AlternativeSeq'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugSensitivity'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugRiskSensitivity'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['TargetDrugs'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['AssociatedDiseaseName'];?>
</td>
                       
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ReferenceLink'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MutationDescription'];?>
</td>
                        
                        <td><a href="<?php echo @__CONTROLLER__;?>
/mutation_xiugai/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/mutation_delete/newIdDelet/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
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
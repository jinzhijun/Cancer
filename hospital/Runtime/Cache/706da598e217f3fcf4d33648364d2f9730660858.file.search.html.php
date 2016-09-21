<?php /* Smarty version Smarty-3.1.6, created on 2015-12-31 19:47:24
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Mutation\search.html" */ ?>
<?php /*%%SmartyHeaderCode:23610568514b785fce3-66800605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '706da598e217f3fcf4d33648364d2f9730660858' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Mutation\\search.html',
      1 => 1451562431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23610568514b785fce3-66800605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_568514b7accef',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568514b7accef')) {function content_568514b7accef($_smarty_tpl) {?><html>
<title></title>
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
                <span style="float: left;">当前位置是：生物标记突变-》生物标记突变查询</span>
            </span>
        </div>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<fonr size="3" color="black">
<form name="myform" method="post" action="<?php echo @__CONTROLLER__;?>
/search_handle"
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
/xiugai/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/delete/newIdDelet/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
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
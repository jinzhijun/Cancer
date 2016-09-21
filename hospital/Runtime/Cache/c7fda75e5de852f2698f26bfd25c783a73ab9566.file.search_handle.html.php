<?php /* Smarty version Smarty-3.1.6, created on 2015-12-31 21:19:10
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Drug\search_handle.html" */ ?>
<?php /*%%SmartyHeaderCode:2993256852b4eaa8e01-28329332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7fda75e5de852f2698f26bfd25c783a73ab9566' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Drug\\search_handle.html',
      1 => 1451567946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2993256852b4eaa8e01-28329332',
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
  'unifunc' => 'content_56852b4ecc3f7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56852b4ecc3f7')) {function content_56852b4ecc3f7($_smarty_tpl) {?><html>
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
                <span style="float: left;">当前位置是：药物-》药物查询</span>
            </span>
        </div>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<fonr size="3" color="black">
    <form name="myform" method="post" action="<?php echo @__SELF__;?>
">
	<tr>
		<td align="right">DrugName</td><td><input type="text" name="drugname" id="drugname" size="25"></td>
		<td align="right">&nbsp;Synonyms</td><td><input type="text" name="synonyms" id="synonyms" size="25"></td>
        <td align="right">&nbsp;<input type="submit" name="Submit" value="Search" onclick="">
		
	</tr>
</form>
</table>
<br><br>

<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>DrugBankID</td>
                        <td>DrugName</td>
                        <td>Synonyms</td>
                        <td>DrugChineseName</td>
                        <td>Maker</td>
                        <td>Maker_CN</td>
                        <td>TradeName</td>
                        <td>Target</td>
                        <td>Class</td>
                        <td>ChineseBrandName</td>
                        <td>AveragePrice</td>
                        <td>DrugStage</td>
                        <td>DrugStatus</td>
                        <td>AvailableInChina</td>
                        <td>Country</td>
                        <td>FullPrescribingInformation</td>
                        <td>FullPrescribingInformation_CN</td>
                        <td>Description</td>
                        <td>Description_CN</td>
                        <td>SideEffect</td>
                        <td>MechanismOfAction</td>
                        <td>MechanismOfAction_CN</td>
                        <td>Contraindication</td>
                        <td>Contraindication_CN</td>
                        <td>Attention</td>
                        <td>Attention_CN</td>
                        <td>UntowardEffect</td>
                        <td>UntowardEffect_CN</td>
                        <td>PharmaceuticalComposition</td>
                        <td>PharmaceuticalComposition_CN</td>
                        <td>DrugInteraction</td>
                        <td>DrugInteraction_CN</td>
                        <td>Event</td>
                        <td>Event_CN</td>
                        <td>Date</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugBankID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugName'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Synonyms'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugChineseName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Maker'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Maker_CN'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['TradeName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Target'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Class'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ChineseBrandName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['AveragePrice'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugStage'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugStatus'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['AvailableInChina'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Country'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['FullPrescribingInformation'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['FullPrescribingInformation_CN'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Description'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Description_CN'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['SideEffect'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MechanismOfAction'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MechanismOfAction_CN'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Contraindication'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Contraindication_CN'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Attention'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Attention_CN'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['UntowardEffect'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['UntowardEffect_CN'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['PharmaceuticalComposition'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['PharmaceuticalComposition_CN'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugInteraction'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugInteraction_CN'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Event'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Event_CN'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Date'];?>
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
</body>
</html><?php }} ?>
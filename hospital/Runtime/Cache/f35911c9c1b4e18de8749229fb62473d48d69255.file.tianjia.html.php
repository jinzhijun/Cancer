<?php /* Smarty version Smarty-3.1.6, created on 2016-01-05 18:42:13
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Drugdiseaseassociation\tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:1082956862e80da5ef1-25870533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f35911c9c1b4e18de8749229fb62473d48d69255' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Drugdiseaseassociation\\tianjia.html',
      1 => 1451990526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1082956862e80da5ef1-25870533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56862e8102cbe',
  'variables' => 
  array (
    'info' => 0,
    'info_B' => 0,
    'v' => 0,
    'info_A' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56862e8102cbe')) {function content_56862e8102cbe($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\Cancer\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><html>
<head>
    <link href="<?php echo @Admin_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
<style type="text/css">
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
                <span style="float: left;">当前位置是：疾病药物关联分析-》添加疾病药物关联分析</span>
            </span>
        </div>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
    <table class="table_a" border="1" width="100%">
     <tr><td align="right">MeSH ID:</td><td><input type="text" name="MeSHID" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['MeSHID'];?>
"></td></tr>
    <tr>
        <td align="right">Disease Name:</td><td><input type="text" name="DiseaseName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseName'];?>
"></td>
        <td align="right">Disease Stage:</td>
        <td><select name="DiseaseStage">
             <option value="0">----------请选择-----------</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_B']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseStage'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=''){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseStage'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['DiseaseStage'];?>
</option>
                <?php }?>
                 <?php } ?>
                }
            </select>
        </td>
    </tr>
     <tr><td align="right">Drugbank ID:</td><td><input type="text" name="DrugbankID" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugbankID'];?>
"></td></tr>
    <tr>
        <td align="right">Drug Name:</td><td><input type="text" name="DrugName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugName'];?>
"></td>
        <td align="right">Drug Stage:</td>
        <td>
        <select name="DrugStage">
             <option value="0">----------------请选择-------------</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_A']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugStage'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2!=''){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['DrugStage'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['DrugStage'];?>
</option>
                <?php }?>
                 <?php } ?>
                }
            </select>
        </td>
    </tr>
    <tr><td align="right">Approved Year:</td>
    <td>
    <select name="ApprovedYear">
        <option value="0">------------------请选择-------------</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['ApprovedYear'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3!=''){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['ApprovedYear'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['ApprovedYear'];?>
</option>
                <?php }?>
                 <?php } ?>
                }
        </select>
        </td>
        <td align="right">Started Year:</td>
        <td>
        <select name="StartedYear">
         <option value="0">----------------请选择---------------</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['StartedYear'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4!=''){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['StartedYear'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['StartedYear'];?>
</option>
                <?php }?>
                 <?php } ?>
                }
        </select>
        </td>
    </tr>
    <tr><td align="right">Drug Stage Description:</td><td><textarea name="DrugStageDescription" cols="60" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['DrugStageDescription'];?>
</textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td align="right">Association Description:</td><td><textarea name="AssociationDescription" cols="60" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['AssociationDescription'];?>
</textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td align="right">Clinical Application Description:</td><td><textarea name="ClinicalApplicationDescription" cols="60" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['ClinicalApplicationDescription'];?>
</textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr>
    <td align="right">Last Updated:</td><td><input type="text" name="LastUpdated" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M');?>
" readonly="readonly"></td><td  align="right">Operator:</td><td><input type="text" name="Operator" value="<?php echo $_SESSION['admin_name'];?>
" readonly="readonly"></td>
</tr>
        <tr>
    <td align="center">
    <input type="submit"  name="Submit" class="btn_grey" value="Save" onClick="return check(form1)">
    
    </td>
</tr>
</table>
</form>
<hr/>


<script language="javascript">
    function check(form){               //验证表单是否为空
        if(form.diseasename.value==""){
            alert("请输入diseasename！");form.diseasename.focus();return false;
        }
    
        if(form.drugname.value==""){
            alert("请输入drugname！");form.drugname.focus();return false;
        }
        if(form.drugstage.value==""){
            alert("请输入drugstage！");form.drugstage.focus();return false;
        }
    
        if(form.drugstagedescription.value==""){
            alert("请输入drugstagedescription！");form.drugstagedescription.focus();return false;
        }
        if(form.accociationdescription.value==""){
            alert("请输入accociationdescription！");form.accociationdescription.focus();return false;
        }
        if(form.clinicalapplocationdescription.value==""){
            alert("请输入clinicalapplocationdescription！");form.clinicalapplocationdescription.focus();return false;
        }
        if(form.lastupdated.value==""){
            alert("请输入lastupdated！");form.lastupdated.focus();return false;
        }
        if(form.operator.value==""){
            alert("请输入operator！");form.operator.focus();return false;
        }
form.submit();
}
</script>
</font>
</body>
</html><?php }} ?>
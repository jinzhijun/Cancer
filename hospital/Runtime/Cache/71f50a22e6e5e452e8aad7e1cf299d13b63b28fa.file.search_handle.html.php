<?php /* Smarty version Smarty-3.1.6, created on 2016-01-04 09:54:34
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Report\search_handle.html" */ ?>
<?php /*%%SmartyHeaderCode:246775689d09fd8d564-48234281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71f50a22e6e5e452e8aad7e1cf299d13b63b28fa' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Report\\search_handle.html',
      1 => 1451872469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246775689d09fd8d564-48234281',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5689d09ff045b',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5689d09ff045b')) {function content_5689d09ff045b($_smarty_tpl) {?><html>
<title></title>
<head>
<style type="text/css">
    body{
    border:1px solid silver;
    width:800px;
    height:auto;
    margin:0 auto;
    /* background-color:blue; */
}
span{
    backgroud-color:#a2d2ff;
    text-align:center;
    font-family:Arial,Helvetica,sans-serif;
    font-size:12px;
    padding:10px;
}
.table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
</style>
</head>
<body><center>
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
    <table border="0">
    <tr><td id=td1><strong>查看报告</strong></td></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td><span class="left">病历号&nbsp;&nbsp;:<input type="text" name="medicalid" id="medical"></span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="left">姓名&nbsp;&nbsp;:<input type="text" name="name" id="name"></span>
    &nbsp;&nbsp;&nbsp;<input type="submit"  name="Submit" class="btn_grey" value="查询"  size="50" onClick="return check(form1)"></td>
    </tr>
    </table>
</form>
</center>
<br>
<br>
<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>病历号</td>
                        <td>姓名</td>
                        <td>性别</td>
                        <td>年龄</td>
                        <td>疾病名称</td>
                        <td>状态</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MedicalID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Name'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Sex'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Old'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MedicalName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['State'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/viewreport_xiugai/works_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">预览</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/viewreport_xiugai/works_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">重新生成报告</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/viewreport_xiugai/works_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">医生版</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/viewreport_xiugai/works_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">病人版</a></td>
                    </tr>
                    <?php } ?>
</table>
</body>
</html><?php }} ?>
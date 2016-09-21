<?php /* Smarty version Smarty-3.1.6, created on 2015-12-14 11:15:40
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\chakanbinli_search1.html" */ ?>
<?php /*%%SmartyHeaderCode:16967566d5b33259cb7-77762418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3f4b05c92a6b5dd377c64ccde8dd0e87fbd9068' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\chakanbinli_search1.html',
      1 => 1450062912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16967566d5b33259cb7-77762418',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_566d5b33305ae',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566d5b33305ae')) {function content_566d5b33305ae($_smarty_tpl) {?><html>
<head>
<style type="text/css">
.table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
</style>
</head>   
<body>
<font size="4" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
	<table border="0px">
	<tr><td><span class="left" >病历号:<input type="text" name="medicalid" id="medicalid"></span>&nbsp;&nbsp;<span class="left">姓名:<input type="text" name="name1" id="name1"></span></td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><span class="left">疾病名称:<input type="text" name="medicalname" id="medicalname" size="70"></span></td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><span class="left">基因:<input type="text" name="gene" id="gene"></span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="left">基因属性：</span><input type=radio name="">ALL<input type=radio name="">+<input type=radio name="">-
	&nbsp;&nbsp;&nbsp;<input type="submit"  name="Submit" class="btn_grey" value="查询"  size="50" onClick="return check(form1)"></td></tr>
	</table>
</form>
</font>
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
/chakanbinli_xiugai/works_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">查看</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/chakanbinli_xiugai/works_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">修改</a></td>
                    </tr>
                    <?php } ?>
</table>
<body>
</html>
<?php }} ?>
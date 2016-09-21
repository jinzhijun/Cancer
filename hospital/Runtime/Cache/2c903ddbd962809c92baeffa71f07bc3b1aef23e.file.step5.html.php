<?php /* Smarty version Smarty-3.1.6, created on 2015-12-17 13:33:04
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\step5.html" */ ?>
<?php /*%%SmartyHeaderCode:120335672255256ee68-04691109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c903ddbd962809c92baeffa71f07bc3b1aef23e' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\step5.html',
      1 => 1450330366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120335672255256ee68-04691109',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567225525b537',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567225525b537')) {function content_567225525b537($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
<!--        <meta charset="UTF-8">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>最终结果如下：</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illnumber']['index']];?>
</p>
        <table>
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
                        <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['v']->value['illnumber'];?>
</font></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['illhistory'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['illreport'];?>
</a></td>

                        <td><a href="<?php echo @__CONTROLLER__;?>
/biomarker_xiugai/genes_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/biomarker_delete/newIdDelet/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
" onclick="if (confirm('确定要删除吗？')) return true; else return false;">删除</a></td>
                    </tr>
                    <?php } ?>
        </table>
    </body>
</html>
<?php }} ?>
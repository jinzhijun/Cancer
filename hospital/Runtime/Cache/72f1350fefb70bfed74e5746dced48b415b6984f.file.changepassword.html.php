<?php /* Smarty version Smarty-3.1.6, created on 2015-11-21 12:36:06
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Manager\changepassword.html" */ ?>
<?php /*%%SmartyHeaderCode:371956404a29c35b42-78817430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72f1350fefb70bfed74e5746dced48b415b6984f' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Manager\\changepassword.html',
      1 => 1448079617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '371956404a29c35b42-78817430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56404a29c687d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56404a29c687d')) {function content_56404a29c687d($_smarty_tpl) {?><html>
    <head>
</head>
<body>
    <form action="<?php echo @__CONTROLLER__;?>
/updatepassword" method="post" name="form1" id="myform">

        <table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
            <tr class="table_title">
                <td colspan="4" align="left"><h2>修改密码</h2></td>
                <td><input type="hidden" name="adminid" value="<?php echo $_SESSION['admin_id'];?>
"></td>
            </tr>
            <tr class="">
                <td width="100">用 户 名：</td>
                <td align='left' name="username" id="username" ><?php echo $_SESSION['admin_name'];?>
</td>
            </tr>
            <tr class="tr rt">
                <td width="100">旧 密 码：</td>
                <td colspan="3" class="lt">
                    <input type="password" name="oldpassword" id="oldpassword" style="width:200px" value="">
                </td>
            </tr>
            <tr class="tr rt">
                <td width="100">密　　码：</td>
                <td colspan="3" class="lt">
                    <input type="password" name="password" id="password" style="width:200px" value="">
                </td>
            </tr>
            <tr class="tr rt">
                <td width="100">确认密码：</td>
                <td colspan="3" class="lt">
                    <input type="password" name="repassword" id="repassword" style="width:200px" value="">
                </td>
            </tr>

            <tr class="tr lt">
                <td colspan="4">

                    <input class="bginput" type="submit" name="dosubmit" value="修 改" >

                    <input class="bginput" type="button" onclick="javascript:history.back( - 1);" value="返 回" ></td>
            </tr>
        </table>
    </form>
</html>
<?php }} ?>
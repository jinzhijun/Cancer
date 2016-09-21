<?php /* Smarty version Smarty-3.1.6, created on 2015-12-31 15:13:12
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Manager\changepasswd.html" */ ?>
<?php /*%%SmartyHeaderCode:293525684d588a18a06-53861375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a29f3d7db4ef19b73511c62cb8e1ec8d232418' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Manager\\changepasswd.html',
      1 => 1451483613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293525684d588a18a06-53861375',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5684d588ab8ca',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5684d588ab8ca')) {function content_5684d588ab8ca($_smarty_tpl) {?><html>
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
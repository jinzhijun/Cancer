<?php /* Smarty version Smarty-3.1.6, created on 2016-09-12 21:29:20
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:200545641436ea1c5f4-50426715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '622fed1b8f5197d0bd4e4bfb42be49c643a3c301' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\User\\login.html',
      1 => 1461550970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200545641436ea1c5f4-50426715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5641436ea5ec8',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641436ea5ec8')) {function content_5641436ea5ec8($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
    http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS_URL;?>
/login.css"/>
    </head>
    <body>
        <div id="content">
            <div id="header">
                <center><img src="<?php echo @Home_IMG_URL;?>
/cancer_head.png"></center>
            </div>
            <br>
            <br>

            <div id="main">
                <center>
                    <form action="<?php echo @__CONTROLLER__;?>
/checklogin" method="post" id="myform">
                        <span><center><h1><b>Login</b></h1></center></span>
                        <span class="ll"></span><span><input type="text" class="username" name="username" value=""/></span><br><br>
                        <span class="ll"></span><span><input type="password" class="password" name="password" value=""/></span><br/><br>
                        <span class="ll"><span><span><input type="text" class="checkcode" name="checkcode" value=""/><span>
                                        <span><img src="<?php echo @__CONTROLLER__;?>
/verifyImg"  onclick="this.src = '<?php echo @__CONTROLLER__;?>
/verifyImg/' + Math.random()" alt="" /></span>
                                        <span><input type="submit" value="登录" class="login"><span><br><br>
                                                <span><input type="button" value="注册" onclick="window.open('register.html')" class="register"></span>
                    </form>

                 </center>
            </div>
</div>
</body>
</html>
<?php }} ?>
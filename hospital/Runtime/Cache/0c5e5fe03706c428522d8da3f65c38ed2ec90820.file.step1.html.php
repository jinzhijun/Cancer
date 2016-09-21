<?php /* Smarty version Smarty-3.1.6, created on 2016-01-02 12:16:16
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\step1.html" */ ?>
<?php /*%%SmartyHeaderCode:14227567216638d1509-83901625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c5e5fe03706c428522d8da3f65c38ed2ec90820' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\step1.html',
      1 => 1451483611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14227567216638d1509-83901625',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5672166393eb2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5672166393eb2')) {function content_5672166393eb2($_smarty_tpl) {?><html>
<head><title></title>
<link type="text/css" rel="stylesheet" href="<?php echo @Home_CSS_URL;?>
/step1.css" />
 <script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.illnumber.value==""){
			alert("请输入病历号！");form.illnumber.focus();return false;
		}
		if(form.illhistory.value==""){
			alert("请输入现病史！");form.illhistory.focus();return false;
		}
		if(form.illreport.value==""){
			alert("请输入病理报告！");form.illreport.focus();return false;
		}		
                form.submit();
                
}
</script>
</head>
<body>
    <h1>Step1：病人信息录入&nbsp;&nbsp;&nbsp;1/4</h1>
<form name="form1" action="<?php echo @__CONTROLLER__;?>
/handle_step1" method="post">
	<table>
	<tr><td align="right">病历号：</td><td><input type="text" name="illnumber" id="illnumber"></td></tr>
	<tr><td align="right"><font color="red">*</font>现病史：</td><td><textarea rows="6" cols="100" name="illhistory"></textarea></td></tr>
	<tr><td align="right"><font color="red">*</font>病理报告：</td><td><textarea rows="6" cols="100" name="illreport"></textarea></td></tr>
	</table>
        <input type="submit" value="下一步" onClick="return check(form1)"/>
</form>
</body>
</html><?php }} ?>
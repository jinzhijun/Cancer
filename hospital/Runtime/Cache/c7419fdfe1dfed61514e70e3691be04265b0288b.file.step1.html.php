<?php /* Smarty version Smarty-3.1.6, created on 2016-01-04 15:14:20
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Workflow\step1.html" */ ?>
<?php /*%%SmartyHeaderCode:304995689d7e7dca554-30060888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7419fdfe1dfed61514e70e3691be04265b0288b' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Workflow\\step1.html',
      1 => 1451891656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304995689d7e7dca554-30060888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5689d7e7e4757',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5689d7e7e4757')) {function content_5689d7e7e4757($_smarty_tpl) {?><html>
<head><title></title>
<link href="<?php echo @Admin_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
<style type="text/css">
    body{
	border:1px solid silver;
	width:800px;
	height:auto;
	margin:0 auto;
	/* background-color:blue; */
	}
	.next{ float: right; }
</style>
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
	<table class="table_a" border="1" width="100%">
	<tr><td align="right">病历号：</td><td><input type="text" name="illnumber" id="illnumber"></td></tr>
	<tr><td align="right"><font color="red">*</font>现病史：</td><td><textarea rows="6" cols="100" name="illhistory"></textarea></td></tr>
	<tr><td align="right"><font color="red">*</font>病理报告：</td><td><textarea rows="6" cols="100" name="illreport"></textarea></td></tr>
	</table>
    <input class="next" type="submit" value="下一步" onClick="return check(form1)"/>
</form>
</body>
</html><?php }} ?>
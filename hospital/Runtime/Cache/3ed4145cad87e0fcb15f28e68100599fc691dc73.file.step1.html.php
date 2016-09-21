<?php /* Smarty version Smarty-3.1.6, created on 2016-01-09 13:24:26
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Home/View/Workflow/step1.html" */ ?>
<?php /*%%SmartyHeaderCode:16694206185690998ab665c8-55617470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ed4145cad87e0fcb15f28e68100599fc691dc73' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Home/View/Workflow/step1.html',
      1 => 1451994143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16694206185690998ab665c8-55617470',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5690998abc24f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5690998abc24f')) {function content_5690998abc24f($_smarty_tpl) {?><html>
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
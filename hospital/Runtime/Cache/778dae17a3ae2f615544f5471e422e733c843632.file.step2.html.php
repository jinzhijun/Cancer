<?php /* Smarty version Smarty-3.1.6, created on 2016-01-02 12:17:30
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\step2.html" */ ?>
<?php /*%%SmartyHeaderCode:20425567217197b1d68-98702975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '778dae17a3ae2f615544f5471e422e733c843632' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\step2.html',
      1 => 1451483609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20425567217197b1d68-98702975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5672171983e78',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5672171983e78')) {function content_5672171983e78($_smarty_tpl) {?><html>
<head><title></title>
<link type="text/css" rel="stylesheet" href="<?php echo @Home_CSS_URL;?>
/step2.css" />
 <script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.diseasename.value==""){
			alert("请输入疾病名称！");form.diseasename.focus();return false;
		}
		if(form.diseasestage1.value==""){
			alert("请选择疾病阶段！");form.diseasestage1.focus();return false;
		}
		if(form.diseasestage2.value==""){
			alert("请输入疾病阶段！");form.diseasestage2.focus();return false;
		}		
                form.submit();
                
}
</script>
</head>
<body>
    <h1>Step2：疾病选择&nbsp;&nbsp;&nbsp;2/4</h1>
<form name="form1" action="<?php echo @__CONTROLLER__;?>
/handle_step2" method="post">
	<table>
	<tr><td align="right"><font color="red">*</font>疾病名称：</td><td><input type="text" name="diseasename" id="diseasename"></td></tr>
	<tr><td align="right">疾病阶段：</td><td><select name="diseasestage1" id="diseasestage1">
		<option>custom</option>
		</select>
		<input type="text" name="diseasestage2" id="diseasestage2">
		</td></tr>
	</table>
	<input type="submit" value="下一步" onClick="return check(form1)"/>
</form>
</body>
</html><?php }} ?>
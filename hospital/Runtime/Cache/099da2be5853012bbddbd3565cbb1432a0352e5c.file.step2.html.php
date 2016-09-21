<?php /* Smarty version Smarty-3.1.6, created on 2016-01-04 15:24:58
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Workflow\step2.html" */ ?>
<?php /*%%SmartyHeaderCode:31862568a1e3047a503-08498331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '099da2be5853012bbddbd3565cbb1432a0352e5c' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Workflow\\step2.html',
      1 => 1451892292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31862568a1e3047a503-08498331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_568a1e305495b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a1e305495b')) {function content_568a1e305495b($_smarty_tpl) {?><html>
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
	<table class="table_a" border="1" width="100%">
	<tr><td align="right"><font color="red">*</font>疾病名称：</td><td><input type="text" name="diseasename" id="diseasename"></td></tr>
	<tr><td align="right">疾病阶段：</td><td><select name="diseasestage1" id="diseasestage1">
		<option>custom</option>
		</select>
		<input type="text" name="diseasestage2" id="diseasestage2">
		</td></tr>
	</table>
	<input class="next" type="submit" value="下一步" onClick="return check(form1)"/>
</form>
</body>
</html><?php }} ?>
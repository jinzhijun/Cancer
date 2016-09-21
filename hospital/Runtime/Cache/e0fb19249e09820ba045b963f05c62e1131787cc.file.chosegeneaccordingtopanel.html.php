<?php /* Smarty version Smarty-3.1.6, created on 2016-01-02 12:17:38
         compiled from "D:\xampp\htdocs\Cancer\hospital\Home\View\Works\chosegeneaccordingtopanel.html" */ ?>
<?php /*%%SmartyHeaderCode:103065649dd44d28f51-11867601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0fb19249e09820ba045b963f05c62e1131787cc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Cancer\\hospital\\Home\\View\\Works\\chosegeneaccordingtopanel.html',
      1 => 1451483608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103065649dd44d28f51-11867601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5649dd44d444d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649dd44d444d')) {function content_5649dd44d444d($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title></title>
<link type="text/css" rel="stylesheet" href="<?php echo @Home_CSS_URL;?>
/chosegeneaccordingtopanel.css" />
</head>
<body>
<div>
	<div>请选择Penal:<select name="chosepenal">
		<option>TruSeq Amplicon Cancer Panel</option>
		<option></option>
	</select>
	</div>
	<hr/>
	<div>临时检测基因<img src="./images/sanjiao.png"/><a href="#" color="green">增加临时检测基因</a></div>
	<table>
<tr class="list"><td class="gene1"><input type="checkbox"></td><td class="gene2">基因名称</td><td class="gene3">描述</td><td class="gene4">类型</td><td class="gene5">详情</td><td class="gene6">检测方法</td></tr>
</table>
<div align="center"><span>还没有添加临时检测的基因</span></div>
<div><hr/></div>
<div>疾病基因<img src="./images/sanjiao.png"/></div>
<div>
<table>
	<tr class="list"><td class="gene1"><input type="checkbox"></td><td class="gene2">基因名称</td><td class="gene3">描述</td><td class="gene4">类型</td><td class="gene5">详情</td><td class="gene6">检测方法</td></tr>
	<tr class="ji"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">ABL1</a></td><td class="gene3">ABL1 Mutation</td><td class="gene4">POINT MYTATION</td><td class="gene5">ABL1 Mutation</td><td class="gene6"><select><option>Next Generation Sequenceing</option></select></td></tr>
	<tr class="ou"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">AKT1</a></td><td class="gene3">AKT1 Mutation</td><td class="gene4">POINT MYTATION</td><td class="gene5">AKT1 Mutation</td><td class="gene6"><select><option>Next Generation Sequenceing</option></select></td></tr>
	<tr class="ji"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">ALK</a></td><td class="gene3">ALK Mutation</td><td class="gene4">POINT MYTATION</td><td class="gene5">ALK Mutation</td><td class="gene6"><select><option>Next Generation Sequenceing</option></select></td></tr>
	<tr class="ou"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">APC</a></td><td class="gene3">APC Mutation</td><td class="gene4">POINT MYTATION</td><td class="gene5">APC Mutation</td><td class="gene6"><select><option>Next Generation Sequenceing</option></select></td></tr>
	<tr class="ji"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">ATM</a></td><td class="gene3">ATM Mutation</td><td class="gene4">POINT MYTATION</td><td class="gene5">ATM Mutation</td><td class="gene6"><select><option>Next Generation Sequenceing</option></select></td></tr>
	<tr class="ou"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">mTOR</a></td><td class="gene3">ABL1 Mutation</td><td class="gene4">POINT MYTATION</td><td class="gene5">ABL1 Mutation</td><td class="gene6"><select><option>Next Generation Sequenceing</option></select></td></tr>
</table>
</div>

</div>
</body>
</html><?php }} ?>
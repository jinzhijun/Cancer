<?php /* Smarty version Smarty-3.1.6, created on 2016-01-02 12:17:38
         compiled from "D:\xampp\htdocs\Cancer\hospital\Home\View\Works\chosegeneaccordingtodisease.html" */ ?>
<?php /*%%SmartyHeaderCode:319225649dd16d6ccf3-58854505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b78236ca6392fd638c10366460870f15f2195876' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Cancer\\hospital\\Home\\View\\Works\\chosegeneaccordingtodisease.html',
      1 => 1451483608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319225649dd16d6ccf3-58854505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5649dd16d8c0f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649dd16d8c0f')) {function content_5649dd16d8c0f($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title></title>
<link type="text/css" rel="stylesheet" href="<?php echo @Home_CSS_URL;?>
/chosegeneaccordingtodisease.css" />
</head>
<body>
<div>临时检测基因<span></span><span class="addgene"><a href="#">增加临时检测基因</a></span></div>
<table>
<tr class="list"><td class="gene1"><input type="checkbox"></td><td class="gene2">基因名称</td><td class="gene3">描述</td><td class="gene4">类型</td><td class="gene5">详情</td><td class="gene6">检测方法</td></tr>
</table>
<div align="center"><span>还没有添加临时检测的基因</span></div>
<div><hr/></div>
<div>疾病基因</div>
<div>
    <form name="form1" action="<?php echo @__CONTROLLER__;?>
/handle_step3" method="post">
<table>
	<tr class="list"><td class="gene1"><input type="checkbox"></td><td class="gene2">基因名称</td><td class="gene3">描述</td><td class="gene4">类型</td><td class="gene5">详情</td><td class="gene6">检测方法</td></tr>
	<tr class="ji"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">CTC-CD45-CK18</a></td><td class="gene3">CTC-CD45-CK18</td><td class="gene4">CTC</td><td class="gene5">Circulatings tumor cells(CTCs)...</td><td class="gene6"><select><option>Gene Sequenceing</option></select></td></tr>
	<tr class="ou"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">mTOR</a></td><td class="gene3">mTOR OVEREXPRESSI...</td><td class="gene4">OVEREXPRESS</td><td class="gene5">Mammalian target of rapamycin...</td><td class="gene6"><select><option>Quantitative PCR</option></select></td></tr>
</table>
</div>
<div>化疗基因</div>
<div>
    
<table>
	<tr class="list"><td class="gene1"><input type="checkbox"></td><td class="gene2">基因名称</td><td class="gene3">描述</td><td class="gene4">类型</td><td class="gene5">详情</td><td class="gene6">检测方法</td></tr>
	<tr class="ji"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">CYP2C8</a></td><td class="gene3">CTC-CD45-CK18</td><td class="gene4">CTC</td><td class="gene5">Circulatings tumor cells(CTCs)...</td><td class="gene6"><select><option>Gene Sequenceing</option></select></td></tr>
	<tr class="ou"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">CYP2C19</a></td><td class="gene3">mTOR OVEREXPRESSI...</td><td class="gene4">OVEREXPRESS</td><td class="gene5">Mammalian target of rapamycin...</td><td class="gene6"><select><option>Quantitative PCR</option></select></td></tr>
	<tr class="ji"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">CYP2C9</a></td><td class="gene3">CTC-CD45-CK18</td><td class="gene4">CTC</td><td class="gene5">Circulatings tumor cells(CTCs)...</td><td class="gene6"><select><option>Gene Sequenceing</option></select></td></tr>
	<tr class="ou"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">DPYD</a></td><td class="gene3">mTOR OVEREXPRESSI...</td><td class="gene4">OVEREXPRESS</td><td class="gene5">Mammalian target of rapamycin...</td><td class="gene6"><select><option>Quantitative PCR</option></select></td></tr>
	<tr class="ji"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">UGT1A1</a></td><td class="gene3">CTC-CD45-CK18</td><td class="gene4">CTC</td><td class="gene5">Circulatings tumor cells(CTCs)...</td><td class="gene6"><select><option>Gene Sequenceing</option></select></td></tr>
	<tr class="ou"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">CYP17A1</a></td><td class="gene3">mTOR OVEREXPRESSI...</td><td class="gene4">OVEREXPRESS</td><td class="gene5">Mammalian target of rapamycin...</td><td class="gene6"><select><option>Quantitative PCR</option></select></td></tr>
	<tr class="ji"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">CYP2D6</a></td><td class="gene3">CTC-CD45-CK18</td><td class="gene4">CTC</td><td class="gene5">Circulatings tumor cells(CTCs)...</td><td class="gene6"><select><option>Gene Sequenceing</option></select></td></tr>
	<tr class="ou"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">ERCC2</a></td><td class="gene3">mTOR OVEREXPRESSI...</td><td class="gene4">OVEREXPRESS</td><td class="gene5">Mammalian target of rapamycin...</td><td class="gene6"><select><option>Quantitative PCR</option></select></td></tr>
	<tr class="ji"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">DHFR</a></td><td class="gene3">CTC-CD45-CK18</td><td class="gene4">CTC</td><td class="gene5">Circulatings tumor cells(CTCs)...</td><td class="gene6"><select><option>Gene Sequenceing</option></select></td></tr>
	<tr class="ou"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">ERCC2</a></td><td class="gene3">mTOR OVEREXPRESSI...</td><td class="gene4">OVEREXPRESS</td><td class="gene5">Mammalian target of rapamycin...</td><td class="gene6"><select><option>Quantitative PCR</option></select></td></tr>
	<tr class="ji"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">ERCC1</a></td><td class="gene3">CTC-CD45-CK18</td><td class="gene4">CTC</td><td class="gene5">Circulatings tumor cells(CTCs)...</td><td class="gene6"><select><option>Gene Sequenceing</option></select></td></tr>
	<tr class="ou"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">TYMP</a></td><td class="gene3">mTOR OVEREXPRESSI...</td><td class="gene4">OVEREXPRESS</td><td class="gene5">Mammalian target of rapamycin...</td><td class="gene6"><select><option>Quantitative PCR</option></select></td></tr>
	<tr class="ji"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">CTC-CD45-CK18</a></td><td class="gene3">CTC-CD45-CK18</td><td class="gene4">CTC</td><td class="gene5">Circulatings tumor cells(CTCs)...</td><td class="gene6"><select><option>Gene Sequenceing</option></select></td></tr>
	<tr class="ou"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">mTOR</a></td><td class="gene3">mTOR OVEREXPRESSI...</td><td class="gene4">OVEREXPRESS</td><td class="gene5">Mammalian target of rapamycin...</td><td class="gene6"><select><option>Quantitative PCR</option></select></td></tr>
</table>
    <input id="next1" type="submit" value="下一步" onClick="return check(form1)"/>
    </form>
</div>
</body>
</html><?php }} ?>
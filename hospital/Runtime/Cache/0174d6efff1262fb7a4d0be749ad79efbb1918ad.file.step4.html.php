<?php /* Smarty version Smarty-3.1.6, created on 2016-01-02 12:18:21
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\step4.html" */ ?>
<?php /*%%SmartyHeaderCode:23865567222f50536c0-67519864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0174d6efff1262fb7a4d0be749ad79efbb1918ad' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\step4.html',
      1 => 1451483609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23865567222f50536c0-67519864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567222f50a575',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567222f50a575')) {function content_567222f50a575($_smarty_tpl) {?><htmL>
<head>
<link type="text/css" rel="stylesheet" href="<?php echo @Home_CSS_URL;?>
/step4.css" />
</head>
<body>
<h1>Step4：基因及检测方案确认&nbsp;&nbsp;&nbsp;4/4</h1>
<div class="box">
<div>基因及检测方案确认</div>
<div>
<form name="form1" action="<?php echo @__CONTROLLER__;?>
/step5" method="post">
<table>
	<tr class="list"><td class="gene1"><input type="checkbox"></td><td class="gene2">基因名称</td><td class="gene3">描述</td><td class="gene4">类型</td><td class="gene5">检测方法</td><td class="gene6">Required Materials</td></tr>
	<tr class="ji"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">ALK</a></td><td class="gene3">ALK Fusion</td><td class="gene4">Reverse Inversion</td><td class="gene5">Gene Sequencing-Fusion</td><td class="gene6">No Primers</td></tr>
	<tr class="ou"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">BRAF</a></td><td class="gene3">BRAF Nutation</td><td class="gene4">Point Mutation</td><td class="gene5">Gene sequencing</td><td class="gene6"><a href="#">Show Primers</a></td></tr>
	<tr class="ji"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">KRAS</a></td><td class="gene3">KRAS Nutation(Codon 12,13,61)</td><td class="gene4">Point Mutation</td><td class="gene5">Gene sequencing</td><td class="gene6"><a href="#">Show Primers</a></td></tr>
	<tr class="ou"><td class="gene1"><input type="checkbox"></td><td class="gene2"><a href="#">EGFR</a></td><td class="gene3">EGFR mutation(exon 18,19,20)...</td><td class="gene4">Point Mutation</td><td class="gene5">Gene sequencing</td><td class="gene6"><a href="#">Show Primers</a></td></tr>
</table>
    <input id="next1" type="submit" value="确认并提交" onClick="return check(form1)"/>
</form>
</div>
</div>


<form enctype="multipart/form-data" action="/cgi-bin/upload1.pl" method="post">
<table cellspacing="0" cellpadding="5" border="0">
<tbody>
<tr>
	<td>Reference sequence</td>
<td>
	<input type="file" size="65" name="ref_seq">
</td>
</tr>
<tr>
	<td>Test sequence</td>
<td>
	<input type="file" size="65" name="test_seq">
</td>
</tr>
<tr>
<td>
	<input type="submit">
</td>
<td>
	<input type="reset">
</td>
</tr>
</tbody>
</table>
</form>

</body>
</htmL><?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2015-12-13 13:20:13
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\workflow_upload.html" */ ?>
<?php /*%%SmartyHeaderCode:202785647212523bc66-00079035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e54a48d6a3e67799cdda35c32ce924830c37cc58' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\workflow_upload.html',
      1 => 1449984010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202785647212523bc66-00079035',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5647212527277',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5647212527277')) {function content_5647212527277($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>滑动菜单五步走</title>
<script type="text/javascript" src="<?php echo @Home_JS_URL;?>
/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo @Home_JS_URL;?>
/custom.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo @Home_CSS_URL;?>
/custom.css" />
</head>
<body>
<div id="box">
<div class="top">
<span class="top_1">创建病历</span><span class="top_2"><a href="#">返回</a></span>
</div>
<div class="feature_tour">
	<div class="tab">
		<a href="step1.php" class="current">病人信息录入</a>
		<a href="step2.php" >疾病选择</a>
		<a href="step3.php" >基因及检测方案选择</a>
		<a href="step4.php" >基因及检测方案确认</a>
		<a href="step5.php" >提交实验室</a>
	</div>
	<div class="mask" >
		<div class="maskcon">
			<div id="con1" class="innercon"><?php echo $_smarty_tpl->getSubTemplate ("./step1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
			<div id="con2" class="innercon"><?php echo $_smarty_tpl->getSubTemplate ("./step2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
			<div id="con3" class="innercon"><?php echo $_smarty_tpl->getSubTemplate ("./step3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
			<div id="con4" class="innercon"><?php echo $_smarty_tpl->getSubTemplate ("./step4.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
			<div id="con5" class="innercon"><?php echo $_smarty_tpl->getSubTemplate ("./step5.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
		</div>
	</div>
	<div class="nav">
		<p><a href="#" class="prev">&nbsp;&nbsp;</a><a href="#" class="next">&nbsp;&nbsp;</a></p>
	</div>
</div>
</div>
</div>
</body>
</html>
<?php }} ?>
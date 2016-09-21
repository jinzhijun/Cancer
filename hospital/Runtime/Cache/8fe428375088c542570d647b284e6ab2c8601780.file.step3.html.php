<?php /* Smarty version Smarty-3.1.6, created on 2016-01-02 12:17:38
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\step3.html" */ ?>
<?php /*%%SmartyHeaderCode:1933156722270cc4bc0-37361432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fe428375088c542570d647b284e6ab2c8601780' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\step3.html',
      1 => 1451483609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1933156722270cc4bc0-37361432',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56722271304b8',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56722271304b8')) {function content_56722271304b8($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<style type="text/css">
	*{margin:0;padding:0;list-style-type:none;}
	a,img{border:0;}
	body{font:12px/180% Arial, Helvetica, sans-serif, "新宋体";}
	
	.tab1{width:920px;border-top:#cccccc solid 1px;border-bottom:#cccccc solid 1px;margin:5px auto 0 auto;}
	.menu{height:28px;border-right:#cccccc solid 1px;}
	.menu li{float:left;width:180px;text-align:center;line-height:28px;height:28px;cursor:pointer;border-left:#cccccc solid 1px;color:#666;font-size:14px;overflow:hidden;background:#E0E2EB;}
	.menu li.off{background:#FFFFFF;color:#336699;font-weight:bold;}
	
	.menudiv{height:auto;border-left:#cccccc solid 1px;border-right:#cccccc solid 1px;border-top:0;background:#EDEDED}
	.menudiv div{padding:15px;line-height:28px;}
	#next{color:white;float:right;width:82px;height:30px;background-color:#4677B1;}
	#back{float:right;width:82px;height:30px;}
</style>

<script type="text/javascript">
function setTab(name,cursel){
	cursel_0=cursel;
	for(var i=1; i<=links_len; i++){
		var menu = document.getElementById(name+i);
		var menudiv = document.getElementById("con_"+name+"_"+i);
		if(i==cursel){
			menu.className="off";
			menudiv.style.display="block";
		}
		else{
			menu.className="";
			menudiv.style.display="none";
		}
	}
}
function Next(){                                                        
	cursel_0++;
	if (cursel_0>links_len)cursel_0=1
	setTab(name_0,cursel_0);
} 
var name_0='one';
var cursel_0=1;
var ScrollTime=2000000000;//循环周期（毫秒）
var links_len,iIntervalId;
onload=function(){
	var links = document.getElementById("tab1").getElementsByTagName('li')
	links_len=links.length;
	for(var i=0; i<links_len; i++){
		links[i].onmouseover=function(){
			clearInterval(iIntervalId);
			this.onmouseout=function(){
				iIntervalId = setInterval(Next,ScrollTime);;
			}
		}
	}
	document.getElementById("con_"+name_0+"_"+links_len).parentNode.onmouseover=function(){
		clearInterval(iIntervalId);
		this.onmouseout=function(){
			iIntervalId = setInterval(Next,ScrollTime);;
		}
	}
	setTab(name_0,cursel_0);
	iIntervalId = setInterval(Next,ScrollTime);
}
</script>
</head>
<body>
    <h1>Step3：基因及检测方案选择&nbsp;&nbsp;&nbsp;3/4</h1>
    <form name="form1" action="<?php echo @__CONTROLLER__;?>
/handle_step3" method="post">
<div class="tab1" id="tab1">
	<div class="menu">
		<ul>
			<li id="one1" onclick="setTab('one',1)">根据疾病选择基因</li>
			<li id="one2" onclick="setTab('one',2)">根据药物选择基因</li>
			<li id="one3" onclick="setTab('one',3)">根据Panel选择基因</li>
		</ul>
	</div>
	<div class="menudiv">
		<div id="con_one_1"><?php echo $_smarty_tpl->getSubTemplate ("./chosegeneaccordingtodisease.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
		<div id="con_one_2" style="display:none;"><?php echo $_smarty_tpl->getSubTemplate ("./chosegeneaccordingtomedical.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
		<div id="con_one_3"><?php echo $_smarty_tpl->getSubTemplate ("./chosegeneaccordingtopanel.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
	</div>
</div>
        
    </form>
</body>
</html><?php }} ?>
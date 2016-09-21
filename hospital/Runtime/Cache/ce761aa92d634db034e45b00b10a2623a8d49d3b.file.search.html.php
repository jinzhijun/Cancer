<?php /* Smarty version Smarty-3.1.6, created on 2016-04-25 10:29:29
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Biomarker\search.html" */ ?>
<?php /*%%SmartyHeaderCode:270575684da787b08f3-48196282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce761aa92d634db034e45b00b10a2623a8d49d3b' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Biomarker\\search.html',
      1 => 1461550978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270575684da787b08f3-48196282',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5684da787bc47',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5684da787bc47')) {function content_5684da787bc47($_smarty_tpl) {?><html>
<title></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
 .table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
.div_head{
    font-size: 13px;
    margin: 10px 5px;
    padding-left: 10px;
    line-height: 25px;
    height:25px;
    background-color: #E8F2FC;
    border-bottom: solid #1c94c4 1px
}
</style>

</head>
<body>
<font size="4" color="black">
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：生物标记-》生物标记查询</span>
            </span>
        </div>
</font>

<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<font size="3" color="black">
<form name="myform" method="post" action="<?php echo @__CONTROLLER__;?>
/search_handle">
	<tr><td align="right">基因符号</td><td align="left"><input type="text" name="genesymbol" id="genesymbol" size="25"></td>
	    <td align="right">&nbsp;同义密码子</td><td align="left"><input type="text" name="synonyms" id="synonyms" size="25"></td>
            <td align="right">&nbsp;<input type="submit" name="Submit" value="查询" onclick=''/></td>
	
	</tr>
</form>
</table>
<br><br>

<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>Gene ID</td>
                        <td>Gene Symbol</td>
                        <td>Synonyms</td>
                        <td>Gene Type</td>
                        <td>Chromosome</td>
                        <td>Strand</td>
                        <td>Start</td>
                        <td>End</td>
                        <td>Category</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                    <tr id="product1">
<!--                        <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</font></td>-->
                        <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
</font></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['GeneID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['GeneSymbol'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Synonyms'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['GeneType'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Chromosome'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Strand'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Start'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['End'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Category'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/xiugai/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/delete/newIdDelet/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
" onclick="if (confirm('确定要删除吗？')) return true; else return false;">删除</a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                      <td colspan="100" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                      </td>
                    </tr>
</table>

<script language="javascript">
        function searchinfo(){
             // document.body.innerHTML=""; //先清空页面内容
              document.getElementById('result').innerHTML="xhr.responseText";
            //ajax发起请求，并接受返回的信息
               
                
                //1.创建对象
                var xmlHttp=new XMLHttpRequest();
                
                //4.给ajax设置事件
                var url="./03.php";
               // url=url+"&genesymbol="+$("#genesymbol").val()+"&synonyms="+$("#synonyms").val();
                
                xmlHttp.onreadystatechange=function(){
                    if(xhr.readyState==4){
                        
                        document.getElementById('result').innerHTML=xhr.responseText;
                    }
                    
                    
                };
                
                //2.创建新的http请求
                
                xmlHttp.open("GET",url);
                
                //3.发送请求
                xmlHttp.send(null);
                
                
         }
	function check(form){				//验证表单是否为空
		if(form.genesymbol.value==""){
			alert("请输入genesymbol！");form.genesymbol.focus();return false;
		}
		if(form.synonyms.value==""){
			alert("请输入synonyms！");form.synonyms.focus();return false;
		}
                    form.submit();
                }
</script>
			
</body>
</html><?php }} ?>
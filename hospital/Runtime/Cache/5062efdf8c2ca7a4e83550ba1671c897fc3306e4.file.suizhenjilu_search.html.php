<?php /* Smarty version Smarty-3.1.6, created on 2016-01-02 12:21:14
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\suizhenjilu_search.html" */ ?>
<?php /*%%SmartyHeaderCode:5472566d5f5fc295c1-30654999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5062efdf8c2ca7a4e83550ba1671c897fc3306e4' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\suizhenjilu_search.html',
      1 => 1451483610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5472566d5f5fc295c1-30654999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_566d5f5fc777d',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566d5f5fc777d')) {function content_566d5f5fc777d($_smarty_tpl) {?><html>
<head>
<style type="text/css">
.table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
</style>
</head>  
<body>
<form name="form2" method="post" action="<?php echo @__CONTROLLER__;?>
/suizhenjilu_search1">
<table border="0px">
<tr><td>
        <a href="<?php echo @__CONTROLLER__;?>
/chakanbinli_add">创建病历</a>
</td></tr>
<tr><td>
        <span class="left" >病历号:<input type="text" name="medicalid" id="medicalid"></span>&nbsp;&nbsp;
        <span class="left">姓名:<input type="text" name="name1" id="name"></span>&nbsp;&nbsp;&nbsp;
        <input type="submit"  name="Submit" class="btn_grey" value="查询"  size="50" onClick="return check2(form2)">
</td></tr>
</table>
</form>
    
<br>
<br>
<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>病历号</td>
                        <td>姓名</td>
                        <td>性别</td>
                        <td>年龄</td>
                        <td>疾病名称</td>
                        <td>状态</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MedicalID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Name'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Sex'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Old'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MedicalName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['State'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/suizhen_xiugai/works_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">随诊</a></td>
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
<body>
</html>
<?php }} ?>
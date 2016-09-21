<?php /* Smarty version Smarty-3.1.6, created on 2016-01-02 12:21:17
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\chakanbinli_add.html" */ ?>
<?php /*%%SmartyHeaderCode:6878566d865c4910f6-92681117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d312232bb57935da3ede821027167fb68dbe833' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\chakanbinli_add.html',
      1 => 1451483609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6878566d865c4910f6-92681117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_566d865c573a3',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566d865c573a3')) {function content_566d865c573a3($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>查看病历</title>
<script language="javascript" type="text/javascript" src="<?php echo @Home_JS_URL;?>
/My97DatePicker/WdatePicker.js"></script>
  <script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.name.value==""){
			alert("请输入姓名！");form.geneid.focus();return false;
		}
		if(form.old.value==""){
			alert("请输入年龄！");form.genesymbol.focus();return false;
		}
		if(form.sex.value==""){
			alert("请输入性别！");form.synonyms.focus();return false;
		}
		if(form.phonenumber.value==""){
			alert("请输入联系电话！");form.genetype.focus();return false;
		}
		if(form.smoking.value==""){
			alert("请输入是否吸烟！");form.chromosome.focus();return false;
		}
		
		if(form.where.value==""){
			alert("请输入病人来源！");form.start.focus();return false;
		}
		if(form.doctor.value==""){
			alert("请输入临床医生！");form.end.focus();return false;
		}
                if(form.jiancejigou.value==""){
			alert("请输入检测机构！");form.geneid.focus();return false;
		}
		if(form.shiyanshi.value==""){
			alert("请输入实验室！");form.genesymbol.focus();return false;
		}
		if(form.note.value==""){
			alert("请输入备注！");form.synonyms.focus();return false;
		}
		if(form.illhistory.value==""){
			alert("请输入现病史！");form.genetype.focus();return false;
		}
		if(form.binlibaogao.value==""){
			alert("请输入病理报告！");form.chromosome.focus();return false;
		}
		
		if(form.jiwangshi.value==""){
			alert("请输入既往史！");form.start.focus();return false;
		}
		if(form.jiazushi.value==""){
			alert("请输入家族史！");form.end.focus();return false;
		}
                if(form.quyangweizhi.value==""){
			alert("请输入取样位置！");form.synonyms.focus();return false;
		}
		if(form.quyangyisheng.value==""){
			alert("请输入取样医生！");form.genetype.focus();return false;
		}
		if(form.time.value==""){
			alert("请输入预约取样时间！");form.chromosome.focus();return false;
		}
                form.submit();
}
</script>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS_URL;?>
/chakanbinli_xiugai.css"/>
<body>
<center>
<form name="form1" enctype="multipart/form-data" method="post" action="<?php echo @__CONTROLLER__;?>
/chakanbinli_add1">
		<table border="0">
		<tr><td id="td1">查看病历&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="button"  name="button1" class="btn_grey" value="返回"  size="50" onclick="history.go(-1)">
		</td></tr>
		<tr><td><font siez="4px"><b class=b1>病人信息</b></td></tr>
		<tr><td>姓名:<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Name'];?>
">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				年龄:<input type="text" name="old" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Old'];?>
">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				性别:<select name="sex" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Sex'];?>
">
					<option>男</option>	
					<option>女</option>
				  </select>
			</td>
		<tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>联系电话:<input type="text" name="phonenumber" size="6" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['PhoneNumber'];?>
">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        吸烟:<select name="smoking" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Smoking'];?>
">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<option>是</option>
				<option>否</option>
			</select>
		</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>病人来源:<select name="where" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['PatientResource'];?>
">
				<option>山西省中医研究院</option>
				<option></option>
			</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				临床医生:<select name="doctor" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Clinician'];?>
">
				<option>None</option>
				<option></option>
			</select>
		</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>检测机构:<select name="jiancejigou" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['TestingOrganization'];?>
">
				<option>山西医科大学公卫研究所</option>
				<option></option>
			</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				实验室:<select name="shiyanshi" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Lab'];?>
">
				<option>山西医科大学公卫研究所</option>
				<option></option>
			</select>
		</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>备注:<textarea rows="6" cols="60" name="note"><?php echo $_smarty_tpl->tpl_vars['info']->value['Remark'];?>
</textarea></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><font siez="4px"><b class=b1>疾病信息</b></td></tr><br/><br/>	
		<tr><td>现病史:<textarea rows="6" cols="60" name="illhistory"><?php echo $_smarty_tpl->tpl_vars['info']->value['HistoryOfPresentIllness'];?>
</textarea></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>病理报告:<textarea rows="6" cols="60" name="binlibaogao"><?php echo $_smarty_tpl->tpl_vars['info']->value['Report'];?>
</textarea>
		</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>病理报告附件:<input type="file" name="binlibaogaofujian" value=""></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>病理报告附件:</td></tr>
		<tr><td><input type="file" name="binlitupian1" value=""></td></tr>
		<tr><td><input type="file" name="binlitupian2" value=""></td></tr>
		<tr><td><input type="file" name="binlitupian3" value=""></td></tr>
		<tr><td><input type="file" name="binlitupian4" value=""></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>病人口述音频:<input type="file" name="binrenkoushuyinpin" value=""></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>即往史:<textarea rows="6" cols="60" name="jiwangshi"><?php echo $_smarty_tpl->tpl_vars['info']->value['PreviousHistory'];?>
</textarea>
		</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>家族史:<textarea rows="6" cols="60" name="jiazushi"><?php echo $_smarty_tpl->tpl_vars['info']->value['FamilyHistory'];?>
</textarea></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>基因检测史:<input type="file" name="jiyinjianceshi" value=""></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><font color="red">*</font>组织类型：
                        <input type="checkbox" name=ffpe value="">FFPE
			<input type="checkbox" name=freshtissue value="">Fresh Tissue
			<input type="checkbox" name=pleuraleffusion value="">Pleural Effusion
			<input type="checkbox" name=ascites value="">Ascites
			<input type="checkbox" name=wholeblood value="">Whole Blood</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>取样位置：<input type="text" name="quyangweizhi" size=20 value="<?php echo $_smarty_tpl->tpl_vars['info']->value['SamplingPosition'];?>
"></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>取样医生：<input type="text" name="quyangyisheng" size=20 value="<?php echo $_smarty_tpl->tpl_vars['info']->value['SamplingDoctor'];?>
"></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>预约取样时间：<input type="text" readonly="true" id="d11" onclick="WdatePicker()" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['SamplingTime'];?>
"><img src="<?php echo @Home_IMG_URL;?>
/datePicker.gif"></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr align="middle"><td id="td1" align="rigth"><input id="input1" type="submit" name="Submit" value="保存">&nbsp;&nbsp;

		</td>
		</tr>
	
	</table>
	</form>
</center>
</body>
</html><?php }} ?>
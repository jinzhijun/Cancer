<?php /* Smarty version Smarty-3.1.6, created on 2015-12-14 09:37:24
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\chakanbinli_add1.html" */ ?>
<?php /*%%SmartyHeaderCode:12909566e1d549037e6-91376362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '383dc90a24d69dfe419e582f2484712aa9f62e65' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\chakanbinli_add1.html',
      1 => 1450055871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12909566e1d549037e6-91376362',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_566e1d549a790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e1d549a790')) {function content_566e1d549a790($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>查看病历</title>
<script language="javascript" type="text/javascript" src="<?php echo @Home_JS_URL;?>
/My97DatePicker/WdatePicker.js"></script>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS_URL;?>
/chakanbinli_xiugai.css"/>
<body>
<center>
<form name="form1" enctype="multipart/form-data" method="post" action="<?php echo @__SELF__;?>
">
		<table border="0">
		<tr><td id="td1">查看病历&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="button"  name="button1" class="btn_grey" value="返回"  size="50" onclick="history.go(-1)">
		</td></tr>
		<tr><td><font siez="4px"><b class=b1>病人信息</b></td></tr>
		<tr><td>姓名:<input type="text" name="name" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				年龄:<input type="text" name="old" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				性别:<select name="sex" >
					<option>男</option>	
					<option>女</option>
				  </select>
			</td>
		<tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>联系电话:<input type="text" name="phonenumber" size="6" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        吸烟:<select name="smoking" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<option>是</option>
				<option>否</option>
			</select>
		</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>病人来源:<select name="where">
				<option>山西省中医研究院</option>
				<option></option>
			</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				临床医生:<select name="doctor">
				<option>None</option>
				<option></option>
			</select>
		</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>检测机构:<select name="jiancejigou">
				<option>山西医科大学公卫研究所</option>
				<option></option>
			</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				实验室:<select name="shiyanshi">
				<option>山西医科大学公卫研究所</option>
				<option></option>
			</select>
		</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>备注:<textarea rows="6" cols="60" name="note"></textarea></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><font siez="4px"><b class=b1>疾病信息</b></td></tr><br/><br/>	
		<tr><td>现病史:<textarea rows="6" cols="60" name="illhistory"></textarea></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>病理报告:<textarea rows="6" cols="60" name="binlibaogao"></textarea>
		</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>病理报告附件:<input type="file" name="binlibaogaofujian"></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>病理报告附件:</td></tr>
		<tr><td><input type="file" name="binlitupian1"></td></tr>
		<tr><td><input type="file" name="binlitupian2"></td></tr>
		<tr><td><input type="file" name="binlitupian3"></td></tr>
		<tr><td><input type="file" name="binlitupian4"></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>病人口述音频:<input type="file" name="binrenkoushuyinpin"></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>即往史:<textarea rows="6" cols="60" name="jiwangshi"></textarea>
		</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>家族史:<textarea rows="6" cols="60" name="jiazushi"></textarea></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>基因检测史:<input type="file" name="jiyinjianceshi"></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><font color="red">*</font>组织类型：
                        <input type="checkbox" name=ffpe>FFPE
			<input type="checkbox" name=freshtissue>Fresh Tissue
			<input type="checkbox" name=pleuraleffusion>Pleural Effusion
			<input type="checkbox" name=ascites>Ascites
			<input type="checkbox" name=wholeblood>Whole Blood</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>取样位置：<input type="text" name="quyangweizhi" size=20 ></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>取样医生：<input type="text" name="quyangyisheng" size=20 ></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>预约取样时间：<input type="text" readonly="true" name="time" id="d11" onclick="WdatePicker()"><img src="<?php echo @Home_IMG_URL;?>
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
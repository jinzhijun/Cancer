<?php /* Smarty version Smarty-3.1.6, created on 2015-12-26 15:35:52
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/drug_add1.html" */ ?>
<?php /*%%SmartyHeaderCode:548021171567e34b3131505-40790019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8af4f66942790afb4fab04906653ddc31e76bf6d' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/drug_add1.html',
      1 => 1451114954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '548021171567e34b3131505-40790019',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567e34b3193f9',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567e34b3193f9')) {function content_567e34b3193f9($_smarty_tpl) {?><html>
<body>
<font size="4" color="black">
<p><b>添加药物</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr><td align="right">drugBankId:</td><td><input type="text" name="drugbankid" ></td><td align="right">Synonyms:</td><td><input type="text" name="sysnoyms" ></td></tr>
	<tr><td align="right">Drug Name:</td><td><input type="text" name="drugname" ></td><td align="right">Drug Chinese Name:</td><td><input type="text" name="drugchinesename" ></td></tr>
	<tr><td align="right">Maker:</td><td><input type="text" name="maker" ></td><td align="right">Maker(CN):</td><td><input type="text" name="makercn" ></td></tr>
	<tr><td align="right">tradename:</td><td><input type="text" name="tradename" ></td><td align="right">Target:</td><td><input type="text" name="target" ></td></tr>
	<tr><td align="right">Class:</td><td><input type="text" name="class" ></td><td align="right">Chinese Brand Name:</td><td><input type="text" name="chinesebrandname" ></td></tr>
	<tr><td align="right">Average Price:</td><td><input type="text" name="averageprice" ></td><td align="right">Drug Stage:</td><td><input type="text" name="drugstage"></td></tr>
        <tr><td align="right">Drug Status</td><td><input type="text" name="drugstatus" ></td>
	<td align="right">Avaliable In China:</td><td><select name="avaliableinchina" >
	<option>yes</option>
	<option>no</option>
	</select>
	</td>
	</tr>
	<tr><td align="right">Country:</td><td><select name="country" >
	<option></option>
	<option></option>
	</select>
	</td>
	
	<tr><td align="right">Full Prescribing Information:</td><td><input type="text" name="fpi" ></td>
		<td align="right">Full Prescribing Information(CN):</td><td><input type="text" name="fpicn" ></td>
	</tr>
	<tr><td align="right">Description:</td><td><textarea cols="50" rows="5" name="description"></textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Description(CN):</td><td><textarea cols="50" rows="5" name="description_cn"></textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Side Effect:</td><td><textarea cols="50" rows="3" name="sideeffect"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr><br>
	<tr><td align="right">Mechanism Of Action:</td><td><textarea cols="50" rows="3" name="mechanismofaction"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Mechanism Of Action(CN):</td><td><textarea cols="50" rows="3" name="mechanismofaction_cn"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Contraindication:</td><td><textarea cols="50" rows="3" name="contraindication"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Contraindication(CN):</td><td><textarea cols="50" rows="3" name="contraindication_cn"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Attention:</td><td><textarea cols="50" rows="3" name="attention"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Attention(CN):</td><td><textarea cols="50" rows="3" name="attention_cn"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td align="right">Untoward Effect:</td><td><textarea cols="50" rows="3" name="untowardeffect"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Untoward Effect(CN):</td><td><textarea cols="50" rows="3" name="untowardeffect_cn"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Pharmaeutical Composition:</td><td><textarea cols="50" rows="3" name="pharmaeuticalcomposition"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Pharmaeutical Composition(CN):</td><td><textarea cols="50" rows="3" name="pharmaeuticalcomposition_cn"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Drug Interaction:</td><td><textarea cols="50" rows="3" name="druginteraction"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Drug Interaction(CN):</td><td><textarea cols="50" rows="3" name="druginteraction_cn"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
	
        <tr><td align="right">Event:</td><td><textarea cols="50" rows="3" name="event"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td align="right">Event(CN):</td><td><textarea cols="50" rows="3" name="event_cn"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td align="right">Date:</td><td><textarea cols="50" rows="3" name="date"></textarea><td>&nbsp;</td><td>&nbsp;</td></tr>
   <tr><td align="center">
		<input type="submit" name="Submit" class="btn_grey" value="Save" onclick="">	
</td></tr>     
</table>

</form>
<hr/>

</font>
</body>
</html><?php }} ?>
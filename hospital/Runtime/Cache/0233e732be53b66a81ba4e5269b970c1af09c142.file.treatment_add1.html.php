<?php /* Smarty version Smarty-3.1.6, created on 2015-12-27 20:23:05
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/treatment_add1.html" */ ?>
<?php /*%%SmartyHeaderCode:1857766255567fd829bc38e8-40900987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0233e732be53b66a81ba4e5269b970c1af09c142' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/treatment_add1.html',
      1 => 1450696938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1857766255567fd829bc38e8-40900987',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567fd829c47f7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567fd829c47f7')) {function content_567fd829c47f7($_smarty_tpl) {?><html>
<body>
<font size="4" color="black">
	<p><b>添加治疗计划</b></p>
</font>
<hr/>
<font size="1" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
	<table border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr>
	<td align="right">Disease Name:</td><td><input type="text" name="diseasename" ></td>
	<td align="right">Disease Sub Type:</td><td><input type="text" name="diseasesubtype" ></td>
	<td align="right">Disease Stage:</td><td><select name="diseasestage" >
			<option>      </option>
			<option>      </option>
			</select>
	</td>
	</tr>
	<tr>
	<td align="right">Drug Category:</td><td><select name="category" >
		<option>None</option>
		<option></option>
		</select></td>
	<td align="right">Ranking:</td><td><input type="text" name="ranking"></td>
	<td align="right">Status:</td><td><input type="text" name="status" ></td>
	</tr>
	<tr>
	<td align="right">OS(Month):</td><td><input type="text" name="os" ></td>
	<td align="right">Hazard rato(OS):</td><td><input type="text" name="hazardratioos" ></td>
	<td align="right">CI(OS):</td><td><input type="text" name="cios" ></td>
	</tr>
	<tr>
	<td align="right">PFS(Month):</td><td><input type="text" name="pfs" ></td>
	<td align="right">Hazard rato(PFS):</td><td><input type="text" name="hazardratiopfs" ></td>
	<td align="right">CI(PFS):</td><td><input type="text" name="cipfs" ></td>
	</tr>
	<tr>
	<td align="right">Response Rate:</td><td><input type="text" name="responserate" ></td>
	<td align="right">Compared Control:</td><td><input type="text" name="comparedcontrol"></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Reference:</td><td><input type="text" name="reference">Reference id is separated by","</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Who Can Take:</td><td><input type="text" name="whocantake" ></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">EBM levels of evidence:</td><td><select name="ebm">
		<option></option>
		<option></option>
		</select> 
	</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Evidence Source:</td><td><select name="evidencesource">
		<option></option>
		<option></option>
		</select> 
	</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Description(Chinese):</td><td><textarea name="descriptionchinese" cols="40" rows="4"></textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">Drug:</td><td><textarea name="drug" cols="40" rows="4"></textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Biomarker:</td><td><textarea name="biomarker" cols="40" rows="4"></textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	
	<tr>
	<td align="right">Clinical Information:</td><td><textarea name="climicalinformation" cols="40" rows="4"></textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Clinical Chinese Information:</td><td><textarea name="clinicalchineseinformation" cols="40" rows="4"></textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<td align="right">Side effects:</td><td><textarea name="sideeffects" cols="40" rows="4"></textarea></td>
	<td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td><td>&nbsp;</td>
	</tr>
        <tr>
	<td align="right">Last updated:</td><td><input type="text" name="lastipdated"></td>
	<td align="right">Operator:</td><td><input type="text" name="operator"></td>
	<td>&nbsp;</td><td>&nbsp;</td>
        </tr>
        <tr>
	<td align="center">
	<input type="submit"  name="Submit" class="btn_grey" value="Save" onClick="">
	
	</td>
</tr>
</table>
</form>
<hr/>
</font>
</body>
</html><?php }} ?>
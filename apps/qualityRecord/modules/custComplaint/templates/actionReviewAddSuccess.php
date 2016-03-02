<?php use_helper('Validation', 'Javascript') ?>
<?php
    $customerList = CustomerAttrPeer::GetCustomerListName();
    //$garmentList  = sfConfig::get('garment_type');
    $garmentList  = array(''=>' -SELECT GARMENT-',
    				'JUMPSUIT'=>'JUMPSUIT',
                    'BOOTIES'=>'BOOTIES',
                    'HOOD'=>'HOOD',
                    'SAFETY BOOTIES'=>'SAFETY BOOTIES',
    );
    $departmentList     = array(''=>' -SELECT DEPARTMENT- ', 'ACRO SOLUTION'=>'ACRO SOLUTION', 'MICRONCLEAN'=>'MICRONCLEAN', 'NANOCLEAN'=>'NANOCLEAN', 'TC KHOO'=>'TC KHOO');
    $initialsList = array(''=>' - INITIALS - ', 'JAYAKUMAR'=>'JAYAKUMAR', 'TERENCE'=>'TERENCE', 'OTHERS'=>'OTHERS');
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('custComplaint/actionReviewAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="35" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>ACTION REVIEW FORM</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('date_time', $sf_params->get('date_time', date('Y-m-d')), 'date_time', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>ACTION</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('case_action', $sf_params->get('case_action'), 'size=50x5')
				?></td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REVIEWED BY</td>
				<td class="FORMcell-right" nowrap><?php
				echo select_tag('reviewed_by',
				options_for_select($initialsList,
				$sf_params->get('reviewed_by') ) );
				?></td>
				<td class="FORMcell-right" nowrap>&nbsp;</td>
				<td class="FORMcell-right" nowrap>&nbsp;</td>				
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REVIEW DATE</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('review_date', $sf_params->get('review_date', date('Y-m-d')), 'review_date', XIDX::next(), ' size="12" '); 
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
				<td class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap>
				<td class="alignCenter FORMcell-right" nowrap></td>
				<td class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Save Info " class="submit-button"></td>
				<td colspan="3" class="FORMcell-right" nowrap>
			</td>
			</tr>
		</table>
	</tr>
</table>
</div>
</form>

<div class="grid-toolbar-2">
<table>
	<tr>
		<td class="alignRight" nowrap>Record Sheet: #054</td>
	</tr>
	<tr>
		<td class="alignRight" nowrap><?php echo 'ISO Refs: '. link_to('WI026','http://sym.micronclean/isodoc/wi/Micronclean/WI026rev001_19980112_customer_complaints.pdf') ?></td>
	</tr>
</table>
</div>


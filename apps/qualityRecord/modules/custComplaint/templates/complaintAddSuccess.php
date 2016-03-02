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
	action="<?php echo url_for('custComplaint/complaintAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="35" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>CUSTOMER COMPLAINT FORM</H2></span></td></tr>				
			<tr>
				<td width="5%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE OF COMPLAIN</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('complain_date_time', $sf_params->get('complain_date_time', date('Y-m-d')), 'complain_date_time', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap><B>CUSTOMER</B></td>
				<td class="FORMcell-right" nowrap><?php
				echo select_tag('company_name',
				options_for_select($customerList,
				$sf_params->get('company_name') ) );
				?></td>
				<td class="FORMcell-right" nowrap>&nbsp;</td>
				<td class="FORMcell-right" nowrap>&nbsp;</td>				
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>TITLE</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('customer_number', $sf_params->get('customer_number'), 'size="40"')
				?></td>
				<td class="FORMcell-right" nowrap>&nbsp;</td>
				<td class="FORMcell-right" nowrap>&nbsp;</td>				
			</tr>
			<tr><td height="10" colspan="6" bgcolor="#86D3F6" nowrap>&nbsp;</td></tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>COMPLAINEE NAME</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('complainee_name', $sf_params->get('complainee_name'), 'size="30"')
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>DESIGNATION</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('complainee_designation', $sf_params->get('complainee_designation'), 'size="20"')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>DEPARTMENT</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('complainee_department', $sf_params->get('complainee_department'), 'size="30"')
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>CONTACT NUMBER</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('complainee_contact_no', $sf_params->get('complainee_contact_no'), 'size="20"')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>EMAIL</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('complainee_email', $sf_params->get('complainee_email'), 'size="30"')
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
				<td class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>COMPLAINT</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('complain_description', $sf_params->get('complain_description'), 'size=80x5')
				?></td>
			</tr>
			<tr><td height="10" colspan="6" bgcolor="#86D3F6" nowrap>&nbsp;</td></tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>ACKNOWLEDGE BY</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('received_by_name', $sf_params->get('received_by_name'), 'size="30"')
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>DESIGNATION</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('received_by_designation', $sf_params->get('received_by_designation'), 'size="20"')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>DEPARTMENT</td>
				<td class="FORMcell-right" nowrap><?php
				echo select_tag('received_by_department',
				options_for_select($departmentList,
				$sf_params->get('received_by_department') ) );
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>VIA CHANNEL</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('channel', $sf_params->get('channel'), 'size="20"')
				?></td>
			</tr>
			<tr><td height="35" colspan="6" align="center" color="#CCC" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>TO BE FILLED UP BY MICRONCLEAN SINGAPORE SUPERVISOR</H2></span></td></tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>UNDERTAKEN BY</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('undertaken_by', $sf_params->get('undertaken_by'), 'size="30"')
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('undertaken_by_date', $sf_params->get('undertaken_by_date'), 'undertaken_by_date', XIDX::next(), ' size="12" ');
				//echo input_tag('undertaken_by_date', $sf_params->get('undertaken_by_date'), 'size="20"')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>DESIGNATION</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('undertaken_by_designation', $sf_params->get('undertaken_by_designation'), 'size="30"')
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>DEPARTMENT</td>
				<td class="FORMcell-right" nowrap><?php
				echo select_tag('undertaken_by_department',
				options_for_select($departmentList,
				$sf_params->get('undertaken_by_department') ) );				
				//echo input_tag('undertaken_by_department', $sf_params->get('undertaken_by_department'), 'size="20"')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>INITIALS</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('undertaken_by_initials', $sf_params->get('undertaken_by_initials'), 'size="30"')
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
				<td class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CORRECTIVE ACTION</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('correction_action_taken', $sf_params->get('correction_action_taken'), 'size=80x5')
				?></td>
			</tr>			
			<tr><td height="10" colspan="6" bgcolor="#86D3F6" nowrap>&nbsp;</td></tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>VERIFIED BY</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('verified_by', $sf_params->get('verified_by'), 'size="30"')
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('verified_by_date', $sf_params->get('verified_by_date'), 'verified_by_date', XIDX::next(), ' size="12" ');
				//echo input_tag('verified_by_date', $sf_params->get('verified_by_date'), 'size="20"')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>DESIGNATION</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('verified_by_designation', $sf_params->get('verified_by_designation'), 'size="30"')
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>DEPARTMENT</td>
				<td class="FORMcell-right" nowrap><?php
				echo select_tag('verified_by_department',
				options_for_select($departmentList,
				$sf_params->get('verified_by_department') ) );				
				//echo input_tag('verified_by_department', $sf_params->get('verified_by_department'), 'size="20"')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>INITIALS</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('verified_by_initials', $sf_params->get('verified_by_initials'), 'size="30"')
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


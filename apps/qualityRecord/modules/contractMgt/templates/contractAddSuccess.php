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
	action="<?php echo url_for('contractMgt/contractAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr>
				<td width="5%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>CUSTOMER</td>
				<td width="100" class="FORMcell-right" nowrap><?php
		        echo select_tag('customer',
				options_for_select($customerList,
				$sf_params->get('customer') ) );
				//echo HTMLForm::DrawDateInput('date_time', $sf_params->get('date_time', date('Y-m-d')), 'date_time', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CONTRACT NO</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo input_tag('contract_no', $sf_params->get('contract_no'), 'size="20"')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CONTACT PERSON</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo input_tag('contact_person', $sf_params->get('contact_person'), 'size="40"')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CONTACT NO</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo input_tag('contact_no', $sf_params->get('contact_no'), 'size="20"')
				?></td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>INITIATOR</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
		        echo select_tag('contract_initiator',
				options_for_select($initialsList,
				$sf_params->get('contract_initiator') ) );				
				?></td>
			</tr>						
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REMARKS</td>
				<td class="FORMcell-right" nowrap><?php
                echo textarea_tag('remarks', $sf_params->get('remarks'), 'size=50x5')				?>
                </td>
				<td class="FORMcell-right" nowrap>&nbsp;</td>
				<td class="FORMcell-right" nowrap>&nbsp;</td>				
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>Start Date</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('start_date', $sf_params->get('start_date', date('Y-m-d')), 'start_date', XIDX::next(), ' size="12" '); 
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
				<td class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>END DATE</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('end_date', $sf_params->get('end_date', date('Y-m-d')), 'end_date', XIDX::next(), ' size="12" '); 
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
		<td class="alignRight" nowrap>Record Sheet: #103</td>
	</tr>
	<tr>
		<td class="alignRight" nowrap><?php echo 'ISO Refs: ' ?></td>
	</tr>
</table>
</div>


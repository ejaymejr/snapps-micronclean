<?php use_helper('Validation', 'Javascript') ?>
<?php
$actionplan = array(
    			  ''=>' -SELECT HERE- ',
    			  'CORRECTIVE ACTION'=>'CORRECTIVE ACTION', 
    			  'PREVENTIVE ACTION'=>'PREVENTIVE ACTION',
    			  'OPPORTUNITY FOR IMPROVEMENT'=>'OPPORTUNITY FOR IMPROVEMENT');
$initrSelect = array(
    			  ''=>' -SELECT HERE- ',
    		      'PRODUCTION'=>'PRODUCTION', 
    			  'QUALITY'=>'QUALITY',
    			  'CUSTOMER SERVICE'=>'CUSTOMER SERVICE', 
    			  'MANAGEMENT'=>'MANAGEMENT',
                  'PURCHASING'=>'PURCHASING',
    			  'OTHERS'=>'OTHERS');
$cusType = array(
    		      ''=>' -SELECT HERE- ',
    			  'EXTERNAL'=>'EXTERNAL', 
    			  'INTERNAL'=>'INTERNAL');       

$yesNo = array(
    			  'No'=>' -NO- ', 
    			  'Yes'=>' -YES- ');

$openClose = array(
    			  'Open'=>' -OPEN- ', 
    			  'Close'=>' -CLOSED- ');       


$user = array('JAYAKUMAR'=>'JAYAKUMAR',
    			  'MEIZHEN'=>'MEIZHEN',
    			  'PARI'=>'PARI', 
    			  'OTHERS'=>'OTHERS');  
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('capa/capaAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"
	cellspacing="0">
	<tr>
		<td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"
			cellspacing="0">
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>TITLE</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('title', $sf_params->get('title'), 'size="50"');
				?></td>
			</tr>

			<tr>
				<td width="5%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>REPORT NO</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('report_no', $sf_params->get('report_no'), 'size="15"');
				?></td>
			</tr>
			<tr>
				<td width="5%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>ISSUE DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('issue_date', $sf_params->get('issue_date', date('Y-m-d')), 'issue_date', XIDX::next(), ' size="12" '); ?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>RESPONSE DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('response_date', $sf_params->get('response_date', date('Y-m-d')), 'response_date', XIDX::next(), ' size="12" '); ?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>SYMPTOMS/CUSTOMER <BR>
				CONCERN</td>
				<td colspan="4" class="FORMcell-right" nowrap><?php
				echo textarea_tag('symptom', $sf_params->get('symptom'), 'size=75x3')				?></td>
			</tr>
			<tr bgcolor="#FEB33A">
				<td height="28" class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td class="alignCenter radioButtonText" nowrap>DESCRIPTON</td>
				<td class="alignCenter radioButtonText" nowrap>EFFECTIVITY</td>
				<td class="alignCenter radioButtonText" nowrap>DATE IMPLEMENTED</td>
				<td class="alignCenter radioButtonText" nowrap>DATE COMPLETED</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>EMERGENCY RESPONSE
				ACTION(S)</td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('era_description', $sf_params->get('era_description'), 'size=60x12');
				?></td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('era_effectivity', $sf_params->get('era_effectivity'), 'size=10x12');
				?></td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('era_implemented', $sf_params->get('era_implemented'), 'size=12x12');
				?></td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('era_completed', $sf_params->get('era_completed'), 'size=12x12');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>TEAM</td>
				<td colspan="4" class="FORMcell-right" nowrap><?php
				echo textarea_tag('team', $sf_params->get('team'), 'size=75x7')				?></td>
			</tr>


			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>PROBLEMS</td>
				<td colspan="4" class="FORMcell-right" nowrap><?php
				echo textarea_tag('findings', $sf_params->get('findings'), 'size=75x3')				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>ROOT CAUSE ANALYSIS</td>
				<td colspan="4" class="FORMcell-right" nowrap><?php
				echo textarea_tag('root_cause_analysis', $sf_params->get('root_cause_analysis'), 'size=75x3')				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CONTAINMENT PLAN</td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('containment_plan', $sf_params->get('containment_plan'), 'size=60x12');
				?></td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('cont_effectivity', $sf_params->get('cont_effectivity'), 'size=10x12');
				?></td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('cont_implemented', $sf_params->get('cont_implemented'), 'size=12x12');
				?></td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('cont_completed', $sf_params->get('cont_completed'), 'size=12x12');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CHOOSEN CORRECTIVE
				ACTION(S)</td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('chosen_perm_ca', $sf_params->get('chosen_perm_ca'), 'size=60x12');
				?></td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('chosen_perm_effectivity', $sf_params->get('chosen_perm_effectivity'), 'size=10x12');
				?></td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('chosen_perm_implemented', $sf_params->get('chosen_perm_implemented'), 'size=12x12');
				?></td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('chosen_perm_completed', $sf_params->get('chosen_perm_completed'), 'size=12x12');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>IMPLEMENTED PERMANENT <BR>
				CORRECTIVE ACTION(S)</td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('implemented_perm_ca', $sf_params->get('implemented_perm_ca'), 'size=60x12');
				?></td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('implemented_perm_effectivity', $sf_params->get('implemented_perm_effectivity'), 'size=10x12');
				?></td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('implemented_perm_implemented', $sf_params->get('implemented_perm_implemented'), 'size=12x12');
				?></td>
				<td class="FORMcell-right" nowrap><?php
				echo textarea_tag('implemented_perm_completed', $sf_params->get('implemented_perm_completed'), 'size=12x12');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>PREVENTIVE PLAN</td>
				<td colspan="4" class="FORMcell-right" nowrap><?php
				echo textarea_tag('preventive_plan', $sf_params->get('preventive_plan'), 'size=74x3s');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>VERIFICATION PLAN</td>
				<td colspan="4" class="FORMcell-right" nowrap><?php
				echo textarea_tag('verification_of_ca_pa', $sf_params->get('verification_of_ca_pa'), 'size=74x3s');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REPORTED BY</td>
				<td colspan="4" class="FORMcell-right" nowrap><?php
				echo input_tag('reported_by', $sf_params->get('reported_by'), 'size="50" type=hidden');
				echo $sf_params->get('reported_by');
				?></td>
			</tr>

			<table width="100%" class="FORMtable" border="0" cellpadding="4"
				cellspacing="0">
				<tr>
					<td height="28" width="15%" class="FORMcell-right" nowrap></td>
					<td width="15%" class="FORMcell-left FORMlabel" nowrap>FOLLOW UP
					REQUIRED</td>
					<td width="15%" class="FORMcell-right FORMlabel" nowrap><?php
					echo select_tag('car_followup_required',
					options_for_select($yesNo,
					$sf_params->get('car_followup_required') ) );
					?></td>
					<td width="15%" class="FORMcell-left FORMlabel" nowrap>IS TOTAL
					PLAN EFFECTIVE</td>
					<td width="15%" class="FORMcell-right FORMlabel" nowrap><?php
					echo select_tag('car_plan_effective',
					options_for_select($yesNo,
					$sf_params->get('car_plan_effective') ) );
					?></td>
					<td width="100%" class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
				</tr>
				<tr>
					<td height="28" class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
					<td class="FORMcell-left FORMlabel" nowrap>FOLLOW UP DATE</td>
					<td class="FORMcell-right FORMlabel" nowrap><? 
					//echo $sf_params->get('car_followup_date');
					echo HTMLForm::DrawDateInput('car_followup_date', $sf_params->get('car_followup_date', date('Y-m-d')), 'car_followup_date', XIDX::next(), ' size="12" ');
					?></td>
					<td class="FORMcell-left FORMlabel" nowrap>VERIFIED BY</td>
					<td class="FORMcell-right FORMlabel" nowrap><? 
					//echo $sf_params->get('car_verified_by');
					echo input_tag('car_verified_by', $sf_params->get('car_verified_by'), 'size="20"');
					?></td>
					<td class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
				</tr>
				<tr>
					<td height="28" class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
					<td class="FORMcell-left FORMlabel" nowrap>CA STATUS</td>
					<td class="FORMcell-right FORMlabel" nowrap><?php
					echo select_tag('car_ca_status',
					options_for_select($openClose,
					$sf_params->get('car_ca_status') ) );
					?></td>
					<td class="FORMcell-left FORMlabel" nowrap>DATE CLOSE</td>
					<td class="FORMcell-right FORMlabel" nowrap><? 
					//echo $sf_params->get('car_closure_date');
					echo HTMLForm::DrawDateInput('car_closure_date', $sf_params->get('car_closure_date', ''), 'car_closure_date', XIDX::next(), ' size="12" ');
					?></td>
					<td class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
				</tr>
			</table>
			<table width="100%" class="FORMtable" border="0" cellpadding="4"
				cellspacing="0">
				<tr>
					<td class="FORMcell-right" nowrap></td>
					<td class="alignCenter FORMcell-right" nowrap></td>
					<td colspan="4" class="FORMcell-right" nowrap><input type="submit"
						name="save" value=" Save Info " class="submit-button"></td>
				</tr>
			</table>

		</table>
		</td>
	</tr>
</table>
</div>

</form>

<div class="grid-toolbar-2">
<table>
	<tr>
		<td class="alignRight" nowrap>Record Sheet: #056</td>
	</tr>
	<tr>
		<td class="alignLeft" nowrap>ISO Refs: <?php echo link_to('ASWISEA102','http://sym.micronclean/isodoc/wi/Nanoclean/ASWISEA102rev002_20040303_rework_procedure.pdf')?>
		<?php echo ', &nbsp;' ?> <?php echo link_to('ASWISEA104','http://sym.micronclean/isodoc/wi/Nanoclean/ASWISEA104rev002_20031204_procedure_for_upgrading_work_approval_and_evaluation.pdf')?>
		<?php echo ', &nbsp;' ?> <?php echo link_to('WISEAPC060','http://sym.micronclean/isodoc/wi/Nanoclean/WISEAPC060rev001_20040327_rework_procedure.pdf')?>
		<?php echo ', &nbsp;' ?> <?php echo link_to('WI008','http://sym.micronclean/isodoc/wi/Micronclean/WI008rev001_19980112_Measuring_of_Chemical_Dosing_to_Washer_and_Spin_drying_Machine.pdf')?>
		<?php echo ', &nbsp;' ?> <?php echo link_to('WI258','http://sym.micronclean/isodoc/wi/Micronclean/WI258rev001_20030620_rework_procedure.pdf')?>
		</td>
	</tr>
</table>
</div>

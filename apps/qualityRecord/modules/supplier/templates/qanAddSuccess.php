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
    			  'NO'=>' -NO- ', 
    			  'YES'=>' -YES- ');       

$user = array('JAYAKUMAR'=>'JAYAKUMAR',
    			  'MEIZHEN'=>'MEIZHEN',
    			  'PARI'=>'PARI', 
    			  'OTHERS'=>'OTHERS');  
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('capa/qanAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr>
				<td width="5%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE INITIATED</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('initiated_date', $sf_params->get('initiated_date', date('Y-m-d')), 'initiated_date', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>QAN NUMBER</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('qan_no', $sf_params->get('qan_no'), 'size="15"');
				?> <span class="negative">*</span></td>
			</tr>
			<?php if (false) { ?>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REFERENCE DOCUMENT</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
                echo input_file_tag('file_name','size="45"'); 
				?></td>
			</tr>
			<?php } ?>
			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap><B>ACTION PLAN</B></td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo select_tag('proposed_action',
				options_for_select($actionplan,
				$sf_params->get('proposed_action') ) );
				?></td>
			</tr>
			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>INITIATOR</td>
				<td class="FORMcell-right" nowrap><?php
				echo select_tag('initiator',
				options_for_select($initrSelect,
				$sf_params->get('initiator') ) );
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>CUSTOMER TYPE</td>
				<td class="FORMcell-right" nowrap><?php
				echo select_tag('customer',
				options_for_select($cusType,
				$sf_params->get('customer') ) );
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CUSTOMER COMMENTS</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('cust_comment', $sf_params->get('cust_comment'), 'size=75x2')
				?></td>
			</tr>

			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>PROBLEM DESCRIPTION</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('problem_description', $sf_params->get('problem_description'), 'size=75x2')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>INITIATED BY</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('initiated_by', $sf_params->get('initiated_by'), 'size="35"');
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>DATE INITIATED</td>
				<td class="FORMcell-right" nowrap>
				<div id="DIVInitiateDate">
				</div>
				<?php
				//echo HTMLForm::DrawDateInput('initiated_date', $sf_params->get('initiated_date', ''), XIDX::next(), XIDX::next(), ' size="12" ');
				//echo input_tag('initiated_date', $sf_params->get('initiated_date'), 'size="15"');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>ENTERED INTO INTRANET BY</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('keyed_in_by', $sf_params->get('keyed_in_by'), 'size="35"');
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>DATE KEYED IN</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('keyed_in_date', $sf_params->get('keyed_in_date', ''), XIDX::next(), XIDX::next(), ' size="12" ');
				//echo input_tag('keyed_in_date', $sf_params->get('keyed_in_date'), 'size="15"');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>ASSIGNED TO</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('assigned_to', $sf_params->get('assigned_to'), 'size="35"');
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>REPLY DUE DATE</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('assigned_date', $sf_params->get('assigned_date', ''), XIDX::next(), XIDX::next(), ' size="12" ');
				//echo input_tag('keyed_in_date', $sf_params->get('keyed_in_date'), 'size="15"');
				?></td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap><B>8D PROBLEM SOLVING
				FORM REQUIRED</B></td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo select_tag('eight_d_form',
				options_for_select($yesNo,
				$sf_params->get('eight_d_form') ) );
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>RECOMMENDED ACTION</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('recommended_action', $sf_params->get('recommended_action'), 'size=75x3')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>DATA COLLECTION</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('data_collection', $sf_params->get('data_collection'), 'size=75x3')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>IMPLEMENTED DATE</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('implemented_date', $sf_params->get('implemented_date'), XIDX::next(), XIDX::next(), ' size="12" ');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>AFFECTED PARTS</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('affected_parts', $sf_params->get('affected_parts'), 'size=75x3')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>INITIAL COMPLETION DATE</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('initial_completion_date', $sf_params->get('initial_completion_date', ''), XIDX::next(), XIDX::next(), ' size="12" ');
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>PLANNED COMPLETION DATE</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('plan_completion_date', $sf_params->get('plan_completion_date', ''), XIDX::next(), XIDX::next(), ' size="12" ');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>SUBMITTED BY</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('submitted_by', $sf_params->get('submitted_by'), 'size="35"');
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>RUN PLAN DATE</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('run_plan_date', $sf_params->get('run_plan_date', ''), XIDX::next(), XIDX::next(), ' size="12" ');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>COMMENT(S) BY<br>
				APPROVAL AUTHORITY</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('approve_comment', $sf_params->get('approve_comment'), 'size=75x3')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>APPROVED BY</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('approved_by', $sf_params->get('approved_by'), 'size="35"');
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>APPROVED DATE</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('action_plan_date', $sf_params->get('action_plan_date', ''), XIDX::next(), XIDX::next(), ' size="12" ');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>FOLLOW-UP/REVIEW BY</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('follow_up_by', $sf_params->get('follow_up_by'), 'size="35"');
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>REVIEW DATE</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('follow_up_date', $sf_params->get('follow_up_date', ''), XIDX::next(), XIDX::next(), ' size="12" ');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>EFFECTIVE?</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo select_tag('is_effective',
				options_for_select($yesNo,
				$sf_params->get('is_effective') ) );
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>EFFECTIVITY COMMENT(S)</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('effectivity_comment', $sf_params->get('effectivity_comment'), 'size=75x3')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>ADDITIONAL SHEET</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('additional_sheet', $sf_params->get('additional_sheet'), 'size=75x3')
				?></td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CLOSED OUT DATE</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('closed_out_date', $sf_params->get('closed_out_date', ''), XIDX::next(), XIDX::next(), ' size="12" ');
				?></td>
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
		<td class="alignRight" nowrap>Record Sheet #029 Rev 002</td>
	</tr>
	<tr>
		<td class="alignRight" nowrap>ISO Refs: <?php echo link_to('WI006','http://sym.micronclean/isodoc/wi/Micronclean/WI006rev001_20011126_wash_and_decontamination.pdf')?></td>
	</tr>
</table>
</div>


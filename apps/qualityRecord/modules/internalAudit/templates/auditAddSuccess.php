<?php use_helper('Validation', 'Javascript') ?>
<?php
    $auditorList  = array(''=>' -SELECT AUDITOR-',
    				'ADELINE'=>'ADELINE',
                    'HUIPING'=>'HUIPING',
                    'JAYAKUMAR'=>'JAYAKUMAR',
                    'LYE HENG'=>'LYE HENG',
                    'MELVIN'=>'MELVIN',
                    'TERENCE'=>'TERENCE',
                    'YONGKIAN'=>'YONGKIAN'
    );
    $departmentList     = array(''=>' -SELECT DEPARTMENT- ', 'ACRO SOLUTION'=>'ACRO SOLUTION', 'MICRONCLEAN'=>'MICRONCLEAN', 'NANOCLEAN'=>'NANOCLEAN', 'TC KHOO'=>'TC KHOO');
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('internalAudit/auditAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="35" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>INTERNAL AUDIT FORM</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('audited_date', $sf_params->get('audited_date', date('Y-m-d')), 'date_time', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="20%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>AUDITOR</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo select_tag('auditor',
				options_for_select($auditorList,
				$sf_params->get('auditor') ) );
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>AREA AUDITED</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
                echo textarea_tag('area_audited', $sf_params->get('area_audited'), 'size=75x3')				
				?>
				</td>
			</tr>
			<tr><td height="35" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>NUMBER OF NON-CONFORMITY</H2></span></td></tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>N.C.</td>
				<td class="FORMcell-right" nowrap><?php
                echo input_tag('nc', $sf_params->get('nc'), 'size="20"')				
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>OBSERVATION</td>
				<td class="FORMcell-right" nowrap><?php
                echo input_tag('observation', $sf_params->get('observation'), 'size="43"')				
				?></td>
				
			</tr>
			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>ISO 9001:2000 <br>CLAUSES COVERED:</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
		        echo '<span class="radioButtonText">' .checkbox_tag('cl_4', 'Clause 4 Qns Requirements', $sf_params->get('cla_1', false)) . '&nbsp;&nbsp;Clause 4 Qns Requirements</span>';
		        echo '<br>';
		        echo '<span class="radioButtonText">' .checkbox_tag('cl_5', 'Clause 5 Management Responsibility', $sf_params->get('cla_2', false)) . '&nbsp;&nbsp;Clause 5 Management Responsibility</span>';
		        echo '<br>';
		        echo '<span class="radioButtonText">' .checkbox_tag('cl_6', 'Clause 6 Resource Management', $sf_params->get('cla_3', false)) . '&nbsp;&nbsp;Clause 6 Resource Management</span>';
		        echo '<br>';
		        echo '<span class="radioButtonText">' .checkbox_tag('pr', 'Product Realization', $sf_params->get('cla_4', false)) . '&nbsp;&nbsp;Product Realization</span>';
		        echo '<br>';
		        echo '<span class="radioButtonText">' .checkbox_tag('ma', 'Measurement, Analysis and Improvement', $sf_params->get('cla_5', false)) . '&nbsp;&nbsp;Measurement, Analysis and Improvement</span>';		        
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>SUMMARY OF FINDINGS</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
                echo textarea_tag('findings_summary', $sf_params->get('findings_summary'), 'size=75x4')				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>OTHER OBSERVATION/COMMENT</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
                echo textarea_tag('other_observation', $sf_params->get('other_observation'), 'size=75x5')				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>RECOMMENDATION</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
                echo textarea_tag('recommendation', $sf_params->get('recommendation'), 'size=75x5')				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CORRECTIVE/PREVENTIVE </BR>ACTION REPORT #</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
                echo input_tag('corrective_preventive_action_report_no', $sf_params->get('corrective_preventive_action_report_no'), 'size="20"');
                ?>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>PREPARED BY</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo $sf_params->get('prepared_by');
				?></td>
			</tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('prepared_date', $sf_params->get('prepared_date', date('Y-m-d')), 'prepared_date', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
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
		<td class="alignRight" nowrap>Record Sheet: </td>
	</tr>
	<tr>
		<td class="alignRight" nowrap><?php echo 'ISO Refs: ' ?></td>
	</tr>
</table>
</div>



<?php use_helper('Validation', 'Javascript') ?>
<?php
    $area = QrLocationPeer::GetFilterList();
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('micronclean/ultrasonicAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>ULTRASONIC GENERATOR SHEET</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('trans_date', $sf_params->get('trans_date', date('Y-m-d')), 'trans_date', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="10%" class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Save Info " class="submit-button"></td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>FREQUENCY </td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('frequency', $sf_params->get('frequency'), 'size="10" ');
				?>
				<span class="negative">khz</span>
				</td>
				<td class="FORMcell-left FORMlabel" nowrap>POWER</td>
				<td class="FORMcell-right FORMlabel" nowrap><span class="positive"><?php
                   echo input_tag('power', $sf_params->get('power'), 'size="10" ');
				?>
				<span class="negative">watts</span>
				</td>
			</tr>	
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>EQUIPMENT NAME </td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('equipment_name', $sf_params->get('equipment_name'), 'size="30" ');
				?>
				</td>
				<td class="FORMcell-left FORMlabel" nowrap>EQUIPMENT NO</td>
				<td class="FORMcell-right FORMlabel" nowrap><span class="positive"><?php
                   echo input_tag('equipment_no', $sf_params->get('equipment_no'), 'size="30" ');
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CALIBRATION DATE </td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('equipment_cal_date', $sf_params->get('equipment_cal_date', date('Y-m-d')), 'equipment_cal_date', XIDX::next(), ' size="12" '); ?>
				</td>
				<td class="FORMcell-left FORMlabel" nowrap>CALIBRATION NO</td>
				<td class="FORMcell-right FORMlabel" nowrap><span class="positive"><?php
                   echo input_tag('equipment_cal_no', $sf_params->get('equipment_cal_no'), 'size="30" ');
				?>
				</td>
			</tr>									
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>DONE BY </td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('done_by', $sf_params->get('done_by'), 'size="20" ');
				?>
				</td>
				<td class="FORMcell-left FORMlabel" nowrap>VERIFIED BY</td>
				<td class="FORMcell-right FORMlabel" nowrap><span class="positive"><?php
                   echo input_tag('verified_by', $sf_params->get('verified_by'), 'size="20" ');
				?>
				</td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REMARKS</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('remark', $sf_params->get('remark'), 'size=75x6')
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
	<tr><td>&nbsp;</td></tr>
	<tr><td>
	<div class="grid-toolbar-right alignRight" >
        <?php 
//            echo '<b>'; 
//            echo 'Record Sheet:</b> #004';
//            echo '<br>';
//            echo '<b>ISO Refs:</b> '   
//            . link_to('WI028rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI028rev001_19980112_microscopic_analysis_of_garments.pdf')
//            .' ,  '. link_to('WI106rev005', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI106rev005_20060901_DI_water_spec.pdf');
            
        ?>
	</div></td></tr>	
</table>
</div>
</form>


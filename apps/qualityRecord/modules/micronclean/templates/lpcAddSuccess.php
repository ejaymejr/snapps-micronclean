<?php use_helper('Validation', 'Javascript') ?>
<?php
    $area = QrLocationPeer::GetFilterList();
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('micronclean/lpcAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>LPC HORIBA-311 | LPC CALIBRATION LOG</H2></span></td></tr>
			<tr>
				<td class="FORMcell-left FORMlabel" colspan="2" nowrap>COMPANY</td>
				<td class="FORMcell-right" nowrap>
				<?php
					$companyList = array('ACRO SOLUTION'=>' -ACRO SOLUTION-', 'MICRONCLEAN'=>' -MICRONCLEAN-', 'NANOCLEAN'=>' -NANOCLEAN-'); 
					echo select_tag('company', options_for_select($companyList, $sf_params->get('company'))); 
				?>
				</td>
				<td class="FORMcell-right alignRight"  nowrap><input type="submit" name="save"
									value=" Save Info " class="submit-button"></td>				
			</tr>			
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE RECORDED</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('trans_date', $sf_params->get('trans_date', date('Y-m-d')), 'trans_date', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DUE-DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('due_date', $sf_params->get('due_date', date('Y-m-d')), 'due_date', XIDX::next(), ' size="12" '); ?>
				</td>				
			</tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>CALIBRATED BY</td>
				<td width="100" class="FORMcell-right" nowrap><?php
					echo input_tag('calibrated_by', $sf_params->get('calibrated_by'), 'size="25" '); ?>
				</td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>VERIFIED BY</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo input_tag('verified_by', $sf_params->get('verified_by'), 'size="25" '); ?>
				</td>				
			</tr>
			
		</table>
		<div class="grid-toolbar-2"></div>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
		<tr><td height="25" colspan="6" align="alignLeft" bgcolor="#F9DAA3" nowrap><span style="color: #000"><H3>&nbsp;&nbsp;&nbsp;REFERENCE UNITS</H3></span></td></tr>
			<tr>
				<td width="20%" class="FORMcell-right alignCenter" nowrap>1. Latex Particles</td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap>Manufacturer</td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap>Std Deviation</td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap>Lot No</td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap>Expiry Date</td>
			</tr>
			<tr>
				<td width="20%" class="FORMcell-right alignRight" nowrap>0.2&micro;m</td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap><?php echo input_tag('point_2_manufacturer', $sf_params->get('point_2_manufacturer'), 'size="25" '); ?></td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap><?php echo input_tag('point_2_std_deviation', $sf_params->get('point_2_std_deviation'), 'size="10" '); ?><span class="negative">&nbsp;&microm</span></td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap><?php echo input_tag('point_2_lot_no', $sf_params->get('point_2_lot_no'), 'size="25" '); ?></td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap><?php	echo HTMLForm::DrawDateInput('point_2_expiry_date', $sf_params->get('point_2_expiry_date', date('Y-m-d')), 'point_2_expiry_date', XIDX::next(), ' size="12" '); ?></td>
			</tr>
			<tr>
				<td width="20%" class="FORMcell-right alignRight" nowrap>0.5&micro;m</td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap><?php echo input_tag('point_5_manufacturer', $sf_params->get('point_5_manufacturer'), 'size="25" '); ?></td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap><?php echo input_tag('point_5_std_deviation', $sf_params->get('point_5_std_deviation'), 'size="10" '); ?><span class="negative">&nbsp;&microm</span></td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap><?php echo input_tag('point_5_lot_no', $sf_params->get('point_5_lot_no'), 'size="25" '); ?></td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap><?php	echo HTMLForm::DrawDateInput('point_5_expiry_date', $sf_params->get('point_5_expiry_date', date('Y-m-d')), 'point_5_expiry_date', XIDX::next(), ' size="12" '); ?></td>
			</tr>
			<tr>
				<td width="20%" class="FORMcell-right alignCenter" colspan="2" nowrap></td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap>Serial No</td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap>Cal Date</td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap>Cal Due</td>
			</tr>
			<tr>
				<td width="20%" class="FORMcell-right alignCenter" colspan="2" nowrap>2. Electronic MultiMeter</td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap><?php echo input_tag('emm_serial_no', $sf_params->get('emm_serial_no'), 'size="25" '); ?></td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap><?php	echo HTMLForm::DrawDateInput('emm_cal_date', $sf_params->get('emm_cal_date', date('Y-m-d')), 'emm_cal_date', XIDX::next(), ' size="12" '); ?></td>
				<td width="20%" class="FORMcell-right alignCenter" nowrap><?php	echo HTMLForm::DrawDateInput('emm_cal_due_date', $sf_params->get('emm_cal_due_date', date('Y-m-d')), 'emm_cal_due_date', XIDX::next(), ' size="12" '); ?></td>
			</tr>
		</table>
		<div class="grid-toolbar-2"></div>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
		<tr><td height="25" colspan="6" align="alignLeft" bgcolor="#F9DAA3" nowrap><span style="color: #000"><H3>&nbsp;&nbsp;&nbsp;TEST POINT</H3></span></td></tr>
			<tr>
				<td width="10%" class="FORMcell-right alignCenter" nowrap>Test Point</td>
				<td width="20%" class="FORMcell-right " nowrap>Description</td>
				<td width="20%" class="FORMcell-right " nowrap>MeasureMent Before<br>Adjustment</td>
				<td width="10%" class="FORMcell-right alignCenter" nowrap>Adjustment</td>
				<td width="10%" class="FORMcell-right alignCenter" nowrap>Voltage Range</td>
				<td width="20%" class="FORMcell-right " nowrap>MeasureMent After<br>Adjustment</td>
			</tr>
			<tr>
				<td class="FORMcell-right alignCenter" nowrap>TP-1</td>
				<td class="FORMcell-right " nowrap>Transmitted Lightsignal</td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_1_before', $sf_params->get('tp_1_before'), 'size="15" '); ?><span class="positive"> VDC</span></td>
				<td class="FORMcell-right alignCenter" nowrap>VR-1</td>
				<td class="FORMcell-right alignCenter" nowrap>10.4 to 10.6<span class="positive"> VDC</span></td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_1_after', $sf_params->get('tp_1_after'), 'size="15" '); ?><span class="positive"> VDC</span></td>
			</tr>			
			
			<tr>
				<td class="FORMcell-right alignCenter" nowrap>TP-2</td>
				<td class="FORMcell-right " nowrap>Feedback Voltage</td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_2_before', $sf_params->get('tp_2_before'), 'size="15" '); ?><span class="positive"> mV</span></td>
				<td class="FORMcell-right alignCenter" nowrap>VR-3</td>
				<td class="FORMcell-right alignCenter" nowrap>(-)32 to (-)34<span class="positive"> mV</span></td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_2_after', $sf_params->get('tp_2_after'), 'size="15" '); ?><span class="positive"> mV</span></td>
			</tr>
			<tr>
				<td class="FORMcell-right alignCenter" nowrap>TP-3</td>
				<td class="FORMcell-right " nowrap>Feedback Voltage</td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_3_before', $sf_params->get('tp_3_before'), 'size="15" '); ?><span class="positive"> mV</span></td>
				<td class="FORMcell-right alignCenter" nowrap>VR-2</td>
				<td class="FORMcell-right alignCenter" nowrap>(-)33 to (-)35<span class="positive"> mV</span></td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_3_after', $sf_params->get('tp_3_after'), 'size="15" '); ?><span class="positive"> mV</span></td>
			</tr>		
			<tr>
				<td class="FORMcell-right alignCenter" nowrap>TP-4</td>
				<td class="FORMcell-right " nowrap>Standard 0.5&microm</td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_4_before', $sf_params->get('tp_4_before'), 'size="15" '); ?><span class="positive"> VDC</span></td>
				<td class="FORMcell-right alignCenter" nowrap>VR-4</td>
				<td class="FORMcell-right alignCenter" nowrap>4.80 to 4.82<span class="positive"> VDC</span></td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_4_after', $sf_params->get('tp_4_after'), 'size="15" '); ?><span class="positive"> VDC</span></td>
			</tr>	
			<tr>
				<td class="FORMcell-right alignCenter" nowrap>TP-5</td>
				<td class="FORMcell-right " nowrap>Standard 0.2&microm</td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_5_before', $sf_params->get('tp_5_before'), 'size="15" '); ?><span class="positive"> VDC</span></td>
				<td class="FORMcell-right alignCenter" nowrap>VR-5</td>
				<td class="FORMcell-right alignCenter" nowrap>1.26 to 1.28<span class="positive"> VDC</span></td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_5_after', $sf_params->get('tp_5_after'), 'size="15" '); ?><span class="positive"> VDC</span></td>
			</tr>			
			<tr>
				<td class="FORMcell-right alignCenter" nowrap>TP-6</td>
				<td class="FORMcell-right " nowrap>Standard 0.1&microm</td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_6_before', $sf_params->get('tp_6_before'), 'size="15" '); ?><span class="positive"> mV</span></td>
				<td class="FORMcell-right alignCenter" nowrap>VR-6</td>
				<td class="FORMcell-right alignCenter" nowrap>38mV to 39<span class="positive"> mV</span></td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_6_after', $sf_params->get('tp_6_after'), 'size="15" '); ?><span class="positive"> mV</span></td>
			</tr>	
			<tr>
				<td class="FORMcell-right alignCenter" nowrap>TP-4</td>
				<td class="FORMcell-right " nowrap>High 0.2&microm</td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_7_before', $sf_params->get('tp_7_before'), 'size="15" '); ?><span class="positive"> VDC</span></td>
				<td class="FORMcell-right alignCenter" nowrap>VR-7</td>
				<td class="FORMcell-right alignCenter" nowrap>2.95V to 2.97<span class="positive"> VDC</span></td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_7_after', $sf_params->get('tp_7_after'), 'size="15" '); ?><span class="positive"> VDC</span></td>
			</tr>						
			<tr>
				<td class="FORMcell-right alignCenter" nowrap>TP-5</td>
				<td class="FORMcell-right " nowrap>High 0.1&microm</td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_8_before', $sf_params->get('tp_8_before'), 'size="15" '); ?><span class="positive"> V</span></td>
				<td class="FORMcell-right alignCenter" nowrap>VR-8</td>
				<td class="FORMcell-right alignCenter" nowrap>0.11V to 0.12<span class="positive"> VDC</span></td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_8_after', $sf_params->get('tp_8_after'), 'size="15" '); ?><span class="positive"> V</span></td>
			</tr>
			<tr>
				<td class="FORMcell-right alignCenter" nowrap>TP-6</td>
				<td class="FORMcell-right " nowrap>High 0.07&microm</td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_9_before', $sf_params->get('tp_9_before'), 'size="15" '); ?><span class="positive"> V</span></td>
				<td class="FORMcell-right alignCenter" nowrap>VR-9</td>
				<td class="FORMcell-right alignCenter" nowrap>0.020V to 0.021<span class="positive"> V</span></td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_9_after', $sf_params->get('tp_9_after'), 'size="15" '); ?><span class="positive"> V</span></td>
			</tr>		
			<tr>
				<td class="FORMcell-right alignCenter" nowrap>TP-8</td>
				<td class="FORMcell-right " nowrap>PMT Applied Voltage</td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_10_before', $sf_params->get('tp_10_before'), 'size="15" '); ?><span class="positive"> VDC</span></td>
				<td class="FORMcell-right alignCenter" nowrap>VR-11</td>
				<td class="FORMcell-right alignCenter" nowrap>(-)0.58<span class="positive"> VDC</span></td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_10_after', $sf_params->get('tp_10_after'), 'size="15" '); ?><span class="positive"> VDC</span></td>
			</tr>	
			<tr>
				<td class="FORMcell-right alignCenter" nowrap>TP-10</td>
				<td class="FORMcell-right " nowrap>Laser Output SW3</td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_11_before', $sf_params->get('tp_11_before'), 'size="15" '); ?><span class="positive"> V</span></td>
				<td class="FORMcell-right alignCenter" nowrap>Current (For 1 AMP)</td>
				<td class="FORMcell-right alignCenter" nowrap>0.1<span class="positive"> V</span></td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_11_after', $sf_params->get('tp_11_after'), 'size="15" '); ?><span class="positive"> V</span></td>
			</tr>		
			<tr>
				<td class="FORMcell-right alignCenter" nowrap>TP-11</td>
				<td class="FORMcell-right " nowrap>Laser Output SW3</td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_12_before', $sf_params->get('tp_12_before'), 'size="15" '); ?><span class="positive"> V</span></td>
				<td class="FORMcell-right alignCenter" nowrap>Voltage (For 7 mW)</td>
				<td class="FORMcell-right alignCenter" nowrap>1.4<span class="positive"> V</span></td>
				<td class="FORMcell-right " nowrap><?php echo input_tag('tp_12_after', $sf_params->get('tp_12_after'), 'size="15" '); ?><span class="positive"> V</span></td>
			</tr>	
			<tr>
				<td class="FORMcell-right alignCenter" nowrap>Condition</td>
				<td class="FORMcell-right alignCenter" nowrap>Temp <?php echo input_tag('temperature', $sf_params->get('temperature'), 'size="15" '); ?><span class="positive">  &degC</span></td>
				<td class="FORMcell-right " nowrap>Humidity <?php echo input_tag('humidity', $sf_params->get('humidity'), 'size="15" '); ?><span class="positive">  %</span></td>
			</tr>	
		</table>
		<div class="grid-toolbar-2"></div>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
		<tr><td height="25" colspan="6" align="alignLeft" bgcolor="#F9DAA3" nowrap><span style="color: #000"><H3>&nbsp;&nbsp;&nbsp;ZERO COUNT TEST</H3></span></td></tr>
			<tr>
				<td width="30%" class="FORMcell-right alignCenter" nowrap>Less than 1 count of 5 mins counting</td>
				<td width="70%" class="FORMcell-right alignLeft" nowrap><?php echo select_tag('zero_count', options_for_select(array('pass'=>' -PASS-', 'fail'=>' -FAIL-'), $sf_params->get('zero_count'))); ?></td>
			</tr>
			<tr>
			<td class="FORMcell-right alignRight"  nowrap colspan="5" ><input type="submit" name="save"
									value=" Save Info " class="submit-button"></td>
			</tr>
			
		</table>	
					
		
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>
	<div class="grid-toolbar-right alignRight" >
        <?php 
            echo '<b>'; 
            echo 'Record Sheet:</b> #115';
            echo '<br>';
            echo '<b>ISO Refs: MCWI202</b> '   
//            . link_to('WI028rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI028rev001_19980112_microscopic_analysis_of_garments.pdf')
//            .' ,  '. link_to('WI106rev005', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI106rev005_20060901_DI_water_spec.pdf');
            
        ?>
	</div></td></tr>	
</table>
</div>
</form>


<?php use_helper('Validation', 'Javascript') ?>
<?php
	$initial = array('PARI'=>'PARI',
					'JAYAKUMAR'=>'JAYAKUMAR',
	    			'MEIZHEN'=>'MEIZHEN',
	    			'ADELINE'=>'ADELINE', 
	                'TERENCE'=>'TERENCE',
	                'MELVIN'=>'MELVIN',
	    			'OTHERS'=>'OTHERS');     
    
    $mach = array(
         'MACHINE 1232 A'=>' -MACHINE 1232 A- '
        ,'MACHINE 1232 B'=>' -MACHINE 1232 B- '
        ,'MACHINE 1211'=>' -MACHINE 1211- '
    );  	
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('machine/doseCalibrationAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>DOSING CALIBRATION</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('trans_date');
				echo HTMLForm::DrawDateInput('trans_date', $sf_params->get('trans_date', date('Y-m-d')), 'trans_date', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="10%" class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Save Info " class="submit-button"></td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>MACHINE NO</td>
				<td colspan="3" class="FORMcell-right" nowrap>
				<?php				
                echo HTMLForm::Error('machine_no');
		        echo select_tag('machine_no',
				options_for_select($mach,
				$sf_params->get('machine_no') )   
				) ;
				?>
                
                </td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>DENSITY</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('density');
                echo input_tag('density', $sf_params->get('density'), 'size="10"')				?>
                <span class="negative"> for Valtron DP97031 </span>
                </td>
			</tr>		
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>PUMP MODEL</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('pump_model');
                echo input_tag('pump_model', $sf_params->get('pump_model'), 'size="20"')				?>
                <span class="negative">  </span>
                </td>
			</tr>	
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>EQUIPMENT FLOW RATE</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('eq_flow_rate');
                echo input_tag('eq_flow_rate', $sf_params->get('eq_flow_rate'), 'size="25"')				?>
                <span class="negative">  </span>
                </td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CALIBRATION FREQUENCY</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('frequency');
                echo input_tag('frequency', $sf_params->get('frequency'), 'size="15"')				?>
                <span class="negative">  </span>
                </td>
			</tr>	
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>FLOW RATE</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('flow_rate');
                echo input_tag('flow_rate', $sf_params->get('flow_rate'), 'size="15"')				?>
                <span class="negative">  </span>
                </td>
			</tr>		
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>READING TIME</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('reading_time');
                echo input_tag('reading_time', $sf_params->get('reading_time'), 'size="15"')				?>
                <span class="negative">  </span>
                </td>
			</tr>		
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>READING</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('reading');
                echo input_tag('reading', $sf_params->get('reading'), 'size="15"')				?>
                <span class="negative">  </span>
                </td>
			</tr>						
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>Checked By</td>
				<td colspan="3" class="FORMcell-right" nowrap>
				<?php				
                echo HTMLForm::Error('checked_by');
		        echo select_tag('checked_by',
				options_for_select($initial,
				$sf_params->get('checked_by') )   
				) ;
				?>
                </td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REMARKS</td>
				<td colspan="3" class="FORMcell-right" nowrap>
				<?php
				echo HTMLForm::Error('remark');
				echo textarea_tag('remark', $sf_params->get('remark'), 'size=75x6')
				?>
				<br>
				<br>
				<input type="submit" name="save" value=" Save Info " class="submit-button">				
				</td>
			</tr>									
		</table>
	</tr>
		<tr><td>&nbsp;</td></tr>
	<tr><td>
	<div class="grid-toolbar-right alignRight" >
<?php 
    echo '<b>'; 
    echo 'MC Record Sheet:</b> #82A';
    echo '<br>';
    echo '<b>Rev:</b> 001';
    echo '<br>';
    echo '<b>Issue Date:</b> 04 Jun 2008';
//    echo '<b>ISO Refs:</b>'   
//    .' '. link_to('WI020Brev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI020Brev001_20010420_HK_specification_of_certain_customers.pdf')
//    .' ,  '. link_to('WI020rev003', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI020rev003_20050721_helmke_drum_test.pdf')
//    .' ,  '. link_to('WI105rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI105rev001_19990210_helmke_drum_training.pdf')
//    .' ,  '. link_to('WI250rev005', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI250rev005_20080718_statistical_process_calculation.pdf');
    
    
?>
</div></td></tr>
	
</table>
</div>
</form>



<?php
function is_checked($msg)
{
//    var_dump($msg);
//    exit();
    $chk = false;
    if ($msg){
        $chk = true;
    }
    return $chk;
}
?>
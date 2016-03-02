<?php use_helper('Validation', 'Javascript') ?>
<?php
    $stat = array(
         'DETECTED'=>'DETECTED'
        ,'NOT DETECTED'=>'NOT DETECTED'
        ,'NA'=>'NA'
        
    );
    
    $mach = array(
         'MACHINE 6252'=>' -MACHINE 6252- '
    );
	    
	$initial = array('PARI'=>'PARI',
					'JAYAKUMAR'=>'JAYAKUMAR',
	    			'MEIZHEN'=>'MEIZHEN',
	    			'ADELINE'=>'ADELINE', 
	                'TERENCE'=>'TERENCE',
	                'MELVIN'=>'MELVIN',
	    			'OTHERS'=>'OTHERS');     
    
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('machine/pms6252WeeklyAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>WEEKLY 6252 PREVENTIVE MAINTENANCE SCHEDULE</H2></span></td></tr>
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
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="3" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('sensor_diagnostic', 1, is_checked($sf_params->get('sensor_diagnostic')) ) . '&nbsp;&nbsp;Sensor Diagnostic</span>';
				?>
			</tr>
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="3" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('actuator_diagnostic', 1, is_checked($sf_params->get('actuator_diagnostic')) ) . '&nbsp;&nbsp;Actuator Diagnostic</span>';
				?>
			</tr>
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="3" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('basket_inspect', 1, is_checked($sf_params->get('basket_inspect')) ) . '&nbsp;&nbsp;Basket Inspect</span>';
				?>
			</tr>			
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="3" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('chamber_clean', 1, is_checked($sf_params->get('chamber_clean')) ) . '&nbsp;&nbsp;Chamber Cleanliness</span>';
				?>
			</tr>
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="3" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('nozzle_inspect', 1, is_checked($sf_params->get('nozzle_inspect')) ) . '&nbsp;&nbsp;Nozzle Inspect</span>';
				?>
			</tr>				

			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="3" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('plumbing_inspect', 1, is_checked($sf_params->get('plumbing_inspect')) ) . '&nbsp;&nbsp;Plumbing Inspect</span>';
				?>
			</tr>				

			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="3" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('drive_roller', 1, is_checked($sf_params->get('drive_roller')) ) . '&nbsp;&nbsp;Drive Roller</span>';
				?>
			</tr>				
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="3" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('drive_belt', 1, is_checked($sf_params->get('drive_belt')) ) . '&nbsp;&nbsp;Drive Belt</span>';
				?>
			</tr>				

			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="3" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('chain_tention', 1, is_checked($sf_params->get('chain_tention')) ) . '&nbsp;&nbsp;Chain Tention</span>';
				?>
			</tr>							
							
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>Initial</td>
				<td colspan="3" class="FORMcell-right" nowrap>
				<?php				
                echo HTMLForm::Error('initial');
		        echo select_tag('initial',
				options_for_select($initial,
				$sf_params->get('initial') )   
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
    echo '<b>Form#: </b> 122B ';
    echo '<br>';
    echo '<b>Rev : </b> 002';
    echo '<br>';
    echo '<b>Issue Date: </b>01 Dec 2007';
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
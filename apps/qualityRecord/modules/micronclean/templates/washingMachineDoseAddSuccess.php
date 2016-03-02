<?php use_helper('Validation', 'Javascript') ?>
<?php
//     $customerList = QrDepartmentPeer::GetCustomerList();
//     $garmentList  = QrTypePeer::GetGarmentList();
//     $compute      = QrOhmPeer::GetOhms();
//     $stat = array(
//          'DETECTED'=>'DETECTED'
//         ,'NOT DETECTED'=>'NOT DETECTED'
//         ,'NA'=>'NA'
        
    		
//     );
	$machineList = array(''=>' -select machine number- ', '1'=>' - 1 - ', '2'=>' - 2 - ');
	$volumeList = array(''=>' -select volume- ', '0'=>' - 0 - ', '25'=>' - 25 - ', '50'=>' - 50 - ', '75'=>' - 75 - ', '100'=>' - 100 - ');
	$timeList = array(''=>' -select time- ', '30'=>' - 30 - ', '40'=>' - 40 - ', '50'=>' - 50 - ', '60'=>' - 60 - ');
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('micronclean/washingMachineDoseAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>WASHING MACHINE DOSE CALIBRATION</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('date_time');
				echo HTMLForm::DrawDateInput('date_time', $sf_params->get('date_time', date('Y-m-d')), 'date_time', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="10%" class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Save Info " class="submit-button"></td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>MACHINE NUMBER</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('machine_no');
		        echo select_tag('machine_no',
					options_for_select($machineList,
					$sf_params->get('machine_no') )   
					) ;
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>&nbsp;
				</td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>Volume Dispensed</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('volume_dispensed');
                echo select_tag('volume_dispensed',
					options_for_select($volumeList,
					$sf_params->get('volume_dispensed') )   
					) ;				?>
                </td>
				<td class="FORMcell-right FORMlabel" nowrap>ml &plusmn; 5%
				</td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>Time Taken</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('time_taken');
                echo select_tag('time_taken',
					options_for_select($timeList,
					$sf_params->get('time_taken') )   
					) ;				?>
                </td>
				<td class="FORMcell-right FORMlabel" nowrap>= 30sec
				</td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>Checked By</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('verified_by');
                echo input_tag('checked_by', $sf_params->get('checked_by'), 'size="25"')				?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>&nbsp;
				</td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REMARKS</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('remarks', $sf_params->get('remarks'), 'size=75x6')
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
    echo '<b>'; 
    echo 'Record Sheet:</b> #087';
    echo '<br>';
//     echo '<b>ISO Refs:</b>'   
//    .' '. link_to('WI020Brev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI020Brev001_20010420_HK_specification_of_certain_customers.pdf')
//     .' ,  '. link_to('WI020rev003', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI020rev003_20050721_helmke_drum_test.pdf')
//     .' ,  '. link_to('WI105rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI105rev001_19990210_helmke_drum_training.pdf')
//     .' ,  '. link_to('WI250rev005', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI250rev005_20080718_statistical_process_calculation.pdf');
    
    
?>
</div></td></tr>
	
</table>
</div>
</form>




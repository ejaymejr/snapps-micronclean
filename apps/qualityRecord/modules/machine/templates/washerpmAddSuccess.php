<?php use_helper('Validation', 'Javascript') ?>
<?php
    $stat = array(
         'DETECTED'=>'DETECTED'
        ,'NOT DETECTED'=>'NOT DETECTED'
        ,'NA'=>'NA'
        
    );
    $mach = array(
         'WASHER 1'=>' -WASHER 1- '
        ,'WASHER 2'=>' -WASHER 2- '
        ,'WASHER 3'=>' -WASHER 3- '
    );    
	    
	$initial = array('VELU'=>'VELU',
	    			'HUIPING'=>'HUIPING',
	    			'ADELINE'=>'ADELINE', 
	                'TERENCE'=>'TERENCE',
	                'MELVIN'=>'MELVIN',
	    			'OTHERS'=>'OTHERS');     
    
	echo javascript_tag("
	function closeAllInstruction()
	{
		document.getElementById('DIVcheck_brake').style.display = 'none';
		document.getElementById('DIVcheck_sensory').style.display = 'none';
		document.getElementById('DIVlubricate_bearings').style.display = 'none';
		document.getElementById('DIVclean_door').style.display = 'none';
		document.getElementById('DIVcheck_hose').style.display = 'none';
		document.getElementById('DIVpurged_water').style.display = 'none';
		document.getElementById('DIVcheck_belt').style.display = 'none';
		document.getElementById('DIVclean_machine').style.display = 'none';
		document.getElementById('DIVtemp_control').style.display = 'none';
		document.getElementById('DIVtemp_verify').style.display = 'none';
	}
");
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('machine/washerpmAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="0"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>WASHING MACHINE PREVENTIVE MAINTENANCE SCHEDULE</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100px" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('trans_date');
				echo HTMLForm::DrawDateInput('trans_date', $sf_params->get('trans_date', date('Y-m-d')), 'trans_date', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="100px" class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Save Info " class="submit-button"></td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>MACHINE ID</td>
				<td colspan="3" class="FORMcell-right" nowrap>
				<?php				
                echo HTMLForm::Error('machine_type');
		        echo select_tag('machine_type',
				options_for_select($mach,
				$sf_params->get('machine_type') )   
				) ;
				?>
                
                </td>
			</tr>

			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="1" width="200" class="FORMcell-Center alignCenter" width="10" nowrap><h2>WEEKLY</h2><span class="negative">click on the titles to check instructions</span></td>
				<td colspan="1" width="200" class="FORMcell-Center alignCenter" width="10" nowrap><h2>MONTHLY</h2><span class="negative">click on the titles to check instructions</span></td>
			</tr>			
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="1" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('clean_machine', 1, is_checked($sf_params->get('clean_machine')) ) . '&nbsp;&nbsp;'
        		.link_to('Clean the machine thoroughly','',"onclick=closeAllInstruction(); showHideElement('DIVclean_machine');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVclean_machine" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Clean the machine thoroughly on side</h3>
Equipments:	Solid level: Smock, Hairnet, Facemask and Wipes(wet with DI water) Cleanroom: Jumbsuit, Hairnet, Facemask and Wipes(wet with DI water)	
	1.1 Open loading door.
	1.2 Open the chamber(1) door.
	1.3 Use new wipes to clean the interiour of the chamber.
	1.4 Close the chamber and dispose all the used wipes.
	1.5 Clean the chamber of exterior with new wipes.
	1.6 Close the loading door.
	1.7 Rotate and open the chamber(2) door.
	1.8 Repeat the steps from 1.3 to 1.6
	1.9 Press the machine mode AUTO turn off the machine
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVclean_machine');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
	</div>
				</td>
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('check_belt', 1, is_checked($sf_params->get('check_belt')) ) . '&nbsp;&nbsp;'
				.link_to('Check v-belt tension','',"onclick=closeAllInstruction(); showHideElement('DIVcheck_belt');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVcheck_belt" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Check v-belt tension</h3>
Visually inspect the belts are Pinch, squeeze, twist and tightened.
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVcheck_belt');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
</div>
			</td>
			</tr>	
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="1" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('purged_water', 1, is_checked($sf_params->get('purged_water')) ) . '&nbsp;&nbsp;'
				.link_to('Purged water from pneumatic filter','',"onclick=closeAllInstruction(); showHideElement('DIVpurged_water');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVpurged_water" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Purged water from pneumatic filter</h3>
Check all pneumatic connection and pneumatic filter drain the water and wiped out.
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVpurged_water');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
</div>			
				</td>
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('check_hose', 1, is_checked($sf_params->get('check_hose')) ) . '&nbsp;&nbsp;'
				.link_to('Check the hose connections','',"onclick=closeAllInstruction(); showHideElement('DIVcheck_hose');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVcheck_hose" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Check the hose connections</h3>
Use torch and check all the hose connections wheather leak or not?
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVcheck_hose');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
</div>
				</td>
			</tr>
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="1" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('clean_door', 1, is_checked($sf_params->get('clean_door')) ) . '&nbsp;&nbsp;'
				.link_to('Clean the door sealing of the gasket','',"onclick=closeAllInstruction(); showHideElement('DIVclean_door');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVclean_door" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Clean the door sealing of the gasket</h3>
The door gasket clean and check wheather damage.
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVclean_door');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
</div>				</td>
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				
				echo '<span class="radioButtonText">' .checkbox_tag('lubricate_bearings', 1, is_checked($sf_params->get('lubricate_bearings')) ) . '&nbsp;&nbsp;'
				.link_to('Lubricate bearing','',"onclick=closeAllInstruction(); showHideElement('DIVlubricate_bearings');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVlubricate_bearings" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Lubricate bearing</h3>
Use the grease and apply the drum bearings. Use grease gun and top -up the grease from top up points.
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVlubricate_bearings');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
</div>
			</td>
			</tr>						
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="1" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('temp_control', 1, is_checked($sf_params->get('temp_control')) ) . '&nbsp;&nbsp;'
        		.link_to('Temperature Control System','',"onclick=closeAllInstruction(); showHideElement('DIVtemp_control');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVtemp_control" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Temperature Control System</h3>
1. Open Control Panel
2. Locate the temperature sensor
3. Manually close the circuit
4. The pneumatic steam valve will close and produce click sound
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVtemp_control');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
	</div>
				</td>
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('check_sensory', 1, is_checked($sf_params->get('check_sensory')) ) . '&nbsp;&nbsp;'
				.link_to('Check safety switch and sensory analysis','',"onclick=closeAllInstruction(); showHideElement('DIVcheck_sensory');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVcheck_sensory" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Check safety switch and sensory analysis</h3>
Check the electrial connections and sensor devices by use proper tools. 
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVcheck_sensory');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
</div>
			</td>
			</tr>
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="1" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('temp_verify', 1, is_checked($sf_params->get('temp_verify')) ) . '&nbsp;&nbsp;'
        		.link_to('Temperature Verification','',"onclick=closeAllInstruction(); showHideElement('DIVtemp_verify');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVtemp_verify" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Temperature Verification</h3>
Refer to <?php echo link_to('WI200', 'http://sym.micronclean/isodoc/wi/Micronclean/WI200rev001_20000604_calibration_of_dryers.pdf');?>
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVtemp_verify');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
	</div>
				</td>
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('check_brake', 1, is_checked($sf_params->get('check_brake')) ) . '&nbsp;&nbsp;'
				.link_to('Check brake lining','',"onclick=closeAllInstruction(); showHideElement('DIVcheck_brake');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVcheck_brake" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Check brake lining</h3>
Use wipes, Check and clean the break pad and air cap and machine suspension.
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVcheck_brake');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
</div>				</td>
				
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>Performed By</td>
				<td colspan="3" class="FORMcell-right" nowrap>
				<?php				
                echo HTMLForm::Error('performed_by');
		        echo select_tag('performed_by',
				options_for_select($initial,
				$sf_params->get('performed_by') )   
				) ;
				?>
                </td>
			</tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>Date Verified</td>
				<td width="100px" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('verify_date');
				echo HTMLForm::DrawDateInput('verify_date', $sf_params->get('verify_date', date('Y-m-d h:i:s')), 'verify_date', XIDX::next(), ' size="20" '); ?>
				</td>
				<td width="100px" class="FORMcell-right" nowrap></td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>Verified By</td>
				<td colspan="3" class="FORMcell-right" nowrap>
				<?php				
                echo HTMLForm::Error('verified_by');
		        echo select_tag('verified_by',
				options_for_select($initial,
				$sf_params->get('verified_by') )   
				) ;
				?><span class="negative">&nbsp;&nbsp;&nbsp;QA must verify PM</span>
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
			<tr>
				<td height="25" colspan="6" align="center" bgcolor="#939790" nowrap><span style="color: #FFF"><H3>THE SUPERVISOR VERIFY AND POWER ON THE MACHINE</H3></span></td>
			</tr>									
		</table>
	</tr>
		<tr><td>&nbsp;</td></tr>
	<tr><td>
	<div class="grid-toolbar-right alignRight" >
<?php 
//     echo '<b>'; 
//     echo 'Record Sheet:</b> #066';
	   echo 'Record Sheet: #066';
//     echo '<br>';
//     echo '<b>Form#: 122A Rev 002</b>';
//     echo '<br>';
//     echo '<b>Issue Date: 01 Dec 2007</b>';
    
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
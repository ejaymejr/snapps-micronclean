<?php use_helper('Validation', 'Javascript') ?>
<?php
    $stat = array(
         'DETECTED'=>'DETECTED'
        ,'NOT DETECTED'=>'NOT DETECTED'
        ,'NA'=>'NA'
        
    );
    $mach = array(
         'DRYER 1'=>' -DRYER 1- '
        ,'DRYER 2'=>' -DRYER 2- '
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
			document.getElementById('DIVcage_motor').style.display = 'none';
			document.getElementById('DIVfan_motor').style.display = 'none';
			document.getElementById('DIVfan_shaft').style.display = 'none';
			document.getElementById('DIVfan_bearing').style.display = 'none';
			document.getElementById('DIVcage_shaft').style.display = 'none';
			document.getElementById('DIVclean_machine').style.display = 'none';
			document.getElementById('DIVtemp_control').style.display = 'none';
			document.getElementById('DIVtemp_verify').style.display = 'none';
		}
			");
    
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('machine/dryerpmAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="0"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>DRYER MACHINE PREVENTIVE MAINTENANCE SCHEDULE</H2></span></td></tr>
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
				<td class="FORMcell-Center " nowrap></td>
				<td colspan="1" width="200" class="FORMcell-Center alignCenter" width="10" nowrap><h2>WEEKLY</h2><span class="negative">click on the titles to check instructions</span></td>
				<td colspan="1" width="200" class="FORMcell-Center alignCenter" width="10" nowrap><h2>MONTHLY</h2><span class="negative">click on the titles to check instructions</span></td>
			</tr>			
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="1" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('clean_machine', 1, is_checked($sf_params->get('clean_machine')) ) . '&nbsp;&nbsp;'
        		.link_to('Clean the machine thoroughly on side','',"onclick=closeAllInstruction(); showHideElement('DIVclean_machine');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVclean_machine" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Clean the machine thoroughly on side</h3>
Equipments: Solid level: Smock, Hairnet, Facemask and Wipes(wet with DI water) Cleanroom: Jumbsuit, Hairnet, Facemask and Wipes(wet with DI water)	
	1.1 Power Off the dryer.
	1.2 Open the dryer loading door.
	1.3 Check and clean door gasket.
	1.4 Close the door and dispose all the used wipes
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVclean_machine');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
	</div>
				</td>
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('cage_shaft', 1, is_checked($sf_params->get('cage_shaft')) ) . '&nbsp;&nbsp;'
				.link_to('Cage Shaft Bearing Lubrication','',"onclick=closeAllInstruction(); showHideElement('DIVcage_shaft');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVcage_shaft" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Cage Shaft Bearing Lubrication</h3>
Prepare the lubricant to apply the Cage Shaft Bearing in the Dryer.
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVcage_shaft');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
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
				echo '<span class="radioButtonText">' .checkbox_tag('fan_bearing', 1, is_checked($sf_params->get('fan_bearing')) ) . '&nbsp;&nbsp;'
				.link_to('Fan Bearing(fan housing)','',"onclick=closeAllInstruction(); showHideElement('DIVfan_bearing');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVfan_bearing" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Fan Bearing(fan housing)</h3>
Use wipes, clean and check the grease for Fan Bearing(fan housing). If needed re-grease.
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVfan_bearing');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
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
Refer to <?php echo link_to('WI051', 'http://sym.micronclean/isodoc/wi/Micronclean/WI051rev001_19980112_temperature_verification_washer.pdf');?>
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVtemp_verify');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
	</div>
				</td>
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('fan_shaft', 1, is_checked($sf_params->get('fan_shaft')) ) . '&nbsp;&nbsp;'
				.link_to('Fan shaft bearing lubrication','',"onclick=closeAllInstruction(); showHideElement('DIVfan_shaft');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVfan_shaft" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Fan shaft bearing lubrication</h3>
Use wipes, clean and check the grease for Fan Shaft bearing lubrication. If needed re-grease.
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVfan_shaft');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
</div>					
				</td>
			</tr>
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="1" width="200" class="FORMcell-right" width="10" nowrap></td>
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('fan_motor', 1, is_checked($sf_params->get('fan_motor')) ) . '&nbsp;&nbsp;'
				.link_to('Fan motor gear oil check and top-up','',"onclick=closeAllInstruction(); showHideElement('DIVfan_motor');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVfan_motor" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Fan motor gear oil check and top-up</h3>
After wipe down check oil indicator of the Fan motor gear. The proper level is must maintain. If not top-up the oil by using measure cub.
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVfan_motor');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
</div>				
				</td>
				</tr>		
			<tr>
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="1" width="200" class="FORMcell-right" width="10" nowrap></td>
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('cage_motor', 1, is_checked($sf_params->get('cage_motor')) ) . '&nbsp;&nbsp;'
				.link_to('Cage Motor-grease fitting on end plates (clean and regrease if needed)','',"onclick=closeAllInstruction(); showHideElement('DIVcage_motor');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
<div id="DIVcage_motor" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Cage Motor-grease fitting on end plates (clean and regrease if needed)</h3>
Use wipes, clean and check the cage motor grease fitting on end plates. If needed re-grease.		
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVcage_motor');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
</div>
				</td>
				</tr>		
			<tr>		
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
		</table>
	</tr>
		<tr><td>&nbsp;</td></tr>
	<tr><td>
	<div class="grid-toolbar-right alignRight" >
<?php 
//     echo '<b>'; 
//     echo 'Record Sheet:</b> #008';
	   echo 'Record Sheet: #074';
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
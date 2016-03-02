<?php use_helper('Validation', 'Javascript') ?>
<?php
    $stat = array(
         'DETECTED'=>'DETECTED'
        ,'NOT DETECTED'=>'NOT DETECTED'
        ,'NA'=>'NA'
        
    );
    $mach = array(
         'CR HEAT SEALER'=>' -CLEANROOM HEAT SEALER- '
        ,'NCR HEAT SEALER'=>' -NON-CLEANROOM HEAT SEALER- '
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
 			document.getElementById('DIVpiston').style.display = 'none';
 			document.getElementById('DIVdwell').style.display = 'none';
 			document.getElementById('DIVheat').style.display = 'none';
 			document.getElementById('DIVthermopatch').style.display = 'none';
 			document.getElementById('DIVair_regulator').style.display = 'none';
		}
			");
    
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('machine/heatSealerpmAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="0"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>HEAT SEALER PREVENTIVE MAINTENANCE SCHEDULE</H2></span></td></tr>
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
				<td colspan="1" width="200" class="FORMcell-Center alignCenter" width="10" nowrap><h2>MONTHLY</h2><span class="negative">click on the titles to check instructions</span></td>
			</tr>			
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('air_regulator', 1, is_checked($sf_params->get('air_regulator')) ) . '&nbsp;&nbsp;'
        		.link_to('Air Regulator','',"onclick=closeAllInstruction(); showHideElement('DIVair_regulator');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVair_regulator" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Air Regulator</h3>
Monitoring of all cylinder for heat sealer
	1 The Gate Cylinder pressure is between 20psi and 40psi
	2 The High cylinder pressure is between 60psi and 80psi
	3 Low cylinder pressure is between 10psi and 15psi
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVair_regulator');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
	</div>
				</td>
			</tr>						
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('heat', 1, is_checked($sf_params->get('heat')) ) . '&nbsp;&nbsp;'
				.link_to('Heat','',"onclick=closeAllInstruction(); showHideElement('DIVheat');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVheat" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Heat</h3>
1. Verify that heater control is set at position 1.5
2. Measure the output power is between 480 watt and 520 watt
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVheat');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
</div>					
				</td>
				
			</tr>	
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('thermopatch', 1, is_checked($sf_params->get('thermopatch')) ) . '&nbsp;&nbsp;'
				.link_to('Thermopatch','',"onclick=closeAllInstruction(); showHideElement('DIVthermopatch');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVthermopatch" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Thermopatch</h3>
1. Power off the machine
2. Peel off and dispose current thermopatch
3. Verify wire heat sealer is in working condition. If not replace it
4. Replace a new thermopatch 
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVthermopatch');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
</div>					
				</td>
			</tr>
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('dwell', 1, is_checked($sf_params->get('dwell')) ) . '&nbsp;&nbsp;'
				.link_to('Dwell','',"onclick=closeAllInstruction(); showHideElement('DIVdwell');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
				<div id="DIVdwell" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Dwell</h3>
1. Verify that dwell control is set at position 1.5 
2. Dwell time is between 3seconds and 4 seconds
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVdwell');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
</div>				
				</td>
				</tr>		
			<tr>
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				
				<td colspan="2" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('piston', 1, is_checked($sf_params->get('piston')) ) . '&nbsp;&nbsp;'
				.link_to('Cage Motor-grease fitting on end plates (clean and regrease if needed)','',"onclick=closeAllInstruction(); showHideElement('DIVpiston');return false;" . " style=cursor:pointer;" ).' </span>';
				?>
<div id="DIVpiston" style="display:none" class="DIVInstruction">
<div class="alignCenter" style="color:blue"><h2>INSTRUCTION</h2></div>
<h3>Piston</h3>
1. Inspect all pistons by actuating them 5 cycles
2. During actuation, there should not have any abrasion noise and movement should be smooth		
<?php echo "<br><center>".link_to('close','',"onclick=showHideElement('DIVpiston');return false;" . " style=cursor:pointer;" ) . "</center>"; ?>
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
				<span class="negative"><?php echo 'Print Log Sheet:</b> #076A';?></span>
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
				?> <span class="negative">QA must verify PM</span>
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
     echo 'Record Sheet: #076A';
//     echo '<br>';
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
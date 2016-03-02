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
       // ,'MACHINE 1211'=>' -MACHINE 1211- '
        ,'MACHINE 6252'=>' -MACHINE 6252- '
    );	
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('machine/machineParameterAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>MACHINE PARAMETER</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('trans_date');
				echo HTMLForm::DrawDateInput('trans_date', $sf_params->get('trans_date', date('Y-m-d h:i:s')), 'trans_date', XIDX::next(), ' size="20" '); ?>
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
				<td class="FORMcell-left FORMlabel" nowrap>DI WATER RES</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('di_water');
                echo input_tag('di_water', $sf_params->get('di_water'), 'size="10"')				?>
                <span class="negative">   </span>
                </td>
			</tr>		
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CDA1 PRESSURE</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('cda1');
                echo input_tag('cda1', $sf_params->get('cda1'), 'size="10"')				?>
                <span class="negative">  40+/-5 PSI</span>
                </td>
			</tr>	
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CDA2 PRESSURE</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('cda2');
                echo input_tag('cda2', $sf_params->get('cda2'), 'size="10"')				?>
                <span class="negative">  40+/-5 PSI</span>
                </td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CDA DIFF PRESSURE</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('cda_diff');
                echo input_tag('cda_diff', $sf_params->get('cda_diff'), 'size="20"')				?>
                <span class="negative">  </span>
                </td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>SUMPTANK</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('sumptank');
                echo input_tag('sumptank', $sf_params->get('sumptank'), 'size="15"')				?>
                <span class="negative">  40+/-5 Degrees Celcius</span>
                </td>
			</tr>	
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>ULTRA TANK</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('ultra_tank');
                echo input_tag('ultra_tank', $sf_params->get('ultra_tank'), 'size="15"')				?>
                <span class="negative">  40+/-5 Degrees Celcius</span>
                </td>
			</tr><!--		
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>WATER TEMP</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('water_temp');
                echo input_tag('water_temp', $sf_params->get('water_temp'), 'size="15"')				?>
                <span class="negative">  40 Degrees Celcius</span>
                </td>
			</tr>		
			--><tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>RINSE TEMP</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('rinse_temp');
                echo input_tag('rinse_temp', $sf_params->get('rinse_temp'), 'size="15"')				?>
                <span class="negative">  40+/-2 Degrees Celcius</span>
                </td>
			</tr>						
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CHECKED BY</td>
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
				<td class="FORMcell-left FORMlabel" nowrap>VERIFIED BY</td>
				<td colspan="3" class="FORMcell-right" nowrap>
				<?php				
                echo HTMLForm::Error('verified_by');
		        echo select_tag('verified_by',
				options_for_select($initial,
				$sf_params->get('verified_by') )   
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
    echo '<b>Form# 92</b>';
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
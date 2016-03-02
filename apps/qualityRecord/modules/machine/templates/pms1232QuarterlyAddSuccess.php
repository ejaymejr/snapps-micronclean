<?php use_helper('Validation', 'Javascript') ?>
<?php
    $stat = array(
         'DETECTED'=>'DETECTED'
        ,'NOT DETECTED'=>'NOT DETECTED'
        ,'NA'=>'NA'
        
    );
    
    $mach = array(
         'MACHINE 1232 A'=>' -MACHINE 1232 A- '
        ,'MACHINE 1232 B'=>' -MACHINE 1232 B- '
        ,'MACHINE 1211'=>' -MACHINE 1211- '
        ,'MACHINE 6252'=>' -MACHINE 6252- '
    );
	    
	$initial = array('PARI'=>'PARI',
					'JAYAKUMAR'=>'JAYAKUMAR',
	    			'MEIZHEN'=>'MEIZHEN',
	    			'ADELINE'=>'ADELINE', 
	                'TERENCE'=>'TERENCE',
	                'MELVIN'=>'MELVIN',
	    			'OTHERS'=>'OTHERS');     
	$qtr = array('FIRST QUARTER'=> ' -FIRST QUARTER-'
				,'SECOND QUARTER'=> ' -SECOND QUARTER-'
				,'THIRD QUARTER'=> ' -THIRD QUARTER-'
				,'FOURTH QUARTER'=> ' -FOURTH QUARTER-'
	);
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('machine/pms1232QuarterlyAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>QUARTERLY PREVENTIVE MAINTENANCE SCHEDULE</H2></span></td></tr>
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
				<td class="FORMcell-left FORMlabel" nowrap>QUARTER</td>
				<td colspan="3" class="FORMcell-right" nowrap>
				<?php				
                echo HTMLForm::Error('quarter');
		        echo select_tag('quarter',
				options_for_select($qtr,
				$sf_params->get('quarter') )   
				) ;
				?>
                </td>
			</tr>			
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>COMPLETED</td>
				<td colspan="3" width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('date_completed');
				echo HTMLForm::DrawDateInput('date_completed', $sf_params->get('date_completed', ''), 'date_completed', XIDX::next(), ' size="12" '); ?>
				</td>
			</tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DUE DATE</td>
				<td colspan="3" width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('due_date');
				echo HTMLForm::DrawDateInput('due_date', $sf_params->get('due_date', ''), 'due_date', XIDX::next(), ' size="12" '); ?>				
			</tr>						
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="3" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('cda_filter', 1, is_checked($sf_params->get('cda_filter')) ) . '&nbsp;&nbsp;CDA Filter Check</span>';
				?></td>
			</tr>
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td colspan="3" width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('di_water_filter', 1, is_checked($sf_params->get('di_water_filter')) ) . '&nbsp;&nbsp;DI Water Filter</span>';
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
	echo '<b>Form# :</b>122D'; 
    echo '<br>'; 
    echo '<b>Rev:</b> 001';
    echo '<br>';
    echo '<b>Issue Date:</b>31 Oct 2006';
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
<?php use_helper('Validation', 'Javascript') ?>
<?php
$empList = HrEmployeeMasterPeer::GetEmpList();
$verify = array('JAYAKUMAR'=>'JAYAKUMAR',
    			'MEIZHEN'=>'MEIZHEN',
    			'ADELINE'=>'ADELINE', 
                'TERENCE'=>'TERENCE',
                'MELVIN'=>'MELVIN',
    			'OTHERS'=>'OTHERS');  

		    $eval = array(
                'EXCELLENT'=>'EXCELLENT',
            	'VERY GOOD'=>'VERY GOOD',
            	'GOOD'=>'GOOD',
            	'POOR'=>'POOR',
		    );

?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('training/mcsTrainingEval'). '?id=' . $sf_params->get('id');?>"
	method="post">
<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"
	cellspacing="0">
	<tr>
		<td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"
			cellspacing="0">
			<tr>
				<td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span
					style="color: #FFF">
				<H2>MICRONCLEAN EMPLOYEE TRAINING EVALUATION DATA SHEET</H2>
				</span></td>
			</tr>
			<tr>
				<td width="200" class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>EMPLOYEE</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('employee_no');
				echo select_tag('employee_no',
				options_for_select($empList,
				$sf_params->get('employee_no') )
				) ;
				?><span class="negative"> if employee not found on the list, click </span><input
					type="submit" name="rebuild" value=" Rebuild "
					class="submit-button"></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE FROM</td>
				<td colspan="3" width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('date_from', $sf_params->get('date_from', date('Y-m-d')), 'date_from', XIDX::next(), ' size="12" ');
				echo ' TO ';
				echo HTMLForm::DrawDateInput('date_to', $sf_params->get('date_to', date('Y-m-d')), 'date_to', XIDX::next(), ' size="12" ');
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>TOTAL #HOURS</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo input_tag('no_hrs', $sf_params->get('no_hrs'), 'size="10"')
				?></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>EVALUATED</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('evaluated');
				echo select_tag('evaluated',
				options_for_select($verify,
				$sf_params->get('evaluated') )
				) ;
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE EVALUATED</td>
				<td colspan="3" width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('date_time', $sf_params->get('date_time', date('Y-m-d')), 'date_time', XIDX::next(), ' size="12" ');
				?></td>
			</tr>
			

			<tr>
				<td height="25" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span
					style="color: #FFF">
				<H3>TRAINING AREAS</H3>
				</span></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('basic_training'))){
				    echo select_tag('basic_training',
				    options_for_select($eval,
				    $sf_params->get('basic_training') )
				    ) ;
				}
				echo '&nbsp;&nbsp;Basic Training</span>';
				?>
				
				
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php

				echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('soil_sorting'))){
				    echo select_tag('soil_sorting',
				    options_for_select($eval,
				    $sf_params->get('soil_sorting') )
				    ) ;
				}
				echo '&nbsp;&nbsp;Soil Sorting</span>';
				?>
			
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' ;				
				if (is_checked($sf_params->get('loading_washer'))){
				    echo select_tag('loading_washer',
				    options_for_select($eval,
				    $sf_params->get('loading_washer') )
				    ) ;
				}
				echo '&nbsp;&nbsp;Loading Washer</span>';
				?>
				
				
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				    echo '<span class="radioButtonText">' ;				
				if (is_checked($sf_params->get('unloading_washer'))){
				    echo select_tag('unloading_washer',
				    options_for_select($eval,
				    $sf_params->get('unloading_washer') )
				    ) ;
				    
				}
                echo '&nbsp;&nbsp;Unloading Washer</span>';				
				?>
			
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('cleanroom_dryer'))){
				    echo select_tag('cleanroom_dryer',    
				    options_for_select($eval,
				    $sf_params->get('cleanroom_dryer') )
				    ) ;
				}
				echo '&nbsp;&nbsp;Cleanroom Dryer</span>';
				?>
				
				
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('folding'))){
				    echo select_tag('folding',
				    options_for_select($eval,
				    $sf_params->get('folding') )
				    ) ;
    			}
				echo '&nbsp;&nbsp;Folding</span>';
				?>
			
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
    			echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('vacuum_packer'))){
				    echo select_tag('vacuum_packer',
				    options_for_select($eval,
				    $sf_params->get('vacuum_packer') )
				    ) ;
				}
				echo '&nbsp;&nbsp;Vacuum Packer</span>';
				?>
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
			    echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('helmke_drum'))){
				    echo select_tag('helmke_drum',
				    options_for_select($eval,
				    $sf_params->get('helmke_drum') )
				    ) ;
				}
				echo '&nbsp;&nbsp;Helmke Drum</span>';				
				?>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('water_particle_counter'))){
				    echo select_tag('water_particle_counter',
				    options_for_select($eval,
				    $sf_params->get('water_particle_counter') )
				    ) ;
				}
				echo '&nbsp;&nbsp;Water Particle Counter</span>';				
				?>

				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('air_particle_counter'))){
				    echo select_tag('air_particle_counter',
				    options_for_select($eval,
				    $sf_params->get('air_particle_counter') )
				    ) ;
				}
				echo '&nbsp;&nbsp;Air Particle Counter</span>';				
				?>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('thermo_patch'))){
				    echo select_tag('thermo_patch',
				    options_for_select($eval,
				    $sf_params->get('thermo_patch') )
				    ) ;
				}
				echo '&nbsp;&nbsp;Thermo Patch</span>';				
				?>
				
				
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('dispatch'))){
				    echo select_tag('dispatch',
				    options_for_select($eval,
				    $sf_params->get('dispatch') )
				    ) ;
				}
				echo '&nbsp;&nbsp;Dispatch</span>';
				?>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('sewing_machine'))){
				    echo select_tag('sewing_machine',
				    options_for_select($eval,
				    $sf_params->get('sewing_machine') )
				    ) ;
				}
				echo '&nbsp;&nbsp;Sewing Machine</span>';
				?>
				
				
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('stud_machine'))){
				    echo select_tag('stud_machine',
				    options_for_select($eval,
				    $sf_params->get('stud_machine') )
				    ) ;
				}
				echo '&nbsp;&nbsp;Stud Machine</span>';				
				?>
			
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('shoe_washer'))){
				    echo select_tag('shoe_washer',
				    options_for_select($eval,
				    $sf_params->get('shoe_washer') )
				    ) ;
				}
                echo '&nbsp;&nbsp;Shoe Washer</span>';				
				?>
				
				
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' ;
				if (is_checked($sf_params->get('shoe_dryer'))){
				    echo select_tag('shoe_dryer',
				    options_for_select($eval,
				    $sf_params->get('shoe_dryer') )
				    ) ;
				}
				echo '&nbsp;&nbsp;Shoe Dryer</span>';				
				?>
			
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
				<td colspan="3" class="FORMcell-right" nowrap></td>
			</tr>
		</table>
	
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>
		<div class="grid-toolbar-right alignRight"><?php 
		echo '<b>';
		echo 'Record Sheet:</b> #006';
		echo '<br>';
		echo '<b>ISO Refs:</b>  WI030rev001   WI042rev002   WI250rev004';
		?></div>
		</td>
	</tr>
</table>
</div>
</form>

		<?php
		function is_checked($msg)
		{
		    $chk = false;
		    if (strtoupper($msg) == 'YES'){
		        $chk = true;
		    }
		    return $chk;
		}

		?>


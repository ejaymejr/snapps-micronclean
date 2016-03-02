<?php use_helper('Validation', 'Javascript') ?>
<?php
    $area = QrLocationPeer::GetFilterList();
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('micronclean/airAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>AIR PARTICLE DATA SHEET</H2></span></td></tr>
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
				<td class="FORMcell-left FORMlabel" nowrap>X</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('x_data');
				echo input_tag('x_data', $sf_params->get('x_data'), 'size="25" ');
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>FILTER AREA</td>
				<td class="FORMcell-right FORMlabel" nowrap><span class="positive"><?php
				echo HTMLForm::Error('filter_area');
		        echo select_tag('filter_area',
				options_for_select($area,
				$sf_params->get('filter_area') )   
				) ;
				
				?>
				</span>
				</td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>TEMPERATURE</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('temperature');
                echo input_tag('temperature', $sf_params->get('temperature'), 'size="25"')				?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>TESTER</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo $sf_params->get('tester');
				echo input_tag('tester', $sf_params->get('tester'), 'size="25" type="hidden"');
				?>
				</td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>RH</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('rh');
				echo input_tag('rh', $sf_params->get('rh'), 'size="25"');
                ?>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REMARKS</td>
				<td colspan="3" class="FORMcell-right" nowrap>
				<?php
				echo HTMLForm::Error('remarks');
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
            echo 'Record Sheet:</b> #006';
            echo '<br>';
            echo '<b>ISO Refs:</b>'   
            .' '. link_to('WI030rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI030rev001_19980112_cleanroom_air_monitoring_procedure.pdf')
            .' ,  '. link_to('WI042rev002', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI042rev002_19990205_housekeeping_procedure.pdf')
            .' ,  '. link_to('WI250rev005', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI250rev005_20080718_statistical_process_calculation.pdf');
        ?>
	</div></td></tr>	
</table>
</div>
</form>


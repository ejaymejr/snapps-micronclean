<?php use_helper('Validation', 'Javascript') ?>
<?php
    $area = QrLocationPeer::GetFilterList();
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('micronclean/waterAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>WATER PARTICLE DATA SHEET</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('date_time', $sf_params->get('date_time', date('Y-m-d')), 'date_time', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="10%" class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Save Info " class="submit-button"></td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>RESISTIVITY </td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('resistivity', $sf_params->get('resistivity'), 'size="25" ');
				?>
				<span class="negative">(MOhm) >=17</span>
				</td>
				<td class="FORMcell-left FORMlabel" nowrap>LCL</td>
				<td class="FORMcell-right FORMlabel" nowrap><span class="positive"><?php
                   echo input_tag('lcl', $sf_params->get('lcl'), 'size="25" ');
				?>
				</span>
				</td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>TESTER</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo $sf_params->get('tester');
                echo input_tag('tester', $sf_params->get('tester'), 'size="25"type="hidden"')				?>
                </td>
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
            echo 'Record Sheet:</b> #004';
            echo '<br>';
            echo '<b>ISO Refs:</b> '   
            . link_to('WI028rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI028rev001_19980112_microscopic_analysis_of_garments.pdf')
            .' ,  '. link_to('WI106rev005', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI106rev005_20060901_DI_water_spec.pdf');
            
        ?>
	</div></td></tr>	
</table>
</div>
</form>


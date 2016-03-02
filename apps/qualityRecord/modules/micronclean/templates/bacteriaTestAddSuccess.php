<?php use_helper('Validation', 'Javascript') ?>
<?php
    $cleanroomList = array('Micronclean'=>' -MICRONCLEAN- ', 'Nanoclean'=>' -NANOCLEAN- ');
    $areaList = array(''=>' -None- ', 'A'=>' -A- ', 'B'=>' -B- ', );
    $customerList = CustomerAttrPeer::GetCustomerListName();
    $garmentList  = array(''=>' -SELECT GARMENT-',
    				'JUMPSUIT'=>'JUMPSUIT',
                    'BOOTIES'=>'BOOTIES',
                    'HOOD'=>'HOOD',
                    'SAFETY BOOTIES'=>'SAFETY BOOTIES',
    				'SCRUB PANTS'=>'SCRUB PANTS',
    				'SCRUB SHIRT'=>'SCRUB SHIRT',
    );
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('micronclean/bacteriaTestAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>BACTERIA TEST DATA SHEET</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('trans_date', $sf_params->get('trans_date', date('Y-m-d H:i:s')), 'trans_date', XIDX::next(), ' size="20" '); ?>
				&nbsp;&nbsp;<input type="submit" name="save" value=" Save Info " class="submit-button"></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CLEANROOM</td>
				<td class="FORMcell-right" nowrap><?php
				//echo input_tag('resistivity', $sf_params->get('resistivity'), 'size="25" ');
				echo select_tag('cleanroom', options_for_select($cleanroomList, $sf_params->get('cleanroom')) );
				?>
				<span class="negative"></span>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap><?php echo checkbox_tag('area_a', 1, true,'onclick=showHideElement("DIVAreaAValue")'); ?> AREA A  </td>
				<td class="FORMcell-right" nowrap><div id="DIVAreaAValue" ><?php
				echo input_tag('area_a_value', $sf_params->get('area_a_value'), 'size="15" ');
				?>
				<span class="negative"> (once a day) </span>
				</div>
				</td>
			</tr>	
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap><?php echo checkbox_tag('area_b', 1, true,'onclick=showHideElement("DIVAreaBValue")'); ?> AREA B  </td>
				<td class="FORMcell-right" nowrap><div id="DIVAreaBValue" ><?php
				echo input_tag('area_b_value', $sf_params->get('area_b_value'), 'size="15" ');
				?>
				<span class="negative"> (once a day) </span>
				</div>
				</td>
			</tr>		
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap><?php echo checkbox_tag('folding_table_a', 1, true,'onclick=showHideElement("DIVFoldingTableAValue")'); ?> FOLDING TABLE A</td>
				<td class="FORMcell-right" nowrap><div id="DIVFoldingTableAValue" ><?php
				echo input_tag('folding_table_a_value', $sf_params->get('folding_table_a_value'), 'size="15" ');
				?>
				<span class="negative"> (per batch) </span>
				</div>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap><?php echo checkbox_tag('folding_table_b', 1, true,'onclick=showHideElement("DIVFoldingTableBValue")'); ?> FOLDING TABLE B</td>
				<td class="FORMcell-right" nowrap><div id="DIVFoldingTableBValue" ><?php
				echo input_tag('folding_table_b_value', $sf_params->get('folding_table_b_value'), 'size="15" ');
				?>
				<span class="negative"> (per batch) </span>
				</div>
				</td>
			</tr>						
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CUSTOMER</td>
				<td class="FORMcell-right" nowrap><?php
				echo select_tag('customer', options_for_select($customerList, $sf_params->get('customer')) );
				?>
				<span class="negative"></span>
				</td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>GARMENT</td>
				<td class="FORMcell-right" nowrap><?php
				echo select_tag('garment', options_for_select($garmentList, $sf_params->get('garment')) );
				?>
				<span class="negative"></span>
				</td>
			</tr>			
						
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CHECKED BY</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('checked_by', $sf_params->get('checked_by'), 'size="25" ');
				?>
				<span class="negative"></span>
				</td>
			</tr>			

			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>VERIFIED BY</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('verified_by', $sf_params->get('verified_by'), 'size="25" ');
				?>
				<span class="negative"></span>
				</td>
			</tr>			
						
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REMARKS</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('remark', $sf_params->get('remark'), 'size=75x6')
				?></td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap>
				<td class="alignCenter FORMcell-right" nowrap></td>
				<td class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Save Info " class="submit-button"> &nbsp;&nbsp;
					<?php //var_dump($sf_user->getUsername()); ?>
					<?php if ($sf_user->getUsername() == 'emmanuel'): ?>
					<input type="submit" name="verify"
					value=" Verify Data Last 3 Months " class="submit-button">
					<?php endif;?>
					</td>
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


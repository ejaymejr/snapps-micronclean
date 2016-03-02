<?php use_helper('Validation', 'Javascript') ?>
<?php
    $customerList = CustomerAttrPeer::GetCustomerListName();
    //$garmentList  = sfConfig::get('garment_type');
    $garmentList  = array(''=>' -SELECT GARMENT-',
    				'JUMPSUIT'=>'JUMPSUIT',
                    'BOOTIES'=>'BOOTIES',
                    'HOOD'=>'HOOD',
                    'SAFETY BOOTIES'=>'SAFETY BOOTIES',
    );
    $departmentList     = array(''=>' -SELECT DEPARTMENT- ', 'ACRO SOLUTION'=>'ACRO SOLUTION', 'MICRONCLEAN'=>'MICRONCLEAN', 'NANOCLEAN'=>'NANOCLEAN', 'TC KHOO'=>'TC KHOO');
    $initialsList = array(''=>' - INITIALS - ', 'JAYAKUMAR'=>'JAYAKUMAR', 'TERENCE'=>'TERENCE', 'OTHERS'=>'OTHERS');
    $status = array(
            'Pass'=>' -PASS- ',
    		'Fail'=>' -FAIL- '
    );
    $vendorList =  array(''=>' -SELECT VENDOR-', 'STATCLEAN'=>' -STATCLEAN- ', );
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('plasticBag/plasticBagAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="35" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>PLASTIC BAG PARTICLE COUNT</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('date_time', $sf_params->get('date_time', date('Y-m-d H:i:s')), 'date_time', XIDX::next(), ' size="20" '); ?>
				</td>
				<td width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>VENDOR</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
                //echo input_tag('type_of_plastic', $sf_params->get('type_of_plastic'), 'size="40"')
                echo  select_tag('vendor', options_for_select($vendorList, $sf_params->get('vendor')) );				
                ?>
                </td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>TYPE OF PLASTIC</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
                echo input_tag('type_of_plastic', $sf_params->get('type_of_plastic'), 'size="40"')				?>
                </td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>BY WHO</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
//		        echo select_tag('by_who',
//				options_for_select($initialsList,
//				$sf_params->get('by_who') ) );
                echo $sf_params->get('by_who');				
                echo input_tag('by_who', $sf_params->get('by_who'), 'size="20" type="hidden"')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>SURFACE AREA(ONE SIDE) IN CM2</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo input_tag('surface_area', $sf_params->get('surface_area'), 'size="20"')
				?></td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>VOLUME OF DI WATER USED IN ML</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo input_tag('vol_in_ml', $sf_params->get('vol_in_ml'), 'size="20"')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>LPC (BLANK) IN COUNTS/ML </td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo input_tag('lpc_blank_in_ml', $sf_params->get('lpc_blank_in_ml'), 'size="20"')
				?>
				<span class="negative">@0.5um</span>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>LPC PLASTIC BAG IN COUNTS/ML</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo input_tag('lpc_plastic_in_ml', $sf_params->get('lpc_plastic_in_ml'), 'size="20"')
				?>
				<span class="negative">@0.5um</span>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>LPC PLASTIC BAG IN COUNTS/CM2</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo input_tag('lpc_plastic_in_cm', $sf_params->get('lpc_plastic_in_cm'), 'size="20"')
				?>
				<span class="negative">@0.5um</span>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>IC CL mg/g/cm&#178;</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo input_tag('ic_cl_in_cm', $sf_params->get('ic_cl_in_cm'), 'size="20"')
				?>
				<span class="negative">< 1</span>
				</td>
			</tr>
			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>IC NO&#179; mg/g/cm&#178;</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo input_tag('ic_no_in_cm', $sf_params->get('ic_no_in_cm'), 'size="20"')
				?>
				<span class="negative">< 1</span>
				</td>
			</tr>			

			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>IC SO4 mg/g/cm&#178;</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo input_tag('ic_so_in_cm', $sf_params->get('ic_so_in_cm'), 'size="20"')
				?>
				<span class="negative">< 1</span>
				</td>
			</tr>			
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>STATUS</td>
				<td colspan="3" width="100" class="FORMcell-right" nowrap><?php
				echo select_tag('status',
				options_for_select($status,
				$sf_params->get('status') ) );
				?></td>
			</tr>
			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>TRIGGER POINT</td>
				<td class="FORMcell-right" nowrap><?php
				echo "<b>100 counts/cm2</b>";
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>SPEC LIMIT</td>
				<td class="FORMcell-right" nowrap><?php echo "<b>4000 counts/cm2 </b>";?></td>
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
</table>
</div>
</form>

<div class="grid-toolbar-2">
<table>
	<tr>
		<td class="alignRight" nowrap>Record Sheet: #069</td>
	</tr>
	<tr>
		<td class="alignRight" nowrap><?php echo 'ISO Refs: ' . link_to('WI041','http://sym.micronclean/isodoc/wi/Micronclean/WI041rev003_20061122_particle_analysis_of_cleanroom_bags.pdf')?></td>
	</tr>
</table>
</div>



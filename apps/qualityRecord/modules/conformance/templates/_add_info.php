<?php
$prodType = array(''=>' -NOT AVAILABLE-');
$customerList = array(''=>' -NOT AVAILABLE-');
$prodType  = array(''=>' -SELECT PRODUCT TYPE- ',
       				'100309283'=>'95mm 50mil SUBSTRATE CASSETTE',
					'100379225'=>'65mm 25mil (50 disc) SHIPPING CASSSETTE',
					'1003398042'=>'54mm 50mil SHIPPING CASSSETTE',
					'100112684'=>'65mm 50mil SHIPPING CASSSETTE',
					'100507595'=>'95mm 50mil (35 slots) SHIPPING CASSSETTE',
					'100327006'=>'70mm 63mil SHIPPING CASSSETTE',
					'100379226'=>'48mm 20mil SHIPPING CASSSETTE',
                    'F 2027-0203'=>'27mm 15mil PROCESS CASSSETTE',
                    'F 2048-0803'=>'48mm 20mil PROCESS CASSSETTE',
                    'F 2054-0200'=>'54mm 50mil PROCESS CASSSETTE',
                    'F 2065-1708'=>'65mm 25mil PROCESS CASSSETTE',
                    'F 2065-1400'=>'65mm 50mil(black) PROCESS CASSSETTE',
                    'F 2065-1401'=>'65mm 50mil(red) PROCESS CASSSETTE',
                    'F 2065-1402'=>'65mm 50mil(green) PROCESS CASSSETTE',
                    'F 2065-1510'=>'65mm 50mil(orange) PROCESS CASSSETTE',
                    'F 2065-1509'=>'65mm 50mil(pink) PROCESS CASSSETTE',
                    'F 2065-1503'=>'65mm 50mil(yellow) PROCESS CASSSETTE',
                    'F 2070-0900'=>'70mm 63mil(black) PROCESS CASSSETTE',
                    'F 2070-0201'=>'70mm 63mil(d/grey) PROCESS CASSSETTE',
                    'F 2084-1103'=>'84mm 50mil(grey) PROCESS CASSSETTE',
                    'F 2084-1106'=>'84mm 50mil(red) PROCESS CASSSETTE',
                    'F 2084-1100'=>'84mm 50mil(black) PROCESS CASSSETTE',
                    'F 2095-0100'=>'95mm 50mil(white) PROCESS CASSSETTE',
                    'F 2095-0103'=>'95mm 50mil(yellow) PROCESS CASSSETTE',
                    'F 2095-0104'=>'95mm 50mil(red) PROCESS CASSSETTE',
                    'F 2095-0101'=>'95mm 50mil(green) PROCESS CASSSETTE',
                    'F 2095-0109'=>'95mm 50mil(beige) PROCESS CASSSETTE',
                    'F 2095-2702'=>'95mm 50mil(l/green) PROCESS CASSSETTE',
                    'F 2095-3200'=>'95mm 69mil(black) PROCESS CASSSETTE',
					'68162-001'=>'65mm 31.5mil SHIPPING CASSSETTE',
   				);
if ($company == 'MICRONCLEAN'){
    $prodType  = array(''=>' -SELECT GARMENT-',
        				'JUMPSUIT'=>'JUMPSUIT',
                        'BOOTIES'=>'BOOTIES',
                        'HOOD'=>'HOOD',
                        'SAFETY BOOTIES'=>'SAFETY BOOTIES',
    );
    $customerList = CustomerAttrPeer::GetCustomerListName();    
}

if ($company == 'ACRO SOLUTION'){
}

if ($company == 'NANOCLEAN'){
    $customerList  = array(''=>' -SELECT CUSTOMER-',
        				'CHARTERED SEMICONDUCTOR'=>'CHARTERED SEMICONDUCTOR',
                        'CHOSEN'=>'CHOSEN',
                        'HP'=>'HP',
                        'MICRON'=>'MICRON',
                        'NUMONYX'=>'NUMONYX',
                        'PHILIPS LUMILEDS LIGHTING COMPANY'=>'PHILIPS LUMILEDS LIGHTING COMPANY',
                        'SEAGATE'=>'SEAGATE',
                        'SEAGATE (SUBSTRATE)'=>'SEAGATE (SUBSTRATE)',
                        'SILICON CONNECTION'=>'SILICON CONNECTION',
                        'TOPSCIENCE'=>'TOPSCIENCE'
        				);        				
}





?>
<table width="100%" class="FORMtable" border="0" cellpadding="4"
	cellspacing="0">
	<tr>
		<td width="15%" class="FORMcell-right" nowrap></td>
		<td width="20%" class="FORMcell-left FORMlabel" nowrap><B>CUSTOMER</B></td>
		<td width="100" colspan="3" class="FORMcell-right" nowrap><?php
		echo select_tag('customer',
		options_for_select($customerList,
		$sf_params->get('customer') ) );
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td  class="FORMcell-left FORMlabel" nowrap>PRODUCT TYPE</td>
		<td  class="FORMcell-right" nowrap><?php
		echo select_tag('product_type',
		options_for_select($prodType,
		$sf_params->get('product_type') ) );
		?></td>
	</tr>
	<?php if ($company == 'MICRONCLEAN' || $company == '') {?>
	<tr>
		<td width="15%" class="FORMcell-right" nowrap></td>
		<td width="20%" class="FORMcell-left FORMlabel" nowrap>CLEANROOM AIR
		PARTICLE COUNT</td>
		<td width="100" colspan="3" class="FORMcell-right" nowrap><?php
		echo input_tag('particle_count', $sf_params->get('particle_count'), 'size="20"')
		?></td>
	</tr>
	<?php } ?>
	<?php if ($company == 'MICRONCLEAN' || $company == '') {?>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>DAMP GARMENTS AFTER DRYING
		</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo input_tag('after_drying', $sf_params->get('after_drying'), 'size="20"')
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>DDI RESISTIVITY <17Mohm</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo input_tag('ddi', $sf_params->get('ddi'), 'size="20"')
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>MISSING PARTS</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo input_tag('missing_part', $sf_params->get('missing_part'), 'size="20"')
		?></td>
	</tr>
	<?php } ?>
	<?php if ($company == 'MICRONCLEAN' || $company == '') {?>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>STAIN</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo input_tag('stain', $sf_params->get('stain'), 'size="20"')
		?></td>
	</tr>
	<?php } ?>
	<?php if ($company == 'MICRONCLEAN' || $company == '') {?>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>TORN OR BROKEN</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo input_tag('torn_broken', $sf_params->get('torn_broken'), 'size="20"')
		?></td>
	</tr>
	<?php } ?>
		
	<?php if ($company == 'MICRONCLEAN' || $company == '') {?>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>HK DRUM TWICE FAIL</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo input_tag('hk_drum_fail', $sf_params->get('hk_drum_fail'), 'size="20"')
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>DRYER 1 TEMPERATURE</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo input_tag('dryer_1_temp', $sf_params->get('dryer_1_temp'), 'size="20"')
		?></td>
	</tr>
		<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>DRYER 1 PARTICLE</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo input_tag('dryer_1_part', $sf_params->get('dryer_1_part'), 'size="20"')
		?></td>
	</tr>
		<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>DRYER 2 TEMPERATURE</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo input_tag('dryer_2_temp', $sf_params->get('dryer_2_temp'), 'size="20"')
		?></td>
	</tr>
		<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>DRYER 2 PARTICLE</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo input_tag('dryer_2_part', $sf_params->get('dryer_2_part'), 'size="20"')
		?></td>
	</tr>
	<?php } ?>	

		
	<?php if ($company != 'MICRONCLEAN' || $company == '') {?>
	<tr>
		<td width="15%" class="FORMcell-right" nowrap></td>
		<td width="20%" class="FORMcell-left FORMlabel" nowrap>OVER DATE</td>
		<td width="100" colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top:'. input_tag('over_date_top', $sf_params->get('over_date_top'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;body:'. input_tag('over_date_body', $sf_params->get('over_date_body'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;bottom:'. input_tag('over_date_bottom', $sf_params->get('over_date_bottom'), 'size="10"');
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>OVER PUNCH</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top:'. input_tag('over_punch_top', $sf_params->get('over_punch_top'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;body:'. input_tag('over_punch_body', $sf_params->get('over_punch_body'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;bottom:'. input_tag('over_punch_bottom', $sf_params->get('over_punch_bottom'), 'size="10"');
		
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>MIXED PART</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top:'. input_tag('mixed_part_top', $sf_params->get('mixed_part_top'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;body:'. input_tag('mixed_part_body', $sf_params->get('mixed_part_body'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;bottom:'. input_tag('mixed_part_bottom', $sf_params->get('mixed_part_bottom'), 'size="10"');
		
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>CRACK</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top:'. input_tag('crack_top', $sf_params->get('crack_top'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;body:'. input_tag('crack_body', $sf_params->get('crack_body'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;bottom:'. input_tag('crack_bottom', $sf_params->get('crack_bottom'), 'size="10"');
		
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>SCRATCHES</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top:'. input_tag('scratches_top', $sf_params->get('scratches_top'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;body:'. input_tag('scratches_body', $sf_params->get('scratches_body'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;bottom:'. input_tag('scratches_bottom', $sf_params->get('scratches_bottom'), 'size="10"');
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>WORPAGE</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top:'. input_tag('worpage_top', $sf_params->get('worpage_top'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;body:'. input_tag('worpage_body', $sf_params->get('worpage_body'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;bottom:'. input_tag('worpage_bottom', $sf_params->get('worpage_bottom'), 'size="10"');
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>STAIN</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top:'. input_tag('stain_top', $sf_params->get('stain_top'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;body:'. input_tag('stain_body', $sf_params->get('stain_body'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;bottom:'. input_tag('stain_bottom', $sf_params->get('stain_bottom'), 'size="10"');
		?></td>
	</tr>	
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>STICKER</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top:'. input_tag('sticker_top', $sf_params->get('sticker_top'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;body:'. input_tag('sticker_body', $sf_params->get('sticker_body'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;bottom:'. input_tag('sticker_bottom', $sf_params->get('sticker_bottom'), 'size="10"');
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>ADHESIVE</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top:'. input_tag('adhesive_top', $sf_params->get('adhesive_top'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;body:'. input_tag('adhesive_body', $sf_params->get('adhesive_body'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;bottom:'. input_tag('adhesive_bottom', $sf_params->get('adhesive_bottom'), 'size="10"');
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>MOULDING DEFECT</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top:'. input_tag('moulding_defect_top', $sf_params->get('moulding_defect_top'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;body:'. input_tag('moulding_defect_body', $sf_params->get('moulding_defect_body'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;bottom:'. input_tag('moulding_defect_bottom', $sf_params->get('moulding_defect_bottom'), 'size="10"');
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>CHIPS</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top:'. input_tag('chips_top', $sf_params->get('chips_top'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;body:'. input_tag('chips_body', $sf_params->get('chips_body'), 'size="10"');
		echo '&nbsp;&nbsp;&nbsp;bottom:'. input_tag('chips_bottom', $sf_params->get('chips_bottom'), 'size="10"');
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>COQ (Physical Defect)</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'SGD $'. input_tag('cost', $sf_params->get('cost'), 'size="20"');
		?>
		<span class="negative">total( top + body + bottom ) * 0.56</span>
		</td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>COQ (VPC Out)</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'SGD $'. input_tag('vpc', $sf_params->get('vpc'), 'size="20"');
		?>
		<span class="negative">total( body ) * 0.002</span>
		</td>
	</tr>
	
	<?php } ?>	
	<tr>
		<td class="FORMcell-right" nowrap>
		
		
		<td class="alignCenter FORMcell-right" nowrap></td>
		<td class="FORMcell-right" nowrap><input type="submit" name="save"
			value=" Save Info " class="submit-button"></td>
	</tr>
</table>


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
		echo DisplayView($sf_params->get('customer') );
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
		echo DisplayView($sf_params->get('particle_count'));
		?></td>
	</tr>
	<?php } ?>
	<?php if ($company == 'MICRONCLEAN' || $company == '') {?>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>DAMP GARMENTS AFTER DRYING
		</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo DisplayView($sf_params->get('after_drying'));
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>DDI RESISTIVITY <17Mohm</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo DisplayView($sf_params->get('ddi'));
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>MISSING PARTS</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo DisplayView($sf_params->get('missing_part'));
		?></td>
	</tr>
	<?php } ?>
	<?php if ($company == 'MICRONCLEAN' || $company == '') {?>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>STAIN</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo DisplayView($sf_params->get('stain'));
		?></td>
	</tr>
	<?php } ?>
	<?php if ($company == 'MICRONCLEAN' || $company == '') {?>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>TORN OR BROKEN</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo DisplayView($sf_params->get('torn_broken'));
		?></td>
	</tr>
	<?php } ?>	
	<?php if ($company != 'MICRONCLEAN' || $company == '') {?>
	<tr>
		<td width="15%" class="FORMcell-right" nowrap></td>
		<td width="20%" class="FORMcell-left FORMlabel" nowrap>OVER DATE</td>
		<td width="100" colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top: '. DisplayView($sf_params->get('over_date_top'));
		echo '&nbsp;&nbsp;&nbsp;body: '. DisplayView($sf_params->get('over_date_body'));
		echo '&nbsp;&nbsp;&nbsp;bottom: '. DisplayView($sf_params->get('over_date_bottom'));
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>OVER PUNCH</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top: '. DisplayView($sf_params->get('over_punch_top'));
		echo '&nbsp;&nbsp;&nbsp;body: '. DisplayView($sf_params->get('over_punch_body'));
		echo '&nbsp;&nbsp;&nbsp;bottom: '. DisplayView($sf_params->get('over_punch_bottom'));
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>MIXED PART</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top: '. DisplayView($sf_params->get('mixed_part_top'));
		echo '&nbsp;&nbsp;&nbsp;body: '. DisplayView($sf_params->get('mixed_part_body'));
		echo '&nbsp;&nbsp;&nbsp;bottom: '. DisplayView($sf_params->get('mixed_part_bottom'));
		
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>CRACK</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top: '. DisplayView($sf_params->get('crack_top'));
		echo '&nbsp;&nbsp;&nbsp;body: '. DisplayView($sf_params->get('crack_body'));
		echo '&nbsp;&nbsp;&nbsp;bottom: '. DisplayView($sf_params->get('crack_bottom'));
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>SCRATCHES</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top: '. DisplayView($sf_params->get('scratches_top'));
		echo '&nbsp;&nbsp;&nbsp;body: '. DisplayView($sf_params->get('scratches_body'));
		echo '&nbsp;&nbsp;&nbsp;bottom: '. DisplayView($sf_params->get('scratches_bottom'));
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>WORPAGE</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top: '. DisplayView($sf_params->get('worpage_top'));
		echo '&nbsp;&nbsp;&nbsp;body: '. DisplayView($sf_params->get('worpage_body'));
		echo '&nbsp;&nbsp;&nbsp;bottom: '. DisplayView($sf_params->get('worpage_bottom'));
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>STAIN</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top: '. DisplayView($sf_params->get('stain_top'));
		echo '&nbsp;&nbsp;&nbsp;body: '. DisplayView($sf_params->get('stain_body'));
		echo '&nbsp;&nbsp;&nbsp;bottom: '. DisplayView($sf_params->get('stain_bottom'));
		?></td>
	</tr>	
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>STICKER</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top: '. DisplayView($sf_params->get('sticker_top'));
		echo '&nbsp;&nbsp;&nbsp;body: '. DisplayView($sf_params->get('sticker_body'));
		echo '&nbsp;&nbsp;&nbsp;bottom: '. DisplayView($sf_params->get('sticker_bottom'));
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>ADHESIVE</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top: '. DisplayView($sf_params->get('adhesive_top'));
		echo '&nbsp;&nbsp;&nbsp;body: '. DisplayView($sf_params->get('adhesive_body'));
		echo '&nbsp;&nbsp;&nbsp;bottom: '. DisplayView($sf_params->get('adhesive_bottom'));
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>MOULDING DEFECT</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top: '. DisplayView($sf_params->get('moulding_defect_top'));
		echo '&nbsp;&nbsp;&nbsp;body: '. DisplayView($sf_params->get('moulding_defect_body'));
		echo '&nbsp;&nbsp;&nbsp;bottom: '. DisplayView($sf_params->get('moulding_defect_bottom'));
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>CHIPS</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'top: '. DisplayView($sf_params->get('chips_top'));
		echo '&nbsp;&nbsp;&nbsp;body: '. DisplayView($sf_params->get('chips_body'));
		echo '&nbsp;&nbsp;&nbsp;bottom: '. DisplayView($sf_params->get('chips_bottom'));
		?></td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>COQ (Physical Defect)</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'SGD $ '. DisplayView($sf_params->get('cost'));
		?>
		 /
		<span class="negative"> total( top + body + bottom ) * 0.56</span>
		</td>
	</tr>
	<tr>
		<td class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>COQ (VPC Out)</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo 'SGD $ '. DisplayView($sf_params->get('vpc'));
		?>
		 /
		<span class="negative"> total( body ) * 0.002</span>
		</td>
	</tr>
	
	<?php } ?>	
	<tr>
		<td class="FORMcell-right" nowrap>
		
		
		<td class="alignCenter FORMcell-right" nowrap></td>
		<td class="FORMcell-right" nowrap><input type="submit" name="save"
			value=" close " class="submit-button"></td>
	</tr>
</table>



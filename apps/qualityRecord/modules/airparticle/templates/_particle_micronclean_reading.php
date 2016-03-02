<?php use_helper('Validation', 'Javascript') ?>
<?php //echo AjaxLib::AjaxScript('saveReading', 'airparticle/microncleanParticleSave', '', '&id=id&spot=spot', 'DIVCloseRightAway')?>
<?php 
	$filterList = array(
		 'A1_particle', 'A2_particle', 'A3_particle', 'A4_particle', 'A5_particle', 'A6_particle'
		,'B1_particle', 'B2_particle', 'B3_particle', 'B4_particle', 'B5_particle', 'B6_particle'
		,'C1_particle', 'C2_particle', 'C3_particle', 'C4_particle', 'C5_particle', 'C6_particle', 'C7_particle'
		,'D1_particle', 'D2_particle', 'D3_particle', 'D4_particle', 'D5_particle', 'D6_particle'
		,'E1_particle', 'E2_particle', 'E3_particle', 'E4_particle', 'E5_particle', 'E6_particle'
		,'F1_particle', 'F2_particle', 'F3_particle', 'F4_particle', 'F5_particle', 'F6_particle', 'F7_particle'
		,'G1_particle', 'G2_particle', 'G3_particle', 'G4_particle', 'G5_particle', 'G6_particle'
		,'H1_particle', 'H2_particle', 'H3_particle', 'H4_particle', 'H5_particle', 'H6_particle'
		,'I1_particle', 'I2_particle', 'I3_particle', 'I4_particle', 'I5_particle', 'I6_particle', 'I7_particle'
		,'J1_particle', 'J2_particle', 'J3_particle', 'J4_particle', 'J5_particle', 'J6_particle'
		,'K1_particle', 'K2_particle', 'K3_particle', 'K4_particle', 'K5_particle', 'K6_particle'
		
	);
	asort($filterList);
?>
<table class="table bordered ">
<tr>
	<td colspan="11" class="bg-green"><h2 class="fg-white">MICRONCLEAN FILTER LOCATION (Particle)</h2></h1></td>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class=""></h2></td>
	<td class="bg-clearBlue"><h2 class="">1</h2></td>
	<td class="bg-clearBlue"><h2 class="">2</h2></td>
	<td class="bg-clearBlue"><h2 class="">3</h2></td>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">A</h2></td>
	<?php echo displayIcon('CP_A1_particle') ?>
	<?php echo displayIcon('CP_A2_particle') ?>
	<?php echo displayIcon('CP_A3_particle') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">B</h2></td>
	<?php echo displayIcon('CP_B1_particle') ?>
	<?php echo displayIcon('CP_B2_particle') ?>
	<?php echo displayIcon('CP_B3_particle') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">C</h2></td>
	<?php echo displayIcon('CP_C1_particle') ?>
	<?php echo displayIcon('CP_C2_particle') ?>
	<?php echo displayIcon('CP_C3_particle') ?>
</tr>

</table>


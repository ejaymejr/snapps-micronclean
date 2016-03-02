<?php use_helper('Validation', 'Javascript') ?>
<?php //echo AjaxLib::AjaxScript('saveReading', 'airparticle/microncleanParticleSave', '', '&id=id&spot=spot', 'DIVCloseRightAway')?>
<?php 
	$filterList = array(
		 'A1_air_flow', 'A2_air_flow', 'A3_air_flow', 'A4_air_flow', 'A5_air_flow', 'A6_air_flow'
		,'B1_air_flow', 'B2_air_flow', 'B3_air_flow', 'B4_air_flow', 'B5_air_flow', 'B6_air_flow'
		,'C1_air_flow', 'C2_air_flow', 'C3_air_flow', 'C4_air_flow', 'C5_air_flow', 'C6_air_flow', 'C7_air_flow'
		,'D1_air_flow', 'D2_air_flow', 'D3_air_flow', 'D4_air_flow', 'D5_air_flow', 'D6_air_flow'
		,'E1_air_flow', 'E2_air_flow', 'E3_air_flow', 'E4_air_flow', 'E5_air_flow', 'E6_air_flow'
		,'F1_air_flow', 'F2_air_flow', 'F3_air_flow', 'F4_air_flow', 'F5_air_flow', 'F6_air_flow', 'F7_air_flow'
		,'G1_air_flow', 'G2_air_flow', 'G3_air_flow', 'G4_air_flow', 'G5_air_flow', 'G6_air_flow'
		,'H1_air_flow', 'H2_air_flow', 'H3_air_flow', 'H4_air_flow', 'H5_air_flow', 'H6_air_flow'
		,'I1_air_flow', 'I2_air_flow', 'I3_air_flow', 'I4_air_flow', 'I5_air_flow', 'I6_air_flow', 'I7_air_flow'
		,'J1_air_flow', 'J2_air_flow', 'J3_air_flow', 'J4_air_flow', 'J5_air_flow', 'J6_air_flow'
		,'K1_air_flow', 'K2_air_flow', 'K3_air_flow', 'K4_air_flow', 'K5_air_flow', 'K6_air_flow'
		
	);
	asort($filterList);
?>
<table class="table bordered span12">
<tr>
	<td colspan="11" class="bg-green"><h2 class="fg-white">MICRONCLEAN FILTER LOCATION (Air Flow)</h2></h1></td>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class=""></h2></td>
	<td class="bg-clearBlue"><h2 class="">7</h2></td>
	<td class="bg-clearBlue"><h2 class="">6</h2></td>
	<td class="bg-clearBlue"><h2 class="">5</h2></td>
	<td class="bg-clearBlue"><h2 class="">4</h2></td>
	<td class="bg-clearBlue"><h2 class="">3</h2></td>
	<td class="bg-clearBlue"><h2 class="">2</h2></td>
	<td class="bg-clearBlue"><h2 class="">1</h2></td>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">A</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('A6_air_flow') ?>
	<?php echo displayIcon('A5_air_flow') ?>
	<?php echo displayIcon('A4_air_flow') ?>
	<?php echo displayIcon('A3_air_flow') ?>
	<?php echo displayIcon('A2_air_flow') ?>
	<?php echo displayIcon('A1_air_flow') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">B</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('B6_air_flow') ?>
	<?php echo displayIcon('B5_air_flow') ?>
	<?php echo displayIcon('B4_air_flow') ?>
	<?php echo displayIcon('B3_air_flow') ?>
	<?php echo displayIcon('B2_air_flow') ?>
	<?php echo displayIcon('B1_air_flow') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">C</h2></td>
	<?php echo displayIcon('C7_air_flow') ?>
	<?php echo displayIcon('C6_air_flow') ?>
	<?php echo displayIcon('C5_air_flow') ?>
	<?php echo displayIcon('C4_air_flow') ?>
	<?php echo displayIcon('C3_air_flow') ?>
	<?php echo displayIcon('C2_air_flow') ?>
	<?php echo displayIcon('C1_air_flow') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">D</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('D6_air_flow') ?>
	<?php echo displayIcon('D5_air_flow') ?>
	<?php echo displayIcon('D4_air_flow') ?>
	<?php echo displayIcon('D3_air_flow') ?>
	<?php echo displayIcon('D2_air_flow') ?>
	<?php echo displayIcon('D1_air_flow') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">E</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('E6_air_flow') ?>
	<?php echo displayIcon('E5_air_flow') ?>
	<?php echo displayIcon('E4_air_flow') ?>
	<?php echo displayIcon('E3_air_flow') ?>
	<?php echo displayIcon('E2_air_flow') ?>
	<?php echo displayIcon('E1_air_flow') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">F</h2></td>
	<?php echo displayIcon('F7_air_flow') ?>
	<?php echo displayIcon('F6_air_flow') ?>
	<?php echo displayIcon('F5_air_flow') ?>
	<?php echo displayIcon('F4_air_flow') ?>
	<?php echo displayIcon('F3_air_flow') ?>
	<?php echo displayIcon('F2_air_flow') ?>
	<?php echo displayIcon('F1_air_flow') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">G</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('G6_air_flow') ?>
	<?php echo displayIcon('G5_air_flow') ?>
	<?php echo displayIcon('G4_air_flow') ?>
	<?php echo displayIcon('G3_air_flow') ?>
	<?php echo displayIcon('G2_air_flow') ?>
	<?php echo displayIcon('G1_air_flow') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">H</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('H6_air_flow') ?>
	<?php echo displayIcon('H5_air_flow') ?>
	<?php echo displayIcon('H4_air_flow') ?>
	<?php echo displayIcon('H3_air_flow') ?>
	<?php echo displayIcon('H2_air_flow') ?>
	<?php echo displayIcon('H1_air_flow') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">I</h2></td>
	<?php echo displayIcon('I7_air_flow') ?>
	<?php echo displayIcon('I6_air_flow') ?>
	<?php echo displayIcon('I5_air_flow') ?>
	<?php echo displayIcon('I4_air_flow') ?>
	<?php echo displayIcon('I3_air_flow') ?>
	<?php echo displayIcon('I2_air_flow') ?>
	<?php echo displayIcon('I1_air_flow') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">J</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('J6_air_flow') ?>
	<?php echo displayIcon('J5_air_flow') ?>
	<?php echo displayIcon('J4_air_flow') ?>
	<?php echo displayIcon('J3_air_flow') ?>
	<?php echo displayIcon('J2_air_flow') ?>
	<?php echo displayIcon('J1_air_flow') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">K</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('K6_air_flow') ?>
	<?php echo displayIcon('K5_air_flow') ?>
	<?php echo displayIcon('K4_air_flow') ?>
	<?php echo displayIcon('K3_air_flow') ?>
	<?php echo displayIcon('K2_air_flow') ?>
	<?php echo displayIcon('K1_air_flow') ?>
</tr>
</table>


<?php use_helper('Validation', 'Javascript') ?>
<?php //var_dump('diri'); exit();?>
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
<table class="table bordered span12">
<tr>
	<td colspan="11" class="bg-green"><h2 class="fg-white">MICRONCLEAN FILTER LOCATION (Particle)</h2></h1></td>
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
	<?php echo displayIcon('A6_particle') ?>
	<?php echo displayIcon('A5_particle') ?>
	<?php echo displayIcon('A4_particle') ?>
	<?php echo displayIcon('A3_particle') ?>
	<?php echo displayIcon('A2_particle') ?>
	<?php echo displayIcon('A1_particle') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">B</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('B6_particle') ?>
	<?php echo displayIcon('B5_particle') ?>
	<?php echo displayIcon('B4_particle') ?>
	<?php echo displayIcon('B3_particle') ?>
	<?php echo displayIcon('B2_particle') ?>
	<?php echo displayIcon('B1_particle') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">C</h2></td>
	<?php echo displayIcon('C7_particle') ?>
	<?php echo displayIcon('C6_particle') ?>
	<?php echo displayIcon('C5_particle') ?>
	<?php echo displayIcon('C4_particle') ?>
	<?php echo displayIcon('C3_particle') ?>
	<?php echo displayIcon('C2_particle') ?>
	<?php echo displayIcon('C1_particle') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">D</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('D6_particle') ?>
	<?php echo displayIcon('D5_particle') ?>
	<?php echo displayIcon('D4_particle') ?>
	<?php echo displayIcon('D3_particle') ?>
	<?php echo displayIcon('D2_particle') ?>
	<?php echo displayIcon('D1_particle') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">E</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('E6_particle') ?>
	<?php echo displayIcon('E5_particle') ?>
	<?php echo displayIcon('E4_particle') ?>
	<?php echo displayIcon('E3_particle') ?>
	<?php echo displayIcon('E2_particle') ?>
	<?php echo displayIcon('E1_particle') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">F</h2></td>
	<?php echo displayIcon('F7_particle') ?>
	<?php echo displayIcon('F6_particle') ?>
	<?php echo displayIcon('F5_particle') ?>
	<?php echo displayIcon('F4_particle') ?>
	<?php echo displayIcon('F3_particle') ?>
	<?php echo displayIcon('F2_particle') ?>
	<?php echo displayIcon('F1_particle') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">G</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('G6_particle') ?>
	<?php echo displayIcon('G5_particle') ?>
	<?php echo displayIcon('G4_particle') ?>
	<?php echo displayIcon('G3_particle') ?>
	<?php echo displayIcon('G2_particle') ?>
	<?php echo displayIcon('G1_particle') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">H</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('H6_particle') ?>
	<?php echo displayIcon('H5_particle') ?>
	<?php echo displayIcon('H4_particle') ?>
	<?php echo displayIcon('H3_particle') ?>
	<?php echo displayIcon('H2_particle') ?>
	<?php echo displayIcon('H1_particle') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">I</h2></td>
	<?php echo displayIcon('I7_particle') ?>
	<?php echo displayIcon('I6_particle') ?>
	<?php echo displayIcon('I5_particle') ?>
	<?php echo displayIcon('I4_particle') ?>
	<?php echo displayIcon('I3_particle') ?>
	<?php echo displayIcon('I2_particle') ?>
	<?php echo displayIcon('I1_particle') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">J</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('J6_particle') ?>
	<?php echo displayIcon('J5_particle') ?>
	<?php echo displayIcon('J4_particle') ?>
	<?php echo displayIcon('J3_particle') ?>
	<?php echo displayIcon('J2_particle') ?>
	<?php echo displayIcon('J1_particle') ?>
</tr>
<tr>
	<td class="bg-clearBlue"><h2 class="">K</h2></td>
	<?php echo displayIcon('') ?>
	<?php echo displayIcon('K6_particle') ?>
	<?php echo displayIcon('K5_particle') ?>
	<?php echo displayIcon('K4_particle') ?>
	<?php echo displayIcon('K3_particle') ?>
	<?php echo displayIcon('K2_particle') ?>
	<?php echo displayIcon('K1_particle') ?>
</tr>
</table>


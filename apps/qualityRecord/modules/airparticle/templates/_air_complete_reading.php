<?php use_helper('Validation', 'Javascript') ?>
<table class="table bordered ">
<tr>
	<td colspan="17"><h2>ACRO FILTER LOCATION</h2></h1></td>
</tr>
<tr>
	<td colspan="12" rowspan="4" class="bg-clearGray"></td>
	<td></td>
	<?php echo displayIcon('Z2') ?>
	<td></td>
	<?php echo displayIcon('Z3') ?>
	<td></td>
</tr>
<tr>
	<td height="50px" ></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<?php echo displayIcon('Z4') ?>
	<?php echo displayIcon('Z1') ?>
	<?php echo displayIcon('Z5') ?>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<?php echo displayIcon('Z6') ?>
	<?php echo displayIcon('Z7') ?>
</tr>
<tr>
	<?php echo displayIcon('L6') ?>
	<?php echo displayIcon('L3') ?>
	<td></td>
	<?php echo displayIcon('K5') ?>
	<td></td>
	<?php echo displayIcon('K1') ?>
	<?php echo displayIcon('J6') ?>
	<td></td>
	<?php echo displayIcon('J1') ?>
	<?php echo displayIcon('I6') ?>
	<?php echo displayIcon('I3') ?>
	<td></td>
	<?php echo displayIcon('H8') ?>
	<?php echo displayIcon('H5') ?>
	<td></td>
	<?php echo displayIcon('H1') ?>
	<td></td>
</tr>
<tr>
	<?php echo displayIcon('L7') ?>
	<?php echo displayIcon('L4') ?>
	<?php echo displayIcon('L1') ?>
	<?php echo displayIcon('K6') ?>
	<?php echo displayIcon('K4') ?>
	<?php echo displayIcon('K2') ?>
	<?php echo displayIcon('J7') ?>
	<?php echo displayIcon('J4') ?>
	<?php echo displayIcon('J2') ?>
	<?php echo displayIcon('I7') ?>
	<?php echo displayIcon('I4') ?>
	<?php echo displayIcon('I1') ?>
	<?php echo displayIcon('H9') ?>
	<?php echo displayIcon('H6') ?>
	<?php echo displayIcon('H3') ?>
	<?php echo displayIcon('H2') ?>
	<td></td>
</tr>
<tr>
	<td></td>
	<?php echo displayIcon('L5') ?>
	<?php echo displayIcon('L2') ?>
	<?php echo displayIcon('K7') ?>
	<td></td>
	<?php echo displayIcon('K3') ?>
	<td></td>
	<?php echo displayIcon('J5') ?>
	<?php echo displayIcon('J3') ?>
	<td></td>
	<?php echo displayIcon('I5') ?>
	<?php echo displayIcon('I2') ?>
	<td></td>
	<?php echo displayIcon('H7') ?>
	<?php echo displayIcon('H4') ?>
	<td></td>
	<td></td>
</tr>
</table>	
<?php 
	$filterList = array('Z2', 'Z3', 'Z4', 'Z1', 'Z5', 'Z6', 'Z7', 'L6', 'L3', 'K5', 'K1', 'J6', 'J1', 'I6', 'I3'
						, 'H8', 'H5', 'H1', 'L7', 'L4', 'L1', 'K6', 'K4', 'K2', 'J7', 'J4', 'J2', 'I7', 'I4', 'I1', 'H9'
						, 'H6', 'H3', 'H2', 'L5', 'L2', 'K7', 'K3', 'J5', 'J3', 'I5', 'I2', 'H7', 'H4');
	asort($filterList);
	foreach($filterList as $filter):
?>
	<script>
	$(document).ready( function () {
		$("#<?php echo $filter ?>").on('click', function(){
	        $.Dialog({
	            shadow: true,
	            overlay: false,
	            draggable: true,
	            icon: '<span class="icon-bus fg-white"></span>',
	            title: 'Draggable window',
	            width: 200,
	            padding: 10,
	            content: 'This Window is draggable by caption.',
	            onShow: function(){
	                var content = '<form id="reading" method="post" action="<?php echo url_for("airparticle/acroParticleSave?id=" .$sf_params->get('id')) .'&spot=' . $filter  ?>">' +
	                        '<label>Particle Count</label>' +
	                        '<div class="input-control text span2"><input type="number" name="particle" placeholder="Enter Particle Count" value="<?php echo $sf_params->get($filter .'_particle') ?>" ><button class="btn-clear"></button></div>' +
	                        '<label>AirFlow</label>' +
	                        '<div class="input-control text span2"><input type="number" name="airflow" placeholder="Enter Air Flow" value="<?php echo $sf_params->get($filter .'_air_flow') ?>"><button class="btn-clear"></button></div>' +
	                        '<div class="form-actions">' +
	                        '<button class="button success">Save Reading</button>&nbsp;'+
	                        '</div>'+
	                        '</form>';
	                $.Dialog.title("Reading For <?php echo $filter; ?>");
	                $.Dialog.content(content);
	            }
	        });
	    });
	});
	</script>
<?php endforeach; ?>
<?php
	$hlist = array(); 
	$ilist = array();
	$jlist = array();
	$klist = array();
	$llist = array();
	$zlist = array();
	$firstCh = '';
	foreach($filterList as $filter):
		$firstCh = strtoupper(substr($filter, 0, 1));
		switch($firstCh):
			case 'H':
				$hlist[] = $filter;
				break;
			case 'I':
				$ilist[] = $filter;
				break;
			case 'J':
				$jlist[] = $filter;
				break;
			case 'K':
				$klist[] = $filter;
				break;
			case 'L':
				$llist[] = $filter;
				break;
			case 'Z':
				$zlist[] = $filter;
				break;
		endswitch;
	endforeach;
//	asort($hlist);
//	asort($jlist);
//	asort($klist);
//	asort($llist);
//	asort($zlist);
	
?>
<table class="table bordered ">
<tr>
	<td class="alignCenter bg-clearBlue"><label>Filter</label></td>
	<td class="alignCenter bg-clearBlue"><label>Part</label></td>
	<td class="alignCenter bg-clearBlue"><label>A/F</label></td>
	<td class="alignCenter bg-lightPink fg-white"><label>Filter</label></td>
	<td class="alignCenter bg-lightPink fg-white"><label>Part</label></td>
	<td class="alignCenter bg-lightPink fg-white"><label>A/F</label></td>
	<td class="alignCenter bg-green fg-white"><label>Filter</label></td>
	<td class="alignCenter bg-green fg-white"><label>Part</label></td>
	<td class="alignCenter bg-green fg-white"><label>A/F</label></td>
	<td class="alignCenter bg-yellow fg-white"><label>Filter</label></td>
	<td class="alignCenter bg-yellow fg-white"><label>Part</label></td>
	<td class="alignCenter bg-yellow fg-white"><label>A/F</label></td>
	<td class="alignCenter bg-brown fg-white"><label>Filter</label></td>
	<td class="alignCenter bg-brown fg-white"><label>Part</label></td>
	<td class="alignCenter bg-brown fg-white"><label>A/F</label></td>
	<td class="alignCenter bg-cyan fg-white"><label>Filter</label></td>
	<td class="alignCenter bg-cyan fg-white"><label>Part</label></td>
	<td class="alignCenter bg-cyan fg-white"><label>A/F</label></td>
</tr>
<?php for($x=0; $x<= 8; $x++):?>
<tr>
	<td class="bg-clearBlue alignRight"><?php echo (isset($hlist[$x])? $hlist[$x] : '')  ?></td><td class="alignCenter"><?php echo (isset($hlist[$x])? $sf_params->get($hlist[$x].'_particle') : '')  ?></td><td class="alignCenter"><?php echo (isset($hlist[$x])? $sf_params->get($hlist[$x].'_air_flow') : '')  ?></td>
	<td class="bg-lightPink alignRight fg-white"><?php echo (isset($ilist[$x])? $ilist[$x] : '')  ?></td><td class="alignCenter"><?php echo (isset($ilist[$x])? $sf_params->get($ilist[$x].'_particle') : '')  ?></td><td class="alignCenter"><?php echo (isset($ilist[$x])? $sf_params->get($ilist[$x].'_air_flow') : '')  ?></td>
	<td class="bg-green alignRight fg-white"><?php echo (isset($jlist[$x])? $jlist[$x] : '')  ?></td><td class="alignCenter"><?php echo (isset($jlist[$x])? $sf_params->get($jlist[$x].'_particle') : '')  ?></td><td class="alignCenter"><?php echo (isset($jlist[$x])? $sf_params->get($jlist[$x].'_air_flow') : '')  ?></td>
	<td class="bg-yellow alignRight fg-white"><?php echo (isset($klist[$x])? $klist[$x] : '')  ?></td><td class="alignCenter"><?php echo (isset($klist[$x])? $sf_params->get($klist[$x].'_particle') : '')  ?></td><td class="alignCenter"><?php echo (isset($klist[$x])? $sf_params->get($klist[$x].'_air_flow') : '')  ?></td>
	<td class="bg-brown alignRight fg-white"><?php echo (isset($llist[$x])? $llist[$x] : '')  ?></td><td class="alignCenter"><?php echo (isset($llist[$x])? $sf_params->get($llist[$x].'_particle') : '')  ?></td><td class="alignCenter"><?php echo (isset($llist[$x])? $sf_params->get($llist[$x].'_air_flow') : '')  ?></td>
	<td class="bg-cyan alignRight fg-white"><?php echo (isset($zlist[$x])? $zlist[$x] : '')  ?></td><td class="alignCenter"><?php echo (isset($zlist[$x])? $sf_params->get($zlist[$x].'_particle') : '')  ?></td><td class="alignCenter"><?php echo (isset($zlist[$x])? $sf_params->get($zlist[$x].'_air_flow') : '')  ?></td>
</tr>
<?php endfor;?>
</table>
<?php 
	function displayIcon($name = null)
	{
		$name = $name? $name : '&nbsp;';
		$msg = '';
		$msg .= "<td id='$name' class='bg-darkBlue'><div class='alignCenter' ><h4 class='fg-white'>$name</h4></div></td>";
		return $msg;
	}
?>
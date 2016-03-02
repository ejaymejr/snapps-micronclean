<?php use_helper('Validation', 'Javascript') ?>
		<?php 
			$reading1 = '<i class="icon-soundcloud"></i>'; 
			$reading2 = '<h2 class="fg-amber">19.0</h2>'
		?>
<div class="contentBox">
<form id="reading" method="post" action="<?php echo url_for("airparticle/acroParticleAdd?id=". $sf_params->get('id') ) ?>" >
<table class="table bordered">
<tr>
	<td colspan="3" >
		<nav class="breadcrumbs">
			<ul>
			<li><a href="#"><i class="icon-home"></i></a></li>
			<li class=" "><a id="save" href="<?php echo url_for('airparticle/acroSearch') ?>" class="" >Search Acro Particle Data</a></li>
			<li class=" "><a id="add" href="<?php echo url_for('airparticle/acroParticleAdd') ?>" class="" >Add Acro Particle Count</a></li>
			<li><a href="#">&nbsp;</a></li>
			</ul>
		</nav
	</td>
</tr>
</table>
<h1>Air Particle (ACRO)</h1>
<h2>Air Particle Count in Class 100 environment</h2>
<table class="table bordered">
<tr>
	<td class="bg-clearBlue alignRight span2" ><label>Condition</label></td>
	<td class="span2" >
		<?php echo HTMLLib::CreateInputText('humidity', $sf_params->get('humidity'), 'span1')?>
		<small class="warning">%</small>
	</td>
	<td class="bg-clearBlue  alignRight span2" ><label>RH</label></td>
	<td class="span2" >
		<?php echo HTMLLib::CreateInputText('temperature', $sf_params->get('temperature'), 'span1')?>
		<small class="warning">&deg;C</small>
	</td>
	<td class="bg-clearBlue  alignRight span2" ><label>Diff Pressure</label></td>
	<td class="span2" colspan="2">
		<?php echo HTMLLib::CreateInputText('diff_pressure', $sf_params->get('diff_pressure'), 'span1')?>
		<small class="warning"></small>
	</td>
</tr>
<tr>
	<td class="bg-clearBlue alignRight span2" ><label>Date</label></td>
	<td class="span2" >
		<?php echo HTMLLib::CreateDateInput('date_record', $sf_params->get('date_record'), 'span2')?>
		<small class="warning"></small>
	</td>
	<td class="bg-clearBlue  alignRight span2" ><label>Frequency</label></td>
	<td class="span2" colspan="3">
		<?php echo HTMLLib::CreateSelect('frequency', $sf_params->get('frequency'), array('daily'=>'Daily', 'weekly'=>'Weekly', 'monthly'=>'Monthly'), 'span2'); ?>
		<small class="fg-red">Spec Limit: 	< 100 counts @ 0.5um, 1cfm</small>
	</td>
</tr>


<!--<table class="table bordered">
<tr>
	<td class=" alignCenter bg-teal fg-white" colspan="2"><label>1232-A</label></td>
	<td class=" alignCenter bg-teal fg-white" colspan="2" ><label>1232-B</label></td>
</tr>
<tr>
	<td class="bg-clearBlue alignCenter " ><label>P-A1</label></td>
	<td class="bg-clearBlue alignCenter " ><label>P-A2</label></td>
	<td class="bg-clearBlue alignCenter " ><label>P-B1</label></td>
	<td class="bg-clearBlue alignCenter " ><label>P-B2</label></td>
</tr>
<tr>
	<td class=" alignCenter " >
		<?php echo HTMLLib::CreateInputText('pa1', $sf_params->get('pa1'), 'span2')?>
		<small class="warning"></small>
	</td>
	<td class="alignCenter" >
		<?php echo HTMLLib::CreateInputText('pa2', $sf_params->get('pa2'), 'span2')?>
		<small class="warning"></small>
	</td>
	<td class="alignCenter" >
	<?php echo HTMLLib::CreateInputText('pb1', $sf_params->get('pb1'), 'span2')?>
		<small class="warning"></small>
	</td>
	<td class="alignCenter" >
		<?php echo HTMLLib::CreateInputText('pb2', $sf_params->get('pb1'), 'span2')?>
		<small class="warning"></small>
	</td>
</tr>
</table>
-->
<tr>
	<td colspan="6" >
	    <div class="tab-control" data-role="tab-control" data-effect="fade">
    <ul class="tabs">
	    <li class="active"><a href="#_page_1">Particle</a></li>
	    <li><a href="#_page_2">Air Flow</a></li>
	    <li><a href="#_page_3">Complete Particle</a></li>
	    <li><a href="#_page_4">Complete Air Flow</a></li>
    </ul>
     
    <div class="frames">
	    <div class="frame" id="_page_1"><?php include_partial('particle_acro_reading')?></div>
	    <div class="frame" id="_page_2"><?php include_partial('air_acro_reading')?></div>
	    <div class="frame" id="_page_3"><?php include_partial('particle_acro_complete_reading')?></div>
	    <div class="frame" id="_page_4"><?php include_partial('air_acro_complete_reading')?></div>
    </div>
    </div>
	
	</td>
</tr>
<tr>
	<td class="bg-clearBlue alignRight span2" ><label>Remarks</label></td>
	<td class="" colspan="4">
		<?php 
			echo HTMLLib::CreateTextArea('remark', $sf_params->get('remark'), 'span6');
			echo HTMLLib::CreateSubmitButton('save', 'Save Data ');
		?>
	</td>
</td>
</table>
</form>
</div>
<?php 
function displayValues($val)
{
 	$val = $val? '<h2 class="readable-text alignCenter fg-amber">'.$val.'</h2>' : '<i class="icon-soundcloud"></i>';
 	return $val;
}

function displayIcon2($name = null, $colspan= null)
{
	$colspan = $colspan? $colspan: 1;
	$loc = str_replace('_air_flow', '', $name);
	$loc = str_replace('_particle', '', $loc);
	$loc = str_replace('_', '-', $loc);
	if ($name):
		$bg = 'bg-darkBlue bg-hover-cobalt';
		$values = sfContext::getInstance()->getRequest()->getParameter($name) ;//$sf_params->get($name);
		if (! $name):
			$name = '&nbsp;';
			$bg = 'bg-clearGray';
		endif;
		$msg = '';
		$msg .= "<td colspan='$colspan' rowspan='$colspan' id='$name' class='$bg'><div class='alignCenter' >".HTMLLib::CreateInputText($name, $values,'span1')."<br><H4 class='fg-white'>".$loc."</h4></div></td>";
	else:
		$msg = '<td colspan="'.$colspan.'" rowspan="'.$colspan.'" class="bg-clearBlue"></td>';
	endif;
	return $msg;
}

function displayIcon($name = null)
{
	$loc = str_replace('_air_flow', '', $name);
	$loc = str_replace('_particle', '', $loc);
	$loc = str_replace('_', '-', $loc);
	if ($name):
		$bg = 'bg-darkBlue bg-hover-cobalt';
		$values = sfContext::getInstance()->getRequest()->getParameter($name) ;//$sf_params->get($name);
		if (! $name):
			$name = '&nbsp;';
			$bg = 'bg-clearGray';
		endif;
		$msg = '';
		$msg .= "<td colspan='$colspan' rowspan='$colspan' id='$name' class='$bg'><div class='alignCenter' >".HTMLLib::CreateInputText($name, $values,'span1')."<br><H4 class='fg-white'>".$loc."</h4></div></td>";
	else:
		$msg = '<td class="bg-clearBlue"></td>';
	endif;
	return $msg;
}

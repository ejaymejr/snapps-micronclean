<?php use_helper('Validation', 'Javascript') ?>

<div class="contentBox">
<form id="reading" method="post" action="<?php echo url_for("machine/waterMonitoringAdd?id=". $sf_params->get('id') ) ?>" >
<table class="table bordered">
<tr>
	<td colspan="3" >
		<nav class="breadcrumbs">
			<ul>
			<li><a href="#"><i class="icon-home"></i></a></li>
			<li class=" "><a id="save" href="<?php echo url_for('machine/waterMonitoringSearch') ?>" class="" >Search Water Monitoring Record</a></li>
			<li><a href="#">&nbsp;</a></li>
			</ul>
		</nav
	</td>
</tr>
</table>
<div class="panel">
	<div class="panel-header bg-orange fg-white">
	Water Temperature Sheet
	</div>
<div class="panel-content">
	<table class="table bordered">
	<tr>
		<td class="bg-clearBlue alignRight span2" ><label>Date</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateDateInput('date_time', $sf_params->get('date_time'), 'span2')?>
			<small class="warning"></small>
		</td>
		<td class="bg-clearBlue  alignRight span2" ><label>Machine Number</label></td>
		<td class="span2" colspan="3">
			<?php echo HTMLLib::CreateSelect('machine_no', $sf_params->get('machine_no'), array(''=>' Machine ', '1232A'=>'1232A', '1232B'=>'1232B', '6252'=>'6252', '1211'=>'1211'), 'span2'); ?>
			<small class="fg-red">&nbsp;&nbsp;&nbsp;Spec: 40&deg;C</small>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight span2" ><label>8 Am</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('am_8', $sf_params->get('am_8'), 'span1')?>
			<small class="warning"></small>
		</td>
		<td class="bg-clearBlue alignRight span2" ><label>1 Pm</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('pm_1', $sf_params->get('pm_1'), 'span1')?>
			<small class="warning"></small>
		</td>
			<td class="bg-clearBlue alignRight span2" ><label>6 Pm</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('pm_6', $sf_params->get('pm_6'), 'span1')?>
			<small class="warning"></small>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight " ><label>9 Am</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('am_9', $sf_params->get('am_9'), 'span1')?>
			<small class="warning"></small>
		</td>
		<td class="bg-clearBlue alignRight " ><label>2 Pm</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('pm_2', $sf_params->get('pm_2'), 'span1')?>
			<small class="warning"></small>
		</td>
			<td class="bg-clearBlue alignRight " ><label>7 Pm</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('pm_7', $sf_params->get('pm_7'), 'span1')?>
			<small class="warning"></small>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight " ><label>10 Am</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('am_10', $sf_params->get('am_10'), 'span1')?>
			<small class="warning"></small>
		</td>
		<td class="bg-clearBlue alignRight " ><label>3 Pm</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('pm_3', $sf_params->get('pm_3'), 'span1')?>
			<small class="warning"></small>
		</td>
			<td class="bg-clearBlue alignRight " ><label>8 Pm</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('pm_8', $sf_params->get('pm_8'), 'span1')?>
			<small class="warning"></small>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight " ><label>11 Am</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('am_11', $sf_params->get('am_11'), 'span1')?>
			<small class="warning"></small>
		</td>
		<td class="bg-clearBlue alignRight " ><label>4 Pm</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('pm_4', $sf_params->get('pm_4'), 'span1')?>
			<small class="warning"></small>
		</td>
			<td class="bg-clearBlue alignRight " ><label>9 Pm</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('pm_9', $sf_params->get('pm_9'), 'span1')?>
			<small class="warning"></small>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight " ><label>12 NN</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('nn_12', $sf_params->get('nn_12'), 'span1')?>
			<small class="warning"></small>
		</td>
		<td class="bg-clearBlue alignRight " ><label>5 Pm</label></td>
		<td class="" >
			<?php echo HTMLLib::CreateInputText('pm_5', $sf_params->get('pm_5'), 'span1')?>
			<small class="warning"></small>
		</td>
			<td class="bg-clearBlue alignRight " ><label>10 Pm</label></td>
		<td class="" >
			<?php echo HTMLLib::CreateInputText('pm_10', $sf_params->get('pm_10'), 'span1')?>
			<small class="warning"></small>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight span2" ><label>Remarks</label></td>
		<td class="" colspan="6">
			<?php 
				echo HTMLLib::CreateTextArea('remark', $sf_params->get('remark'), 'span6');
			?>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight span2" ><label></label></td>
		<td class="" colspan="6">
		<?php echo HTMLLib::CreateSubmitButton('save', 'Save Data '); ?>
		</td>
	</tr>
	</table>
</div>
</div>
</form>
</div>

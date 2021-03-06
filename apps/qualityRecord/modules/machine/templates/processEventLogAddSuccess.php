<?php use_helper('Validation', 'Javascript') ?>
<div class="contentBox">
<form id="reading" method="post" action="<?php echo url_for("machine/processEventLogAdd?id=". $sf_params->get('id') ) ?>" >
<table class="table bordered">
<tr>
	<td colspan="3" >
		<nav class="breadcrumbs">
			<ul>
			<li><a href="<?php echo url_for('machine/processEventLogSearch') ?>"><i class="icon-arrow-left-3"></i></a></li>
			<li><a href="#">&nbsp;</a></li>
			</ul>
		</nav
	</td>
</tr>
</table>
<div class="panel">
	<div class="panel-header bg-orange fg-white">
	Machine Process & Machine Repair Event Log
	</div>
<div class="panel-content">
	<table class="table bordered">
	<tr>
		<td class="bg-clearBlue alignRight span2" ><label>Date</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateDateInput('trans_date', $sf_params->get('trans_date'), 'span2')?>
			<small class="warning"></small>
		</td>
		<td class="bg-clearBlue alignRight span2" ><label>Time</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateInputText('trans_time', $sf_params->get('trans_time'), 'span2')?>
			<small class="warning"></small>
		</td>
	</tr>
	<tr class="span3">
		<td class="bg-clearBlue  alignRight span2" ><label>Machine Number</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateSelect('machine_no', $sf_params->get('machine_no'), array(''=>' MACHINE ', '1232A'=>'1232A', '1232B'=>'1232B', '6252'=>'6252', '1211'=>'1211', '4254'=>'4254'), 'span2'); ?>
			<small class="fg-red">&nbsp;&nbsp;&nbsp;</small>
		</td>
		<td class="bg-clearBlue alignRight span2" ><label>Checked By</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateSelect('checked_by', $sf_params->get('checked_by'), array(''=>' CHECKED ', 'PARI'=>'PARI', 'REX'=>'REX', 'VELU'=>'VELU'), 'span2'); ?>
			<small class="fg-red">&nbsp;&nbsp;&nbsp;</small>
		</td>
	</tr>

	<tr>
		<td class="bg-clearBlue alignRight span2" ><label>Failure Mode</label></td>
		<td class="" colspan="4">
			<?php 
				echo HTMLLib::CreateTextArea('failure_mode', $sf_params->get('failure_mode'), 'span8');
			?>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight span2" ><label>Barch/Process/Lot Affected</label></td>
		<td class="span2" colspan="3">
			<?php echo HTMLLib::CreateInputText('affected', $sf_params->get('affected'), 'span8')?>
			<small class="warning"></small>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight span2" ><label>Probable Cause</label></td>
		<td class="" colspan="4">
			<?php 
				echo HTMLLib::CreateTextArea('probable_cause', $sf_params->get('probable_cause'), 'span8');
			?>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight span2" ><label>Corrective Actions</label></td>
		<td class="" colspan="4">
			<?php 
				echo HTMLLib::CreateTextArea('corrective_action', $sf_params->get('corrective_action'), 'span8');
			?>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight span2" ><label>Description of Parts Changed or Modified</label></td>
		<td class="" colspan="4">
			<?php 
				echo HTMLLib::CreateTextArea('description_of_parts', $sf_params->get('description_of_parts'), 'span8');
			?>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight span2" ><label>Inform Others</label></td>
		<td class="" colspan="3" >
			<?php 
				echo HTMLLib::CreateCheckBox('sms_terence', 'SMS', $sf_params->get('sms_terence') );
				echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				echo HTMLLib::CreateCheckBox('email_terence', 'EMAIL &nbsp;&nbsp;&nbsp;&nbsp; TERENCE' , $sf_params->get('email_terence'));
				echo '<br>';
				echo HTMLLib::CreateCheckBox('sms_adeline', 'SMS', $sf_params->get('sms_adeline'));
				echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				echo HTMLLib::CreateCheckBox('email_adeline', 'EMAIL &nbsp;&nbsp;&nbsp;&nbsp; ADELINE' , $sf_params->get('email_adeline'));
				echo '<br>';
				echo HTMLLib::CreateCheckBox('sms_melvin', 'SMS', $sf_params->get('sms_melvin'));
				echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				echo HTMLLib::CreateCheckBox('email_melvin', 'EMAIL &nbsp;&nbsp;&nbsp;&nbsp; MELVIN', $sf_params->get('email_melvin') );
				echo '<br>';
				echo HTMLLib::CreateCheckBox('sms_rex', 'SMS', $sf_params->get('sms_rex'));
				echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				echo HTMLLib::CreateCheckBox('email_rex', 'EMAIL &nbsp;&nbsp;&nbsp;&nbsp; REX', $sf_params->get('email_rex') );
				echo '<br>';
				echo HTMLLib::CreateCheckBox('sms_lyeheng', 'SMS', $sf_params->get('sms_lyeheng'));
				echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				echo HTMLLib::CreateCheckBox('email_lyeheng', 'EMAIL &nbsp;&nbsp;&nbsp;&nbsp; LYE HENG' , $sf_params->get('email_lyeheng'));
				echo '<br>';
				echo HTMLLib::CreateCheckBox('sms_velu', 'SMS', $sf_params->get('sms_velu'));
				echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				echo HTMLLib::CreateCheckBox('email_velu', 'EMAIL &nbsp;&nbsp;&nbsp;&nbsp; VELU', $sf_params->get('email_velu') );
				echo '<br>';
			?>
		</td>
	</tr>
	<tr class="span3">
		<td class="bg-clearBlue  alignRight span2" ><label>VERIFIED BY</label></td>
		<td class="span2" >
			<?php echo HTMLLib::CreateSelect('verified_by', $sf_params->get('verified_by'), array(''=>' VERIFIED ', 'VELU'=>'VELU', 'LYE HENG'=>'LYE HENG', 'REX'=>'REX', 'MELVIN'=>'MELVIN'), 'span2'); ?>
			<small class="fg-red">&nbsp;&nbsp;&nbsp;</small>
		</td>
		<td class="bg-clearBlue alignRight span2" ><label></label></td>
		<td class="span2" >
			<?php //echo HTMLLib::CreateSelect('checked_by', $sf_params->get('checked_by'), array(''=>' Select Engineer ', 'PARI'=>'PARI', 'REX'=>'REX', 'VELU'=>'VELU'), 'span2'); ?>
			<small class="fg-red">&nbsp;&nbsp;&nbsp;</small>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight span2" ><label></label></td>
		<td class="" colspan="6">
		<?php echo HTMLLib::CreateSubmitButton('save', 'Save Data '); ?>
		</td>
	</tr>
	<tr>
		<td class="bg-clearBlue alignRight span2" colspan="4">Record Sheet: #129</td>
	</tr>
	</table>
</div>
</div>
</form>
</div>

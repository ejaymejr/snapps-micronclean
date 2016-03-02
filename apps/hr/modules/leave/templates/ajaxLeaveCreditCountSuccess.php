<?php use_helper('Validation', 'Javascript') ?>
<?php
//var_dump($sf_params->get('leaveID'));
//echo 'test';
echo javascript_tag("
	document.getElementById('DIVCommenceDate".$sf_params->get('leaveID')."').innerHTML = '".$commence."';
	document.getElementById('commence_date".$sf_params->get('leaveID')."').value = '".$commence."';
	document.getElementById('DIVBalance".$sf_params->get('leaveID')."').innerHTML = '".$balance."';
	document.getElementById('balance".$sf_params->get('leaveID')."').value = '".$balance."';
	document.getElementById('dates".$sf_params->get('leaveID')."').value = '".''."';
	document.getElementById('empname".$sf_params->get('leaveID')."').innerHTML = '".$name."';
	document.getElementById('name".$sf_params->get('leaveID')."').value = '".$name."';
");
    	echo $cal->LeaveApplyCalendar($cdate,  $empNo, $leaveID);
    	//echo $empNo;
?>
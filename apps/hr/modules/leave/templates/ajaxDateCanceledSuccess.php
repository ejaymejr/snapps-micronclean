<?php use_helper('Validation', 'Javascript') ?>
<?php
echo javascript_tag("
	//vDates = document.getElementById('dates').value;
	document.getElementById('dates".$leaveID."').value = '".$sf_params->get('date_list')."'
	//vDates = vdates + document.getElementById('dates').value;
	//document.getElementById('dates').value = vDates;
");
echo input_tag('cdate', $sf_params->get('cdate'), 'type=hidden');
echo input_tag('date_list', $sf_params->get('date_list'), 'size=10x1 type=hidden');
$ydt = $sf_params->get('cdate');
$dt = DateUtils::DUFormat("j", $sf_params->get('cdate'));
$dates = "dates".$leaveID;

		$jsVarApply = "'dates=' + \$F('".$dates."') "   
						."+ '&cdate=" . $ydt ."'" 
						."+ '&leaveID=" . $leaveID ."'" 
;

						
	$ajaxLeaveApply = array(
			'url'		=>'leave/ajaxDateApplied',
			'with'		=> $jsVarApply,
//			'update' 	=> 'DIVDatesApplied',
            'update' 	=> 'calendar_'.$ydt.'_'.$leaveID,
            'script'    => true,
            'loading'   => 'stop_remote_pager();',
            'before'   	=> 'showLoader();',
            'complete'  => 'hideLoader();formatFormStyle();',
            'type'      => 'synchronous',			
	); 


	
$dateButton = link_to ($dt, 'leave/ajaxDateApplied' ,  array('onclick'=>remote_function($ajaxLeaveApply) . ';return false;') );
?>
<div id='calendar_"<?php echo $ydt.'_'.$leaveID ?>'>
<ul id='navlist'>
	<li> 
		<div id="DIVCanceledDate" align="center"><?php echo $dateButton; ?></div>
	</li>
</ul>
</div>
<?php
//    		echo textarea_tag('dates',  $sf_params->get('dates'), 'size=50x5'); 
//    		echo '<br>';
//    		echo '<br>';
//    		echo submit_tag('Apply these Dates');
?>
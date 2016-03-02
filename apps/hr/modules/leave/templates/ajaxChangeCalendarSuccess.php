<?php use_helper('Validation', 'Javascript') ?>

    <?php
    	if (!$empNo): 
//	    	echo javascript_tag("
//	    		alert('Please Select the Employee First');
//	    	");
	    	echo $cal->LeaveApplyCalendar($cdate, '', $leaveID);
	    	//echo 'kebot';
	    else:
	    	//echo 'test';
	    	echo $cal->LeaveApplyCalendar($cdate, $empNo, $leaveID);
	    endif;
	    //$cal = new TkCalendar(date('Y'), false);
    	
 	?>
<?php sfConfig::set('app_page_heading', 'Leave Request Form'); ?>
<?php use_helper('Validation', 'Javascript', 'PagerNavigation') ?>
<?php 
	echo HrLib::DisableEnterKey('Must select the Dates first or Click the Apply Leave Button') ;
	//var_dump($sf_params->get('cmonth'.$leaveID));
	if (! $sf_params->get('cmonth'.$leaveID)):
		$sf_params->set('cmonth'.$leaveID, date('Y-m-01'));
	endif;
?>



<?php //sfConfig::set('app_page_heading', 'Leave Request Form'); 
	$button = '';
	switch($leaveID):
		case 2:
			$button = submit_tag('Apply Annual Leave');
			break;
		case 6:
			$button = submit_tag('Apply Unpaid Leave');
			break;
		case 1:
			$button = submit_tag('Apply Medical Leave');
			break;
		case 8:
			$button = submit_tag('Apply National Service');
			break;
		case 13:
			$button = submit_tag('Apply Hospitalization');
			break;
		case 12:
			$button = submit_tag('Apply Maternity');
			break;
		case 7:
			$button = submit_tag('Apply Child Care');
			break;
		case 11:
			$button = submit_tag('Apply Compassionate Leave');
			break;	
	endswitch;
	//echo $leaveID;
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="100" class="at">
</td>
<td width="100%" align="center" valign="top">
<form name="FORMadd" autocomplete="off" id="IDFORMadd" action="<?php echo url_for('leave/leaveEmployeeApply'). '?id=' . $sf_params->get('id');?>" method="post">
<table width="100%" class="FORMtable" border="0" cellpadding="4" cellspacing="0">
<tr>
    <td width="150px" class="FORMcell-left FORMlabel" nowrap>Employee No</td>
    <td colspan="5" class="FORMcell-right" nowrap>
    <?php
	$jsLCQString = "'employee_no=' + \$F('employee_no".$leaveID."')    "
					." + '&cmonth=' + \$F('cmonth".$leaveID."') "  
					." + '&leaveID=" . $leaveID ."'" 
	;	
	$ajaxLCredit = array(
			'url'		=>'leave/ajaxLeaveCreditCount',
			'with'		=> $jsLCQString,
            'update' 	=> 'divCalendarDisplay'.$leaveID,
	            'script'    => true,
	            'loading'   => 'stop_remote_pager();',
	            'before'   	=> 'showLoader();',
	            'complete'  => 'hideLoader();formatFormStyle();',
	            'type'      => 'synchronous',				
	); 
    echo HTMLForm::Error('employee_no'); 
    $empNoEntry = '';
    if ($sf_user->isAuthenticated()):
	    $empNoEntry = select_tag('employee_no'.$leaveID, 
	             options_for_select(HrEmployeePeer::GetEmployeeNameList(), 
	             $sf_params->get('employee_no'.$leaveID) ), array('onchange'=>remote_function($ajaxLCredit) . ';return false;') );
	else:
		$empNoEntry = input_tag('employee_no'.$leaveID, $sf_params->get('employee_no'.$leaveID) , array('onchange'=>remote_function($ajaxLCredit) . ';return false;', 'size'=>35, 'onkeydown'=>"return DisableKeypress()" ) ); 
	endif;
	//$empNoEntry = input_tag('employee_no'.$leaveID, $sf_params->get('employee_no'.$leaveID) , array('onchange'=>remote_function($ajaxLCredit) . ';return false;', 'size'=>35) );
    echo $empNoEntry ;
    echo input_tag('leaveID', $leaveID, 'type=hidden');
    ?>
    <span class="negative">* &nbsp;&nbsp; </span>
    </td>
</tr>
<tr>
    <td class="FORMcell-left FORMlabel" nowrap>Name</td>
    <td colspan="5" class="FORMcell-right" nowrap>
    	<h1><div id="empname<?php echo $leaveID ?>">
    	<?php 
    		echo $sf_params->get('name'.$leaveID);
    	?>
    	</div></h1>
    	<?php 
    		echo input_tag('name'.$leaveID, $sf_params->get('name'.$leaveID), 'type=hidden' ); //
    	?>
    </td>
</tr>
</table>


<table width="100%" class="FORMtable" border="0" cellpadding="4" cellspacing="0">
<tr>
    <td width="150px" class="FORMcell-left FORMlabel" nowrap>Commence Date</td>
    <td colspan="5" class="FORMcell-right" nowrap>
            <?php
    	echo input_tag('commence_date'.$leaveID, $sf_params->get('commence_date'.$leaveID), 'type=hidden');
    ?>
    <div id="DIVCommenceDate<?php echo $leaveID ?>"><?php echo $sf_params->get('commence_date'.$leaveID) ?>
    </div>

    </td>
</tr>
<tr>
    <td class="FORMcell-left FORMlabel" nowrap>Balance</td>
    <td colspan="5" class="FORMcell-right" nowrap>
    <?php
    	echo input_tag('balance'.$leaveID, $sf_params->get('balance'.$leaveID), 'type=hidden' );
    ?>
    <div id="DIVBalance<?php echo $leaveID ?>"><?php echo $sf_params->get('balance'.$leaveID) ?>
    </div>
    </td>
</tr>
<tr>
    <td class="FORMcell-left FORMlabel" nowrap>Change Month</td>
    <td colspan="5" class="FORMcell-right" nowrap>
		<?php 
		$jsCMonth = "'cmonth=' + \$F('cmonth".$leaveID."')    "	
					." + '&employee_no=' + \$F('employee_no".$leaveID."') "  
					." + '&leaveID=" . $leaveID ."'" 
		;	
		$ajaxCMonth = array(
				'url'		=>'leave/ajaxChangeCalendar',
				'with'		=> $jsCMonth,
	            'update' 	=> 'divCalendarDisplay'.$leaveID,
	            'script'    => true,
	            'loading'   => 'stop_remote_pager();',
	            'before'   	=> 'showLoader();',
	            'complete'  => 'hideLoader();formatFormStyle();',
	            'type'      => 'synchronous',			
		); 
	
			echo select_tag('cmonth'.$leaveID, 
				options_for_select(sfConfig::get('monthlyCalendar'), $sf_params->get('cmonth'.$leaveID) ), 
				array('onchange'=>remote_function($ajaxCMonth) . ';return false;') 
				);
			//var_dump(sfConfig::get('monthlyCalendar'));  
		?>
		&nbsp;&nbsp;&nbsp;
		<?php 
			echo $button;
			echo '&nbsp;&nbsp;' . submit_tag('Reset');
		?>
    </td>
</tr>
</table>
<table width="100%" class="FORMtable" border="0" cellpadding="4" cellspacing="0">
<tr>
    <td width="400px" class="FORMcell-right" nowrap>
    <div id="DIVLeaveCalendarFrame" >
		<div id="divCalendarDisplay<?php echo $leaveID ?>" >
	    <?php
	    	//$cal = new TkCalendar(date('Y'), false);
	    	echo $cal->LeaveApplyCalendar($sf_params->get('cmonth'.$leaveID), $sf_params->get('employee_no'.$leaveID), $leaveID);
	 	?>
	 	</div>

 	</div>
    </td>
    <td class="FORMcell-right" nowrap>
    
    <!--  -->    
	<table width="100%" class="FORMtable" border="0" cellpadding="4" cellspacing="0">
		<tr>
		    <td width="150px" class="FORMcell-left FORMlabel" nowrap>Date of Request</td>
		    <td colspan="5" class="FORMcell-right" nowrap>
		    <?php    
		        echo HTMLForm::Error('date_filed'.$leaveID);
		        echo HTMLForm::DrawDateInput('date_filed'.$leaveID, $sf_params->get('date_filed', date('Y-m-d')), XIDX::next(), XIDX::next(), ' size="12" '); ?>
		    <span class="negative">*</span>        
		    </td>
		</tr>
		<tr>
		    <td class="FORMcell-left FORMlabel" nowrap>Half Day Applied For:</td>
		    <td colspan="5" class="FORMcell-right" nowrap>
		    <?php
		    	$hDay = array('none'=>'- None -', 'Am Leave'=>'- Am Leave -', 'Pm Leave'=>'- Pm Leave -');
		        echo HTMLForm::Error('half_day'.$leaveID); 
		        //echo select_tag('half_day', $hDay, );
		        echo select_tag('half_day'.$leaveID, 
		             options_for_select($hDay, 
		             $sf_params->get('half_day'.$leaveID) ) );    
		        
		    ?>
		    <span class="negative">*</span>            
		    </td>
		</tr>
		
		<tr>
		    <td class="FORMcell-left FORMlabel" nowrap>Reason</td>
		    <td colspan="3" class="FORMcell-right" nowrap>
		    <?php
		        echo HTMLForm::Error('reason'); 
		        echo textarea_tag('reason_leave'.$leaveID,  $sf_params->get('reason_leave'.$leaveID)? $sf_params->get('reason_leave'.$leaveID) : $reason, 'size=50x5'); 
		    ?>
		    <span class="negative">*</span>    
		    </td>
		</tr>
		<tr>
		<tr>
		    <td class="FORMcell-left FORMlabel" nowrap></td>
		    <td class="FORMcell-right" nowrap>
		    <?php echo $button ?>
		    </td>
		</tr>
		<tr>
		    <td width="150px"  class="FORMcell-left FORMlabel" nowrap>Dates Applied</td>
		    <td colspan="5" class="FORMcell-right" nowrap>
		    <div id="DIVDatesApplied">
		        <?php
		    		echo textarea_tag('dates'.$leaveID,  $sf_params->get('dates'), 'size=50x5 readonly=readonly'); 
		    		echo '<br>';
		    		echo '<br>';
		    		echo $button;
		    	?>
		    </div>
		    </td>
		</tr>
	</table>
    
    </td>
</tr>

</table>

</form>



</td>
<td width="100" class="at">  

</td>
</tr>
</table>
	 	<div id="DIVShowLeave<?php echo $leaveID ?>" >
		
		</div>
<?php

	$jsLeave = "'employee_no=' + \$F('employee_no".$leaveID."')    "
					." + '&cmonth=' + \$F('cmonth".$leaveID."') "  
					." + '&leaveID=" . $leaveID ."'" 
	;	
	$ajaxShowLeave = array(
			'url'		=>'leave/ajaxShowAppliedLeave',
			'with'		=> $jsLeave,
            'update' 	=> 'DIVShowLeave'.$leaveID,
            'script'    => true,
            'loading'   => 'stop_remote_pager();',
            'before'   	=> 'showLoader();',
            'complete'  => 'hideLoader();formatFormStyle();',
            'type'      => 'synchronous',			
	); 
	
	echo javascript_tag("
	function onEmployeeChange(ev, args) {
		".remote_function($ajaxShowLeave)."
	}
	YAHOO.util.Event.addListener('employee_no$leaveID', 'change', onEmployeeChange);	
	");

	
	echo javascript_tag("
		  var currentdate = new Date();
		  var firstPress;
		  var lastPress;
		    		 
		  function DisableKeypress(e) {
		    var cdate = new Date();
		    var code;

		    // If IE
		    if (!e)	{	       
		      var e = window.event;
		    }
		      if(typeof firstPress == 'undefined') {
		          firstPress = cdate.getSeconds();
		          lastPress = firstPress;
		      }else{
		      	  lastPress = cdate.getSeconds();
		      	  if (firstPress != lastPress){
		      	  	alert('You are not allowed to key in');
		      	  	window.location = '".url_for('leave/leaveEmployeeApply')."';
		      	  }
		      }
		    if (e.keyCode) code = e.keyCode;
		    else if (e.which) code = e.which;  
		
		    if (code == 17 || code == 45 ){
		      	  	alert('You are not allowed to key in');
		      	  	window.location = '".url_for('leave/leaveEmployeeApply')."';
			}

		  };
		  
//		function DisableKeypress(e) {
//		    var code;
//		    if (!e) var e = window.event;
//		    if (e.keyCode) code = e.keyCode;
//		    else if (e.which) code = e.which;  
//		
//		    if (code > 0)
//		        return false;
//			}
    ");
?>


<?php sfConfig::set('app_page_heading', 'Leave Request Form'); ?>
<?php use_helper('Validation', 'Javascript') ?>
<?php //sfConfig::set('app_page_heading', 'Leave Request Form'); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="100" class="at">
</td>
<td width="100%" align="center" valign="top">
<form name="FORMadd" id="IDFORMadd" action="<?php echo url_for('leave/leaveEmployeeApply'). '?id=' . $sf_params->get('id');?>" method="post">
<table width="100%" class="FORMtable" border="0" cellpadding="4" cellspacing="0">
<tr>
    <td width="200" class="FORMcell-left FORMlabel" nowrap>Employee No / Name</td>
    <td colspan="5" class="FORMcell-right" nowrap>
    <?php
	$jsLCQString = "'employee_no=' + \$F('employee_no')   +  "
					."'&ic_no=' + \$F('ic_no') "  
	;	
	$ajaxLCredit = array(
			'url'		=>'leave/leaveCreditBrowser',
			'with'		=> $jsLCQString,
            'update' 	=> 'divLeaveCredits',
            'script'    => true,
            'loading'   => 'stop_remote_pager();',
            'before'   	=> 'showLoader();',
            'complete'  => 'hideLoader();formatFormStyle();',
            'type'      => 'synchronous',			
	); 
    echo HTMLForm::Error('employee_no'); 
    echo select_tag('employee_no', 
             options_for_select(HrEmployeePeer::GetEmployeeNameList(), 
             $sf_params->get('employee_no') ), array('onchange'=>remote_function($ajaxLCredit) . ';return false;') );    
    ?>
    <span class="negative">* &nbsp;&nbsp; </span><span class="positive">Date Started : </span><span class="negative"><?php echo $sf_params->get('commence_date')  ?></span>
    </td>
</tr>

<tr>
    <td class="FORMcell-left FORMlabel" nowrap>Leave Type</td>
    <td colspan="5" class="FORMcell-right" nowrap>
    <?php
        echo HTMLForm::Error('leave_type'); 
        echo select_tag('leave_type', 
             options_for_select(HrLeavePeer::GetLeaveType(), 
             $sf_params->get('leave_type') ) );    
        echo input_tag('credits',  $sf_params->get('credits'), 'readonly = "true" size="10"');
    ?>
        <span class="negative">*</span>
        <?php 
        if ($sf_params->get('id') )
        {
            echo ($sf_params->get('no_days')) ? '+ ' . ($sf_params->get('no_days')) : '+ ' . $sf_params->get('consumed');
        } 
        ?>    
    </td>
</tr>

<tr>
    <td class="FORMcell-left FORMlabel" nowrap>Dates Applied</td>
    <td colspan="5" class="FORMcell-right" nowrap>
    <div id="DIVDatesApplied">
        <?php
    		echo textarea_tag('dates',  $sf_params->get('dates'), 'size=50x5'); 
    		echo '<br>';
    		echo '<br>';
    		echo submit_tag('Apply these Dates');
    	?>
    </div>


    </td>
</tr>
<tr>
    <td class="FORMcell-left FORMlabel" nowrap>Calendar</td>
    <td colspan="5" class="FORMcell-right" nowrap>

    <?php
    	$cal = new TkCalendar();
    	echo $cal->LeaveApplyCalendar(date('Y-m-d'));
 	?>
    </td>
</tr>

<tr>
    <td class="FORMcell-left FORMlabel" nowrap>Date of Request</td>
    <td colspan="5" class="FORMcell-right" nowrap>
    <?php    
        echo HTMLForm::Error('date_filed');
        echo HTMLForm::DrawDateInput('date_filed', $sf_params->get('date_filed', date('Y-m-d')), XIDX::next(), XIDX::next(), ' size="12" '); ?>
    <span class="negative">*</span>        
    </td>
</tr>
<tr>
    <td class="FORMcell-left FORMlabel" nowrap>Half Day Applied For:</td>
    <td colspan="5" class="FORMcell-right" nowrap>
    <?php
    	$hDay = array('none'=>'- None -', 'Am Leave'=>'- Am Leave -', 'Pm Leave'=>'- Pm Leave -', 'Ev Leave'=>'Ev Leave');
        echo HTMLForm::Error('half_day'); 
        //echo select_tag('half_day', $hDay, );
        echo select_tag('half_day', 
             options_for_select($hDay, 
             $sf_params->get('half_day') ) );    
        
    ?>
    <span class="negative">*</span>            
    </td>
</tr>

<tr>
    <td class="FORMcell-left FORMlabel" nowrap>Reason</td>
    <td colspan="3" class="FORMcell-right" nowrap>
    <?php
        echo HTMLForm::Error('reason'); 
        echo textarea_tag('reason_leave',  $sf_params->get('reason_leave'), 'size=50x5'); 
    ?>
    <span class="negative">*</span>    
    </td>
</tr>
<tr>
<tr>
    <td class="FORMcell-left FORMlabel" nowrap>No of Days / Available</td>
    <td colspan="5" class="FORMcell-right" nowrap>
    <?php
        //echo HTMLForm::Error('no_days');         
        //echo input_tag('no_days',  $sf_params->get('no_days'), 'size="10"'); 
        echo '<span class="tk-style11"><b>'.$sf_params->get('no_days') . '</b> / '. $sf_params->get('credits') . '</span>';
    ?>    
    </td>
</tr>
<tr>
    <td class="FORMcell-left FORMlabel" nowrap></td>
    <td class="FORMcell-right" nowrap>
    <input type="submit" name="save" value=" Save Info " class="submit-button">
    </td>
</tr>
</table>
</form>
<div class="tk-style53 alignCenter">
	<h2>LEAVE CREDITS</h2>
</div>
<div id="divLeaveCredits">
choose Employee First
</div>

</td>
<td width="100" class="at">  

</td>
</tr>
</table>
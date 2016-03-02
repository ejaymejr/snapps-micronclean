<?php sfConfig::set('app_page_heading', 'Leave Request Form'); ?>
<?php use_helper('Validation', 'Javascript') ?>
<?php //sfConfig::set('app_page_heading', 'Leave Request Form'); ?>



<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="100" class="at">
<?php 

    $wtmp = $cal->getWrkTemplate();
    if (count($wtmp['date']) > 100 ) {
        echo $cal->WrkTmpCalendar(sfConfig::get('fiscal_year'). '-01-01');     
        echo $cal->WrkTmpCalendar(sfConfig::get('fiscal_year'). '-02-01');
        echo $cal->WrkTmpCalendar(sfConfig::get('fiscal_year'). '-03-01');
        echo $cal->WrkTmpCalendar(sfConfig::get('fiscal_year'). '-04-01');
        echo $cal->WrkTmpCalendar(sfConfig::get('fiscal_year'). '-05-01');
        echo $cal->WrkTmpCalendar(sfConfig::get('fiscal_year'). '-06-01');
    }else{
        echo $cal->MonthlyCalendar(sfConfig::get('fiscal_year'). '-01-01');    
        echo $cal->MonthlyCalendar(sfConfig::get('fiscal_year'). '-02-01');
        echo $cal->MonthlyCalendar(sfConfig::get('fiscal_year'). '-03-01');
        echo $cal->MonthlyCalendar(sfConfig::get('fiscal_year'). '-04-01');
        echo $cal->MonthlyCalendar(sfConfig::get('fiscal_year'). '-05-01');
        echo $cal->MonthlyCalendar(sfConfig::get('fiscal_year'). '-06-01');    
    }
  ?>
</td>
<td width="100%" align="center" valign="top">
<form name="FORMadd" id="IDFORMadd" action="<?php echo url_for('leave/leaveApplyAdd'). '?id=' . $sf_params->get('id');?>" method="post">
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
    <td class="FORMcell-left FORMlabel" nowrap>Contact Info</td>
    <td colspan="5" class="FORMcell-right" nowrap>
    <?php
        echo HTMLForm::Error('contact_no'); 
        echo input_tag('contact_no',  $sf_params->get('contact_no'), 'size="30"'); ?>
    </td>
</tr>
<tr>
    <td class="FORMcell-left FORMlabel" nowrap>I/C Number</td>
    <td colspan="5" class="FORMcell-right" nowrap>
    <?php
        echo HTMLForm::Error('ic_no'); 
        echo input_tag('ic_no',  $sf_params->get('ic_no'), 'size="20"'); ?>
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
    <td class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
    <td class="FORMcell-right FORMlabel" colspan="3"><b>Date Inclusive</b></td>
</tr>
<tr>    
    <td class="FORMcell-left FORMlabel">From</td>
    <td class="FORMcell-right" nowrap width="10%">
    <?php    
        echo HTMLForm::Error('inclusive_datefrom');
        echo HTMLForm::DrawDateInput('inclusive_datefrom', $sf_params->get('inclusive_datefrom', date('Y-m-d')), XIDX::next(), XIDX::next(), ' size="10" '); ?>
        </td>
    <td class="FORMcell-left FORMlabel" width="70" nowrap>To</td>
    <td class="FORMcell-right" nowrap>
    <?php    
        echo HTMLForm::Error('inclusive_dateto');
        echo HTMLForm::DrawDateInput('inclusive_dateto', $sf_params->get('inclusive_dateto', date('Y-m-d')), XIDX::next(), XIDX::next(), ' size="10" '); 
        ?>
    <span class="negative">*</span>        
    </td>
</tr>
<tr>
    <td class="FORMcell-left FORMlabel" nowrap>Fiscal Year</td>
    <td colspan="5" class="FORMcell-right" nowrap>
    <?php
        echo $sf_params->get('fiscal_year'); ?>
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
            echo input_tag('consumed', $sf_params->get('consumed'));
        } 
        ?>    
        &nbsp;&nbsp;&nbsp;
   		<input type="submit" name="validate" value=" Validate Leave " class="submit-button">
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
<?php
        if (count($wtmp['date']) > 100 ) {
        echo $cal->WrkTmpCalendar(sfConfig::get('fiscal_year'). '-07-01');     
        echo $cal->WrkTmpCalendar(sfConfig::get('fiscal_year'). '-08-01');
        echo $cal->WrkTmpCalendar(sfConfig::get('fiscal_year'). '-09-01');
        echo $cal->WrkTmpCalendar(sfConfig::get('fiscal_year'). '-10-01');
        echo $cal->WrkTmpCalendar(sfConfig::get('fiscal_year'). '-11-01');
        echo $cal->WrkTmpCalendar(sfConfig::get('fiscal_year'). '-12-01');
     }else{
        echo $cal->MonthlyCalendar(sfConfig::get('fiscal_year'). '-07-01');    
        echo $cal->MonthlyCalendar(sfConfig::get('fiscal_year'). '-08-01');
        echo $cal->MonthlyCalendar(sfConfig::get('fiscal_year'). '-09-01');
        echo $cal->MonthlyCalendar(sfConfig::get('fiscal_year'). '-10-01');
        echo $cal->MonthlyCalendar(sfConfig::get('fiscal_year'). '-11-01');
        echo $cal->MonthlyCalendar(sfConfig::get('fiscal_year'). '-12-01');    
    }
?>          

</td>
</tr>
</table>
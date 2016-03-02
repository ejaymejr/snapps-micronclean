<?php sfConfig::set('app_page_heading', 'Leave Request Form'); ?>
<?php use_helper('Validation', 'Javascript', 'PagerNavigation') ?>
<?php 
	$companyList = HrCompanyPeer::GetCompanyList();
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="100" class="at">
</td>
<td width="100%" align="center" valign="top">
<form name="FORMadd" autocomplete="off" id="IDFORMadd" action="<?php echo url_for('leave/leaveCalendar'). '?id=' . $sf_params->get('id');?>" method="post">
<table width="100%" class="FORMtable" border="0" cellpadding="4" cellspacing="0">
<tr>
    <td width="150px" class="FORMcell-left FORMlabel" nowrap>Company</td>
    <td colspan="5" class="FORMcell-right" nowrap>
    <?php
	    $jsCMonth = "'cmonth=' + \$F('cmonth')    "
	    		." + '&year=' + \$F('year')    "
	    		." + '&company=' + \$F('company') "
    				;
    	$ajaxCMonth = array(
    			'url'		=>'leave/ajaxMonthlyCalendar',
    			'with'		=> $jsCMonth,
    			'update' 	=> 'divCalendarDisplay',
    			'script'    => true,
    			'loading'   => 'stop_remote_pager();',
    			'before'   	=> 'showLoader();',
    			'complete'  => 'hideLoader();formatFormStyle();',
    			'type'      => 'synchronous',
    	);
		echo select_tag('company',
			options_for_select($companyList, $sf_params->get('company') ),
			array('onchange'=>remote_function($ajaxCMonth) . ';return false;')
);
  	?>
    <span class="negative">* &nbsp;&nbsp; </span>
    </td>
</tr>
<tr>
    <td class="FORMcell-left FORMlabel" nowrap>Month</td>
    <td colspan="5" class="FORMcell-right" nowrap>
		<?php 

	
			echo select_tag('cmonth', 
				options_for_select(sfConfig::get('monthlyCalendar'), $sf_params->get('cmonth') ), 
				array('onchange'=>remote_function($ajaxCMonth) . ';return false;') 
				);
			// var_dump(sfConfig::get('cmonth'));  
		?>
		&nbsp;&nbsp;&nbsp;
		<?php
	   		 echo select_tag('year', 
	             options_for_select(HrFiscalYearPeer::GetFiscalYearListYK(), 
	             $sf_params->get('year') ) );
  		?>
		<?php 
			echo '&nbsp;&nbsp;' . submit_tag('Show Leave(s)');
		?>
    </td>
</tr>

</table>
<div id="divCalendarDisplay">
<?php  
	include_partial('leavecalendarlist', array('cdate'=>$sf_params->get('cmonth')) );
?>
</div>
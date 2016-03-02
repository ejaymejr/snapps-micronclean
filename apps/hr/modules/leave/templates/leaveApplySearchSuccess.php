<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2 FORMlabel">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'New Leave Application',    url_for('leave/leaveApplyAdd')); 
             
	  
?>
</div>
<form name="FORMadd" id="IDFORMadd" action="<?php echo url_for('leave/leaveApplySearch');?>" method="post">
<table width="100%" class="FORMtable tk-blue" border="0" cellpadding="4" cellspacing="0">
  <tr>
    <td height="30" class="FORMcell-Center FORMlabel tk-style25">Show this month Only   :
    <?php
      if (! $sf_params->get('cMonth')){
          $sf_params->set('cMonth', $sf_params->get('cDate'));
          $sf_params->set('cYear', DateUtils::DUFormat('Y', $sf_params->get('cDate')) );
          $sf_params->set('cMon', $sf_params->get('cDate') );
      }
      $optCal = array_merge(sfConfig::get('monthlyCalendar'), array('ALL'=>'ALL'));
	  $xyear = HrFiscalYearPeer::GetFiscalYearList1();// array('2008'=>'2008', '2009'=>'2009', '2010'=>'2010', '2011'=>'2011');	  
	  //$xyear = array('2008'=>'2008', '2009'=>'2009', '2010'=>'2010', '2011'=>'2011', '2012'=>'2012');
	  echo select_tag('cMonth', 
             options_for_select($optCal, 
             $sf_params->get('cMonth') ) );    
      echo '&nbsp;&nbsp;';
	  echo select_tag('cYear', 
             options_for_select($xyear, 
             $sf_params->get('cYear') ) );
	  echo '&nbsp;&nbsp;';  
	  echo input_tag('cMon', $sf_params->get('cMon'), 'id=cMon type=hidden');           
    ?>
    <input type="submit" name="filter" value=" Show Specified Month " class="submit-button">    
    </td>
 </tr>
</table>

    
<?php echo javascript_tag("

function onMonthChanged(ev, args) {
    obj = YAHOO.util.Event.getTarget(ev);
    month = trim(obj.options[obj.selectedIndex].value);
    document.getElementById('cMon').value = month;
}

YAHOO.util.Event.addListener('cMonth', 'change', onMonthChanged);

"); 
		

//$nMonth = $sf_params->get('cDate')? $sf_params->get('cDate') : $sf_params->get('cMonth');
//var_dump($sf_params->get('cMon'));
if ($sf_params->get('cMon')!= 'ALL'){
    $nMonth = DateUtils::DUFormat('-m-d', $sf_params->get('cMon'));
}else{
    $nMonth = $sf_params->get('cYear').'-01-01';
}
    
$cDate = ($sf_params->get('cMonth') == 'ALL')? 'ALL' : $sf_params->get('cYear'). $nMonth;
$cDate = date('Y-m-d');
$gridVars = array(
    'searchTemplate' => 'applyleave_list_header_search',
    'pagerTemplate' => 'applyleave_pager_list',
    'baseURL' => $sf_request->getModuleAction().'?cDate=' . $sf_params->get('cMon') , 
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_applyleave_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);


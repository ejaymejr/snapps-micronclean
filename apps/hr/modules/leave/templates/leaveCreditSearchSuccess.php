<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php 
echo HTMLForm::DrawButton('pushbutton1', 'button1', 'ReCompute Available Credits', url_for('leave/leaveCreditProcessAll')); 
echo HTMLForm::DrawButton('pushbutton2', 'button1', 'Preview Annual Leave Balance', url_for('leave/annualLeaveListing'));
?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'leavecredit_list_header_search',
    'pagerTemplate' => 'leavecredit_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_leavecredits_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
?>
<div id="DIVLeaveSearch">
</div>
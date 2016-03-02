<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Customer Complaint', url_for('custComplaint/complaintAdd')); ?>
<?php echo HTMLForm::DrawButton('pushbutton2', 'button1', 'Show Complain Statistics', url_for('custComplaint/complaintChart')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'com_list_header_search',
    'pagerTemplate'  => 'com_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_com_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add InScan', url_for('custComplaint/complaintAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'inscan_list_header_search',
    'pagerTemplate'  => 'inscan_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_in_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
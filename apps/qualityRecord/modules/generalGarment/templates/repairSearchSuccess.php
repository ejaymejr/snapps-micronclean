<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Repair', url_for('generalGarment/outscanAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'repair_list_header_search',
    'pagerTemplate'  => 'repair_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_repair_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
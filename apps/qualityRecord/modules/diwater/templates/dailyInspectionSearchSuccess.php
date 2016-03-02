w<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Inspection Info', url_for('diwater/dailyInspectionAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'dailyinspection_list_header_search',
    'pagerTemplate'  => 'dailyinspection_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_dailyinspection_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
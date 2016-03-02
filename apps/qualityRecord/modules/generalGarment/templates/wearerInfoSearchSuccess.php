<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add OutScan', url_for('generalGarment/outscanAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'wear_list_header_search',
    'pagerTemplate'  => 'wear_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_wear_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
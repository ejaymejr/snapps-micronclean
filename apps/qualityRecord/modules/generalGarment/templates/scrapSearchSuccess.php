<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Scrap Garment', url_for('generalGarment/outscanAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'scrap_list_header_search',
    'pagerTemplate'  => 'scrap_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_scrap_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
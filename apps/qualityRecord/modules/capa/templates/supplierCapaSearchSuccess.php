<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Supplier CA/PA Entry', url_for('capa/supplierCapaAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'suppliercapa_list_header_search',
    'pagerTemplate'  => 'suppliercapa_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_scapa_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
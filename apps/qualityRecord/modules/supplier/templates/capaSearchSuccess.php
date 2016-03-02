<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add CA/PA Entry', url_for('capa/capaAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'sea_list_header_search',
    'pagerTemplate'  => 'sea_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_sea_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
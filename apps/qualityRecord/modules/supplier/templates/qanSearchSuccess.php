<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add CA/PA Entry', url_for('capa/qanAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'qan_list_header_search',
    'pagerTemplate'  => 'qan_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_qan_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
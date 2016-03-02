<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Contract Info', url_for('contractMgt/contractAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'con_list_header_search',
    'pagerTemplate'  => 'con_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_con_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
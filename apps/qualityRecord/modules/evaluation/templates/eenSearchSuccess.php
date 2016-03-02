<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Engineering Evaluation Notice', url_for('evaluation/eenAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'een_list_header_search',
    'pagerTemplate'  => 'een_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_een_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
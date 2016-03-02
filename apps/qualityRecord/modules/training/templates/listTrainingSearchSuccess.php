<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add External Training', url_for('training/trainingAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'trn_list_header_search',
    'pagerTemplate'  => 'trn_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_trn_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
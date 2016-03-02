<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Acro/Nano Training', url_for('training/acroNanoTrainingAdd')); ?>
<?php //echo HTMLForm::DrawButton('pushbutton2', 'button1', 'Repair Names', url_for('training/acroNanoRepairNames')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'acrnan_list_header_search',
    'pagerTemplate'  => 'acrnan_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_acrnan_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
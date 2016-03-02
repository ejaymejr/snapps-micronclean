<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Employee External Training', url_for('training/empExternalTrainingAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'ext_list_header_search',
    'pagerTemplate'  => 'ext_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_ext_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
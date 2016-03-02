<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Micronclean Training', url_for('training/mcsTrainingAdd')); ?>
<?php if ($sf_user->getUsername() == 'emmanuel') echo HTMLForm::DrawButton('pushbutton2', 'button1', 'Populate Data', url_for('training/populateMcsData')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'mcs_list_header_search',
    'pagerTemplate'  => 'mcs_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_mcs_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
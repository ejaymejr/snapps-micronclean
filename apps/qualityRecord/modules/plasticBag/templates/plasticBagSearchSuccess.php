<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Plastic Bag Info', url_for('plasticBag/plasticBagAdd')); ?>
<?php echo HTMLForm::DrawButton('pushbutton2', 'button1', 'Plastic Bag Graph', url_for('plasticBag/plasticBagGraph')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'pbag_list_header_search',
    'pagerTemplate'  => 'pbag_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_pbag_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
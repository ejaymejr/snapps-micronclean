<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Internal Audit Info', url_for('mgtReview/reviewAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'mgt_list_header_search',
    'pagerTemplate'  => 'mgt_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_mgt_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Action Review', url_for('custComplaint/actionReviewAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'act_list_header_search',
    'pagerTemplate'  => 'act_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_act_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
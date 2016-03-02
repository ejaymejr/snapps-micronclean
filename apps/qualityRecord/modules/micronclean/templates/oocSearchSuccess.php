<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Out-Of-Control Data', url_for('micronclean/oocAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'ooc_list_header_search',
    'pagerTemplate'  => 'ooc_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_ooc_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
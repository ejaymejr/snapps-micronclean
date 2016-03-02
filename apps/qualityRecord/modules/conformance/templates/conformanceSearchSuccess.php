<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Non-Conformance Info', url_for('conformance/conformanceAdd')); ?>
<?php echo HTMLForm::DrawButton('pushbutton2', 'button1', 'Non-Conformance Graph', url_for('conformance/nonConformanceGraph')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'conf_list_header_search',
    'pagerTemplate'  => 'conf_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_conf_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Internal Audit Info', url_for('internalAudit/auditAdd')); ?>
<?php echo HTMLForm::DrawButton('pushbutton2', 'button1', 'Generate Audit Schedule', url_for('internalAudit/auditSchedule')); ?>
<?php echo HTMLForm::DrawButton('pushbutton3', 'button1', 'Audit Checklist', url_for('internalAudit/auditCheckList')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'aud_list_header_search',
    'pagerTemplate'  => 'aud_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_aud_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
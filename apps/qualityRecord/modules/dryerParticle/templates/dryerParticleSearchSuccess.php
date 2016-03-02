<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Dryer Particle Count', url_for('dryerParticle/dryerParticleAdd')); ?>
<?php echo HTMLForm::DrawButton('pushbutton2', 'button1', 'Dryer Particle Graph', url_for('dryerParticle/dryerParticleGraph')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'dp_list_header_search',
    'pagerTemplate'  => 'dp_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_dp_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
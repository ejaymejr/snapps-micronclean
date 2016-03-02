<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2"><?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add IC', url_for('micronclean/icAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'ic_list_header_search',
    'pagerTemplate'  => 'ic_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_ic_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
?>
<div class="grid-toolbar-right alignRight radioButtonText"><?php 
echo '<b>';
echo 'Record Sheet:</b> #015';
echo '<br>';
echo '<b>ISO Refs:</b> '
.' '. link_to('WI259rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI259rev001_20040601_IC_NVR_FTIR_garments.pdf');
?></div>

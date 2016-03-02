<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2"><?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Surface Resistivity', url_for('micronclean/surfaceAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'surface_list_header_search',
    'pagerTemplate'  => 'surface_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_sur_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
?>
<div class="grid-toolbar-right alignRight radioButtonText"><?php 
echo '<b>';
echo 'Record Sheet:</b> #140';
echo '<br>';
echo '<b>ISO Refs:</b>'
.' '. link_to('WI043rev002', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI043rev002_20020205_esd_test_for_garments.pdf');

?></div>

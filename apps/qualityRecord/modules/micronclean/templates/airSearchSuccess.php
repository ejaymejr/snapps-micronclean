<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Air Data', url_for('micronclean/airAdd')); ?>
<?php echo HTMLForm::DrawButton('pushbutton2', 'button1', 'Air Graph', url_for('micronclean/airGraph')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'air_list_header_search',
    'pagerTemplate'  => 'air_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_air_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
?>
<div class="grid-toolbar-right alignRight radioButtonText"><?php 
echo '<b>';
echo 'Record Sheet:</b> #006';
echo '<br>';
echo '<b>ISO Refs:</b>'
.' '. link_to('WI030rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI030rev001_19980112_cleanroom_air_monitoring_procedure.pdf')
.' ,  '. link_to('WI042rev002', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI042rev002_19990205_housekeeping_procedure.pdf')
.' ,  '. link_to('WI250rev005', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI250rev005_20080718_statistical_process_calculation.pdf');
?></div>

<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2"><?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Cleanroom Bacteria Data', url_for('micronclean/airBacteriaAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'abc_list_header_search',
    'pagerTemplate'  => 'abc_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_abc_grid_headers')
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

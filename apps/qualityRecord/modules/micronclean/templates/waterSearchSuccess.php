<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2"><?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Water Particle', url_for('micronclean/waterAdd')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'water_list_header_search',
    'pagerTemplate'  => 'water_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_water_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
?>
<div class="grid-toolbar-right alignRight radioButtonText"><?php 
echo '<b>';
echo 'Record Sheet:</b> #004';
echo '<br>';
echo '<b>ISO Refs:</b> '
. link_to('WI028rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI028rev001_19980112_microscopic_analysis_of_garments.pdf')
.' ,  '. link_to('WI106rev005', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI106rev005_20060901_DI_water_spec.pdf');

?></div>

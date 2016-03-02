<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">
<?php 
echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Bacteria Test', url_for('micronclean/bacteriaTestAdd'));
if ($sf_user->getUsername() == 'emmanuel'): 
	echo HTMLForm::DrawButton('pushbutton2', 'button1', 'Populate Air Particle Count Nanoclean G', url_for('micronclean/bacteriaTestPopulate1'));
endif;
?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'bacteria_list_header_search',
    'pagerTemplate'  => 'bacteria_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_bacteria_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
?>
<div class="grid-toolbar-right alignRight radioButtonText"><?php 
//echo '<b>';
//echo 'Record Sheet:</b> #004';
//echo '<br>';
//echo '<b>ISO Refs:</b> '
//. link_to('WI028rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI028rev001_19980112_microscopic_analysis_of_garments.pdf')
//.' ,  '. link_to('WI106rev005', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI106rev005_20060901_DI_water_spec.pdf');

?></div>

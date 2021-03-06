<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<div class="grid-toolbar-2">                       
<?php echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add Helmke Drum', url_for('micronclean/helmkeAdd')); ?>
<?php echo HTMLForm::DrawButton('pushbutton2', 'button1', 'SPC GRAPH', url_for('micronclean/spcGraph')); ?>
<?php echo HTMLForm::DrawButton('pushbutton3', 'button1', 'Add Out-Of-Control Request', url_for('micronclean/oocSearch')); ?>
</div>
<?php
$gridVars = array(
    'searchTemplate' => 'helmke_list_header_search',
    'pagerTemplate'  => 'helmke_pager_list',
    'baseURL' => $sf_request->getModuleAction(),
    'pager' => $pager,
    'searchContainerID' => XIDX::next(),
    'headers' => sfConfig::get('app_helmke_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
?>
<div class="grid-toolbar-right alignRight radioButtonText" >
<?php 
    echo '<b>'; 
    echo 'Record Sheet:</b> #008';
    echo '<br>';
    echo '<b>ISO Refs:</b>'   
    .' '. link_to('WI020Brev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI020Brev001_20010420_HK_specification_of_certain_customers.pdf')
    .' ,  '. link_to('WI020rev003', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI020rev003_20050721_helmke_drum_test.pdf')
    .' ,  '. link_to('WI105rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI105rev001_19990210_helmke_drum_training.pdf')
    .' ,  '. link_to('WI250rev005', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI250rev005_20080718_statistical_process_calculation.pdf');
    
    
?>
</div>
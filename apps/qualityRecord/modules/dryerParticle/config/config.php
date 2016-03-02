<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>DRYER PARTICLE COUNT</h2></span>');

sfConfig::set('app_submenu_items', 
    array(
        array('Search',           'dryerParticle/dryerParticleSearch',   'dryerParticle', 'dryerParticleSearch' ),
#        array('Action Review Form',            'custComplaint/actionReviewSearch',   'custComplaint', 'actionReviewSearch' ),
#        array('Survey',              'custComplaint/SurveySearch',   'custComplaint', 'SurveySearch' ),
#        array('Generate PDF',     'capa/qanPDF',   'capa', 'qanPDF' ),

    ));
    
$dpc = new DataGridColumnHeaders();
$dpc->addHeader(new DataGridColumnHeader('no',       	'No',             false, false,                                 20, 'alignCenter alignMiddle', 'nowrap'));
$dpc->addHeader(new DataGridColumnHeader('date_time',	'Date Time',    true, DryerParticleCountPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$dpc->addHeader(new DataGridColumnHeader('dryer_no', 'Dryer No',       true, DryerParticleCountPeer::DRYER_NO,     100, 'alignCenter alignMiddle', 'nowrap'));
$dpc->addHeader(new DataGridColumnHeader('particle_count',  	'Particle Count',       true, DryerParticleCountPeer::PARTICLE_COUNT,     80, 'alignCenter alignMiddle', 'nowrap'));
$dpc->addHeader(new DataGridColumnHeader('name',  'Name',       true, DryerParticleCountPeer::NAME,     100, 'alignCenter alignMiddle', 'nowrap'));
$dpc->addHeader(new DataGridColumnHeader('temperature',  	'temperature',       true, DryerParticleCountPeer::TEMPERATURE,     100, 'alignCenter alignMiddle', 'nowrap'));
$dpc->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date'));
$dpc->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_dp_grid_headers', $dpc);



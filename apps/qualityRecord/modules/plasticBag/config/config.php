<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>PLASTIC BAG PARTICLE</h2></span>');

sfConfig::set('app_submenu_items', 
    array(
        array('Search',           'plasticBag/plasticBagSearch',   'plasticBag', 'plasticBagSearch' ),
#        array('Action Review Form',            'custComplaint/actionReviewSearch',   'custComplaint', 'actionReviewSearch' ),
#        array('Survey',              'custComplaint/SurveySearch',   'custComplaint', 'SurveySearch' ),
#        array('Generate PDF',     'capa/qanPDF',   'capa', 'qanPDF' ),

    ));
    
$conf = new DataGridColumnHeaders();
$conf->addHeader(new DataGridColumnHeader('no',       	'No',             false, false,                                 20, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('date_time',	'Date',    true, PlasticBagPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('vendor',  	'Vendor',       true, PlasticBagPeer::VENDOR,     80, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('type_of_plastic', 'Type Of Plastic',       true, PlasticBagPeer::TYPE_OF_PLASTIC,     150, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('by_who',  	'By Who',       true, PlasticBagPeer::BY_WHO,     80, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('surface_area',  'Surface Area',       true, PlasticBagPeer::SURFACE_AREA,     100, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('vol_in_ml',  	'Volume in ML',       true, PlasticBagPeer::VOL_IN_ML,     100, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('status',  	'Status',       true, PlasticBagPeer::STATUS,     80, 'alignCenter alignMiddle', 'nowrap'));
$conf->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$conf->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_pbag_grid_headers', $conf);



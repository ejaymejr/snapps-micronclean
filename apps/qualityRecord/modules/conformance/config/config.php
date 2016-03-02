<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>NON-CONFORMANCE</h2></span>');

sfConfig::set('app_submenu_items', 
    array(
        array('Search',           'conformance/conformanceSearch',   'conformance', 'conformanceSearch' ),
        array('Handling Cost Summary',           'conformance/nonConformanceHandlingCostSummary',   'conformance', 'nonConformanceHandlingCostSummary' ),
#        array('Action Review Form',            'custComplaint/actionReviewSearch',   'custComplaint', 'actionReviewSearch' ),
#        array('Survey',              'custComplaint/SurveySearch',   'custComplaint', 'SurveySearch' ),
#        array('Generate PDF',     'capa/qanPDF',   'capa', 'qanPDF' ),

    ));
    
$conf = new DataGridColumnHeaders();
$conf->addHeader(new DataGridColumnHeader('no',       	'No',             false, false,                                 20, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('date',	'Date',    true, NonConformancePartPeer::DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('customer', 'Customer',       true, NonConformancePartPeer::CUSTOMER,     100, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('company',  	'Company',       true, NonConformancePartPeer::COMPANY,     80, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('product_type',  'Product Type',       true, NonConformancePartPeer::PRODUCT_TYPE,     100, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('quantity',  	'Quantity',       true, NonConformancePartPeer::QUANTITY,     80, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('cost',  	'Cost',       true, NonConformancePartPeer::COST,     80, 'alignCenter alignMiddle', 'nowrap'));
$conf->addHeader(new DataGridColumnHeader('vpc',  	'Vpc(Cassette Only)',       true, NonConformancePartPeer::VPC,     80, 'alignCenter alignMiddle', 'nowrap'));
$conf->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date'));
$conf->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_conf_grid_headers', $conf);



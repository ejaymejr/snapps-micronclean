<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>CORRECTIVE ACTION / PREVENTIVE ACTION</h2></span>');

sfConfig::set('app_submenu_items', 
    array(
#        array('Search',           'capa/qanSearch',   'capa', 'qanSearch' ),
        array('CAPA',     'capa/capaSearch',   'capa', 'seagateCapaSearch' ),
        array('QAN',      'capa/qanSearch',    'capa', 'qanSearch' ),
#        array('Generate PDF',     'capa/qanPDF',   'capa', 'qanPDF' ),

    ));
    
$qan = new DataGridColumnHeaders();
$qan->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$qan->addHeader(new DataGridColumnHeader('',  			'Download',           true, false,   80, 'alignCenter alignMiddle', 'nowrap'));
$qan->addHeader(new DataGridColumnHeader('initiated_date',  	'Date',           true, IsoCapaPeer::INITIATED_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$qan->addHeader(new DataGridColumnHeader('qan_no',  	'Alert Notice #',           true, IsoCapaPeer::QAN_NO,   20, 'alignCenter alignMiddle', 'nowrap'));
$qan->addHeader(new DataGridColumnHeader('',  			'Problem Description',         true, false,   80, 'alignCenter alignMiddle', 'nowrap'));
$qan->addHeader(new DataGridColumnHeader('initiator',  	'Initiator',         true, IsoCapaPeer::INITIATOR,   80, 'alignCenter alignMiddle', 'nowrap'));
$qan->addHeader(new DataGridColumnHeader('customer', 	'Customer',       true, IsoCapaPeer::CUSTOMER,       80, 'alignCenter alignMiddle', 'nowrap'));
$qan->addHeader(new DataGridColumnHeader('closed_out_date', 	'Date Completed',       true, IsoCapaPeer::CLOSED_OUT_DATE,       80, 'alignCenter alignMiddle', 'nowrap'));
$qan->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'initiated_date'));
$qan->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_qan_grid_headers', $qan);


$sea = new DataGridColumnHeaders();
$sea->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$sea->addHeader(new DataGridColumnHeader('report_no',       'Report #',           true, SeagateCaPaReportPeer::REPORT_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$sea->addHeader(new DataGridColumnHeader('title',  	'Title',           true, SeagateCaPaReportPeer::TITLE,   100, 'alignCenter alignMiddle', 'nowrap'));
$sea->addHeader(new DataGridColumnHeader('reported_by',  	'Reported',           true, SeagateCaPaReportPeer::REPORTED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$sea->addHeader(new DataGridColumnHeader('issue_date',  	'Issue',           true, SeagateCaPaReportPeer::ISSUE_DATE,   20, 'alignCenter alignMiddle', 'nowrap'));
$sea->addHeader(new DataGridColumnHeader('response_date',  			'Response',         true, SeagateCaPaReportPeer::RESPONSE_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$sea->addHeader(new DataGridColumnHeader('car_followup_required', 	'Follow Up',       true, SeagateCaPaReportPeer::CAR_FOLLOWUP_REQUIRED,       80, 'alignCenter alignMiddle', 'nowrap'));
$sea->addHeader(new DataGridColumnHeader('car_followup_date', 	'FollowUp Date',       true, SeagateCaPaReportPeer::CAR_FOLLOWUP_DATE,       80, 'alignCenter alignMiddle', 'nowrap'));
$sea->addHeader(new DataGridColumnHeader('car_ca_status', 	'Status',       true, SeagateCaPaReportPeer::CAR_CA_STATUS,       80, 'alignCenter alignMiddle', 'nowrap'));
$sea->addHeader(new DataGridColumnHeader('car_plan_effective', 	'Is Effective',       true, SeagateCaPaReportPeer::CAR_PLAN_EFFECTIVE,       80, 'alignCenter alignMiddle', 'nowrap'));
$sea->addHeader(new DataGridColumnHeader('car_verified_by', 	'Verified',       true, SeagateCaPaReportPeer::CAR_VERIFIED_BY,       80, 'alignCenter alignMiddle', 'nowrap'));
$sea->addHeader(new DataGridColumnHeader('car_closure_date', 	'Closed',       true, SeagateCaPaReportPeer::CAR_CLOSURE_DATE,       80, 'alignCenter alignMiddle', 'nowrap'));
$sea->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'issue_date'));
$sea->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_sea_grid_headers', $sea);
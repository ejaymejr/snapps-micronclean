<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>EVALUATION REPORT</h2></span>');

sfConfig::set('app_submenu_items', 
    array(
        array('EEN Search',           'evaluation/eenSearch',   'evaluation', 'eenSearch' ),
#        array('Generate PDF',     'capa/qanPDF',   'capa', 'qanPDF' ),

    ));
    
$een = new DataGridColumnHeaders();
$een->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$een->addHeader(new DataGridColumnHeader('',  			'Download',           true, false,   80, 'alignCenter alignMiddle', 'nowrap'));
$een->addHeader(new DataGridColumnHeader('initiated_date',  	'Date',           true, EnggEvalNoticePeer::INITIATED_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$een->addHeader(new DataGridColumnHeader('qan_no',  	'Alert Notice #',           true, EnggEvalNoticePeer::EEN_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$een->addHeader(new DataGridColumnHeader('',  			'Problem Description',         true, false,   300, 'alignCenter alignMiddle', 'nowrap'));
$een->addHeader(new DataGridColumnHeader('initiator',  	'Initiator',         true, EnggEvalNoticePeer::INITIATOR,   150, 'alignCenter alignMiddle', 'nowrap'));
$een->addHeader(new DataGridColumnHeader('customer', 	'Customer',       true, EnggEvalNoticePeer::CUSTOMER,       150, 'alignCenter alignMiddle', 'nowrap'));
$een->addHeader(new DataGridColumnHeader('closed_out_date', 	'Date Completed',       true, EnggEvalNoticePeer::CLOSED_OUT_DATE,       150, 'alignCenter alignMiddle', 'nowrap'));
$een->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'initiated_date'));
$een->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_een_grid_headers', $een);
    
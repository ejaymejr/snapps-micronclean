<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>REPAIR REPORT</h2></span>');

sfConfig::set('app_submenu_items', 
    array(
        array('Search',           'repairReport/repairReportSearch',   'repairReport', 'repairReportSearch' ),
#        array('Generate PDF',     'capa/qanPDF',   'capa', 'qanPDF' ),

    ));
    
$rrs = new DataGridColumnHeaders();
$rrs->addHeader(new DataGridColumnHeader('no',       	'No',             false, false,                                 20, 'alignCenter alignMiddle', 'nowrap'));
$rrs->addHeader(new DataGridColumnHeader('repair_date',	'Repair Date',    true, RepairReportSummaryPeer::REPAIR_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$rrs->addHeader(new DataGridColumnHeader('customer',  	'Customer',       true, RepairReportSummaryPeer::CUSTOMER,     150, 'alignCenter alignMiddle', 'nowrap'));
$rrs->addHeader(new DataGridColumnHeader('department',  	'Department',       true, RepairReportSummaryPeer::DEPARTMENT,     150, 'alignCenter alignMiddle', 'nowrap'));
$rrs->addHeader(new DataGridColumnHeader('garment_type',  	'Garment Type',        true, RepairReportSummaryPeer::GARMENT_TYPE,  80, 'alignCenter alignMiddle', 'nowrap'));
$rrs->addHeader(new DataGridColumnHeader('repair_type', 'Repair Type',    true, RepairReportSummaryPeer::REPAIR_TYPE,   80, 'alignCenter alignMiddle', 'nowrap'));
$rrs->addHeader(new DataGridColumnHeader('remarks',  	'Remarks',        true, RepairReportSummaryPeer::REMARKS,      150, 'alignCenter alignMiddle', 'nowrap'));
$rrs->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'repair_date'));
$rrs->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_rrs_grid_headers', $rrs);
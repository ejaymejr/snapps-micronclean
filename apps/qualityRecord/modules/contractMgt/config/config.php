<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>CONTRACT MANAGEMENT</h2></span>');

sfConfig::set('app_submenu_items', 
    array(
        array('Search',           'contractMgt/contractSearch',   'contractMgt', 'contractSearch' ),
#        array('Action Review Form',            'custComplaint/actionReviewSearch',   'custComplaint', 'actionReviewSearch' ),
#        array('Survey',              'custComplaint/SurveySearch',   'custComplaint', 'SurveySearch' ),
#        array('Generate PDF',     'capa/qanPDF',   'capa', 'qanPDF' ),

    ));
    
$con = new DataGridColumnHeaders();
$con->addHeader(new DataGridColumnHeader('no',       	'No',             false, false,                                 20, 'alignCenter alignMiddle', 'nowrap'));
$con->addHeader(new DataGridColumnHeader('customer',	'Customer',    true, ContractManagementLogPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
$con->addHeader(new DataGridColumnHeader('contract_no', 'Contract No',       true, ContractManagementLogPeer::CONTRACT_NO,     100, 'alignCenter alignMiddle', 'nowrap'));
$con->addHeader(new DataGridColumnHeader('remarks',  	'Remarks',       true, ContractManagementLogPeer::REMARKS,     450, 'alignCenter alignMiddle', 'nowrap'));
$con->addHeader(new DataGridColumnHeader('start_date',  'Start Date',       true, ContractManagementLogPeer::START_DATE,     50, 'alignCenter alignMiddle', 'nowrap'));
$con->addHeader(new DataGridColumnHeader('end_date',  	'End Date',       true, ContractManagementLogPeer::END_DATE,     50, 'alignCenter alignMiddle', 'nowrap'));
$con->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'start_date'));
$con->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_con_grid_headers', $con);



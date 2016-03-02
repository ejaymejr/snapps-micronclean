<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>CUSTOMER MANAGEMENT</h2></span>');

sfConfig::set('app_submenu_items', 
    array(
        array('Complaint',           'custComplaint/complaintSearch',   'custComplaint', 'complaintSearch' ),
        array('Action Review Form',            'custComplaint/actionReviewSearch',   'custComplaint', 'actionReviewSearch' ),
        #array('Survey',              'custComplaint/surveyAdd',   'custComplaint', 'surveyAdd' ),
#        array('Generate PDF',     'capa/qanPDF',   'capa', 'qanPDF' ),

    ));
    
$com = new DataGridColumnHeaders();
$com->addHeader(new DataGridColumnHeader('no',       	'No',             false, false,                                 20, 'alignCenter alignMiddle', 'nowrap'));
$com->addHeader(new DataGridColumnHeader('complaint_date_time',	'Complaint Date',    true, CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$com->addHeader(new DataGridColumnHeader('company_name',  	'Company Name',       true, CustomerManagementComplaintFormPeer::COMPANY_NAME,     150, 'alignCenter alignMiddle', 'nowrap'));
$com->addHeader(new DataGridColumnHeader('complaint_description',  	'Description',        true, CustomerManagementComplaintFormPeer::COMPLAIN_DESCRIPTION,  400, 'alignCenter alignMiddle', 'nowrap'));
$com->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'complaint_date_time'));
$com->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_com_grid_headers', $com);


$act = new DataGridColumnHeaders();
$act->addHeader(new DataGridColumnHeader('no',      	'No',             false, false,                                 20, 'alignCenter alignMiddle', 'nowrap'));
$act->addHeader(new DataGridColumnHeader('date_time',	'Date',    true, CustomerManagementActionReviewPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$act->addHeader(new DataGridColumnHeader('case_action',  	'Action',       true, CustomerManagementActionReviewPeer::CASE_ACTION,     150, 'alignCenter alignMiddle', 'nowrap'));
$act->addHeader(new DataGridColumnHeader('reviewed_by', 'Reviewed By',        true, CustomerManagementActionReviewPeer::REVIEWED_BY,  100, 'alignCenter alignMiddle', 'nowrap'));
$act->addHeader(new DataGridColumnHeader('review_date', 'Review Date',        true, CustomerManagementActionReviewPeer::REVIEW_DATE,  80, 'alignCenter alignMiddle', 'nowrap'));
$act->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$act->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_act_grid_headers', $act);
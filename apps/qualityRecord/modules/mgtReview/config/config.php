<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>MANAGEMENT REVIEW</h2></span>');

sfConfig::set('app_submenu_items', 
    array(
        array('Review Search',           'mgtReview/reviewSearch',   'mgtReview', 'reviewSearch' ),
#        array('Generate PDF',     'capa/qanPDF',   'capa', 'qanPDF' ),

    ));
    
$mgt = new DataGridColumnHeaders();
$mgt->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$mgt->addHeader(new DataGridColumnHeader('date',  			'Review Date',           true, ManagementReviewPeer::DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$mgt->addHeader(new DataGridColumnHeader('chair_person',  	'Chair Person',           true, ManagementReviewPeer::CHAIR_PERSON,   80, 'alignCenter alignMiddle', 'nowrap'));
$mgt->addHeader(new DataGridColumnHeader('',  	'Venue',         true, ManagementReviewPeer::VENUE,   150, 'alignCenter alignMiddle', 'nowrap'));
$mgt->addHeader(new DataGridColumnHeader('discussion',  	'Discussion',           true, ManagementReviewPeer::DISCUSSION,   80, 'alignCenter alignMiddle', 'nowrap'));
$mgt->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date'));
$mgt->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_mgt_grid_headers', $mgt);
    
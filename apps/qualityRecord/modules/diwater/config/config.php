<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>DI PLANT INSPECTION</h2></span>');

sfConfig::set('app_submenu_items', 
    array(
        array('Search',     'diwater/dailyInspectionSearch',   'diwater', 'dailyInspectionSearch' ),
        array('Trend Chart',     'diwater/dailyInspectionTrend',   'diwater', 'dailyInspectionTrend' ),
//        array('Weekly',     'diwater/weeklyInspectionSearch',   'diwater', 'weeklyInspectionSearch' ),
//        array('Monthly',     'diwater/monthlyInspectionSearch',   'diwater', 'monthlyInspectionSearch' ),
        //array('Human Resource',        'expenses/generalInfo',        'expenses', 'generalInfo' )
    ));

$ir = new DataGridColumnHeaders();
$ir->addHeader(new DataGridColumnHeader('no',       'No',       false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$ir->addHeader(new DataGridColumnHeader('inspection_type',  	'Type',   true, InspectionRecordPeer::INSPECTION_TYPE,   80, 'alignCenter alignMiddle', 'nowrap'));
$ir->addHeader(new DataGridColumnHeader(' ',  	'Specific Date',         true, InspectionRecordPeer::INSPECTION_DATE,   50, 'alignCenter alignMiddle', 'nowrap'));
$ir->addHeader(new DataGridColumnHeader('inspection_date',  	'Date',         true, InspectionRecordPeer::INSPECTION_DATE,   150, 'alignCenter alignMiddle', 'nowrap'));
$ir->addHeader(new DataGridColumnHeader('checked_by', 			'Checked By',       true, InspectionRecordPeer::CHECKED_BY,       150, 'alignCenter alignMiddle', 'nowrap'));
$ir->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'inspection_date'));
$ir->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'Date'));
sfConfig::set('app_dailyinspection_grid_headers', $ir);
<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>GENERAL GARMENT SYSTEM</h2></span>');
sfConfig::set('app_submenu_items', 
    array(
        array('InScan',     'generalGarment/inscanSearch',   'generalGarment', 'inscanSearch' ),
        array('OutScan',    'generalGarment/outscanSearch',   'generalGarment', 'outscanSearch' ),
        array('Wearer',     'generalGarment/wearerInfoSearch',   'generalGarment', 'wearerInfoSearch' ),
        array('Garment',    'generalGarment/garmentInfoSearch',   'generalGarment', 'garmentInfoSearch' ),
        array('Reject',     'generalGarment/rejectSearch',   'generalGarment', 'rejectSearch' ),
        array('Downgrade',  'generalGarment/downgradeSearch',   'generalGarment', 'downgradeSearch' ),
        array('Scrap',      'generalGarment/scrapSearch',   'generalGarment', 'scrapSearch' ),
        array('Repair',     'generalGarment/repairSearch',   'generalGarment', 'repairSearch' ),
        array('Log',        'generalGarment/logSearch',   'generalGarment', 'logSearch' ),
    ));
$in = new DataGridColumnHeaders();
$in->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$in->addHeader(new DataGridColumnHeader('garment_code',       'Garment Code',           true, InscanPeer::GARMENT_CODE,   80, 'alignCenter alignMiddle', 'nowrap'));
$in->addHeader(new DataGridColumnHeader('',       'Description',           true, false,   80, 'alignCenter alignMiddle', 'nowrap'));
$in->addHeader(new DataGridColumnHeader('customer',  	'Customer',           true, InscanPeer::CUSTOMER,   100, 'alignCenter alignMiddle', 'nowrap'));
$in->addHeader(new DataGridColumnHeader('date_time',  	'Date / Time',           true, InscanPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$in->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$in->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_in_grid_headers', $in);

$out = new DataGridColumnHeaders();
$out->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$out->addHeader(new DataGridColumnHeader('garment_code',       'Garment Code',           true, OutscanPeer::GARMENT_CODE,   80, 'alignCenter alignMiddle', 'nowrap'));
$out->addHeader(new DataGridColumnHeader('customer',  	'Customer',           true, OutscanPeer::CUSTOMER,   100, 'alignCenter alignMiddle', 'nowrap'));
$out->addHeader(new DataGridColumnHeader('date_time',  	'Date / Time',           true, OutscanPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$out->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$out->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_out_grid_headers', $out);

$out = new DataGridColumnHeaders();
$out->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$out->addHeader(new DataGridColumnHeader('garment_code',       'Garment Code',           true, WearerInformationPeer::NUMBER,   80, 'alignCenter alignMiddle', 'nowrap'));
$out->addHeader(new DataGridColumnHeader('customer',  	'Customer',           true, OutscanPeer::CUSTOMER,   100, 'alignCenter alignMiddle', 'nowrap'));
$out->addHeader(new DataGridColumnHeader('date_time',  	'Date / Time',           true, OutscanPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$out->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$out->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_out_grid_headers', $out);

//
$wear = new DataGridColumnHeaders();
$wear->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$wear->addHeader(new DataGridColumnHeader('number',  			'Number',           true, WearerInformationPeer::NUMBER,   80, 'alignCenter alignMiddle', 'nowrap'));
$wear->addHeader(new DataGridColumnHeader('name',  	'name',           true, WearerInformationPeer::NAME,   80, 'alignCenter alignMiddle', 'nowrap'));
$wear->addHeader(new DataGridColumnHeader('job_title',  	'job_title',           true, WearerInformationPeer::JOB_TITLE,   20, 'alignCenter alignMiddle', 'nowrap'));
$wear->addHeader(new DataGridColumnHeader('email',  			'email',         true, WearerInformationPeer::EMAIL,   80, 'alignCenter alignMiddle', 'nowrap'));
$wear->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'name'));
$wear->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_wear_grid_headers', $wear);

$ginfo = new DataGridColumnHeaders();
$ginfo->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$ginfo->addHeader(new DataGridColumnHeader('garment_code',       'Garment Code',           true, GarmentInformationPeer::GARMENT_CODE,   80, 'alignCenter alignMiddle', 'nowrap'));
$ginfo->addHeader(new DataGridColumnHeader('type',  	'Type',           true, GarmentInformationPeer::TYPE,   100, 'alignCenter alignMiddle', 'nowrap'));
$ginfo->addHeader(new DataGridColumnHeader('size',  	'Size',           true, GarmentInformationPeer::SIZE,   80, 'alignCenter alignMiddle', 'nowrap'));
$ginfo->addHeader(new DataGridColumnHeader('customer',  	'Customer',           true, GarmentInformationPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
$ginfo->addHeader(new DataGridColumnHeader('number',  	'Number',           true, GarmentInformationPeer::NUMBER,   80, 'alignCenter alignMiddle', 'nowrap'));
$ginfo->addHeader(new DataGridColumnHeader('hanger_no',  	'Hanger #',           true, GarmentInformationPeer::HANGER_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$ginfo->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$ginfo->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_ginfo_grid_headers', $ginfo);

$rej = new DataGridColumnHeaders();
$rej->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$rej->addHeader(new DataGridColumnHeader('reject_date',       'Reject Date',           true, RejectPeer::REJECT_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$rej->addHeader(new DataGridColumnHeader('garment_code',       'Garment Code',           true, RejectPeer::GARMENT_CODE,   80, 'alignCenter alignMiddle', 'nowrap'));
$rej->addHeader(new DataGridColumnHeader('type',  	'Type',           true, RejectPeer::TYPE,   100, 'alignCenter alignMiddle', 'nowrap'));
$rej->addHeader(new DataGridColumnHeader('size',  	'Size',           true, RejectPeer::SIZE,   80, 'alignCenter alignMiddle', 'nowrap'));
$rej->addHeader(new DataGridColumnHeader('color',  	'Color',           true, RejectPeer::SIZE,   80, 'alignCenter alignMiddle', 'nowrap'));
$rej->addHeader(new DataGridColumnHeader('customer',  	'Customer',           true, RejectPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
$rej->addHeader(new DataGridColumnHeader('number',  	'Number',           true, RejectPeer::NUMBER,   80, 'alignCenter alignMiddle', 'nowrap'));
$rej->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'reject_date'));
$rej->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_reject_grid_headers', $rej);

$rep = new DataGridColumnHeaders();
$rep->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$rep->addHeader(new DataGridColumnHeader('reject_date',       'Reject Date',           true, RepairPeer::REPAIR_RECEIVE_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$rep->addHeader(new DataGridColumnHeader('garment_code',       'Garment Code',           true, RepairPeer::GARMENT_CODE,   80, 'alignCenter alignMiddle', 'nowrap'));
$rep->addHeader(new DataGridColumnHeader('type',  	'Type',           true, RepairPeer::TYPE,   100, 'alignCenter alignMiddle', 'nowrap'));
$rep->addHeader(new DataGridColumnHeader('size',  	'Size',           true, RepairPeer::SIZE,   80, 'alignCenter alignMiddle', 'nowrap'));
$rep->addHeader(new DataGridColumnHeader('color',  	'Color',           true, RepairPeer::SIZE,   80, 'alignCenter alignMiddle', 'nowrap'));
$rep->addHeader(new DataGridColumnHeader('customer',  	'Customer',           true, RepairPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
$rep->addHeader(new DataGridColumnHeader('number',  	'Number',           true, RepairPeer::NUMBER,   80, 'alignCenter alignMiddle', 'nowrap'));
$rep->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'repair_recieve_date'));
$rep->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_repair_grid_headers', $rep);

$scr = new DataGridColumnHeaders();
$scr->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$scr->addHeader(new DataGridColumnHeader('reject_date',       'Reject Date',           true, ScrapPeer::SCRAP_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$scr->addHeader(new DataGridColumnHeader('garment_code',       'Garment Code',           true, ScrapPeer::GARMENT_CODE,   80, 'alignCenter alignMiddle', 'nowrap'));
$scr->addHeader(new DataGridColumnHeader('type',  	'Type',           true, ScrapPeer::TYPE,   100, 'alignCenter alignMiddle', 'nowrap'));
$scr->addHeader(new DataGridColumnHeader('size',  	'Size',           true, ScrapPeer::SIZE,   80, 'alignCenter alignMiddle', 'nowrap'));
$scr->addHeader(new DataGridColumnHeader('color',  	'Color',           true, ScrapPeer::SIZE,   80, 'alignCenter alignMiddle', 'nowrap'));
$scr->addHeader(new DataGridColumnHeader('customer',  	'Customer',           true, ScrapPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
$scr->addHeader(new DataGridColumnHeader('number',  	'Number',           true, ScrapPeer::NUMBER,   80, 'alignCenter alignMiddle', 'nowrap'));
$scr->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'scrap_date'));
$scr->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_scrap_grid_headers', $scr);

$log = new DataGridColumnHeaders();
$log->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$log->addHeader(new DataGridColumnHeader('reject_date',       'Reject Date',           true, LogReasonPeer::SUBMITTED_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$log->addHeader(new DataGridColumnHeader('garment_code',       'Garment Code',           true, LogReasonPeer::GARMENT_CODE,   80, 'alignCenter alignMiddle', 'nowrap'));
$log->addHeader(new DataGridColumnHeader('type',  	'Type',           true, LogReasonPeer::TYPE,   100, 'alignCenter alignMiddle', 'nowrap'));
$log->addHeader(new DataGridColumnHeader('size',  	'Size',           true, LogReasonPeer::SIZE,   80, 'alignCenter alignMiddle', 'nowrap'));
$log->addHeader(new DataGridColumnHeader('color',  	'Color',           true, LogReasonPeer::SIZE,   80, 'alignCenter alignMiddle', 'nowrap'));
$log->addHeader(new DataGridColumnHeader('customer',  	'Customer',           true, LogReasonPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
$log->addHeader(new DataGridColumnHeader('number',  	'Number',           true, LogReasonPeer::NUMBER,   80, 'alignCenter alignMiddle', 'nowrap'));
$log->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'submitted_date'));
$log->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_log_grid_headers', $log);


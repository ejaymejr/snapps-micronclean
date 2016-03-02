<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>TRAINING RECORD</h2></span>');
//sfConfig::set('app_submenu_items', 
//    array(
//        array('External Training List',     'training/listTrainingSearch',   'training', array('listTrainingSearch', 'helmkeAdd', 'oocSearch') ),    
//        array('Employee Training',     'training/externalTrainingSearch',   'training', array('externalTrainingSearch', 'helmkeAdd', 'oocSearch') ),
//        array('Micronclean Internal',  'training/mcsTrainingSearch',   'training', array('mcsTrainingSearch', 'airAdd') ),
//        array('Acro/Nano Internal','training/acroNanoTrainingSearch',   'training', array('acroNanoTrainingSearch', 'waterAdd') ),
//        array('Training Plan',   'training/trainingPlanSearch',   'training', array('trainingPlanSearch', 'icAdd') ),
//    ));
    
$ext = new DataGridColumnHeaders();
$ext->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$ext->addHeader(new DataGridColumnHeader('date_from',    'Date From',           true, HrTrainingDevelopmentPeer::DATE_FROM,   80, 'alignCenter alignMiddle', 'nowrap'));
$ext->addHeader(new DataGridColumnHeader('date_to',    'Date To',           true, HrTrainingDevelopmentPeer::DATE_TO,   80, 'alignCenter alignMiddle', 'nowrap'));
$ext->addHeader(new DataGridColumnHeader('employee_no',     'Employee No',           true, HrTrainingDevelopmentPeer::EMPLOYEE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$ext->addHeader(new DataGridColumnHeader('name', 'Name',           true, HrTrainingDevelopmentPeer::NAME,   80, 'alignCenter alignMiddle', 'nowrap'));
$ext->addHeader(new DataGridColumnHeader('company', 'Company',           true, HrTrainingDevelopmentPeer::COMPANY,   80, 'alignCenter alignMiddle', 'nowrap'));
$ext->addHeader(new DataGridColumnHeader('description',   'Description',           true, HrTrainingDevelopmentPeer::DESCRIPTION,   80, 'alignCenter alignMiddle', 'nowrap'));
$ext->addHeader(new DataGridColumnHeader('no_hrs',   '#Hours',           true, HrTrainingDevelopmentPeer::NO_HRS,   80, 'alignCenter alignMiddle', 'nowrap'));
$ext->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_from'));
$ext->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_ext_grid_headers', $ext);

$trn = new DataGridColumnHeaders();
$trn->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$trn->addHeader(new DataGridColumnHeader('date_from',    'Date From',           true, HrTrainingPeer::DATE_FROM,   50, 'alignCenter alignMiddle', 'nowrap'));
$trn->addHeader(new DataGridColumnHeader('date_to',    'Date To',           true, HrTrainingPeer::DATE_TO,   50, 'alignCenter alignMiddle', 'nowrap'));
$trn->addHeader(new DataGridColumnHeader('description',     'Description',           true, HrTrainingPeer::DESCRIPTION,   100, 'alignCenter alignMiddle', 'nowrap'));
$trn->addHeader(new DataGridColumnHeader('place_held', 'Venue',           true, HrTrainingPeer::PLACE_HELD,   80, 'alignCenter alignMiddle', 'nowrap'));
$trn->addHeader(new DataGridColumnHeader('name_trainor',   'Trainer',           true, HrTrainingPeer::NAME_TRAINOR,   80, 'alignCenter alignMiddle', 'nowrap'));
$trn->addHeader(new DataGridColumnHeader('no_hrs',   '#Hours',           true, HrTrainingPeer::NO_HRS,   20, 'alignCenter alignMiddle', 'nowrap'));
$trn->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_from'));
$trn->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_trn_grid_headers', $trn);

$mcs = new DataGridColumnHeaders();
$mcs->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$mcs->addHeader(new DataGridColumnHeader('date_from',    'Date From',           true, HrTrainingRecordPeer::DATE_FROM,   80, 'alignCenter alignMiddle', 'nowrap'));
$mcs->addHeader(new DataGridColumnHeader('date_to',    'Date To',           true, HrTrainingRecordPeer::DATE_TO,   80, 'alignCenter alignMiddle', 'nowrap'));
$mcs->addHeader(new DataGridColumnHeader('employee_no',     'Employee No',           true, HrTrainingRecordPeer::EMPLOYEE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$mcs->addHeader(new DataGridColumnHeader('name', 'Name',           true, HrTrainingRecordPeer::NAME,   100, 'alignCenter alignMiddle', 'nowrap'));
$mcs->addHeader(new DataGridColumnHeader('company',   'Company',           true, HrTrainingRecordPeer::COMPANY,   80, 'alignCenter alignMiddle', 'nowrap'));
$mcs->addHeader(new DataGridColumnHeader('verify',   'Verify',           true, HrTrainingRecordPeer::VERIFY,   80, 'alignCenter alignMiddle', 'nowrap'));
$mcs->addHeader(new DataGridColumnHeader('no_hrs',   '#Hours',           true, HrTrainingRecordPeer::NO_HRS,   80, 'alignCenter alignMiddle', 'nowrap'));
$mcs->addHeader(new DataGridColumnHeader('',   'Certificate',           true, false,   80, 'alignCenter alignMiddle', 'nowrap'));
$mcs->addHeader(new DataGridColumnHeader('commence_date',   'E-Date',           true, HrTrainingRecordPeer::COMMENCE_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$mcs->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_from'));
$mcs->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'DESC'));
sfConfig::set('app_mcs_grid_headers', $mcs);

$acrnan = new DataGridColumnHeaders();
$acrnan->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$acrnan->addHeader(new DataGridColumnHeader('date_from',    'Date From',           true, HrAcroNanoTrainingRecordPeer::DATE_FROM,   80, 'alignCenter alignMiddle', 'nowrap'));
$acrnan->addHeader(new DataGridColumnHeader('date_to',    'Date To',           true, HrAcroNanoTrainingRecordPeer::DATE_TO,   80, 'alignCenter alignMiddle', 'nowrap'));
$acrnan->addHeader(new DataGridColumnHeader('employee_no',     'Employee No',           true, HrAcroNanoTrainingRecordPeer::EMPLOYEE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$acrnan->addHeader(new DataGridColumnHeader('name', 'Name',           true, HrAcroNanoTrainingRecordPeer::NAME,   100, 'alignCenter alignMiddle', 'nowrap'));
$acrnan->addHeader(new DataGridColumnHeader('company',   'Company',           true, HrAcroNanoTrainingRecordPeer::COMPANY,   80, 'alignCenter alignMiddle', 'nowrap'));
$acrnan->addHeader(new DataGridColumnHeader('pva_vmi',   'PVA',           true, HrAcroNanoTrainingRecordPeer::PVA_VMI,   80, 'alignCenter alignMiddle', 'nowrap'));
$acrnan->addHeader(new DataGridColumnHeader('verify',   'Verify',           true, HrAcroNanoTrainingRecordPeer::VERIFY,   80, 'alignCenter alignMiddle', 'nowrap'));
$acrnan->addHeader(new DataGridColumnHeader('no_hrs',   '#Hours',           true, HrAcroNanoTrainingRecordPeer::NO_HRS,   80, 'alignCenter alignMiddle', 'nowrap'));
$acrnan->addHeader(new DataGridColumnHeader('',   'Certificate',           true, false,   80, 'alignCenter alignMiddle', 'nowrap'));

$acrnan->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_from'));
$acrnan->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_acrnan_grid_headers', $acrnan);

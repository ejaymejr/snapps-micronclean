<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>MCS SINGAPORE QUALITY RECORD</h2></span>');
//sfConfig::set('app_submenu_items', 
//    array(
//        array('Helmke',     'micronclean/helmkeSearch',   'micronclean', array('helmkeSearch', 'helmkeAdd', 'oocSearch') ),
//        array('Air',    	'micronclean/airSearch',   'micronclean', array('airSearch', 'airAdd') ),
//        array('Water',     	'micronclean/waterSearch',   'micronclean', array('waterSearch', 'waterAdd') ),
//        array('Surface',  	'micronclean/surfaceSearch',   'micronclean', array('surfaceSearch', 'surfaceAdd') ),
//        array('IC',     	'micronclean/icSearch',   'micronclean', array('icSearch', 'icAdd') ),
//        array('NVR',  		'micronclean/nvrSearch',   'micronclean', array('nvrSearch', 'nvrFtirAdd') ),
//        array('Veritas',    'micronclean/veritasSearch',   'micronclean', array('veritasSearch','veritasAdd') ),
//    ));
$wmdose = new DataGridColumnHeaders();
$wmdose->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$wmdose->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, WashingMachineDoseCalibrationPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmdose->addHeader(new DataGridColumnHeader('machine_no',     'Machine Number',           true, WashingMachineDoseCalibrationPeer::MACHINE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmdose->addHeader(new DataGridColumnHeader('volume_dispensed', 'Volume Dispensed (ml)',           true, WashingMachineDoseCalibrationPeer::VOLUME_DISPENSED,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmdose->addHeader(new DataGridColumnHeader('time_taken',   'Time Taken (sec)',           true, WashingMachineDoseCalibrationPeer::TIME_TAKEN,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmdose->addHeader(new DataGridColumnHeader('checked_by',  	'Checked By',           true, WashingMachineDoseCalibrationPeer::CHECKED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmdose->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$wmdose->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_washingmachinedose_grid_headers', $wmdose);

$wmachine = new DataGridColumnHeaders();
$wmachine->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$wmachine->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, WashingMachineLoadPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmachine->addHeader(new DataGridColumnHeader('machine_no',     'Machine Number',           true, WashingMachineLoadPeer::MACHINE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmachine->addHeader(new DataGridColumnHeader('wt_scale', 'Weight Kg (Scale)',           true, WashingMachineLoadPeer::WT_SCALE,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmachine->addHeader(new DataGridColumnHeader('wt_display',   'Weight Kg (Display)',           true, WashingMachineLoadPeer::WT_DISPLAY,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmachine->addHeader(new DataGridColumnHeader('verified_by',  	'Verified By',           true, WashingMachineLoadPeer::VERIFIED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmachine->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$wmachine->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_washingmachineload_grid_headers', $wmachine);

$wmachineTemp = new DataGridColumnHeaders();
$wmachineTemp->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$wmachineTemp->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, WashingMachineTempPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmachineTemp->addHeader(new DataGridColumnHeader('machine_no',     'Machine Number',           true, WashingMachineTempPeer::MACHINE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmachineTemp->addHeader(new DataGridColumnHeader('temp_scale', 'Temperature &deg;C (Thermometer)',           true, WashingMachineTempPeer::TEMP_THERMOMETER ,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmachineTemp->addHeader(new DataGridColumnHeader('temp_display',   'Temperature &deg;C (Display)',           true, WashingMachineTempPeer::TEMP_DISPLAY,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmachineTemp->addHeader(new DataGridColumnHeader('verified_by',  	'Verified By',           true, WashingMachineTempPeer::VERIFIED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$wmachineTemp->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$wmachineTemp->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_washingmachinetemp_grid_headers', $wmachineTemp);

$part = new DataGridColumnHeaders();
$part->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$part->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, ParticleDataPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$part->addHeader(new DataGridColumnHeader('customer',     'Customer',           true, ParticleDataPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
$part->addHeader(new DataGridColumnHeader('garment_code', 'Garment',           true, ParticleDataPeer::GARMENT_CODE,   80, 'alignCenter alignMiddle', 'nowrap'));
$part->addHeader(new DataGridColumnHeader('department',   'Department',           true, ParticleDataPeer::DEPARTMENT,   80, 'alignCenter alignMiddle', 'nowrap'));
$part->addHeader(new DataGridColumnHeader('type',  	'Type',           true, ParticleDataPeer::TYPE,   50, 'alignCenter alignMiddle', 'nowrap'));
$part->addHeader(new DataGridColumnHeader('washer',  	'Washer',           true, ParticleDataPeer::WASHER,   80, 'alignCenter alignMiddle', 'nowrap'));
$part->addHeader(new DataGridColumnHeader('dryer',  	'Dryer',           true, ParticleDataPeer::DRYER,   80, 'alignCenter alignMiddle', 'nowrap'));
$part->addHeader(new DataGridColumnHeader('tester',  	'Tester',           true, ParticleDataPeer::TESTER,   80, 'alignCenter alignMiddle', 'nowrap'));
$part->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$part->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_helmke_grid_headers', $part);

$gbc = new DataGridColumnHeaders();
$gbc->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$gbc->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, GarmentBacteriaCountPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$gbc->addHeader(new DataGridColumnHeader('customer',     'Customer',           true, GarmentBacteriaCountPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
//$gbc->addHeader(new DataGridColumnHeader('garment_code', 'Garment',           true, GarmentBacteriaCountPeer::GARMENT_CODE,   80, 'alignCenter alignMiddle', 'nowrap'));
$gbc->addHeader(new DataGridColumnHeader('department',   'Department',           true, GarmentBacteriaCountPeer::DEPARTMENT,   80, 'alignCenter alignMiddle', 'nowrap'));
$gbc->addHeader(new DataGridColumnHeader('bacteria_count',  	'Bacteria',           true, GarmentBacteriaCountPeer::BACTERIA_COUNT,   80, 'alignCenter alignMiddle', 'nowrap'));
$gbc->addHeader(new DataGridColumnHeader('type',  	'Type',           true, GarmentBacteriaCountPeer::TYPE,   50, 'alignCenter alignMiddle', 'nowrap'));
$gbc->addHeader(new DataGridColumnHeader('washer',  	'Washer',           true, GarmentBacteriaCountPeer::WASHER,   80, 'alignCenter alignMiddle', 'nowrap'));
$gbc->addHeader(new DataGridColumnHeader('dryer',  	'Dryer',           true, GarmentBacteriaCountPeer::DRYER,   80, 'alignCenter alignMiddle', 'nowrap'));
$gbc->addHeader(new DataGridColumnHeader('tester',  	'Tester',           true, GarmentBacteriaCountPeer::TESTER,   80, 'alignCenter alignMiddle', 'nowrap'));
$gbc->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$gbc->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_gbc_grid_headers', $gbc);

$ic = new DataGridColumnHeaders();
$ic->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$ic->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, IcDataPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$ic->addHeader(new DataGridColumnHeader('customer',     'Customer',           true, IcDataPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
$ic->addHeader(new DataGridColumnHeader('department',   'Department',           true, IcDataPeer::DEPARTMENT,   80, 'alignCenter alignMiddle', 'nowrap'));
$ic->addHeader(new DataGridColumnHeader('type',  	'Type',           true, IcDataPeer::TYPE,   50, 'alignCenter alignMiddle', 'nowrap'));
$ic->addHeader(new DataGridColumnHeader('washer',  	'Washer',           true, IcDataPeer::WASHER,   80, 'alignCenter alignMiddle', 'nowrap'));
$ic->addHeader(new DataGridColumnHeader('dryer',  	'Dryer',           true, IcDataPeer::DRYER,   80, 'alignCenter alignMiddle', 'nowrap'));
$ic->addHeader(new DataGridColumnHeader('tester',  	'Tester',           true, IcDataPeer::TESTER,   80, 'alignCenter alignMiddle', 'nowrap'));
$ic->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$ic->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_ic_grid_headers', $ic);

$air = new DataGridColumnHeaders();
$air->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$air->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, AirDataPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$air->addHeader(new DataGridColumnHeader('x_data',     		'X Data',           true, AirDataPeer::X_DATA,   80, 'alignCenter alignMiddle', 'nowrap'));
$air->addHeader(new DataGridColumnHeader('filter_area',   'Filter',           true, AirDataPeer::FILTER_AREA,   80, 'alignCenter alignMiddle', 'nowrap'));
$air->addHeader(new DataGridColumnHeader('temperature',  	'Temperature',           true, AirDataPeer::TEMPERATURE,   50, 'alignCenter alignMiddle', 'nowrap'));
$air->addHeader(new DataGridColumnHeader('rh',  	'RH Data',           true, AirDataPeer::RH,   80, 'alignCenter alignMiddle', 'nowrap'));
$air->addHeader(new DataGridColumnHeader('tester',  	'Tester',           true, AirDataPeer::TESTER,   80, 'alignCenter alignMiddle', 'nowrap'));
$air->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$air->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'DESC'));
sfConfig::set('app_air_grid_headers', $air);

$abc = new DataGridColumnHeaders();
$abc->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$abc->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, AirBacteriaCountPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$abc->addHeader(new DataGridColumnHeader('bacteria_count',     		'Bacteria',           true, AirBacteriaCountPeer::X_DATA,   80, 'alignCenter alignMiddle', 'nowrap'));
$abc->addHeader(new DataGridColumnHeader('filter_area',   'Filter',           true, AirBacteriaCountPeer::FILTER_AREA,   80, 'alignCenter alignMiddle', 'nowrap'));
$abc->addHeader(new DataGridColumnHeader('tester',  	'Tester',           true, AirBacteriaCountPeer::TESTER,   80, 'alignCenter alignMiddle', 'nowrap'));
$abc->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$abc->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_abc_grid_headers', $abc);

$nvr = new DataGridColumnHeaders();
$nvr->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$nvr->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, NvrFtirDataPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$nvr->addHeader(new DataGridColumnHeader('customer',     'Customer',           true, NvrFtirDataPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
$nvr->addHeader(new DataGridColumnHeader('garment_code', 'Garment',           true, NvrFtirDataPeer::GARMENT_CODE,   80, 'alignCenter alignMiddle', 'nowrap'));
$nvr->addHeader(new DataGridColumnHeader('department',   'Department',           true, NvrFtirDataPeer::DEPARTMENT,   80, 'alignCenter alignMiddle', 'nowrap'));
$nvr->addHeader(new DataGridColumnHeader('type',  	'Type',           true, NvrFtirDataPeer::TYPE,   50, 'alignCenter alignMiddle', 'nowrap'));
$nvr->addHeader(new DataGridColumnHeader('washer',  	'Washer',           true, NvrFtirDataPeer::WASHER,   80, 'alignCenter alignMiddle', 'nowrap'));
$nvr->addHeader(new DataGridColumnHeader('dryer',  	'Dryer',           true, NvrFtirDataPeer::DRYER,   80, 'alignCenter alignMiddle', 'nowrap'));
$nvr->addHeader(new DataGridColumnHeader('tester',  	'Tester',           true, NvrFtirDataPeer::TESTER,   80, 'alignCenter alignMiddle', 'nowrap'));
$nvr->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$nvr->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_nvr_grid_headers', $nvr);

$sur = new DataGridColumnHeaders();
$sur->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, SurfaceDataPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('customer',     'Customer',           true, SurfaceDataPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('garment_code', 'Garment',           true, SurfaceDataPeer::GARMENT_CODE,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('department',   'Department',           true, SurfaceDataPeer::DEPARTMENT,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('type',  	'Type',           true, SurfaceDataPeer::TYPE,   50, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('washer',  	'Washer',           true, SurfaceDataPeer::WASHER,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('dryer',  	'Dryer',           true, SurfaceDataPeer::DRYER,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('tester',  	'Tester',           true, SurfaceDataPeer::TESTER,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$nvr->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_sur_grid_headers', $sur);

$ver = new DataGridColumnHeaders();
$ver->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$ver->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, VeritasParticleDataPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$ver->addHeader(new DataGridColumnHeader('customer',     'Customer',           true, VeritasParticleDataPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
$ver->addHeader(new DataGridColumnHeader('department',   'Department',           true, VeritasParticleDataPeer::DEPARTMENT,   80, 'alignCenter alignMiddle', 'nowrap'));
$ver->addHeader(new DataGridColumnHeader('type',  	'Type',           true, VeritasParticleDataPeer::TYPE,   50, 'alignCenter alignMiddle', 'nowrap'));
$ver->addHeader(new DataGridColumnHeader('washer',  	'Washer',           true, VeritasParticleDataPeer::WASHER,   80, 'alignCenter alignMiddle', 'nowrap'));
$ver->addHeader(new DataGridColumnHeader('dryer',  	'Dryer',           true, VeritasParticleDataPeer::DRYER,   80, 'alignCenter alignMiddle', 'nowrap'));
$ver->addHeader(new DataGridColumnHeader('tester',  	'Tester',           true, VeritasParticleDataPeer::TESTER,   80, 'alignCenter alignMiddle', 'nowrap'));
$ver->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$ver->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_ver_grid_headers', $ver);

$wat = new DataGridColumnHeaders();
$wat->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$wat->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, WaterDataPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$wat->addHeader(new DataGridColumnHeader('resistivity',     'Resistivity',           true, WaterDataPeer::RESISTIVITY,   80, 'alignCenter alignMiddle', 'nowrap'));
$wat->addHeader(new DataGridColumnHeader('lcl',  	'LCL',           true, WaterDataPeer::LCL,   50, 'alignCenter alignMiddle', 'nowrap'));
$wat->addHeader(new DataGridColumnHeader('tester',   'Tester',           true, WaterDataPeer::TESTER,   80, 'alignCenter alignMiddle', 'nowrap'));
$wat->addHeader(new DataGridColumnHeader('remark',  	'Remark',           true, WaterDataPeer::REMARKS,   80, 'alignCenter alignMiddle', 'nowrap'));
$wat->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$wat->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_water_grid_headers', $wat);

$sur = new DataGridColumnHeaders();
$sur->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, SurfaceDataPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('customer',     'Customer',           true, SurfaceDataPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('garment_code', 'Garment',           true, SurfaceDataPeer::GARMENT_CODE,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('department',   'Department',           true, SurfaceDataPeer::DEPARTMENT,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('type',  	'Type',           true, SurfaceDataPeer::TYPE,   50, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('washer',  	'Washer',           true, SurfaceDataPeer::WASHER,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('dryer',  	'Dryer',           true, SurfaceDataPeer::DRYER,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->addHeader(new DataGridColumnHeader('tester',  	'Tester',           true, SurfaceDataPeer::TESTER,   80, 'alignCenter alignMiddle', 'nowrap'));
$sur->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$sur->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_sur_grid_headers', $sur);

$ooc = new DataGridColumnHeaders();
$ooc->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$ooc->addHeader(new DataGridColumnHeader('date_time',    'Date',           true, OutOfControlPeer::DATE_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$ooc->addHeader(new DataGridColumnHeader('observation',     'Observation',           true, OutOfControlPeer::OBSERVATION,   200, 'alignCenter alignMiddle', 'nowrap'));
$ooc->addHeader(new DataGridColumnHeader('investigate_by', 'Investigated By',           true, OutOfControlPeer::INVESTIGATE_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$ooc->addHeader(new DataGridColumnHeader('prop_action',   'Action',           true, OutOfControlPeer::PROP_ACTION,   200, 'alignCenter alignMiddle', 'nowrap'));
$ooc->addHeader(new DataGridColumnHeader('review_by',  	'Reviewed By',           true, OutOfControlPeer::REVIEW_BY,   50, 'alignCenter alignMiddle', 'nowrap'));
$ooc->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'date_time'));
$ooc->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_ooc_grid_headers', $ooc);

$lpc = new DataGridColumnHeaders();
$lpc->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$lpc->addHeader(new DataGridColumnHeader('trans_date',    'Date Record',           true, LpcCalibrationPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$lpc->addHeader(new DataGridColumnHeader('due_date',     'Due Date',           true, LpcCalibrationPeer::DUE_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$lpc->addHeader(new DataGridColumnHeader('company', 'Company',           true, LpcCalibrationPeer::COMPANY,   80, 'alignCenter alignMiddle', 'nowrap'));
$lpc->addHeader(new DataGridColumnHeader('calibrated_by',   'Calibrated By',           true, LpcCalibrationPeer::CALIBRATED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$lpc->addHeader(new DataGridColumnHeader('verified_by',  	'Verified By',           true, LpcCalibrationPeer::VERIFIED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$lpc->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$lpc->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_lpc_grid_headers', $lpc);

$ult = new DataGridColumnHeaders();
$ult->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$ult->addHeader(new DataGridColumnHeader('trans_date',    'Date Record',           true, UltrasonicPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$ult->addHeader(new DataGridColumnHeader('frequency',     'Frequency',           true, UltrasonicPeer::FREQUENCY,   80, 'alignCenter alignMiddle', 'nowrap'));
$ult->addHeader(new DataGridColumnHeader('power', 'Power',           true, UltrasonicPeer::POWER,   80, 'alignCenter alignMiddle', 'nowrap'));
$ult->addHeader(new DataGridColumnHeader('equipment_name',   'Equipment Name',           true, UltrasonicPeer::EQUIPMENT_NAME,   80, 'alignCenter alignMiddle', 'nowrap'));
$ult->addHeader(new DataGridColumnHeader('done_by',  	'Done By',           true, UltrasonicPeer::DONE_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$ult->addHeader(new DataGridColumnHeader('verified_by',  	'Verified By',           true, UltrasonicPeer::VERIFIED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$ult->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$ult->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_ultrasonic_grid_headers', $ult);

$icCal = new DataGridColumnHeaders();
$icCal->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$icCal->addHeader(new DataGridColumnHeader('trans_date',    'Date Record',           true, IcCalibrationPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$icCal->addHeader(new DataGridColumnHeader('checked_by',  	'Checked By',           true, IcCalibrationPeer::CHECKED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$icCal->addHeader(new DataGridColumnHeader('verified_by',  	'Verified By',           true, IcCalibrationPeer::VERIFIED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$icCal->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$icCal->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_iccalibration_grid_headers', $icCal);

$bacteria = new DataGridColumnHeaders();
$bacteria->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$bacteria->addHeader(new DataGridColumnHeader('trans_date',    'Date Record',           true, BacteriaTestPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$bacteria->addHeader(new DataGridColumnHeader('cleanroom',    'Cleanroom',           true, BacteriaTestPeer::CLEANROOM,   80, 'alignCenter alignMiddle', 'nowrap'));
$bacteria->addHeader(new DataGridColumnHeader('area_a',    'Area A',           true, BacteriaTestPeer::AREA_A,   80, 'alignCenter alignMiddle', 'nowrap'));
$bacteria->addHeader(new DataGridColumnHeader('area_b',    'Area B',           true, BacteriaTestPeer::AREA_B,   80, 'alignCenter alignMiddle', 'nowrap'));
$bacteria->addHeader(new DataGridColumnHeader('folding_table_a',    'F-Table A',           true, BacteriaTestPeer::FOLDING_TABLE_A,   80, 'alignCenter alignMiddle', 'nowrap'));
$bacteria->addHeader(new DataGridColumnHeader('folding_table_a',    'F-Table B',           true, BacteriaTestPeer::FOLDING_TABLE_B,   80, 'alignCenter alignMiddle', 'nowrap'));
$bacteria->addHeader(new DataGridColumnHeader('customer',    'Customer',           true, BacteriaTestPeer::CUSTOMER,   80, 'alignCenter alignMiddle', 'nowrap'));
$bacteria->addHeader(new DataGridColumnHeader('checked_by',  	'Checked By',           true, BacteriaTestPeer::CHECKED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$bacteria->addHeader(new DataGridColumnHeader('verified_by',  	'Verified By',           true, BacteriaTestPeer::VERIFIED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$bacteria->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$bacteria->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_bacteria_grid_headers', $bacteria);
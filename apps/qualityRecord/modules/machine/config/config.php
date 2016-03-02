<?php
$heatsealerpm = new DataGridColumnHeaders();
$heatsealerpm->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$heatsealerpm->addHeader(new DataGridColumnHeader('trans_date',    'Date',           true, HeatSealerPmPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$heatsealerpm->addHeader(new DataGridColumnHeader('',    'Time',           true, true,   80, 'alignCenter alignMiddle', 'nowrap'));
$heatsealerpm->addHeader(new DataGridColumnHeader('machine_type',     'Machine Type',           true, HeatSealerPmPeer::MACHINE_TYPE,   80, 'alignCenter alignMiddle', 'nowrap'));
$heatsealerpm->addHeader(new DataGridColumnHeader('air_regulator',     'Air Regulator',           true, HeatSealerPmPeer::AIR_REGULATOR,   80, 'alignCenter alignMiddle', 'nowrap'));
$heatsealerpm->addHeader(new DataGridColumnHeader('heat', 'Heat',           true, HeatSealerPmPeer::HEAT,   80, 'alignCenter alignMiddle', 'nowrap'));
$heatsealerpm->addHeader(new DataGridColumnHeader('thermopatch',   'Thermopatch',           true, HeatSealerPmPeer::THERMOPATCH,   80, 'alignCenter alignMiddle', 'nowrap'));
$heatsealerpm->addHeader(new DataGridColumnHeader('dwell',  	'Dwell',           true, HeatSealerPmPeer::DWELL,   50, 'alignCenter alignMiddle', 'nowrap'));
$heatsealerpm->addHeader(new DataGridColumnHeader('piston',  	'Piston',           true, HeatSealerPmPeer::PISTON,   80, 'alignCenter alignMiddle', 'nowrap'));
$heatsealerpm->addHeader(new DataGridColumnHeader('performed_by',  	'Performed',           true, HeatSealerPmPeer::PERFORMED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$heatsealerpm->addHeader(new DataGridColumnHeader('verified_by',  	'Verified',           true, HeatSealerPmPeer::VERIFIED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$heatsealerpm->addHeader(new DataGridColumnHeader('verify_date',  	'Date Verified',           true, HeatSealerPmPeer::VERIFY_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$heatsealerpm->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$heatsealerpm->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_heatsealerpm_grid_headers', $heatsealerpm);

$washerpm = new DataGridColumnHeaders();
$washerpm->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('trans_date',    'Date',           true, WasherPmPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('',    'Time',           true, true,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('machine_type',     'Machine Type',           true, WasherPmPeer::MACHINE_TYPE,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('clean_machine',     'Clean Machine',           true, WasherPmPeer::CLEAN_MACHINE,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('purged_water', 'Purged Water',           true, WasherPmPeer::PURGED_WATER,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('clean_door',   'Door',           true, WasherPmPeer::CLEAN_DOOR,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('check_belt',  	'Belt',           true, WasherPmPeer::CHECK_BELT,   50, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('check_hose',  	'Hose',           true, WasherPmPeer::CHECK_HOSE,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('lubricate_bearings',  	'Bearings',           true, WasherPmPeer::LUBRICATE_BEARINGS,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('check_sensory',  	'Sensory',           true, WasherPmPeer::CHECK_SENSORY,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('check_brake',  	'Brake',           true, WasherPmPeer::CHECK_BRAKE,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('temp_control',  	'Temp Control',           true, WasherPmPeer::TEMP_CONTROL,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('temp_verify',  	'Temp Verify',           true, WasherPmPeer::TEMP_VERIFY,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('performed_by',  	'Performed',           true, WasherPmPeer::PERFORMED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('verified_by',  	'Verified',           true, WasherPmPeer::VERIFIED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->addHeader(new DataGridColumnHeader('verify_date',  	'Date Verified',           true, WasherPmPeer::VERIFY_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$washerpm->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$washerpm->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_washerpm_grid_headers', $washerpm);

$dryerpm = new DataGridColumnHeaders();
$dryerpm->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('trans_date',    'Date',           true, DryerPmPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('',    'Time',           true, DryerPmPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('machine_type',     'Machine Type',           true, DryerPmPeer::MACHINE_TYPE,   80, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('clean_machine',     'Clean Machine',           true, DryerPmPeer::CLEAN_MACHINE,   80, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('cage_shaft', 'Cage Shaft',           true, DryerPmPeer::CAGE_SHAFT,   80, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('fan_bearing',   'Fan Bearing',           true, DryerPmPeer::FAN_BEARING,   80, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('fan_shaft',  	'Fan Shaft',           true, DryerPmPeer::FAN_SHAFT,   50, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('fan_motor',  	'Fan Motor',           true, DryerPmPeer::FAN_MOTOR,   80, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('cage_motor',  	'Cage Motor',           true, DryerPmPeer::CAGE_MOTOR,   80, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('temp_control',  	'Temp Control',           true, DryerPmPeer::TEMP_CONTROL,   80, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('temp_verify',  	'Temp Verify',           true, DryerPmPeer::TEMP_VERIFY,   80, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('performed_by',  	'Performed',           true, DryerPmPeer::PERFORMED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('verified_by',  	'Verified',           true, DryerPmPeer::VERIFIED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->addHeader(new DataGridColumnHeader('verify_date',  	'Date Verified',           true, DryerPmPeer::VERIFY_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$dryerpm->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$dryerpm->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_dryerpm_grid_headers', $dryerpm);
   
$m1232 = new DataGridColumnHeaders();
$m1232->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$m1232->addHeader(new DataGridColumnHeader('trans_date',    'Date',           true, Pms1232abPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232->addHeader(new DataGridColumnHeader('machine_no',     'Machine Number',           true, Pms1232abPeer::MACHINE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232->addHeader(new DataGridColumnHeader('wash_flow_rate',     'Wash Flow',           true, Pms1232abPeer::WASH_FLOW_RATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232->addHeader(new DataGridColumnHeader('rinse_flow_rate', 'Rinse Flow',           true, Pms1232abPeer::RINSE_FLOW_RATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232->addHeader(new DataGridColumnHeader('cham_1',   'Cham 1 Temp',           true, Pms1232abPeer::CHAM_1,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232->addHeader(new DataGridColumnHeader('cham_2',  	'Cham 2 Temp',           true, Pms1232abPeer::CHAM_2,   50, 'alignCenter alignMiddle', 'nowrap'));
$m1232->addHeader(new DataGridColumnHeader('panel_inspect',  	'Panel',           true, Pms1232abPeer::PANEL_INSPECT,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232->addHeader(new DataGridColumnHeader('exit_inspect',  	'Exit Inspect',           true, Pms1232abPeer::SWITCH_CONTROL,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232->addHeader(new DataGridColumnHeader('switch_control',  	'Switch Control',           true, Pms1232abPeer::INITIAL,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232->addHeader(new DataGridColumnHeader('initial',  	'Initial',           true, Pms1232abPeer::INITIAL,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$m1232->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_m1232_grid_headers', $m1232);

$m1232w = new DataGridColumnHeaders();
$m1232w->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->addHeader(new DataGridColumnHeader('trans_date',    'Date',           true, Pms1232abWeeklyPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->addHeader(new DataGridColumnHeader('machine_no',     'Machine Number',           true, Pms1232abWeeklyPeer::MACHINE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->addHeader(new DataGridColumnHeader('sensor_diagnostic',     'Sensor',           true, Pms1232abWeeklyPeer::SENSOR_DIAGNOSTIC,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->addHeader(new DataGridColumnHeader('chamber_temp', 'Chamber Temp',           true, Pms1232abWeeklyPeer::CHAMBER_TEMP,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->addHeader(new DataGridColumnHeader('actuator_diagnostic',   'Actuator',           true, Pms1232abWeeklyPeer::ACTUATOR_DIAGNOSTIC,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->addHeader(new DataGridColumnHeader('basket_inspect',  	'Basket',           true, Pms1232abWeeklyPeer::BASKET_INSPECT,   50, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->addHeader(new DataGridColumnHeader('chamber_clean',  	'Chamber',           true, Pms1232abWeeklyPeer::CHAMBER_CLEAN,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->addHeader(new DataGridColumnHeader('nozzle_inspect',  	'Nozzle',           true, Pms1232abWeeklyPeer::NOZZLE_INSPECT,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->addHeader(new DataGridColumnHeader('plumbing_inspect',  	'Plumbing',           true, Pms1232abWeeklyPeer::PLUMBING_INSPECT,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->addHeader(new DataGridColumnHeader('drive_roller',  	'Drive Roller',           true, Pms1232abWeeklyPeer::DRIVE_ROLLER,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->addHeader(new DataGridColumnHeader('drive_belt',  	'Drive Belt',           true, Pms1232abWeeklyPeer::DRIVE_BELT,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->addHeader(new DataGridColumnHeader('chain_tension',  	'Chain Tension',           true, Pms1232abWeeklyPeer::CHAIN_TENTION,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->addHeader(new DataGridColumnHeader('initial',  	'Initial',           true, Pms1232abWeeklyPeer::INITIAL,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232w->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$m1232w->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_m1232weekly_grid_headers', $m1232w);

$m1232m = new DataGridColumnHeaders();
$m1232m->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$m1232m->addHeader(new DataGridColumnHeader('trans_date',    'Date',           true, Pms1232abMonthlyPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232m->addHeader(new DataGridColumnHeader('machine_no',     'Machine Number',           true, Pms1232abMonthlyPeer::MACHINE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232m->addHeader(new DataGridColumnHeader('drain_system',     'Drain System',           true, Pms1232abMonthlyPeer::DRAIN_SYSTEM,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232m->addHeader(new DataGridColumnHeader('electrical_system',   'Electrical System',           true, Pms1232abMonthlyPeer::ELECTRICAL_SYSTEM,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232m->addHeader(new DataGridColumnHeader('hoses_connectors',  	'Hoses Connectors',           true, Pms1232abMonthlyPeer::HOSES_CONNECTORS,   50, 'alignCenter alignMiddle', 'nowrap'));
$m1232m->addHeader(new DataGridColumnHeader('initial',  	'Initial',           true, Pms1232abPeer::INITIAL,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232m->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$m1232m->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_m1232monthly_grid_headers', $m1232m);

$m1232q = new DataGridColumnHeaders();
$m1232q->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$m1232q->addHeader(new DataGridColumnHeader('trans_date',    'Date',           true, Pms1232abQuarterlyPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232q->addHeader(new DataGridColumnHeader('machine_no',     'Machine Number',           true, Pms1232abQuarterlyPeer::MACHINE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232q->addHeader(new DataGridColumnHeader('quarter',     'Quarter',           true, Pms1232abQuarterlyPeer::QUARTER,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232q->addHeader(new DataGridColumnHeader('date_completed',     'Completed',           true, Pms1232abQuarterlyPeer::DATE_COMPLETED,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232q->addHeader(new DataGridColumnHeader('due_date',     'Due Date',           true, Pms1232abQuarterlyPeer::DUE_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232q->addHeader(new DataGridColumnHeader('cda_filter',   'Cda Filter',           true, Pms1232abQuarterlyPeer::CDA_FILTER,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232q->addHeader(new DataGridColumnHeader('di_water_filter',  	'Di Water Filter',           true, Pms1232abQuarterlyPeer::DI_WATER_FILTER,   50, 'alignCenter alignMiddle', 'nowrap'));
$m1232q->addHeader(new DataGridColumnHeader('initial',  	'Initial',           true, Pms1232abQuarterlyPeer::INITIAL,   80, 'alignCenter alignMiddle', 'nowrap'));
$m1232q->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$m1232q->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_m1232quarterly_grid_headers', $m1232q);

$m6252 = new DataGridColumnHeaders();
$m6252->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$m6252->addHeader(new DataGridColumnHeader('trans_date',    'Date',           true, Pms6252Peer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252->addHeader(new DataGridColumnHeader('machine_no',     'Machine Number',           true, Pms6252Peer::MACHINE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252->addHeader(new DataGridColumnHeader('cda_di_water',     'CDA & DI Water',           true, Pms6252Peer::CDA_DI_WATER,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252->addHeader(new DataGridColumnHeader('pre_inspect', 'Pre Inspect',           true, Pms6252Peer::PRE_INSPECT,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252->addHeader(new DataGridColumnHeader('flud_leak',   'Fluid Leak',           true, Pms6252Peer::FLUID_LEAK,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252->addHeader(new DataGridColumnHeader('panel_inspect',  	'Panel Inspect',           true, Pms6252Peer::PANEL_INSPECT,   50, 'alignCenter alignMiddle', 'nowrap'));
$m6252->addHeader(new DataGridColumnHeader('exit_inspect',  	'Exit Inspect',           true, Pms6252Peer::EXIT_INSPECT,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252->addHeader(new DataGridColumnHeader('switch_control',  	'Switch Control',           true, Pms6252Peer::SWITCH_CONTROL,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252->addHeader(new DataGridColumnHeader('initial',  	'Initial',           true, Pms6252Peer::INITIAL,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$m6252->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_m6252_grid_headers', $m6252);

$m6252w = new DataGridColumnHeaders();
$m6252w->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$m6252w->addHeader(new DataGridColumnHeader('trans_date',    'Date',           true, Pms6252WeeklyPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252w->addHeader(new DataGridColumnHeader('machine_no',     'Machine Number',           true, Pms6252WeeklyPeer::MACHINE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252w->addHeader(new DataGridColumnHeader('sensor_diagnostic',     'Sensor',           true, Pms6252WeeklyPeer::SENSOR_DIAGNOSTIC,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252w->addHeader(new DataGridColumnHeader('actuator_diagnostic',   'Actuator',           true, Pms6252WeeklyPeer::ACTUATOR_DIAGNOSTIC,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252w->addHeader(new DataGridColumnHeader('basket_inspect',  	'Basket',           true, Pms6252WeeklyPeer::BASKET_INSPECT,   50, 'alignCenter alignMiddle', 'nowrap'));
$m6252w->addHeader(new DataGridColumnHeader('chamber_clean',  	'Chamber',           true, Pms6252WeeklyPeer::CHAMBER_CLEAN,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252w->addHeader(new DataGridColumnHeader('nozzle_inspect',  	'Nozzle',           true, Pms6252WeeklyPeer::NOZZLE_INSPECT,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252w->addHeader(new DataGridColumnHeader('plumbing_inspect',  	'Plumbing',           true, Pms6252WeeklyPeer::PLUMBING_INSPECT,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252w->addHeader(new DataGridColumnHeader('drive_roller',  	'Drive Roller',           true, Pms6252WeeklyPeer::DRIVE_ROLLER,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252w->addHeader(new DataGridColumnHeader('drive_belt',  	'Drive Belt',           true, Pms6252WeeklyPeer::DRIVE_BELT,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252w->addHeader(new DataGridColumnHeader('chain_tension',  	'Chain Tension',           true, Pms6252WeeklyPeer::CHAIN_TENTION,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252w->addHeader(new DataGridColumnHeader('initial',  	'Initial',           true, Pms6252WeeklyPeer::INITIAL,   80, 'alignCenter alignMiddle', 'nowrap'));
$m6252w->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$m6252w->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_m6252weekly_grid_headers', $m6252w);

$dcalib = new DataGridColumnHeaders();
$dcalib->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$dcalib->addHeader(new DataGridColumnHeader('trans_date',    'Date',           true, DosingCalibrationPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$dcalib->addHeader(new DataGridColumnHeader('machine_no',     'Machine No',           true, DosingCalibrationPeer::MACHINE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$dcalib->addHeader(new DataGridColumnHeader('density',     'Density',           true, DosingCalibrationPeer::DENSITY,   80, 'alignCenter alignMiddle', 'nowrap'));
$dcalib->addHeader(new DataGridColumnHeader('pump_model', 'Pump Model',           true, DosingCalibrationPeer::PUMP_MODEL,   80, 'alignCenter alignMiddle', 'nowrap'));
$dcalib->addHeader(new DataGridColumnHeader('eq_flow_rate',   'Equipment Flow',           true, DosingCalibrationPeer::EQ_FLOW_RATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$dcalib->addHeader(new DataGridColumnHeader('frequency',  	'Frequency',           true, DosingCalibrationPeer::FREQUENCY,   50, 'alignCenter alignMiddle', 'nowrap'));
$dcalib->addHeader(new DataGridColumnHeader('flow_rate',  	'Flow Rate',           true, DosingCalibrationPeer::FLOW_RATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$dcalib->addHeader(new DataGridColumnHeader('reading_time',  	'Reading Time',           true, DosingCalibrationPeer::READING_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$dcalib->addHeader(new DataGridColumnHeader('reading',  	'Reading',           true, DosingCalibrationPeer::READING,   80, 'alignCenter alignMiddle', 'nowrap'));
$dcalib->addHeader(new DataGridColumnHeader('checked_by',  	'Checked By',           true, DosingCalibrationPeer::CHECKED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$dcalib->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$dcalib->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_dcalib_grid_headers', $dcalib);

$mpara = new DataGridColumnHeaders();
$mpara->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$mpara->addHeader(new DataGridColumnHeader('trans_date',    'Date',           true, MachineParameterPeer::TRANS_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$mpara->addHeader(new DataGridColumnHeader('trans_time',     'Time',           true, MachineParameterPeer::TRANS_TIME,   80, 'alignCenter alignMiddle', 'nowrap'));
$mpara->addHeader(new DataGridColumnHeader('machine_no',     'Machine No',           true, MachineParameterPeer::MACHINE_NO,   80, 'alignCenter alignMiddle', 'nowrap'));
$mpara->addHeader(new DataGridColumnHeader('di_water',      'Di Water',           true, MachineParameterPeer::DI_WATER,   80, 'alignCenter alignMiddle', 'nowrap'));
$mpara->addHeader(new DataGridColumnHeader('cda1',   'CDA1 Pressure',           true, MachineParameterPeer::CDA1,   80, 'alignCenter alignMiddle', 'nowrap'));
$mpara->addHeader(new DataGridColumnHeader('cda2',  	'CDA2 Pressure',           true, MachineParameterPeer::CDA2,   50, 'alignCenter alignMiddle', 'nowrap'));
$mpara->addHeader(new DataGridColumnHeader('cda_diff',  	'CDA2 Diff',           true, MachineParameterPeer::CDA_DIFF,   50, 'alignCenter alignMiddle', 'nowrap'));
$mpara->addHeader(new DataGridColumnHeader('sumptank',  	'Sumptank',           true, MachineParameterPeer::SUMPTANK,   80, 'alignCenter alignMiddle', 'nowrap'));
$mpara->addHeader(new DataGridColumnHeader('ultra_tank',  	'Ultra Tank',           true, MachineParameterPeer::ULTRA_TANK,   80, 'alignCenter alignMiddle', 'nowrap'));
$mpara->addHeader(new DataGridColumnHeader('rinse_temp',  	'Rinse Temp',           true, MachineParameterPeer::RINSE_TEMP,   80, 'alignCenter alignMiddle', 'nowrap'));
$mpara->addHeader(new DataGridColumnHeader('checked_by',  	'Checked By',           true, MachineParameterPeer::CHECKED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$mpara->addHeader(new DataGridColumnHeader('verified_by',  	'Verified',           true, MachineParameterPeer::VERIFIED_BY,   80, 'alignCenter alignMiddle', 'nowrap'));
$mpara->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date'));
$mpara->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_mpara_grid_headers', $mpara);












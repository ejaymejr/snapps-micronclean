<?php

sfConfig::set('app_page_heading', 'Leaves Transaction Sheet');

//sfConfig::set('app_submenu_items', 
//    array(
//        array('Leave Credits',       'leave/leaveCreditSearch',      'leave', 'leaveCreditSearch' ),
//        array('Leave Application',   'leave/leaveApplySearch',       'leave', array('leaveApplySearch', 'leaveApplyAdd', 'leaveApplyEdit') ),
//    ));

    
$lc = new DataGridColumnHeaders(); //employee Ledger Group
$lc->addHeader(new DataGridColumnHeader('no',               'No',               false, false,                            50, 'alignCenter alignMiddle', 'nowrap'));
$lc->addHeader(new DataGridColumnHeader('employee_no',      'Employee No',      true, HrEmployeeLeaveCreditsPeer::EMPLOYEE_NO,          100, 'alignCenter alignMiddle', 'nowrap'));
$lc->addHeader(new DataGridColumnHeader('name',             'Name',             true, HrEmployeeLeaveCreditsPeer::NAME,         100, 'alignCenter alignMiddle', 'nowrap'));
$lc->addHeader(new DataGridColumnHeader('',       'Join Date',            true, false,         150, 'alignCenter alignMiddle', 'nowrap'));
$lc->addHeader(new DataGridColumnHeader('leave_type',       'Leave',            true, HrEmployeeLeaveCreditsPeer::LEAVE_TYPE,         100, 'alignCenter alignMiddle', 'nowrap'));
$lc->addHeader(new DataGridColumnHeader('',          'Prev-Year',       true, false,        50, 'alignCenter alignMiddle', 'nowrap'));
$lc->addHeader(new DataGridColumnHeader('previous_balance',          'Balance',       true, HrEmployeeLeaveCreditsPeer::PREVIOUS_BALANCE,        50, 'alignCenter alignMiddle', 'nowrap'));
$lc->addHeader(new DataGridColumnHeader('fiscal_year',      'Fiscal Year',      true, HrEmployeeLeaveCreditsPeer::FISCAL_YEAR,              80, 'alignCenter alignMiddle', 'nowrap'));
$lc->addHeader(new DataGridColumnHeader('credits',          'Entitled',       true, HrEmployeeLeaveCreditsPeer::CREDITS,        50, 'alignCenter alignMiddle', 'nowrap'));
$lc->addHeader(new DataGridColumnHeader('consumed',         'Consumed',         true, HrEmployeeLeaveCreditsPeer::CONSUMED,              50, 'alignCenter alignMiddle', 'nowrap'));
$lc->addHeader(new DataGridColumnHeader('',                 'Available',        true, false,                            50, 'alignCenter alignMiddle', 'nowrap'));

$lc->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'name' ));
$lc->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_leavecredits_grid_headers', $lc);


$apl = new DataGridColumnHeaders(); //employee Ledger Group
$apl->addHeader(new DataGridColumnHeader('no',               'No',              false, false,                                20, 'alignCenter alignMiddle', 'nowrap'));
$apl->addHeader(new DataGridColumnHeader('employee_no',      'Employee No',     true, HrEmployeeLeavePeer::EMPLOYEE_NO,     80, 'alignCenter alignMiddle', 'nowrap'));
$apl->addHeader(new DataGridColumnHeader('name',             'Name',            true, HrEmployeeLeavePeer::NAME,            80, 'alignCenter alignMiddle', 'nowrap'));
$apl->addHeader(new DataGridColumnHeader('leave_type',       'Leave',           true, HrEmployeeLeavePeer::LEAVE_TYPE,      50, 'alignCenter alignMiddle', 'nowrap'));
$apl->addHeader(new DataGridColumnHeader('reason_leave',     'Reason',          true, HrEmployeeLeavePeer::REASON_LEAVE,     100, 'alignCenter alignMiddle', 'nowrap'));
$apl->addHeader(new DataGridColumnHeader('inclusive_datefrom', 'from',          true, HrEmployeeLeavePeer::INCLUSIVE_DATEFROM, 50, 'alignCenter alignMiddle', 'nowrap'));
$apl->addHeader(new DataGridColumnHeader('inclusive_dateto', 'to',              true, HrEmployeeLeavePeer::INCLUSIVE_DATETO,   50, 'alignCenter alignMiddle', 'nowrap'));
$apl->addHeader(new DataGridColumnHeader('no_days',         'No. of Days',      true, false,            30, 'alignCenter alignMiddle', 'nowrap'));
$apl->addHeader(new DataGridColumnHeader('half_day',         'Half Day',        true, HrEmployeeLeavePeer::HALF_DAY,            30, 'alignCenter alignMiddle', 'nowrap'));
$apl->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'name'));
$apl->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'DESC'));
sfConfig::set('app_applyleave_grid_headers', $apl);

$app = new DataGridColumnHeaders(); //employee Ledger Group
$app->addHeader(new DataGridColumnHeader('no',               'No',              false, false,                                20, 'alignCenter alignMiddle', 'nowrap'));
$app->addHeader(new DataGridColumnHeader('name',             'Name',            true, HrEmployeeLeavePeer::NAME,            80, 'alignCenter alignMiddle', 'nowrap'));
$app->addHeader(new DataGridColumnHeader('leave_type',       'Leave',           true, HrEmployeeLeavePeer::LEAVE_TYPE,      50, 'alignCenter alignMiddle', 'nowrap'));
$app->addHeader(new DataGridColumnHeader('inclusive_datefrom', 'from',          true, HrEmployeeLeavePeer::INCLUSIVE_DATEFROM, 50, 'alignCenter alignMiddle', 'nowrap'));
$app->addHeader(new DataGridColumnHeader('inclusive_dateto', 'to',              true, HrEmployeeLeavePeer::INCLUSIVE_DATETO,   50, 'alignCenter alignMiddle', 'nowrap'));
$app->addHeader(new DataGridColumnHeader('no_days',         '# Days',      true, false,            30, 'alignCenter alignMiddle', 'nowrap'));
$app->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'name'));
$app->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'DESC'));
sfConfig::set('app_approveleave_grid_headers', $app);

$apdl = new DataGridColumnHeaders(); //employee Ledger Group
$apdl->addHeader(new DataGridColumnHeader('no',               'No',              false, false,                                20, 'alignCenter alignMiddle', 'nowrap'));
$apdl->addHeader(new DataGridColumnHeader('leave_type',         'Leave Type',        false, false,            30, 'alignCenter alignMiddle', 'nowrap'));
$apdl->addHeader(new DataGridColumnHeader('inclusive_datefrom', 'from',          false, false, 50, 'alignCenter alignMiddle', 'nowrap'));
$apdl->addHeader(new DataGridColumnHeader('inclusive_dateto', 'to',              false, false,   50, 'alignCenter alignMiddle', 'nowrap'));
$apdl->addHeader(new DataGridColumnHeader('no_days',         'No. of Days',      false, false,            30, 'alignCenter alignMiddle', 'nowrap'));
$apdl->addHeader(new DataGridColumnHeader('half_day',         'Half Day',        false, false,            30, 'alignCenter alignMiddle', 'nowrap'));
$apdl->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'LEAVE_TYPE'));
$apdl->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'DESC'));
sfConfig::set('app_appliedleave_grid_headers', $apdl);
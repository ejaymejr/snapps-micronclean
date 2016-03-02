<?php

// sfConfig::set('app_submenu_items',
// array(
// 	array('Search',     'photo/upload',   'photo', 'upload' ),
// ));
$pic = new DataGridColumnHeaders(); //employee Ledger Group
$pic->addHeader(new DataGridColumnHeader('no',               'No',              false, false,                                20, 'alignCenter alignMiddle', 'nowrap'));
$pic->addHeader(new DataGridColumnHeader('trans_date',      'Date',     false, false,     80, 'alignCenter alignMiddle', 'nowrap'));
//$pic->addHeader(new DataGridColumnHeader('batch',             'Batch',            true, false,            80, 'alignCenter alignMiddle', 'nowrap'));
$pic->addHeader(new DataGridColumnHeader('name',       'Customer',           false, false,      50, 'alignCenter alignMiddle', 'nowrap'));
$pic->addHeader(new DataGridColumnHeader('department',       'Department',           true, false,      50, 'alignCenter alignMiddle', 'nowrap'));
$pic->addHeader(new DataGridColumnHeader('shift',     'Shift',          true, false,     100, 'alignCenter alignMiddle', 'nowrap'));
$pic->addHeader(new DataGridColumnHeader('garment',       'Garment',           false, false,      50, 'alignCenter alignMiddle', 'nowrap'));
$pic->addHeader(new DataGridColumnHeader('color',       'Color',           false, false,      50, 'alignCenter alignMiddle', 'nowrap'));
$pic->addHeader(new DataGridColumnHeader('size',       'Size',           false, false,      50, 'alignCenter alignMiddle', 'nowrap'));
//$pic->addHeader(new DataGridColumnHeader('filelink',     'Link',          true, false,     100, 'alignCenter alignMiddle', 'nowrap'));
$pic->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'name'));
$pic->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'DESC'));
sfConfig::set('app_photo_grid_headers', $pic);

$sc = new DataGridColumnHeaders(); //employee Ledger Group
$sc->addHeader(new DataGridColumnHeader('no',               'No',              false, false,                                20, 'alignCenter alignMiddle', 'nowrap'));
$sc->addHeader(new DataGridColumnHeader('name',       'Customer',           PhotoDetailPeer::NAME, false,      50, 'alignCenter alignMiddle', 'nowrap'));
$sc->addHeader(new DataGridColumnHeader('trans_date',      'Date',     PhotoDetailPeer::TRANS_DATE, false,     80, 'alignCenter alignMiddle', 'nowrap'));
$sc->addHeader(new DataGridColumnHeader('',             'Sent',            true, false,            80, 'alignCenter alignMiddle', 'nowrap'));
$sc->addHeader(new DataGridColumnHeader('',     'Unsent',          true, false,     100, 'alignCenter alignMiddle', 'nowrap'));
$sc->addHeader(new DataGridColumnHeader('',     'Customer Response',          true, false,     100, 'alignCenter alignMiddle', 'nowrap'));
$sc->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'name'));
$sc->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'DESC'));
sfConfig::set('app_search_criteria_headers', $sc);

$email = new DataGridColumnHeaders(); //employee Ledger Group
$email->addHeader(new DataGridColumnHeader('no',               'No',              false, false,                                20, 'alignCenter alignMiddle', 'nowrap'));
$email->addHeader(new DataGridColumnHeader('email_date',       'Date Sent',           EmailHistoryPeer::EMAIL_DATE, false,      50, 'alignCenter alignMiddle', 'nowrap'));
$email->addHeader(new DataGridColumnHeader('',      'Filename',     false, false,     80, 'alignCenter alignMiddle', 'nowrap'));
$email->addHeader(new DataGridColumnHeader('email',             'Send To',            EmailHistoryPeer::EMAIL_ADDRESS, false,            80, 'alignCenter alignMiddle', 'nowrap'));
$email->addHeader(new DataGridColumnHeader('modified_by',     'Sent By',          EmailHistoryPeer::MODIFIED_BY, false,     100, 'alignCenter alignMiddle', 'nowrap'));
$email->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'Filename'));
$email->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'DESC'));
sfConfig::set('app_email_search_headers', $email);

$econtact = new DataGridColumnHeaders(); //employee Ledger Group
$econtact->addHeader(new DataGridColumnHeader('no',               'No',              false, false,                                20, 'alignCenter alignMiddle', 'nowrap'));
$econtact->addHeader(new DataGridColumnHeader('',             '<input type="checkbox" name="checkAll" id="checkAll" value="1" onclick="javascript: checkAllGridCheckboxes(this)">&nbsp;All',              false, false,                                20, 'alignCenter alignMiddle', 'nowrap'));
$econtact->addHeader(new DataGridColumnHeader('email_address',       'Email',           EmailHistoryPeer::EMAIL_DATE, false,      50, 'alignCenter alignMiddle', 'nowrap'));
$econtact->addHeader(new DataGridColumnHeader('company',      'Company',     false, false,     80, 'alignCenter alignMiddle', 'nowrap'));
$econtact->addHeader(new DataGridColumnHeader('department',             'Department',            EmailHistoryPeer::EMAIL_ADDRESS, false,            80, 'alignCenter alignMiddle', 'nowrap'));
$econtact->addHeader(new DataGridColumnHeader('shift',     'Shift',          EmailHistoryPeer::MODIFIED_BY, false,     100, 'alignCenter alignMiddle', 'nowrap'));
$econtact->addHeader(new DataGridColumnHeader('website',     'Website',          EmailHistoryPeer::MODIFIED_BY, false,     100, 'alignCenter alignMiddle', 'nowrap'));
$econtact->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'email_address'));
$econtact->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'DESC'));
sfConfig::set('app_emailcontact_search_headers', $econtact);

$picdetail = new DataGridColumnHeaders(); //employee Ledger Group
$picdetail->addHeader(new DataGridColumnHeader('no',               'No',              false, false,                                20, 'alignCenter alignMiddle', 'nowrap'));
$picdetail->addHeader(new DataGridColumnHeader('trans_date',      'Date',     false, false,     80, 'alignCenter alignMiddle', 'nowrap'));
$picdetail->addHeader(new DataGridColumnHeader('name',       'Customer',           false, false,      50, 'alignCenter alignMiddle', 'nowrap'));
$picdetail->addHeader(new DataGridColumnHeader('department',       'Department',           true, false,      50, 'alignCenter alignMiddle', 'nowrap'));
$picdetail->addHeader(new DataGridColumnHeader('shift',     'Shift',          true, false,     100, 'alignCenter alignMiddle', 'nowrap'));
$picdetail->addHeader(new DataGridColumnHeader('garment',       'Garment',           false, false,      50, 'alignCenter alignMiddle', 'nowrap'));
$picdetail->addHeader(new DataGridColumnHeader('color',       'Color',           false, false,      50, 'alignCenter alignMiddle', 'nowrap'));
$picdetail->addHeader(new DataGridColumnHeader('size',       'Size',           false, false,      50, 'alignCenter alignMiddle', 'nowrap'));
$picdetail->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'name'));
$picdetail->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'DESC'));
sfConfig::set('app_photodetail_search_headers', $picdetail);
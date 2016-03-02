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

<?php

sfConfig::set('app_page_heading', 'DELIVERY TEMPLATE');
sfConfig::set('app_element_count', 400);

$deltemp = new DataGridColumnHeaders(); //employee Ledger Group
$deltemp->addHeader(new DataGridColumnHeader('no',         'No',         false, false,                            50, 'alignCenter alignMiddle', 'nowrap'));
$deltemp->addHeader(new DataGridColumnHeader('company',      'Company',      true, TicketDesignHeaderPeer::COMPANY,          100, 'alignCenter alignMiddle', 'nowrap'));
$deltemp->addHeader(new DataGridColumnHeader('department',       'Department',      true, TicketDesignHeaderPeer::DEPARTMENT,          100, 'alignCenter alignMiddle', 'nowrap'));
$deltemp->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'company' ));
$deltemp->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_dt_grid_headers', $deltemp);

$ticket = new DataGridColumnHeaders(); //employee Ledger Group
$ticket->addHeader(new DataGridColumnHeader('no',         'No',         false, false,                            50, 'alignCenter alignMiddle', 'nowrap'));
$ticket->addHeader(new DataGridColumnHeader('trans_date',      'Date',      true, TicketDeliveryRecordPeer::TRANS_DATE,          100, 'alignCenter alignMiddle', 'nowrap'));
$ticket->addHeader(new DataGridColumnHeader('',      'Company',      true, TicketDeliveryRecordPeer::TICKET_DESIGN_HEADER_ID,          100, 'alignCenter alignMiddle', 'nowrap'));
$ticket->addHeader(new DataGridColumnHeader('delivery_ticket_id',      'Ticket ID',      true, TicketDeliveryRecordPeer::DELIVERY_TICKET_ID,          100, 'alignCenter alignMiddle', 'nowrap'));
$ticket->addHeader(new DataGridColumnHeader('modified_by',      'Last Modified',      true, TicketDeliveryRecordPeer::MODIFIED_BY,          100, 'alignCenter alignMiddle', 'nowrap'));
$ticket->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'trans_date' ));
$ticket->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_td_record_grid_headers', $ticket);
<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>INTERNAL AUDIT</h2></span>');

sfConfig::set('app_submenu_items', 
    array(
        array('Internal Audit Search',           'internalAudit/auditSearch',   'internalAudit', 'auditSearch' ),
#        array('Generate PDF',     'capa/qanPDF',   'capa', 'qanPDF' ),

    ));
    
$aud = new DataGridColumnHeaders();
$aud->addHeader(new DataGridColumnHeader('no',       	'No',               false, false,                           20, 'alignCenter alignMiddle', 'nowrap'));
$aud->addHeader(new DataGridColumnHeader('audited_date',  			'Audited Date',           true, InternalAuditReportSummaryPeer::AUDITED_DATE,   80, 'alignCenter alignMiddle', 'nowrap'));
$aud->addHeader(new DataGridColumnHeader('auditor',  	'Auditor',           true, InternalAuditReportSummaryPeer::AUDITOR,   80, 'alignCenter alignMiddle', 'nowrap'));
$aud->addHeader(new DataGridColumnHeader('corrective_preventive_action_report_no',  	'Report No',         true, InternalAuditReportSummaryPeer::CORRECTIVE_PREVENTIVE_ACTION_REPORT_NO,   150, 'alignCenter alignMiddle', 'nowrap'));
$aud->addHeader(new DataGridColumnHeader('area_audited',  	'Area Audited',           true, InternalAuditReportSummaryPeer::AREA_AUDITED,   80, 'alignCenter alignMiddle', 'nowrap'));
$aud->addHeader(new DataGridColumnHeader('observation',  			'Observation',         true, InternalAuditReportSummaryPeer::OBSERVATION,   150, 'alignCenter alignMiddle', 'nowrap'));
$aud->setSortBy(sfContext::getInstance()->getRequest()->getParameter('sortBy', 'audited_date'));
$aud->setSortOrder(sfContext::getInstance()->getRequest()->getParameter('sortOrder', 'ASC'));
sfConfig::set('app_aud_grid_headers', $aud);
    
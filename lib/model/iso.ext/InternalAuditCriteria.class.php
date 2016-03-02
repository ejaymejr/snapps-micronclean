<?php

class InternalAuditCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('auditor', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(InternalAuditReportSummaryPeer::AUDITOR, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('corrective_preventive_action_report_no', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(InternalAuditReportSummaryPeer::CORRECTIVE_PREVENTIVE_ACTION_REPORT_NO, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('area_audited', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(InternalAuditReportSummaryPeer::AREA_AUDITED, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('observation', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(InternalAuditReportSummaryPeer::OBSERVATION, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('recommendation', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(InternalAuditReportSummaryPeer::RECOMMENDATION, "%$ref%", self::LIKE);
        }
      
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(InternalAuditReportSummaryPeer::AUDITED_DATE, 'DATE(' . InternalAuditReportSummaryPeer::AUDITED_DATE . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(InternalAuditReportSummaryPeer::AUDITED_DATE, 'DATE(' . InternalAuditReportSummaryPeer::AUDITED_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(InternalAuditReportSummaryPeer::AUDITED_DATE, 'DATE(' . InternalAuditReportSummaryPeer::AUDITED_DATE . ') >= \'' . $tos . '\' AND DATE(' . InternalAuditReportSummaryPeer::AUDITED_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($toCrit) {
            $criterions[] = $toCrit;
        }
                
        if (sizeof($criterions)) {

            $this->add($criterions[0]);
            for ($i = 1; $i < sizeof($criterions); $i++) {
                if ($this->critJoin == 'AND') {
                    $this->addAnd($criterions[$i]);
                } else {
                    $this->addOr($criterions[$i]);
                }
            }
        }
        $hs = sfConfig::get('app_aud_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(InternalAuditReportSummaryPeer::AUDITED_DATE );
    }

}
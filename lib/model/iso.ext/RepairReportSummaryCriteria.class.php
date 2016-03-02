<?php

class RepairReportSummaryCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
//        $ref = $req->getParameter('repair_date', '');
//        if ($ref != '') {
//            $criterions[] = $this->getNewCriterion(RepairReportSummaryPeer::REPAIR_DATE, "%$ref%", self::LIKE);
//        }
        $ref = $req->getParameter('customer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RepairReportSummaryPeer::CUSTOMER, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('garment', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RepairReportSummaryPeer::GARMENT_TYPE, "%$ref%", self::LIKE);
        }
            $ref = $req->getParameter('department', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RepairReportSummaryPeer::DEPARTMENT, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('repair_type', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RepairReportSummaryPeer::REPAIR_TYPE, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('remarks', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RepairReportSummaryPeer::REMARKS, "%$ref%", self::LIKE);
        }
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(RepairReportSummaryPeer::REPAIR_DATE, 'DATE(' . RepairReportSummaryPeer::REPAIR_DATE . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(RepairReportSummaryPeer::REPAIR_DATE, 'DATE(' . RepairReportSummaryPeer::REPAIR_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(RepairReportSummaryPeer::REPAIR_DATE, 'DATE(' . RepairReportSummaryPeer::REPAIR_DATE . ') >= \'' . $tos . '\' AND DATE(' . RepairReportSummaryPeer::REPAIR_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_rrs_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(RepairReportSummaryPeer::REPAIR_DATE );
    }

}
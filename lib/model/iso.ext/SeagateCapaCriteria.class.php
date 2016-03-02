<?php

class SeagateCapaCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
//        $ref = $req->getParameter('complain_date_time', '');
//        if ($ref != '') {
//            $criterions[] = $this->getNewCriterion(CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME, "%$ref%", self::LIKE);
//        }
        $ref = $req->getParameter('report_no', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(SeagateCaPaReportPeer::REPORT_NO, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('reported_by', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(SeagateCaPaReportPeer::REPORTED_BY, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('title', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(SeagateCaPaReportPeer::TITLE, "%$ref%", self::LIKE);
        }
        
        
        $ref = $req->getParameter('issue_date', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(SeagateCaPaReportPeer::ISSUE_DATE, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('response_date', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(SeagateCaPaReportPeer::RESPONSE_DATE, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('car_followup_required', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(SeagateCaPaReportPeer::CAR_FOLLOWUP_REQUIRED, "%$ref%", self::LIKE);
        }       
        
        $ref = $req->getParameter('car_followup_date', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(SeagateCaPaReportPeer::CAR_FOLLOWUP_DATE, "%$ref%", self::LIKE);
        }       
        $ref = $req->getParameter('car_ca_status', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(SeagateCaPaReportPeer::CAR_CA_STATUS, "%$ref%", self::LIKE);
        }       
        $ref = $req->getParameter('car_plan_effective', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(SeagateCaPaReportPeer::CAR_PLAN_EFFECTIVE, "%$ref%", self::LIKE);
        }       
        $ref = $req->getParameter('car_followup_date', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(SeagateCaPaReportPeer::CAR_FOLLOWUP_DATE, "%$ref%", self::LIKE);
        }       
        $ref = $req->getParameter('car_verified_by', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(SeagateCaPaReportPeer::CAR_VERIFIED_BY, "%$ref%", self::LIKE);
        }       
        
        $ref = $req->getParameter('car_closure_date', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(SeagateCaPaReportPeer::CAR_CLOSURE_DATE, "%$ref%", self::LIKE);
        }
        
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(SeagateCaPaReportPeer::ISSUE_DATE, 'DATE(' . SeagateCaPaReportPeer::ISSUE_DATE . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(SeagateCaPaReportPeer::ISSUE_DATE, 'DATE(' . SeagateCaPaReportPeer::ISSUE_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(SeagateCaPaReportPeer::ISSUE_DATE, 'DATE(' . SeagateCaPaReportPeer::ISSUE_DATE . ') >= \'' . $tos . '\' AND DATE(' . SeagateCaPaReportPeer::ISSUE_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_sea_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(SeagateCaPaReportPeer::ISSUE_DATE );
    }

}
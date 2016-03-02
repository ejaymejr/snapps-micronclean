<?php

class EnggEvalNoticeCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
//        $ref = $req->getParameter('initiated_date', '');
//        if ($ref != '') {
//            $criterions[] = $this->getNewCriterion(EnggEvalNoticePeer::INITIATED_DATE, "%$ref%", self::LIKE);
//        }
        $ref = $req->getParameter('een_no', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(EnggEvalNoticePeer::EEN_NO, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('initiator', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(EnggEvalNoticePeer::INITIATOR, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('customer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(EnggEvalNoticePeer::CUSTOMER, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('closed_out_date', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(EnggEvalNoticePeer::CLOSED_OUT_DATE, "%$ref%", self::LIKE);
        }
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(EnggEvalNoticePeer::INITIATED_DATE, 'DATE(' . EnggEvalNoticePeer::INITIATED_DATE . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(EnggEvalNoticePeer::INITIATED_DATE, 'DATE(' . EnggEvalNoticePeer::INITIATED_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(EnggEvalNoticePeer::INITIATED_DATE, 'DATE(' . EnggEvalNoticePeer::INITIATED_DATE . ') >= \'' . $tos . '\' AND DATE(' . EnggEvalNoticePeer::INITIATED_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($toCrit) {
            $criterions[] = $toCrit;
        }
        
        $ds = $req->getParameter('ds', '');
        $de = $req->getParameter('de', '');
        $toCrit = false;
        if ($ds != '') {
            $toCrit = $this->getNewCriterion(EnggEvalNoticePeer::CLOSED_OUT_DATE, 'DATE(' . EnggEvalNoticePeer::CLOSED_OUT_DATE . ') >= \'' . $ds . '\'', self::CUSTOM);
        }
        if ($de != '') {
            $toCrit = $this->getNewCriterion(EnggEvalNoticePeer::CLOSED_OUT_DATE, 'DATE(' . EnggEvalNoticePeer::CLOSED_OUT_DATE . ') <= \'' . $de . '\'', self::CUSTOM);
        }
        if ($ds != '' && $de != '') {
            if ($ds > $de) {
                $dtmp = $ds;
                $ds = $de;
                $de = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(EnggEvalNoticePeer::CLOSED_OUT_DATE, 'DATE(' . EnggEvalNoticePeer::CLOSED_OUT_DATE . ') >= \'' . $ds . '\' AND DATE(' . EnggEvalNoticePeer::CLOSED_OUT_DATE . ') <= \'' . $de . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_een_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(EnggEvalNoticePeer::INITIATED_DATE );
    }

}
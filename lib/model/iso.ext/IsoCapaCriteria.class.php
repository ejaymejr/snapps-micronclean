<?php

class IsoCapaCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
//        $ref = $req->getParameter('initiated_date', '');
//        if ($ref != '') {
//            $criterions[] = $this->getNewCriterion(IsoCapaPeer::INITIATED_DATE, "%$ref%", self::LIKE);
//        }
        $ref = $req->getParameter('qan_no', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(IsoCapaPeer::QAN_NO, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('initiator', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(IsoCapaPeer::INITIATOR, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('customer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(IsoCapaPeer::CUSTOMER, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('closed_out_date', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(IsoCapaPeer::CLOSED_OUT_DATE, "%$ref%", self::LIKE);
        }
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(IsoCapaPeer::INITIATED_DATE, 'DATE(' . IsoCapaPeer::INITIATED_DATE . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(IsoCapaPeer::INITIATED_DATE, 'DATE(' . IsoCapaPeer::INITIATED_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(IsoCapaPeer::INITIATED_DATE, 'DATE(' . IsoCapaPeer::INITIATED_DATE . ') >= \'' . $tos . '\' AND DATE(' . IsoCapaPeer::INITIATED_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_qan_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(IsoCapaPeer::INITIATED_DATE );
    }

}
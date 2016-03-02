<?php

class LogReasonCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('garment_code', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(LogReasonPeer::GARMENT_CODE, "%$ref%", self::LIKE);
        }

        $ref = $req->getParameter('type', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(LogReasonPeer::TYPE, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('size', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(LogReasonPeer::SIZE, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('color', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(LogReasonPeer::COLOR, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('number', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(LogReasonPeer::NUMBER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('customer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(LogReasonPeer::CUSTOMER, "%$ref%", self::LIKE);
        }
        
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(LogReasonPeer::SUBMITTED_DATE, 'DATE(' . LogReasonPeer::SUBMITTED_DATE . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(LogReasonPeer::SUBMITTED_DATE, 'DATE(' . LogReasonPeer::SUBMITTED_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(LogReasonPeer::SUBMITTED_DATE, 'DATE(' . LogReasonPeer::SUBMITTED_DATE . ') >= \'' . $tos . '\' AND DATE(' . LogReasonPeer::SUBMITTED_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_log_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(LogReasonPeer::SUBMITTED_DATE);
    }

}
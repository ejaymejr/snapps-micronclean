<?php

class RepairCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('garment_code', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RepairPeer::GARMENT_CODE, "%$ref%", self::LIKE);
        }

        $ref = $req->getParameter('type', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RepairPeer::TYPE, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('size', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RepairPeer::SIZE, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('color', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RepairPeer::COLOR, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('number', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RepairPeer::NUMBER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('customer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RepairPeer::CUSTOMER, "%$ref%", self::LIKE);
        }
        
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(RepairPeer::REPAIR_RECEIVE_DATE, 'DATE(' . RepairPeer::REPAIR_RECEIVE_DATE . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(RepairPeer::REPAIR_RECEIVE_DATE, 'DATE(' . RepairPeer::REPAIR_RECEIVE_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(RepairPeer::REPAIR_RECEIVE_DATE, 'DATE(' . RepairPeer::REPAIR_RECEIVE_DATE . ') >= \'' . $tos . '\' AND DATE(' . RepairPeer::REPAIR_RECEIVE_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_repair_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(RepairPeer::REPAIR_RECEIVE_DATE);
    }

}
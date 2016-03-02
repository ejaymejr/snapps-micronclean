<?php

class RejectCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('garment_code', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RejectPeer::GARMENT_CODE, "%$ref%", self::LIKE);
        }

        $ref = $req->getParameter('type', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RejectPeer::TYPE, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('size', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RejectPeer::SIZE, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('color', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RejectPeer::COLOR, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('number', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RejectPeer::NUMBER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('customer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(RejectPeer::CUSTOMER, "%$ref%", self::LIKE);
        }
        
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(RejectPeer::REJECT_DATE, 'DATE(' . RejectPeer::REJECT_DATE . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(RejectPeer::REJECT_DATE, 'DATE(' . RejectPeer::REJECT_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(RejectPeer::REJECT_DATE, 'DATE(' . RejectPeer::REJECT_DATE . ') >= \'' . $tos . '\' AND DATE(' . RejectPeer::REJECT_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_reject_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(RejectPeer::REJECT_DATE);
    }

}
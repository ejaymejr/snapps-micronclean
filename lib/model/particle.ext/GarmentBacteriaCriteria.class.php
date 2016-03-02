<?php

class GarmentBacteriaCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('customer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentBacteriaCountPeer::CUSTOMER, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('department', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentBacteriaCountPeer::DEPARTMENT, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('type', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentBacteriaCountPeer::TYPE, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('bacteria_count', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentBacteriaCountPeer::BACTERIA_COUNT, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('washer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentBacteriaCountPeer::WASHER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('dryer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentBacteriaCountPeer::DRYER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('tester', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentBacteriaCountPeer::TESTER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('garment_code', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentBacteriaCountPeer::TESTER, "%$ref%", self::LIKE);
        }
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(GarmentBacteriaCountPeer::DATE_TIME, 'DATE(' . GarmentBacteriaCountPeer::DATE_TIME . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(GarmentBacteriaCountPeer::DATE_TIME, 'DATE(' . GarmentBacteriaCountPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(GarmentBacteriaCountPeer::DATE_TIME, 'DATE(' . GarmentBacteriaCountPeer::DATE_TIME . ') >= \'' . $tos . '\' AND DATE(' . GarmentBacteriaCountPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_gbc_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(GarmentBacteriaCountPeer::DATE_TIME);
    }

}
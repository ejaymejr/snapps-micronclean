<?php

class ParticleDataCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('customer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(ParticleDataPeer::CUSTOMER, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('department', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(ParticleDataPeer::DEPARTMENT, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('type', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(ParticleDataPeer::TYPE, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('washer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(ParticleDataPeer::WASHER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('dryer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(ParticleDataPeer::DRYER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('tester', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(ParticleDataPeer::TESTER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('garment_code', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(ParticleDataPeer::TESTER, "%$ref%", self::LIKE);
        }
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(ParticleDataPeer::DATE_TIME, 'DATE(' . ParticleDataPeer::DATE_TIME . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(ParticleDataPeer::DATE_TIME, 'DATE(' . ParticleDataPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(ParticleDataPeer::DATE_TIME, 'DATE(' . ParticleDataPeer::DATE_TIME . ') >= \'' . $tos . '\' AND DATE(' . ParticleDataPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_helmke_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(ParticleDataPeer::DATE_TIME);
    }

}
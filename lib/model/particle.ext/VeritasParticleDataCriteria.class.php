<?php

class VeritasParticleDataCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('customer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(VeritasParticleDataPeer::CUSTOMER, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('department', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(VeritasParticleDataPeer::DEPARTMENT, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('type', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(VeritasParticleDataPeer::TYPE, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('washer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(VeritasParticleDataPeer::WASHER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('dryer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(VeritasParticleDataPeer::DRYER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('tester', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(VeritasParticleDataPeer::TESTER, "%$ref%", self::LIKE);
        }
        
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(VeritasParticleDataPeer::DATE_TIME, 'DATE(' . VeritasParticleDataPeer::DATE_TIME . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(VeritasParticleDataPeer::DATE_TIME, 'DATE(' . VeritasParticleDataPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(VeritasParticleDataPeer::DATE_TIME, 'DATE(' . VeritasParticleDataPeer::DATE_TIME . ') >= \'' . $tos . '\' AND DATE(' . VeritasParticleDataPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_ver_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(VeritasParticleDataPeer::DATE_TIME);
    }

}
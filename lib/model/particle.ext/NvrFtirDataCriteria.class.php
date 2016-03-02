<?php

class NvrFtirDataCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('customer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(NvrFtirDataPeer::CUSTOMER, "%$ref%", self::LIKE);
        }

        $ref = $req->getParameter('department', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(NvrFtirDataPeer::DEPARTMENT, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('type', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(NvrFtirDataPeer::TYPE, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('washer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(NvrFtirDataPeer::WASHER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('dryer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(NvrFtirDataPeer::DRYER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('garment_code', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(NvrFtirDataPeer::GARMENT_CODE, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('tester', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(NvrFtirDataPeer::TESTER, "%$ref%", self::LIKE);
        }
        
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(NvrFtirDataPeer::DATE_TIME, 'DATE(' . NvrFtirDataPeer::DATE_TIME . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(NvrFtirDataPeer::DATE_TIME, 'DATE(' . NvrFtirDataPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(NvrFtirDataPeer::DATE_TIME, 'DATE(' . NvrFtirDataPeer::DATE_TIME . ') >= \'' . $tos . '\' AND DATE(' . NvrFtirDataPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_nvr_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(NvrFtirDataPeer::DATE_TIME);
    }

}
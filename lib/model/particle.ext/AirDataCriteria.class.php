<?php

class AirDataCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('x_data', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(AirDataPeer::X_DATA, "%$ref%", self::LIKE);
        }

        $ref = $req->getParameter('filter_area', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(AirDataPeer::FILTER_AREA, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('temperature', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(AirDataPeer::TEMPERATURE, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('rh', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(AirDataPeer::RH, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('tester', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(AirDataPeer::TESTER, "%$ref%", self::LIKE);
        }
        
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(AirDataPeer::DATE_TIME, 'DATE(' . AirDataPeer::DATE_TIME . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(AirDataPeer::DATE_TIME, 'DATE(' . AirDataPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(AirDataPeer::DATE_TIME, 'DATE(' . AirDataPeer::DATE_TIME . ') >= \'' . $tos . '\' AND DATE(' . AirDataPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_air_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(AirDataPeer::DATE_TIME);
    }

}
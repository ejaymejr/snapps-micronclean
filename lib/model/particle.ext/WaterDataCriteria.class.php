<?php

class WaterDataCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('resistivity', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(WaterDataPeer::RESISTIVITY, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('tester', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(WaterDataPeer::TESTER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('lcl', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(WaterDataPeer::lcl, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('remark', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(WaterDataPeer::REMARK, "%$ref%", self::LIKE);
        }
        
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(WaterDataPeer::DATE_TIME, 'DATE(' . WaterDataPeer::DATE_TIME . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(WaterDataPeer::DATE_TIME, 'DATE(' . WaterDataPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(WaterDataPeer::DATE_TIME, 'DATE(' . WaterDataPeer::DATE_TIME . ') >= \'' . $tos . '\' AND DATE(' . WaterDataPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_water_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(WaterDataPeer::DATE_TIME);
    }

}
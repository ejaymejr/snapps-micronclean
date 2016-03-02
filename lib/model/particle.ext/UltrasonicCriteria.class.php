<?php

class UltrasonicCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('frequency', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(UltrasonicPeer::FREQUENCY, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('power', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(UltrasonicPeer::POWER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('capacitance', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(UltrasonicPeer::CAPACITANCE, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('done_by', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(UltrasonicPeer::DONE_BY, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('verified_by', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(UltrasonicPeer::VERIFIED_BY, "%$ref%", self::LIKE);
        }

        $ref = $req->getParameter('equipment_name', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(UltrasonicPeer::EQUIPMENT_NAME, "%$ref%", self::LIKE);
        }      
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(UltrasonicPeer::TRANS_DATE, 'DATE(' . UltrasonicPeer::TRANS_DATE . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(UltrasonicPeer::TRANS_DATE, 'DATE(' . UltrasonicPeer::TRANS_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(UltrasonicPeer::TRANS_DATE, 'DATE(' . UltrasonicPeer::TRANS_DATE . ') >= \'' . $tos . '\' AND DATE(' . UltrasonicPeer::TRANS_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_ultrasonic_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(UltrasonicPeer::TRANS_DATE);
    }

}
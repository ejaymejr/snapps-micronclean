<?php

class Pms6252WeeklyCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
        $ref = $req->getParameter('machine_no', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(Pms6252WeeklyPeer::MACHINE_NO, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('initial', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(Pms6252WeeklyPeer::INITIAL, "%$ref%", self::LIKE);
        }
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(Pms6252WeeklyPeer::TRANS_DATE, 'DATE(' . Pms6252WeeklyPeer::TRANS_DATE . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(Pms6252WeeklyPeer::TRANS_DATE, 'DATE(' . Pms6252WeeklyPeer::TRANS_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(Pms6252WeeklyPeer::TRANS_DATE, 'DATE(' . Pms6252WeeklyPeer::TRANS_DATE . ') >= \'' . $tos . '\' AND DATE(' . Pms6252WeeklyPeer::TRANS_DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_m6252weekly_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(Pms6252WeeklyPeer::TRANS_DATE );
    }

}
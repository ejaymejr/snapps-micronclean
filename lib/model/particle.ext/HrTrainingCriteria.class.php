<?php

class HrTrainingCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('description', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(HrTrainingPeer::DESCRIPTION, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('place_held', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(HrTrainingPeer::PLACE_HELD, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('no_hrs', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(HrTrainingPeer::NO_HRS, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('name_trainor', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(HrTrainingPeer::NAME_TRAINOR, "%$ref%", self::LIKE);
        }
        
        
        $frst = $req->getParameter('frst', '');
        $fren = $req->getParameter('fren', '');
        $frCrit = false;
        if ($frst != '') {
            $frCrit = $this->getNewCriterion(HrTrainingPeer::DATE_FROM, 'DATE(' . HrTrainingPeer::DATE_FROM . ') >= \'' . $frst . '\'', self::CUSTOM);
        }
        if ($fren != '') {
            $frCrit = $this->getNewCriterion(HrTrainingPeer::DATE_FROM, 'DATE(' . HrTrainingPeer::DATE_FROM . ') <= \'' . $fren . '\'', self::CUSTOM);
        }
        if ($frst != '' && $fren != '') {
            if ($frst > $fren) {
                $dtmp = $frst;
                $frst = $fren;
                $fren = $dtmp;
            }     
            $frCrit = $this->getNewCriterion(HrTrainingPeer::DATE_FROM, 'DATE(' . HrTrainingPeer::DATE_FROM . ') >= \'' . $frst . '\' AND DATE(' . HrTrainingPeer::DATE_FROM . ') <= \'' . $fren . '\'', self::CUSTOM);
        }
        if ($frCrit) {
            $criterions[] = $frCrit;
        }
        
        $tost = $req->getParameter('tost', '');
        $toen = $req->getParameter('toen', '');
        $toCrit = false;
        if ($tost != '') {
            $toCrit = $this->getNewCriterion(HrTrainingPeer::DATE_TO, 'DATE(' . HrTrainingPeer::DATE_TO . ') >= \'' . $tost . '\'', self::CUSTOM);
        }
        if ($toen != '') {
            $toCrit = $this->getNewCriterion(HrTrainingPeer::DATE_TO, 'DATE(' . HrTrainingPeer::DATE_TO . ') <= \'' . $toen . '\'', self::CUSTOM);
        }
        if ($tost != '' && $toen != '') {
            if ($tost > $toen) {
                $dtmp = $tost;
                $tost = $toen;
                $toen = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(HrTrainingPeer::DATE_TO, 'DATE(' . HrTrainingPeer::DATE_TO . ') >= \'' . $tost . '\' AND DATE(' . HrTrainingPeer::DATE_TO . ') <= \'' . $toen . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_trn_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(HrTrainingPeer::DATE_FROM);
    }

}
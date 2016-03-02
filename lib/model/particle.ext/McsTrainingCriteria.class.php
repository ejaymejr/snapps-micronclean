<?php

class HrTrainingRecordCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('employee_no', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(HrTrainingRecordPeer::DESCRIPTION, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('name', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(HrTrainingRecordPeer::NAME, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('company', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(HrTrainingRecordPeer::NO_HRS, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('verify', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(HrTrainingRecordPeer::NAME_TRAINOR, "%$ref%", self::LIKE);
        }
        
        
        $frst = $req->getParameter('frst', '');
        $fren = $req->getParameter('fren', '');
        $frCrit = false;
        if ($frst != '') {
            $frCrit = $this->getNewCriterion(HrTrainingRecordPeer::DATE_FROM, 'DATE(' . HrTrainingRecordPeer::DATE_FROM . ') >= \'' . $frst . '\'', self::CUSTOM);
        }
        if ($fren != '') {
            $frCrit = $this->getNewCriterion(HrTrainingRecordPeer::DATE_FROM, 'DATE(' . HrTrainingRecordPeer::DATE_FROM . ') <= \'' . $fren . '\'', self::CUSTOM);
        }
        if ($frst != '' && $fren != '') {
            if ($frst > $fren) {
                $dtmp = $frst;
                $frst = $fren;
                $fren = $dtmp;
            }     
            $frCrit = $this->getNewCriterion(HrTrainingRecordPeer::DATE_FROM, 'DATE(' . HrTrainingRecordPeer::DATE_FROM . ') >= \'' . $frst . '\' AND DATE(' . HrTrainingRecordPeer::DATE_FROM . ') <= \'' . $fren . '\'', self::CUSTOM);
        }
        if ($frCrit) {
            $criterions[] = $frCrit;
        }
        
        $tost = $req->getParameter('tost', '');
        $toen = $req->getParameter('toen', '');
        $toCrit = false;
        if ($tost != '') {
            $toCrit = $this->getNewCriterion(HrTrainingRecordPeer::DATE_TO, 'DATE(' . HrTrainingRecordPeer::DATE_TO . ') >= \'' . $tost . '\'', self::CUSTOM);
        }
        if ($toen != '') {
            $toCrit = $this->getNewCriterion(HrTrainingRecordPeer::DATE_TO, 'DATE(' . HrTrainingRecordPeer::DATE_TO . ') <= \'' . $toen . '\'', self::CUSTOM);
        }
        if ($tost != '' && $toen != '') {
            if ($tost > $toen) {
                $dtmp = $tost;
                $tost = $toen;
                $toen = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(HrTrainingRecordPeer::DATE_TO, 'DATE(' . HrTrainingRecordPeer::DATE_TO . ') >= \'' . $tost . '\' AND DATE(' . HrTrainingRecordPeer::DATE_TO . ') <= \'' . $toen . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_mcs_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
            $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        if ($sqlField) {
            if ($sortOrder == 'ASC') {
                $this->addAscendingOrderByColumn($sqlField);
            } else {
                $this->addDescendingOrderByColumn($sqlField);                
            }
        } else {            
            $this->addDescendingOrderByColumn(HrTrainingRecordPeer::DATE_FROM);
        }
        //$this->addDescendingOrderByColumn(HrTrainingRecordPeer::DATE_FROM);
    }

}
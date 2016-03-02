<?php

class HrTrainingDevelopmentCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('employee_no', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(HrTrainingDevelopmentPeer::EMPLOYEE_NO, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('name', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(HrTrainingDevelopmentPeer::NAME, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('company', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(HrTrainingDevelopmentPeer::COMPANY, "%$ref%", self::LIKE);
        }
        
        
        $ref = $req->getParameter('description', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(HrTrainingDevelopmentPeer::DESCRIPTION, "%$ref%", self::LIKE);
        }
        
        $frst = $req->getParameter('frst', '');
        $fren = $req->getParameter('fren', '');
        $frCrit = false;
        if ($frst != '') {
            $frCrit = $this->getNewCriterion(HrTrainingDevelopmentPeer::DATE_FROM, 'DATE(' . HrTrainingDevelopmentPeer::DATE_FROM . ') >= \'' . $frst . '\'', self::CUSTOM);
        }
        if ($fren != '') {
            $frCrit = $this->getNewCriterion(HrTrainingDevelopmentPeer::DATE_FROM, 'DATE(' . HrTrainingDevelopmentPeer::DATE_FROM . ') <= \'' . $fren . '\'', self::CUSTOM);
        }
        if ($frst != '' && $fren != '') {
            if ($frst > $fren) {
                $dtmp = $frst;
                $frst = $fren;
                $fren = $dtmp;
            }     
            $frCrit = $this->getNewCriterion(HrTrainingDevelopmentPeer::DATE_FROM, 'DATE(' . HrTrainingDevelopmentPeer::DATE_FROM . ') >= \'' . $frst . '\' AND DATE(' . HrTrainingDevelopmentPeer::DATE_FROM . ') <= \'' . $fren . '\'', self::CUSTOM);
        }
        if ($frCrit) {
            $criterions[] = $frCrit;
        }
        
        $tost = $req->getParameter('tost', '');
        $toen = $req->getParameter('toen', '');
        $toCrit = false;
        if ($tost != '') {
            $toCrit = $this->getNewCriterion(HrTrainingDevelopmentPeer::DATE_TO, 'DATE(' . HrTrainingDevelopmentPeer::DATE_TO . ') >= \'' . $tost . '\'', self::CUSTOM);
        }
        if ($toen != '') {
            $toCrit = $this->getNewCriterion(HrTrainingDevelopmentPeer::DATE_TO, 'DATE(' . HrTrainingDevelopmentPeer::DATE_TO . ') <= \'' . $toen . '\'', self::CUSTOM);
        }
        if ($tost != '' && $toen != '') {
            if ($tost > $toen) {
                $dtmp = $tost;
                $tost = $toen;
                $toen = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(HrTrainingDevelopmentPeer::DATE_TO, 'DATE(' . HrTrainingDevelopmentPeer::DATE_TO . ') >= \'' . $tost . '\' AND DATE(' . HrTrainingDevelopmentPeer::DATE_TO . ') <= \'' . $toen . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_ext_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(HrTrainingDevelopmentPeer::DATE_FROM);
    }

}
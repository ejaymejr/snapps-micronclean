<?php

class InspectionRecordCriteria extends Criteria
{
    protected $critJoin = 'AND';
    
    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
        $ref = $req->getParameter('inspection_type', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(InspectionRecordPeer::INSPECTION_TYPE, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('checked_by', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(InspectionRecordPeer::CHECKED_BY, "%$ref%", self::LIKE);
        }
        
        $tis = $req->getParameter('tis', '');
        $tie = $req->getParameter('tie', '');
        $tiCrit = false;
        if ($tis != '') {
            $tiCrit = $this->getNewCriterion(InspectionRecordPeer::INSPECTION_DATE, 'DATE(' . InspectionRecordPeer::INSPECTION_DATE . ') >= \'' . $tis . '\'', self::CUSTOM);
        }
        if ($tie != '') {
            $tiCrit = $this->getNewCriterion(InspectionRecordPeer::INSPECTION_DATE, 'DATE(' . InspectionRecordPeer::INSPECTION_DATE . ') <= \'' . $tie . '\'', self::CUSTOM);
        }
        if ($tis != '' && $tie != '') {
            if ($tis > $tie) {
                $dtmp = $tis;
                $tis = $tie;
                $tie = $dtmp;
            }     
            $tiCrit = $this->getNewCriterion(InspectionRecordPeer::INSPECTION_DATE, 'DATE(' . InspectionRecordPeer::INSPECTION_DATE . ') >= \'' . $tis . '\' AND DATE(' . InspectionRecordPeer::INSPECTION_DATE . ') <= \'' . $tie . '\'', self::CUSTOM);
        }
        if ($tiCrit) {
            $criterions[] = $tiCrit;
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
        $hs = sfConfig::get('app_dailyinspection_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        if ($sqlField) {
            if ($sortOrder == 'ASC') {
                $this->addAscendingOrderByColumn($sqlField );
            } else {
                $this->addDescendingOrderByColumn($sqlField );
            }
        } else {            
        	$this->addDescendingOrderByColumn(InspectionRecordPeer::INSPECTION_DATE);
        }
    }
    
}
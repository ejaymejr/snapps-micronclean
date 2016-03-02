<?php

class InspectionFieldListCriteria extends Criteria
{
    protected $critJoin = 'AND';
    
    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
        $ref = $req->getParameter('field_name', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(InspectionFieldListPeer::FIELD_NAME, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('field_type', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(InspectionFieldListPeer::FIELD_TYPE, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('remark', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(InspectionFieldListPeer::REMARK, "%$ref%", self::LIKE);
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
        $hs = sfConfig::get('app_fieldlist_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        if ($sqlField) {
            if ($sortOrder == 'ASC') {
                $this->addAscendingOrderByColumn($sqlField );
            } else {
                $this->addDescendingOrderByColumn($sqlField );
            }
        } else {            
        	$this->addAscendingOrderByColumn(InspectionFieldListPeer::FIELD_NAME );
        }
    }
    
}
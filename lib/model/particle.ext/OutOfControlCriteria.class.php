<?php

class OutOfControlCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('observation', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(OutOfControlPeer::OBSERVATION, "%$ref%", self::LIKE);
        }

        $ref = $req->getParameter('investigate_by', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(OutOfControlPeer::INVESTIGATE_BY, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('prop_action', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(OutOfControlPeer::PROP_ACTION, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('review_by', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(OutOfControlPeer::REVIEW_BY, "%$ref%", self::LIKE);
        }
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(OutOfControlPeer::DATE_TIME, 'DATE(' . OutOfControlPeer::DATE_TIME . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(OutOfControlPeer::DATE_TIME, 'DATE(' . OutOfControlPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(OutOfControlPeer::DATE_TIME, 'DATE(' . OutOfControlPeer::DATE_TIME . ') >= \'' . $tos . '\' AND DATE(' . OutOfControlPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_ooc_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(OutOfControlPeer::DATE_TIME);
    }

}
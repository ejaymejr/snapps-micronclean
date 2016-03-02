<?php

class ManagementReviewCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('discussion', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(ManagementReviewPeer::DISCUSSION, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('conclusion', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(ManagementReviewPeer::CONCLUSION, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('chair_person', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(ManagementReviewPeer::CHAIR_PERSON, "%$ref%", self::LIKE);
        }
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(ManagementReviewPeer::DATE, 'DATE(' . ManagementReviewPeer::DATE . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(ManagementReviewPeer::DATE, 'DATE(' . ManagementReviewPeer::DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(ManagementReviewPeer::DATE, 'DATE(' . ManagementReviewPeer::DATE . ') >= \'' . $tos . '\' AND DATE(' . ManagementReviewPeer::DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_mgt_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(ManagementReviewPeer::DATE );
    }

}
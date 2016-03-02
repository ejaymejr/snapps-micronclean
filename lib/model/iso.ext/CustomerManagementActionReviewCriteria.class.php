<?php

class CustomerManagementActionReviewCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
//        $ref = $req->getParameter('date_time', '');
//        if ($ref != '') {
//            $criterions[] = $this->getNewCriterion(CustomerManagementActionReviewPeer::DATE_TIME, "%$ref%", self::LIKE);
//        }
        $ref = $req->getParameter('case_action', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(CustomerManagementActionReviewPeer::CASE_ACTION, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('reviewed_by', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(CustomerManagementActionReviewPeer::REVIEWED_BY, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('review_date', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(CustomerManagementActionReviewPeer::REVIEW_DATE, "%$ref%", self::LIKE);
        }
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(CustomerManagementActionReviewPeer::DATE_TIME, 'DATE(' . CustomerManagementActionReviewPeer::DATE_TIME . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(CustomerManagementActionReviewPeer::DATE_TIME, 'DATE(' . CustomerManagementActionReviewPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(CustomerManagementActionReviewPeer::DATE_TIME, 'DATE(' . CustomerManagementActionReviewPeer::DATE_TIME . ') >= \'' . $tos . '\' AND DATE(' . CustomerManagementActionReviewPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_act_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(CustomerManagementActionReviewPeer::DATE_TIME );
    }

}
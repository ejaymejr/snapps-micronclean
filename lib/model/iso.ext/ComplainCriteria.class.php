<?php

class ComplainCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
//        $ref = $req->getParameter('complain_date_time', '');
//        if ($ref != '') {
//            $criterions[] = $this->getNewCriterion(CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME, "%$ref%", self::LIKE);
//        }
        $ref = $req->getParameter('company_name', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(CustomerManagementComplaintFormPeer::COMPANY_NAME, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('complaint_description', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(CustomerManagementComplaintFormPeer::COMPLAIN_DESCRIPTION, "%$ref%", self::LIKE);
        }
        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME, 'DATE(' . CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME, 'DATE(' . CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME, 'DATE(' . CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME . ') >= \'' . $tos . '\' AND DATE(' . CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_com_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME );
    }

}
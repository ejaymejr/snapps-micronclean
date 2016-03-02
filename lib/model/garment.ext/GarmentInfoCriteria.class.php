<?php

class GarmentInfoCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();

        $ref = $req->getParameter('garment_code', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentInformationPeer::GARMENT_CODE, "%$ref%", self::LIKE);
        }

        $ref = $req->getParameter('type', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentInformationPeer::TYPE, "%$ref%", self::LIKE);
        }
       
        $ref = $req->getParameter('size', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentInformationPeer::SIZE, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('customer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentInformationPeer::CUSTOMER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('number', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentInformationPeer::NUMBER, "%$ref%", self::LIKE);
        }
        
        $ref = $req->getParameter('hanger_no', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(GarmentInformationPeer::HANGER_NO, "%$ref%", self::LIKE);
        }
        
        
//        $tos = $req->getParameter('tos', '');
//        $toe = $req->getParameter('toe', '');
//        $toCrit = false;
//        if ($tos != '') {
//            $toCrit = $this->getNewCriterion(OutscanPeer::DATE_TIME, 'DATE(' . OutscanPeer::DATE_TIME . ') >= \'' . $tos . '\'', self::CUSTOM);
//        }
//        if ($toe != '') {
//            $toCrit = $this->getNewCriterion(OutscanPeer::DATE_TIME, 'DATE(' . OutscanPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
//        }
//        if ($tos != '' && $toe != '') {
//            if ($tos > $toe) {
//                $dtmp = $tos;
//                $tos = $toe;
//                $toe = $dtmp;
//            }     
//            $toCrit = $this->getNewCriterion(OutscanPeer::DATE_TIME, 'DATE(' . OutscanPeer::DATE_TIME . ') >= \'' . $tos . '\' AND DATE(' . OutscanPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
//        }
//        if ($toCrit) {
//            $criterions[] = $toCrit;
//        }
                
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
        $hs = sfConfig::get('app_ginfo_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(GarmentInformationPeer::TYPE);
    }

}
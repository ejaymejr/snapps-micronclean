<?php

class PlasticBagCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
//        $ref = $req->getParameter('date_time', '');
//        if ($ref != '') {
//            $criterions[] = $this->getNewCriterion(PlasticBagPeer::DATE_TIME, "%$ref%", self::LIKE);
//        }
        $ref = $req->getParameter('type_of_plastic', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(PlasticBagPeer::TYPE_OF_PLASTIC, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('by_who', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(PlasticBagPeer::BY_WHO, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('surface_area', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(PlasticBagPeer::SURFACE_AREA, "%$ref%", self::LIKE);
        }        
        $ref = $req->getParameter('vol_in_ml', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(PlasticBagPeer::VOL_IN_ML, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('lpc_blank_in_ml', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(PlasticBagPeer::LPC_BLANK_IN_ML, "%$ref%", self::LIKE);
        }        
        $ref = $req->getParameter('lpc_plastic_in_ml', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(PlasticBagPeer::LPC_PLASTIC_IN_ML, "%$ref%", self::LIKE);
        }        
        $ref = $req->getParameter('lpc_plastic_in_cm', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(PlasticBagPeer::LPC_PLASTIC_IN_CM, "%$ref%", self::LIKE);
        }        
        $ref = $req->getParameter('status', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(PlasticBagPeer::STATUS, "%$ref%", self::LIKE);
        }        
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(PlasticBagPeer::DATE_TIME, 'DATE(' . PlasticBagPeer::DATE_TIME . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(PlasticBagPeer::DATE_TIME, 'DATE(' . PlasticBagPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(PlasticBagPeer::DATE_TIME, 'DATE(' . PlasticBagPeer::DATE_TIME . ') >= \'' . $tos . '\' AND DATE(' . PlasticBagPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_pbag_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(PlasticBagPeer::DATE_TIME );
    }

}
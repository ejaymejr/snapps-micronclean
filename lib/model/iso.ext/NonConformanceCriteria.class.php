<?php
class NonConformanceCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
//        $ref = $req->getParameter('customer', '');
//        if ($ref != '') {
//            $criterions[] = $this->getNewCriterion(NonConformancePartPeer::DATE, "%$ref%", self::LIKE);
//        }
        $ref = $req->getParameter('contract_no', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(NonConformancePartPeer::CUSTOMER, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('remarks', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(NonConformancePartPeer::COMPANY, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('product_type', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(NonConformancePartPeer::PRODUCT_TYPE, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('part', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(NonConformancePartPeer::PART, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('quantity', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(NonConformancePartPeer::QUANTITY, "%$ref%", self::LIKE);
        }
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(NonConformancePartPeer::DATE, 'DATE(' . NonConformancePartPeer::DATE . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(NonConformancePartPeer::DATE, 'DATE(' . NonConformancePartPeer::DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(NonConformancePartPeer::DATE, 'DATE(' . NonConformancePartPeer::DATE . ') >= \'' . $tos . '\' AND DATE(' . NonConformancePartPeer::DATE . ') <= \'' . $toe . '\'', self::CUSTOM);
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
        $hs = sfConfig::get('app_conf_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(NonConformancePartPeer::DATE );
    }

}
<?php
class ContractCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
        $ref = $req->getParameter('customer', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(ContractManagementLogPeer::CUSTOMER, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('contract_no', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(ContractManagementLogPeer::CONTRACT_NO, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('remarks', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(ContractManagementLogPeer::REMARKS, "%$ref%", self::LIKE);
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
        $hs = sfConfig::get('app_con_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(ContractManagementLogPeer::END_DATE );
    }

}


<?php

class EmailContactCriteria extends Criteria
{
    protected $critJoin = 'AND';
    
    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
        //$this->addJoin(EmailHistoryPeer::FILE_DETAIL_ID, FileDetailPeer::ID);
        //$this->addGroupByColumn(PhotoDetailPeer::NAME);
        //$this->addGroupByColumn(PhotoDetailPeer::GARMENT_CODE);
        
        $ref = $req->getParameter('company', '');
        if ($req->getParameter('company', '') ):
	        $criterions[] = $this->getNewCriterion(EmailContactPeer::COMPANY,  "%$ref%", self::LIKE);
		endif;

		$ref = $req->getParameter('department', '');
		if ($req->getParameter('department', '') ):
			$criterions[] = $this->getNewCriterion(EmailContactPeer::DEPARTMENT,  "%$ref%", self::LIKE);
		endif;
		
		$ref = $req->getParameter('shift', '');
		if ($req->getParameter('shift', '') ):
			$criterions[] = $this->getNewCriterion(EmailContactPeer::SHIFT,  "%$ref%", self::LIKE);
		endif;
		
		$ref = $req->getParameter('website', '');
		if ($req->getParameter('website', '') ):
			$criterions[] = $this->getNewCriterion(EmailContactPeer::WEBSITE,  "%$ref%", self::LIKE);
		endif;

		$ref = $req->getParameter('email_address', '');
		if ($req->getParameter('email_address', '') ):
			$criterions[] = $this->getNewCriterion(EmailContactPeer::EMAIL_ADDRESS,  "%$ref%", self::LIKE);
		endif;
        
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
         
        $hs = sfConfig::get('app_emailcontact_search_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        if ($sqlField) {
            if ($sortOrder == 'ASC') {
                $this->addAscendingOrderByColumn($sqlField);
            } else {
                $this->addDescendingOrderByColumn($sqlField);                
            }
        } else {   
            $this->addAscendingOrderByColumn(EmailContactPeer::EMAIL_ADDRESS);
        }
    }
    
}
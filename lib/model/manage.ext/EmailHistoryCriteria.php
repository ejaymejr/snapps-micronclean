<?php

class EmailHistoryCriteria extends Criteria
{
    protected $critJoin = 'AND';
    
    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
        $this->addJoin(EmailHistoryPeer::FILE_DETAIL_ID, FileDetailPeer::ID);
        //$this->addGroupByColumn(PhotoDetailPeer::NAME);
        //$this->addGroupByColumn(PhotoDetailPeer::GARMENT_CODE);
        
        $ref = $req->getParameter('file_name', '');
        if ($req->getParameter('file_name', '') ):
	        $criterions[] = $this->getNewCriterion(FileDetailPeer::FILE_NAME,  "%$ref%", self::LIKE);
		endif;
		$ref = $req->getParameter('file_name', '');
        if ($req->getParameter('email_address', '') ):
	        $criterions[] = $this->getNewCriterion(EmailHistoryPeer::EMAIL_ADDRESS,  "%$ref%", self::LIKE);
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
         
        $hs = sfConfig::get('app_email_search_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        if ($sqlField) {
            if ($sortOrder == 'ASC') {
                $this->addAscendingOrderByColumn($sqlField);
            } else {
                $this->addDescendingOrderByColumn($sqlField);                
            }
        } else {            
        	
            $this->addAscendingOrderByColumn(FileDetailPeer::FILE_NAME);
            $this->addAscendingOrderByColumn(FileDetailPeer::FILE_NAME);
        }
    }
    
}
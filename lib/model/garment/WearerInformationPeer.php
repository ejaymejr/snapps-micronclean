<?php

/**
 * Subclass for performing query and update operations on the 'wearer_information' table.
 *
 * 
 *
 * @package lib.model.garment
 */ 
class WearerInformationPeer extends BaseWearerInformationPeer
{
    public static function GetPager($cd)
    {        
        $startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
        $rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', 20);
        $page = (int) ( ($startIndex + 1) / $rowsPerPage);
        if (( ($startIndex + 1) % $rowsPerPage) != 0) {
            $page++;
        }
        
        $page = sfContext::getInstance()->getRequest()->getParameter('page', 1); 
        
        $c = clone($cd);
        $pager = new sfPropelPager('WearerInformation', $rowsPerPage);                    
                    
        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }    
    
    public static function GetNamebyNumber($num)
    {
        $c= new Criteria();
        $c->add(self::NUMBER, $num);
        $rs = self::doSelectOne($c);
        return ($rs? $rs->getName() : 'Not Assigned');
    }
}

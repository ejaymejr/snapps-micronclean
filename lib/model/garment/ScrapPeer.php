<?php

/**
 * Subclass for performing query and update operations on the 'scrap' table.
 *
 * 
 *
 * @package lib.model.garment
 */ 
class ScrapPeer extends BaseScrapPeer
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
        $pager = new sfPropelPager('Scrap', $rowsPerPage);                    
                    
        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }

    public static function GetCustomerByCode($gcode)
    {
        $c = new Criteria();
        $c->add(self::GARMENT_CODE, $gcode);
        $rs=self::doSelectOne($c);
        return ($rs? $rs->getCustomer(): '');
    }
    
    public static function GetDescriptionByCode($gcode)
    {
        $c = new Criteria();
        $c->add(self::GARMENT_CODE, $gcode);
        $rs=self::doSelectOne($c);
        $desc = ($rs? $rs->getType() . ' | ' . $rs->getSize() .' | '. $rs->getColor() : '');
        return $desc;
    }    
}

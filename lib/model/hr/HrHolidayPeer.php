<?php

/**
 * Subclass for performing query and update operations on the 'hr_holiday' table.
 *
 * 
 *
 * @package lib.model.hr
 */ 
class HrHolidayPeer extends BaseHrHolidayPeer
{
	public static function GetDateHolByDate() {
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::DATE_HOL);
		$rs = self::doSelect($c);
		$dhol = array();
		$nhol = array();
		$id   = array();
		foreach($rs as $res)
		{
			$dhol[] = $res->getDateHol();
			$nhol[] = $res->getHoliday();
			$id[]   = $res->getId();
		}
		return array('dates_hol'=>$dhol, 'holname'=>$nhol, 'id'=>$id);
	}

    public static function GetIdbyDatesHol($dt) {
        $c = new Criteria();
        $c->add(self::DATE_HOL, $dt);
        $rs = self::doSelectone($c);
        return ($rs)? $rs->getId() : null ;
    }
	
	
    public static function IsHoliday($dt)
    {
        $c = new Criteria();
        $c->add(self::DATE_HOL, $dt);
        $rs = self::doSelectone($c);
        return ($rs)? true : false ;
    }
    
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
        $pager = new sfPropelPager('HrHoliday', $rowsPerPage);                    
                    
        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }	

   

}

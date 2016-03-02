<?php

/**
 * Subclass for performing query and update operations on the 'garment_bacteria_count' table.
 *
 * 
 *
 * @package lib.model.particle
 */ 
class GarmentBacteriaCountPeer extends BaseGarmentBacteriaCountPeer
{
    const CUSTOM = "CUSTOM";
    
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
        $pager = new sfPropelPager('GarmentBacteriaCount', $rowsPerPage);

        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }
    
    public static function GetLastDateByCustomer($cust)
    {
    	$c = new Criteria();
    	$c->add(self::CUSTOMER, $cust);
    	$c->addDescendingOrderByColumn(self::DATE_TIME);
    	//$c->add(self::CREATED_BY, '&& || &&', Criteria::CUSTOM);
    	$rs = self::doSelectOne($c);
    	return $rs? $rs->getDateTime() : '2008-01-01';
    }
    	
    public static function GetDuplicate($cust, $gtype, $cdate)
    {
    	$c = new Criteria();
    	$c->add(self::CUSTOMER, $cust);
    	$c->add(self::TYPE, $gtype);
    	$c->add(self::DATE_TIME, $cdate);
    	$rs = self::doSelectOne($c);
    	return $rs;
    }
    
    public static function GetLatestDate()
    {
    	$c = new Criteria();
    	$c->addDescendingOrderByColumn(self::DATE_TIME);
    	$rs = self::doSelectOne($c);
    	return $rs? DateUtils::DUFormat('Y-m-d',$rs->getDateTime()) : '';
    }
    
    public static function GetCustomerList()
    {
    	$c = new Criteria();
    	$c->addGroupByColumn(self::CUSTOMER);
    	$rs = self::doSelect($c);
    	$list = array();
    	foreach($rs as $r):
    		$list[$r->getCustomer()] = $r->getCustomer();
    	endforeach;
    	return $list;
    }
    	
}

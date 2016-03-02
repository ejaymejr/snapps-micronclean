<?php

/**
 * Subclass for performing query and update operations on the 'label_company' table.
 *
 * 
 *
 * @package lib.model.hgas3
 */ 
class LabelCompanyPeer extends BaseLabelCompanyPeer
{
	public static function GetCompanyList()
	{
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::COMPANY);
		$rs = self::doSelect($c);
		$list = array(''=>' - SELECT COMPANY - ');
		foreach($rs as $r)
		{
			$list[$r->getId()] = $r->getCompany();
		}
		return $list;
	}
	
	public static function GetByCompany($comp)
	{
		$c = new Criteria();
		$c->add(self::COMPANY, $comp);
		$rs = self::doSelectOne($c);
		return $rs;
	}	

    public static function GetIdByCompany($co)
    {
    	$c = new Criteria();
    	$c->add(self::COMPANY, $co);
    	$rs = self::doSelectOne($c);
    	return $rs? $rs->getId() : '';
    } 	
	
	public static function GetCompanyListing()
	{
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::COMPANY);
		$rs = self::doSelect($c);
		$list = array(''=>' - SELECT COMPANY - ');
		foreach($rs as $r)
		{
			$list[$r->getCompany()] = $r->getCompany();
		}
		return $list;
	}

	public static function GetCompanyArray($comp)
	{
		$c = new Criteria();
		$c->add(self::COMPANY, $comp);
		$rs = self::doSelectOne($c);
		$list = array();
		if ($rs){
			$list[$rs->getCompany()] = $rs->getCompany();
		}
		return $list;
	}	
	
    public static function GetCompanyNameById($cID)
    {
    	$c = new Criteria();
    	$c->add(self::ID, $cID);
    	$rs = self::doSelectOne($c);
    	return $rs? $rs->getCompany() : '';
    }
		
}

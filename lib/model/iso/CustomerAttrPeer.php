<?php

/**
 * Subclass for performing query and update operations on the 'customer_attr' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class CustomerAttrPeer extends BaseCustomerAttrPeer
{
	public static function GetCustomerListName()
	{
		$c= new Criteria();
		$c->addAscendingOrderByColumn(self::CUSTOMER );
		$rs = self::doSelect($c);
		$list = array(''=>' - SELECT CUSTOMER HERE - ');
		foreach($rs as $r){
			$customerName = substr($r->getCustomer(), 0, 25);
			$list[$customerName] = $customerName;
		}
		return $list;
	}
}

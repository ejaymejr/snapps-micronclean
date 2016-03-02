<?php

/**
 * Subclass for performing query and update operations on the 'reject_customer_attr' table.
 *
 * 
 *
 * @package lib.model.manage
 */ 
class RejectCustomerAttrPeer extends BaseRejectCustomerAttrPeer
{
	public static function GetCustomerList()
	{
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::CUSTOMER);
		$rs = self::doSelect($c);
		$list = array(''=>' - SELECT COMPANY - ');
		$list = array(''=>'');
		foreach($rs as $r)
		{
			$list[$r->getCustomer()] = $r->getCustomer();
		}
		return $list;
	}
	
	public static function GetDataByCustomer($customer)
	{
		$c = new Criteria();
		$c->add(self::CUSTOMER, $customer);
		$rs = self::doSelectOne($c);
		return $rs;
	}
}

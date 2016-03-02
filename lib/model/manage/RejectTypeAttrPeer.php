<?php

/**
 * Subclass for performing query and update operations on the 'reject_type_attr' table.
 *
 * 
 *
 * @package lib.model.manage
 */ 
class RejectTypeAttrPeer extends BaseRejectTypeAttrPeer
{
	public static function GetTypeByCustomer($customer=null)
	{
		$c = new Criteria();
		if ($customer) $c->add(self::CUSTOMER, '%'.$customer.'%', Criteria::LIKE);
		$c->addAscendingOrderByColumn(self::TYPE);
		$rs = self::doSelect($c);
		$list = array(''=>'');
		foreach($rs as $r)
		{
			$list[$r->getType()] = $r->getType();
		}
		return $list;
	}
	
	public static function GetDataByCustomerByType($customer, $type)
	{
		$c = new Criteria();
		$c->add(self::CUSTOMER, $customer);
		$c->add(self::TYPE, $type);
		$rs = self::doSelectOne($c);
		return $rs;
	}
}

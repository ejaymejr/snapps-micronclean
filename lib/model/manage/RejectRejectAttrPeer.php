<?php

/**
 * Subclass for performing query and update operations on the 'reject_reject_attr' table.
 *
 * 
 *
 * @package lib.model.manage
 */ 
class RejectRejectAttrPeer extends BaseRejectRejectAttrPeer
{
	public static function GetReasonByCustomer($customer=null)
	{
		$c = new Criteria();
		if ($customer) $c->add(self::CUSTOMER, '%'.$customer.'%', Criteria::LIKE);
		$c->addAscendingOrderByColumn(self::REASON);
		$rs = self::doSelect($c);
		$list = array(''=>'');
		foreach($rs as $r)
		{
			$list[$r->getReason()] = $r->getReason();
		}
		return $list;
	}
	
	public static function GetDataByCustomerByReason($customer, $reason)
	{
		$c = new Criteria();
		$c->add(self::CUSTOMER, $customer);
		$c->add(self::REASON, $reason);
		$rs = self::doSelectOne($c);
		return $rs;
	}
}

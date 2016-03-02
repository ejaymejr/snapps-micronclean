<?php

/**
 * Subclass for performing query and update operations on the 'reject_color_attr' table.
 *
 * 
 *
 * @package lib.model.manage
 */ 
class RejectColorAttrPeer extends BaseRejectColorAttrPeer
{
	public static function GetColorByCustomer($customer=null)
	{
		$c = new Criteria();
		if ($customer) $c->add(self::CUSTOMER, '%'.$customer.'%', Criteria::LIKE);
		$c->addAscendingOrderByColumn(self::COLOR);
		$rs = self::doSelect($c);
		$list = array(''=>'');
		foreach($rs as $r)
		{
			$list[$r->getColor()] = $r->getColor();
		}
		return $list;
	}
	
	public static function GetDataByCustomerByColor($customer, $color)
	{
		$c = new Criteria();
		$c->add(self::CUSTOMER, $customer);
		$c->add(self::COLOR, $color);
		$rs = self::doSelectOne($c);
		return $rs;
	}
}

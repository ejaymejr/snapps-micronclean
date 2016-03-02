<?php

/**
 * Subclass for performing query and update operations on the 'reject_shift_attr' table.
 *
 * 
 *
 * @package lib.model.manage
 */ 
class RejectShiftAttrPeer extends BaseRejectShiftAttrPeer
{
	public static function GetShiftByCustomer($customer=null)
	{
		$c = new Criteria();
		if ($customer) $c->add(self::CUSTOMER, '%'.$customer.'%', Criteria::LIKE);
		$c->addAscendingOrderByColumn(self::SHIFT);
		$rs = self::doSelect($c);
		$list = array(''=>'');
		foreach($rs as $r)
		{
			$list[$r->getShift()] = $r->getShift();
		}
		return $list;
	}
	
	public static function GetShiftByCustomerNoBlank($customer=null)
	{
		$c = new Criteria();
		if (!$customer):
			return;
		endif;
		$c->add(self::CUSTOMER, $customer, Criteria::LIKE);
		$c->addAscendingOrderByColumn(self::SHIFT);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r)
		{
			$list[$r->getId()] = $r->getShift();
		}
		return $list;
	}
	
	public static function GetShiftByCustomerList($customerList=null)
	{
		$c = new Criteria();
		if ($customerList) $c->add(self::CUSTOMER, $customerList, Criteria::IN);
		$c->addAscendingOrderByColumn(self::SHIFT);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r)
		{
			$list[$r->getShift()] = '&middot; '. $r->getShift() . '&middot; ';
		}
		return $list;
	}
	
	public static function GetDataByCustomerByShift($customer, $shift)
	{
		$c = new Criteria();
		$c->add(self::CUSTOMER, $customer);
		$c->add(self::SHIFT, $shift);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetIdByName($customer, $shift)
	{
		$c = new Criteria();
		$c->add(self::CUSTOMER, $customer);
		$c->add(self::SHIFT, $shift);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getId(): '';
	}
	
	public static function GetShiftById($sID)
	{
		$dept = self::retrieveByPK($sID);
		return $dept? $dept->getShift() : '';
	}
}

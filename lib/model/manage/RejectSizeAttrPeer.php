<?php

/**
 * Subclass for performing query and update operations on the 'reject_size_attr' table.
 *
 * 
 *
 * @package lib.model.manage
 */ 
class RejectSizeAttrPeer extends BaseRejectSizeAttrPeer
{
	public static function GetSize()
	{
		$c = new Criteria();
		$rs = self::doSelect($c);
		$list = array(''=>'');
		foreach($rs as $r)
		{
			$list[$r->getSize()] = $r->getSize();
		}
		return $list;
	}
	
	public static function GetDataByCustomerBySize($customer, $size)
	{
		$c = new Criteria();
		//$c->add(self::CUSTOMER, $customer);
		$c->add(self::SIZE, $size);
		$rs = self::doSelectOne($c);
		return $rs;
	}
}

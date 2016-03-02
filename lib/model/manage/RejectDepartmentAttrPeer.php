<?php

/**
 * Subclass for performing query and update operations on the 'reject_department_attr' table.
 *
 * 
 *
 * @package lib.model.manage
 */ 
class RejectDepartmentAttrPeer extends BaseRejectDepartmentAttrPeer
{
	public static function GetDepartmentByCustomer($customer=null)
	{
		$c = new Criteria();
		if ($customer) $c->add(self::CUSTOMER, '%'.$customer.'%', Criteria::LIKE);
		$c->addAscendingOrderByColumn(self::DEPARTMENT);
		$rs = self::doSelect($c);
		$list = array(''=>'');
		foreach($rs as $r)
		{
			$list[$r->getDepartment()] = $r->getDepartment();
		}
		return $list;
	}
	
	public static function GetDepartmentByCustomerList($customerList=null)
	{
		$c = new Criteria();
		if ($customerList) $c->add(self::CUSTOMER, $customerList, Criteria::IN);
		$c->addAscendingOrderByColumn(self::DEPARTMENT);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r)
		{
			$list[$r->getDepartment()] = '&middot; '. $r->getDepartment() . '&middot; ';
		}
		return $list;
	}
	
	public static function GetDataByCustomerByDepartment($customer, $dept)
	{
		$c = new Criteria();
		$c->add(self::CUSTOMER, $customer);
		$c->add(self::DEPARTMENT, $dept);
		$rs = self::doSelectOne($c);
		return $rs;
	}
}

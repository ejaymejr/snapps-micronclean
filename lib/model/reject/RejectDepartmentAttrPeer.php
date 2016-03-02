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
		//if ($customer) $c->add(self::CUSTOMER, '%'.$customer.'%', Criteria::LIKE);
		if ($customer) $c->add(self::CUSTOMER, $customer);
		$c->addAscendingOrderByColumn(self::DEPARTMENT);
		$rs = self::doSelect($c);
		$list = array(''=>'');
		foreach($rs as $r)
		{
			$list[$r->getDepartment()] = $r->getDepartment();
		}
		return $list;
	}
	
	public static function GetDepartmentByCustomerNoBlank($customer=null)
	{
		$c = new Criteria();
		if (!$customer):
			return;
		endif;
		//$c->add(self::CUSTOMER, '%'.$customer.'%', Criteria::LIKE);
		$c->addAscendingOrderByColumn(self::DEPARTMENT);
		$c->add(self::CUSTOMER, $customer);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r)
		{
			if ($r->getDepartment())
			$list[$r->getId()] = $r->getDepartment();
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
	
	public static function GetIdByName($customer, $dept)
	{
		$c = new Criteria();
		$c->add(self::CUSTOMER, $customer);
		$c->add(self::DEPARTMENT, $dept);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getId(): '';
	}
	
	public static function GetDepartmentById($dID)
	{
		$dept = self::retrieveByPK($dID);
		return $dept? $dept->getDepartment() : '';
	}
}

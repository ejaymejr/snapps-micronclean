<?php

/**
 * Subclass for performing query and update operations on the 'label_department' table.
 *
 * 
 *
 * @package lib.model.hgas3
 */ 
class LabelDepartmentPeer extends BaseLabelDepartmentPeer
{
	
	public static function GetByDepartment($dept, $cID)
	{
		$c = new Criteria();
		$c->add(self::DEPARTMENT, $dept);
		$c->add(self::LABEL_COMPANY_ID, $cID);
		$rs = self::doSelectOne($c);
		return $rs;
	}	
	
	public static function GetListByCompany($cID)
	{
		$c = new Criteria();
		$c->add(self::LABEL_COMPANY_ID, $cID);
		$c->addAscendingOrderByColumn(self::DEPARTMENT);
		$rs = self::doSelect($c);
		$list = array(''=>' - SELECT A DEPARTMENT - ');
		foreach($rs as $r)
		{
			$list[$r->getId()] = ' - '.$r->getDepartment() . ' - ';
		}
		return array_unique($list);
	}
}


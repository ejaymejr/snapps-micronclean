<?php

/**
 * Subclass for performing query and update operations on the 'label_cost_center' table.
 *
 * 
 *
 * @package lib.model.hgas3
 */ 
class LabelCostCenterPeer extends BaseLabelCostCenterPeer
{
	public static function GetByCostCenter($cCenter, $cID)
	{
		$c = new Criteria();
		$c->add(self::COST_CENTER, $cCenter);
		$c->add(self::LABEL_COMPANY_ID, $cID);
		$rs = self::doSelectOne($c);
		return $rs;
	}
		
	public static function GetListByCompany($cID)
	{
		$c = new Criteria();
		$c->add(self::LABEL_COMPANY_ID, $cID);
		$c->addAscendingOrderByColumn(self::COST_CENTER);
		$rs = self::doSelect($c);
		$list = array(''=>' - SELECT A COST CENTER - ');
		foreach($rs as $r)
		{
			$list[$r->getCostCenter()] = ' - '.$r->getCostCenter() . ' - ';
		}
		return array_unique($list);
	}

	public static function GetCostCenterById($cID)
	{
		$c = new Criteria();
		$c->add(self::ID, $cID);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getCostCenter() : '';
	}	
}

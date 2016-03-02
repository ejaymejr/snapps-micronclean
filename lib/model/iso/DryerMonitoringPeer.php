<?php

/**
 * Subclass for performing query and update operations on the 'dryer_monitoring' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class DryerMonitoringPeer extends BaseDryerMonitoringPeer
{
	public static function GetAllData()
	{
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::DATE_TIME);
		$rs = self::doSelect($c);
		return $rs;
	}
}

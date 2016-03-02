<?php

/**
 * Subclass for performing query and update operations on the 'water_monitoring' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class WaterMonitoringPeer extends BaseWaterMonitoringPeer
{
	public static function GetAllData()
	{
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::DATE_TIME);
		$rs = self::doSelect($c);
		return $rs;
	}
}

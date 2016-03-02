<?php

/**
 * Subclass for performing query and update operations on the 'air_particle_count_acro_g_cell' table.
 *
 * 
 *
 * @package lib.model.particle
 */ 
class AirParticleCountAcroGCellPeer extends BaseAirParticleCountAcroGCellPeer
{
	public static function GetDataByHeaderId($headerID)
	{
		$c = new Criteria();
		$c->add(self::RECORD_ID, $headerID);
		$rs = self::doSelect($c);
		return $rs;
	}
	
	public static function GetDataByHeaderIDGridID($headerID, $gridID)
	{
		$c = new Criteria();
		$c->add(self::RECORD_ID, $headerID);
		$c->add(self::GRID_LABEL, $gridID);
		$rs = self::doSelectOne($c);
		return $rs;
	}
}

<?php

/**
 * Subclass for performing query and update operations on the 'air_particle_count_nanoclean_g' table.
 *
 * 
 *
 * @package lib.model.particle
 */ 
class AirParticleCountNanocleanGPeer extends BaseAirParticleCountNanocleanGPeer
{
	public static function GetDataByDate($cdate)
	{
		$c = new Criteria();
		$c->add(self::DATE_RECORD, $cdate);
		$rs = self::doSelectOne($c);
		return $rs;
	}
}

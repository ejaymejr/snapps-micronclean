<?php

/**
 * Subclass for performing query and update operations on the 'tag' table.
 *
 * 
 *
 * @package lib.model.hgas
 */ 
class hgasTagPeer extends BasehgasTagPeer
{
	
	public static function GetTagsByCellByDeptByShiftByTagID($cell, $dept, $shift, $tags)
	{
		$slotsID = hgasHangerSlotPeer::GetActiveSlots();
		$c = new Criteria();
		$c->add(self::CELL_ID, $cell, Criteria::IN);
		$c->add(self::DEPARTMENT_ID, $dept, Criteria::IN);
		$c->add(self::TEAM_ID, $shift, Criteria::IN);
//		$c->add(self::ID, $tags, Criteria::IN);
		//$c->add(self::BOOT_CONDITION, '&& || &&', Criteria::CUSTOM);
		$rs = self::doSelect($c);
		return $rs;
	}
}

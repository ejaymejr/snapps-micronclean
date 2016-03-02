<?php

/**
 * Subclass for performing query and update operations on the 'hanger_slot' table.
 *
 * 
 *
 * @package lib.model.hgas
 */ 
class hgasHangerSlotPeer extends BasehgasHangerSlotPeer
{
	public static function GetTagsForAllActiveSlots($cell, $dept, $shift)
	{
		$c = new Criteria();
		if (strlen($cell)) $c->add(self::CELL_ID, $cell, Criteria::IN);
		if (strlen($dept)) $c->add(self::DEPARTMENT_ID, $dept, Criteria::IN);
		if (strlen($shift)) $c->add(self::TEAM_ID, $shift, Criteria::IN);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r):
			$list[$r->getTagId()] = $r->getTagId();
		endforeach;
		return $list;
	}
	
	public static function GetActiveSlots()
	{
		$c = new Criteria();
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r):
			$list[$r->getId()] = $r->getId();
		endforeach;
		return $list;
	}
}

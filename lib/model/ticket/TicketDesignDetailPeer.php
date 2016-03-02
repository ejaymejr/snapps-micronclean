<?php

/**
 * Subclass for performing query and update operations on the 'ticket_design_detail' table.
 *
 * 
 *
 * @package lib.model.ticket
 */ 
class TicketDesignDetailPeer extends BaseTicketDesignDetailPeer
{
	public static function GetDataByHeaderIDComponent($ticketHeaderID, $component)
	{
		$c = new Criteria();
		$c->add(self::TICKET_DESIGN_HEADER_ID, $ticketHeaderID);
		$c->add(self::COMPONENT, $component);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetDataByHeaderID($ticketHeaderID)
	{
		$c = new Criteria();
		$c->add(self::TICKET_DESIGN_HEADER_ID, $ticketHeaderID);
		$rs = self::doSelect($c);
		return $rs;
	}	
	
	public static function GetValueOptByID($id)
	{
		$rs = self::retrieveByPK($id);
		$list = array();
		if ($rs) $list = explode(',', $rs->getValue());
		return $list;
	}
	
	public static function GetComponentOptByID($id)
	{
		$rs = self::retrieveByPK($id);
		$list = array();
		$list = explode(',', $rs->getComponent());
		return $list;
	}
	
	public static function GetGarmentByHeaderID($ticketHeaderID)
	{
		$c = new Criteria();
		$c->add(self::TICKET_DESIGN_HEADER_ID, $ticketHeaderID);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r):
			$list[] = $r->getGarment();
		endforeach;
		return $list;
	}
	
	public static function GetValueByHeaderIDandGarment($hID, $garment)
	{
		$list = array();
		$c = new Criteria();
		$c->add(self::TICKET_DESIGN_HEADER_ID, $hID);
		$c->add(self::GARMENT, $garment);
		$rs = self::doSelectOne($c);
		if ($rs) $list = explode(',', $rs->getValue());
		return $list;
	}
	
	public static function GetComponentByHeaderIDandGarment($hID, $garment)
	{
		$list = array();
		$c = new Criteria();
		$c->add(self::TICKET_DESIGN_HEADER_ID, $hID);
		$c->add(self::GARMENT, $garment);
		$rs = self::doSelectOne($c);
		if ($rs) $list = explode(',', $rs->getComponent());
		return $list;
	}
}

<?php

/**
 * Subclass for performing query and update operations on the 'ticket_delivery_record' table.
 *
 * 
 *
 * @package lib.model.ticket
 */ 
class TicketDeliveryRecordPeer extends BaseTicketDeliveryRecordPeer
{
	const CUSTOM = "CUSTOM";
	
	public static function GetPager($cd, $xpg=null)
	{
		$xpg = $xpg? $xpg : 20;
		$startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
		$rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', $xpg);
		$page = (int) ( ($startIndex + 1) / $rowsPerPage);
		if (( ($startIndex + 1) % $rowsPerPage) != 0) {
			$page++;
		}
	
		$page = sfContext::getInstance()->getRequest()->getParameter('page', 1);
	
	
		$c = clone($cd);
		$pager = new sfPropelPager('TicketDeliveryRecord', $rowsPerPage);
	
		$pager->setCriteria($c);
		$pager->setPage($page);
		$pager->init();
		return $pager;
	}
	
	public static function GetDataByHeaderIDDetailID($hID, $dID)
	{
		$c = new Criteria();
		$c->add(self::TICKET_DESIGN_HEADER_ID, $hID);
		$c->add(self::TICKET_DESIGN_DETAIL_ID, $dID);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetDataByGarmentComponentValue($garment, $component, $value, $ticketID)
	{
		$c = new Criteria();
		$c->add(self::GARMENT, $garment);
		$c->add(self::COMPONENT, $component);
		$c->add(self::VALUE, $value);
		$c->add(self::DELIVERY_TICKET_ID, $ticketID);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetQuantityByGarmentComponentValueHeaderID($garment, $component, $value, $headerID)
	{
		$c = new Criteria();
		$c->add(self::GARMENT, $garment);
		$c->add(self::COMPONENT, $component);
		$c->add(self::VALUE, $value);
		$c->add(self::TICKET_DESIGN_HEADER_ID, $headerID);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getQuantity() : 0;
	}
	
	public static function GetQuantityByGarmentComponentValueTicketID($garment, $component, $value, $ticketID)
	{
		$c = new Criteria();
		$c->add(self::GARMENT, $garment);
		$c->add(self::COMPONENT, $component);
		$c->add(self::VALUE, $value);
		$c->add(self::DELIVERY_TICKET_ID, $ticketID);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getQuantity() : 0;
	}
	
	public static function GenerateDeliveryTicketId()
	{
		$c = new Criteria();
		$c->addSelectColumn('max('. TicketDeliveryRecordPeer::DELIVERY_TICKET_ID .')');
		//$c->addDescendingOrderByColumn(self::ID);
		$rs = TicketDeliveryRecordPeer::doSelectRS($c);
		$id = 1;
		if ($rs->next()):
			//$id = $rs->getId() + 1;
			$id = intval(substr($rs->getString(1), 4)) + 1;
		endif;
		return "tkt-" . str_pad($id, 10, "0", STR_PAD_LEFT);
	}
	
	public static function GetDataByTicketID($ticketID)
	{
		$c = new Criteria();
		$c->add(self::DELIVERY_TICKET_ID, $ticketID);
		$rs = self::doSelect($c);
		return $rs;
	}
	
	public static function GenerateInputID($id, $garment, $component, $size)
	{
		return 'input'. $id .'_'.str_replace(' ', '@', $garment).'_'. str_replace(' ', '@', $component ) .'_' . str_replace(' ', '@', $size );
	}
	
}

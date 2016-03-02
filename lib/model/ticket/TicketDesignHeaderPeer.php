<?php

/**
 * Subclass for performing query and update operations on the 'ticket_design_header' table.
 *
 * 
 *
 * @package lib.model.ticket
 */ 
class TicketDesignHeaderPeer extends BaseTicketDesignHeaderPeer
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
		$pager = new sfPropelPager('TicketDesignHeader', $rowsPerPage);
	
		$pager->setCriteria($c);
		$pager->setPage($page);
		$pager->init();
		return $pager;
	}
}

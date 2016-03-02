<?php

/**
 * Subclass for performing query and update operations on the 'email_contact' table.
 *
 * 
 *
 * @package lib.model.manage
 */ 
class EmailContactPeer extends BaseEmailContactPeer
{
	const CUSTOM = "CUSTOM";
	
	public static function GetPager($cd, $res = null)
	{
		$res = $res? $res : 20;
		$startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
		$rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', $res);
		$page = (int) ( ($startIndex + 1) / $rowsPerPage);
		if (( ($startIndex + 1) % $rowsPerPage) != 0) {
			$page++;
		}
	
		$page = sfContext::getInstance()->getRequest()->getParameter('page', 1);
	
		$c = clone($cd);
		$pager = new sfPropelPager('EmailContact', $rowsPerPage);
	
		$pager->setCriteria($c);
		$pager->setPage($page);
		$pager->init();
		return $pager;
	}
	
	public static function GetEmailByCompanyDepartmentShift($co=null, $dept=null, $shift=null)
	{
		$c = new Criteria();
		if ($co) $c->add(self::COMPANY, $co);
		if ($dept) $c->add(self::DEPARTMENT, $dept);
		if ($shift) $c->add(self::SHIFT, $shift);
		$c->addAscendingOrderByColumn(self::EMAIL_ADDRESS);
		$rs = self::doSelect($c);
		$list = array(''=>' -ALL- ');
		foreach($rs as $r):
			$list[$r->getEmailAddress()] = $r->getEmailAddress();
		endforeach;
		return $list;
		
	}
}

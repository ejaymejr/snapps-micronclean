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
		$c->addJoin(self::EMAIL_ADDRESS, EmailToDeptPeer::EMAIL_ADDRESS);
		if ($co) $c->add(EmailToDeptPeer::COMPANY, $co);
		if ($dept) $c->add(EmailToDeptPeer::DEPARTMENT, $dept);
		if ($shift) $c->add(EmailToDeptPeer::SHIFT, $shift);
		$c->addAscendingOrderByColumn(self::EMAIL_ADDRESS);
		$rs = self::doSelect($c);
		$list = array(''=>' -ALL- ');
		foreach($rs as $r):
			$list[$r->getEmailAddress()] = $r->getEmailAddress();
		endforeach;
		return $list;
		
	}
	
	public static function GetDataByCompanyDepartmentShift($email) //, $co=null, $dept=null, $shift=null
	{
		$c = new Criteria();
//		$c->addJoin(self::EMAIL_ADDRESS, EmailToDeptPeer::EMAIL_ADDRESS);
//		if ($co) $c->add(EmailToDeptPeer::COMPANY, $co);
//		if ($dept) $c->add(EmailToDeptPeer::DEPARTMENT, $dept);
//		if ($shift) $c->add(EmailToDeptPeer::SHIFT, $shift);
		$c->add(self::EMAIL_ADDRESS, $email);
		$c->addAscendingOrderByColumn(self::EMAIL_ADDRESS);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetDataByCompanyNODepartmentNOShift($email, $co)
	{
		$c = new Criteria();
		$c->addJoin(self::EMAIL_ADDRESS, EmailToDeptPeer::EMAIL_ADDRESS);
		$c->add(EmailToDeptPeer::COMPANY, $co);
		$c->add(EmailToDeptPeer::DEPARTMENT, '', Criteria::NOT_EQUAL );
		$c->add(EmailToDeptPeer::SHIFT, '', Criteria::NOT_EQUAL);
		$c->addAscendingOrderByColumn(self::EMAIL_ADDRESS);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetDataByEmailByCompany($email, $co)
	{
		$c = new Criteria();
		$c->addJoin(self::EMAIL_ADDRESS, EmailToDeptPeer::EMAIL_ADDRESS);
		$c->add(self::EMAIL_ADDRESS, $email);
		$c->add(EmailToDeptPeer::COMPANY, $co);
		$rs = self::doSelect($c);
		return $rs;
	}
	
	public static function GetDataByEmail($email)
	{
		$c = new Criteria();
		$c->add(self::EMAIL_ADDRESS, $email);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function IsAllShift($name, $email, $dept )
	{
		$c = new Criteria();
		$c->addJoin(self::EMAIL_ADDRESS, EmailToDeptPeer::EMAIL_ADDRESS);
		$c->add(self::NAME, $name);
		$c->add(EmailToDeptPeer::EMAIL_ADDRESS, $email);
		$c->add(EmailToDeptPeer::DEPARTMENT, $dept);
		$c->add(EmailToDeptPeer::SHIFT, 'ALL');
		$rs = self::doSelectOne($c);
		return $rs? true : false;
	}
	
	public static function GetHint($email)
	{
		$mess = '';
		$c = new Criteria();
		$c->addJoin(self::EMAIL_ADDRESS, EmailToDeptPeer::EMAIL_ADDRESS);
		$c->add(self::EMAIL_ADDRESS, $email);
		$c->addAscendingOrderByColumn(EmailToDeptPeer::DEPARTMENT);
		$c->addAscendingOrderByColumn(EmailToDeptPeer::SHIFT);
		$rs = self::doSelect($c);
		foreach($rs as $r):
			//$mess .= $r->getDepartment() . ': ' . $r->getShift() ;
		endforeach;
		return true;
	}
	

	
	
}

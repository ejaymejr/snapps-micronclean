<?php

/**
 * Subclass for performing query and update operations on the 'email_history' table.
 *
 * 
 *
 * @package lib.model.manage
 */ 
class EmailHistoryPeer extends BaseEmailHistoryPeer
{
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
		$pager = new sfPropelPager('EmailHistory', $rowsPerPage);
	
		$pager->setCriteria($c);
		$pager->setPage($page);
		$pager->init();
		return $pager;
	}
	
	public static function GetDataByFileDetailId($fileID)
	{
		$c = new Criteria();
		$c->add(self::FILE_DETAIL_ID, $fileID);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetEmailDateByTokenFileID($token, $fileID)
	{
		$c= new Criteria();
		$c->addJoin(self::FILE_DETAIL_ID, FileDetailPeer::ID);
		$c->add(self::EMAIL_TOKEN, $token);
		$c->add(FileDetailPeer::FILE_NAME, $fileID);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getEmailDate(): '';
	}
	
	public static function IsValid($token, $email)
	{
		$c = new Criteria();
		$c->add(self::EMAIL_TOKEN, $token);
		$c->add(self::EMAIL_ADDRESS, $email);
		$rs = self::doSelectOne($c);
		return $rs? true : false;
	}
	
	public static function IsEmailed($fileID)
	{
		$c = new Criteria();
		$c->add(self::FILE_DETAIL_ID, $fileID);
		$rs = self::doSelectOne($c);
		return $rs? true : false;
	}
}

<?php

/**
 * Subclass for performing query and update operations on the 'sms_log' table.
 *
 * 
 *
 * @package lib.model.hr
 */ 
class SmsLogPeer extends BaseSmsLogPeer
{
	public static function SaveLog($mess, $cell, $empNo, $period, $bankCash)
	{
		$req = sfContext::getInstance()->getRequest();
		$module = $req->getScriptName() .  $req->getPathInfo();
		$user = sfContext::getInstance()->getUser()->getUsername();
		$user = $user ? $user : 'SYSTEM Batch';
  	  	$smsLog = new SmsLog();
  	  	$smsLog->setReceiver($cell);
  	  	$smsLog->setMsg($mess);
  	  	$smsLog->setModule($module);
  	  	//$smsLog->setStatus('send');
  	  	$smsLog->setMsgtype('SMS:TEXT:FORMATTED');
  	  	$smsLog->setEmployeeNo($empNo);
  	  	$smsLog->setPeriodCode($period);
  	  	$smsLog->setBankCash($bankCash);
  	  	$smsLog->setDateCreated(DateUtils::DUNow());
  	  	$smsLog->setDateModified(DateUtils::DUNow());
  	  	$smsLog->setCreatedBy($user);
  	  	$smsLog->setModifiedBy($user);
  	  	$smsLog->save();
	}
	
	public static function GetSms($empNo, $period, $bankCash)
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empNo);
		$c->add(self::PERIOD_CODE, $period);
		$c->add(self::BANK_CASH, $bankCash);
		//$c->add(self::ID, '&& || &&', Criteria::CUSTOM);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetLastSms($empNo)
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empNo);
		$c->addDescendingOrderByColumn(self::DATE_CREATED);
		//$c->add(self::ID, '&& || &&', Criteria::CUSTOM);
		$rs = self::doSelectOne($c);
		return $rs;
	}
}

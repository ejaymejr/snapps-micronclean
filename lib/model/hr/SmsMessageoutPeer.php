<?php

/**
 * Subclass for performing query and update operations on the 'sms_messageout' table.
 *
 * 
 *
 * @package lib.model.hr
 */ 
class SmsMessageoutPeer extends BaseSmsMessageoutPeer
{
	const SMS_NEW_LINE = '\0x0A';
	public static function GetDataByReceiverPeriod($mobile, $period)
	{
		$c = new Criteria();
		$c->add(self::RECEIVER, $mobile);
		$c->add(self::PERIOD_CODE, $period);
		$rs = self::doSelectOne($c);
		return $rs;
	}

	public static function SendMessage($mess, $cell, $empNo=null, $period=null, $bankCash=null)
	{
		$empNo = $empNo? $empNo : '';
		$period = $period? $period : '';
		$cell = substr($cell,0,3) == '+65'? $cell : '+65'.$cell;
  	  	$sms = new SmsMessageout();
  	  	$sms->setReceiver($cell);
  	  	$sms->setMsg($mess);
  	  	$sms->setStatus('send');
  	  	$sms->setMsgtype('SMS:TEXT:FORMATTED');
  	  	$sms->save();
  	  	SmsLogPeer::SaveLog($mess, $cell, $empNo, $period, $bankCash);
	}
	
	public static function ResendSms()
	{
		$statusList = array('notsent', 'undelivered');
		$c = new Criteria();
		$c->add(self::STATUS, $statusList, Criteria::IN);
		$rs = self::doSelect($c);
		foreach($rs as $r):
			$r->setStatus('');
			$r->save();
		endforeach;
	}
	
    public static function PingServer($host,$port=80,$timeout=6)
    {
        $fsock = fsockopen($host, $port, $errno, $errstr, $timeout);
        if ( ! $fsock ):
           return FALSE;
        else:
           return TRUE;
        endif;
    }
    
     public static function PortService($port)
     {
     	switch($port):
     		case '3306':
     			return 'MySql Service';
     		case '80':
     			return 'HTTP Service';
     	endswitch;
     }
     
	public static function GetLastSms($sender)
	{
		$c = new Criteria();
		$c->add(self::SENDER, $sender);
		$c->addDescendingOrderByColumn(self::ID);
		//$c->add(self::ID, '&& || &&', Criteria::CUSTOM);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
}

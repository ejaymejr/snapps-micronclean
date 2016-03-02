<?php

/**
 * Subclass for performing query and update operations on the 'sms_service_to_employee' table.
 *
 * 
 *
 * @package lib.model.hr
 */ 
class SmsServiceToEmployeePeer extends BaseSmsServiceToEmployeePeer
{
	
	public static function isRecordOnly($empNo)
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empNo);
		$c->add(self::SERVICE_CODE, '2', Criteria::IN);
		$rs = self::doSelectOne($c);
		return $rs;
	}
}

<?php

/**
 * Subclass for performing query and update operations on the 'email_to_dept' table.
 *
 * 
 *
 * @package lib.model.reject
 */ 
class EmailToDeptPeer extends BaseEmailToDeptPeer
{
	
	public static function GetDataByEmailCustomerDeptShift($email, $cust, $dept = null, $shift = null)
	{
		$c = new Criteria();
		$c->add(self::EMAIL_ADDRESS, $email);
		$c->add(self::COMPANY, $cust);
		if ($dept) $c->add(self::DEPARTMENT, $dept);
		if ($shift) $c->add(self::SHIFT, $shift);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetDataByEmailByCompany($email, $co)
	{
		$c = new Criteria();
		$c->add(self::EMAIL_ADDRESS, $email);
		$c->add(self::COMPANY, $co);
		//$c->add(self::DESIGNATION, "&& || &&", Criteria::CUSTOM);
		$rs = self::doSelect($c);
//		var_dump($email);
//		var_dump($co);
//		var_dump($rs);
		return $rs;
	}
	
	public static function GetCompanyByEmail($email)
	{
		$c = new Criteria();
		$c->add(self::EMAIL_ADDRESS, $email);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getCompany() : '';
	}
	
	public static function GetEmailAddress($co, $dept=null, $shift=null)
	{
		$c = new Criteria();
		$c->add(EmailToDeptPeer::COMPANY, $co);
		$rs = self::doSelect($c);
//		return $rs? ($rs->getEmailAddress()) : 'fail';
		$emailList = array();
		foreach($rs as $r):
			if ($r->getDepartment() == 'ALL' && $r->getShift() == 'ALL'):
				$emailList[$r->getEmailAddress()] = $r->getEmailAddress();
			endif;
			if (strtoupper($dept) == strtoupper($r->getDepartment()) ):
				if ((strtoupper($r->getShift())) == 'ALL'):
					$emailList[$r->getEmailAddress()] = $r->getEmailAddress();
				else:
					if (strtoupper($shift) == strtoupper($r->getShift())):
						$emailList[$r->getEmailAddress()] = $r->getEmailAddress();
					endif;
				endif;
			endif;
		endforeach;
	    $emailTxt = implode(', ' , $emailList);
		return $emailTxt;
	}
}

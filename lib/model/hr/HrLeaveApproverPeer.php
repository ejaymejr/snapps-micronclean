<?php

/**
 * Subclass for performing query and update operations on the 'hr_leave_approver' table.
 *
 * 
 *
 * @package lib.model.hr
 */ 
class HrLeaveApproverPeer extends BaseHrLeaveApproverPeer
{
	
	public static function GetList($user=null)
	{
		$c = new Criteria();
		if ($user) $c->add(self::APPROVER, $user);
		$rs=self::doSelect($c);
		$list = array();
		foreach($rs as $r):
		$list[$r->getEmployeeNo()] = $r->getEmployeeNo();
		endforeach;
		return $rs? $list : false;
	}
	
	public static function IsLucyVerify($empno)
	{
		$c = new Criteria();
		$c->add(self::APPROVER, 'ANG LUCY');
		$c->add(self::EMPLOYEE_NO, $empno);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetVerifier($empno)
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getVerifier() : '(havent set)';
	}
	
	public static function GetApprover($empno)
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getApprover() : '(havent set)';
	}
	
}

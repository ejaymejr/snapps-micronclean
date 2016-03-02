<?php

/**
 * Subclass for performing query and update operations on the 'hr_employee_leave_signature' table.
 *
 * 
 *
 * @package lib.model.hr
 */ 
class HrEmployeeLeaveSignaturePeer extends BaseHrEmployeeLeaveSignaturePeer
{
	public static function GetDataByHrEmployeeLeaveId($id)
	{
		$c = new Criteria();
		$c->add(self::HR_EMPLOYEE_LEAVE_ID, $id);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function IsSigned($id)
	{
		$c = new Criteria();
		$c->add(self::HR_EMPLOYEE_LEAVE_ID, $id);
		$rs = self::doSelectOne($c);
		$isSigned = false;
		if ($rs):
			$isSigned = $rs->getApproval() ? true : false;
		endif;
		return $isSigned;
	}
	
	public static function IsVerifiedSigned($id)
	{
		$c = new Criteria();
		$c->add(self::HR_EMPLOYEE_LEAVE_ID, $id);
		$rs = self::doSelectOne($c);
		$isSigned = false;
		if ($rs):
			$isSigned = $rs->getVerified() ? true : false;
		endif;
		return $isSigned;
	}
	
	public static function IsApprovalSigned($id)
	{
		$c = new Criteria();
		$c->add(self::HR_EMPLOYEE_LEAVE_ID, $id);
		$rs = self::doSelectOne($c);
		$isSigned = false;
		if ($rs):
			$isSigned = $rs->getApproval() ? true : false;
		endif;
		return $isSigned;
	}
}

<?php

/**
 * Subclass for performing query and update operations on the 'hr_employee_satisfaction_questionaire' table.
 *
 * 
 *
 * @package lib.model.hr
 */ 
class HrEmployeeSatisfactionQuestionairePeer extends BaseHrEmployeeSatisfactionQuestionairePeer
{
	public static function GetQuestionaireData()
	{
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::GROUP);
		$rs = self::doSelect($c);
		return $rs;
	}
	
	public static function GetQuestionaireDataByGroup($groupNo = null)
	{
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::GROUP);
		if ($groupNo) $c->add(self::GROUP, $groupNo);
		$rs = self::doSelect($c);
		return $rs;
	}
}

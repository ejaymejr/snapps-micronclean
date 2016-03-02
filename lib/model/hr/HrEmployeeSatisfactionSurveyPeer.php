<?php

/**
 * Subclass for performing query and update operations on the 'hr_employee_satisfaction_survey' table.
 *
 * 
 *
 * @package lib.model.hr
 */ 
class HrEmployeeSatisfactionSurveyPeer extends BaseHrEmployeeSatisfactionSurveyPeer
{
	public static function GetAverageByQuestionaireID($questionaireID)
	{
		$c = new Criteria();
		$c->add(self::QUESTIONAIRE_ID, $questionaireID );
		$rs = self::doSelect($c);
		$tot = 0;
		$cnt = 0;
		$avg = 0;
		foreach($rs as $r):
			$tot += $r->getRating();
			$cnt++;
		endforeach;
		if ($cnt > 0) $avg = round( ($tot/$cnt), 1);
		$list = array('avg'=> $avg, 'total'=> $tot, 'count'=>$cnt );
		return $list;
	}
	
	public static function GetDataByBatch($batchID)
	{
		$c = new Criteria();
		$c->add(self::BATCH_NUMBER, $batchID);
		$rs = self::doSelectOne($c);
		return $rs;
	}
}

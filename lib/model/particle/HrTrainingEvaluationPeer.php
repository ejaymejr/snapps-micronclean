<?php

/**
 * Subclass for performing query and update operations on the 'hr_training_evaluation' table.
 *
 * 
 *
 * @package lib.model.particle
 */ 
class HrTrainingEvaluationPeer extends BaseHrTrainingEvaluationPeer
{
    public static function GetHrTrainingRecordIdByTrId($id)
    {
        $c = new Criteria();
        $c->add(self::HR_TRAINING_RECORD_ID, $id);
        $rs = self::doSelectOne($c);
        return $rs;
    }
}

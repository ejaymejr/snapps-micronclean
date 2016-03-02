<?php


abstract class BaseHrAcroNanoTrainingRecordSubstrate extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $date_next_time;


	
	protected $employee_no = 'null';


	
	protected $type_of_training = 'null';


	
	protected $policy_and_objectives = 'null';


	
	protected $cleanroom_discipline = 'null';


	
	protected $initial_inspection = 'null';


	
	protected $delabeling_jelly_removal = 'null';


	
	protected $pre_wash = 'null';


	
	protected $loading = 'null';


	
	protected $machine_wash = 'null';


	
	protected $unloading = 'null';


	
	protected $inprocess_visual_inspection = 'null';


	
	protected $lpc = 'null';


	
	protected $ic = 'null';


	
	protected $nvr = 'null';


	
	protected $qa_sample_inspection = 'null';


	
	protected $packing = 'null';


	
	protected $remarks;


	
	protected $verify = 'null';


	
	protected $last_issue_date;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getDateTime($format = 'Y-m-d H:i:s')
	{

		if ($this->date_time === null || $this->date_time === '') {
			return null;
		} elseif (!is_int($this->date_time)) {
						$ts = strtotime($this->date_time);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_time] as date/time value: " . var_export($this->date_time, true));
			}
		} else {
			$ts = $this->date_time;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateNextTime($format = 'Y-m-d H:i:s')
	{

		if ($this->date_next_time === null || $this->date_next_time === '') {
			return null;
		} elseif (!is_int($this->date_next_time)) {
						$ts = strtotime($this->date_next_time);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_next_time] as date/time value: " . var_export($this->date_next_time, true));
			}
		} else {
			$ts = $this->date_next_time;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getEmployeeNo()
	{

		return $this->employee_no;
	}

	
	public function getTypeOfTraining()
	{

		return $this->type_of_training;
	}

	
	public function getPolicyAndObjectives()
	{

		return $this->policy_and_objectives;
	}

	
	public function getCleanroomDiscipline()
	{

		return $this->cleanroom_discipline;
	}

	
	public function getInitialInspection()
	{

		return $this->initial_inspection;
	}

	
	public function getDelabelingJellyRemoval()
	{

		return $this->delabeling_jelly_removal;
	}

	
	public function getPreWash()
	{

		return $this->pre_wash;
	}

	
	public function getLoading()
	{

		return $this->loading;
	}

	
	public function getMachineWash()
	{

		return $this->machine_wash;
	}

	
	public function getUnloading()
	{

		return $this->unloading;
	}

	
	public function getInprocessVisualInspection()
	{

		return $this->inprocess_visual_inspection;
	}

	
	public function getLpc()
	{

		return $this->lpc;
	}

	
	public function getIc()
	{

		return $this->ic;
	}

	
	public function getNvr()
	{

		return $this->nvr;
	}

	
	public function getQaSampleInspection()
	{

		return $this->qa_sample_inspection;
	}

	
	public function getPacking()
	{

		return $this->packing;
	}

	
	public function getRemarks()
	{

		return $this->remarks;
	}

	
	public function getVerify()
	{

		return $this->verify;
	}

	
	public function getLastIssueDate($format = 'Y-m-d H:i:s')
	{

		if ($this->last_issue_date === null || $this->last_issue_date === '') {
			return null;
		} elseif (!is_int($this->last_issue_date)) {
						$ts = strtotime($this->last_issue_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [last_issue_date] as date/time value: " . var_export($this->last_issue_date, true));
			}
		} else {
			$ts = $this->last_issue_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::ID;
		}

	} 
	
	public function setDateTime($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_time] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_time !== $ts) {
			$this->date_time = $ts;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::DATE_TIME;
		}

	} 
	
	public function setDateNextTime($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_next_time] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_next_time !== $ts) {
			$this->date_next_time = $ts;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::DATE_NEXT_TIME;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v || $v === 'null') {
			$this->employee_no = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::EMPLOYEE_NO;
		}

	} 
	
	public function setTypeOfTraining($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_of_training !== $v || $v === 'null') {
			$this->type_of_training = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::TYPE_OF_TRAINING;
		}

	} 
	
	public function setPolicyAndObjectives($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->policy_and_objectives !== $v || $v === 'null') {
			$this->policy_and_objectives = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::POLICY_AND_OBJECTIVES;
		}

	} 
	
	public function setCleanroomDiscipline($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cleanroom_discipline !== $v || $v === 'null') {
			$this->cleanroom_discipline = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::CLEANROOM_DISCIPLINE;
		}

	} 
	
	public function setInitialInspection($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initial_inspection !== $v || $v === 'null') {
			$this->initial_inspection = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::INITIAL_INSPECTION;
		}

	} 
	
	public function setDelabelingJellyRemoval($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->delabeling_jelly_removal !== $v || $v === 'null') {
			$this->delabeling_jelly_removal = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::DELABELING_JELLY_REMOVAL;
		}

	} 
	
	public function setPreWash($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->pre_wash !== $v || $v === 'null') {
			$this->pre_wash = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::PRE_WASH;
		}

	} 
	
	public function setLoading($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->loading !== $v || $v === 'null') {
			$this->loading = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::LOADING;
		}

	} 
	
	public function setMachineWash($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_wash !== $v || $v === 'null') {
			$this->machine_wash = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::MACHINE_WASH;
		}

	} 
	
	public function setUnloading($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->unloading !== $v || $v === 'null') {
			$this->unloading = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::UNLOADING;
		}

	} 
	
	public function setInprocessVisualInspection($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->inprocess_visual_inspection !== $v || $v === 'null') {
			$this->inprocess_visual_inspection = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::INPROCESS_VISUAL_INSPECTION;
		}

	} 
	
	public function setLpc($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lpc !== $v || $v === 'null') {
			$this->lpc = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::LPC;
		}

	} 
	
	public function setIc($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ic !== $v || $v === 'null') {
			$this->ic = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::IC;
		}

	} 
	
	public function setNvr($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nvr !== $v || $v === 'null') {
			$this->nvr = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::NVR;
		}

	} 
	
	public function setQaSampleInspection($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->qa_sample_inspection !== $v || $v === 'null') {
			$this->qa_sample_inspection = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::QA_SAMPLE_INSPECTION;
		}

	} 
	
	public function setPacking($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->packing !== $v || $v === 'null') {
			$this->packing = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::PACKING;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::REMARKS;
		}

	} 
	
	public function setVerify($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verify !== $v || $v === 'null') {
			$this->verify = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::VERIFY;
		}

	} 
	
	public function setLastIssueDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [last_issue_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->last_issue_date !== $ts) {
			$this->last_issue_date = $ts;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordSubstratePeer::LAST_ISSUE_DATE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->date_next_time = $rs->getTimestamp($startcol + 2, null);

			$this->employee_no = $rs->getString($startcol + 3);

			$this->type_of_training = $rs->getString($startcol + 4);

			$this->policy_and_objectives = $rs->getString($startcol + 5);

			$this->cleanroom_discipline = $rs->getString($startcol + 6);

			$this->initial_inspection = $rs->getString($startcol + 7);

			$this->delabeling_jelly_removal = $rs->getString($startcol + 8);

			$this->pre_wash = $rs->getString($startcol + 9);

			$this->loading = $rs->getString($startcol + 10);

			$this->machine_wash = $rs->getString($startcol + 11);

			$this->unloading = $rs->getString($startcol + 12);

			$this->inprocess_visual_inspection = $rs->getString($startcol + 13);

			$this->lpc = $rs->getString($startcol + 14);

			$this->ic = $rs->getString($startcol + 15);

			$this->nvr = $rs->getString($startcol + 16);

			$this->qa_sample_inspection = $rs->getString($startcol + 17);

			$this->packing = $rs->getString($startcol + 18);

			$this->remarks = $rs->getString($startcol + 19);

			$this->verify = $rs->getString($startcol + 20);

			$this->last_issue_date = $rs->getTimestamp($startcol + 21, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 22; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrAcroNanoTrainingRecordSubstrate object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrAcroNanoTrainingRecordSubstratePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrAcroNanoTrainingRecordSubstratePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrAcroNanoTrainingRecordSubstratePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = HrAcroNanoTrainingRecordSubstratePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrAcroNanoTrainingRecordSubstratePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = HrAcroNanoTrainingRecordSubstratePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrAcroNanoTrainingRecordSubstratePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getDateTime();
				break;
			case 2:
				return $this->getDateNextTime();
				break;
			case 3:
				return $this->getEmployeeNo();
				break;
			case 4:
				return $this->getTypeOfTraining();
				break;
			case 5:
				return $this->getPolicyAndObjectives();
				break;
			case 6:
				return $this->getCleanroomDiscipline();
				break;
			case 7:
				return $this->getInitialInspection();
				break;
			case 8:
				return $this->getDelabelingJellyRemoval();
				break;
			case 9:
				return $this->getPreWash();
				break;
			case 10:
				return $this->getLoading();
				break;
			case 11:
				return $this->getMachineWash();
				break;
			case 12:
				return $this->getUnloading();
				break;
			case 13:
				return $this->getInprocessVisualInspection();
				break;
			case 14:
				return $this->getLpc();
				break;
			case 15:
				return $this->getIc();
				break;
			case 16:
				return $this->getNvr();
				break;
			case 17:
				return $this->getQaSampleInspection();
				break;
			case 18:
				return $this->getPacking();
				break;
			case 19:
				return $this->getRemarks();
				break;
			case 20:
				return $this->getVerify();
				break;
			case 21:
				return $this->getLastIssueDate();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrAcroNanoTrainingRecordSubstratePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getDateNextTime(),
			$keys[3] => $this->getEmployeeNo(),
			$keys[4] => $this->getTypeOfTraining(),
			$keys[5] => $this->getPolicyAndObjectives(),
			$keys[6] => $this->getCleanroomDiscipline(),
			$keys[7] => $this->getInitialInspection(),
			$keys[8] => $this->getDelabelingJellyRemoval(),
			$keys[9] => $this->getPreWash(),
			$keys[10] => $this->getLoading(),
			$keys[11] => $this->getMachineWash(),
			$keys[12] => $this->getUnloading(),
			$keys[13] => $this->getInprocessVisualInspection(),
			$keys[14] => $this->getLpc(),
			$keys[15] => $this->getIc(),
			$keys[16] => $this->getNvr(),
			$keys[17] => $this->getQaSampleInspection(),
			$keys[18] => $this->getPacking(),
			$keys[19] => $this->getRemarks(),
			$keys[20] => $this->getVerify(),
			$keys[21] => $this->getLastIssueDate(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrAcroNanoTrainingRecordSubstratePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setDateTime($value);
				break;
			case 2:
				$this->setDateNextTime($value);
				break;
			case 3:
				$this->setEmployeeNo($value);
				break;
			case 4:
				$this->setTypeOfTraining($value);
				break;
			case 5:
				$this->setPolicyAndObjectives($value);
				break;
			case 6:
				$this->setCleanroomDiscipline($value);
				break;
			case 7:
				$this->setInitialInspection($value);
				break;
			case 8:
				$this->setDelabelingJellyRemoval($value);
				break;
			case 9:
				$this->setPreWash($value);
				break;
			case 10:
				$this->setLoading($value);
				break;
			case 11:
				$this->setMachineWash($value);
				break;
			case 12:
				$this->setUnloading($value);
				break;
			case 13:
				$this->setInprocessVisualInspection($value);
				break;
			case 14:
				$this->setLpc($value);
				break;
			case 15:
				$this->setIc($value);
				break;
			case 16:
				$this->setNvr($value);
				break;
			case 17:
				$this->setQaSampleInspection($value);
				break;
			case 18:
				$this->setPacking($value);
				break;
			case 19:
				$this->setRemarks($value);
				break;
			case 20:
				$this->setVerify($value);
				break;
			case 21:
				$this->setLastIssueDate($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrAcroNanoTrainingRecordSubstratePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDateNextTime($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEmployeeNo($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTypeOfTraining($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPolicyAndObjectives($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCleanroomDiscipline($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setInitialInspection($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDelabelingJellyRemoval($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPreWash($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setLoading($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setMachineWash($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setUnloading($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setInprocessVisualInspection($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setLpc($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setIc($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setNvr($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setQaSampleInspection($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setPacking($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setRemarks($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setVerify($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setLastIssueDate($arr[$keys[21]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrAcroNanoTrainingRecordSubstratePeer::DATABASE_NAME);

		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::ID)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::ID, $this->id);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::DATE_TIME)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::DATE_NEXT_TIME)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::DATE_NEXT_TIME, $this->date_next_time);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::EMPLOYEE_NO)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::TYPE_OF_TRAINING)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::TYPE_OF_TRAINING, $this->type_of_training);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::POLICY_AND_OBJECTIVES)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::POLICY_AND_OBJECTIVES, $this->policy_and_objectives);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::CLEANROOM_DISCIPLINE)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::CLEANROOM_DISCIPLINE, $this->cleanroom_discipline);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::INITIAL_INSPECTION)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::INITIAL_INSPECTION, $this->initial_inspection);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::DELABELING_JELLY_REMOVAL)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::DELABELING_JELLY_REMOVAL, $this->delabeling_jelly_removal);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::PRE_WASH)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::PRE_WASH, $this->pre_wash);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::LOADING)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::LOADING, $this->loading);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::MACHINE_WASH)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::MACHINE_WASH, $this->machine_wash);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::UNLOADING)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::UNLOADING, $this->unloading);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::INPROCESS_VISUAL_INSPECTION)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::INPROCESS_VISUAL_INSPECTION, $this->inprocess_visual_inspection);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::LPC)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::LPC, $this->lpc);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::IC)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::IC, $this->ic);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::NVR)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::NVR, $this->nvr);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::QA_SAMPLE_INSPECTION)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::QA_SAMPLE_INSPECTION, $this->qa_sample_inspection);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::PACKING)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::PACKING, $this->packing);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::REMARKS)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::VERIFY)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::VERIFY, $this->verify);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordSubstratePeer::LAST_ISSUE_DATE)) $criteria->add(HrAcroNanoTrainingRecordSubstratePeer::LAST_ISSUE_DATE, $this->last_issue_date);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrAcroNanoTrainingRecordSubstratePeer::DATABASE_NAME);

		$criteria->add(HrAcroNanoTrainingRecordSubstratePeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setDateTime($this->date_time);

		$copyObj->setDateNextTime($this->date_next_time);

		$copyObj->setEmployeeNo($this->employee_no);

		$copyObj->setTypeOfTraining($this->type_of_training);

		$copyObj->setPolicyAndObjectives($this->policy_and_objectives);

		$copyObj->setCleanroomDiscipline($this->cleanroom_discipline);

		$copyObj->setInitialInspection($this->initial_inspection);

		$copyObj->setDelabelingJellyRemoval($this->delabeling_jelly_removal);

		$copyObj->setPreWash($this->pre_wash);

		$copyObj->setLoading($this->loading);

		$copyObj->setMachineWash($this->machine_wash);

		$copyObj->setUnloading($this->unloading);

		$copyObj->setInprocessVisualInspection($this->inprocess_visual_inspection);

		$copyObj->setLpc($this->lpc);

		$copyObj->setIc($this->ic);

		$copyObj->setNvr($this->nvr);

		$copyObj->setQaSampleInspection($this->qa_sample_inspection);

		$copyObj->setPacking($this->packing);

		$copyObj->setRemarks($this->remarks);

		$copyObj->setVerify($this->verify);

		$copyObj->setLastIssueDate($this->last_issue_date);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new HrAcroNanoTrainingRecordSubstratePeer();
		}
		return self::$peer;
	}

} 
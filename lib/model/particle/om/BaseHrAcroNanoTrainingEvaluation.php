<?php


abstract class BaseHrAcroNanoTrainingEvaluation extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
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


	
	protected $evaluated = 'null';


	
	protected $created_by = 'null';


	
	protected $date_created;


	
	protected $modified_by = 'null';


	
	protected $date_modified;

	
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

	
	public function getEvaluated()
	{

		return $this->evaluated;
	}

	
	public function getCreatedBy()
	{

		return $this->created_by;
	}

	
	public function getDateCreated($format = 'Y-m-d H:i:s')
	{

		if ($this->date_created === null || $this->date_created === '') {
			return null;
		} elseif (!is_int($this->date_created)) {
						$ts = strtotime($this->date_created);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_created] as date/time value: " . var_export($this->date_created, true));
			}
		} else {
			$ts = $this->date_created;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getModifiedBy()
	{

		return $this->modified_by;
	}

	
	public function getDateModified($format = 'Y-m-d H:i:s')
	{

		if ($this->date_modified === null || $this->date_modified === '') {
			return null;
		} elseif (!is_int($this->date_modified)) {
						$ts = strtotime($this->date_modified);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_modified] as date/time value: " . var_export($this->date_modified, true));
			}
		} else {
			$ts = $this->date_modified;
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
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::ID;
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
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::DATE_TIME;
		}

	} 
	
	public function setInitialInspection($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initial_inspection !== $v || $v === 'null') {
			$this->initial_inspection = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::INITIAL_INSPECTION;
		}

	} 
	
	public function setDelabelingJellyRemoval($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->delabeling_jelly_removal !== $v || $v === 'null') {
			$this->delabeling_jelly_removal = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::DELABELING_JELLY_REMOVAL;
		}

	} 
	
	public function setPreWash($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->pre_wash !== $v || $v === 'null') {
			$this->pre_wash = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::PRE_WASH;
		}

	} 
	
	public function setLoading($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->loading !== $v || $v === 'null') {
			$this->loading = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::LOADING;
		}

	} 
	
	public function setMachineWash($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_wash !== $v || $v === 'null') {
			$this->machine_wash = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::MACHINE_WASH;
		}

	} 
	
	public function setUnloading($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->unloading !== $v || $v === 'null') {
			$this->unloading = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::UNLOADING;
		}

	} 
	
	public function setInprocessVisualInspection($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->inprocess_visual_inspection !== $v || $v === 'null') {
			$this->inprocess_visual_inspection = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::INPROCESS_VISUAL_INSPECTION;
		}

	} 
	
	public function setLpc($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lpc !== $v || $v === 'null') {
			$this->lpc = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::LPC;
		}

	} 
	
	public function setIc($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ic !== $v || $v === 'null') {
			$this->ic = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::IC;
		}

	} 
	
	public function setNvr($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nvr !== $v || $v === 'null') {
			$this->nvr = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::NVR;
		}

	} 
	
	public function setQaSampleInspection($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->qa_sample_inspection !== $v || $v === 'null') {
			$this->qa_sample_inspection = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::QA_SAMPLE_INSPECTION;
		}

	} 
	
	public function setPacking($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->packing !== $v || $v === 'null') {
			$this->packing = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::PACKING;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::REMARKS;
		}

	} 
	
	public function setEvaluated($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->evaluated !== $v || $v === 'null') {
			$this->evaluated = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::EVALUATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::CREATED_BY;
		}

	} 
	
	public function setDateCreated($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_created] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_created !== $ts) {
			$this->date_created = $ts;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::MODIFIED_BY;
		}

	} 
	
	public function setDateModified($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_modified] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_modified !== $ts) {
			$this->date_modified = $ts;
			$this->modifiedColumns[] = HrAcroNanoTrainingEvaluationPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->initial_inspection = $rs->getString($startcol + 2);

			$this->delabeling_jelly_removal = $rs->getString($startcol + 3);

			$this->pre_wash = $rs->getString($startcol + 4);

			$this->loading = $rs->getString($startcol + 5);

			$this->machine_wash = $rs->getString($startcol + 6);

			$this->unloading = $rs->getString($startcol + 7);

			$this->inprocess_visual_inspection = $rs->getString($startcol + 8);

			$this->lpc = $rs->getString($startcol + 9);

			$this->ic = $rs->getString($startcol + 10);

			$this->nvr = $rs->getString($startcol + 11);

			$this->qa_sample_inspection = $rs->getString($startcol + 12);

			$this->packing = $rs->getString($startcol + 13);

			$this->remarks = $rs->getString($startcol + 14);

			$this->evaluated = $rs->getString($startcol + 15);

			$this->created_by = $rs->getString($startcol + 16);

			$this->date_created = $rs->getTimestamp($startcol + 17, null);

			$this->modified_by = $rs->getString($startcol + 18);

			$this->date_modified = $rs->getTimestamp($startcol + 19, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 20; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrAcroNanoTrainingEvaluation object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrAcroNanoTrainingEvaluationPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrAcroNanoTrainingEvaluationPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrAcroNanoTrainingEvaluationPeer::DATABASE_NAME);
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
					$pk = HrAcroNanoTrainingEvaluationPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrAcroNanoTrainingEvaluationPeer::doUpdate($this, $con);
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


			if (($retval = HrAcroNanoTrainingEvaluationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrAcroNanoTrainingEvaluationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getInitialInspection();
				break;
			case 3:
				return $this->getDelabelingJellyRemoval();
				break;
			case 4:
				return $this->getPreWash();
				break;
			case 5:
				return $this->getLoading();
				break;
			case 6:
				return $this->getMachineWash();
				break;
			case 7:
				return $this->getUnloading();
				break;
			case 8:
				return $this->getInprocessVisualInspection();
				break;
			case 9:
				return $this->getLpc();
				break;
			case 10:
				return $this->getIc();
				break;
			case 11:
				return $this->getNvr();
				break;
			case 12:
				return $this->getQaSampleInspection();
				break;
			case 13:
				return $this->getPacking();
				break;
			case 14:
				return $this->getRemarks();
				break;
			case 15:
				return $this->getEvaluated();
				break;
			case 16:
				return $this->getCreatedBy();
				break;
			case 17:
				return $this->getDateCreated();
				break;
			case 18:
				return $this->getModifiedBy();
				break;
			case 19:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrAcroNanoTrainingEvaluationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getInitialInspection(),
			$keys[3] => $this->getDelabelingJellyRemoval(),
			$keys[4] => $this->getPreWash(),
			$keys[5] => $this->getLoading(),
			$keys[6] => $this->getMachineWash(),
			$keys[7] => $this->getUnloading(),
			$keys[8] => $this->getInprocessVisualInspection(),
			$keys[9] => $this->getLpc(),
			$keys[10] => $this->getIc(),
			$keys[11] => $this->getNvr(),
			$keys[12] => $this->getQaSampleInspection(),
			$keys[13] => $this->getPacking(),
			$keys[14] => $this->getRemarks(),
			$keys[15] => $this->getEvaluated(),
			$keys[16] => $this->getCreatedBy(),
			$keys[17] => $this->getDateCreated(),
			$keys[18] => $this->getModifiedBy(),
			$keys[19] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrAcroNanoTrainingEvaluationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setInitialInspection($value);
				break;
			case 3:
				$this->setDelabelingJellyRemoval($value);
				break;
			case 4:
				$this->setPreWash($value);
				break;
			case 5:
				$this->setLoading($value);
				break;
			case 6:
				$this->setMachineWash($value);
				break;
			case 7:
				$this->setUnloading($value);
				break;
			case 8:
				$this->setInprocessVisualInspection($value);
				break;
			case 9:
				$this->setLpc($value);
				break;
			case 10:
				$this->setIc($value);
				break;
			case 11:
				$this->setNvr($value);
				break;
			case 12:
				$this->setQaSampleInspection($value);
				break;
			case 13:
				$this->setPacking($value);
				break;
			case 14:
				$this->setRemarks($value);
				break;
			case 15:
				$this->setEvaluated($value);
				break;
			case 16:
				$this->setCreatedBy($value);
				break;
			case 17:
				$this->setDateCreated($value);
				break;
			case 18:
				$this->setModifiedBy($value);
				break;
			case 19:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrAcroNanoTrainingEvaluationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setInitialInspection($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDelabelingJellyRemoval($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPreWash($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLoading($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setMachineWash($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setUnloading($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setInprocessVisualInspection($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setLpc($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setIc($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setNvr($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setQaSampleInspection($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setPacking($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setRemarks($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setEvaluated($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCreatedBy($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setDateCreated($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setModifiedBy($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setDateModified($arr[$keys[19]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrAcroNanoTrainingEvaluationPeer::DATABASE_NAME);

		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::ID)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::ID, $this->id);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::DATE_TIME)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::INITIAL_INSPECTION)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::INITIAL_INSPECTION, $this->initial_inspection);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::DELABELING_JELLY_REMOVAL)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::DELABELING_JELLY_REMOVAL, $this->delabeling_jelly_removal);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::PRE_WASH)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::PRE_WASH, $this->pre_wash);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::LOADING)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::LOADING, $this->loading);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::MACHINE_WASH)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::MACHINE_WASH, $this->machine_wash);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::UNLOADING)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::UNLOADING, $this->unloading);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::INPROCESS_VISUAL_INSPECTION)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::INPROCESS_VISUAL_INSPECTION, $this->inprocess_visual_inspection);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::LPC)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::LPC, $this->lpc);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::IC)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::IC, $this->ic);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::NVR)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::NVR, $this->nvr);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::QA_SAMPLE_INSPECTION)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::QA_SAMPLE_INSPECTION, $this->qa_sample_inspection);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::PACKING)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::PACKING, $this->packing);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::REMARKS)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::EVALUATED)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::EVALUATED, $this->evaluated);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::CREATED_BY)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::DATE_CREATED)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::MODIFIED_BY)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrAcroNanoTrainingEvaluationPeer::DATE_MODIFIED)) $criteria->add(HrAcroNanoTrainingEvaluationPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrAcroNanoTrainingEvaluationPeer::DATABASE_NAME);

		$criteria->add(HrAcroNanoTrainingEvaluationPeer::ID, $this->id);

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

		$copyObj->setEvaluated($this->evaluated);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateModified($this->date_modified);


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
			self::$peer = new HrAcroNanoTrainingEvaluationPeer();
		}
		return self::$peer;
	}

} 
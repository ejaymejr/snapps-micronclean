<?php


abstract class BaseHrStaffTrainingRecord extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $training_date;


	
	protected $staff = 'null';


	
	protected $training_description;


	
	protected $training_evaluation_date;


	
	protected $evaluate_by = 'null';


	
	protected $remark;


	
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

	
	public function getTrainingDate($format = 'Y-m-d H:i:s')
	{

		if ($this->training_date === null || $this->training_date === '') {
			return null;
		} elseif (!is_int($this->training_date)) {
						$ts = strtotime($this->training_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [training_date] as date/time value: " . var_export($this->training_date, true));
			}
		} else {
			$ts = $this->training_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getStaff()
	{

		return $this->staff;
	}

	
	public function getTrainingDescription()
	{

		return $this->training_description;
	}

	
	public function getTrainingEvaluationDate($format = 'Y-m-d H:i:s')
	{

		if ($this->training_evaluation_date === null || $this->training_evaluation_date === '') {
			return null;
		} elseif (!is_int($this->training_evaluation_date)) {
						$ts = strtotime($this->training_evaluation_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [training_evaluation_date] as date/time value: " . var_export($this->training_evaluation_date, true));
			}
		} else {
			$ts = $this->training_evaluation_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getEvaluateBy()
	{

		return $this->evaluate_by;
	}

	
	public function getRemark()
	{

		return $this->remark;
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
			$this->modifiedColumns[] = HrStaffTrainingRecordPeer::ID;
		}

	} 
	
	public function setTrainingDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [training_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->training_date !== $ts) {
			$this->training_date = $ts;
			$this->modifiedColumns[] = HrStaffTrainingRecordPeer::TRAINING_DATE;
		}

	} 
	
	public function setStaff($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->staff !== $v || $v === 'null') {
			$this->staff = $v;
			$this->modifiedColumns[] = HrStaffTrainingRecordPeer::STAFF;
		}

	} 
	
	public function setTrainingDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->training_description !== $v) {
			$this->training_description = $v;
			$this->modifiedColumns[] = HrStaffTrainingRecordPeer::TRAINING_DESCRIPTION;
		}

	} 
	
	public function setTrainingEvaluationDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [training_evaluation_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->training_evaluation_date !== $ts) {
			$this->training_evaluation_date = $ts;
			$this->modifiedColumns[] = HrStaffTrainingRecordPeer::TRAINING_EVALUATION_DATE;
		}

	} 
	
	public function setEvaluateBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->evaluate_by !== $v || $v === 'null') {
			$this->evaluate_by = $v;
			$this->modifiedColumns[] = HrStaffTrainingRecordPeer::EVALUATE_BY;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = HrStaffTrainingRecordPeer::REMARK;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrStaffTrainingRecordPeer::CREATED_BY;
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
			$this->modifiedColumns[] = HrStaffTrainingRecordPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrStaffTrainingRecordPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HrStaffTrainingRecordPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->training_date = $rs->getTimestamp($startcol + 1, null);

			$this->staff = $rs->getString($startcol + 2);

			$this->training_description = $rs->getString($startcol + 3);

			$this->training_evaluation_date = $rs->getTimestamp($startcol + 4, null);

			$this->evaluate_by = $rs->getString($startcol + 5);

			$this->remark = $rs->getString($startcol + 6);

			$this->created_by = $rs->getString($startcol + 7);

			$this->date_created = $rs->getTimestamp($startcol + 8, null);

			$this->modified_by = $rs->getString($startcol + 9);

			$this->date_modified = $rs->getTimestamp($startcol + 10, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrStaffTrainingRecord object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrStaffTrainingRecordPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrStaffTrainingRecordPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrStaffTrainingRecordPeer::DATABASE_NAME);
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
					$pk = HrStaffTrainingRecordPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrStaffTrainingRecordPeer::doUpdate($this, $con);
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


			if (($retval = HrStaffTrainingRecordPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrStaffTrainingRecordPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTrainingDate();
				break;
			case 2:
				return $this->getStaff();
				break;
			case 3:
				return $this->getTrainingDescription();
				break;
			case 4:
				return $this->getTrainingEvaluationDate();
				break;
			case 5:
				return $this->getEvaluateBy();
				break;
			case 6:
				return $this->getRemark();
				break;
			case 7:
				return $this->getCreatedBy();
				break;
			case 8:
				return $this->getDateCreated();
				break;
			case 9:
				return $this->getModifiedBy();
				break;
			case 10:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrStaffTrainingRecordPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTrainingDate(),
			$keys[2] => $this->getStaff(),
			$keys[3] => $this->getTrainingDescription(),
			$keys[4] => $this->getTrainingEvaluationDate(),
			$keys[5] => $this->getEvaluateBy(),
			$keys[6] => $this->getRemark(),
			$keys[7] => $this->getCreatedBy(),
			$keys[8] => $this->getDateCreated(),
			$keys[9] => $this->getModifiedBy(),
			$keys[10] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrStaffTrainingRecordPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTrainingDate($value);
				break;
			case 2:
				$this->setStaff($value);
				break;
			case 3:
				$this->setTrainingDescription($value);
				break;
			case 4:
				$this->setTrainingEvaluationDate($value);
				break;
			case 5:
				$this->setEvaluateBy($value);
				break;
			case 6:
				$this->setRemark($value);
				break;
			case 7:
				$this->setCreatedBy($value);
				break;
			case 8:
				$this->setDateCreated($value);
				break;
			case 9:
				$this->setModifiedBy($value);
				break;
			case 10:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrStaffTrainingRecordPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTrainingDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setStaff($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTrainingDescription($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTrainingEvaluationDate($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEvaluateBy($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setRemark($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedBy($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateCreated($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setModifiedBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateModified($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrStaffTrainingRecordPeer::DATABASE_NAME);

		if ($this->isColumnModified(HrStaffTrainingRecordPeer::ID)) $criteria->add(HrStaffTrainingRecordPeer::ID, $this->id);
		if ($this->isColumnModified(HrStaffTrainingRecordPeer::TRAINING_DATE)) $criteria->add(HrStaffTrainingRecordPeer::TRAINING_DATE, $this->training_date);
		if ($this->isColumnModified(HrStaffTrainingRecordPeer::STAFF)) $criteria->add(HrStaffTrainingRecordPeer::STAFF, $this->staff);
		if ($this->isColumnModified(HrStaffTrainingRecordPeer::TRAINING_DESCRIPTION)) $criteria->add(HrStaffTrainingRecordPeer::TRAINING_DESCRIPTION, $this->training_description);
		if ($this->isColumnModified(HrStaffTrainingRecordPeer::TRAINING_EVALUATION_DATE)) $criteria->add(HrStaffTrainingRecordPeer::TRAINING_EVALUATION_DATE, $this->training_evaluation_date);
		if ($this->isColumnModified(HrStaffTrainingRecordPeer::EVALUATE_BY)) $criteria->add(HrStaffTrainingRecordPeer::EVALUATE_BY, $this->evaluate_by);
		if ($this->isColumnModified(HrStaffTrainingRecordPeer::REMARK)) $criteria->add(HrStaffTrainingRecordPeer::REMARK, $this->remark);
		if ($this->isColumnModified(HrStaffTrainingRecordPeer::CREATED_BY)) $criteria->add(HrStaffTrainingRecordPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrStaffTrainingRecordPeer::DATE_CREATED)) $criteria->add(HrStaffTrainingRecordPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrStaffTrainingRecordPeer::MODIFIED_BY)) $criteria->add(HrStaffTrainingRecordPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrStaffTrainingRecordPeer::DATE_MODIFIED)) $criteria->add(HrStaffTrainingRecordPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrStaffTrainingRecordPeer::DATABASE_NAME);

		$criteria->add(HrStaffTrainingRecordPeer::ID, $this->id);

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

		$copyObj->setTrainingDate($this->training_date);

		$copyObj->setStaff($this->staff);

		$copyObj->setTrainingDescription($this->training_description);

		$copyObj->setTrainingEvaluationDate($this->training_evaluation_date);

		$copyObj->setEvaluateBy($this->evaluate_by);

		$copyObj->setRemark($this->remark);

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
			self::$peer = new HrStaffTrainingRecordPeer();
		}
		return self::$peer;
	}

} 
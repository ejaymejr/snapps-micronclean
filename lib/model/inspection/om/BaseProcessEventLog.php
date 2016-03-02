<?php


abstract class BaseProcessEventLog extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $trans_time;


	
	protected $machine_no;


	
	protected $failure_mode;


	
	protected $affected;


	
	protected $probable_cause;


	
	protected $corrective_action;


	
	protected $description_of_parts;


	
	protected $checked_by;


	
	protected $verified_by;


	
	protected $created_by;


	
	protected $date_created;


	
	protected $modified_by;


	
	protected $date_modified;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getTransDate($format = 'Y-m-d')
	{

		if ($this->trans_date === null || $this->trans_date === '') {
			return null;
		} elseif (!is_int($this->trans_date)) {
						$ts = strtotime($this->trans_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [trans_date] as date/time value: " . var_export($this->trans_date, true));
			}
		} else {
			$ts = $this->trans_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getTransTime($format = 'H:i:s')
	{

		if ($this->trans_time === null || $this->trans_time === '') {
			return null;
		} elseif (!is_int($this->trans_time)) {
						$ts = strtotime($this->trans_time);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [trans_time] as date/time value: " . var_export($this->trans_time, true));
			}
		} else {
			$ts = $this->trans_time;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getMachineNo()
	{

		return $this->machine_no;
	}

	
	public function getFailureMode()
	{

		return $this->failure_mode;
	}

	
	public function getAffected()
	{

		return $this->affected;
	}

	
	public function getProbableCause()
	{

		return $this->probable_cause;
	}

	
	public function getCorrectiveAction()
	{

		return $this->corrective_action;
	}

	
	public function getDescriptionOfParts()
	{

		return $this->description_of_parts;
	}

	
	public function getCheckedBy()
	{

		return $this->checked_by;
	}

	
	public function getVerifiedBy()
	{

		return $this->verified_by;
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
			$this->modifiedColumns[] = ProcessEventLogPeer::ID;
		}

	} 
	
	public function setTransDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [trans_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->trans_date !== $ts) {
			$this->trans_date = $ts;
			$this->modifiedColumns[] = ProcessEventLogPeer::TRANS_DATE;
		}

	} 
	
	public function setTransTime($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [trans_time] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->trans_time !== $ts) {
			$this->trans_time = $ts;
			$this->modifiedColumns[] = ProcessEventLogPeer::TRANS_TIME;
		}

	} 
	
	public function setMachineNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_no !== $v) {
			$this->machine_no = $v;
			$this->modifiedColumns[] = ProcessEventLogPeer::MACHINE_NO;
		}

	} 
	
	public function setFailureMode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->failure_mode !== $v) {
			$this->failure_mode = $v;
			$this->modifiedColumns[] = ProcessEventLogPeer::FAILURE_MODE;
		}

	} 
	
	public function setAffected($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->affected !== $v) {
			$this->affected = $v;
			$this->modifiedColumns[] = ProcessEventLogPeer::AFFECTED;
		}

	} 
	
	public function setProbableCause($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->probable_cause !== $v) {
			$this->probable_cause = $v;
			$this->modifiedColumns[] = ProcessEventLogPeer::PROBABLE_CAUSE;
		}

	} 
	
	public function setCorrectiveAction($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->corrective_action !== $v) {
			$this->corrective_action = $v;
			$this->modifiedColumns[] = ProcessEventLogPeer::CORRECTIVE_ACTION;
		}

	} 
	
	public function setDescriptionOfParts($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description_of_parts !== $v) {
			$this->description_of_parts = $v;
			$this->modifiedColumns[] = ProcessEventLogPeer::DESCRIPTION_OF_PARTS;
		}

	} 
	
	public function setCheckedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->checked_by !== $v) {
			$this->checked_by = $v;
			$this->modifiedColumns[] = ProcessEventLogPeer::CHECKED_BY;
		}

	} 
	
	public function setVerifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by !== $v) {
			$this->verified_by = $v;
			$this->modifiedColumns[] = ProcessEventLogPeer::VERIFIED_BY;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = ProcessEventLogPeer::CREATED_BY;
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
			$this->modifiedColumns[] = ProcessEventLogPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = ProcessEventLogPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = ProcessEventLogPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->trans_time = $rs->getTime($startcol + 2, null);

			$this->machine_no = $rs->getString($startcol + 3);

			$this->failure_mode = $rs->getString($startcol + 4);

			$this->affected = $rs->getString($startcol + 5);

			$this->probable_cause = $rs->getString($startcol + 6);

			$this->corrective_action = $rs->getString($startcol + 7);

			$this->description_of_parts = $rs->getString($startcol + 8);

			$this->checked_by = $rs->getString($startcol + 9);

			$this->verified_by = $rs->getString($startcol + 10);

			$this->created_by = $rs->getString($startcol + 11);

			$this->date_created = $rs->getTimestamp($startcol + 12, null);

			$this->modified_by = $rs->getString($startcol + 13);

			$this->date_modified = $rs->getTimestamp($startcol + 14, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 15; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ProcessEventLog object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProcessEventLogPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ProcessEventLogPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ProcessEventLogPeer::DATABASE_NAME);
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
					$pk = ProcessEventLogPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ProcessEventLogPeer::doUpdate($this, $con);
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


			if (($retval = ProcessEventLogPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProcessEventLogPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTransDate();
				break;
			case 2:
				return $this->getTransTime();
				break;
			case 3:
				return $this->getMachineNo();
				break;
			case 4:
				return $this->getFailureMode();
				break;
			case 5:
				return $this->getAffected();
				break;
			case 6:
				return $this->getProbableCause();
				break;
			case 7:
				return $this->getCorrectiveAction();
				break;
			case 8:
				return $this->getDescriptionOfParts();
				break;
			case 9:
				return $this->getCheckedBy();
				break;
			case 10:
				return $this->getVerifiedBy();
				break;
			case 11:
				return $this->getCreatedBy();
				break;
			case 12:
				return $this->getDateCreated();
				break;
			case 13:
				return $this->getModifiedBy();
				break;
			case 14:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProcessEventLogPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getTransTime(),
			$keys[3] => $this->getMachineNo(),
			$keys[4] => $this->getFailureMode(),
			$keys[5] => $this->getAffected(),
			$keys[6] => $this->getProbableCause(),
			$keys[7] => $this->getCorrectiveAction(),
			$keys[8] => $this->getDescriptionOfParts(),
			$keys[9] => $this->getCheckedBy(),
			$keys[10] => $this->getVerifiedBy(),
			$keys[11] => $this->getCreatedBy(),
			$keys[12] => $this->getDateCreated(),
			$keys[13] => $this->getModifiedBy(),
			$keys[14] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProcessEventLogPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTransDate($value);
				break;
			case 2:
				$this->setTransTime($value);
				break;
			case 3:
				$this->setMachineNo($value);
				break;
			case 4:
				$this->setFailureMode($value);
				break;
			case 5:
				$this->setAffected($value);
				break;
			case 6:
				$this->setProbableCause($value);
				break;
			case 7:
				$this->setCorrectiveAction($value);
				break;
			case 8:
				$this->setDescriptionOfParts($value);
				break;
			case 9:
				$this->setCheckedBy($value);
				break;
			case 10:
				$this->setVerifiedBy($value);
				break;
			case 11:
				$this->setCreatedBy($value);
				break;
			case 12:
				$this->setDateCreated($value);
				break;
			case 13:
				$this->setModifiedBy($value);
				break;
			case 14:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProcessEventLogPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTransTime($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMachineNo($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFailureMode($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAffected($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setProbableCause($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCorrectiveAction($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDescriptionOfParts($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCheckedBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setVerifiedBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCreatedBy($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDateCreated($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setModifiedBy($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateModified($arr[$keys[14]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ProcessEventLogPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProcessEventLogPeer::ID)) $criteria->add(ProcessEventLogPeer::ID, $this->id);
		if ($this->isColumnModified(ProcessEventLogPeer::TRANS_DATE)) $criteria->add(ProcessEventLogPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(ProcessEventLogPeer::TRANS_TIME)) $criteria->add(ProcessEventLogPeer::TRANS_TIME, $this->trans_time);
		if ($this->isColumnModified(ProcessEventLogPeer::MACHINE_NO)) $criteria->add(ProcessEventLogPeer::MACHINE_NO, $this->machine_no);
		if ($this->isColumnModified(ProcessEventLogPeer::FAILURE_MODE)) $criteria->add(ProcessEventLogPeer::FAILURE_MODE, $this->failure_mode);
		if ($this->isColumnModified(ProcessEventLogPeer::AFFECTED)) $criteria->add(ProcessEventLogPeer::AFFECTED, $this->affected);
		if ($this->isColumnModified(ProcessEventLogPeer::PROBABLE_CAUSE)) $criteria->add(ProcessEventLogPeer::PROBABLE_CAUSE, $this->probable_cause);
		if ($this->isColumnModified(ProcessEventLogPeer::CORRECTIVE_ACTION)) $criteria->add(ProcessEventLogPeer::CORRECTIVE_ACTION, $this->corrective_action);
		if ($this->isColumnModified(ProcessEventLogPeer::DESCRIPTION_OF_PARTS)) $criteria->add(ProcessEventLogPeer::DESCRIPTION_OF_PARTS, $this->description_of_parts);
		if ($this->isColumnModified(ProcessEventLogPeer::CHECKED_BY)) $criteria->add(ProcessEventLogPeer::CHECKED_BY, $this->checked_by);
		if ($this->isColumnModified(ProcessEventLogPeer::VERIFIED_BY)) $criteria->add(ProcessEventLogPeer::VERIFIED_BY, $this->verified_by);
		if ($this->isColumnModified(ProcessEventLogPeer::CREATED_BY)) $criteria->add(ProcessEventLogPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(ProcessEventLogPeer::DATE_CREATED)) $criteria->add(ProcessEventLogPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(ProcessEventLogPeer::MODIFIED_BY)) $criteria->add(ProcessEventLogPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(ProcessEventLogPeer::DATE_MODIFIED)) $criteria->add(ProcessEventLogPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProcessEventLogPeer::DATABASE_NAME);

		$criteria->add(ProcessEventLogPeer::ID, $this->id);

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

		$copyObj->setTransDate($this->trans_date);

		$copyObj->setTransTime($this->trans_time);

		$copyObj->setMachineNo($this->machine_no);

		$copyObj->setFailureMode($this->failure_mode);

		$copyObj->setAffected($this->affected);

		$copyObj->setProbableCause($this->probable_cause);

		$copyObj->setCorrectiveAction($this->corrective_action);

		$copyObj->setDescriptionOfParts($this->description_of_parts);

		$copyObj->setCheckedBy($this->checked_by);

		$copyObj->setVerifiedBy($this->verified_by);

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
			self::$peer = new ProcessEventLogPeer();
		}
		return self::$peer;
	}

} 
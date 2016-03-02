<?php


abstract class BaseWashingMachineDoseCalibration extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $machine_no;


	
	protected $volume_dispensed;


	
	protected $time_taken;


	
	protected $remarks;


	
	protected $checked_by = 'null';


	
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

	
	public function getDateTime($format = 'Y-m-d')
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

	
	public function getMachineNo()
	{

		return $this->machine_no;
	}

	
	public function getVolumeDispensed()
	{

		return $this->volume_dispensed;
	}

	
	public function getTimeTaken()
	{

		return $this->time_taken;
	}

	
	public function getRemarks()
	{

		return $this->remarks;
	}

	
	public function getCheckedBy()
	{

		return $this->checked_by;
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
			$this->modifiedColumns[] = WashingMachineDoseCalibrationPeer::ID;
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
			$this->modifiedColumns[] = WashingMachineDoseCalibrationPeer::DATE_TIME;
		}

	} 
	
	public function setMachineNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_no !== $v) {
			$this->machine_no = $v;
			$this->modifiedColumns[] = WashingMachineDoseCalibrationPeer::MACHINE_NO;
		}

	} 
	
	public function setVolumeDispensed($v)
	{

		if ($this->volume_dispensed !== $v) {
			$this->volume_dispensed = $v;
			$this->modifiedColumns[] = WashingMachineDoseCalibrationPeer::VOLUME_DISPENSED;
		}

	} 
	
	public function setTimeTaken($v)
	{

		if ($this->time_taken !== $v) {
			$this->time_taken = $v;
			$this->modifiedColumns[] = WashingMachineDoseCalibrationPeer::TIME_TAKEN;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = WashingMachineDoseCalibrationPeer::REMARKS;
		}

	} 
	
	public function setCheckedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->checked_by !== $v || $v === 'null') {
			$this->checked_by = $v;
			$this->modifiedColumns[] = WashingMachineDoseCalibrationPeer::CHECKED_BY;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = WashingMachineDoseCalibrationPeer::CREATED_BY;
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
			$this->modifiedColumns[] = WashingMachineDoseCalibrationPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = WashingMachineDoseCalibrationPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = WashingMachineDoseCalibrationPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getDate($startcol + 1, null);

			$this->machine_no = $rs->getString($startcol + 2);

			$this->volume_dispensed = $rs->getFloat($startcol + 3);

			$this->time_taken = $rs->getFloat($startcol + 4);

			$this->remarks = $rs->getString($startcol + 5);

			$this->checked_by = $rs->getString($startcol + 6);

			$this->created_by = $rs->getString($startcol + 7);

			$this->date_created = $rs->getTimestamp($startcol + 8, null);

			$this->modified_by = $rs->getString($startcol + 9);

			$this->date_modified = $rs->getTimestamp($startcol + 10, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating WashingMachineDoseCalibration object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(WashingMachineDoseCalibrationPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			WashingMachineDoseCalibrationPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(WashingMachineDoseCalibrationPeer::DATABASE_NAME);
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
					$pk = WashingMachineDoseCalibrationPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += WashingMachineDoseCalibrationPeer::doUpdate($this, $con);
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


			if (($retval = WashingMachineDoseCalibrationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = WashingMachineDoseCalibrationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getMachineNo();
				break;
			case 3:
				return $this->getVolumeDispensed();
				break;
			case 4:
				return $this->getTimeTaken();
				break;
			case 5:
				return $this->getRemarks();
				break;
			case 6:
				return $this->getCheckedBy();
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
		$keys = WashingMachineDoseCalibrationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getMachineNo(),
			$keys[3] => $this->getVolumeDispensed(),
			$keys[4] => $this->getTimeTaken(),
			$keys[5] => $this->getRemarks(),
			$keys[6] => $this->getCheckedBy(),
			$keys[7] => $this->getCreatedBy(),
			$keys[8] => $this->getDateCreated(),
			$keys[9] => $this->getModifiedBy(),
			$keys[10] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = WashingMachineDoseCalibrationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setMachineNo($value);
				break;
			case 3:
				$this->setVolumeDispensed($value);
				break;
			case 4:
				$this->setTimeTaken($value);
				break;
			case 5:
				$this->setRemarks($value);
				break;
			case 6:
				$this->setCheckedBy($value);
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
		$keys = WashingMachineDoseCalibrationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMachineNo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setVolumeDispensed($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTimeTaken($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRemarks($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCheckedBy($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedBy($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateCreated($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setModifiedBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateModified($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(WashingMachineDoseCalibrationPeer::DATABASE_NAME);

		if ($this->isColumnModified(WashingMachineDoseCalibrationPeer::ID)) $criteria->add(WashingMachineDoseCalibrationPeer::ID, $this->id);
		if ($this->isColumnModified(WashingMachineDoseCalibrationPeer::DATE_TIME)) $criteria->add(WashingMachineDoseCalibrationPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(WashingMachineDoseCalibrationPeer::MACHINE_NO)) $criteria->add(WashingMachineDoseCalibrationPeer::MACHINE_NO, $this->machine_no);
		if ($this->isColumnModified(WashingMachineDoseCalibrationPeer::VOLUME_DISPENSED)) $criteria->add(WashingMachineDoseCalibrationPeer::VOLUME_DISPENSED, $this->volume_dispensed);
		if ($this->isColumnModified(WashingMachineDoseCalibrationPeer::TIME_TAKEN)) $criteria->add(WashingMachineDoseCalibrationPeer::TIME_TAKEN, $this->time_taken);
		if ($this->isColumnModified(WashingMachineDoseCalibrationPeer::REMARKS)) $criteria->add(WashingMachineDoseCalibrationPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(WashingMachineDoseCalibrationPeer::CHECKED_BY)) $criteria->add(WashingMachineDoseCalibrationPeer::CHECKED_BY, $this->checked_by);
		if ($this->isColumnModified(WashingMachineDoseCalibrationPeer::CREATED_BY)) $criteria->add(WashingMachineDoseCalibrationPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(WashingMachineDoseCalibrationPeer::DATE_CREATED)) $criteria->add(WashingMachineDoseCalibrationPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(WashingMachineDoseCalibrationPeer::MODIFIED_BY)) $criteria->add(WashingMachineDoseCalibrationPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(WashingMachineDoseCalibrationPeer::DATE_MODIFIED)) $criteria->add(WashingMachineDoseCalibrationPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(WashingMachineDoseCalibrationPeer::DATABASE_NAME);

		$criteria->add(WashingMachineDoseCalibrationPeer::ID, $this->id);

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

		$copyObj->setMachineNo($this->machine_no);

		$copyObj->setVolumeDispensed($this->volume_dispensed);

		$copyObj->setTimeTaken($this->time_taken);

		$copyObj->setRemarks($this->remarks);

		$copyObj->setCheckedBy($this->checked_by);

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
			self::$peer = new WashingMachineDoseCalibrationPeer();
		}
		return self::$peer;
	}

} 
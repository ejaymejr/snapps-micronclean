<?php


abstract class BaseHrTraining extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $description;


	
	protected $place_held;


	
	protected $date_from;


	
	protected $date_to;


	
	protected $no_hrs;


	
	protected $remarks;


	
	protected $name_trainor;


	
	protected $license_no;


	
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

	
	public function getDescription()
	{

		return $this->description;
	}

	
	public function getPlaceHeld()
	{

		return $this->place_held;
	}

	
	public function getDateFrom($format = 'Y-m-d')
	{

		if ($this->date_from === null || $this->date_from === '') {
			return null;
		} elseif (!is_int($this->date_from)) {
						$ts = strtotime($this->date_from);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_from] as date/time value: " . var_export($this->date_from, true));
			}
		} else {
			$ts = $this->date_from;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateTo($format = 'Y-m-d')
	{

		if ($this->date_to === null || $this->date_to === '') {
			return null;
		} elseif (!is_int($this->date_to)) {
						$ts = strtotime($this->date_to);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_to] as date/time value: " . var_export($this->date_to, true));
			}
		} else {
			$ts = $this->date_to;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getNoHrs()
	{

		return $this->no_hrs;
	}

	
	public function getRemarks()
	{

		return $this->remarks;
	}

	
	public function getNameTrainor()
	{

		return $this->name_trainor;
	}

	
	public function getLicenseNo()
	{

		return $this->license_no;
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

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = HrTrainingPeer::ID;
		}

	} 
	
	public function setDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = HrTrainingPeer::DESCRIPTION;
		}

	} 
	
	public function setPlaceHeld($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->place_held !== $v) {
			$this->place_held = $v;
			$this->modifiedColumns[] = HrTrainingPeer::PLACE_HELD;
		}

	} 
	
	public function setDateFrom($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_from] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_from !== $ts) {
			$this->date_from = $ts;
			$this->modifiedColumns[] = HrTrainingPeer::DATE_FROM;
		}

	} 
	
	public function setDateTo($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_to] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_to !== $ts) {
			$this->date_to = $ts;
			$this->modifiedColumns[] = HrTrainingPeer::DATE_TO;
		}

	} 
	
	public function setNoHrs($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->no_hrs !== $v) {
			$this->no_hrs = $v;
			$this->modifiedColumns[] = HrTrainingPeer::NO_HRS;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = HrTrainingPeer::REMARKS;
		}

	} 
	
	public function setNameTrainor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_trainor !== $v) {
			$this->name_trainor = $v;
			$this->modifiedColumns[] = HrTrainingPeer::NAME_TRAINOR;
		}

	} 
	
	public function setLicenseNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->license_no !== $v) {
			$this->license_no = $v;
			$this->modifiedColumns[] = HrTrainingPeer::LICENSE_NO;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrTrainingPeer::CREATED_BY;
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
			$this->modifiedColumns[] = HrTrainingPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrTrainingPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HrTrainingPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->description = $rs->getString($startcol + 1);

			$this->place_held = $rs->getString($startcol + 2);

			$this->date_from = $rs->getDate($startcol + 3, null);

			$this->date_to = $rs->getDate($startcol + 4, null);

			$this->no_hrs = $rs->getString($startcol + 5);

			$this->remarks = $rs->getString($startcol + 6);

			$this->name_trainor = $rs->getString($startcol + 7);

			$this->license_no = $rs->getString($startcol + 8);

			$this->created_by = $rs->getString($startcol + 9);

			$this->date_created = $rs->getTimestamp($startcol + 10, null);

			$this->modified_by = $rs->getString($startcol + 11);

			$this->date_modified = $rs->getTimestamp($startcol + 12, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 13; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrTraining object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrTrainingPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrTrainingPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrTrainingPeer::DATABASE_NAME);
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
					$pk = HrTrainingPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrTrainingPeer::doUpdate($this, $con);
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


			if (($retval = HrTrainingPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrTrainingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getDescription();
				break;
			case 2:
				return $this->getPlaceHeld();
				break;
			case 3:
				return $this->getDateFrom();
				break;
			case 4:
				return $this->getDateTo();
				break;
			case 5:
				return $this->getNoHrs();
				break;
			case 6:
				return $this->getRemarks();
				break;
			case 7:
				return $this->getNameTrainor();
				break;
			case 8:
				return $this->getLicenseNo();
				break;
			case 9:
				return $this->getCreatedBy();
				break;
			case 10:
				return $this->getDateCreated();
				break;
			case 11:
				return $this->getModifiedBy();
				break;
			case 12:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrTrainingPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDescription(),
			$keys[2] => $this->getPlaceHeld(),
			$keys[3] => $this->getDateFrom(),
			$keys[4] => $this->getDateTo(),
			$keys[5] => $this->getNoHrs(),
			$keys[6] => $this->getRemarks(),
			$keys[7] => $this->getNameTrainor(),
			$keys[8] => $this->getLicenseNo(),
			$keys[9] => $this->getCreatedBy(),
			$keys[10] => $this->getDateCreated(),
			$keys[11] => $this->getModifiedBy(),
			$keys[12] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrTrainingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setDescription($value);
				break;
			case 2:
				$this->setPlaceHeld($value);
				break;
			case 3:
				$this->setDateFrom($value);
				break;
			case 4:
				$this->setDateTo($value);
				break;
			case 5:
				$this->setNoHrs($value);
				break;
			case 6:
				$this->setRemarks($value);
				break;
			case 7:
				$this->setNameTrainor($value);
				break;
			case 8:
				$this->setLicenseNo($value);
				break;
			case 9:
				$this->setCreatedBy($value);
				break;
			case 10:
				$this->setDateCreated($value);
				break;
			case 11:
				$this->setModifiedBy($value);
				break;
			case 12:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrTrainingPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDescription($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPlaceHeld($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateFrom($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDateTo($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNoHrs($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setRemarks($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNameTrainor($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setLicenseNo($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCreatedBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateCreated($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setModifiedBy($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDateModified($arr[$keys[12]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrTrainingPeer::DATABASE_NAME);

		if ($this->isColumnModified(HrTrainingPeer::ID)) $criteria->add(HrTrainingPeer::ID, $this->id);
		if ($this->isColumnModified(HrTrainingPeer::DESCRIPTION)) $criteria->add(HrTrainingPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(HrTrainingPeer::PLACE_HELD)) $criteria->add(HrTrainingPeer::PLACE_HELD, $this->place_held);
		if ($this->isColumnModified(HrTrainingPeer::DATE_FROM)) $criteria->add(HrTrainingPeer::DATE_FROM, $this->date_from);
		if ($this->isColumnModified(HrTrainingPeer::DATE_TO)) $criteria->add(HrTrainingPeer::DATE_TO, $this->date_to);
		if ($this->isColumnModified(HrTrainingPeer::NO_HRS)) $criteria->add(HrTrainingPeer::NO_HRS, $this->no_hrs);
		if ($this->isColumnModified(HrTrainingPeer::REMARKS)) $criteria->add(HrTrainingPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(HrTrainingPeer::NAME_TRAINOR)) $criteria->add(HrTrainingPeer::NAME_TRAINOR, $this->name_trainor);
		if ($this->isColumnModified(HrTrainingPeer::LICENSE_NO)) $criteria->add(HrTrainingPeer::LICENSE_NO, $this->license_no);
		if ($this->isColumnModified(HrTrainingPeer::CREATED_BY)) $criteria->add(HrTrainingPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrTrainingPeer::DATE_CREATED)) $criteria->add(HrTrainingPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrTrainingPeer::MODIFIED_BY)) $criteria->add(HrTrainingPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrTrainingPeer::DATE_MODIFIED)) $criteria->add(HrTrainingPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrTrainingPeer::DATABASE_NAME);

		$criteria->add(HrTrainingPeer::ID, $this->id);

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

		$copyObj->setDescription($this->description);

		$copyObj->setPlaceHeld($this->place_held);

		$copyObj->setDateFrom($this->date_from);

		$copyObj->setDateTo($this->date_to);

		$copyObj->setNoHrs($this->no_hrs);

		$copyObj->setRemarks($this->remarks);

		$copyObj->setNameTrainor($this->name_trainor);

		$copyObj->setLicenseNo($this->license_no);

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
			self::$peer = new HrTrainingPeer();
		}
		return self::$peer;
	}

} 
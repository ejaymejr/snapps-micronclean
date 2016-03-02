<?php


abstract class BaseUltrasonic extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $frequency;


	
	protected $power;


	
	protected $capacitance;


	
	protected $equipment_name;


	
	protected $equipment_no;


	
	protected $equipment_cal_no;


	
	protected $equipment_cal_date;


	
	protected $done_by;


	
	protected $verified_by;


	
	protected $remark;


	
	protected $date_created;


	
	protected $created_by;


	
	protected $date_modified;


	
	protected $modified_by;

	
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

	
	public function getFrequency()
	{

		return $this->frequency;
	}

	
	public function getPower()
	{

		return $this->power;
	}

	
	public function getCapacitance()
	{

		return $this->capacitance;
	}

	
	public function getEquipmentName()
	{

		return $this->equipment_name;
	}

	
	public function getEquipmentNo()
	{

		return $this->equipment_no;
	}

	
	public function getEquipmentCalNo()
	{

		return $this->equipment_cal_no;
	}

	
	public function getEquipmentCalDate($format = 'Y-m-d')
	{

		if ($this->equipment_cal_date === null || $this->equipment_cal_date === '') {
			return null;
		} elseif (!is_int($this->equipment_cal_date)) {
						$ts = strtotime($this->equipment_cal_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [equipment_cal_date] as date/time value: " . var_export($this->equipment_cal_date, true));
			}
		} else {
			$ts = $this->equipment_cal_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDoneBy()
	{

		return $this->done_by;
	}

	
	public function getVerifiedBy()
	{

		return $this->verified_by;
	}

	
	public function getRemark()
	{

		return $this->remark;
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

	
	public function getCreatedBy()
	{

		return $this->created_by;
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

	
	public function getModifiedBy()
	{

		return $this->modified_by;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = UltrasonicPeer::ID;
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
			$this->modifiedColumns[] = UltrasonicPeer::TRANS_DATE;
		}

	} 
	
	public function setFrequency($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->frequency !== $v) {
			$this->frequency = $v;
			$this->modifiedColumns[] = UltrasonicPeer::FREQUENCY;
		}

	} 
	
	public function setPower($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->power !== $v) {
			$this->power = $v;
			$this->modifiedColumns[] = UltrasonicPeer::POWER;
		}

	} 
	
	public function setCapacitance($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->capacitance !== $v) {
			$this->capacitance = $v;
			$this->modifiedColumns[] = UltrasonicPeer::CAPACITANCE;
		}

	} 
	
	public function setEquipmentName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->equipment_name !== $v) {
			$this->equipment_name = $v;
			$this->modifiedColumns[] = UltrasonicPeer::EQUIPMENT_NAME;
		}

	} 
	
	public function setEquipmentNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->equipment_no !== $v) {
			$this->equipment_no = $v;
			$this->modifiedColumns[] = UltrasonicPeer::EQUIPMENT_NO;
		}

	} 
	
	public function setEquipmentCalNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->equipment_cal_no !== $v) {
			$this->equipment_cal_no = $v;
			$this->modifiedColumns[] = UltrasonicPeer::EQUIPMENT_CAL_NO;
		}

	} 
	
	public function setEquipmentCalDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [equipment_cal_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->equipment_cal_date !== $ts) {
			$this->equipment_cal_date = $ts;
			$this->modifiedColumns[] = UltrasonicPeer::EQUIPMENT_CAL_DATE;
		}

	} 
	
	public function setDoneBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->done_by !== $v) {
			$this->done_by = $v;
			$this->modifiedColumns[] = UltrasonicPeer::DONE_BY;
		}

	} 
	
	public function setVerifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by !== $v) {
			$this->verified_by = $v;
			$this->modifiedColumns[] = UltrasonicPeer::VERIFIED_BY;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = UltrasonicPeer::REMARK;
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
			$this->modifiedColumns[] = UltrasonicPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = UltrasonicPeer::CREATED_BY;
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
			$this->modifiedColumns[] = UltrasonicPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = UltrasonicPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->frequency = $rs->getString($startcol + 2);

			$this->power = $rs->getString($startcol + 3);

			$this->capacitance = $rs->getString($startcol + 4);

			$this->equipment_name = $rs->getString($startcol + 5);

			$this->equipment_no = $rs->getString($startcol + 6);

			$this->equipment_cal_no = $rs->getString($startcol + 7);

			$this->equipment_cal_date = $rs->getDate($startcol + 8, null);

			$this->done_by = $rs->getString($startcol + 9);

			$this->verified_by = $rs->getString($startcol + 10);

			$this->remark = $rs->getString($startcol + 11);

			$this->date_created = $rs->getTimestamp($startcol + 12, null);

			$this->created_by = $rs->getString($startcol + 13);

			$this->date_modified = $rs->getTimestamp($startcol + 14, null);

			$this->modified_by = $rs->getString($startcol + 15);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Ultrasonic object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UltrasonicPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			UltrasonicPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(UltrasonicPeer::DATABASE_NAME);
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
					$pk = UltrasonicPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += UltrasonicPeer::doUpdate($this, $con);
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


			if (($retval = UltrasonicPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UltrasonicPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getFrequency();
				break;
			case 3:
				return $this->getPower();
				break;
			case 4:
				return $this->getCapacitance();
				break;
			case 5:
				return $this->getEquipmentName();
				break;
			case 6:
				return $this->getEquipmentNo();
				break;
			case 7:
				return $this->getEquipmentCalNo();
				break;
			case 8:
				return $this->getEquipmentCalDate();
				break;
			case 9:
				return $this->getDoneBy();
				break;
			case 10:
				return $this->getVerifiedBy();
				break;
			case 11:
				return $this->getRemark();
				break;
			case 12:
				return $this->getDateCreated();
				break;
			case 13:
				return $this->getCreatedBy();
				break;
			case 14:
				return $this->getDateModified();
				break;
			case 15:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UltrasonicPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getFrequency(),
			$keys[3] => $this->getPower(),
			$keys[4] => $this->getCapacitance(),
			$keys[5] => $this->getEquipmentName(),
			$keys[6] => $this->getEquipmentNo(),
			$keys[7] => $this->getEquipmentCalNo(),
			$keys[8] => $this->getEquipmentCalDate(),
			$keys[9] => $this->getDoneBy(),
			$keys[10] => $this->getVerifiedBy(),
			$keys[11] => $this->getRemark(),
			$keys[12] => $this->getDateCreated(),
			$keys[13] => $this->getCreatedBy(),
			$keys[14] => $this->getDateModified(),
			$keys[15] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UltrasonicPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setFrequency($value);
				break;
			case 3:
				$this->setPower($value);
				break;
			case 4:
				$this->setCapacitance($value);
				break;
			case 5:
				$this->setEquipmentName($value);
				break;
			case 6:
				$this->setEquipmentNo($value);
				break;
			case 7:
				$this->setEquipmentCalNo($value);
				break;
			case 8:
				$this->setEquipmentCalDate($value);
				break;
			case 9:
				$this->setDoneBy($value);
				break;
			case 10:
				$this->setVerifiedBy($value);
				break;
			case 11:
				$this->setRemark($value);
				break;
			case 12:
				$this->setDateCreated($value);
				break;
			case 13:
				$this->setCreatedBy($value);
				break;
			case 14:
				$this->setDateModified($value);
				break;
			case 15:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UltrasonicPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFrequency($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPower($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCapacitance($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEquipmentName($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setEquipmentNo($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setEquipmentCalNo($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setEquipmentCalDate($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDoneBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setVerifiedBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setRemark($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDateCreated($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCreatedBy($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateModified($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setModifiedBy($arr[$keys[15]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(UltrasonicPeer::DATABASE_NAME);

		if ($this->isColumnModified(UltrasonicPeer::ID)) $criteria->add(UltrasonicPeer::ID, $this->id);
		if ($this->isColumnModified(UltrasonicPeer::TRANS_DATE)) $criteria->add(UltrasonicPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(UltrasonicPeer::FREQUENCY)) $criteria->add(UltrasonicPeer::FREQUENCY, $this->frequency);
		if ($this->isColumnModified(UltrasonicPeer::POWER)) $criteria->add(UltrasonicPeer::POWER, $this->power);
		if ($this->isColumnModified(UltrasonicPeer::CAPACITANCE)) $criteria->add(UltrasonicPeer::CAPACITANCE, $this->capacitance);
		if ($this->isColumnModified(UltrasonicPeer::EQUIPMENT_NAME)) $criteria->add(UltrasonicPeer::EQUIPMENT_NAME, $this->equipment_name);
		if ($this->isColumnModified(UltrasonicPeer::EQUIPMENT_NO)) $criteria->add(UltrasonicPeer::EQUIPMENT_NO, $this->equipment_no);
		if ($this->isColumnModified(UltrasonicPeer::EQUIPMENT_CAL_NO)) $criteria->add(UltrasonicPeer::EQUIPMENT_CAL_NO, $this->equipment_cal_no);
		if ($this->isColumnModified(UltrasonicPeer::EQUIPMENT_CAL_DATE)) $criteria->add(UltrasonicPeer::EQUIPMENT_CAL_DATE, $this->equipment_cal_date);
		if ($this->isColumnModified(UltrasonicPeer::DONE_BY)) $criteria->add(UltrasonicPeer::DONE_BY, $this->done_by);
		if ($this->isColumnModified(UltrasonicPeer::VERIFIED_BY)) $criteria->add(UltrasonicPeer::VERIFIED_BY, $this->verified_by);
		if ($this->isColumnModified(UltrasonicPeer::REMARK)) $criteria->add(UltrasonicPeer::REMARK, $this->remark);
		if ($this->isColumnModified(UltrasonicPeer::DATE_CREATED)) $criteria->add(UltrasonicPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(UltrasonicPeer::CREATED_BY)) $criteria->add(UltrasonicPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(UltrasonicPeer::DATE_MODIFIED)) $criteria->add(UltrasonicPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(UltrasonicPeer::MODIFIED_BY)) $criteria->add(UltrasonicPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UltrasonicPeer::DATABASE_NAME);

		$criteria->add(UltrasonicPeer::ID, $this->id);

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

		$copyObj->setFrequency($this->frequency);

		$copyObj->setPower($this->power);

		$copyObj->setCapacitance($this->capacitance);

		$copyObj->setEquipmentName($this->equipment_name);

		$copyObj->setEquipmentNo($this->equipment_no);

		$copyObj->setEquipmentCalNo($this->equipment_cal_no);

		$copyObj->setEquipmentCalDate($this->equipment_cal_date);

		$copyObj->setDoneBy($this->done_by);

		$copyObj->setVerifiedBy($this->verified_by);

		$copyObj->setRemark($this->remark);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateModified($this->date_modified);

		$copyObj->setModifiedBy($this->modified_by);


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
			self::$peer = new UltrasonicPeer();
		}
		return self::$peer;
	}

} 
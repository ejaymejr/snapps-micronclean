<?php


abstract class BaseDosingCalibration extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $machine_no;


	
	protected $pump_model;


	
	protected $eq_flow_rate;


	
	protected $density;


	
	protected $frequency;


	
	protected $flow_rate;


	
	protected $reading_time;


	
	protected $reading;


	
	protected $checked_by;


	
	protected $remark;


	
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

	
	public function getMachineNo()
	{

		return $this->machine_no;
	}

	
	public function getPumpModel()
	{

		return $this->pump_model;
	}

	
	public function getEqFlowRate()
	{

		return $this->eq_flow_rate;
	}

	
	public function getDensity()
	{

		return $this->density;
	}

	
	public function getFrequency()
	{

		return $this->frequency;
	}

	
	public function getFlowRate()
	{

		return $this->flow_rate;
	}

	
	public function getReadingTime()
	{

		return $this->reading_time;
	}

	
	public function getReading()
	{

		return $this->reading;
	}

	
	public function getCheckedBy()
	{

		return $this->checked_by;
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
			$this->modifiedColumns[] = DosingCalibrationPeer::ID;
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
			$this->modifiedColumns[] = DosingCalibrationPeer::TRANS_DATE;
		}

	} 
	
	public function setMachineNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_no !== $v) {
			$this->machine_no = $v;
			$this->modifiedColumns[] = DosingCalibrationPeer::MACHINE_NO;
		}

	} 
	
	public function setPumpModel($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->pump_model !== $v) {
			$this->pump_model = $v;
			$this->modifiedColumns[] = DosingCalibrationPeer::PUMP_MODEL;
		}

	} 
	
	public function setEqFlowRate($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->eq_flow_rate !== $v) {
			$this->eq_flow_rate = $v;
			$this->modifiedColumns[] = DosingCalibrationPeer::EQ_FLOW_RATE;
		}

	} 
	
	public function setDensity($v)
	{

		if ($this->density !== $v) {
			$this->density = $v;
			$this->modifiedColumns[] = DosingCalibrationPeer::DENSITY;
		}

	} 
	
	public function setFrequency($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->frequency !== $v) {
			$this->frequency = $v;
			$this->modifiedColumns[] = DosingCalibrationPeer::FREQUENCY;
		}

	} 
	
	public function setFlowRate($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->flow_rate !== $v) {
			$this->flow_rate = $v;
			$this->modifiedColumns[] = DosingCalibrationPeer::FLOW_RATE;
		}

	} 
	
	public function setReadingTime($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->reading_time !== $v) {
			$this->reading_time = $v;
			$this->modifiedColumns[] = DosingCalibrationPeer::READING_TIME;
		}

	} 
	
	public function setReading($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->reading !== $v) {
			$this->reading = $v;
			$this->modifiedColumns[] = DosingCalibrationPeer::READING;
		}

	} 
	
	public function setCheckedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->checked_by !== $v) {
			$this->checked_by = $v;
			$this->modifiedColumns[] = DosingCalibrationPeer::CHECKED_BY;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = DosingCalibrationPeer::REMARK;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = DosingCalibrationPeer::CREATED_BY;
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
			$this->modifiedColumns[] = DosingCalibrationPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = DosingCalibrationPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = DosingCalibrationPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->machine_no = $rs->getString($startcol + 2);

			$this->pump_model = $rs->getString($startcol + 3);

			$this->eq_flow_rate = $rs->getString($startcol + 4);

			$this->density = $rs->getFloat($startcol + 5);

			$this->frequency = $rs->getString($startcol + 6);

			$this->flow_rate = $rs->getInt($startcol + 7);

			$this->reading_time = $rs->getInt($startcol + 8);

			$this->reading = $rs->getInt($startcol + 9);

			$this->checked_by = $rs->getString($startcol + 10);

			$this->remark = $rs->getString($startcol + 11);

			$this->created_by = $rs->getString($startcol + 12);

			$this->date_created = $rs->getTimestamp($startcol + 13, null);

			$this->modified_by = $rs->getString($startcol + 14);

			$this->date_modified = $rs->getTimestamp($startcol + 15, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating DosingCalibration object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DosingCalibrationPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			DosingCalibrationPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(DosingCalibrationPeer::DATABASE_NAME);
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
					$pk = DosingCalibrationPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += DosingCalibrationPeer::doUpdate($this, $con);
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


			if (($retval = DosingCalibrationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DosingCalibrationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getMachineNo();
				break;
			case 3:
				return $this->getPumpModel();
				break;
			case 4:
				return $this->getEqFlowRate();
				break;
			case 5:
				return $this->getDensity();
				break;
			case 6:
				return $this->getFrequency();
				break;
			case 7:
				return $this->getFlowRate();
				break;
			case 8:
				return $this->getReadingTime();
				break;
			case 9:
				return $this->getReading();
				break;
			case 10:
				return $this->getCheckedBy();
				break;
			case 11:
				return $this->getRemark();
				break;
			case 12:
				return $this->getCreatedBy();
				break;
			case 13:
				return $this->getDateCreated();
				break;
			case 14:
				return $this->getModifiedBy();
				break;
			case 15:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DosingCalibrationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getMachineNo(),
			$keys[3] => $this->getPumpModel(),
			$keys[4] => $this->getEqFlowRate(),
			$keys[5] => $this->getDensity(),
			$keys[6] => $this->getFrequency(),
			$keys[7] => $this->getFlowRate(),
			$keys[8] => $this->getReadingTime(),
			$keys[9] => $this->getReading(),
			$keys[10] => $this->getCheckedBy(),
			$keys[11] => $this->getRemark(),
			$keys[12] => $this->getCreatedBy(),
			$keys[13] => $this->getDateCreated(),
			$keys[14] => $this->getModifiedBy(),
			$keys[15] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DosingCalibrationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setMachineNo($value);
				break;
			case 3:
				$this->setPumpModel($value);
				break;
			case 4:
				$this->setEqFlowRate($value);
				break;
			case 5:
				$this->setDensity($value);
				break;
			case 6:
				$this->setFrequency($value);
				break;
			case 7:
				$this->setFlowRate($value);
				break;
			case 8:
				$this->setReadingTime($value);
				break;
			case 9:
				$this->setReading($value);
				break;
			case 10:
				$this->setCheckedBy($value);
				break;
			case 11:
				$this->setRemark($value);
				break;
			case 12:
				$this->setCreatedBy($value);
				break;
			case 13:
				$this->setDateCreated($value);
				break;
			case 14:
				$this->setModifiedBy($value);
				break;
			case 15:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DosingCalibrationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMachineNo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPumpModel($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEqFlowRate($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDensity($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFrequency($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setFlowRate($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setReadingTime($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setReading($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCheckedBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setRemark($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCreatedBy($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDateCreated($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setModifiedBy($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setDateModified($arr[$keys[15]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(DosingCalibrationPeer::DATABASE_NAME);

		if ($this->isColumnModified(DosingCalibrationPeer::ID)) $criteria->add(DosingCalibrationPeer::ID, $this->id);
		if ($this->isColumnModified(DosingCalibrationPeer::TRANS_DATE)) $criteria->add(DosingCalibrationPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(DosingCalibrationPeer::MACHINE_NO)) $criteria->add(DosingCalibrationPeer::MACHINE_NO, $this->machine_no);
		if ($this->isColumnModified(DosingCalibrationPeer::PUMP_MODEL)) $criteria->add(DosingCalibrationPeer::PUMP_MODEL, $this->pump_model);
		if ($this->isColumnModified(DosingCalibrationPeer::EQ_FLOW_RATE)) $criteria->add(DosingCalibrationPeer::EQ_FLOW_RATE, $this->eq_flow_rate);
		if ($this->isColumnModified(DosingCalibrationPeer::DENSITY)) $criteria->add(DosingCalibrationPeer::DENSITY, $this->density);
		if ($this->isColumnModified(DosingCalibrationPeer::FREQUENCY)) $criteria->add(DosingCalibrationPeer::FREQUENCY, $this->frequency);
		if ($this->isColumnModified(DosingCalibrationPeer::FLOW_RATE)) $criteria->add(DosingCalibrationPeer::FLOW_RATE, $this->flow_rate);
		if ($this->isColumnModified(DosingCalibrationPeer::READING_TIME)) $criteria->add(DosingCalibrationPeer::READING_TIME, $this->reading_time);
		if ($this->isColumnModified(DosingCalibrationPeer::READING)) $criteria->add(DosingCalibrationPeer::READING, $this->reading);
		if ($this->isColumnModified(DosingCalibrationPeer::CHECKED_BY)) $criteria->add(DosingCalibrationPeer::CHECKED_BY, $this->checked_by);
		if ($this->isColumnModified(DosingCalibrationPeer::REMARK)) $criteria->add(DosingCalibrationPeer::REMARK, $this->remark);
		if ($this->isColumnModified(DosingCalibrationPeer::CREATED_BY)) $criteria->add(DosingCalibrationPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(DosingCalibrationPeer::DATE_CREATED)) $criteria->add(DosingCalibrationPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(DosingCalibrationPeer::MODIFIED_BY)) $criteria->add(DosingCalibrationPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(DosingCalibrationPeer::DATE_MODIFIED)) $criteria->add(DosingCalibrationPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DosingCalibrationPeer::DATABASE_NAME);

		$criteria->add(DosingCalibrationPeer::ID, $this->id);

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

		$copyObj->setMachineNo($this->machine_no);

		$copyObj->setPumpModel($this->pump_model);

		$copyObj->setEqFlowRate($this->eq_flow_rate);

		$copyObj->setDensity($this->density);

		$copyObj->setFrequency($this->frequency);

		$copyObj->setFlowRate($this->flow_rate);

		$copyObj->setReadingTime($this->reading_time);

		$copyObj->setReading($this->reading);

		$copyObj->setCheckedBy($this->checked_by);

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
			self::$peer = new DosingCalibrationPeer();
		}
		return self::$peer;
	}

} 
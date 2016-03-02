<?php


abstract class BaseAirParticleCountNanocleanG extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $record_id;


	
	protected $date_record;


	
	protected $tester_id = 'null';


	
	protected $humidity = 0;


	
	protected $temperature = 0;


	
	protected $diff_pressure = 'null';


	
	protected $frequency = 'null';


	
	protected $remark;


	
	protected $deleted = 'null';


	
	protected $date_created;


	
	protected $date_modified;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getRecordId()
	{

		return $this->record_id;
	}

	
	public function getDateRecord($format = 'Y-m-d')
	{

		if ($this->date_record === null || $this->date_record === '') {
			return null;
		} elseif (!is_int($this->date_record)) {
						$ts = strtotime($this->date_record);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_record] as date/time value: " . var_export($this->date_record, true));
			}
		} else {
			$ts = $this->date_record;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getTesterId()
	{

		return $this->tester_id;
	}

	
	public function getHumidity()
	{

		return $this->humidity;
	}

	
	public function getTemperature()
	{

		return $this->temperature;
	}

	
	public function getDiffPressure()
	{

		return $this->diff_pressure;
	}

	
	public function getFrequency()
	{

		return $this->frequency;
	}

	
	public function getRemark()
	{

		return $this->remark;
	}

	
	public function getDeleted()
	{

		return $this->deleted;
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

	
	public function setRecordId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->record_id !== $v) {
			$this->record_id = $v;
			$this->modifiedColumns[] = AirParticleCountNanocleanGPeer::RECORD_ID;
		}

	} 
	
	public function setDateRecord($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_record] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_record !== $ts) {
			$this->date_record = $ts;
			$this->modifiedColumns[] = AirParticleCountNanocleanGPeer::DATE_RECORD;
		}

	} 
	
	public function setTesterId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tester_id !== $v || $v === 'null') {
			$this->tester_id = $v;
			$this->modifiedColumns[] = AirParticleCountNanocleanGPeer::TESTER_ID;
		}

	} 
	
	public function setHumidity($v)
	{

		if ($this->humidity !== $v || $v === 0) {
			$this->humidity = $v;
			$this->modifiedColumns[] = AirParticleCountNanocleanGPeer::HUMIDITY;
		}

	} 
	
	public function setTemperature($v)
	{

		if ($this->temperature !== $v || $v === 0) {
			$this->temperature = $v;
			$this->modifiedColumns[] = AirParticleCountNanocleanGPeer::TEMPERATURE;
		}

	} 
	
	public function setDiffPressure($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->diff_pressure !== $v || $v === 'null') {
			$this->diff_pressure = $v;
			$this->modifiedColumns[] = AirParticleCountNanocleanGPeer::DIFF_PRESSURE;
		}

	} 
	
	public function setFrequency($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->frequency !== $v || $v === 'null') {
			$this->frequency = $v;
			$this->modifiedColumns[] = AirParticleCountNanocleanGPeer::FREQUENCY;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = AirParticleCountNanocleanGPeer::REMARK;
		}

	} 
	
	public function setDeleted($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->deleted !== $v || $v === 'null') {
			$this->deleted = $v;
			$this->modifiedColumns[] = AirParticleCountNanocleanGPeer::DELETED;
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
			$this->modifiedColumns[] = AirParticleCountNanocleanGPeer::DATE_CREATED;
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
			$this->modifiedColumns[] = AirParticleCountNanocleanGPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->record_id = $rs->getInt($startcol + 0);

			$this->date_record = $rs->getDate($startcol + 1, null);

			$this->tester_id = $rs->getString($startcol + 2);

			$this->humidity = $rs->getFloat($startcol + 3);

			$this->temperature = $rs->getFloat($startcol + 4);

			$this->diff_pressure = $rs->getString($startcol + 5);

			$this->frequency = $rs->getString($startcol + 6);

			$this->remark = $rs->getString($startcol + 7);

			$this->deleted = $rs->getString($startcol + 8);

			$this->date_created = $rs->getTimestamp($startcol + 9, null);

			$this->date_modified = $rs->getTimestamp($startcol + 10, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating AirParticleCountNanocleanG object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AirParticleCountNanocleanGPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			AirParticleCountNanocleanGPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(AirParticleCountNanocleanGPeer::DATABASE_NAME);
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
					$pk = AirParticleCountNanocleanGPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setRecordId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += AirParticleCountNanocleanGPeer::doUpdate($this, $con);
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


			if (($retval = AirParticleCountNanocleanGPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AirParticleCountNanocleanGPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getRecordId();
				break;
			case 1:
				return $this->getDateRecord();
				break;
			case 2:
				return $this->getTesterId();
				break;
			case 3:
				return $this->getHumidity();
				break;
			case 4:
				return $this->getTemperature();
				break;
			case 5:
				return $this->getDiffPressure();
				break;
			case 6:
				return $this->getFrequency();
				break;
			case 7:
				return $this->getRemark();
				break;
			case 8:
				return $this->getDeleted();
				break;
			case 9:
				return $this->getDateCreated();
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
		$keys = AirParticleCountNanocleanGPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getRecordId(),
			$keys[1] => $this->getDateRecord(),
			$keys[2] => $this->getTesterId(),
			$keys[3] => $this->getHumidity(),
			$keys[4] => $this->getTemperature(),
			$keys[5] => $this->getDiffPressure(),
			$keys[6] => $this->getFrequency(),
			$keys[7] => $this->getRemark(),
			$keys[8] => $this->getDeleted(),
			$keys[9] => $this->getDateCreated(),
			$keys[10] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AirParticleCountNanocleanGPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setRecordId($value);
				break;
			case 1:
				$this->setDateRecord($value);
				break;
			case 2:
				$this->setTesterId($value);
				break;
			case 3:
				$this->setHumidity($value);
				break;
			case 4:
				$this->setTemperature($value);
				break;
			case 5:
				$this->setDiffPressure($value);
				break;
			case 6:
				$this->setFrequency($value);
				break;
			case 7:
				$this->setRemark($value);
				break;
			case 8:
				$this->setDeleted($value);
				break;
			case 9:
				$this->setDateCreated($value);
				break;
			case 10:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AirParticleCountNanocleanGPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setRecordId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateRecord($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTesterId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setHumidity($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTemperature($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDiffPressure($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFrequency($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setRemark($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDeleted($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateCreated($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateModified($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(AirParticleCountNanocleanGPeer::DATABASE_NAME);

		if ($this->isColumnModified(AirParticleCountNanocleanGPeer::RECORD_ID)) $criteria->add(AirParticleCountNanocleanGPeer::RECORD_ID, $this->record_id);
		if ($this->isColumnModified(AirParticleCountNanocleanGPeer::DATE_RECORD)) $criteria->add(AirParticleCountNanocleanGPeer::DATE_RECORD, $this->date_record);
		if ($this->isColumnModified(AirParticleCountNanocleanGPeer::TESTER_ID)) $criteria->add(AirParticleCountNanocleanGPeer::TESTER_ID, $this->tester_id);
		if ($this->isColumnModified(AirParticleCountNanocleanGPeer::HUMIDITY)) $criteria->add(AirParticleCountNanocleanGPeer::HUMIDITY, $this->humidity);
		if ($this->isColumnModified(AirParticleCountNanocleanGPeer::TEMPERATURE)) $criteria->add(AirParticleCountNanocleanGPeer::TEMPERATURE, $this->temperature);
		if ($this->isColumnModified(AirParticleCountNanocleanGPeer::DIFF_PRESSURE)) $criteria->add(AirParticleCountNanocleanGPeer::DIFF_PRESSURE, $this->diff_pressure);
		if ($this->isColumnModified(AirParticleCountNanocleanGPeer::FREQUENCY)) $criteria->add(AirParticleCountNanocleanGPeer::FREQUENCY, $this->frequency);
		if ($this->isColumnModified(AirParticleCountNanocleanGPeer::REMARK)) $criteria->add(AirParticleCountNanocleanGPeer::REMARK, $this->remark);
		if ($this->isColumnModified(AirParticleCountNanocleanGPeer::DELETED)) $criteria->add(AirParticleCountNanocleanGPeer::DELETED, $this->deleted);
		if ($this->isColumnModified(AirParticleCountNanocleanGPeer::DATE_CREATED)) $criteria->add(AirParticleCountNanocleanGPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(AirParticleCountNanocleanGPeer::DATE_MODIFIED)) $criteria->add(AirParticleCountNanocleanGPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AirParticleCountNanocleanGPeer::DATABASE_NAME);

		$criteria->add(AirParticleCountNanocleanGPeer::RECORD_ID, $this->record_id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getRecordId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setRecordId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setDateRecord($this->date_record);

		$copyObj->setTesterId($this->tester_id);

		$copyObj->setHumidity($this->humidity);

		$copyObj->setTemperature($this->temperature);

		$copyObj->setDiffPressure($this->diff_pressure);

		$copyObj->setFrequency($this->frequency);

		$copyObj->setRemark($this->remark);

		$copyObj->setDeleted($this->deleted);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setDateModified($this->date_modified);


		$copyObj->setNew(true);

		$copyObj->setRecordId(NULL); 
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
			self::$peer = new AirParticleCountNanocleanGPeer();
		}
		return self::$peer;
	}

} 
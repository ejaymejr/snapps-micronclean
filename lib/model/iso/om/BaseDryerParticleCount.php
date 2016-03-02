<?php


abstract class BaseDryerParticleCount extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $dryer_no;


	
	protected $particle_count;


	
	protected $name;


	
	protected $temperature;


	
	protected $actual_temperature;


	
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

	
	public function getDryerNo()
	{

		return $this->dryer_no;
	}

	
	public function getParticleCount()
	{

		return $this->particle_count;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getTemperature()
	{

		return $this->temperature;
	}

	
	public function getActualTemperature()
	{

		return $this->actual_temperature;
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
			$this->modifiedColumns[] = DryerParticleCountPeer::ID;
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
			$this->modifiedColumns[] = DryerParticleCountPeer::DATE_TIME;
		}

	} 
	
	public function setDryerNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dryer_no !== $v) {
			$this->dryer_no = $v;
			$this->modifiedColumns[] = DryerParticleCountPeer::DRYER_NO;
		}

	} 
	
	public function setParticleCount($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->particle_count !== $v) {
			$this->particle_count = $v;
			$this->modifiedColumns[] = DryerParticleCountPeer::PARTICLE_COUNT;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = DryerParticleCountPeer::NAME;
		}

	} 
	
	public function setTemperature($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->temperature !== $v) {
			$this->temperature = $v;
			$this->modifiedColumns[] = DryerParticleCountPeer::TEMPERATURE;
		}

	} 
	
	public function setActualTemperature($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->actual_temperature !== $v) {
			$this->actual_temperature = $v;
			$this->modifiedColumns[] = DryerParticleCountPeer::ACTUAL_TEMPERATURE;
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
			$this->modifiedColumns[] = DryerParticleCountPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = DryerParticleCountPeer::CREATED_BY;
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
			$this->modifiedColumns[] = DryerParticleCountPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = DryerParticleCountPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->dryer_no = $rs->getString($startcol + 2);

			$this->particle_count = $rs->getString($startcol + 3);

			$this->name = $rs->getString($startcol + 4);

			$this->temperature = $rs->getString($startcol + 5);

			$this->actual_temperature = $rs->getString($startcol + 6);

			$this->date_created = $rs->getTimestamp($startcol + 7, null);

			$this->created_by = $rs->getString($startcol + 8);

			$this->date_modified = $rs->getTimestamp($startcol + 9, null);

			$this->modified_by = $rs->getString($startcol + 10);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating DryerParticleCount object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DryerParticleCountPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			DryerParticleCountPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(DryerParticleCountPeer::DATABASE_NAME);
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
					$pk = DryerParticleCountPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += DryerParticleCountPeer::doUpdate($this, $con);
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


			if (($retval = DryerParticleCountPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DryerParticleCountPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDryerNo();
				break;
			case 3:
				return $this->getParticleCount();
				break;
			case 4:
				return $this->getName();
				break;
			case 5:
				return $this->getTemperature();
				break;
			case 6:
				return $this->getActualTemperature();
				break;
			case 7:
				return $this->getDateCreated();
				break;
			case 8:
				return $this->getCreatedBy();
				break;
			case 9:
				return $this->getDateModified();
				break;
			case 10:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DryerParticleCountPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getDryerNo(),
			$keys[3] => $this->getParticleCount(),
			$keys[4] => $this->getName(),
			$keys[5] => $this->getTemperature(),
			$keys[6] => $this->getActualTemperature(),
			$keys[7] => $this->getDateCreated(),
			$keys[8] => $this->getCreatedBy(),
			$keys[9] => $this->getDateModified(),
			$keys[10] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DryerParticleCountPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDryerNo($value);
				break;
			case 3:
				$this->setParticleCount($value);
				break;
			case 4:
				$this->setName($value);
				break;
			case 5:
				$this->setTemperature($value);
				break;
			case 6:
				$this->setActualTemperature($value);
				break;
			case 7:
				$this->setDateCreated($value);
				break;
			case 8:
				$this->setCreatedBy($value);
				break;
			case 9:
				$this->setDateModified($value);
				break;
			case 10:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DryerParticleCountPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDryerNo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setParticleCount($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTemperature($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setActualTemperature($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDateCreated($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCreatedBy($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateModified($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setModifiedBy($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(DryerParticleCountPeer::DATABASE_NAME);

		if ($this->isColumnModified(DryerParticleCountPeer::ID)) $criteria->add(DryerParticleCountPeer::ID, $this->id);
		if ($this->isColumnModified(DryerParticleCountPeer::DATE_TIME)) $criteria->add(DryerParticleCountPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(DryerParticleCountPeer::DRYER_NO)) $criteria->add(DryerParticleCountPeer::DRYER_NO, $this->dryer_no);
		if ($this->isColumnModified(DryerParticleCountPeer::PARTICLE_COUNT)) $criteria->add(DryerParticleCountPeer::PARTICLE_COUNT, $this->particle_count);
		if ($this->isColumnModified(DryerParticleCountPeer::NAME)) $criteria->add(DryerParticleCountPeer::NAME, $this->name);
		if ($this->isColumnModified(DryerParticleCountPeer::TEMPERATURE)) $criteria->add(DryerParticleCountPeer::TEMPERATURE, $this->temperature);
		if ($this->isColumnModified(DryerParticleCountPeer::ACTUAL_TEMPERATURE)) $criteria->add(DryerParticleCountPeer::ACTUAL_TEMPERATURE, $this->actual_temperature);
		if ($this->isColumnModified(DryerParticleCountPeer::DATE_CREATED)) $criteria->add(DryerParticleCountPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(DryerParticleCountPeer::CREATED_BY)) $criteria->add(DryerParticleCountPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(DryerParticleCountPeer::DATE_MODIFIED)) $criteria->add(DryerParticleCountPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(DryerParticleCountPeer::MODIFIED_BY)) $criteria->add(DryerParticleCountPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DryerParticleCountPeer::DATABASE_NAME);

		$criteria->add(DryerParticleCountPeer::ID, $this->id);

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

		$copyObj->setDryerNo($this->dryer_no);

		$copyObj->setParticleCount($this->particle_count);

		$copyObj->setName($this->name);

		$copyObj->setTemperature($this->temperature);

		$copyObj->setActualTemperature($this->actual_temperature);

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
			self::$peer = new DryerParticleCountPeer();
		}
		return self::$peer;
	}

} 
<?php


abstract class BaseAirData extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $x_data = 0;


	
	protected $filter_area = 'null';


	
	protected $temperature = 0;


	
	protected $rh = 0;


	
	protected $remarks;


	
	protected $tester = 'null';


	
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

	
	public function getXData()
	{

		return $this->x_data;
	}

	
	public function getFilterArea()
	{

		return $this->filter_area;
	}

	
	public function getTemperature()
	{

		return $this->temperature;
	}

	
	public function getRh()
	{

		return $this->rh;
	}

	
	public function getRemarks()
	{

		return $this->remarks;
	}

	
	public function getTester()
	{

		return $this->tester;
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
			$this->modifiedColumns[] = AirDataPeer::ID;
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
			$this->modifiedColumns[] = AirDataPeer::DATE_TIME;
		}

	} 
	
	public function setXData($v)
	{

		if ($this->x_data !== $v || $v === 0) {
			$this->x_data = $v;
			$this->modifiedColumns[] = AirDataPeer::X_DATA;
		}

	} 
	
	public function setFilterArea($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->filter_area !== $v || $v === 'null') {
			$this->filter_area = $v;
			$this->modifiedColumns[] = AirDataPeer::FILTER_AREA;
		}

	} 
	
	public function setTemperature($v)
	{

		if ($this->temperature !== $v || $v === 0) {
			$this->temperature = $v;
			$this->modifiedColumns[] = AirDataPeer::TEMPERATURE;
		}

	} 
	
	public function setRh($v)
	{

		if ($this->rh !== $v || $v === 0) {
			$this->rh = $v;
			$this->modifiedColumns[] = AirDataPeer::RH;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = AirDataPeer::REMARKS;
		}

	} 
	
	public function setTester($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tester !== $v || $v === 'null') {
			$this->tester = $v;
			$this->modifiedColumns[] = AirDataPeer::TESTER;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = AirDataPeer::CREATED_BY;
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
			$this->modifiedColumns[] = AirDataPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = AirDataPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = AirDataPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->x_data = $rs->getFloat($startcol + 2);

			$this->filter_area = $rs->getString($startcol + 3);

			$this->temperature = $rs->getFloat($startcol + 4);

			$this->rh = $rs->getFloat($startcol + 5);

			$this->remarks = $rs->getString($startcol + 6);

			$this->tester = $rs->getString($startcol + 7);

			$this->created_by = $rs->getString($startcol + 8);

			$this->date_created = $rs->getTimestamp($startcol + 9, null);

			$this->modified_by = $rs->getString($startcol + 10);

			$this->date_modified = $rs->getTimestamp($startcol + 11, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 12; 
		} catch (Exception $e) {
			throw new PropelException("Error populating AirData object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AirDataPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			AirDataPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(AirDataPeer::DATABASE_NAME);
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
					$pk = AirDataPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += AirDataPeer::doUpdate($this, $con);
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


			if (($retval = AirDataPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AirDataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getXData();
				break;
			case 3:
				return $this->getFilterArea();
				break;
			case 4:
				return $this->getTemperature();
				break;
			case 5:
				return $this->getRh();
				break;
			case 6:
				return $this->getRemarks();
				break;
			case 7:
				return $this->getTester();
				break;
			case 8:
				return $this->getCreatedBy();
				break;
			case 9:
				return $this->getDateCreated();
				break;
			case 10:
				return $this->getModifiedBy();
				break;
			case 11:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AirDataPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getXData(),
			$keys[3] => $this->getFilterArea(),
			$keys[4] => $this->getTemperature(),
			$keys[5] => $this->getRh(),
			$keys[6] => $this->getRemarks(),
			$keys[7] => $this->getTester(),
			$keys[8] => $this->getCreatedBy(),
			$keys[9] => $this->getDateCreated(),
			$keys[10] => $this->getModifiedBy(),
			$keys[11] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AirDataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setXData($value);
				break;
			case 3:
				$this->setFilterArea($value);
				break;
			case 4:
				$this->setTemperature($value);
				break;
			case 5:
				$this->setRh($value);
				break;
			case 6:
				$this->setRemarks($value);
				break;
			case 7:
				$this->setTester($value);
				break;
			case 8:
				$this->setCreatedBy($value);
				break;
			case 9:
				$this->setDateCreated($value);
				break;
			case 10:
				$this->setModifiedBy($value);
				break;
			case 11:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AirDataPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setXData($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFilterArea($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTemperature($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRh($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setRemarks($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTester($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCreatedBy($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateCreated($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setModifiedBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDateModified($arr[$keys[11]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(AirDataPeer::DATABASE_NAME);

		if ($this->isColumnModified(AirDataPeer::ID)) $criteria->add(AirDataPeer::ID, $this->id);
		if ($this->isColumnModified(AirDataPeer::DATE_TIME)) $criteria->add(AirDataPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(AirDataPeer::X_DATA)) $criteria->add(AirDataPeer::X_DATA, $this->x_data);
		if ($this->isColumnModified(AirDataPeer::FILTER_AREA)) $criteria->add(AirDataPeer::FILTER_AREA, $this->filter_area);
		if ($this->isColumnModified(AirDataPeer::TEMPERATURE)) $criteria->add(AirDataPeer::TEMPERATURE, $this->temperature);
		if ($this->isColumnModified(AirDataPeer::RH)) $criteria->add(AirDataPeer::RH, $this->rh);
		if ($this->isColumnModified(AirDataPeer::REMARKS)) $criteria->add(AirDataPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(AirDataPeer::TESTER)) $criteria->add(AirDataPeer::TESTER, $this->tester);
		if ($this->isColumnModified(AirDataPeer::CREATED_BY)) $criteria->add(AirDataPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(AirDataPeer::DATE_CREATED)) $criteria->add(AirDataPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(AirDataPeer::MODIFIED_BY)) $criteria->add(AirDataPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(AirDataPeer::DATE_MODIFIED)) $criteria->add(AirDataPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AirDataPeer::DATABASE_NAME);

		$criteria->add(AirDataPeer::ID, $this->id);

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

		$copyObj->setXData($this->x_data);

		$copyObj->setFilterArea($this->filter_area);

		$copyObj->setTemperature($this->temperature);

		$copyObj->setRh($this->rh);

		$copyObj->setRemarks($this->remarks);

		$copyObj->setTester($this->tester);

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
			self::$peer = new AirDataPeer();
		}
		return self::$peer;
	}

} 
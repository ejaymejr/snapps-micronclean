<?php


abstract class BaseHeatSealerPm extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $machine_type;


	
	protected $air_regulator;


	
	protected $heat;


	
	protected $thermopatch = '0';


	
	protected $dwell = '0';


	
	protected $piston = '0';


	
	protected $performed_by;


	
	protected $verified_by;


	
	protected $verify_date;


	
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

	
	public function getMachineType()
	{

		return $this->machine_type;
	}

	
	public function getAirRegulator()
	{

		return $this->air_regulator;
	}

	
	public function getHeat()
	{

		return $this->heat;
	}

	
	public function getThermopatch()
	{

		return $this->thermopatch;
	}

	
	public function getDwell()
	{

		return $this->dwell;
	}

	
	public function getPiston()
	{

		return $this->piston;
	}

	
	public function getPerformedBy()
	{

		return $this->performed_by;
	}

	
	public function getVerifiedBy()
	{

		return $this->verified_by;
	}

	
	public function getVerifyDate($format = 'Y-m-d H:i:s')
	{

		if ($this->verify_date === null || $this->verify_date === '') {
			return null;
		} elseif (!is_int($this->verify_date)) {
						$ts = strtotime($this->verify_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [verify_date] as date/time value: " . var_export($this->verify_date, true));
			}
		} else {
			$ts = $this->verify_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
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
			$this->modifiedColumns[] = HeatSealerPmPeer::ID;
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
			$this->modifiedColumns[] = HeatSealerPmPeer::TRANS_DATE;
		}

	} 
	
	public function setMachineType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_type !== $v) {
			$this->machine_type = $v;
			$this->modifiedColumns[] = HeatSealerPmPeer::MACHINE_TYPE;
		}

	} 
	
	public function setAirRegulator($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->air_regulator !== $v) {
			$this->air_regulator = $v;
			$this->modifiedColumns[] = HeatSealerPmPeer::AIR_REGULATOR;
		}

	} 
	
	public function setHeat($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->heat !== $v) {
			$this->heat = $v;
			$this->modifiedColumns[] = HeatSealerPmPeer::HEAT;
		}

	} 
	
	public function setThermopatch($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->thermopatch !== $v || $v === '0') {
			$this->thermopatch = $v;
			$this->modifiedColumns[] = HeatSealerPmPeer::THERMOPATCH;
		}

	} 
	
	public function setDwell($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dwell !== $v || $v === '0') {
			$this->dwell = $v;
			$this->modifiedColumns[] = HeatSealerPmPeer::DWELL;
		}

	} 
	
	public function setPiston($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->piston !== $v || $v === '0') {
			$this->piston = $v;
			$this->modifiedColumns[] = HeatSealerPmPeer::PISTON;
		}

	} 
	
	public function setPerformedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->performed_by !== $v) {
			$this->performed_by = $v;
			$this->modifiedColumns[] = HeatSealerPmPeer::PERFORMED_BY;
		}

	} 
	
	public function setVerifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by !== $v) {
			$this->verified_by = $v;
			$this->modifiedColumns[] = HeatSealerPmPeer::VERIFIED_BY;
		}

	} 
	
	public function setVerifyDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [verify_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->verify_date !== $ts) {
			$this->verify_date = $ts;
			$this->modifiedColumns[] = HeatSealerPmPeer::VERIFY_DATE;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = HeatSealerPmPeer::REMARK;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = HeatSealerPmPeer::CREATED_BY;
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
			$this->modifiedColumns[] = HeatSealerPmPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HeatSealerPmPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HeatSealerPmPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->machine_type = $rs->getString($startcol + 2);

			$this->air_regulator = $rs->getString($startcol + 3);

			$this->heat = $rs->getString($startcol + 4);

			$this->thermopatch = $rs->getString($startcol + 5);

			$this->dwell = $rs->getString($startcol + 6);

			$this->piston = $rs->getString($startcol + 7);

			$this->performed_by = $rs->getString($startcol + 8);

			$this->verified_by = $rs->getString($startcol + 9);

			$this->verify_date = $rs->getTimestamp($startcol + 10, null);

			$this->remark = $rs->getString($startcol + 11);

			$this->created_by = $rs->getString($startcol + 12);

			$this->date_created = $rs->getTimestamp($startcol + 13, null);

			$this->modified_by = $rs->getString($startcol + 14);

			$this->date_modified = $rs->getTimestamp($startcol + 15, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HeatSealerPm object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HeatSealerPmPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HeatSealerPmPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HeatSealerPmPeer::DATABASE_NAME);
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
					$pk = HeatSealerPmPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HeatSealerPmPeer::doUpdate($this, $con);
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


			if (($retval = HeatSealerPmPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HeatSealerPmPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getMachineType();
				break;
			case 3:
				return $this->getAirRegulator();
				break;
			case 4:
				return $this->getHeat();
				break;
			case 5:
				return $this->getThermopatch();
				break;
			case 6:
				return $this->getDwell();
				break;
			case 7:
				return $this->getPiston();
				break;
			case 8:
				return $this->getPerformedBy();
				break;
			case 9:
				return $this->getVerifiedBy();
				break;
			case 10:
				return $this->getVerifyDate();
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
		$keys = HeatSealerPmPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getMachineType(),
			$keys[3] => $this->getAirRegulator(),
			$keys[4] => $this->getHeat(),
			$keys[5] => $this->getThermopatch(),
			$keys[6] => $this->getDwell(),
			$keys[7] => $this->getPiston(),
			$keys[8] => $this->getPerformedBy(),
			$keys[9] => $this->getVerifiedBy(),
			$keys[10] => $this->getVerifyDate(),
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
		$pos = HeatSealerPmPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setMachineType($value);
				break;
			case 3:
				$this->setAirRegulator($value);
				break;
			case 4:
				$this->setHeat($value);
				break;
			case 5:
				$this->setThermopatch($value);
				break;
			case 6:
				$this->setDwell($value);
				break;
			case 7:
				$this->setPiston($value);
				break;
			case 8:
				$this->setPerformedBy($value);
				break;
			case 9:
				$this->setVerifiedBy($value);
				break;
			case 10:
				$this->setVerifyDate($value);
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
		$keys = HeatSealerPmPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMachineType($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAirRegulator($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setHeat($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setThermopatch($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDwell($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPiston($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPerformedBy($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setVerifiedBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setVerifyDate($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setRemark($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCreatedBy($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDateCreated($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setModifiedBy($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setDateModified($arr[$keys[15]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HeatSealerPmPeer::DATABASE_NAME);

		if ($this->isColumnModified(HeatSealerPmPeer::ID)) $criteria->add(HeatSealerPmPeer::ID, $this->id);
		if ($this->isColumnModified(HeatSealerPmPeer::TRANS_DATE)) $criteria->add(HeatSealerPmPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(HeatSealerPmPeer::MACHINE_TYPE)) $criteria->add(HeatSealerPmPeer::MACHINE_TYPE, $this->machine_type);
		if ($this->isColumnModified(HeatSealerPmPeer::AIR_REGULATOR)) $criteria->add(HeatSealerPmPeer::AIR_REGULATOR, $this->air_regulator);
		if ($this->isColumnModified(HeatSealerPmPeer::HEAT)) $criteria->add(HeatSealerPmPeer::HEAT, $this->heat);
		if ($this->isColumnModified(HeatSealerPmPeer::THERMOPATCH)) $criteria->add(HeatSealerPmPeer::THERMOPATCH, $this->thermopatch);
		if ($this->isColumnModified(HeatSealerPmPeer::DWELL)) $criteria->add(HeatSealerPmPeer::DWELL, $this->dwell);
		if ($this->isColumnModified(HeatSealerPmPeer::PISTON)) $criteria->add(HeatSealerPmPeer::PISTON, $this->piston);
		if ($this->isColumnModified(HeatSealerPmPeer::PERFORMED_BY)) $criteria->add(HeatSealerPmPeer::PERFORMED_BY, $this->performed_by);
		if ($this->isColumnModified(HeatSealerPmPeer::VERIFIED_BY)) $criteria->add(HeatSealerPmPeer::VERIFIED_BY, $this->verified_by);
		if ($this->isColumnModified(HeatSealerPmPeer::VERIFY_DATE)) $criteria->add(HeatSealerPmPeer::VERIFY_DATE, $this->verify_date);
		if ($this->isColumnModified(HeatSealerPmPeer::REMARK)) $criteria->add(HeatSealerPmPeer::REMARK, $this->remark);
		if ($this->isColumnModified(HeatSealerPmPeer::CREATED_BY)) $criteria->add(HeatSealerPmPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HeatSealerPmPeer::DATE_CREATED)) $criteria->add(HeatSealerPmPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HeatSealerPmPeer::MODIFIED_BY)) $criteria->add(HeatSealerPmPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HeatSealerPmPeer::DATE_MODIFIED)) $criteria->add(HeatSealerPmPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HeatSealerPmPeer::DATABASE_NAME);

		$criteria->add(HeatSealerPmPeer::ID, $this->id);

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

		$copyObj->setMachineType($this->machine_type);

		$copyObj->setAirRegulator($this->air_regulator);

		$copyObj->setHeat($this->heat);

		$copyObj->setThermopatch($this->thermopatch);

		$copyObj->setDwell($this->dwell);

		$copyObj->setPiston($this->piston);

		$copyObj->setPerformedBy($this->performed_by);

		$copyObj->setVerifiedBy($this->verified_by);

		$copyObj->setVerifyDate($this->verify_date);

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
			self::$peer = new HeatSealerPmPeer();
		}
		return self::$peer;
	}

} 
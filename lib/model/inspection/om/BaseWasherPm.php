<?php


abstract class BaseWasherPm extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $machine_type;


	
	protected $clean_machine;


	
	protected $purged_water;


	
	protected $clean_door = '0';


	
	protected $check_belt = '0';


	
	protected $check_hose = '0';


	
	protected $lubricate_bearings = '0';


	
	protected $check_sensory = '0';


	
	protected $temp_control;


	
	protected $temp_verify;


	
	protected $performed_by;


	
	protected $verified_by = 'null';


	
	protected $verify_date;


	
	protected $check_brake = 'null';


	
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

	
	public function getCleanMachine()
	{

		return $this->clean_machine;
	}

	
	public function getPurgedWater()
	{

		return $this->purged_water;
	}

	
	public function getCleanDoor()
	{

		return $this->clean_door;
	}

	
	public function getCheckBelt()
	{

		return $this->check_belt;
	}

	
	public function getCheckHose()
	{

		return $this->check_hose;
	}

	
	public function getLubricateBearings()
	{

		return $this->lubricate_bearings;
	}

	
	public function getCheckSensory()
	{

		return $this->check_sensory;
	}

	
	public function getTempControl()
	{

		return $this->temp_control;
	}

	
	public function getTempVerify()
	{

		return $this->temp_verify;
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

	
	public function getCheckBrake()
	{

		return $this->check_brake;
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
			$this->modifiedColumns[] = WasherPmPeer::ID;
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
			$this->modifiedColumns[] = WasherPmPeer::TRANS_DATE;
		}

	} 
	
	public function setMachineType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_type !== $v) {
			$this->machine_type = $v;
			$this->modifiedColumns[] = WasherPmPeer::MACHINE_TYPE;
		}

	} 
	
	public function setCleanMachine($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->clean_machine !== $v) {
			$this->clean_machine = $v;
			$this->modifiedColumns[] = WasherPmPeer::CLEAN_MACHINE;
		}

	} 
	
	public function setPurgedWater($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->purged_water !== $v) {
			$this->purged_water = $v;
			$this->modifiedColumns[] = WasherPmPeer::PURGED_WATER;
		}

	} 
	
	public function setCleanDoor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->clean_door !== $v || $v === '0') {
			$this->clean_door = $v;
			$this->modifiedColumns[] = WasherPmPeer::CLEAN_DOOR;
		}

	} 
	
	public function setCheckBelt($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->check_belt !== $v || $v === '0') {
			$this->check_belt = $v;
			$this->modifiedColumns[] = WasherPmPeer::CHECK_BELT;
		}

	} 
	
	public function setCheckHose($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->check_hose !== $v || $v === '0') {
			$this->check_hose = $v;
			$this->modifiedColumns[] = WasherPmPeer::CHECK_HOSE;
		}

	} 
	
	public function setLubricateBearings($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lubricate_bearings !== $v || $v === '0') {
			$this->lubricate_bearings = $v;
			$this->modifiedColumns[] = WasherPmPeer::LUBRICATE_BEARINGS;
		}

	} 
	
	public function setCheckSensory($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->check_sensory !== $v || $v === '0') {
			$this->check_sensory = $v;
			$this->modifiedColumns[] = WasherPmPeer::CHECK_SENSORY;
		}

	} 
	
	public function setTempControl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->temp_control !== $v) {
			$this->temp_control = $v;
			$this->modifiedColumns[] = WasherPmPeer::TEMP_CONTROL;
		}

	} 
	
	public function setTempVerify($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->temp_verify !== $v) {
			$this->temp_verify = $v;
			$this->modifiedColumns[] = WasherPmPeer::TEMP_VERIFY;
		}

	} 
	
	public function setPerformedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->performed_by !== $v) {
			$this->performed_by = $v;
			$this->modifiedColumns[] = WasherPmPeer::PERFORMED_BY;
		}

	} 
	
	public function setVerifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by !== $v || $v === 'null') {
			$this->verified_by = $v;
			$this->modifiedColumns[] = WasherPmPeer::VERIFIED_BY;
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
			$this->modifiedColumns[] = WasherPmPeer::VERIFY_DATE;
		}

	} 
	
	public function setCheckBrake($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->check_brake !== $v || $v === 'null') {
			$this->check_brake = $v;
			$this->modifiedColumns[] = WasherPmPeer::CHECK_BRAKE;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = WasherPmPeer::REMARK;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = WasherPmPeer::CREATED_BY;
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
			$this->modifiedColumns[] = WasherPmPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = WasherPmPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = WasherPmPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->machine_type = $rs->getString($startcol + 2);

			$this->clean_machine = $rs->getString($startcol + 3);

			$this->purged_water = $rs->getString($startcol + 4);

			$this->clean_door = $rs->getString($startcol + 5);

			$this->check_belt = $rs->getString($startcol + 6);

			$this->check_hose = $rs->getString($startcol + 7);

			$this->lubricate_bearings = $rs->getString($startcol + 8);

			$this->check_sensory = $rs->getString($startcol + 9);

			$this->temp_control = $rs->getString($startcol + 10);

			$this->temp_verify = $rs->getString($startcol + 11);

			$this->performed_by = $rs->getString($startcol + 12);

			$this->verified_by = $rs->getString($startcol + 13);

			$this->verify_date = $rs->getTimestamp($startcol + 14, null);

			$this->check_brake = $rs->getString($startcol + 15);

			$this->remark = $rs->getString($startcol + 16);

			$this->created_by = $rs->getString($startcol + 17);

			$this->date_created = $rs->getTimestamp($startcol + 18, null);

			$this->modified_by = $rs->getString($startcol + 19);

			$this->date_modified = $rs->getTimestamp($startcol + 20, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 21; 
		} catch (Exception $e) {
			throw new PropelException("Error populating WasherPm object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(WasherPmPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			WasherPmPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(WasherPmPeer::DATABASE_NAME);
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
					$pk = WasherPmPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += WasherPmPeer::doUpdate($this, $con);
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


			if (($retval = WasherPmPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = WasherPmPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCleanMachine();
				break;
			case 4:
				return $this->getPurgedWater();
				break;
			case 5:
				return $this->getCleanDoor();
				break;
			case 6:
				return $this->getCheckBelt();
				break;
			case 7:
				return $this->getCheckHose();
				break;
			case 8:
				return $this->getLubricateBearings();
				break;
			case 9:
				return $this->getCheckSensory();
				break;
			case 10:
				return $this->getTempControl();
				break;
			case 11:
				return $this->getTempVerify();
				break;
			case 12:
				return $this->getPerformedBy();
				break;
			case 13:
				return $this->getVerifiedBy();
				break;
			case 14:
				return $this->getVerifyDate();
				break;
			case 15:
				return $this->getCheckBrake();
				break;
			case 16:
				return $this->getRemark();
				break;
			case 17:
				return $this->getCreatedBy();
				break;
			case 18:
				return $this->getDateCreated();
				break;
			case 19:
				return $this->getModifiedBy();
				break;
			case 20:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = WasherPmPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getMachineType(),
			$keys[3] => $this->getCleanMachine(),
			$keys[4] => $this->getPurgedWater(),
			$keys[5] => $this->getCleanDoor(),
			$keys[6] => $this->getCheckBelt(),
			$keys[7] => $this->getCheckHose(),
			$keys[8] => $this->getLubricateBearings(),
			$keys[9] => $this->getCheckSensory(),
			$keys[10] => $this->getTempControl(),
			$keys[11] => $this->getTempVerify(),
			$keys[12] => $this->getPerformedBy(),
			$keys[13] => $this->getVerifiedBy(),
			$keys[14] => $this->getVerifyDate(),
			$keys[15] => $this->getCheckBrake(),
			$keys[16] => $this->getRemark(),
			$keys[17] => $this->getCreatedBy(),
			$keys[18] => $this->getDateCreated(),
			$keys[19] => $this->getModifiedBy(),
			$keys[20] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = WasherPmPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCleanMachine($value);
				break;
			case 4:
				$this->setPurgedWater($value);
				break;
			case 5:
				$this->setCleanDoor($value);
				break;
			case 6:
				$this->setCheckBelt($value);
				break;
			case 7:
				$this->setCheckHose($value);
				break;
			case 8:
				$this->setLubricateBearings($value);
				break;
			case 9:
				$this->setCheckSensory($value);
				break;
			case 10:
				$this->setTempControl($value);
				break;
			case 11:
				$this->setTempVerify($value);
				break;
			case 12:
				$this->setPerformedBy($value);
				break;
			case 13:
				$this->setVerifiedBy($value);
				break;
			case 14:
				$this->setVerifyDate($value);
				break;
			case 15:
				$this->setCheckBrake($value);
				break;
			case 16:
				$this->setRemark($value);
				break;
			case 17:
				$this->setCreatedBy($value);
				break;
			case 18:
				$this->setDateCreated($value);
				break;
			case 19:
				$this->setModifiedBy($value);
				break;
			case 20:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = WasherPmPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMachineType($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCleanMachine($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPurgedWater($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCleanDoor($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCheckBelt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCheckHose($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setLubricateBearings($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCheckSensory($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setTempControl($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTempVerify($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setPerformedBy($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setVerifiedBy($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setVerifyDate($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCheckBrake($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setRemark($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setCreatedBy($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDateCreated($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setModifiedBy($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setDateModified($arr[$keys[20]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(WasherPmPeer::DATABASE_NAME);

		if ($this->isColumnModified(WasherPmPeer::ID)) $criteria->add(WasherPmPeer::ID, $this->id);
		if ($this->isColumnModified(WasherPmPeer::TRANS_DATE)) $criteria->add(WasherPmPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(WasherPmPeer::MACHINE_TYPE)) $criteria->add(WasherPmPeer::MACHINE_TYPE, $this->machine_type);
		if ($this->isColumnModified(WasherPmPeer::CLEAN_MACHINE)) $criteria->add(WasherPmPeer::CLEAN_MACHINE, $this->clean_machine);
		if ($this->isColumnModified(WasherPmPeer::PURGED_WATER)) $criteria->add(WasherPmPeer::PURGED_WATER, $this->purged_water);
		if ($this->isColumnModified(WasherPmPeer::CLEAN_DOOR)) $criteria->add(WasherPmPeer::CLEAN_DOOR, $this->clean_door);
		if ($this->isColumnModified(WasherPmPeer::CHECK_BELT)) $criteria->add(WasherPmPeer::CHECK_BELT, $this->check_belt);
		if ($this->isColumnModified(WasherPmPeer::CHECK_HOSE)) $criteria->add(WasherPmPeer::CHECK_HOSE, $this->check_hose);
		if ($this->isColumnModified(WasherPmPeer::LUBRICATE_BEARINGS)) $criteria->add(WasherPmPeer::LUBRICATE_BEARINGS, $this->lubricate_bearings);
		if ($this->isColumnModified(WasherPmPeer::CHECK_SENSORY)) $criteria->add(WasherPmPeer::CHECK_SENSORY, $this->check_sensory);
		if ($this->isColumnModified(WasherPmPeer::TEMP_CONTROL)) $criteria->add(WasherPmPeer::TEMP_CONTROL, $this->temp_control);
		if ($this->isColumnModified(WasherPmPeer::TEMP_VERIFY)) $criteria->add(WasherPmPeer::TEMP_VERIFY, $this->temp_verify);
		if ($this->isColumnModified(WasherPmPeer::PERFORMED_BY)) $criteria->add(WasherPmPeer::PERFORMED_BY, $this->performed_by);
		if ($this->isColumnModified(WasherPmPeer::VERIFIED_BY)) $criteria->add(WasherPmPeer::VERIFIED_BY, $this->verified_by);
		if ($this->isColumnModified(WasherPmPeer::VERIFY_DATE)) $criteria->add(WasherPmPeer::VERIFY_DATE, $this->verify_date);
		if ($this->isColumnModified(WasherPmPeer::CHECK_BRAKE)) $criteria->add(WasherPmPeer::CHECK_BRAKE, $this->check_brake);
		if ($this->isColumnModified(WasherPmPeer::REMARK)) $criteria->add(WasherPmPeer::REMARK, $this->remark);
		if ($this->isColumnModified(WasherPmPeer::CREATED_BY)) $criteria->add(WasherPmPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(WasherPmPeer::DATE_CREATED)) $criteria->add(WasherPmPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(WasherPmPeer::MODIFIED_BY)) $criteria->add(WasherPmPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(WasherPmPeer::DATE_MODIFIED)) $criteria->add(WasherPmPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(WasherPmPeer::DATABASE_NAME);

		$criteria->add(WasherPmPeer::ID, $this->id);

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

		$copyObj->setCleanMachine($this->clean_machine);

		$copyObj->setPurgedWater($this->purged_water);

		$copyObj->setCleanDoor($this->clean_door);

		$copyObj->setCheckBelt($this->check_belt);

		$copyObj->setCheckHose($this->check_hose);

		$copyObj->setLubricateBearings($this->lubricate_bearings);

		$copyObj->setCheckSensory($this->check_sensory);

		$copyObj->setTempControl($this->temp_control);

		$copyObj->setTempVerify($this->temp_verify);

		$copyObj->setPerformedBy($this->performed_by);

		$copyObj->setVerifiedBy($this->verified_by);

		$copyObj->setVerifyDate($this->verify_date);

		$copyObj->setCheckBrake($this->check_brake);

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
			self::$peer = new WasherPmPeer();
		}
		return self::$peer;
	}

} 
<?php


abstract class BaseDryerPm extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $machine_type;


	
	protected $clean_machine;


	
	protected $cage_shaft;


	
	protected $fan_bearing = '0';


	
	protected $fan_shaft = '0';


	
	protected $fan_motor = '0';


	
	protected $cage_motor = '0';


	
	protected $temp_control;


	
	protected $temp_verify;


	
	protected $performed_by;


	
	protected $verified_by = 'null';


	
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

	
	public function getCleanMachine()
	{

		return $this->clean_machine;
	}

	
	public function getCageShaft()
	{

		return $this->cage_shaft;
	}

	
	public function getFanBearing()
	{

		return $this->fan_bearing;
	}

	
	public function getFanShaft()
	{

		return $this->fan_shaft;
	}

	
	public function getFanMotor()
	{

		return $this->fan_motor;
	}

	
	public function getCageMotor()
	{

		return $this->cage_motor;
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
			$this->modifiedColumns[] = DryerPmPeer::ID;
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
			$this->modifiedColumns[] = DryerPmPeer::TRANS_DATE;
		}

	} 
	
	public function setMachineType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_type !== $v) {
			$this->machine_type = $v;
			$this->modifiedColumns[] = DryerPmPeer::MACHINE_TYPE;
		}

	} 
	
	public function setCleanMachine($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->clean_machine !== $v) {
			$this->clean_machine = $v;
			$this->modifiedColumns[] = DryerPmPeer::CLEAN_MACHINE;
		}

	} 
	
	public function setCageShaft($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cage_shaft !== $v) {
			$this->cage_shaft = $v;
			$this->modifiedColumns[] = DryerPmPeer::CAGE_SHAFT;
		}

	} 
	
	public function setFanBearing($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fan_bearing !== $v || $v === '0') {
			$this->fan_bearing = $v;
			$this->modifiedColumns[] = DryerPmPeer::FAN_BEARING;
		}

	} 
	
	public function setFanShaft($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fan_shaft !== $v || $v === '0') {
			$this->fan_shaft = $v;
			$this->modifiedColumns[] = DryerPmPeer::FAN_SHAFT;
		}

	} 
	
	public function setFanMotor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fan_motor !== $v || $v === '0') {
			$this->fan_motor = $v;
			$this->modifiedColumns[] = DryerPmPeer::FAN_MOTOR;
		}

	} 
	
	public function setCageMotor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cage_motor !== $v || $v === '0') {
			$this->cage_motor = $v;
			$this->modifiedColumns[] = DryerPmPeer::CAGE_MOTOR;
		}

	} 
	
	public function setTempControl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->temp_control !== $v) {
			$this->temp_control = $v;
			$this->modifiedColumns[] = DryerPmPeer::TEMP_CONTROL;
		}

	} 
	
	public function setTempVerify($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->temp_verify !== $v) {
			$this->temp_verify = $v;
			$this->modifiedColumns[] = DryerPmPeer::TEMP_VERIFY;
		}

	} 
	
	public function setPerformedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->performed_by !== $v) {
			$this->performed_by = $v;
			$this->modifiedColumns[] = DryerPmPeer::PERFORMED_BY;
		}

	} 
	
	public function setVerifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by !== $v || $v === 'null') {
			$this->verified_by = $v;
			$this->modifiedColumns[] = DryerPmPeer::VERIFIED_BY;
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
			$this->modifiedColumns[] = DryerPmPeer::VERIFY_DATE;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = DryerPmPeer::REMARK;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = DryerPmPeer::CREATED_BY;
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
			$this->modifiedColumns[] = DryerPmPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = DryerPmPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = DryerPmPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->machine_type = $rs->getString($startcol + 2);

			$this->clean_machine = $rs->getString($startcol + 3);

			$this->cage_shaft = $rs->getString($startcol + 4);

			$this->fan_bearing = $rs->getString($startcol + 5);

			$this->fan_shaft = $rs->getString($startcol + 6);

			$this->fan_motor = $rs->getString($startcol + 7);

			$this->cage_motor = $rs->getString($startcol + 8);

			$this->temp_control = $rs->getString($startcol + 9);

			$this->temp_verify = $rs->getString($startcol + 10);

			$this->performed_by = $rs->getString($startcol + 11);

			$this->verified_by = $rs->getString($startcol + 12);

			$this->verify_date = $rs->getTimestamp($startcol + 13, null);

			$this->remark = $rs->getString($startcol + 14);

			$this->created_by = $rs->getString($startcol + 15);

			$this->date_created = $rs->getTimestamp($startcol + 16, null);

			$this->modified_by = $rs->getString($startcol + 17);

			$this->date_modified = $rs->getTimestamp($startcol + 18, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 19; 
		} catch (Exception $e) {
			throw new PropelException("Error populating DryerPm object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DryerPmPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			DryerPmPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(DryerPmPeer::DATABASE_NAME);
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
					$pk = DryerPmPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += DryerPmPeer::doUpdate($this, $con);
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


			if (($retval = DryerPmPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DryerPmPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCageShaft();
				break;
			case 5:
				return $this->getFanBearing();
				break;
			case 6:
				return $this->getFanShaft();
				break;
			case 7:
				return $this->getFanMotor();
				break;
			case 8:
				return $this->getCageMotor();
				break;
			case 9:
				return $this->getTempControl();
				break;
			case 10:
				return $this->getTempVerify();
				break;
			case 11:
				return $this->getPerformedBy();
				break;
			case 12:
				return $this->getVerifiedBy();
				break;
			case 13:
				return $this->getVerifyDate();
				break;
			case 14:
				return $this->getRemark();
				break;
			case 15:
				return $this->getCreatedBy();
				break;
			case 16:
				return $this->getDateCreated();
				break;
			case 17:
				return $this->getModifiedBy();
				break;
			case 18:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DryerPmPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getMachineType(),
			$keys[3] => $this->getCleanMachine(),
			$keys[4] => $this->getCageShaft(),
			$keys[5] => $this->getFanBearing(),
			$keys[6] => $this->getFanShaft(),
			$keys[7] => $this->getFanMotor(),
			$keys[8] => $this->getCageMotor(),
			$keys[9] => $this->getTempControl(),
			$keys[10] => $this->getTempVerify(),
			$keys[11] => $this->getPerformedBy(),
			$keys[12] => $this->getVerifiedBy(),
			$keys[13] => $this->getVerifyDate(),
			$keys[14] => $this->getRemark(),
			$keys[15] => $this->getCreatedBy(),
			$keys[16] => $this->getDateCreated(),
			$keys[17] => $this->getModifiedBy(),
			$keys[18] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DryerPmPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCageShaft($value);
				break;
			case 5:
				$this->setFanBearing($value);
				break;
			case 6:
				$this->setFanShaft($value);
				break;
			case 7:
				$this->setFanMotor($value);
				break;
			case 8:
				$this->setCageMotor($value);
				break;
			case 9:
				$this->setTempControl($value);
				break;
			case 10:
				$this->setTempVerify($value);
				break;
			case 11:
				$this->setPerformedBy($value);
				break;
			case 12:
				$this->setVerifiedBy($value);
				break;
			case 13:
				$this->setVerifyDate($value);
				break;
			case 14:
				$this->setRemark($value);
				break;
			case 15:
				$this->setCreatedBy($value);
				break;
			case 16:
				$this->setDateCreated($value);
				break;
			case 17:
				$this->setModifiedBy($value);
				break;
			case 18:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DryerPmPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMachineType($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCleanMachine($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCageShaft($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFanBearing($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFanShaft($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setFanMotor($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCageMotor($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTempControl($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setTempVerify($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPerformedBy($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setVerifiedBy($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setVerifyDate($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setRemark($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCreatedBy($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDateCreated($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setModifiedBy($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDateModified($arr[$keys[18]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(DryerPmPeer::DATABASE_NAME);

		if ($this->isColumnModified(DryerPmPeer::ID)) $criteria->add(DryerPmPeer::ID, $this->id);
		if ($this->isColumnModified(DryerPmPeer::TRANS_DATE)) $criteria->add(DryerPmPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(DryerPmPeer::MACHINE_TYPE)) $criteria->add(DryerPmPeer::MACHINE_TYPE, $this->machine_type);
		if ($this->isColumnModified(DryerPmPeer::CLEAN_MACHINE)) $criteria->add(DryerPmPeer::CLEAN_MACHINE, $this->clean_machine);
		if ($this->isColumnModified(DryerPmPeer::CAGE_SHAFT)) $criteria->add(DryerPmPeer::CAGE_SHAFT, $this->cage_shaft);
		if ($this->isColumnModified(DryerPmPeer::FAN_BEARING)) $criteria->add(DryerPmPeer::FAN_BEARING, $this->fan_bearing);
		if ($this->isColumnModified(DryerPmPeer::FAN_SHAFT)) $criteria->add(DryerPmPeer::FAN_SHAFT, $this->fan_shaft);
		if ($this->isColumnModified(DryerPmPeer::FAN_MOTOR)) $criteria->add(DryerPmPeer::FAN_MOTOR, $this->fan_motor);
		if ($this->isColumnModified(DryerPmPeer::CAGE_MOTOR)) $criteria->add(DryerPmPeer::CAGE_MOTOR, $this->cage_motor);
		if ($this->isColumnModified(DryerPmPeer::TEMP_CONTROL)) $criteria->add(DryerPmPeer::TEMP_CONTROL, $this->temp_control);
		if ($this->isColumnModified(DryerPmPeer::TEMP_VERIFY)) $criteria->add(DryerPmPeer::TEMP_VERIFY, $this->temp_verify);
		if ($this->isColumnModified(DryerPmPeer::PERFORMED_BY)) $criteria->add(DryerPmPeer::PERFORMED_BY, $this->performed_by);
		if ($this->isColumnModified(DryerPmPeer::VERIFIED_BY)) $criteria->add(DryerPmPeer::VERIFIED_BY, $this->verified_by);
		if ($this->isColumnModified(DryerPmPeer::VERIFY_DATE)) $criteria->add(DryerPmPeer::VERIFY_DATE, $this->verify_date);
		if ($this->isColumnModified(DryerPmPeer::REMARK)) $criteria->add(DryerPmPeer::REMARK, $this->remark);
		if ($this->isColumnModified(DryerPmPeer::CREATED_BY)) $criteria->add(DryerPmPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(DryerPmPeer::DATE_CREATED)) $criteria->add(DryerPmPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(DryerPmPeer::MODIFIED_BY)) $criteria->add(DryerPmPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(DryerPmPeer::DATE_MODIFIED)) $criteria->add(DryerPmPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DryerPmPeer::DATABASE_NAME);

		$criteria->add(DryerPmPeer::ID, $this->id);

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

		$copyObj->setCageShaft($this->cage_shaft);

		$copyObj->setFanBearing($this->fan_bearing);

		$copyObj->setFanShaft($this->fan_shaft);

		$copyObj->setFanMotor($this->fan_motor);

		$copyObj->setCageMotor($this->cage_motor);

		$copyObj->setTempControl($this->temp_control);

		$copyObj->setTempVerify($this->temp_verify);

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
			self::$peer = new DryerPmPeer();
		}
		return self::$peer;
	}

} 
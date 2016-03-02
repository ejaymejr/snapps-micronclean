<?php


abstract class BasePms1232abWeekly extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $machine_no;


	
	protected $sensor_diagnostic = 0;


	
	protected $chamber_temp = 0;


	
	protected $actuator_diagnostic = 0;


	
	protected $basket_inspect = 0;


	
	protected $chamber_clean = 0;


	
	protected $nozzle_inspect = 0;


	
	protected $plumbing_inspect = 0;


	
	protected $drive_roller = 0;


	
	protected $drive_belt = 0;


	
	protected $chain_tention = 0;


	
	protected $initial;


	
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

	
	public function getSensorDiagnostic()
	{

		return $this->sensor_diagnostic;
	}

	
	public function getChamberTemp()
	{

		return $this->chamber_temp;
	}

	
	public function getActuatorDiagnostic()
	{

		return $this->actuator_diagnostic;
	}

	
	public function getBasketInspect()
	{

		return $this->basket_inspect;
	}

	
	public function getChamberClean()
	{

		return $this->chamber_clean;
	}

	
	public function getNozzleInspect()
	{

		return $this->nozzle_inspect;
	}

	
	public function getPlumbingInspect()
	{

		return $this->plumbing_inspect;
	}

	
	public function getDriveRoller()
	{

		return $this->drive_roller;
	}

	
	public function getDriveBelt()
	{

		return $this->drive_belt;
	}

	
	public function getChainTention()
	{

		return $this->chain_tention;
	}

	
	public function getInitial()
	{

		return $this->initial;
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
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::ID;
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
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::TRANS_DATE;
		}

	} 
	
	public function setMachineNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_no !== $v) {
			$this->machine_no = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::MACHINE_NO;
		}

	} 
	
	public function setSensorDiagnostic($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->sensor_diagnostic !== $v || $v === 0) {
			$this->sensor_diagnostic = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::SENSOR_DIAGNOSTIC;
		}

	} 
	
	public function setChamberTemp($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->chamber_temp !== $v || $v === 0) {
			$this->chamber_temp = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::CHAMBER_TEMP;
		}

	} 
	
	public function setActuatorDiagnostic($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->actuator_diagnostic !== $v || $v === 0) {
			$this->actuator_diagnostic = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::ACTUATOR_DIAGNOSTIC;
		}

	} 
	
	public function setBasketInspect($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->basket_inspect !== $v || $v === 0) {
			$this->basket_inspect = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::BASKET_INSPECT;
		}

	} 
	
	public function setChamberClean($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->chamber_clean !== $v || $v === 0) {
			$this->chamber_clean = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::CHAMBER_CLEAN;
		}

	} 
	
	public function setNozzleInspect($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nozzle_inspect !== $v || $v === 0) {
			$this->nozzle_inspect = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::NOZZLE_INSPECT;
		}

	} 
	
	public function setPlumbingInspect($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->plumbing_inspect !== $v || $v === 0) {
			$this->plumbing_inspect = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::PLUMBING_INSPECT;
		}

	} 
	
	public function setDriveRoller($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->drive_roller !== $v || $v === 0) {
			$this->drive_roller = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::DRIVE_ROLLER;
		}

	} 
	
	public function setDriveBelt($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->drive_belt !== $v || $v === 0) {
			$this->drive_belt = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::DRIVE_BELT;
		}

	} 
	
	public function setChainTention($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->chain_tention !== $v || $v === 0) {
			$this->chain_tention = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::CHAIN_TENTION;
		}

	} 
	
	public function setInitial($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initial !== $v) {
			$this->initial = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::INITIAL;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::REMARK;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::CREATED_BY;
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
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = Pms1232abWeeklyPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->machine_no = $rs->getString($startcol + 2);

			$this->sensor_diagnostic = $rs->getInt($startcol + 3);

			$this->chamber_temp = $rs->getInt($startcol + 4);

			$this->actuator_diagnostic = $rs->getInt($startcol + 5);

			$this->basket_inspect = $rs->getInt($startcol + 6);

			$this->chamber_clean = $rs->getInt($startcol + 7);

			$this->nozzle_inspect = $rs->getInt($startcol + 8);

			$this->plumbing_inspect = $rs->getInt($startcol + 9);

			$this->drive_roller = $rs->getInt($startcol + 10);

			$this->drive_belt = $rs->getInt($startcol + 11);

			$this->chain_tention = $rs->getInt($startcol + 12);

			$this->initial = $rs->getString($startcol + 13);

			$this->remark = $rs->getString($startcol + 14);

			$this->created_by = $rs->getString($startcol + 15);

			$this->date_created = $rs->getTimestamp($startcol + 16, null);

			$this->modified_by = $rs->getString($startcol + 17);

			$this->date_modified = $rs->getTimestamp($startcol + 18, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 19; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Pms1232abWeekly object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Pms1232abWeeklyPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			Pms1232abWeeklyPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(Pms1232abWeeklyPeer::DATABASE_NAME);
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
					$pk = Pms1232abWeeklyPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += Pms1232abWeeklyPeer::doUpdate($this, $con);
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


			if (($retval = Pms1232abWeeklyPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Pms1232abWeeklyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getSensorDiagnostic();
				break;
			case 4:
				return $this->getChamberTemp();
				break;
			case 5:
				return $this->getActuatorDiagnostic();
				break;
			case 6:
				return $this->getBasketInspect();
				break;
			case 7:
				return $this->getChamberClean();
				break;
			case 8:
				return $this->getNozzleInspect();
				break;
			case 9:
				return $this->getPlumbingInspect();
				break;
			case 10:
				return $this->getDriveRoller();
				break;
			case 11:
				return $this->getDriveBelt();
				break;
			case 12:
				return $this->getChainTention();
				break;
			case 13:
				return $this->getInitial();
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
		$keys = Pms1232abWeeklyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getMachineNo(),
			$keys[3] => $this->getSensorDiagnostic(),
			$keys[4] => $this->getChamberTemp(),
			$keys[5] => $this->getActuatorDiagnostic(),
			$keys[6] => $this->getBasketInspect(),
			$keys[7] => $this->getChamberClean(),
			$keys[8] => $this->getNozzleInspect(),
			$keys[9] => $this->getPlumbingInspect(),
			$keys[10] => $this->getDriveRoller(),
			$keys[11] => $this->getDriveBelt(),
			$keys[12] => $this->getChainTention(),
			$keys[13] => $this->getInitial(),
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
		$pos = Pms1232abWeeklyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setSensorDiagnostic($value);
				break;
			case 4:
				$this->setChamberTemp($value);
				break;
			case 5:
				$this->setActuatorDiagnostic($value);
				break;
			case 6:
				$this->setBasketInspect($value);
				break;
			case 7:
				$this->setChamberClean($value);
				break;
			case 8:
				$this->setNozzleInspect($value);
				break;
			case 9:
				$this->setPlumbingInspect($value);
				break;
			case 10:
				$this->setDriveRoller($value);
				break;
			case 11:
				$this->setDriveBelt($value);
				break;
			case 12:
				$this->setChainTention($value);
				break;
			case 13:
				$this->setInitial($value);
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
		$keys = Pms1232abWeeklyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMachineNo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSensorDiagnostic($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setChamberTemp($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setActuatorDiagnostic($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setBasketInspect($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setChamberClean($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setNozzleInspect($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPlumbingInspect($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDriveRoller($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDriveBelt($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setChainTention($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setInitial($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setRemark($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCreatedBy($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDateCreated($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setModifiedBy($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDateModified($arr[$keys[18]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(Pms1232abWeeklyPeer::DATABASE_NAME);

		if ($this->isColumnModified(Pms1232abWeeklyPeer::ID)) $criteria->add(Pms1232abWeeklyPeer::ID, $this->id);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::TRANS_DATE)) $criteria->add(Pms1232abWeeklyPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::MACHINE_NO)) $criteria->add(Pms1232abWeeklyPeer::MACHINE_NO, $this->machine_no);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::SENSOR_DIAGNOSTIC)) $criteria->add(Pms1232abWeeklyPeer::SENSOR_DIAGNOSTIC, $this->sensor_diagnostic);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::CHAMBER_TEMP)) $criteria->add(Pms1232abWeeklyPeer::CHAMBER_TEMP, $this->chamber_temp);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::ACTUATOR_DIAGNOSTIC)) $criteria->add(Pms1232abWeeklyPeer::ACTUATOR_DIAGNOSTIC, $this->actuator_diagnostic);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::BASKET_INSPECT)) $criteria->add(Pms1232abWeeklyPeer::BASKET_INSPECT, $this->basket_inspect);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::CHAMBER_CLEAN)) $criteria->add(Pms1232abWeeklyPeer::CHAMBER_CLEAN, $this->chamber_clean);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::NOZZLE_INSPECT)) $criteria->add(Pms1232abWeeklyPeer::NOZZLE_INSPECT, $this->nozzle_inspect);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::PLUMBING_INSPECT)) $criteria->add(Pms1232abWeeklyPeer::PLUMBING_INSPECT, $this->plumbing_inspect);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::DRIVE_ROLLER)) $criteria->add(Pms1232abWeeklyPeer::DRIVE_ROLLER, $this->drive_roller);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::DRIVE_BELT)) $criteria->add(Pms1232abWeeklyPeer::DRIVE_BELT, $this->drive_belt);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::CHAIN_TENTION)) $criteria->add(Pms1232abWeeklyPeer::CHAIN_TENTION, $this->chain_tention);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::INITIAL)) $criteria->add(Pms1232abWeeklyPeer::INITIAL, $this->initial);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::REMARK)) $criteria->add(Pms1232abWeeklyPeer::REMARK, $this->remark);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::CREATED_BY)) $criteria->add(Pms1232abWeeklyPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::DATE_CREATED)) $criteria->add(Pms1232abWeeklyPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::MODIFIED_BY)) $criteria->add(Pms1232abWeeklyPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(Pms1232abWeeklyPeer::DATE_MODIFIED)) $criteria->add(Pms1232abWeeklyPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(Pms1232abWeeklyPeer::DATABASE_NAME);

		$criteria->add(Pms1232abWeeklyPeer::ID, $this->id);

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

		$copyObj->setSensorDiagnostic($this->sensor_diagnostic);

		$copyObj->setChamberTemp($this->chamber_temp);

		$copyObj->setActuatorDiagnostic($this->actuator_diagnostic);

		$copyObj->setBasketInspect($this->basket_inspect);

		$copyObj->setChamberClean($this->chamber_clean);

		$copyObj->setNozzleInspect($this->nozzle_inspect);

		$copyObj->setPlumbingInspect($this->plumbing_inspect);

		$copyObj->setDriveRoller($this->drive_roller);

		$copyObj->setDriveBelt($this->drive_belt);

		$copyObj->setChainTention($this->chain_tention);

		$copyObj->setInitial($this->initial);

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
			self::$peer = new Pms1232abWeeklyPeer();
		}
		return self::$peer;
	}

} 
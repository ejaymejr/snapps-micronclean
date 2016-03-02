<?php


abstract class BaseMachineParameter extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $trans_time;


	
	protected $machine_no;


	
	protected $di_water;


	
	protected $cda1;


	
	protected $cda2;


	
	protected $cda_diff;


	
	protected $sumptank;


	
	protected $ultra_tank;


	
	protected $water_temp;


	
	protected $rinse_temp;


	
	protected $checked_by;


	
	protected $verified_by;


	
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

	
	public function getTransTime($format = 'H:i:s')
	{

		if ($this->trans_time === null || $this->trans_time === '') {
			return null;
		} elseif (!is_int($this->trans_time)) {
						$ts = strtotime($this->trans_time);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [trans_time] as date/time value: " . var_export($this->trans_time, true));
			}
		} else {
			$ts = $this->trans_time;
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

	
	public function getDiWater()
	{

		return $this->di_water;
	}

	
	public function getCda1()
	{

		return $this->cda1;
	}

	
	public function getCda2()
	{

		return $this->cda2;
	}

	
	public function getCdaDiff()
	{

		return $this->cda_diff;
	}

	
	public function getSumptank()
	{

		return $this->sumptank;
	}

	
	public function getUltraTank()
	{

		return $this->ultra_tank;
	}

	
	public function getWaterTemp()
	{

		return $this->water_temp;
	}

	
	public function getRinseTemp()
	{

		return $this->rinse_temp;
	}

	
	public function getCheckedBy()
	{

		return $this->checked_by;
	}

	
	public function getVerifiedBy()
	{

		return $this->verified_by;
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
			$this->modifiedColumns[] = MachineParameterPeer::ID;
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
			$this->modifiedColumns[] = MachineParameterPeer::TRANS_DATE;
		}

	} 
	
	public function setTransTime($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [trans_time] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->trans_time !== $ts) {
			$this->trans_time = $ts;
			$this->modifiedColumns[] = MachineParameterPeer::TRANS_TIME;
		}

	} 
	
	public function setMachineNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_no !== $v) {
			$this->machine_no = $v;
			$this->modifiedColumns[] = MachineParameterPeer::MACHINE_NO;
		}

	} 
	
	public function setDiWater($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->di_water !== $v) {
			$this->di_water = $v;
			$this->modifiedColumns[] = MachineParameterPeer::DI_WATER;
		}

	} 
	
	public function setCda1($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cda1 !== $v) {
			$this->cda1 = $v;
			$this->modifiedColumns[] = MachineParameterPeer::CDA1;
		}

	} 
	
	public function setCda2($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cda2 !== $v) {
			$this->cda2 = $v;
			$this->modifiedColumns[] = MachineParameterPeer::CDA2;
		}

	} 
	
	public function setCdaDiff($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cda_diff !== $v) {
			$this->cda_diff = $v;
			$this->modifiedColumns[] = MachineParameterPeer::CDA_DIFF;
		}

	} 
	
	public function setSumptank($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->sumptank !== $v) {
			$this->sumptank = $v;
			$this->modifiedColumns[] = MachineParameterPeer::SUMPTANK;
		}

	} 
	
	public function setUltraTank($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ultra_tank !== $v) {
			$this->ultra_tank = $v;
			$this->modifiedColumns[] = MachineParameterPeer::ULTRA_TANK;
		}

	} 
	
	public function setWaterTemp($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->water_temp !== $v) {
			$this->water_temp = $v;
			$this->modifiedColumns[] = MachineParameterPeer::WATER_TEMP;
		}

	} 
	
	public function setRinseTemp($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->rinse_temp !== $v) {
			$this->rinse_temp = $v;
			$this->modifiedColumns[] = MachineParameterPeer::RINSE_TEMP;
		}

	} 
	
	public function setCheckedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->checked_by !== $v) {
			$this->checked_by = $v;
			$this->modifiedColumns[] = MachineParameterPeer::CHECKED_BY;
		}

	} 
	
	public function setVerifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by !== $v) {
			$this->verified_by = $v;
			$this->modifiedColumns[] = MachineParameterPeer::VERIFIED_BY;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = MachineParameterPeer::REMARK;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = MachineParameterPeer::CREATED_BY;
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
			$this->modifiedColumns[] = MachineParameterPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = MachineParameterPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = MachineParameterPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->trans_time = $rs->getTime($startcol + 2, null);

			$this->machine_no = $rs->getString($startcol + 3);

			$this->di_water = $rs->getInt($startcol + 4);

			$this->cda1 = $rs->getInt($startcol + 5);

			$this->cda2 = $rs->getInt($startcol + 6);

			$this->cda_diff = $rs->getInt($startcol + 7);

			$this->sumptank = $rs->getInt($startcol + 8);

			$this->ultra_tank = $rs->getInt($startcol + 9);

			$this->water_temp = $rs->getInt($startcol + 10);

			$this->rinse_temp = $rs->getInt($startcol + 11);

			$this->checked_by = $rs->getString($startcol + 12);

			$this->verified_by = $rs->getString($startcol + 13);

			$this->remark = $rs->getString($startcol + 14);

			$this->created_by = $rs->getString($startcol + 15);

			$this->date_created = $rs->getTimestamp($startcol + 16, null);

			$this->modified_by = $rs->getString($startcol + 17);

			$this->date_modified = $rs->getTimestamp($startcol + 18, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 19; 
		} catch (Exception $e) {
			throw new PropelException("Error populating MachineParameter object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MachineParameterPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			MachineParameterPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(MachineParameterPeer::DATABASE_NAME);
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
					$pk = MachineParameterPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += MachineParameterPeer::doUpdate($this, $con);
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


			if (($retval = MachineParameterPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MachineParameterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTransTime();
				break;
			case 3:
				return $this->getMachineNo();
				break;
			case 4:
				return $this->getDiWater();
				break;
			case 5:
				return $this->getCda1();
				break;
			case 6:
				return $this->getCda2();
				break;
			case 7:
				return $this->getCdaDiff();
				break;
			case 8:
				return $this->getSumptank();
				break;
			case 9:
				return $this->getUltraTank();
				break;
			case 10:
				return $this->getWaterTemp();
				break;
			case 11:
				return $this->getRinseTemp();
				break;
			case 12:
				return $this->getCheckedBy();
				break;
			case 13:
				return $this->getVerifiedBy();
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
		$keys = MachineParameterPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getTransTime(),
			$keys[3] => $this->getMachineNo(),
			$keys[4] => $this->getDiWater(),
			$keys[5] => $this->getCda1(),
			$keys[6] => $this->getCda2(),
			$keys[7] => $this->getCdaDiff(),
			$keys[8] => $this->getSumptank(),
			$keys[9] => $this->getUltraTank(),
			$keys[10] => $this->getWaterTemp(),
			$keys[11] => $this->getRinseTemp(),
			$keys[12] => $this->getCheckedBy(),
			$keys[13] => $this->getVerifiedBy(),
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
		$pos = MachineParameterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTransTime($value);
				break;
			case 3:
				$this->setMachineNo($value);
				break;
			case 4:
				$this->setDiWater($value);
				break;
			case 5:
				$this->setCda1($value);
				break;
			case 6:
				$this->setCda2($value);
				break;
			case 7:
				$this->setCdaDiff($value);
				break;
			case 8:
				$this->setSumptank($value);
				break;
			case 9:
				$this->setUltraTank($value);
				break;
			case 10:
				$this->setWaterTemp($value);
				break;
			case 11:
				$this->setRinseTemp($value);
				break;
			case 12:
				$this->setCheckedBy($value);
				break;
			case 13:
				$this->setVerifiedBy($value);
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
		$keys = MachineParameterPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTransTime($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMachineNo($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDiWater($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCda1($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCda2($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCdaDiff($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSumptank($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setUltraTank($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setWaterTemp($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setRinseTemp($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCheckedBy($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setVerifiedBy($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setRemark($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCreatedBy($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDateCreated($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setModifiedBy($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDateModified($arr[$keys[18]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(MachineParameterPeer::DATABASE_NAME);

		if ($this->isColumnModified(MachineParameterPeer::ID)) $criteria->add(MachineParameterPeer::ID, $this->id);
		if ($this->isColumnModified(MachineParameterPeer::TRANS_DATE)) $criteria->add(MachineParameterPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(MachineParameterPeer::TRANS_TIME)) $criteria->add(MachineParameterPeer::TRANS_TIME, $this->trans_time);
		if ($this->isColumnModified(MachineParameterPeer::MACHINE_NO)) $criteria->add(MachineParameterPeer::MACHINE_NO, $this->machine_no);
		if ($this->isColumnModified(MachineParameterPeer::DI_WATER)) $criteria->add(MachineParameterPeer::DI_WATER, $this->di_water);
		if ($this->isColumnModified(MachineParameterPeer::CDA1)) $criteria->add(MachineParameterPeer::CDA1, $this->cda1);
		if ($this->isColumnModified(MachineParameterPeer::CDA2)) $criteria->add(MachineParameterPeer::CDA2, $this->cda2);
		if ($this->isColumnModified(MachineParameterPeer::CDA_DIFF)) $criteria->add(MachineParameterPeer::CDA_DIFF, $this->cda_diff);
		if ($this->isColumnModified(MachineParameterPeer::SUMPTANK)) $criteria->add(MachineParameterPeer::SUMPTANK, $this->sumptank);
		if ($this->isColumnModified(MachineParameterPeer::ULTRA_TANK)) $criteria->add(MachineParameterPeer::ULTRA_TANK, $this->ultra_tank);
		if ($this->isColumnModified(MachineParameterPeer::WATER_TEMP)) $criteria->add(MachineParameterPeer::WATER_TEMP, $this->water_temp);
		if ($this->isColumnModified(MachineParameterPeer::RINSE_TEMP)) $criteria->add(MachineParameterPeer::RINSE_TEMP, $this->rinse_temp);
		if ($this->isColumnModified(MachineParameterPeer::CHECKED_BY)) $criteria->add(MachineParameterPeer::CHECKED_BY, $this->checked_by);
		if ($this->isColumnModified(MachineParameterPeer::VERIFIED_BY)) $criteria->add(MachineParameterPeer::VERIFIED_BY, $this->verified_by);
		if ($this->isColumnModified(MachineParameterPeer::REMARK)) $criteria->add(MachineParameterPeer::REMARK, $this->remark);
		if ($this->isColumnModified(MachineParameterPeer::CREATED_BY)) $criteria->add(MachineParameterPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(MachineParameterPeer::DATE_CREATED)) $criteria->add(MachineParameterPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(MachineParameterPeer::MODIFIED_BY)) $criteria->add(MachineParameterPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(MachineParameterPeer::DATE_MODIFIED)) $criteria->add(MachineParameterPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(MachineParameterPeer::DATABASE_NAME);

		$criteria->add(MachineParameterPeer::ID, $this->id);

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

		$copyObj->setTransTime($this->trans_time);

		$copyObj->setMachineNo($this->machine_no);

		$copyObj->setDiWater($this->di_water);

		$copyObj->setCda1($this->cda1);

		$copyObj->setCda2($this->cda2);

		$copyObj->setCdaDiff($this->cda_diff);

		$copyObj->setSumptank($this->sumptank);

		$copyObj->setUltraTank($this->ultra_tank);

		$copyObj->setWaterTemp($this->water_temp);

		$copyObj->setRinseTemp($this->rinse_temp);

		$copyObj->setCheckedBy($this->checked_by);

		$copyObj->setVerifiedBy($this->verified_by);

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
			self::$peer = new MachineParameterPeer();
		}
		return self::$peer;
	}

} 
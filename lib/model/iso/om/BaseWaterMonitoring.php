<?php


abstract class BaseWaterMonitoring extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $machine_no;


	
	protected $am_8;


	
	protected $am_9 = 0;


	
	protected $am_10 = 0;


	
	protected $am_11 = 0;


	
	protected $nn_12 = 0;


	
	protected $pm_1 = 0;


	
	protected $pm_2 = 0;


	
	protected $pm_3 = 0;


	
	protected $pm_4 = 0;


	
	protected $pm_5 = 0;


	
	protected $pm_6 = 0;


	
	protected $pm_7 = 0;


	
	protected $pm_8 = 0;


	
	protected $pm_9 = 0;


	
	protected $pm_10 = 0;


	
	protected $tester;


	
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

	
	public function getDateTime($format = 'Y-m-d')
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

	
	public function getMachineNo()
	{

		return $this->machine_no;
	}

	
	public function getAm8()
	{

		return $this->am_8;
	}

	
	public function getAm9()
	{

		return $this->am_9;
	}

	
	public function getAm10()
	{

		return $this->am_10;
	}

	
	public function getAm11()
	{

		return $this->am_11;
	}

	
	public function getNn12()
	{

		return $this->nn_12;
	}

	
	public function getPm1()
	{

		return $this->pm_1;
	}

	
	public function getPm2()
	{

		return $this->pm_2;
	}

	
	public function getPm3()
	{

		return $this->pm_3;
	}

	
	public function getPm4()
	{

		return $this->pm_4;
	}

	
	public function getPm5()
	{

		return $this->pm_5;
	}

	
	public function getPm6()
	{

		return $this->pm_6;
	}

	
	public function getPm7()
	{

		return $this->pm_7;
	}

	
	public function getPm8()
	{

		return $this->pm_8;
	}

	
	public function getPm9()
	{

		return $this->pm_9;
	}

	
	public function getPm10()
	{

		return $this->pm_10;
	}

	
	public function getTester()
	{

		return $this->tester;
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
			$this->modifiedColumns[] = WaterMonitoringPeer::ID;
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
			$this->modifiedColumns[] = WaterMonitoringPeer::DATE_TIME;
		}

	} 
	
	public function setMachineNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_no !== $v) {
			$this->machine_no = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::MACHINE_NO;
		}

	} 
	
	public function setAm8($v)
	{

		if ($this->am_8 !== $v) {
			$this->am_8 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::AM_8;
		}

	} 
	
	public function setAm9($v)
	{

		if ($this->am_9 !== $v || $v === 0) {
			$this->am_9 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::AM_9;
		}

	} 
	
	public function setAm10($v)
	{

		if ($this->am_10 !== $v || $v === 0) {
			$this->am_10 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::AM_10;
		}

	} 
	
	public function setAm11($v)
	{

		if ($this->am_11 !== $v || $v === 0) {
			$this->am_11 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::AM_11;
		}

	} 
	
	public function setNn12($v)
	{

		if ($this->nn_12 !== $v || $v === 0) {
			$this->nn_12 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::NN_12;
		}

	} 
	
	public function setPm1($v)
	{

		if ($this->pm_1 !== $v || $v === 0) {
			$this->pm_1 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::PM_1;
		}

	} 
	
	public function setPm2($v)
	{

		if ($this->pm_2 !== $v || $v === 0) {
			$this->pm_2 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::PM_2;
		}

	} 
	
	public function setPm3($v)
	{

		if ($this->pm_3 !== $v || $v === 0) {
			$this->pm_3 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::PM_3;
		}

	} 
	
	public function setPm4($v)
	{

		if ($this->pm_4 !== $v || $v === 0) {
			$this->pm_4 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::PM_4;
		}

	} 
	
	public function setPm5($v)
	{

		if ($this->pm_5 !== $v || $v === 0) {
			$this->pm_5 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::PM_5;
		}

	} 
	
	public function setPm6($v)
	{

		if ($this->pm_6 !== $v || $v === 0) {
			$this->pm_6 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::PM_6;
		}

	} 
	
	public function setPm7($v)
	{

		if ($this->pm_7 !== $v || $v === 0) {
			$this->pm_7 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::PM_7;
		}

	} 
	
	public function setPm8($v)
	{

		if ($this->pm_8 !== $v || $v === 0) {
			$this->pm_8 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::PM_8;
		}

	} 
	
	public function setPm9($v)
	{

		if ($this->pm_9 !== $v || $v === 0) {
			$this->pm_9 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::PM_9;
		}

	} 
	
	public function setPm10($v)
	{

		if ($this->pm_10 !== $v || $v === 0) {
			$this->pm_10 = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::PM_10;
		}

	} 
	
	public function setTester($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tester !== $v) {
			$this->tester = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::TESTER;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::REMARK;
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
			$this->modifiedColumns[] = WaterMonitoringPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::CREATED_BY;
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
			$this->modifiedColumns[] = WaterMonitoringPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = WaterMonitoringPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getDate($startcol + 1, null);

			$this->machine_no = $rs->getString($startcol + 2);

			$this->am_8 = $rs->getFloat($startcol + 3);

			$this->am_9 = $rs->getFloat($startcol + 4);

			$this->am_10 = $rs->getFloat($startcol + 5);

			$this->am_11 = $rs->getFloat($startcol + 6);

			$this->nn_12 = $rs->getFloat($startcol + 7);

			$this->pm_1 = $rs->getFloat($startcol + 8);

			$this->pm_2 = $rs->getFloat($startcol + 9);

			$this->pm_3 = $rs->getFloat($startcol + 10);

			$this->pm_4 = $rs->getFloat($startcol + 11);

			$this->pm_5 = $rs->getFloat($startcol + 12);

			$this->pm_6 = $rs->getFloat($startcol + 13);

			$this->pm_7 = $rs->getFloat($startcol + 14);

			$this->pm_8 = $rs->getFloat($startcol + 15);

			$this->pm_9 = $rs->getFloat($startcol + 16);

			$this->pm_10 = $rs->getFloat($startcol + 17);

			$this->tester = $rs->getString($startcol + 18);

			$this->remark = $rs->getString($startcol + 19);

			$this->date_created = $rs->getTimestamp($startcol + 20, null);

			$this->created_by = $rs->getString($startcol + 21);

			$this->date_modified = $rs->getTimestamp($startcol + 22, null);

			$this->modified_by = $rs->getString($startcol + 23);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 24; 
		} catch (Exception $e) {
			throw new PropelException("Error populating WaterMonitoring object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(WaterMonitoringPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			WaterMonitoringPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(WaterMonitoringPeer::DATABASE_NAME);
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
					$pk = WaterMonitoringPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += WaterMonitoringPeer::doUpdate($this, $con);
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


			if (($retval = WaterMonitoringPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = WaterMonitoringPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getMachineNo();
				break;
			case 3:
				return $this->getAm8();
				break;
			case 4:
				return $this->getAm9();
				break;
			case 5:
				return $this->getAm10();
				break;
			case 6:
				return $this->getAm11();
				break;
			case 7:
				return $this->getNn12();
				break;
			case 8:
				return $this->getPm1();
				break;
			case 9:
				return $this->getPm2();
				break;
			case 10:
				return $this->getPm3();
				break;
			case 11:
				return $this->getPm4();
				break;
			case 12:
				return $this->getPm5();
				break;
			case 13:
				return $this->getPm6();
				break;
			case 14:
				return $this->getPm7();
				break;
			case 15:
				return $this->getPm8();
				break;
			case 16:
				return $this->getPm9();
				break;
			case 17:
				return $this->getPm10();
				break;
			case 18:
				return $this->getTester();
				break;
			case 19:
				return $this->getRemark();
				break;
			case 20:
				return $this->getDateCreated();
				break;
			case 21:
				return $this->getCreatedBy();
				break;
			case 22:
				return $this->getDateModified();
				break;
			case 23:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = WaterMonitoringPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getMachineNo(),
			$keys[3] => $this->getAm8(),
			$keys[4] => $this->getAm9(),
			$keys[5] => $this->getAm10(),
			$keys[6] => $this->getAm11(),
			$keys[7] => $this->getNn12(),
			$keys[8] => $this->getPm1(),
			$keys[9] => $this->getPm2(),
			$keys[10] => $this->getPm3(),
			$keys[11] => $this->getPm4(),
			$keys[12] => $this->getPm5(),
			$keys[13] => $this->getPm6(),
			$keys[14] => $this->getPm7(),
			$keys[15] => $this->getPm8(),
			$keys[16] => $this->getPm9(),
			$keys[17] => $this->getPm10(),
			$keys[18] => $this->getTester(),
			$keys[19] => $this->getRemark(),
			$keys[20] => $this->getDateCreated(),
			$keys[21] => $this->getCreatedBy(),
			$keys[22] => $this->getDateModified(),
			$keys[23] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = WaterMonitoringPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setMachineNo($value);
				break;
			case 3:
				$this->setAm8($value);
				break;
			case 4:
				$this->setAm9($value);
				break;
			case 5:
				$this->setAm10($value);
				break;
			case 6:
				$this->setAm11($value);
				break;
			case 7:
				$this->setNn12($value);
				break;
			case 8:
				$this->setPm1($value);
				break;
			case 9:
				$this->setPm2($value);
				break;
			case 10:
				$this->setPm3($value);
				break;
			case 11:
				$this->setPm4($value);
				break;
			case 12:
				$this->setPm5($value);
				break;
			case 13:
				$this->setPm6($value);
				break;
			case 14:
				$this->setPm7($value);
				break;
			case 15:
				$this->setPm8($value);
				break;
			case 16:
				$this->setPm9($value);
				break;
			case 17:
				$this->setPm10($value);
				break;
			case 18:
				$this->setTester($value);
				break;
			case 19:
				$this->setRemark($value);
				break;
			case 20:
				$this->setDateCreated($value);
				break;
			case 21:
				$this->setCreatedBy($value);
				break;
			case 22:
				$this->setDateModified($value);
				break;
			case 23:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = WaterMonitoringPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMachineNo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAm8($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAm9($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAm10($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAm11($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNn12($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPm1($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPm2($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPm3($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPm4($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setPm5($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setPm6($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setPm7($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setPm8($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setPm9($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setPm10($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setTester($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setRemark($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setDateCreated($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setCreatedBy($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setDateModified($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setModifiedBy($arr[$keys[23]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(WaterMonitoringPeer::DATABASE_NAME);

		if ($this->isColumnModified(WaterMonitoringPeer::ID)) $criteria->add(WaterMonitoringPeer::ID, $this->id);
		if ($this->isColumnModified(WaterMonitoringPeer::DATE_TIME)) $criteria->add(WaterMonitoringPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(WaterMonitoringPeer::MACHINE_NO)) $criteria->add(WaterMonitoringPeer::MACHINE_NO, $this->machine_no);
		if ($this->isColumnModified(WaterMonitoringPeer::AM_8)) $criteria->add(WaterMonitoringPeer::AM_8, $this->am_8);
		if ($this->isColumnModified(WaterMonitoringPeer::AM_9)) $criteria->add(WaterMonitoringPeer::AM_9, $this->am_9);
		if ($this->isColumnModified(WaterMonitoringPeer::AM_10)) $criteria->add(WaterMonitoringPeer::AM_10, $this->am_10);
		if ($this->isColumnModified(WaterMonitoringPeer::AM_11)) $criteria->add(WaterMonitoringPeer::AM_11, $this->am_11);
		if ($this->isColumnModified(WaterMonitoringPeer::NN_12)) $criteria->add(WaterMonitoringPeer::NN_12, $this->nn_12);
		if ($this->isColumnModified(WaterMonitoringPeer::PM_1)) $criteria->add(WaterMonitoringPeer::PM_1, $this->pm_1);
		if ($this->isColumnModified(WaterMonitoringPeer::PM_2)) $criteria->add(WaterMonitoringPeer::PM_2, $this->pm_2);
		if ($this->isColumnModified(WaterMonitoringPeer::PM_3)) $criteria->add(WaterMonitoringPeer::PM_3, $this->pm_3);
		if ($this->isColumnModified(WaterMonitoringPeer::PM_4)) $criteria->add(WaterMonitoringPeer::PM_4, $this->pm_4);
		if ($this->isColumnModified(WaterMonitoringPeer::PM_5)) $criteria->add(WaterMonitoringPeer::PM_5, $this->pm_5);
		if ($this->isColumnModified(WaterMonitoringPeer::PM_6)) $criteria->add(WaterMonitoringPeer::PM_6, $this->pm_6);
		if ($this->isColumnModified(WaterMonitoringPeer::PM_7)) $criteria->add(WaterMonitoringPeer::PM_7, $this->pm_7);
		if ($this->isColumnModified(WaterMonitoringPeer::PM_8)) $criteria->add(WaterMonitoringPeer::PM_8, $this->pm_8);
		if ($this->isColumnModified(WaterMonitoringPeer::PM_9)) $criteria->add(WaterMonitoringPeer::PM_9, $this->pm_9);
		if ($this->isColumnModified(WaterMonitoringPeer::PM_10)) $criteria->add(WaterMonitoringPeer::PM_10, $this->pm_10);
		if ($this->isColumnModified(WaterMonitoringPeer::TESTER)) $criteria->add(WaterMonitoringPeer::TESTER, $this->tester);
		if ($this->isColumnModified(WaterMonitoringPeer::REMARK)) $criteria->add(WaterMonitoringPeer::REMARK, $this->remark);
		if ($this->isColumnModified(WaterMonitoringPeer::DATE_CREATED)) $criteria->add(WaterMonitoringPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(WaterMonitoringPeer::CREATED_BY)) $criteria->add(WaterMonitoringPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(WaterMonitoringPeer::DATE_MODIFIED)) $criteria->add(WaterMonitoringPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(WaterMonitoringPeer::MODIFIED_BY)) $criteria->add(WaterMonitoringPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(WaterMonitoringPeer::DATABASE_NAME);

		$criteria->add(WaterMonitoringPeer::ID, $this->id);

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

		$copyObj->setMachineNo($this->machine_no);

		$copyObj->setAm8($this->am_8);

		$copyObj->setAm9($this->am_9);

		$copyObj->setAm10($this->am_10);

		$copyObj->setAm11($this->am_11);

		$copyObj->setNn12($this->nn_12);

		$copyObj->setPm1($this->pm_1);

		$copyObj->setPm2($this->pm_2);

		$copyObj->setPm3($this->pm_3);

		$copyObj->setPm4($this->pm_4);

		$copyObj->setPm5($this->pm_5);

		$copyObj->setPm6($this->pm_6);

		$copyObj->setPm7($this->pm_7);

		$copyObj->setPm8($this->pm_8);

		$copyObj->setPm9($this->pm_9);

		$copyObj->setPm10($this->pm_10);

		$copyObj->setTester($this->tester);

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
			self::$peer = new WaterMonitoringPeer();
		}
		return self::$peer;
	}

} 
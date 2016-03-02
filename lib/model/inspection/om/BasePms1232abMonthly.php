<?php


abstract class BasePms1232abMonthly extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $machine_no;


	
	protected $drain_system = 0;


	
	protected $electrical_system = 0;


	
	protected $hoses_connectors = 0;


	
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

	
	public function getDrainSystem()
	{

		return $this->drain_system;
	}

	
	public function getElectricalSystem()
	{

		return $this->electrical_system;
	}

	
	public function getHosesConnectors()
	{

		return $this->hoses_connectors;
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
			$this->modifiedColumns[] = Pms1232abMonthlyPeer::ID;
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
			$this->modifiedColumns[] = Pms1232abMonthlyPeer::TRANS_DATE;
		}

	} 
	
	public function setMachineNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_no !== $v) {
			$this->machine_no = $v;
			$this->modifiedColumns[] = Pms1232abMonthlyPeer::MACHINE_NO;
		}

	} 
	
	public function setDrainSystem($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->drain_system !== $v || $v === 0) {
			$this->drain_system = $v;
			$this->modifiedColumns[] = Pms1232abMonthlyPeer::DRAIN_SYSTEM;
		}

	} 
	
	public function setElectricalSystem($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->electrical_system !== $v || $v === 0) {
			$this->electrical_system = $v;
			$this->modifiedColumns[] = Pms1232abMonthlyPeer::ELECTRICAL_SYSTEM;
		}

	} 
	
	public function setHosesConnectors($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->hoses_connectors !== $v || $v === 0) {
			$this->hoses_connectors = $v;
			$this->modifiedColumns[] = Pms1232abMonthlyPeer::HOSES_CONNECTORS;
		}

	} 
	
	public function setInitial($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initial !== $v) {
			$this->initial = $v;
			$this->modifiedColumns[] = Pms1232abMonthlyPeer::INITIAL;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = Pms1232abMonthlyPeer::REMARK;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = Pms1232abMonthlyPeer::CREATED_BY;
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
			$this->modifiedColumns[] = Pms1232abMonthlyPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = Pms1232abMonthlyPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = Pms1232abMonthlyPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->machine_no = $rs->getString($startcol + 2);

			$this->drain_system = $rs->getInt($startcol + 3);

			$this->electrical_system = $rs->getInt($startcol + 4);

			$this->hoses_connectors = $rs->getInt($startcol + 5);

			$this->initial = $rs->getString($startcol + 6);

			$this->remark = $rs->getString($startcol + 7);

			$this->created_by = $rs->getString($startcol + 8);

			$this->date_created = $rs->getTimestamp($startcol + 9, null);

			$this->modified_by = $rs->getInt($startcol + 10);

			$this->date_modified = $rs->getTimestamp($startcol + 11, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 12; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Pms1232abMonthly object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Pms1232abMonthlyPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			Pms1232abMonthlyPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(Pms1232abMonthlyPeer::DATABASE_NAME);
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
					$pk = Pms1232abMonthlyPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += Pms1232abMonthlyPeer::doUpdate($this, $con);
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


			if (($retval = Pms1232abMonthlyPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Pms1232abMonthlyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDrainSystem();
				break;
			case 4:
				return $this->getElectricalSystem();
				break;
			case 5:
				return $this->getHosesConnectors();
				break;
			case 6:
				return $this->getInitial();
				break;
			case 7:
				return $this->getRemark();
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
		$keys = Pms1232abMonthlyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getMachineNo(),
			$keys[3] => $this->getDrainSystem(),
			$keys[4] => $this->getElectricalSystem(),
			$keys[5] => $this->getHosesConnectors(),
			$keys[6] => $this->getInitial(),
			$keys[7] => $this->getRemark(),
			$keys[8] => $this->getCreatedBy(),
			$keys[9] => $this->getDateCreated(),
			$keys[10] => $this->getModifiedBy(),
			$keys[11] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Pms1232abMonthlyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDrainSystem($value);
				break;
			case 4:
				$this->setElectricalSystem($value);
				break;
			case 5:
				$this->setHosesConnectors($value);
				break;
			case 6:
				$this->setInitial($value);
				break;
			case 7:
				$this->setRemark($value);
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
		$keys = Pms1232abMonthlyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMachineNo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDrainSystem($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setElectricalSystem($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setHosesConnectors($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setInitial($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setRemark($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCreatedBy($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateCreated($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setModifiedBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDateModified($arr[$keys[11]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(Pms1232abMonthlyPeer::DATABASE_NAME);

		if ($this->isColumnModified(Pms1232abMonthlyPeer::ID)) $criteria->add(Pms1232abMonthlyPeer::ID, $this->id);
		if ($this->isColumnModified(Pms1232abMonthlyPeer::TRANS_DATE)) $criteria->add(Pms1232abMonthlyPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(Pms1232abMonthlyPeer::MACHINE_NO)) $criteria->add(Pms1232abMonthlyPeer::MACHINE_NO, $this->machine_no);
		if ($this->isColumnModified(Pms1232abMonthlyPeer::DRAIN_SYSTEM)) $criteria->add(Pms1232abMonthlyPeer::DRAIN_SYSTEM, $this->drain_system);
		if ($this->isColumnModified(Pms1232abMonthlyPeer::ELECTRICAL_SYSTEM)) $criteria->add(Pms1232abMonthlyPeer::ELECTRICAL_SYSTEM, $this->electrical_system);
		if ($this->isColumnModified(Pms1232abMonthlyPeer::HOSES_CONNECTORS)) $criteria->add(Pms1232abMonthlyPeer::HOSES_CONNECTORS, $this->hoses_connectors);
		if ($this->isColumnModified(Pms1232abMonthlyPeer::INITIAL)) $criteria->add(Pms1232abMonthlyPeer::INITIAL, $this->initial);
		if ($this->isColumnModified(Pms1232abMonthlyPeer::REMARK)) $criteria->add(Pms1232abMonthlyPeer::REMARK, $this->remark);
		if ($this->isColumnModified(Pms1232abMonthlyPeer::CREATED_BY)) $criteria->add(Pms1232abMonthlyPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(Pms1232abMonthlyPeer::DATE_CREATED)) $criteria->add(Pms1232abMonthlyPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(Pms1232abMonthlyPeer::MODIFIED_BY)) $criteria->add(Pms1232abMonthlyPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(Pms1232abMonthlyPeer::DATE_MODIFIED)) $criteria->add(Pms1232abMonthlyPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(Pms1232abMonthlyPeer::DATABASE_NAME);

		$criteria->add(Pms1232abMonthlyPeer::ID, $this->id);

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

		$copyObj->setDrainSystem($this->drain_system);

		$copyObj->setElectricalSystem($this->electrical_system);

		$copyObj->setHosesConnectors($this->hoses_connectors);

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
			self::$peer = new Pms1232abMonthlyPeer();
		}
		return self::$peer;
	}

} 
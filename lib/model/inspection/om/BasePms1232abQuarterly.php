<?php


abstract class BasePms1232abQuarterly extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $machine_no;


	
	protected $quarter;


	
	protected $date_completed;


	
	protected $due_date;


	
	protected $cda_filter = 0;


	
	protected $di_water_filter = 0;


	
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

	
	public function getQuarter()
	{

		return $this->quarter;
	}

	
	public function getDateCompleted($format = 'Y-m-d')
	{

		if ($this->date_completed === null || $this->date_completed === '') {
			return null;
		} elseif (!is_int($this->date_completed)) {
						$ts = strtotime($this->date_completed);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_completed] as date/time value: " . var_export($this->date_completed, true));
			}
		} else {
			$ts = $this->date_completed;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDueDate($format = 'Y-m-d')
	{

		if ($this->due_date === null || $this->due_date === '') {
			return null;
		} elseif (!is_int($this->due_date)) {
						$ts = strtotime($this->due_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [due_date] as date/time value: " . var_export($this->due_date, true));
			}
		} else {
			$ts = $this->due_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCdaFilter()
	{

		return $this->cda_filter;
	}

	
	public function getDiWaterFilter()
	{

		return $this->di_water_filter;
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
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::ID;
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
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::TRANS_DATE;
		}

	} 
	
	public function setMachineNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_no !== $v) {
			$this->machine_no = $v;
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::MACHINE_NO;
		}

	} 
	
	public function setQuarter($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->quarter !== $v) {
			$this->quarter = $v;
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::QUARTER;
		}

	} 
	
	public function setDateCompleted($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_completed] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_completed !== $ts) {
			$this->date_completed = $ts;
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::DATE_COMPLETED;
		}

	} 
	
	public function setDueDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [due_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->due_date !== $ts) {
			$this->due_date = $ts;
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::DUE_DATE;
		}

	} 
	
	public function setCdaFilter($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cda_filter !== $v || $v === 0) {
			$this->cda_filter = $v;
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::CDA_FILTER;
		}

	} 
	
	public function setDiWaterFilter($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->di_water_filter !== $v || $v === 0) {
			$this->di_water_filter = $v;
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::DI_WATER_FILTER;
		}

	} 
	
	public function setInitial($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initial !== $v) {
			$this->initial = $v;
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::INITIAL;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::REMARK;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::CREATED_BY;
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
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = Pms1232abQuarterlyPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->machine_no = $rs->getString($startcol + 2);

			$this->quarter = $rs->getString($startcol + 3);

			$this->date_completed = $rs->getDate($startcol + 4, null);

			$this->due_date = $rs->getDate($startcol + 5, null);

			$this->cda_filter = $rs->getInt($startcol + 6);

			$this->di_water_filter = $rs->getInt($startcol + 7);

			$this->initial = $rs->getString($startcol + 8);

			$this->remark = $rs->getString($startcol + 9);

			$this->created_by = $rs->getString($startcol + 10);

			$this->date_created = $rs->getTimestamp($startcol + 11, null);

			$this->modified_by = $rs->getString($startcol + 12);

			$this->date_modified = $rs->getTimestamp($startcol + 13, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 14; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Pms1232abQuarterly object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Pms1232abQuarterlyPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			Pms1232abQuarterlyPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(Pms1232abQuarterlyPeer::DATABASE_NAME);
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
					$pk = Pms1232abQuarterlyPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += Pms1232abQuarterlyPeer::doUpdate($this, $con);
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


			if (($retval = Pms1232abQuarterlyPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Pms1232abQuarterlyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getQuarter();
				break;
			case 4:
				return $this->getDateCompleted();
				break;
			case 5:
				return $this->getDueDate();
				break;
			case 6:
				return $this->getCdaFilter();
				break;
			case 7:
				return $this->getDiWaterFilter();
				break;
			case 8:
				return $this->getInitial();
				break;
			case 9:
				return $this->getRemark();
				break;
			case 10:
				return $this->getCreatedBy();
				break;
			case 11:
				return $this->getDateCreated();
				break;
			case 12:
				return $this->getModifiedBy();
				break;
			case 13:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = Pms1232abQuarterlyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getMachineNo(),
			$keys[3] => $this->getQuarter(),
			$keys[4] => $this->getDateCompleted(),
			$keys[5] => $this->getDueDate(),
			$keys[6] => $this->getCdaFilter(),
			$keys[7] => $this->getDiWaterFilter(),
			$keys[8] => $this->getInitial(),
			$keys[9] => $this->getRemark(),
			$keys[10] => $this->getCreatedBy(),
			$keys[11] => $this->getDateCreated(),
			$keys[12] => $this->getModifiedBy(),
			$keys[13] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Pms1232abQuarterlyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setQuarter($value);
				break;
			case 4:
				$this->setDateCompleted($value);
				break;
			case 5:
				$this->setDueDate($value);
				break;
			case 6:
				$this->setCdaFilter($value);
				break;
			case 7:
				$this->setDiWaterFilter($value);
				break;
			case 8:
				$this->setInitial($value);
				break;
			case 9:
				$this->setRemark($value);
				break;
			case 10:
				$this->setCreatedBy($value);
				break;
			case 11:
				$this->setDateCreated($value);
				break;
			case 12:
				$this->setModifiedBy($value);
				break;
			case 13:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = Pms1232abQuarterlyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMachineNo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setQuarter($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDateCompleted($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDueDate($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCdaFilter($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDiWaterFilter($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setInitial($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setRemark($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCreatedBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDateCreated($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setModifiedBy($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDateModified($arr[$keys[13]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(Pms1232abQuarterlyPeer::DATABASE_NAME);

		if ($this->isColumnModified(Pms1232abQuarterlyPeer::ID)) $criteria->add(Pms1232abQuarterlyPeer::ID, $this->id);
		if ($this->isColumnModified(Pms1232abQuarterlyPeer::TRANS_DATE)) $criteria->add(Pms1232abQuarterlyPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(Pms1232abQuarterlyPeer::MACHINE_NO)) $criteria->add(Pms1232abQuarterlyPeer::MACHINE_NO, $this->machine_no);
		if ($this->isColumnModified(Pms1232abQuarterlyPeer::QUARTER)) $criteria->add(Pms1232abQuarterlyPeer::QUARTER, $this->quarter);
		if ($this->isColumnModified(Pms1232abQuarterlyPeer::DATE_COMPLETED)) $criteria->add(Pms1232abQuarterlyPeer::DATE_COMPLETED, $this->date_completed);
		if ($this->isColumnModified(Pms1232abQuarterlyPeer::DUE_DATE)) $criteria->add(Pms1232abQuarterlyPeer::DUE_DATE, $this->due_date);
		if ($this->isColumnModified(Pms1232abQuarterlyPeer::CDA_FILTER)) $criteria->add(Pms1232abQuarterlyPeer::CDA_FILTER, $this->cda_filter);
		if ($this->isColumnModified(Pms1232abQuarterlyPeer::DI_WATER_FILTER)) $criteria->add(Pms1232abQuarterlyPeer::DI_WATER_FILTER, $this->di_water_filter);
		if ($this->isColumnModified(Pms1232abQuarterlyPeer::INITIAL)) $criteria->add(Pms1232abQuarterlyPeer::INITIAL, $this->initial);
		if ($this->isColumnModified(Pms1232abQuarterlyPeer::REMARK)) $criteria->add(Pms1232abQuarterlyPeer::REMARK, $this->remark);
		if ($this->isColumnModified(Pms1232abQuarterlyPeer::CREATED_BY)) $criteria->add(Pms1232abQuarterlyPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(Pms1232abQuarterlyPeer::DATE_CREATED)) $criteria->add(Pms1232abQuarterlyPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(Pms1232abQuarterlyPeer::MODIFIED_BY)) $criteria->add(Pms1232abQuarterlyPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(Pms1232abQuarterlyPeer::DATE_MODIFIED)) $criteria->add(Pms1232abQuarterlyPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(Pms1232abQuarterlyPeer::DATABASE_NAME);

		$criteria->add(Pms1232abQuarterlyPeer::ID, $this->id);

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

		$copyObj->setQuarter($this->quarter);

		$copyObj->setDateCompleted($this->date_completed);

		$copyObj->setDueDate($this->due_date);

		$copyObj->setCdaFilter($this->cda_filter);

		$copyObj->setDiWaterFilter($this->di_water_filter);

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
			self::$peer = new Pms1232abQuarterlyPeer();
		}
		return self::$peer;
	}

} 
<?php


abstract class BaseHrEmployeeMaster extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $employee_no = 'null';


	
	protected $name = 'null';


	
	protected $company = 'null';


	
	protected $commence_date;


	
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

	
	public function getEmployeeNo()
	{

		return $this->employee_no;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getCompany()
	{

		return $this->company;
	}

	
	public function getCommenceDate($format = 'Y-m-d H:i:s')
	{

		if ($this->commence_date === null || $this->commence_date === '') {
			return null;
		} elseif (!is_int($this->commence_date)) {
						$ts = strtotime($this->commence_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [commence_date] as date/time value: " . var_export($this->commence_date, true));
			}
		} else {
			$ts = $this->commence_date;
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

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = HrEmployeeMasterPeer::ID;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v || $v === 'null') {
			$this->employee_no = $v;
			$this->modifiedColumns[] = HrEmployeeMasterPeer::EMPLOYEE_NO;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = HrEmployeeMasterPeer::NAME;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v || $v === 'null') {
			$this->company = $v;
			$this->modifiedColumns[] = HrEmployeeMasterPeer::COMPANY;
		}

	} 
	
	public function setCommenceDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [commence_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->commence_date !== $ts) {
			$this->commence_date = $ts;
			$this->modifiedColumns[] = HrEmployeeMasterPeer::COMMENCE_DATE;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrEmployeeMasterPeer::CREATED_BY;
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
			$this->modifiedColumns[] = HrEmployeeMasterPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrEmployeeMasterPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HrEmployeeMasterPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->employee_no = $rs->getString($startcol + 1);

			$this->name = $rs->getString($startcol + 2);

			$this->company = $rs->getString($startcol + 3);

			$this->commence_date = $rs->getTimestamp($startcol + 4, null);

			$this->created_by = $rs->getString($startcol + 5);

			$this->date_created = $rs->getTimestamp($startcol + 6, null);

			$this->modified_by = $rs->getString($startcol + 7);

			$this->date_modified = $rs->getTimestamp($startcol + 8, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrEmployeeMaster object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrEmployeeMasterPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrEmployeeMasterPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrEmployeeMasterPeer::DATABASE_NAME);
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
					$pk = HrEmployeeMasterPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrEmployeeMasterPeer::doUpdate($this, $con);
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


			if (($retval = HrEmployeeMasterPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrEmployeeMasterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getEmployeeNo();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getCompany();
				break;
			case 4:
				return $this->getCommenceDate();
				break;
			case 5:
				return $this->getCreatedBy();
				break;
			case 6:
				return $this->getDateCreated();
				break;
			case 7:
				return $this->getModifiedBy();
				break;
			case 8:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrEmployeeMasterPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEmployeeNo(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getCompany(),
			$keys[4] => $this->getCommenceDate(),
			$keys[5] => $this->getCreatedBy(),
			$keys[6] => $this->getDateCreated(),
			$keys[7] => $this->getModifiedBy(),
			$keys[8] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrEmployeeMasterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setEmployeeNo($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setCompany($value);
				break;
			case 4:
				$this->setCommenceDate($value);
				break;
			case 5:
				$this->setCreatedBy($value);
				break;
			case 6:
				$this->setDateCreated($value);
				break;
			case 7:
				$this->setModifiedBy($value);
				break;
			case 8:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrEmployeeMasterPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEmployeeNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCompany($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCommenceDate($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedBy($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateCreated($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setModifiedBy($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateModified($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrEmployeeMasterPeer::DATABASE_NAME);

		if ($this->isColumnModified(HrEmployeeMasterPeer::ID)) $criteria->add(HrEmployeeMasterPeer::ID, $this->id);
		if ($this->isColumnModified(HrEmployeeMasterPeer::EMPLOYEE_NO)) $criteria->add(HrEmployeeMasterPeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(HrEmployeeMasterPeer::NAME)) $criteria->add(HrEmployeeMasterPeer::NAME, $this->name);
		if ($this->isColumnModified(HrEmployeeMasterPeer::COMPANY)) $criteria->add(HrEmployeeMasterPeer::COMPANY, $this->company);
		if ($this->isColumnModified(HrEmployeeMasterPeer::COMMENCE_DATE)) $criteria->add(HrEmployeeMasterPeer::COMMENCE_DATE, $this->commence_date);
		if ($this->isColumnModified(HrEmployeeMasterPeer::CREATED_BY)) $criteria->add(HrEmployeeMasterPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrEmployeeMasterPeer::DATE_CREATED)) $criteria->add(HrEmployeeMasterPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrEmployeeMasterPeer::MODIFIED_BY)) $criteria->add(HrEmployeeMasterPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrEmployeeMasterPeer::DATE_MODIFIED)) $criteria->add(HrEmployeeMasterPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrEmployeeMasterPeer::DATABASE_NAME);

		$criteria->add(HrEmployeeMasterPeer::ID, $this->id);

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

		$copyObj->setEmployeeNo($this->employee_no);

		$copyObj->setName($this->name);

		$copyObj->setCompany($this->company);

		$copyObj->setCommenceDate($this->commence_date);

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
			self::$peer = new HrEmployeeMasterPeer();
		}
		return self::$peer;
	}

} 
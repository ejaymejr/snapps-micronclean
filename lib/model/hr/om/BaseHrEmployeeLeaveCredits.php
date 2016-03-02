<?php


abstract class BaseHrEmployeeLeaveCredits extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $hr_employee_id;


	
	protected $employee_no;


	
	protected $name;


	
	protected $hr_leave_id;


	
	protected $leave_type;


	
	protected $credits = 0;


	
	protected $consumed = 0;


	
	protected $previous_balance = 0;


	
	protected $fiscal_year;


	
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

	
	public function getHrEmployeeId()
	{

		return $this->hr_employee_id;
	}

	
	public function getEmployeeNo()
	{

		return $this->employee_no;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getHrLeaveId()
	{

		return $this->hr_leave_id;
	}

	
	public function getLeaveType()
	{

		return $this->leave_type;
	}

	
	public function getCredits()
	{

		return $this->credits;
	}

	
	public function getConsumed()
	{

		return $this->consumed;
	}

	
	public function getPreviousBalance()
	{

		return $this->previous_balance;
	}

	
	public function getFiscalYear()
	{

		return $this->fiscal_year;
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
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::ID;
		}

	} 
	
	public function setHrEmployeeId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hr_employee_id !== $v) {
			$this->hr_employee_id = $v;
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::HR_EMPLOYEE_ID;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v) {
			$this->employee_no = $v;
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::EMPLOYEE_NO;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::NAME;
		}

	} 
	
	public function setHrLeaveId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hr_leave_id !== $v) {
			$this->hr_leave_id = $v;
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::HR_LEAVE_ID;
		}

	} 
	
	public function setLeaveType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->leave_type !== $v) {
			$this->leave_type = $v;
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::LEAVE_TYPE;
		}

	} 
	
	public function setCredits($v)
	{

		if ($this->credits !== $v || $v === 0) {
			$this->credits = $v;
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::CREDITS;
		}

	} 
	
	public function setConsumed($v)
	{

		if ($this->consumed !== $v || $v === 0) {
			$this->consumed = $v;
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::CONSUMED;
		}

	} 
	
	public function setPreviousBalance($v)
	{

		if ($this->previous_balance !== $v || $v === 0) {
			$this->previous_balance = $v;
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::PREVIOUS_BALANCE;
		}

	} 
	
	public function setFiscalYear($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fiscal_year !== $v) {
			$this->fiscal_year = $v;
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::FISCAL_YEAR;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::CREATED_BY;
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
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HrEmployeeLeaveCreditsPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->hr_employee_id = $rs->getString($startcol + 1);

			$this->employee_no = $rs->getString($startcol + 2);

			$this->name = $rs->getString($startcol + 3);

			$this->hr_leave_id = $rs->getString($startcol + 4);

			$this->leave_type = $rs->getString($startcol + 5);

			$this->credits = $rs->getFloat($startcol + 6);

			$this->consumed = $rs->getFloat($startcol + 7);

			$this->previous_balance = $rs->getFloat($startcol + 8);

			$this->fiscal_year = $rs->getString($startcol + 9);

			$this->created_by = $rs->getString($startcol + 10);

			$this->date_created = $rs->getTimestamp($startcol + 11, null);

			$this->modified_by = $rs->getString($startcol + 12);

			$this->date_modified = $rs->getTimestamp($startcol + 13, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 14; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrEmployeeLeaveCredits object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrEmployeeLeaveCreditsPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrEmployeeLeaveCreditsPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrEmployeeLeaveCreditsPeer::DATABASE_NAME);
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
					$pk = HrEmployeeLeaveCreditsPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrEmployeeLeaveCreditsPeer::doUpdate($this, $con);
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


			if (($retval = HrEmployeeLeaveCreditsPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrEmployeeLeaveCreditsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getHrEmployeeId();
				break;
			case 2:
				return $this->getEmployeeNo();
				break;
			case 3:
				return $this->getName();
				break;
			case 4:
				return $this->getHrLeaveId();
				break;
			case 5:
				return $this->getLeaveType();
				break;
			case 6:
				return $this->getCredits();
				break;
			case 7:
				return $this->getConsumed();
				break;
			case 8:
				return $this->getPreviousBalance();
				break;
			case 9:
				return $this->getFiscalYear();
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
		$keys = HrEmployeeLeaveCreditsPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getHrEmployeeId(),
			$keys[2] => $this->getEmployeeNo(),
			$keys[3] => $this->getName(),
			$keys[4] => $this->getHrLeaveId(),
			$keys[5] => $this->getLeaveType(),
			$keys[6] => $this->getCredits(),
			$keys[7] => $this->getConsumed(),
			$keys[8] => $this->getPreviousBalance(),
			$keys[9] => $this->getFiscalYear(),
			$keys[10] => $this->getCreatedBy(),
			$keys[11] => $this->getDateCreated(),
			$keys[12] => $this->getModifiedBy(),
			$keys[13] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrEmployeeLeaveCreditsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setHrEmployeeId($value);
				break;
			case 2:
				$this->setEmployeeNo($value);
				break;
			case 3:
				$this->setName($value);
				break;
			case 4:
				$this->setHrLeaveId($value);
				break;
			case 5:
				$this->setLeaveType($value);
				break;
			case 6:
				$this->setCredits($value);
				break;
			case 7:
				$this->setConsumed($value);
				break;
			case 8:
				$this->setPreviousBalance($value);
				break;
			case 9:
				$this->setFiscalYear($value);
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
		$keys = HrEmployeeLeaveCreditsPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setHrEmployeeId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setEmployeeNo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setHrLeaveId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLeaveType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCredits($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setConsumed($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPreviousBalance($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFiscalYear($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCreatedBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDateCreated($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setModifiedBy($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDateModified($arr[$keys[13]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrEmployeeLeaveCreditsPeer::DATABASE_NAME);

		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::ID)) $criteria->add(HrEmployeeLeaveCreditsPeer::ID, $this->id);
		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::HR_EMPLOYEE_ID)) $criteria->add(HrEmployeeLeaveCreditsPeer::HR_EMPLOYEE_ID, $this->hr_employee_id);
		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::EMPLOYEE_NO)) $criteria->add(HrEmployeeLeaveCreditsPeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::NAME)) $criteria->add(HrEmployeeLeaveCreditsPeer::NAME, $this->name);
		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::HR_LEAVE_ID)) $criteria->add(HrEmployeeLeaveCreditsPeer::HR_LEAVE_ID, $this->hr_leave_id);
		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::LEAVE_TYPE)) $criteria->add(HrEmployeeLeaveCreditsPeer::LEAVE_TYPE, $this->leave_type);
		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::CREDITS)) $criteria->add(HrEmployeeLeaveCreditsPeer::CREDITS, $this->credits);
		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::CONSUMED)) $criteria->add(HrEmployeeLeaveCreditsPeer::CONSUMED, $this->consumed);
		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::PREVIOUS_BALANCE)) $criteria->add(HrEmployeeLeaveCreditsPeer::PREVIOUS_BALANCE, $this->previous_balance);
		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::FISCAL_YEAR)) $criteria->add(HrEmployeeLeaveCreditsPeer::FISCAL_YEAR, $this->fiscal_year);
		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::CREATED_BY)) $criteria->add(HrEmployeeLeaveCreditsPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::DATE_CREATED)) $criteria->add(HrEmployeeLeaveCreditsPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::MODIFIED_BY)) $criteria->add(HrEmployeeLeaveCreditsPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrEmployeeLeaveCreditsPeer::DATE_MODIFIED)) $criteria->add(HrEmployeeLeaveCreditsPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrEmployeeLeaveCreditsPeer::DATABASE_NAME);

		$criteria->add(HrEmployeeLeaveCreditsPeer::ID, $this->id);

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

		$copyObj->setHrEmployeeId($this->hr_employee_id);

		$copyObj->setEmployeeNo($this->employee_no);

		$copyObj->setName($this->name);

		$copyObj->setHrLeaveId($this->hr_leave_id);

		$copyObj->setLeaveType($this->leave_type);

		$copyObj->setCredits($this->credits);

		$copyObj->setConsumed($this->consumed);

		$copyObj->setPreviousBalance($this->previous_balance);

		$copyObj->setFiscalYear($this->fiscal_year);

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
			self::$peer = new HrEmployeeLeaveCreditsPeer();
		}
		return self::$peer;
	}

} 
<?php


abstract class BaseContractManagementLog extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $customer;


	
	protected $contract_no;


	
	protected $contact_person;


	
	protected $contact_no;


	
	protected $contract_initiator;


	
	protected $remarks;


	
	protected $start_date;


	
	protected $end_date;


	
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

	
	public function getCustomer()
	{

		return $this->customer;
	}

	
	public function getContractNo()
	{

		return $this->contract_no;
	}

	
	public function getContactPerson()
	{

		return $this->contact_person;
	}

	
	public function getContactNo()
	{

		return $this->contact_no;
	}

	
	public function getContractInitiator()
	{

		return $this->contract_initiator;
	}

	
	public function getRemarks()
	{

		return $this->remarks;
	}

	
	public function getStartDate($format = 'Y-m-d')
	{

		if ($this->start_date === null || $this->start_date === '') {
			return null;
		} elseif (!is_int($this->start_date)) {
						$ts = strtotime($this->start_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [start_date] as date/time value: " . var_export($this->start_date, true));
			}
		} else {
			$ts = $this->start_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getEndDate($format = 'Y-m-d')
	{

		if ($this->end_date === null || $this->end_date === '') {
			return null;
		} elseif (!is_int($this->end_date)) {
						$ts = strtotime($this->end_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [end_date] as date/time value: " . var_export($this->end_date, true));
			}
		} else {
			$ts = $this->end_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
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
			$this->modifiedColumns[] = ContractManagementLogPeer::ID;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v) {
			$this->customer = $v;
			$this->modifiedColumns[] = ContractManagementLogPeer::CUSTOMER;
		}

	} 
	
	public function setContractNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->contract_no !== $v) {
			$this->contract_no = $v;
			$this->modifiedColumns[] = ContractManagementLogPeer::CONTRACT_NO;
		}

	} 
	
	public function setContactPerson($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->contact_person !== $v) {
			$this->contact_person = $v;
			$this->modifiedColumns[] = ContractManagementLogPeer::CONTACT_PERSON;
		}

	} 
	
	public function setContactNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->contact_no !== $v) {
			$this->contact_no = $v;
			$this->modifiedColumns[] = ContractManagementLogPeer::CONTACT_NO;
		}

	} 
	
	public function setContractInitiator($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->contract_initiator !== $v) {
			$this->contract_initiator = $v;
			$this->modifiedColumns[] = ContractManagementLogPeer::CONTRACT_INITIATOR;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = ContractManagementLogPeer::REMARKS;
		}

	} 
	
	public function setStartDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [start_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->start_date !== $ts) {
			$this->start_date = $ts;
			$this->modifiedColumns[] = ContractManagementLogPeer::START_DATE;
		}

	} 
	
	public function setEndDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [end_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->end_date !== $ts) {
			$this->end_date = $ts;
			$this->modifiedColumns[] = ContractManagementLogPeer::END_DATE;
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
			$this->modifiedColumns[] = ContractManagementLogPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = ContractManagementLogPeer::CREATED_BY;
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
			$this->modifiedColumns[] = ContractManagementLogPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = ContractManagementLogPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->customer = $rs->getString($startcol + 1);

			$this->contract_no = $rs->getString($startcol + 2);

			$this->contact_person = $rs->getString($startcol + 3);

			$this->contact_no = $rs->getString($startcol + 4);

			$this->contract_initiator = $rs->getString($startcol + 5);

			$this->remarks = $rs->getString($startcol + 6);

			$this->start_date = $rs->getDate($startcol + 7, null);

			$this->end_date = $rs->getDate($startcol + 8, null);

			$this->date_created = $rs->getTimestamp($startcol + 9, null);

			$this->created_by = $rs->getString($startcol + 10);

			$this->date_modified = $rs->getTimestamp($startcol + 11, null);

			$this->modified_by = $rs->getString($startcol + 12);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 13; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ContractManagementLog object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ContractManagementLogPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ContractManagementLogPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ContractManagementLogPeer::DATABASE_NAME);
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
					$pk = ContractManagementLogPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ContractManagementLogPeer::doUpdate($this, $con);
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


			if (($retval = ContractManagementLogPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ContractManagementLogPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCustomer();
				break;
			case 2:
				return $this->getContractNo();
				break;
			case 3:
				return $this->getContactPerson();
				break;
			case 4:
				return $this->getContactNo();
				break;
			case 5:
				return $this->getContractInitiator();
				break;
			case 6:
				return $this->getRemarks();
				break;
			case 7:
				return $this->getStartDate();
				break;
			case 8:
				return $this->getEndDate();
				break;
			case 9:
				return $this->getDateCreated();
				break;
			case 10:
				return $this->getCreatedBy();
				break;
			case 11:
				return $this->getDateModified();
				break;
			case 12:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ContractManagementLogPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCustomer(),
			$keys[2] => $this->getContractNo(),
			$keys[3] => $this->getContactPerson(),
			$keys[4] => $this->getContactNo(),
			$keys[5] => $this->getContractInitiator(),
			$keys[6] => $this->getRemarks(),
			$keys[7] => $this->getStartDate(),
			$keys[8] => $this->getEndDate(),
			$keys[9] => $this->getDateCreated(),
			$keys[10] => $this->getCreatedBy(),
			$keys[11] => $this->getDateModified(),
			$keys[12] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ContractManagementLogPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCustomer($value);
				break;
			case 2:
				$this->setContractNo($value);
				break;
			case 3:
				$this->setContactPerson($value);
				break;
			case 4:
				$this->setContactNo($value);
				break;
			case 5:
				$this->setContractInitiator($value);
				break;
			case 6:
				$this->setRemarks($value);
				break;
			case 7:
				$this->setStartDate($value);
				break;
			case 8:
				$this->setEndDate($value);
				break;
			case 9:
				$this->setDateCreated($value);
				break;
			case 10:
				$this->setCreatedBy($value);
				break;
			case 11:
				$this->setDateModified($value);
				break;
			case 12:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ContractManagementLogPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCustomer($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setContractNo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setContactPerson($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setContactNo($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setContractInitiator($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setRemarks($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setStartDate($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setEndDate($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateCreated($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCreatedBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDateModified($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setModifiedBy($arr[$keys[12]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ContractManagementLogPeer::DATABASE_NAME);

		if ($this->isColumnModified(ContractManagementLogPeer::ID)) $criteria->add(ContractManagementLogPeer::ID, $this->id);
		if ($this->isColumnModified(ContractManagementLogPeer::CUSTOMER)) $criteria->add(ContractManagementLogPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(ContractManagementLogPeer::CONTRACT_NO)) $criteria->add(ContractManagementLogPeer::CONTRACT_NO, $this->contract_no);
		if ($this->isColumnModified(ContractManagementLogPeer::CONTACT_PERSON)) $criteria->add(ContractManagementLogPeer::CONTACT_PERSON, $this->contact_person);
		if ($this->isColumnModified(ContractManagementLogPeer::CONTACT_NO)) $criteria->add(ContractManagementLogPeer::CONTACT_NO, $this->contact_no);
		if ($this->isColumnModified(ContractManagementLogPeer::CONTRACT_INITIATOR)) $criteria->add(ContractManagementLogPeer::CONTRACT_INITIATOR, $this->contract_initiator);
		if ($this->isColumnModified(ContractManagementLogPeer::REMARKS)) $criteria->add(ContractManagementLogPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(ContractManagementLogPeer::START_DATE)) $criteria->add(ContractManagementLogPeer::START_DATE, $this->start_date);
		if ($this->isColumnModified(ContractManagementLogPeer::END_DATE)) $criteria->add(ContractManagementLogPeer::END_DATE, $this->end_date);
		if ($this->isColumnModified(ContractManagementLogPeer::DATE_CREATED)) $criteria->add(ContractManagementLogPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(ContractManagementLogPeer::CREATED_BY)) $criteria->add(ContractManagementLogPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(ContractManagementLogPeer::DATE_MODIFIED)) $criteria->add(ContractManagementLogPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(ContractManagementLogPeer::MODIFIED_BY)) $criteria->add(ContractManagementLogPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ContractManagementLogPeer::DATABASE_NAME);

		$criteria->add(ContractManagementLogPeer::ID, $this->id);

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

		$copyObj->setCustomer($this->customer);

		$copyObj->setContractNo($this->contract_no);

		$copyObj->setContactPerson($this->contact_person);

		$copyObj->setContactNo($this->contact_no);

		$copyObj->setContractInitiator($this->contract_initiator);

		$copyObj->setRemarks($this->remarks);

		$copyObj->setStartDate($this->start_date);

		$copyObj->setEndDate($this->end_date);

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
			self::$peer = new ContractManagementLogPeer();
		}
		return self::$peer;
	}

} 
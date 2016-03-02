<?php


abstract class BaseEmailToDept extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $email_address = 'null';


	
	protected $company = 'null';


	
	protected $department = 'null';


	
	protected $shift = 'null';


	
	protected $date_created;


	
	protected $created_by = 'null';


	
	protected $date_modified;


	
	protected $modified_by = 'null';


	
	protected $designation = 'null';

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getEmailAddress()
	{

		return $this->email_address;
	}

	
	public function getCompany()
	{

		return $this->company;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getShift()
	{

		return $this->shift;
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

	
	public function getDesignation()
	{

		return $this->designation;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = EmailToDeptPeer::ID;
		}

	} 
	
	public function setEmailAddress($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email_address !== $v || $v === 'null') {
			$this->email_address = $v;
			$this->modifiedColumns[] = EmailToDeptPeer::EMAIL_ADDRESS;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v || $v === 'null') {
			$this->company = $v;
			$this->modifiedColumns[] = EmailToDeptPeer::COMPANY;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = EmailToDeptPeer::DEPARTMENT;
		}

	} 
	
	public function setShift($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shift !== $v || $v === 'null') {
			$this->shift = $v;
			$this->modifiedColumns[] = EmailToDeptPeer::SHIFT;
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
			$this->modifiedColumns[] = EmailToDeptPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = EmailToDeptPeer::CREATED_BY;
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
			$this->modifiedColumns[] = EmailToDeptPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = EmailToDeptPeer::MODIFIED_BY;
		}

	} 
	
	public function setDesignation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->designation !== $v || $v === 'null') {
			$this->designation = $v;
			$this->modifiedColumns[] = EmailToDeptPeer::DESIGNATION;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->email_address = $rs->getString($startcol + 1);

			$this->company = $rs->getString($startcol + 2);

			$this->department = $rs->getString($startcol + 3);

			$this->shift = $rs->getString($startcol + 4);

			$this->date_created = $rs->getTimestamp($startcol + 5, null);

			$this->created_by = $rs->getString($startcol + 6);

			$this->date_modified = $rs->getTimestamp($startcol + 7, null);

			$this->modified_by = $rs->getString($startcol + 8);

			$this->designation = $rs->getString($startcol + 9);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating EmailToDept object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(EmailToDeptPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			EmailToDeptPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(EmailToDeptPeer::DATABASE_NAME);
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
					$pk = EmailToDeptPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += EmailToDeptPeer::doUpdate($this, $con);
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


			if (($retval = EmailToDeptPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = EmailToDeptPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getEmailAddress();
				break;
			case 2:
				return $this->getCompany();
				break;
			case 3:
				return $this->getDepartment();
				break;
			case 4:
				return $this->getShift();
				break;
			case 5:
				return $this->getDateCreated();
				break;
			case 6:
				return $this->getCreatedBy();
				break;
			case 7:
				return $this->getDateModified();
				break;
			case 8:
				return $this->getModifiedBy();
				break;
			case 9:
				return $this->getDesignation();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = EmailToDeptPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEmailAddress(),
			$keys[2] => $this->getCompany(),
			$keys[3] => $this->getDepartment(),
			$keys[4] => $this->getShift(),
			$keys[5] => $this->getDateCreated(),
			$keys[6] => $this->getCreatedBy(),
			$keys[7] => $this->getDateModified(),
			$keys[8] => $this->getModifiedBy(),
			$keys[9] => $this->getDesignation(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = EmailToDeptPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setEmailAddress($value);
				break;
			case 2:
				$this->setCompany($value);
				break;
			case 3:
				$this->setDepartment($value);
				break;
			case 4:
				$this->setShift($value);
				break;
			case 5:
				$this->setDateCreated($value);
				break;
			case 6:
				$this->setCreatedBy($value);
				break;
			case 7:
				$this->setDateModified($value);
				break;
			case 8:
				$this->setModifiedBy($value);
				break;
			case 9:
				$this->setDesignation($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = EmailToDeptPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEmailAddress($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCompany($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDepartment($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setShift($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDateCreated($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedBy($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDateModified($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setModifiedBy($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDesignation($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(EmailToDeptPeer::DATABASE_NAME);

		if ($this->isColumnModified(EmailToDeptPeer::ID)) $criteria->add(EmailToDeptPeer::ID, $this->id);
		if ($this->isColumnModified(EmailToDeptPeer::EMAIL_ADDRESS)) $criteria->add(EmailToDeptPeer::EMAIL_ADDRESS, $this->email_address);
		if ($this->isColumnModified(EmailToDeptPeer::COMPANY)) $criteria->add(EmailToDeptPeer::COMPANY, $this->company);
		if ($this->isColumnModified(EmailToDeptPeer::DEPARTMENT)) $criteria->add(EmailToDeptPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(EmailToDeptPeer::SHIFT)) $criteria->add(EmailToDeptPeer::SHIFT, $this->shift);
		if ($this->isColumnModified(EmailToDeptPeer::DATE_CREATED)) $criteria->add(EmailToDeptPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(EmailToDeptPeer::CREATED_BY)) $criteria->add(EmailToDeptPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(EmailToDeptPeer::DATE_MODIFIED)) $criteria->add(EmailToDeptPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(EmailToDeptPeer::MODIFIED_BY)) $criteria->add(EmailToDeptPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(EmailToDeptPeer::DESIGNATION)) $criteria->add(EmailToDeptPeer::DESIGNATION, $this->designation);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(EmailToDeptPeer::DATABASE_NAME);

		$criteria->add(EmailToDeptPeer::ID, $this->id);

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

		$copyObj->setEmailAddress($this->email_address);

		$copyObj->setCompany($this->company);

		$copyObj->setDepartment($this->department);

		$copyObj->setShift($this->shift);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateModified($this->date_modified);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDesignation($this->designation);


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
			self::$peer = new EmailToDeptPeer();
		}
		return self::$peer;
	}

} 
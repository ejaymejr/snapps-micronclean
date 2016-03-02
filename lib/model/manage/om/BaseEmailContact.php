<?php


abstract class BaseEmailContact extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $email_address = 'null';


	
	protected $website = 'null';


	
	protected $company = 'null';


	
	protected $department = 'null';


	
	protected $shift = 'null';


	
	protected $date_created;


	
	protected $created_by = 'null';


	
	protected $date_modified;


	
	protected $modified_by = 'null';


	
	protected $designation = 'null';


	
	protected $mobile = 'null';

	
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

	
	public function getWebsite()
	{

		return $this->website;
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

	
	public function getMobile()
	{

		return $this->mobile;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = EmailContactPeer::ID;
		}

	} 
	
	public function setEmailAddress($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email_address !== $v || $v === 'null') {
			$this->email_address = $v;
			$this->modifiedColumns[] = EmailContactPeer::EMAIL_ADDRESS;
		}

	} 
	
	public function setWebsite($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->website !== $v || $v === 'null') {
			$this->website = $v;
			$this->modifiedColumns[] = EmailContactPeer::WEBSITE;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v || $v === 'null') {
			$this->company = $v;
			$this->modifiedColumns[] = EmailContactPeer::COMPANY;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = EmailContactPeer::DEPARTMENT;
		}

	} 
	
	public function setShift($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shift !== $v || $v === 'null') {
			$this->shift = $v;
			$this->modifiedColumns[] = EmailContactPeer::SHIFT;
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
			$this->modifiedColumns[] = EmailContactPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = EmailContactPeer::CREATED_BY;
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
			$this->modifiedColumns[] = EmailContactPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = EmailContactPeer::MODIFIED_BY;
		}

	} 
	
	public function setDesignation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->designation !== $v || $v === 'null') {
			$this->designation = $v;
			$this->modifiedColumns[] = EmailContactPeer::DESIGNATION;
		}

	} 
	
	public function setMobile($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mobile !== $v || $v === 'null') {
			$this->mobile = $v;
			$this->modifiedColumns[] = EmailContactPeer::MOBILE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->email_address = $rs->getString($startcol + 1);

			$this->website = $rs->getString($startcol + 2);

			$this->company = $rs->getString($startcol + 3);

			$this->department = $rs->getString($startcol + 4);

			$this->shift = $rs->getString($startcol + 5);

			$this->date_created = $rs->getTimestamp($startcol + 6, null);

			$this->created_by = $rs->getString($startcol + 7);

			$this->date_modified = $rs->getTimestamp($startcol + 8, null);

			$this->modified_by = $rs->getString($startcol + 9);

			$this->designation = $rs->getString($startcol + 10);

			$this->mobile = $rs->getString($startcol + 11);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 12; 
		} catch (Exception $e) {
			throw new PropelException("Error populating EmailContact object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(EmailContactPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			EmailContactPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(EmailContactPeer::DATABASE_NAME);
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
					$pk = EmailContactPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += EmailContactPeer::doUpdate($this, $con);
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


			if (($retval = EmailContactPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = EmailContactPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getWebsite();
				break;
			case 3:
				return $this->getCompany();
				break;
			case 4:
				return $this->getDepartment();
				break;
			case 5:
				return $this->getShift();
				break;
			case 6:
				return $this->getDateCreated();
				break;
			case 7:
				return $this->getCreatedBy();
				break;
			case 8:
				return $this->getDateModified();
				break;
			case 9:
				return $this->getModifiedBy();
				break;
			case 10:
				return $this->getDesignation();
				break;
			case 11:
				return $this->getMobile();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = EmailContactPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEmailAddress(),
			$keys[2] => $this->getWebsite(),
			$keys[3] => $this->getCompany(),
			$keys[4] => $this->getDepartment(),
			$keys[5] => $this->getShift(),
			$keys[6] => $this->getDateCreated(),
			$keys[7] => $this->getCreatedBy(),
			$keys[8] => $this->getDateModified(),
			$keys[9] => $this->getModifiedBy(),
			$keys[10] => $this->getDesignation(),
			$keys[11] => $this->getMobile(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = EmailContactPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setWebsite($value);
				break;
			case 3:
				$this->setCompany($value);
				break;
			case 4:
				$this->setDepartment($value);
				break;
			case 5:
				$this->setShift($value);
				break;
			case 6:
				$this->setDateCreated($value);
				break;
			case 7:
				$this->setCreatedBy($value);
				break;
			case 8:
				$this->setDateModified($value);
				break;
			case 9:
				$this->setModifiedBy($value);
				break;
			case 10:
				$this->setDesignation($value);
				break;
			case 11:
				$this->setMobile($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = EmailContactPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEmailAddress($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setWebsite($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCompany($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDepartment($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setShift($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateCreated($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedBy($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateModified($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setModifiedBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDesignation($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setMobile($arr[$keys[11]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(EmailContactPeer::DATABASE_NAME);

		if ($this->isColumnModified(EmailContactPeer::ID)) $criteria->add(EmailContactPeer::ID, $this->id);
		if ($this->isColumnModified(EmailContactPeer::EMAIL_ADDRESS)) $criteria->add(EmailContactPeer::EMAIL_ADDRESS, $this->email_address);
		if ($this->isColumnModified(EmailContactPeer::WEBSITE)) $criteria->add(EmailContactPeer::WEBSITE, $this->website);
		if ($this->isColumnModified(EmailContactPeer::COMPANY)) $criteria->add(EmailContactPeer::COMPANY, $this->company);
		if ($this->isColumnModified(EmailContactPeer::DEPARTMENT)) $criteria->add(EmailContactPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(EmailContactPeer::SHIFT)) $criteria->add(EmailContactPeer::SHIFT, $this->shift);
		if ($this->isColumnModified(EmailContactPeer::DATE_CREATED)) $criteria->add(EmailContactPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(EmailContactPeer::CREATED_BY)) $criteria->add(EmailContactPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(EmailContactPeer::DATE_MODIFIED)) $criteria->add(EmailContactPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(EmailContactPeer::MODIFIED_BY)) $criteria->add(EmailContactPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(EmailContactPeer::DESIGNATION)) $criteria->add(EmailContactPeer::DESIGNATION, $this->designation);
		if ($this->isColumnModified(EmailContactPeer::MOBILE)) $criteria->add(EmailContactPeer::MOBILE, $this->mobile);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(EmailContactPeer::DATABASE_NAME);

		$criteria->add(EmailContactPeer::ID, $this->id);

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

		$copyObj->setWebsite($this->website);

		$copyObj->setCompany($this->company);

		$copyObj->setDepartment($this->department);

		$copyObj->setShift($this->shift);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateModified($this->date_modified);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDesignation($this->designation);

		$copyObj->setMobile($this->mobile);


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
			self::$peer = new EmailContactPeer();
		}
		return self::$peer;
	}

} 
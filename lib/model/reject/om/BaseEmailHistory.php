<?php


abstract class BaseEmailHistory extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $file_detail_id = '0';


	
	protected $email_address = 'null';


	
	protected $email_date;


	
	protected $email_token;


	
	protected $date_created;


	
	protected $created_by = 'null';


	
	protected $date_modified;


	
	protected $modified_by = 'null';

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getFileDetailId()
	{

		return $this->file_detail_id;
	}

	
	public function getEmailAddress()
	{

		return $this->email_address;
	}

	
	public function getEmailDate($format = 'Y-m-d H:i:s')
	{

		if ($this->email_date === null || $this->email_date === '') {
			return null;
		} elseif (!is_int($this->email_date)) {
						$ts = strtotime($this->email_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [email_date] as date/time value: " . var_export($this->email_date, true));
			}
		} else {
			$ts = $this->email_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getEmailToken()
	{

		return $this->email_token;
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
			$this->modifiedColumns[] = EmailHistoryPeer::ID;
		}

	} 
	
	public function setFileDetailId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->file_detail_id !== $v || $v === '0') {
			$this->file_detail_id = $v;
			$this->modifiedColumns[] = EmailHistoryPeer::FILE_DETAIL_ID;
		}

	} 
	
	public function setEmailAddress($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email_address !== $v || $v === 'null') {
			$this->email_address = $v;
			$this->modifiedColumns[] = EmailHistoryPeer::EMAIL_ADDRESS;
		}

	} 
	
	public function setEmailDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [email_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->email_date !== $ts) {
			$this->email_date = $ts;
			$this->modifiedColumns[] = EmailHistoryPeer::EMAIL_DATE;
		}

	} 
	
	public function setEmailToken($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email_token !== $v) {
			$this->email_token = $v;
			$this->modifiedColumns[] = EmailHistoryPeer::EMAIL_TOKEN;
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
			$this->modifiedColumns[] = EmailHistoryPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = EmailHistoryPeer::CREATED_BY;
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
			$this->modifiedColumns[] = EmailHistoryPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = EmailHistoryPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->file_detail_id = $rs->getString($startcol + 1);

			$this->email_address = $rs->getString($startcol + 2);

			$this->email_date = $rs->getTimestamp($startcol + 3, null);

			$this->email_token = $rs->getString($startcol + 4);

			$this->date_created = $rs->getTimestamp($startcol + 5, null);

			$this->created_by = $rs->getString($startcol + 6);

			$this->date_modified = $rs->getTimestamp($startcol + 7, null);

			$this->modified_by = $rs->getString($startcol + 8);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating EmailHistory object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(EmailHistoryPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			EmailHistoryPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(EmailHistoryPeer::DATABASE_NAME);
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
					$pk = EmailHistoryPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += EmailHistoryPeer::doUpdate($this, $con);
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


			if (($retval = EmailHistoryPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = EmailHistoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getFileDetailId();
				break;
			case 2:
				return $this->getEmailAddress();
				break;
			case 3:
				return $this->getEmailDate();
				break;
			case 4:
				return $this->getEmailToken();
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
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = EmailHistoryPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getFileDetailId(),
			$keys[2] => $this->getEmailAddress(),
			$keys[3] => $this->getEmailDate(),
			$keys[4] => $this->getEmailToken(),
			$keys[5] => $this->getDateCreated(),
			$keys[6] => $this->getCreatedBy(),
			$keys[7] => $this->getDateModified(),
			$keys[8] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = EmailHistoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setFileDetailId($value);
				break;
			case 2:
				$this->setEmailAddress($value);
				break;
			case 3:
				$this->setEmailDate($value);
				break;
			case 4:
				$this->setEmailToken($value);
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
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = EmailHistoryPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFileDetailId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setEmailAddress($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEmailDate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEmailToken($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDateCreated($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedBy($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDateModified($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setModifiedBy($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(EmailHistoryPeer::DATABASE_NAME);

		if ($this->isColumnModified(EmailHistoryPeer::ID)) $criteria->add(EmailHistoryPeer::ID, $this->id);
		if ($this->isColumnModified(EmailHistoryPeer::FILE_DETAIL_ID)) $criteria->add(EmailHistoryPeer::FILE_DETAIL_ID, $this->file_detail_id);
		if ($this->isColumnModified(EmailHistoryPeer::EMAIL_ADDRESS)) $criteria->add(EmailHistoryPeer::EMAIL_ADDRESS, $this->email_address);
		if ($this->isColumnModified(EmailHistoryPeer::EMAIL_DATE)) $criteria->add(EmailHistoryPeer::EMAIL_DATE, $this->email_date);
		if ($this->isColumnModified(EmailHistoryPeer::EMAIL_TOKEN)) $criteria->add(EmailHistoryPeer::EMAIL_TOKEN, $this->email_token);
		if ($this->isColumnModified(EmailHistoryPeer::DATE_CREATED)) $criteria->add(EmailHistoryPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(EmailHistoryPeer::CREATED_BY)) $criteria->add(EmailHistoryPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(EmailHistoryPeer::DATE_MODIFIED)) $criteria->add(EmailHistoryPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(EmailHistoryPeer::MODIFIED_BY)) $criteria->add(EmailHistoryPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(EmailHistoryPeer::DATABASE_NAME);

		$criteria->add(EmailHistoryPeer::ID, $this->id);

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

		$copyObj->setFileDetailId($this->file_detail_id);

		$copyObj->setEmailAddress($this->email_address);

		$copyObj->setEmailDate($this->email_date);

		$copyObj->setEmailToken($this->email_token);

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
			self::$peer = new EmailHistoryPeer();
		}
		return self::$peer;
	}

} 
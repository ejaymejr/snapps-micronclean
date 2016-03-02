<?php


abstract class BaseProcessEventNotified extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $process_event_log_id;


	
	protected $name;


	
	protected $email = '';


	
	protected $sms = '';


	
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

	
	public function getProcessEventLogId()
	{

		return $this->process_event_log_id;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getEmail()
	{

		return $this->email;
	}

	
	public function getSms()
	{

		return $this->sms;
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
			$this->modifiedColumns[] = ProcessEventNotifiedPeer::ID;
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
			$this->modifiedColumns[] = ProcessEventNotifiedPeer::TRANS_DATE;
		}

	} 
	
	public function setProcessEventLogId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->process_event_log_id !== $v) {
			$this->process_event_log_id = $v;
			$this->modifiedColumns[] = ProcessEventNotifiedPeer::PROCESS_EVENT_LOG_ID;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = ProcessEventNotifiedPeer::NAME;
		}

	} 
	
	public function setEmail($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v || $v === '') {
			$this->email = $v;
			$this->modifiedColumns[] = ProcessEventNotifiedPeer::EMAIL;
		}

	} 
	
	public function setSms($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sms !== $v || $v === '') {
			$this->sms = $v;
			$this->modifiedColumns[] = ProcessEventNotifiedPeer::SMS;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = ProcessEventNotifiedPeer::CREATED_BY;
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
			$this->modifiedColumns[] = ProcessEventNotifiedPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = ProcessEventNotifiedPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = ProcessEventNotifiedPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->process_event_log_id = $rs->getString($startcol + 2);

			$this->name = $rs->getString($startcol + 3);

			$this->email = $rs->getString($startcol + 4);

			$this->sms = $rs->getString($startcol + 5);

			$this->created_by = $rs->getString($startcol + 6);

			$this->date_created = $rs->getTimestamp($startcol + 7, null);

			$this->modified_by = $rs->getString($startcol + 8);

			$this->date_modified = $rs->getTimestamp($startcol + 9, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ProcessEventNotified object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProcessEventNotifiedPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ProcessEventNotifiedPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ProcessEventNotifiedPeer::DATABASE_NAME);
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
					$pk = ProcessEventNotifiedPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ProcessEventNotifiedPeer::doUpdate($this, $con);
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


			if (($retval = ProcessEventNotifiedPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProcessEventNotifiedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getProcessEventLogId();
				break;
			case 3:
				return $this->getName();
				break;
			case 4:
				return $this->getEmail();
				break;
			case 5:
				return $this->getSms();
				break;
			case 6:
				return $this->getCreatedBy();
				break;
			case 7:
				return $this->getDateCreated();
				break;
			case 8:
				return $this->getModifiedBy();
				break;
			case 9:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProcessEventNotifiedPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getProcessEventLogId(),
			$keys[3] => $this->getName(),
			$keys[4] => $this->getEmail(),
			$keys[5] => $this->getSms(),
			$keys[6] => $this->getCreatedBy(),
			$keys[7] => $this->getDateCreated(),
			$keys[8] => $this->getModifiedBy(),
			$keys[9] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProcessEventNotifiedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setProcessEventLogId($value);
				break;
			case 3:
				$this->setName($value);
				break;
			case 4:
				$this->setEmail($value);
				break;
			case 5:
				$this->setSms($value);
				break;
			case 6:
				$this->setCreatedBy($value);
				break;
			case 7:
				$this->setDateCreated($value);
				break;
			case 8:
				$this->setModifiedBy($value);
				break;
			case 9:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProcessEventNotifiedPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setProcessEventLogId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEmail($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSms($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedBy($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDateCreated($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setModifiedBy($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateModified($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ProcessEventNotifiedPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProcessEventNotifiedPeer::ID)) $criteria->add(ProcessEventNotifiedPeer::ID, $this->id);
		if ($this->isColumnModified(ProcessEventNotifiedPeer::TRANS_DATE)) $criteria->add(ProcessEventNotifiedPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(ProcessEventNotifiedPeer::PROCESS_EVENT_LOG_ID)) $criteria->add(ProcessEventNotifiedPeer::PROCESS_EVENT_LOG_ID, $this->process_event_log_id);
		if ($this->isColumnModified(ProcessEventNotifiedPeer::NAME)) $criteria->add(ProcessEventNotifiedPeer::NAME, $this->name);
		if ($this->isColumnModified(ProcessEventNotifiedPeer::EMAIL)) $criteria->add(ProcessEventNotifiedPeer::EMAIL, $this->email);
		if ($this->isColumnModified(ProcessEventNotifiedPeer::SMS)) $criteria->add(ProcessEventNotifiedPeer::SMS, $this->sms);
		if ($this->isColumnModified(ProcessEventNotifiedPeer::CREATED_BY)) $criteria->add(ProcessEventNotifiedPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(ProcessEventNotifiedPeer::DATE_CREATED)) $criteria->add(ProcessEventNotifiedPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(ProcessEventNotifiedPeer::MODIFIED_BY)) $criteria->add(ProcessEventNotifiedPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(ProcessEventNotifiedPeer::DATE_MODIFIED)) $criteria->add(ProcessEventNotifiedPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProcessEventNotifiedPeer::DATABASE_NAME);

		$criteria->add(ProcessEventNotifiedPeer::ID, $this->id);

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

		$copyObj->setProcessEventLogId($this->process_event_log_id);

		$copyObj->setName($this->name);

		$copyObj->setEmail($this->email);

		$copyObj->setSms($this->sms);

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
			self::$peer = new ProcessEventNotifiedPeer();
		}
		return self::$peer;
	}

} 
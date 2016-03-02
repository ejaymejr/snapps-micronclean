<?php


abstract class BaseSupplierDocumentChangeApprove extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $company = 'null';


	
	protected $review_index_no = 0;


	
	protected $approve_by = 'null';


	
	protected $no_of_email_send = 0;


	
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

	
	public function getDateTime($format = 'Y-m-d H:i:s')
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

	
	public function getCompany()
	{

		return $this->company;
	}

	
	public function getReviewIndexNo()
	{

		return $this->review_index_no;
	}

	
	public function getApproveBy()
	{

		return $this->approve_by;
	}

	
	public function getNoOfEmailSend()
	{

		return $this->no_of_email_send;
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
			$this->modifiedColumns[] = SupplierDocumentChangeApprovePeer::ID;
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
			$this->modifiedColumns[] = SupplierDocumentChangeApprovePeer::DATE_TIME;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v || $v === 'null') {
			$this->company = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeApprovePeer::COMPANY;
		}

	} 
	
	public function setReviewIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->review_index_no !== $v || $v === 0) {
			$this->review_index_no = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeApprovePeer::REVIEW_INDEX_NO;
		}

	} 
	
	public function setApproveBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->approve_by !== $v || $v === 'null') {
			$this->approve_by = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeApprovePeer::APPROVE_BY;
		}

	} 
	
	public function setNoOfEmailSend($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->no_of_email_send !== $v || $v === 0) {
			$this->no_of_email_send = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeApprovePeer::NO_OF_EMAIL_SEND;
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
			$this->modifiedColumns[] = SupplierDocumentChangeApprovePeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeApprovePeer::CREATED_BY;
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
			$this->modifiedColumns[] = SupplierDocumentChangeApprovePeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeApprovePeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->company = $rs->getString($startcol + 2);

			$this->review_index_no = $rs->getInt($startcol + 3);

			$this->approve_by = $rs->getString($startcol + 4);

			$this->no_of_email_send = $rs->getInt($startcol + 5);

			$this->date_created = $rs->getTimestamp($startcol + 6, null);

			$this->created_by = $rs->getString($startcol + 7);

			$this->date_modified = $rs->getTimestamp($startcol + 8, null);

			$this->modified_by = $rs->getString($startcol + 9);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SupplierDocumentChangeApprove object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SupplierDocumentChangeApprovePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SupplierDocumentChangeApprovePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SupplierDocumentChangeApprovePeer::DATABASE_NAME);
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
					$pk = SupplierDocumentChangeApprovePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SupplierDocumentChangeApprovePeer::doUpdate($this, $con);
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


			if (($retval = SupplierDocumentChangeApprovePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SupplierDocumentChangeApprovePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCompany();
				break;
			case 3:
				return $this->getReviewIndexNo();
				break;
			case 4:
				return $this->getApproveBy();
				break;
			case 5:
				return $this->getNoOfEmailSend();
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
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SupplierDocumentChangeApprovePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getCompany(),
			$keys[3] => $this->getReviewIndexNo(),
			$keys[4] => $this->getApproveBy(),
			$keys[5] => $this->getNoOfEmailSend(),
			$keys[6] => $this->getDateCreated(),
			$keys[7] => $this->getCreatedBy(),
			$keys[8] => $this->getDateModified(),
			$keys[9] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SupplierDocumentChangeApprovePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCompany($value);
				break;
			case 3:
				$this->setReviewIndexNo($value);
				break;
			case 4:
				$this->setApproveBy($value);
				break;
			case 5:
				$this->setNoOfEmailSend($value);
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
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SupplierDocumentChangeApprovePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCompany($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setReviewIndexNo($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setApproveBy($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNoOfEmailSend($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateCreated($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedBy($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateModified($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setModifiedBy($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SupplierDocumentChangeApprovePeer::DATABASE_NAME);

		if ($this->isColumnModified(SupplierDocumentChangeApprovePeer::ID)) $criteria->add(SupplierDocumentChangeApprovePeer::ID, $this->id);
		if ($this->isColumnModified(SupplierDocumentChangeApprovePeer::DATE_TIME)) $criteria->add(SupplierDocumentChangeApprovePeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(SupplierDocumentChangeApprovePeer::COMPANY)) $criteria->add(SupplierDocumentChangeApprovePeer::COMPANY, $this->company);
		if ($this->isColumnModified(SupplierDocumentChangeApprovePeer::REVIEW_INDEX_NO)) $criteria->add(SupplierDocumentChangeApprovePeer::REVIEW_INDEX_NO, $this->review_index_no);
		if ($this->isColumnModified(SupplierDocumentChangeApprovePeer::APPROVE_BY)) $criteria->add(SupplierDocumentChangeApprovePeer::APPROVE_BY, $this->approve_by);
		if ($this->isColumnModified(SupplierDocumentChangeApprovePeer::NO_OF_EMAIL_SEND)) $criteria->add(SupplierDocumentChangeApprovePeer::NO_OF_EMAIL_SEND, $this->no_of_email_send);
		if ($this->isColumnModified(SupplierDocumentChangeApprovePeer::DATE_CREATED)) $criteria->add(SupplierDocumentChangeApprovePeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(SupplierDocumentChangeApprovePeer::CREATED_BY)) $criteria->add(SupplierDocumentChangeApprovePeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(SupplierDocumentChangeApprovePeer::DATE_MODIFIED)) $criteria->add(SupplierDocumentChangeApprovePeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(SupplierDocumentChangeApprovePeer::MODIFIED_BY)) $criteria->add(SupplierDocumentChangeApprovePeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SupplierDocumentChangeApprovePeer::DATABASE_NAME);

		$criteria->add(SupplierDocumentChangeApprovePeer::ID, $this->id);

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

		$copyObj->setCompany($this->company);

		$copyObj->setReviewIndexNo($this->review_index_no);

		$copyObj->setApproveBy($this->approve_by);

		$copyObj->setNoOfEmailSend($this->no_of_email_send);

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
			self::$peer = new SupplierDocumentChangeApprovePeer();
		}
		return self::$peer;
	}

} 
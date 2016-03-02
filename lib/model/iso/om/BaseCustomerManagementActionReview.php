<?php


abstract class BaseCustomerManagementActionReview extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $case_action;


	
	protected $reviewed_by;


	
	protected $review_date;


	
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

	
	public function getDateTime($format = 'Y-m-d')
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

	
	public function getCaseAction()
	{

		return $this->case_action;
	}

	
	public function getReviewedBy()
	{

		return $this->reviewed_by;
	}

	
	public function getReviewDate($format = 'Y-m-d')
	{

		if ($this->review_date === null || $this->review_date === '') {
			return null;
		} elseif (!is_int($this->review_date)) {
						$ts = strtotime($this->review_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [review_date] as date/time value: " . var_export($this->review_date, true));
			}
		} else {
			$ts = $this->review_date;
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
			$this->modifiedColumns[] = CustomerManagementActionReviewPeer::ID;
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
			$this->modifiedColumns[] = CustomerManagementActionReviewPeer::DATE_TIME;
		}

	} 
	
	public function setCaseAction($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->case_action !== $v) {
			$this->case_action = $v;
			$this->modifiedColumns[] = CustomerManagementActionReviewPeer::CASE_ACTION;
		}

	} 
	
	public function setReviewedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reviewed_by !== $v) {
			$this->reviewed_by = $v;
			$this->modifiedColumns[] = CustomerManagementActionReviewPeer::REVIEWED_BY;
		}

	} 
	
	public function setReviewDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [review_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->review_date !== $ts) {
			$this->review_date = $ts;
			$this->modifiedColumns[] = CustomerManagementActionReviewPeer::REVIEW_DATE;
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
			$this->modifiedColumns[] = CustomerManagementActionReviewPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = CustomerManagementActionReviewPeer::CREATED_BY;
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
			$this->modifiedColumns[] = CustomerManagementActionReviewPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = CustomerManagementActionReviewPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getDate($startcol + 1, null);

			$this->case_action = $rs->getString($startcol + 2);

			$this->reviewed_by = $rs->getString($startcol + 3);

			$this->review_date = $rs->getDate($startcol + 4, null);

			$this->date_created = $rs->getTimestamp($startcol + 5, null);

			$this->created_by = $rs->getString($startcol + 6);

			$this->date_modified = $rs->getTimestamp($startcol + 7, null);

			$this->modified_by = $rs->getString($startcol + 8);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating CustomerManagementActionReview object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CustomerManagementActionReviewPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CustomerManagementActionReviewPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CustomerManagementActionReviewPeer::DATABASE_NAME);
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
					$pk = CustomerManagementActionReviewPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CustomerManagementActionReviewPeer::doUpdate($this, $con);
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


			if (($retval = CustomerManagementActionReviewPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CustomerManagementActionReviewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCaseAction();
				break;
			case 3:
				return $this->getReviewedBy();
				break;
			case 4:
				return $this->getReviewDate();
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
		$keys = CustomerManagementActionReviewPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getCaseAction(),
			$keys[3] => $this->getReviewedBy(),
			$keys[4] => $this->getReviewDate(),
			$keys[5] => $this->getDateCreated(),
			$keys[6] => $this->getCreatedBy(),
			$keys[7] => $this->getDateModified(),
			$keys[8] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CustomerManagementActionReviewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCaseAction($value);
				break;
			case 3:
				$this->setReviewedBy($value);
				break;
			case 4:
				$this->setReviewDate($value);
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
		$keys = CustomerManagementActionReviewPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCaseAction($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setReviewedBy($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setReviewDate($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDateCreated($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedBy($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDateModified($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setModifiedBy($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CustomerManagementActionReviewPeer::DATABASE_NAME);

		if ($this->isColumnModified(CustomerManagementActionReviewPeer::ID)) $criteria->add(CustomerManagementActionReviewPeer::ID, $this->id);
		if ($this->isColumnModified(CustomerManagementActionReviewPeer::DATE_TIME)) $criteria->add(CustomerManagementActionReviewPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(CustomerManagementActionReviewPeer::CASE_ACTION)) $criteria->add(CustomerManagementActionReviewPeer::CASE_ACTION, $this->case_action);
		if ($this->isColumnModified(CustomerManagementActionReviewPeer::REVIEWED_BY)) $criteria->add(CustomerManagementActionReviewPeer::REVIEWED_BY, $this->reviewed_by);
		if ($this->isColumnModified(CustomerManagementActionReviewPeer::REVIEW_DATE)) $criteria->add(CustomerManagementActionReviewPeer::REVIEW_DATE, $this->review_date);
		if ($this->isColumnModified(CustomerManagementActionReviewPeer::DATE_CREATED)) $criteria->add(CustomerManagementActionReviewPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(CustomerManagementActionReviewPeer::CREATED_BY)) $criteria->add(CustomerManagementActionReviewPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(CustomerManagementActionReviewPeer::DATE_MODIFIED)) $criteria->add(CustomerManagementActionReviewPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(CustomerManagementActionReviewPeer::MODIFIED_BY)) $criteria->add(CustomerManagementActionReviewPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CustomerManagementActionReviewPeer::DATABASE_NAME);

		$criteria->add(CustomerManagementActionReviewPeer::ID, $this->id);

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

		$copyObj->setCaseAction($this->case_action);

		$copyObj->setReviewedBy($this->reviewed_by);

		$copyObj->setReviewDate($this->review_date);

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
			self::$peer = new CustomerManagementActionReviewPeer();
		}
		return self::$peer;
	}

} 
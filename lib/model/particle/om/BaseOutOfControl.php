<?php


abstract class BaseOutOfControl extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $observation;


	
	protected $investigate_by = 'null';


	
	protected $prop_action;


	
	protected $review_by = 'null';


	
	protected $user_id = 'null';


	
	protected $created_by = 'null';


	
	protected $date_created;


	
	protected $modified_by = 'null';


	
	protected $date_modified;

	
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

	
	public function getObservation()
	{

		return $this->observation;
	}

	
	public function getInvestigateBy()
	{

		return $this->investigate_by;
	}

	
	public function getPropAction()
	{

		return $this->prop_action;
	}

	
	public function getReviewBy()
	{

		return $this->review_by;
	}

	
	public function getUserId()
	{

		return $this->user_id;
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
			$this->modifiedColumns[] = OutOfControlPeer::ID;
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
			$this->modifiedColumns[] = OutOfControlPeer::DATE_TIME;
		}

	} 
	
	public function setObservation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->observation !== $v) {
			$this->observation = $v;
			$this->modifiedColumns[] = OutOfControlPeer::OBSERVATION;
		}

	} 
	
	public function setInvestigateBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->investigate_by !== $v || $v === 'null') {
			$this->investigate_by = $v;
			$this->modifiedColumns[] = OutOfControlPeer::INVESTIGATE_BY;
		}

	} 
	
	public function setPropAction($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->prop_action !== $v) {
			$this->prop_action = $v;
			$this->modifiedColumns[] = OutOfControlPeer::PROP_ACTION;
		}

	} 
	
	public function setReviewBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->review_by !== $v || $v === 'null') {
			$this->review_by = $v;
			$this->modifiedColumns[] = OutOfControlPeer::REVIEW_BY;
		}

	} 
	
	public function setUserId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->user_id !== $v || $v === 'null') {
			$this->user_id = $v;
			$this->modifiedColumns[] = OutOfControlPeer::USER_ID;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = OutOfControlPeer::CREATED_BY;
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
			$this->modifiedColumns[] = OutOfControlPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = OutOfControlPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = OutOfControlPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getDate($startcol + 1, null);

			$this->observation = $rs->getString($startcol + 2);

			$this->investigate_by = $rs->getString($startcol + 3);

			$this->prop_action = $rs->getString($startcol + 4);

			$this->review_by = $rs->getString($startcol + 5);

			$this->user_id = $rs->getString($startcol + 6);

			$this->created_by = $rs->getString($startcol + 7);

			$this->date_created = $rs->getTimestamp($startcol + 8, null);

			$this->modified_by = $rs->getString($startcol + 9);

			$this->date_modified = $rs->getTimestamp($startcol + 10, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating OutOfControl object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(OutOfControlPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			OutOfControlPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(OutOfControlPeer::DATABASE_NAME);
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
					$pk = OutOfControlPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += OutOfControlPeer::doUpdate($this, $con);
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


			if (($retval = OutOfControlPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OutOfControlPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getObservation();
				break;
			case 3:
				return $this->getInvestigateBy();
				break;
			case 4:
				return $this->getPropAction();
				break;
			case 5:
				return $this->getReviewBy();
				break;
			case 6:
				return $this->getUserId();
				break;
			case 7:
				return $this->getCreatedBy();
				break;
			case 8:
				return $this->getDateCreated();
				break;
			case 9:
				return $this->getModifiedBy();
				break;
			case 10:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = OutOfControlPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getObservation(),
			$keys[3] => $this->getInvestigateBy(),
			$keys[4] => $this->getPropAction(),
			$keys[5] => $this->getReviewBy(),
			$keys[6] => $this->getUserId(),
			$keys[7] => $this->getCreatedBy(),
			$keys[8] => $this->getDateCreated(),
			$keys[9] => $this->getModifiedBy(),
			$keys[10] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OutOfControlPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setObservation($value);
				break;
			case 3:
				$this->setInvestigateBy($value);
				break;
			case 4:
				$this->setPropAction($value);
				break;
			case 5:
				$this->setReviewBy($value);
				break;
			case 6:
				$this->setUserId($value);
				break;
			case 7:
				$this->setCreatedBy($value);
				break;
			case 8:
				$this->setDateCreated($value);
				break;
			case 9:
				$this->setModifiedBy($value);
				break;
			case 10:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = OutOfControlPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setObservation($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setInvestigateBy($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPropAction($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setReviewBy($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUserId($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedBy($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateCreated($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setModifiedBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateModified($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(OutOfControlPeer::DATABASE_NAME);

		if ($this->isColumnModified(OutOfControlPeer::ID)) $criteria->add(OutOfControlPeer::ID, $this->id);
		if ($this->isColumnModified(OutOfControlPeer::DATE_TIME)) $criteria->add(OutOfControlPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(OutOfControlPeer::OBSERVATION)) $criteria->add(OutOfControlPeer::OBSERVATION, $this->observation);
		if ($this->isColumnModified(OutOfControlPeer::INVESTIGATE_BY)) $criteria->add(OutOfControlPeer::INVESTIGATE_BY, $this->investigate_by);
		if ($this->isColumnModified(OutOfControlPeer::PROP_ACTION)) $criteria->add(OutOfControlPeer::PROP_ACTION, $this->prop_action);
		if ($this->isColumnModified(OutOfControlPeer::REVIEW_BY)) $criteria->add(OutOfControlPeer::REVIEW_BY, $this->review_by);
		if ($this->isColumnModified(OutOfControlPeer::USER_ID)) $criteria->add(OutOfControlPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(OutOfControlPeer::CREATED_BY)) $criteria->add(OutOfControlPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(OutOfControlPeer::DATE_CREATED)) $criteria->add(OutOfControlPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(OutOfControlPeer::MODIFIED_BY)) $criteria->add(OutOfControlPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(OutOfControlPeer::DATE_MODIFIED)) $criteria->add(OutOfControlPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(OutOfControlPeer::DATABASE_NAME);

		$criteria->add(OutOfControlPeer::ID, $this->id);

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

		$copyObj->setObservation($this->observation);

		$copyObj->setInvestigateBy($this->investigate_by);

		$copyObj->setPropAction($this->prop_action);

		$copyObj->setReviewBy($this->review_by);

		$copyObj->setUserId($this->user_id);

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
			self::$peer = new OutOfControlPeer();
		}
		return self::$peer;
	}

} 
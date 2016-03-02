<?php


abstract class BaseManagementReview extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date;


	
	protected $venue;


	
	protected $chair_person;


	
	protected $discussion;


	
	protected $prop_action;


	
	protected $action_date;


	
	protected $conclusion;


	
	protected $secretary;


	
	protected $review_by;


	
	protected $verify_by;


	
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

	
	public function getDate($format = 'Y-m-d')
	{

		if ($this->date === null || $this->date === '') {
			return null;
		} elseif (!is_int($this->date)) {
						$ts = strtotime($this->date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date] as date/time value: " . var_export($this->date, true));
			}
		} else {
			$ts = $this->date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getVenue()
	{

		return $this->venue;
	}

	
	public function getChairPerson()
	{

		return $this->chair_person;
	}

	
	public function getDiscussion()
	{

		return $this->discussion;
	}

	
	public function getPropAction()
	{

		return $this->prop_action;
	}

	
	public function getActionDate()
	{

		return $this->action_date;
	}

	
	public function getConclusion()
	{

		return $this->conclusion;
	}

	
	public function getSecretary()
	{

		return $this->secretary;
	}

	
	public function getReviewBy()
	{

		return $this->review_by;
	}

	
	public function getVerifyBy()
	{

		return $this->verify_by;
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
			$this->modifiedColumns[] = ManagementReviewPeer::ID;
		}

	} 
	
	public function setDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date !== $ts) {
			$this->date = $ts;
			$this->modifiedColumns[] = ManagementReviewPeer::DATE;
		}

	} 
	
	public function setVenue($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->venue !== $v) {
			$this->venue = $v;
			$this->modifiedColumns[] = ManagementReviewPeer::VENUE;
		}

	} 
	
	public function setChairPerson($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->chair_person !== $v) {
			$this->chair_person = $v;
			$this->modifiedColumns[] = ManagementReviewPeer::CHAIR_PERSON;
		}

	} 
	
	public function setDiscussion($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->discussion !== $v) {
			$this->discussion = $v;
			$this->modifiedColumns[] = ManagementReviewPeer::DISCUSSION;
		}

	} 
	
	public function setPropAction($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->prop_action !== $v) {
			$this->prop_action = $v;
			$this->modifiedColumns[] = ManagementReviewPeer::PROP_ACTION;
		}

	} 
	
	public function setActionDate($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->action_date !== $v) {
			$this->action_date = $v;
			$this->modifiedColumns[] = ManagementReviewPeer::ACTION_DATE;
		}

	} 
	
	public function setConclusion($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->conclusion !== $v) {
			$this->conclusion = $v;
			$this->modifiedColumns[] = ManagementReviewPeer::CONCLUSION;
		}

	} 
	
	public function setSecretary($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->secretary !== $v) {
			$this->secretary = $v;
			$this->modifiedColumns[] = ManagementReviewPeer::SECRETARY;
		}

	} 
	
	public function setReviewBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->review_by !== $v) {
			$this->review_by = $v;
			$this->modifiedColumns[] = ManagementReviewPeer::REVIEW_BY;
		}

	} 
	
	public function setVerifyBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verify_by !== $v) {
			$this->verify_by = $v;
			$this->modifiedColumns[] = ManagementReviewPeer::VERIFY_BY;
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
			$this->modifiedColumns[] = ManagementReviewPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = ManagementReviewPeer::CREATED_BY;
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
			$this->modifiedColumns[] = ManagementReviewPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = ManagementReviewPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date = $rs->getDate($startcol + 1, null);

			$this->venue = $rs->getString($startcol + 2);

			$this->chair_person = $rs->getString($startcol + 3);

			$this->discussion = $rs->getString($startcol + 4);

			$this->prop_action = $rs->getString($startcol + 5);

			$this->action_date = $rs->getString($startcol + 6);

			$this->conclusion = $rs->getString($startcol + 7);

			$this->secretary = $rs->getString($startcol + 8);

			$this->review_by = $rs->getString($startcol + 9);

			$this->verify_by = $rs->getString($startcol + 10);

			$this->date_created = $rs->getTimestamp($startcol + 11, null);

			$this->created_by = $rs->getString($startcol + 12);

			$this->date_modified = $rs->getTimestamp($startcol + 13, null);

			$this->modified_by = $rs->getString($startcol + 14);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 15; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ManagementReview object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ManagementReviewPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ManagementReviewPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ManagementReviewPeer::DATABASE_NAME);
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
					$pk = ManagementReviewPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ManagementReviewPeer::doUpdate($this, $con);
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


			if (($retval = ManagementReviewPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ManagementReviewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getDate();
				break;
			case 2:
				return $this->getVenue();
				break;
			case 3:
				return $this->getChairPerson();
				break;
			case 4:
				return $this->getDiscussion();
				break;
			case 5:
				return $this->getPropAction();
				break;
			case 6:
				return $this->getActionDate();
				break;
			case 7:
				return $this->getConclusion();
				break;
			case 8:
				return $this->getSecretary();
				break;
			case 9:
				return $this->getReviewBy();
				break;
			case 10:
				return $this->getVerifyBy();
				break;
			case 11:
				return $this->getDateCreated();
				break;
			case 12:
				return $this->getCreatedBy();
				break;
			case 13:
				return $this->getDateModified();
				break;
			case 14:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ManagementReviewPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDate(),
			$keys[2] => $this->getVenue(),
			$keys[3] => $this->getChairPerson(),
			$keys[4] => $this->getDiscussion(),
			$keys[5] => $this->getPropAction(),
			$keys[6] => $this->getActionDate(),
			$keys[7] => $this->getConclusion(),
			$keys[8] => $this->getSecretary(),
			$keys[9] => $this->getReviewBy(),
			$keys[10] => $this->getVerifyBy(),
			$keys[11] => $this->getDateCreated(),
			$keys[12] => $this->getCreatedBy(),
			$keys[13] => $this->getDateModified(),
			$keys[14] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ManagementReviewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setDate($value);
				break;
			case 2:
				$this->setVenue($value);
				break;
			case 3:
				$this->setChairPerson($value);
				break;
			case 4:
				$this->setDiscussion($value);
				break;
			case 5:
				$this->setPropAction($value);
				break;
			case 6:
				$this->setActionDate($value);
				break;
			case 7:
				$this->setConclusion($value);
				break;
			case 8:
				$this->setSecretary($value);
				break;
			case 9:
				$this->setReviewBy($value);
				break;
			case 10:
				$this->setVerifyBy($value);
				break;
			case 11:
				$this->setDateCreated($value);
				break;
			case 12:
				$this->setCreatedBy($value);
				break;
			case 13:
				$this->setDateModified($value);
				break;
			case 14:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ManagementReviewPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setVenue($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setChairPerson($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDiscussion($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPropAction($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setActionDate($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setConclusion($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSecretary($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setReviewBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setVerifyBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDateCreated($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCreatedBy($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDateModified($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setModifiedBy($arr[$keys[14]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ManagementReviewPeer::DATABASE_NAME);

		if ($this->isColumnModified(ManagementReviewPeer::ID)) $criteria->add(ManagementReviewPeer::ID, $this->id);
		if ($this->isColumnModified(ManagementReviewPeer::DATE)) $criteria->add(ManagementReviewPeer::DATE, $this->date);
		if ($this->isColumnModified(ManagementReviewPeer::VENUE)) $criteria->add(ManagementReviewPeer::VENUE, $this->venue);
		if ($this->isColumnModified(ManagementReviewPeer::CHAIR_PERSON)) $criteria->add(ManagementReviewPeer::CHAIR_PERSON, $this->chair_person);
		if ($this->isColumnModified(ManagementReviewPeer::DISCUSSION)) $criteria->add(ManagementReviewPeer::DISCUSSION, $this->discussion);
		if ($this->isColumnModified(ManagementReviewPeer::PROP_ACTION)) $criteria->add(ManagementReviewPeer::PROP_ACTION, $this->prop_action);
		if ($this->isColumnModified(ManagementReviewPeer::ACTION_DATE)) $criteria->add(ManagementReviewPeer::ACTION_DATE, $this->action_date);
		if ($this->isColumnModified(ManagementReviewPeer::CONCLUSION)) $criteria->add(ManagementReviewPeer::CONCLUSION, $this->conclusion);
		if ($this->isColumnModified(ManagementReviewPeer::SECRETARY)) $criteria->add(ManagementReviewPeer::SECRETARY, $this->secretary);
		if ($this->isColumnModified(ManagementReviewPeer::REVIEW_BY)) $criteria->add(ManagementReviewPeer::REVIEW_BY, $this->review_by);
		if ($this->isColumnModified(ManagementReviewPeer::VERIFY_BY)) $criteria->add(ManagementReviewPeer::VERIFY_BY, $this->verify_by);
		if ($this->isColumnModified(ManagementReviewPeer::DATE_CREATED)) $criteria->add(ManagementReviewPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(ManagementReviewPeer::CREATED_BY)) $criteria->add(ManagementReviewPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(ManagementReviewPeer::DATE_MODIFIED)) $criteria->add(ManagementReviewPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(ManagementReviewPeer::MODIFIED_BY)) $criteria->add(ManagementReviewPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ManagementReviewPeer::DATABASE_NAME);

		$criteria->add(ManagementReviewPeer::ID, $this->id);

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

		$copyObj->setDate($this->date);

		$copyObj->setVenue($this->venue);

		$copyObj->setChairPerson($this->chair_person);

		$copyObj->setDiscussion($this->discussion);

		$copyObj->setPropAction($this->prop_action);

		$copyObj->setActionDate($this->action_date);

		$copyObj->setConclusion($this->conclusion);

		$copyObj->setSecretary($this->secretary);

		$copyObj->setReviewBy($this->review_by);

		$copyObj->setVerifyBy($this->verify_by);

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
			self::$peer = new ManagementReviewPeer();
		}
		return self::$peer;
	}

} 
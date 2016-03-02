<?php


abstract class BaseHrEmployeeSatisfactionSurvey extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $questionaire_id;


	
	protected $rating;


	
	protected $recommendation;


	
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

	
	public function getQuestionaireId()
	{

		return $this->questionaire_id;
	}

	
	public function getRating()
	{

		return $this->rating;
	}

	
	public function getRecommendation()
	{

		return $this->recommendation;
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
			$this->modifiedColumns[] = HrEmployeeSatisfactionSurveyPeer::ID;
		}

	} 
	
	public function setQuestionaireId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->questionaire_id !== $v) {
			$this->questionaire_id = $v;
			$this->modifiedColumns[] = HrEmployeeSatisfactionSurveyPeer::QUESTIONAIRE_ID;
		}

	} 
	
	public function setRating($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rating !== $v) {
			$this->rating = $v;
			$this->modifiedColumns[] = HrEmployeeSatisfactionSurveyPeer::RATING;
		}

	} 
	
	public function setRecommendation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->recommendation !== $v) {
			$this->recommendation = $v;
			$this->modifiedColumns[] = HrEmployeeSatisfactionSurveyPeer::RECOMMENDATION;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrEmployeeSatisfactionSurveyPeer::CREATED_BY;
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
			$this->modifiedColumns[] = HrEmployeeSatisfactionSurveyPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrEmployeeSatisfactionSurveyPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HrEmployeeSatisfactionSurveyPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->questionaire_id = $rs->getString($startcol + 1);

			$this->rating = $rs->getString($startcol + 2);

			$this->recommendation = $rs->getString($startcol + 3);

			$this->created_by = $rs->getString($startcol + 4);

			$this->date_created = $rs->getTimestamp($startcol + 5, null);

			$this->modified_by = $rs->getString($startcol + 6);

			$this->date_modified = $rs->getTimestamp($startcol + 7, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrEmployeeSatisfactionSurvey object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrEmployeeSatisfactionSurveyPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrEmployeeSatisfactionSurveyPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrEmployeeSatisfactionSurveyPeer::DATABASE_NAME);
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
					$pk = HrEmployeeSatisfactionSurveyPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrEmployeeSatisfactionSurveyPeer::doUpdate($this, $con);
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


			if (($retval = HrEmployeeSatisfactionSurveyPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrEmployeeSatisfactionSurveyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getQuestionaireId();
				break;
			case 2:
				return $this->getRating();
				break;
			case 3:
				return $this->getRecommendation();
				break;
			case 4:
				return $this->getCreatedBy();
				break;
			case 5:
				return $this->getDateCreated();
				break;
			case 6:
				return $this->getModifiedBy();
				break;
			case 7:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrEmployeeSatisfactionSurveyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getQuestionaireId(),
			$keys[2] => $this->getRating(),
			$keys[3] => $this->getRecommendation(),
			$keys[4] => $this->getCreatedBy(),
			$keys[5] => $this->getDateCreated(),
			$keys[6] => $this->getModifiedBy(),
			$keys[7] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrEmployeeSatisfactionSurveyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setQuestionaireId($value);
				break;
			case 2:
				$this->setRating($value);
				break;
			case 3:
				$this->setRecommendation($value);
				break;
			case 4:
				$this->setCreatedBy($value);
				break;
			case 5:
				$this->setDateCreated($value);
				break;
			case 6:
				$this->setModifiedBy($value);
				break;
			case 7:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrEmployeeSatisfactionSurveyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setQuestionaireId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setRating($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setRecommendation($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCreatedBy($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDateCreated($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setModifiedBy($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDateModified($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrEmployeeSatisfactionSurveyPeer::DATABASE_NAME);

		if ($this->isColumnModified(HrEmployeeSatisfactionSurveyPeer::ID)) $criteria->add(HrEmployeeSatisfactionSurveyPeer::ID, $this->id);
		if ($this->isColumnModified(HrEmployeeSatisfactionSurveyPeer::QUESTIONAIRE_ID)) $criteria->add(HrEmployeeSatisfactionSurveyPeer::QUESTIONAIRE_ID, $this->questionaire_id);
		if ($this->isColumnModified(HrEmployeeSatisfactionSurveyPeer::RATING)) $criteria->add(HrEmployeeSatisfactionSurveyPeer::RATING, $this->rating);
		if ($this->isColumnModified(HrEmployeeSatisfactionSurveyPeer::RECOMMENDATION)) $criteria->add(HrEmployeeSatisfactionSurveyPeer::RECOMMENDATION, $this->recommendation);
		if ($this->isColumnModified(HrEmployeeSatisfactionSurveyPeer::CREATED_BY)) $criteria->add(HrEmployeeSatisfactionSurveyPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrEmployeeSatisfactionSurveyPeer::DATE_CREATED)) $criteria->add(HrEmployeeSatisfactionSurveyPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrEmployeeSatisfactionSurveyPeer::MODIFIED_BY)) $criteria->add(HrEmployeeSatisfactionSurveyPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrEmployeeSatisfactionSurveyPeer::DATE_MODIFIED)) $criteria->add(HrEmployeeSatisfactionSurveyPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrEmployeeSatisfactionSurveyPeer::DATABASE_NAME);

		$criteria->add(HrEmployeeSatisfactionSurveyPeer::ID, $this->id);

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

		$copyObj->setQuestionaireId($this->questionaire_id);

		$copyObj->setRating($this->rating);

		$copyObj->setRecommendation($this->recommendation);

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
			self::$peer = new HrEmployeeSatisfactionSurveyPeer();
		}
		return self::$peer;
	}

} 
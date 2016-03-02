<?php


abstract class BaseInternalAuditIsoClause extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $summary_id;


	
	protected $iso_clause;


	
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

	
	public function getSummaryId()
	{

		return $this->summary_id;
	}

	
	public function getIsoClause()
	{

		return $this->iso_clause;
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
			$this->modifiedColumns[] = InternalAuditIsoClausePeer::ID;
		}

	} 
	
	public function setSummaryId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->summary_id !== $v) {
			$this->summary_id = $v;
			$this->modifiedColumns[] = InternalAuditIsoClausePeer::SUMMARY_ID;
		}

	} 
	
	public function setIsoClause($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->iso_clause !== $v) {
			$this->iso_clause = $v;
			$this->modifiedColumns[] = InternalAuditIsoClausePeer::ISO_CLAUSE;
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
			$this->modifiedColumns[] = InternalAuditIsoClausePeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = InternalAuditIsoClausePeer::CREATED_BY;
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
			$this->modifiedColumns[] = InternalAuditIsoClausePeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = InternalAuditIsoClausePeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->summary_id = $rs->getInt($startcol + 1);

			$this->iso_clause = $rs->getString($startcol + 2);

			$this->date_created = $rs->getTimestamp($startcol + 3, null);

			$this->created_by = $rs->getString($startcol + 4);

			$this->date_modified = $rs->getTimestamp($startcol + 5, null);

			$this->modified_by = $rs->getString($startcol + 6);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating InternalAuditIsoClause object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(InternalAuditIsoClausePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			InternalAuditIsoClausePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(InternalAuditIsoClausePeer::DATABASE_NAME);
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
					$pk = InternalAuditIsoClausePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += InternalAuditIsoClausePeer::doUpdate($this, $con);
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


			if (($retval = InternalAuditIsoClausePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = InternalAuditIsoClausePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getSummaryId();
				break;
			case 2:
				return $this->getIsoClause();
				break;
			case 3:
				return $this->getDateCreated();
				break;
			case 4:
				return $this->getCreatedBy();
				break;
			case 5:
				return $this->getDateModified();
				break;
			case 6:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = InternalAuditIsoClausePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSummaryId(),
			$keys[2] => $this->getIsoClause(),
			$keys[3] => $this->getDateCreated(),
			$keys[4] => $this->getCreatedBy(),
			$keys[5] => $this->getDateModified(),
			$keys[6] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = InternalAuditIsoClausePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setSummaryId($value);
				break;
			case 2:
				$this->setIsoClause($value);
				break;
			case 3:
				$this->setDateCreated($value);
				break;
			case 4:
				$this->setCreatedBy($value);
				break;
			case 5:
				$this->setDateModified($value);
				break;
			case 6:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = InternalAuditIsoClausePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSummaryId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIsoClause($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateCreated($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCreatedBy($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDateModified($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setModifiedBy($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(InternalAuditIsoClausePeer::DATABASE_NAME);

		if ($this->isColumnModified(InternalAuditIsoClausePeer::ID)) $criteria->add(InternalAuditIsoClausePeer::ID, $this->id);
		if ($this->isColumnModified(InternalAuditIsoClausePeer::SUMMARY_ID)) $criteria->add(InternalAuditIsoClausePeer::SUMMARY_ID, $this->summary_id);
		if ($this->isColumnModified(InternalAuditIsoClausePeer::ISO_CLAUSE)) $criteria->add(InternalAuditIsoClausePeer::ISO_CLAUSE, $this->iso_clause);
		if ($this->isColumnModified(InternalAuditIsoClausePeer::DATE_CREATED)) $criteria->add(InternalAuditIsoClausePeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(InternalAuditIsoClausePeer::CREATED_BY)) $criteria->add(InternalAuditIsoClausePeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(InternalAuditIsoClausePeer::DATE_MODIFIED)) $criteria->add(InternalAuditIsoClausePeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(InternalAuditIsoClausePeer::MODIFIED_BY)) $criteria->add(InternalAuditIsoClausePeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(InternalAuditIsoClausePeer::DATABASE_NAME);

		$criteria->add(InternalAuditIsoClausePeer::ID, $this->id);

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

		$copyObj->setSummaryId($this->summary_id);

		$copyObj->setIsoClause($this->iso_clause);

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
			self::$peer = new InternalAuditIsoClausePeer();
		}
		return self::$peer;
	}

} 
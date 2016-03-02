<?php


abstract class BaseInspectionRecord extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $inspection_type;


	
	protected $inspection_date;


	
	protected $checked_by;


	
	protected $modified_by;


	
	protected $date_modified;


	
	protected $created_by;


	
	protected $date_created;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getInspectionType()
	{

		return $this->inspection_type;
	}

	
	public function getInspectionDate($format = 'Y-m-d')
	{

		if ($this->inspection_date === null || $this->inspection_date === '') {
			return null;
		} elseif (!is_int($this->inspection_date)) {
						$ts = strtotime($this->inspection_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [inspection_date] as date/time value: " . var_export($this->inspection_date, true));
			}
		} else {
			$ts = $this->inspection_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCheckedBy()
	{

		return $this->checked_by;
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

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = InspectionRecordPeer::ID;
		}

	} 
	
	public function setInspectionType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->inspection_type !== $v) {
			$this->inspection_type = $v;
			$this->modifiedColumns[] = InspectionRecordPeer::INSPECTION_TYPE;
		}

	} 
	
	public function setInspectionDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [inspection_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->inspection_date !== $ts) {
			$this->inspection_date = $ts;
			$this->modifiedColumns[] = InspectionRecordPeer::INSPECTION_DATE;
		}

	} 
	
	public function setCheckedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->checked_by !== $v) {
			$this->checked_by = $v;
			$this->modifiedColumns[] = InspectionRecordPeer::CHECKED_BY;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = InspectionRecordPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = InspectionRecordPeer::DATE_MODIFIED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = InspectionRecordPeer::CREATED_BY;
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
			$this->modifiedColumns[] = InspectionRecordPeer::DATE_CREATED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->inspection_type = $rs->getString($startcol + 1);

			$this->inspection_date = $rs->getDate($startcol + 2, null);

			$this->checked_by = $rs->getString($startcol + 3);

			$this->modified_by = $rs->getString($startcol + 4);

			$this->date_modified = $rs->getTimestamp($startcol + 5, null);

			$this->created_by = $rs->getString($startcol + 6);

			$this->date_created = $rs->getTimestamp($startcol + 7, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating InspectionRecord object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(InspectionRecordPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			InspectionRecordPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(InspectionRecordPeer::DATABASE_NAME);
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
					$pk = InspectionRecordPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += InspectionRecordPeer::doUpdate($this, $con);
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


			if (($retval = InspectionRecordPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = InspectionRecordPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getInspectionType();
				break;
			case 2:
				return $this->getInspectionDate();
				break;
			case 3:
				return $this->getCheckedBy();
				break;
			case 4:
				return $this->getModifiedBy();
				break;
			case 5:
				return $this->getDateModified();
				break;
			case 6:
				return $this->getCreatedBy();
				break;
			case 7:
				return $this->getDateCreated();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = InspectionRecordPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getInspectionType(),
			$keys[2] => $this->getInspectionDate(),
			$keys[3] => $this->getCheckedBy(),
			$keys[4] => $this->getModifiedBy(),
			$keys[5] => $this->getDateModified(),
			$keys[6] => $this->getCreatedBy(),
			$keys[7] => $this->getDateCreated(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = InspectionRecordPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setInspectionType($value);
				break;
			case 2:
				$this->setInspectionDate($value);
				break;
			case 3:
				$this->setCheckedBy($value);
				break;
			case 4:
				$this->setModifiedBy($value);
				break;
			case 5:
				$this->setDateModified($value);
				break;
			case 6:
				$this->setCreatedBy($value);
				break;
			case 7:
				$this->setDateCreated($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = InspectionRecordPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setInspectionType($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setInspectionDate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCheckedBy($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setModifiedBy($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDateModified($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedBy($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDateCreated($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(InspectionRecordPeer::DATABASE_NAME);

		if ($this->isColumnModified(InspectionRecordPeer::ID)) $criteria->add(InspectionRecordPeer::ID, $this->id);
		if ($this->isColumnModified(InspectionRecordPeer::INSPECTION_TYPE)) $criteria->add(InspectionRecordPeer::INSPECTION_TYPE, $this->inspection_type);
		if ($this->isColumnModified(InspectionRecordPeer::INSPECTION_DATE)) $criteria->add(InspectionRecordPeer::INSPECTION_DATE, $this->inspection_date);
		if ($this->isColumnModified(InspectionRecordPeer::CHECKED_BY)) $criteria->add(InspectionRecordPeer::CHECKED_BY, $this->checked_by);
		if ($this->isColumnModified(InspectionRecordPeer::MODIFIED_BY)) $criteria->add(InspectionRecordPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(InspectionRecordPeer::DATE_MODIFIED)) $criteria->add(InspectionRecordPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(InspectionRecordPeer::CREATED_BY)) $criteria->add(InspectionRecordPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(InspectionRecordPeer::DATE_CREATED)) $criteria->add(InspectionRecordPeer::DATE_CREATED, $this->date_created);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(InspectionRecordPeer::DATABASE_NAME);

		$criteria->add(InspectionRecordPeer::ID, $this->id);

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

		$copyObj->setInspectionType($this->inspection_type);

		$copyObj->setInspectionDate($this->inspection_date);

		$copyObj->setCheckedBy($this->checked_by);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateModified($this->date_modified);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateCreated($this->date_created);


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
			self::$peer = new InspectionRecordPeer();
		}
		return self::$peer;
	}

} 
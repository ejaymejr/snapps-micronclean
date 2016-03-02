<?php


abstract class BaseInspectionRecordItem extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $inspection_record_id;


	
	protected $inspection_field_list_id;


	
	protected $field_name;


	
	protected $field_value;


	
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

	
	public function getInspectionRecordId()
	{

		return $this->inspection_record_id;
	}

	
	public function getInspectionFieldListId()
	{

		return $this->inspection_field_list_id;
	}

	
	public function getFieldName()
	{

		return $this->field_name;
	}

	
	public function getFieldValue()
	{

		return $this->field_value;
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
			$this->modifiedColumns[] = InspectionRecordItemPeer::ID;
		}

	} 
	
	public function setInspectionRecordId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->inspection_record_id !== $v) {
			$this->inspection_record_id = $v;
			$this->modifiedColumns[] = InspectionRecordItemPeer::INSPECTION_RECORD_ID;
		}

	} 
	
	public function setInspectionFieldListId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->inspection_field_list_id !== $v) {
			$this->inspection_field_list_id = $v;
			$this->modifiedColumns[] = InspectionRecordItemPeer::INSPECTION_FIELD_LIST_ID;
		}

	} 
	
	public function setFieldName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->field_name !== $v) {
			$this->field_name = $v;
			$this->modifiedColumns[] = InspectionRecordItemPeer::FIELD_NAME;
		}

	} 
	
	public function setFieldValue($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->field_value !== $v) {
			$this->field_value = $v;
			$this->modifiedColumns[] = InspectionRecordItemPeer::FIELD_VALUE;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = InspectionRecordItemPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = InspectionRecordItemPeer::DATE_MODIFIED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = InspectionRecordItemPeer::CREATED_BY;
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
			$this->modifiedColumns[] = InspectionRecordItemPeer::DATE_CREATED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->inspection_record_id = $rs->getInt($startcol + 1);

			$this->inspection_field_list_id = $rs->getInt($startcol + 2);

			$this->field_name = $rs->getString($startcol + 3);

			$this->field_value = $rs->getString($startcol + 4);

			$this->modified_by = $rs->getString($startcol + 5);

			$this->date_modified = $rs->getTimestamp($startcol + 6, null);

			$this->created_by = $rs->getString($startcol + 7);

			$this->date_created = $rs->getTimestamp($startcol + 8, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating InspectionRecordItem object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(InspectionRecordItemPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			InspectionRecordItemPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(InspectionRecordItemPeer::DATABASE_NAME);
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
					$pk = InspectionRecordItemPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += InspectionRecordItemPeer::doUpdate($this, $con);
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


			if (($retval = InspectionRecordItemPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = InspectionRecordItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getInspectionRecordId();
				break;
			case 2:
				return $this->getInspectionFieldListId();
				break;
			case 3:
				return $this->getFieldName();
				break;
			case 4:
				return $this->getFieldValue();
				break;
			case 5:
				return $this->getModifiedBy();
				break;
			case 6:
				return $this->getDateModified();
				break;
			case 7:
				return $this->getCreatedBy();
				break;
			case 8:
				return $this->getDateCreated();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = InspectionRecordItemPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getInspectionRecordId(),
			$keys[2] => $this->getInspectionFieldListId(),
			$keys[3] => $this->getFieldName(),
			$keys[4] => $this->getFieldValue(),
			$keys[5] => $this->getModifiedBy(),
			$keys[6] => $this->getDateModified(),
			$keys[7] => $this->getCreatedBy(),
			$keys[8] => $this->getDateCreated(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = InspectionRecordItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setInspectionRecordId($value);
				break;
			case 2:
				$this->setInspectionFieldListId($value);
				break;
			case 3:
				$this->setFieldName($value);
				break;
			case 4:
				$this->setFieldValue($value);
				break;
			case 5:
				$this->setModifiedBy($value);
				break;
			case 6:
				$this->setDateModified($value);
				break;
			case 7:
				$this->setCreatedBy($value);
				break;
			case 8:
				$this->setDateCreated($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = InspectionRecordItemPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setInspectionRecordId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setInspectionFieldListId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFieldName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFieldValue($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setModifiedBy($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateModified($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedBy($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateCreated($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(InspectionRecordItemPeer::DATABASE_NAME);

		if ($this->isColumnModified(InspectionRecordItemPeer::ID)) $criteria->add(InspectionRecordItemPeer::ID, $this->id);
		if ($this->isColumnModified(InspectionRecordItemPeer::INSPECTION_RECORD_ID)) $criteria->add(InspectionRecordItemPeer::INSPECTION_RECORD_ID, $this->inspection_record_id);
		if ($this->isColumnModified(InspectionRecordItemPeer::INSPECTION_FIELD_LIST_ID)) $criteria->add(InspectionRecordItemPeer::INSPECTION_FIELD_LIST_ID, $this->inspection_field_list_id);
		if ($this->isColumnModified(InspectionRecordItemPeer::FIELD_NAME)) $criteria->add(InspectionRecordItemPeer::FIELD_NAME, $this->field_name);
		if ($this->isColumnModified(InspectionRecordItemPeer::FIELD_VALUE)) $criteria->add(InspectionRecordItemPeer::FIELD_VALUE, $this->field_value);
		if ($this->isColumnModified(InspectionRecordItemPeer::MODIFIED_BY)) $criteria->add(InspectionRecordItemPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(InspectionRecordItemPeer::DATE_MODIFIED)) $criteria->add(InspectionRecordItemPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(InspectionRecordItemPeer::CREATED_BY)) $criteria->add(InspectionRecordItemPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(InspectionRecordItemPeer::DATE_CREATED)) $criteria->add(InspectionRecordItemPeer::DATE_CREATED, $this->date_created);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(InspectionRecordItemPeer::DATABASE_NAME);

		$criteria->add(InspectionRecordItemPeer::ID, $this->id);

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

		$copyObj->setInspectionRecordId($this->inspection_record_id);

		$copyObj->setInspectionFieldListId($this->inspection_field_list_id);

		$copyObj->setFieldName($this->field_name);

		$copyObj->setFieldValue($this->field_value);

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
			self::$peer = new InspectionRecordItemPeer();
		}
		return self::$peer;
	}

} 
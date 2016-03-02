<?php


abstract class BaseInspectionFieldList extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $field_name;


	
	protected $field_type;


	
	protected $remark;


	
	protected $status;


	
	protected $seq;


	
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

	
	public function getFieldName()
	{

		return $this->field_name;
	}

	
	public function getFieldType()
	{

		return $this->field_type;
	}

	
	public function getRemark()
	{

		return $this->remark;
	}

	
	public function getStatus()
	{

		return $this->status;
	}

	
	public function getSeq()
	{

		return $this->seq;
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
			$this->modifiedColumns[] = InspectionFieldListPeer::ID;
		}

	} 
	
	public function setFieldName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->field_name !== $v) {
			$this->field_name = $v;
			$this->modifiedColumns[] = InspectionFieldListPeer::FIELD_NAME;
		}

	} 
	
	public function setFieldType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->field_type !== $v) {
			$this->field_type = $v;
			$this->modifiedColumns[] = InspectionFieldListPeer::FIELD_TYPE;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = InspectionFieldListPeer::REMARK;
		}

	} 
	
	public function setStatus($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->status !== $v) {
			$this->status = $v;
			$this->modifiedColumns[] = InspectionFieldListPeer::STATUS;
		}

	} 
	
	public function setSeq($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->seq !== $v) {
			$this->seq = $v;
			$this->modifiedColumns[] = InspectionFieldListPeer::SEQ;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = InspectionFieldListPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = InspectionFieldListPeer::DATE_MODIFIED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = InspectionFieldListPeer::CREATED_BY;
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
			$this->modifiedColumns[] = InspectionFieldListPeer::DATE_CREATED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->field_name = $rs->getString($startcol + 1);

			$this->field_type = $rs->getString($startcol + 2);

			$this->remark = $rs->getString($startcol + 3);

			$this->status = $rs->getString($startcol + 4);

			$this->seq = $rs->getInt($startcol + 5);

			$this->modified_by = $rs->getString($startcol + 6);

			$this->date_modified = $rs->getTimestamp($startcol + 7, null);

			$this->created_by = $rs->getString($startcol + 8);

			$this->date_created = $rs->getTimestamp($startcol + 9, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating InspectionFieldList object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(InspectionFieldListPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			InspectionFieldListPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(InspectionFieldListPeer::DATABASE_NAME);
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
					$pk = InspectionFieldListPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += InspectionFieldListPeer::doUpdate($this, $con);
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


			if (($retval = InspectionFieldListPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = InspectionFieldListPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getFieldName();
				break;
			case 2:
				return $this->getFieldType();
				break;
			case 3:
				return $this->getRemark();
				break;
			case 4:
				return $this->getStatus();
				break;
			case 5:
				return $this->getSeq();
				break;
			case 6:
				return $this->getModifiedBy();
				break;
			case 7:
				return $this->getDateModified();
				break;
			case 8:
				return $this->getCreatedBy();
				break;
			case 9:
				return $this->getDateCreated();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = InspectionFieldListPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getFieldName(),
			$keys[2] => $this->getFieldType(),
			$keys[3] => $this->getRemark(),
			$keys[4] => $this->getStatus(),
			$keys[5] => $this->getSeq(),
			$keys[6] => $this->getModifiedBy(),
			$keys[7] => $this->getDateModified(),
			$keys[8] => $this->getCreatedBy(),
			$keys[9] => $this->getDateCreated(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = InspectionFieldListPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setFieldName($value);
				break;
			case 2:
				$this->setFieldType($value);
				break;
			case 3:
				$this->setRemark($value);
				break;
			case 4:
				$this->setStatus($value);
				break;
			case 5:
				$this->setSeq($value);
				break;
			case 6:
				$this->setModifiedBy($value);
				break;
			case 7:
				$this->setDateModified($value);
				break;
			case 8:
				$this->setCreatedBy($value);
				break;
			case 9:
				$this->setDateCreated($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = InspectionFieldListPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFieldName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFieldType($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setRemark($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setStatus($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSeq($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setModifiedBy($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDateModified($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCreatedBy($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateCreated($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(InspectionFieldListPeer::DATABASE_NAME);

		if ($this->isColumnModified(InspectionFieldListPeer::ID)) $criteria->add(InspectionFieldListPeer::ID, $this->id);
		if ($this->isColumnModified(InspectionFieldListPeer::FIELD_NAME)) $criteria->add(InspectionFieldListPeer::FIELD_NAME, $this->field_name);
		if ($this->isColumnModified(InspectionFieldListPeer::FIELD_TYPE)) $criteria->add(InspectionFieldListPeer::FIELD_TYPE, $this->field_type);
		if ($this->isColumnModified(InspectionFieldListPeer::REMARK)) $criteria->add(InspectionFieldListPeer::REMARK, $this->remark);
		if ($this->isColumnModified(InspectionFieldListPeer::STATUS)) $criteria->add(InspectionFieldListPeer::STATUS, $this->status);
		if ($this->isColumnModified(InspectionFieldListPeer::SEQ)) $criteria->add(InspectionFieldListPeer::SEQ, $this->seq);
		if ($this->isColumnModified(InspectionFieldListPeer::MODIFIED_BY)) $criteria->add(InspectionFieldListPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(InspectionFieldListPeer::DATE_MODIFIED)) $criteria->add(InspectionFieldListPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(InspectionFieldListPeer::CREATED_BY)) $criteria->add(InspectionFieldListPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(InspectionFieldListPeer::DATE_CREATED)) $criteria->add(InspectionFieldListPeer::DATE_CREATED, $this->date_created);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(InspectionFieldListPeer::DATABASE_NAME);

		$criteria->add(InspectionFieldListPeer::ID, $this->id);

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

		$copyObj->setFieldName($this->field_name);

		$copyObj->setFieldType($this->field_type);

		$copyObj->setRemark($this->remark);

		$copyObj->setStatus($this->status);

		$copyObj->setSeq($this->seq);

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
			self::$peer = new InspectionFieldListPeer();
		}
		return self::$peer;
	}

} 
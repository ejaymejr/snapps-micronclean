<?php


abstract class BaseSupplierDocumentFiles extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $supplier_document_change_review_id = 'null';


	
	protected $filename = 'null';


	
	protected $path = 'null';


	
	protected $mime_type = 'null';


	
	protected $size = 0;


	
	protected $description;


	
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

	
	public function getSupplierDocumentChangeReviewId()
	{

		return $this->supplier_document_change_review_id;
	}

	
	public function getFilename()
	{

		return $this->filename;
	}

	
	public function getPath()
	{

		return $this->path;
	}

	
	public function getMimeType()
	{

		return $this->mime_type;
	}

	
	public function getSize()
	{

		return $this->size;
	}

	
	public function getDescription()
	{

		return $this->description;
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
			$this->modifiedColumns[] = SupplierDocumentFilesPeer::ID;
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
			$this->modifiedColumns[] = SupplierDocumentFilesPeer::DATE_TIME;
		}

	} 
	
	public function setSupplierDocumentChangeReviewId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->supplier_document_change_review_id !== $v || $v === 'null') {
			$this->supplier_document_change_review_id = $v;
			$this->modifiedColumns[] = SupplierDocumentFilesPeer::SUPPLIER_DOCUMENT_CHANGE_REVIEW_ID;
		}

	} 
	
	public function setFilename($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->filename !== $v || $v === 'null') {
			$this->filename = $v;
			$this->modifiedColumns[] = SupplierDocumentFilesPeer::FILENAME;
		}

	} 
	
	public function setPath($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->path !== $v || $v === 'null') {
			$this->path = $v;
			$this->modifiedColumns[] = SupplierDocumentFilesPeer::PATH;
		}

	} 
	
	public function setMimeType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mime_type !== $v || $v === 'null') {
			$this->mime_type = $v;
			$this->modifiedColumns[] = SupplierDocumentFilesPeer::MIME_TYPE;
		}

	} 
	
	public function setSize($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->size !== $v || $v === 0) {
			$this->size = $v;
			$this->modifiedColumns[] = SupplierDocumentFilesPeer::SIZE;
		}

	} 
	
	public function setDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = SupplierDocumentFilesPeer::DESCRIPTION;
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
			$this->modifiedColumns[] = SupplierDocumentFilesPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = SupplierDocumentFilesPeer::CREATED_BY;
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
			$this->modifiedColumns[] = SupplierDocumentFilesPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = SupplierDocumentFilesPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->supplier_document_change_review_id = $rs->getString($startcol + 2);

			$this->filename = $rs->getString($startcol + 3);

			$this->path = $rs->getString($startcol + 4);

			$this->mime_type = $rs->getString($startcol + 5);

			$this->size = $rs->getInt($startcol + 6);

			$this->description = $rs->getString($startcol + 7);

			$this->date_created = $rs->getTimestamp($startcol + 8, null);

			$this->created_by = $rs->getString($startcol + 9);

			$this->date_modified = $rs->getTimestamp($startcol + 10, null);

			$this->modified_by = $rs->getString($startcol + 11);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 12; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SupplierDocumentFiles object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SupplierDocumentFilesPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SupplierDocumentFilesPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SupplierDocumentFilesPeer::DATABASE_NAME);
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
					$pk = SupplierDocumentFilesPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SupplierDocumentFilesPeer::doUpdate($this, $con);
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


			if (($retval = SupplierDocumentFilesPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SupplierDocumentFilesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getSupplierDocumentChangeReviewId();
				break;
			case 3:
				return $this->getFilename();
				break;
			case 4:
				return $this->getPath();
				break;
			case 5:
				return $this->getMimeType();
				break;
			case 6:
				return $this->getSize();
				break;
			case 7:
				return $this->getDescription();
				break;
			case 8:
				return $this->getDateCreated();
				break;
			case 9:
				return $this->getCreatedBy();
				break;
			case 10:
				return $this->getDateModified();
				break;
			case 11:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SupplierDocumentFilesPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getSupplierDocumentChangeReviewId(),
			$keys[3] => $this->getFilename(),
			$keys[4] => $this->getPath(),
			$keys[5] => $this->getMimeType(),
			$keys[6] => $this->getSize(),
			$keys[7] => $this->getDescription(),
			$keys[8] => $this->getDateCreated(),
			$keys[9] => $this->getCreatedBy(),
			$keys[10] => $this->getDateModified(),
			$keys[11] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SupplierDocumentFilesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setSupplierDocumentChangeReviewId($value);
				break;
			case 3:
				$this->setFilename($value);
				break;
			case 4:
				$this->setPath($value);
				break;
			case 5:
				$this->setMimeType($value);
				break;
			case 6:
				$this->setSize($value);
				break;
			case 7:
				$this->setDescription($value);
				break;
			case 8:
				$this->setDateCreated($value);
				break;
			case 9:
				$this->setCreatedBy($value);
				break;
			case 10:
				$this->setDateModified($value);
				break;
			case 11:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SupplierDocumentFilesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSupplierDocumentChangeReviewId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFilename($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPath($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setMimeType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSize($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDescription($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateCreated($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCreatedBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateModified($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setModifiedBy($arr[$keys[11]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SupplierDocumentFilesPeer::DATABASE_NAME);

		if ($this->isColumnModified(SupplierDocumentFilesPeer::ID)) $criteria->add(SupplierDocumentFilesPeer::ID, $this->id);
		if ($this->isColumnModified(SupplierDocumentFilesPeer::DATE_TIME)) $criteria->add(SupplierDocumentFilesPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(SupplierDocumentFilesPeer::SUPPLIER_DOCUMENT_CHANGE_REVIEW_ID)) $criteria->add(SupplierDocumentFilesPeer::SUPPLIER_DOCUMENT_CHANGE_REVIEW_ID, $this->supplier_document_change_review_id);
		if ($this->isColumnModified(SupplierDocumentFilesPeer::FILENAME)) $criteria->add(SupplierDocumentFilesPeer::FILENAME, $this->filename);
		if ($this->isColumnModified(SupplierDocumentFilesPeer::PATH)) $criteria->add(SupplierDocumentFilesPeer::PATH, $this->path);
		if ($this->isColumnModified(SupplierDocumentFilesPeer::MIME_TYPE)) $criteria->add(SupplierDocumentFilesPeer::MIME_TYPE, $this->mime_type);
		if ($this->isColumnModified(SupplierDocumentFilesPeer::SIZE)) $criteria->add(SupplierDocumentFilesPeer::SIZE, $this->size);
		if ($this->isColumnModified(SupplierDocumentFilesPeer::DESCRIPTION)) $criteria->add(SupplierDocumentFilesPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(SupplierDocumentFilesPeer::DATE_CREATED)) $criteria->add(SupplierDocumentFilesPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(SupplierDocumentFilesPeer::CREATED_BY)) $criteria->add(SupplierDocumentFilesPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(SupplierDocumentFilesPeer::DATE_MODIFIED)) $criteria->add(SupplierDocumentFilesPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(SupplierDocumentFilesPeer::MODIFIED_BY)) $criteria->add(SupplierDocumentFilesPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SupplierDocumentFilesPeer::DATABASE_NAME);

		$criteria->add(SupplierDocumentFilesPeer::ID, $this->id);

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

		$copyObj->setSupplierDocumentChangeReviewId($this->supplier_document_change_review_id);

		$copyObj->setFilename($this->filename);

		$copyObj->setPath($this->path);

		$copyObj->setMimeType($this->mime_type);

		$copyObj->setSize($this->size);

		$copyObj->setDescription($this->description);

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
			self::$peer = new SupplierDocumentFilesPeer();
		}
		return self::$peer;
	}

} 
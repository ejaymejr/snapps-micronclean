<?php


abstract class BaseFileDetail extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $batch_id = 'null';


	
	protected $garment_code = 'null';


	
	protected $file_name = 'null';


	
	protected $path;


	
	protected $file_name_original = 'null';


	
	protected $mime_type = 'null';


	
	protected $size = 0;


	
	protected $description;


	
	protected $date_created;


	
	protected $send_email;


	
	protected $created_by = 'null';


	
	protected $date_modified;


	
	protected $modified_by = 'null';

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getBatchId()
	{

		return $this->batch_id;
	}

	
	public function getGarmentCode()
	{

		return $this->garment_code;
	}

	
	public function getFileName()
	{

		return $this->file_name;
	}

	
	public function getPath()
	{

		return $this->path;
	}

	
	public function getFileNameOriginal()
	{

		return $this->file_name_original;
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

	
	public function getSendEmail()
	{

		return $this->send_email;
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
			$this->modifiedColumns[] = FileDetailPeer::ID;
		}

	} 
	
	public function setBatchId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->batch_id !== $v || $v === 'null') {
			$this->batch_id = $v;
			$this->modifiedColumns[] = FileDetailPeer::BATCH_ID;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v || $v === 'null') {
			$this->garment_code = $v;
			$this->modifiedColumns[] = FileDetailPeer::GARMENT_CODE;
		}

	} 
	
	public function setFileName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->file_name !== $v || $v === 'null') {
			$this->file_name = $v;
			$this->modifiedColumns[] = FileDetailPeer::FILE_NAME;
		}

	} 
	
	public function setPath($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->path !== $v) {
			$this->path = $v;
			$this->modifiedColumns[] = FileDetailPeer::PATH;
		}

	} 
	
	public function setFileNameOriginal($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->file_name_original !== $v || $v === 'null') {
			$this->file_name_original = $v;
			$this->modifiedColumns[] = FileDetailPeer::FILE_NAME_ORIGINAL;
		}

	} 
	
	public function setMimeType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mime_type !== $v || $v === 'null') {
			$this->mime_type = $v;
			$this->modifiedColumns[] = FileDetailPeer::MIME_TYPE;
		}

	} 
	
	public function setSize($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->size !== $v || $v === 0) {
			$this->size = $v;
			$this->modifiedColumns[] = FileDetailPeer::SIZE;
		}

	} 
	
	public function setDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = FileDetailPeer::DESCRIPTION;
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
			$this->modifiedColumns[] = FileDetailPeer::DATE_CREATED;
		}

	} 
	
	public function setSendEmail($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->send_email !== $v) {
			$this->send_email = $v;
			$this->modifiedColumns[] = FileDetailPeer::SEND_EMAIL;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = FileDetailPeer::CREATED_BY;
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
			$this->modifiedColumns[] = FileDetailPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = FileDetailPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->batch_id = $rs->getString($startcol + 1);

			$this->garment_code = $rs->getString($startcol + 2);

			$this->file_name = $rs->getString($startcol + 3);

			$this->path = $rs->getString($startcol + 4);

			$this->file_name_original = $rs->getString($startcol + 5);

			$this->mime_type = $rs->getString($startcol + 6);

			$this->size = $rs->getInt($startcol + 7);

			$this->description = $rs->getString($startcol + 8);

			$this->date_created = $rs->getTimestamp($startcol + 9, null);

			$this->send_email = $rs->getString($startcol + 10);

			$this->created_by = $rs->getString($startcol + 11);

			$this->date_modified = $rs->getTimestamp($startcol + 12, null);

			$this->modified_by = $rs->getString($startcol + 13);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 14; 
		} catch (Exception $e) {
			throw new PropelException("Error populating FileDetail object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(FileDetailPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			FileDetailPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(FileDetailPeer::DATABASE_NAME);
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
					$pk = FileDetailPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += FileDetailPeer::doUpdate($this, $con);
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


			if (($retval = FileDetailPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FileDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getBatchId();
				break;
			case 2:
				return $this->getGarmentCode();
				break;
			case 3:
				return $this->getFileName();
				break;
			case 4:
				return $this->getPath();
				break;
			case 5:
				return $this->getFileNameOriginal();
				break;
			case 6:
				return $this->getMimeType();
				break;
			case 7:
				return $this->getSize();
				break;
			case 8:
				return $this->getDescription();
				break;
			case 9:
				return $this->getDateCreated();
				break;
			case 10:
				return $this->getSendEmail();
				break;
			case 11:
				return $this->getCreatedBy();
				break;
			case 12:
				return $this->getDateModified();
				break;
			case 13:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FileDetailPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getBatchId(),
			$keys[2] => $this->getGarmentCode(),
			$keys[3] => $this->getFileName(),
			$keys[4] => $this->getPath(),
			$keys[5] => $this->getFileNameOriginal(),
			$keys[6] => $this->getMimeType(),
			$keys[7] => $this->getSize(),
			$keys[8] => $this->getDescription(),
			$keys[9] => $this->getDateCreated(),
			$keys[10] => $this->getSendEmail(),
			$keys[11] => $this->getCreatedBy(),
			$keys[12] => $this->getDateModified(),
			$keys[13] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FileDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setBatchId($value);
				break;
			case 2:
				$this->setGarmentCode($value);
				break;
			case 3:
				$this->setFileName($value);
				break;
			case 4:
				$this->setPath($value);
				break;
			case 5:
				$this->setFileNameOriginal($value);
				break;
			case 6:
				$this->setMimeType($value);
				break;
			case 7:
				$this->setSize($value);
				break;
			case 8:
				$this->setDescription($value);
				break;
			case 9:
				$this->setDateCreated($value);
				break;
			case 10:
				$this->setSendEmail($value);
				break;
			case 11:
				$this->setCreatedBy($value);
				break;
			case 12:
				$this->setDateModified($value);
				break;
			case 13:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FileDetailPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setBatchId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setGarmentCode($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFileName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPath($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFileNameOriginal($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setMimeType($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSize($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDescription($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateCreated($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setSendEmail($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCreatedBy($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDateModified($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setModifiedBy($arr[$keys[13]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(FileDetailPeer::DATABASE_NAME);

		if ($this->isColumnModified(FileDetailPeer::ID)) $criteria->add(FileDetailPeer::ID, $this->id);
		if ($this->isColumnModified(FileDetailPeer::BATCH_ID)) $criteria->add(FileDetailPeer::BATCH_ID, $this->batch_id);
		if ($this->isColumnModified(FileDetailPeer::GARMENT_CODE)) $criteria->add(FileDetailPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(FileDetailPeer::FILE_NAME)) $criteria->add(FileDetailPeer::FILE_NAME, $this->file_name);
		if ($this->isColumnModified(FileDetailPeer::PATH)) $criteria->add(FileDetailPeer::PATH, $this->path);
		if ($this->isColumnModified(FileDetailPeer::FILE_NAME_ORIGINAL)) $criteria->add(FileDetailPeer::FILE_NAME_ORIGINAL, $this->file_name_original);
		if ($this->isColumnModified(FileDetailPeer::MIME_TYPE)) $criteria->add(FileDetailPeer::MIME_TYPE, $this->mime_type);
		if ($this->isColumnModified(FileDetailPeer::SIZE)) $criteria->add(FileDetailPeer::SIZE, $this->size);
		if ($this->isColumnModified(FileDetailPeer::DESCRIPTION)) $criteria->add(FileDetailPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(FileDetailPeer::DATE_CREATED)) $criteria->add(FileDetailPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(FileDetailPeer::SEND_EMAIL)) $criteria->add(FileDetailPeer::SEND_EMAIL, $this->send_email);
		if ($this->isColumnModified(FileDetailPeer::CREATED_BY)) $criteria->add(FileDetailPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(FileDetailPeer::DATE_MODIFIED)) $criteria->add(FileDetailPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(FileDetailPeer::MODIFIED_BY)) $criteria->add(FileDetailPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(FileDetailPeer::DATABASE_NAME);

		$criteria->add(FileDetailPeer::ID, $this->id);

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

		$copyObj->setBatchId($this->batch_id);

		$copyObj->setGarmentCode($this->garment_code);

		$copyObj->setFileName($this->file_name);

		$copyObj->setPath($this->path);

		$copyObj->setFileNameOriginal($this->file_name_original);

		$copyObj->setMimeType($this->mime_type);

		$copyObj->setSize($this->size);

		$copyObj->setDescription($this->description);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setSendEmail($this->send_email);

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
			self::$peer = new FileDetailPeer();
		}
		return self::$peer;
	}

} 
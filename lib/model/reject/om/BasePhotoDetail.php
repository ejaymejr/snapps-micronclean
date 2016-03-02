<?php


abstract class BasePhotoDetail extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $batch_id;


	
	protected $customer_id;


	
	protected $name;


	
	protected $garment_code;


	
	protected $color;


	
	protected $garment;


	
	protected $reason;


	
	protected $size;


	
	protected $no_of_times_wash;


	
	protected $department;


	
	protected $shift;


	
	protected $garment_action;


	
	protected $created_by;


	
	protected $date_created;


	
	protected $modified_by;


	
	protected $date_modified;


	
	protected $description;


	
	protected $filelink;


	
	protected $filename;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getTransDate($format = 'Y-m-d H:i:s')
	{

		if ($this->trans_date === null || $this->trans_date === '') {
			return null;
		} elseif (!is_int($this->trans_date)) {
						$ts = strtotime($this->trans_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [trans_date] as date/time value: " . var_export($this->trans_date, true));
			}
		} else {
			$ts = $this->trans_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getBatchId()
	{

		return $this->batch_id;
	}

	
	public function getCustomerId()
	{

		return $this->customer_id;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getGarmentCode()
	{

		return $this->garment_code;
	}

	
	public function getColor()
	{

		return $this->color;
	}

	
	public function getGarment()
	{

		return $this->garment;
	}

	
	public function getReason()
	{

		return $this->reason;
	}

	
	public function getSize()
	{

		return $this->size;
	}

	
	public function getNoOfTimesWash()
	{

		return $this->no_of_times_wash;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getShift()
	{

		return $this->shift;
	}

	
	public function getGarmentAction()
	{

		return $this->garment_action;
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

	
	public function getDescription()
	{

		return $this->description;
	}

	
	public function getFilelink()
	{

		return $this->filelink;
	}

	
	public function getFilename()
	{

		return $this->filename;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::ID;
		}

	} 
	
	public function setTransDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [trans_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->trans_date !== $ts) {
			$this->trans_date = $ts;
			$this->modifiedColumns[] = PhotoDetailPeer::TRANS_DATE;
		}

	} 
	
	public function setBatchId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->batch_id !== $v) {
			$this->batch_id = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::BATCH_ID;
		}

	} 
	
	public function setCustomerId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer_id !== $v) {
			$this->customer_id = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::CUSTOMER_ID;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::NAME;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v) {
			$this->garment_code = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::GARMENT_CODE;
		}

	} 
	
	public function setColor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->color !== $v) {
			$this->color = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::COLOR;
		}

	} 
	
	public function setGarment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment !== $v) {
			$this->garment = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::GARMENT;
		}

	} 
	
	public function setReason($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reason !== $v) {
			$this->reason = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::REASON;
		}

	} 
	
	public function setSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->size !== $v) {
			$this->size = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::SIZE;
		}

	} 
	
	public function setNoOfTimesWash($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->no_of_times_wash !== $v) {
			$this->no_of_times_wash = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::NO_OF_TIMES_WASH;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v) {
			$this->department = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::DEPARTMENT;
		}

	} 
	
	public function setShift($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shift !== $v) {
			$this->shift = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::SHIFT;
		}

	} 
	
	public function setGarmentAction($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_action !== $v) {
			$this->garment_action = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::GARMENT_ACTION;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::CREATED_BY;
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
			$this->modifiedColumns[] = PhotoDetailPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = PhotoDetailPeer::DATE_MODIFIED;
		}

	} 
	
	public function setDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::DESCRIPTION;
		}

	} 
	
	public function setFilelink($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->filelink !== $v) {
			$this->filelink = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::FILELINK;
		}

	} 
	
	public function setFilename($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->filename !== $v) {
			$this->filename = $v;
			$this->modifiedColumns[] = PhotoDetailPeer::FILENAME;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->trans_date = $rs->getTimestamp($startcol + 1, null);

			$this->batch_id = $rs->getString($startcol + 2);

			$this->customer_id = $rs->getString($startcol + 3);

			$this->name = $rs->getString($startcol + 4);

			$this->garment_code = $rs->getString($startcol + 5);

			$this->color = $rs->getString($startcol + 6);

			$this->garment = $rs->getString($startcol + 7);

			$this->reason = $rs->getString($startcol + 8);

			$this->size = $rs->getString($startcol + 9);

			$this->no_of_times_wash = $rs->getString($startcol + 10);

			$this->department = $rs->getString($startcol + 11);

			$this->shift = $rs->getString($startcol + 12);

			$this->garment_action = $rs->getString($startcol + 13);

			$this->created_by = $rs->getString($startcol + 14);

			$this->date_created = $rs->getTimestamp($startcol + 15, null);

			$this->modified_by = $rs->getString($startcol + 16);

			$this->date_modified = $rs->getTimestamp($startcol + 17, null);

			$this->description = $rs->getString($startcol + 18);

			$this->filelink = $rs->getString($startcol + 19);

			$this->filename = $rs->getString($startcol + 20);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 21; 
		} catch (Exception $e) {
			throw new PropelException("Error populating PhotoDetail object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PhotoDetailPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PhotoDetailPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(PhotoDetailPeer::DATABASE_NAME);
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
					$pk = PhotoDetailPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PhotoDetailPeer::doUpdate($this, $con);
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


			if (($retval = PhotoDetailPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PhotoDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTransDate();
				break;
			case 2:
				return $this->getBatchId();
				break;
			case 3:
				return $this->getCustomerId();
				break;
			case 4:
				return $this->getName();
				break;
			case 5:
				return $this->getGarmentCode();
				break;
			case 6:
				return $this->getColor();
				break;
			case 7:
				return $this->getGarment();
				break;
			case 8:
				return $this->getReason();
				break;
			case 9:
				return $this->getSize();
				break;
			case 10:
				return $this->getNoOfTimesWash();
				break;
			case 11:
				return $this->getDepartment();
				break;
			case 12:
				return $this->getShift();
				break;
			case 13:
				return $this->getGarmentAction();
				break;
			case 14:
				return $this->getCreatedBy();
				break;
			case 15:
				return $this->getDateCreated();
				break;
			case 16:
				return $this->getModifiedBy();
				break;
			case 17:
				return $this->getDateModified();
				break;
			case 18:
				return $this->getDescription();
				break;
			case 19:
				return $this->getFilelink();
				break;
			case 20:
				return $this->getFilename();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PhotoDetailPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getBatchId(),
			$keys[3] => $this->getCustomerId(),
			$keys[4] => $this->getName(),
			$keys[5] => $this->getGarmentCode(),
			$keys[6] => $this->getColor(),
			$keys[7] => $this->getGarment(),
			$keys[8] => $this->getReason(),
			$keys[9] => $this->getSize(),
			$keys[10] => $this->getNoOfTimesWash(),
			$keys[11] => $this->getDepartment(),
			$keys[12] => $this->getShift(),
			$keys[13] => $this->getGarmentAction(),
			$keys[14] => $this->getCreatedBy(),
			$keys[15] => $this->getDateCreated(),
			$keys[16] => $this->getModifiedBy(),
			$keys[17] => $this->getDateModified(),
			$keys[18] => $this->getDescription(),
			$keys[19] => $this->getFilelink(),
			$keys[20] => $this->getFilename(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PhotoDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTransDate($value);
				break;
			case 2:
				$this->setBatchId($value);
				break;
			case 3:
				$this->setCustomerId($value);
				break;
			case 4:
				$this->setName($value);
				break;
			case 5:
				$this->setGarmentCode($value);
				break;
			case 6:
				$this->setColor($value);
				break;
			case 7:
				$this->setGarment($value);
				break;
			case 8:
				$this->setReason($value);
				break;
			case 9:
				$this->setSize($value);
				break;
			case 10:
				$this->setNoOfTimesWash($value);
				break;
			case 11:
				$this->setDepartment($value);
				break;
			case 12:
				$this->setShift($value);
				break;
			case 13:
				$this->setGarmentAction($value);
				break;
			case 14:
				$this->setCreatedBy($value);
				break;
			case 15:
				$this->setDateCreated($value);
				break;
			case 16:
				$this->setModifiedBy($value);
				break;
			case 17:
				$this->setDateModified($value);
				break;
			case 18:
				$this->setDescription($value);
				break;
			case 19:
				$this->setFilelink($value);
				break;
			case 20:
				$this->setFilename($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PhotoDetailPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setBatchId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCustomerId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setGarmentCode($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setColor($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setGarment($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setReason($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setSize($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setNoOfTimesWash($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDepartment($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setShift($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setGarmentAction($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCreatedBy($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setDateCreated($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setModifiedBy($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setDateModified($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDescription($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setFilelink($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setFilename($arr[$keys[20]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PhotoDetailPeer::DATABASE_NAME);

		if ($this->isColumnModified(PhotoDetailPeer::ID)) $criteria->add(PhotoDetailPeer::ID, $this->id);
		if ($this->isColumnModified(PhotoDetailPeer::TRANS_DATE)) $criteria->add(PhotoDetailPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(PhotoDetailPeer::BATCH_ID)) $criteria->add(PhotoDetailPeer::BATCH_ID, $this->batch_id);
		if ($this->isColumnModified(PhotoDetailPeer::CUSTOMER_ID)) $criteria->add(PhotoDetailPeer::CUSTOMER_ID, $this->customer_id);
		if ($this->isColumnModified(PhotoDetailPeer::NAME)) $criteria->add(PhotoDetailPeer::NAME, $this->name);
		if ($this->isColumnModified(PhotoDetailPeer::GARMENT_CODE)) $criteria->add(PhotoDetailPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(PhotoDetailPeer::COLOR)) $criteria->add(PhotoDetailPeer::COLOR, $this->color);
		if ($this->isColumnModified(PhotoDetailPeer::GARMENT)) $criteria->add(PhotoDetailPeer::GARMENT, $this->garment);
		if ($this->isColumnModified(PhotoDetailPeer::REASON)) $criteria->add(PhotoDetailPeer::REASON, $this->reason);
		if ($this->isColumnModified(PhotoDetailPeer::SIZE)) $criteria->add(PhotoDetailPeer::SIZE, $this->size);
		if ($this->isColumnModified(PhotoDetailPeer::NO_OF_TIMES_WASH)) $criteria->add(PhotoDetailPeer::NO_OF_TIMES_WASH, $this->no_of_times_wash);
		if ($this->isColumnModified(PhotoDetailPeer::DEPARTMENT)) $criteria->add(PhotoDetailPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(PhotoDetailPeer::SHIFT)) $criteria->add(PhotoDetailPeer::SHIFT, $this->shift);
		if ($this->isColumnModified(PhotoDetailPeer::GARMENT_ACTION)) $criteria->add(PhotoDetailPeer::GARMENT_ACTION, $this->garment_action);
		if ($this->isColumnModified(PhotoDetailPeer::CREATED_BY)) $criteria->add(PhotoDetailPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(PhotoDetailPeer::DATE_CREATED)) $criteria->add(PhotoDetailPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(PhotoDetailPeer::MODIFIED_BY)) $criteria->add(PhotoDetailPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(PhotoDetailPeer::DATE_MODIFIED)) $criteria->add(PhotoDetailPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(PhotoDetailPeer::DESCRIPTION)) $criteria->add(PhotoDetailPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(PhotoDetailPeer::FILELINK)) $criteria->add(PhotoDetailPeer::FILELINK, $this->filelink);
		if ($this->isColumnModified(PhotoDetailPeer::FILENAME)) $criteria->add(PhotoDetailPeer::FILENAME, $this->filename);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PhotoDetailPeer::DATABASE_NAME);

		$criteria->add(PhotoDetailPeer::ID, $this->id);

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

		$copyObj->setTransDate($this->trans_date);

		$copyObj->setBatchId($this->batch_id);

		$copyObj->setCustomerId($this->customer_id);

		$copyObj->setName($this->name);

		$copyObj->setGarmentCode($this->garment_code);

		$copyObj->setColor($this->color);

		$copyObj->setGarment($this->garment);

		$copyObj->setReason($this->reason);

		$copyObj->setSize($this->size);

		$copyObj->setNoOfTimesWash($this->no_of_times_wash);

		$copyObj->setDepartment($this->department);

		$copyObj->setShift($this->shift);

		$copyObj->setGarmentAction($this->garment_action);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateModified($this->date_modified);

		$copyObj->setDescription($this->description);

		$copyObj->setFilelink($this->filelink);

		$copyObj->setFilename($this->filename);


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
			self::$peer = new PhotoDetailPeer();
		}
		return self::$peer;
	}

} 
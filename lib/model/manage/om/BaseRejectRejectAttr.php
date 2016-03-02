<?php


abstract class BaseRejectRejectAttr extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $customer = 'null';


	
	protected $garment_type = 'null';


	
	protected $reason = 'null';


	
	protected $repairable = 'null';


	
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

	
	public function getCustomer()
	{

		return $this->customer;
	}

	
	public function getGarmentType()
	{

		return $this->garment_type;
	}

	
	public function getReason()
	{

		return $this->reason;
	}

	
	public function getRepairable()
	{

		return $this->repairable;
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

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = RejectRejectAttrPeer::ID;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = RejectRejectAttrPeer::CUSTOMER;
		}

	} 
	
	public function setGarmentType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_type !== $v || $v === 'null') {
			$this->garment_type = $v;
			$this->modifiedColumns[] = RejectRejectAttrPeer::GARMENT_TYPE;
		}

	} 
	
	public function setReason($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reason !== $v || $v === 'null') {
			$this->reason = $v;
			$this->modifiedColumns[] = RejectRejectAttrPeer::REASON;
		}

	} 
	
	public function setRepairable($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->repairable !== $v || $v === 'null') {
			$this->repairable = $v;
			$this->modifiedColumns[] = RejectRejectAttrPeer::REPAIRABLE;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = RejectRejectAttrPeer::CREATED_BY;
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
			$this->modifiedColumns[] = RejectRejectAttrPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = RejectRejectAttrPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = RejectRejectAttrPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->customer = $rs->getString($startcol + 1);

			$this->garment_type = $rs->getString($startcol + 2);

			$this->reason = $rs->getString($startcol + 3);

			$this->repairable = $rs->getString($startcol + 4);

			$this->created_by = $rs->getString($startcol + 5);

			$this->date_created = $rs->getTimestamp($startcol + 6, null);

			$this->modified_by = $rs->getString($startcol + 7);

			$this->date_modified = $rs->getTimestamp($startcol + 8, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating RejectRejectAttr object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RejectRejectAttrPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			RejectRejectAttrPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(RejectRejectAttrPeer::DATABASE_NAME);
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
					$pk = RejectRejectAttrPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += RejectRejectAttrPeer::doUpdate($this, $con);
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


			if (($retval = RejectRejectAttrPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RejectRejectAttrPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCustomer();
				break;
			case 2:
				return $this->getGarmentType();
				break;
			case 3:
				return $this->getReason();
				break;
			case 4:
				return $this->getRepairable();
				break;
			case 5:
				return $this->getCreatedBy();
				break;
			case 6:
				return $this->getDateCreated();
				break;
			case 7:
				return $this->getModifiedBy();
				break;
			case 8:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RejectRejectAttrPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCustomer(),
			$keys[2] => $this->getGarmentType(),
			$keys[3] => $this->getReason(),
			$keys[4] => $this->getRepairable(),
			$keys[5] => $this->getCreatedBy(),
			$keys[6] => $this->getDateCreated(),
			$keys[7] => $this->getModifiedBy(),
			$keys[8] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RejectRejectAttrPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCustomer($value);
				break;
			case 2:
				$this->setGarmentType($value);
				break;
			case 3:
				$this->setReason($value);
				break;
			case 4:
				$this->setRepairable($value);
				break;
			case 5:
				$this->setCreatedBy($value);
				break;
			case 6:
				$this->setDateCreated($value);
				break;
			case 7:
				$this->setModifiedBy($value);
				break;
			case 8:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RejectRejectAttrPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCustomer($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setGarmentType($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setReason($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setRepairable($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedBy($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateCreated($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setModifiedBy($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateModified($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(RejectRejectAttrPeer::DATABASE_NAME);

		if ($this->isColumnModified(RejectRejectAttrPeer::ID)) $criteria->add(RejectRejectAttrPeer::ID, $this->id);
		if ($this->isColumnModified(RejectRejectAttrPeer::CUSTOMER)) $criteria->add(RejectRejectAttrPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(RejectRejectAttrPeer::GARMENT_TYPE)) $criteria->add(RejectRejectAttrPeer::GARMENT_TYPE, $this->garment_type);
		if ($this->isColumnModified(RejectRejectAttrPeer::REASON)) $criteria->add(RejectRejectAttrPeer::REASON, $this->reason);
		if ($this->isColumnModified(RejectRejectAttrPeer::REPAIRABLE)) $criteria->add(RejectRejectAttrPeer::REPAIRABLE, $this->repairable);
		if ($this->isColumnModified(RejectRejectAttrPeer::CREATED_BY)) $criteria->add(RejectRejectAttrPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(RejectRejectAttrPeer::DATE_CREATED)) $criteria->add(RejectRejectAttrPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(RejectRejectAttrPeer::MODIFIED_BY)) $criteria->add(RejectRejectAttrPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(RejectRejectAttrPeer::DATE_MODIFIED)) $criteria->add(RejectRejectAttrPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(RejectRejectAttrPeer::DATABASE_NAME);

		$criteria->add(RejectRejectAttrPeer::ID, $this->id);

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

		$copyObj->setCustomer($this->customer);

		$copyObj->setGarmentType($this->garment_type);

		$copyObj->setReason($this->reason);

		$copyObj->setRepairable($this->repairable);

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
			self::$peer = new RejectRejectAttrPeer();
		}
		return self::$peer;
	}

} 
<?php


abstract class BaseTicketDesignDetail extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $garment = '';


	
	protected $component = '';


	
	protected $value = '';


	
	protected $remark;


	
	protected $sequence = 1;


	
	protected $created_by;


	
	protected $date_created;


	
	protected $modified_by;


	
	protected $date_modified;


	
	protected $ticket_design_header_id = '0';

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getGarment()
	{

		return $this->garment;
	}

	
	public function getComponent()
	{

		return $this->component;
	}

	
	public function getValue()
	{

		return $this->value;
	}

	
	public function getRemark()
	{

		return $this->remark;
	}

	
	public function getSequence()
	{

		return $this->sequence;
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

	
	public function getTicketDesignHeaderId()
	{

		return $this->ticket_design_header_id;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TicketDesignDetailPeer::ID;
		}

	} 
	
	public function setGarment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment !== $v || $v === '') {
			$this->garment = $v;
			$this->modifiedColumns[] = TicketDesignDetailPeer::GARMENT;
		}

	} 
	
	public function setComponent($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->component !== $v || $v === '') {
			$this->component = $v;
			$this->modifiedColumns[] = TicketDesignDetailPeer::COMPONENT;
		}

	} 
	
	public function setValue($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->value !== $v || $v === '') {
			$this->value = $v;
			$this->modifiedColumns[] = TicketDesignDetailPeer::VALUE;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = TicketDesignDetailPeer::REMARK;
		}

	} 
	
	public function setSequence($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->sequence !== $v || $v === 1) {
			$this->sequence = $v;
			$this->modifiedColumns[] = TicketDesignDetailPeer::SEQUENCE;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = TicketDesignDetailPeer::CREATED_BY;
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
			$this->modifiedColumns[] = TicketDesignDetailPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = TicketDesignDetailPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = TicketDesignDetailPeer::DATE_MODIFIED;
		}

	} 
	
	public function setTicketDesignHeaderId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ticket_design_header_id !== $v || $v === '0') {
			$this->ticket_design_header_id = $v;
			$this->modifiedColumns[] = TicketDesignDetailPeer::TICKET_DESIGN_HEADER_ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->garment = $rs->getString($startcol + 1);

			$this->component = $rs->getString($startcol + 2);

			$this->value = $rs->getString($startcol + 3);

			$this->remark = $rs->getString($startcol + 4);

			$this->sequence = $rs->getInt($startcol + 5);

			$this->created_by = $rs->getString($startcol + 6);

			$this->date_created = $rs->getTimestamp($startcol + 7, null);

			$this->modified_by = $rs->getString($startcol + 8);

			$this->date_modified = $rs->getTimestamp($startcol + 9, null);

			$this->ticket_design_header_id = $rs->getString($startcol + 10);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TicketDesignDetail object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TicketDesignDetailPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TicketDesignDetailPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TicketDesignDetailPeer::DATABASE_NAME);
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
					$pk = TicketDesignDetailPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TicketDesignDetailPeer::doUpdate($this, $con);
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


			if (($retval = TicketDesignDetailPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TicketDesignDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getGarment();
				break;
			case 2:
				return $this->getComponent();
				break;
			case 3:
				return $this->getValue();
				break;
			case 4:
				return $this->getRemark();
				break;
			case 5:
				return $this->getSequence();
				break;
			case 6:
				return $this->getCreatedBy();
				break;
			case 7:
				return $this->getDateCreated();
				break;
			case 8:
				return $this->getModifiedBy();
				break;
			case 9:
				return $this->getDateModified();
				break;
			case 10:
				return $this->getTicketDesignHeaderId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TicketDesignDetailPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getGarment(),
			$keys[2] => $this->getComponent(),
			$keys[3] => $this->getValue(),
			$keys[4] => $this->getRemark(),
			$keys[5] => $this->getSequence(),
			$keys[6] => $this->getCreatedBy(),
			$keys[7] => $this->getDateCreated(),
			$keys[8] => $this->getModifiedBy(),
			$keys[9] => $this->getDateModified(),
			$keys[10] => $this->getTicketDesignHeaderId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TicketDesignDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setGarment($value);
				break;
			case 2:
				$this->setComponent($value);
				break;
			case 3:
				$this->setValue($value);
				break;
			case 4:
				$this->setRemark($value);
				break;
			case 5:
				$this->setSequence($value);
				break;
			case 6:
				$this->setCreatedBy($value);
				break;
			case 7:
				$this->setDateCreated($value);
				break;
			case 8:
				$this->setModifiedBy($value);
				break;
			case 9:
				$this->setDateModified($value);
				break;
			case 10:
				$this->setTicketDesignHeaderId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TicketDesignDetailPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setGarment($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setComponent($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setValue($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setRemark($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSequence($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedBy($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDateCreated($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setModifiedBy($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateModified($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setTicketDesignHeaderId($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TicketDesignDetailPeer::DATABASE_NAME);

		if ($this->isColumnModified(TicketDesignDetailPeer::ID)) $criteria->add(TicketDesignDetailPeer::ID, $this->id);
		if ($this->isColumnModified(TicketDesignDetailPeer::GARMENT)) $criteria->add(TicketDesignDetailPeer::GARMENT, $this->garment);
		if ($this->isColumnModified(TicketDesignDetailPeer::COMPONENT)) $criteria->add(TicketDesignDetailPeer::COMPONENT, $this->component);
		if ($this->isColumnModified(TicketDesignDetailPeer::VALUE)) $criteria->add(TicketDesignDetailPeer::VALUE, $this->value);
		if ($this->isColumnModified(TicketDesignDetailPeer::REMARK)) $criteria->add(TicketDesignDetailPeer::REMARK, $this->remark);
		if ($this->isColumnModified(TicketDesignDetailPeer::SEQUENCE)) $criteria->add(TicketDesignDetailPeer::SEQUENCE, $this->sequence);
		if ($this->isColumnModified(TicketDesignDetailPeer::CREATED_BY)) $criteria->add(TicketDesignDetailPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(TicketDesignDetailPeer::DATE_CREATED)) $criteria->add(TicketDesignDetailPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(TicketDesignDetailPeer::MODIFIED_BY)) $criteria->add(TicketDesignDetailPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(TicketDesignDetailPeer::DATE_MODIFIED)) $criteria->add(TicketDesignDetailPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(TicketDesignDetailPeer::TICKET_DESIGN_HEADER_ID)) $criteria->add(TicketDesignDetailPeer::TICKET_DESIGN_HEADER_ID, $this->ticket_design_header_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TicketDesignDetailPeer::DATABASE_NAME);

		$criteria->add(TicketDesignDetailPeer::ID, $this->id);

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

		$copyObj->setGarment($this->garment);

		$copyObj->setComponent($this->component);

		$copyObj->setValue($this->value);

		$copyObj->setRemark($this->remark);

		$copyObj->setSequence($this->sequence);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateModified($this->date_modified);

		$copyObj->setTicketDesignHeaderId($this->ticket_design_header_id);


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
			self::$peer = new TicketDesignDetailPeer();
		}
		return self::$peer;
	}

} 
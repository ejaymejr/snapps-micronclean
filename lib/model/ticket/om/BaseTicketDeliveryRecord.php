<?php


abstract class BaseTicketDeliveryRecord extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $ticket_design_header_id = '0';


	
	protected $ticket_design_detail_id = '0';


	
	protected $delivery_ticket_id;


	
	protected $garment = '';


	
	protected $component = 'null';


	
	protected $value = '';


	
	protected $quantity;


	
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

	
	public function getTicketDesignHeaderId()
	{

		return $this->ticket_design_header_id;
	}

	
	public function getTicketDesignDetailId()
	{

		return $this->ticket_design_detail_id;
	}

	
	public function getDeliveryTicketId()
	{

		return $this->delivery_ticket_id;
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

	
	public function getQuantity()
	{

		return $this->quantity;
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
			$this->modifiedColumns[] = TicketDeliveryRecordPeer::ID;
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
			$this->modifiedColumns[] = TicketDeliveryRecordPeer::TRANS_DATE;
		}

	} 
	
	public function setTicketDesignHeaderId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ticket_design_header_id !== $v || $v === '0') {
			$this->ticket_design_header_id = $v;
			$this->modifiedColumns[] = TicketDeliveryRecordPeer::TICKET_DESIGN_HEADER_ID;
		}

	} 
	
	public function setTicketDesignDetailId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ticket_design_detail_id !== $v || $v === '0') {
			$this->ticket_design_detail_id = $v;
			$this->modifiedColumns[] = TicketDeliveryRecordPeer::TICKET_DESIGN_DETAIL_ID;
		}

	} 
	
	public function setDeliveryTicketId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->delivery_ticket_id !== $v) {
			$this->delivery_ticket_id = $v;
			$this->modifiedColumns[] = TicketDeliveryRecordPeer::DELIVERY_TICKET_ID;
		}

	} 
	
	public function setGarment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment !== $v || $v === '') {
			$this->garment = $v;
			$this->modifiedColumns[] = TicketDeliveryRecordPeer::GARMENT;
		}

	} 
	
	public function setComponent($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->component !== $v || $v === 'null') {
			$this->component = $v;
			$this->modifiedColumns[] = TicketDeliveryRecordPeer::COMPONENT;
		}

	} 
	
	public function setValue($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->value !== $v || $v === '') {
			$this->value = $v;
			$this->modifiedColumns[] = TicketDeliveryRecordPeer::VALUE;
		}

	} 
	
	public function setQuantity($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->quantity !== $v) {
			$this->quantity = $v;
			$this->modifiedColumns[] = TicketDeliveryRecordPeer::QUANTITY;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = TicketDeliveryRecordPeer::CREATED_BY;
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
			$this->modifiedColumns[] = TicketDeliveryRecordPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = TicketDeliveryRecordPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = TicketDeliveryRecordPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getTimestamp($startcol + 1, null);

			$this->ticket_design_header_id = $rs->getString($startcol + 2);

			$this->ticket_design_detail_id = $rs->getString($startcol + 3);

			$this->delivery_ticket_id = $rs->getString($startcol + 4);

			$this->garment = $rs->getString($startcol + 5);

			$this->component = $rs->getString($startcol + 6);

			$this->value = $rs->getString($startcol + 7);

			$this->quantity = $rs->getString($startcol + 8);

			$this->created_by = $rs->getString($startcol + 9);

			$this->date_created = $rs->getTimestamp($startcol + 10, null);

			$this->modified_by = $rs->getString($startcol + 11);

			$this->date_modified = $rs->getTimestamp($startcol + 12, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 13; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TicketDeliveryRecord object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TicketDeliveryRecordPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TicketDeliveryRecordPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TicketDeliveryRecordPeer::DATABASE_NAME);
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
					$pk = TicketDeliveryRecordPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TicketDeliveryRecordPeer::doUpdate($this, $con);
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


			if (($retval = TicketDeliveryRecordPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TicketDeliveryRecordPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTicketDesignHeaderId();
				break;
			case 3:
				return $this->getTicketDesignDetailId();
				break;
			case 4:
				return $this->getDeliveryTicketId();
				break;
			case 5:
				return $this->getGarment();
				break;
			case 6:
				return $this->getComponent();
				break;
			case 7:
				return $this->getValue();
				break;
			case 8:
				return $this->getQuantity();
				break;
			case 9:
				return $this->getCreatedBy();
				break;
			case 10:
				return $this->getDateCreated();
				break;
			case 11:
				return $this->getModifiedBy();
				break;
			case 12:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TicketDeliveryRecordPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getTicketDesignHeaderId(),
			$keys[3] => $this->getTicketDesignDetailId(),
			$keys[4] => $this->getDeliveryTicketId(),
			$keys[5] => $this->getGarment(),
			$keys[6] => $this->getComponent(),
			$keys[7] => $this->getValue(),
			$keys[8] => $this->getQuantity(),
			$keys[9] => $this->getCreatedBy(),
			$keys[10] => $this->getDateCreated(),
			$keys[11] => $this->getModifiedBy(),
			$keys[12] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TicketDeliveryRecordPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTicketDesignHeaderId($value);
				break;
			case 3:
				$this->setTicketDesignDetailId($value);
				break;
			case 4:
				$this->setDeliveryTicketId($value);
				break;
			case 5:
				$this->setGarment($value);
				break;
			case 6:
				$this->setComponent($value);
				break;
			case 7:
				$this->setValue($value);
				break;
			case 8:
				$this->setQuantity($value);
				break;
			case 9:
				$this->setCreatedBy($value);
				break;
			case 10:
				$this->setDateCreated($value);
				break;
			case 11:
				$this->setModifiedBy($value);
				break;
			case 12:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TicketDeliveryRecordPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTicketDesignHeaderId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTicketDesignDetailId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDeliveryTicketId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setGarment($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setComponent($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setValue($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setQuantity($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCreatedBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateCreated($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setModifiedBy($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDateModified($arr[$keys[12]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TicketDeliveryRecordPeer::DATABASE_NAME);

		if ($this->isColumnModified(TicketDeliveryRecordPeer::ID)) $criteria->add(TicketDeliveryRecordPeer::ID, $this->id);
		if ($this->isColumnModified(TicketDeliveryRecordPeer::TRANS_DATE)) $criteria->add(TicketDeliveryRecordPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(TicketDeliveryRecordPeer::TICKET_DESIGN_HEADER_ID)) $criteria->add(TicketDeliveryRecordPeer::TICKET_DESIGN_HEADER_ID, $this->ticket_design_header_id);
		if ($this->isColumnModified(TicketDeliveryRecordPeer::TICKET_DESIGN_DETAIL_ID)) $criteria->add(TicketDeliveryRecordPeer::TICKET_DESIGN_DETAIL_ID, $this->ticket_design_detail_id);
		if ($this->isColumnModified(TicketDeliveryRecordPeer::DELIVERY_TICKET_ID)) $criteria->add(TicketDeliveryRecordPeer::DELIVERY_TICKET_ID, $this->delivery_ticket_id);
		if ($this->isColumnModified(TicketDeliveryRecordPeer::GARMENT)) $criteria->add(TicketDeliveryRecordPeer::GARMENT, $this->garment);
		if ($this->isColumnModified(TicketDeliveryRecordPeer::COMPONENT)) $criteria->add(TicketDeliveryRecordPeer::COMPONENT, $this->component);
		if ($this->isColumnModified(TicketDeliveryRecordPeer::VALUE)) $criteria->add(TicketDeliveryRecordPeer::VALUE, $this->value);
		if ($this->isColumnModified(TicketDeliveryRecordPeer::QUANTITY)) $criteria->add(TicketDeliveryRecordPeer::QUANTITY, $this->quantity);
		if ($this->isColumnModified(TicketDeliveryRecordPeer::CREATED_BY)) $criteria->add(TicketDeliveryRecordPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(TicketDeliveryRecordPeer::DATE_CREATED)) $criteria->add(TicketDeliveryRecordPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(TicketDeliveryRecordPeer::MODIFIED_BY)) $criteria->add(TicketDeliveryRecordPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(TicketDeliveryRecordPeer::DATE_MODIFIED)) $criteria->add(TicketDeliveryRecordPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TicketDeliveryRecordPeer::DATABASE_NAME);

		$criteria->add(TicketDeliveryRecordPeer::ID, $this->id);

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

		$copyObj->setTicketDesignHeaderId($this->ticket_design_header_id);

		$copyObj->setTicketDesignDetailId($this->ticket_design_detail_id);

		$copyObj->setDeliveryTicketId($this->delivery_ticket_id);

		$copyObj->setGarment($this->garment);

		$copyObj->setComponent($this->component);

		$copyObj->setValue($this->value);

		$copyObj->setQuantity($this->quantity);

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
			self::$peer = new TicketDeliveryRecordPeer();
		}
		return self::$peer;
	}

} 
<?php


abstract class BaseLabelRequest extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $batch;


	
	protected $company;


	
	protected $name;


	
	protected $gid;


	
	protected $department;


	
	protected $designation;


	
	protected $hanger_no;


	
	protected $shift;


	
	protected $fset;


	
	protected $cell;


	
	protected $end;


	
	protected $locker;


	
	protected $cost_center;


	
	protected $platform;


	
	protected $gsize;


	
	protected $template;


	
	protected $is_checked;


	
	protected $is_printed;


	
	protected $order_by;


	
	protected $printed_by;


	
	protected $date_printed;


	
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

	
	public function getBatch()
	{

		return $this->batch;
	}

	
	public function getCompany()
	{

		return $this->company;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getGid()
	{

		return $this->gid;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getDesignation()
	{

		return $this->designation;
	}

	
	public function getHangerNo()
	{

		return $this->hanger_no;
	}

	
	public function getShift()
	{

		return $this->shift;
	}

	
	public function getFset()
	{

		return $this->fset;
	}

	
	public function getCell()
	{

		return $this->cell;
	}

	
	public function getEnd()
	{

		return $this->end;
	}

	
	public function getLocker()
	{

		return $this->locker;
	}

	
	public function getCostCenter()
	{

		return $this->cost_center;
	}

	
	public function getPlatform()
	{

		return $this->platform;
	}

	
	public function getGsize()
	{

		return $this->gsize;
	}

	
	public function getTemplate()
	{

		return $this->template;
	}

	
	public function getIsChecked()
	{

		return $this->is_checked;
	}

	
	public function getIsPrinted()
	{

		return $this->is_printed;
	}

	
	public function getOrderBy()
	{

		return $this->order_by;
	}

	
	public function getPrintedBy()
	{

		return $this->printed_by;
	}

	
	public function getDatePrinted($format = 'Y-m-d H:i:s')
	{

		if ($this->date_printed === null || $this->date_printed === '') {
			return null;
		} elseif (!is_int($this->date_printed)) {
						$ts = strtotime($this->date_printed);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_printed] as date/time value: " . var_export($this->date_printed, true));
			}
		} else {
			$ts = $this->date_printed;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
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
			$this->modifiedColumns[] = LabelRequestPeer::ID;
		}

	} 
	
	public function setBatch($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->batch !== $v) {
			$this->batch = $v;
			$this->modifiedColumns[] = LabelRequestPeer::BATCH;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v) {
			$this->company = $v;
			$this->modifiedColumns[] = LabelRequestPeer::COMPANY;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = LabelRequestPeer::NAME;
		}

	} 
	
	public function setGid($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->gid !== $v) {
			$this->gid = $v;
			$this->modifiedColumns[] = LabelRequestPeer::GID;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v) {
			$this->department = $v;
			$this->modifiedColumns[] = LabelRequestPeer::DEPARTMENT;
		}

	} 
	
	public function setDesignation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->designation !== $v) {
			$this->designation = $v;
			$this->modifiedColumns[] = LabelRequestPeer::DESIGNATION;
		}

	} 
	
	public function setHangerNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hanger_no !== $v) {
			$this->hanger_no = $v;
			$this->modifiedColumns[] = LabelRequestPeer::HANGER_NO;
		}

	} 
	
	public function setShift($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shift !== $v) {
			$this->shift = $v;
			$this->modifiedColumns[] = LabelRequestPeer::SHIFT;
		}

	} 
	
	public function setFset($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fset !== $v) {
			$this->fset = $v;
			$this->modifiedColumns[] = LabelRequestPeer::FSET;
		}

	} 
	
	public function setCell($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cell !== $v) {
			$this->cell = $v;
			$this->modifiedColumns[] = LabelRequestPeer::CELL;
		}

	} 
	
	public function setEnd($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->end !== $v) {
			$this->end = $v;
			$this->modifiedColumns[] = LabelRequestPeer::END;
		}

	} 
	
	public function setLocker($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->locker !== $v) {
			$this->locker = $v;
			$this->modifiedColumns[] = LabelRequestPeer::LOCKER;
		}

	} 
	
	public function setCostCenter($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cost_center !== $v) {
			$this->cost_center = $v;
			$this->modifiedColumns[] = LabelRequestPeer::COST_CENTER;
		}

	} 
	
	public function setPlatform($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->platform !== $v) {
			$this->platform = $v;
			$this->modifiedColumns[] = LabelRequestPeer::PLATFORM;
		}

	} 
	
	public function setGsize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->gsize !== $v) {
			$this->gsize = $v;
			$this->modifiedColumns[] = LabelRequestPeer::GSIZE;
		}

	} 
	
	public function setTemplate($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->template !== $v) {
			$this->template = $v;
			$this->modifiedColumns[] = LabelRequestPeer::TEMPLATE;
		}

	} 
	
	public function setIsChecked($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->is_checked !== $v) {
			$this->is_checked = $v;
			$this->modifiedColumns[] = LabelRequestPeer::IS_CHECKED;
		}

	} 
	
	public function setIsPrinted($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->is_printed !== $v) {
			$this->is_printed = $v;
			$this->modifiedColumns[] = LabelRequestPeer::IS_PRINTED;
		}

	} 
	
	public function setOrderBy($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->order_by !== $v) {
			$this->order_by = $v;
			$this->modifiedColumns[] = LabelRequestPeer::ORDER_BY;
		}

	} 
	
	public function setPrintedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->printed_by !== $v) {
			$this->printed_by = $v;
			$this->modifiedColumns[] = LabelRequestPeer::PRINTED_BY;
		}

	} 
	
	public function setDatePrinted($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_printed] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_printed !== $ts) {
			$this->date_printed = $ts;
			$this->modifiedColumns[] = LabelRequestPeer::DATE_PRINTED;
		}

	} 
	
	public function setQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->quantity !== $v) {
			$this->quantity = $v;
			$this->modifiedColumns[] = LabelRequestPeer::QUANTITY;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = LabelRequestPeer::CREATED_BY;
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
			$this->modifiedColumns[] = LabelRequestPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = LabelRequestPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = LabelRequestPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->batch = $rs->getString($startcol + 1);

			$this->company = $rs->getString($startcol + 2);

			$this->name = $rs->getString($startcol + 3);

			$this->gid = $rs->getString($startcol + 4);

			$this->department = $rs->getString($startcol + 5);

			$this->designation = $rs->getString($startcol + 6);

			$this->hanger_no = $rs->getString($startcol + 7);

			$this->shift = $rs->getString($startcol + 8);

			$this->fset = $rs->getString($startcol + 9);

			$this->cell = $rs->getString($startcol + 10);

			$this->end = $rs->getString($startcol + 11);

			$this->locker = $rs->getString($startcol + 12);

			$this->cost_center = $rs->getString($startcol + 13);

			$this->platform = $rs->getString($startcol + 14);

			$this->gsize = $rs->getString($startcol + 15);

			$this->template = $rs->getString($startcol + 16);

			$this->is_checked = $rs->getString($startcol + 17);

			$this->is_printed = $rs->getString($startcol + 18);

			$this->order_by = $rs->getInt($startcol + 19);

			$this->printed_by = $rs->getString($startcol + 20);

			$this->date_printed = $rs->getTimestamp($startcol + 21, null);

			$this->quantity = $rs->getInt($startcol + 22);

			$this->created_by = $rs->getString($startcol + 23);

			$this->date_created = $rs->getTimestamp($startcol + 24, null);

			$this->modified_by = $rs->getString($startcol + 25);

			$this->date_modified = $rs->getTimestamp($startcol + 26, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 27; 
		} catch (Exception $e) {
			throw new PropelException("Error populating LabelRequest object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(LabelRequestPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			LabelRequestPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(LabelRequestPeer::DATABASE_NAME);
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
					$pk = LabelRequestPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += LabelRequestPeer::doUpdate($this, $con);
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


			if (($retval = LabelRequestPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LabelRequestPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getBatch();
				break;
			case 2:
				return $this->getCompany();
				break;
			case 3:
				return $this->getName();
				break;
			case 4:
				return $this->getGid();
				break;
			case 5:
				return $this->getDepartment();
				break;
			case 6:
				return $this->getDesignation();
				break;
			case 7:
				return $this->getHangerNo();
				break;
			case 8:
				return $this->getShift();
				break;
			case 9:
				return $this->getFset();
				break;
			case 10:
				return $this->getCell();
				break;
			case 11:
				return $this->getEnd();
				break;
			case 12:
				return $this->getLocker();
				break;
			case 13:
				return $this->getCostCenter();
				break;
			case 14:
				return $this->getPlatform();
				break;
			case 15:
				return $this->getGsize();
				break;
			case 16:
				return $this->getTemplate();
				break;
			case 17:
				return $this->getIsChecked();
				break;
			case 18:
				return $this->getIsPrinted();
				break;
			case 19:
				return $this->getOrderBy();
				break;
			case 20:
				return $this->getPrintedBy();
				break;
			case 21:
				return $this->getDatePrinted();
				break;
			case 22:
				return $this->getQuantity();
				break;
			case 23:
				return $this->getCreatedBy();
				break;
			case 24:
				return $this->getDateCreated();
				break;
			case 25:
				return $this->getModifiedBy();
				break;
			case 26:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LabelRequestPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getBatch(),
			$keys[2] => $this->getCompany(),
			$keys[3] => $this->getName(),
			$keys[4] => $this->getGid(),
			$keys[5] => $this->getDepartment(),
			$keys[6] => $this->getDesignation(),
			$keys[7] => $this->getHangerNo(),
			$keys[8] => $this->getShift(),
			$keys[9] => $this->getFset(),
			$keys[10] => $this->getCell(),
			$keys[11] => $this->getEnd(),
			$keys[12] => $this->getLocker(),
			$keys[13] => $this->getCostCenter(),
			$keys[14] => $this->getPlatform(),
			$keys[15] => $this->getGsize(),
			$keys[16] => $this->getTemplate(),
			$keys[17] => $this->getIsChecked(),
			$keys[18] => $this->getIsPrinted(),
			$keys[19] => $this->getOrderBy(),
			$keys[20] => $this->getPrintedBy(),
			$keys[21] => $this->getDatePrinted(),
			$keys[22] => $this->getQuantity(),
			$keys[23] => $this->getCreatedBy(),
			$keys[24] => $this->getDateCreated(),
			$keys[25] => $this->getModifiedBy(),
			$keys[26] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LabelRequestPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setBatch($value);
				break;
			case 2:
				$this->setCompany($value);
				break;
			case 3:
				$this->setName($value);
				break;
			case 4:
				$this->setGid($value);
				break;
			case 5:
				$this->setDepartment($value);
				break;
			case 6:
				$this->setDesignation($value);
				break;
			case 7:
				$this->setHangerNo($value);
				break;
			case 8:
				$this->setShift($value);
				break;
			case 9:
				$this->setFset($value);
				break;
			case 10:
				$this->setCell($value);
				break;
			case 11:
				$this->setEnd($value);
				break;
			case 12:
				$this->setLocker($value);
				break;
			case 13:
				$this->setCostCenter($value);
				break;
			case 14:
				$this->setPlatform($value);
				break;
			case 15:
				$this->setGsize($value);
				break;
			case 16:
				$this->setTemplate($value);
				break;
			case 17:
				$this->setIsChecked($value);
				break;
			case 18:
				$this->setIsPrinted($value);
				break;
			case 19:
				$this->setOrderBy($value);
				break;
			case 20:
				$this->setPrintedBy($value);
				break;
			case 21:
				$this->setDatePrinted($value);
				break;
			case 22:
				$this->setQuantity($value);
				break;
			case 23:
				$this->setCreatedBy($value);
				break;
			case 24:
				$this->setDateCreated($value);
				break;
			case 25:
				$this->setModifiedBy($value);
				break;
			case 26:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LabelRequestPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setBatch($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCompany($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setGid($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDepartment($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDesignation($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setHangerNo($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setShift($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFset($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCell($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setEnd($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setLocker($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCostCenter($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setPlatform($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setGsize($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setTemplate($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setIsChecked($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setIsPrinted($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setOrderBy($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setPrintedBy($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setDatePrinted($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setQuantity($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setCreatedBy($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setDateCreated($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setModifiedBy($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setDateModified($arr[$keys[26]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(LabelRequestPeer::DATABASE_NAME);

		if ($this->isColumnModified(LabelRequestPeer::ID)) $criteria->add(LabelRequestPeer::ID, $this->id);
		if ($this->isColumnModified(LabelRequestPeer::BATCH)) $criteria->add(LabelRequestPeer::BATCH, $this->batch);
		if ($this->isColumnModified(LabelRequestPeer::COMPANY)) $criteria->add(LabelRequestPeer::COMPANY, $this->company);
		if ($this->isColumnModified(LabelRequestPeer::NAME)) $criteria->add(LabelRequestPeer::NAME, $this->name);
		if ($this->isColumnModified(LabelRequestPeer::GID)) $criteria->add(LabelRequestPeer::GID, $this->gid);
		if ($this->isColumnModified(LabelRequestPeer::DEPARTMENT)) $criteria->add(LabelRequestPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(LabelRequestPeer::DESIGNATION)) $criteria->add(LabelRequestPeer::DESIGNATION, $this->designation);
		if ($this->isColumnModified(LabelRequestPeer::HANGER_NO)) $criteria->add(LabelRequestPeer::HANGER_NO, $this->hanger_no);
		if ($this->isColumnModified(LabelRequestPeer::SHIFT)) $criteria->add(LabelRequestPeer::SHIFT, $this->shift);
		if ($this->isColumnModified(LabelRequestPeer::FSET)) $criteria->add(LabelRequestPeer::FSET, $this->fset);
		if ($this->isColumnModified(LabelRequestPeer::CELL)) $criteria->add(LabelRequestPeer::CELL, $this->cell);
		if ($this->isColumnModified(LabelRequestPeer::END)) $criteria->add(LabelRequestPeer::END, $this->end);
		if ($this->isColumnModified(LabelRequestPeer::LOCKER)) $criteria->add(LabelRequestPeer::LOCKER, $this->locker);
		if ($this->isColumnModified(LabelRequestPeer::COST_CENTER)) $criteria->add(LabelRequestPeer::COST_CENTER, $this->cost_center);
		if ($this->isColumnModified(LabelRequestPeer::PLATFORM)) $criteria->add(LabelRequestPeer::PLATFORM, $this->platform);
		if ($this->isColumnModified(LabelRequestPeer::GSIZE)) $criteria->add(LabelRequestPeer::GSIZE, $this->gsize);
		if ($this->isColumnModified(LabelRequestPeer::TEMPLATE)) $criteria->add(LabelRequestPeer::TEMPLATE, $this->template);
		if ($this->isColumnModified(LabelRequestPeer::IS_CHECKED)) $criteria->add(LabelRequestPeer::IS_CHECKED, $this->is_checked);
		if ($this->isColumnModified(LabelRequestPeer::IS_PRINTED)) $criteria->add(LabelRequestPeer::IS_PRINTED, $this->is_printed);
		if ($this->isColumnModified(LabelRequestPeer::ORDER_BY)) $criteria->add(LabelRequestPeer::ORDER_BY, $this->order_by);
		if ($this->isColumnModified(LabelRequestPeer::PRINTED_BY)) $criteria->add(LabelRequestPeer::PRINTED_BY, $this->printed_by);
		if ($this->isColumnModified(LabelRequestPeer::DATE_PRINTED)) $criteria->add(LabelRequestPeer::DATE_PRINTED, $this->date_printed);
		if ($this->isColumnModified(LabelRequestPeer::QUANTITY)) $criteria->add(LabelRequestPeer::QUANTITY, $this->quantity);
		if ($this->isColumnModified(LabelRequestPeer::CREATED_BY)) $criteria->add(LabelRequestPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(LabelRequestPeer::DATE_CREATED)) $criteria->add(LabelRequestPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(LabelRequestPeer::MODIFIED_BY)) $criteria->add(LabelRequestPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(LabelRequestPeer::DATE_MODIFIED)) $criteria->add(LabelRequestPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(LabelRequestPeer::DATABASE_NAME);

		$criteria->add(LabelRequestPeer::ID, $this->id);

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

		$copyObj->setBatch($this->batch);

		$copyObj->setCompany($this->company);

		$copyObj->setName($this->name);

		$copyObj->setGid($this->gid);

		$copyObj->setDepartment($this->department);

		$copyObj->setDesignation($this->designation);

		$copyObj->setHangerNo($this->hanger_no);

		$copyObj->setShift($this->shift);

		$copyObj->setFset($this->fset);

		$copyObj->setCell($this->cell);

		$copyObj->setEnd($this->end);

		$copyObj->setLocker($this->locker);

		$copyObj->setCostCenter($this->cost_center);

		$copyObj->setPlatform($this->platform);

		$copyObj->setGsize($this->gsize);

		$copyObj->setTemplate($this->template);

		$copyObj->setIsChecked($this->is_checked);

		$copyObj->setIsPrinted($this->is_printed);

		$copyObj->setOrderBy($this->order_by);

		$copyObj->setPrintedBy($this->printed_by);

		$copyObj->setDatePrinted($this->date_printed);

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
			self::$peer = new LabelRequestPeer();
		}
		return self::$peer;
	}

} 
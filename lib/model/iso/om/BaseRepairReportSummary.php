<?php


abstract class BaseRepairReportSummary extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $repair_date;


	
	protected $customer;


	
	protected $department;


	
	protected $garment_code;


	
	protected $garment_type;


	
	protected $repair_type;


	
	protected $temperature;


	
	protected $pressure;


	
	protected $quantity;


	
	protected $pcs_or_pairs;


	
	protected $initials;


	
	protected $remarks;


	
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

	
	public function getRepairDate($format = 'Y-m-d')
	{

		if ($this->repair_date === null || $this->repair_date === '') {
			return null;
		} elseif (!is_int($this->repair_date)) {
						$ts = strtotime($this->repair_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [repair_date] as date/time value: " . var_export($this->repair_date, true));
			}
		} else {
			$ts = $this->repair_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCustomer()
	{

		return $this->customer;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getGarmentCode()
	{

		return $this->garment_code;
	}

	
	public function getGarmentType()
	{

		return $this->garment_type;
	}

	
	public function getRepairType()
	{

		return $this->repair_type;
	}

	
	public function getTemperature()
	{

		return $this->temperature;
	}

	
	public function getPressure()
	{

		return $this->pressure;
	}

	
	public function getQuantity()
	{

		return $this->quantity;
	}

	
	public function getPcsOrPairs()
	{

		return $this->pcs_or_pairs;
	}

	
	public function getInitials()
	{

		return $this->initials;
	}

	
	public function getRemarks()
	{

		return $this->remarks;
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
			$this->modifiedColumns[] = RepairReportSummaryPeer::ID;
		}

	} 
	
	public function setRepairDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [repair_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->repair_date !== $ts) {
			$this->repair_date = $ts;
			$this->modifiedColumns[] = RepairReportSummaryPeer::REPAIR_DATE;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v) {
			$this->customer = $v;
			$this->modifiedColumns[] = RepairReportSummaryPeer::CUSTOMER;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v) {
			$this->department = $v;
			$this->modifiedColumns[] = RepairReportSummaryPeer::DEPARTMENT;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v) {
			$this->garment_code = $v;
			$this->modifiedColumns[] = RepairReportSummaryPeer::GARMENT_CODE;
		}

	} 
	
	public function setGarmentType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_type !== $v) {
			$this->garment_type = $v;
			$this->modifiedColumns[] = RepairReportSummaryPeer::GARMENT_TYPE;
		}

	} 
	
	public function setRepairType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->repair_type !== $v) {
			$this->repair_type = $v;
			$this->modifiedColumns[] = RepairReportSummaryPeer::REPAIR_TYPE;
		}

	} 
	
	public function setTemperature($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->temperature !== $v) {
			$this->temperature = $v;
			$this->modifiedColumns[] = RepairReportSummaryPeer::TEMPERATURE;
		}

	} 
	
	public function setPressure($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->pressure !== $v) {
			$this->pressure = $v;
			$this->modifiedColumns[] = RepairReportSummaryPeer::PRESSURE;
		}

	} 
	
	public function setQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->quantity !== $v) {
			$this->quantity = $v;
			$this->modifiedColumns[] = RepairReportSummaryPeer::QUANTITY;
		}

	} 
	
	public function setPcsOrPairs($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->pcs_or_pairs !== $v) {
			$this->pcs_or_pairs = $v;
			$this->modifiedColumns[] = RepairReportSummaryPeer::PCS_OR_PAIRS;
		}

	} 
	
	public function setInitials($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initials !== $v) {
			$this->initials = $v;
			$this->modifiedColumns[] = RepairReportSummaryPeer::INITIALS;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = RepairReportSummaryPeer::REMARKS;
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
			$this->modifiedColumns[] = RepairReportSummaryPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = RepairReportSummaryPeer::CREATED_BY;
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
			$this->modifiedColumns[] = RepairReportSummaryPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = RepairReportSummaryPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->repair_date = $rs->getDate($startcol + 1, null);

			$this->customer = $rs->getString($startcol + 2);

			$this->department = $rs->getString($startcol + 3);

			$this->garment_code = $rs->getString($startcol + 4);

			$this->garment_type = $rs->getString($startcol + 5);

			$this->repair_type = $rs->getString($startcol + 6);

			$this->temperature = $rs->getString($startcol + 7);

			$this->pressure = $rs->getString($startcol + 8);

			$this->quantity = $rs->getInt($startcol + 9);

			$this->pcs_or_pairs = $rs->getString($startcol + 10);

			$this->initials = $rs->getString($startcol + 11);

			$this->remarks = $rs->getString($startcol + 12);

			$this->date_created = $rs->getTimestamp($startcol + 13, null);

			$this->created_by = $rs->getString($startcol + 14);

			$this->date_modified = $rs->getTimestamp($startcol + 15, null);

			$this->modified_by = $rs->getString($startcol + 16);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 17; 
		} catch (Exception $e) {
			throw new PropelException("Error populating RepairReportSummary object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RepairReportSummaryPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			RepairReportSummaryPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(RepairReportSummaryPeer::DATABASE_NAME);
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
					$pk = RepairReportSummaryPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += RepairReportSummaryPeer::doUpdate($this, $con);
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


			if (($retval = RepairReportSummaryPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RepairReportSummaryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getRepairDate();
				break;
			case 2:
				return $this->getCustomer();
				break;
			case 3:
				return $this->getDepartment();
				break;
			case 4:
				return $this->getGarmentCode();
				break;
			case 5:
				return $this->getGarmentType();
				break;
			case 6:
				return $this->getRepairType();
				break;
			case 7:
				return $this->getTemperature();
				break;
			case 8:
				return $this->getPressure();
				break;
			case 9:
				return $this->getQuantity();
				break;
			case 10:
				return $this->getPcsOrPairs();
				break;
			case 11:
				return $this->getInitials();
				break;
			case 12:
				return $this->getRemarks();
				break;
			case 13:
				return $this->getDateCreated();
				break;
			case 14:
				return $this->getCreatedBy();
				break;
			case 15:
				return $this->getDateModified();
				break;
			case 16:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RepairReportSummaryPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getRepairDate(),
			$keys[2] => $this->getCustomer(),
			$keys[3] => $this->getDepartment(),
			$keys[4] => $this->getGarmentCode(),
			$keys[5] => $this->getGarmentType(),
			$keys[6] => $this->getRepairType(),
			$keys[7] => $this->getTemperature(),
			$keys[8] => $this->getPressure(),
			$keys[9] => $this->getQuantity(),
			$keys[10] => $this->getPcsOrPairs(),
			$keys[11] => $this->getInitials(),
			$keys[12] => $this->getRemarks(),
			$keys[13] => $this->getDateCreated(),
			$keys[14] => $this->getCreatedBy(),
			$keys[15] => $this->getDateModified(),
			$keys[16] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RepairReportSummaryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setRepairDate($value);
				break;
			case 2:
				$this->setCustomer($value);
				break;
			case 3:
				$this->setDepartment($value);
				break;
			case 4:
				$this->setGarmentCode($value);
				break;
			case 5:
				$this->setGarmentType($value);
				break;
			case 6:
				$this->setRepairType($value);
				break;
			case 7:
				$this->setTemperature($value);
				break;
			case 8:
				$this->setPressure($value);
				break;
			case 9:
				$this->setQuantity($value);
				break;
			case 10:
				$this->setPcsOrPairs($value);
				break;
			case 11:
				$this->setInitials($value);
				break;
			case 12:
				$this->setRemarks($value);
				break;
			case 13:
				$this->setDateCreated($value);
				break;
			case 14:
				$this->setCreatedBy($value);
				break;
			case 15:
				$this->setDateModified($value);
				break;
			case 16:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RepairReportSummaryPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRepairDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCustomer($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDepartment($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setGarmentCode($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setGarmentType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setRepairType($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTemperature($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPressure($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setQuantity($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPcsOrPairs($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setInitials($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setRemarks($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDateCreated($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCreatedBy($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setDateModified($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setModifiedBy($arr[$keys[16]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(RepairReportSummaryPeer::DATABASE_NAME);

		if ($this->isColumnModified(RepairReportSummaryPeer::ID)) $criteria->add(RepairReportSummaryPeer::ID, $this->id);
		if ($this->isColumnModified(RepairReportSummaryPeer::REPAIR_DATE)) $criteria->add(RepairReportSummaryPeer::REPAIR_DATE, $this->repair_date);
		if ($this->isColumnModified(RepairReportSummaryPeer::CUSTOMER)) $criteria->add(RepairReportSummaryPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(RepairReportSummaryPeer::DEPARTMENT)) $criteria->add(RepairReportSummaryPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(RepairReportSummaryPeer::GARMENT_CODE)) $criteria->add(RepairReportSummaryPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(RepairReportSummaryPeer::GARMENT_TYPE)) $criteria->add(RepairReportSummaryPeer::GARMENT_TYPE, $this->garment_type);
		if ($this->isColumnModified(RepairReportSummaryPeer::REPAIR_TYPE)) $criteria->add(RepairReportSummaryPeer::REPAIR_TYPE, $this->repair_type);
		if ($this->isColumnModified(RepairReportSummaryPeer::TEMPERATURE)) $criteria->add(RepairReportSummaryPeer::TEMPERATURE, $this->temperature);
		if ($this->isColumnModified(RepairReportSummaryPeer::PRESSURE)) $criteria->add(RepairReportSummaryPeer::PRESSURE, $this->pressure);
		if ($this->isColumnModified(RepairReportSummaryPeer::QUANTITY)) $criteria->add(RepairReportSummaryPeer::QUANTITY, $this->quantity);
		if ($this->isColumnModified(RepairReportSummaryPeer::PCS_OR_PAIRS)) $criteria->add(RepairReportSummaryPeer::PCS_OR_PAIRS, $this->pcs_or_pairs);
		if ($this->isColumnModified(RepairReportSummaryPeer::INITIALS)) $criteria->add(RepairReportSummaryPeer::INITIALS, $this->initials);
		if ($this->isColumnModified(RepairReportSummaryPeer::REMARKS)) $criteria->add(RepairReportSummaryPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(RepairReportSummaryPeer::DATE_CREATED)) $criteria->add(RepairReportSummaryPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(RepairReportSummaryPeer::CREATED_BY)) $criteria->add(RepairReportSummaryPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(RepairReportSummaryPeer::DATE_MODIFIED)) $criteria->add(RepairReportSummaryPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(RepairReportSummaryPeer::MODIFIED_BY)) $criteria->add(RepairReportSummaryPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(RepairReportSummaryPeer::DATABASE_NAME);

		$criteria->add(RepairReportSummaryPeer::ID, $this->id);

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

		$copyObj->setRepairDate($this->repair_date);

		$copyObj->setCustomer($this->customer);

		$copyObj->setDepartment($this->department);

		$copyObj->setGarmentCode($this->garment_code);

		$copyObj->setGarmentType($this->garment_type);

		$copyObj->setRepairType($this->repair_type);

		$copyObj->setTemperature($this->temperature);

		$copyObj->setPressure($this->pressure);

		$copyObj->setQuantity($this->quantity);

		$copyObj->setPcsOrPairs($this->pcs_or_pairs);

		$copyObj->setInitials($this->initials);

		$copyObj->setRemarks($this->remarks);

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
			self::$peer = new RepairReportSummaryPeer();
		}
		return self::$peer;
	}

} 
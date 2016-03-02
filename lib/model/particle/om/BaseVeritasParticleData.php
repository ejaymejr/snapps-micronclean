<?php


abstract class BaseVeritasParticleData extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $customer;


	
	protected $department;


	
	protected $garment_code;


	
	protected $type;


	
	protected $point_3 = 0;


	
	protected $point_3_spec = 'null';


	
	protected $point_5 = 0;


	
	protected $point_5_spec = 'null';


	
	protected $no_of_times_wash = 0;


	
	protected $washer = 'null';


	
	protected $dryer = 'null';


	
	protected $remarks;


	
	protected $tester;


	
	protected $created_by = 'null';


	
	protected $date_created;


	
	protected $modified_by = 'null';


	
	protected $date_modified;

	
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

	
	public function getType()
	{

		return $this->type;
	}

	
	public function getPoint3()
	{

		return $this->point_3;
	}

	
	public function getPoint3Spec()
	{

		return $this->point_3_spec;
	}

	
	public function getPoint5()
	{

		return $this->point_5;
	}

	
	public function getPoint5Spec()
	{

		return $this->point_5_spec;
	}

	
	public function getNoOfTimesWash()
	{

		return $this->no_of_times_wash;
	}

	
	public function getWasher()
	{

		return $this->washer;
	}

	
	public function getDryer()
	{

		return $this->dryer;
	}

	
	public function getRemarks()
	{

		return $this->remarks;
	}

	
	public function getTester()
	{

		return $this->tester;
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
			$this->modifiedColumns[] = VeritasParticleDataPeer::ID;
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
			$this->modifiedColumns[] = VeritasParticleDataPeer::DATE_TIME;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v) {
			$this->customer = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::CUSTOMER;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v) {
			$this->department = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::DEPARTMENT;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v) {
			$this->garment_code = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::GARMENT_CODE;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v) {
			$this->type = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::TYPE;
		}

	} 
	
	public function setPoint3($v)
	{

		if ($this->point_3 !== $v || $v === 0) {
			$this->point_3 = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::POINT_3;
		}

	} 
	
	public function setPoint3Spec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->point_3_spec !== $v || $v === 'null') {
			$this->point_3_spec = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::POINT_3_SPEC;
		}

	} 
	
	public function setPoint5($v)
	{

		if ($this->point_5 !== $v || $v === 0) {
			$this->point_5 = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::POINT_5;
		}

	} 
	
	public function setPoint5Spec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->point_5_spec !== $v || $v === 'null') {
			$this->point_5_spec = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::POINT_5_SPEC;
		}

	} 
	
	public function setNoOfTimesWash($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->no_of_times_wash !== $v || $v === 0) {
			$this->no_of_times_wash = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::NO_OF_TIMES_WASH;
		}

	} 
	
	public function setWasher($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->washer !== $v || $v === 'null') {
			$this->washer = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::WASHER;
		}

	} 
	
	public function setDryer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dryer !== $v || $v === 'null') {
			$this->dryer = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::DRYER;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::REMARKS;
		}

	} 
	
	public function setTester($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tester !== $v) {
			$this->tester = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::TESTER;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::CREATED_BY;
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
			$this->modifiedColumns[] = VeritasParticleDataPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = VeritasParticleDataPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = VeritasParticleDataPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->customer = $rs->getString($startcol + 2);

			$this->department = $rs->getString($startcol + 3);

			$this->garment_code = $rs->getString($startcol + 4);

			$this->type = $rs->getString($startcol + 5);

			$this->point_3 = $rs->getFloat($startcol + 6);

			$this->point_3_spec = $rs->getString($startcol + 7);

			$this->point_5 = $rs->getFloat($startcol + 8);

			$this->point_5_spec = $rs->getString($startcol + 9);

			$this->no_of_times_wash = $rs->getInt($startcol + 10);

			$this->washer = $rs->getString($startcol + 11);

			$this->dryer = $rs->getString($startcol + 12);

			$this->remarks = $rs->getString($startcol + 13);

			$this->tester = $rs->getString($startcol + 14);

			$this->created_by = $rs->getString($startcol + 15);

			$this->date_created = $rs->getTimestamp($startcol + 16, null);

			$this->modified_by = $rs->getString($startcol + 17);

			$this->date_modified = $rs->getTimestamp($startcol + 18, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 19; 
		} catch (Exception $e) {
			throw new PropelException("Error populating VeritasParticleData object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(VeritasParticleDataPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			VeritasParticleDataPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(VeritasParticleDataPeer::DATABASE_NAME);
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
					$pk = VeritasParticleDataPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += VeritasParticleDataPeer::doUpdate($this, $con);
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


			if (($retval = VeritasParticleDataPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = VeritasParticleDataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCustomer();
				break;
			case 3:
				return $this->getDepartment();
				break;
			case 4:
				return $this->getGarmentCode();
				break;
			case 5:
				return $this->getType();
				break;
			case 6:
				return $this->getPoint3();
				break;
			case 7:
				return $this->getPoint3Spec();
				break;
			case 8:
				return $this->getPoint5();
				break;
			case 9:
				return $this->getPoint5Spec();
				break;
			case 10:
				return $this->getNoOfTimesWash();
				break;
			case 11:
				return $this->getWasher();
				break;
			case 12:
				return $this->getDryer();
				break;
			case 13:
				return $this->getRemarks();
				break;
			case 14:
				return $this->getTester();
				break;
			case 15:
				return $this->getCreatedBy();
				break;
			case 16:
				return $this->getDateCreated();
				break;
			case 17:
				return $this->getModifiedBy();
				break;
			case 18:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = VeritasParticleDataPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getCustomer(),
			$keys[3] => $this->getDepartment(),
			$keys[4] => $this->getGarmentCode(),
			$keys[5] => $this->getType(),
			$keys[6] => $this->getPoint3(),
			$keys[7] => $this->getPoint3Spec(),
			$keys[8] => $this->getPoint5(),
			$keys[9] => $this->getPoint5Spec(),
			$keys[10] => $this->getNoOfTimesWash(),
			$keys[11] => $this->getWasher(),
			$keys[12] => $this->getDryer(),
			$keys[13] => $this->getRemarks(),
			$keys[14] => $this->getTester(),
			$keys[15] => $this->getCreatedBy(),
			$keys[16] => $this->getDateCreated(),
			$keys[17] => $this->getModifiedBy(),
			$keys[18] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = VeritasParticleDataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCustomer($value);
				break;
			case 3:
				$this->setDepartment($value);
				break;
			case 4:
				$this->setGarmentCode($value);
				break;
			case 5:
				$this->setType($value);
				break;
			case 6:
				$this->setPoint3($value);
				break;
			case 7:
				$this->setPoint3Spec($value);
				break;
			case 8:
				$this->setPoint5($value);
				break;
			case 9:
				$this->setPoint5Spec($value);
				break;
			case 10:
				$this->setNoOfTimesWash($value);
				break;
			case 11:
				$this->setWasher($value);
				break;
			case 12:
				$this->setDryer($value);
				break;
			case 13:
				$this->setRemarks($value);
				break;
			case 14:
				$this->setTester($value);
				break;
			case 15:
				$this->setCreatedBy($value);
				break;
			case 16:
				$this->setDateCreated($value);
				break;
			case 17:
				$this->setModifiedBy($value);
				break;
			case 18:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = VeritasParticleDataPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCustomer($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDepartment($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setGarmentCode($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPoint3($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPoint3Spec($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPoint5($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPoint5Spec($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setNoOfTimesWash($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setWasher($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDryer($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setRemarks($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setTester($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCreatedBy($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDateCreated($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setModifiedBy($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDateModified($arr[$keys[18]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(VeritasParticleDataPeer::DATABASE_NAME);

		if ($this->isColumnModified(VeritasParticleDataPeer::ID)) $criteria->add(VeritasParticleDataPeer::ID, $this->id);
		if ($this->isColumnModified(VeritasParticleDataPeer::DATE_TIME)) $criteria->add(VeritasParticleDataPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(VeritasParticleDataPeer::CUSTOMER)) $criteria->add(VeritasParticleDataPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(VeritasParticleDataPeer::DEPARTMENT)) $criteria->add(VeritasParticleDataPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(VeritasParticleDataPeer::GARMENT_CODE)) $criteria->add(VeritasParticleDataPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(VeritasParticleDataPeer::TYPE)) $criteria->add(VeritasParticleDataPeer::TYPE, $this->type);
		if ($this->isColumnModified(VeritasParticleDataPeer::POINT_3)) $criteria->add(VeritasParticleDataPeer::POINT_3, $this->point_3);
		if ($this->isColumnModified(VeritasParticleDataPeer::POINT_3_SPEC)) $criteria->add(VeritasParticleDataPeer::POINT_3_SPEC, $this->point_3_spec);
		if ($this->isColumnModified(VeritasParticleDataPeer::POINT_5)) $criteria->add(VeritasParticleDataPeer::POINT_5, $this->point_5);
		if ($this->isColumnModified(VeritasParticleDataPeer::POINT_5_SPEC)) $criteria->add(VeritasParticleDataPeer::POINT_5_SPEC, $this->point_5_spec);
		if ($this->isColumnModified(VeritasParticleDataPeer::NO_OF_TIMES_WASH)) $criteria->add(VeritasParticleDataPeer::NO_OF_TIMES_WASH, $this->no_of_times_wash);
		if ($this->isColumnModified(VeritasParticleDataPeer::WASHER)) $criteria->add(VeritasParticleDataPeer::WASHER, $this->washer);
		if ($this->isColumnModified(VeritasParticleDataPeer::DRYER)) $criteria->add(VeritasParticleDataPeer::DRYER, $this->dryer);
		if ($this->isColumnModified(VeritasParticleDataPeer::REMARKS)) $criteria->add(VeritasParticleDataPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(VeritasParticleDataPeer::TESTER)) $criteria->add(VeritasParticleDataPeer::TESTER, $this->tester);
		if ($this->isColumnModified(VeritasParticleDataPeer::CREATED_BY)) $criteria->add(VeritasParticleDataPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(VeritasParticleDataPeer::DATE_CREATED)) $criteria->add(VeritasParticleDataPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(VeritasParticleDataPeer::MODIFIED_BY)) $criteria->add(VeritasParticleDataPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(VeritasParticleDataPeer::DATE_MODIFIED)) $criteria->add(VeritasParticleDataPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(VeritasParticleDataPeer::DATABASE_NAME);

		$criteria->add(VeritasParticleDataPeer::ID, $this->id);

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

		$copyObj->setCustomer($this->customer);

		$copyObj->setDepartment($this->department);

		$copyObj->setGarmentCode($this->garment_code);

		$copyObj->setType($this->type);

		$copyObj->setPoint3($this->point_3);

		$copyObj->setPoint3Spec($this->point_3_spec);

		$copyObj->setPoint5($this->point_5);

		$copyObj->setPoint5Spec($this->point_5_spec);

		$copyObj->setNoOfTimesWash($this->no_of_times_wash);

		$copyObj->setWasher($this->washer);

		$copyObj->setDryer($this->dryer);

		$copyObj->setRemarks($this->remarks);

		$copyObj->setTester($this->tester);

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
			self::$peer = new VeritasParticleDataPeer();
		}
		return self::$peer;
	}

} 
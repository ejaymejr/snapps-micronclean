<?php


abstract class BaseSurfaceData extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $customer;


	
	protected $department;


	
	protected $type;


	
	protected $sleeve_x1;


	
	protected $sleeve_x1_spec = 'null';


	
	protected $sleeve_x2;


	
	protected $sleeve_x2_spec = 'null';


	
	protected $shoe_right;


	
	protected $shoe_right_spec = 'null';


	
	protected $shoe_left;


	
	protected $shoe_left_spec = 'null';


	
	protected $washer = 'null';


	
	protected $dryer = 'null';


	
	protected $remarks;


	
	protected $tester;


	
	protected $garment_code = 'null';


	
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

	
	public function getType()
	{

		return $this->type;
	}

	
	public function getSleeveX1()
	{

		return $this->sleeve_x1;
	}

	
	public function getSleeveX1Spec()
	{

		return $this->sleeve_x1_spec;
	}

	
	public function getSleeveX2()
	{

		return $this->sleeve_x2;
	}

	
	public function getSleeveX2Spec()
	{

		return $this->sleeve_x2_spec;
	}

	
	public function getShoeRight()
	{

		return $this->shoe_right;
	}

	
	public function getShoeRightSpec()
	{

		return $this->shoe_right_spec;
	}

	
	public function getShoeLeft()
	{

		return $this->shoe_left;
	}

	
	public function getShoeLeftSpec()
	{

		return $this->shoe_left_spec;
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

	
	public function getGarmentCode()
	{

		return $this->garment_code;
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
			$this->modifiedColumns[] = SurfaceDataPeer::ID;
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
			$this->modifiedColumns[] = SurfaceDataPeer::DATE_TIME;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v) {
			$this->customer = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::CUSTOMER;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v) {
			$this->department = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::DEPARTMENT;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v) {
			$this->type = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::TYPE;
		}

	} 
	
	public function setSleeveX1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sleeve_x1 !== $v) {
			$this->sleeve_x1 = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::SLEEVE_X1;
		}

	} 
	
	public function setSleeveX1Spec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sleeve_x1_spec !== $v || $v === 'null') {
			$this->sleeve_x1_spec = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::SLEEVE_X1_SPEC;
		}

	} 
	
	public function setSleeveX2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sleeve_x2 !== $v) {
			$this->sleeve_x2 = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::SLEEVE_X2;
		}

	} 
	
	public function setSleeveX2Spec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sleeve_x2_spec !== $v || $v === 'null') {
			$this->sleeve_x2_spec = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::SLEEVE_X2_SPEC;
		}

	} 
	
	public function setShoeRight($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shoe_right !== $v) {
			$this->shoe_right = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::SHOE_RIGHT;
		}

	} 
	
	public function setShoeRightSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shoe_right_spec !== $v || $v === 'null') {
			$this->shoe_right_spec = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::SHOE_RIGHT_SPEC;
		}

	} 
	
	public function setShoeLeft($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shoe_left !== $v) {
			$this->shoe_left = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::SHOE_LEFT;
		}

	} 
	
	public function setShoeLeftSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shoe_left_spec !== $v || $v === 'null') {
			$this->shoe_left_spec = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::SHOE_LEFT_SPEC;
		}

	} 
	
	public function setWasher($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->washer !== $v || $v === 'null') {
			$this->washer = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::WASHER;
		}

	} 
	
	public function setDryer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dryer !== $v || $v === 'null') {
			$this->dryer = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::DRYER;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::REMARKS;
		}

	} 
	
	public function setTester($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tester !== $v) {
			$this->tester = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::TESTER;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v || $v === 'null') {
			$this->garment_code = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::GARMENT_CODE;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::CREATED_BY;
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
			$this->modifiedColumns[] = SurfaceDataPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = SurfaceDataPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = SurfaceDataPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->customer = $rs->getString($startcol + 2);

			$this->department = $rs->getString($startcol + 3);

			$this->type = $rs->getString($startcol + 4);

			$this->sleeve_x1 = $rs->getString($startcol + 5);

			$this->sleeve_x1_spec = $rs->getString($startcol + 6);

			$this->sleeve_x2 = $rs->getString($startcol + 7);

			$this->sleeve_x2_spec = $rs->getString($startcol + 8);

			$this->shoe_right = $rs->getString($startcol + 9);

			$this->shoe_right_spec = $rs->getString($startcol + 10);

			$this->shoe_left = $rs->getString($startcol + 11);

			$this->shoe_left_spec = $rs->getString($startcol + 12);

			$this->washer = $rs->getString($startcol + 13);

			$this->dryer = $rs->getString($startcol + 14);

			$this->remarks = $rs->getString($startcol + 15);

			$this->tester = $rs->getString($startcol + 16);

			$this->garment_code = $rs->getString($startcol + 17);

			$this->created_by = $rs->getString($startcol + 18);

			$this->date_created = $rs->getTimestamp($startcol + 19, null);

			$this->modified_by = $rs->getString($startcol + 20);

			$this->date_modified = $rs->getTimestamp($startcol + 21, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 22; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SurfaceData object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SurfaceDataPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SurfaceDataPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SurfaceDataPeer::DATABASE_NAME);
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
					$pk = SurfaceDataPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SurfaceDataPeer::doUpdate($this, $con);
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


			if (($retval = SurfaceDataPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SurfaceDataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getType();
				break;
			case 5:
				return $this->getSleeveX1();
				break;
			case 6:
				return $this->getSleeveX1Spec();
				break;
			case 7:
				return $this->getSleeveX2();
				break;
			case 8:
				return $this->getSleeveX2Spec();
				break;
			case 9:
				return $this->getShoeRight();
				break;
			case 10:
				return $this->getShoeRightSpec();
				break;
			case 11:
				return $this->getShoeLeft();
				break;
			case 12:
				return $this->getShoeLeftSpec();
				break;
			case 13:
				return $this->getWasher();
				break;
			case 14:
				return $this->getDryer();
				break;
			case 15:
				return $this->getRemarks();
				break;
			case 16:
				return $this->getTester();
				break;
			case 17:
				return $this->getGarmentCode();
				break;
			case 18:
				return $this->getCreatedBy();
				break;
			case 19:
				return $this->getDateCreated();
				break;
			case 20:
				return $this->getModifiedBy();
				break;
			case 21:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SurfaceDataPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getCustomer(),
			$keys[3] => $this->getDepartment(),
			$keys[4] => $this->getType(),
			$keys[5] => $this->getSleeveX1(),
			$keys[6] => $this->getSleeveX1Spec(),
			$keys[7] => $this->getSleeveX2(),
			$keys[8] => $this->getSleeveX2Spec(),
			$keys[9] => $this->getShoeRight(),
			$keys[10] => $this->getShoeRightSpec(),
			$keys[11] => $this->getShoeLeft(),
			$keys[12] => $this->getShoeLeftSpec(),
			$keys[13] => $this->getWasher(),
			$keys[14] => $this->getDryer(),
			$keys[15] => $this->getRemarks(),
			$keys[16] => $this->getTester(),
			$keys[17] => $this->getGarmentCode(),
			$keys[18] => $this->getCreatedBy(),
			$keys[19] => $this->getDateCreated(),
			$keys[20] => $this->getModifiedBy(),
			$keys[21] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SurfaceDataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setType($value);
				break;
			case 5:
				$this->setSleeveX1($value);
				break;
			case 6:
				$this->setSleeveX1Spec($value);
				break;
			case 7:
				$this->setSleeveX2($value);
				break;
			case 8:
				$this->setSleeveX2Spec($value);
				break;
			case 9:
				$this->setShoeRight($value);
				break;
			case 10:
				$this->setShoeRightSpec($value);
				break;
			case 11:
				$this->setShoeLeft($value);
				break;
			case 12:
				$this->setShoeLeftSpec($value);
				break;
			case 13:
				$this->setWasher($value);
				break;
			case 14:
				$this->setDryer($value);
				break;
			case 15:
				$this->setRemarks($value);
				break;
			case 16:
				$this->setTester($value);
				break;
			case 17:
				$this->setGarmentCode($value);
				break;
			case 18:
				$this->setCreatedBy($value);
				break;
			case 19:
				$this->setDateCreated($value);
				break;
			case 20:
				$this->setModifiedBy($value);
				break;
			case 21:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SurfaceDataPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCustomer($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDepartment($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setType($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSleeveX1($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSleeveX1Spec($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSleeveX2($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSleeveX2Spec($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setShoeRight($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setShoeRightSpec($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setShoeLeft($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setShoeLeftSpec($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setWasher($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDryer($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setRemarks($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setTester($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setGarmentCode($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setCreatedBy($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setDateCreated($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setModifiedBy($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setDateModified($arr[$keys[21]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SurfaceDataPeer::DATABASE_NAME);

		if ($this->isColumnModified(SurfaceDataPeer::ID)) $criteria->add(SurfaceDataPeer::ID, $this->id);
		if ($this->isColumnModified(SurfaceDataPeer::DATE_TIME)) $criteria->add(SurfaceDataPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(SurfaceDataPeer::CUSTOMER)) $criteria->add(SurfaceDataPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(SurfaceDataPeer::DEPARTMENT)) $criteria->add(SurfaceDataPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(SurfaceDataPeer::TYPE)) $criteria->add(SurfaceDataPeer::TYPE, $this->type);
		if ($this->isColumnModified(SurfaceDataPeer::SLEEVE_X1)) $criteria->add(SurfaceDataPeer::SLEEVE_X1, $this->sleeve_x1);
		if ($this->isColumnModified(SurfaceDataPeer::SLEEVE_X1_SPEC)) $criteria->add(SurfaceDataPeer::SLEEVE_X1_SPEC, $this->sleeve_x1_spec);
		if ($this->isColumnModified(SurfaceDataPeer::SLEEVE_X2)) $criteria->add(SurfaceDataPeer::SLEEVE_X2, $this->sleeve_x2);
		if ($this->isColumnModified(SurfaceDataPeer::SLEEVE_X2_SPEC)) $criteria->add(SurfaceDataPeer::SLEEVE_X2_SPEC, $this->sleeve_x2_spec);
		if ($this->isColumnModified(SurfaceDataPeer::SHOE_RIGHT)) $criteria->add(SurfaceDataPeer::SHOE_RIGHT, $this->shoe_right);
		if ($this->isColumnModified(SurfaceDataPeer::SHOE_RIGHT_SPEC)) $criteria->add(SurfaceDataPeer::SHOE_RIGHT_SPEC, $this->shoe_right_spec);
		if ($this->isColumnModified(SurfaceDataPeer::SHOE_LEFT)) $criteria->add(SurfaceDataPeer::SHOE_LEFT, $this->shoe_left);
		if ($this->isColumnModified(SurfaceDataPeer::SHOE_LEFT_SPEC)) $criteria->add(SurfaceDataPeer::SHOE_LEFT_SPEC, $this->shoe_left_spec);
		if ($this->isColumnModified(SurfaceDataPeer::WASHER)) $criteria->add(SurfaceDataPeer::WASHER, $this->washer);
		if ($this->isColumnModified(SurfaceDataPeer::DRYER)) $criteria->add(SurfaceDataPeer::DRYER, $this->dryer);
		if ($this->isColumnModified(SurfaceDataPeer::REMARKS)) $criteria->add(SurfaceDataPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(SurfaceDataPeer::TESTER)) $criteria->add(SurfaceDataPeer::TESTER, $this->tester);
		if ($this->isColumnModified(SurfaceDataPeer::GARMENT_CODE)) $criteria->add(SurfaceDataPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(SurfaceDataPeer::CREATED_BY)) $criteria->add(SurfaceDataPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(SurfaceDataPeer::DATE_CREATED)) $criteria->add(SurfaceDataPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(SurfaceDataPeer::MODIFIED_BY)) $criteria->add(SurfaceDataPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(SurfaceDataPeer::DATE_MODIFIED)) $criteria->add(SurfaceDataPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SurfaceDataPeer::DATABASE_NAME);

		$criteria->add(SurfaceDataPeer::ID, $this->id);

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

		$copyObj->setType($this->type);

		$copyObj->setSleeveX1($this->sleeve_x1);

		$copyObj->setSleeveX1Spec($this->sleeve_x1_spec);

		$copyObj->setSleeveX2($this->sleeve_x2);

		$copyObj->setSleeveX2Spec($this->sleeve_x2_spec);

		$copyObj->setShoeRight($this->shoe_right);

		$copyObj->setShoeRightSpec($this->shoe_right_spec);

		$copyObj->setShoeLeft($this->shoe_left);

		$copyObj->setShoeLeftSpec($this->shoe_left_spec);

		$copyObj->setWasher($this->washer);

		$copyObj->setDryer($this->dryer);

		$copyObj->setRemarks($this->remarks);

		$copyObj->setTester($this->tester);

		$copyObj->setGarmentCode($this->garment_code);

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
			self::$peer = new SurfaceDataPeer();
		}
		return self::$peer;
	}

} 
<?php


abstract class BaseNvrFtirData extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $customer = 'null';


	
	protected $department = 'null';


	
	protected $type = 'null';


	
	protected $left_sleeve = 0;


	
	protected $left_sleeve_spec = 'null';


	
	protected $right_sleeve = 0;


	
	protected $right_sleeve_spec = 'null';


	
	protected $silicone = 'null';


	
	protected $silicone_spec = 'null';


	
	protected $amide = 'null';


	
	protected $amide_spec = 'null';


	
	protected $dop = 'null';


	
	protected $dop_spec = 'null';


	
	protected $washer = 'null';


	
	protected $dryer = 'null';


	
	protected $remarks;


	
	protected $tester = 'null';


	
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

	
	public function getLeftSleeve()
	{

		return $this->left_sleeve;
	}

	
	public function getLeftSleeveSpec()
	{

		return $this->left_sleeve_spec;
	}

	
	public function getRightSleeve()
	{

		return $this->right_sleeve;
	}

	
	public function getRightSleeveSpec()
	{

		return $this->right_sleeve_spec;
	}

	
	public function getSilicone()
	{

		return $this->silicone;
	}

	
	public function getSiliconeSpec()
	{

		return $this->silicone_spec;
	}

	
	public function getAmide()
	{

		return $this->amide;
	}

	
	public function getAmideSpec()
	{

		return $this->amide_spec;
	}

	
	public function getDop()
	{

		return $this->dop;
	}

	
	public function getDopSpec()
	{

		return $this->dop_spec;
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
			$this->modifiedColumns[] = NvrFtirDataPeer::ID;
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
			$this->modifiedColumns[] = NvrFtirDataPeer::DATE_TIME;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::CUSTOMER;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::DEPARTMENT;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v || $v === 'null') {
			$this->type = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::TYPE;
		}

	} 
	
	public function setLeftSleeve($v)
	{

		if ($this->left_sleeve !== $v || $v === 0) {
			$this->left_sleeve = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::LEFT_SLEEVE;
		}

	} 
	
	public function setLeftSleeveSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->left_sleeve_spec !== $v || $v === 'null') {
			$this->left_sleeve_spec = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::LEFT_SLEEVE_SPEC;
		}

	} 
	
	public function setRightSleeve($v)
	{

		if ($this->right_sleeve !== $v || $v === 0) {
			$this->right_sleeve = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::RIGHT_SLEEVE;
		}

	} 
	
	public function setRightSleeveSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->right_sleeve_spec !== $v || $v === 'null') {
			$this->right_sleeve_spec = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::RIGHT_SLEEVE_SPEC;
		}

	} 
	
	public function setSilicone($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->silicone !== $v || $v === 'null') {
			$this->silicone = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::SILICONE;
		}

	} 
	
	public function setSiliconeSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->silicone_spec !== $v || $v === 'null') {
			$this->silicone_spec = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::SILICONE_SPEC;
		}

	} 
	
	public function setAmide($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->amide !== $v || $v === 'null') {
			$this->amide = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::AMIDE;
		}

	} 
	
	public function setAmideSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->amide_spec !== $v || $v === 'null') {
			$this->amide_spec = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::AMIDE_SPEC;
		}

	} 
	
	public function setDop($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dop !== $v || $v === 'null') {
			$this->dop = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::DOP;
		}

	} 
	
	public function setDopSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dop_spec !== $v || $v === 'null') {
			$this->dop_spec = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::DOP_SPEC;
		}

	} 
	
	public function setWasher($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->washer !== $v || $v === 'null') {
			$this->washer = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::WASHER;
		}

	} 
	
	public function setDryer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dryer !== $v || $v === 'null') {
			$this->dryer = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::DRYER;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::REMARKS;
		}

	} 
	
	public function setTester($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tester !== $v || $v === 'null') {
			$this->tester = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::TESTER;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v || $v === 'null') {
			$this->garment_code = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::GARMENT_CODE;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::CREATED_BY;
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
			$this->modifiedColumns[] = NvrFtirDataPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = NvrFtirDataPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = NvrFtirDataPeer::DATE_MODIFIED;
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

			$this->left_sleeve = $rs->getFloat($startcol + 5);

			$this->left_sleeve_spec = $rs->getString($startcol + 6);

			$this->right_sleeve = $rs->getFloat($startcol + 7);

			$this->right_sleeve_spec = $rs->getString($startcol + 8);

			$this->silicone = $rs->getString($startcol + 9);

			$this->silicone_spec = $rs->getString($startcol + 10);

			$this->amide = $rs->getString($startcol + 11);

			$this->amide_spec = $rs->getString($startcol + 12);

			$this->dop = $rs->getString($startcol + 13);

			$this->dop_spec = $rs->getString($startcol + 14);

			$this->washer = $rs->getString($startcol + 15);

			$this->dryer = $rs->getString($startcol + 16);

			$this->remarks = $rs->getString($startcol + 17);

			$this->tester = $rs->getString($startcol + 18);

			$this->garment_code = $rs->getString($startcol + 19);

			$this->created_by = $rs->getString($startcol + 20);

			$this->date_created = $rs->getTimestamp($startcol + 21, null);

			$this->modified_by = $rs->getString($startcol + 22);

			$this->date_modified = $rs->getTimestamp($startcol + 23, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 24; 
		} catch (Exception $e) {
			throw new PropelException("Error populating NvrFtirData object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NvrFtirDataPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			NvrFtirDataPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NvrFtirDataPeer::DATABASE_NAME);
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
					$pk = NvrFtirDataPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += NvrFtirDataPeer::doUpdate($this, $con);
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


			if (($retval = NvrFtirDataPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NvrFtirDataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getLeftSleeve();
				break;
			case 6:
				return $this->getLeftSleeveSpec();
				break;
			case 7:
				return $this->getRightSleeve();
				break;
			case 8:
				return $this->getRightSleeveSpec();
				break;
			case 9:
				return $this->getSilicone();
				break;
			case 10:
				return $this->getSiliconeSpec();
				break;
			case 11:
				return $this->getAmide();
				break;
			case 12:
				return $this->getAmideSpec();
				break;
			case 13:
				return $this->getDop();
				break;
			case 14:
				return $this->getDopSpec();
				break;
			case 15:
				return $this->getWasher();
				break;
			case 16:
				return $this->getDryer();
				break;
			case 17:
				return $this->getRemarks();
				break;
			case 18:
				return $this->getTester();
				break;
			case 19:
				return $this->getGarmentCode();
				break;
			case 20:
				return $this->getCreatedBy();
				break;
			case 21:
				return $this->getDateCreated();
				break;
			case 22:
				return $this->getModifiedBy();
				break;
			case 23:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NvrFtirDataPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getCustomer(),
			$keys[3] => $this->getDepartment(),
			$keys[4] => $this->getType(),
			$keys[5] => $this->getLeftSleeve(),
			$keys[6] => $this->getLeftSleeveSpec(),
			$keys[7] => $this->getRightSleeve(),
			$keys[8] => $this->getRightSleeveSpec(),
			$keys[9] => $this->getSilicone(),
			$keys[10] => $this->getSiliconeSpec(),
			$keys[11] => $this->getAmide(),
			$keys[12] => $this->getAmideSpec(),
			$keys[13] => $this->getDop(),
			$keys[14] => $this->getDopSpec(),
			$keys[15] => $this->getWasher(),
			$keys[16] => $this->getDryer(),
			$keys[17] => $this->getRemarks(),
			$keys[18] => $this->getTester(),
			$keys[19] => $this->getGarmentCode(),
			$keys[20] => $this->getCreatedBy(),
			$keys[21] => $this->getDateCreated(),
			$keys[22] => $this->getModifiedBy(),
			$keys[23] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NvrFtirDataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setLeftSleeve($value);
				break;
			case 6:
				$this->setLeftSleeveSpec($value);
				break;
			case 7:
				$this->setRightSleeve($value);
				break;
			case 8:
				$this->setRightSleeveSpec($value);
				break;
			case 9:
				$this->setSilicone($value);
				break;
			case 10:
				$this->setSiliconeSpec($value);
				break;
			case 11:
				$this->setAmide($value);
				break;
			case 12:
				$this->setAmideSpec($value);
				break;
			case 13:
				$this->setDop($value);
				break;
			case 14:
				$this->setDopSpec($value);
				break;
			case 15:
				$this->setWasher($value);
				break;
			case 16:
				$this->setDryer($value);
				break;
			case 17:
				$this->setRemarks($value);
				break;
			case 18:
				$this->setTester($value);
				break;
			case 19:
				$this->setGarmentCode($value);
				break;
			case 20:
				$this->setCreatedBy($value);
				break;
			case 21:
				$this->setDateCreated($value);
				break;
			case 22:
				$this->setModifiedBy($value);
				break;
			case 23:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NvrFtirDataPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCustomer($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDepartment($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setType($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLeftSleeve($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setLeftSleeveSpec($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setRightSleeve($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setRightSleeveSpec($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setSilicone($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setSiliconeSpec($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAmide($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setAmideSpec($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDop($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDopSpec($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setWasher($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDryer($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setRemarks($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setTester($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setGarmentCode($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setCreatedBy($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setDateCreated($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setModifiedBy($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setDateModified($arr[$keys[23]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(NvrFtirDataPeer::DATABASE_NAME);

		if ($this->isColumnModified(NvrFtirDataPeer::ID)) $criteria->add(NvrFtirDataPeer::ID, $this->id);
		if ($this->isColumnModified(NvrFtirDataPeer::DATE_TIME)) $criteria->add(NvrFtirDataPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(NvrFtirDataPeer::CUSTOMER)) $criteria->add(NvrFtirDataPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(NvrFtirDataPeer::DEPARTMENT)) $criteria->add(NvrFtirDataPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(NvrFtirDataPeer::TYPE)) $criteria->add(NvrFtirDataPeer::TYPE, $this->type);
		if ($this->isColumnModified(NvrFtirDataPeer::LEFT_SLEEVE)) $criteria->add(NvrFtirDataPeer::LEFT_SLEEVE, $this->left_sleeve);
		if ($this->isColumnModified(NvrFtirDataPeer::LEFT_SLEEVE_SPEC)) $criteria->add(NvrFtirDataPeer::LEFT_SLEEVE_SPEC, $this->left_sleeve_spec);
		if ($this->isColumnModified(NvrFtirDataPeer::RIGHT_SLEEVE)) $criteria->add(NvrFtirDataPeer::RIGHT_SLEEVE, $this->right_sleeve);
		if ($this->isColumnModified(NvrFtirDataPeer::RIGHT_SLEEVE_SPEC)) $criteria->add(NvrFtirDataPeer::RIGHT_SLEEVE_SPEC, $this->right_sleeve_spec);
		if ($this->isColumnModified(NvrFtirDataPeer::SILICONE)) $criteria->add(NvrFtirDataPeer::SILICONE, $this->silicone);
		if ($this->isColumnModified(NvrFtirDataPeer::SILICONE_SPEC)) $criteria->add(NvrFtirDataPeer::SILICONE_SPEC, $this->silicone_spec);
		if ($this->isColumnModified(NvrFtirDataPeer::AMIDE)) $criteria->add(NvrFtirDataPeer::AMIDE, $this->amide);
		if ($this->isColumnModified(NvrFtirDataPeer::AMIDE_SPEC)) $criteria->add(NvrFtirDataPeer::AMIDE_SPEC, $this->amide_spec);
		if ($this->isColumnModified(NvrFtirDataPeer::DOP)) $criteria->add(NvrFtirDataPeer::DOP, $this->dop);
		if ($this->isColumnModified(NvrFtirDataPeer::DOP_SPEC)) $criteria->add(NvrFtirDataPeer::DOP_SPEC, $this->dop_spec);
		if ($this->isColumnModified(NvrFtirDataPeer::WASHER)) $criteria->add(NvrFtirDataPeer::WASHER, $this->washer);
		if ($this->isColumnModified(NvrFtirDataPeer::DRYER)) $criteria->add(NvrFtirDataPeer::DRYER, $this->dryer);
		if ($this->isColumnModified(NvrFtirDataPeer::REMARKS)) $criteria->add(NvrFtirDataPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(NvrFtirDataPeer::TESTER)) $criteria->add(NvrFtirDataPeer::TESTER, $this->tester);
		if ($this->isColumnModified(NvrFtirDataPeer::GARMENT_CODE)) $criteria->add(NvrFtirDataPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(NvrFtirDataPeer::CREATED_BY)) $criteria->add(NvrFtirDataPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(NvrFtirDataPeer::DATE_CREATED)) $criteria->add(NvrFtirDataPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(NvrFtirDataPeer::MODIFIED_BY)) $criteria->add(NvrFtirDataPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(NvrFtirDataPeer::DATE_MODIFIED)) $criteria->add(NvrFtirDataPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NvrFtirDataPeer::DATABASE_NAME);

		$criteria->add(NvrFtirDataPeer::ID, $this->id);

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

		$copyObj->setLeftSleeve($this->left_sleeve);

		$copyObj->setLeftSleeveSpec($this->left_sleeve_spec);

		$copyObj->setRightSleeve($this->right_sleeve);

		$copyObj->setRightSleeveSpec($this->right_sleeve_spec);

		$copyObj->setSilicone($this->silicone);

		$copyObj->setSiliconeSpec($this->silicone_spec);

		$copyObj->setAmide($this->amide);

		$copyObj->setAmideSpec($this->amide_spec);

		$copyObj->setDop($this->dop);

		$copyObj->setDopSpec($this->dop_spec);

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
			self::$peer = new NvrFtirDataPeer();
		}
		return self::$peer;
	}

} 
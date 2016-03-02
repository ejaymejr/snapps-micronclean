<?php


abstract class BaseGarmentinformation extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $garment_code = 'null';


	
	protected $type = 'null';


	
	protected $size = 'null';


	
	protected $color = 'null';


	
	protected $customer = 'null';


	
	protected $no_of_times_wash = 0;


	
	protected $number;


	
	protected $hanger_no;


	
	protected $inserted_date;


	
	protected $status = 'null';


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getGarmentCode()
	{

		return $this->garment_code;
	}

	
	public function getType()
	{

		return $this->type;
	}

	
	public function getSize()
	{

		return $this->size;
	}

	
	public function getColor()
	{

		return $this->color;
	}

	
	public function getCustomer()
	{

		return $this->customer;
	}

	
	public function getNoOfTimesWash()
	{

		return $this->no_of_times_wash;
	}

	
	public function getNumber()
	{

		return $this->number;
	}

	
	public function getHangerNo()
	{

		return $this->hanger_no;
	}

	
	public function getInsertedDate($format = 'Y-m-d H:i:s')
	{

		if ($this->inserted_date === null || $this->inserted_date === '') {
			return null;
		} elseif (!is_int($this->inserted_date)) {
						$ts = strtotime($this->inserted_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [inserted_date] as date/time value: " . var_export($this->inserted_date, true));
			}
		} else {
			$ts = $this->inserted_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getStatus()
	{

		return $this->status;
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v || $v === 'null') {
			$this->garment_code = $v;
			$this->modifiedColumns[] = GarmentinformationPeer::GARMENT_CODE;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v || $v === 'null') {
			$this->type = $v;
			$this->modifiedColumns[] = GarmentinformationPeer::TYPE;
		}

	} 
	
	public function setSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->size !== $v || $v === 'null') {
			$this->size = $v;
			$this->modifiedColumns[] = GarmentinformationPeer::SIZE;
		}

	} 
	
	public function setColor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->color !== $v || $v === 'null') {
			$this->color = $v;
			$this->modifiedColumns[] = GarmentinformationPeer::COLOR;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = GarmentinformationPeer::CUSTOMER;
		}

	} 
	
	public function setNoOfTimesWash($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->no_of_times_wash !== $v || $v === 0) {
			$this->no_of_times_wash = $v;
			$this->modifiedColumns[] = GarmentinformationPeer::NO_OF_TIMES_WASH;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v) {
			$this->number = $v;
			$this->modifiedColumns[] = GarmentinformationPeer::NUMBER;
		}

	} 
	
	public function setHangerNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hanger_no !== $v) {
			$this->hanger_no = $v;
			$this->modifiedColumns[] = GarmentinformationPeer::HANGER_NO;
		}

	} 
	
	public function setInsertedDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [inserted_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->inserted_date !== $ts) {
			$this->inserted_date = $ts;
			$this->modifiedColumns[] = GarmentinformationPeer::INSERTED_DATE;
		}

	} 
	
	public function setStatus($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->status !== $v || $v === 'null') {
			$this->status = $v;
			$this->modifiedColumns[] = GarmentinformationPeer::STATUS;
		}

	} 
	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = GarmentinformationPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->garment_code = $rs->getString($startcol + 0);

			$this->type = $rs->getString($startcol + 1);

			$this->size = $rs->getString($startcol + 2);

			$this->color = $rs->getString($startcol + 3);

			$this->customer = $rs->getString($startcol + 4);

			$this->no_of_times_wash = $rs->getInt($startcol + 5);

			$this->number = $rs->getString($startcol + 6);

			$this->hanger_no = $rs->getString($startcol + 7);

			$this->inserted_date = $rs->getTimestamp($startcol + 8, null);

			$this->status = $rs->getString($startcol + 9);

			$this->id = $rs->getInt($startcol + 10);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Garmentinformation object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(GarmentinformationPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			GarmentinformationPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(GarmentinformationPeer::DATABASE_NAME);
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
					$pk = GarmentinformationPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += GarmentinformationPeer::doUpdate($this, $con);
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


			if (($retval = GarmentinformationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = GarmentinformationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getGarmentCode();
				break;
			case 1:
				return $this->getType();
				break;
			case 2:
				return $this->getSize();
				break;
			case 3:
				return $this->getColor();
				break;
			case 4:
				return $this->getCustomer();
				break;
			case 5:
				return $this->getNoOfTimesWash();
				break;
			case 6:
				return $this->getNumber();
				break;
			case 7:
				return $this->getHangerNo();
				break;
			case 8:
				return $this->getInsertedDate();
				break;
			case 9:
				return $this->getStatus();
				break;
			case 10:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = GarmentinformationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getGarmentCode(),
			$keys[1] => $this->getType(),
			$keys[2] => $this->getSize(),
			$keys[3] => $this->getColor(),
			$keys[4] => $this->getCustomer(),
			$keys[5] => $this->getNoOfTimesWash(),
			$keys[6] => $this->getNumber(),
			$keys[7] => $this->getHangerNo(),
			$keys[8] => $this->getInsertedDate(),
			$keys[9] => $this->getStatus(),
			$keys[10] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = GarmentinformationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setGarmentCode($value);
				break;
			case 1:
				$this->setType($value);
				break;
			case 2:
				$this->setSize($value);
				break;
			case 3:
				$this->setColor($value);
				break;
			case 4:
				$this->setCustomer($value);
				break;
			case 5:
				$this->setNoOfTimesWash($value);
				break;
			case 6:
				$this->setNumber($value);
				break;
			case 7:
				$this->setHangerNo($value);
				break;
			case 8:
				$this->setInsertedDate($value);
				break;
			case 9:
				$this->setStatus($value);
				break;
			case 10:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = GarmentinformationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setGarmentCode($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setType($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSize($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setColor($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCustomer($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNoOfTimesWash($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setNumber($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setHangerNo($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setInsertedDate($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setStatus($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setId($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(GarmentinformationPeer::DATABASE_NAME);

		if ($this->isColumnModified(GarmentinformationPeer::GARMENT_CODE)) $criteria->add(GarmentinformationPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(GarmentinformationPeer::TYPE)) $criteria->add(GarmentinformationPeer::TYPE, $this->type);
		if ($this->isColumnModified(GarmentinformationPeer::SIZE)) $criteria->add(GarmentinformationPeer::SIZE, $this->size);
		if ($this->isColumnModified(GarmentinformationPeer::COLOR)) $criteria->add(GarmentinformationPeer::COLOR, $this->color);
		if ($this->isColumnModified(GarmentinformationPeer::CUSTOMER)) $criteria->add(GarmentinformationPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(GarmentinformationPeer::NO_OF_TIMES_WASH)) $criteria->add(GarmentinformationPeer::NO_OF_TIMES_WASH, $this->no_of_times_wash);
		if ($this->isColumnModified(GarmentinformationPeer::NUMBER)) $criteria->add(GarmentinformationPeer::NUMBER, $this->number);
		if ($this->isColumnModified(GarmentinformationPeer::HANGER_NO)) $criteria->add(GarmentinformationPeer::HANGER_NO, $this->hanger_no);
		if ($this->isColumnModified(GarmentinformationPeer::INSERTED_DATE)) $criteria->add(GarmentinformationPeer::INSERTED_DATE, $this->inserted_date);
		if ($this->isColumnModified(GarmentinformationPeer::STATUS)) $criteria->add(GarmentinformationPeer::STATUS, $this->status);
		if ($this->isColumnModified(GarmentinformationPeer::ID)) $criteria->add(GarmentinformationPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(GarmentinformationPeer::DATABASE_NAME);

		$criteria->add(GarmentinformationPeer::ID, $this->id);

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

		$copyObj->setGarmentCode($this->garment_code);

		$copyObj->setType($this->type);

		$copyObj->setSize($this->size);

		$copyObj->setColor($this->color);

		$copyObj->setCustomer($this->customer);

		$copyObj->setNoOfTimesWash($this->no_of_times_wash);

		$copyObj->setNumber($this->number);

		$copyObj->setHangerNo($this->hanger_no);

		$copyObj->setInsertedDate($this->inserted_date);

		$copyObj->setStatus($this->status);


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
			self::$peer = new GarmentinformationPeer();
		}
		return self::$peer;
	}

} 
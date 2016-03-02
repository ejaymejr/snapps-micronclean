<?php


abstract class BasesnappsCurrencyRate extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $code_from = 'null';


	
	protected $code_to = 'null';


	
	protected $date_from;


	
	protected $date_to;


	
	protected $rate = 1;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getCodeFrom()
	{

		return $this->code_from;
	}

	
	public function getCodeTo()
	{

		return $this->code_to;
	}

	
	public function getDateFrom($format = 'Y-m-d')
	{

		if ($this->date_from === null || $this->date_from === '') {
			return null;
		} elseif (!is_int($this->date_from)) {
						$ts = strtotime($this->date_from);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_from] as date/time value: " . var_export($this->date_from, true));
			}
		} else {
			$ts = $this->date_from;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateTo($format = 'Y-m-d')
	{

		if ($this->date_to === null || $this->date_to === '') {
			return null;
		} elseif (!is_int($this->date_to)) {
						$ts = strtotime($this->date_to);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_to] as date/time value: " . var_export($this->date_to, true));
			}
		} else {
			$ts = $this->date_to;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getRate()
	{

		return $this->rate;
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function setCodeFrom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->code_from !== $v || $v === 'null') {
			$this->code_from = $v;
			$this->modifiedColumns[] = snappsCurrencyRatePeer::CODE_FROM;
		}

	} 
	
	public function setCodeTo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->code_to !== $v || $v === 'null') {
			$this->code_to = $v;
			$this->modifiedColumns[] = snappsCurrencyRatePeer::CODE_TO;
		}

	} 
	
	public function setDateFrom($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_from] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_from !== $ts) {
			$this->date_from = $ts;
			$this->modifiedColumns[] = snappsCurrencyRatePeer::DATE_FROM;
		}

	} 
	
	public function setDateTo($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_to] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_to !== $ts) {
			$this->date_to = $ts;
			$this->modifiedColumns[] = snappsCurrencyRatePeer::DATE_TO;
		}

	} 
	
	public function setRate($v)
	{

		if ($this->rate !== $v || $v === 1) {
			$this->rate = $v;
			$this->modifiedColumns[] = snappsCurrencyRatePeer::RATE;
		}

	} 
	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = snappsCurrencyRatePeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->code_from = $rs->getString($startcol + 0);

			$this->code_to = $rs->getString($startcol + 1);

			$this->date_from = $rs->getDate($startcol + 2, null);

			$this->date_to = $rs->getDate($startcol + 3, null);

			$this->rate = $rs->getFloat($startcol + 4);

			$this->id = $rs->getInt($startcol + 5);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating snappsCurrencyRate object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(snappsCurrencyRatePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			snappsCurrencyRatePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(snappsCurrencyRatePeer::DATABASE_NAME);
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
					$pk = snappsCurrencyRatePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += snappsCurrencyRatePeer::doUpdate($this, $con);
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


			if (($retval = snappsCurrencyRatePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = snappsCurrencyRatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCodeFrom();
				break;
			case 1:
				return $this->getCodeTo();
				break;
			case 2:
				return $this->getDateFrom();
				break;
			case 3:
				return $this->getDateTo();
				break;
			case 4:
				return $this->getRate();
				break;
			case 5:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = snappsCurrencyRatePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCodeFrom(),
			$keys[1] => $this->getCodeTo(),
			$keys[2] => $this->getDateFrom(),
			$keys[3] => $this->getDateTo(),
			$keys[4] => $this->getRate(),
			$keys[5] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = snappsCurrencyRatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCodeFrom($value);
				break;
			case 1:
				$this->setCodeTo($value);
				break;
			case 2:
				$this->setDateFrom($value);
				break;
			case 3:
				$this->setDateTo($value);
				break;
			case 4:
				$this->setRate($value);
				break;
			case 5:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = snappsCurrencyRatePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCodeFrom($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCodeTo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDateFrom($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateTo($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setRate($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setId($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(snappsCurrencyRatePeer::DATABASE_NAME);

		if ($this->isColumnModified(snappsCurrencyRatePeer::CODE_FROM)) $criteria->add(snappsCurrencyRatePeer::CODE_FROM, $this->code_from);
		if ($this->isColumnModified(snappsCurrencyRatePeer::CODE_TO)) $criteria->add(snappsCurrencyRatePeer::CODE_TO, $this->code_to);
		if ($this->isColumnModified(snappsCurrencyRatePeer::DATE_FROM)) $criteria->add(snappsCurrencyRatePeer::DATE_FROM, $this->date_from);
		if ($this->isColumnModified(snappsCurrencyRatePeer::DATE_TO)) $criteria->add(snappsCurrencyRatePeer::DATE_TO, $this->date_to);
		if ($this->isColumnModified(snappsCurrencyRatePeer::RATE)) $criteria->add(snappsCurrencyRatePeer::RATE, $this->rate);
		if ($this->isColumnModified(snappsCurrencyRatePeer::ID)) $criteria->add(snappsCurrencyRatePeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(snappsCurrencyRatePeer::DATABASE_NAME);

		$criteria->add(snappsCurrencyRatePeer::ID, $this->id);

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

		$copyObj->setCodeFrom($this->code_from);

		$copyObj->setCodeTo($this->code_to);

		$copyObj->setDateFrom($this->date_from);

		$copyObj->setDateTo($this->date_to);

		$copyObj->setRate($this->rate);


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
			self::$peer = new snappsCurrencyRatePeer();
		}
		return self::$peer;
	}

} 
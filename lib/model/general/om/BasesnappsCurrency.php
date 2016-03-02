<?php


abstract class BasesnappsCurrency extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name = 'null';


	
	protected $code = 'null';


	
	protected $symbol = 'null';


	
	protected $sort_order = 10000;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getCode()
	{

		return $this->code;
	}

	
	public function getSymbol()
	{

		return $this->symbol;
	}

	
	public function getSortOrder()
	{

		return $this->sort_order;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = snappsCurrencyPeer::ID;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = snappsCurrencyPeer::NAME;
		}

	} 
	
	public function setCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->code !== $v || $v === 'null') {
			$this->code = $v;
			$this->modifiedColumns[] = snappsCurrencyPeer::CODE;
		}

	} 
	
	public function setSymbol($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->symbol !== $v || $v === 'null') {
			$this->symbol = $v;
			$this->modifiedColumns[] = snappsCurrencyPeer::SYMBOL;
		}

	} 
	
	public function setSortOrder($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->sort_order !== $v || $v === 10000) {
			$this->sort_order = $v;
			$this->modifiedColumns[] = snappsCurrencyPeer::SORT_ORDER;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->code = $rs->getString($startcol + 2);

			$this->symbol = $rs->getString($startcol + 3);

			$this->sort_order = $rs->getInt($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating snappsCurrency object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(snappsCurrencyPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			snappsCurrencyPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(snappsCurrencyPeer::DATABASE_NAME);
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
					$pk = snappsCurrencyPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += snappsCurrencyPeer::doUpdate($this, $con);
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


			if (($retval = snappsCurrencyPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = snappsCurrencyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getName();
				break;
			case 2:
				return $this->getCode();
				break;
			case 3:
				return $this->getSymbol();
				break;
			case 4:
				return $this->getSortOrder();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = snappsCurrencyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getCode(),
			$keys[3] => $this->getSymbol(),
			$keys[4] => $this->getSortOrder(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = snappsCurrencyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setName($value);
				break;
			case 2:
				$this->setCode($value);
				break;
			case 3:
				$this->setSymbol($value);
				break;
			case 4:
				$this->setSortOrder($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = snappsCurrencyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCode($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSymbol($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSortOrder($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(snappsCurrencyPeer::DATABASE_NAME);

		if ($this->isColumnModified(snappsCurrencyPeer::ID)) $criteria->add(snappsCurrencyPeer::ID, $this->id);
		if ($this->isColumnModified(snappsCurrencyPeer::NAME)) $criteria->add(snappsCurrencyPeer::NAME, $this->name);
		if ($this->isColumnModified(snappsCurrencyPeer::CODE)) $criteria->add(snappsCurrencyPeer::CODE, $this->code);
		if ($this->isColumnModified(snappsCurrencyPeer::SYMBOL)) $criteria->add(snappsCurrencyPeer::SYMBOL, $this->symbol);
		if ($this->isColumnModified(snappsCurrencyPeer::SORT_ORDER)) $criteria->add(snappsCurrencyPeer::SORT_ORDER, $this->sort_order);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(snappsCurrencyPeer::DATABASE_NAME);

		$criteria->add(snappsCurrencyPeer::ID, $this->id);

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

		$copyObj->setName($this->name);

		$copyObj->setCode($this->code);

		$copyObj->setSymbol($this->symbol);

		$copyObj->setSortOrder($this->sort_order);


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
			self::$peer = new snappsCurrencyPeer();
		}
		return self::$peer;
	}

} 
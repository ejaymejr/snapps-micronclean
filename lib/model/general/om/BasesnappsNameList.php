<?php


abstract class BasesnappsNameList extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $name_id;


	
	protected $name_code = 'null';


	
	protected $name = 'null';

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getNameId()
	{

		return $this->name_id;
	}

	
	public function getNameCode()
	{

		return $this->name_code;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function setNameId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_id !== $v) {
			$this->name_id = $v;
			$this->modifiedColumns[] = snappsNameListPeer::NAME_ID;
		}

	} 
	
	public function setNameCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_code !== $v || $v === 'null') {
			$this->name_code = $v;
			$this->modifiedColumns[] = snappsNameListPeer::NAME_CODE;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = snappsNameListPeer::NAME;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->name_id = $rs->getString($startcol + 0);

			$this->name_code = $rs->getString($startcol + 1);

			$this->name = $rs->getString($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating snappsNameList object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(snappsNameListPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			snappsNameListPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(snappsNameListPeer::DATABASE_NAME);
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
					$pk = snappsNameListPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNameId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += snappsNameListPeer::doUpdate($this, $con);
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


			if (($retval = snappsNameListPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = snappsNameListPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getNameId();
				break;
			case 1:
				return $this->getNameCode();
				break;
			case 2:
				return $this->getName();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = snappsNameListPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getNameId(),
			$keys[1] => $this->getNameCode(),
			$keys[2] => $this->getName(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = snappsNameListPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setNameId($value);
				break;
			case 1:
				$this->setNameCode($value);
				break;
			case 2:
				$this->setName($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = snappsNameListPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setNameId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNameCode($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(snappsNameListPeer::DATABASE_NAME);

		if ($this->isColumnModified(snappsNameListPeer::NAME_ID)) $criteria->add(snappsNameListPeer::NAME_ID, $this->name_id);
		if ($this->isColumnModified(snappsNameListPeer::NAME_CODE)) $criteria->add(snappsNameListPeer::NAME_CODE, $this->name_code);
		if ($this->isColumnModified(snappsNameListPeer::NAME)) $criteria->add(snappsNameListPeer::NAME, $this->name);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(snappsNameListPeer::DATABASE_NAME);

		$criteria->add(snappsNameListPeer::NAME_ID, $this->name_id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getNameId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setNameId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setNameCode($this->name_code);

		$copyObj->setName($this->name);


		$copyObj->setNew(true);

		$copyObj->setNameId(NULL); 
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
			self::$peer = new snappsNameListPeer();
		}
		return self::$peer;
	}

} 
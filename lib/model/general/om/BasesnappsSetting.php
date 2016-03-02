<?php


abstract class BasesnappsSetting extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $application = 'null';


	
	protected $module = 'null';


	
	protected $setting_name = 'null';


	
	protected $setting_value;


	
	protected $setting_nicename = 'null';


	
	protected $setting_description = 'null';

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getApplication()
	{

		return $this->application;
	}

	
	public function getModule()
	{

		return $this->module;
	}

	
	public function getSettingName()
	{

		return $this->setting_name;
	}

	
	public function getSettingValue()
	{

		return $this->setting_value;
	}

	
	public function getSettingNicename()
	{

		return $this->setting_nicename;
	}

	
	public function getSettingDescription()
	{

		return $this->setting_description;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = snappsSettingPeer::ID;
		}

	} 
	
	public function setApplication($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->application !== $v || $v === 'null') {
			$this->application = $v;
			$this->modifiedColumns[] = snappsSettingPeer::APPLICATION;
		}

	} 
	
	public function setModule($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->module !== $v || $v === 'null') {
			$this->module = $v;
			$this->modifiedColumns[] = snappsSettingPeer::MODULE;
		}

	} 
	
	public function setSettingName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->setting_name !== $v || $v === 'null') {
			$this->setting_name = $v;
			$this->modifiedColumns[] = snappsSettingPeer::SETTING_NAME;
		}

	} 
	
	public function setSettingValue($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->setting_value !== $v) {
			$this->setting_value = $v;
			$this->modifiedColumns[] = snappsSettingPeer::SETTING_VALUE;
		}

	} 
	
	public function setSettingNicename($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->setting_nicename !== $v || $v === 'null') {
			$this->setting_nicename = $v;
			$this->modifiedColumns[] = snappsSettingPeer::SETTING_NICENAME;
		}

	} 
	
	public function setSettingDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->setting_description !== $v || $v === 'null') {
			$this->setting_description = $v;
			$this->modifiedColumns[] = snappsSettingPeer::SETTING_DESCRIPTION;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->application = $rs->getString($startcol + 1);

			$this->module = $rs->getString($startcol + 2);

			$this->setting_name = $rs->getString($startcol + 3);

			$this->setting_value = $rs->getString($startcol + 4);

			$this->setting_nicename = $rs->getString($startcol + 5);

			$this->setting_description = $rs->getString($startcol + 6);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating snappsSetting object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(snappsSettingPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			snappsSettingPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(snappsSettingPeer::DATABASE_NAME);
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
					$pk = snappsSettingPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += snappsSettingPeer::doUpdate($this, $con);
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


			if (($retval = snappsSettingPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = snappsSettingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getApplication();
				break;
			case 2:
				return $this->getModule();
				break;
			case 3:
				return $this->getSettingName();
				break;
			case 4:
				return $this->getSettingValue();
				break;
			case 5:
				return $this->getSettingNicename();
				break;
			case 6:
				return $this->getSettingDescription();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = snappsSettingPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getApplication(),
			$keys[2] => $this->getModule(),
			$keys[3] => $this->getSettingName(),
			$keys[4] => $this->getSettingValue(),
			$keys[5] => $this->getSettingNicename(),
			$keys[6] => $this->getSettingDescription(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = snappsSettingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setApplication($value);
				break;
			case 2:
				$this->setModule($value);
				break;
			case 3:
				$this->setSettingName($value);
				break;
			case 4:
				$this->setSettingValue($value);
				break;
			case 5:
				$this->setSettingNicename($value);
				break;
			case 6:
				$this->setSettingDescription($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = snappsSettingPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setApplication($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setModule($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSettingName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSettingValue($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSettingNicename($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSettingDescription($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(snappsSettingPeer::DATABASE_NAME);

		if ($this->isColumnModified(snappsSettingPeer::ID)) $criteria->add(snappsSettingPeer::ID, $this->id);
		if ($this->isColumnModified(snappsSettingPeer::APPLICATION)) $criteria->add(snappsSettingPeer::APPLICATION, $this->application);
		if ($this->isColumnModified(snappsSettingPeer::MODULE)) $criteria->add(snappsSettingPeer::MODULE, $this->module);
		if ($this->isColumnModified(snappsSettingPeer::SETTING_NAME)) $criteria->add(snappsSettingPeer::SETTING_NAME, $this->setting_name);
		if ($this->isColumnModified(snappsSettingPeer::SETTING_VALUE)) $criteria->add(snappsSettingPeer::SETTING_VALUE, $this->setting_value);
		if ($this->isColumnModified(snappsSettingPeer::SETTING_NICENAME)) $criteria->add(snappsSettingPeer::SETTING_NICENAME, $this->setting_nicename);
		if ($this->isColumnModified(snappsSettingPeer::SETTING_DESCRIPTION)) $criteria->add(snappsSettingPeer::SETTING_DESCRIPTION, $this->setting_description);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(snappsSettingPeer::DATABASE_NAME);

		$criteria->add(snappsSettingPeer::ID, $this->id);

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

		$copyObj->setApplication($this->application);

		$copyObj->setModule($this->module);

		$copyObj->setSettingName($this->setting_name);

		$copyObj->setSettingValue($this->setting_value);

		$copyObj->setSettingNicename($this->setting_nicename);

		$copyObj->setSettingDescription($this->setting_description);


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
			self::$peer = new snappsSettingPeer();
		}
		return self::$peer;
	}

} 
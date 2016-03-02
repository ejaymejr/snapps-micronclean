<?php


abstract class BasehgasTransferRequest extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $tag_id;


	
	protected $from_hanger_id;


	
	protected $from_hanger_name;


	
	protected $to_hanger_id;


	
	protected $to_hanger_name;


	
	protected $verified;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getTagId()
	{

		return $this->tag_id;
	}

	
	public function getFromHangerId()
	{

		return $this->from_hanger_id;
	}

	
	public function getFromHangerName()
	{

		return $this->from_hanger_name;
	}

	
	public function getToHangerId()
	{

		return $this->to_hanger_id;
	}

	
	public function getToHangerName()
	{

		return $this->to_hanger_name;
	}

	
	public function getVerified()
	{

		return $this->verified;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = hgasTransferRequestPeer::ID;
		}

	} 
	
	public function setTagId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tag_id !== $v) {
			$this->tag_id = $v;
			$this->modifiedColumns[] = hgasTransferRequestPeer::TAG_ID;
		}

	} 
	
	public function setFromHangerId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->from_hanger_id !== $v) {
			$this->from_hanger_id = $v;
			$this->modifiedColumns[] = hgasTransferRequestPeer::FROM_HANGER_ID;
		}

	} 
	
	public function setFromHangerName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->from_hanger_name !== $v) {
			$this->from_hanger_name = $v;
			$this->modifiedColumns[] = hgasTransferRequestPeer::FROM_HANGER_NAME;
		}

	} 
	
	public function setToHangerId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->to_hanger_id !== $v) {
			$this->to_hanger_id = $v;
			$this->modifiedColumns[] = hgasTransferRequestPeer::TO_HANGER_ID;
		}

	} 
	
	public function setToHangerName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->to_hanger_name !== $v) {
			$this->to_hanger_name = $v;
			$this->modifiedColumns[] = hgasTransferRequestPeer::TO_HANGER_NAME;
		}

	} 
	
	public function setVerified($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified !== $v) {
			$this->verified = $v;
			$this->modifiedColumns[] = hgasTransferRequestPeer::VERIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->tag_id = $rs->getInt($startcol + 1);

			$this->from_hanger_id = $rs->getInt($startcol + 2);

			$this->from_hanger_name = $rs->getString($startcol + 3);

			$this->to_hanger_id = $rs->getInt($startcol + 4);

			$this->to_hanger_name = $rs->getString($startcol + 5);

			$this->verified = $rs->getString($startcol + 6);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating hgasTransferRequest object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(hgasTransferRequestPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			hgasTransferRequestPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(hgasTransferRequestPeer::DATABASE_NAME);
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
					$pk = hgasTransferRequestPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += hgasTransferRequestPeer::doUpdate($this, $con);
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


			if (($retval = hgasTransferRequestPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasTransferRequestPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTagId();
				break;
			case 2:
				return $this->getFromHangerId();
				break;
			case 3:
				return $this->getFromHangerName();
				break;
			case 4:
				return $this->getToHangerId();
				break;
			case 5:
				return $this->getToHangerName();
				break;
			case 6:
				return $this->getVerified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasTransferRequestPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTagId(),
			$keys[2] => $this->getFromHangerId(),
			$keys[3] => $this->getFromHangerName(),
			$keys[4] => $this->getToHangerId(),
			$keys[5] => $this->getToHangerName(),
			$keys[6] => $this->getVerified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasTransferRequestPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTagId($value);
				break;
			case 2:
				$this->setFromHangerId($value);
				break;
			case 3:
				$this->setFromHangerName($value);
				break;
			case 4:
				$this->setToHangerId($value);
				break;
			case 5:
				$this->setToHangerName($value);
				break;
			case 6:
				$this->setVerified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasTransferRequestPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTagId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFromHangerId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFromHangerName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setToHangerId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setToHangerName($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setVerified($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(hgasTransferRequestPeer::DATABASE_NAME);

		if ($this->isColumnModified(hgasTransferRequestPeer::ID)) $criteria->add(hgasTransferRequestPeer::ID, $this->id);
		if ($this->isColumnModified(hgasTransferRequestPeer::TAG_ID)) $criteria->add(hgasTransferRequestPeer::TAG_ID, $this->tag_id);
		if ($this->isColumnModified(hgasTransferRequestPeer::FROM_HANGER_ID)) $criteria->add(hgasTransferRequestPeer::FROM_HANGER_ID, $this->from_hanger_id);
		if ($this->isColumnModified(hgasTransferRequestPeer::FROM_HANGER_NAME)) $criteria->add(hgasTransferRequestPeer::FROM_HANGER_NAME, $this->from_hanger_name);
		if ($this->isColumnModified(hgasTransferRequestPeer::TO_HANGER_ID)) $criteria->add(hgasTransferRequestPeer::TO_HANGER_ID, $this->to_hanger_id);
		if ($this->isColumnModified(hgasTransferRequestPeer::TO_HANGER_NAME)) $criteria->add(hgasTransferRequestPeer::TO_HANGER_NAME, $this->to_hanger_name);
		if ($this->isColumnModified(hgasTransferRequestPeer::VERIFIED)) $criteria->add(hgasTransferRequestPeer::VERIFIED, $this->verified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(hgasTransferRequestPeer::DATABASE_NAME);

		$criteria->add(hgasTransferRequestPeer::ID, $this->id);

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

		$copyObj->setTagId($this->tag_id);

		$copyObj->setFromHangerId($this->from_hanger_id);

		$copyObj->setFromHangerName($this->from_hanger_name);

		$copyObj->setToHangerId($this->to_hanger_id);

		$copyObj->setToHangerName($this->to_hanger_name);

		$copyObj->setVerified($this->verified);


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
			self::$peer = new hgasTransferRequestPeer();
		}
		return self::$peer;
	}

} 
<?php


abstract class BaseSmsMessagein extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $sender = 'null';


	
	protected $receiver = 'null';


	
	protected $msg = 'null';


	
	protected $senttime = 'null';


	
	protected $receivedtime = 'null';


	
	protected $operator = 'null';


	
	protected $msgtype = 'null';


	
	protected $is_updated = 'N';


	
	protected $update_remark = 'null';


	
	protected $employee_no = 'null';


	
	protected $name = 'null';

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getSender()
	{

		return $this->sender;
	}

	
	public function getReceiver()
	{

		return $this->receiver;
	}

	
	public function getMsg()
	{

		return $this->msg;
	}

	
	public function getSenttime()
	{

		return $this->senttime;
	}

	
	public function getReceivedtime()
	{

		return $this->receivedtime;
	}

	
	public function getOperator()
	{

		return $this->operator;
	}

	
	public function getMsgtype()
	{

		return $this->msgtype;
	}

	
	public function getIsUpdated()
	{

		return $this->is_updated;
	}

	
	public function getUpdateRemark()
	{

		return $this->update_remark;
	}

	
	public function getEmployeeNo()
	{

		return $this->employee_no;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = SmsMessageinPeer::ID;
		}

	} 
	
	public function setSender($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sender !== $v || $v === 'null') {
			$this->sender = $v;
			$this->modifiedColumns[] = SmsMessageinPeer::SENDER;
		}

	} 
	
	public function setReceiver($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->receiver !== $v || $v === 'null') {
			$this->receiver = $v;
			$this->modifiedColumns[] = SmsMessageinPeer::RECEIVER;
		}

	} 
	
	public function setMsg($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->msg !== $v || $v === 'null') {
			$this->msg = $v;
			$this->modifiedColumns[] = SmsMessageinPeer::MSG;
		}

	} 
	
	public function setSenttime($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->senttime !== $v || $v === 'null') {
			$this->senttime = $v;
			$this->modifiedColumns[] = SmsMessageinPeer::SENTTIME;
		}

	} 
	
	public function setReceivedtime($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->receivedtime !== $v || $v === 'null') {
			$this->receivedtime = $v;
			$this->modifiedColumns[] = SmsMessageinPeer::RECEIVEDTIME;
		}

	} 
	
	public function setOperator($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->operator !== $v || $v === 'null') {
			$this->operator = $v;
			$this->modifiedColumns[] = SmsMessageinPeer::OPERATOR;
		}

	} 
	
	public function setMsgtype($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->msgtype !== $v || $v === 'null') {
			$this->msgtype = $v;
			$this->modifiedColumns[] = SmsMessageinPeer::MSGTYPE;
		}

	} 
	
	public function setIsUpdated($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->is_updated !== $v || $v === 'N') {
			$this->is_updated = $v;
			$this->modifiedColumns[] = SmsMessageinPeer::IS_UPDATED;
		}

	} 
	
	public function setUpdateRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->update_remark !== $v || $v === 'null') {
			$this->update_remark = $v;
			$this->modifiedColumns[] = SmsMessageinPeer::UPDATE_REMARK;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v || $v === 'null') {
			$this->employee_no = $v;
			$this->modifiedColumns[] = SmsMessageinPeer::EMPLOYEE_NO;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = SmsMessageinPeer::NAME;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->sender = $rs->getString($startcol + 1);

			$this->receiver = $rs->getString($startcol + 2);

			$this->msg = $rs->getString($startcol + 3);

			$this->senttime = $rs->getString($startcol + 4);

			$this->receivedtime = $rs->getString($startcol + 5);

			$this->operator = $rs->getString($startcol + 6);

			$this->msgtype = $rs->getString($startcol + 7);

			$this->is_updated = $rs->getString($startcol + 8);

			$this->update_remark = $rs->getString($startcol + 9);

			$this->employee_no = $rs->getString($startcol + 10);

			$this->name = $rs->getString($startcol + 11);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 12; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SmsMessagein object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SmsMessageinPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SmsMessageinPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SmsMessageinPeer::DATABASE_NAME);
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
					$pk = SmsMessageinPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SmsMessageinPeer::doUpdate($this, $con);
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


			if (($retval = SmsMessageinPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SmsMessageinPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getSender();
				break;
			case 2:
				return $this->getReceiver();
				break;
			case 3:
				return $this->getMsg();
				break;
			case 4:
				return $this->getSenttime();
				break;
			case 5:
				return $this->getReceivedtime();
				break;
			case 6:
				return $this->getOperator();
				break;
			case 7:
				return $this->getMsgtype();
				break;
			case 8:
				return $this->getIsUpdated();
				break;
			case 9:
				return $this->getUpdateRemark();
				break;
			case 10:
				return $this->getEmployeeNo();
				break;
			case 11:
				return $this->getName();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SmsMessageinPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSender(),
			$keys[2] => $this->getReceiver(),
			$keys[3] => $this->getMsg(),
			$keys[4] => $this->getSenttime(),
			$keys[5] => $this->getReceivedtime(),
			$keys[6] => $this->getOperator(),
			$keys[7] => $this->getMsgtype(),
			$keys[8] => $this->getIsUpdated(),
			$keys[9] => $this->getUpdateRemark(),
			$keys[10] => $this->getEmployeeNo(),
			$keys[11] => $this->getName(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SmsMessageinPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setSender($value);
				break;
			case 2:
				$this->setReceiver($value);
				break;
			case 3:
				$this->setMsg($value);
				break;
			case 4:
				$this->setSenttime($value);
				break;
			case 5:
				$this->setReceivedtime($value);
				break;
			case 6:
				$this->setOperator($value);
				break;
			case 7:
				$this->setMsgtype($value);
				break;
			case 8:
				$this->setIsUpdated($value);
				break;
			case 9:
				$this->setUpdateRemark($value);
				break;
			case 10:
				$this->setEmployeeNo($value);
				break;
			case 11:
				$this->setName($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SmsMessageinPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSender($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setReceiver($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMsg($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSenttime($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setReceivedtime($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setOperator($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setMsgtype($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setIsUpdated($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setUpdateRemark($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setEmployeeNo($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setName($arr[$keys[11]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SmsMessageinPeer::DATABASE_NAME);

		if ($this->isColumnModified(SmsMessageinPeer::ID)) $criteria->add(SmsMessageinPeer::ID, $this->id);
		if ($this->isColumnModified(SmsMessageinPeer::SENDER)) $criteria->add(SmsMessageinPeer::SENDER, $this->sender);
		if ($this->isColumnModified(SmsMessageinPeer::RECEIVER)) $criteria->add(SmsMessageinPeer::RECEIVER, $this->receiver);
		if ($this->isColumnModified(SmsMessageinPeer::MSG)) $criteria->add(SmsMessageinPeer::MSG, $this->msg);
		if ($this->isColumnModified(SmsMessageinPeer::SENTTIME)) $criteria->add(SmsMessageinPeer::SENTTIME, $this->senttime);
		if ($this->isColumnModified(SmsMessageinPeer::RECEIVEDTIME)) $criteria->add(SmsMessageinPeer::RECEIVEDTIME, $this->receivedtime);
		if ($this->isColumnModified(SmsMessageinPeer::OPERATOR)) $criteria->add(SmsMessageinPeer::OPERATOR, $this->operator);
		if ($this->isColumnModified(SmsMessageinPeer::MSGTYPE)) $criteria->add(SmsMessageinPeer::MSGTYPE, $this->msgtype);
		if ($this->isColumnModified(SmsMessageinPeer::IS_UPDATED)) $criteria->add(SmsMessageinPeer::IS_UPDATED, $this->is_updated);
		if ($this->isColumnModified(SmsMessageinPeer::UPDATE_REMARK)) $criteria->add(SmsMessageinPeer::UPDATE_REMARK, $this->update_remark);
		if ($this->isColumnModified(SmsMessageinPeer::EMPLOYEE_NO)) $criteria->add(SmsMessageinPeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(SmsMessageinPeer::NAME)) $criteria->add(SmsMessageinPeer::NAME, $this->name);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SmsMessageinPeer::DATABASE_NAME);

		$criteria->add(SmsMessageinPeer::ID, $this->id);

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

		$copyObj->setSender($this->sender);

		$copyObj->setReceiver($this->receiver);

		$copyObj->setMsg($this->msg);

		$copyObj->setSenttime($this->senttime);

		$copyObj->setReceivedtime($this->receivedtime);

		$copyObj->setOperator($this->operator);

		$copyObj->setMsgtype($this->msgtype);

		$copyObj->setIsUpdated($this->is_updated);

		$copyObj->setUpdateRemark($this->update_remark);

		$copyObj->setEmployeeNo($this->employee_no);

		$copyObj->setName($this->name);


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
			self::$peer = new SmsMessageinPeer();
		}
		return self::$peer;
	}

} 
<?php


abstract class BaseSmsMessageout extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $sender = 'null';


	
	protected $receiver = 'null';


	
	protected $msg = 'null';


	
	protected $senttime = 'null';


	
	protected $status = 'null';


	
	protected $receivedtime = 'null';


	
	protected $operator = 'null';


	
	protected $msgtype = 'null';


	
	protected $period_code;

	
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

	
	public function getStatus()
	{

		return $this->status;
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

	
	public function getPeriodCode()
	{

		return $this->period_code;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = SmsMessageoutPeer::ID;
		}

	} 
	
	public function setSender($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sender !== $v || $v === 'null') {
			$this->sender = $v;
			$this->modifiedColumns[] = SmsMessageoutPeer::SENDER;
		}

	} 
	
	public function setReceiver($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->receiver !== $v || $v === 'null') {
			$this->receiver = $v;
			$this->modifiedColumns[] = SmsMessageoutPeer::RECEIVER;
		}

	} 
	
	public function setMsg($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->msg !== $v || $v === 'null') {
			$this->msg = $v;
			$this->modifiedColumns[] = SmsMessageoutPeer::MSG;
		}

	} 
	
	public function setSenttime($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->senttime !== $v || $v === 'null') {
			$this->senttime = $v;
			$this->modifiedColumns[] = SmsMessageoutPeer::SENTTIME;
		}

	} 
	
	public function setStatus($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->status !== $v || $v === 'null') {
			$this->status = $v;
			$this->modifiedColumns[] = SmsMessageoutPeer::STATUS;
		}

	} 
	
	public function setReceivedtime($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->receivedtime !== $v || $v === 'null') {
			$this->receivedtime = $v;
			$this->modifiedColumns[] = SmsMessageoutPeer::RECEIVEDTIME;
		}

	} 
	
	public function setOperator($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->operator !== $v || $v === 'null') {
			$this->operator = $v;
			$this->modifiedColumns[] = SmsMessageoutPeer::OPERATOR;
		}

	} 
	
	public function setMsgtype($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->msgtype !== $v || $v === 'null') {
			$this->msgtype = $v;
			$this->modifiedColumns[] = SmsMessageoutPeer::MSGTYPE;
		}

	} 
	
	public function setPeriodCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->period_code !== $v) {
			$this->period_code = $v;
			$this->modifiedColumns[] = SmsMessageoutPeer::PERIOD_CODE;
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

			$this->status = $rs->getString($startcol + 5);

			$this->receivedtime = $rs->getString($startcol + 6);

			$this->operator = $rs->getString($startcol + 7);

			$this->msgtype = $rs->getString($startcol + 8);

			$this->period_code = $rs->getString($startcol + 9);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SmsMessageout object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SmsMessageoutPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SmsMessageoutPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SmsMessageoutPeer::DATABASE_NAME);
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
					$pk = SmsMessageoutPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SmsMessageoutPeer::doUpdate($this, $con);
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


			if (($retval = SmsMessageoutPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SmsMessageoutPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getStatus();
				break;
			case 6:
				return $this->getReceivedtime();
				break;
			case 7:
				return $this->getOperator();
				break;
			case 8:
				return $this->getMsgtype();
				break;
			case 9:
				return $this->getPeriodCode();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SmsMessageoutPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSender(),
			$keys[2] => $this->getReceiver(),
			$keys[3] => $this->getMsg(),
			$keys[4] => $this->getSenttime(),
			$keys[5] => $this->getStatus(),
			$keys[6] => $this->getReceivedtime(),
			$keys[7] => $this->getOperator(),
			$keys[8] => $this->getMsgtype(),
			$keys[9] => $this->getPeriodCode(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SmsMessageoutPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setStatus($value);
				break;
			case 6:
				$this->setReceivedtime($value);
				break;
			case 7:
				$this->setOperator($value);
				break;
			case 8:
				$this->setMsgtype($value);
				break;
			case 9:
				$this->setPeriodCode($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SmsMessageoutPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSender($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setReceiver($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMsg($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSenttime($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setStatus($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setReceivedtime($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setOperator($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setMsgtype($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPeriodCode($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SmsMessageoutPeer::DATABASE_NAME);

		if ($this->isColumnModified(SmsMessageoutPeer::ID)) $criteria->add(SmsMessageoutPeer::ID, $this->id);
		if ($this->isColumnModified(SmsMessageoutPeer::SENDER)) $criteria->add(SmsMessageoutPeer::SENDER, $this->sender);
		if ($this->isColumnModified(SmsMessageoutPeer::RECEIVER)) $criteria->add(SmsMessageoutPeer::RECEIVER, $this->receiver);
		if ($this->isColumnModified(SmsMessageoutPeer::MSG)) $criteria->add(SmsMessageoutPeer::MSG, $this->msg);
		if ($this->isColumnModified(SmsMessageoutPeer::SENTTIME)) $criteria->add(SmsMessageoutPeer::SENTTIME, $this->senttime);
		if ($this->isColumnModified(SmsMessageoutPeer::STATUS)) $criteria->add(SmsMessageoutPeer::STATUS, $this->status);
		if ($this->isColumnModified(SmsMessageoutPeer::RECEIVEDTIME)) $criteria->add(SmsMessageoutPeer::RECEIVEDTIME, $this->receivedtime);
		if ($this->isColumnModified(SmsMessageoutPeer::OPERATOR)) $criteria->add(SmsMessageoutPeer::OPERATOR, $this->operator);
		if ($this->isColumnModified(SmsMessageoutPeer::MSGTYPE)) $criteria->add(SmsMessageoutPeer::MSGTYPE, $this->msgtype);
		if ($this->isColumnModified(SmsMessageoutPeer::PERIOD_CODE)) $criteria->add(SmsMessageoutPeer::PERIOD_CODE, $this->period_code);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SmsMessageoutPeer::DATABASE_NAME);

		$criteria->add(SmsMessageoutPeer::ID, $this->id);

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

		$copyObj->setStatus($this->status);

		$copyObj->setReceivedtime($this->receivedtime);

		$copyObj->setOperator($this->operator);

		$copyObj->setMsgtype($this->msgtype);

		$copyObj->setPeriodCode($this->period_code);


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
			self::$peer = new SmsMessageoutPeer();
		}
		return self::$peer;
	}

} 
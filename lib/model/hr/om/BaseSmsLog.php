<?php


abstract class BaseSmsLog extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $sender = 'null';


	
	protected $receiver = 'null';


	
	protected $msg = 'null';


	
	protected $senttime = 'null';


	
	protected $receivedtime = 'null';


	
	protected $operator = 'null';


	
	protected $msgtype = 'null';


	
	protected $period_code;


	
	protected $employee_no;


	
	protected $module;


	
	protected $bank_cash;


	
	protected $date_modified;


	
	protected $modified_by = 'null';


	
	protected $date_created;


	
	protected $created_by = 'null';

	
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

	
	public function getPeriodCode()
	{

		return $this->period_code;
	}

	
	public function getEmployeeNo()
	{

		return $this->employee_no;
	}

	
	public function getModule()
	{

		return $this->module;
	}

	
	public function getBankCash()
	{

		return $this->bank_cash;
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

	
	public function getModifiedBy()
	{

		return $this->modified_by;
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

	
	public function getCreatedBy()
	{

		return $this->created_by;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = SmsLogPeer::ID;
		}

	} 
	
	public function setSender($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sender !== $v || $v === 'null') {
			$this->sender = $v;
			$this->modifiedColumns[] = SmsLogPeer::SENDER;
		}

	} 
	
	public function setReceiver($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->receiver !== $v || $v === 'null') {
			$this->receiver = $v;
			$this->modifiedColumns[] = SmsLogPeer::RECEIVER;
		}

	} 
	
	public function setMsg($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->msg !== $v || $v === 'null') {
			$this->msg = $v;
			$this->modifiedColumns[] = SmsLogPeer::MSG;
		}

	} 
	
	public function setSenttime($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->senttime !== $v || $v === 'null') {
			$this->senttime = $v;
			$this->modifiedColumns[] = SmsLogPeer::SENTTIME;
		}

	} 
	
	public function setReceivedtime($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->receivedtime !== $v || $v === 'null') {
			$this->receivedtime = $v;
			$this->modifiedColumns[] = SmsLogPeer::RECEIVEDTIME;
		}

	} 
	
	public function setOperator($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->operator !== $v || $v === 'null') {
			$this->operator = $v;
			$this->modifiedColumns[] = SmsLogPeer::OPERATOR;
		}

	} 
	
	public function setMsgtype($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->msgtype !== $v || $v === 'null') {
			$this->msgtype = $v;
			$this->modifiedColumns[] = SmsLogPeer::MSGTYPE;
		}

	} 
	
	public function setPeriodCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->period_code !== $v) {
			$this->period_code = $v;
			$this->modifiedColumns[] = SmsLogPeer::PERIOD_CODE;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v) {
			$this->employee_no = $v;
			$this->modifiedColumns[] = SmsLogPeer::EMPLOYEE_NO;
		}

	} 
	
	public function setModule($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->module !== $v) {
			$this->module = $v;
			$this->modifiedColumns[] = SmsLogPeer::MODULE;
		}

	} 
	
	public function setBankCash($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bank_cash !== $v) {
			$this->bank_cash = $v;
			$this->modifiedColumns[] = SmsLogPeer::BANK_CASH;
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
			$this->modifiedColumns[] = SmsLogPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = SmsLogPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = SmsLogPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = SmsLogPeer::CREATED_BY;
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

			$this->period_code = $rs->getString($startcol + 8);

			$this->employee_no = $rs->getString($startcol + 9);

			$this->module = $rs->getString($startcol + 10);

			$this->bank_cash = $rs->getString($startcol + 11);

			$this->date_modified = $rs->getTimestamp($startcol + 12, null);

			$this->modified_by = $rs->getString($startcol + 13);

			$this->date_created = $rs->getTimestamp($startcol + 14, null);

			$this->created_by = $rs->getString($startcol + 15);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SmsLog object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SmsLogPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SmsLogPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SmsLogPeer::DATABASE_NAME);
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
					$pk = SmsLogPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SmsLogPeer::doUpdate($this, $con);
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


			if (($retval = SmsLogPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SmsLogPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getPeriodCode();
				break;
			case 9:
				return $this->getEmployeeNo();
				break;
			case 10:
				return $this->getModule();
				break;
			case 11:
				return $this->getBankCash();
				break;
			case 12:
				return $this->getDateModified();
				break;
			case 13:
				return $this->getModifiedBy();
				break;
			case 14:
				return $this->getDateCreated();
				break;
			case 15:
				return $this->getCreatedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SmsLogPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSender(),
			$keys[2] => $this->getReceiver(),
			$keys[3] => $this->getMsg(),
			$keys[4] => $this->getSenttime(),
			$keys[5] => $this->getReceivedtime(),
			$keys[6] => $this->getOperator(),
			$keys[7] => $this->getMsgtype(),
			$keys[8] => $this->getPeriodCode(),
			$keys[9] => $this->getEmployeeNo(),
			$keys[10] => $this->getModule(),
			$keys[11] => $this->getBankCash(),
			$keys[12] => $this->getDateModified(),
			$keys[13] => $this->getModifiedBy(),
			$keys[14] => $this->getDateCreated(),
			$keys[15] => $this->getCreatedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SmsLogPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setPeriodCode($value);
				break;
			case 9:
				$this->setEmployeeNo($value);
				break;
			case 10:
				$this->setModule($value);
				break;
			case 11:
				$this->setBankCash($value);
				break;
			case 12:
				$this->setDateModified($value);
				break;
			case 13:
				$this->setModifiedBy($value);
				break;
			case 14:
				$this->setDateCreated($value);
				break;
			case 15:
				$this->setCreatedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SmsLogPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSender($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setReceiver($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMsg($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSenttime($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setReceivedtime($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setOperator($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setMsgtype($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPeriodCode($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setEmployeeNo($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setModule($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setBankCash($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDateModified($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setModifiedBy($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateCreated($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCreatedBy($arr[$keys[15]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SmsLogPeer::DATABASE_NAME);

		if ($this->isColumnModified(SmsLogPeer::ID)) $criteria->add(SmsLogPeer::ID, $this->id);
		if ($this->isColumnModified(SmsLogPeer::SENDER)) $criteria->add(SmsLogPeer::SENDER, $this->sender);
		if ($this->isColumnModified(SmsLogPeer::RECEIVER)) $criteria->add(SmsLogPeer::RECEIVER, $this->receiver);
		if ($this->isColumnModified(SmsLogPeer::MSG)) $criteria->add(SmsLogPeer::MSG, $this->msg);
		if ($this->isColumnModified(SmsLogPeer::SENTTIME)) $criteria->add(SmsLogPeer::SENTTIME, $this->senttime);
		if ($this->isColumnModified(SmsLogPeer::RECEIVEDTIME)) $criteria->add(SmsLogPeer::RECEIVEDTIME, $this->receivedtime);
		if ($this->isColumnModified(SmsLogPeer::OPERATOR)) $criteria->add(SmsLogPeer::OPERATOR, $this->operator);
		if ($this->isColumnModified(SmsLogPeer::MSGTYPE)) $criteria->add(SmsLogPeer::MSGTYPE, $this->msgtype);
		if ($this->isColumnModified(SmsLogPeer::PERIOD_CODE)) $criteria->add(SmsLogPeer::PERIOD_CODE, $this->period_code);
		if ($this->isColumnModified(SmsLogPeer::EMPLOYEE_NO)) $criteria->add(SmsLogPeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(SmsLogPeer::MODULE)) $criteria->add(SmsLogPeer::MODULE, $this->module);
		if ($this->isColumnModified(SmsLogPeer::BANK_CASH)) $criteria->add(SmsLogPeer::BANK_CASH, $this->bank_cash);
		if ($this->isColumnModified(SmsLogPeer::DATE_MODIFIED)) $criteria->add(SmsLogPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(SmsLogPeer::MODIFIED_BY)) $criteria->add(SmsLogPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(SmsLogPeer::DATE_CREATED)) $criteria->add(SmsLogPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(SmsLogPeer::CREATED_BY)) $criteria->add(SmsLogPeer::CREATED_BY, $this->created_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SmsLogPeer::DATABASE_NAME);

		$criteria->add(SmsLogPeer::ID, $this->id);

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

		$copyObj->setPeriodCode($this->period_code);

		$copyObj->setEmployeeNo($this->employee_no);

		$copyObj->setModule($this->module);

		$copyObj->setBankCash($this->bank_cash);

		$copyObj->setDateModified($this->date_modified);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setCreatedBy($this->created_by);


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
			self::$peer = new SmsLogPeer();
		}
		return self::$peer;
	}

} 
<?php


abstract class BasehgasTagRequest extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id = 0;


	
	protected $hanger_slot_id;


	
	protected $before_tag_id = '0';


	
	protected $after_tag_id = '0';


	
	protected $status = 'null';


	
	protected $requested_by = 'null';


	
	protected $date_requested;


	
	protected $ip_set_by = 'null';


	
	protected $date_ip_set;


	
	protected $completed_by = 'null';


	
	protected $date_completed;

	
	protected $ahgasHangerSlot;

	
	protected $ahgasTagRelatedByBeforeTagId;

	
	protected $ahgasTagRelatedByAfterTagId;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getHangerSlotId()
	{

		return $this->hanger_slot_id;
	}

	
	public function getBeforeTagId()
	{

		return $this->before_tag_id;
	}

	
	public function getAfterTagId()
	{

		return $this->after_tag_id;
	}

	
	public function getStatus()
	{

		return $this->status;
	}

	
	public function getRequestedBy()
	{

		return $this->requested_by;
	}

	
	public function getDateRequested($format = 'Y-m-d H:i:s')
	{

		if ($this->date_requested === null || $this->date_requested === '') {
			return null;
		} elseif (!is_int($this->date_requested)) {
						$ts = strtotime($this->date_requested);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_requested] as date/time value: " . var_export($this->date_requested, true));
			}
		} else {
			$ts = $this->date_requested;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getIpSetBy()
	{

		return $this->ip_set_by;
	}

	
	public function getDateIpSet($format = 'Y-m-d H:i:s')
	{

		if ($this->date_ip_set === null || $this->date_ip_set === '') {
			return null;
		} elseif (!is_int($this->date_ip_set)) {
						$ts = strtotime($this->date_ip_set);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_ip_set] as date/time value: " . var_export($this->date_ip_set, true));
			}
		} else {
			$ts = $this->date_ip_set;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCompletedBy()
	{

		return $this->completed_by;
	}

	
	public function getDateCompleted($format = 'Y-m-d H:i:s')
	{

		if ($this->date_completed === null || $this->date_completed === '') {
			return null;
		} elseif (!is_int($this->date_completed)) {
						$ts = strtotime($this->date_completed);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_completed] as date/time value: " . var_export($this->date_completed, true));
			}
		} else {
			$ts = $this->date_completed;
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

		if ($this->id !== $v || $v === 0) {
			$this->id = $v;
			$this->modifiedColumns[] = hgasTagRequestPeer::ID;
		}

	} 
	
	public function setHangerSlotId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->hanger_slot_id !== $v) {
			$this->hanger_slot_id = $v;
			$this->modifiedColumns[] = hgasTagRequestPeer::HANGER_SLOT_ID;
		}

		if ($this->ahgasHangerSlot !== null && $this->ahgasHangerSlot->getId() !== $v) {
			$this->ahgasHangerSlot = null;
		}

	} 
	
	public function setBeforeTagId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->before_tag_id !== $v || $v === '0') {
			$this->before_tag_id = $v;
			$this->modifiedColumns[] = hgasTagRequestPeer::BEFORE_TAG_ID;
		}

		if ($this->ahgasTagRelatedByBeforeTagId !== null && $this->ahgasTagRelatedByBeforeTagId->getId() !== $v) {
			$this->ahgasTagRelatedByBeforeTagId = null;
		}

	} 
	
	public function setAfterTagId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->after_tag_id !== $v || $v === '0') {
			$this->after_tag_id = $v;
			$this->modifiedColumns[] = hgasTagRequestPeer::AFTER_TAG_ID;
		}

		if ($this->ahgasTagRelatedByAfterTagId !== null && $this->ahgasTagRelatedByAfterTagId->getId() !== $v) {
			$this->ahgasTagRelatedByAfterTagId = null;
		}

	} 
	
	public function setStatus($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->status !== $v || $v === 'null') {
			$this->status = $v;
			$this->modifiedColumns[] = hgasTagRequestPeer::STATUS;
		}

	} 
	
	public function setRequestedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->requested_by !== $v || $v === 'null') {
			$this->requested_by = $v;
			$this->modifiedColumns[] = hgasTagRequestPeer::REQUESTED_BY;
		}

	} 
	
	public function setDateRequested($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_requested] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_requested !== $ts) {
			$this->date_requested = $ts;
			$this->modifiedColumns[] = hgasTagRequestPeer::DATE_REQUESTED;
		}

	} 
	
	public function setIpSetBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ip_set_by !== $v || $v === 'null') {
			$this->ip_set_by = $v;
			$this->modifiedColumns[] = hgasTagRequestPeer::IP_SET_BY;
		}

	} 
	
	public function setDateIpSet($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_ip_set] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_ip_set !== $ts) {
			$this->date_ip_set = $ts;
			$this->modifiedColumns[] = hgasTagRequestPeer::DATE_IP_SET;
		}

	} 
	
	public function setCompletedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->completed_by !== $v || $v === 'null') {
			$this->completed_by = $v;
			$this->modifiedColumns[] = hgasTagRequestPeer::COMPLETED_BY;
		}

	} 
	
	public function setDateCompleted($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_completed] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_completed !== $ts) {
			$this->date_completed = $ts;
			$this->modifiedColumns[] = hgasTagRequestPeer::DATE_COMPLETED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->hanger_slot_id = $rs->getInt($startcol + 1);

			$this->before_tag_id = $rs->getString($startcol + 2);

			$this->after_tag_id = $rs->getString($startcol + 3);

			$this->status = $rs->getString($startcol + 4);

			$this->requested_by = $rs->getString($startcol + 5);

			$this->date_requested = $rs->getTimestamp($startcol + 6, null);

			$this->ip_set_by = $rs->getString($startcol + 7);

			$this->date_ip_set = $rs->getTimestamp($startcol + 8, null);

			$this->completed_by = $rs->getString($startcol + 9);

			$this->date_completed = $rs->getTimestamp($startcol + 10, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating hgasTagRequest object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(hgasTagRequestPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			hgasTagRequestPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(hgasTagRequestPeer::DATABASE_NAME);
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


												
			if ($this->ahgasHangerSlot !== null) {
				if ($this->ahgasHangerSlot->isModified()) {
					$affectedRows += $this->ahgasHangerSlot->save($con);
				}
				$this->sethgasHangerSlot($this->ahgasHangerSlot);
			}

			if ($this->ahgasTagRelatedByBeforeTagId !== null) {
				if ($this->ahgasTagRelatedByBeforeTagId->isModified()) {
					$affectedRows += $this->ahgasTagRelatedByBeforeTagId->save($con);
				}
				$this->sethgasTagRelatedByBeforeTagId($this->ahgasTagRelatedByBeforeTagId);
			}

			if ($this->ahgasTagRelatedByAfterTagId !== null) {
				if ($this->ahgasTagRelatedByAfterTagId->isModified()) {
					$affectedRows += $this->ahgasTagRelatedByAfterTagId->save($con);
				}
				$this->sethgasTagRelatedByAfterTagId($this->ahgasTagRelatedByAfterTagId);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = hgasTagRequestPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += hgasTagRequestPeer::doUpdate($this, $con);
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


												
			if ($this->ahgasHangerSlot !== null) {
				if (!$this->ahgasHangerSlot->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->ahgasHangerSlot->getValidationFailures());
				}
			}

			if ($this->ahgasTagRelatedByBeforeTagId !== null) {
				if (!$this->ahgasTagRelatedByBeforeTagId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->ahgasTagRelatedByBeforeTagId->getValidationFailures());
				}
			}

			if ($this->ahgasTagRelatedByAfterTagId !== null) {
				if (!$this->ahgasTagRelatedByAfterTagId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->ahgasTagRelatedByAfterTagId->getValidationFailures());
				}
			}


			if (($retval = hgasTagRequestPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasTagRequestPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getHangerSlotId();
				break;
			case 2:
				return $this->getBeforeTagId();
				break;
			case 3:
				return $this->getAfterTagId();
				break;
			case 4:
				return $this->getStatus();
				break;
			case 5:
				return $this->getRequestedBy();
				break;
			case 6:
				return $this->getDateRequested();
				break;
			case 7:
				return $this->getIpSetBy();
				break;
			case 8:
				return $this->getDateIpSet();
				break;
			case 9:
				return $this->getCompletedBy();
				break;
			case 10:
				return $this->getDateCompleted();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasTagRequestPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getHangerSlotId(),
			$keys[2] => $this->getBeforeTagId(),
			$keys[3] => $this->getAfterTagId(),
			$keys[4] => $this->getStatus(),
			$keys[5] => $this->getRequestedBy(),
			$keys[6] => $this->getDateRequested(),
			$keys[7] => $this->getIpSetBy(),
			$keys[8] => $this->getDateIpSet(),
			$keys[9] => $this->getCompletedBy(),
			$keys[10] => $this->getDateCompleted(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasTagRequestPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setHangerSlotId($value);
				break;
			case 2:
				$this->setBeforeTagId($value);
				break;
			case 3:
				$this->setAfterTagId($value);
				break;
			case 4:
				$this->setStatus($value);
				break;
			case 5:
				$this->setRequestedBy($value);
				break;
			case 6:
				$this->setDateRequested($value);
				break;
			case 7:
				$this->setIpSetBy($value);
				break;
			case 8:
				$this->setDateIpSet($value);
				break;
			case 9:
				$this->setCompletedBy($value);
				break;
			case 10:
				$this->setDateCompleted($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasTagRequestPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setHangerSlotId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setBeforeTagId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAfterTagId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setStatus($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRequestedBy($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateRequested($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setIpSetBy($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateIpSet($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCompletedBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateCompleted($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(hgasTagRequestPeer::DATABASE_NAME);

		if ($this->isColumnModified(hgasTagRequestPeer::ID)) $criteria->add(hgasTagRequestPeer::ID, $this->id);
		if ($this->isColumnModified(hgasTagRequestPeer::HANGER_SLOT_ID)) $criteria->add(hgasTagRequestPeer::HANGER_SLOT_ID, $this->hanger_slot_id);
		if ($this->isColumnModified(hgasTagRequestPeer::BEFORE_TAG_ID)) $criteria->add(hgasTagRequestPeer::BEFORE_TAG_ID, $this->before_tag_id);
		if ($this->isColumnModified(hgasTagRequestPeer::AFTER_TAG_ID)) $criteria->add(hgasTagRequestPeer::AFTER_TAG_ID, $this->after_tag_id);
		if ($this->isColumnModified(hgasTagRequestPeer::STATUS)) $criteria->add(hgasTagRequestPeer::STATUS, $this->status);
		if ($this->isColumnModified(hgasTagRequestPeer::REQUESTED_BY)) $criteria->add(hgasTagRequestPeer::REQUESTED_BY, $this->requested_by);
		if ($this->isColumnModified(hgasTagRequestPeer::DATE_REQUESTED)) $criteria->add(hgasTagRequestPeer::DATE_REQUESTED, $this->date_requested);
		if ($this->isColumnModified(hgasTagRequestPeer::IP_SET_BY)) $criteria->add(hgasTagRequestPeer::IP_SET_BY, $this->ip_set_by);
		if ($this->isColumnModified(hgasTagRequestPeer::DATE_IP_SET)) $criteria->add(hgasTagRequestPeer::DATE_IP_SET, $this->date_ip_set);
		if ($this->isColumnModified(hgasTagRequestPeer::COMPLETED_BY)) $criteria->add(hgasTagRequestPeer::COMPLETED_BY, $this->completed_by);
		if ($this->isColumnModified(hgasTagRequestPeer::DATE_COMPLETED)) $criteria->add(hgasTagRequestPeer::DATE_COMPLETED, $this->date_completed);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(hgasTagRequestPeer::DATABASE_NAME);

		$criteria->add(hgasTagRequestPeer::ID, $this->id);

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

		$copyObj->setHangerSlotId($this->hanger_slot_id);

		$copyObj->setBeforeTagId($this->before_tag_id);

		$copyObj->setAfterTagId($this->after_tag_id);

		$copyObj->setStatus($this->status);

		$copyObj->setRequestedBy($this->requested_by);

		$copyObj->setDateRequested($this->date_requested);

		$copyObj->setIpSetBy($this->ip_set_by);

		$copyObj->setDateIpSet($this->date_ip_set);

		$copyObj->setCompletedBy($this->completed_by);

		$copyObj->setDateCompleted($this->date_completed);


		$copyObj->setNew(true);

		$copyObj->setId('0'); 
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
			self::$peer = new hgasTagRequestPeer();
		}
		return self::$peer;
	}

	
	public function sethgasHangerSlot($v)
	{


		if ($v === null) {
			$this->setHangerSlotId(NULL);
		} else {
			$this->setHangerSlotId($v->getId());
		}


		$this->ahgasHangerSlot = $v;
	}


	
	public function gethgasHangerSlot($con = null)
	{
		if ($this->ahgasHangerSlot === null && ($this->hanger_slot_id !== null)) {
						include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';

			$this->ahgasHangerSlot = hgasHangerSlotPeer::retrieveByPK($this->hanger_slot_id, $con);

			
		}
		return $this->ahgasHangerSlot;
	}

	
	public function sethgasTagRelatedByBeforeTagId($v)
	{


		if ($v === null) {
			$this->setBeforeTagId('0');
		} else {
			$this->setBeforeTagId($v->getId());
		}


		$this->ahgasTagRelatedByBeforeTagId = $v;
	}


	
	public function gethgasTagRelatedByBeforeTagId($con = null)
	{
		if ($this->ahgasTagRelatedByBeforeTagId === null && (($this->before_tag_id !== "" && $this->before_tag_id !== null))) {
						include_once 'lib/model/hgas/om/BasehgasTagPeer.php';

			$this->ahgasTagRelatedByBeforeTagId = hgasTagPeer::retrieveByPK($this->before_tag_id, $con);

			
		}
		return $this->ahgasTagRelatedByBeforeTagId;
	}

	
	public function sethgasTagRelatedByAfterTagId($v)
	{


		if ($v === null) {
			$this->setAfterTagId('0');
		} else {
			$this->setAfterTagId($v->getId());
		}


		$this->ahgasTagRelatedByAfterTagId = $v;
	}


	
	public function gethgasTagRelatedByAfterTagId($con = null)
	{
		if ($this->ahgasTagRelatedByAfterTagId === null && (($this->after_tag_id !== "" && $this->after_tag_id !== null))) {
						include_once 'lib/model/hgas/om/BasehgasTagPeer.php';

			$this->ahgasTagRelatedByAfterTagId = hgasTagPeer::retrieveByPK($this->after_tag_id, $con);

			
		}
		return $this->ahgasTagRelatedByAfterTagId;
	}

} 
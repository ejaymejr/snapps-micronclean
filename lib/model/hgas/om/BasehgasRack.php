<?php


abstract class BasehgasRack extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $cell_id;


	
	protected $name = 'null';


	
	protected $capacity = 0;


	
	protected $total_hanger = 0;


	
	protected $total_reserved = 0;


	
	protected $total_assigned = 0;


	
	protected $total_slot_reserved = 0;


	
	protected $total_slot_assigned = 0;


	
	protected $total_slot_pending = 0;


	
	protected $total_slot_in_progress = 0;

	
	protected $ahgasCell;

	
	protected $collhgasHangers;

	
	protected $lasthgasHangerCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getCellId()
	{

		return $this->cell_id;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getCapacity()
	{

		return $this->capacity;
	}

	
	public function getTotalHanger()
	{

		return $this->total_hanger;
	}

	
	public function getTotalReserved()
	{

		return $this->total_reserved;
	}

	
	public function getTotalAssigned()
	{

		return $this->total_assigned;
	}

	
	public function getTotalSlotReserved()
	{

		return $this->total_slot_reserved;
	}

	
	public function getTotalSlotAssigned()
	{

		return $this->total_slot_assigned;
	}

	
	public function getTotalSlotPending()
	{

		return $this->total_slot_pending;
	}

	
	public function getTotalSlotInProgress()
	{

		return $this->total_slot_in_progress;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = hgasRackPeer::ID;
		}

	} 
	
	public function setCellId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cell_id !== $v) {
			$this->cell_id = $v;
			$this->modifiedColumns[] = hgasRackPeer::CELL_ID;
		}

		if ($this->ahgasCell !== null && $this->ahgasCell->getId() !== $v) {
			$this->ahgasCell = null;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = hgasRackPeer::NAME;
		}

	} 
	
	public function setCapacity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->capacity !== $v || $v === 0) {
			$this->capacity = $v;
			$this->modifiedColumns[] = hgasRackPeer::CAPACITY;
		}

	} 
	
	public function setTotalHanger($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_hanger !== $v || $v === 0) {
			$this->total_hanger = $v;
			$this->modifiedColumns[] = hgasRackPeer::TOTAL_HANGER;
		}

	} 
	
	public function setTotalReserved($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_reserved !== $v || $v === 0) {
			$this->total_reserved = $v;
			$this->modifiedColumns[] = hgasRackPeer::TOTAL_RESERVED;
		}

	} 
	
	public function setTotalAssigned($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_assigned !== $v || $v === 0) {
			$this->total_assigned = $v;
			$this->modifiedColumns[] = hgasRackPeer::TOTAL_ASSIGNED;
		}

	} 
	
	public function setTotalSlotReserved($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_slot_reserved !== $v || $v === 0) {
			$this->total_slot_reserved = $v;
			$this->modifiedColumns[] = hgasRackPeer::TOTAL_SLOT_RESERVED;
		}

	} 
	
	public function setTotalSlotAssigned($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_slot_assigned !== $v || $v === 0) {
			$this->total_slot_assigned = $v;
			$this->modifiedColumns[] = hgasRackPeer::TOTAL_SLOT_ASSIGNED;
		}

	} 
	
	public function setTotalSlotPending($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_slot_pending !== $v || $v === 0) {
			$this->total_slot_pending = $v;
			$this->modifiedColumns[] = hgasRackPeer::TOTAL_SLOT_PENDING;
		}

	} 
	
	public function setTotalSlotInProgress($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_slot_in_progress !== $v || $v === 0) {
			$this->total_slot_in_progress = $v;
			$this->modifiedColumns[] = hgasRackPeer::TOTAL_SLOT_IN_PROGRESS;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->cell_id = $rs->getInt($startcol + 1);

			$this->name = $rs->getString($startcol + 2);

			$this->capacity = $rs->getInt($startcol + 3);

			$this->total_hanger = $rs->getInt($startcol + 4);

			$this->total_reserved = $rs->getInt($startcol + 5);

			$this->total_assigned = $rs->getInt($startcol + 6);

			$this->total_slot_reserved = $rs->getInt($startcol + 7);

			$this->total_slot_assigned = $rs->getInt($startcol + 8);

			$this->total_slot_pending = $rs->getInt($startcol + 9);

			$this->total_slot_in_progress = $rs->getInt($startcol + 10);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating hgasRack object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(hgasRackPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			hgasRackPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(hgasRackPeer::DATABASE_NAME);
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


												
			if ($this->ahgasCell !== null) {
				if ($this->ahgasCell->isModified()) {
					$affectedRows += $this->ahgasCell->save($con);
				}
				$this->sethgasCell($this->ahgasCell);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = hgasRackPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += hgasRackPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collhgasHangers !== null) {
				foreach($this->collhgasHangers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

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


												
			if ($this->ahgasCell !== null) {
				if (!$this->ahgasCell->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->ahgasCell->getValidationFailures());
				}
			}


			if (($retval = hgasRackPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collhgasHangers !== null) {
					foreach($this->collhgasHangers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasRackPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCellId();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getCapacity();
				break;
			case 4:
				return $this->getTotalHanger();
				break;
			case 5:
				return $this->getTotalReserved();
				break;
			case 6:
				return $this->getTotalAssigned();
				break;
			case 7:
				return $this->getTotalSlotReserved();
				break;
			case 8:
				return $this->getTotalSlotAssigned();
				break;
			case 9:
				return $this->getTotalSlotPending();
				break;
			case 10:
				return $this->getTotalSlotInProgress();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasRackPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCellId(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getCapacity(),
			$keys[4] => $this->getTotalHanger(),
			$keys[5] => $this->getTotalReserved(),
			$keys[6] => $this->getTotalAssigned(),
			$keys[7] => $this->getTotalSlotReserved(),
			$keys[8] => $this->getTotalSlotAssigned(),
			$keys[9] => $this->getTotalSlotPending(),
			$keys[10] => $this->getTotalSlotInProgress(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasRackPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCellId($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setCapacity($value);
				break;
			case 4:
				$this->setTotalHanger($value);
				break;
			case 5:
				$this->setTotalReserved($value);
				break;
			case 6:
				$this->setTotalAssigned($value);
				break;
			case 7:
				$this->setTotalSlotReserved($value);
				break;
			case 8:
				$this->setTotalSlotAssigned($value);
				break;
			case 9:
				$this->setTotalSlotPending($value);
				break;
			case 10:
				$this->setTotalSlotInProgress($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasRackPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCellId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCapacity($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTotalHanger($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTotalReserved($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTotalAssigned($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTotalSlotReserved($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTotalSlotAssigned($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTotalSlotPending($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setTotalSlotInProgress($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(hgasRackPeer::DATABASE_NAME);

		if ($this->isColumnModified(hgasRackPeer::ID)) $criteria->add(hgasRackPeer::ID, $this->id);
		if ($this->isColumnModified(hgasRackPeer::CELL_ID)) $criteria->add(hgasRackPeer::CELL_ID, $this->cell_id);
		if ($this->isColumnModified(hgasRackPeer::NAME)) $criteria->add(hgasRackPeer::NAME, $this->name);
		if ($this->isColumnModified(hgasRackPeer::CAPACITY)) $criteria->add(hgasRackPeer::CAPACITY, $this->capacity);
		if ($this->isColumnModified(hgasRackPeer::TOTAL_HANGER)) $criteria->add(hgasRackPeer::TOTAL_HANGER, $this->total_hanger);
		if ($this->isColumnModified(hgasRackPeer::TOTAL_RESERVED)) $criteria->add(hgasRackPeer::TOTAL_RESERVED, $this->total_reserved);
		if ($this->isColumnModified(hgasRackPeer::TOTAL_ASSIGNED)) $criteria->add(hgasRackPeer::TOTAL_ASSIGNED, $this->total_assigned);
		if ($this->isColumnModified(hgasRackPeer::TOTAL_SLOT_RESERVED)) $criteria->add(hgasRackPeer::TOTAL_SLOT_RESERVED, $this->total_slot_reserved);
		if ($this->isColumnModified(hgasRackPeer::TOTAL_SLOT_ASSIGNED)) $criteria->add(hgasRackPeer::TOTAL_SLOT_ASSIGNED, $this->total_slot_assigned);
		if ($this->isColumnModified(hgasRackPeer::TOTAL_SLOT_PENDING)) $criteria->add(hgasRackPeer::TOTAL_SLOT_PENDING, $this->total_slot_pending);
		if ($this->isColumnModified(hgasRackPeer::TOTAL_SLOT_IN_PROGRESS)) $criteria->add(hgasRackPeer::TOTAL_SLOT_IN_PROGRESS, $this->total_slot_in_progress);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(hgasRackPeer::DATABASE_NAME);

		$criteria->add(hgasRackPeer::ID, $this->id);

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

		$copyObj->setCellId($this->cell_id);

		$copyObj->setName($this->name);

		$copyObj->setCapacity($this->capacity);

		$copyObj->setTotalHanger($this->total_hanger);

		$copyObj->setTotalReserved($this->total_reserved);

		$copyObj->setTotalAssigned($this->total_assigned);

		$copyObj->setTotalSlotReserved($this->total_slot_reserved);

		$copyObj->setTotalSlotAssigned($this->total_slot_assigned);

		$copyObj->setTotalSlotPending($this->total_slot_pending);

		$copyObj->setTotalSlotInProgress($this->total_slot_in_progress);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->gethgasHangers() as $relObj) {
				$copyObj->addhgasHanger($relObj->copy($deepCopy));
			}

		} 

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
			self::$peer = new hgasRackPeer();
		}
		return self::$peer;
	}

	
	public function sethgasCell($v)
	{


		if ($v === null) {
			$this->setCellId(NULL);
		} else {
			$this->setCellId($v->getId());
		}


		$this->ahgasCell = $v;
	}


	
	public function gethgasCell($con = null)
	{
		if ($this->ahgasCell === null && ($this->cell_id !== null)) {
						include_once 'lib/model/hgas/om/BasehgasCellPeer.php';

			$this->ahgasCell = hgasCellPeer::retrieveByPK($this->cell_id, $con);

			
		}
		return $this->ahgasCell;
	}

	
	public function inithgasHangers()
	{
		if ($this->collhgasHangers === null) {
			$this->collhgasHangers = array();
		}
	}

	
	public function gethgasHangers($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangers === null) {
			if ($this->isNew()) {
			   $this->collhgasHangers = array();
			} else {

				$criteria->add(hgasHangerPeer::RACK_ID, $this->getId());

				hgasHangerPeer::addSelectColumns($criteria);
				$this->collhgasHangers = hgasHangerPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(hgasHangerPeer::RACK_ID, $this->getId());

				hgasHangerPeer::addSelectColumns($criteria);
				if (!isset($this->lasthgasHangerCriteria) || !$this->lasthgasHangerCriteria->equals($criteria)) {
					$this->collhgasHangers = hgasHangerPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lasthgasHangerCriteria = $criteria;
		return $this->collhgasHangers;
	}

	
	public function counthgasHangers($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(hgasHangerPeer::RACK_ID, $this->getId());

		return hgasHangerPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addhgasHanger(hgasHanger $l)
	{
		$this->collhgasHangers[] = $l;
		$l->sethgasRack($this);
	}

} 
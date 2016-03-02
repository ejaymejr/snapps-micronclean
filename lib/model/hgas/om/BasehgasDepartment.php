<?php


abstract class BasehgasDepartment extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name = 'null';


	
	protected $total_hanger = 0;


	
	protected $total_reserved = 0;


	
	protected $total_assigned = 0;


	
	protected $total_slot_reserved = 0;


	
	protected $total_slot_assigned = 0;


	
	protected $total_slot_pending = 0;


	
	protected $total_slot_in_progress = 0;

	
	protected $collhgasDepartmentTeams;

	
	protected $lasthgasDepartmentTeamCriteria = null;

	
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
			$this->modifiedColumns[] = hgasDepartmentPeer::ID;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = hgasDepartmentPeer::NAME;
		}

	} 
	
	public function setTotalHanger($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_hanger !== $v || $v === 0) {
			$this->total_hanger = $v;
			$this->modifiedColumns[] = hgasDepartmentPeer::TOTAL_HANGER;
		}

	} 
	
	public function setTotalReserved($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_reserved !== $v || $v === 0) {
			$this->total_reserved = $v;
			$this->modifiedColumns[] = hgasDepartmentPeer::TOTAL_RESERVED;
		}

	} 
	
	public function setTotalAssigned($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_assigned !== $v || $v === 0) {
			$this->total_assigned = $v;
			$this->modifiedColumns[] = hgasDepartmentPeer::TOTAL_ASSIGNED;
		}

	} 
	
	public function setTotalSlotReserved($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_slot_reserved !== $v || $v === 0) {
			$this->total_slot_reserved = $v;
			$this->modifiedColumns[] = hgasDepartmentPeer::TOTAL_SLOT_RESERVED;
		}

	} 
	
	public function setTotalSlotAssigned($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_slot_assigned !== $v || $v === 0) {
			$this->total_slot_assigned = $v;
			$this->modifiedColumns[] = hgasDepartmentPeer::TOTAL_SLOT_ASSIGNED;
		}

	} 
	
	public function setTotalSlotPending($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_slot_pending !== $v || $v === 0) {
			$this->total_slot_pending = $v;
			$this->modifiedColumns[] = hgasDepartmentPeer::TOTAL_SLOT_PENDING;
		}

	} 
	
	public function setTotalSlotInProgress($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_slot_in_progress !== $v || $v === 0) {
			$this->total_slot_in_progress = $v;
			$this->modifiedColumns[] = hgasDepartmentPeer::TOTAL_SLOT_IN_PROGRESS;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->total_hanger = $rs->getInt($startcol + 2);

			$this->total_reserved = $rs->getInt($startcol + 3);

			$this->total_assigned = $rs->getInt($startcol + 4);

			$this->total_slot_reserved = $rs->getInt($startcol + 5);

			$this->total_slot_assigned = $rs->getInt($startcol + 6);

			$this->total_slot_pending = $rs->getInt($startcol + 7);

			$this->total_slot_in_progress = $rs->getInt($startcol + 8);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating hgasDepartment object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(hgasDepartmentPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			hgasDepartmentPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(hgasDepartmentPeer::DATABASE_NAME);
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
					$pk = hgasDepartmentPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += hgasDepartmentPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collhgasDepartmentTeams !== null) {
				foreach($this->collhgasDepartmentTeams as $referrerFK) {
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


			if (($retval = hgasDepartmentPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collhgasDepartmentTeams !== null) {
					foreach($this->collhgasDepartmentTeams as $referrerFK) {
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
		$pos = hgasDepartmentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTotalHanger();
				break;
			case 3:
				return $this->getTotalReserved();
				break;
			case 4:
				return $this->getTotalAssigned();
				break;
			case 5:
				return $this->getTotalSlotReserved();
				break;
			case 6:
				return $this->getTotalSlotAssigned();
				break;
			case 7:
				return $this->getTotalSlotPending();
				break;
			case 8:
				return $this->getTotalSlotInProgress();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasDepartmentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getTotalHanger(),
			$keys[3] => $this->getTotalReserved(),
			$keys[4] => $this->getTotalAssigned(),
			$keys[5] => $this->getTotalSlotReserved(),
			$keys[6] => $this->getTotalSlotAssigned(),
			$keys[7] => $this->getTotalSlotPending(),
			$keys[8] => $this->getTotalSlotInProgress(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasDepartmentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTotalHanger($value);
				break;
			case 3:
				$this->setTotalReserved($value);
				break;
			case 4:
				$this->setTotalAssigned($value);
				break;
			case 5:
				$this->setTotalSlotReserved($value);
				break;
			case 6:
				$this->setTotalSlotAssigned($value);
				break;
			case 7:
				$this->setTotalSlotPending($value);
				break;
			case 8:
				$this->setTotalSlotInProgress($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasDepartmentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTotalHanger($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTotalReserved($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTotalAssigned($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTotalSlotReserved($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTotalSlotAssigned($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTotalSlotPending($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTotalSlotInProgress($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(hgasDepartmentPeer::DATABASE_NAME);

		if ($this->isColumnModified(hgasDepartmentPeer::ID)) $criteria->add(hgasDepartmentPeer::ID, $this->id);
		if ($this->isColumnModified(hgasDepartmentPeer::NAME)) $criteria->add(hgasDepartmentPeer::NAME, $this->name);
		if ($this->isColumnModified(hgasDepartmentPeer::TOTAL_HANGER)) $criteria->add(hgasDepartmentPeer::TOTAL_HANGER, $this->total_hanger);
		if ($this->isColumnModified(hgasDepartmentPeer::TOTAL_RESERVED)) $criteria->add(hgasDepartmentPeer::TOTAL_RESERVED, $this->total_reserved);
		if ($this->isColumnModified(hgasDepartmentPeer::TOTAL_ASSIGNED)) $criteria->add(hgasDepartmentPeer::TOTAL_ASSIGNED, $this->total_assigned);
		if ($this->isColumnModified(hgasDepartmentPeer::TOTAL_SLOT_RESERVED)) $criteria->add(hgasDepartmentPeer::TOTAL_SLOT_RESERVED, $this->total_slot_reserved);
		if ($this->isColumnModified(hgasDepartmentPeer::TOTAL_SLOT_ASSIGNED)) $criteria->add(hgasDepartmentPeer::TOTAL_SLOT_ASSIGNED, $this->total_slot_assigned);
		if ($this->isColumnModified(hgasDepartmentPeer::TOTAL_SLOT_PENDING)) $criteria->add(hgasDepartmentPeer::TOTAL_SLOT_PENDING, $this->total_slot_pending);
		if ($this->isColumnModified(hgasDepartmentPeer::TOTAL_SLOT_IN_PROGRESS)) $criteria->add(hgasDepartmentPeer::TOTAL_SLOT_IN_PROGRESS, $this->total_slot_in_progress);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(hgasDepartmentPeer::DATABASE_NAME);

		$criteria->add(hgasDepartmentPeer::ID, $this->id);

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

		$copyObj->setTotalHanger($this->total_hanger);

		$copyObj->setTotalReserved($this->total_reserved);

		$copyObj->setTotalAssigned($this->total_assigned);

		$copyObj->setTotalSlotReserved($this->total_slot_reserved);

		$copyObj->setTotalSlotAssigned($this->total_slot_assigned);

		$copyObj->setTotalSlotPending($this->total_slot_pending);

		$copyObj->setTotalSlotInProgress($this->total_slot_in_progress);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->gethgasDepartmentTeams() as $relObj) {
				$copyObj->addhgasDepartmentTeam($relObj->copy($deepCopy));
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
			self::$peer = new hgasDepartmentPeer();
		}
		return self::$peer;
	}

	
	public function inithgasDepartmentTeams()
	{
		if ($this->collhgasDepartmentTeams === null) {
			$this->collhgasDepartmentTeams = array();
		}
	}

	
	public function gethgasDepartmentTeams($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasDepartmentTeamPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasDepartmentTeams === null) {
			if ($this->isNew()) {
			   $this->collhgasDepartmentTeams = array();
			} else {

				$criteria->add(hgasDepartmentTeamPeer::DEPARTMENT_ID, $this->getId());

				hgasDepartmentTeamPeer::addSelectColumns($criteria);
				$this->collhgasDepartmentTeams = hgasDepartmentTeamPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(hgasDepartmentTeamPeer::DEPARTMENT_ID, $this->getId());

				hgasDepartmentTeamPeer::addSelectColumns($criteria);
				if (!isset($this->lasthgasDepartmentTeamCriteria) || !$this->lasthgasDepartmentTeamCriteria->equals($criteria)) {
					$this->collhgasDepartmentTeams = hgasDepartmentTeamPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lasthgasDepartmentTeamCriteria = $criteria;
		return $this->collhgasDepartmentTeams;
	}

	
	public function counthgasDepartmentTeams($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasDepartmentTeamPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(hgasDepartmentTeamPeer::DEPARTMENT_ID, $this->getId());

		return hgasDepartmentTeamPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addhgasDepartmentTeam(hgasDepartmentTeam $l)
	{
		$this->collhgasDepartmentTeams[] = $l;
		$l->sethgasDepartment($this);
	}


	
	public function gethgasDepartmentTeamsJoinhgasTeam($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasDepartmentTeamPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasDepartmentTeams === null) {
			if ($this->isNew()) {
				$this->collhgasDepartmentTeams = array();
			} else {

				$criteria->add(hgasDepartmentTeamPeer::DEPARTMENT_ID, $this->getId());

				$this->collhgasDepartmentTeams = hgasDepartmentTeamPeer::doSelectJoinhgasTeam($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasDepartmentTeamPeer::DEPARTMENT_ID, $this->getId());

			if (!isset($this->lasthgasDepartmentTeamCriteria) || !$this->lasthgasDepartmentTeamCriteria->equals($criteria)) {
				$this->collhgasDepartmentTeams = hgasDepartmentTeamPeer::doSelectJoinhgasTeam($criteria, $con);
			}
		}
		$this->lasthgasDepartmentTeamCriteria = $criteria;

		return $this->collhgasDepartmentTeams;
	}

} 
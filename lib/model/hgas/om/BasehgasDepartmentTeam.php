<?php


abstract class BasehgasDepartmentTeam extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $department_id = 0;


	
	protected $team_id = 0;


	
	protected $total_slot_reserved = 0;


	
	protected $total_slot_assigned = 0;


	
	protected $total_slot_pending = 0;


	
	protected $total_slot_in_progress = 0;

	
	protected $ahgasDepartment;

	
	protected $ahgasTeam;

	
	protected $collhgasHangerSlotsRelatedByDepartmentId;

	
	protected $lasthgasHangerSlotRelatedByDepartmentIdCriteria = null;

	
	protected $collhgasHangerSlotsRelatedByTeamId;

	
	protected $lasthgasHangerSlotRelatedByTeamIdCriteria = null;

	
	protected $collhgasUserToDepartmentTeamsRelatedByDepartmentId;

	
	protected $lasthgasUserToDepartmentTeamRelatedByDepartmentIdCriteria = null;

	
	protected $collhgasUserToDepartmentTeamsRelatedByTeamId;

	
	protected $lasthgasUserToDepartmentTeamRelatedByTeamIdCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getDepartmentId()
	{

		return $this->department_id;
	}

	
	public function getTeamId()
	{

		return $this->team_id;
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

	
	public function setDepartmentId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->department_id !== $v || $v === 0) {
			$this->department_id = $v;
			$this->modifiedColumns[] = hgasDepartmentTeamPeer::DEPARTMENT_ID;
		}

		if ($this->ahgasDepartment !== null && $this->ahgasDepartment->getId() !== $v) {
			$this->ahgasDepartment = null;
		}

	} 
	
	public function setTeamId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->team_id !== $v || $v === 0) {
			$this->team_id = $v;
			$this->modifiedColumns[] = hgasDepartmentTeamPeer::TEAM_ID;
		}

		if ($this->ahgasTeam !== null && $this->ahgasTeam->getId() !== $v) {
			$this->ahgasTeam = null;
		}

	} 
	
	public function setTotalSlotReserved($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_slot_reserved !== $v || $v === 0) {
			$this->total_slot_reserved = $v;
			$this->modifiedColumns[] = hgasDepartmentTeamPeer::TOTAL_SLOT_RESERVED;
		}

	} 
	
	public function setTotalSlotAssigned($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_slot_assigned !== $v || $v === 0) {
			$this->total_slot_assigned = $v;
			$this->modifiedColumns[] = hgasDepartmentTeamPeer::TOTAL_SLOT_ASSIGNED;
		}

	} 
	
	public function setTotalSlotPending($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_slot_pending !== $v || $v === 0) {
			$this->total_slot_pending = $v;
			$this->modifiedColumns[] = hgasDepartmentTeamPeer::TOTAL_SLOT_PENDING;
		}

	} 
	
	public function setTotalSlotInProgress($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->total_slot_in_progress !== $v || $v === 0) {
			$this->total_slot_in_progress = $v;
			$this->modifiedColumns[] = hgasDepartmentTeamPeer::TOTAL_SLOT_IN_PROGRESS;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->department_id = $rs->getInt($startcol + 0);

			$this->team_id = $rs->getInt($startcol + 1);

			$this->total_slot_reserved = $rs->getInt($startcol + 2);

			$this->total_slot_assigned = $rs->getInt($startcol + 3);

			$this->total_slot_pending = $rs->getInt($startcol + 4);

			$this->total_slot_in_progress = $rs->getInt($startcol + 5);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating hgasDepartmentTeam object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(hgasDepartmentTeamPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			hgasDepartmentTeamPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(hgasDepartmentTeamPeer::DATABASE_NAME);
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


												
			if ($this->ahgasDepartment !== null) {
				if ($this->ahgasDepartment->isModified()) {
					$affectedRows += $this->ahgasDepartment->save($con);
				}
				$this->sethgasDepartment($this->ahgasDepartment);
			}

			if ($this->ahgasTeam !== null) {
				if ($this->ahgasTeam->isModified()) {
					$affectedRows += $this->ahgasTeam->save($con);
				}
				$this->sethgasTeam($this->ahgasTeam);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = hgasDepartmentTeamPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += hgasDepartmentTeamPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collhgasHangerSlotsRelatedByDepartmentId !== null) {
				foreach($this->collhgasHangerSlotsRelatedByDepartmentId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collhgasHangerSlotsRelatedByTeamId !== null) {
				foreach($this->collhgasHangerSlotsRelatedByTeamId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collhgasUserToDepartmentTeamsRelatedByDepartmentId !== null) {
				foreach($this->collhgasUserToDepartmentTeamsRelatedByDepartmentId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collhgasUserToDepartmentTeamsRelatedByTeamId !== null) {
				foreach($this->collhgasUserToDepartmentTeamsRelatedByTeamId as $referrerFK) {
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


												
			if ($this->ahgasDepartment !== null) {
				if (!$this->ahgasDepartment->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->ahgasDepartment->getValidationFailures());
				}
			}

			if ($this->ahgasTeam !== null) {
				if (!$this->ahgasTeam->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->ahgasTeam->getValidationFailures());
				}
			}


			if (($retval = hgasDepartmentTeamPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collhgasHangerSlotsRelatedByDepartmentId !== null) {
					foreach($this->collhgasHangerSlotsRelatedByDepartmentId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collhgasHangerSlotsRelatedByTeamId !== null) {
					foreach($this->collhgasHangerSlotsRelatedByTeamId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collhgasUserToDepartmentTeamsRelatedByDepartmentId !== null) {
					foreach($this->collhgasUserToDepartmentTeamsRelatedByDepartmentId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collhgasUserToDepartmentTeamsRelatedByTeamId !== null) {
					foreach($this->collhgasUserToDepartmentTeamsRelatedByTeamId as $referrerFK) {
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
		$pos = hgasDepartmentTeamPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getDepartmentId();
				break;
			case 1:
				return $this->getTeamId();
				break;
			case 2:
				return $this->getTotalSlotReserved();
				break;
			case 3:
				return $this->getTotalSlotAssigned();
				break;
			case 4:
				return $this->getTotalSlotPending();
				break;
			case 5:
				return $this->getTotalSlotInProgress();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasDepartmentTeamPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getDepartmentId(),
			$keys[1] => $this->getTeamId(),
			$keys[2] => $this->getTotalSlotReserved(),
			$keys[3] => $this->getTotalSlotAssigned(),
			$keys[4] => $this->getTotalSlotPending(),
			$keys[5] => $this->getTotalSlotInProgress(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasDepartmentTeamPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setDepartmentId($value);
				break;
			case 1:
				$this->setTeamId($value);
				break;
			case 2:
				$this->setTotalSlotReserved($value);
				break;
			case 3:
				$this->setTotalSlotAssigned($value);
				break;
			case 4:
				$this->setTotalSlotPending($value);
				break;
			case 5:
				$this->setTotalSlotInProgress($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasDepartmentTeamPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setDepartmentId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTeamId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTotalSlotReserved($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTotalSlotAssigned($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTotalSlotPending($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTotalSlotInProgress($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(hgasDepartmentTeamPeer::DATABASE_NAME);

		if ($this->isColumnModified(hgasDepartmentTeamPeer::DEPARTMENT_ID)) $criteria->add(hgasDepartmentTeamPeer::DEPARTMENT_ID, $this->department_id);
		if ($this->isColumnModified(hgasDepartmentTeamPeer::TEAM_ID)) $criteria->add(hgasDepartmentTeamPeer::TEAM_ID, $this->team_id);
		if ($this->isColumnModified(hgasDepartmentTeamPeer::TOTAL_SLOT_RESERVED)) $criteria->add(hgasDepartmentTeamPeer::TOTAL_SLOT_RESERVED, $this->total_slot_reserved);
		if ($this->isColumnModified(hgasDepartmentTeamPeer::TOTAL_SLOT_ASSIGNED)) $criteria->add(hgasDepartmentTeamPeer::TOTAL_SLOT_ASSIGNED, $this->total_slot_assigned);
		if ($this->isColumnModified(hgasDepartmentTeamPeer::TOTAL_SLOT_PENDING)) $criteria->add(hgasDepartmentTeamPeer::TOTAL_SLOT_PENDING, $this->total_slot_pending);
		if ($this->isColumnModified(hgasDepartmentTeamPeer::TOTAL_SLOT_IN_PROGRESS)) $criteria->add(hgasDepartmentTeamPeer::TOTAL_SLOT_IN_PROGRESS, $this->total_slot_in_progress);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(hgasDepartmentTeamPeer::DATABASE_NAME);

		$criteria->add(hgasDepartmentTeamPeer::DEPARTMENT_ID, $this->department_id);
		$criteria->add(hgasDepartmentTeamPeer::TEAM_ID, $this->team_id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		$pks = array();

		$pks[0] = $this->getDepartmentId();

		$pks[1] = $this->getTeamId();

		return $pks;
	}

	
	public function setPrimaryKey($keys)
	{

		$this->setDepartmentId($keys[0]);

		$this->setTeamId($keys[1]);

	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setTotalSlotReserved($this->total_slot_reserved);

		$copyObj->setTotalSlotAssigned($this->total_slot_assigned);

		$copyObj->setTotalSlotPending($this->total_slot_pending);

		$copyObj->setTotalSlotInProgress($this->total_slot_in_progress);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->gethgasHangerSlotsRelatedByDepartmentId() as $relObj) {
				$copyObj->addhgasHangerSlotRelatedByDepartmentId($relObj->copy($deepCopy));
			}

			foreach($this->gethgasHangerSlotsRelatedByTeamId() as $relObj) {
				$copyObj->addhgasHangerSlotRelatedByTeamId($relObj->copy($deepCopy));
			}

			foreach($this->gethgasUserToDepartmentTeamsRelatedByDepartmentId() as $relObj) {
				$copyObj->addhgasUserToDepartmentTeamRelatedByDepartmentId($relObj->copy($deepCopy));
			}

			foreach($this->gethgasUserToDepartmentTeamsRelatedByTeamId() as $relObj) {
				$copyObj->addhgasUserToDepartmentTeamRelatedByTeamId($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setDepartmentId('0'); 
		$copyObj->setTeamId('0'); 
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
			self::$peer = new hgasDepartmentTeamPeer();
		}
		return self::$peer;
	}

	
	public function sethgasDepartment($v)
	{


		if ($v === null) {
			$this->setDepartmentId('0');
		} else {
			$this->setDepartmentId($v->getId());
		}


		$this->ahgasDepartment = $v;
	}


	
	public function gethgasDepartment($con = null)
	{
		if ($this->ahgasDepartment === null && ($this->department_id !== null)) {
						include_once 'lib/model/hgas/om/BasehgasDepartmentPeer.php';

			$this->ahgasDepartment = hgasDepartmentPeer::retrieveByPK($this->department_id, $con);

			
		}
		return $this->ahgasDepartment;
	}

	
	public function sethgasTeam($v)
	{


		if ($v === null) {
			$this->setTeamId('0');
		} else {
			$this->setTeamId($v->getId());
		}


		$this->ahgasTeam = $v;
	}


	
	public function gethgasTeam($con = null)
	{
		if ($this->ahgasTeam === null && ($this->team_id !== null)) {
						include_once 'lib/model/hgas/om/BasehgasTeamPeer.php';

			$this->ahgasTeam = hgasTeamPeer::retrieveByPK($this->team_id, $con);

			
		}
		return $this->ahgasTeam;
	}

	
	public function inithgasHangerSlotsRelatedByDepartmentId()
	{
		if ($this->collhgasHangerSlotsRelatedByDepartmentId === null) {
			$this->collhgasHangerSlotsRelatedByDepartmentId = array();
		}
	}

	
	public function gethgasHangerSlotsRelatedByDepartmentId($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlotsRelatedByDepartmentId === null) {
			if ($this->isNew()) {
			   $this->collhgasHangerSlotsRelatedByDepartmentId = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::DEPARTMENT_ID, $this->getDepartmentId());

				hgasHangerSlotPeer::addSelectColumns($criteria);
				$this->collhgasHangerSlotsRelatedByDepartmentId = hgasHangerSlotPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(hgasHangerSlotPeer::DEPARTMENT_ID, $this->getDepartmentId());

				hgasHangerSlotPeer::addSelectColumns($criteria);
				if (!isset($this->lasthgasHangerSlotRelatedByDepartmentIdCriteria) || !$this->lasthgasHangerSlotRelatedByDepartmentIdCriteria->equals($criteria)) {
					$this->collhgasHangerSlotsRelatedByDepartmentId = hgasHangerSlotPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lasthgasHangerSlotRelatedByDepartmentIdCriteria = $criteria;
		return $this->collhgasHangerSlotsRelatedByDepartmentId;
	}

	
	public function counthgasHangerSlotsRelatedByDepartmentId($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(hgasHangerSlotPeer::DEPARTMENT_ID, $this->getDepartmentId());

		return hgasHangerSlotPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addhgasHangerSlotRelatedByDepartmentId(hgasHangerSlot $l)
	{
		$this->collhgasHangerSlotsRelatedByDepartmentId[] = $l;
		$l->sethgasDepartmentTeamRelatedByDepartmentId($this);
	}


	
	public function gethgasHangerSlotsRelatedByDepartmentIdJoinhgasHanger($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlotsRelatedByDepartmentId === null) {
			if ($this->isNew()) {
				$this->collhgasHangerSlotsRelatedByDepartmentId = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::DEPARTMENT_ID, $this->getDepartmentId());

				$this->collhgasHangerSlotsRelatedByDepartmentId = hgasHangerSlotPeer::doSelectJoinhgasHanger($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasHangerSlotPeer::DEPARTMENT_ID, $this->getDepartmentId());

			if (!isset($this->lasthgasHangerSlotRelatedByDepartmentIdCriteria) || !$this->lasthgasHangerSlotRelatedByDepartmentIdCriteria->equals($criteria)) {
				$this->collhgasHangerSlotsRelatedByDepartmentId = hgasHangerSlotPeer::doSelectJoinhgasHanger($criteria, $con);
			}
		}
		$this->lasthgasHangerSlotRelatedByDepartmentIdCriteria = $criteria;

		return $this->collhgasHangerSlotsRelatedByDepartmentId;
	}


	
	public function gethgasHangerSlotsRelatedByDepartmentIdJoinhgasTag($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlotsRelatedByDepartmentId === null) {
			if ($this->isNew()) {
				$this->collhgasHangerSlotsRelatedByDepartmentId = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::DEPARTMENT_ID, $this->getDepartmentId());

				$this->collhgasHangerSlotsRelatedByDepartmentId = hgasHangerSlotPeer::doSelectJoinhgasTag($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasHangerSlotPeer::DEPARTMENT_ID, $this->getDepartmentId());

			if (!isset($this->lasthgasHangerSlotRelatedByDepartmentIdCriteria) || !$this->lasthgasHangerSlotRelatedByDepartmentIdCriteria->equals($criteria)) {
				$this->collhgasHangerSlotsRelatedByDepartmentId = hgasHangerSlotPeer::doSelectJoinhgasTag($criteria, $con);
			}
		}
		$this->lasthgasHangerSlotRelatedByDepartmentIdCriteria = $criteria;

		return $this->collhgasHangerSlotsRelatedByDepartmentId;
	}

	
	public function inithgasHangerSlotsRelatedByTeamId()
	{
		if ($this->collhgasHangerSlotsRelatedByTeamId === null) {
			$this->collhgasHangerSlotsRelatedByTeamId = array();
		}
	}

	
	public function gethgasHangerSlotsRelatedByTeamId($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlotsRelatedByTeamId === null) {
			if ($this->isNew()) {
			   $this->collhgasHangerSlotsRelatedByTeamId = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::TEAM_ID, $this->getTeamId());

				hgasHangerSlotPeer::addSelectColumns($criteria);
				$this->collhgasHangerSlotsRelatedByTeamId = hgasHangerSlotPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(hgasHangerSlotPeer::TEAM_ID, $this->getTeamId());

				hgasHangerSlotPeer::addSelectColumns($criteria);
				if (!isset($this->lasthgasHangerSlotRelatedByTeamIdCriteria) || !$this->lasthgasHangerSlotRelatedByTeamIdCriteria->equals($criteria)) {
					$this->collhgasHangerSlotsRelatedByTeamId = hgasHangerSlotPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lasthgasHangerSlotRelatedByTeamIdCriteria = $criteria;
		return $this->collhgasHangerSlotsRelatedByTeamId;
	}

	
	public function counthgasHangerSlotsRelatedByTeamId($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(hgasHangerSlotPeer::TEAM_ID, $this->getTeamId());

		return hgasHangerSlotPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addhgasHangerSlotRelatedByTeamId(hgasHangerSlot $l)
	{
		$this->collhgasHangerSlotsRelatedByTeamId[] = $l;
		$l->sethgasDepartmentTeamRelatedByTeamId($this);
	}


	
	public function gethgasHangerSlotsRelatedByTeamIdJoinhgasHanger($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlotsRelatedByTeamId === null) {
			if ($this->isNew()) {
				$this->collhgasHangerSlotsRelatedByTeamId = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::TEAM_ID, $this->getTeamId());

				$this->collhgasHangerSlotsRelatedByTeamId = hgasHangerSlotPeer::doSelectJoinhgasHanger($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasHangerSlotPeer::TEAM_ID, $this->getTeamId());

			if (!isset($this->lasthgasHangerSlotRelatedByTeamIdCriteria) || !$this->lasthgasHangerSlotRelatedByTeamIdCriteria->equals($criteria)) {
				$this->collhgasHangerSlotsRelatedByTeamId = hgasHangerSlotPeer::doSelectJoinhgasHanger($criteria, $con);
			}
		}
		$this->lasthgasHangerSlotRelatedByTeamIdCriteria = $criteria;

		return $this->collhgasHangerSlotsRelatedByTeamId;
	}


	
	public function gethgasHangerSlotsRelatedByTeamIdJoinhgasTag($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlotsRelatedByTeamId === null) {
			if ($this->isNew()) {
				$this->collhgasHangerSlotsRelatedByTeamId = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::TEAM_ID, $this->getTeamId());

				$this->collhgasHangerSlotsRelatedByTeamId = hgasHangerSlotPeer::doSelectJoinhgasTag($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasHangerSlotPeer::TEAM_ID, $this->getTeamId());

			if (!isset($this->lasthgasHangerSlotRelatedByTeamIdCriteria) || !$this->lasthgasHangerSlotRelatedByTeamIdCriteria->equals($criteria)) {
				$this->collhgasHangerSlotsRelatedByTeamId = hgasHangerSlotPeer::doSelectJoinhgasTag($criteria, $con);
			}
		}
		$this->lasthgasHangerSlotRelatedByTeamIdCriteria = $criteria;

		return $this->collhgasHangerSlotsRelatedByTeamId;
	}

	
	public function inithgasUserToDepartmentTeamsRelatedByDepartmentId()
	{
		if ($this->collhgasUserToDepartmentTeamsRelatedByDepartmentId === null) {
			$this->collhgasUserToDepartmentTeamsRelatedByDepartmentId = array();
		}
	}

	
	public function gethgasUserToDepartmentTeamsRelatedByDepartmentId($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasUserToDepartmentTeamPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasUserToDepartmentTeamsRelatedByDepartmentId === null) {
			if ($this->isNew()) {
			   $this->collhgasUserToDepartmentTeamsRelatedByDepartmentId = array();
			} else {

				$criteria->add(hgasUserToDepartmentTeamPeer::DEPARTMENT_ID, $this->getDepartmentId());

				hgasUserToDepartmentTeamPeer::addSelectColumns($criteria);
				$this->collhgasUserToDepartmentTeamsRelatedByDepartmentId = hgasUserToDepartmentTeamPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(hgasUserToDepartmentTeamPeer::DEPARTMENT_ID, $this->getDepartmentId());

				hgasUserToDepartmentTeamPeer::addSelectColumns($criteria);
				if (!isset($this->lasthgasUserToDepartmentTeamRelatedByDepartmentIdCriteria) || !$this->lasthgasUserToDepartmentTeamRelatedByDepartmentIdCriteria->equals($criteria)) {
					$this->collhgasUserToDepartmentTeamsRelatedByDepartmentId = hgasUserToDepartmentTeamPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lasthgasUserToDepartmentTeamRelatedByDepartmentIdCriteria = $criteria;
		return $this->collhgasUserToDepartmentTeamsRelatedByDepartmentId;
	}

	
	public function counthgasUserToDepartmentTeamsRelatedByDepartmentId($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasUserToDepartmentTeamPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(hgasUserToDepartmentTeamPeer::DEPARTMENT_ID, $this->getDepartmentId());

		return hgasUserToDepartmentTeamPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addhgasUserToDepartmentTeamRelatedByDepartmentId(hgasUserToDepartmentTeam $l)
	{
		$this->collhgasUserToDepartmentTeamsRelatedByDepartmentId[] = $l;
		$l->sethgasDepartmentTeamRelatedByDepartmentId($this);
	}

	
	public function inithgasUserToDepartmentTeamsRelatedByTeamId()
	{
		if ($this->collhgasUserToDepartmentTeamsRelatedByTeamId === null) {
			$this->collhgasUserToDepartmentTeamsRelatedByTeamId = array();
		}
	}

	
	public function gethgasUserToDepartmentTeamsRelatedByTeamId($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasUserToDepartmentTeamPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasUserToDepartmentTeamsRelatedByTeamId === null) {
			if ($this->isNew()) {
			   $this->collhgasUserToDepartmentTeamsRelatedByTeamId = array();
			} else {

				$criteria->add(hgasUserToDepartmentTeamPeer::TEAM_ID, $this->getTeamId());

				hgasUserToDepartmentTeamPeer::addSelectColumns($criteria);
				$this->collhgasUserToDepartmentTeamsRelatedByTeamId = hgasUserToDepartmentTeamPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(hgasUserToDepartmentTeamPeer::TEAM_ID, $this->getTeamId());

				hgasUserToDepartmentTeamPeer::addSelectColumns($criteria);
				if (!isset($this->lasthgasUserToDepartmentTeamRelatedByTeamIdCriteria) || !$this->lasthgasUserToDepartmentTeamRelatedByTeamIdCriteria->equals($criteria)) {
					$this->collhgasUserToDepartmentTeamsRelatedByTeamId = hgasUserToDepartmentTeamPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lasthgasUserToDepartmentTeamRelatedByTeamIdCriteria = $criteria;
		return $this->collhgasUserToDepartmentTeamsRelatedByTeamId;
	}

	
	public function counthgasUserToDepartmentTeamsRelatedByTeamId($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasUserToDepartmentTeamPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(hgasUserToDepartmentTeamPeer::TEAM_ID, $this->getTeamId());

		return hgasUserToDepartmentTeamPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addhgasUserToDepartmentTeamRelatedByTeamId(hgasUserToDepartmentTeam $l)
	{
		$this->collhgasUserToDepartmentTeamsRelatedByTeamId[] = $l;
		$l->sethgasDepartmentTeamRelatedByTeamId($this);
	}

} 
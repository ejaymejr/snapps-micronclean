<?php


abstract class BasehgasHangerSlot extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name = 'null';


	
	protected $hanger_id = 0;


	
	protected $rack_id;


	
	protected $cell_id;


	
	protected $department_id = 0;


	
	protected $team_id = 0;


	
	protected $tag_id;


	
	protected $status = 'null';

	
	protected $ahgasHanger;

	
	protected $ahgasDepartmentTeamRelatedByDepartmentId;

	
	protected $ahgasDepartmentTeamRelatedByTeamId;

	
	protected $ahgasTag;

	
	protected $collhgasTagRequests;

	
	protected $lasthgasTagRequestCriteria = null;

	
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

	
	public function getHangerId()
	{

		return $this->hanger_id;
	}

	
	public function getRackId()
	{

		return $this->rack_id;
	}

	
	public function getCellId()
	{

		return $this->cell_id;
	}

	
	public function getDepartmentId()
	{

		return $this->department_id;
	}

	
	public function getTeamId()
	{

		return $this->team_id;
	}

	
	public function getTagId()
	{

		return $this->tag_id;
	}

	
	public function getStatus()
	{

		return $this->status;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = hgasHangerSlotPeer::ID;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = hgasHangerSlotPeer::NAME;
		}

	} 
	
	public function setHangerId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->hanger_id !== $v || $v === 0) {
			$this->hanger_id = $v;
			$this->modifiedColumns[] = hgasHangerSlotPeer::HANGER_ID;
		}

		if ($this->ahgasHanger !== null && $this->ahgasHanger->getId() !== $v) {
			$this->ahgasHanger = null;
		}

	} 
	
	public function setRackId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->rack_id !== $v) {
			$this->rack_id = $v;
			$this->modifiedColumns[] = hgasHangerSlotPeer::RACK_ID;
		}

	} 
	
	public function setCellId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cell_id !== $v) {
			$this->cell_id = $v;
			$this->modifiedColumns[] = hgasHangerSlotPeer::CELL_ID;
		}

	} 
	
	public function setDepartmentId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->department_id !== $v || $v === 0) {
			$this->department_id = $v;
			$this->modifiedColumns[] = hgasHangerSlotPeer::DEPARTMENT_ID;
		}

		if ($this->ahgasDepartmentTeamRelatedByDepartmentId !== null && $this->ahgasDepartmentTeamRelatedByDepartmentId->getDepartmentId() !== $v) {
			$this->ahgasDepartmentTeamRelatedByDepartmentId = null;
		}

	} 
	
	public function setTeamId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->team_id !== $v || $v === 0) {
			$this->team_id = $v;
			$this->modifiedColumns[] = hgasHangerSlotPeer::TEAM_ID;
		}

		if ($this->ahgasDepartmentTeamRelatedByTeamId !== null && $this->ahgasDepartmentTeamRelatedByTeamId->getTeamId() !== $v) {
			$this->ahgasDepartmentTeamRelatedByTeamId = null;
		}

	} 
	
	public function setTagId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tag_id !== $v) {
			$this->tag_id = $v;
			$this->modifiedColumns[] = hgasHangerSlotPeer::TAG_ID;
		}

		if ($this->ahgasTag !== null && $this->ahgasTag->getId() !== $v) {
			$this->ahgasTag = null;
		}

	} 
	
	public function setStatus($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->status !== $v || $v === 'null') {
			$this->status = $v;
			$this->modifiedColumns[] = hgasHangerSlotPeer::STATUS;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->hanger_id = $rs->getInt($startcol + 2);

			$this->rack_id = $rs->getInt($startcol + 3);

			$this->cell_id = $rs->getInt($startcol + 4);

			$this->department_id = $rs->getInt($startcol + 5);

			$this->team_id = $rs->getInt($startcol + 6);

			$this->tag_id = $rs->getString($startcol + 7);

			$this->status = $rs->getString($startcol + 8);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating hgasHangerSlot object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(hgasHangerSlotPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			hgasHangerSlotPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(hgasHangerSlotPeer::DATABASE_NAME);
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


												
			if ($this->ahgasHanger !== null) {
				if ($this->ahgasHanger->isModified()) {
					$affectedRows += $this->ahgasHanger->save($con);
				}
				$this->sethgasHanger($this->ahgasHanger);
			}

			if ($this->ahgasDepartmentTeamRelatedByDepartmentId !== null) {
				if ($this->ahgasDepartmentTeamRelatedByDepartmentId->isModified()) {
					$affectedRows += $this->ahgasDepartmentTeamRelatedByDepartmentId->save($con);
				}
				$this->sethgasDepartmentTeamRelatedByDepartmentId($this->ahgasDepartmentTeamRelatedByDepartmentId);
			}

			if ($this->ahgasDepartmentTeamRelatedByTeamId !== null) {
				if ($this->ahgasDepartmentTeamRelatedByTeamId->isModified()) {
					$affectedRows += $this->ahgasDepartmentTeamRelatedByTeamId->save($con);
				}
				$this->sethgasDepartmentTeamRelatedByTeamId($this->ahgasDepartmentTeamRelatedByTeamId);
			}

			if ($this->ahgasTag !== null) {
				if ($this->ahgasTag->isModified()) {
					$affectedRows += $this->ahgasTag->save($con);
				}
				$this->sethgasTag($this->ahgasTag);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = hgasHangerSlotPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += hgasHangerSlotPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collhgasTagRequests !== null) {
				foreach($this->collhgasTagRequests as $referrerFK) {
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


												
			if ($this->ahgasHanger !== null) {
				if (!$this->ahgasHanger->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->ahgasHanger->getValidationFailures());
				}
			}

			if ($this->ahgasDepartmentTeamRelatedByDepartmentId !== null) {
				if (!$this->ahgasDepartmentTeamRelatedByDepartmentId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->ahgasDepartmentTeamRelatedByDepartmentId->getValidationFailures());
				}
			}

			if ($this->ahgasDepartmentTeamRelatedByTeamId !== null) {
				if (!$this->ahgasDepartmentTeamRelatedByTeamId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->ahgasDepartmentTeamRelatedByTeamId->getValidationFailures());
				}
			}

			if ($this->ahgasTag !== null) {
				if (!$this->ahgasTag->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->ahgasTag->getValidationFailures());
				}
			}


			if (($retval = hgasHangerSlotPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collhgasTagRequests !== null) {
					foreach($this->collhgasTagRequests as $referrerFK) {
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
		$pos = hgasHangerSlotPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getHangerId();
				break;
			case 3:
				return $this->getRackId();
				break;
			case 4:
				return $this->getCellId();
				break;
			case 5:
				return $this->getDepartmentId();
				break;
			case 6:
				return $this->getTeamId();
				break;
			case 7:
				return $this->getTagId();
				break;
			case 8:
				return $this->getStatus();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasHangerSlotPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getHangerId(),
			$keys[3] => $this->getRackId(),
			$keys[4] => $this->getCellId(),
			$keys[5] => $this->getDepartmentId(),
			$keys[6] => $this->getTeamId(),
			$keys[7] => $this->getTagId(),
			$keys[8] => $this->getStatus(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasHangerSlotPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setHangerId($value);
				break;
			case 3:
				$this->setRackId($value);
				break;
			case 4:
				$this->setCellId($value);
				break;
			case 5:
				$this->setDepartmentId($value);
				break;
			case 6:
				$this->setTeamId($value);
				break;
			case 7:
				$this->setTagId($value);
				break;
			case 8:
				$this->setStatus($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasHangerSlotPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setHangerId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setRackId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCellId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDepartmentId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTeamId($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTagId($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setStatus($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(hgasHangerSlotPeer::DATABASE_NAME);

		if ($this->isColumnModified(hgasHangerSlotPeer::ID)) $criteria->add(hgasHangerSlotPeer::ID, $this->id);
		if ($this->isColumnModified(hgasHangerSlotPeer::NAME)) $criteria->add(hgasHangerSlotPeer::NAME, $this->name);
		if ($this->isColumnModified(hgasHangerSlotPeer::HANGER_ID)) $criteria->add(hgasHangerSlotPeer::HANGER_ID, $this->hanger_id);
		if ($this->isColumnModified(hgasHangerSlotPeer::RACK_ID)) $criteria->add(hgasHangerSlotPeer::RACK_ID, $this->rack_id);
		if ($this->isColumnModified(hgasHangerSlotPeer::CELL_ID)) $criteria->add(hgasHangerSlotPeer::CELL_ID, $this->cell_id);
		if ($this->isColumnModified(hgasHangerSlotPeer::DEPARTMENT_ID)) $criteria->add(hgasHangerSlotPeer::DEPARTMENT_ID, $this->department_id);
		if ($this->isColumnModified(hgasHangerSlotPeer::TEAM_ID)) $criteria->add(hgasHangerSlotPeer::TEAM_ID, $this->team_id);
		if ($this->isColumnModified(hgasHangerSlotPeer::TAG_ID)) $criteria->add(hgasHangerSlotPeer::TAG_ID, $this->tag_id);
		if ($this->isColumnModified(hgasHangerSlotPeer::STATUS)) $criteria->add(hgasHangerSlotPeer::STATUS, $this->status);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(hgasHangerSlotPeer::DATABASE_NAME);

		$criteria->add(hgasHangerSlotPeer::ID, $this->id);

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

		$copyObj->setHangerId($this->hanger_id);

		$copyObj->setRackId($this->rack_id);

		$copyObj->setCellId($this->cell_id);

		$copyObj->setDepartmentId($this->department_id);

		$copyObj->setTeamId($this->team_id);

		$copyObj->setTagId($this->tag_id);

		$copyObj->setStatus($this->status);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->gethgasTagRequests() as $relObj) {
				$copyObj->addhgasTagRequest($relObj->copy($deepCopy));
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
			self::$peer = new hgasHangerSlotPeer();
		}
		return self::$peer;
	}

	
	public function sethgasHanger($v)
	{


		if ($v === null) {
			$this->setHangerId('0');
		} else {
			$this->setHangerId($v->getId());
		}


		$this->ahgasHanger = $v;
	}


	
	public function gethgasHanger($con = null)
	{
		if ($this->ahgasHanger === null && ($this->hanger_id !== null)) {
						include_once 'lib/model/hgas/om/BasehgasHangerPeer.php';

			$this->ahgasHanger = hgasHangerPeer::retrieveByPK($this->hanger_id, $con);

			
		}
		return $this->ahgasHanger;
	}

	
	public function sethgasDepartmentTeamRelatedByDepartmentId($v)
	{


		if ($v === null) {
			$this->setDepartmentId('0');
		} else {
			$this->setDepartmentId($v->getDepartmentId());
		}


		$this->ahgasDepartmentTeamRelatedByDepartmentId = $v;
	}


	
	public function gethgasDepartmentTeamRelatedByDepartmentId($con = null)
	{
		if ($this->ahgasDepartmentTeamRelatedByDepartmentId === null && ($this->department_id !== null)) {
						include_once 'lib/model/hgas/om/BasehgasDepartmentTeamPeer.php';

			$this->ahgasDepartmentTeamRelatedByDepartmentId = hgasDepartmentTeamPeer::retrieveByPK($this->department_id, $con);

			
		}
		return $this->ahgasDepartmentTeamRelatedByDepartmentId;
	}

	
	public function sethgasDepartmentTeamRelatedByTeamId($v)
	{


		if ($v === null) {
			$this->setTeamId('0');
		} else {
			$this->setTeamId($v->getTeamId());
		}


		$this->ahgasDepartmentTeamRelatedByTeamId = $v;
	}


	
	public function gethgasDepartmentTeamRelatedByTeamId($con = null)
	{
		if ($this->ahgasDepartmentTeamRelatedByTeamId === null && ($this->team_id !== null)) {
						include_once 'lib/model/hgas/om/BasehgasDepartmentTeamPeer.php';

			$this->ahgasDepartmentTeamRelatedByTeamId = hgasDepartmentTeamPeer::retrieveByPK($this->team_id, $con);

			
		}
		return $this->ahgasDepartmentTeamRelatedByTeamId;
	}

	
	public function sethgasTag($v)
	{


		if ($v === null) {
			$this->setTagId(NULL);
		} else {
			$this->setTagId($v->getId());
		}


		$this->ahgasTag = $v;
	}


	
	public function gethgasTag($con = null)
	{
		if ($this->ahgasTag === null && (($this->tag_id !== "" && $this->tag_id !== null))) {
						include_once 'lib/model/hgas/om/BasehgasTagPeer.php';

			$this->ahgasTag = hgasTagPeer::retrieveByPK($this->tag_id, $con);

			
		}
		return $this->ahgasTag;
	}

	
	public function inithgasTagRequests()
	{
		if ($this->collhgasTagRequests === null) {
			$this->collhgasTagRequests = array();
		}
	}

	
	public function gethgasTagRequests($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasTagRequestPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasTagRequests === null) {
			if ($this->isNew()) {
			   $this->collhgasTagRequests = array();
			} else {

				$criteria->add(hgasTagRequestPeer::HANGER_SLOT_ID, $this->getId());

				hgasTagRequestPeer::addSelectColumns($criteria);
				$this->collhgasTagRequests = hgasTagRequestPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(hgasTagRequestPeer::HANGER_SLOT_ID, $this->getId());

				hgasTagRequestPeer::addSelectColumns($criteria);
				if (!isset($this->lasthgasTagRequestCriteria) || !$this->lasthgasTagRequestCriteria->equals($criteria)) {
					$this->collhgasTagRequests = hgasTagRequestPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lasthgasTagRequestCriteria = $criteria;
		return $this->collhgasTagRequests;
	}

	
	public function counthgasTagRequests($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasTagRequestPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(hgasTagRequestPeer::HANGER_SLOT_ID, $this->getId());

		return hgasTagRequestPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addhgasTagRequest(hgasTagRequest $l)
	{
		$this->collhgasTagRequests[] = $l;
		$l->sethgasHangerSlot($this);
	}


	
	public function gethgasTagRequestsJoinhgasTagRelatedByBeforeTagId($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasTagRequestPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasTagRequests === null) {
			if ($this->isNew()) {
				$this->collhgasTagRequests = array();
			} else {

				$criteria->add(hgasTagRequestPeer::HANGER_SLOT_ID, $this->getId());

				$this->collhgasTagRequests = hgasTagRequestPeer::doSelectJoinhgasTagRelatedByBeforeTagId($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasTagRequestPeer::HANGER_SLOT_ID, $this->getId());

			if (!isset($this->lasthgasTagRequestCriteria) || !$this->lasthgasTagRequestCriteria->equals($criteria)) {
				$this->collhgasTagRequests = hgasTagRequestPeer::doSelectJoinhgasTagRelatedByBeforeTagId($criteria, $con);
			}
		}
		$this->lasthgasTagRequestCriteria = $criteria;

		return $this->collhgasTagRequests;
	}


	
	public function gethgasTagRequestsJoinhgasTagRelatedByAfterTagId($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasTagRequestPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasTagRequests === null) {
			if ($this->isNew()) {
				$this->collhgasTagRequests = array();
			} else {

				$criteria->add(hgasTagRequestPeer::HANGER_SLOT_ID, $this->getId());

				$this->collhgasTagRequests = hgasTagRequestPeer::doSelectJoinhgasTagRelatedByAfterTagId($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasTagRequestPeer::HANGER_SLOT_ID, $this->getId());

			if (!isset($this->lasthgasTagRequestCriteria) || !$this->lasthgasTagRequestCriteria->equals($criteria)) {
				$this->collhgasTagRequests = hgasTagRequestPeer::doSelectJoinhgasTagRelatedByAfterTagId($criteria, $con);
			}
		}
		$this->lasthgasTagRequestCriteria = $criteria;

		return $this->collhgasTagRequests;
	}

} 
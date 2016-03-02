<?php


abstract class BasehgasHanger extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $rack_id;


	
	protected $cell_id;


	
	protected $name = 'null';


	
	protected $department_id;

	
	protected $ahgasRack;

	
	protected $collhgasHangerSlots;

	
	protected $lasthgasHangerSlotCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getRackId()
	{

		return $this->rack_id;
	}

	
	public function getCellId()
	{

		return $this->cell_id;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getDepartmentId()
	{

		return $this->department_id;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = hgasHangerPeer::ID;
		}

	} 
	
	public function setRackId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->rack_id !== $v) {
			$this->rack_id = $v;
			$this->modifiedColumns[] = hgasHangerPeer::RACK_ID;
		}

		if ($this->ahgasRack !== null && $this->ahgasRack->getId() !== $v) {
			$this->ahgasRack = null;
		}

	} 
	
	public function setCellId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cell_id !== $v) {
			$this->cell_id = $v;
			$this->modifiedColumns[] = hgasHangerPeer::CELL_ID;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = hgasHangerPeer::NAME;
		}

	} 
	
	public function setDepartmentId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->department_id !== $v) {
			$this->department_id = $v;
			$this->modifiedColumns[] = hgasHangerPeer::DEPARTMENT_ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->rack_id = $rs->getInt($startcol + 1);

			$this->cell_id = $rs->getInt($startcol + 2);

			$this->name = $rs->getString($startcol + 3);

			$this->department_id = $rs->getInt($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating hgasHanger object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(hgasHangerPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			hgasHangerPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(hgasHangerPeer::DATABASE_NAME);
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


												
			if ($this->ahgasRack !== null) {
				if ($this->ahgasRack->isModified()) {
					$affectedRows += $this->ahgasRack->save($con);
				}
				$this->sethgasRack($this->ahgasRack);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = hgasHangerPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += hgasHangerPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collhgasHangerSlots !== null) {
				foreach($this->collhgasHangerSlots as $referrerFK) {
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


												
			if ($this->ahgasRack !== null) {
				if (!$this->ahgasRack->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->ahgasRack->getValidationFailures());
				}
			}


			if (($retval = hgasHangerPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collhgasHangerSlots !== null) {
					foreach($this->collhgasHangerSlots as $referrerFK) {
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
		$pos = hgasHangerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getRackId();
				break;
			case 2:
				return $this->getCellId();
				break;
			case 3:
				return $this->getName();
				break;
			case 4:
				return $this->getDepartmentId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasHangerPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getRackId(),
			$keys[2] => $this->getCellId(),
			$keys[3] => $this->getName(),
			$keys[4] => $this->getDepartmentId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasHangerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setRackId($value);
				break;
			case 2:
				$this->setCellId($value);
				break;
			case 3:
				$this->setName($value);
				break;
			case 4:
				$this->setDepartmentId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasHangerPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRackId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCellId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDepartmentId($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(hgasHangerPeer::DATABASE_NAME);

		if ($this->isColumnModified(hgasHangerPeer::ID)) $criteria->add(hgasHangerPeer::ID, $this->id);
		if ($this->isColumnModified(hgasHangerPeer::RACK_ID)) $criteria->add(hgasHangerPeer::RACK_ID, $this->rack_id);
		if ($this->isColumnModified(hgasHangerPeer::CELL_ID)) $criteria->add(hgasHangerPeer::CELL_ID, $this->cell_id);
		if ($this->isColumnModified(hgasHangerPeer::NAME)) $criteria->add(hgasHangerPeer::NAME, $this->name);
		if ($this->isColumnModified(hgasHangerPeer::DEPARTMENT_ID)) $criteria->add(hgasHangerPeer::DEPARTMENT_ID, $this->department_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(hgasHangerPeer::DATABASE_NAME);

		$criteria->add(hgasHangerPeer::ID, $this->id);

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

		$copyObj->setRackId($this->rack_id);

		$copyObj->setCellId($this->cell_id);

		$copyObj->setName($this->name);

		$copyObj->setDepartmentId($this->department_id);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->gethgasHangerSlots() as $relObj) {
				$copyObj->addhgasHangerSlot($relObj->copy($deepCopy));
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
			self::$peer = new hgasHangerPeer();
		}
		return self::$peer;
	}

	
	public function sethgasRack($v)
	{


		if ($v === null) {
			$this->setRackId(NULL);
		} else {
			$this->setRackId($v->getId());
		}


		$this->ahgasRack = $v;
	}


	
	public function gethgasRack($con = null)
	{
		if ($this->ahgasRack === null && ($this->rack_id !== null)) {
						include_once 'lib/model/hgas/om/BasehgasRackPeer.php';

			$this->ahgasRack = hgasRackPeer::retrieveByPK($this->rack_id, $con);

			
		}
		return $this->ahgasRack;
	}

	
	public function inithgasHangerSlots()
	{
		if ($this->collhgasHangerSlots === null) {
			$this->collhgasHangerSlots = array();
		}
	}

	
	public function gethgasHangerSlots($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlots === null) {
			if ($this->isNew()) {
			   $this->collhgasHangerSlots = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::HANGER_ID, $this->getId());

				hgasHangerSlotPeer::addSelectColumns($criteria);
				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(hgasHangerSlotPeer::HANGER_ID, $this->getId());

				hgasHangerSlotPeer::addSelectColumns($criteria);
				if (!isset($this->lasthgasHangerSlotCriteria) || !$this->lasthgasHangerSlotCriteria->equals($criteria)) {
					$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lasthgasHangerSlotCriteria = $criteria;
		return $this->collhgasHangerSlots;
	}

	
	public function counthgasHangerSlots($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(hgasHangerSlotPeer::HANGER_ID, $this->getId());

		return hgasHangerSlotPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addhgasHangerSlot(hgasHangerSlot $l)
	{
		$this->collhgasHangerSlots[] = $l;
		$l->sethgasHanger($this);
	}


	
	public function gethgasHangerSlotsJoinhgasDepartmentTeamRelatedByDepartmentId($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlots === null) {
			if ($this->isNew()) {
				$this->collhgasHangerSlots = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::HANGER_ID, $this->getId());

				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelectJoinhgasDepartmentTeamRelatedByDepartmentId($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasHangerSlotPeer::HANGER_ID, $this->getId());

			if (!isset($this->lasthgasHangerSlotCriteria) || !$this->lasthgasHangerSlotCriteria->equals($criteria)) {
				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelectJoinhgasDepartmentTeamRelatedByDepartmentId($criteria, $con);
			}
		}
		$this->lasthgasHangerSlotCriteria = $criteria;

		return $this->collhgasHangerSlots;
	}


	
	public function gethgasHangerSlotsJoinhgasDepartmentTeamRelatedByTeamId($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlots === null) {
			if ($this->isNew()) {
				$this->collhgasHangerSlots = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::HANGER_ID, $this->getId());

				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelectJoinhgasDepartmentTeamRelatedByTeamId($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasHangerSlotPeer::HANGER_ID, $this->getId());

			if (!isset($this->lasthgasHangerSlotCriteria) || !$this->lasthgasHangerSlotCriteria->equals($criteria)) {
				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelectJoinhgasDepartmentTeamRelatedByTeamId($criteria, $con);
			}
		}
		$this->lasthgasHangerSlotCriteria = $criteria;

		return $this->collhgasHangerSlots;
	}


	
	public function gethgasHangerSlotsJoinhgasTag($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlots === null) {
			if ($this->isNew()) {
				$this->collhgasHangerSlots = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::HANGER_ID, $this->getId());

				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelectJoinhgasTag($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasHangerSlotPeer::HANGER_ID, $this->getId());

			if (!isset($this->lasthgasHangerSlotCriteria) || !$this->lasthgasHangerSlotCriteria->equals($criteria)) {
				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelectJoinhgasTag($criteria, $con);
			}
		}
		$this->lasthgasHangerSlotCriteria = $criteria;

		return $this->collhgasHangerSlots;
	}

} 
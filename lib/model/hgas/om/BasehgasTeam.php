<?php


abstract class BasehgasTeam extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name = 'null';

	
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

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = hgasTeamPeer::ID;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = hgasTeamPeer::NAME;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 2; 
		} catch (Exception $e) {
			throw new PropelException("Error populating hgasTeam object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(hgasTeamPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			hgasTeamPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(hgasTeamPeer::DATABASE_NAME);
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
					$pk = hgasTeamPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += hgasTeamPeer::doUpdate($this, $con);
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


			if (($retval = hgasTeamPeer::doValidate($this, $columns)) !== true) {
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
		$pos = hgasTeamPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasTeamPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasTeamPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasTeamPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(hgasTeamPeer::DATABASE_NAME);

		if ($this->isColumnModified(hgasTeamPeer::ID)) $criteria->add(hgasTeamPeer::ID, $this->id);
		if ($this->isColumnModified(hgasTeamPeer::NAME)) $criteria->add(hgasTeamPeer::NAME, $this->name);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(hgasTeamPeer::DATABASE_NAME);

		$criteria->add(hgasTeamPeer::ID, $this->id);

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
			self::$peer = new hgasTeamPeer();
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

				$criteria->add(hgasDepartmentTeamPeer::TEAM_ID, $this->getId());

				hgasDepartmentTeamPeer::addSelectColumns($criteria);
				$this->collhgasDepartmentTeams = hgasDepartmentTeamPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(hgasDepartmentTeamPeer::TEAM_ID, $this->getId());

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

		$criteria->add(hgasDepartmentTeamPeer::TEAM_ID, $this->getId());

		return hgasDepartmentTeamPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addhgasDepartmentTeam(hgasDepartmentTeam $l)
	{
		$this->collhgasDepartmentTeams[] = $l;
		$l->sethgasTeam($this);
	}


	
	public function gethgasDepartmentTeamsJoinhgasDepartment($criteria = null, $con = null)
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

				$criteria->add(hgasDepartmentTeamPeer::TEAM_ID, $this->getId());

				$this->collhgasDepartmentTeams = hgasDepartmentTeamPeer::doSelectJoinhgasDepartment($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasDepartmentTeamPeer::TEAM_ID, $this->getId());

			if (!isset($this->lasthgasDepartmentTeamCriteria) || !$this->lasthgasDepartmentTeamCriteria->equals($criteria)) {
				$this->collhgasDepartmentTeams = hgasDepartmentTeamPeer::doSelectJoinhgasDepartment($criteria, $con);
			}
		}
		$this->lasthgasDepartmentTeamCriteria = $criteria;

		return $this->collhgasDepartmentTeams;
	}

} 
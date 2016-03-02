<?php


abstract class BasehgasUserToDepartmentTeam extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id = '0';


	
	protected $role = 'null';


	
	protected $department_id;


	
	protected $team_id;

	
	protected $ahgasDepartmentTeamRelatedByDepartmentId;

	
	protected $ahgasDepartmentTeamRelatedByTeamId;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getUserId()
	{

		return $this->user_id;
	}

	
	public function getRole()
	{

		return $this->role;
	}

	
	public function getDepartmentId()
	{

		return $this->department_id;
	}

	
	public function getTeamId()
	{

		return $this->team_id;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = hgasUserToDepartmentTeamPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->user_id !== $v || $v === '0') {
			$this->user_id = $v;
			$this->modifiedColumns[] = hgasUserToDepartmentTeamPeer::USER_ID;
		}

	} 
	
	public function setRole($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->role !== $v || $v === 'null') {
			$this->role = $v;
			$this->modifiedColumns[] = hgasUserToDepartmentTeamPeer::ROLE;
		}

	} 
	
	public function setDepartmentId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->department_id !== $v) {
			$this->department_id = $v;
			$this->modifiedColumns[] = hgasUserToDepartmentTeamPeer::DEPARTMENT_ID;
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

		if ($this->team_id !== $v) {
			$this->team_id = $v;
			$this->modifiedColumns[] = hgasUserToDepartmentTeamPeer::TEAM_ID;
		}

		if ($this->ahgasDepartmentTeamRelatedByTeamId !== null && $this->ahgasDepartmentTeamRelatedByTeamId->getTeamId() !== $v) {
			$this->ahgasDepartmentTeamRelatedByTeamId = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->user_id = $rs->getString($startcol + 1);

			$this->role = $rs->getString($startcol + 2);

			$this->department_id = $rs->getInt($startcol + 3);

			$this->team_id = $rs->getInt($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating hgasUserToDepartmentTeam object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(hgasUserToDepartmentTeamPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			hgasUserToDepartmentTeamPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(hgasUserToDepartmentTeamPeer::DATABASE_NAME);
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


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = hgasUserToDepartmentTeamPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += hgasUserToDepartmentTeamPeer::doUpdate($this, $con);
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


			if (($retval = hgasUserToDepartmentTeamPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasUserToDepartmentTeamPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUserId();
				break;
			case 2:
				return $this->getRole();
				break;
			case 3:
				return $this->getDepartmentId();
				break;
			case 4:
				return $this->getTeamId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasUserToDepartmentTeamPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getRole(),
			$keys[3] => $this->getDepartmentId(),
			$keys[4] => $this->getTeamId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasUserToDepartmentTeamPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUserId($value);
				break;
			case 2:
				$this->setRole($value);
				break;
			case 3:
				$this->setDepartmentId($value);
				break;
			case 4:
				$this->setTeamId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasUserToDepartmentTeamPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setRole($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDepartmentId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTeamId($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(hgasUserToDepartmentTeamPeer::DATABASE_NAME);

		if ($this->isColumnModified(hgasUserToDepartmentTeamPeer::ID)) $criteria->add(hgasUserToDepartmentTeamPeer::ID, $this->id);
		if ($this->isColumnModified(hgasUserToDepartmentTeamPeer::USER_ID)) $criteria->add(hgasUserToDepartmentTeamPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(hgasUserToDepartmentTeamPeer::ROLE)) $criteria->add(hgasUserToDepartmentTeamPeer::ROLE, $this->role);
		if ($this->isColumnModified(hgasUserToDepartmentTeamPeer::DEPARTMENT_ID)) $criteria->add(hgasUserToDepartmentTeamPeer::DEPARTMENT_ID, $this->department_id);
		if ($this->isColumnModified(hgasUserToDepartmentTeamPeer::TEAM_ID)) $criteria->add(hgasUserToDepartmentTeamPeer::TEAM_ID, $this->team_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(hgasUserToDepartmentTeamPeer::DATABASE_NAME);

		$criteria->add(hgasUserToDepartmentTeamPeer::ID, $this->id);

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

		$copyObj->setUserId($this->user_id);

		$copyObj->setRole($this->role);

		$copyObj->setDepartmentId($this->department_id);

		$copyObj->setTeamId($this->team_id);


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
			self::$peer = new hgasUserToDepartmentTeamPeer();
		}
		return self::$peer;
	}

	
	public function sethgasDepartmentTeamRelatedByDepartmentId($v)
	{


		if ($v === null) {
			$this->setDepartmentId(NULL);
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
			$this->setTeamId(NULL);
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

} 
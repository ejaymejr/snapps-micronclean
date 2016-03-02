<?php


abstract class BaseHrDepartment extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $dept_code = 'null';


	
	protected $dept_name = 'null';


	
	protected $comp_code;


	
	protected $dept_head;


	
	protected $building;


	
	protected $tel_no;


	
	protected $created_by;


	
	protected $date_created;


	
	protected $modified_by;


	
	protected $date_modified;

	
	protected $collTkDtrmasters;

	
	protected $lastTkDtrmasterCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getDeptCode()
	{

		return $this->dept_code;
	}

	
	public function getDeptName()
	{

		return $this->dept_name;
	}

	
	public function getCompCode()
	{

		return $this->comp_code;
	}

	
	public function getDeptHead()
	{

		return $this->dept_head;
	}

	
	public function getBuilding()
	{

		return $this->building;
	}

	
	public function getTelNo()
	{

		return $this->tel_no;
	}

	
	public function getCreatedBy()
	{

		return $this->created_by;
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

	
	public function getModifiedBy()
	{

		return $this->modified_by;
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

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = HrDepartmentPeer::ID;
		}

	} 
	
	public function setDeptCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dept_code !== $v || $v === 'null') {
			$this->dept_code = $v;
			$this->modifiedColumns[] = HrDepartmentPeer::DEPT_CODE;
		}

	} 
	
	public function setDeptName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dept_name !== $v || $v === 'null') {
			$this->dept_name = $v;
			$this->modifiedColumns[] = HrDepartmentPeer::DEPT_NAME;
		}

	} 
	
	public function setCompCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->comp_code !== $v) {
			$this->comp_code = $v;
			$this->modifiedColumns[] = HrDepartmentPeer::COMP_CODE;
		}

	} 
	
	public function setDeptHead($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dept_head !== $v) {
			$this->dept_head = $v;
			$this->modifiedColumns[] = HrDepartmentPeer::DEPT_HEAD;
		}

	} 
	
	public function setBuilding($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->building !== $v) {
			$this->building = $v;
			$this->modifiedColumns[] = HrDepartmentPeer::BUILDING;
		}

	} 
	
	public function setTelNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tel_no !== $v) {
			$this->tel_no = $v;
			$this->modifiedColumns[] = HrDepartmentPeer::TEL_NO;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrDepartmentPeer::CREATED_BY;
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
			$this->modifiedColumns[] = HrDepartmentPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrDepartmentPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HrDepartmentPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->dept_code = $rs->getString($startcol + 1);

			$this->dept_name = $rs->getString($startcol + 2);

			$this->comp_code = $rs->getString($startcol + 3);

			$this->dept_head = $rs->getString($startcol + 4);

			$this->building = $rs->getString($startcol + 5);

			$this->tel_no = $rs->getString($startcol + 6);

			$this->created_by = $rs->getString($startcol + 7);

			$this->date_created = $rs->getTimestamp($startcol + 8, null);

			$this->modified_by = $rs->getString($startcol + 9);

			$this->date_modified = $rs->getTimestamp($startcol + 10, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrDepartment object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrDepartmentPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrDepartmentPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrDepartmentPeer::DATABASE_NAME);
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
					$pk = HrDepartmentPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrDepartmentPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collTkDtrmasters !== null) {
				foreach($this->collTkDtrmasters as $referrerFK) {
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


			if (($retval = HrDepartmentPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTkDtrmasters !== null) {
					foreach($this->collTkDtrmasters as $referrerFK) {
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
		$pos = HrDepartmentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getDeptCode();
				break;
			case 2:
				return $this->getDeptName();
				break;
			case 3:
				return $this->getCompCode();
				break;
			case 4:
				return $this->getDeptHead();
				break;
			case 5:
				return $this->getBuilding();
				break;
			case 6:
				return $this->getTelNo();
				break;
			case 7:
				return $this->getCreatedBy();
				break;
			case 8:
				return $this->getDateCreated();
				break;
			case 9:
				return $this->getModifiedBy();
				break;
			case 10:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrDepartmentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDeptCode(),
			$keys[2] => $this->getDeptName(),
			$keys[3] => $this->getCompCode(),
			$keys[4] => $this->getDeptHead(),
			$keys[5] => $this->getBuilding(),
			$keys[6] => $this->getTelNo(),
			$keys[7] => $this->getCreatedBy(),
			$keys[8] => $this->getDateCreated(),
			$keys[9] => $this->getModifiedBy(),
			$keys[10] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrDepartmentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setDeptCode($value);
				break;
			case 2:
				$this->setDeptName($value);
				break;
			case 3:
				$this->setCompCode($value);
				break;
			case 4:
				$this->setDeptHead($value);
				break;
			case 5:
				$this->setBuilding($value);
				break;
			case 6:
				$this->setTelNo($value);
				break;
			case 7:
				$this->setCreatedBy($value);
				break;
			case 8:
				$this->setDateCreated($value);
				break;
			case 9:
				$this->setModifiedBy($value);
				break;
			case 10:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrDepartmentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDeptCode($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDeptName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCompCode($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDeptHead($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setBuilding($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTelNo($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedBy($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateCreated($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setModifiedBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateModified($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrDepartmentPeer::DATABASE_NAME);

		if ($this->isColumnModified(HrDepartmentPeer::ID)) $criteria->add(HrDepartmentPeer::ID, $this->id);
		if ($this->isColumnModified(HrDepartmentPeer::DEPT_CODE)) $criteria->add(HrDepartmentPeer::DEPT_CODE, $this->dept_code);
		if ($this->isColumnModified(HrDepartmentPeer::DEPT_NAME)) $criteria->add(HrDepartmentPeer::DEPT_NAME, $this->dept_name);
		if ($this->isColumnModified(HrDepartmentPeer::COMP_CODE)) $criteria->add(HrDepartmentPeer::COMP_CODE, $this->comp_code);
		if ($this->isColumnModified(HrDepartmentPeer::DEPT_HEAD)) $criteria->add(HrDepartmentPeer::DEPT_HEAD, $this->dept_head);
		if ($this->isColumnModified(HrDepartmentPeer::BUILDING)) $criteria->add(HrDepartmentPeer::BUILDING, $this->building);
		if ($this->isColumnModified(HrDepartmentPeer::TEL_NO)) $criteria->add(HrDepartmentPeer::TEL_NO, $this->tel_no);
		if ($this->isColumnModified(HrDepartmentPeer::CREATED_BY)) $criteria->add(HrDepartmentPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrDepartmentPeer::DATE_CREATED)) $criteria->add(HrDepartmentPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrDepartmentPeer::MODIFIED_BY)) $criteria->add(HrDepartmentPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrDepartmentPeer::DATE_MODIFIED)) $criteria->add(HrDepartmentPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrDepartmentPeer::DATABASE_NAME);

		$criteria->add(HrDepartmentPeer::ID, $this->id);

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

		$copyObj->setDeptCode($this->dept_code);

		$copyObj->setDeptName($this->dept_name);

		$copyObj->setCompCode($this->comp_code);

		$copyObj->setDeptHead($this->dept_head);

		$copyObj->setBuilding($this->building);

		$copyObj->setTelNo($this->tel_no);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateModified($this->date_modified);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getTkDtrmasters() as $relObj) {
				$copyObj->addTkDtrmaster($relObj->copy($deepCopy));
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
			self::$peer = new HrDepartmentPeer();
		}
		return self::$peer;
	}

	
	public function initTkDtrmasters()
	{
		if ($this->collTkDtrmasters === null) {
			$this->collTkDtrmasters = array();
		}
	}

	
	public function getTkDtrmasters($criteria = null, $con = null)
	{
				include_once 'lib/model/hr/om/BaseTkDtrmasterPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTkDtrmasters === null) {
			if ($this->isNew()) {
			   $this->collTkDtrmasters = array();
			} else {

				$criteria->add(TkDtrmasterPeer::HR_DEPARTMENT_ID, $this->getId());

				TkDtrmasterPeer::addSelectColumns($criteria);
				$this->collTkDtrmasters = TkDtrmasterPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TkDtrmasterPeer::HR_DEPARTMENT_ID, $this->getId());

				TkDtrmasterPeer::addSelectColumns($criteria);
				if (!isset($this->lastTkDtrmasterCriteria) || !$this->lastTkDtrmasterCriteria->equals($criteria)) {
					$this->collTkDtrmasters = TkDtrmasterPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTkDtrmasterCriteria = $criteria;
		return $this->collTkDtrmasters;
	}

	
	public function countTkDtrmasters($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/hr/om/BaseTkDtrmasterPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TkDtrmasterPeer::HR_DEPARTMENT_ID, $this->getId());

		return TkDtrmasterPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTkDtrmaster(TkDtrmaster $l)
	{
		$this->collTkDtrmasters[] = $l;
		$l->setHrDepartment($this);
	}


	
	public function getTkDtrmastersJoinHrCompany($criteria = null, $con = null)
	{
				include_once 'lib/model/hr/om/BaseTkDtrmasterPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTkDtrmasters === null) {
			if ($this->isNew()) {
				$this->collTkDtrmasters = array();
			} else {

				$criteria->add(TkDtrmasterPeer::HR_DEPARTMENT_ID, $this->getId());

				$this->collTkDtrmasters = TkDtrmasterPeer::doSelectJoinHrCompany($criteria, $con);
			}
		} else {
									
			$criteria->add(TkDtrmasterPeer::HR_DEPARTMENT_ID, $this->getId());

			if (!isset($this->lastTkDtrmasterCriteria) || !$this->lastTkDtrmasterCriteria->equals($criteria)) {
				$this->collTkDtrmasters = TkDtrmasterPeer::doSelectJoinHrCompany($criteria, $con);
			}
		}
		$this->lastTkDtrmasterCriteria = $criteria;

		return $this->collTkDtrmasters;
	}

} 
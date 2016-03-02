<?php


abstract class BaseHrCompany extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $comp_code = 'null';


	
	protected $comp_name = 'null';


	
	protected $comp_address;


	
	protected $comp_header;


	
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

	
	public function getCompCode()
	{

		return $this->comp_code;
	}

	
	public function getCompName()
	{

		return $this->comp_name;
	}

	
	public function getCompAddress()
	{

		return $this->comp_address;
	}

	
	public function getCompHeader()
	{

		return $this->comp_header;
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
			$this->modifiedColumns[] = HrCompanyPeer::ID;
		}

	} 
	
	public function setCompCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->comp_code !== $v || $v === 'null') {
			$this->comp_code = $v;
			$this->modifiedColumns[] = HrCompanyPeer::COMP_CODE;
		}

	} 
	
	public function setCompName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->comp_name !== $v || $v === 'null') {
			$this->comp_name = $v;
			$this->modifiedColumns[] = HrCompanyPeer::COMP_NAME;
		}

	} 
	
	public function setCompAddress($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->comp_address !== $v) {
			$this->comp_address = $v;
			$this->modifiedColumns[] = HrCompanyPeer::COMP_ADDRESS;
		}

	} 
	
	public function setCompHeader($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->comp_header !== $v) {
			$this->comp_header = $v;
			$this->modifiedColumns[] = HrCompanyPeer::COMP_HEADER;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrCompanyPeer::CREATED_BY;
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
			$this->modifiedColumns[] = HrCompanyPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrCompanyPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HrCompanyPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->comp_code = $rs->getString($startcol + 1);

			$this->comp_name = $rs->getString($startcol + 2);

			$this->comp_address = $rs->getString($startcol + 3);

			$this->comp_header = $rs->getString($startcol + 4);

			$this->created_by = $rs->getString($startcol + 5);

			$this->date_created = $rs->getTimestamp($startcol + 6, null);

			$this->modified_by = $rs->getString($startcol + 7);

			$this->date_modified = $rs->getTimestamp($startcol + 8, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrCompany object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrCompanyPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrCompanyPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrCompanyPeer::DATABASE_NAME);
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
					$pk = HrCompanyPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrCompanyPeer::doUpdate($this, $con);
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


			if (($retval = HrCompanyPeer::doValidate($this, $columns)) !== true) {
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
		$pos = HrCompanyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCompCode();
				break;
			case 2:
				return $this->getCompName();
				break;
			case 3:
				return $this->getCompAddress();
				break;
			case 4:
				return $this->getCompHeader();
				break;
			case 5:
				return $this->getCreatedBy();
				break;
			case 6:
				return $this->getDateCreated();
				break;
			case 7:
				return $this->getModifiedBy();
				break;
			case 8:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrCompanyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCompCode(),
			$keys[2] => $this->getCompName(),
			$keys[3] => $this->getCompAddress(),
			$keys[4] => $this->getCompHeader(),
			$keys[5] => $this->getCreatedBy(),
			$keys[6] => $this->getDateCreated(),
			$keys[7] => $this->getModifiedBy(),
			$keys[8] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrCompanyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCompCode($value);
				break;
			case 2:
				$this->setCompName($value);
				break;
			case 3:
				$this->setCompAddress($value);
				break;
			case 4:
				$this->setCompHeader($value);
				break;
			case 5:
				$this->setCreatedBy($value);
				break;
			case 6:
				$this->setDateCreated($value);
				break;
			case 7:
				$this->setModifiedBy($value);
				break;
			case 8:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrCompanyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCompCode($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCompName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCompAddress($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCompHeader($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedBy($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateCreated($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setModifiedBy($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateModified($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrCompanyPeer::DATABASE_NAME);

		if ($this->isColumnModified(HrCompanyPeer::ID)) $criteria->add(HrCompanyPeer::ID, $this->id);
		if ($this->isColumnModified(HrCompanyPeer::COMP_CODE)) $criteria->add(HrCompanyPeer::COMP_CODE, $this->comp_code);
		if ($this->isColumnModified(HrCompanyPeer::COMP_NAME)) $criteria->add(HrCompanyPeer::COMP_NAME, $this->comp_name);
		if ($this->isColumnModified(HrCompanyPeer::COMP_ADDRESS)) $criteria->add(HrCompanyPeer::COMP_ADDRESS, $this->comp_address);
		if ($this->isColumnModified(HrCompanyPeer::COMP_HEADER)) $criteria->add(HrCompanyPeer::COMP_HEADER, $this->comp_header);
		if ($this->isColumnModified(HrCompanyPeer::CREATED_BY)) $criteria->add(HrCompanyPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrCompanyPeer::DATE_CREATED)) $criteria->add(HrCompanyPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrCompanyPeer::MODIFIED_BY)) $criteria->add(HrCompanyPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrCompanyPeer::DATE_MODIFIED)) $criteria->add(HrCompanyPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrCompanyPeer::DATABASE_NAME);

		$criteria->add(HrCompanyPeer::ID, $this->id);

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

		$copyObj->setCompCode($this->comp_code);

		$copyObj->setCompName($this->comp_name);

		$copyObj->setCompAddress($this->comp_address);

		$copyObj->setCompHeader($this->comp_header);

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
			self::$peer = new HrCompanyPeer();
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

				$criteria->add(TkDtrmasterPeer::HR_COMPANY_ID, $this->getId());

				TkDtrmasterPeer::addSelectColumns($criteria);
				$this->collTkDtrmasters = TkDtrmasterPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TkDtrmasterPeer::HR_COMPANY_ID, $this->getId());

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

		$criteria->add(TkDtrmasterPeer::HR_COMPANY_ID, $this->getId());

		return TkDtrmasterPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTkDtrmaster(TkDtrmaster $l)
	{
		$this->collTkDtrmasters[] = $l;
		$l->setHrCompany($this);
	}


	
	public function getTkDtrmastersJoinHrDepartment($criteria = null, $con = null)
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

				$criteria->add(TkDtrmasterPeer::HR_COMPANY_ID, $this->getId());

				$this->collTkDtrmasters = TkDtrmasterPeer::doSelectJoinHrDepartment($criteria, $con);
			}
		} else {
									
			$criteria->add(TkDtrmasterPeer::HR_COMPANY_ID, $this->getId());

			if (!isset($this->lastTkDtrmasterCriteria) || !$this->lastTkDtrmasterCriteria->equals($criteria)) {
				$this->collTkDtrmasters = TkDtrmasterPeer::doSelectJoinHrDepartment($criteria, $con);
			}
		}
		$this->lastTkDtrmasterCriteria = $criteria;

		return $this->collTkDtrmasters;
	}

} 
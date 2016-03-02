<?php


abstract class BaseTkDtrmaster extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $employee_no = 'null';


	
	protected $company;


	
	protected $name;


	
	protected $am_time_in;


	
	protected $pm_time_out;


	
	protected $type_of_employment;


	
	protected $department;


	
	protected $tk_worktemplate_no = 'null';


	
	protected $hr_company_id;


	
	protected $hr_department_id;


	
	protected $created_by;


	
	protected $date_created;


	
	protected $modified_by;


	
	protected $date_modified;

	
	protected $aHrCompany;

	
	protected $aHrDepartment;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getEmployeeNo()
	{

		return $this->employee_no;
	}

	
	public function getCompany()
	{

		return $this->company;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getAmTimeIn()
	{

		return $this->am_time_in;
	}

	
	public function getPmTimeOut()
	{

		return $this->pm_time_out;
	}

	
	public function getTypeOfEmployment()
	{

		return $this->type_of_employment;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getTkWorktemplateNo()
	{

		return $this->tk_worktemplate_no;
	}

	
	public function getHrCompanyId()
	{

		return $this->hr_company_id;
	}

	
	public function getHrDepartmentId()
	{

		return $this->hr_department_id;
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
			$this->modifiedColumns[] = TkDtrmasterPeer::ID;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v || $v === 'null') {
			$this->employee_no = $v;
			$this->modifiedColumns[] = TkDtrmasterPeer::EMPLOYEE_NO;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v) {
			$this->company = $v;
			$this->modifiedColumns[] = TkDtrmasterPeer::COMPANY;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = TkDtrmasterPeer::NAME;
		}

	} 
	
	public function setAmTimeIn($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->am_time_in !== $v) {
			$this->am_time_in = $v;
			$this->modifiedColumns[] = TkDtrmasterPeer::AM_TIME_IN;
		}

	} 
	
	public function setPmTimeOut($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->pm_time_out !== $v) {
			$this->pm_time_out = $v;
			$this->modifiedColumns[] = TkDtrmasterPeer::PM_TIME_OUT;
		}

	} 
	
	public function setTypeOfEmployment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_of_employment !== $v) {
			$this->type_of_employment = $v;
			$this->modifiedColumns[] = TkDtrmasterPeer::TYPE_OF_EMPLOYMENT;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v) {
			$this->department = $v;
			$this->modifiedColumns[] = TkDtrmasterPeer::DEPARTMENT;
		}

	} 
	
	public function setTkWorktemplateNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tk_worktemplate_no !== $v || $v === 'null') {
			$this->tk_worktemplate_no = $v;
			$this->modifiedColumns[] = TkDtrmasterPeer::TK_WORKTEMPLATE_NO;
		}

	} 
	
	public function setHrCompanyId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hr_company_id !== $v) {
			$this->hr_company_id = $v;
			$this->modifiedColumns[] = TkDtrmasterPeer::HR_COMPANY_ID;
		}

		if ($this->aHrCompany !== null && $this->aHrCompany->getId() !== $v) {
			$this->aHrCompany = null;
		}

	} 
	
	public function setHrDepartmentId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hr_department_id !== $v) {
			$this->hr_department_id = $v;
			$this->modifiedColumns[] = TkDtrmasterPeer::HR_DEPARTMENT_ID;
		}

		if ($this->aHrDepartment !== null && $this->aHrDepartment->getId() !== $v) {
			$this->aHrDepartment = null;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = TkDtrmasterPeer::CREATED_BY;
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
			$this->modifiedColumns[] = TkDtrmasterPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = TkDtrmasterPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = TkDtrmasterPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->employee_no = $rs->getString($startcol + 1);

			$this->company = $rs->getString($startcol + 2);

			$this->name = $rs->getString($startcol + 3);

			$this->am_time_in = $rs->getString($startcol + 4);

			$this->pm_time_out = $rs->getString($startcol + 5);

			$this->type_of_employment = $rs->getString($startcol + 6);

			$this->department = $rs->getString($startcol + 7);

			$this->tk_worktemplate_no = $rs->getString($startcol + 8);

			$this->hr_company_id = $rs->getString($startcol + 9);

			$this->hr_department_id = $rs->getString($startcol + 10);

			$this->created_by = $rs->getString($startcol + 11);

			$this->date_created = $rs->getTimestamp($startcol + 12, null);

			$this->modified_by = $rs->getString($startcol + 13);

			$this->date_modified = $rs->getTimestamp($startcol + 14, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 15; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TkDtrmaster object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TkDtrmasterPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TkDtrmasterPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TkDtrmasterPeer::DATABASE_NAME);
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


												
			if ($this->aHrCompany !== null) {
				if ($this->aHrCompany->isModified()) {
					$affectedRows += $this->aHrCompany->save($con);
				}
				$this->setHrCompany($this->aHrCompany);
			}

			if ($this->aHrDepartment !== null) {
				if ($this->aHrDepartment->isModified()) {
					$affectedRows += $this->aHrDepartment->save($con);
				}
				$this->setHrDepartment($this->aHrDepartment);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TkDtrmasterPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TkDtrmasterPeer::doUpdate($this, $con);
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


												
			if ($this->aHrCompany !== null) {
				if (!$this->aHrCompany->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aHrCompany->getValidationFailures());
				}
			}

			if ($this->aHrDepartment !== null) {
				if (!$this->aHrDepartment->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aHrDepartment->getValidationFailures());
				}
			}


			if (($retval = TkDtrmasterPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TkDtrmasterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getEmployeeNo();
				break;
			case 2:
				return $this->getCompany();
				break;
			case 3:
				return $this->getName();
				break;
			case 4:
				return $this->getAmTimeIn();
				break;
			case 5:
				return $this->getPmTimeOut();
				break;
			case 6:
				return $this->getTypeOfEmployment();
				break;
			case 7:
				return $this->getDepartment();
				break;
			case 8:
				return $this->getTkWorktemplateNo();
				break;
			case 9:
				return $this->getHrCompanyId();
				break;
			case 10:
				return $this->getHrDepartmentId();
				break;
			case 11:
				return $this->getCreatedBy();
				break;
			case 12:
				return $this->getDateCreated();
				break;
			case 13:
				return $this->getModifiedBy();
				break;
			case 14:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TkDtrmasterPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEmployeeNo(),
			$keys[2] => $this->getCompany(),
			$keys[3] => $this->getName(),
			$keys[4] => $this->getAmTimeIn(),
			$keys[5] => $this->getPmTimeOut(),
			$keys[6] => $this->getTypeOfEmployment(),
			$keys[7] => $this->getDepartment(),
			$keys[8] => $this->getTkWorktemplateNo(),
			$keys[9] => $this->getHrCompanyId(),
			$keys[10] => $this->getHrDepartmentId(),
			$keys[11] => $this->getCreatedBy(),
			$keys[12] => $this->getDateCreated(),
			$keys[13] => $this->getModifiedBy(),
			$keys[14] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TkDtrmasterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setEmployeeNo($value);
				break;
			case 2:
				$this->setCompany($value);
				break;
			case 3:
				$this->setName($value);
				break;
			case 4:
				$this->setAmTimeIn($value);
				break;
			case 5:
				$this->setPmTimeOut($value);
				break;
			case 6:
				$this->setTypeOfEmployment($value);
				break;
			case 7:
				$this->setDepartment($value);
				break;
			case 8:
				$this->setTkWorktemplateNo($value);
				break;
			case 9:
				$this->setHrCompanyId($value);
				break;
			case 10:
				$this->setHrDepartmentId($value);
				break;
			case 11:
				$this->setCreatedBy($value);
				break;
			case 12:
				$this->setDateCreated($value);
				break;
			case 13:
				$this->setModifiedBy($value);
				break;
			case 14:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TkDtrmasterPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEmployeeNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCompany($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAmTimeIn($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPmTimeOut($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTypeOfEmployment($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDepartment($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTkWorktemplateNo($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setHrCompanyId($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setHrDepartmentId($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCreatedBy($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDateCreated($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setModifiedBy($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateModified($arr[$keys[14]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TkDtrmasterPeer::DATABASE_NAME);

		if ($this->isColumnModified(TkDtrmasterPeer::ID)) $criteria->add(TkDtrmasterPeer::ID, $this->id);
		if ($this->isColumnModified(TkDtrmasterPeer::EMPLOYEE_NO)) $criteria->add(TkDtrmasterPeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(TkDtrmasterPeer::COMPANY)) $criteria->add(TkDtrmasterPeer::COMPANY, $this->company);
		if ($this->isColumnModified(TkDtrmasterPeer::NAME)) $criteria->add(TkDtrmasterPeer::NAME, $this->name);
		if ($this->isColumnModified(TkDtrmasterPeer::AM_TIME_IN)) $criteria->add(TkDtrmasterPeer::AM_TIME_IN, $this->am_time_in);
		if ($this->isColumnModified(TkDtrmasterPeer::PM_TIME_OUT)) $criteria->add(TkDtrmasterPeer::PM_TIME_OUT, $this->pm_time_out);
		if ($this->isColumnModified(TkDtrmasterPeer::TYPE_OF_EMPLOYMENT)) $criteria->add(TkDtrmasterPeer::TYPE_OF_EMPLOYMENT, $this->type_of_employment);
		if ($this->isColumnModified(TkDtrmasterPeer::DEPARTMENT)) $criteria->add(TkDtrmasterPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(TkDtrmasterPeer::TK_WORKTEMPLATE_NO)) $criteria->add(TkDtrmasterPeer::TK_WORKTEMPLATE_NO, $this->tk_worktemplate_no);
		if ($this->isColumnModified(TkDtrmasterPeer::HR_COMPANY_ID)) $criteria->add(TkDtrmasterPeer::HR_COMPANY_ID, $this->hr_company_id);
		if ($this->isColumnModified(TkDtrmasterPeer::HR_DEPARTMENT_ID)) $criteria->add(TkDtrmasterPeer::HR_DEPARTMENT_ID, $this->hr_department_id);
		if ($this->isColumnModified(TkDtrmasterPeer::CREATED_BY)) $criteria->add(TkDtrmasterPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(TkDtrmasterPeer::DATE_CREATED)) $criteria->add(TkDtrmasterPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(TkDtrmasterPeer::MODIFIED_BY)) $criteria->add(TkDtrmasterPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(TkDtrmasterPeer::DATE_MODIFIED)) $criteria->add(TkDtrmasterPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TkDtrmasterPeer::DATABASE_NAME);

		$criteria->add(TkDtrmasterPeer::ID, $this->id);

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

		$copyObj->setEmployeeNo($this->employee_no);

		$copyObj->setCompany($this->company);

		$copyObj->setName($this->name);

		$copyObj->setAmTimeIn($this->am_time_in);

		$copyObj->setPmTimeOut($this->pm_time_out);

		$copyObj->setTypeOfEmployment($this->type_of_employment);

		$copyObj->setDepartment($this->department);

		$copyObj->setTkWorktemplateNo($this->tk_worktemplate_no);

		$copyObj->setHrCompanyId($this->hr_company_id);

		$copyObj->setHrDepartmentId($this->hr_department_id);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateModified($this->date_modified);


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
			self::$peer = new TkDtrmasterPeer();
		}
		return self::$peer;
	}

	
	public function setHrCompany($v)
	{


		if ($v === null) {
			$this->setHrCompanyId(NULL);
		} else {
			$this->setHrCompanyId($v->getId());
		}


		$this->aHrCompany = $v;
	}


	
	public function getHrCompany($con = null)
	{
		if ($this->aHrCompany === null && (($this->hr_company_id !== "" && $this->hr_company_id !== null))) {
						include_once 'lib/model/hr/om/BaseHrCompanyPeer.php';

			$this->aHrCompany = HrCompanyPeer::retrieveByPK($this->hr_company_id, $con);

			
		}
		return $this->aHrCompany;
	}

	
	public function setHrDepartment($v)
	{


		if ($v === null) {
			$this->setHrDepartmentId(NULL);
		} else {
			$this->setHrDepartmentId($v->getId());
		}


		$this->aHrDepartment = $v;
	}


	
	public function getHrDepartment($con = null)
	{
		if ($this->aHrDepartment === null && (($this->hr_department_id !== "" && $this->hr_department_id !== null))) {
						include_once 'lib/model/hr/om/BaseHrDepartmentPeer.php';

			$this->aHrDepartment = HrDepartmentPeer::retrieveByPK($this->hr_department_id, $con);

			
		}
		return $this->aHrDepartment;
	}

} 
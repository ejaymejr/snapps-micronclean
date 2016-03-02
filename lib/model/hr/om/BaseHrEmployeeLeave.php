<?php


abstract class BaseHrEmployeeLeave extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $employee_no;


	
	protected $name;


	
	protected $ic_no;


	
	protected $contact_no;


	
	protected $hr_leave_id;


	
	protected $hr_employee_id;


	
	protected $hr_department_id;


	
	protected $hr_company_id;


	
	protected $date_filed;


	
	protected $leave_type;


	
	protected $reason_leave;


	
	protected $inclusive_datefrom;


	
	protected $inclusive_dateto;


	
	protected $fiscal_year;


	
	protected $no_days;


	
	protected $half_day;


	
	protected $verified;


	
	protected $verified_by;


	
	protected $date_verified;


	
	protected $approved;


	
	protected $approved_by;


	
	protected $date_approved;


	
	protected $created_by;


	
	protected $date_created;


	
	protected $modified_by;


	
	protected $date_modified;

	
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

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getIcNo()
	{

		return $this->ic_no;
	}

	
	public function getContactNo()
	{

		return $this->contact_no;
	}

	
	public function getHrLeaveId()
	{

		return $this->hr_leave_id;
	}

	
	public function getHrEmployeeId()
	{

		return $this->hr_employee_id;
	}

	
	public function getHrDepartmentId()
	{

		return $this->hr_department_id;
	}

	
	public function getHrCompanyId()
	{

		return $this->hr_company_id;
	}

	
	public function getDateFiled($format = 'Y-m-d H:i:s')
	{

		if ($this->date_filed === null || $this->date_filed === '') {
			return null;
		} elseif (!is_int($this->date_filed)) {
						$ts = strtotime($this->date_filed);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_filed] as date/time value: " . var_export($this->date_filed, true));
			}
		} else {
			$ts = $this->date_filed;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getLeaveType()
	{

		return $this->leave_type;
	}

	
	public function getReasonLeave()
	{

		return $this->reason_leave;
	}

	
	public function getInclusiveDatefrom($format = 'Y-m-d H:i:s')
	{

		if ($this->inclusive_datefrom === null || $this->inclusive_datefrom === '') {
			return null;
		} elseif (!is_int($this->inclusive_datefrom)) {
						$ts = strtotime($this->inclusive_datefrom);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [inclusive_datefrom] as date/time value: " . var_export($this->inclusive_datefrom, true));
			}
		} else {
			$ts = $this->inclusive_datefrom;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getInclusiveDateto($format = 'Y-m-d H:i:s')
	{

		if ($this->inclusive_dateto === null || $this->inclusive_dateto === '') {
			return null;
		} elseif (!is_int($this->inclusive_dateto)) {
						$ts = strtotime($this->inclusive_dateto);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [inclusive_dateto] as date/time value: " . var_export($this->inclusive_dateto, true));
			}
		} else {
			$ts = $this->inclusive_dateto;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getFiscalYear()
	{

		return $this->fiscal_year;
	}

	
	public function getNoDays()
	{

		return $this->no_days;
	}

	
	public function getHalfDay()
	{

		return $this->half_day;
	}

	
	public function getVerified()
	{

		return $this->verified;
	}

	
	public function getVerifiedBy()
	{

		return $this->verified_by;
	}

	
	public function getDateVerified($format = 'Y-m-d H:i:s')
	{

		if ($this->date_verified === null || $this->date_verified === '') {
			return null;
		} elseif (!is_int($this->date_verified)) {
						$ts = strtotime($this->date_verified);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_verified] as date/time value: " . var_export($this->date_verified, true));
			}
		} else {
			$ts = $this->date_verified;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getApproved()
	{

		return $this->approved;
	}

	
	public function getApprovedBy()
	{

		return $this->approved_by;
	}

	
	public function getDateApproved($format = 'Y-m-d H:i:s')
	{

		if ($this->date_approved === null || $this->date_approved === '') {
			return null;
		} elseif (!is_int($this->date_approved)) {
						$ts = strtotime($this->date_approved);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_approved] as date/time value: " . var_export($this->date_approved, true));
			}
		} else {
			$ts = $this->date_approved;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
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
			$this->modifiedColumns[] = HrEmployeeLeavePeer::ID;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v) {
			$this->employee_no = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::EMPLOYEE_NO;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::NAME;
		}

	} 
	
	public function setIcNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ic_no !== $v) {
			$this->ic_no = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::IC_NO;
		}

	} 
	
	public function setContactNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->contact_no !== $v) {
			$this->contact_no = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::CONTACT_NO;
		}

	} 
	
	public function setHrLeaveId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hr_leave_id !== $v) {
			$this->hr_leave_id = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::HR_LEAVE_ID;
		}

	} 
	
	public function setHrEmployeeId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hr_employee_id !== $v) {
			$this->hr_employee_id = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::HR_EMPLOYEE_ID;
		}

	} 
	
	public function setHrDepartmentId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hr_department_id !== $v) {
			$this->hr_department_id = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::HR_DEPARTMENT_ID;
		}

	} 
	
	public function setHrCompanyId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hr_company_id !== $v) {
			$this->hr_company_id = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::HR_COMPANY_ID;
		}

	} 
	
	public function setDateFiled($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_filed] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_filed !== $ts) {
			$this->date_filed = $ts;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::DATE_FILED;
		}

	} 
	
	public function setLeaveType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->leave_type !== $v) {
			$this->leave_type = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::LEAVE_TYPE;
		}

	} 
	
	public function setReasonLeave($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reason_leave !== $v) {
			$this->reason_leave = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::REASON_LEAVE;
		}

	} 
	
	public function setInclusiveDatefrom($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [inclusive_datefrom] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->inclusive_datefrom !== $ts) {
			$this->inclusive_datefrom = $ts;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::INCLUSIVE_DATEFROM;
		}

	} 
	
	public function setInclusiveDateto($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [inclusive_dateto] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->inclusive_dateto !== $ts) {
			$this->inclusive_dateto = $ts;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::INCLUSIVE_DATETO;
		}

	} 
	
	public function setFiscalYear($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fiscal_year !== $v) {
			$this->fiscal_year = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::FISCAL_YEAR;
		}

	} 
	
	public function setNoDays($v)
	{

		if ($this->no_days !== $v) {
			$this->no_days = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::NO_DAYS;
		}

	} 
	
	public function setHalfDay($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->half_day !== $v) {
			$this->half_day = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::HALF_DAY;
		}

	} 
	
	public function setVerified($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified !== $v) {
			$this->verified = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::VERIFIED;
		}

	} 
	
	public function setVerifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by !== $v) {
			$this->verified_by = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::VERIFIED_BY;
		}

	} 
	
	public function setDateVerified($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_verified] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_verified !== $ts) {
			$this->date_verified = $ts;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::DATE_VERIFIED;
		}

	} 
	
	public function setApproved($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->approved !== $v) {
			$this->approved = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::APPROVED;
		}

	} 
	
	public function setApprovedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->approved_by !== $v) {
			$this->approved_by = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::APPROVED_BY;
		}

	} 
	
	public function setDateApproved($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_approved] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_approved !== $ts) {
			$this->date_approved = $ts;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::DATE_APPROVED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::CREATED_BY;
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
			$this->modifiedColumns[] = HrEmployeeLeavePeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrEmployeeLeavePeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HrEmployeeLeavePeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->employee_no = $rs->getString($startcol + 1);

			$this->name = $rs->getString($startcol + 2);

			$this->ic_no = $rs->getString($startcol + 3);

			$this->contact_no = $rs->getString($startcol + 4);

			$this->hr_leave_id = $rs->getString($startcol + 5);

			$this->hr_employee_id = $rs->getString($startcol + 6);

			$this->hr_department_id = $rs->getString($startcol + 7);

			$this->hr_company_id = $rs->getString($startcol + 8);

			$this->date_filed = $rs->getTimestamp($startcol + 9, null);

			$this->leave_type = $rs->getString($startcol + 10);

			$this->reason_leave = $rs->getString($startcol + 11);

			$this->inclusive_datefrom = $rs->getTimestamp($startcol + 12, null);

			$this->inclusive_dateto = $rs->getTimestamp($startcol + 13, null);

			$this->fiscal_year = $rs->getString($startcol + 14);

			$this->no_days = $rs->getFloat($startcol + 15);

			$this->half_day = $rs->getString($startcol + 16);

			$this->verified = $rs->getString($startcol + 17);

			$this->verified_by = $rs->getString($startcol + 18);

			$this->date_verified = $rs->getTimestamp($startcol + 19, null);

			$this->approved = $rs->getString($startcol + 20);

			$this->approved_by = $rs->getString($startcol + 21);

			$this->date_approved = $rs->getTimestamp($startcol + 22, null);

			$this->created_by = $rs->getString($startcol + 23);

			$this->date_created = $rs->getTimestamp($startcol + 24, null);

			$this->modified_by = $rs->getString($startcol + 25);

			$this->date_modified = $rs->getTimestamp($startcol + 26, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 27; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrEmployeeLeave object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrEmployeeLeavePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrEmployeeLeavePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrEmployeeLeavePeer::DATABASE_NAME);
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
					$pk = HrEmployeeLeavePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrEmployeeLeavePeer::doUpdate($this, $con);
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


			if (($retval = HrEmployeeLeavePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrEmployeeLeavePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getName();
				break;
			case 3:
				return $this->getIcNo();
				break;
			case 4:
				return $this->getContactNo();
				break;
			case 5:
				return $this->getHrLeaveId();
				break;
			case 6:
				return $this->getHrEmployeeId();
				break;
			case 7:
				return $this->getHrDepartmentId();
				break;
			case 8:
				return $this->getHrCompanyId();
				break;
			case 9:
				return $this->getDateFiled();
				break;
			case 10:
				return $this->getLeaveType();
				break;
			case 11:
				return $this->getReasonLeave();
				break;
			case 12:
				return $this->getInclusiveDatefrom();
				break;
			case 13:
				return $this->getInclusiveDateto();
				break;
			case 14:
				return $this->getFiscalYear();
				break;
			case 15:
				return $this->getNoDays();
				break;
			case 16:
				return $this->getHalfDay();
				break;
			case 17:
				return $this->getVerified();
				break;
			case 18:
				return $this->getVerifiedBy();
				break;
			case 19:
				return $this->getDateVerified();
				break;
			case 20:
				return $this->getApproved();
				break;
			case 21:
				return $this->getApprovedBy();
				break;
			case 22:
				return $this->getDateApproved();
				break;
			case 23:
				return $this->getCreatedBy();
				break;
			case 24:
				return $this->getDateCreated();
				break;
			case 25:
				return $this->getModifiedBy();
				break;
			case 26:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrEmployeeLeavePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEmployeeNo(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getIcNo(),
			$keys[4] => $this->getContactNo(),
			$keys[5] => $this->getHrLeaveId(),
			$keys[6] => $this->getHrEmployeeId(),
			$keys[7] => $this->getHrDepartmentId(),
			$keys[8] => $this->getHrCompanyId(),
			$keys[9] => $this->getDateFiled(),
			$keys[10] => $this->getLeaveType(),
			$keys[11] => $this->getReasonLeave(),
			$keys[12] => $this->getInclusiveDatefrom(),
			$keys[13] => $this->getInclusiveDateto(),
			$keys[14] => $this->getFiscalYear(),
			$keys[15] => $this->getNoDays(),
			$keys[16] => $this->getHalfDay(),
			$keys[17] => $this->getVerified(),
			$keys[18] => $this->getVerifiedBy(),
			$keys[19] => $this->getDateVerified(),
			$keys[20] => $this->getApproved(),
			$keys[21] => $this->getApprovedBy(),
			$keys[22] => $this->getDateApproved(),
			$keys[23] => $this->getCreatedBy(),
			$keys[24] => $this->getDateCreated(),
			$keys[25] => $this->getModifiedBy(),
			$keys[26] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrEmployeeLeavePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setName($value);
				break;
			case 3:
				$this->setIcNo($value);
				break;
			case 4:
				$this->setContactNo($value);
				break;
			case 5:
				$this->setHrLeaveId($value);
				break;
			case 6:
				$this->setHrEmployeeId($value);
				break;
			case 7:
				$this->setHrDepartmentId($value);
				break;
			case 8:
				$this->setHrCompanyId($value);
				break;
			case 9:
				$this->setDateFiled($value);
				break;
			case 10:
				$this->setLeaveType($value);
				break;
			case 11:
				$this->setReasonLeave($value);
				break;
			case 12:
				$this->setInclusiveDatefrom($value);
				break;
			case 13:
				$this->setInclusiveDateto($value);
				break;
			case 14:
				$this->setFiscalYear($value);
				break;
			case 15:
				$this->setNoDays($value);
				break;
			case 16:
				$this->setHalfDay($value);
				break;
			case 17:
				$this->setVerified($value);
				break;
			case 18:
				$this->setVerifiedBy($value);
				break;
			case 19:
				$this->setDateVerified($value);
				break;
			case 20:
				$this->setApproved($value);
				break;
			case 21:
				$this->setApprovedBy($value);
				break;
			case 22:
				$this->setDateApproved($value);
				break;
			case 23:
				$this->setCreatedBy($value);
				break;
			case 24:
				$this->setDateCreated($value);
				break;
			case 25:
				$this->setModifiedBy($value);
				break;
			case 26:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrEmployeeLeavePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEmployeeNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIcNo($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setContactNo($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setHrLeaveId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setHrEmployeeId($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setHrDepartmentId($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setHrCompanyId($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateFiled($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setLeaveType($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setReasonLeave($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setInclusiveDatefrom($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setInclusiveDateto($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setFiscalYear($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setNoDays($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setHalfDay($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setVerified($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setVerifiedBy($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setDateVerified($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setApproved($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setApprovedBy($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setDateApproved($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setCreatedBy($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setDateCreated($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setModifiedBy($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setDateModified($arr[$keys[26]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrEmployeeLeavePeer::DATABASE_NAME);

		if ($this->isColumnModified(HrEmployeeLeavePeer::ID)) $criteria->add(HrEmployeeLeavePeer::ID, $this->id);
		if ($this->isColumnModified(HrEmployeeLeavePeer::EMPLOYEE_NO)) $criteria->add(HrEmployeeLeavePeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(HrEmployeeLeavePeer::NAME)) $criteria->add(HrEmployeeLeavePeer::NAME, $this->name);
		if ($this->isColumnModified(HrEmployeeLeavePeer::IC_NO)) $criteria->add(HrEmployeeLeavePeer::IC_NO, $this->ic_no);
		if ($this->isColumnModified(HrEmployeeLeavePeer::CONTACT_NO)) $criteria->add(HrEmployeeLeavePeer::CONTACT_NO, $this->contact_no);
		if ($this->isColumnModified(HrEmployeeLeavePeer::HR_LEAVE_ID)) $criteria->add(HrEmployeeLeavePeer::HR_LEAVE_ID, $this->hr_leave_id);
		if ($this->isColumnModified(HrEmployeeLeavePeer::HR_EMPLOYEE_ID)) $criteria->add(HrEmployeeLeavePeer::HR_EMPLOYEE_ID, $this->hr_employee_id);
		if ($this->isColumnModified(HrEmployeeLeavePeer::HR_DEPARTMENT_ID)) $criteria->add(HrEmployeeLeavePeer::HR_DEPARTMENT_ID, $this->hr_department_id);
		if ($this->isColumnModified(HrEmployeeLeavePeer::HR_COMPANY_ID)) $criteria->add(HrEmployeeLeavePeer::HR_COMPANY_ID, $this->hr_company_id);
		if ($this->isColumnModified(HrEmployeeLeavePeer::DATE_FILED)) $criteria->add(HrEmployeeLeavePeer::DATE_FILED, $this->date_filed);
		if ($this->isColumnModified(HrEmployeeLeavePeer::LEAVE_TYPE)) $criteria->add(HrEmployeeLeavePeer::LEAVE_TYPE, $this->leave_type);
		if ($this->isColumnModified(HrEmployeeLeavePeer::REASON_LEAVE)) $criteria->add(HrEmployeeLeavePeer::REASON_LEAVE, $this->reason_leave);
		if ($this->isColumnModified(HrEmployeeLeavePeer::INCLUSIVE_DATEFROM)) $criteria->add(HrEmployeeLeavePeer::INCLUSIVE_DATEFROM, $this->inclusive_datefrom);
		if ($this->isColumnModified(HrEmployeeLeavePeer::INCLUSIVE_DATETO)) $criteria->add(HrEmployeeLeavePeer::INCLUSIVE_DATETO, $this->inclusive_dateto);
		if ($this->isColumnModified(HrEmployeeLeavePeer::FISCAL_YEAR)) $criteria->add(HrEmployeeLeavePeer::FISCAL_YEAR, $this->fiscal_year);
		if ($this->isColumnModified(HrEmployeeLeavePeer::NO_DAYS)) $criteria->add(HrEmployeeLeavePeer::NO_DAYS, $this->no_days);
		if ($this->isColumnModified(HrEmployeeLeavePeer::HALF_DAY)) $criteria->add(HrEmployeeLeavePeer::HALF_DAY, $this->half_day);
		if ($this->isColumnModified(HrEmployeeLeavePeer::VERIFIED)) $criteria->add(HrEmployeeLeavePeer::VERIFIED, $this->verified);
		if ($this->isColumnModified(HrEmployeeLeavePeer::VERIFIED_BY)) $criteria->add(HrEmployeeLeavePeer::VERIFIED_BY, $this->verified_by);
		if ($this->isColumnModified(HrEmployeeLeavePeer::DATE_VERIFIED)) $criteria->add(HrEmployeeLeavePeer::DATE_VERIFIED, $this->date_verified);
		if ($this->isColumnModified(HrEmployeeLeavePeer::APPROVED)) $criteria->add(HrEmployeeLeavePeer::APPROVED, $this->approved);
		if ($this->isColumnModified(HrEmployeeLeavePeer::APPROVED_BY)) $criteria->add(HrEmployeeLeavePeer::APPROVED_BY, $this->approved_by);
		if ($this->isColumnModified(HrEmployeeLeavePeer::DATE_APPROVED)) $criteria->add(HrEmployeeLeavePeer::DATE_APPROVED, $this->date_approved);
		if ($this->isColumnModified(HrEmployeeLeavePeer::CREATED_BY)) $criteria->add(HrEmployeeLeavePeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrEmployeeLeavePeer::DATE_CREATED)) $criteria->add(HrEmployeeLeavePeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrEmployeeLeavePeer::MODIFIED_BY)) $criteria->add(HrEmployeeLeavePeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrEmployeeLeavePeer::DATE_MODIFIED)) $criteria->add(HrEmployeeLeavePeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrEmployeeLeavePeer::DATABASE_NAME);

		$criteria->add(HrEmployeeLeavePeer::ID, $this->id);

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

		$copyObj->setName($this->name);

		$copyObj->setIcNo($this->ic_no);

		$copyObj->setContactNo($this->contact_no);

		$copyObj->setHrLeaveId($this->hr_leave_id);

		$copyObj->setHrEmployeeId($this->hr_employee_id);

		$copyObj->setHrDepartmentId($this->hr_department_id);

		$copyObj->setHrCompanyId($this->hr_company_id);

		$copyObj->setDateFiled($this->date_filed);

		$copyObj->setLeaveType($this->leave_type);

		$copyObj->setReasonLeave($this->reason_leave);

		$copyObj->setInclusiveDatefrom($this->inclusive_datefrom);

		$copyObj->setInclusiveDateto($this->inclusive_dateto);

		$copyObj->setFiscalYear($this->fiscal_year);

		$copyObj->setNoDays($this->no_days);

		$copyObj->setHalfDay($this->half_day);

		$copyObj->setVerified($this->verified);

		$copyObj->setVerifiedBy($this->verified_by);

		$copyObj->setDateVerified($this->date_verified);

		$copyObj->setApproved($this->approved);

		$copyObj->setApprovedBy($this->approved_by);

		$copyObj->setDateApproved($this->date_approved);

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
			self::$peer = new HrEmployeeLeavePeer();
		}
		return self::$peer;
	}

} 
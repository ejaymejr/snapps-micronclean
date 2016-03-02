<?php


abstract class BaseCustomerManagementComplaintForm extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $complain_date_time;


	
	protected $company_name;


	
	protected $customer_number;


	
	protected $complainee_name;


	
	protected $complainee_designation;


	
	protected $complainee_department;


	
	protected $complainee_contact_no;


	
	protected $complainee_email;


	
	protected $complain_description;


	
	protected $received_by_name;


	
	protected $received_by_designation;


	
	protected $received_by_department;


	
	protected $channel;


	
	protected $complain_concerning;


	
	protected $correction_action_taken;


	
	protected $undertaken_by_date;


	
	protected $undertaken_by;


	
	protected $undertaken_by_designation;


	
	protected $undertaken_by_department;


	
	protected $undertaken_by_initials;


	
	protected $verified_by_date;


	
	protected $verified_by;


	
	protected $verified_by_designation;


	
	protected $verified_by_department;


	
	protected $verified_by_initials;


	
	protected $date_created;


	
	protected $created_by;


	
	protected $date_modified;


	
	protected $modified_by;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getComplainDateTime($format = 'Y-m-d H:i:s')
	{

		if ($this->complain_date_time === null || $this->complain_date_time === '') {
			return null;
		} elseif (!is_int($this->complain_date_time)) {
						$ts = strtotime($this->complain_date_time);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [complain_date_time] as date/time value: " . var_export($this->complain_date_time, true));
			}
		} else {
			$ts = $this->complain_date_time;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCompanyName()
	{

		return $this->company_name;
	}

	
	public function getCustomerNumber()
	{

		return $this->customer_number;
	}

	
	public function getComplaineeName()
	{

		return $this->complainee_name;
	}

	
	public function getComplaineeDesignation()
	{

		return $this->complainee_designation;
	}

	
	public function getComplaineeDepartment()
	{

		return $this->complainee_department;
	}

	
	public function getComplaineeContactNo()
	{

		return $this->complainee_contact_no;
	}

	
	public function getComplaineeEmail()
	{

		return $this->complainee_email;
	}

	
	public function getComplainDescription()
	{

		return $this->complain_description;
	}

	
	public function getReceivedByName()
	{

		return $this->received_by_name;
	}

	
	public function getReceivedByDesignation()
	{

		return $this->received_by_designation;
	}

	
	public function getReceivedByDepartment()
	{

		return $this->received_by_department;
	}

	
	public function getChannel()
	{

		return $this->channel;
	}

	
	public function getComplainConcerning()
	{

		return $this->complain_concerning;
	}

	
	public function getCorrectionActionTaken()
	{

		return $this->correction_action_taken;
	}

	
	public function getUndertakenByDate($format = 'Y-m-d')
	{

		if ($this->undertaken_by_date === null || $this->undertaken_by_date === '') {
			return null;
		} elseif (!is_int($this->undertaken_by_date)) {
						$ts = strtotime($this->undertaken_by_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [undertaken_by_date] as date/time value: " . var_export($this->undertaken_by_date, true));
			}
		} else {
			$ts = $this->undertaken_by_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getUndertakenBy()
	{

		return $this->undertaken_by;
	}

	
	public function getUndertakenByDesignation()
	{

		return $this->undertaken_by_designation;
	}

	
	public function getUndertakenByDepartment()
	{

		return $this->undertaken_by_department;
	}

	
	public function getUndertakenByInitials()
	{

		return $this->undertaken_by_initials;
	}

	
	public function getVerifiedByDate($format = 'Y-m-d')
	{

		if ($this->verified_by_date === null || $this->verified_by_date === '') {
			return null;
		} elseif (!is_int($this->verified_by_date)) {
						$ts = strtotime($this->verified_by_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [verified_by_date] as date/time value: " . var_export($this->verified_by_date, true));
			}
		} else {
			$ts = $this->verified_by_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getVerifiedBy()
	{

		return $this->verified_by;
	}

	
	public function getVerifiedByDesignation()
	{

		return $this->verified_by_designation;
	}

	
	public function getVerifiedByDepartment()
	{

		return $this->verified_by_department;
	}

	
	public function getVerifiedByInitials()
	{

		return $this->verified_by_initials;
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

	
	public function getCreatedBy()
	{

		return $this->created_by;
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

	
	public function getModifiedBy()
	{

		return $this->modified_by;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::ID;
		}

	} 
	
	public function setComplainDateTime($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [complain_date_time] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->complain_date_time !== $ts) {
			$this->complain_date_time = $ts;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME;
		}

	} 
	
	public function setCompanyName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company_name !== $v) {
			$this->company_name = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::COMPANY_NAME;
		}

	} 
	
	public function setCustomerNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer_number !== $v) {
			$this->customer_number = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::CUSTOMER_NUMBER;
		}

	} 
	
	public function setComplaineeName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->complainee_name !== $v) {
			$this->complainee_name = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::COMPLAINEE_NAME;
		}

	} 
	
	public function setComplaineeDesignation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->complainee_designation !== $v) {
			$this->complainee_designation = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::COMPLAINEE_DESIGNATION;
		}

	} 
	
	public function setComplaineeDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->complainee_department !== $v) {
			$this->complainee_department = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::COMPLAINEE_DEPARTMENT;
		}

	} 
	
	public function setComplaineeContactNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->complainee_contact_no !== $v) {
			$this->complainee_contact_no = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::COMPLAINEE_CONTACT_NO;
		}

	} 
	
	public function setComplaineeEmail($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->complainee_email !== $v) {
			$this->complainee_email = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::COMPLAINEE_EMAIL;
		}

	} 
	
	public function setComplainDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->complain_description !== $v) {
			$this->complain_description = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::COMPLAIN_DESCRIPTION;
		}

	} 
	
	public function setReceivedByName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->received_by_name !== $v) {
			$this->received_by_name = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::RECEIVED_BY_NAME;
		}

	} 
	
	public function setReceivedByDesignation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->received_by_designation !== $v) {
			$this->received_by_designation = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::RECEIVED_BY_DESIGNATION;
		}

	} 
	
	public function setReceivedByDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->received_by_department !== $v) {
			$this->received_by_department = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::RECEIVED_BY_DEPARTMENT;
		}

	} 
	
	public function setChannel($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->channel !== $v) {
			$this->channel = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::CHANNEL;
		}

	} 
	
	public function setComplainConcerning($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->complain_concerning !== $v) {
			$this->complain_concerning = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::COMPLAIN_CONCERNING;
		}

	} 
	
	public function setCorrectionActionTaken($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->correction_action_taken !== $v) {
			$this->correction_action_taken = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::CORRECTION_ACTION_TAKEN;
		}

	} 
	
	public function setUndertakenByDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [undertaken_by_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->undertaken_by_date !== $ts) {
			$this->undertaken_by_date = $ts;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DATE;
		}

	} 
	
	public function setUndertakenBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->undertaken_by !== $v) {
			$this->undertaken_by = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::UNDERTAKEN_BY;
		}

	} 
	
	public function setUndertakenByDesignation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->undertaken_by_designation !== $v) {
			$this->undertaken_by_designation = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DESIGNATION;
		}

	} 
	
	public function setUndertakenByDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->undertaken_by_department !== $v) {
			$this->undertaken_by_department = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DEPARTMENT;
		}

	} 
	
	public function setUndertakenByInitials($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->undertaken_by_initials !== $v) {
			$this->undertaken_by_initials = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_INITIALS;
		}

	} 
	
	public function setVerifiedByDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [verified_by_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->verified_by_date !== $ts) {
			$this->verified_by_date = $ts;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::VERIFIED_BY_DATE;
		}

	} 
	
	public function setVerifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by !== $v) {
			$this->verified_by = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::VERIFIED_BY;
		}

	} 
	
	public function setVerifiedByDesignation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by_designation !== $v) {
			$this->verified_by_designation = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::VERIFIED_BY_DESIGNATION;
		}

	} 
	
	public function setVerifiedByDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by_department !== $v) {
			$this->verified_by_department = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::VERIFIED_BY_DEPARTMENT;
		}

	} 
	
	public function setVerifiedByInitials($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by_initials !== $v) {
			$this->verified_by_initials = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::VERIFIED_BY_INITIALS;
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
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::CREATED_BY;
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
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = CustomerManagementComplaintFormPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->complain_date_time = $rs->getTimestamp($startcol + 1, null);

			$this->company_name = $rs->getString($startcol + 2);

			$this->customer_number = $rs->getString($startcol + 3);

			$this->complainee_name = $rs->getString($startcol + 4);

			$this->complainee_designation = $rs->getString($startcol + 5);

			$this->complainee_department = $rs->getString($startcol + 6);

			$this->complainee_contact_no = $rs->getString($startcol + 7);

			$this->complainee_email = $rs->getString($startcol + 8);

			$this->complain_description = $rs->getString($startcol + 9);

			$this->received_by_name = $rs->getString($startcol + 10);

			$this->received_by_designation = $rs->getString($startcol + 11);

			$this->received_by_department = $rs->getString($startcol + 12);

			$this->channel = $rs->getString($startcol + 13);

			$this->complain_concerning = $rs->getString($startcol + 14);

			$this->correction_action_taken = $rs->getString($startcol + 15);

			$this->undertaken_by_date = $rs->getDate($startcol + 16, null);

			$this->undertaken_by = $rs->getString($startcol + 17);

			$this->undertaken_by_designation = $rs->getString($startcol + 18);

			$this->undertaken_by_department = $rs->getString($startcol + 19);

			$this->undertaken_by_initials = $rs->getString($startcol + 20);

			$this->verified_by_date = $rs->getDate($startcol + 21, null);

			$this->verified_by = $rs->getString($startcol + 22);

			$this->verified_by_designation = $rs->getString($startcol + 23);

			$this->verified_by_department = $rs->getString($startcol + 24);

			$this->verified_by_initials = $rs->getString($startcol + 25);

			$this->date_created = $rs->getTimestamp($startcol + 26, null);

			$this->created_by = $rs->getString($startcol + 27);

			$this->date_modified = $rs->getTimestamp($startcol + 28, null);

			$this->modified_by = $rs->getString($startcol + 29);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 30; 
		} catch (Exception $e) {
			throw new PropelException("Error populating CustomerManagementComplaintForm object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CustomerManagementComplaintFormPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CustomerManagementComplaintFormPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CustomerManagementComplaintFormPeer::DATABASE_NAME);
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
					$pk = CustomerManagementComplaintFormPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CustomerManagementComplaintFormPeer::doUpdate($this, $con);
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


			if (($retval = CustomerManagementComplaintFormPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CustomerManagementComplaintFormPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getComplainDateTime();
				break;
			case 2:
				return $this->getCompanyName();
				break;
			case 3:
				return $this->getCustomerNumber();
				break;
			case 4:
				return $this->getComplaineeName();
				break;
			case 5:
				return $this->getComplaineeDesignation();
				break;
			case 6:
				return $this->getComplaineeDepartment();
				break;
			case 7:
				return $this->getComplaineeContactNo();
				break;
			case 8:
				return $this->getComplaineeEmail();
				break;
			case 9:
				return $this->getComplainDescription();
				break;
			case 10:
				return $this->getReceivedByName();
				break;
			case 11:
				return $this->getReceivedByDesignation();
				break;
			case 12:
				return $this->getReceivedByDepartment();
				break;
			case 13:
				return $this->getChannel();
				break;
			case 14:
				return $this->getComplainConcerning();
				break;
			case 15:
				return $this->getCorrectionActionTaken();
				break;
			case 16:
				return $this->getUndertakenByDate();
				break;
			case 17:
				return $this->getUndertakenBy();
				break;
			case 18:
				return $this->getUndertakenByDesignation();
				break;
			case 19:
				return $this->getUndertakenByDepartment();
				break;
			case 20:
				return $this->getUndertakenByInitials();
				break;
			case 21:
				return $this->getVerifiedByDate();
				break;
			case 22:
				return $this->getVerifiedBy();
				break;
			case 23:
				return $this->getVerifiedByDesignation();
				break;
			case 24:
				return $this->getVerifiedByDepartment();
				break;
			case 25:
				return $this->getVerifiedByInitials();
				break;
			case 26:
				return $this->getDateCreated();
				break;
			case 27:
				return $this->getCreatedBy();
				break;
			case 28:
				return $this->getDateModified();
				break;
			case 29:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CustomerManagementComplaintFormPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getComplainDateTime(),
			$keys[2] => $this->getCompanyName(),
			$keys[3] => $this->getCustomerNumber(),
			$keys[4] => $this->getComplaineeName(),
			$keys[5] => $this->getComplaineeDesignation(),
			$keys[6] => $this->getComplaineeDepartment(),
			$keys[7] => $this->getComplaineeContactNo(),
			$keys[8] => $this->getComplaineeEmail(),
			$keys[9] => $this->getComplainDescription(),
			$keys[10] => $this->getReceivedByName(),
			$keys[11] => $this->getReceivedByDesignation(),
			$keys[12] => $this->getReceivedByDepartment(),
			$keys[13] => $this->getChannel(),
			$keys[14] => $this->getComplainConcerning(),
			$keys[15] => $this->getCorrectionActionTaken(),
			$keys[16] => $this->getUndertakenByDate(),
			$keys[17] => $this->getUndertakenBy(),
			$keys[18] => $this->getUndertakenByDesignation(),
			$keys[19] => $this->getUndertakenByDepartment(),
			$keys[20] => $this->getUndertakenByInitials(),
			$keys[21] => $this->getVerifiedByDate(),
			$keys[22] => $this->getVerifiedBy(),
			$keys[23] => $this->getVerifiedByDesignation(),
			$keys[24] => $this->getVerifiedByDepartment(),
			$keys[25] => $this->getVerifiedByInitials(),
			$keys[26] => $this->getDateCreated(),
			$keys[27] => $this->getCreatedBy(),
			$keys[28] => $this->getDateModified(),
			$keys[29] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CustomerManagementComplaintFormPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setComplainDateTime($value);
				break;
			case 2:
				$this->setCompanyName($value);
				break;
			case 3:
				$this->setCustomerNumber($value);
				break;
			case 4:
				$this->setComplaineeName($value);
				break;
			case 5:
				$this->setComplaineeDesignation($value);
				break;
			case 6:
				$this->setComplaineeDepartment($value);
				break;
			case 7:
				$this->setComplaineeContactNo($value);
				break;
			case 8:
				$this->setComplaineeEmail($value);
				break;
			case 9:
				$this->setComplainDescription($value);
				break;
			case 10:
				$this->setReceivedByName($value);
				break;
			case 11:
				$this->setReceivedByDesignation($value);
				break;
			case 12:
				$this->setReceivedByDepartment($value);
				break;
			case 13:
				$this->setChannel($value);
				break;
			case 14:
				$this->setComplainConcerning($value);
				break;
			case 15:
				$this->setCorrectionActionTaken($value);
				break;
			case 16:
				$this->setUndertakenByDate($value);
				break;
			case 17:
				$this->setUndertakenBy($value);
				break;
			case 18:
				$this->setUndertakenByDesignation($value);
				break;
			case 19:
				$this->setUndertakenByDepartment($value);
				break;
			case 20:
				$this->setUndertakenByInitials($value);
				break;
			case 21:
				$this->setVerifiedByDate($value);
				break;
			case 22:
				$this->setVerifiedBy($value);
				break;
			case 23:
				$this->setVerifiedByDesignation($value);
				break;
			case 24:
				$this->setVerifiedByDepartment($value);
				break;
			case 25:
				$this->setVerifiedByInitials($value);
				break;
			case 26:
				$this->setDateCreated($value);
				break;
			case 27:
				$this->setCreatedBy($value);
				break;
			case 28:
				$this->setDateModified($value);
				break;
			case 29:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CustomerManagementComplaintFormPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setComplainDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCompanyName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCustomerNumber($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setComplaineeName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setComplaineeDesignation($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setComplaineeDepartment($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setComplaineeContactNo($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setComplaineeEmail($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setComplainDescription($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setReceivedByName($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setReceivedByDesignation($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setReceivedByDepartment($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setChannel($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setComplainConcerning($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCorrectionActionTaken($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setUndertakenByDate($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setUndertakenBy($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setUndertakenByDesignation($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setUndertakenByDepartment($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setUndertakenByInitials($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setVerifiedByDate($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setVerifiedBy($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setVerifiedByDesignation($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setVerifiedByDepartment($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setVerifiedByInitials($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setDateCreated($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setCreatedBy($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setDateModified($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setModifiedBy($arr[$keys[29]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CustomerManagementComplaintFormPeer::DATABASE_NAME);

		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::ID)) $criteria->add(CustomerManagementComplaintFormPeer::ID, $this->id);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME)) $criteria->add(CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME, $this->complain_date_time);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::COMPANY_NAME)) $criteria->add(CustomerManagementComplaintFormPeer::COMPANY_NAME, $this->company_name);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::CUSTOMER_NUMBER)) $criteria->add(CustomerManagementComplaintFormPeer::CUSTOMER_NUMBER, $this->customer_number);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::COMPLAINEE_NAME)) $criteria->add(CustomerManagementComplaintFormPeer::COMPLAINEE_NAME, $this->complainee_name);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::COMPLAINEE_DESIGNATION)) $criteria->add(CustomerManagementComplaintFormPeer::COMPLAINEE_DESIGNATION, $this->complainee_designation);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::COMPLAINEE_DEPARTMENT)) $criteria->add(CustomerManagementComplaintFormPeer::COMPLAINEE_DEPARTMENT, $this->complainee_department);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::COMPLAINEE_CONTACT_NO)) $criteria->add(CustomerManagementComplaintFormPeer::COMPLAINEE_CONTACT_NO, $this->complainee_contact_no);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::COMPLAINEE_EMAIL)) $criteria->add(CustomerManagementComplaintFormPeer::COMPLAINEE_EMAIL, $this->complainee_email);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::COMPLAIN_DESCRIPTION)) $criteria->add(CustomerManagementComplaintFormPeer::COMPLAIN_DESCRIPTION, $this->complain_description);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::RECEIVED_BY_NAME)) $criteria->add(CustomerManagementComplaintFormPeer::RECEIVED_BY_NAME, $this->received_by_name);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::RECEIVED_BY_DESIGNATION)) $criteria->add(CustomerManagementComplaintFormPeer::RECEIVED_BY_DESIGNATION, $this->received_by_designation);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::RECEIVED_BY_DEPARTMENT)) $criteria->add(CustomerManagementComplaintFormPeer::RECEIVED_BY_DEPARTMENT, $this->received_by_department);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::CHANNEL)) $criteria->add(CustomerManagementComplaintFormPeer::CHANNEL, $this->channel);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::COMPLAIN_CONCERNING)) $criteria->add(CustomerManagementComplaintFormPeer::COMPLAIN_CONCERNING, $this->complain_concerning);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::CORRECTION_ACTION_TAKEN)) $criteria->add(CustomerManagementComplaintFormPeer::CORRECTION_ACTION_TAKEN, $this->correction_action_taken);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DATE)) $criteria->add(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DATE, $this->undertaken_by_date);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY)) $criteria->add(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY, $this->undertaken_by);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DESIGNATION)) $criteria->add(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DESIGNATION, $this->undertaken_by_designation);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DEPARTMENT)) $criteria->add(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DEPARTMENT, $this->undertaken_by_department);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_INITIALS)) $criteria->add(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_INITIALS, $this->undertaken_by_initials);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::VERIFIED_BY_DATE)) $criteria->add(CustomerManagementComplaintFormPeer::VERIFIED_BY_DATE, $this->verified_by_date);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::VERIFIED_BY)) $criteria->add(CustomerManagementComplaintFormPeer::VERIFIED_BY, $this->verified_by);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::VERIFIED_BY_DESIGNATION)) $criteria->add(CustomerManagementComplaintFormPeer::VERIFIED_BY_DESIGNATION, $this->verified_by_designation);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::VERIFIED_BY_DEPARTMENT)) $criteria->add(CustomerManagementComplaintFormPeer::VERIFIED_BY_DEPARTMENT, $this->verified_by_department);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::VERIFIED_BY_INITIALS)) $criteria->add(CustomerManagementComplaintFormPeer::VERIFIED_BY_INITIALS, $this->verified_by_initials);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::DATE_CREATED)) $criteria->add(CustomerManagementComplaintFormPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::CREATED_BY)) $criteria->add(CustomerManagementComplaintFormPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::DATE_MODIFIED)) $criteria->add(CustomerManagementComplaintFormPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(CustomerManagementComplaintFormPeer::MODIFIED_BY)) $criteria->add(CustomerManagementComplaintFormPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CustomerManagementComplaintFormPeer::DATABASE_NAME);

		$criteria->add(CustomerManagementComplaintFormPeer::ID, $this->id);

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

		$copyObj->setComplainDateTime($this->complain_date_time);

		$copyObj->setCompanyName($this->company_name);

		$copyObj->setCustomerNumber($this->customer_number);

		$copyObj->setComplaineeName($this->complainee_name);

		$copyObj->setComplaineeDesignation($this->complainee_designation);

		$copyObj->setComplaineeDepartment($this->complainee_department);

		$copyObj->setComplaineeContactNo($this->complainee_contact_no);

		$copyObj->setComplaineeEmail($this->complainee_email);

		$copyObj->setComplainDescription($this->complain_description);

		$copyObj->setReceivedByName($this->received_by_name);

		$copyObj->setReceivedByDesignation($this->received_by_designation);

		$copyObj->setReceivedByDepartment($this->received_by_department);

		$copyObj->setChannel($this->channel);

		$copyObj->setComplainConcerning($this->complain_concerning);

		$copyObj->setCorrectionActionTaken($this->correction_action_taken);

		$copyObj->setUndertakenByDate($this->undertaken_by_date);

		$copyObj->setUndertakenBy($this->undertaken_by);

		$copyObj->setUndertakenByDesignation($this->undertaken_by_designation);

		$copyObj->setUndertakenByDepartment($this->undertaken_by_department);

		$copyObj->setUndertakenByInitials($this->undertaken_by_initials);

		$copyObj->setVerifiedByDate($this->verified_by_date);

		$copyObj->setVerifiedBy($this->verified_by);

		$copyObj->setVerifiedByDesignation($this->verified_by_designation);

		$copyObj->setVerifiedByDepartment($this->verified_by_department);

		$copyObj->setVerifiedByInitials($this->verified_by_initials);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateModified($this->date_modified);

		$copyObj->setModifiedBy($this->modified_by);


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
			self::$peer = new CustomerManagementComplaintFormPeer();
		}
		return self::$peer;
	}

} 
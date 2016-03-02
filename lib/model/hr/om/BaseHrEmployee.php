<?php


abstract class BaseHrEmployee extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $employee_no;


	
	protected $lastname;


	
	protected $firstname;


	
	protected $midname;


	
	protected $hr_company_id;


	
	protected $ic_no;


	
	protected $name;


	
	protected $date_of_birth;


	
	protected $birth_place;


	
	protected $blood_type;


	
	protected $organ_donor;


	
	protected $street;


	
	protected $bldg_room_no;


	
	protected $city;


	
	protected $province;


	
	protected $zip_code;


	
	protected $tel_no;


	
	protected $cell_no;


	
	protected $email_add;


	
	protected $status;


	
	protected $gender;


	
	protected $rank_code;


	
	protected $job_title;


	
	protected $date_hired;


	
	protected $bank;


	
	protected $acct_no;


	
	protected $cost_center_code;


	
	protected $emp_status;


	
	protected $type_of_employment;


	
	protected $tax_id;


	
	protected $sin_id;


	
	protected $active;


	
	protected $photo;


	
	protected $name_notified;


	
	protected $relation;


	
	protected $address;


	
	protected $contact_no;


	
	protected $date_resigned;


	
	protected $fin_no;


	
	protected $nationality;


	
	protected $commence_date;


	
	protected $type;


	
	protected $race;


	
	protected $remark;


	
	protected $team;


	
	protected $permit_no;


	
	protected $permit_renew;


	
	protected $permit_expiry;


	
	protected $passport_expiry;


	
	protected $employment_as;


	
	protected $created_by;


	
	protected $date_created;


	
	protected $modified_by;


	
	protected $date_modified;


	
	protected $profession;


	
	protected $mom_group;


	
	protected $levy_tier;


	
	protected $annual_leave;

	
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

	
	public function getLastname()
	{

		return $this->lastname;
	}

	
	public function getFirstname()
	{

		return $this->firstname;
	}

	
	public function getMidname()
	{

		return $this->midname;
	}

	
	public function getHrCompanyId()
	{

		return $this->hr_company_id;
	}

	
	public function getIcNo()
	{

		return $this->ic_no;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getDateOfBirth($format = 'Y-m-d')
	{

		if ($this->date_of_birth === null || $this->date_of_birth === '') {
			return null;
		} elseif (!is_int($this->date_of_birth)) {
						$ts = strtotime($this->date_of_birth);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_of_birth] as date/time value: " . var_export($this->date_of_birth, true));
			}
		} else {
			$ts = $this->date_of_birth;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getBirthPlace()
	{

		return $this->birth_place;
	}

	
	public function getBloodType()
	{

		return $this->blood_type;
	}

	
	public function getOrganDonor()
	{

		return $this->organ_donor;
	}

	
	public function getStreet()
	{

		return $this->street;
	}

	
	public function getBldgRoomNo()
	{

		return $this->bldg_room_no;
	}

	
	public function getCity()
	{

		return $this->city;
	}

	
	public function getProvince()
	{

		return $this->province;
	}

	
	public function getZipCode()
	{

		return $this->zip_code;
	}

	
	public function getTelNo()
	{

		return $this->tel_no;
	}

	
	public function getCellNo()
	{

		return $this->cell_no;
	}

	
	public function getEmailAdd()
	{

		return $this->email_add;
	}

	
	public function getStatus()
	{

		return $this->status;
	}

	
	public function getGender()
	{

		return $this->gender;
	}

	
	public function getRankCode()
	{

		return $this->rank_code;
	}

	
	public function getJobTitle()
	{

		return $this->job_title;
	}

	
	public function getDateHired($format = 'Y-m-d')
	{

		if ($this->date_hired === null || $this->date_hired === '') {
			return null;
		} elseif (!is_int($this->date_hired)) {
						$ts = strtotime($this->date_hired);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_hired] as date/time value: " . var_export($this->date_hired, true));
			}
		} else {
			$ts = $this->date_hired;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getBank()
	{

		return $this->bank;
	}

	
	public function getAcctNo()
	{

		return $this->acct_no;
	}

	
	public function getCostCenterCode()
	{

		return $this->cost_center_code;
	}

	
	public function getEmpStatus()
	{

		return $this->emp_status;
	}

	
	public function getTypeOfEmployment()
	{

		return $this->type_of_employment;
	}

	
	public function getTaxId()
	{

		return $this->tax_id;
	}

	
	public function getSinId()
	{

		return $this->sin_id;
	}

	
	public function getActive()
	{

		return $this->active;
	}

	
	public function getPhoto()
	{

		return $this->photo;
	}

	
	public function getNameNotified()
	{

		return $this->name_notified;
	}

	
	public function getRelation()
	{

		return $this->relation;
	}

	
	public function getAddress()
	{

		return $this->address;
	}

	
	public function getContactNo()
	{

		return $this->contact_no;
	}

	
	public function getDateResigned($format = 'Y-m-d')
	{

		if ($this->date_resigned === null || $this->date_resigned === '') {
			return null;
		} elseif (!is_int($this->date_resigned)) {
						$ts = strtotime($this->date_resigned);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_resigned] as date/time value: " . var_export($this->date_resigned, true));
			}
		} else {
			$ts = $this->date_resigned;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getFinNo()
	{

		return $this->fin_no;
	}

	
	public function getNationality()
	{

		return $this->nationality;
	}

	
	public function getCommenceDate($format = 'Y-m-d')
	{

		if ($this->commence_date === null || $this->commence_date === '') {
			return null;
		} elseif (!is_int($this->commence_date)) {
						$ts = strtotime($this->commence_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [commence_date] as date/time value: " . var_export($this->commence_date, true));
			}
		} else {
			$ts = $this->commence_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getType()
	{

		return $this->type;
	}

	
	public function getRace()
	{

		return $this->race;
	}

	
	public function getRemark()
	{

		return $this->remark;
	}

	
	public function getTeam()
	{

		return $this->team;
	}

	
	public function getPermitNo()
	{

		return $this->permit_no;
	}

	
	public function getPermitRenew($format = 'Y-m-d')
	{

		if ($this->permit_renew === null || $this->permit_renew === '') {
			return null;
		} elseif (!is_int($this->permit_renew)) {
						$ts = strtotime($this->permit_renew);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [permit_renew] as date/time value: " . var_export($this->permit_renew, true));
			}
		} else {
			$ts = $this->permit_renew;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getPermitExpiry($format = 'Y-m-d')
	{

		if ($this->permit_expiry === null || $this->permit_expiry === '') {
			return null;
		} elseif (!is_int($this->permit_expiry)) {
						$ts = strtotime($this->permit_expiry);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [permit_expiry] as date/time value: " . var_export($this->permit_expiry, true));
			}
		} else {
			$ts = $this->permit_expiry;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getPassportExpiry($format = 'Y-m-d')
	{

		if ($this->passport_expiry === null || $this->passport_expiry === '') {
			return null;
		} elseif (!is_int($this->passport_expiry)) {
						$ts = strtotime($this->passport_expiry);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [passport_expiry] as date/time value: " . var_export($this->passport_expiry, true));
			}
		} else {
			$ts = $this->passport_expiry;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getEmploymentAs()
	{

		return $this->employment_as;
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

	
	public function getProfession()
	{

		return $this->profession;
	}

	
	public function getMomGroup()
	{

		return $this->mom_group;
	}

	
	public function getLevyTier()
	{

		return $this->levy_tier;
	}

	
	public function getAnnualLeave()
	{

		return $this->annual_leave;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = HrEmployeePeer::ID;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v) {
			$this->employee_no = $v;
			$this->modifiedColumns[] = HrEmployeePeer::EMPLOYEE_NO;
		}

	} 
	
	public function setLastname($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lastname !== $v) {
			$this->lastname = $v;
			$this->modifiedColumns[] = HrEmployeePeer::LASTNAME;
		}

	} 
	
	public function setFirstname($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->firstname !== $v) {
			$this->firstname = $v;
			$this->modifiedColumns[] = HrEmployeePeer::FIRSTNAME;
		}

	} 
	
	public function setMidname($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->midname !== $v) {
			$this->midname = $v;
			$this->modifiedColumns[] = HrEmployeePeer::MIDNAME;
		}

	} 
	
	public function setHrCompanyId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hr_company_id !== $v) {
			$this->hr_company_id = $v;
			$this->modifiedColumns[] = HrEmployeePeer::HR_COMPANY_ID;
		}

	} 
	
	public function setIcNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ic_no !== $v) {
			$this->ic_no = $v;
			$this->modifiedColumns[] = HrEmployeePeer::IC_NO;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = HrEmployeePeer::NAME;
		}

	} 
	
	public function setDateOfBirth($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_of_birth] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_of_birth !== $ts) {
			$this->date_of_birth = $ts;
			$this->modifiedColumns[] = HrEmployeePeer::DATE_OF_BIRTH;
		}

	} 
	
	public function setBirthPlace($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->birth_place !== $v) {
			$this->birth_place = $v;
			$this->modifiedColumns[] = HrEmployeePeer::BIRTH_PLACE;
		}

	} 
	
	public function setBloodType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->blood_type !== $v) {
			$this->blood_type = $v;
			$this->modifiedColumns[] = HrEmployeePeer::BLOOD_TYPE;
		}

	} 
	
	public function setOrganDonor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->organ_donor !== $v) {
			$this->organ_donor = $v;
			$this->modifiedColumns[] = HrEmployeePeer::ORGAN_DONOR;
		}

	} 
	
	public function setStreet($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->street !== $v) {
			$this->street = $v;
			$this->modifiedColumns[] = HrEmployeePeer::STREET;
		}

	} 
	
	public function setBldgRoomNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bldg_room_no !== $v) {
			$this->bldg_room_no = $v;
			$this->modifiedColumns[] = HrEmployeePeer::BLDG_ROOM_NO;
		}

	} 
	
	public function setCity($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->city !== $v) {
			$this->city = $v;
			$this->modifiedColumns[] = HrEmployeePeer::CITY;
		}

	} 
	
	public function setProvince($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->province !== $v) {
			$this->province = $v;
			$this->modifiedColumns[] = HrEmployeePeer::PROVINCE;
		}

	} 
	
	public function setZipCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->zip_code !== $v) {
			$this->zip_code = $v;
			$this->modifiedColumns[] = HrEmployeePeer::ZIP_CODE;
		}

	} 
	
	public function setTelNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tel_no !== $v) {
			$this->tel_no = $v;
			$this->modifiedColumns[] = HrEmployeePeer::TEL_NO;
		}

	} 
	
	public function setCellNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cell_no !== $v) {
			$this->cell_no = $v;
			$this->modifiedColumns[] = HrEmployeePeer::CELL_NO;
		}

	} 
	
	public function setEmailAdd($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email_add !== $v) {
			$this->email_add = $v;
			$this->modifiedColumns[] = HrEmployeePeer::EMAIL_ADD;
		}

	} 
	
	public function setStatus($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->status !== $v) {
			$this->status = $v;
			$this->modifiedColumns[] = HrEmployeePeer::STATUS;
		}

	} 
	
	public function setGender($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->gender !== $v) {
			$this->gender = $v;
			$this->modifiedColumns[] = HrEmployeePeer::GENDER;
		}

	} 
	
	public function setRankCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rank_code !== $v) {
			$this->rank_code = $v;
			$this->modifiedColumns[] = HrEmployeePeer::RANK_CODE;
		}

	} 
	
	public function setJobTitle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->job_title !== $v) {
			$this->job_title = $v;
			$this->modifiedColumns[] = HrEmployeePeer::JOB_TITLE;
		}

	} 
	
	public function setDateHired($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_hired] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_hired !== $ts) {
			$this->date_hired = $ts;
			$this->modifiedColumns[] = HrEmployeePeer::DATE_HIRED;
		}

	} 
	
	public function setBank($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bank !== $v) {
			$this->bank = $v;
			$this->modifiedColumns[] = HrEmployeePeer::BANK;
		}

	} 
	
	public function setAcctNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->acct_no !== $v) {
			$this->acct_no = $v;
			$this->modifiedColumns[] = HrEmployeePeer::ACCT_NO;
		}

	} 
	
	public function setCostCenterCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cost_center_code !== $v) {
			$this->cost_center_code = $v;
			$this->modifiedColumns[] = HrEmployeePeer::COST_CENTER_CODE;
		}

	} 
	
	public function setEmpStatus($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->emp_status !== $v) {
			$this->emp_status = $v;
			$this->modifiedColumns[] = HrEmployeePeer::EMP_STATUS;
		}

	} 
	
	public function setTypeOfEmployment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_of_employment !== $v) {
			$this->type_of_employment = $v;
			$this->modifiedColumns[] = HrEmployeePeer::TYPE_OF_EMPLOYMENT;
		}

	} 
	
	public function setTaxId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tax_id !== $v) {
			$this->tax_id = $v;
			$this->modifiedColumns[] = HrEmployeePeer::TAX_ID;
		}

	} 
	
	public function setSinId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sin_id !== $v) {
			$this->sin_id = $v;
			$this->modifiedColumns[] = HrEmployeePeer::SIN_ID;
		}

	} 
	
	public function setActive($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->active !== $v) {
			$this->active = $v;
			$this->modifiedColumns[] = HrEmployeePeer::ACTIVE;
		}

	} 
	
	public function setPhoto($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->photo !== $v) {
			$this->photo = $v;
			$this->modifiedColumns[] = HrEmployeePeer::PHOTO;
		}

	} 
	
	public function setNameNotified($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_notified !== $v) {
			$this->name_notified = $v;
			$this->modifiedColumns[] = HrEmployeePeer::NAME_NOTIFIED;
		}

	} 
	
	public function setRelation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->relation !== $v) {
			$this->relation = $v;
			$this->modifiedColumns[] = HrEmployeePeer::RELATION;
		}

	} 
	
	public function setAddress($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->address !== $v) {
			$this->address = $v;
			$this->modifiedColumns[] = HrEmployeePeer::ADDRESS;
		}

	} 
	
	public function setContactNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->contact_no !== $v) {
			$this->contact_no = $v;
			$this->modifiedColumns[] = HrEmployeePeer::CONTACT_NO;
		}

	} 
	
	public function setDateResigned($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_resigned] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_resigned !== $ts) {
			$this->date_resigned = $ts;
			$this->modifiedColumns[] = HrEmployeePeer::DATE_RESIGNED;
		}

	} 
	
	public function setFinNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fin_no !== $v) {
			$this->fin_no = $v;
			$this->modifiedColumns[] = HrEmployeePeer::FIN_NO;
		}

	} 
	
	public function setNationality($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nationality !== $v) {
			$this->nationality = $v;
			$this->modifiedColumns[] = HrEmployeePeer::NATIONALITY;
		}

	} 
	
	public function setCommenceDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [commence_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->commence_date !== $ts) {
			$this->commence_date = $ts;
			$this->modifiedColumns[] = HrEmployeePeer::COMMENCE_DATE;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v) {
			$this->type = $v;
			$this->modifiedColumns[] = HrEmployeePeer::TYPE;
		}

	} 
	
	public function setRace($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->race !== $v) {
			$this->race = $v;
			$this->modifiedColumns[] = HrEmployeePeer::RACE;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = HrEmployeePeer::REMARK;
		}

	} 
	
	public function setTeam($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->team !== $v) {
			$this->team = $v;
			$this->modifiedColumns[] = HrEmployeePeer::TEAM;
		}

	} 
	
	public function setPermitNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->permit_no !== $v) {
			$this->permit_no = $v;
			$this->modifiedColumns[] = HrEmployeePeer::PERMIT_NO;
		}

	} 
	
	public function setPermitRenew($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [permit_renew] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->permit_renew !== $ts) {
			$this->permit_renew = $ts;
			$this->modifiedColumns[] = HrEmployeePeer::PERMIT_RENEW;
		}

	} 
	
	public function setPermitExpiry($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [permit_expiry] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->permit_expiry !== $ts) {
			$this->permit_expiry = $ts;
			$this->modifiedColumns[] = HrEmployeePeer::PERMIT_EXPIRY;
		}

	} 
	
	public function setPassportExpiry($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [passport_expiry] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->passport_expiry !== $ts) {
			$this->passport_expiry = $ts;
			$this->modifiedColumns[] = HrEmployeePeer::PASSPORT_EXPIRY;
		}

	} 
	
	public function setEmploymentAs($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employment_as !== $v) {
			$this->employment_as = $v;
			$this->modifiedColumns[] = HrEmployeePeer::EMPLOYMENT_AS;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrEmployeePeer::CREATED_BY;
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
			$this->modifiedColumns[] = HrEmployeePeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrEmployeePeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HrEmployeePeer::DATE_MODIFIED;
		}

	} 
	
	public function setProfession($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->profession !== $v) {
			$this->profession = $v;
			$this->modifiedColumns[] = HrEmployeePeer::PROFESSION;
		}

	} 
	
	public function setMomGroup($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mom_group !== $v) {
			$this->mom_group = $v;
			$this->modifiedColumns[] = HrEmployeePeer::MOM_GROUP;
		}

	} 
	
	public function setLevyTier($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->levy_tier !== $v) {
			$this->levy_tier = $v;
			$this->modifiedColumns[] = HrEmployeePeer::LEVY_TIER;
		}

	} 
	
	public function setAnnualLeave($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->annual_leave !== $v) {
			$this->annual_leave = $v;
			$this->modifiedColumns[] = HrEmployeePeer::ANNUAL_LEAVE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->employee_no = $rs->getString($startcol + 1);

			$this->lastname = $rs->getString($startcol + 2);

			$this->firstname = $rs->getString($startcol + 3);

			$this->midname = $rs->getString($startcol + 4);

			$this->hr_company_id = $rs->getString($startcol + 5);

			$this->ic_no = $rs->getString($startcol + 6);

			$this->name = $rs->getString($startcol + 7);

			$this->date_of_birth = $rs->getDate($startcol + 8, null);

			$this->birth_place = $rs->getString($startcol + 9);

			$this->blood_type = $rs->getString($startcol + 10);

			$this->organ_donor = $rs->getString($startcol + 11);

			$this->street = $rs->getString($startcol + 12);

			$this->bldg_room_no = $rs->getString($startcol + 13);

			$this->city = $rs->getString($startcol + 14);

			$this->province = $rs->getString($startcol + 15);

			$this->zip_code = $rs->getString($startcol + 16);

			$this->tel_no = $rs->getString($startcol + 17);

			$this->cell_no = $rs->getString($startcol + 18);

			$this->email_add = $rs->getString($startcol + 19);

			$this->status = $rs->getString($startcol + 20);

			$this->gender = $rs->getString($startcol + 21);

			$this->rank_code = $rs->getString($startcol + 22);

			$this->job_title = $rs->getString($startcol + 23);

			$this->date_hired = $rs->getDate($startcol + 24, null);

			$this->bank = $rs->getString($startcol + 25);

			$this->acct_no = $rs->getString($startcol + 26);

			$this->cost_center_code = $rs->getString($startcol + 27);

			$this->emp_status = $rs->getString($startcol + 28);

			$this->type_of_employment = $rs->getString($startcol + 29);

			$this->tax_id = $rs->getString($startcol + 30);

			$this->sin_id = $rs->getString($startcol + 31);

			$this->active = $rs->getString($startcol + 32);

			$this->photo = $rs->getString($startcol + 33);

			$this->name_notified = $rs->getString($startcol + 34);

			$this->relation = $rs->getString($startcol + 35);

			$this->address = $rs->getString($startcol + 36);

			$this->contact_no = $rs->getString($startcol + 37);

			$this->date_resigned = $rs->getDate($startcol + 38, null);

			$this->fin_no = $rs->getString($startcol + 39);

			$this->nationality = $rs->getString($startcol + 40);

			$this->commence_date = $rs->getDate($startcol + 41, null);

			$this->type = $rs->getString($startcol + 42);

			$this->race = $rs->getString($startcol + 43);

			$this->remark = $rs->getString($startcol + 44);

			$this->team = $rs->getString($startcol + 45);

			$this->permit_no = $rs->getString($startcol + 46);

			$this->permit_renew = $rs->getDate($startcol + 47, null);

			$this->permit_expiry = $rs->getDate($startcol + 48, null);

			$this->passport_expiry = $rs->getDate($startcol + 49, null);

			$this->employment_as = $rs->getString($startcol + 50);

			$this->created_by = $rs->getString($startcol + 51);

			$this->date_created = $rs->getTimestamp($startcol + 52, null);

			$this->modified_by = $rs->getString($startcol + 53);

			$this->date_modified = $rs->getTimestamp($startcol + 54, null);

			$this->profession = $rs->getString($startcol + 55);

			$this->mom_group = $rs->getString($startcol + 56);

			$this->levy_tier = $rs->getString($startcol + 57);

			$this->annual_leave = $rs->getString($startcol + 58);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 59; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrEmployee object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrEmployeePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrEmployeePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrEmployeePeer::DATABASE_NAME);
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
					$pk = HrEmployeePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrEmployeePeer::doUpdate($this, $con);
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


			if (($retval = HrEmployeePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrEmployeePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getLastname();
				break;
			case 3:
				return $this->getFirstname();
				break;
			case 4:
				return $this->getMidname();
				break;
			case 5:
				return $this->getHrCompanyId();
				break;
			case 6:
				return $this->getIcNo();
				break;
			case 7:
				return $this->getName();
				break;
			case 8:
				return $this->getDateOfBirth();
				break;
			case 9:
				return $this->getBirthPlace();
				break;
			case 10:
				return $this->getBloodType();
				break;
			case 11:
				return $this->getOrganDonor();
				break;
			case 12:
				return $this->getStreet();
				break;
			case 13:
				return $this->getBldgRoomNo();
				break;
			case 14:
				return $this->getCity();
				break;
			case 15:
				return $this->getProvince();
				break;
			case 16:
				return $this->getZipCode();
				break;
			case 17:
				return $this->getTelNo();
				break;
			case 18:
				return $this->getCellNo();
				break;
			case 19:
				return $this->getEmailAdd();
				break;
			case 20:
				return $this->getStatus();
				break;
			case 21:
				return $this->getGender();
				break;
			case 22:
				return $this->getRankCode();
				break;
			case 23:
				return $this->getJobTitle();
				break;
			case 24:
				return $this->getDateHired();
				break;
			case 25:
				return $this->getBank();
				break;
			case 26:
				return $this->getAcctNo();
				break;
			case 27:
				return $this->getCostCenterCode();
				break;
			case 28:
				return $this->getEmpStatus();
				break;
			case 29:
				return $this->getTypeOfEmployment();
				break;
			case 30:
				return $this->getTaxId();
				break;
			case 31:
				return $this->getSinId();
				break;
			case 32:
				return $this->getActive();
				break;
			case 33:
				return $this->getPhoto();
				break;
			case 34:
				return $this->getNameNotified();
				break;
			case 35:
				return $this->getRelation();
				break;
			case 36:
				return $this->getAddress();
				break;
			case 37:
				return $this->getContactNo();
				break;
			case 38:
				return $this->getDateResigned();
				break;
			case 39:
				return $this->getFinNo();
				break;
			case 40:
				return $this->getNationality();
				break;
			case 41:
				return $this->getCommenceDate();
				break;
			case 42:
				return $this->getType();
				break;
			case 43:
				return $this->getRace();
				break;
			case 44:
				return $this->getRemark();
				break;
			case 45:
				return $this->getTeam();
				break;
			case 46:
				return $this->getPermitNo();
				break;
			case 47:
				return $this->getPermitRenew();
				break;
			case 48:
				return $this->getPermitExpiry();
				break;
			case 49:
				return $this->getPassportExpiry();
				break;
			case 50:
				return $this->getEmploymentAs();
				break;
			case 51:
				return $this->getCreatedBy();
				break;
			case 52:
				return $this->getDateCreated();
				break;
			case 53:
				return $this->getModifiedBy();
				break;
			case 54:
				return $this->getDateModified();
				break;
			case 55:
				return $this->getProfession();
				break;
			case 56:
				return $this->getMomGroup();
				break;
			case 57:
				return $this->getLevyTier();
				break;
			case 58:
				return $this->getAnnualLeave();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrEmployeePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEmployeeNo(),
			$keys[2] => $this->getLastname(),
			$keys[3] => $this->getFirstname(),
			$keys[4] => $this->getMidname(),
			$keys[5] => $this->getHrCompanyId(),
			$keys[6] => $this->getIcNo(),
			$keys[7] => $this->getName(),
			$keys[8] => $this->getDateOfBirth(),
			$keys[9] => $this->getBirthPlace(),
			$keys[10] => $this->getBloodType(),
			$keys[11] => $this->getOrganDonor(),
			$keys[12] => $this->getStreet(),
			$keys[13] => $this->getBldgRoomNo(),
			$keys[14] => $this->getCity(),
			$keys[15] => $this->getProvince(),
			$keys[16] => $this->getZipCode(),
			$keys[17] => $this->getTelNo(),
			$keys[18] => $this->getCellNo(),
			$keys[19] => $this->getEmailAdd(),
			$keys[20] => $this->getStatus(),
			$keys[21] => $this->getGender(),
			$keys[22] => $this->getRankCode(),
			$keys[23] => $this->getJobTitle(),
			$keys[24] => $this->getDateHired(),
			$keys[25] => $this->getBank(),
			$keys[26] => $this->getAcctNo(),
			$keys[27] => $this->getCostCenterCode(),
			$keys[28] => $this->getEmpStatus(),
			$keys[29] => $this->getTypeOfEmployment(),
			$keys[30] => $this->getTaxId(),
			$keys[31] => $this->getSinId(),
			$keys[32] => $this->getActive(),
			$keys[33] => $this->getPhoto(),
			$keys[34] => $this->getNameNotified(),
			$keys[35] => $this->getRelation(),
			$keys[36] => $this->getAddress(),
			$keys[37] => $this->getContactNo(),
			$keys[38] => $this->getDateResigned(),
			$keys[39] => $this->getFinNo(),
			$keys[40] => $this->getNationality(),
			$keys[41] => $this->getCommenceDate(),
			$keys[42] => $this->getType(),
			$keys[43] => $this->getRace(),
			$keys[44] => $this->getRemark(),
			$keys[45] => $this->getTeam(),
			$keys[46] => $this->getPermitNo(),
			$keys[47] => $this->getPermitRenew(),
			$keys[48] => $this->getPermitExpiry(),
			$keys[49] => $this->getPassportExpiry(),
			$keys[50] => $this->getEmploymentAs(),
			$keys[51] => $this->getCreatedBy(),
			$keys[52] => $this->getDateCreated(),
			$keys[53] => $this->getModifiedBy(),
			$keys[54] => $this->getDateModified(),
			$keys[55] => $this->getProfession(),
			$keys[56] => $this->getMomGroup(),
			$keys[57] => $this->getLevyTier(),
			$keys[58] => $this->getAnnualLeave(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrEmployeePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setLastname($value);
				break;
			case 3:
				$this->setFirstname($value);
				break;
			case 4:
				$this->setMidname($value);
				break;
			case 5:
				$this->setHrCompanyId($value);
				break;
			case 6:
				$this->setIcNo($value);
				break;
			case 7:
				$this->setName($value);
				break;
			case 8:
				$this->setDateOfBirth($value);
				break;
			case 9:
				$this->setBirthPlace($value);
				break;
			case 10:
				$this->setBloodType($value);
				break;
			case 11:
				$this->setOrganDonor($value);
				break;
			case 12:
				$this->setStreet($value);
				break;
			case 13:
				$this->setBldgRoomNo($value);
				break;
			case 14:
				$this->setCity($value);
				break;
			case 15:
				$this->setProvince($value);
				break;
			case 16:
				$this->setZipCode($value);
				break;
			case 17:
				$this->setTelNo($value);
				break;
			case 18:
				$this->setCellNo($value);
				break;
			case 19:
				$this->setEmailAdd($value);
				break;
			case 20:
				$this->setStatus($value);
				break;
			case 21:
				$this->setGender($value);
				break;
			case 22:
				$this->setRankCode($value);
				break;
			case 23:
				$this->setJobTitle($value);
				break;
			case 24:
				$this->setDateHired($value);
				break;
			case 25:
				$this->setBank($value);
				break;
			case 26:
				$this->setAcctNo($value);
				break;
			case 27:
				$this->setCostCenterCode($value);
				break;
			case 28:
				$this->setEmpStatus($value);
				break;
			case 29:
				$this->setTypeOfEmployment($value);
				break;
			case 30:
				$this->setTaxId($value);
				break;
			case 31:
				$this->setSinId($value);
				break;
			case 32:
				$this->setActive($value);
				break;
			case 33:
				$this->setPhoto($value);
				break;
			case 34:
				$this->setNameNotified($value);
				break;
			case 35:
				$this->setRelation($value);
				break;
			case 36:
				$this->setAddress($value);
				break;
			case 37:
				$this->setContactNo($value);
				break;
			case 38:
				$this->setDateResigned($value);
				break;
			case 39:
				$this->setFinNo($value);
				break;
			case 40:
				$this->setNationality($value);
				break;
			case 41:
				$this->setCommenceDate($value);
				break;
			case 42:
				$this->setType($value);
				break;
			case 43:
				$this->setRace($value);
				break;
			case 44:
				$this->setRemark($value);
				break;
			case 45:
				$this->setTeam($value);
				break;
			case 46:
				$this->setPermitNo($value);
				break;
			case 47:
				$this->setPermitRenew($value);
				break;
			case 48:
				$this->setPermitExpiry($value);
				break;
			case 49:
				$this->setPassportExpiry($value);
				break;
			case 50:
				$this->setEmploymentAs($value);
				break;
			case 51:
				$this->setCreatedBy($value);
				break;
			case 52:
				$this->setDateCreated($value);
				break;
			case 53:
				$this->setModifiedBy($value);
				break;
			case 54:
				$this->setDateModified($value);
				break;
			case 55:
				$this->setProfession($value);
				break;
			case 56:
				$this->setMomGroup($value);
				break;
			case 57:
				$this->setLevyTier($value);
				break;
			case 58:
				$this->setAnnualLeave($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrEmployeePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEmployeeNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setLastname($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFirstname($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setMidname($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setHrCompanyId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setIcNo($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setName($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateOfBirth($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setBirthPlace($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setBloodType($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setOrganDonor($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setStreet($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setBldgRoomNo($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCity($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setProvince($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setZipCode($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setTelNo($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setCellNo($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setEmailAdd($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setStatus($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setGender($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setRankCode($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setJobTitle($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setDateHired($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setBank($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setAcctNo($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setCostCenterCode($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setEmpStatus($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setTypeOfEmployment($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setTaxId($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setSinId($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setActive($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setPhoto($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setNameNotified($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setRelation($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setAddress($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setContactNo($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setDateResigned($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setFinNo($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setNationality($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setCommenceDate($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setType($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setRace($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setRemark($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setTeam($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setPermitNo($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setPermitRenew($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setPermitExpiry($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setPassportExpiry($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setEmploymentAs($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setCreatedBy($arr[$keys[51]]);
		if (array_key_exists($keys[52], $arr)) $this->setDateCreated($arr[$keys[52]]);
		if (array_key_exists($keys[53], $arr)) $this->setModifiedBy($arr[$keys[53]]);
		if (array_key_exists($keys[54], $arr)) $this->setDateModified($arr[$keys[54]]);
		if (array_key_exists($keys[55], $arr)) $this->setProfession($arr[$keys[55]]);
		if (array_key_exists($keys[56], $arr)) $this->setMomGroup($arr[$keys[56]]);
		if (array_key_exists($keys[57], $arr)) $this->setLevyTier($arr[$keys[57]]);
		if (array_key_exists($keys[58], $arr)) $this->setAnnualLeave($arr[$keys[58]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrEmployeePeer::DATABASE_NAME);

		if ($this->isColumnModified(HrEmployeePeer::ID)) $criteria->add(HrEmployeePeer::ID, $this->id);
		if ($this->isColumnModified(HrEmployeePeer::EMPLOYEE_NO)) $criteria->add(HrEmployeePeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(HrEmployeePeer::LASTNAME)) $criteria->add(HrEmployeePeer::LASTNAME, $this->lastname);
		if ($this->isColumnModified(HrEmployeePeer::FIRSTNAME)) $criteria->add(HrEmployeePeer::FIRSTNAME, $this->firstname);
		if ($this->isColumnModified(HrEmployeePeer::MIDNAME)) $criteria->add(HrEmployeePeer::MIDNAME, $this->midname);
		if ($this->isColumnModified(HrEmployeePeer::HR_COMPANY_ID)) $criteria->add(HrEmployeePeer::HR_COMPANY_ID, $this->hr_company_id);
		if ($this->isColumnModified(HrEmployeePeer::IC_NO)) $criteria->add(HrEmployeePeer::IC_NO, $this->ic_no);
		if ($this->isColumnModified(HrEmployeePeer::NAME)) $criteria->add(HrEmployeePeer::NAME, $this->name);
		if ($this->isColumnModified(HrEmployeePeer::DATE_OF_BIRTH)) $criteria->add(HrEmployeePeer::DATE_OF_BIRTH, $this->date_of_birth);
		if ($this->isColumnModified(HrEmployeePeer::BIRTH_PLACE)) $criteria->add(HrEmployeePeer::BIRTH_PLACE, $this->birth_place);
		if ($this->isColumnModified(HrEmployeePeer::BLOOD_TYPE)) $criteria->add(HrEmployeePeer::BLOOD_TYPE, $this->blood_type);
		if ($this->isColumnModified(HrEmployeePeer::ORGAN_DONOR)) $criteria->add(HrEmployeePeer::ORGAN_DONOR, $this->organ_donor);
		if ($this->isColumnModified(HrEmployeePeer::STREET)) $criteria->add(HrEmployeePeer::STREET, $this->street);
		if ($this->isColumnModified(HrEmployeePeer::BLDG_ROOM_NO)) $criteria->add(HrEmployeePeer::BLDG_ROOM_NO, $this->bldg_room_no);
		if ($this->isColumnModified(HrEmployeePeer::CITY)) $criteria->add(HrEmployeePeer::CITY, $this->city);
		if ($this->isColumnModified(HrEmployeePeer::PROVINCE)) $criteria->add(HrEmployeePeer::PROVINCE, $this->province);
		if ($this->isColumnModified(HrEmployeePeer::ZIP_CODE)) $criteria->add(HrEmployeePeer::ZIP_CODE, $this->zip_code);
		if ($this->isColumnModified(HrEmployeePeer::TEL_NO)) $criteria->add(HrEmployeePeer::TEL_NO, $this->tel_no);
		if ($this->isColumnModified(HrEmployeePeer::CELL_NO)) $criteria->add(HrEmployeePeer::CELL_NO, $this->cell_no);
		if ($this->isColumnModified(HrEmployeePeer::EMAIL_ADD)) $criteria->add(HrEmployeePeer::EMAIL_ADD, $this->email_add);
		if ($this->isColumnModified(HrEmployeePeer::STATUS)) $criteria->add(HrEmployeePeer::STATUS, $this->status);
		if ($this->isColumnModified(HrEmployeePeer::GENDER)) $criteria->add(HrEmployeePeer::GENDER, $this->gender);
		if ($this->isColumnModified(HrEmployeePeer::RANK_CODE)) $criteria->add(HrEmployeePeer::RANK_CODE, $this->rank_code);
		if ($this->isColumnModified(HrEmployeePeer::JOB_TITLE)) $criteria->add(HrEmployeePeer::JOB_TITLE, $this->job_title);
		if ($this->isColumnModified(HrEmployeePeer::DATE_HIRED)) $criteria->add(HrEmployeePeer::DATE_HIRED, $this->date_hired);
		if ($this->isColumnModified(HrEmployeePeer::BANK)) $criteria->add(HrEmployeePeer::BANK, $this->bank);
		if ($this->isColumnModified(HrEmployeePeer::ACCT_NO)) $criteria->add(HrEmployeePeer::ACCT_NO, $this->acct_no);
		if ($this->isColumnModified(HrEmployeePeer::COST_CENTER_CODE)) $criteria->add(HrEmployeePeer::COST_CENTER_CODE, $this->cost_center_code);
		if ($this->isColumnModified(HrEmployeePeer::EMP_STATUS)) $criteria->add(HrEmployeePeer::EMP_STATUS, $this->emp_status);
		if ($this->isColumnModified(HrEmployeePeer::TYPE_OF_EMPLOYMENT)) $criteria->add(HrEmployeePeer::TYPE_OF_EMPLOYMENT, $this->type_of_employment);
		if ($this->isColumnModified(HrEmployeePeer::TAX_ID)) $criteria->add(HrEmployeePeer::TAX_ID, $this->tax_id);
		if ($this->isColumnModified(HrEmployeePeer::SIN_ID)) $criteria->add(HrEmployeePeer::SIN_ID, $this->sin_id);
		if ($this->isColumnModified(HrEmployeePeer::ACTIVE)) $criteria->add(HrEmployeePeer::ACTIVE, $this->active);
		if ($this->isColumnModified(HrEmployeePeer::PHOTO)) $criteria->add(HrEmployeePeer::PHOTO, $this->photo);
		if ($this->isColumnModified(HrEmployeePeer::NAME_NOTIFIED)) $criteria->add(HrEmployeePeer::NAME_NOTIFIED, $this->name_notified);
		if ($this->isColumnModified(HrEmployeePeer::RELATION)) $criteria->add(HrEmployeePeer::RELATION, $this->relation);
		if ($this->isColumnModified(HrEmployeePeer::ADDRESS)) $criteria->add(HrEmployeePeer::ADDRESS, $this->address);
		if ($this->isColumnModified(HrEmployeePeer::CONTACT_NO)) $criteria->add(HrEmployeePeer::CONTACT_NO, $this->contact_no);
		if ($this->isColumnModified(HrEmployeePeer::DATE_RESIGNED)) $criteria->add(HrEmployeePeer::DATE_RESIGNED, $this->date_resigned);
		if ($this->isColumnModified(HrEmployeePeer::FIN_NO)) $criteria->add(HrEmployeePeer::FIN_NO, $this->fin_no);
		if ($this->isColumnModified(HrEmployeePeer::NATIONALITY)) $criteria->add(HrEmployeePeer::NATIONALITY, $this->nationality);
		if ($this->isColumnModified(HrEmployeePeer::COMMENCE_DATE)) $criteria->add(HrEmployeePeer::COMMENCE_DATE, $this->commence_date);
		if ($this->isColumnModified(HrEmployeePeer::TYPE)) $criteria->add(HrEmployeePeer::TYPE, $this->type);
		if ($this->isColumnModified(HrEmployeePeer::RACE)) $criteria->add(HrEmployeePeer::RACE, $this->race);
		if ($this->isColumnModified(HrEmployeePeer::REMARK)) $criteria->add(HrEmployeePeer::REMARK, $this->remark);
		if ($this->isColumnModified(HrEmployeePeer::TEAM)) $criteria->add(HrEmployeePeer::TEAM, $this->team);
		if ($this->isColumnModified(HrEmployeePeer::PERMIT_NO)) $criteria->add(HrEmployeePeer::PERMIT_NO, $this->permit_no);
		if ($this->isColumnModified(HrEmployeePeer::PERMIT_RENEW)) $criteria->add(HrEmployeePeer::PERMIT_RENEW, $this->permit_renew);
		if ($this->isColumnModified(HrEmployeePeer::PERMIT_EXPIRY)) $criteria->add(HrEmployeePeer::PERMIT_EXPIRY, $this->permit_expiry);
		if ($this->isColumnModified(HrEmployeePeer::PASSPORT_EXPIRY)) $criteria->add(HrEmployeePeer::PASSPORT_EXPIRY, $this->passport_expiry);
		if ($this->isColumnModified(HrEmployeePeer::EMPLOYMENT_AS)) $criteria->add(HrEmployeePeer::EMPLOYMENT_AS, $this->employment_as);
		if ($this->isColumnModified(HrEmployeePeer::CREATED_BY)) $criteria->add(HrEmployeePeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrEmployeePeer::DATE_CREATED)) $criteria->add(HrEmployeePeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrEmployeePeer::MODIFIED_BY)) $criteria->add(HrEmployeePeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrEmployeePeer::DATE_MODIFIED)) $criteria->add(HrEmployeePeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(HrEmployeePeer::PROFESSION)) $criteria->add(HrEmployeePeer::PROFESSION, $this->profession);
		if ($this->isColumnModified(HrEmployeePeer::MOM_GROUP)) $criteria->add(HrEmployeePeer::MOM_GROUP, $this->mom_group);
		if ($this->isColumnModified(HrEmployeePeer::LEVY_TIER)) $criteria->add(HrEmployeePeer::LEVY_TIER, $this->levy_tier);
		if ($this->isColumnModified(HrEmployeePeer::ANNUAL_LEAVE)) $criteria->add(HrEmployeePeer::ANNUAL_LEAVE, $this->annual_leave);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrEmployeePeer::DATABASE_NAME);

		$criteria->add(HrEmployeePeer::ID, $this->id);

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

		$copyObj->setLastname($this->lastname);

		$copyObj->setFirstname($this->firstname);

		$copyObj->setMidname($this->midname);

		$copyObj->setHrCompanyId($this->hr_company_id);

		$copyObj->setIcNo($this->ic_no);

		$copyObj->setName($this->name);

		$copyObj->setDateOfBirth($this->date_of_birth);

		$copyObj->setBirthPlace($this->birth_place);

		$copyObj->setBloodType($this->blood_type);

		$copyObj->setOrganDonor($this->organ_donor);

		$copyObj->setStreet($this->street);

		$copyObj->setBldgRoomNo($this->bldg_room_no);

		$copyObj->setCity($this->city);

		$copyObj->setProvince($this->province);

		$copyObj->setZipCode($this->zip_code);

		$copyObj->setTelNo($this->tel_no);

		$copyObj->setCellNo($this->cell_no);

		$copyObj->setEmailAdd($this->email_add);

		$copyObj->setStatus($this->status);

		$copyObj->setGender($this->gender);

		$copyObj->setRankCode($this->rank_code);

		$copyObj->setJobTitle($this->job_title);

		$copyObj->setDateHired($this->date_hired);

		$copyObj->setBank($this->bank);

		$copyObj->setAcctNo($this->acct_no);

		$copyObj->setCostCenterCode($this->cost_center_code);

		$copyObj->setEmpStatus($this->emp_status);

		$copyObj->setTypeOfEmployment($this->type_of_employment);

		$copyObj->setTaxId($this->tax_id);

		$copyObj->setSinId($this->sin_id);

		$copyObj->setActive($this->active);

		$copyObj->setPhoto($this->photo);

		$copyObj->setNameNotified($this->name_notified);

		$copyObj->setRelation($this->relation);

		$copyObj->setAddress($this->address);

		$copyObj->setContactNo($this->contact_no);

		$copyObj->setDateResigned($this->date_resigned);

		$copyObj->setFinNo($this->fin_no);

		$copyObj->setNationality($this->nationality);

		$copyObj->setCommenceDate($this->commence_date);

		$copyObj->setType($this->type);

		$copyObj->setRace($this->race);

		$copyObj->setRemark($this->remark);

		$copyObj->setTeam($this->team);

		$copyObj->setPermitNo($this->permit_no);

		$copyObj->setPermitRenew($this->permit_renew);

		$copyObj->setPermitExpiry($this->permit_expiry);

		$copyObj->setPassportExpiry($this->passport_expiry);

		$copyObj->setEmploymentAs($this->employment_as);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateModified($this->date_modified);

		$copyObj->setProfession($this->profession);

		$copyObj->setMomGroup($this->mom_group);

		$copyObj->setLevyTier($this->levy_tier);

		$copyObj->setAnnualLeave($this->annual_leave);


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
			self::$peer = new HrEmployeePeer();
		}
		return self::$peer;
	}

} 
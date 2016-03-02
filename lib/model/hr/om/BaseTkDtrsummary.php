<?php


abstract class BaseTkDtrsummary extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $employee_no;


	
	protected $name;


	
	protected $trans_date;


	
	protected $multiplier;


	
	protected $attendance = 'P';


	
	protected $holiday_code;


	
	protected $leave_type;


	
	protected $dayoff;


	
	protected $overtimes;


	
	protected $extra_ot_pay;


	
	protected $extra_ot;


	
	protected $normal;


	
	protected $undertime;


	
	protected $duration = 0;


	
	protected $income_prepost_batch;


	
	protected $deduction_prepost_batch;


	
	protected $posted_amount;


	
	protected $meal;


	
	protected $allowance;


	
	protected $levy;


	
	protected $income_deduction;


	
	protected $is_posted = '';


	
	protected $posted_date;


	
	protected $ac_dura;


	
	protected $part_time_income;


	
	protected $rate_per_hour;


	
	protected $team;


	
	protected $unedited_duration;


	
	protected $created_by;


	
	protected $date_created;


	
	protected $modified_by;


	
	protected $tk_attendance_id;


	
	protected $hr_employee_leave_id;


	
	protected $hr_holiday_id;


	
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

	
	public function getTransDate($format = 'Y-m-d')
	{

		if ($this->trans_date === null || $this->trans_date === '') {
			return null;
		} elseif (!is_int($this->trans_date)) {
						$ts = strtotime($this->trans_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [trans_date] as date/time value: " . var_export($this->trans_date, true));
			}
		} else {
			$ts = $this->trans_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getMultiplier()
	{

		return $this->multiplier;
	}

	
	public function getAttendance()
	{

		return $this->attendance;
	}

	
	public function getHolidayCode()
	{

		return $this->holiday_code;
	}

	
	public function getLeaveType()
	{

		return $this->leave_type;
	}

	
	public function getDayoff()
	{

		return $this->dayoff;
	}

	
	public function getOvertimes()
	{

		return $this->overtimes;
	}

	
	public function getExtraOtPay()
	{

		return $this->extra_ot_pay;
	}

	
	public function getExtraOt()
	{

		return $this->extra_ot;
	}

	
	public function getNormal()
	{

		return $this->normal;
	}

	
	public function getUndertime()
	{

		return $this->undertime;
	}

	
	public function getDuration()
	{

		return $this->duration;
	}

	
	public function getIncomePrepostBatch()
	{

		return $this->income_prepost_batch;
	}

	
	public function getDeductionPrepostBatch()
	{

		return $this->deduction_prepost_batch;
	}

	
	public function getPostedAmount()
	{

		return $this->posted_amount;
	}

	
	public function getMeal()
	{

		return $this->meal;
	}

	
	public function getAllowance()
	{

		return $this->allowance;
	}

	
	public function getLevy()
	{

		return $this->levy;
	}

	
	public function getIncomeDeduction()
	{

		return $this->income_deduction;
	}

	
	public function getIsPosted()
	{

		return $this->is_posted;
	}

	
	public function getPostedDate($format = 'Y-m-d H:i:s')
	{

		if ($this->posted_date === null || $this->posted_date === '') {
			return null;
		} elseif (!is_int($this->posted_date)) {
						$ts = strtotime($this->posted_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [posted_date] as date/time value: " . var_export($this->posted_date, true));
			}
		} else {
			$ts = $this->posted_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getAcDura()
	{

		return $this->ac_dura;
	}

	
	public function getPartTimeIncome()
	{

		return $this->part_time_income;
	}

	
	public function getRatePerHour()
	{

		return $this->rate_per_hour;
	}

	
	public function getTeam()
	{

		return $this->team;
	}

	
	public function getUneditedDuration()
	{

		return $this->unedited_duration;
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

	
	public function getTkAttendanceId()
	{

		return $this->tk_attendance_id;
	}

	
	public function getHrEmployeeLeaveId()
	{

		return $this->hr_employee_leave_id;
	}

	
	public function getHrHolidayId()
	{

		return $this->hr_holiday_id;
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
			$this->modifiedColumns[] = TkDtrsummaryPeer::ID;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v) {
			$this->employee_no = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::EMPLOYEE_NO;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::NAME;
		}

	} 
	
	public function setTransDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [trans_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->trans_date !== $ts) {
			$this->trans_date = $ts;
			$this->modifiedColumns[] = TkDtrsummaryPeer::TRANS_DATE;
		}

	} 
	
	public function setMultiplier($v)
	{

		if ($this->multiplier !== $v) {
			$this->multiplier = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::MULTIPLIER;
		}

	} 
	
	public function setAttendance($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->attendance !== $v || $v === 'P') {
			$this->attendance = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::ATTENDANCE;
		}

	} 
	
	public function setHolidayCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->holiday_code !== $v) {
			$this->holiday_code = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::HOLIDAY_CODE;
		}

	} 
	
	public function setLeaveType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->leave_type !== $v) {
			$this->leave_type = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::LEAVE_TYPE;
		}

	} 
	
	public function setDayoff($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dayoff !== $v) {
			$this->dayoff = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::DAYOFF;
		}

	} 
	
	public function setOvertimes($v)
	{

		if ($this->overtimes !== $v) {
			$this->overtimes = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::OVERTIMES;
		}

	} 
	
	public function setExtraOtPay($v)
	{

		if ($this->extra_ot_pay !== $v) {
			$this->extra_ot_pay = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::EXTRA_OT_PAY;
		}

	} 
	
	public function setExtraOt($v)
	{

		if ($this->extra_ot !== $v) {
			$this->extra_ot = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::EXTRA_OT;
		}

	} 
	
	public function setNormal($v)
	{

		if ($this->normal !== $v) {
			$this->normal = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::NORMAL;
		}

	} 
	
	public function setUndertime($v)
	{

		if ($this->undertime !== $v) {
			$this->undertime = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::UNDERTIME;
		}

	} 
	
	public function setDuration($v)
	{

		if ($this->duration !== $v || $v === 0) {
			$this->duration = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::DURATION;
		}

	} 
	
	public function setIncomePrepostBatch($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->income_prepost_batch !== $v) {
			$this->income_prepost_batch = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::INCOME_PREPOST_BATCH;
		}

	} 
	
	public function setDeductionPrepostBatch($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->deduction_prepost_batch !== $v) {
			$this->deduction_prepost_batch = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::DEDUCTION_PREPOST_BATCH;
		}

	} 
	
	public function setPostedAmount($v)
	{

		if ($this->posted_amount !== $v) {
			$this->posted_amount = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::POSTED_AMOUNT;
		}

	} 
	
	public function setMeal($v)
	{

		if ($this->meal !== $v) {
			$this->meal = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::MEAL;
		}

	} 
	
	public function setAllowance($v)
	{

		if ($this->allowance !== $v) {
			$this->allowance = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::ALLOWANCE;
		}

	} 
	
	public function setLevy($v)
	{

		if ($this->levy !== $v) {
			$this->levy = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::LEVY;
		}

	} 
	
	public function setIncomeDeduction($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->income_deduction !== $v) {
			$this->income_deduction = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::INCOME_DEDUCTION;
		}

	} 
	
	public function setIsPosted($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->is_posted !== $v || $v === '') {
			$this->is_posted = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::IS_POSTED;
		}

	} 
	
	public function setPostedDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [posted_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->posted_date !== $ts) {
			$this->posted_date = $ts;
			$this->modifiedColumns[] = TkDtrsummaryPeer::POSTED_DATE;
		}

	} 
	
	public function setAcDura($v)
	{

		if ($this->ac_dura !== $v) {
			$this->ac_dura = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::AC_DURA;
		}

	} 
	
	public function setPartTimeIncome($v)
	{

		if ($this->part_time_income !== $v) {
			$this->part_time_income = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::PART_TIME_INCOME;
		}

	} 
	
	public function setRatePerHour($v)
	{

		if ($this->rate_per_hour !== $v) {
			$this->rate_per_hour = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::RATE_PER_HOUR;
		}

	} 
	
	public function setTeam($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->team !== $v) {
			$this->team = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::TEAM;
		}

	} 
	
	public function setUneditedDuration($v)
	{

		if ($this->unedited_duration !== $v) {
			$this->unedited_duration = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::UNEDITED_DURATION;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::CREATED_BY;
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
			$this->modifiedColumns[] = TkDtrsummaryPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::MODIFIED_BY;
		}

	} 
	
	public function setTkAttendanceId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tk_attendance_id !== $v) {
			$this->tk_attendance_id = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::TK_ATTENDANCE_ID;
		}

	} 
	
	public function setHrEmployeeLeaveId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hr_employee_leave_id !== $v) {
			$this->hr_employee_leave_id = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::HR_EMPLOYEE_LEAVE_ID;
		}

	} 
	
	public function setHrHolidayId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hr_holiday_id !== $v) {
			$this->hr_holiday_id = $v;
			$this->modifiedColumns[] = TkDtrsummaryPeer::HR_HOLIDAY_ID;
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
			$this->modifiedColumns[] = TkDtrsummaryPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->employee_no = $rs->getString($startcol + 1);

			$this->name = $rs->getString($startcol + 2);

			$this->trans_date = $rs->getDate($startcol + 3, null);

			$this->multiplier = $rs->getFloat($startcol + 4);

			$this->attendance = $rs->getString($startcol + 5);

			$this->holiday_code = $rs->getString($startcol + 6);

			$this->leave_type = $rs->getString($startcol + 7);

			$this->dayoff = $rs->getString($startcol + 8);

			$this->overtimes = $rs->getFloat($startcol + 9);

			$this->extra_ot_pay = $rs->getFloat($startcol + 10);

			$this->extra_ot = $rs->getFloat($startcol + 11);

			$this->normal = $rs->getFloat($startcol + 12);

			$this->undertime = $rs->getFloat($startcol + 13);

			$this->duration = $rs->getFloat($startcol + 14);

			$this->income_prepost_batch = $rs->getString($startcol + 15);

			$this->deduction_prepost_batch = $rs->getString($startcol + 16);

			$this->posted_amount = $rs->getFloat($startcol + 17);

			$this->meal = $rs->getFloat($startcol + 18);

			$this->allowance = $rs->getFloat($startcol + 19);

			$this->levy = $rs->getFloat($startcol + 20);

			$this->income_deduction = $rs->getString($startcol + 21);

			$this->is_posted = $rs->getString($startcol + 22);

			$this->posted_date = $rs->getTimestamp($startcol + 23, null);

			$this->ac_dura = $rs->getFloat($startcol + 24);

			$this->part_time_income = $rs->getFloat($startcol + 25);

			$this->rate_per_hour = $rs->getFloat($startcol + 26);

			$this->team = $rs->getString($startcol + 27);

			$this->unedited_duration = $rs->getFloat($startcol + 28);

			$this->created_by = $rs->getString($startcol + 29);

			$this->date_created = $rs->getTimestamp($startcol + 30, null);

			$this->modified_by = $rs->getString($startcol + 31);

			$this->tk_attendance_id = $rs->getString($startcol + 32);

			$this->hr_employee_leave_id = $rs->getString($startcol + 33);

			$this->hr_holiday_id = $rs->getString($startcol + 34);

			$this->date_modified = $rs->getTimestamp($startcol + 35, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 36; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TkDtrsummary object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TkDtrsummaryPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TkDtrsummaryPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TkDtrsummaryPeer::DATABASE_NAME);
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
					$pk = TkDtrsummaryPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TkDtrsummaryPeer::doUpdate($this, $con);
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


			if (($retval = TkDtrsummaryPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TkDtrsummaryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTransDate();
				break;
			case 4:
				return $this->getMultiplier();
				break;
			case 5:
				return $this->getAttendance();
				break;
			case 6:
				return $this->getHolidayCode();
				break;
			case 7:
				return $this->getLeaveType();
				break;
			case 8:
				return $this->getDayoff();
				break;
			case 9:
				return $this->getOvertimes();
				break;
			case 10:
				return $this->getExtraOtPay();
				break;
			case 11:
				return $this->getExtraOt();
				break;
			case 12:
				return $this->getNormal();
				break;
			case 13:
				return $this->getUndertime();
				break;
			case 14:
				return $this->getDuration();
				break;
			case 15:
				return $this->getIncomePrepostBatch();
				break;
			case 16:
				return $this->getDeductionPrepostBatch();
				break;
			case 17:
				return $this->getPostedAmount();
				break;
			case 18:
				return $this->getMeal();
				break;
			case 19:
				return $this->getAllowance();
				break;
			case 20:
				return $this->getLevy();
				break;
			case 21:
				return $this->getIncomeDeduction();
				break;
			case 22:
				return $this->getIsPosted();
				break;
			case 23:
				return $this->getPostedDate();
				break;
			case 24:
				return $this->getAcDura();
				break;
			case 25:
				return $this->getPartTimeIncome();
				break;
			case 26:
				return $this->getRatePerHour();
				break;
			case 27:
				return $this->getTeam();
				break;
			case 28:
				return $this->getUneditedDuration();
				break;
			case 29:
				return $this->getCreatedBy();
				break;
			case 30:
				return $this->getDateCreated();
				break;
			case 31:
				return $this->getModifiedBy();
				break;
			case 32:
				return $this->getTkAttendanceId();
				break;
			case 33:
				return $this->getHrEmployeeLeaveId();
				break;
			case 34:
				return $this->getHrHolidayId();
				break;
			case 35:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TkDtrsummaryPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEmployeeNo(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getTransDate(),
			$keys[4] => $this->getMultiplier(),
			$keys[5] => $this->getAttendance(),
			$keys[6] => $this->getHolidayCode(),
			$keys[7] => $this->getLeaveType(),
			$keys[8] => $this->getDayoff(),
			$keys[9] => $this->getOvertimes(),
			$keys[10] => $this->getExtraOtPay(),
			$keys[11] => $this->getExtraOt(),
			$keys[12] => $this->getNormal(),
			$keys[13] => $this->getUndertime(),
			$keys[14] => $this->getDuration(),
			$keys[15] => $this->getIncomePrepostBatch(),
			$keys[16] => $this->getDeductionPrepostBatch(),
			$keys[17] => $this->getPostedAmount(),
			$keys[18] => $this->getMeal(),
			$keys[19] => $this->getAllowance(),
			$keys[20] => $this->getLevy(),
			$keys[21] => $this->getIncomeDeduction(),
			$keys[22] => $this->getIsPosted(),
			$keys[23] => $this->getPostedDate(),
			$keys[24] => $this->getAcDura(),
			$keys[25] => $this->getPartTimeIncome(),
			$keys[26] => $this->getRatePerHour(),
			$keys[27] => $this->getTeam(),
			$keys[28] => $this->getUneditedDuration(),
			$keys[29] => $this->getCreatedBy(),
			$keys[30] => $this->getDateCreated(),
			$keys[31] => $this->getModifiedBy(),
			$keys[32] => $this->getTkAttendanceId(),
			$keys[33] => $this->getHrEmployeeLeaveId(),
			$keys[34] => $this->getHrHolidayId(),
			$keys[35] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TkDtrsummaryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTransDate($value);
				break;
			case 4:
				$this->setMultiplier($value);
				break;
			case 5:
				$this->setAttendance($value);
				break;
			case 6:
				$this->setHolidayCode($value);
				break;
			case 7:
				$this->setLeaveType($value);
				break;
			case 8:
				$this->setDayoff($value);
				break;
			case 9:
				$this->setOvertimes($value);
				break;
			case 10:
				$this->setExtraOtPay($value);
				break;
			case 11:
				$this->setExtraOt($value);
				break;
			case 12:
				$this->setNormal($value);
				break;
			case 13:
				$this->setUndertime($value);
				break;
			case 14:
				$this->setDuration($value);
				break;
			case 15:
				$this->setIncomePrepostBatch($value);
				break;
			case 16:
				$this->setDeductionPrepostBatch($value);
				break;
			case 17:
				$this->setPostedAmount($value);
				break;
			case 18:
				$this->setMeal($value);
				break;
			case 19:
				$this->setAllowance($value);
				break;
			case 20:
				$this->setLevy($value);
				break;
			case 21:
				$this->setIncomeDeduction($value);
				break;
			case 22:
				$this->setIsPosted($value);
				break;
			case 23:
				$this->setPostedDate($value);
				break;
			case 24:
				$this->setAcDura($value);
				break;
			case 25:
				$this->setPartTimeIncome($value);
				break;
			case 26:
				$this->setRatePerHour($value);
				break;
			case 27:
				$this->setTeam($value);
				break;
			case 28:
				$this->setUneditedDuration($value);
				break;
			case 29:
				$this->setCreatedBy($value);
				break;
			case 30:
				$this->setDateCreated($value);
				break;
			case 31:
				$this->setModifiedBy($value);
				break;
			case 32:
				$this->setTkAttendanceId($value);
				break;
			case 33:
				$this->setHrEmployeeLeaveId($value);
				break;
			case 34:
				$this->setHrHolidayId($value);
				break;
			case 35:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TkDtrsummaryPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEmployeeNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTransDate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setMultiplier($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAttendance($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setHolidayCode($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setLeaveType($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDayoff($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setOvertimes($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setExtraOtPay($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setExtraOt($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setNormal($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setUndertime($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDuration($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setIncomePrepostBatch($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDeductionPrepostBatch($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setPostedAmount($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setMeal($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setAllowance($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setLevy($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setIncomeDeduction($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setIsPosted($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setPostedDate($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setAcDura($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setPartTimeIncome($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setRatePerHour($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setTeam($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setUneditedDuration($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setCreatedBy($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setDateCreated($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setModifiedBy($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setTkAttendanceId($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setHrEmployeeLeaveId($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setHrHolidayId($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setDateModified($arr[$keys[35]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TkDtrsummaryPeer::DATABASE_NAME);

		if ($this->isColumnModified(TkDtrsummaryPeer::ID)) $criteria->add(TkDtrsummaryPeer::ID, $this->id);
		if ($this->isColumnModified(TkDtrsummaryPeer::EMPLOYEE_NO)) $criteria->add(TkDtrsummaryPeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(TkDtrsummaryPeer::NAME)) $criteria->add(TkDtrsummaryPeer::NAME, $this->name);
		if ($this->isColumnModified(TkDtrsummaryPeer::TRANS_DATE)) $criteria->add(TkDtrsummaryPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(TkDtrsummaryPeer::MULTIPLIER)) $criteria->add(TkDtrsummaryPeer::MULTIPLIER, $this->multiplier);
		if ($this->isColumnModified(TkDtrsummaryPeer::ATTENDANCE)) $criteria->add(TkDtrsummaryPeer::ATTENDANCE, $this->attendance);
		if ($this->isColumnModified(TkDtrsummaryPeer::HOLIDAY_CODE)) $criteria->add(TkDtrsummaryPeer::HOLIDAY_CODE, $this->holiday_code);
		if ($this->isColumnModified(TkDtrsummaryPeer::LEAVE_TYPE)) $criteria->add(TkDtrsummaryPeer::LEAVE_TYPE, $this->leave_type);
		if ($this->isColumnModified(TkDtrsummaryPeer::DAYOFF)) $criteria->add(TkDtrsummaryPeer::DAYOFF, $this->dayoff);
		if ($this->isColumnModified(TkDtrsummaryPeer::OVERTIMES)) $criteria->add(TkDtrsummaryPeer::OVERTIMES, $this->overtimes);
		if ($this->isColumnModified(TkDtrsummaryPeer::EXTRA_OT_PAY)) $criteria->add(TkDtrsummaryPeer::EXTRA_OT_PAY, $this->extra_ot_pay);
		if ($this->isColumnModified(TkDtrsummaryPeer::EXTRA_OT)) $criteria->add(TkDtrsummaryPeer::EXTRA_OT, $this->extra_ot);
		if ($this->isColumnModified(TkDtrsummaryPeer::NORMAL)) $criteria->add(TkDtrsummaryPeer::NORMAL, $this->normal);
		if ($this->isColumnModified(TkDtrsummaryPeer::UNDERTIME)) $criteria->add(TkDtrsummaryPeer::UNDERTIME, $this->undertime);
		if ($this->isColumnModified(TkDtrsummaryPeer::DURATION)) $criteria->add(TkDtrsummaryPeer::DURATION, $this->duration);
		if ($this->isColumnModified(TkDtrsummaryPeer::INCOME_PREPOST_BATCH)) $criteria->add(TkDtrsummaryPeer::INCOME_PREPOST_BATCH, $this->income_prepost_batch);
		if ($this->isColumnModified(TkDtrsummaryPeer::DEDUCTION_PREPOST_BATCH)) $criteria->add(TkDtrsummaryPeer::DEDUCTION_PREPOST_BATCH, $this->deduction_prepost_batch);
		if ($this->isColumnModified(TkDtrsummaryPeer::POSTED_AMOUNT)) $criteria->add(TkDtrsummaryPeer::POSTED_AMOUNT, $this->posted_amount);
		if ($this->isColumnModified(TkDtrsummaryPeer::MEAL)) $criteria->add(TkDtrsummaryPeer::MEAL, $this->meal);
		if ($this->isColumnModified(TkDtrsummaryPeer::ALLOWANCE)) $criteria->add(TkDtrsummaryPeer::ALLOWANCE, $this->allowance);
		if ($this->isColumnModified(TkDtrsummaryPeer::LEVY)) $criteria->add(TkDtrsummaryPeer::LEVY, $this->levy);
		if ($this->isColumnModified(TkDtrsummaryPeer::INCOME_DEDUCTION)) $criteria->add(TkDtrsummaryPeer::INCOME_DEDUCTION, $this->income_deduction);
		if ($this->isColumnModified(TkDtrsummaryPeer::IS_POSTED)) $criteria->add(TkDtrsummaryPeer::IS_POSTED, $this->is_posted);
		if ($this->isColumnModified(TkDtrsummaryPeer::POSTED_DATE)) $criteria->add(TkDtrsummaryPeer::POSTED_DATE, $this->posted_date);
		if ($this->isColumnModified(TkDtrsummaryPeer::AC_DURA)) $criteria->add(TkDtrsummaryPeer::AC_DURA, $this->ac_dura);
		if ($this->isColumnModified(TkDtrsummaryPeer::PART_TIME_INCOME)) $criteria->add(TkDtrsummaryPeer::PART_TIME_INCOME, $this->part_time_income);
		if ($this->isColumnModified(TkDtrsummaryPeer::RATE_PER_HOUR)) $criteria->add(TkDtrsummaryPeer::RATE_PER_HOUR, $this->rate_per_hour);
		if ($this->isColumnModified(TkDtrsummaryPeer::TEAM)) $criteria->add(TkDtrsummaryPeer::TEAM, $this->team);
		if ($this->isColumnModified(TkDtrsummaryPeer::UNEDITED_DURATION)) $criteria->add(TkDtrsummaryPeer::UNEDITED_DURATION, $this->unedited_duration);
		if ($this->isColumnModified(TkDtrsummaryPeer::CREATED_BY)) $criteria->add(TkDtrsummaryPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(TkDtrsummaryPeer::DATE_CREATED)) $criteria->add(TkDtrsummaryPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(TkDtrsummaryPeer::MODIFIED_BY)) $criteria->add(TkDtrsummaryPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(TkDtrsummaryPeer::TK_ATTENDANCE_ID)) $criteria->add(TkDtrsummaryPeer::TK_ATTENDANCE_ID, $this->tk_attendance_id);
		if ($this->isColumnModified(TkDtrsummaryPeer::HR_EMPLOYEE_LEAVE_ID)) $criteria->add(TkDtrsummaryPeer::HR_EMPLOYEE_LEAVE_ID, $this->hr_employee_leave_id);
		if ($this->isColumnModified(TkDtrsummaryPeer::HR_HOLIDAY_ID)) $criteria->add(TkDtrsummaryPeer::HR_HOLIDAY_ID, $this->hr_holiday_id);
		if ($this->isColumnModified(TkDtrsummaryPeer::DATE_MODIFIED)) $criteria->add(TkDtrsummaryPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TkDtrsummaryPeer::DATABASE_NAME);

		$criteria->add(TkDtrsummaryPeer::ID, $this->id);

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

		$copyObj->setTransDate($this->trans_date);

		$copyObj->setMultiplier($this->multiplier);

		$copyObj->setAttendance($this->attendance);

		$copyObj->setHolidayCode($this->holiday_code);

		$copyObj->setLeaveType($this->leave_type);

		$copyObj->setDayoff($this->dayoff);

		$copyObj->setOvertimes($this->overtimes);

		$copyObj->setExtraOtPay($this->extra_ot_pay);

		$copyObj->setExtraOt($this->extra_ot);

		$copyObj->setNormal($this->normal);

		$copyObj->setUndertime($this->undertime);

		$copyObj->setDuration($this->duration);

		$copyObj->setIncomePrepostBatch($this->income_prepost_batch);

		$copyObj->setDeductionPrepostBatch($this->deduction_prepost_batch);

		$copyObj->setPostedAmount($this->posted_amount);

		$copyObj->setMeal($this->meal);

		$copyObj->setAllowance($this->allowance);

		$copyObj->setLevy($this->levy);

		$copyObj->setIncomeDeduction($this->income_deduction);

		$copyObj->setIsPosted($this->is_posted);

		$copyObj->setPostedDate($this->posted_date);

		$copyObj->setAcDura($this->ac_dura);

		$copyObj->setPartTimeIncome($this->part_time_income);

		$copyObj->setRatePerHour($this->rate_per_hour);

		$copyObj->setTeam($this->team);

		$copyObj->setUneditedDuration($this->unedited_duration);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setTkAttendanceId($this->tk_attendance_id);

		$copyObj->setHrEmployeeLeaveId($this->hr_employee_leave_id);

		$copyObj->setHrHolidayId($this->hr_holiday_id);

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
			self::$peer = new TkDtrsummaryPeer();
		}
		return self::$peer;
	}

} 
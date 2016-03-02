<?php


abstract class BaseTkWorktemplate extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $worktemp_no = 'null';


	
	protected $description;


	
	protected $fiscal_year;


	
	protected $am_pm_ev;


	
	protected $dayoff;


	
	protected $dayoff_day;


	
	protected $template;


	
	protected $hrs_per_day = 0;


	
	protected $hrs_per_week = 0;


	
	protected $days_per_month = 0;


	
	protected $acct_code;


	
	protected $acct_desc;


	
	protected $allowance_days;


	
	protected $mealbreak = 0;


	
	protected $allowance_amt;


	
	protected $base_nohours;


	
	protected $timein_allowance;


	
	protected $timeout_allowance;


	
	protected $endurance;


	
	protected $ot1;


	
	protected $ot2;


	
	protected $ot3;


	
	protected $min_ot;


	
	protected $min_time;


	
	protected $created_by;


	
	protected $date_created;


	
	protected $modified_by;


	
	protected $date_modified;

	
	protected $collTkWorktemplateDetails;

	
	protected $lastTkWorktemplateDetailCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getWorktempNo()
	{

		return $this->worktemp_no;
	}

	
	public function getDescription()
	{

		return $this->description;
	}

	
	public function getFiscalYear()
	{

		return $this->fiscal_year;
	}

	
	public function getAmPmEv()
	{

		return $this->am_pm_ev;
	}

	
	public function getDayoff()
	{

		return $this->dayoff;
	}

	
	public function getDayoffDay()
	{

		return $this->dayoff_day;
	}

	
	public function getTemplate()
	{

		return $this->template;
	}

	
	public function getHrsPerDay()
	{

		return $this->hrs_per_day;
	}

	
	public function getHrsPerWeek()
	{

		return $this->hrs_per_week;
	}

	
	public function getDaysPerMonth()
	{

		return $this->days_per_month;
	}

	
	public function getAcctCode()
	{

		return $this->acct_code;
	}

	
	public function getAcctDesc()
	{

		return $this->acct_desc;
	}

	
	public function getAllowanceDays()
	{

		return $this->allowance_days;
	}

	
	public function getMealbreak()
	{

		return $this->mealbreak;
	}

	
	public function getAllowanceAmt()
	{

		return $this->allowance_amt;
	}

	
	public function getBaseNohours()
	{

		return $this->base_nohours;
	}

	
	public function getTimeinAllowance()
	{

		return $this->timein_allowance;
	}

	
	public function getTimeoutAllowance()
	{

		return $this->timeout_allowance;
	}

	
	public function getEndurance()
	{

		return $this->endurance;
	}

	
	public function getOt1()
	{

		return $this->ot1;
	}

	
	public function getOt2()
	{

		return $this->ot2;
	}

	
	public function getOt3()
	{

		return $this->ot3;
	}

	
	public function getMinOt()
	{

		return $this->min_ot;
	}

	
	public function getMinTime()
	{

		return $this->min_time;
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
			$this->modifiedColumns[] = TkWorktemplatePeer::ID;
		}

	} 
	
	public function setWorktempNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->worktemp_no !== $v || $v === 'null') {
			$this->worktemp_no = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::WORKTEMP_NO;
		}

	} 
	
	public function setDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::DESCRIPTION;
		}

	} 
	
	public function setFiscalYear($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fiscal_year !== $v) {
			$this->fiscal_year = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::FISCAL_YEAR;
		}

	} 
	
	public function setAmPmEv($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->am_pm_ev !== $v) {
			$this->am_pm_ev = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::AM_PM_EV;
		}

	} 
	
	public function setDayoff($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dayoff !== $v) {
			$this->dayoff = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::DAYOFF;
		}

	} 
	
	public function setDayoffDay($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dayoff_day !== $v) {
			$this->dayoff_day = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::DAYOFF_DAY;
		}

	} 
	
	public function setTemplate($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->template !== $v) {
			$this->template = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::TEMPLATE;
		}

	} 
	
	public function setHrsPerDay($v)
	{

		if ($this->hrs_per_day !== $v || $v === 0) {
			$this->hrs_per_day = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::HRS_PER_DAY;
		}

	} 
	
	public function setHrsPerWeek($v)
	{

		if ($this->hrs_per_week !== $v || $v === 0) {
			$this->hrs_per_week = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::HRS_PER_WEEK;
		}

	} 
	
	public function setDaysPerMonth($v)
	{

		if ($this->days_per_month !== $v || $v === 0) {
			$this->days_per_month = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::DAYS_PER_MONTH;
		}

	} 
	
	public function setAcctCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->acct_code !== $v) {
			$this->acct_code = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::ACCT_CODE;
		}

	} 
	
	public function setAcctDesc($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->acct_desc !== $v) {
			$this->acct_desc = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::ACCT_DESC;
		}

	} 
	
	public function setAllowanceDays($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->allowance_days !== $v) {
			$this->allowance_days = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::ALLOWANCE_DAYS;
		}

	} 
	
	public function setMealbreak($v)
	{

		if ($this->mealbreak !== $v || $v === 0) {
			$this->mealbreak = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::MEALBREAK;
		}

	} 
	
	public function setAllowanceAmt($v)
	{

		if ($this->allowance_amt !== $v) {
			$this->allowance_amt = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::ALLOWANCE_AMT;
		}

	} 
	
	public function setBaseNohours($v)
	{

		if ($this->base_nohours !== $v) {
			$this->base_nohours = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::BASE_NOHOURS;
		}

	} 
	
	public function setTimeinAllowance($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->timein_allowance !== $v) {
			$this->timein_allowance = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::TIMEIN_ALLOWANCE;
		}

	} 
	
	public function setTimeoutAllowance($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->timeout_allowance !== $v) {
			$this->timeout_allowance = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::TIMEOUT_ALLOWANCE;
		}

	} 
	
	public function setEndurance($v)
	{

		if ($this->endurance !== $v) {
			$this->endurance = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::ENDURANCE;
		}

	} 
	
	public function setOt1($v)
	{

		if ($this->ot1 !== $v) {
			$this->ot1 = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::OT1;
		}

	} 
	
	public function setOt2($v)
	{

		if ($this->ot2 !== $v) {
			$this->ot2 = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::OT2;
		}

	} 
	
	public function setOt3($v)
	{

		if ($this->ot3 !== $v) {
			$this->ot3 = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::OT3;
		}

	} 
	
	public function setMinOt($v)
	{

		if ($this->min_ot !== $v) {
			$this->min_ot = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::MIN_OT;
		}

	} 
	
	public function setMinTime($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->min_time !== $v) {
			$this->min_time = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::MIN_TIME;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::CREATED_BY;
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
			$this->modifiedColumns[] = TkWorktemplatePeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = TkWorktemplatePeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = TkWorktemplatePeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->worktemp_no = $rs->getString($startcol + 1);

			$this->description = $rs->getString($startcol + 2);

			$this->fiscal_year = $rs->getString($startcol + 3);

			$this->am_pm_ev = $rs->getInt($startcol + 4);

			$this->dayoff = $rs->getInt($startcol + 5);

			$this->dayoff_day = $rs->getString($startcol + 6);

			$this->template = $rs->getString($startcol + 7);

			$this->hrs_per_day = $rs->getFloat($startcol + 8);

			$this->hrs_per_week = $rs->getFloat($startcol + 9);

			$this->days_per_month = $rs->getFloat($startcol + 10);

			$this->acct_code = $rs->getString($startcol + 11);

			$this->acct_desc = $rs->getString($startcol + 12);

			$this->allowance_days = $rs->getString($startcol + 13);

			$this->mealbreak = $rs->getFloat($startcol + 14);

			$this->allowance_amt = $rs->getFloat($startcol + 15);

			$this->base_nohours = $rs->getFloat($startcol + 16);

			$this->timein_allowance = $rs->getInt($startcol + 17);

			$this->timeout_allowance = $rs->getInt($startcol + 18);

			$this->endurance = $rs->getFloat($startcol + 19);

			$this->ot1 = $rs->getFloat($startcol + 20);

			$this->ot2 = $rs->getFloat($startcol + 21);

			$this->ot3 = $rs->getFloat($startcol + 22);

			$this->min_ot = $rs->getFloat($startcol + 23);

			$this->min_time = $rs->getString($startcol + 24);

			$this->created_by = $rs->getString($startcol + 25);

			$this->date_created = $rs->getTimestamp($startcol + 26, null);

			$this->modified_by = $rs->getString($startcol + 27);

			$this->date_modified = $rs->getTimestamp($startcol + 28, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 29; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TkWorktemplate object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TkWorktemplatePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TkWorktemplatePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TkWorktemplatePeer::DATABASE_NAME);
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
					$pk = TkWorktemplatePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TkWorktemplatePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collTkWorktemplateDetails !== null) {
				foreach($this->collTkWorktemplateDetails as $referrerFK) {
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


			if (($retval = TkWorktemplatePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTkWorktemplateDetails !== null) {
					foreach($this->collTkWorktemplateDetails as $referrerFK) {
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
		$pos = TkWorktemplatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getWorktempNo();
				break;
			case 2:
				return $this->getDescription();
				break;
			case 3:
				return $this->getFiscalYear();
				break;
			case 4:
				return $this->getAmPmEv();
				break;
			case 5:
				return $this->getDayoff();
				break;
			case 6:
				return $this->getDayoffDay();
				break;
			case 7:
				return $this->getTemplate();
				break;
			case 8:
				return $this->getHrsPerDay();
				break;
			case 9:
				return $this->getHrsPerWeek();
				break;
			case 10:
				return $this->getDaysPerMonth();
				break;
			case 11:
				return $this->getAcctCode();
				break;
			case 12:
				return $this->getAcctDesc();
				break;
			case 13:
				return $this->getAllowanceDays();
				break;
			case 14:
				return $this->getMealbreak();
				break;
			case 15:
				return $this->getAllowanceAmt();
				break;
			case 16:
				return $this->getBaseNohours();
				break;
			case 17:
				return $this->getTimeinAllowance();
				break;
			case 18:
				return $this->getTimeoutAllowance();
				break;
			case 19:
				return $this->getEndurance();
				break;
			case 20:
				return $this->getOt1();
				break;
			case 21:
				return $this->getOt2();
				break;
			case 22:
				return $this->getOt3();
				break;
			case 23:
				return $this->getMinOt();
				break;
			case 24:
				return $this->getMinTime();
				break;
			case 25:
				return $this->getCreatedBy();
				break;
			case 26:
				return $this->getDateCreated();
				break;
			case 27:
				return $this->getModifiedBy();
				break;
			case 28:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TkWorktemplatePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getWorktempNo(),
			$keys[2] => $this->getDescription(),
			$keys[3] => $this->getFiscalYear(),
			$keys[4] => $this->getAmPmEv(),
			$keys[5] => $this->getDayoff(),
			$keys[6] => $this->getDayoffDay(),
			$keys[7] => $this->getTemplate(),
			$keys[8] => $this->getHrsPerDay(),
			$keys[9] => $this->getHrsPerWeek(),
			$keys[10] => $this->getDaysPerMonth(),
			$keys[11] => $this->getAcctCode(),
			$keys[12] => $this->getAcctDesc(),
			$keys[13] => $this->getAllowanceDays(),
			$keys[14] => $this->getMealbreak(),
			$keys[15] => $this->getAllowanceAmt(),
			$keys[16] => $this->getBaseNohours(),
			$keys[17] => $this->getTimeinAllowance(),
			$keys[18] => $this->getTimeoutAllowance(),
			$keys[19] => $this->getEndurance(),
			$keys[20] => $this->getOt1(),
			$keys[21] => $this->getOt2(),
			$keys[22] => $this->getOt3(),
			$keys[23] => $this->getMinOt(),
			$keys[24] => $this->getMinTime(),
			$keys[25] => $this->getCreatedBy(),
			$keys[26] => $this->getDateCreated(),
			$keys[27] => $this->getModifiedBy(),
			$keys[28] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TkWorktemplatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setWorktempNo($value);
				break;
			case 2:
				$this->setDescription($value);
				break;
			case 3:
				$this->setFiscalYear($value);
				break;
			case 4:
				$this->setAmPmEv($value);
				break;
			case 5:
				$this->setDayoff($value);
				break;
			case 6:
				$this->setDayoffDay($value);
				break;
			case 7:
				$this->setTemplate($value);
				break;
			case 8:
				$this->setHrsPerDay($value);
				break;
			case 9:
				$this->setHrsPerWeek($value);
				break;
			case 10:
				$this->setDaysPerMonth($value);
				break;
			case 11:
				$this->setAcctCode($value);
				break;
			case 12:
				$this->setAcctDesc($value);
				break;
			case 13:
				$this->setAllowanceDays($value);
				break;
			case 14:
				$this->setMealbreak($value);
				break;
			case 15:
				$this->setAllowanceAmt($value);
				break;
			case 16:
				$this->setBaseNohours($value);
				break;
			case 17:
				$this->setTimeinAllowance($value);
				break;
			case 18:
				$this->setTimeoutAllowance($value);
				break;
			case 19:
				$this->setEndurance($value);
				break;
			case 20:
				$this->setOt1($value);
				break;
			case 21:
				$this->setOt2($value);
				break;
			case 22:
				$this->setOt3($value);
				break;
			case 23:
				$this->setMinOt($value);
				break;
			case 24:
				$this->setMinTime($value);
				break;
			case 25:
				$this->setCreatedBy($value);
				break;
			case 26:
				$this->setDateCreated($value);
				break;
			case 27:
				$this->setModifiedBy($value);
				break;
			case 28:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TkWorktemplatePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setWorktempNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFiscalYear($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAmPmEv($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDayoff($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDayoffDay($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTemplate($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setHrsPerDay($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setHrsPerWeek($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDaysPerMonth($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAcctCode($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setAcctDesc($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setAllowanceDays($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setMealbreak($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setAllowanceAmt($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setBaseNohours($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setTimeinAllowance($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setTimeoutAllowance($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setEndurance($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setOt1($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setOt2($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setOt3($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setMinOt($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setMinTime($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setCreatedBy($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setDateCreated($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setModifiedBy($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setDateModified($arr[$keys[28]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TkWorktemplatePeer::DATABASE_NAME);

		if ($this->isColumnModified(TkWorktemplatePeer::ID)) $criteria->add(TkWorktemplatePeer::ID, $this->id);
		if ($this->isColumnModified(TkWorktemplatePeer::WORKTEMP_NO)) $criteria->add(TkWorktemplatePeer::WORKTEMP_NO, $this->worktemp_no);
		if ($this->isColumnModified(TkWorktemplatePeer::DESCRIPTION)) $criteria->add(TkWorktemplatePeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(TkWorktemplatePeer::FISCAL_YEAR)) $criteria->add(TkWorktemplatePeer::FISCAL_YEAR, $this->fiscal_year);
		if ($this->isColumnModified(TkWorktemplatePeer::AM_PM_EV)) $criteria->add(TkWorktemplatePeer::AM_PM_EV, $this->am_pm_ev);
		if ($this->isColumnModified(TkWorktemplatePeer::DAYOFF)) $criteria->add(TkWorktemplatePeer::DAYOFF, $this->dayoff);
		if ($this->isColumnModified(TkWorktemplatePeer::DAYOFF_DAY)) $criteria->add(TkWorktemplatePeer::DAYOFF_DAY, $this->dayoff_day);
		if ($this->isColumnModified(TkWorktemplatePeer::TEMPLATE)) $criteria->add(TkWorktemplatePeer::TEMPLATE, $this->template);
		if ($this->isColumnModified(TkWorktemplatePeer::HRS_PER_DAY)) $criteria->add(TkWorktemplatePeer::HRS_PER_DAY, $this->hrs_per_day);
		if ($this->isColumnModified(TkWorktemplatePeer::HRS_PER_WEEK)) $criteria->add(TkWorktemplatePeer::HRS_PER_WEEK, $this->hrs_per_week);
		if ($this->isColumnModified(TkWorktemplatePeer::DAYS_PER_MONTH)) $criteria->add(TkWorktemplatePeer::DAYS_PER_MONTH, $this->days_per_month);
		if ($this->isColumnModified(TkWorktemplatePeer::ACCT_CODE)) $criteria->add(TkWorktemplatePeer::ACCT_CODE, $this->acct_code);
		if ($this->isColumnModified(TkWorktemplatePeer::ACCT_DESC)) $criteria->add(TkWorktemplatePeer::ACCT_DESC, $this->acct_desc);
		if ($this->isColumnModified(TkWorktemplatePeer::ALLOWANCE_DAYS)) $criteria->add(TkWorktemplatePeer::ALLOWANCE_DAYS, $this->allowance_days);
		if ($this->isColumnModified(TkWorktemplatePeer::MEALBREAK)) $criteria->add(TkWorktemplatePeer::MEALBREAK, $this->mealbreak);
		if ($this->isColumnModified(TkWorktemplatePeer::ALLOWANCE_AMT)) $criteria->add(TkWorktemplatePeer::ALLOWANCE_AMT, $this->allowance_amt);
		if ($this->isColumnModified(TkWorktemplatePeer::BASE_NOHOURS)) $criteria->add(TkWorktemplatePeer::BASE_NOHOURS, $this->base_nohours);
		if ($this->isColumnModified(TkWorktemplatePeer::TIMEIN_ALLOWANCE)) $criteria->add(TkWorktemplatePeer::TIMEIN_ALLOWANCE, $this->timein_allowance);
		if ($this->isColumnModified(TkWorktemplatePeer::TIMEOUT_ALLOWANCE)) $criteria->add(TkWorktemplatePeer::TIMEOUT_ALLOWANCE, $this->timeout_allowance);
		if ($this->isColumnModified(TkWorktemplatePeer::ENDURANCE)) $criteria->add(TkWorktemplatePeer::ENDURANCE, $this->endurance);
		if ($this->isColumnModified(TkWorktemplatePeer::OT1)) $criteria->add(TkWorktemplatePeer::OT1, $this->ot1);
		if ($this->isColumnModified(TkWorktemplatePeer::OT2)) $criteria->add(TkWorktemplatePeer::OT2, $this->ot2);
		if ($this->isColumnModified(TkWorktemplatePeer::OT3)) $criteria->add(TkWorktemplatePeer::OT3, $this->ot3);
		if ($this->isColumnModified(TkWorktemplatePeer::MIN_OT)) $criteria->add(TkWorktemplatePeer::MIN_OT, $this->min_ot);
		if ($this->isColumnModified(TkWorktemplatePeer::MIN_TIME)) $criteria->add(TkWorktemplatePeer::MIN_TIME, $this->min_time);
		if ($this->isColumnModified(TkWorktemplatePeer::CREATED_BY)) $criteria->add(TkWorktemplatePeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(TkWorktemplatePeer::DATE_CREATED)) $criteria->add(TkWorktemplatePeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(TkWorktemplatePeer::MODIFIED_BY)) $criteria->add(TkWorktemplatePeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(TkWorktemplatePeer::DATE_MODIFIED)) $criteria->add(TkWorktemplatePeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TkWorktemplatePeer::DATABASE_NAME);

		$criteria->add(TkWorktemplatePeer::ID, $this->id);

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

		$copyObj->setWorktempNo($this->worktemp_no);

		$copyObj->setDescription($this->description);

		$copyObj->setFiscalYear($this->fiscal_year);

		$copyObj->setAmPmEv($this->am_pm_ev);

		$copyObj->setDayoff($this->dayoff);

		$copyObj->setDayoffDay($this->dayoff_day);

		$copyObj->setTemplate($this->template);

		$copyObj->setHrsPerDay($this->hrs_per_day);

		$copyObj->setHrsPerWeek($this->hrs_per_week);

		$copyObj->setDaysPerMonth($this->days_per_month);

		$copyObj->setAcctCode($this->acct_code);

		$copyObj->setAcctDesc($this->acct_desc);

		$copyObj->setAllowanceDays($this->allowance_days);

		$copyObj->setMealbreak($this->mealbreak);

		$copyObj->setAllowanceAmt($this->allowance_amt);

		$copyObj->setBaseNohours($this->base_nohours);

		$copyObj->setTimeinAllowance($this->timein_allowance);

		$copyObj->setTimeoutAllowance($this->timeout_allowance);

		$copyObj->setEndurance($this->endurance);

		$copyObj->setOt1($this->ot1);

		$copyObj->setOt2($this->ot2);

		$copyObj->setOt3($this->ot3);

		$copyObj->setMinOt($this->min_ot);

		$copyObj->setMinTime($this->min_time);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateModified($this->date_modified);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getTkWorktemplateDetails() as $relObj) {
				$copyObj->addTkWorktemplateDetail($relObj->copy($deepCopy));
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
			self::$peer = new TkWorktemplatePeer();
		}
		return self::$peer;
	}

	
	public function initTkWorktemplateDetails()
	{
		if ($this->collTkWorktemplateDetails === null) {
			$this->collTkWorktemplateDetails = array();
		}
	}

	
	public function getTkWorktemplateDetails($criteria = null, $con = null)
	{
				include_once 'lib/model/hr/om/BaseTkWorktemplateDetailPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTkWorktemplateDetails === null) {
			if ($this->isNew()) {
			   $this->collTkWorktemplateDetails = array();
			} else {

				$criteria->add(TkWorktemplateDetailPeer::TK_WORKTEMPLATE_NO, $this->getWorktempNo());

				TkWorktemplateDetailPeer::addSelectColumns($criteria);
				$this->collTkWorktemplateDetails = TkWorktemplateDetailPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TkWorktemplateDetailPeer::TK_WORKTEMPLATE_NO, $this->getWorktempNo());

				TkWorktemplateDetailPeer::addSelectColumns($criteria);
				if (!isset($this->lastTkWorktemplateDetailCriteria) || !$this->lastTkWorktemplateDetailCriteria->equals($criteria)) {
					$this->collTkWorktemplateDetails = TkWorktemplateDetailPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTkWorktemplateDetailCriteria = $criteria;
		return $this->collTkWorktemplateDetails;
	}

	
	public function countTkWorktemplateDetails($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/hr/om/BaseTkWorktemplateDetailPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TkWorktemplateDetailPeer::TK_WORKTEMPLATE_NO, $this->getWorktempNo());

		return TkWorktemplateDetailPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTkWorktemplateDetail(TkWorktemplateDetail $l)
	{
		$this->collTkWorktemplateDetails[] = $l;
		$l->setTkWorktemplate($this);
	}

} 
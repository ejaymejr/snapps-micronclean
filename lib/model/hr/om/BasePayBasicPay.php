<?php


abstract class BasePayBasicPay extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $employee_no = 'null';


	
	protected $name;


	
	protected $department;


	
	protected $company;


	
	protected $basic_amount = 0;


	
	protected $scheduled_amount = 0;


	
	protected $hourly_rate;


	
	protected $ot_rate = 0;


	
	protected $allowance = 0;


	
	protected $levy = 0;


	
	protected $taxable_amount = 0;


	
	protected $gross_pay = 0;


	
	protected $frequency;


	
	protected $acct_code = 'null';


	
	protected $cpf;


	
	protected $cpf_amount = 0;


	
	protected $cpf_citizenship;


	
	protected $effectivity_date;


	
	protected $paid_type;


	
	protected $status = 'A';


	
	protected $remark;


	
	protected $date_resigned;


	
	protected $resigned_remark;


	
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

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getCompany()
	{

		return $this->company;
	}

	
	public function getBasicAmount()
	{

		return $this->basic_amount;
	}

	
	public function getScheduledAmount()
	{

		return $this->scheduled_amount;
	}

	
	public function getHourlyRate()
	{

		return $this->hourly_rate;
	}

	
	public function getOtRate()
	{

		return $this->ot_rate;
	}

	
	public function getAllowance()
	{

		return $this->allowance;
	}

	
	public function getLevy()
	{

		return $this->levy;
	}

	
	public function getTaxableAmount()
	{

		return $this->taxable_amount;
	}

	
	public function getGrossPay()
	{

		return $this->gross_pay;
	}

	
	public function getFrequency()
	{

		return $this->frequency;
	}

	
	public function getAcctCode()
	{

		return $this->acct_code;
	}

	
	public function getCpf()
	{

		return $this->cpf;
	}

	
	public function getCpfAmount()
	{

		return $this->cpf_amount;
	}

	
	public function getCpfCitizenship()
	{

		return $this->cpf_citizenship;
	}

	
	public function getEffectivityDate($format = 'Y-m-d')
	{

		if ($this->effectivity_date === null || $this->effectivity_date === '') {
			return null;
		} elseif (!is_int($this->effectivity_date)) {
						$ts = strtotime($this->effectivity_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [effectivity_date] as date/time value: " . var_export($this->effectivity_date, true));
			}
		} else {
			$ts = $this->effectivity_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getPaidType()
	{

		return $this->paid_type;
	}

	
	public function getStatus()
	{

		return $this->status;
	}

	
	public function getRemark()
	{

		return $this->remark;
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

	
	public function getResignedRemark()
	{

		return $this->resigned_remark;
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
			$this->modifiedColumns[] = PayBasicPayPeer::ID;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v || $v === 'null') {
			$this->employee_no = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::EMPLOYEE_NO;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::NAME;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v) {
			$this->department = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::DEPARTMENT;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v) {
			$this->company = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::COMPANY;
		}

	} 
	
	public function setBasicAmount($v)
	{

		if ($this->basic_amount !== $v || $v === 0) {
			$this->basic_amount = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::BASIC_AMOUNT;
		}

	} 
	
	public function setScheduledAmount($v)
	{

		if ($this->scheduled_amount !== $v || $v === 0) {
			$this->scheduled_amount = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::SCHEDULED_AMOUNT;
		}

	} 
	
	public function setHourlyRate($v)
	{

		if ($this->hourly_rate !== $v) {
			$this->hourly_rate = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::HOURLY_RATE;
		}

	} 
	
	public function setOtRate($v)
	{

		if ($this->ot_rate !== $v || $v === 0) {
			$this->ot_rate = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::OT_RATE;
		}

	} 
	
	public function setAllowance($v)
	{

		if ($this->allowance !== $v || $v === 0) {
			$this->allowance = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::ALLOWANCE;
		}

	} 
	
	public function setLevy($v)
	{

		if ($this->levy !== $v || $v === 0) {
			$this->levy = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::LEVY;
		}

	} 
	
	public function setTaxableAmount($v)
	{

		if ($this->taxable_amount !== $v || $v === 0) {
			$this->taxable_amount = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::TAXABLE_AMOUNT;
		}

	} 
	
	public function setGrossPay($v)
	{

		if ($this->gross_pay !== $v || $v === 0) {
			$this->gross_pay = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::GROSS_PAY;
		}

	} 
	
	public function setFrequency($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->frequency !== $v) {
			$this->frequency = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::FREQUENCY;
		}

	} 
	
	public function setAcctCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->acct_code !== $v || $v === 'null') {
			$this->acct_code = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::ACCT_CODE;
		}

	} 
	
	public function setCpf($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cpf !== $v) {
			$this->cpf = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::CPF;
		}

	} 
	
	public function setCpfAmount($v)
	{

		if ($this->cpf_amount !== $v || $v === 0) {
			$this->cpf_amount = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::CPF_AMOUNT;
		}

	} 
	
	public function setCpfCitizenship($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cpf_citizenship !== $v) {
			$this->cpf_citizenship = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::CPF_CITIZENSHIP;
		}

	} 
	
	public function setEffectivityDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [effectivity_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->effectivity_date !== $ts) {
			$this->effectivity_date = $ts;
			$this->modifiedColumns[] = PayBasicPayPeer::EFFECTIVITY_DATE;
		}

	} 
	
	public function setPaidType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->paid_type !== $v) {
			$this->paid_type = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::PAID_TYPE;
		}

	} 
	
	public function setStatus($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->status !== $v || $v === 'A') {
			$this->status = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::STATUS;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::REMARK;
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
			$this->modifiedColumns[] = PayBasicPayPeer::DATE_RESIGNED;
		}

	} 
	
	public function setResignedRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->resigned_remark !== $v) {
			$this->resigned_remark = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::RESIGNED_REMARK;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::CREATED_BY;
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
			$this->modifiedColumns[] = PayBasicPayPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = PayBasicPayPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = PayBasicPayPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->employee_no = $rs->getString($startcol + 1);

			$this->name = $rs->getString($startcol + 2);

			$this->department = $rs->getString($startcol + 3);

			$this->company = $rs->getString($startcol + 4);

			$this->basic_amount = $rs->getFloat($startcol + 5);

			$this->scheduled_amount = $rs->getFloat($startcol + 6);

			$this->hourly_rate = $rs->getFloat($startcol + 7);

			$this->ot_rate = $rs->getFloat($startcol + 8);

			$this->allowance = $rs->getFloat($startcol + 9);

			$this->levy = $rs->getFloat($startcol + 10);

			$this->taxable_amount = $rs->getFloat($startcol + 11);

			$this->gross_pay = $rs->getFloat($startcol + 12);

			$this->frequency = $rs->getString($startcol + 13);

			$this->acct_code = $rs->getString($startcol + 14);

			$this->cpf = $rs->getString($startcol + 15);

			$this->cpf_amount = $rs->getFloat($startcol + 16);

			$this->cpf_citizenship = $rs->getString($startcol + 17);

			$this->effectivity_date = $rs->getDate($startcol + 18, null);

			$this->paid_type = $rs->getString($startcol + 19);

			$this->status = $rs->getString($startcol + 20);

			$this->remark = $rs->getString($startcol + 21);

			$this->date_resigned = $rs->getDate($startcol + 22, null);

			$this->resigned_remark = $rs->getString($startcol + 23);

			$this->created_by = $rs->getString($startcol + 24);

			$this->date_created = $rs->getTimestamp($startcol + 25, null);

			$this->modified_by = $rs->getString($startcol + 26);

			$this->date_modified = $rs->getTimestamp($startcol + 27, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 28; 
		} catch (Exception $e) {
			throw new PropelException("Error populating PayBasicPay object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PayBasicPayPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PayBasicPayPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(PayBasicPayPeer::DATABASE_NAME);
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
					$pk = PayBasicPayPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PayBasicPayPeer::doUpdate($this, $con);
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


			if (($retval = PayBasicPayPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PayBasicPayPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDepartment();
				break;
			case 4:
				return $this->getCompany();
				break;
			case 5:
				return $this->getBasicAmount();
				break;
			case 6:
				return $this->getScheduledAmount();
				break;
			case 7:
				return $this->getHourlyRate();
				break;
			case 8:
				return $this->getOtRate();
				break;
			case 9:
				return $this->getAllowance();
				break;
			case 10:
				return $this->getLevy();
				break;
			case 11:
				return $this->getTaxableAmount();
				break;
			case 12:
				return $this->getGrossPay();
				break;
			case 13:
				return $this->getFrequency();
				break;
			case 14:
				return $this->getAcctCode();
				break;
			case 15:
				return $this->getCpf();
				break;
			case 16:
				return $this->getCpfAmount();
				break;
			case 17:
				return $this->getCpfCitizenship();
				break;
			case 18:
				return $this->getEffectivityDate();
				break;
			case 19:
				return $this->getPaidType();
				break;
			case 20:
				return $this->getStatus();
				break;
			case 21:
				return $this->getRemark();
				break;
			case 22:
				return $this->getDateResigned();
				break;
			case 23:
				return $this->getResignedRemark();
				break;
			case 24:
				return $this->getCreatedBy();
				break;
			case 25:
				return $this->getDateCreated();
				break;
			case 26:
				return $this->getModifiedBy();
				break;
			case 27:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PayBasicPayPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEmployeeNo(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getDepartment(),
			$keys[4] => $this->getCompany(),
			$keys[5] => $this->getBasicAmount(),
			$keys[6] => $this->getScheduledAmount(),
			$keys[7] => $this->getHourlyRate(),
			$keys[8] => $this->getOtRate(),
			$keys[9] => $this->getAllowance(),
			$keys[10] => $this->getLevy(),
			$keys[11] => $this->getTaxableAmount(),
			$keys[12] => $this->getGrossPay(),
			$keys[13] => $this->getFrequency(),
			$keys[14] => $this->getAcctCode(),
			$keys[15] => $this->getCpf(),
			$keys[16] => $this->getCpfAmount(),
			$keys[17] => $this->getCpfCitizenship(),
			$keys[18] => $this->getEffectivityDate(),
			$keys[19] => $this->getPaidType(),
			$keys[20] => $this->getStatus(),
			$keys[21] => $this->getRemark(),
			$keys[22] => $this->getDateResigned(),
			$keys[23] => $this->getResignedRemark(),
			$keys[24] => $this->getCreatedBy(),
			$keys[25] => $this->getDateCreated(),
			$keys[26] => $this->getModifiedBy(),
			$keys[27] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PayBasicPayPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDepartment($value);
				break;
			case 4:
				$this->setCompany($value);
				break;
			case 5:
				$this->setBasicAmount($value);
				break;
			case 6:
				$this->setScheduledAmount($value);
				break;
			case 7:
				$this->setHourlyRate($value);
				break;
			case 8:
				$this->setOtRate($value);
				break;
			case 9:
				$this->setAllowance($value);
				break;
			case 10:
				$this->setLevy($value);
				break;
			case 11:
				$this->setTaxableAmount($value);
				break;
			case 12:
				$this->setGrossPay($value);
				break;
			case 13:
				$this->setFrequency($value);
				break;
			case 14:
				$this->setAcctCode($value);
				break;
			case 15:
				$this->setCpf($value);
				break;
			case 16:
				$this->setCpfAmount($value);
				break;
			case 17:
				$this->setCpfCitizenship($value);
				break;
			case 18:
				$this->setEffectivityDate($value);
				break;
			case 19:
				$this->setPaidType($value);
				break;
			case 20:
				$this->setStatus($value);
				break;
			case 21:
				$this->setRemark($value);
				break;
			case 22:
				$this->setDateResigned($value);
				break;
			case 23:
				$this->setResignedRemark($value);
				break;
			case 24:
				$this->setCreatedBy($value);
				break;
			case 25:
				$this->setDateCreated($value);
				break;
			case 26:
				$this->setModifiedBy($value);
				break;
			case 27:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PayBasicPayPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEmployeeNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDepartment($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCompany($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setBasicAmount($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setScheduledAmount($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setHourlyRate($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setOtRate($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAllowance($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setLevy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTaxableAmount($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setGrossPay($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setFrequency($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setAcctCode($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCpf($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCpfAmount($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setCpfCitizenship($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setEffectivityDate($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setPaidType($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setStatus($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setRemark($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setDateResigned($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setResignedRemark($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setCreatedBy($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setDateCreated($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setModifiedBy($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setDateModified($arr[$keys[27]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PayBasicPayPeer::DATABASE_NAME);

		if ($this->isColumnModified(PayBasicPayPeer::ID)) $criteria->add(PayBasicPayPeer::ID, $this->id);
		if ($this->isColumnModified(PayBasicPayPeer::EMPLOYEE_NO)) $criteria->add(PayBasicPayPeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(PayBasicPayPeer::NAME)) $criteria->add(PayBasicPayPeer::NAME, $this->name);
		if ($this->isColumnModified(PayBasicPayPeer::DEPARTMENT)) $criteria->add(PayBasicPayPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(PayBasicPayPeer::COMPANY)) $criteria->add(PayBasicPayPeer::COMPANY, $this->company);
		if ($this->isColumnModified(PayBasicPayPeer::BASIC_AMOUNT)) $criteria->add(PayBasicPayPeer::BASIC_AMOUNT, $this->basic_amount);
		if ($this->isColumnModified(PayBasicPayPeer::SCHEDULED_AMOUNT)) $criteria->add(PayBasicPayPeer::SCHEDULED_AMOUNT, $this->scheduled_amount);
		if ($this->isColumnModified(PayBasicPayPeer::HOURLY_RATE)) $criteria->add(PayBasicPayPeer::HOURLY_RATE, $this->hourly_rate);
		if ($this->isColumnModified(PayBasicPayPeer::OT_RATE)) $criteria->add(PayBasicPayPeer::OT_RATE, $this->ot_rate);
		if ($this->isColumnModified(PayBasicPayPeer::ALLOWANCE)) $criteria->add(PayBasicPayPeer::ALLOWANCE, $this->allowance);
		if ($this->isColumnModified(PayBasicPayPeer::LEVY)) $criteria->add(PayBasicPayPeer::LEVY, $this->levy);
		if ($this->isColumnModified(PayBasicPayPeer::TAXABLE_AMOUNT)) $criteria->add(PayBasicPayPeer::TAXABLE_AMOUNT, $this->taxable_amount);
		if ($this->isColumnModified(PayBasicPayPeer::GROSS_PAY)) $criteria->add(PayBasicPayPeer::GROSS_PAY, $this->gross_pay);
		if ($this->isColumnModified(PayBasicPayPeer::FREQUENCY)) $criteria->add(PayBasicPayPeer::FREQUENCY, $this->frequency);
		if ($this->isColumnModified(PayBasicPayPeer::ACCT_CODE)) $criteria->add(PayBasicPayPeer::ACCT_CODE, $this->acct_code);
		if ($this->isColumnModified(PayBasicPayPeer::CPF)) $criteria->add(PayBasicPayPeer::CPF, $this->cpf);
		if ($this->isColumnModified(PayBasicPayPeer::CPF_AMOUNT)) $criteria->add(PayBasicPayPeer::CPF_AMOUNT, $this->cpf_amount);
		if ($this->isColumnModified(PayBasicPayPeer::CPF_CITIZENSHIP)) $criteria->add(PayBasicPayPeer::CPF_CITIZENSHIP, $this->cpf_citizenship);
		if ($this->isColumnModified(PayBasicPayPeer::EFFECTIVITY_DATE)) $criteria->add(PayBasicPayPeer::EFFECTIVITY_DATE, $this->effectivity_date);
		if ($this->isColumnModified(PayBasicPayPeer::PAID_TYPE)) $criteria->add(PayBasicPayPeer::PAID_TYPE, $this->paid_type);
		if ($this->isColumnModified(PayBasicPayPeer::STATUS)) $criteria->add(PayBasicPayPeer::STATUS, $this->status);
		if ($this->isColumnModified(PayBasicPayPeer::REMARK)) $criteria->add(PayBasicPayPeer::REMARK, $this->remark);
		if ($this->isColumnModified(PayBasicPayPeer::DATE_RESIGNED)) $criteria->add(PayBasicPayPeer::DATE_RESIGNED, $this->date_resigned);
		if ($this->isColumnModified(PayBasicPayPeer::RESIGNED_REMARK)) $criteria->add(PayBasicPayPeer::RESIGNED_REMARK, $this->resigned_remark);
		if ($this->isColumnModified(PayBasicPayPeer::CREATED_BY)) $criteria->add(PayBasicPayPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(PayBasicPayPeer::DATE_CREATED)) $criteria->add(PayBasicPayPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(PayBasicPayPeer::MODIFIED_BY)) $criteria->add(PayBasicPayPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(PayBasicPayPeer::DATE_MODIFIED)) $criteria->add(PayBasicPayPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PayBasicPayPeer::DATABASE_NAME);

		$criteria->add(PayBasicPayPeer::ID, $this->id);

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

		$copyObj->setDepartment($this->department);

		$copyObj->setCompany($this->company);

		$copyObj->setBasicAmount($this->basic_amount);

		$copyObj->setScheduledAmount($this->scheduled_amount);

		$copyObj->setHourlyRate($this->hourly_rate);

		$copyObj->setOtRate($this->ot_rate);

		$copyObj->setAllowance($this->allowance);

		$copyObj->setLevy($this->levy);

		$copyObj->setTaxableAmount($this->taxable_amount);

		$copyObj->setGrossPay($this->gross_pay);

		$copyObj->setFrequency($this->frequency);

		$copyObj->setAcctCode($this->acct_code);

		$copyObj->setCpf($this->cpf);

		$copyObj->setCpfAmount($this->cpf_amount);

		$copyObj->setCpfCitizenship($this->cpf_citizenship);

		$copyObj->setEffectivityDate($this->effectivity_date);

		$copyObj->setPaidType($this->paid_type);

		$copyObj->setStatus($this->status);

		$copyObj->setRemark($this->remark);

		$copyObj->setDateResigned($this->date_resigned);

		$copyObj->setResignedRemark($this->resigned_remark);

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
			self::$peer = new PayBasicPayPeer();
		}
		return self::$peer;
	}

} 
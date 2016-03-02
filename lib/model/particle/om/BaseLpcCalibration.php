<?php


abstract class BaseLpcCalibration extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id = 0;


	
	protected $company;


	
	protected $trans_date;


	
	protected $due_date;


	
	protected $calibrated_by;


	
	protected $verified_by;


	
	protected $point_2_manufacturer;


	
	protected $point_2_std_deviation;


	
	protected $point_2_lot_no;


	
	protected $point_2_expiry_date;


	
	protected $point_5_manufacturer;


	
	protected $point_5_std_deviation;


	
	protected $point_5_lot_no;


	
	protected $point_5_expiry_date;


	
	protected $emm_serial_no;


	
	protected $emm_cal_date;


	
	protected $emm_cal_due_date;


	
	protected $tp_1_before;


	
	protected $tp_1_after;


	
	protected $tp_2_before;


	
	protected $tp_2_after;


	
	protected $tp_3_before;


	
	protected $tp_3_after;


	
	protected $tp_4_before;


	
	protected $tp_4_after;


	
	protected $tp_5_before;


	
	protected $tp_5_after;


	
	protected $tp_6_before;


	
	protected $tp_6_after;


	
	protected $tp_7_before;


	
	protected $tp_7_after;


	
	protected $tp_8_before;


	
	protected $tp_8_after;


	
	protected $tp_9_before;


	
	protected $tp_9_after;


	
	protected $tp_10_before;


	
	protected $tp_10_after;


	
	protected $tp_11_before;


	
	protected $tp_11_after;


	
	protected $tp_12_before;


	
	protected $tp_12_after;


	
	protected $temperature;


	
	protected $humidity;


	
	protected $zero_count;


	
	protected $in_house_ref;


	
	protected $unit_under_test;


	
	protected $tolerance;


	
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

	
	public function getCompany()
	{

		return $this->company;
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

	
	public function getDueDate($format = 'Y-m-d')
	{

		if ($this->due_date === null || $this->due_date === '') {
			return null;
		} elseif (!is_int($this->due_date)) {
						$ts = strtotime($this->due_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [due_date] as date/time value: " . var_export($this->due_date, true));
			}
		} else {
			$ts = $this->due_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCalibratedBy()
	{

		return $this->calibrated_by;
	}

	
	public function getVerifiedBy()
	{

		return $this->verified_by;
	}

	
	public function getPoint2Manufacturer()
	{

		return $this->point_2_manufacturer;
	}

	
	public function getPoint2StdDeviation()
	{

		return $this->point_2_std_deviation;
	}

	
	public function getPoint2LotNo()
	{

		return $this->point_2_lot_no;
	}

	
	public function getPoint2ExpiryDate()
	{

		return $this->point_2_expiry_date;
	}

	
	public function getPoint5Manufacturer()
	{

		return $this->point_5_manufacturer;
	}

	
	public function getPoint5StdDeviation()
	{

		return $this->point_5_std_deviation;
	}

	
	public function getPoint5LotNo()
	{

		return $this->point_5_lot_no;
	}

	
	public function getPoint5ExpiryDate()
	{

		return $this->point_5_expiry_date;
	}

	
	public function getEmmSerialNo()
	{

		return $this->emm_serial_no;
	}

	
	public function getEmmCalDate()
	{

		return $this->emm_cal_date;
	}

	
	public function getEmmCalDueDate()
	{

		return $this->emm_cal_due_date;
	}

	
	public function getTp1Before()
	{

		return $this->tp_1_before;
	}

	
	public function getTp1After()
	{

		return $this->tp_1_after;
	}

	
	public function getTp2Before()
	{

		return $this->tp_2_before;
	}

	
	public function getTp2After()
	{

		return $this->tp_2_after;
	}

	
	public function getTp3Before()
	{

		return $this->tp_3_before;
	}

	
	public function getTp3After()
	{

		return $this->tp_3_after;
	}

	
	public function getTp4Before()
	{

		return $this->tp_4_before;
	}

	
	public function getTp4After()
	{

		return $this->tp_4_after;
	}

	
	public function getTp5Before()
	{

		return $this->tp_5_before;
	}

	
	public function getTp5After()
	{

		return $this->tp_5_after;
	}

	
	public function getTp6Before()
	{

		return $this->tp_6_before;
	}

	
	public function getTp6After()
	{

		return $this->tp_6_after;
	}

	
	public function getTp7Before()
	{

		return $this->tp_7_before;
	}

	
	public function getTp7After()
	{

		return $this->tp_7_after;
	}

	
	public function getTp8Before()
	{

		return $this->tp_8_before;
	}

	
	public function getTp8After()
	{

		return $this->tp_8_after;
	}

	
	public function getTp9Before()
	{

		return $this->tp_9_before;
	}

	
	public function getTp9After()
	{

		return $this->tp_9_after;
	}

	
	public function getTp10Before()
	{

		return $this->tp_10_before;
	}

	
	public function getTp10After()
	{

		return $this->tp_10_after;
	}

	
	public function getTp11Before()
	{

		return $this->tp_11_before;
	}

	
	public function getTp11After()
	{

		return $this->tp_11_after;
	}

	
	public function getTp12Before()
	{

		return $this->tp_12_before;
	}

	
	public function getTp12After()
	{

		return $this->tp_12_after;
	}

	
	public function getTemperature()
	{

		return $this->temperature;
	}

	
	public function getHumidity()
	{

		return $this->humidity;
	}

	
	public function getZeroCount()
	{

		return $this->zero_count;
	}

	
	public function getInHouseRef()
	{

		return $this->in_house_ref;
	}

	
	public function getUnitUnderTest()
	{

		return $this->unit_under_test;
	}

	
	public function getTolerance()
	{

		return $this->tolerance;
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

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v || $v === 0) {
			$this->id = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::ID;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v) {
			$this->company = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::COMPANY;
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
			$this->modifiedColumns[] = LpcCalibrationPeer::TRANS_DATE;
		}

	} 
	
	public function setDueDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [due_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->due_date !== $ts) {
			$this->due_date = $ts;
			$this->modifiedColumns[] = LpcCalibrationPeer::DUE_DATE;
		}

	} 
	
	public function setCalibratedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->calibrated_by !== $v) {
			$this->calibrated_by = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::CALIBRATED_BY;
		}

	} 
	
	public function setVerifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by !== $v) {
			$this->verified_by = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::VERIFIED_BY;
		}

	} 
	
	public function setPoint2Manufacturer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->point_2_manufacturer !== $v) {
			$this->point_2_manufacturer = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::POINT_2_MANUFACTURER;
		}

	} 
	
	public function setPoint2StdDeviation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->point_2_std_deviation !== $v) {
			$this->point_2_std_deviation = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::POINT_2_STD_DEVIATION;
		}

	} 
	
	public function setPoint2LotNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->point_2_lot_no !== $v) {
			$this->point_2_lot_no = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::POINT_2_LOT_NO;
		}

	} 
	
	public function setPoint2ExpiryDate($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->point_2_expiry_date !== $v) {
			$this->point_2_expiry_date = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::POINT_2_EXPIRY_DATE;
		}

	} 
	
	public function setPoint5Manufacturer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->point_5_manufacturer !== $v) {
			$this->point_5_manufacturer = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::POINT_5_MANUFACTURER;
		}

	} 
	
	public function setPoint5StdDeviation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->point_5_std_deviation !== $v) {
			$this->point_5_std_deviation = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::POINT_5_STD_DEVIATION;
		}

	} 
	
	public function setPoint5LotNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->point_5_lot_no !== $v) {
			$this->point_5_lot_no = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::POINT_5_LOT_NO;
		}

	} 
	
	public function setPoint5ExpiryDate($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->point_5_expiry_date !== $v) {
			$this->point_5_expiry_date = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::POINT_5_EXPIRY_DATE;
		}

	} 
	
	public function setEmmSerialNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->emm_serial_no !== $v) {
			$this->emm_serial_no = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::EMM_SERIAL_NO;
		}

	} 
	
	public function setEmmCalDate($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->emm_cal_date !== $v) {
			$this->emm_cal_date = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::EMM_CAL_DATE;
		}

	} 
	
	public function setEmmCalDueDate($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->emm_cal_due_date !== $v) {
			$this->emm_cal_due_date = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::EMM_CAL_DUE_DATE;
		}

	} 
	
	public function setTp1Before($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_1_before !== $v) {
			$this->tp_1_before = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_1_BEFORE;
		}

	} 
	
	public function setTp1After($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_1_after !== $v) {
			$this->tp_1_after = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_1_AFTER;
		}

	} 
	
	public function setTp2Before($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_2_before !== $v) {
			$this->tp_2_before = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_2_BEFORE;
		}

	} 
	
	public function setTp2After($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_2_after !== $v) {
			$this->tp_2_after = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_2_AFTER;
		}

	} 
	
	public function setTp3Before($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_3_before !== $v) {
			$this->tp_3_before = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_3_BEFORE;
		}

	} 
	
	public function setTp3After($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_3_after !== $v) {
			$this->tp_3_after = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_3_AFTER;
		}

	} 
	
	public function setTp4Before($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_4_before !== $v) {
			$this->tp_4_before = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_4_BEFORE;
		}

	} 
	
	public function setTp4After($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_4_after !== $v) {
			$this->tp_4_after = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_4_AFTER;
		}

	} 
	
	public function setTp5Before($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_5_before !== $v) {
			$this->tp_5_before = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_5_BEFORE;
		}

	} 
	
	public function setTp5After($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_5_after !== $v) {
			$this->tp_5_after = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_5_AFTER;
		}

	} 
	
	public function setTp6Before($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_6_before !== $v) {
			$this->tp_6_before = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_6_BEFORE;
		}

	} 
	
	public function setTp6After($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_6_after !== $v) {
			$this->tp_6_after = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_6_AFTER;
		}

	} 
	
	public function setTp7Before($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_7_before !== $v) {
			$this->tp_7_before = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_7_BEFORE;
		}

	} 
	
	public function setTp7After($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_7_after !== $v) {
			$this->tp_7_after = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_7_AFTER;
		}

	} 
	
	public function setTp8Before($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_8_before !== $v) {
			$this->tp_8_before = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_8_BEFORE;
		}

	} 
	
	public function setTp8After($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_8_after !== $v) {
			$this->tp_8_after = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_8_AFTER;
		}

	} 
	
	public function setTp9Before($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_9_before !== $v) {
			$this->tp_9_before = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_9_BEFORE;
		}

	} 
	
	public function setTp9After($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_9_after !== $v) {
			$this->tp_9_after = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_9_AFTER;
		}

	} 
	
	public function setTp10Before($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_10_before !== $v) {
			$this->tp_10_before = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_10_BEFORE;
		}

	} 
	
	public function setTp10After($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_10_after !== $v) {
			$this->tp_10_after = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_10_AFTER;
		}

	} 
	
	public function setTp11Before($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_11_before !== $v) {
			$this->tp_11_before = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_11_BEFORE;
		}

	} 
	
	public function setTp11After($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_11_after !== $v) {
			$this->tp_11_after = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_11_AFTER;
		}

	} 
	
	public function setTp12Before($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_12_before !== $v) {
			$this->tp_12_before = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_12_BEFORE;
		}

	} 
	
	public function setTp12After($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tp_12_after !== $v) {
			$this->tp_12_after = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TP_12_AFTER;
		}

	} 
	
	public function setTemperature($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->temperature !== $v) {
			$this->temperature = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TEMPERATURE;
		}

	} 
	
	public function setHumidity($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->humidity !== $v) {
			$this->humidity = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::HUMIDITY;
		}

	} 
	
	public function setZeroCount($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->zero_count !== $v) {
			$this->zero_count = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::ZERO_COUNT;
		}

	} 
	
	public function setInHouseRef($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->in_house_ref !== $v) {
			$this->in_house_ref = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::IN_HOUSE_REF;
		}

	} 
	
	public function setUnitUnderTest($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->unit_under_test !== $v) {
			$this->unit_under_test = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::UNIT_UNDER_TEST;
		}

	} 
	
	public function setTolerance($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tolerance !== $v) {
			$this->tolerance = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::TOLERANCE;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::CREATED_BY;
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
			$this->modifiedColumns[] = LpcCalibrationPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = LpcCalibrationPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = LpcCalibrationPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->company = $rs->getString($startcol + 1);

			$this->trans_date = $rs->getDate($startcol + 2, null);

			$this->due_date = $rs->getDate($startcol + 3, null);

			$this->calibrated_by = $rs->getString($startcol + 4);

			$this->verified_by = $rs->getString($startcol + 5);

			$this->point_2_manufacturer = $rs->getString($startcol + 6);

			$this->point_2_std_deviation = $rs->getString($startcol + 7);

			$this->point_2_lot_no = $rs->getString($startcol + 8);

			$this->point_2_expiry_date = $rs->getString($startcol + 9);

			$this->point_5_manufacturer = $rs->getString($startcol + 10);

			$this->point_5_std_deviation = $rs->getString($startcol + 11);

			$this->point_5_lot_no = $rs->getString($startcol + 12);

			$this->point_5_expiry_date = $rs->getString($startcol + 13);

			$this->emm_serial_no = $rs->getString($startcol + 14);

			$this->emm_cal_date = $rs->getString($startcol + 15);

			$this->emm_cal_due_date = $rs->getString($startcol + 16);

			$this->tp_1_before = $rs->getString($startcol + 17);

			$this->tp_1_after = $rs->getString($startcol + 18);

			$this->tp_2_before = $rs->getString($startcol + 19);

			$this->tp_2_after = $rs->getString($startcol + 20);

			$this->tp_3_before = $rs->getString($startcol + 21);

			$this->tp_3_after = $rs->getString($startcol + 22);

			$this->tp_4_before = $rs->getString($startcol + 23);

			$this->tp_4_after = $rs->getString($startcol + 24);

			$this->tp_5_before = $rs->getString($startcol + 25);

			$this->tp_5_after = $rs->getString($startcol + 26);

			$this->tp_6_before = $rs->getString($startcol + 27);

			$this->tp_6_after = $rs->getString($startcol + 28);

			$this->tp_7_before = $rs->getString($startcol + 29);

			$this->tp_7_after = $rs->getString($startcol + 30);

			$this->tp_8_before = $rs->getString($startcol + 31);

			$this->tp_8_after = $rs->getString($startcol + 32);

			$this->tp_9_before = $rs->getString($startcol + 33);

			$this->tp_9_after = $rs->getString($startcol + 34);

			$this->tp_10_before = $rs->getString($startcol + 35);

			$this->tp_10_after = $rs->getString($startcol + 36);

			$this->tp_11_before = $rs->getString($startcol + 37);

			$this->tp_11_after = $rs->getString($startcol + 38);

			$this->tp_12_before = $rs->getString($startcol + 39);

			$this->tp_12_after = $rs->getString($startcol + 40);

			$this->temperature = $rs->getString($startcol + 41);

			$this->humidity = $rs->getString($startcol + 42);

			$this->zero_count = $rs->getString($startcol + 43);

			$this->in_house_ref = $rs->getString($startcol + 44);

			$this->unit_under_test = $rs->getString($startcol + 45);

			$this->tolerance = $rs->getString($startcol + 46);

			$this->created_by = $rs->getString($startcol + 47);

			$this->date_created = $rs->getTimestamp($startcol + 48, null);

			$this->modified_by = $rs->getString($startcol + 49);

			$this->date_modified = $rs->getTimestamp($startcol + 50, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 51; 
		} catch (Exception $e) {
			throw new PropelException("Error populating LpcCalibration object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(LpcCalibrationPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			LpcCalibrationPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(LpcCalibrationPeer::DATABASE_NAME);
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
					$pk = LpcCalibrationPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setNew(false);
				} else {
					$affectedRows += LpcCalibrationPeer::doUpdate($this, $con);
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


			if (($retval = LpcCalibrationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LpcCalibrationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCompany();
				break;
			case 2:
				return $this->getTransDate();
				break;
			case 3:
				return $this->getDueDate();
				break;
			case 4:
				return $this->getCalibratedBy();
				break;
			case 5:
				return $this->getVerifiedBy();
				break;
			case 6:
				return $this->getPoint2Manufacturer();
				break;
			case 7:
				return $this->getPoint2StdDeviation();
				break;
			case 8:
				return $this->getPoint2LotNo();
				break;
			case 9:
				return $this->getPoint2ExpiryDate();
				break;
			case 10:
				return $this->getPoint5Manufacturer();
				break;
			case 11:
				return $this->getPoint5StdDeviation();
				break;
			case 12:
				return $this->getPoint5LotNo();
				break;
			case 13:
				return $this->getPoint5ExpiryDate();
				break;
			case 14:
				return $this->getEmmSerialNo();
				break;
			case 15:
				return $this->getEmmCalDate();
				break;
			case 16:
				return $this->getEmmCalDueDate();
				break;
			case 17:
				return $this->getTp1Before();
				break;
			case 18:
				return $this->getTp1After();
				break;
			case 19:
				return $this->getTp2Before();
				break;
			case 20:
				return $this->getTp2After();
				break;
			case 21:
				return $this->getTp3Before();
				break;
			case 22:
				return $this->getTp3After();
				break;
			case 23:
				return $this->getTp4Before();
				break;
			case 24:
				return $this->getTp4After();
				break;
			case 25:
				return $this->getTp5Before();
				break;
			case 26:
				return $this->getTp5After();
				break;
			case 27:
				return $this->getTp6Before();
				break;
			case 28:
				return $this->getTp6After();
				break;
			case 29:
				return $this->getTp7Before();
				break;
			case 30:
				return $this->getTp7After();
				break;
			case 31:
				return $this->getTp8Before();
				break;
			case 32:
				return $this->getTp8After();
				break;
			case 33:
				return $this->getTp9Before();
				break;
			case 34:
				return $this->getTp9After();
				break;
			case 35:
				return $this->getTp10Before();
				break;
			case 36:
				return $this->getTp10After();
				break;
			case 37:
				return $this->getTp11Before();
				break;
			case 38:
				return $this->getTp11After();
				break;
			case 39:
				return $this->getTp12Before();
				break;
			case 40:
				return $this->getTp12After();
				break;
			case 41:
				return $this->getTemperature();
				break;
			case 42:
				return $this->getHumidity();
				break;
			case 43:
				return $this->getZeroCount();
				break;
			case 44:
				return $this->getInHouseRef();
				break;
			case 45:
				return $this->getUnitUnderTest();
				break;
			case 46:
				return $this->getTolerance();
				break;
			case 47:
				return $this->getCreatedBy();
				break;
			case 48:
				return $this->getDateCreated();
				break;
			case 49:
				return $this->getModifiedBy();
				break;
			case 50:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LpcCalibrationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCompany(),
			$keys[2] => $this->getTransDate(),
			$keys[3] => $this->getDueDate(),
			$keys[4] => $this->getCalibratedBy(),
			$keys[5] => $this->getVerifiedBy(),
			$keys[6] => $this->getPoint2Manufacturer(),
			$keys[7] => $this->getPoint2StdDeviation(),
			$keys[8] => $this->getPoint2LotNo(),
			$keys[9] => $this->getPoint2ExpiryDate(),
			$keys[10] => $this->getPoint5Manufacturer(),
			$keys[11] => $this->getPoint5StdDeviation(),
			$keys[12] => $this->getPoint5LotNo(),
			$keys[13] => $this->getPoint5ExpiryDate(),
			$keys[14] => $this->getEmmSerialNo(),
			$keys[15] => $this->getEmmCalDate(),
			$keys[16] => $this->getEmmCalDueDate(),
			$keys[17] => $this->getTp1Before(),
			$keys[18] => $this->getTp1After(),
			$keys[19] => $this->getTp2Before(),
			$keys[20] => $this->getTp2After(),
			$keys[21] => $this->getTp3Before(),
			$keys[22] => $this->getTp3After(),
			$keys[23] => $this->getTp4Before(),
			$keys[24] => $this->getTp4After(),
			$keys[25] => $this->getTp5Before(),
			$keys[26] => $this->getTp5After(),
			$keys[27] => $this->getTp6Before(),
			$keys[28] => $this->getTp6After(),
			$keys[29] => $this->getTp7Before(),
			$keys[30] => $this->getTp7After(),
			$keys[31] => $this->getTp8Before(),
			$keys[32] => $this->getTp8After(),
			$keys[33] => $this->getTp9Before(),
			$keys[34] => $this->getTp9After(),
			$keys[35] => $this->getTp10Before(),
			$keys[36] => $this->getTp10After(),
			$keys[37] => $this->getTp11Before(),
			$keys[38] => $this->getTp11After(),
			$keys[39] => $this->getTp12Before(),
			$keys[40] => $this->getTp12After(),
			$keys[41] => $this->getTemperature(),
			$keys[42] => $this->getHumidity(),
			$keys[43] => $this->getZeroCount(),
			$keys[44] => $this->getInHouseRef(),
			$keys[45] => $this->getUnitUnderTest(),
			$keys[46] => $this->getTolerance(),
			$keys[47] => $this->getCreatedBy(),
			$keys[48] => $this->getDateCreated(),
			$keys[49] => $this->getModifiedBy(),
			$keys[50] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LpcCalibrationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCompany($value);
				break;
			case 2:
				$this->setTransDate($value);
				break;
			case 3:
				$this->setDueDate($value);
				break;
			case 4:
				$this->setCalibratedBy($value);
				break;
			case 5:
				$this->setVerifiedBy($value);
				break;
			case 6:
				$this->setPoint2Manufacturer($value);
				break;
			case 7:
				$this->setPoint2StdDeviation($value);
				break;
			case 8:
				$this->setPoint2LotNo($value);
				break;
			case 9:
				$this->setPoint2ExpiryDate($value);
				break;
			case 10:
				$this->setPoint5Manufacturer($value);
				break;
			case 11:
				$this->setPoint5StdDeviation($value);
				break;
			case 12:
				$this->setPoint5LotNo($value);
				break;
			case 13:
				$this->setPoint5ExpiryDate($value);
				break;
			case 14:
				$this->setEmmSerialNo($value);
				break;
			case 15:
				$this->setEmmCalDate($value);
				break;
			case 16:
				$this->setEmmCalDueDate($value);
				break;
			case 17:
				$this->setTp1Before($value);
				break;
			case 18:
				$this->setTp1After($value);
				break;
			case 19:
				$this->setTp2Before($value);
				break;
			case 20:
				$this->setTp2After($value);
				break;
			case 21:
				$this->setTp3Before($value);
				break;
			case 22:
				$this->setTp3After($value);
				break;
			case 23:
				$this->setTp4Before($value);
				break;
			case 24:
				$this->setTp4After($value);
				break;
			case 25:
				$this->setTp5Before($value);
				break;
			case 26:
				$this->setTp5After($value);
				break;
			case 27:
				$this->setTp6Before($value);
				break;
			case 28:
				$this->setTp6After($value);
				break;
			case 29:
				$this->setTp7Before($value);
				break;
			case 30:
				$this->setTp7After($value);
				break;
			case 31:
				$this->setTp8Before($value);
				break;
			case 32:
				$this->setTp8After($value);
				break;
			case 33:
				$this->setTp9Before($value);
				break;
			case 34:
				$this->setTp9After($value);
				break;
			case 35:
				$this->setTp10Before($value);
				break;
			case 36:
				$this->setTp10After($value);
				break;
			case 37:
				$this->setTp11Before($value);
				break;
			case 38:
				$this->setTp11After($value);
				break;
			case 39:
				$this->setTp12Before($value);
				break;
			case 40:
				$this->setTp12After($value);
				break;
			case 41:
				$this->setTemperature($value);
				break;
			case 42:
				$this->setHumidity($value);
				break;
			case 43:
				$this->setZeroCount($value);
				break;
			case 44:
				$this->setInHouseRef($value);
				break;
			case 45:
				$this->setUnitUnderTest($value);
				break;
			case 46:
				$this->setTolerance($value);
				break;
			case 47:
				$this->setCreatedBy($value);
				break;
			case 48:
				$this->setDateCreated($value);
				break;
			case 49:
				$this->setModifiedBy($value);
				break;
			case 50:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LpcCalibrationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCompany($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTransDate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDueDate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCalibratedBy($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setVerifiedBy($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPoint2Manufacturer($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPoint2StdDeviation($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPoint2LotNo($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPoint2ExpiryDate($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPoint5Manufacturer($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPoint5StdDeviation($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setPoint5LotNo($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setPoint5ExpiryDate($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setEmmSerialNo($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setEmmCalDate($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setEmmCalDueDate($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setTp1Before($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setTp1After($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setTp2Before($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setTp2After($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setTp3Before($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setTp3After($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setTp4Before($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setTp4After($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setTp5Before($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setTp5After($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setTp6Before($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setTp6After($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setTp7Before($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setTp7After($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setTp8Before($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setTp8After($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setTp9Before($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setTp9After($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setTp10Before($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setTp10After($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setTp11Before($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setTp11After($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setTp12Before($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setTp12After($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setTemperature($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setHumidity($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setZeroCount($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setInHouseRef($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setUnitUnderTest($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setTolerance($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setCreatedBy($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setDateCreated($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setModifiedBy($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setDateModified($arr[$keys[50]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(LpcCalibrationPeer::DATABASE_NAME);

		if ($this->isColumnModified(LpcCalibrationPeer::ID)) $criteria->add(LpcCalibrationPeer::ID, $this->id);
		if ($this->isColumnModified(LpcCalibrationPeer::COMPANY)) $criteria->add(LpcCalibrationPeer::COMPANY, $this->company);
		if ($this->isColumnModified(LpcCalibrationPeer::TRANS_DATE)) $criteria->add(LpcCalibrationPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(LpcCalibrationPeer::DUE_DATE)) $criteria->add(LpcCalibrationPeer::DUE_DATE, $this->due_date);
		if ($this->isColumnModified(LpcCalibrationPeer::CALIBRATED_BY)) $criteria->add(LpcCalibrationPeer::CALIBRATED_BY, $this->calibrated_by);
		if ($this->isColumnModified(LpcCalibrationPeer::VERIFIED_BY)) $criteria->add(LpcCalibrationPeer::VERIFIED_BY, $this->verified_by);
		if ($this->isColumnModified(LpcCalibrationPeer::POINT_2_MANUFACTURER)) $criteria->add(LpcCalibrationPeer::POINT_2_MANUFACTURER, $this->point_2_manufacturer);
		if ($this->isColumnModified(LpcCalibrationPeer::POINT_2_STD_DEVIATION)) $criteria->add(LpcCalibrationPeer::POINT_2_STD_DEVIATION, $this->point_2_std_deviation);
		if ($this->isColumnModified(LpcCalibrationPeer::POINT_2_LOT_NO)) $criteria->add(LpcCalibrationPeer::POINT_2_LOT_NO, $this->point_2_lot_no);
		if ($this->isColumnModified(LpcCalibrationPeer::POINT_2_EXPIRY_DATE)) $criteria->add(LpcCalibrationPeer::POINT_2_EXPIRY_DATE, $this->point_2_expiry_date);
		if ($this->isColumnModified(LpcCalibrationPeer::POINT_5_MANUFACTURER)) $criteria->add(LpcCalibrationPeer::POINT_5_MANUFACTURER, $this->point_5_manufacturer);
		if ($this->isColumnModified(LpcCalibrationPeer::POINT_5_STD_DEVIATION)) $criteria->add(LpcCalibrationPeer::POINT_5_STD_DEVIATION, $this->point_5_std_deviation);
		if ($this->isColumnModified(LpcCalibrationPeer::POINT_5_LOT_NO)) $criteria->add(LpcCalibrationPeer::POINT_5_LOT_NO, $this->point_5_lot_no);
		if ($this->isColumnModified(LpcCalibrationPeer::POINT_5_EXPIRY_DATE)) $criteria->add(LpcCalibrationPeer::POINT_5_EXPIRY_DATE, $this->point_5_expiry_date);
		if ($this->isColumnModified(LpcCalibrationPeer::EMM_SERIAL_NO)) $criteria->add(LpcCalibrationPeer::EMM_SERIAL_NO, $this->emm_serial_no);
		if ($this->isColumnModified(LpcCalibrationPeer::EMM_CAL_DATE)) $criteria->add(LpcCalibrationPeer::EMM_CAL_DATE, $this->emm_cal_date);
		if ($this->isColumnModified(LpcCalibrationPeer::EMM_CAL_DUE_DATE)) $criteria->add(LpcCalibrationPeer::EMM_CAL_DUE_DATE, $this->emm_cal_due_date);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_1_BEFORE)) $criteria->add(LpcCalibrationPeer::TP_1_BEFORE, $this->tp_1_before);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_1_AFTER)) $criteria->add(LpcCalibrationPeer::TP_1_AFTER, $this->tp_1_after);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_2_BEFORE)) $criteria->add(LpcCalibrationPeer::TP_2_BEFORE, $this->tp_2_before);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_2_AFTER)) $criteria->add(LpcCalibrationPeer::TP_2_AFTER, $this->tp_2_after);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_3_BEFORE)) $criteria->add(LpcCalibrationPeer::TP_3_BEFORE, $this->tp_3_before);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_3_AFTER)) $criteria->add(LpcCalibrationPeer::TP_3_AFTER, $this->tp_3_after);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_4_BEFORE)) $criteria->add(LpcCalibrationPeer::TP_4_BEFORE, $this->tp_4_before);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_4_AFTER)) $criteria->add(LpcCalibrationPeer::TP_4_AFTER, $this->tp_4_after);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_5_BEFORE)) $criteria->add(LpcCalibrationPeer::TP_5_BEFORE, $this->tp_5_before);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_5_AFTER)) $criteria->add(LpcCalibrationPeer::TP_5_AFTER, $this->tp_5_after);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_6_BEFORE)) $criteria->add(LpcCalibrationPeer::TP_6_BEFORE, $this->tp_6_before);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_6_AFTER)) $criteria->add(LpcCalibrationPeer::TP_6_AFTER, $this->tp_6_after);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_7_BEFORE)) $criteria->add(LpcCalibrationPeer::TP_7_BEFORE, $this->tp_7_before);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_7_AFTER)) $criteria->add(LpcCalibrationPeer::TP_7_AFTER, $this->tp_7_after);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_8_BEFORE)) $criteria->add(LpcCalibrationPeer::TP_8_BEFORE, $this->tp_8_before);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_8_AFTER)) $criteria->add(LpcCalibrationPeer::TP_8_AFTER, $this->tp_8_after);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_9_BEFORE)) $criteria->add(LpcCalibrationPeer::TP_9_BEFORE, $this->tp_9_before);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_9_AFTER)) $criteria->add(LpcCalibrationPeer::TP_9_AFTER, $this->tp_9_after);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_10_BEFORE)) $criteria->add(LpcCalibrationPeer::TP_10_BEFORE, $this->tp_10_before);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_10_AFTER)) $criteria->add(LpcCalibrationPeer::TP_10_AFTER, $this->tp_10_after);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_11_BEFORE)) $criteria->add(LpcCalibrationPeer::TP_11_BEFORE, $this->tp_11_before);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_11_AFTER)) $criteria->add(LpcCalibrationPeer::TP_11_AFTER, $this->tp_11_after);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_12_BEFORE)) $criteria->add(LpcCalibrationPeer::TP_12_BEFORE, $this->tp_12_before);
		if ($this->isColumnModified(LpcCalibrationPeer::TP_12_AFTER)) $criteria->add(LpcCalibrationPeer::TP_12_AFTER, $this->tp_12_after);
		if ($this->isColumnModified(LpcCalibrationPeer::TEMPERATURE)) $criteria->add(LpcCalibrationPeer::TEMPERATURE, $this->temperature);
		if ($this->isColumnModified(LpcCalibrationPeer::HUMIDITY)) $criteria->add(LpcCalibrationPeer::HUMIDITY, $this->humidity);
		if ($this->isColumnModified(LpcCalibrationPeer::ZERO_COUNT)) $criteria->add(LpcCalibrationPeer::ZERO_COUNT, $this->zero_count);
		if ($this->isColumnModified(LpcCalibrationPeer::IN_HOUSE_REF)) $criteria->add(LpcCalibrationPeer::IN_HOUSE_REF, $this->in_house_ref);
		if ($this->isColumnModified(LpcCalibrationPeer::UNIT_UNDER_TEST)) $criteria->add(LpcCalibrationPeer::UNIT_UNDER_TEST, $this->unit_under_test);
		if ($this->isColumnModified(LpcCalibrationPeer::TOLERANCE)) $criteria->add(LpcCalibrationPeer::TOLERANCE, $this->tolerance);
		if ($this->isColumnModified(LpcCalibrationPeer::CREATED_BY)) $criteria->add(LpcCalibrationPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(LpcCalibrationPeer::DATE_CREATED)) $criteria->add(LpcCalibrationPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(LpcCalibrationPeer::MODIFIED_BY)) $criteria->add(LpcCalibrationPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(LpcCalibrationPeer::DATE_MODIFIED)) $criteria->add(LpcCalibrationPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(LpcCalibrationPeer::DATABASE_NAME);

		$criteria->add(LpcCalibrationPeer::ID, $this->id);

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

		$copyObj->setCompany($this->company);

		$copyObj->setTransDate($this->trans_date);

		$copyObj->setDueDate($this->due_date);

		$copyObj->setCalibratedBy($this->calibrated_by);

		$copyObj->setVerifiedBy($this->verified_by);

		$copyObj->setPoint2Manufacturer($this->point_2_manufacturer);

		$copyObj->setPoint2StdDeviation($this->point_2_std_deviation);

		$copyObj->setPoint2LotNo($this->point_2_lot_no);

		$copyObj->setPoint2ExpiryDate($this->point_2_expiry_date);

		$copyObj->setPoint5Manufacturer($this->point_5_manufacturer);

		$copyObj->setPoint5StdDeviation($this->point_5_std_deviation);

		$copyObj->setPoint5LotNo($this->point_5_lot_no);

		$copyObj->setPoint5ExpiryDate($this->point_5_expiry_date);

		$copyObj->setEmmSerialNo($this->emm_serial_no);

		$copyObj->setEmmCalDate($this->emm_cal_date);

		$copyObj->setEmmCalDueDate($this->emm_cal_due_date);

		$copyObj->setTp1Before($this->tp_1_before);

		$copyObj->setTp1After($this->tp_1_after);

		$copyObj->setTp2Before($this->tp_2_before);

		$copyObj->setTp2After($this->tp_2_after);

		$copyObj->setTp3Before($this->tp_3_before);

		$copyObj->setTp3After($this->tp_3_after);

		$copyObj->setTp4Before($this->tp_4_before);

		$copyObj->setTp4After($this->tp_4_after);

		$copyObj->setTp5Before($this->tp_5_before);

		$copyObj->setTp5After($this->tp_5_after);

		$copyObj->setTp6Before($this->tp_6_before);

		$copyObj->setTp6After($this->tp_6_after);

		$copyObj->setTp7Before($this->tp_7_before);

		$copyObj->setTp7After($this->tp_7_after);

		$copyObj->setTp8Before($this->tp_8_before);

		$copyObj->setTp8After($this->tp_8_after);

		$copyObj->setTp9Before($this->tp_9_before);

		$copyObj->setTp9After($this->tp_9_after);

		$copyObj->setTp10Before($this->tp_10_before);

		$copyObj->setTp10After($this->tp_10_after);

		$copyObj->setTp11Before($this->tp_11_before);

		$copyObj->setTp11After($this->tp_11_after);

		$copyObj->setTp12Before($this->tp_12_before);

		$copyObj->setTp12After($this->tp_12_after);

		$copyObj->setTemperature($this->temperature);

		$copyObj->setHumidity($this->humidity);

		$copyObj->setZeroCount($this->zero_count);

		$copyObj->setInHouseRef($this->in_house_ref);

		$copyObj->setUnitUnderTest($this->unit_under_test);

		$copyObj->setTolerance($this->tolerance);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateModified($this->date_modified);


		$copyObj->setNew(true);

		$copyObj->setId('null'); 
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
			self::$peer = new LpcCalibrationPeer();
		}
		return self::$peer;
	}

} 
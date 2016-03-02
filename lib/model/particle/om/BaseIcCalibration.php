<?php


abstract class BaseIcCalibration extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $std0f;


	
	protected $std0cl;


	
	protected $std0no2;


	
	protected $std0no3;


	
	protected $std0po4;


	
	protected $std0so4;


	
	protected $std0br;


	
	protected $std0li;


	
	protected $std0na;


	
	protected $std0nh4;


	
	protected $std0k;


	
	protected $std0mg;


	
	protected $std0ca;


	
	protected $std1f;


	
	protected $std1cl;


	
	protected $std1no2;


	
	protected $std1no3;


	
	protected $std1po4;


	
	protected $std1so4;


	
	protected $std1br;


	
	protected $std1li;


	
	protected $std1na;


	
	protected $std1nh4;


	
	protected $std1k;


	
	protected $std1mg;


	
	protected $std1ca;


	
	protected $std2f;


	
	protected $std2cl;


	
	protected $std2no2;


	
	protected $std2no3;


	
	protected $std2po4;


	
	protected $std2so4;


	
	protected $std2br;


	
	protected $std2li;


	
	protected $std2na;


	
	protected $std2nh4;


	
	protected $std2k;


	
	protected $std2mg;


	
	protected $std2ca;


	
	protected $x7peak;


	
	protected $x6peak;


	
	protected $ppbstd1;


	
	protected $ppbstd2;


	
	protected $checked_by;


	
	protected $verified_by;


	
	protected $remark;


	
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

	
	public function getStd0f()
	{

		return $this->std0f;
	}

	
	public function getStd0cl()
	{

		return $this->std0cl;
	}

	
	public function getStd0no2()
	{

		return $this->std0no2;
	}

	
	public function getStd0no3()
	{

		return $this->std0no3;
	}

	
	public function getStd0po4()
	{

		return $this->std0po4;
	}

	
	public function getStd0so4()
	{

		return $this->std0so4;
	}

	
	public function getStd0br()
	{

		return $this->std0br;
	}

	
	public function getStd0li()
	{

		return $this->std0li;
	}

	
	public function getStd0na()
	{

		return $this->std0na;
	}

	
	public function getStd0nh4()
	{

		return $this->std0nh4;
	}

	
	public function getStd0k()
	{

		return $this->std0k;
	}

	
	public function getStd0mg()
	{

		return $this->std0mg;
	}

	
	public function getStd0ca()
	{

		return $this->std0ca;
	}

	
	public function getStd1f()
	{

		return $this->std1f;
	}

	
	public function getStd1cl()
	{

		return $this->std1cl;
	}

	
	public function getStd1no2()
	{

		return $this->std1no2;
	}

	
	public function getStd1no3()
	{

		return $this->std1no3;
	}

	
	public function getStd1po4()
	{

		return $this->std1po4;
	}

	
	public function getStd1so4()
	{

		return $this->std1so4;
	}

	
	public function getStd1br()
	{

		return $this->std1br;
	}

	
	public function getStd1li()
	{

		return $this->std1li;
	}

	
	public function getStd1na()
	{

		return $this->std1na;
	}

	
	public function getStd1nh4()
	{

		return $this->std1nh4;
	}

	
	public function getStd1k()
	{

		return $this->std1k;
	}

	
	public function getStd1mg()
	{

		return $this->std1mg;
	}

	
	public function getStd1ca()
	{

		return $this->std1ca;
	}

	
	public function getStd2f()
	{

		return $this->std2f;
	}

	
	public function getStd2cl()
	{

		return $this->std2cl;
	}

	
	public function getStd2no2()
	{

		return $this->std2no2;
	}

	
	public function getStd2no3()
	{

		return $this->std2no3;
	}

	
	public function getStd2po4()
	{

		return $this->std2po4;
	}

	
	public function getStd2so4()
	{

		return $this->std2so4;
	}

	
	public function getStd2br()
	{

		return $this->std2br;
	}

	
	public function getStd2li()
	{

		return $this->std2li;
	}

	
	public function getStd2na()
	{

		return $this->std2na;
	}

	
	public function getStd2nh4()
	{

		return $this->std2nh4;
	}

	
	public function getStd2k()
	{

		return $this->std2k;
	}

	
	public function getStd2mg()
	{

		return $this->std2mg;
	}

	
	public function getStd2ca()
	{

		return $this->std2ca;
	}

	
	public function getX7peak()
	{

		return $this->x7peak;
	}

	
	public function getX6peak()
	{

		return $this->x6peak;
	}

	
	public function getPpbstd1()
	{

		return $this->ppbstd1;
	}

	
	public function getPpbstd2()
	{

		return $this->ppbstd2;
	}

	
	public function getCheckedBy()
	{

		return $this->checked_by;
	}

	
	public function getVerifiedBy()
	{

		return $this->verified_by;
	}

	
	public function getRemark()
	{

		return $this->remark;
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
			$this->modifiedColumns[] = IcCalibrationPeer::ID;
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
			$this->modifiedColumns[] = IcCalibrationPeer::TRANS_DATE;
		}

	} 
	
	public function setStd0f($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std0f !== $v) {
			$this->std0f = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD0F;
		}

	} 
	
	public function setStd0cl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std0cl !== $v) {
			$this->std0cl = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD0CL;
		}

	} 
	
	public function setStd0no2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std0no2 !== $v) {
			$this->std0no2 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD0NO2;
		}

	} 
	
	public function setStd0no3($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std0no3 !== $v) {
			$this->std0no3 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD0NO3;
		}

	} 
	
	public function setStd0po4($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std0po4 !== $v) {
			$this->std0po4 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD0PO4;
		}

	} 
	
	public function setStd0so4($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std0so4 !== $v) {
			$this->std0so4 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD0SO4;
		}

	} 
	
	public function setStd0br($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std0br !== $v) {
			$this->std0br = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD0BR;
		}

	} 
	
	public function setStd0li($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std0li !== $v) {
			$this->std0li = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD0LI;
		}

	} 
	
	public function setStd0na($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std0na !== $v) {
			$this->std0na = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD0NA;
		}

	} 
	
	public function setStd0nh4($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std0nh4 !== $v) {
			$this->std0nh4 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD0NH4;
		}

	} 
	
	public function setStd0k($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std0k !== $v) {
			$this->std0k = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD0K;
		}

	} 
	
	public function setStd0mg($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std0mg !== $v) {
			$this->std0mg = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD0MG;
		}

	} 
	
	public function setStd0ca($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std0ca !== $v) {
			$this->std0ca = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD0CA;
		}

	} 
	
	public function setStd1f($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std1f !== $v) {
			$this->std1f = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD1F;
		}

	} 
	
	public function setStd1cl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std1cl !== $v) {
			$this->std1cl = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD1CL;
		}

	} 
	
	public function setStd1no2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std1no2 !== $v) {
			$this->std1no2 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD1NO2;
		}

	} 
	
	public function setStd1no3($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std1no3 !== $v) {
			$this->std1no3 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD1NO3;
		}

	} 
	
	public function setStd1po4($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std1po4 !== $v) {
			$this->std1po4 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD1PO4;
		}

	} 
	
	public function setStd1so4($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std1so4 !== $v) {
			$this->std1so4 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD1SO4;
		}

	} 
	
	public function setStd1br($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std1br !== $v) {
			$this->std1br = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD1BR;
		}

	} 
	
	public function setStd1li($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std1li !== $v) {
			$this->std1li = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD1LI;
		}

	} 
	
	public function setStd1na($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std1na !== $v) {
			$this->std1na = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD1NA;
		}

	} 
	
	public function setStd1nh4($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std1nh4 !== $v) {
			$this->std1nh4 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD1NH4;
		}

	} 
	
	public function setStd1k($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std1k !== $v) {
			$this->std1k = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD1K;
		}

	} 
	
	public function setStd1mg($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std1mg !== $v) {
			$this->std1mg = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD1MG;
		}

	} 
	
	public function setStd1ca($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std1ca !== $v) {
			$this->std1ca = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD1CA;
		}

	} 
	
	public function setStd2f($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std2f !== $v) {
			$this->std2f = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD2F;
		}

	} 
	
	public function setStd2cl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std2cl !== $v) {
			$this->std2cl = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD2CL;
		}

	} 
	
	public function setStd2no2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std2no2 !== $v) {
			$this->std2no2 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD2NO2;
		}

	} 
	
	public function setStd2no3($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std2no3 !== $v) {
			$this->std2no3 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD2NO3;
		}

	} 
	
	public function setStd2po4($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std2po4 !== $v) {
			$this->std2po4 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD2PO4;
		}

	} 
	
	public function setStd2so4($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std2so4 !== $v) {
			$this->std2so4 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD2SO4;
		}

	} 
	
	public function setStd2br($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std2br !== $v) {
			$this->std2br = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD2BR;
		}

	} 
	
	public function setStd2li($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std2li !== $v) {
			$this->std2li = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD2LI;
		}

	} 
	
	public function setStd2na($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std2na !== $v) {
			$this->std2na = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD2NA;
		}

	} 
	
	public function setStd2nh4($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std2nh4 !== $v) {
			$this->std2nh4 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD2NH4;
		}

	} 
	
	public function setStd2k($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std2k !== $v) {
			$this->std2k = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD2K;
		}

	} 
	
	public function setStd2mg($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std2mg !== $v) {
			$this->std2mg = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD2MG;
		}

	} 
	
	public function setStd2ca($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->std2ca !== $v) {
			$this->std2ca = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::STD2CA;
		}

	} 
	
	public function setX7peak($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->x7peak !== $v) {
			$this->x7peak = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::X7PEAK;
		}

	} 
	
	public function setX6peak($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->x6peak !== $v) {
			$this->x6peak = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::X6PEAK;
		}

	} 
	
	public function setPpbstd1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ppbstd1 !== $v) {
			$this->ppbstd1 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::PPBSTD1;
		}

	} 
	
	public function setPpbstd2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ppbstd2 !== $v) {
			$this->ppbstd2 = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::PPBSTD2;
		}

	} 
	
	public function setCheckedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->checked_by !== $v) {
			$this->checked_by = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::CHECKED_BY;
		}

	} 
	
	public function setVerifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by !== $v) {
			$this->verified_by = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::VERIFIED_BY;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::REMARK;
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
			$this->modifiedColumns[] = IcCalibrationPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::CREATED_BY;
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
			$this->modifiedColumns[] = IcCalibrationPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = IcCalibrationPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->std0f = $rs->getString($startcol + 2);

			$this->std0cl = $rs->getString($startcol + 3);

			$this->std0no2 = $rs->getString($startcol + 4);

			$this->std0no3 = $rs->getString($startcol + 5);

			$this->std0po4 = $rs->getString($startcol + 6);

			$this->std0so4 = $rs->getString($startcol + 7);

			$this->std0br = $rs->getString($startcol + 8);

			$this->std0li = $rs->getString($startcol + 9);

			$this->std0na = $rs->getString($startcol + 10);

			$this->std0nh4 = $rs->getString($startcol + 11);

			$this->std0k = $rs->getString($startcol + 12);

			$this->std0mg = $rs->getString($startcol + 13);

			$this->std0ca = $rs->getString($startcol + 14);

			$this->std1f = $rs->getString($startcol + 15);

			$this->std1cl = $rs->getString($startcol + 16);

			$this->std1no2 = $rs->getString($startcol + 17);

			$this->std1no3 = $rs->getString($startcol + 18);

			$this->std1po4 = $rs->getString($startcol + 19);

			$this->std1so4 = $rs->getString($startcol + 20);

			$this->std1br = $rs->getString($startcol + 21);

			$this->std1li = $rs->getString($startcol + 22);

			$this->std1na = $rs->getString($startcol + 23);

			$this->std1nh4 = $rs->getString($startcol + 24);

			$this->std1k = $rs->getString($startcol + 25);

			$this->std1mg = $rs->getString($startcol + 26);

			$this->std1ca = $rs->getString($startcol + 27);

			$this->std2f = $rs->getString($startcol + 28);

			$this->std2cl = $rs->getString($startcol + 29);

			$this->std2no2 = $rs->getString($startcol + 30);

			$this->std2no3 = $rs->getString($startcol + 31);

			$this->std2po4 = $rs->getString($startcol + 32);

			$this->std2so4 = $rs->getString($startcol + 33);

			$this->std2br = $rs->getString($startcol + 34);

			$this->std2li = $rs->getString($startcol + 35);

			$this->std2na = $rs->getString($startcol + 36);

			$this->std2nh4 = $rs->getString($startcol + 37);

			$this->std2k = $rs->getString($startcol + 38);

			$this->std2mg = $rs->getString($startcol + 39);

			$this->std2ca = $rs->getString($startcol + 40);

			$this->x7peak = $rs->getString($startcol + 41);

			$this->x6peak = $rs->getString($startcol + 42);

			$this->ppbstd1 = $rs->getString($startcol + 43);

			$this->ppbstd2 = $rs->getString($startcol + 44);

			$this->checked_by = $rs->getString($startcol + 45);

			$this->verified_by = $rs->getString($startcol + 46);

			$this->remark = $rs->getString($startcol + 47);

			$this->date_created = $rs->getTimestamp($startcol + 48, null);

			$this->created_by = $rs->getString($startcol + 49);

			$this->date_modified = $rs->getTimestamp($startcol + 50, null);

			$this->modified_by = $rs->getString($startcol + 51);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 52; 
		} catch (Exception $e) {
			throw new PropelException("Error populating IcCalibration object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(IcCalibrationPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			IcCalibrationPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(IcCalibrationPeer::DATABASE_NAME);
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
					$pk = IcCalibrationPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += IcCalibrationPeer::doUpdate($this, $con);
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


			if (($retval = IcCalibrationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = IcCalibrationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTransDate();
				break;
			case 2:
				return $this->getStd0f();
				break;
			case 3:
				return $this->getStd0cl();
				break;
			case 4:
				return $this->getStd0no2();
				break;
			case 5:
				return $this->getStd0no3();
				break;
			case 6:
				return $this->getStd0po4();
				break;
			case 7:
				return $this->getStd0so4();
				break;
			case 8:
				return $this->getStd0br();
				break;
			case 9:
				return $this->getStd0li();
				break;
			case 10:
				return $this->getStd0na();
				break;
			case 11:
				return $this->getStd0nh4();
				break;
			case 12:
				return $this->getStd0k();
				break;
			case 13:
				return $this->getStd0mg();
				break;
			case 14:
				return $this->getStd0ca();
				break;
			case 15:
				return $this->getStd1f();
				break;
			case 16:
				return $this->getStd1cl();
				break;
			case 17:
				return $this->getStd1no2();
				break;
			case 18:
				return $this->getStd1no3();
				break;
			case 19:
				return $this->getStd1po4();
				break;
			case 20:
				return $this->getStd1so4();
				break;
			case 21:
				return $this->getStd1br();
				break;
			case 22:
				return $this->getStd1li();
				break;
			case 23:
				return $this->getStd1na();
				break;
			case 24:
				return $this->getStd1nh4();
				break;
			case 25:
				return $this->getStd1k();
				break;
			case 26:
				return $this->getStd1mg();
				break;
			case 27:
				return $this->getStd1ca();
				break;
			case 28:
				return $this->getStd2f();
				break;
			case 29:
				return $this->getStd2cl();
				break;
			case 30:
				return $this->getStd2no2();
				break;
			case 31:
				return $this->getStd2no3();
				break;
			case 32:
				return $this->getStd2po4();
				break;
			case 33:
				return $this->getStd2so4();
				break;
			case 34:
				return $this->getStd2br();
				break;
			case 35:
				return $this->getStd2li();
				break;
			case 36:
				return $this->getStd2na();
				break;
			case 37:
				return $this->getStd2nh4();
				break;
			case 38:
				return $this->getStd2k();
				break;
			case 39:
				return $this->getStd2mg();
				break;
			case 40:
				return $this->getStd2ca();
				break;
			case 41:
				return $this->getX7peak();
				break;
			case 42:
				return $this->getX6peak();
				break;
			case 43:
				return $this->getPpbstd1();
				break;
			case 44:
				return $this->getPpbstd2();
				break;
			case 45:
				return $this->getCheckedBy();
				break;
			case 46:
				return $this->getVerifiedBy();
				break;
			case 47:
				return $this->getRemark();
				break;
			case 48:
				return $this->getDateCreated();
				break;
			case 49:
				return $this->getCreatedBy();
				break;
			case 50:
				return $this->getDateModified();
				break;
			case 51:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = IcCalibrationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getStd0f(),
			$keys[3] => $this->getStd0cl(),
			$keys[4] => $this->getStd0no2(),
			$keys[5] => $this->getStd0no3(),
			$keys[6] => $this->getStd0po4(),
			$keys[7] => $this->getStd0so4(),
			$keys[8] => $this->getStd0br(),
			$keys[9] => $this->getStd0li(),
			$keys[10] => $this->getStd0na(),
			$keys[11] => $this->getStd0nh4(),
			$keys[12] => $this->getStd0k(),
			$keys[13] => $this->getStd0mg(),
			$keys[14] => $this->getStd0ca(),
			$keys[15] => $this->getStd1f(),
			$keys[16] => $this->getStd1cl(),
			$keys[17] => $this->getStd1no2(),
			$keys[18] => $this->getStd1no3(),
			$keys[19] => $this->getStd1po4(),
			$keys[20] => $this->getStd1so4(),
			$keys[21] => $this->getStd1br(),
			$keys[22] => $this->getStd1li(),
			$keys[23] => $this->getStd1na(),
			$keys[24] => $this->getStd1nh4(),
			$keys[25] => $this->getStd1k(),
			$keys[26] => $this->getStd1mg(),
			$keys[27] => $this->getStd1ca(),
			$keys[28] => $this->getStd2f(),
			$keys[29] => $this->getStd2cl(),
			$keys[30] => $this->getStd2no2(),
			$keys[31] => $this->getStd2no3(),
			$keys[32] => $this->getStd2po4(),
			$keys[33] => $this->getStd2so4(),
			$keys[34] => $this->getStd2br(),
			$keys[35] => $this->getStd2li(),
			$keys[36] => $this->getStd2na(),
			$keys[37] => $this->getStd2nh4(),
			$keys[38] => $this->getStd2k(),
			$keys[39] => $this->getStd2mg(),
			$keys[40] => $this->getStd2ca(),
			$keys[41] => $this->getX7peak(),
			$keys[42] => $this->getX6peak(),
			$keys[43] => $this->getPpbstd1(),
			$keys[44] => $this->getPpbstd2(),
			$keys[45] => $this->getCheckedBy(),
			$keys[46] => $this->getVerifiedBy(),
			$keys[47] => $this->getRemark(),
			$keys[48] => $this->getDateCreated(),
			$keys[49] => $this->getCreatedBy(),
			$keys[50] => $this->getDateModified(),
			$keys[51] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = IcCalibrationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTransDate($value);
				break;
			case 2:
				$this->setStd0f($value);
				break;
			case 3:
				$this->setStd0cl($value);
				break;
			case 4:
				$this->setStd0no2($value);
				break;
			case 5:
				$this->setStd0no3($value);
				break;
			case 6:
				$this->setStd0po4($value);
				break;
			case 7:
				$this->setStd0so4($value);
				break;
			case 8:
				$this->setStd0br($value);
				break;
			case 9:
				$this->setStd0li($value);
				break;
			case 10:
				$this->setStd0na($value);
				break;
			case 11:
				$this->setStd0nh4($value);
				break;
			case 12:
				$this->setStd0k($value);
				break;
			case 13:
				$this->setStd0mg($value);
				break;
			case 14:
				$this->setStd0ca($value);
				break;
			case 15:
				$this->setStd1f($value);
				break;
			case 16:
				$this->setStd1cl($value);
				break;
			case 17:
				$this->setStd1no2($value);
				break;
			case 18:
				$this->setStd1no3($value);
				break;
			case 19:
				$this->setStd1po4($value);
				break;
			case 20:
				$this->setStd1so4($value);
				break;
			case 21:
				$this->setStd1br($value);
				break;
			case 22:
				$this->setStd1li($value);
				break;
			case 23:
				$this->setStd1na($value);
				break;
			case 24:
				$this->setStd1nh4($value);
				break;
			case 25:
				$this->setStd1k($value);
				break;
			case 26:
				$this->setStd1mg($value);
				break;
			case 27:
				$this->setStd1ca($value);
				break;
			case 28:
				$this->setStd2f($value);
				break;
			case 29:
				$this->setStd2cl($value);
				break;
			case 30:
				$this->setStd2no2($value);
				break;
			case 31:
				$this->setStd2no3($value);
				break;
			case 32:
				$this->setStd2po4($value);
				break;
			case 33:
				$this->setStd2so4($value);
				break;
			case 34:
				$this->setStd2br($value);
				break;
			case 35:
				$this->setStd2li($value);
				break;
			case 36:
				$this->setStd2na($value);
				break;
			case 37:
				$this->setStd2nh4($value);
				break;
			case 38:
				$this->setStd2k($value);
				break;
			case 39:
				$this->setStd2mg($value);
				break;
			case 40:
				$this->setStd2ca($value);
				break;
			case 41:
				$this->setX7peak($value);
				break;
			case 42:
				$this->setX6peak($value);
				break;
			case 43:
				$this->setPpbstd1($value);
				break;
			case 44:
				$this->setPpbstd2($value);
				break;
			case 45:
				$this->setCheckedBy($value);
				break;
			case 46:
				$this->setVerifiedBy($value);
				break;
			case 47:
				$this->setRemark($value);
				break;
			case 48:
				$this->setDateCreated($value);
				break;
			case 49:
				$this->setCreatedBy($value);
				break;
			case 50:
				$this->setDateModified($value);
				break;
			case 51:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = IcCalibrationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setStd0f($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setStd0cl($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setStd0no2($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setStd0no3($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setStd0po4($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setStd0so4($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setStd0br($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setStd0li($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setStd0na($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setStd0nh4($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setStd0k($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setStd0mg($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setStd0ca($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setStd1f($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setStd1cl($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setStd1no2($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setStd1no3($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setStd1po4($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setStd1so4($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setStd1br($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setStd1li($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setStd1na($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setStd1nh4($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setStd1k($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setStd1mg($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setStd1ca($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setStd2f($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setStd2cl($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setStd2no2($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setStd2no3($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setStd2po4($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setStd2so4($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setStd2br($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setStd2li($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setStd2na($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setStd2nh4($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setStd2k($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setStd2mg($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setStd2ca($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setX7peak($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setX6peak($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setPpbstd1($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setPpbstd2($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setCheckedBy($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setVerifiedBy($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setRemark($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setDateCreated($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setCreatedBy($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setDateModified($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setModifiedBy($arr[$keys[51]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(IcCalibrationPeer::DATABASE_NAME);

		if ($this->isColumnModified(IcCalibrationPeer::ID)) $criteria->add(IcCalibrationPeer::ID, $this->id);
		if ($this->isColumnModified(IcCalibrationPeer::TRANS_DATE)) $criteria->add(IcCalibrationPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(IcCalibrationPeer::STD0F)) $criteria->add(IcCalibrationPeer::STD0F, $this->std0f);
		if ($this->isColumnModified(IcCalibrationPeer::STD0CL)) $criteria->add(IcCalibrationPeer::STD0CL, $this->std0cl);
		if ($this->isColumnModified(IcCalibrationPeer::STD0NO2)) $criteria->add(IcCalibrationPeer::STD0NO2, $this->std0no2);
		if ($this->isColumnModified(IcCalibrationPeer::STD0NO3)) $criteria->add(IcCalibrationPeer::STD0NO3, $this->std0no3);
		if ($this->isColumnModified(IcCalibrationPeer::STD0PO4)) $criteria->add(IcCalibrationPeer::STD0PO4, $this->std0po4);
		if ($this->isColumnModified(IcCalibrationPeer::STD0SO4)) $criteria->add(IcCalibrationPeer::STD0SO4, $this->std0so4);
		if ($this->isColumnModified(IcCalibrationPeer::STD0BR)) $criteria->add(IcCalibrationPeer::STD0BR, $this->std0br);
		if ($this->isColumnModified(IcCalibrationPeer::STD0LI)) $criteria->add(IcCalibrationPeer::STD0LI, $this->std0li);
		if ($this->isColumnModified(IcCalibrationPeer::STD0NA)) $criteria->add(IcCalibrationPeer::STD0NA, $this->std0na);
		if ($this->isColumnModified(IcCalibrationPeer::STD0NH4)) $criteria->add(IcCalibrationPeer::STD0NH4, $this->std0nh4);
		if ($this->isColumnModified(IcCalibrationPeer::STD0K)) $criteria->add(IcCalibrationPeer::STD0K, $this->std0k);
		if ($this->isColumnModified(IcCalibrationPeer::STD0MG)) $criteria->add(IcCalibrationPeer::STD0MG, $this->std0mg);
		if ($this->isColumnModified(IcCalibrationPeer::STD0CA)) $criteria->add(IcCalibrationPeer::STD0CA, $this->std0ca);
		if ($this->isColumnModified(IcCalibrationPeer::STD1F)) $criteria->add(IcCalibrationPeer::STD1F, $this->std1f);
		if ($this->isColumnModified(IcCalibrationPeer::STD1CL)) $criteria->add(IcCalibrationPeer::STD1CL, $this->std1cl);
		if ($this->isColumnModified(IcCalibrationPeer::STD1NO2)) $criteria->add(IcCalibrationPeer::STD1NO2, $this->std1no2);
		if ($this->isColumnModified(IcCalibrationPeer::STD1NO3)) $criteria->add(IcCalibrationPeer::STD1NO3, $this->std1no3);
		if ($this->isColumnModified(IcCalibrationPeer::STD1PO4)) $criteria->add(IcCalibrationPeer::STD1PO4, $this->std1po4);
		if ($this->isColumnModified(IcCalibrationPeer::STD1SO4)) $criteria->add(IcCalibrationPeer::STD1SO4, $this->std1so4);
		if ($this->isColumnModified(IcCalibrationPeer::STD1BR)) $criteria->add(IcCalibrationPeer::STD1BR, $this->std1br);
		if ($this->isColumnModified(IcCalibrationPeer::STD1LI)) $criteria->add(IcCalibrationPeer::STD1LI, $this->std1li);
		if ($this->isColumnModified(IcCalibrationPeer::STD1NA)) $criteria->add(IcCalibrationPeer::STD1NA, $this->std1na);
		if ($this->isColumnModified(IcCalibrationPeer::STD1NH4)) $criteria->add(IcCalibrationPeer::STD1NH4, $this->std1nh4);
		if ($this->isColumnModified(IcCalibrationPeer::STD1K)) $criteria->add(IcCalibrationPeer::STD1K, $this->std1k);
		if ($this->isColumnModified(IcCalibrationPeer::STD1MG)) $criteria->add(IcCalibrationPeer::STD1MG, $this->std1mg);
		if ($this->isColumnModified(IcCalibrationPeer::STD1CA)) $criteria->add(IcCalibrationPeer::STD1CA, $this->std1ca);
		if ($this->isColumnModified(IcCalibrationPeer::STD2F)) $criteria->add(IcCalibrationPeer::STD2F, $this->std2f);
		if ($this->isColumnModified(IcCalibrationPeer::STD2CL)) $criteria->add(IcCalibrationPeer::STD2CL, $this->std2cl);
		if ($this->isColumnModified(IcCalibrationPeer::STD2NO2)) $criteria->add(IcCalibrationPeer::STD2NO2, $this->std2no2);
		if ($this->isColumnModified(IcCalibrationPeer::STD2NO3)) $criteria->add(IcCalibrationPeer::STD2NO3, $this->std2no3);
		if ($this->isColumnModified(IcCalibrationPeer::STD2PO4)) $criteria->add(IcCalibrationPeer::STD2PO4, $this->std2po4);
		if ($this->isColumnModified(IcCalibrationPeer::STD2SO4)) $criteria->add(IcCalibrationPeer::STD2SO4, $this->std2so4);
		if ($this->isColumnModified(IcCalibrationPeer::STD2BR)) $criteria->add(IcCalibrationPeer::STD2BR, $this->std2br);
		if ($this->isColumnModified(IcCalibrationPeer::STD2LI)) $criteria->add(IcCalibrationPeer::STD2LI, $this->std2li);
		if ($this->isColumnModified(IcCalibrationPeer::STD2NA)) $criteria->add(IcCalibrationPeer::STD2NA, $this->std2na);
		if ($this->isColumnModified(IcCalibrationPeer::STD2NH4)) $criteria->add(IcCalibrationPeer::STD2NH4, $this->std2nh4);
		if ($this->isColumnModified(IcCalibrationPeer::STD2K)) $criteria->add(IcCalibrationPeer::STD2K, $this->std2k);
		if ($this->isColumnModified(IcCalibrationPeer::STD2MG)) $criteria->add(IcCalibrationPeer::STD2MG, $this->std2mg);
		if ($this->isColumnModified(IcCalibrationPeer::STD2CA)) $criteria->add(IcCalibrationPeer::STD2CA, $this->std2ca);
		if ($this->isColumnModified(IcCalibrationPeer::X7PEAK)) $criteria->add(IcCalibrationPeer::X7PEAK, $this->x7peak);
		if ($this->isColumnModified(IcCalibrationPeer::X6PEAK)) $criteria->add(IcCalibrationPeer::X6PEAK, $this->x6peak);
		if ($this->isColumnModified(IcCalibrationPeer::PPBSTD1)) $criteria->add(IcCalibrationPeer::PPBSTD1, $this->ppbstd1);
		if ($this->isColumnModified(IcCalibrationPeer::PPBSTD2)) $criteria->add(IcCalibrationPeer::PPBSTD2, $this->ppbstd2);
		if ($this->isColumnModified(IcCalibrationPeer::CHECKED_BY)) $criteria->add(IcCalibrationPeer::CHECKED_BY, $this->checked_by);
		if ($this->isColumnModified(IcCalibrationPeer::VERIFIED_BY)) $criteria->add(IcCalibrationPeer::VERIFIED_BY, $this->verified_by);
		if ($this->isColumnModified(IcCalibrationPeer::REMARK)) $criteria->add(IcCalibrationPeer::REMARK, $this->remark);
		if ($this->isColumnModified(IcCalibrationPeer::DATE_CREATED)) $criteria->add(IcCalibrationPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(IcCalibrationPeer::CREATED_BY)) $criteria->add(IcCalibrationPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(IcCalibrationPeer::DATE_MODIFIED)) $criteria->add(IcCalibrationPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(IcCalibrationPeer::MODIFIED_BY)) $criteria->add(IcCalibrationPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(IcCalibrationPeer::DATABASE_NAME);

		$criteria->add(IcCalibrationPeer::ID, $this->id);

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

		$copyObj->setTransDate($this->trans_date);

		$copyObj->setStd0f($this->std0f);

		$copyObj->setStd0cl($this->std0cl);

		$copyObj->setStd0no2($this->std0no2);

		$copyObj->setStd0no3($this->std0no3);

		$copyObj->setStd0po4($this->std0po4);

		$copyObj->setStd0so4($this->std0so4);

		$copyObj->setStd0br($this->std0br);

		$copyObj->setStd0li($this->std0li);

		$copyObj->setStd0na($this->std0na);

		$copyObj->setStd0nh4($this->std0nh4);

		$copyObj->setStd0k($this->std0k);

		$copyObj->setStd0mg($this->std0mg);

		$copyObj->setStd0ca($this->std0ca);

		$copyObj->setStd1f($this->std1f);

		$copyObj->setStd1cl($this->std1cl);

		$copyObj->setStd1no2($this->std1no2);

		$copyObj->setStd1no3($this->std1no3);

		$copyObj->setStd1po4($this->std1po4);

		$copyObj->setStd1so4($this->std1so4);

		$copyObj->setStd1br($this->std1br);

		$copyObj->setStd1li($this->std1li);

		$copyObj->setStd1na($this->std1na);

		$copyObj->setStd1nh4($this->std1nh4);

		$copyObj->setStd1k($this->std1k);

		$copyObj->setStd1mg($this->std1mg);

		$copyObj->setStd1ca($this->std1ca);

		$copyObj->setStd2f($this->std2f);

		$copyObj->setStd2cl($this->std2cl);

		$copyObj->setStd2no2($this->std2no2);

		$copyObj->setStd2no3($this->std2no3);

		$copyObj->setStd2po4($this->std2po4);

		$copyObj->setStd2so4($this->std2so4);

		$copyObj->setStd2br($this->std2br);

		$copyObj->setStd2li($this->std2li);

		$copyObj->setStd2na($this->std2na);

		$copyObj->setStd2nh4($this->std2nh4);

		$copyObj->setStd2k($this->std2k);

		$copyObj->setStd2mg($this->std2mg);

		$copyObj->setStd2ca($this->std2ca);

		$copyObj->setX7peak($this->x7peak);

		$copyObj->setX6peak($this->x6peak);

		$copyObj->setPpbstd1($this->ppbstd1);

		$copyObj->setPpbstd2($this->ppbstd2);

		$copyObj->setCheckedBy($this->checked_by);

		$copyObj->setVerifiedBy($this->verified_by);

		$copyObj->setRemark($this->remark);

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
			self::$peer = new IcCalibrationPeer();
		}
		return self::$peer;
	}

} 
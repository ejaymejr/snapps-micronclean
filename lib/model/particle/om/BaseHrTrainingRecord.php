<?php


abstract class BaseHrTrainingRecord extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $date_from;


	
	protected $date_to;


	
	protected $employee_no = 'null';


	
	protected $name;


	
	protected $commence_date;


	
	protected $company;


	
	protected $no_hrs;


	
	protected $basic_training = 'null';


	
	protected $soil_sorting = 'null';


	
	protected $loading_washer = 'null';


	
	protected $unloading_washer = 'null';


	
	protected $cleanroom_dryer = 'null';


	
	protected $folding = 'null';


	
	protected $vacuum_packer = 'null';


	
	protected $air_particle_counter = 'null';


	
	protected $helmke_drum = 'null';


	
	protected $water_particle_counter = 'null';


	
	protected $thermo_patch = 'null';


	
	protected $sewing_machine = 'null';


	
	protected $stud_machine = 'null';


	
	protected $dispatch = 'null';


	
	protected $shoe_dryer = 'null';


	
	protected $shoe_washer = 'null';


	
	protected $esd_measurement = 'null';


	
	protected $beyond_repair = 'null';


	
	protected $bio_burden_test = 'null';


	
	protected $external_course;


	
	protected $remarks;


	
	protected $verify = 'null';


	
	protected $created_by = 'null';


	
	protected $date_created;


	
	protected $modified_by = 'null';


	
	protected $date_modified;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getDateTime($format = 'Y-m-d H:i:s')
	{

		if ($this->date_time === null || $this->date_time === '') {
			return null;
		} elseif (!is_int($this->date_time)) {
						$ts = strtotime($this->date_time);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_time] as date/time value: " . var_export($this->date_time, true));
			}
		} else {
			$ts = $this->date_time;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateFrom($format = 'Y-m-d')
	{

		if ($this->date_from === null || $this->date_from === '') {
			return null;
		} elseif (!is_int($this->date_from)) {
						$ts = strtotime($this->date_from);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_from] as date/time value: " . var_export($this->date_from, true));
			}
		} else {
			$ts = $this->date_from;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateTo($format = 'Y-m-d')
	{

		if ($this->date_to === null || $this->date_to === '') {
			return null;
		} elseif (!is_int($this->date_to)) {
						$ts = strtotime($this->date_to);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_to] as date/time value: " . var_export($this->date_to, true));
			}
		} else {
			$ts = $this->date_to;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getEmployeeNo()
	{

		return $this->employee_no;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getCommenceDate($format = 'Y-m-d H:i:s')
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

	
	public function getCompany()
	{

		return $this->company;
	}

	
	public function getNoHrs()
	{

		return $this->no_hrs;
	}

	
	public function getBasicTraining()
	{

		return $this->basic_training;
	}

	
	public function getSoilSorting()
	{

		return $this->soil_sorting;
	}

	
	public function getLoadingWasher()
	{

		return $this->loading_washer;
	}

	
	public function getUnloadingWasher()
	{

		return $this->unloading_washer;
	}

	
	public function getCleanroomDryer()
	{

		return $this->cleanroom_dryer;
	}

	
	public function getFolding()
	{

		return $this->folding;
	}

	
	public function getVacuumPacker()
	{

		return $this->vacuum_packer;
	}

	
	public function getAirParticleCounter()
	{

		return $this->air_particle_counter;
	}

	
	public function getHelmkeDrum()
	{

		return $this->helmke_drum;
	}

	
	public function getWaterParticleCounter()
	{

		return $this->water_particle_counter;
	}

	
	public function getThermoPatch()
	{

		return $this->thermo_patch;
	}

	
	public function getSewingMachine()
	{

		return $this->sewing_machine;
	}

	
	public function getStudMachine()
	{

		return $this->stud_machine;
	}

	
	public function getDispatch()
	{

		return $this->dispatch;
	}

	
	public function getShoeDryer()
	{

		return $this->shoe_dryer;
	}

	
	public function getShoeWasher()
	{

		return $this->shoe_washer;
	}

	
	public function getEsdMeasurement()
	{

		return $this->esd_measurement;
	}

	
	public function getBeyondRepair()
	{

		return $this->beyond_repair;
	}

	
	public function getBioBurdenTest()
	{

		return $this->bio_burden_test;
	}

	
	public function getExternalCourse()
	{

		return $this->external_course;
	}

	
	public function getRemarks()
	{

		return $this->remarks;
	}

	
	public function getVerify()
	{

		return $this->verify;
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

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::ID;
		}

	} 
	
	public function setDateTime($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_time] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_time !== $ts) {
			$this->date_time = $ts;
			$this->modifiedColumns[] = HrTrainingRecordPeer::DATE_TIME;
		}

	} 
	
	public function setDateFrom($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_from] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_from !== $ts) {
			$this->date_from = $ts;
			$this->modifiedColumns[] = HrTrainingRecordPeer::DATE_FROM;
		}

	} 
	
	public function setDateTo($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_to] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_to !== $ts) {
			$this->date_to = $ts;
			$this->modifiedColumns[] = HrTrainingRecordPeer::DATE_TO;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v || $v === 'null') {
			$this->employee_no = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::EMPLOYEE_NO;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::NAME;
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
			$this->modifiedColumns[] = HrTrainingRecordPeer::COMMENCE_DATE;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v) {
			$this->company = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::COMPANY;
		}

	} 
	
	public function setNoHrs($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->no_hrs !== $v) {
			$this->no_hrs = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::NO_HRS;
		}

	} 
	
	public function setBasicTraining($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->basic_training !== $v || $v === 'null') {
			$this->basic_training = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::BASIC_TRAINING;
		}

	} 
	
	public function setSoilSorting($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->soil_sorting !== $v || $v === 'null') {
			$this->soil_sorting = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::SOIL_SORTING;
		}

	} 
	
	public function setLoadingWasher($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->loading_washer !== $v || $v === 'null') {
			$this->loading_washer = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::LOADING_WASHER;
		}

	} 
	
	public function setUnloadingWasher($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->unloading_washer !== $v || $v === 'null') {
			$this->unloading_washer = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::UNLOADING_WASHER;
		}

	} 
	
	public function setCleanroomDryer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cleanroom_dryer !== $v || $v === 'null') {
			$this->cleanroom_dryer = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::CLEANROOM_DRYER;
		}

	} 
	
	public function setFolding($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->folding !== $v || $v === 'null') {
			$this->folding = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::FOLDING;
		}

	} 
	
	public function setVacuumPacker($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->vacuum_packer !== $v || $v === 'null') {
			$this->vacuum_packer = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::VACUUM_PACKER;
		}

	} 
	
	public function setAirParticleCounter($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->air_particle_counter !== $v || $v === 'null') {
			$this->air_particle_counter = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::AIR_PARTICLE_COUNTER;
		}

	} 
	
	public function setHelmkeDrum($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->helmke_drum !== $v || $v === 'null') {
			$this->helmke_drum = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::HELMKE_DRUM;
		}

	} 
	
	public function setWaterParticleCounter($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->water_particle_counter !== $v || $v === 'null') {
			$this->water_particle_counter = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::WATER_PARTICLE_COUNTER;
		}

	} 
	
	public function setThermoPatch($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->thermo_patch !== $v || $v === 'null') {
			$this->thermo_patch = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::THERMO_PATCH;
		}

	} 
	
	public function setSewingMachine($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sewing_machine !== $v || $v === 'null') {
			$this->sewing_machine = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::SEWING_MACHINE;
		}

	} 
	
	public function setStudMachine($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->stud_machine !== $v || $v === 'null') {
			$this->stud_machine = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::STUD_MACHINE;
		}

	} 
	
	public function setDispatch($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dispatch !== $v || $v === 'null') {
			$this->dispatch = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::DISPATCH;
		}

	} 
	
	public function setShoeDryer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shoe_dryer !== $v || $v === 'null') {
			$this->shoe_dryer = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::SHOE_DRYER;
		}

	} 
	
	public function setShoeWasher($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shoe_washer !== $v || $v === 'null') {
			$this->shoe_washer = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::SHOE_WASHER;
		}

	} 
	
	public function setEsdMeasurement($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->esd_measurement !== $v || $v === 'null') {
			$this->esd_measurement = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::ESD_MEASUREMENT;
		}

	} 
	
	public function setBeyondRepair($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->beyond_repair !== $v || $v === 'null') {
			$this->beyond_repair = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::BEYOND_REPAIR;
		}

	} 
	
	public function setBioBurdenTest($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bio_burden_test !== $v || $v === 'null') {
			$this->bio_burden_test = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::BIO_BURDEN_TEST;
		}

	} 
	
	public function setExternalCourse($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->external_course !== $v) {
			$this->external_course = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::EXTERNAL_COURSE;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::REMARKS;
		}

	} 
	
	public function setVerify($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verify !== $v || $v === 'null') {
			$this->verify = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::VERIFY;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::CREATED_BY;
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
			$this->modifiedColumns[] = HrTrainingRecordPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrTrainingRecordPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HrTrainingRecordPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->date_from = $rs->getDate($startcol + 2, null);

			$this->date_to = $rs->getDate($startcol + 3, null);

			$this->employee_no = $rs->getString($startcol + 4);

			$this->name = $rs->getString($startcol + 5);

			$this->commence_date = $rs->getTimestamp($startcol + 6, null);

			$this->company = $rs->getString($startcol + 7);

			$this->no_hrs = $rs->getInt($startcol + 8);

			$this->basic_training = $rs->getString($startcol + 9);

			$this->soil_sorting = $rs->getString($startcol + 10);

			$this->loading_washer = $rs->getString($startcol + 11);

			$this->unloading_washer = $rs->getString($startcol + 12);

			$this->cleanroom_dryer = $rs->getString($startcol + 13);

			$this->folding = $rs->getString($startcol + 14);

			$this->vacuum_packer = $rs->getString($startcol + 15);

			$this->air_particle_counter = $rs->getString($startcol + 16);

			$this->helmke_drum = $rs->getString($startcol + 17);

			$this->water_particle_counter = $rs->getString($startcol + 18);

			$this->thermo_patch = $rs->getString($startcol + 19);

			$this->sewing_machine = $rs->getString($startcol + 20);

			$this->stud_machine = $rs->getString($startcol + 21);

			$this->dispatch = $rs->getString($startcol + 22);

			$this->shoe_dryer = $rs->getString($startcol + 23);

			$this->shoe_washer = $rs->getString($startcol + 24);

			$this->esd_measurement = $rs->getString($startcol + 25);

			$this->beyond_repair = $rs->getString($startcol + 26);

			$this->bio_burden_test = $rs->getString($startcol + 27);

			$this->external_course = $rs->getString($startcol + 28);

			$this->remarks = $rs->getString($startcol + 29);

			$this->verify = $rs->getString($startcol + 30);

			$this->created_by = $rs->getString($startcol + 31);

			$this->date_created = $rs->getTimestamp($startcol + 32, null);

			$this->modified_by = $rs->getString($startcol + 33);

			$this->date_modified = $rs->getTimestamp($startcol + 34, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 35; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrTrainingRecord object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrTrainingRecordPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrTrainingRecordPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrTrainingRecordPeer::DATABASE_NAME);
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
					$pk = HrTrainingRecordPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrTrainingRecordPeer::doUpdate($this, $con);
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


			if (($retval = HrTrainingRecordPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrTrainingRecordPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getDateTime();
				break;
			case 2:
				return $this->getDateFrom();
				break;
			case 3:
				return $this->getDateTo();
				break;
			case 4:
				return $this->getEmployeeNo();
				break;
			case 5:
				return $this->getName();
				break;
			case 6:
				return $this->getCommenceDate();
				break;
			case 7:
				return $this->getCompany();
				break;
			case 8:
				return $this->getNoHrs();
				break;
			case 9:
				return $this->getBasicTraining();
				break;
			case 10:
				return $this->getSoilSorting();
				break;
			case 11:
				return $this->getLoadingWasher();
				break;
			case 12:
				return $this->getUnloadingWasher();
				break;
			case 13:
				return $this->getCleanroomDryer();
				break;
			case 14:
				return $this->getFolding();
				break;
			case 15:
				return $this->getVacuumPacker();
				break;
			case 16:
				return $this->getAirParticleCounter();
				break;
			case 17:
				return $this->getHelmkeDrum();
				break;
			case 18:
				return $this->getWaterParticleCounter();
				break;
			case 19:
				return $this->getThermoPatch();
				break;
			case 20:
				return $this->getSewingMachine();
				break;
			case 21:
				return $this->getStudMachine();
				break;
			case 22:
				return $this->getDispatch();
				break;
			case 23:
				return $this->getShoeDryer();
				break;
			case 24:
				return $this->getShoeWasher();
				break;
			case 25:
				return $this->getEsdMeasurement();
				break;
			case 26:
				return $this->getBeyondRepair();
				break;
			case 27:
				return $this->getBioBurdenTest();
				break;
			case 28:
				return $this->getExternalCourse();
				break;
			case 29:
				return $this->getRemarks();
				break;
			case 30:
				return $this->getVerify();
				break;
			case 31:
				return $this->getCreatedBy();
				break;
			case 32:
				return $this->getDateCreated();
				break;
			case 33:
				return $this->getModifiedBy();
				break;
			case 34:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrTrainingRecordPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getDateFrom(),
			$keys[3] => $this->getDateTo(),
			$keys[4] => $this->getEmployeeNo(),
			$keys[5] => $this->getName(),
			$keys[6] => $this->getCommenceDate(),
			$keys[7] => $this->getCompany(),
			$keys[8] => $this->getNoHrs(),
			$keys[9] => $this->getBasicTraining(),
			$keys[10] => $this->getSoilSorting(),
			$keys[11] => $this->getLoadingWasher(),
			$keys[12] => $this->getUnloadingWasher(),
			$keys[13] => $this->getCleanroomDryer(),
			$keys[14] => $this->getFolding(),
			$keys[15] => $this->getVacuumPacker(),
			$keys[16] => $this->getAirParticleCounter(),
			$keys[17] => $this->getHelmkeDrum(),
			$keys[18] => $this->getWaterParticleCounter(),
			$keys[19] => $this->getThermoPatch(),
			$keys[20] => $this->getSewingMachine(),
			$keys[21] => $this->getStudMachine(),
			$keys[22] => $this->getDispatch(),
			$keys[23] => $this->getShoeDryer(),
			$keys[24] => $this->getShoeWasher(),
			$keys[25] => $this->getEsdMeasurement(),
			$keys[26] => $this->getBeyondRepair(),
			$keys[27] => $this->getBioBurdenTest(),
			$keys[28] => $this->getExternalCourse(),
			$keys[29] => $this->getRemarks(),
			$keys[30] => $this->getVerify(),
			$keys[31] => $this->getCreatedBy(),
			$keys[32] => $this->getDateCreated(),
			$keys[33] => $this->getModifiedBy(),
			$keys[34] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrTrainingRecordPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setDateTime($value);
				break;
			case 2:
				$this->setDateFrom($value);
				break;
			case 3:
				$this->setDateTo($value);
				break;
			case 4:
				$this->setEmployeeNo($value);
				break;
			case 5:
				$this->setName($value);
				break;
			case 6:
				$this->setCommenceDate($value);
				break;
			case 7:
				$this->setCompany($value);
				break;
			case 8:
				$this->setNoHrs($value);
				break;
			case 9:
				$this->setBasicTraining($value);
				break;
			case 10:
				$this->setSoilSorting($value);
				break;
			case 11:
				$this->setLoadingWasher($value);
				break;
			case 12:
				$this->setUnloadingWasher($value);
				break;
			case 13:
				$this->setCleanroomDryer($value);
				break;
			case 14:
				$this->setFolding($value);
				break;
			case 15:
				$this->setVacuumPacker($value);
				break;
			case 16:
				$this->setAirParticleCounter($value);
				break;
			case 17:
				$this->setHelmkeDrum($value);
				break;
			case 18:
				$this->setWaterParticleCounter($value);
				break;
			case 19:
				$this->setThermoPatch($value);
				break;
			case 20:
				$this->setSewingMachine($value);
				break;
			case 21:
				$this->setStudMachine($value);
				break;
			case 22:
				$this->setDispatch($value);
				break;
			case 23:
				$this->setShoeDryer($value);
				break;
			case 24:
				$this->setShoeWasher($value);
				break;
			case 25:
				$this->setEsdMeasurement($value);
				break;
			case 26:
				$this->setBeyondRepair($value);
				break;
			case 27:
				$this->setBioBurdenTest($value);
				break;
			case 28:
				$this->setExternalCourse($value);
				break;
			case 29:
				$this->setRemarks($value);
				break;
			case 30:
				$this->setVerify($value);
				break;
			case 31:
				$this->setCreatedBy($value);
				break;
			case 32:
				$this->setDateCreated($value);
				break;
			case 33:
				$this->setModifiedBy($value);
				break;
			case 34:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrTrainingRecordPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDateFrom($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateTo($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEmployeeNo($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setName($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCommenceDate($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCompany($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setNoHrs($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setBasicTraining($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setSoilSorting($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setLoadingWasher($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setUnloadingWasher($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCleanroomDryer($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setFolding($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setVacuumPacker($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setAirParticleCounter($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setHelmkeDrum($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setWaterParticleCounter($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setThermoPatch($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setSewingMachine($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setStudMachine($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setDispatch($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setShoeDryer($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setShoeWasher($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setEsdMeasurement($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setBeyondRepair($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setBioBurdenTest($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setExternalCourse($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setRemarks($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setVerify($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setCreatedBy($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setDateCreated($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setModifiedBy($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setDateModified($arr[$keys[34]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrTrainingRecordPeer::DATABASE_NAME);

		if ($this->isColumnModified(HrTrainingRecordPeer::ID)) $criteria->add(HrTrainingRecordPeer::ID, $this->id);
		if ($this->isColumnModified(HrTrainingRecordPeer::DATE_TIME)) $criteria->add(HrTrainingRecordPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(HrTrainingRecordPeer::DATE_FROM)) $criteria->add(HrTrainingRecordPeer::DATE_FROM, $this->date_from);
		if ($this->isColumnModified(HrTrainingRecordPeer::DATE_TO)) $criteria->add(HrTrainingRecordPeer::DATE_TO, $this->date_to);
		if ($this->isColumnModified(HrTrainingRecordPeer::EMPLOYEE_NO)) $criteria->add(HrTrainingRecordPeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(HrTrainingRecordPeer::NAME)) $criteria->add(HrTrainingRecordPeer::NAME, $this->name);
		if ($this->isColumnModified(HrTrainingRecordPeer::COMMENCE_DATE)) $criteria->add(HrTrainingRecordPeer::COMMENCE_DATE, $this->commence_date);
		if ($this->isColumnModified(HrTrainingRecordPeer::COMPANY)) $criteria->add(HrTrainingRecordPeer::COMPANY, $this->company);
		if ($this->isColumnModified(HrTrainingRecordPeer::NO_HRS)) $criteria->add(HrTrainingRecordPeer::NO_HRS, $this->no_hrs);
		if ($this->isColumnModified(HrTrainingRecordPeer::BASIC_TRAINING)) $criteria->add(HrTrainingRecordPeer::BASIC_TRAINING, $this->basic_training);
		if ($this->isColumnModified(HrTrainingRecordPeer::SOIL_SORTING)) $criteria->add(HrTrainingRecordPeer::SOIL_SORTING, $this->soil_sorting);
		if ($this->isColumnModified(HrTrainingRecordPeer::LOADING_WASHER)) $criteria->add(HrTrainingRecordPeer::LOADING_WASHER, $this->loading_washer);
		if ($this->isColumnModified(HrTrainingRecordPeer::UNLOADING_WASHER)) $criteria->add(HrTrainingRecordPeer::UNLOADING_WASHER, $this->unloading_washer);
		if ($this->isColumnModified(HrTrainingRecordPeer::CLEANROOM_DRYER)) $criteria->add(HrTrainingRecordPeer::CLEANROOM_DRYER, $this->cleanroom_dryer);
		if ($this->isColumnModified(HrTrainingRecordPeer::FOLDING)) $criteria->add(HrTrainingRecordPeer::FOLDING, $this->folding);
		if ($this->isColumnModified(HrTrainingRecordPeer::VACUUM_PACKER)) $criteria->add(HrTrainingRecordPeer::VACUUM_PACKER, $this->vacuum_packer);
		if ($this->isColumnModified(HrTrainingRecordPeer::AIR_PARTICLE_COUNTER)) $criteria->add(HrTrainingRecordPeer::AIR_PARTICLE_COUNTER, $this->air_particle_counter);
		if ($this->isColumnModified(HrTrainingRecordPeer::HELMKE_DRUM)) $criteria->add(HrTrainingRecordPeer::HELMKE_DRUM, $this->helmke_drum);
		if ($this->isColumnModified(HrTrainingRecordPeer::WATER_PARTICLE_COUNTER)) $criteria->add(HrTrainingRecordPeer::WATER_PARTICLE_COUNTER, $this->water_particle_counter);
		if ($this->isColumnModified(HrTrainingRecordPeer::THERMO_PATCH)) $criteria->add(HrTrainingRecordPeer::THERMO_PATCH, $this->thermo_patch);
		if ($this->isColumnModified(HrTrainingRecordPeer::SEWING_MACHINE)) $criteria->add(HrTrainingRecordPeer::SEWING_MACHINE, $this->sewing_machine);
		if ($this->isColumnModified(HrTrainingRecordPeer::STUD_MACHINE)) $criteria->add(HrTrainingRecordPeer::STUD_MACHINE, $this->stud_machine);
		if ($this->isColumnModified(HrTrainingRecordPeer::DISPATCH)) $criteria->add(HrTrainingRecordPeer::DISPATCH, $this->dispatch);
		if ($this->isColumnModified(HrTrainingRecordPeer::SHOE_DRYER)) $criteria->add(HrTrainingRecordPeer::SHOE_DRYER, $this->shoe_dryer);
		if ($this->isColumnModified(HrTrainingRecordPeer::SHOE_WASHER)) $criteria->add(HrTrainingRecordPeer::SHOE_WASHER, $this->shoe_washer);
		if ($this->isColumnModified(HrTrainingRecordPeer::ESD_MEASUREMENT)) $criteria->add(HrTrainingRecordPeer::ESD_MEASUREMENT, $this->esd_measurement);
		if ($this->isColumnModified(HrTrainingRecordPeer::BEYOND_REPAIR)) $criteria->add(HrTrainingRecordPeer::BEYOND_REPAIR, $this->beyond_repair);
		if ($this->isColumnModified(HrTrainingRecordPeer::BIO_BURDEN_TEST)) $criteria->add(HrTrainingRecordPeer::BIO_BURDEN_TEST, $this->bio_burden_test);
		if ($this->isColumnModified(HrTrainingRecordPeer::EXTERNAL_COURSE)) $criteria->add(HrTrainingRecordPeer::EXTERNAL_COURSE, $this->external_course);
		if ($this->isColumnModified(HrTrainingRecordPeer::REMARKS)) $criteria->add(HrTrainingRecordPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(HrTrainingRecordPeer::VERIFY)) $criteria->add(HrTrainingRecordPeer::VERIFY, $this->verify);
		if ($this->isColumnModified(HrTrainingRecordPeer::CREATED_BY)) $criteria->add(HrTrainingRecordPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrTrainingRecordPeer::DATE_CREATED)) $criteria->add(HrTrainingRecordPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrTrainingRecordPeer::MODIFIED_BY)) $criteria->add(HrTrainingRecordPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrTrainingRecordPeer::DATE_MODIFIED)) $criteria->add(HrTrainingRecordPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrTrainingRecordPeer::DATABASE_NAME);

		$criteria->add(HrTrainingRecordPeer::ID, $this->id);

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

		$copyObj->setDateTime($this->date_time);

		$copyObj->setDateFrom($this->date_from);

		$copyObj->setDateTo($this->date_to);

		$copyObj->setEmployeeNo($this->employee_no);

		$copyObj->setName($this->name);

		$copyObj->setCommenceDate($this->commence_date);

		$copyObj->setCompany($this->company);

		$copyObj->setNoHrs($this->no_hrs);

		$copyObj->setBasicTraining($this->basic_training);

		$copyObj->setSoilSorting($this->soil_sorting);

		$copyObj->setLoadingWasher($this->loading_washer);

		$copyObj->setUnloadingWasher($this->unloading_washer);

		$copyObj->setCleanroomDryer($this->cleanroom_dryer);

		$copyObj->setFolding($this->folding);

		$copyObj->setVacuumPacker($this->vacuum_packer);

		$copyObj->setAirParticleCounter($this->air_particle_counter);

		$copyObj->setHelmkeDrum($this->helmke_drum);

		$copyObj->setWaterParticleCounter($this->water_particle_counter);

		$copyObj->setThermoPatch($this->thermo_patch);

		$copyObj->setSewingMachine($this->sewing_machine);

		$copyObj->setStudMachine($this->stud_machine);

		$copyObj->setDispatch($this->dispatch);

		$copyObj->setShoeDryer($this->shoe_dryer);

		$copyObj->setShoeWasher($this->shoe_washer);

		$copyObj->setEsdMeasurement($this->esd_measurement);

		$copyObj->setBeyondRepair($this->beyond_repair);

		$copyObj->setBioBurdenTest($this->bio_burden_test);

		$copyObj->setExternalCourse($this->external_course);

		$copyObj->setRemarks($this->remarks);

		$copyObj->setVerify($this->verify);

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
			self::$peer = new HrTrainingRecordPeer();
		}
		return self::$peer;
	}

} 
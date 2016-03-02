<?php


abstract class BaseHrTrainingEvaluation extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $hr_training_record_id;


	
	protected $employee_no = 'null';


	
	protected $name;


	
	protected $company;


	
	protected $no_hrs;


	
	protected $date_time;


	
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


	
	protected $external_course = 'null';


	
	protected $esd_measurement = 'null';


	
	protected $beyond_repair = 'null';


	
	protected $bio_burden_test = 'null';


	
	protected $remarks;


	
	protected $evaluated = 'null';


	
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

	
	public function getHrTrainingRecordId()
	{

		return $this->hr_training_record_id;
	}

	
	public function getEmployeeNo()
	{

		return $this->employee_no;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getCompany()
	{

		return $this->company;
	}

	
	public function getNoHrs()
	{

		return $this->no_hrs;
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

	
	public function getExternalCourse()
	{

		return $this->external_course;
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

	
	public function getRemarks()
	{

		return $this->remarks;
	}

	
	public function getEvaluated()
	{

		return $this->evaluated;
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
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::ID;
		}

	} 
	
	public function setHrTrainingRecordId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->hr_training_record_id !== $v) {
			$this->hr_training_record_id = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::HR_TRAINING_RECORD_ID;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v || $v === 'null') {
			$this->employee_no = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::EMPLOYEE_NO;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::NAME;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v) {
			$this->company = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::COMPANY;
		}

	} 
	
	public function setNoHrs($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->no_hrs !== $v) {
			$this->no_hrs = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::NO_HRS;
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
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::DATE_TIME;
		}

	} 
	
	public function setBasicTraining($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->basic_training !== $v || $v === 'null') {
			$this->basic_training = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::BASIC_TRAINING;
		}

	} 
	
	public function setSoilSorting($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->soil_sorting !== $v || $v === 'null') {
			$this->soil_sorting = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::SOIL_SORTING;
		}

	} 
	
	public function setLoadingWasher($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->loading_washer !== $v || $v === 'null') {
			$this->loading_washer = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::LOADING_WASHER;
		}

	} 
	
	public function setUnloadingWasher($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->unloading_washer !== $v || $v === 'null') {
			$this->unloading_washer = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::UNLOADING_WASHER;
		}

	} 
	
	public function setCleanroomDryer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cleanroom_dryer !== $v || $v === 'null') {
			$this->cleanroom_dryer = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::CLEANROOM_DRYER;
		}

	} 
	
	public function setFolding($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->folding !== $v || $v === 'null') {
			$this->folding = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::FOLDING;
		}

	} 
	
	public function setVacuumPacker($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->vacuum_packer !== $v || $v === 'null') {
			$this->vacuum_packer = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::VACUUM_PACKER;
		}

	} 
	
	public function setAirParticleCounter($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->air_particle_counter !== $v || $v === 'null') {
			$this->air_particle_counter = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::AIR_PARTICLE_COUNTER;
		}

	} 
	
	public function setHelmkeDrum($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->helmke_drum !== $v || $v === 'null') {
			$this->helmke_drum = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::HELMKE_DRUM;
		}

	} 
	
	public function setWaterParticleCounter($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->water_particle_counter !== $v || $v === 'null') {
			$this->water_particle_counter = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::WATER_PARTICLE_COUNTER;
		}

	} 
	
	public function setThermoPatch($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->thermo_patch !== $v || $v === 'null') {
			$this->thermo_patch = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::THERMO_PATCH;
		}

	} 
	
	public function setSewingMachine($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sewing_machine !== $v || $v === 'null') {
			$this->sewing_machine = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::SEWING_MACHINE;
		}

	} 
	
	public function setStudMachine($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->stud_machine !== $v || $v === 'null') {
			$this->stud_machine = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::STUD_MACHINE;
		}

	} 
	
	public function setDispatch($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dispatch !== $v || $v === 'null') {
			$this->dispatch = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::DISPATCH;
		}

	} 
	
	public function setShoeDryer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shoe_dryer !== $v || $v === 'null') {
			$this->shoe_dryer = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::SHOE_DRYER;
		}

	} 
	
	public function setShoeWasher($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shoe_washer !== $v || $v === 'null') {
			$this->shoe_washer = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::SHOE_WASHER;
		}

	} 
	
	public function setExternalCourse($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->external_course !== $v || $v === 'null') {
			$this->external_course = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::EXTERNAL_COURSE;
		}

	} 
	
	public function setEsdMeasurement($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->esd_measurement !== $v || $v === 'null') {
			$this->esd_measurement = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::ESD_MEASUREMENT;
		}

	} 
	
	public function setBeyondRepair($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->beyond_repair !== $v || $v === 'null') {
			$this->beyond_repair = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::BEYOND_REPAIR;
		}

	} 
	
	public function setBioBurdenTest($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bio_burden_test !== $v || $v === 'null') {
			$this->bio_burden_test = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::BIO_BURDEN_TEST;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::REMARKS;
		}

	} 
	
	public function setEvaluated($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->evaluated !== $v || $v === 'null') {
			$this->evaluated = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::EVALUATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::CREATED_BY;
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
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HrTrainingEvaluationPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->hr_training_record_id = $rs->getInt($startcol + 1);

			$this->employee_no = $rs->getString($startcol + 2);

			$this->name = $rs->getString($startcol + 3);

			$this->company = $rs->getString($startcol + 4);

			$this->no_hrs = $rs->getInt($startcol + 5);

			$this->date_time = $rs->getTimestamp($startcol + 6, null);

			$this->basic_training = $rs->getString($startcol + 7);

			$this->soil_sorting = $rs->getString($startcol + 8);

			$this->loading_washer = $rs->getString($startcol + 9);

			$this->unloading_washer = $rs->getString($startcol + 10);

			$this->cleanroom_dryer = $rs->getString($startcol + 11);

			$this->folding = $rs->getString($startcol + 12);

			$this->vacuum_packer = $rs->getString($startcol + 13);

			$this->air_particle_counter = $rs->getString($startcol + 14);

			$this->helmke_drum = $rs->getString($startcol + 15);

			$this->water_particle_counter = $rs->getString($startcol + 16);

			$this->thermo_patch = $rs->getString($startcol + 17);

			$this->sewing_machine = $rs->getString($startcol + 18);

			$this->stud_machine = $rs->getString($startcol + 19);

			$this->dispatch = $rs->getString($startcol + 20);

			$this->shoe_dryer = $rs->getString($startcol + 21);

			$this->shoe_washer = $rs->getString($startcol + 22);

			$this->external_course = $rs->getString($startcol + 23);

			$this->esd_measurement = $rs->getString($startcol + 24);

			$this->beyond_repair = $rs->getString($startcol + 25);

			$this->bio_burden_test = $rs->getString($startcol + 26);

			$this->remarks = $rs->getString($startcol + 27);

			$this->evaluated = $rs->getString($startcol + 28);

			$this->created_by = $rs->getString($startcol + 29);

			$this->date_created = $rs->getTimestamp($startcol + 30, null);

			$this->modified_by = $rs->getString($startcol + 31);

			$this->date_modified = $rs->getTimestamp($startcol + 32, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 33; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrTrainingEvaluation object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrTrainingEvaluationPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrTrainingEvaluationPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrTrainingEvaluationPeer::DATABASE_NAME);
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
					$pk = HrTrainingEvaluationPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrTrainingEvaluationPeer::doUpdate($this, $con);
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


			if (($retval = HrTrainingEvaluationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrTrainingEvaluationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getHrTrainingRecordId();
				break;
			case 2:
				return $this->getEmployeeNo();
				break;
			case 3:
				return $this->getName();
				break;
			case 4:
				return $this->getCompany();
				break;
			case 5:
				return $this->getNoHrs();
				break;
			case 6:
				return $this->getDateTime();
				break;
			case 7:
				return $this->getBasicTraining();
				break;
			case 8:
				return $this->getSoilSorting();
				break;
			case 9:
				return $this->getLoadingWasher();
				break;
			case 10:
				return $this->getUnloadingWasher();
				break;
			case 11:
				return $this->getCleanroomDryer();
				break;
			case 12:
				return $this->getFolding();
				break;
			case 13:
				return $this->getVacuumPacker();
				break;
			case 14:
				return $this->getAirParticleCounter();
				break;
			case 15:
				return $this->getHelmkeDrum();
				break;
			case 16:
				return $this->getWaterParticleCounter();
				break;
			case 17:
				return $this->getThermoPatch();
				break;
			case 18:
				return $this->getSewingMachine();
				break;
			case 19:
				return $this->getStudMachine();
				break;
			case 20:
				return $this->getDispatch();
				break;
			case 21:
				return $this->getShoeDryer();
				break;
			case 22:
				return $this->getShoeWasher();
				break;
			case 23:
				return $this->getExternalCourse();
				break;
			case 24:
				return $this->getEsdMeasurement();
				break;
			case 25:
				return $this->getBeyondRepair();
				break;
			case 26:
				return $this->getBioBurdenTest();
				break;
			case 27:
				return $this->getRemarks();
				break;
			case 28:
				return $this->getEvaluated();
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
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrTrainingEvaluationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getHrTrainingRecordId(),
			$keys[2] => $this->getEmployeeNo(),
			$keys[3] => $this->getName(),
			$keys[4] => $this->getCompany(),
			$keys[5] => $this->getNoHrs(),
			$keys[6] => $this->getDateTime(),
			$keys[7] => $this->getBasicTraining(),
			$keys[8] => $this->getSoilSorting(),
			$keys[9] => $this->getLoadingWasher(),
			$keys[10] => $this->getUnloadingWasher(),
			$keys[11] => $this->getCleanroomDryer(),
			$keys[12] => $this->getFolding(),
			$keys[13] => $this->getVacuumPacker(),
			$keys[14] => $this->getAirParticleCounter(),
			$keys[15] => $this->getHelmkeDrum(),
			$keys[16] => $this->getWaterParticleCounter(),
			$keys[17] => $this->getThermoPatch(),
			$keys[18] => $this->getSewingMachine(),
			$keys[19] => $this->getStudMachine(),
			$keys[20] => $this->getDispatch(),
			$keys[21] => $this->getShoeDryer(),
			$keys[22] => $this->getShoeWasher(),
			$keys[23] => $this->getExternalCourse(),
			$keys[24] => $this->getEsdMeasurement(),
			$keys[25] => $this->getBeyondRepair(),
			$keys[26] => $this->getBioBurdenTest(),
			$keys[27] => $this->getRemarks(),
			$keys[28] => $this->getEvaluated(),
			$keys[29] => $this->getCreatedBy(),
			$keys[30] => $this->getDateCreated(),
			$keys[31] => $this->getModifiedBy(),
			$keys[32] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrTrainingEvaluationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setHrTrainingRecordId($value);
				break;
			case 2:
				$this->setEmployeeNo($value);
				break;
			case 3:
				$this->setName($value);
				break;
			case 4:
				$this->setCompany($value);
				break;
			case 5:
				$this->setNoHrs($value);
				break;
			case 6:
				$this->setDateTime($value);
				break;
			case 7:
				$this->setBasicTraining($value);
				break;
			case 8:
				$this->setSoilSorting($value);
				break;
			case 9:
				$this->setLoadingWasher($value);
				break;
			case 10:
				$this->setUnloadingWasher($value);
				break;
			case 11:
				$this->setCleanroomDryer($value);
				break;
			case 12:
				$this->setFolding($value);
				break;
			case 13:
				$this->setVacuumPacker($value);
				break;
			case 14:
				$this->setAirParticleCounter($value);
				break;
			case 15:
				$this->setHelmkeDrum($value);
				break;
			case 16:
				$this->setWaterParticleCounter($value);
				break;
			case 17:
				$this->setThermoPatch($value);
				break;
			case 18:
				$this->setSewingMachine($value);
				break;
			case 19:
				$this->setStudMachine($value);
				break;
			case 20:
				$this->setDispatch($value);
				break;
			case 21:
				$this->setShoeDryer($value);
				break;
			case 22:
				$this->setShoeWasher($value);
				break;
			case 23:
				$this->setExternalCourse($value);
				break;
			case 24:
				$this->setEsdMeasurement($value);
				break;
			case 25:
				$this->setBeyondRepair($value);
				break;
			case 26:
				$this->setBioBurdenTest($value);
				break;
			case 27:
				$this->setRemarks($value);
				break;
			case 28:
				$this->setEvaluated($value);
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
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrTrainingEvaluationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setHrTrainingRecordId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setEmployeeNo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCompany($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNoHrs($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateTime($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setBasicTraining($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSoilSorting($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setLoadingWasher($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setUnloadingWasher($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCleanroomDryer($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setFolding($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setVacuumPacker($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setAirParticleCounter($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setHelmkeDrum($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setWaterParticleCounter($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setThermoPatch($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setSewingMachine($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setStudMachine($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setDispatch($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setShoeDryer($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setShoeWasher($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setExternalCourse($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setEsdMeasurement($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setBeyondRepair($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setBioBurdenTest($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setRemarks($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setEvaluated($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setCreatedBy($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setDateCreated($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setModifiedBy($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setDateModified($arr[$keys[32]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrTrainingEvaluationPeer::DATABASE_NAME);

		if ($this->isColumnModified(HrTrainingEvaluationPeer::ID)) $criteria->add(HrTrainingEvaluationPeer::ID, $this->id);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::HR_TRAINING_RECORD_ID)) $criteria->add(HrTrainingEvaluationPeer::HR_TRAINING_RECORD_ID, $this->hr_training_record_id);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::EMPLOYEE_NO)) $criteria->add(HrTrainingEvaluationPeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::NAME)) $criteria->add(HrTrainingEvaluationPeer::NAME, $this->name);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::COMPANY)) $criteria->add(HrTrainingEvaluationPeer::COMPANY, $this->company);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::NO_HRS)) $criteria->add(HrTrainingEvaluationPeer::NO_HRS, $this->no_hrs);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::DATE_TIME)) $criteria->add(HrTrainingEvaluationPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::BASIC_TRAINING)) $criteria->add(HrTrainingEvaluationPeer::BASIC_TRAINING, $this->basic_training);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::SOIL_SORTING)) $criteria->add(HrTrainingEvaluationPeer::SOIL_SORTING, $this->soil_sorting);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::LOADING_WASHER)) $criteria->add(HrTrainingEvaluationPeer::LOADING_WASHER, $this->loading_washer);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::UNLOADING_WASHER)) $criteria->add(HrTrainingEvaluationPeer::UNLOADING_WASHER, $this->unloading_washer);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::CLEANROOM_DRYER)) $criteria->add(HrTrainingEvaluationPeer::CLEANROOM_DRYER, $this->cleanroom_dryer);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::FOLDING)) $criteria->add(HrTrainingEvaluationPeer::FOLDING, $this->folding);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::VACUUM_PACKER)) $criteria->add(HrTrainingEvaluationPeer::VACUUM_PACKER, $this->vacuum_packer);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::AIR_PARTICLE_COUNTER)) $criteria->add(HrTrainingEvaluationPeer::AIR_PARTICLE_COUNTER, $this->air_particle_counter);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::HELMKE_DRUM)) $criteria->add(HrTrainingEvaluationPeer::HELMKE_DRUM, $this->helmke_drum);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::WATER_PARTICLE_COUNTER)) $criteria->add(HrTrainingEvaluationPeer::WATER_PARTICLE_COUNTER, $this->water_particle_counter);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::THERMO_PATCH)) $criteria->add(HrTrainingEvaluationPeer::THERMO_PATCH, $this->thermo_patch);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::SEWING_MACHINE)) $criteria->add(HrTrainingEvaluationPeer::SEWING_MACHINE, $this->sewing_machine);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::STUD_MACHINE)) $criteria->add(HrTrainingEvaluationPeer::STUD_MACHINE, $this->stud_machine);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::DISPATCH)) $criteria->add(HrTrainingEvaluationPeer::DISPATCH, $this->dispatch);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::SHOE_DRYER)) $criteria->add(HrTrainingEvaluationPeer::SHOE_DRYER, $this->shoe_dryer);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::SHOE_WASHER)) $criteria->add(HrTrainingEvaluationPeer::SHOE_WASHER, $this->shoe_washer);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::EXTERNAL_COURSE)) $criteria->add(HrTrainingEvaluationPeer::EXTERNAL_COURSE, $this->external_course);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::ESD_MEASUREMENT)) $criteria->add(HrTrainingEvaluationPeer::ESD_MEASUREMENT, $this->esd_measurement);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::BEYOND_REPAIR)) $criteria->add(HrTrainingEvaluationPeer::BEYOND_REPAIR, $this->beyond_repair);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::BIO_BURDEN_TEST)) $criteria->add(HrTrainingEvaluationPeer::BIO_BURDEN_TEST, $this->bio_burden_test);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::REMARKS)) $criteria->add(HrTrainingEvaluationPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::EVALUATED)) $criteria->add(HrTrainingEvaluationPeer::EVALUATED, $this->evaluated);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::CREATED_BY)) $criteria->add(HrTrainingEvaluationPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::DATE_CREATED)) $criteria->add(HrTrainingEvaluationPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::MODIFIED_BY)) $criteria->add(HrTrainingEvaluationPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrTrainingEvaluationPeer::DATE_MODIFIED)) $criteria->add(HrTrainingEvaluationPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrTrainingEvaluationPeer::DATABASE_NAME);

		$criteria->add(HrTrainingEvaluationPeer::ID, $this->id);

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

		$copyObj->setHrTrainingRecordId($this->hr_training_record_id);

		$copyObj->setEmployeeNo($this->employee_no);

		$copyObj->setName($this->name);

		$copyObj->setCompany($this->company);

		$copyObj->setNoHrs($this->no_hrs);

		$copyObj->setDateTime($this->date_time);

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

		$copyObj->setExternalCourse($this->external_course);

		$copyObj->setEsdMeasurement($this->esd_measurement);

		$copyObj->setBeyondRepair($this->beyond_repair);

		$copyObj->setBioBurdenTest($this->bio_burden_test);

		$copyObj->setRemarks($this->remarks);

		$copyObj->setEvaluated($this->evaluated);

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
			self::$peer = new HrTrainingEvaluationPeer();
		}
		return self::$peer;
	}

} 
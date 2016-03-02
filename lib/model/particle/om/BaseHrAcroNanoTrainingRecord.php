<?php


abstract class BaseHrAcroNanoTrainingRecord extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $date_from;


	
	protected $date_to;


	
	protected $employee_no = 'null';


	
	protected $name;


	
	protected $company;


	
	protected $no_hrs;


	
	protected $initial_inspection = 'null';


	
	protected $delabeling_jelly_removal = 'null';


	
	protected $pre_wash = 'null';


	
	protected $loading = 'null';


	
	protected $machine_wash = 'null';


	
	protected $unloading = 'null';


	
	protected $inprocess_visual_inspection = 'null';


	
	protected $lpc = 'null';


	
	protected $ic = 'null';


	
	protected $nvr = 'null';


	
	protected $qa_sample_inspection = 'null';


	
	protected $purging_machine = 'null';


	
	protected $packing = 'null';


	
	protected $quality_policy = 'null';


	
	protected $spc_awareness = 'null';


	
	protected $visual_inspection = 'null';


	
	protected $remarks;


	
	protected $verify = 'null';


	
	protected $created_by = 'null';


	
	protected $date_created;


	
	protected $modified_by = 'null';


	
	protected $date_modified;


	
	protected $pharmag_washer;


	
	protected $pva_vmi;


	
	protected $pre_wash_loading;


	
	protected $pre_wash_unloading;


	
	protected $soaking_loading;


	
	protected $soaking_unloading;

	
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

	
	public function getCompany()
	{

		return $this->company;
	}

	
	public function getNoHrs()
	{

		return $this->no_hrs;
	}

	
	public function getInitialInspection()
	{

		return $this->initial_inspection;
	}

	
	public function getDelabelingJellyRemoval()
	{

		return $this->delabeling_jelly_removal;
	}

	
	public function getPreWash()
	{

		return $this->pre_wash;
	}

	
	public function getLoading()
	{

		return $this->loading;
	}

	
	public function getMachineWash()
	{

		return $this->machine_wash;
	}

	
	public function getUnloading()
	{

		return $this->unloading;
	}

	
	public function getInprocessVisualInspection()
	{

		return $this->inprocess_visual_inspection;
	}

	
	public function getLpc()
	{

		return $this->lpc;
	}

	
	public function getIc()
	{

		return $this->ic;
	}

	
	public function getNvr()
	{

		return $this->nvr;
	}

	
	public function getQaSampleInspection()
	{

		return $this->qa_sample_inspection;
	}

	
	public function getPurgingMachine()
	{

		return $this->purging_machine;
	}

	
	public function getPacking()
	{

		return $this->packing;
	}

	
	public function getQualityPolicy()
	{

		return $this->quality_policy;
	}

	
	public function getSpcAwareness()
	{

		return $this->spc_awareness;
	}

	
	public function getVisualInspection()
	{

		return $this->visual_inspection;
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

	
	public function getPharmagWasher()
	{

		return $this->pharmag_washer;
	}

	
	public function getPvaVmi()
	{

		return $this->pva_vmi;
	}

	
	public function getPreWashLoading()
	{

		return $this->pre_wash_loading;
	}

	
	public function getPreWashUnloading()
	{

		return $this->pre_wash_unloading;
	}

	
	public function getSoakingLoading()
	{

		return $this->soaking_loading;
	}

	
	public function getSoakingUnloading()
	{

		return $this->soaking_unloading;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::ID;
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
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::DATE_TIME;
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
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::DATE_FROM;
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
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::DATE_TO;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v || $v === 'null') {
			$this->employee_no = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::EMPLOYEE_NO;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::NAME;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v) {
			$this->company = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::COMPANY;
		}

	} 
	
	public function setNoHrs($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->no_hrs !== $v) {
			$this->no_hrs = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::NO_HRS;
		}

	} 
	
	public function setInitialInspection($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initial_inspection !== $v || $v === 'null') {
			$this->initial_inspection = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::INITIAL_INSPECTION;
		}

	} 
	
	public function setDelabelingJellyRemoval($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->delabeling_jelly_removal !== $v || $v === 'null') {
			$this->delabeling_jelly_removal = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::DELABELING_JELLY_REMOVAL;
		}

	} 
	
	public function setPreWash($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->pre_wash !== $v || $v === 'null') {
			$this->pre_wash = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::PRE_WASH;
		}

	} 
	
	public function setLoading($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->loading !== $v || $v === 'null') {
			$this->loading = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::LOADING;
		}

	} 
	
	public function setMachineWash($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_wash !== $v || $v === 'null') {
			$this->machine_wash = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::MACHINE_WASH;
		}

	} 
	
	public function setUnloading($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->unloading !== $v || $v === 'null') {
			$this->unloading = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::UNLOADING;
		}

	} 
	
	public function setInprocessVisualInspection($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->inprocess_visual_inspection !== $v || $v === 'null') {
			$this->inprocess_visual_inspection = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::INPROCESS_VISUAL_INSPECTION;
		}

	} 
	
	public function setLpc($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lpc !== $v || $v === 'null') {
			$this->lpc = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::LPC;
		}

	} 
	
	public function setIc($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ic !== $v || $v === 'null') {
			$this->ic = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::IC;
		}

	} 
	
	public function setNvr($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nvr !== $v || $v === 'null') {
			$this->nvr = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::NVR;
		}

	} 
	
	public function setQaSampleInspection($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->qa_sample_inspection !== $v || $v === 'null') {
			$this->qa_sample_inspection = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::QA_SAMPLE_INSPECTION;
		}

	} 
	
	public function setPurgingMachine($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->purging_machine !== $v || $v === 'null') {
			$this->purging_machine = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::PURGING_MACHINE;
		}

	} 
	
	public function setPacking($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->packing !== $v || $v === 'null') {
			$this->packing = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::PACKING;
		}

	} 
	
	public function setQualityPolicy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->quality_policy !== $v || $v === 'null') {
			$this->quality_policy = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::QUALITY_POLICY;
		}

	} 
	
	public function setSpcAwareness($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->spc_awareness !== $v || $v === 'null') {
			$this->spc_awareness = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::SPC_AWARENESS;
		}

	} 
	
	public function setVisualInspection($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->visual_inspection !== $v || $v === 'null') {
			$this->visual_inspection = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::VISUAL_INSPECTION;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::REMARKS;
		}

	} 
	
	public function setVerify($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verify !== $v || $v === 'null') {
			$this->verify = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::VERIFY;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::CREATED_BY;
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
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::DATE_MODIFIED;
		}

	} 
	
	public function setPharmagWasher($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->pharmag_washer !== $v) {
			$this->pharmag_washer = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::PHARMAG_WASHER;
		}

	} 
	
	public function setPvaVmi($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->pva_vmi !== $v) {
			$this->pva_vmi = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::PVA_VMI;
		}

	} 
	
	public function setPreWashLoading($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->pre_wash_loading !== $v) {
			$this->pre_wash_loading = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::PRE_WASH_LOADING;
		}

	} 
	
	public function setPreWashUnloading($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->pre_wash_unloading !== $v) {
			$this->pre_wash_unloading = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::PRE_WASH_UNLOADING;
		}

	} 
	
	public function setSoakingLoading($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->soaking_loading !== $v) {
			$this->soaking_loading = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::SOAKING_LOADING;
		}

	} 
	
	public function setSoakingUnloading($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->soaking_unloading !== $v) {
			$this->soaking_unloading = $v;
			$this->modifiedColumns[] = HrAcroNanoTrainingRecordPeer::SOAKING_UNLOADING;
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

			$this->company = $rs->getString($startcol + 6);

			$this->no_hrs = $rs->getInt($startcol + 7);

			$this->initial_inspection = $rs->getString($startcol + 8);

			$this->delabeling_jelly_removal = $rs->getString($startcol + 9);

			$this->pre_wash = $rs->getString($startcol + 10);

			$this->loading = $rs->getString($startcol + 11);

			$this->machine_wash = $rs->getString($startcol + 12);

			$this->unloading = $rs->getString($startcol + 13);

			$this->inprocess_visual_inspection = $rs->getString($startcol + 14);

			$this->lpc = $rs->getString($startcol + 15);

			$this->ic = $rs->getString($startcol + 16);

			$this->nvr = $rs->getString($startcol + 17);

			$this->qa_sample_inspection = $rs->getString($startcol + 18);

			$this->purging_machine = $rs->getString($startcol + 19);

			$this->packing = $rs->getString($startcol + 20);

			$this->quality_policy = $rs->getString($startcol + 21);

			$this->spc_awareness = $rs->getString($startcol + 22);

			$this->visual_inspection = $rs->getString($startcol + 23);

			$this->remarks = $rs->getString($startcol + 24);

			$this->verify = $rs->getString($startcol + 25);

			$this->created_by = $rs->getString($startcol + 26);

			$this->date_created = $rs->getTimestamp($startcol + 27, null);

			$this->modified_by = $rs->getString($startcol + 28);

			$this->date_modified = $rs->getTimestamp($startcol + 29, null);

			$this->pharmag_washer = $rs->getString($startcol + 30);

			$this->pva_vmi = $rs->getString($startcol + 31);

			$this->pre_wash_loading = $rs->getString($startcol + 32);

			$this->pre_wash_unloading = $rs->getString($startcol + 33);

			$this->soaking_loading = $rs->getString($startcol + 34);

			$this->soaking_unloading = $rs->getString($startcol + 35);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 36; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrAcroNanoTrainingRecord object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrAcroNanoTrainingRecordPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrAcroNanoTrainingRecordPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrAcroNanoTrainingRecordPeer::DATABASE_NAME);
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
					$pk = HrAcroNanoTrainingRecordPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrAcroNanoTrainingRecordPeer::doUpdate($this, $con);
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


			if (($retval = HrAcroNanoTrainingRecordPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrAcroNanoTrainingRecordPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCompany();
				break;
			case 7:
				return $this->getNoHrs();
				break;
			case 8:
				return $this->getInitialInspection();
				break;
			case 9:
				return $this->getDelabelingJellyRemoval();
				break;
			case 10:
				return $this->getPreWash();
				break;
			case 11:
				return $this->getLoading();
				break;
			case 12:
				return $this->getMachineWash();
				break;
			case 13:
				return $this->getUnloading();
				break;
			case 14:
				return $this->getInprocessVisualInspection();
				break;
			case 15:
				return $this->getLpc();
				break;
			case 16:
				return $this->getIc();
				break;
			case 17:
				return $this->getNvr();
				break;
			case 18:
				return $this->getQaSampleInspection();
				break;
			case 19:
				return $this->getPurgingMachine();
				break;
			case 20:
				return $this->getPacking();
				break;
			case 21:
				return $this->getQualityPolicy();
				break;
			case 22:
				return $this->getSpcAwareness();
				break;
			case 23:
				return $this->getVisualInspection();
				break;
			case 24:
				return $this->getRemarks();
				break;
			case 25:
				return $this->getVerify();
				break;
			case 26:
				return $this->getCreatedBy();
				break;
			case 27:
				return $this->getDateCreated();
				break;
			case 28:
				return $this->getModifiedBy();
				break;
			case 29:
				return $this->getDateModified();
				break;
			case 30:
				return $this->getPharmagWasher();
				break;
			case 31:
				return $this->getPvaVmi();
				break;
			case 32:
				return $this->getPreWashLoading();
				break;
			case 33:
				return $this->getPreWashUnloading();
				break;
			case 34:
				return $this->getSoakingLoading();
				break;
			case 35:
				return $this->getSoakingUnloading();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrAcroNanoTrainingRecordPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getDateFrom(),
			$keys[3] => $this->getDateTo(),
			$keys[4] => $this->getEmployeeNo(),
			$keys[5] => $this->getName(),
			$keys[6] => $this->getCompany(),
			$keys[7] => $this->getNoHrs(),
			$keys[8] => $this->getInitialInspection(),
			$keys[9] => $this->getDelabelingJellyRemoval(),
			$keys[10] => $this->getPreWash(),
			$keys[11] => $this->getLoading(),
			$keys[12] => $this->getMachineWash(),
			$keys[13] => $this->getUnloading(),
			$keys[14] => $this->getInprocessVisualInspection(),
			$keys[15] => $this->getLpc(),
			$keys[16] => $this->getIc(),
			$keys[17] => $this->getNvr(),
			$keys[18] => $this->getQaSampleInspection(),
			$keys[19] => $this->getPurgingMachine(),
			$keys[20] => $this->getPacking(),
			$keys[21] => $this->getQualityPolicy(),
			$keys[22] => $this->getSpcAwareness(),
			$keys[23] => $this->getVisualInspection(),
			$keys[24] => $this->getRemarks(),
			$keys[25] => $this->getVerify(),
			$keys[26] => $this->getCreatedBy(),
			$keys[27] => $this->getDateCreated(),
			$keys[28] => $this->getModifiedBy(),
			$keys[29] => $this->getDateModified(),
			$keys[30] => $this->getPharmagWasher(),
			$keys[31] => $this->getPvaVmi(),
			$keys[32] => $this->getPreWashLoading(),
			$keys[33] => $this->getPreWashUnloading(),
			$keys[34] => $this->getSoakingLoading(),
			$keys[35] => $this->getSoakingUnloading(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrAcroNanoTrainingRecordPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCompany($value);
				break;
			case 7:
				$this->setNoHrs($value);
				break;
			case 8:
				$this->setInitialInspection($value);
				break;
			case 9:
				$this->setDelabelingJellyRemoval($value);
				break;
			case 10:
				$this->setPreWash($value);
				break;
			case 11:
				$this->setLoading($value);
				break;
			case 12:
				$this->setMachineWash($value);
				break;
			case 13:
				$this->setUnloading($value);
				break;
			case 14:
				$this->setInprocessVisualInspection($value);
				break;
			case 15:
				$this->setLpc($value);
				break;
			case 16:
				$this->setIc($value);
				break;
			case 17:
				$this->setNvr($value);
				break;
			case 18:
				$this->setQaSampleInspection($value);
				break;
			case 19:
				$this->setPurgingMachine($value);
				break;
			case 20:
				$this->setPacking($value);
				break;
			case 21:
				$this->setQualityPolicy($value);
				break;
			case 22:
				$this->setSpcAwareness($value);
				break;
			case 23:
				$this->setVisualInspection($value);
				break;
			case 24:
				$this->setRemarks($value);
				break;
			case 25:
				$this->setVerify($value);
				break;
			case 26:
				$this->setCreatedBy($value);
				break;
			case 27:
				$this->setDateCreated($value);
				break;
			case 28:
				$this->setModifiedBy($value);
				break;
			case 29:
				$this->setDateModified($value);
				break;
			case 30:
				$this->setPharmagWasher($value);
				break;
			case 31:
				$this->setPvaVmi($value);
				break;
			case 32:
				$this->setPreWashLoading($value);
				break;
			case 33:
				$this->setPreWashUnloading($value);
				break;
			case 34:
				$this->setSoakingLoading($value);
				break;
			case 35:
				$this->setSoakingUnloading($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrAcroNanoTrainingRecordPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDateFrom($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateTo($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEmployeeNo($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setName($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCompany($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNoHrs($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setInitialInspection($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDelabelingJellyRemoval($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPreWash($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setLoading($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setMachineWash($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setUnloading($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setInprocessVisualInspection($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setLpc($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setIc($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setNvr($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setQaSampleInspection($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setPurgingMachine($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setPacking($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setQualityPolicy($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setSpcAwareness($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setVisualInspection($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setRemarks($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setVerify($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setCreatedBy($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setDateCreated($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setModifiedBy($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setDateModified($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setPharmagWasher($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setPvaVmi($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setPreWashLoading($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setPreWashUnloading($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setSoakingLoading($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setSoakingUnloading($arr[$keys[35]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrAcroNanoTrainingRecordPeer::DATABASE_NAME);

		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::ID)) $criteria->add(HrAcroNanoTrainingRecordPeer::ID, $this->id);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::DATE_TIME)) $criteria->add(HrAcroNanoTrainingRecordPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::DATE_FROM)) $criteria->add(HrAcroNanoTrainingRecordPeer::DATE_FROM, $this->date_from);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::DATE_TO)) $criteria->add(HrAcroNanoTrainingRecordPeer::DATE_TO, $this->date_to);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::EMPLOYEE_NO)) $criteria->add(HrAcroNanoTrainingRecordPeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::NAME)) $criteria->add(HrAcroNanoTrainingRecordPeer::NAME, $this->name);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::COMPANY)) $criteria->add(HrAcroNanoTrainingRecordPeer::COMPANY, $this->company);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::NO_HRS)) $criteria->add(HrAcroNanoTrainingRecordPeer::NO_HRS, $this->no_hrs);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::INITIAL_INSPECTION)) $criteria->add(HrAcroNanoTrainingRecordPeer::INITIAL_INSPECTION, $this->initial_inspection);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::DELABELING_JELLY_REMOVAL)) $criteria->add(HrAcroNanoTrainingRecordPeer::DELABELING_JELLY_REMOVAL, $this->delabeling_jelly_removal);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::PRE_WASH)) $criteria->add(HrAcroNanoTrainingRecordPeer::PRE_WASH, $this->pre_wash);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::LOADING)) $criteria->add(HrAcroNanoTrainingRecordPeer::LOADING, $this->loading);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::MACHINE_WASH)) $criteria->add(HrAcroNanoTrainingRecordPeer::MACHINE_WASH, $this->machine_wash);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::UNLOADING)) $criteria->add(HrAcroNanoTrainingRecordPeer::UNLOADING, $this->unloading);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::INPROCESS_VISUAL_INSPECTION)) $criteria->add(HrAcroNanoTrainingRecordPeer::INPROCESS_VISUAL_INSPECTION, $this->inprocess_visual_inspection);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::LPC)) $criteria->add(HrAcroNanoTrainingRecordPeer::LPC, $this->lpc);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::IC)) $criteria->add(HrAcroNanoTrainingRecordPeer::IC, $this->ic);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::NVR)) $criteria->add(HrAcroNanoTrainingRecordPeer::NVR, $this->nvr);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::QA_SAMPLE_INSPECTION)) $criteria->add(HrAcroNanoTrainingRecordPeer::QA_SAMPLE_INSPECTION, $this->qa_sample_inspection);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::PURGING_MACHINE)) $criteria->add(HrAcroNanoTrainingRecordPeer::PURGING_MACHINE, $this->purging_machine);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::PACKING)) $criteria->add(HrAcroNanoTrainingRecordPeer::PACKING, $this->packing);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::QUALITY_POLICY)) $criteria->add(HrAcroNanoTrainingRecordPeer::QUALITY_POLICY, $this->quality_policy);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::SPC_AWARENESS)) $criteria->add(HrAcroNanoTrainingRecordPeer::SPC_AWARENESS, $this->spc_awareness);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::VISUAL_INSPECTION)) $criteria->add(HrAcroNanoTrainingRecordPeer::VISUAL_INSPECTION, $this->visual_inspection);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::REMARKS)) $criteria->add(HrAcroNanoTrainingRecordPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::VERIFY)) $criteria->add(HrAcroNanoTrainingRecordPeer::VERIFY, $this->verify);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::CREATED_BY)) $criteria->add(HrAcroNanoTrainingRecordPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::DATE_CREATED)) $criteria->add(HrAcroNanoTrainingRecordPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::MODIFIED_BY)) $criteria->add(HrAcroNanoTrainingRecordPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::DATE_MODIFIED)) $criteria->add(HrAcroNanoTrainingRecordPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::PHARMAG_WASHER)) $criteria->add(HrAcroNanoTrainingRecordPeer::PHARMAG_WASHER, $this->pharmag_washer);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::PVA_VMI)) $criteria->add(HrAcroNanoTrainingRecordPeer::PVA_VMI, $this->pva_vmi);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::PRE_WASH_LOADING)) $criteria->add(HrAcroNanoTrainingRecordPeer::PRE_WASH_LOADING, $this->pre_wash_loading);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::PRE_WASH_UNLOADING)) $criteria->add(HrAcroNanoTrainingRecordPeer::PRE_WASH_UNLOADING, $this->pre_wash_unloading);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::SOAKING_LOADING)) $criteria->add(HrAcroNanoTrainingRecordPeer::SOAKING_LOADING, $this->soaking_loading);
		if ($this->isColumnModified(HrAcroNanoTrainingRecordPeer::SOAKING_UNLOADING)) $criteria->add(HrAcroNanoTrainingRecordPeer::SOAKING_UNLOADING, $this->soaking_unloading);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrAcroNanoTrainingRecordPeer::DATABASE_NAME);

		$criteria->add(HrAcroNanoTrainingRecordPeer::ID, $this->id);

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

		$copyObj->setCompany($this->company);

		$copyObj->setNoHrs($this->no_hrs);

		$copyObj->setInitialInspection($this->initial_inspection);

		$copyObj->setDelabelingJellyRemoval($this->delabeling_jelly_removal);

		$copyObj->setPreWash($this->pre_wash);

		$copyObj->setLoading($this->loading);

		$copyObj->setMachineWash($this->machine_wash);

		$copyObj->setUnloading($this->unloading);

		$copyObj->setInprocessVisualInspection($this->inprocess_visual_inspection);

		$copyObj->setLpc($this->lpc);

		$copyObj->setIc($this->ic);

		$copyObj->setNvr($this->nvr);

		$copyObj->setQaSampleInspection($this->qa_sample_inspection);

		$copyObj->setPurgingMachine($this->purging_machine);

		$copyObj->setPacking($this->packing);

		$copyObj->setQualityPolicy($this->quality_policy);

		$copyObj->setSpcAwareness($this->spc_awareness);

		$copyObj->setVisualInspection($this->visual_inspection);

		$copyObj->setRemarks($this->remarks);

		$copyObj->setVerify($this->verify);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateModified($this->date_modified);

		$copyObj->setPharmagWasher($this->pharmag_washer);

		$copyObj->setPvaVmi($this->pva_vmi);

		$copyObj->setPreWashLoading($this->pre_wash_loading);

		$copyObj->setPreWashUnloading($this->pre_wash_unloading);

		$copyObj->setSoakingLoading($this->soaking_loading);

		$copyObj->setSoakingUnloading($this->soaking_unloading);


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
			self::$peer = new HrAcroNanoTrainingRecordPeer();
		}
		return self::$peer;
	}

} 
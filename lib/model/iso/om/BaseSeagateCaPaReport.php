<?php


abstract class BaseSeagateCaPaReport extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $report_no;


	
	protected $issue_date;


	
	protected $response_date;


	
	protected $findings;


	
	protected $root_cause_analysis;


	
	protected $containment_plan;


	
	protected $preventive_plan;


	
	protected $verification_of_ca_pa;


	
	protected $reported_by;


	
	protected $symptom;


	
	protected $era_description;


	
	protected $era_effectivity;


	
	protected $era_implemented;


	
	protected $era_completed;


	
	protected $title;


	
	protected $team;


	
	protected $cont_effectivity;


	
	protected $cont_implemented;


	
	protected $cont_completed;


	
	protected $chosen_perm_ca;


	
	protected $chosen_perm_effectivity;


	
	protected $chosen_perm_implemented;


	
	protected $chosen_perm_completed;


	
	protected $implemented_perm_ca;


	
	protected $implemented_perm_effectivity;


	
	protected $implemented_perm_implemented;


	
	protected $implemented_perm_completed;


	
	protected $car_name;


	
	protected $car_followup_required;


	
	protected $car_followup_date;


	
	protected $car_ca_status;


	
	protected $car_title;


	
	protected $car_plan_effective;


	
	protected $car_verified_by;


	
	protected $car_closure_date;


	
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

	
	public function getReportNo()
	{

		return $this->report_no;
	}

	
	public function getIssueDate($format = 'Y-m-d')
	{

		if ($this->issue_date === null || $this->issue_date === '') {
			return null;
		} elseif (!is_int($this->issue_date)) {
						$ts = strtotime($this->issue_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [issue_date] as date/time value: " . var_export($this->issue_date, true));
			}
		} else {
			$ts = $this->issue_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getResponseDate($format = 'Y-m-d')
	{

		if ($this->response_date === null || $this->response_date === '') {
			return null;
		} elseif (!is_int($this->response_date)) {
						$ts = strtotime($this->response_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [response_date] as date/time value: " . var_export($this->response_date, true));
			}
		} else {
			$ts = $this->response_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getFindings()
	{

		return $this->findings;
	}

	
	public function getRootCauseAnalysis()
	{

		return $this->root_cause_analysis;
	}

	
	public function getContainmentPlan()
	{

		return $this->containment_plan;
	}

	
	public function getPreventivePlan()
	{

		return $this->preventive_plan;
	}

	
	public function getVerificationOfCaPa()
	{

		return $this->verification_of_ca_pa;
	}

	
	public function getReportedBy()
	{

		return $this->reported_by;
	}

	
	public function getSymptom()
	{

		return $this->symptom;
	}

	
	public function getEraDescription()
	{

		return $this->era_description;
	}

	
	public function getEraEffectivity()
	{

		return $this->era_effectivity;
	}

	
	public function getEraImplemented()
	{

		return $this->era_implemented;
	}

	
	public function getEraCompleted()
	{

		return $this->era_completed;
	}

	
	public function getTitle()
	{

		return $this->title;
	}

	
	public function getTeam()
	{

		return $this->team;
	}

	
	public function getContEffectivity()
	{

		return $this->cont_effectivity;
	}

	
	public function getContImplemented()
	{

		return $this->cont_implemented;
	}

	
	public function getContCompleted()
	{

		return $this->cont_completed;
	}

	
	public function getChosenPermCa()
	{

		return $this->chosen_perm_ca;
	}

	
	public function getChosenPermEffectivity()
	{

		return $this->chosen_perm_effectivity;
	}

	
	public function getChosenPermImplemented()
	{

		return $this->chosen_perm_implemented;
	}

	
	public function getChosenPermCompleted()
	{

		return $this->chosen_perm_completed;
	}

	
	public function getImplementedPermCa()
	{

		return $this->implemented_perm_ca;
	}

	
	public function getImplementedPermEffectivity()
	{

		return $this->implemented_perm_effectivity;
	}

	
	public function getImplementedPermImplemented()
	{

		return $this->implemented_perm_implemented;
	}

	
	public function getImplementedPermCompleted()
	{

		return $this->implemented_perm_completed;
	}

	
	public function getCarName()
	{

		return $this->car_name;
	}

	
	public function getCarFollowupRequired()
	{

		return $this->car_followup_required;
	}

	
	public function getCarFollowupDate($format = 'Y-m-d')
	{

		if ($this->car_followup_date === null || $this->car_followup_date === '') {
			return null;
		} elseif (!is_int($this->car_followup_date)) {
						$ts = strtotime($this->car_followup_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [car_followup_date] as date/time value: " . var_export($this->car_followup_date, true));
			}
		} else {
			$ts = $this->car_followup_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCarCaStatus()
	{

		return $this->car_ca_status;
	}

	
	public function getCarTitle()
	{

		return $this->car_title;
	}

	
	public function getCarPlanEffective()
	{

		return $this->car_plan_effective;
	}

	
	public function getCarVerifiedBy()
	{

		return $this->car_verified_by;
	}

	
	public function getCarClosureDate($format = 'Y-m-d')
	{

		if ($this->car_closure_date === null || $this->car_closure_date === '') {
			return null;
		} elseif (!is_int($this->car_closure_date)) {
						$ts = strtotime($this->car_closure_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [car_closure_date] as date/time value: " . var_export($this->car_closure_date, true));
			}
		} else {
			$ts = $this->car_closure_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
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
			$this->modifiedColumns[] = SeagateCaPaReportPeer::ID;
		}

	} 
	
	public function setReportNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->report_no !== $v) {
			$this->report_no = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::REPORT_NO;
		}

	} 
	
	public function setIssueDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [issue_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->issue_date !== $ts) {
			$this->issue_date = $ts;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::ISSUE_DATE;
		}

	} 
	
	public function setResponseDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [response_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->response_date !== $ts) {
			$this->response_date = $ts;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::RESPONSE_DATE;
		}

	} 
	
	public function setFindings($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->findings !== $v) {
			$this->findings = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::FINDINGS;
		}

	} 
	
	public function setRootCauseAnalysis($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->root_cause_analysis !== $v) {
			$this->root_cause_analysis = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::ROOT_CAUSE_ANALYSIS;
		}

	} 
	
	public function setContainmentPlan($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->containment_plan !== $v) {
			$this->containment_plan = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CONTAINMENT_PLAN;
		}

	} 
	
	public function setPreventivePlan($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->preventive_plan !== $v) {
			$this->preventive_plan = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::PREVENTIVE_PLAN;
		}

	} 
	
	public function setVerificationOfCaPa($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verification_of_ca_pa !== $v) {
			$this->verification_of_ca_pa = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::VERIFICATION_OF_CA_PA;
		}

	} 
	
	public function setReportedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reported_by !== $v) {
			$this->reported_by = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::REPORTED_BY;
		}

	} 
	
	public function setSymptom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->symptom !== $v) {
			$this->symptom = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::SYMPTOM;
		}

	} 
	
	public function setEraDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->era_description !== $v) {
			$this->era_description = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::ERA_DESCRIPTION;
		}

	} 
	
	public function setEraEffectivity($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->era_effectivity !== $v) {
			$this->era_effectivity = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::ERA_EFFECTIVITY;
		}

	} 
	
	public function setEraImplemented($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->era_implemented !== $v) {
			$this->era_implemented = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::ERA_IMPLEMENTED;
		}

	} 
	
	public function setEraCompleted($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->era_completed !== $v) {
			$this->era_completed = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::ERA_COMPLETED;
		}

	} 
	
	public function setTitle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::TITLE;
		}

	} 
	
	public function setTeam($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->team !== $v) {
			$this->team = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::TEAM;
		}

	} 
	
	public function setContEffectivity($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cont_effectivity !== $v) {
			$this->cont_effectivity = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CONT_EFFECTIVITY;
		}

	} 
	
	public function setContImplemented($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cont_implemented !== $v) {
			$this->cont_implemented = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CONT_IMPLEMENTED;
		}

	} 
	
	public function setContCompleted($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cont_completed !== $v) {
			$this->cont_completed = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CONT_COMPLETED;
		}

	} 
	
	public function setChosenPermCa($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->chosen_perm_ca !== $v) {
			$this->chosen_perm_ca = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CHOSEN_PERM_CA;
		}

	} 
	
	public function setChosenPermEffectivity($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->chosen_perm_effectivity !== $v) {
			$this->chosen_perm_effectivity = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CHOSEN_PERM_EFFECTIVITY;
		}

	} 
	
	public function setChosenPermImplemented($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->chosen_perm_implemented !== $v) {
			$this->chosen_perm_implemented = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CHOSEN_PERM_IMPLEMENTED;
		}

	} 
	
	public function setChosenPermCompleted($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->chosen_perm_completed !== $v) {
			$this->chosen_perm_completed = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CHOSEN_PERM_COMPLETED;
		}

	} 
	
	public function setImplementedPermCa($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->implemented_perm_ca !== $v) {
			$this->implemented_perm_ca = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::IMPLEMENTED_PERM_CA;
		}

	} 
	
	public function setImplementedPermEffectivity($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->implemented_perm_effectivity !== $v) {
			$this->implemented_perm_effectivity = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::IMPLEMENTED_PERM_EFFECTIVITY;
		}

	} 
	
	public function setImplementedPermImplemented($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->implemented_perm_implemented !== $v) {
			$this->implemented_perm_implemented = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::IMPLEMENTED_PERM_IMPLEMENTED;
		}

	} 
	
	public function setImplementedPermCompleted($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->implemented_perm_completed !== $v) {
			$this->implemented_perm_completed = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::IMPLEMENTED_PERM_COMPLETED;
		}

	} 
	
	public function setCarName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->car_name !== $v) {
			$this->car_name = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CAR_NAME;
		}

	} 
	
	public function setCarFollowupRequired($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->car_followup_required !== $v) {
			$this->car_followup_required = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CAR_FOLLOWUP_REQUIRED;
		}

	} 
	
	public function setCarFollowupDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [car_followup_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->car_followup_date !== $ts) {
			$this->car_followup_date = $ts;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CAR_FOLLOWUP_DATE;
		}

	} 
	
	public function setCarCaStatus($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->car_ca_status !== $v) {
			$this->car_ca_status = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CAR_CA_STATUS;
		}

	} 
	
	public function setCarTitle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->car_title !== $v) {
			$this->car_title = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CAR_TITLE;
		}

	} 
	
	public function setCarPlanEffective($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->car_plan_effective !== $v) {
			$this->car_plan_effective = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CAR_PLAN_EFFECTIVE;
		}

	} 
	
	public function setCarVerifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->car_verified_by !== $v) {
			$this->car_verified_by = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CAR_VERIFIED_BY;
		}

	} 
	
	public function setCarClosureDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [car_closure_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->car_closure_date !== $ts) {
			$this->car_closure_date = $ts;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CAR_CLOSURE_DATE;
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
			$this->modifiedColumns[] = SeagateCaPaReportPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::CREATED_BY;
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
			$this->modifiedColumns[] = SeagateCaPaReportPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = SeagateCaPaReportPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->report_no = $rs->getString($startcol + 1);

			$this->issue_date = $rs->getDate($startcol + 2, null);

			$this->response_date = $rs->getDate($startcol + 3, null);

			$this->findings = $rs->getString($startcol + 4);

			$this->root_cause_analysis = $rs->getString($startcol + 5);

			$this->containment_plan = $rs->getString($startcol + 6);

			$this->preventive_plan = $rs->getString($startcol + 7);

			$this->verification_of_ca_pa = $rs->getString($startcol + 8);

			$this->reported_by = $rs->getString($startcol + 9);

			$this->symptom = $rs->getString($startcol + 10);

			$this->era_description = $rs->getString($startcol + 11);

			$this->era_effectivity = $rs->getString($startcol + 12);

			$this->era_implemented = $rs->getString($startcol + 13);

			$this->era_completed = $rs->getString($startcol + 14);

			$this->title = $rs->getString($startcol + 15);

			$this->team = $rs->getString($startcol + 16);

			$this->cont_effectivity = $rs->getString($startcol + 17);

			$this->cont_implemented = $rs->getString($startcol + 18);

			$this->cont_completed = $rs->getString($startcol + 19);

			$this->chosen_perm_ca = $rs->getString($startcol + 20);

			$this->chosen_perm_effectivity = $rs->getString($startcol + 21);

			$this->chosen_perm_implemented = $rs->getString($startcol + 22);

			$this->chosen_perm_completed = $rs->getString($startcol + 23);

			$this->implemented_perm_ca = $rs->getString($startcol + 24);

			$this->implemented_perm_effectivity = $rs->getString($startcol + 25);

			$this->implemented_perm_implemented = $rs->getString($startcol + 26);

			$this->implemented_perm_completed = $rs->getString($startcol + 27);

			$this->car_name = $rs->getString($startcol + 28);

			$this->car_followup_required = $rs->getString($startcol + 29);

			$this->car_followup_date = $rs->getDate($startcol + 30, null);

			$this->car_ca_status = $rs->getString($startcol + 31);

			$this->car_title = $rs->getString($startcol + 32);

			$this->car_plan_effective = $rs->getString($startcol + 33);

			$this->car_verified_by = $rs->getString($startcol + 34);

			$this->car_closure_date = $rs->getDate($startcol + 35, null);

			$this->date_created = $rs->getTimestamp($startcol + 36, null);

			$this->created_by = $rs->getString($startcol + 37);

			$this->date_modified = $rs->getTimestamp($startcol + 38, null);

			$this->modified_by = $rs->getString($startcol + 39);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 40; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SeagateCaPaReport object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SeagateCaPaReportPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SeagateCaPaReportPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SeagateCaPaReportPeer::DATABASE_NAME);
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
					$pk = SeagateCaPaReportPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SeagateCaPaReportPeer::doUpdate($this, $con);
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


			if (($retval = SeagateCaPaReportPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SeagateCaPaReportPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getReportNo();
				break;
			case 2:
				return $this->getIssueDate();
				break;
			case 3:
				return $this->getResponseDate();
				break;
			case 4:
				return $this->getFindings();
				break;
			case 5:
				return $this->getRootCauseAnalysis();
				break;
			case 6:
				return $this->getContainmentPlan();
				break;
			case 7:
				return $this->getPreventivePlan();
				break;
			case 8:
				return $this->getVerificationOfCaPa();
				break;
			case 9:
				return $this->getReportedBy();
				break;
			case 10:
				return $this->getSymptom();
				break;
			case 11:
				return $this->getEraDescription();
				break;
			case 12:
				return $this->getEraEffectivity();
				break;
			case 13:
				return $this->getEraImplemented();
				break;
			case 14:
				return $this->getEraCompleted();
				break;
			case 15:
				return $this->getTitle();
				break;
			case 16:
				return $this->getTeam();
				break;
			case 17:
				return $this->getContEffectivity();
				break;
			case 18:
				return $this->getContImplemented();
				break;
			case 19:
				return $this->getContCompleted();
				break;
			case 20:
				return $this->getChosenPermCa();
				break;
			case 21:
				return $this->getChosenPermEffectivity();
				break;
			case 22:
				return $this->getChosenPermImplemented();
				break;
			case 23:
				return $this->getChosenPermCompleted();
				break;
			case 24:
				return $this->getImplementedPermCa();
				break;
			case 25:
				return $this->getImplementedPermEffectivity();
				break;
			case 26:
				return $this->getImplementedPermImplemented();
				break;
			case 27:
				return $this->getImplementedPermCompleted();
				break;
			case 28:
				return $this->getCarName();
				break;
			case 29:
				return $this->getCarFollowupRequired();
				break;
			case 30:
				return $this->getCarFollowupDate();
				break;
			case 31:
				return $this->getCarCaStatus();
				break;
			case 32:
				return $this->getCarTitle();
				break;
			case 33:
				return $this->getCarPlanEffective();
				break;
			case 34:
				return $this->getCarVerifiedBy();
				break;
			case 35:
				return $this->getCarClosureDate();
				break;
			case 36:
				return $this->getDateCreated();
				break;
			case 37:
				return $this->getCreatedBy();
				break;
			case 38:
				return $this->getDateModified();
				break;
			case 39:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SeagateCaPaReportPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getReportNo(),
			$keys[2] => $this->getIssueDate(),
			$keys[3] => $this->getResponseDate(),
			$keys[4] => $this->getFindings(),
			$keys[5] => $this->getRootCauseAnalysis(),
			$keys[6] => $this->getContainmentPlan(),
			$keys[7] => $this->getPreventivePlan(),
			$keys[8] => $this->getVerificationOfCaPa(),
			$keys[9] => $this->getReportedBy(),
			$keys[10] => $this->getSymptom(),
			$keys[11] => $this->getEraDescription(),
			$keys[12] => $this->getEraEffectivity(),
			$keys[13] => $this->getEraImplemented(),
			$keys[14] => $this->getEraCompleted(),
			$keys[15] => $this->getTitle(),
			$keys[16] => $this->getTeam(),
			$keys[17] => $this->getContEffectivity(),
			$keys[18] => $this->getContImplemented(),
			$keys[19] => $this->getContCompleted(),
			$keys[20] => $this->getChosenPermCa(),
			$keys[21] => $this->getChosenPermEffectivity(),
			$keys[22] => $this->getChosenPermImplemented(),
			$keys[23] => $this->getChosenPermCompleted(),
			$keys[24] => $this->getImplementedPermCa(),
			$keys[25] => $this->getImplementedPermEffectivity(),
			$keys[26] => $this->getImplementedPermImplemented(),
			$keys[27] => $this->getImplementedPermCompleted(),
			$keys[28] => $this->getCarName(),
			$keys[29] => $this->getCarFollowupRequired(),
			$keys[30] => $this->getCarFollowupDate(),
			$keys[31] => $this->getCarCaStatus(),
			$keys[32] => $this->getCarTitle(),
			$keys[33] => $this->getCarPlanEffective(),
			$keys[34] => $this->getCarVerifiedBy(),
			$keys[35] => $this->getCarClosureDate(),
			$keys[36] => $this->getDateCreated(),
			$keys[37] => $this->getCreatedBy(),
			$keys[38] => $this->getDateModified(),
			$keys[39] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SeagateCaPaReportPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setReportNo($value);
				break;
			case 2:
				$this->setIssueDate($value);
				break;
			case 3:
				$this->setResponseDate($value);
				break;
			case 4:
				$this->setFindings($value);
				break;
			case 5:
				$this->setRootCauseAnalysis($value);
				break;
			case 6:
				$this->setContainmentPlan($value);
				break;
			case 7:
				$this->setPreventivePlan($value);
				break;
			case 8:
				$this->setVerificationOfCaPa($value);
				break;
			case 9:
				$this->setReportedBy($value);
				break;
			case 10:
				$this->setSymptom($value);
				break;
			case 11:
				$this->setEraDescription($value);
				break;
			case 12:
				$this->setEraEffectivity($value);
				break;
			case 13:
				$this->setEraImplemented($value);
				break;
			case 14:
				$this->setEraCompleted($value);
				break;
			case 15:
				$this->setTitle($value);
				break;
			case 16:
				$this->setTeam($value);
				break;
			case 17:
				$this->setContEffectivity($value);
				break;
			case 18:
				$this->setContImplemented($value);
				break;
			case 19:
				$this->setContCompleted($value);
				break;
			case 20:
				$this->setChosenPermCa($value);
				break;
			case 21:
				$this->setChosenPermEffectivity($value);
				break;
			case 22:
				$this->setChosenPermImplemented($value);
				break;
			case 23:
				$this->setChosenPermCompleted($value);
				break;
			case 24:
				$this->setImplementedPermCa($value);
				break;
			case 25:
				$this->setImplementedPermEffectivity($value);
				break;
			case 26:
				$this->setImplementedPermImplemented($value);
				break;
			case 27:
				$this->setImplementedPermCompleted($value);
				break;
			case 28:
				$this->setCarName($value);
				break;
			case 29:
				$this->setCarFollowupRequired($value);
				break;
			case 30:
				$this->setCarFollowupDate($value);
				break;
			case 31:
				$this->setCarCaStatus($value);
				break;
			case 32:
				$this->setCarTitle($value);
				break;
			case 33:
				$this->setCarPlanEffective($value);
				break;
			case 34:
				$this->setCarVerifiedBy($value);
				break;
			case 35:
				$this->setCarClosureDate($value);
				break;
			case 36:
				$this->setDateCreated($value);
				break;
			case 37:
				$this->setCreatedBy($value);
				break;
			case 38:
				$this->setDateModified($value);
				break;
			case 39:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SeagateCaPaReportPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setReportNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIssueDate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setResponseDate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFindings($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRootCauseAnalysis($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setContainmentPlan($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPreventivePlan($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setVerificationOfCaPa($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setReportedBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setSymptom($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setEraDescription($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setEraEffectivity($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setEraImplemented($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setEraCompleted($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setTitle($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setTeam($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setContEffectivity($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setContImplemented($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setContCompleted($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setChosenPermCa($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setChosenPermEffectivity($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setChosenPermImplemented($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setChosenPermCompleted($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setImplementedPermCa($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setImplementedPermEffectivity($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setImplementedPermImplemented($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setImplementedPermCompleted($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setCarName($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setCarFollowupRequired($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setCarFollowupDate($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setCarCaStatus($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setCarTitle($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setCarPlanEffective($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setCarVerifiedBy($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setCarClosureDate($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setDateCreated($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setCreatedBy($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setDateModified($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setModifiedBy($arr[$keys[39]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SeagateCaPaReportPeer::DATABASE_NAME);

		if ($this->isColumnModified(SeagateCaPaReportPeer::ID)) $criteria->add(SeagateCaPaReportPeer::ID, $this->id);
		if ($this->isColumnModified(SeagateCaPaReportPeer::REPORT_NO)) $criteria->add(SeagateCaPaReportPeer::REPORT_NO, $this->report_no);
		if ($this->isColumnModified(SeagateCaPaReportPeer::ISSUE_DATE)) $criteria->add(SeagateCaPaReportPeer::ISSUE_DATE, $this->issue_date);
		if ($this->isColumnModified(SeagateCaPaReportPeer::RESPONSE_DATE)) $criteria->add(SeagateCaPaReportPeer::RESPONSE_DATE, $this->response_date);
		if ($this->isColumnModified(SeagateCaPaReportPeer::FINDINGS)) $criteria->add(SeagateCaPaReportPeer::FINDINGS, $this->findings);
		if ($this->isColumnModified(SeagateCaPaReportPeer::ROOT_CAUSE_ANALYSIS)) $criteria->add(SeagateCaPaReportPeer::ROOT_CAUSE_ANALYSIS, $this->root_cause_analysis);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CONTAINMENT_PLAN)) $criteria->add(SeagateCaPaReportPeer::CONTAINMENT_PLAN, $this->containment_plan);
		if ($this->isColumnModified(SeagateCaPaReportPeer::PREVENTIVE_PLAN)) $criteria->add(SeagateCaPaReportPeer::PREVENTIVE_PLAN, $this->preventive_plan);
		if ($this->isColumnModified(SeagateCaPaReportPeer::VERIFICATION_OF_CA_PA)) $criteria->add(SeagateCaPaReportPeer::VERIFICATION_OF_CA_PA, $this->verification_of_ca_pa);
		if ($this->isColumnModified(SeagateCaPaReportPeer::REPORTED_BY)) $criteria->add(SeagateCaPaReportPeer::REPORTED_BY, $this->reported_by);
		if ($this->isColumnModified(SeagateCaPaReportPeer::SYMPTOM)) $criteria->add(SeagateCaPaReportPeer::SYMPTOM, $this->symptom);
		if ($this->isColumnModified(SeagateCaPaReportPeer::ERA_DESCRIPTION)) $criteria->add(SeagateCaPaReportPeer::ERA_DESCRIPTION, $this->era_description);
		if ($this->isColumnModified(SeagateCaPaReportPeer::ERA_EFFECTIVITY)) $criteria->add(SeagateCaPaReportPeer::ERA_EFFECTIVITY, $this->era_effectivity);
		if ($this->isColumnModified(SeagateCaPaReportPeer::ERA_IMPLEMENTED)) $criteria->add(SeagateCaPaReportPeer::ERA_IMPLEMENTED, $this->era_implemented);
		if ($this->isColumnModified(SeagateCaPaReportPeer::ERA_COMPLETED)) $criteria->add(SeagateCaPaReportPeer::ERA_COMPLETED, $this->era_completed);
		if ($this->isColumnModified(SeagateCaPaReportPeer::TITLE)) $criteria->add(SeagateCaPaReportPeer::TITLE, $this->title);
		if ($this->isColumnModified(SeagateCaPaReportPeer::TEAM)) $criteria->add(SeagateCaPaReportPeer::TEAM, $this->team);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CONT_EFFECTIVITY)) $criteria->add(SeagateCaPaReportPeer::CONT_EFFECTIVITY, $this->cont_effectivity);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CONT_IMPLEMENTED)) $criteria->add(SeagateCaPaReportPeer::CONT_IMPLEMENTED, $this->cont_implemented);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CONT_COMPLETED)) $criteria->add(SeagateCaPaReportPeer::CONT_COMPLETED, $this->cont_completed);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CHOSEN_PERM_CA)) $criteria->add(SeagateCaPaReportPeer::CHOSEN_PERM_CA, $this->chosen_perm_ca);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CHOSEN_PERM_EFFECTIVITY)) $criteria->add(SeagateCaPaReportPeer::CHOSEN_PERM_EFFECTIVITY, $this->chosen_perm_effectivity);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CHOSEN_PERM_IMPLEMENTED)) $criteria->add(SeagateCaPaReportPeer::CHOSEN_PERM_IMPLEMENTED, $this->chosen_perm_implemented);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CHOSEN_PERM_COMPLETED)) $criteria->add(SeagateCaPaReportPeer::CHOSEN_PERM_COMPLETED, $this->chosen_perm_completed);
		if ($this->isColumnModified(SeagateCaPaReportPeer::IMPLEMENTED_PERM_CA)) $criteria->add(SeagateCaPaReportPeer::IMPLEMENTED_PERM_CA, $this->implemented_perm_ca);
		if ($this->isColumnModified(SeagateCaPaReportPeer::IMPLEMENTED_PERM_EFFECTIVITY)) $criteria->add(SeagateCaPaReportPeer::IMPLEMENTED_PERM_EFFECTIVITY, $this->implemented_perm_effectivity);
		if ($this->isColumnModified(SeagateCaPaReportPeer::IMPLEMENTED_PERM_IMPLEMENTED)) $criteria->add(SeagateCaPaReportPeer::IMPLEMENTED_PERM_IMPLEMENTED, $this->implemented_perm_implemented);
		if ($this->isColumnModified(SeagateCaPaReportPeer::IMPLEMENTED_PERM_COMPLETED)) $criteria->add(SeagateCaPaReportPeer::IMPLEMENTED_PERM_COMPLETED, $this->implemented_perm_completed);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CAR_NAME)) $criteria->add(SeagateCaPaReportPeer::CAR_NAME, $this->car_name);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CAR_FOLLOWUP_REQUIRED)) $criteria->add(SeagateCaPaReportPeer::CAR_FOLLOWUP_REQUIRED, $this->car_followup_required);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CAR_FOLLOWUP_DATE)) $criteria->add(SeagateCaPaReportPeer::CAR_FOLLOWUP_DATE, $this->car_followup_date);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CAR_CA_STATUS)) $criteria->add(SeagateCaPaReportPeer::CAR_CA_STATUS, $this->car_ca_status);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CAR_TITLE)) $criteria->add(SeagateCaPaReportPeer::CAR_TITLE, $this->car_title);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CAR_PLAN_EFFECTIVE)) $criteria->add(SeagateCaPaReportPeer::CAR_PLAN_EFFECTIVE, $this->car_plan_effective);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CAR_VERIFIED_BY)) $criteria->add(SeagateCaPaReportPeer::CAR_VERIFIED_BY, $this->car_verified_by);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CAR_CLOSURE_DATE)) $criteria->add(SeagateCaPaReportPeer::CAR_CLOSURE_DATE, $this->car_closure_date);
		if ($this->isColumnModified(SeagateCaPaReportPeer::DATE_CREATED)) $criteria->add(SeagateCaPaReportPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(SeagateCaPaReportPeer::CREATED_BY)) $criteria->add(SeagateCaPaReportPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(SeagateCaPaReportPeer::DATE_MODIFIED)) $criteria->add(SeagateCaPaReportPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(SeagateCaPaReportPeer::MODIFIED_BY)) $criteria->add(SeagateCaPaReportPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SeagateCaPaReportPeer::DATABASE_NAME);

		$criteria->add(SeagateCaPaReportPeer::ID, $this->id);

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

		$copyObj->setReportNo($this->report_no);

		$copyObj->setIssueDate($this->issue_date);

		$copyObj->setResponseDate($this->response_date);

		$copyObj->setFindings($this->findings);

		$copyObj->setRootCauseAnalysis($this->root_cause_analysis);

		$copyObj->setContainmentPlan($this->containment_plan);

		$copyObj->setPreventivePlan($this->preventive_plan);

		$copyObj->setVerificationOfCaPa($this->verification_of_ca_pa);

		$copyObj->setReportedBy($this->reported_by);

		$copyObj->setSymptom($this->symptom);

		$copyObj->setEraDescription($this->era_description);

		$copyObj->setEraEffectivity($this->era_effectivity);

		$copyObj->setEraImplemented($this->era_implemented);

		$copyObj->setEraCompleted($this->era_completed);

		$copyObj->setTitle($this->title);

		$copyObj->setTeam($this->team);

		$copyObj->setContEffectivity($this->cont_effectivity);

		$copyObj->setContImplemented($this->cont_implemented);

		$copyObj->setContCompleted($this->cont_completed);

		$copyObj->setChosenPermCa($this->chosen_perm_ca);

		$copyObj->setChosenPermEffectivity($this->chosen_perm_effectivity);

		$copyObj->setChosenPermImplemented($this->chosen_perm_implemented);

		$copyObj->setChosenPermCompleted($this->chosen_perm_completed);

		$copyObj->setImplementedPermCa($this->implemented_perm_ca);

		$copyObj->setImplementedPermEffectivity($this->implemented_perm_effectivity);

		$copyObj->setImplementedPermImplemented($this->implemented_perm_implemented);

		$copyObj->setImplementedPermCompleted($this->implemented_perm_completed);

		$copyObj->setCarName($this->car_name);

		$copyObj->setCarFollowupRequired($this->car_followup_required);

		$copyObj->setCarFollowupDate($this->car_followup_date);

		$copyObj->setCarCaStatus($this->car_ca_status);

		$copyObj->setCarTitle($this->car_title);

		$copyObj->setCarPlanEffective($this->car_plan_effective);

		$copyObj->setCarVerifiedBy($this->car_verified_by);

		$copyObj->setCarClosureDate($this->car_closure_date);

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
			self::$peer = new SeagateCaPaReportPeer();
		}
		return self::$peer;
	}

} 
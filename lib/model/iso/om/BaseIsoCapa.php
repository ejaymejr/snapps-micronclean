<?php


abstract class BaseIsoCapa extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $qan_no;


	
	protected $file_name;


	
	protected $proposed_action;


	
	protected $initiator;


	
	protected $customer;


	
	protected $cust_comment;


	
	protected $problem_description;


	
	protected $initiated_by;


	
	protected $initiated_date;


	
	protected $keyed_in_by;


	
	protected $keyed_in_date;


	
	protected $assigned_to;


	
	protected $assigned_date;


	
	protected $eight_d_form;


	
	protected $recommended_action;


	
	protected $data_collection;


	
	protected $implemented_date;


	
	protected $affected_parts;


	
	protected $initial_completion_date;


	
	protected $plan_completion_date;


	
	protected $submitted_by;


	
	protected $run_plan_date;


	
	protected $approve_comment;


	
	protected $approved_by;


	
	protected $action_plan_date;


	
	protected $follow_up_by;


	
	protected $follow_up_date;


	
	protected $is_effective;


	
	protected $effectivity_comment;


	
	protected $closed_out_date;


	
	protected $additional_sheet;


	
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

	
	public function getQanNo()
	{

		return $this->qan_no;
	}

	
	public function getFileName()
	{

		return $this->file_name;
	}

	
	public function getProposedAction()
	{

		return $this->proposed_action;
	}

	
	public function getInitiator()
	{

		return $this->initiator;
	}

	
	public function getCustomer()
	{

		return $this->customer;
	}

	
	public function getCustComment()
	{

		return $this->cust_comment;
	}

	
	public function getProblemDescription()
	{

		return $this->problem_description;
	}

	
	public function getInitiatedBy()
	{

		return $this->initiated_by;
	}

	
	public function getInitiatedDate($format = 'Y-m-d')
	{

		if ($this->initiated_date === null || $this->initiated_date === '') {
			return null;
		} elseif (!is_int($this->initiated_date)) {
						$ts = strtotime($this->initiated_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [initiated_date] as date/time value: " . var_export($this->initiated_date, true));
			}
		} else {
			$ts = $this->initiated_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getKeyedInBy()
	{

		return $this->keyed_in_by;
	}

	
	public function getKeyedInDate($format = 'Y-m-d')
	{

		if ($this->keyed_in_date === null || $this->keyed_in_date === '') {
			return null;
		} elseif (!is_int($this->keyed_in_date)) {
						$ts = strtotime($this->keyed_in_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [keyed_in_date] as date/time value: " . var_export($this->keyed_in_date, true));
			}
		} else {
			$ts = $this->keyed_in_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getAssignedTo()
	{

		return $this->assigned_to;
	}

	
	public function getAssignedDate($format = 'Y-m-d')
	{

		if ($this->assigned_date === null || $this->assigned_date === '') {
			return null;
		} elseif (!is_int($this->assigned_date)) {
						$ts = strtotime($this->assigned_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [assigned_date] as date/time value: " . var_export($this->assigned_date, true));
			}
		} else {
			$ts = $this->assigned_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getEightDForm()
	{

		return $this->eight_d_form;
	}

	
	public function getRecommendedAction()
	{

		return $this->recommended_action;
	}

	
	public function getDataCollection()
	{

		return $this->data_collection;
	}

	
	public function getImplementedDate($format = 'Y-m-d')
	{

		if ($this->implemented_date === null || $this->implemented_date === '') {
			return null;
		} elseif (!is_int($this->implemented_date)) {
						$ts = strtotime($this->implemented_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [implemented_date] as date/time value: " . var_export($this->implemented_date, true));
			}
		} else {
			$ts = $this->implemented_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getAffectedParts()
	{

		return $this->affected_parts;
	}

	
	public function getInitialCompletionDate($format = 'Y-m-d')
	{

		if ($this->initial_completion_date === null || $this->initial_completion_date === '') {
			return null;
		} elseif (!is_int($this->initial_completion_date)) {
						$ts = strtotime($this->initial_completion_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [initial_completion_date] as date/time value: " . var_export($this->initial_completion_date, true));
			}
		} else {
			$ts = $this->initial_completion_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getPlanCompletionDate($format = 'Y-m-d')
	{

		if ($this->plan_completion_date === null || $this->plan_completion_date === '') {
			return null;
		} elseif (!is_int($this->plan_completion_date)) {
						$ts = strtotime($this->plan_completion_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [plan_completion_date] as date/time value: " . var_export($this->plan_completion_date, true));
			}
		} else {
			$ts = $this->plan_completion_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getSubmittedBy()
	{

		return $this->submitted_by;
	}

	
	public function getRunPlanDate($format = 'Y-m-d')
	{

		if ($this->run_plan_date === null || $this->run_plan_date === '') {
			return null;
		} elseif (!is_int($this->run_plan_date)) {
						$ts = strtotime($this->run_plan_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [run_plan_date] as date/time value: " . var_export($this->run_plan_date, true));
			}
		} else {
			$ts = $this->run_plan_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getApproveComment()
	{

		return $this->approve_comment;
	}

	
	public function getApprovedBy()
	{

		return $this->approved_by;
	}

	
	public function getActionPlanDate($format = 'Y-m-d')
	{

		if ($this->action_plan_date === null || $this->action_plan_date === '') {
			return null;
		} elseif (!is_int($this->action_plan_date)) {
						$ts = strtotime($this->action_plan_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [action_plan_date] as date/time value: " . var_export($this->action_plan_date, true));
			}
		} else {
			$ts = $this->action_plan_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getFollowUpBy()
	{

		return $this->follow_up_by;
	}

	
	public function getFollowUpDate($format = 'Y-m-d')
	{

		if ($this->follow_up_date === null || $this->follow_up_date === '') {
			return null;
		} elseif (!is_int($this->follow_up_date)) {
						$ts = strtotime($this->follow_up_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [follow_up_date] as date/time value: " . var_export($this->follow_up_date, true));
			}
		} else {
			$ts = $this->follow_up_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getIsEffective()
	{

		return $this->is_effective;
	}

	
	public function getEffectivityComment()
	{

		return $this->effectivity_comment;
	}

	
	public function getClosedOutDate($format = 'Y-m-d')
	{

		if ($this->closed_out_date === null || $this->closed_out_date === '') {
			return null;
		} elseif (!is_int($this->closed_out_date)) {
						$ts = strtotime($this->closed_out_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [closed_out_date] as date/time value: " . var_export($this->closed_out_date, true));
			}
		} else {
			$ts = $this->closed_out_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getAdditionalSheet()
	{

		return $this->additional_sheet;
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
			$this->modifiedColumns[] = IsoCapaPeer::ID;
		}

	} 
	
	public function setQanNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->qan_no !== $v) {
			$this->qan_no = $v;
			$this->modifiedColumns[] = IsoCapaPeer::QAN_NO;
		}

	} 
	
	public function setFileName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->file_name !== $v) {
			$this->file_name = $v;
			$this->modifiedColumns[] = IsoCapaPeer::FILE_NAME;
		}

	} 
	
	public function setProposedAction($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->proposed_action !== $v) {
			$this->proposed_action = $v;
			$this->modifiedColumns[] = IsoCapaPeer::PROPOSED_ACTION;
		}

	} 
	
	public function setInitiator($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initiator !== $v) {
			$this->initiator = $v;
			$this->modifiedColumns[] = IsoCapaPeer::INITIATOR;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v) {
			$this->customer = $v;
			$this->modifiedColumns[] = IsoCapaPeer::CUSTOMER;
		}

	} 
	
	public function setCustComment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cust_comment !== $v) {
			$this->cust_comment = $v;
			$this->modifiedColumns[] = IsoCapaPeer::CUST_COMMENT;
		}

	} 
	
	public function setProblemDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->problem_description !== $v) {
			$this->problem_description = $v;
			$this->modifiedColumns[] = IsoCapaPeer::PROBLEM_DESCRIPTION;
		}

	} 
	
	public function setInitiatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initiated_by !== $v) {
			$this->initiated_by = $v;
			$this->modifiedColumns[] = IsoCapaPeer::INITIATED_BY;
		}

	} 
	
	public function setInitiatedDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [initiated_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->initiated_date !== $ts) {
			$this->initiated_date = $ts;
			$this->modifiedColumns[] = IsoCapaPeer::INITIATED_DATE;
		}

	} 
	
	public function setKeyedInBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->keyed_in_by !== $v) {
			$this->keyed_in_by = $v;
			$this->modifiedColumns[] = IsoCapaPeer::KEYED_IN_BY;
		}

	} 
	
	public function setKeyedInDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [keyed_in_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->keyed_in_date !== $ts) {
			$this->keyed_in_date = $ts;
			$this->modifiedColumns[] = IsoCapaPeer::KEYED_IN_DATE;
		}

	} 
	
	public function setAssignedTo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->assigned_to !== $v) {
			$this->assigned_to = $v;
			$this->modifiedColumns[] = IsoCapaPeer::ASSIGNED_TO;
		}

	} 
	
	public function setAssignedDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [assigned_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->assigned_date !== $ts) {
			$this->assigned_date = $ts;
			$this->modifiedColumns[] = IsoCapaPeer::ASSIGNED_DATE;
		}

	} 
	
	public function setEightDForm($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->eight_d_form !== $v) {
			$this->eight_d_form = $v;
			$this->modifiedColumns[] = IsoCapaPeer::EIGHT_D_FORM;
		}

	} 
	
	public function setRecommendedAction($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->recommended_action !== $v) {
			$this->recommended_action = $v;
			$this->modifiedColumns[] = IsoCapaPeer::RECOMMENDED_ACTION;
		}

	} 
	
	public function setDataCollection($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->data_collection !== $v) {
			$this->data_collection = $v;
			$this->modifiedColumns[] = IsoCapaPeer::DATA_COLLECTION;
		}

	} 
	
	public function setImplementedDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [implemented_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->implemented_date !== $ts) {
			$this->implemented_date = $ts;
			$this->modifiedColumns[] = IsoCapaPeer::IMPLEMENTED_DATE;
		}

	} 
	
	public function setAffectedParts($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->affected_parts !== $v) {
			$this->affected_parts = $v;
			$this->modifiedColumns[] = IsoCapaPeer::AFFECTED_PARTS;
		}

	} 
	
	public function setInitialCompletionDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [initial_completion_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->initial_completion_date !== $ts) {
			$this->initial_completion_date = $ts;
			$this->modifiedColumns[] = IsoCapaPeer::INITIAL_COMPLETION_DATE;
		}

	} 
	
	public function setPlanCompletionDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [plan_completion_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->plan_completion_date !== $ts) {
			$this->plan_completion_date = $ts;
			$this->modifiedColumns[] = IsoCapaPeer::PLAN_COMPLETION_DATE;
		}

	} 
	
	public function setSubmittedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->submitted_by !== $v) {
			$this->submitted_by = $v;
			$this->modifiedColumns[] = IsoCapaPeer::SUBMITTED_BY;
		}

	} 
	
	public function setRunPlanDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [run_plan_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->run_plan_date !== $ts) {
			$this->run_plan_date = $ts;
			$this->modifiedColumns[] = IsoCapaPeer::RUN_PLAN_DATE;
		}

	} 
	
	public function setApproveComment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->approve_comment !== $v) {
			$this->approve_comment = $v;
			$this->modifiedColumns[] = IsoCapaPeer::APPROVE_COMMENT;
		}

	} 
	
	public function setApprovedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->approved_by !== $v) {
			$this->approved_by = $v;
			$this->modifiedColumns[] = IsoCapaPeer::APPROVED_BY;
		}

	} 
	
	public function setActionPlanDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [action_plan_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->action_plan_date !== $ts) {
			$this->action_plan_date = $ts;
			$this->modifiedColumns[] = IsoCapaPeer::ACTION_PLAN_DATE;
		}

	} 
	
	public function setFollowUpBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->follow_up_by !== $v) {
			$this->follow_up_by = $v;
			$this->modifiedColumns[] = IsoCapaPeer::FOLLOW_UP_BY;
		}

	} 
	
	public function setFollowUpDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [follow_up_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->follow_up_date !== $ts) {
			$this->follow_up_date = $ts;
			$this->modifiedColumns[] = IsoCapaPeer::FOLLOW_UP_DATE;
		}

	} 
	
	public function setIsEffective($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->is_effective !== $v) {
			$this->is_effective = $v;
			$this->modifiedColumns[] = IsoCapaPeer::IS_EFFECTIVE;
		}

	} 
	
	public function setEffectivityComment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->effectivity_comment !== $v) {
			$this->effectivity_comment = $v;
			$this->modifiedColumns[] = IsoCapaPeer::EFFECTIVITY_COMMENT;
		}

	} 
	
	public function setClosedOutDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [closed_out_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->closed_out_date !== $ts) {
			$this->closed_out_date = $ts;
			$this->modifiedColumns[] = IsoCapaPeer::CLOSED_OUT_DATE;
		}

	} 
	
	public function setAdditionalSheet($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->additional_sheet !== $v) {
			$this->additional_sheet = $v;
			$this->modifiedColumns[] = IsoCapaPeer::ADDITIONAL_SHEET;
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
			$this->modifiedColumns[] = IsoCapaPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = IsoCapaPeer::CREATED_BY;
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
			$this->modifiedColumns[] = IsoCapaPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = IsoCapaPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->qan_no = $rs->getInt($startcol + 1);

			$this->file_name = $rs->getString($startcol + 2);

			$this->proposed_action = $rs->getString($startcol + 3);

			$this->initiator = $rs->getString($startcol + 4);

			$this->customer = $rs->getString($startcol + 5);

			$this->cust_comment = $rs->getString($startcol + 6);

			$this->problem_description = $rs->getString($startcol + 7);

			$this->initiated_by = $rs->getString($startcol + 8);

			$this->initiated_date = $rs->getDate($startcol + 9, null);

			$this->keyed_in_by = $rs->getString($startcol + 10);

			$this->keyed_in_date = $rs->getDate($startcol + 11, null);

			$this->assigned_to = $rs->getString($startcol + 12);

			$this->assigned_date = $rs->getDate($startcol + 13, null);

			$this->eight_d_form = $rs->getString($startcol + 14);

			$this->recommended_action = $rs->getString($startcol + 15);

			$this->data_collection = $rs->getString($startcol + 16);

			$this->implemented_date = $rs->getDate($startcol + 17, null);

			$this->affected_parts = $rs->getString($startcol + 18);

			$this->initial_completion_date = $rs->getDate($startcol + 19, null);

			$this->plan_completion_date = $rs->getDate($startcol + 20, null);

			$this->submitted_by = $rs->getString($startcol + 21);

			$this->run_plan_date = $rs->getDate($startcol + 22, null);

			$this->approve_comment = $rs->getString($startcol + 23);

			$this->approved_by = $rs->getString($startcol + 24);

			$this->action_plan_date = $rs->getDate($startcol + 25, null);

			$this->follow_up_by = $rs->getString($startcol + 26);

			$this->follow_up_date = $rs->getDate($startcol + 27, null);

			$this->is_effective = $rs->getString($startcol + 28);

			$this->effectivity_comment = $rs->getString($startcol + 29);

			$this->closed_out_date = $rs->getDate($startcol + 30, null);

			$this->additional_sheet = $rs->getString($startcol + 31);

			$this->date_created = $rs->getTimestamp($startcol + 32, null);

			$this->created_by = $rs->getString($startcol + 33);

			$this->date_modified = $rs->getTimestamp($startcol + 34, null);

			$this->modified_by = $rs->getString($startcol + 35);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 36; 
		} catch (Exception $e) {
			throw new PropelException("Error populating IsoCapa object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(IsoCapaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			IsoCapaPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(IsoCapaPeer::DATABASE_NAME);
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
					$pk = IsoCapaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += IsoCapaPeer::doUpdate($this, $con);
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


			if (($retval = IsoCapaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = IsoCapaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getQanNo();
				break;
			case 2:
				return $this->getFileName();
				break;
			case 3:
				return $this->getProposedAction();
				break;
			case 4:
				return $this->getInitiator();
				break;
			case 5:
				return $this->getCustomer();
				break;
			case 6:
				return $this->getCustComment();
				break;
			case 7:
				return $this->getProblemDescription();
				break;
			case 8:
				return $this->getInitiatedBy();
				break;
			case 9:
				return $this->getInitiatedDate();
				break;
			case 10:
				return $this->getKeyedInBy();
				break;
			case 11:
				return $this->getKeyedInDate();
				break;
			case 12:
				return $this->getAssignedTo();
				break;
			case 13:
				return $this->getAssignedDate();
				break;
			case 14:
				return $this->getEightDForm();
				break;
			case 15:
				return $this->getRecommendedAction();
				break;
			case 16:
				return $this->getDataCollection();
				break;
			case 17:
				return $this->getImplementedDate();
				break;
			case 18:
				return $this->getAffectedParts();
				break;
			case 19:
				return $this->getInitialCompletionDate();
				break;
			case 20:
				return $this->getPlanCompletionDate();
				break;
			case 21:
				return $this->getSubmittedBy();
				break;
			case 22:
				return $this->getRunPlanDate();
				break;
			case 23:
				return $this->getApproveComment();
				break;
			case 24:
				return $this->getApprovedBy();
				break;
			case 25:
				return $this->getActionPlanDate();
				break;
			case 26:
				return $this->getFollowUpBy();
				break;
			case 27:
				return $this->getFollowUpDate();
				break;
			case 28:
				return $this->getIsEffective();
				break;
			case 29:
				return $this->getEffectivityComment();
				break;
			case 30:
				return $this->getClosedOutDate();
				break;
			case 31:
				return $this->getAdditionalSheet();
				break;
			case 32:
				return $this->getDateCreated();
				break;
			case 33:
				return $this->getCreatedBy();
				break;
			case 34:
				return $this->getDateModified();
				break;
			case 35:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = IsoCapaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getQanNo(),
			$keys[2] => $this->getFileName(),
			$keys[3] => $this->getProposedAction(),
			$keys[4] => $this->getInitiator(),
			$keys[5] => $this->getCustomer(),
			$keys[6] => $this->getCustComment(),
			$keys[7] => $this->getProblemDescription(),
			$keys[8] => $this->getInitiatedBy(),
			$keys[9] => $this->getInitiatedDate(),
			$keys[10] => $this->getKeyedInBy(),
			$keys[11] => $this->getKeyedInDate(),
			$keys[12] => $this->getAssignedTo(),
			$keys[13] => $this->getAssignedDate(),
			$keys[14] => $this->getEightDForm(),
			$keys[15] => $this->getRecommendedAction(),
			$keys[16] => $this->getDataCollection(),
			$keys[17] => $this->getImplementedDate(),
			$keys[18] => $this->getAffectedParts(),
			$keys[19] => $this->getInitialCompletionDate(),
			$keys[20] => $this->getPlanCompletionDate(),
			$keys[21] => $this->getSubmittedBy(),
			$keys[22] => $this->getRunPlanDate(),
			$keys[23] => $this->getApproveComment(),
			$keys[24] => $this->getApprovedBy(),
			$keys[25] => $this->getActionPlanDate(),
			$keys[26] => $this->getFollowUpBy(),
			$keys[27] => $this->getFollowUpDate(),
			$keys[28] => $this->getIsEffective(),
			$keys[29] => $this->getEffectivityComment(),
			$keys[30] => $this->getClosedOutDate(),
			$keys[31] => $this->getAdditionalSheet(),
			$keys[32] => $this->getDateCreated(),
			$keys[33] => $this->getCreatedBy(),
			$keys[34] => $this->getDateModified(),
			$keys[35] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = IsoCapaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setQanNo($value);
				break;
			case 2:
				$this->setFileName($value);
				break;
			case 3:
				$this->setProposedAction($value);
				break;
			case 4:
				$this->setInitiator($value);
				break;
			case 5:
				$this->setCustomer($value);
				break;
			case 6:
				$this->setCustComment($value);
				break;
			case 7:
				$this->setProblemDescription($value);
				break;
			case 8:
				$this->setInitiatedBy($value);
				break;
			case 9:
				$this->setInitiatedDate($value);
				break;
			case 10:
				$this->setKeyedInBy($value);
				break;
			case 11:
				$this->setKeyedInDate($value);
				break;
			case 12:
				$this->setAssignedTo($value);
				break;
			case 13:
				$this->setAssignedDate($value);
				break;
			case 14:
				$this->setEightDForm($value);
				break;
			case 15:
				$this->setRecommendedAction($value);
				break;
			case 16:
				$this->setDataCollection($value);
				break;
			case 17:
				$this->setImplementedDate($value);
				break;
			case 18:
				$this->setAffectedParts($value);
				break;
			case 19:
				$this->setInitialCompletionDate($value);
				break;
			case 20:
				$this->setPlanCompletionDate($value);
				break;
			case 21:
				$this->setSubmittedBy($value);
				break;
			case 22:
				$this->setRunPlanDate($value);
				break;
			case 23:
				$this->setApproveComment($value);
				break;
			case 24:
				$this->setApprovedBy($value);
				break;
			case 25:
				$this->setActionPlanDate($value);
				break;
			case 26:
				$this->setFollowUpBy($value);
				break;
			case 27:
				$this->setFollowUpDate($value);
				break;
			case 28:
				$this->setIsEffective($value);
				break;
			case 29:
				$this->setEffectivityComment($value);
				break;
			case 30:
				$this->setClosedOutDate($value);
				break;
			case 31:
				$this->setAdditionalSheet($value);
				break;
			case 32:
				$this->setDateCreated($value);
				break;
			case 33:
				$this->setCreatedBy($value);
				break;
			case 34:
				$this->setDateModified($value);
				break;
			case 35:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = IsoCapaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setQanNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFileName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setProposedAction($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setInitiator($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCustomer($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCustComment($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setProblemDescription($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setInitiatedBy($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setInitiatedDate($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setKeyedInBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setKeyedInDate($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setAssignedTo($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setAssignedDate($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setEightDForm($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setRecommendedAction($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDataCollection($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setImplementedDate($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setAffectedParts($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setInitialCompletionDate($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setPlanCompletionDate($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setSubmittedBy($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setRunPlanDate($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setApproveComment($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setApprovedBy($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setActionPlanDate($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setFollowUpBy($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setFollowUpDate($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setIsEffective($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setEffectivityComment($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setClosedOutDate($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setAdditionalSheet($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setDateCreated($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setCreatedBy($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setDateModified($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setModifiedBy($arr[$keys[35]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(IsoCapaPeer::DATABASE_NAME);

		if ($this->isColumnModified(IsoCapaPeer::ID)) $criteria->add(IsoCapaPeer::ID, $this->id);
		if ($this->isColumnModified(IsoCapaPeer::QAN_NO)) $criteria->add(IsoCapaPeer::QAN_NO, $this->qan_no);
		if ($this->isColumnModified(IsoCapaPeer::FILE_NAME)) $criteria->add(IsoCapaPeer::FILE_NAME, $this->file_name);
		if ($this->isColumnModified(IsoCapaPeer::PROPOSED_ACTION)) $criteria->add(IsoCapaPeer::PROPOSED_ACTION, $this->proposed_action);
		if ($this->isColumnModified(IsoCapaPeer::INITIATOR)) $criteria->add(IsoCapaPeer::INITIATOR, $this->initiator);
		if ($this->isColumnModified(IsoCapaPeer::CUSTOMER)) $criteria->add(IsoCapaPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(IsoCapaPeer::CUST_COMMENT)) $criteria->add(IsoCapaPeer::CUST_COMMENT, $this->cust_comment);
		if ($this->isColumnModified(IsoCapaPeer::PROBLEM_DESCRIPTION)) $criteria->add(IsoCapaPeer::PROBLEM_DESCRIPTION, $this->problem_description);
		if ($this->isColumnModified(IsoCapaPeer::INITIATED_BY)) $criteria->add(IsoCapaPeer::INITIATED_BY, $this->initiated_by);
		if ($this->isColumnModified(IsoCapaPeer::INITIATED_DATE)) $criteria->add(IsoCapaPeer::INITIATED_DATE, $this->initiated_date);
		if ($this->isColumnModified(IsoCapaPeer::KEYED_IN_BY)) $criteria->add(IsoCapaPeer::KEYED_IN_BY, $this->keyed_in_by);
		if ($this->isColumnModified(IsoCapaPeer::KEYED_IN_DATE)) $criteria->add(IsoCapaPeer::KEYED_IN_DATE, $this->keyed_in_date);
		if ($this->isColumnModified(IsoCapaPeer::ASSIGNED_TO)) $criteria->add(IsoCapaPeer::ASSIGNED_TO, $this->assigned_to);
		if ($this->isColumnModified(IsoCapaPeer::ASSIGNED_DATE)) $criteria->add(IsoCapaPeer::ASSIGNED_DATE, $this->assigned_date);
		if ($this->isColumnModified(IsoCapaPeer::EIGHT_D_FORM)) $criteria->add(IsoCapaPeer::EIGHT_D_FORM, $this->eight_d_form);
		if ($this->isColumnModified(IsoCapaPeer::RECOMMENDED_ACTION)) $criteria->add(IsoCapaPeer::RECOMMENDED_ACTION, $this->recommended_action);
		if ($this->isColumnModified(IsoCapaPeer::DATA_COLLECTION)) $criteria->add(IsoCapaPeer::DATA_COLLECTION, $this->data_collection);
		if ($this->isColumnModified(IsoCapaPeer::IMPLEMENTED_DATE)) $criteria->add(IsoCapaPeer::IMPLEMENTED_DATE, $this->implemented_date);
		if ($this->isColumnModified(IsoCapaPeer::AFFECTED_PARTS)) $criteria->add(IsoCapaPeer::AFFECTED_PARTS, $this->affected_parts);
		if ($this->isColumnModified(IsoCapaPeer::INITIAL_COMPLETION_DATE)) $criteria->add(IsoCapaPeer::INITIAL_COMPLETION_DATE, $this->initial_completion_date);
		if ($this->isColumnModified(IsoCapaPeer::PLAN_COMPLETION_DATE)) $criteria->add(IsoCapaPeer::PLAN_COMPLETION_DATE, $this->plan_completion_date);
		if ($this->isColumnModified(IsoCapaPeer::SUBMITTED_BY)) $criteria->add(IsoCapaPeer::SUBMITTED_BY, $this->submitted_by);
		if ($this->isColumnModified(IsoCapaPeer::RUN_PLAN_DATE)) $criteria->add(IsoCapaPeer::RUN_PLAN_DATE, $this->run_plan_date);
		if ($this->isColumnModified(IsoCapaPeer::APPROVE_COMMENT)) $criteria->add(IsoCapaPeer::APPROVE_COMMENT, $this->approve_comment);
		if ($this->isColumnModified(IsoCapaPeer::APPROVED_BY)) $criteria->add(IsoCapaPeer::APPROVED_BY, $this->approved_by);
		if ($this->isColumnModified(IsoCapaPeer::ACTION_PLAN_DATE)) $criteria->add(IsoCapaPeer::ACTION_PLAN_DATE, $this->action_plan_date);
		if ($this->isColumnModified(IsoCapaPeer::FOLLOW_UP_BY)) $criteria->add(IsoCapaPeer::FOLLOW_UP_BY, $this->follow_up_by);
		if ($this->isColumnModified(IsoCapaPeer::FOLLOW_UP_DATE)) $criteria->add(IsoCapaPeer::FOLLOW_UP_DATE, $this->follow_up_date);
		if ($this->isColumnModified(IsoCapaPeer::IS_EFFECTIVE)) $criteria->add(IsoCapaPeer::IS_EFFECTIVE, $this->is_effective);
		if ($this->isColumnModified(IsoCapaPeer::EFFECTIVITY_COMMENT)) $criteria->add(IsoCapaPeer::EFFECTIVITY_COMMENT, $this->effectivity_comment);
		if ($this->isColumnModified(IsoCapaPeer::CLOSED_OUT_DATE)) $criteria->add(IsoCapaPeer::CLOSED_OUT_DATE, $this->closed_out_date);
		if ($this->isColumnModified(IsoCapaPeer::ADDITIONAL_SHEET)) $criteria->add(IsoCapaPeer::ADDITIONAL_SHEET, $this->additional_sheet);
		if ($this->isColumnModified(IsoCapaPeer::DATE_CREATED)) $criteria->add(IsoCapaPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(IsoCapaPeer::CREATED_BY)) $criteria->add(IsoCapaPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(IsoCapaPeer::DATE_MODIFIED)) $criteria->add(IsoCapaPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(IsoCapaPeer::MODIFIED_BY)) $criteria->add(IsoCapaPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(IsoCapaPeer::DATABASE_NAME);

		$criteria->add(IsoCapaPeer::ID, $this->id);

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

		$copyObj->setQanNo($this->qan_no);

		$copyObj->setFileName($this->file_name);

		$copyObj->setProposedAction($this->proposed_action);

		$copyObj->setInitiator($this->initiator);

		$copyObj->setCustomer($this->customer);

		$copyObj->setCustComment($this->cust_comment);

		$copyObj->setProblemDescription($this->problem_description);

		$copyObj->setInitiatedBy($this->initiated_by);

		$copyObj->setInitiatedDate($this->initiated_date);

		$copyObj->setKeyedInBy($this->keyed_in_by);

		$copyObj->setKeyedInDate($this->keyed_in_date);

		$copyObj->setAssignedTo($this->assigned_to);

		$copyObj->setAssignedDate($this->assigned_date);

		$copyObj->setEightDForm($this->eight_d_form);

		$copyObj->setRecommendedAction($this->recommended_action);

		$copyObj->setDataCollection($this->data_collection);

		$copyObj->setImplementedDate($this->implemented_date);

		$copyObj->setAffectedParts($this->affected_parts);

		$copyObj->setInitialCompletionDate($this->initial_completion_date);

		$copyObj->setPlanCompletionDate($this->plan_completion_date);

		$copyObj->setSubmittedBy($this->submitted_by);

		$copyObj->setRunPlanDate($this->run_plan_date);

		$copyObj->setApproveComment($this->approve_comment);

		$copyObj->setApprovedBy($this->approved_by);

		$copyObj->setActionPlanDate($this->action_plan_date);

		$copyObj->setFollowUpBy($this->follow_up_by);

		$copyObj->setFollowUpDate($this->follow_up_date);

		$copyObj->setIsEffective($this->is_effective);

		$copyObj->setEffectivityComment($this->effectivity_comment);

		$copyObj->setClosedOutDate($this->closed_out_date);

		$copyObj->setAdditionalSheet($this->additional_sheet);

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
			self::$peer = new IsoCapaPeer();
		}
		return self::$peer;
	}

} 
<?php


abstract class BaseEnggEvalNotice extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $een_no;


	
	protected $proposed_action;


	
	protected $initiator;


	
	protected $customer;


	
	protected $problem_description;


	
	protected $initiated_by;


	
	protected $initiated_date;


	
	protected $keyed_in_by;


	
	protected $keyed_in_date;


	
	protected $assigned_to;


	
	protected $assigned_date;


	
	protected $eight_d_form;


	
	protected $flow_description;


	
	protected $data_collection;


	
	protected $data_completion_date;


	
	protected $qty_for_run;


	
	protected $run_completion_date;


	
	protected $submitted_by;


	
	protected $run_plan_date;


	
	protected $approve_comment;


	
	protected $approved_by;


	
	protected $action_plan_date;


	
	protected $follow_up_by;


	
	protected $follow_up_date;


	
	protected $is_effective;


	
	protected $evidence;


	
	protected $disposition_of_material;


	
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

	
	public function getEenNo()
	{

		return $this->een_no;
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

	
	public function getFlowDescription()
	{

		return $this->flow_description;
	}

	
	public function getDataCollection()
	{

		return $this->data_collection;
	}

	
	public function getDataCompletionDate($format = 'Y-m-d')
	{

		if ($this->data_completion_date === null || $this->data_completion_date === '') {
			return null;
		} elseif (!is_int($this->data_completion_date)) {
						$ts = strtotime($this->data_completion_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [data_completion_date] as date/time value: " . var_export($this->data_completion_date, true));
			}
		} else {
			$ts = $this->data_completion_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getQtyForRun()
	{

		return $this->qty_for_run;
	}

	
	public function getRunCompletionDate($format = 'Y-m-d')
	{

		if ($this->run_completion_date === null || $this->run_completion_date === '') {
			return null;
		} elseif (!is_int($this->run_completion_date)) {
						$ts = strtotime($this->run_completion_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [run_completion_date] as date/time value: " . var_export($this->run_completion_date, true));
			}
		} else {
			$ts = $this->run_completion_date;
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

	
	public function getEvidence()
	{

		return $this->evidence;
	}

	
	public function getDispositionOfMaterial()
	{

		return $this->disposition_of_material;
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
			$this->modifiedColumns[] = EnggEvalNoticePeer::ID;
		}

	} 
	
	public function setEenNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->een_no !== $v) {
			$this->een_no = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::EEN_NO;
		}

	} 
	
	public function setProposedAction($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->proposed_action !== $v) {
			$this->proposed_action = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::PROPOSED_ACTION;
		}

	} 
	
	public function setInitiator($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initiator !== $v) {
			$this->initiator = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::INITIATOR;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v) {
			$this->customer = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::CUSTOMER;
		}

	} 
	
	public function setProblemDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->problem_description !== $v) {
			$this->problem_description = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::PROBLEM_DESCRIPTION;
		}

	} 
	
	public function setInitiatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initiated_by !== $v) {
			$this->initiated_by = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::INITIATED_BY;
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
			$this->modifiedColumns[] = EnggEvalNoticePeer::INITIATED_DATE;
		}

	} 
	
	public function setKeyedInBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->keyed_in_by !== $v) {
			$this->keyed_in_by = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::KEYED_IN_BY;
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
			$this->modifiedColumns[] = EnggEvalNoticePeer::KEYED_IN_DATE;
		}

	} 
	
	public function setAssignedTo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->assigned_to !== $v) {
			$this->assigned_to = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::ASSIGNED_TO;
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
			$this->modifiedColumns[] = EnggEvalNoticePeer::ASSIGNED_DATE;
		}

	} 
	
	public function setEightDForm($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->eight_d_form !== $v) {
			$this->eight_d_form = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::EIGHT_D_FORM;
		}

	} 
	
	public function setFlowDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->flow_description !== $v) {
			$this->flow_description = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::FLOW_DESCRIPTION;
		}

	} 
	
	public function setDataCollection($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->data_collection !== $v) {
			$this->data_collection = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::DATA_COLLECTION;
		}

	} 
	
	public function setDataCompletionDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [data_completion_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->data_completion_date !== $ts) {
			$this->data_completion_date = $ts;
			$this->modifiedColumns[] = EnggEvalNoticePeer::DATA_COMPLETION_DATE;
		}

	} 
	
	public function setQtyForRun($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->qty_for_run !== $v) {
			$this->qty_for_run = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::QTY_FOR_RUN;
		}

	} 
	
	public function setRunCompletionDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [run_completion_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->run_completion_date !== $ts) {
			$this->run_completion_date = $ts;
			$this->modifiedColumns[] = EnggEvalNoticePeer::RUN_COMPLETION_DATE;
		}

	} 
	
	public function setSubmittedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->submitted_by !== $v) {
			$this->submitted_by = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::SUBMITTED_BY;
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
			$this->modifiedColumns[] = EnggEvalNoticePeer::RUN_PLAN_DATE;
		}

	} 
	
	public function setApproveComment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->approve_comment !== $v) {
			$this->approve_comment = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::APPROVE_COMMENT;
		}

	} 
	
	public function setApprovedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->approved_by !== $v) {
			$this->approved_by = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::APPROVED_BY;
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
			$this->modifiedColumns[] = EnggEvalNoticePeer::ACTION_PLAN_DATE;
		}

	} 
	
	public function setFollowUpBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->follow_up_by !== $v) {
			$this->follow_up_by = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::FOLLOW_UP_BY;
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
			$this->modifiedColumns[] = EnggEvalNoticePeer::FOLLOW_UP_DATE;
		}

	} 
	
	public function setIsEffective($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->is_effective !== $v) {
			$this->is_effective = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::IS_EFFECTIVE;
		}

	} 
	
	public function setEvidence($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->evidence !== $v) {
			$this->evidence = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::EVIDENCE;
		}

	} 
	
	public function setDispositionOfMaterial($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->disposition_of_material !== $v) {
			$this->disposition_of_material = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::DISPOSITION_OF_MATERIAL;
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
			$this->modifiedColumns[] = EnggEvalNoticePeer::CLOSED_OUT_DATE;
		}

	} 
	
	public function setAdditionalSheet($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->additional_sheet !== $v) {
			$this->additional_sheet = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::ADDITIONAL_SHEET;
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
			$this->modifiedColumns[] = EnggEvalNoticePeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::CREATED_BY;
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
			$this->modifiedColumns[] = EnggEvalNoticePeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = EnggEvalNoticePeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->een_no = $rs->getInt($startcol + 1);

			$this->proposed_action = $rs->getString($startcol + 2);

			$this->initiator = $rs->getString($startcol + 3);

			$this->customer = $rs->getString($startcol + 4);

			$this->problem_description = $rs->getString($startcol + 5);

			$this->initiated_by = $rs->getString($startcol + 6);

			$this->initiated_date = $rs->getDate($startcol + 7, null);

			$this->keyed_in_by = $rs->getString($startcol + 8);

			$this->keyed_in_date = $rs->getDate($startcol + 9, null);

			$this->assigned_to = $rs->getString($startcol + 10);

			$this->assigned_date = $rs->getDate($startcol + 11, null);

			$this->eight_d_form = $rs->getString($startcol + 12);

			$this->flow_description = $rs->getString($startcol + 13);

			$this->data_collection = $rs->getString($startcol + 14);

			$this->data_completion_date = $rs->getDate($startcol + 15, null);

			$this->qty_for_run = $rs->getString($startcol + 16);

			$this->run_completion_date = $rs->getDate($startcol + 17, null);

			$this->submitted_by = $rs->getString($startcol + 18);

			$this->run_plan_date = $rs->getDate($startcol + 19, null);

			$this->approve_comment = $rs->getString($startcol + 20);

			$this->approved_by = $rs->getString($startcol + 21);

			$this->action_plan_date = $rs->getDate($startcol + 22, null);

			$this->follow_up_by = $rs->getString($startcol + 23);

			$this->follow_up_date = $rs->getDate($startcol + 24, null);

			$this->is_effective = $rs->getString($startcol + 25);

			$this->evidence = $rs->getString($startcol + 26);

			$this->disposition_of_material = $rs->getString($startcol + 27);

			$this->closed_out_date = $rs->getDate($startcol + 28, null);

			$this->additional_sheet = $rs->getString($startcol + 29);

			$this->date_created = $rs->getTimestamp($startcol + 30, null);

			$this->created_by = $rs->getString($startcol + 31);

			$this->date_modified = $rs->getTimestamp($startcol + 32, null);

			$this->modified_by = $rs->getString($startcol + 33);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 34; 
		} catch (Exception $e) {
			throw new PropelException("Error populating EnggEvalNotice object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(EnggEvalNoticePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			EnggEvalNoticePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(EnggEvalNoticePeer::DATABASE_NAME);
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
					$pk = EnggEvalNoticePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += EnggEvalNoticePeer::doUpdate($this, $con);
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


			if (($retval = EnggEvalNoticePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = EnggEvalNoticePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getEenNo();
				break;
			case 2:
				return $this->getProposedAction();
				break;
			case 3:
				return $this->getInitiator();
				break;
			case 4:
				return $this->getCustomer();
				break;
			case 5:
				return $this->getProblemDescription();
				break;
			case 6:
				return $this->getInitiatedBy();
				break;
			case 7:
				return $this->getInitiatedDate();
				break;
			case 8:
				return $this->getKeyedInBy();
				break;
			case 9:
				return $this->getKeyedInDate();
				break;
			case 10:
				return $this->getAssignedTo();
				break;
			case 11:
				return $this->getAssignedDate();
				break;
			case 12:
				return $this->getEightDForm();
				break;
			case 13:
				return $this->getFlowDescription();
				break;
			case 14:
				return $this->getDataCollection();
				break;
			case 15:
				return $this->getDataCompletionDate();
				break;
			case 16:
				return $this->getQtyForRun();
				break;
			case 17:
				return $this->getRunCompletionDate();
				break;
			case 18:
				return $this->getSubmittedBy();
				break;
			case 19:
				return $this->getRunPlanDate();
				break;
			case 20:
				return $this->getApproveComment();
				break;
			case 21:
				return $this->getApprovedBy();
				break;
			case 22:
				return $this->getActionPlanDate();
				break;
			case 23:
				return $this->getFollowUpBy();
				break;
			case 24:
				return $this->getFollowUpDate();
				break;
			case 25:
				return $this->getIsEffective();
				break;
			case 26:
				return $this->getEvidence();
				break;
			case 27:
				return $this->getDispositionOfMaterial();
				break;
			case 28:
				return $this->getClosedOutDate();
				break;
			case 29:
				return $this->getAdditionalSheet();
				break;
			case 30:
				return $this->getDateCreated();
				break;
			case 31:
				return $this->getCreatedBy();
				break;
			case 32:
				return $this->getDateModified();
				break;
			case 33:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = EnggEvalNoticePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEenNo(),
			$keys[2] => $this->getProposedAction(),
			$keys[3] => $this->getInitiator(),
			$keys[4] => $this->getCustomer(),
			$keys[5] => $this->getProblemDescription(),
			$keys[6] => $this->getInitiatedBy(),
			$keys[7] => $this->getInitiatedDate(),
			$keys[8] => $this->getKeyedInBy(),
			$keys[9] => $this->getKeyedInDate(),
			$keys[10] => $this->getAssignedTo(),
			$keys[11] => $this->getAssignedDate(),
			$keys[12] => $this->getEightDForm(),
			$keys[13] => $this->getFlowDescription(),
			$keys[14] => $this->getDataCollection(),
			$keys[15] => $this->getDataCompletionDate(),
			$keys[16] => $this->getQtyForRun(),
			$keys[17] => $this->getRunCompletionDate(),
			$keys[18] => $this->getSubmittedBy(),
			$keys[19] => $this->getRunPlanDate(),
			$keys[20] => $this->getApproveComment(),
			$keys[21] => $this->getApprovedBy(),
			$keys[22] => $this->getActionPlanDate(),
			$keys[23] => $this->getFollowUpBy(),
			$keys[24] => $this->getFollowUpDate(),
			$keys[25] => $this->getIsEffective(),
			$keys[26] => $this->getEvidence(),
			$keys[27] => $this->getDispositionOfMaterial(),
			$keys[28] => $this->getClosedOutDate(),
			$keys[29] => $this->getAdditionalSheet(),
			$keys[30] => $this->getDateCreated(),
			$keys[31] => $this->getCreatedBy(),
			$keys[32] => $this->getDateModified(),
			$keys[33] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = EnggEvalNoticePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setEenNo($value);
				break;
			case 2:
				$this->setProposedAction($value);
				break;
			case 3:
				$this->setInitiator($value);
				break;
			case 4:
				$this->setCustomer($value);
				break;
			case 5:
				$this->setProblemDescription($value);
				break;
			case 6:
				$this->setInitiatedBy($value);
				break;
			case 7:
				$this->setInitiatedDate($value);
				break;
			case 8:
				$this->setKeyedInBy($value);
				break;
			case 9:
				$this->setKeyedInDate($value);
				break;
			case 10:
				$this->setAssignedTo($value);
				break;
			case 11:
				$this->setAssignedDate($value);
				break;
			case 12:
				$this->setEightDForm($value);
				break;
			case 13:
				$this->setFlowDescription($value);
				break;
			case 14:
				$this->setDataCollection($value);
				break;
			case 15:
				$this->setDataCompletionDate($value);
				break;
			case 16:
				$this->setQtyForRun($value);
				break;
			case 17:
				$this->setRunCompletionDate($value);
				break;
			case 18:
				$this->setSubmittedBy($value);
				break;
			case 19:
				$this->setRunPlanDate($value);
				break;
			case 20:
				$this->setApproveComment($value);
				break;
			case 21:
				$this->setApprovedBy($value);
				break;
			case 22:
				$this->setActionPlanDate($value);
				break;
			case 23:
				$this->setFollowUpBy($value);
				break;
			case 24:
				$this->setFollowUpDate($value);
				break;
			case 25:
				$this->setIsEffective($value);
				break;
			case 26:
				$this->setEvidence($value);
				break;
			case 27:
				$this->setDispositionOfMaterial($value);
				break;
			case 28:
				$this->setClosedOutDate($value);
				break;
			case 29:
				$this->setAdditionalSheet($value);
				break;
			case 30:
				$this->setDateCreated($value);
				break;
			case 31:
				$this->setCreatedBy($value);
				break;
			case 32:
				$this->setDateModified($value);
				break;
			case 33:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = EnggEvalNoticePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEenNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setProposedAction($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setInitiator($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCustomer($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setProblemDescription($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setInitiatedBy($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setInitiatedDate($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setKeyedInBy($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setKeyedInDate($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAssignedTo($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAssignedDate($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setEightDForm($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setFlowDescription($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDataCollection($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setDataCompletionDate($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setQtyForRun($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setRunCompletionDate($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setSubmittedBy($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setRunPlanDate($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setApproveComment($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setApprovedBy($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setActionPlanDate($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setFollowUpBy($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setFollowUpDate($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setIsEffective($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setEvidence($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setDispositionOfMaterial($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setClosedOutDate($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setAdditionalSheet($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setDateCreated($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setCreatedBy($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setDateModified($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setModifiedBy($arr[$keys[33]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(EnggEvalNoticePeer::DATABASE_NAME);

		if ($this->isColumnModified(EnggEvalNoticePeer::ID)) $criteria->add(EnggEvalNoticePeer::ID, $this->id);
		if ($this->isColumnModified(EnggEvalNoticePeer::EEN_NO)) $criteria->add(EnggEvalNoticePeer::EEN_NO, $this->een_no);
		if ($this->isColumnModified(EnggEvalNoticePeer::PROPOSED_ACTION)) $criteria->add(EnggEvalNoticePeer::PROPOSED_ACTION, $this->proposed_action);
		if ($this->isColumnModified(EnggEvalNoticePeer::INITIATOR)) $criteria->add(EnggEvalNoticePeer::INITIATOR, $this->initiator);
		if ($this->isColumnModified(EnggEvalNoticePeer::CUSTOMER)) $criteria->add(EnggEvalNoticePeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(EnggEvalNoticePeer::PROBLEM_DESCRIPTION)) $criteria->add(EnggEvalNoticePeer::PROBLEM_DESCRIPTION, $this->problem_description);
		if ($this->isColumnModified(EnggEvalNoticePeer::INITIATED_BY)) $criteria->add(EnggEvalNoticePeer::INITIATED_BY, $this->initiated_by);
		if ($this->isColumnModified(EnggEvalNoticePeer::INITIATED_DATE)) $criteria->add(EnggEvalNoticePeer::INITIATED_DATE, $this->initiated_date);
		if ($this->isColumnModified(EnggEvalNoticePeer::KEYED_IN_BY)) $criteria->add(EnggEvalNoticePeer::KEYED_IN_BY, $this->keyed_in_by);
		if ($this->isColumnModified(EnggEvalNoticePeer::KEYED_IN_DATE)) $criteria->add(EnggEvalNoticePeer::KEYED_IN_DATE, $this->keyed_in_date);
		if ($this->isColumnModified(EnggEvalNoticePeer::ASSIGNED_TO)) $criteria->add(EnggEvalNoticePeer::ASSIGNED_TO, $this->assigned_to);
		if ($this->isColumnModified(EnggEvalNoticePeer::ASSIGNED_DATE)) $criteria->add(EnggEvalNoticePeer::ASSIGNED_DATE, $this->assigned_date);
		if ($this->isColumnModified(EnggEvalNoticePeer::EIGHT_D_FORM)) $criteria->add(EnggEvalNoticePeer::EIGHT_D_FORM, $this->eight_d_form);
		if ($this->isColumnModified(EnggEvalNoticePeer::FLOW_DESCRIPTION)) $criteria->add(EnggEvalNoticePeer::FLOW_DESCRIPTION, $this->flow_description);
		if ($this->isColumnModified(EnggEvalNoticePeer::DATA_COLLECTION)) $criteria->add(EnggEvalNoticePeer::DATA_COLLECTION, $this->data_collection);
		if ($this->isColumnModified(EnggEvalNoticePeer::DATA_COMPLETION_DATE)) $criteria->add(EnggEvalNoticePeer::DATA_COMPLETION_DATE, $this->data_completion_date);
		if ($this->isColumnModified(EnggEvalNoticePeer::QTY_FOR_RUN)) $criteria->add(EnggEvalNoticePeer::QTY_FOR_RUN, $this->qty_for_run);
		if ($this->isColumnModified(EnggEvalNoticePeer::RUN_COMPLETION_DATE)) $criteria->add(EnggEvalNoticePeer::RUN_COMPLETION_DATE, $this->run_completion_date);
		if ($this->isColumnModified(EnggEvalNoticePeer::SUBMITTED_BY)) $criteria->add(EnggEvalNoticePeer::SUBMITTED_BY, $this->submitted_by);
		if ($this->isColumnModified(EnggEvalNoticePeer::RUN_PLAN_DATE)) $criteria->add(EnggEvalNoticePeer::RUN_PLAN_DATE, $this->run_plan_date);
		if ($this->isColumnModified(EnggEvalNoticePeer::APPROVE_COMMENT)) $criteria->add(EnggEvalNoticePeer::APPROVE_COMMENT, $this->approve_comment);
		if ($this->isColumnModified(EnggEvalNoticePeer::APPROVED_BY)) $criteria->add(EnggEvalNoticePeer::APPROVED_BY, $this->approved_by);
		if ($this->isColumnModified(EnggEvalNoticePeer::ACTION_PLAN_DATE)) $criteria->add(EnggEvalNoticePeer::ACTION_PLAN_DATE, $this->action_plan_date);
		if ($this->isColumnModified(EnggEvalNoticePeer::FOLLOW_UP_BY)) $criteria->add(EnggEvalNoticePeer::FOLLOW_UP_BY, $this->follow_up_by);
		if ($this->isColumnModified(EnggEvalNoticePeer::FOLLOW_UP_DATE)) $criteria->add(EnggEvalNoticePeer::FOLLOW_UP_DATE, $this->follow_up_date);
		if ($this->isColumnModified(EnggEvalNoticePeer::IS_EFFECTIVE)) $criteria->add(EnggEvalNoticePeer::IS_EFFECTIVE, $this->is_effective);
		if ($this->isColumnModified(EnggEvalNoticePeer::EVIDENCE)) $criteria->add(EnggEvalNoticePeer::EVIDENCE, $this->evidence);
		if ($this->isColumnModified(EnggEvalNoticePeer::DISPOSITION_OF_MATERIAL)) $criteria->add(EnggEvalNoticePeer::DISPOSITION_OF_MATERIAL, $this->disposition_of_material);
		if ($this->isColumnModified(EnggEvalNoticePeer::CLOSED_OUT_DATE)) $criteria->add(EnggEvalNoticePeer::CLOSED_OUT_DATE, $this->closed_out_date);
		if ($this->isColumnModified(EnggEvalNoticePeer::ADDITIONAL_SHEET)) $criteria->add(EnggEvalNoticePeer::ADDITIONAL_SHEET, $this->additional_sheet);
		if ($this->isColumnModified(EnggEvalNoticePeer::DATE_CREATED)) $criteria->add(EnggEvalNoticePeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(EnggEvalNoticePeer::CREATED_BY)) $criteria->add(EnggEvalNoticePeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(EnggEvalNoticePeer::DATE_MODIFIED)) $criteria->add(EnggEvalNoticePeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(EnggEvalNoticePeer::MODIFIED_BY)) $criteria->add(EnggEvalNoticePeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(EnggEvalNoticePeer::DATABASE_NAME);

		$criteria->add(EnggEvalNoticePeer::ID, $this->id);

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

		$copyObj->setEenNo($this->een_no);

		$copyObj->setProposedAction($this->proposed_action);

		$copyObj->setInitiator($this->initiator);

		$copyObj->setCustomer($this->customer);

		$copyObj->setProblemDescription($this->problem_description);

		$copyObj->setInitiatedBy($this->initiated_by);

		$copyObj->setInitiatedDate($this->initiated_date);

		$copyObj->setKeyedInBy($this->keyed_in_by);

		$copyObj->setKeyedInDate($this->keyed_in_date);

		$copyObj->setAssignedTo($this->assigned_to);

		$copyObj->setAssignedDate($this->assigned_date);

		$copyObj->setEightDForm($this->eight_d_form);

		$copyObj->setFlowDescription($this->flow_description);

		$copyObj->setDataCollection($this->data_collection);

		$copyObj->setDataCompletionDate($this->data_completion_date);

		$copyObj->setQtyForRun($this->qty_for_run);

		$copyObj->setRunCompletionDate($this->run_completion_date);

		$copyObj->setSubmittedBy($this->submitted_by);

		$copyObj->setRunPlanDate($this->run_plan_date);

		$copyObj->setApproveComment($this->approve_comment);

		$copyObj->setApprovedBy($this->approved_by);

		$copyObj->setActionPlanDate($this->action_plan_date);

		$copyObj->setFollowUpBy($this->follow_up_by);

		$copyObj->setFollowUpDate($this->follow_up_date);

		$copyObj->setIsEffective($this->is_effective);

		$copyObj->setEvidence($this->evidence);

		$copyObj->setDispositionOfMaterial($this->disposition_of_material);

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
			self::$peer = new EnggEvalNoticePeer();
		}
		return self::$peer;
	}

} 
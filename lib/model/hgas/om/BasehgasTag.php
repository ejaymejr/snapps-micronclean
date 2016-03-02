<?php


abstract class BasehgasTag extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id = 0;


	
	protected $user_fullname = 'null';


	
	protected $user_gid = 'null';


	
	protected $jumpsuit_size = 'null';


	
	protected $booties_size = 'null';


	
	protected $safety_boot_size = 'null';


	
	protected $hood_size = 'null';


	
	protected $requested_by = 'null';


	
	protected $date_requested;


	
	protected $completed_by = 'null';


	
	protected $date_completed;


	
	protected $department_id = 0;


	
	protected $department_name = 'null';


	
	protected $team_id = 0;


	
	protected $team_name = 'null';


	
	protected $cell_id;


	
	protected $cell_name;


	
	protected $rack_id;


	
	protected $rack_name;


	
	protected $hanger_id;


	
	protected $hanger_name;


	
	protected $slot_id;


	
	protected $slot_name;


	
	protected $boot_condition;


	
	protected $safety_boot_condition;


	
	protected $js_condition;


	
	protected $hood_condition;


	
	protected $boot_stat;


	
	protected $sboot_stat;


	
	protected $js_stat;


	
	protected $hood_stat;


	
	protected $date_pen_boot;


	
	protected $date_pen_sboot;


	
	protected $date_pen_js;


	
	protected $date_pen_hood;


	
	protected $date_inp_boot;


	
	protected $date_inp_sboot;


	
	protected $date_inp_js;


	
	protected $date_inp_hood;


	
	protected $date_na_boot;


	
	protected $date_na_sboot;


	
	protected $date_na_js;


	
	protected $date_na_hood;


	
	protected $date_com_boot;


	
	protected $date_com_sboot;


	
	protected $date_com_js;


	
	protected $date_com_hood;

	
	protected $collhgasHangerSlots;

	
	protected $lasthgasHangerSlotCriteria = null;

	
	protected $collhgasTagRequestsRelatedByBeforeTagId;

	
	protected $lasthgasTagRequestRelatedByBeforeTagIdCriteria = null;

	
	protected $collhgasTagRequestsRelatedByAfterTagId;

	
	protected $lasthgasTagRequestRelatedByAfterTagIdCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getUserId()
	{

		return $this->user_id;
	}

	
	public function getUserFullname()
	{

		return $this->user_fullname;
	}

	
	public function getUserGid()
	{

		return $this->user_gid;
	}

	
	public function getJumpsuitSize()
	{

		return $this->jumpsuit_size;
	}

	
	public function getBootiesSize()
	{

		return $this->booties_size;
	}

	
	public function getSafetyBootSize()
	{

		return $this->safety_boot_size;
	}

	
	public function getHoodSize()
	{

		return $this->hood_size;
	}

	
	public function getRequestedBy()
	{

		return $this->requested_by;
	}

	
	public function getDateRequested($format = 'Y-m-d H:i:s')
	{

		if ($this->date_requested === null || $this->date_requested === '') {
			return null;
		} elseif (!is_int($this->date_requested)) {
						$ts = strtotime($this->date_requested);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_requested] as date/time value: " . var_export($this->date_requested, true));
			}
		} else {
			$ts = $this->date_requested;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCompletedBy()
	{

		return $this->completed_by;
	}

	
	public function getDateCompleted($format = 'Y-m-d H:i:s')
	{

		if ($this->date_completed === null || $this->date_completed === '') {
			return null;
		} elseif (!is_int($this->date_completed)) {
						$ts = strtotime($this->date_completed);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_completed] as date/time value: " . var_export($this->date_completed, true));
			}
		} else {
			$ts = $this->date_completed;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDepartmentId()
	{

		return $this->department_id;
	}

	
	public function getDepartmentName()
	{

		return $this->department_name;
	}

	
	public function getTeamId()
	{

		return $this->team_id;
	}

	
	public function getTeamName()
	{

		return $this->team_name;
	}

	
	public function getCellId()
	{

		return $this->cell_id;
	}

	
	public function getCellName()
	{

		return $this->cell_name;
	}

	
	public function getRackId()
	{

		return $this->rack_id;
	}

	
	public function getRackName()
	{

		return $this->rack_name;
	}

	
	public function getHangerId()
	{

		return $this->hanger_id;
	}

	
	public function getHangerName()
	{

		return $this->hanger_name;
	}

	
	public function getSlotId()
	{

		return $this->slot_id;
	}

	
	public function getSlotName()
	{

		return $this->slot_name;
	}

	
	public function getBootCondition()
	{

		return $this->boot_condition;
	}

	
	public function getSafetyBootCondition()
	{

		return $this->safety_boot_condition;
	}

	
	public function getJsCondition()
	{

		return $this->js_condition;
	}

	
	public function getHoodCondition()
	{

		return $this->hood_condition;
	}

	
	public function getBootStat()
	{

		return $this->boot_stat;
	}

	
	public function getSbootStat()
	{

		return $this->sboot_stat;
	}

	
	public function getJsStat()
	{

		return $this->js_stat;
	}

	
	public function getHoodStat()
	{

		return $this->hood_stat;
	}

	
	public function getDatePenBoot($format = 'Y-m-d H:i:s')
	{

		if ($this->date_pen_boot === null || $this->date_pen_boot === '') {
			return null;
		} elseif (!is_int($this->date_pen_boot)) {
						$ts = strtotime($this->date_pen_boot);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_pen_boot] as date/time value: " . var_export($this->date_pen_boot, true));
			}
		} else {
			$ts = $this->date_pen_boot;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDatePenSboot($format = 'Y-m-d H:i:s')
	{

		if ($this->date_pen_sboot === null || $this->date_pen_sboot === '') {
			return null;
		} elseif (!is_int($this->date_pen_sboot)) {
						$ts = strtotime($this->date_pen_sboot);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_pen_sboot] as date/time value: " . var_export($this->date_pen_sboot, true));
			}
		} else {
			$ts = $this->date_pen_sboot;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDatePenJs($format = 'Y-m-d H:i:s')
	{

		if ($this->date_pen_js === null || $this->date_pen_js === '') {
			return null;
		} elseif (!is_int($this->date_pen_js)) {
						$ts = strtotime($this->date_pen_js);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_pen_js] as date/time value: " . var_export($this->date_pen_js, true));
			}
		} else {
			$ts = $this->date_pen_js;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDatePenHood($format = 'Y-m-d H:i:s')
	{

		if ($this->date_pen_hood === null || $this->date_pen_hood === '') {
			return null;
		} elseif (!is_int($this->date_pen_hood)) {
						$ts = strtotime($this->date_pen_hood);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_pen_hood] as date/time value: " . var_export($this->date_pen_hood, true));
			}
		} else {
			$ts = $this->date_pen_hood;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateInpBoot($format = 'Y-m-d H:i:s')
	{

		if ($this->date_inp_boot === null || $this->date_inp_boot === '') {
			return null;
		} elseif (!is_int($this->date_inp_boot)) {
						$ts = strtotime($this->date_inp_boot);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_inp_boot] as date/time value: " . var_export($this->date_inp_boot, true));
			}
		} else {
			$ts = $this->date_inp_boot;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateInpSboot($format = 'Y-m-d H:i:s')
	{

		if ($this->date_inp_sboot === null || $this->date_inp_sboot === '') {
			return null;
		} elseif (!is_int($this->date_inp_sboot)) {
						$ts = strtotime($this->date_inp_sboot);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_inp_sboot] as date/time value: " . var_export($this->date_inp_sboot, true));
			}
		} else {
			$ts = $this->date_inp_sboot;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateInpJs($format = 'Y-m-d H:i:s')
	{

		if ($this->date_inp_js === null || $this->date_inp_js === '') {
			return null;
		} elseif (!is_int($this->date_inp_js)) {
						$ts = strtotime($this->date_inp_js);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_inp_js] as date/time value: " . var_export($this->date_inp_js, true));
			}
		} else {
			$ts = $this->date_inp_js;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateInpHood($format = 'Y-m-d H:i:s')
	{

		if ($this->date_inp_hood === null || $this->date_inp_hood === '') {
			return null;
		} elseif (!is_int($this->date_inp_hood)) {
						$ts = strtotime($this->date_inp_hood);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_inp_hood] as date/time value: " . var_export($this->date_inp_hood, true));
			}
		} else {
			$ts = $this->date_inp_hood;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateNaBoot($format = 'Y-m-d H:i:s')
	{

		if ($this->date_na_boot === null || $this->date_na_boot === '') {
			return null;
		} elseif (!is_int($this->date_na_boot)) {
						$ts = strtotime($this->date_na_boot);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_na_boot] as date/time value: " . var_export($this->date_na_boot, true));
			}
		} else {
			$ts = $this->date_na_boot;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateNaSboot($format = 'Y-m-d H:i:s')
	{

		if ($this->date_na_sboot === null || $this->date_na_sboot === '') {
			return null;
		} elseif (!is_int($this->date_na_sboot)) {
						$ts = strtotime($this->date_na_sboot);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_na_sboot] as date/time value: " . var_export($this->date_na_sboot, true));
			}
		} else {
			$ts = $this->date_na_sboot;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateNaJs($format = 'Y-m-d H:i:s')
	{

		if ($this->date_na_js === null || $this->date_na_js === '') {
			return null;
		} elseif (!is_int($this->date_na_js)) {
						$ts = strtotime($this->date_na_js);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_na_js] as date/time value: " . var_export($this->date_na_js, true));
			}
		} else {
			$ts = $this->date_na_js;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateNaHood($format = 'Y-m-d H:i:s')
	{

		if ($this->date_na_hood === null || $this->date_na_hood === '') {
			return null;
		} elseif (!is_int($this->date_na_hood)) {
						$ts = strtotime($this->date_na_hood);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_na_hood] as date/time value: " . var_export($this->date_na_hood, true));
			}
		} else {
			$ts = $this->date_na_hood;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateComBoot($format = 'Y-m-d H:i:s')
	{

		if ($this->date_com_boot === null || $this->date_com_boot === '') {
			return null;
		} elseif (!is_int($this->date_com_boot)) {
						$ts = strtotime($this->date_com_boot);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_com_boot] as date/time value: " . var_export($this->date_com_boot, true));
			}
		} else {
			$ts = $this->date_com_boot;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateComSboot($format = 'Y-m-d H:i:s')
	{

		if ($this->date_com_sboot === null || $this->date_com_sboot === '') {
			return null;
		} elseif (!is_int($this->date_com_sboot)) {
						$ts = strtotime($this->date_com_sboot);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_com_sboot] as date/time value: " . var_export($this->date_com_sboot, true));
			}
		} else {
			$ts = $this->date_com_sboot;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateComJs($format = 'Y-m-d H:i:s')
	{

		if ($this->date_com_js === null || $this->date_com_js === '') {
			return null;
		} elseif (!is_int($this->date_com_js)) {
						$ts = strtotime($this->date_com_js);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_com_js] as date/time value: " . var_export($this->date_com_js, true));
			}
		} else {
			$ts = $this->date_com_js;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateComHood($format = 'Y-m-d H:i:s')
	{

		if ($this->date_com_hood === null || $this->date_com_hood === '') {
			return null;
		} elseif (!is_int($this->date_com_hood)) {
						$ts = strtotime($this->date_com_hood);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_com_hood] as date/time value: " . var_export($this->date_com_hood, true));
			}
		} else {
			$ts = $this->date_com_hood;
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
			$this->modifiedColumns[] = hgasTagPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v || $v === 0) {
			$this->user_id = $v;
			$this->modifiedColumns[] = hgasTagPeer::USER_ID;
		}

	} 
	
	public function setUserFullname($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->user_fullname !== $v || $v === 'null') {
			$this->user_fullname = $v;
			$this->modifiedColumns[] = hgasTagPeer::USER_FULLNAME;
		}

	} 
	
	public function setUserGid($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->user_gid !== $v || $v === 'null') {
			$this->user_gid = $v;
			$this->modifiedColumns[] = hgasTagPeer::USER_GID;
		}

	} 
	
	public function setJumpsuitSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jumpsuit_size !== $v || $v === 'null') {
			$this->jumpsuit_size = $v;
			$this->modifiedColumns[] = hgasTagPeer::JUMPSUIT_SIZE;
		}

	} 
	
	public function setBootiesSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->booties_size !== $v || $v === 'null') {
			$this->booties_size = $v;
			$this->modifiedColumns[] = hgasTagPeer::BOOTIES_SIZE;
		}

	} 
	
	public function setSafetyBootSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->safety_boot_size !== $v || $v === 'null') {
			$this->safety_boot_size = $v;
			$this->modifiedColumns[] = hgasTagPeer::SAFETY_BOOT_SIZE;
		}

	} 
	
	public function setHoodSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hood_size !== $v || $v === 'null') {
			$this->hood_size = $v;
			$this->modifiedColumns[] = hgasTagPeer::HOOD_SIZE;
		}

	} 
	
	public function setRequestedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->requested_by !== $v || $v === 'null') {
			$this->requested_by = $v;
			$this->modifiedColumns[] = hgasTagPeer::REQUESTED_BY;
		}

	} 
	
	public function setDateRequested($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_requested] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_requested !== $ts) {
			$this->date_requested = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_REQUESTED;
		}

	} 
	
	public function setCompletedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->completed_by !== $v || $v === 'null') {
			$this->completed_by = $v;
			$this->modifiedColumns[] = hgasTagPeer::COMPLETED_BY;
		}

	} 
	
	public function setDateCompleted($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_completed] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_completed !== $ts) {
			$this->date_completed = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_COMPLETED;
		}

	} 
	
	public function setDepartmentId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->department_id !== $v || $v === 0) {
			$this->department_id = $v;
			$this->modifiedColumns[] = hgasTagPeer::DEPARTMENT_ID;
		}

	} 
	
	public function setDepartmentName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department_name !== $v || $v === 'null') {
			$this->department_name = $v;
			$this->modifiedColumns[] = hgasTagPeer::DEPARTMENT_NAME;
		}

	} 
	
	public function setTeamId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->team_id !== $v || $v === 0) {
			$this->team_id = $v;
			$this->modifiedColumns[] = hgasTagPeer::TEAM_ID;
		}

	} 
	
	public function setTeamName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->team_name !== $v || $v === 'null') {
			$this->team_name = $v;
			$this->modifiedColumns[] = hgasTagPeer::TEAM_NAME;
		}

	} 
	
	public function setCellId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cell_id !== $v) {
			$this->cell_id = $v;
			$this->modifiedColumns[] = hgasTagPeer::CELL_ID;
		}

	} 
	
	public function setCellName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cell_name !== $v) {
			$this->cell_name = $v;
			$this->modifiedColumns[] = hgasTagPeer::CELL_NAME;
		}

	} 
	
	public function setRackId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->rack_id !== $v) {
			$this->rack_id = $v;
			$this->modifiedColumns[] = hgasTagPeer::RACK_ID;
		}

	} 
	
	public function setRackName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rack_name !== $v) {
			$this->rack_name = $v;
			$this->modifiedColumns[] = hgasTagPeer::RACK_NAME;
		}

	} 
	
	public function setHangerId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->hanger_id !== $v) {
			$this->hanger_id = $v;
			$this->modifiedColumns[] = hgasTagPeer::HANGER_ID;
		}

	} 
	
	public function setHangerName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hanger_name !== $v) {
			$this->hanger_name = $v;
			$this->modifiedColumns[] = hgasTagPeer::HANGER_NAME;
		}

	} 
	
	public function setSlotId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->slot_id !== $v) {
			$this->slot_id = $v;
			$this->modifiedColumns[] = hgasTagPeer::SLOT_ID;
		}

	} 
	
	public function setSlotName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->slot_name !== $v) {
			$this->slot_name = $v;
			$this->modifiedColumns[] = hgasTagPeer::SLOT_NAME;
		}

	} 
	
	public function setBootCondition($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->boot_condition !== $v) {
			$this->boot_condition = $v;
			$this->modifiedColumns[] = hgasTagPeer::BOOT_CONDITION;
		}

	} 
	
	public function setSafetyBootCondition($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->safety_boot_condition !== $v) {
			$this->safety_boot_condition = $v;
			$this->modifiedColumns[] = hgasTagPeer::SAFETY_BOOT_CONDITION;
		}

	} 
	
	public function setJsCondition($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->js_condition !== $v) {
			$this->js_condition = $v;
			$this->modifiedColumns[] = hgasTagPeer::JS_CONDITION;
		}

	} 
	
	public function setHoodCondition($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hood_condition !== $v) {
			$this->hood_condition = $v;
			$this->modifiedColumns[] = hgasTagPeer::HOOD_CONDITION;
		}

	} 
	
	public function setBootStat($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->boot_stat !== $v) {
			$this->boot_stat = $v;
			$this->modifiedColumns[] = hgasTagPeer::BOOT_STAT;
		}

	} 
	
	public function setSbootStat($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sboot_stat !== $v) {
			$this->sboot_stat = $v;
			$this->modifiedColumns[] = hgasTagPeer::SBOOT_STAT;
		}

	} 
	
	public function setJsStat($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->js_stat !== $v) {
			$this->js_stat = $v;
			$this->modifiedColumns[] = hgasTagPeer::JS_STAT;
		}

	} 
	
	public function setHoodStat($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hood_stat !== $v) {
			$this->hood_stat = $v;
			$this->modifiedColumns[] = hgasTagPeer::HOOD_STAT;
		}

	} 
	
	public function setDatePenBoot($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_pen_boot] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_pen_boot !== $ts) {
			$this->date_pen_boot = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_PEN_BOOT;
		}

	} 
	
	public function setDatePenSboot($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_pen_sboot] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_pen_sboot !== $ts) {
			$this->date_pen_sboot = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_PEN_SBOOT;
		}

	} 
	
	public function setDatePenJs($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_pen_js] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_pen_js !== $ts) {
			$this->date_pen_js = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_PEN_JS;
		}

	} 
	
	public function setDatePenHood($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_pen_hood] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_pen_hood !== $ts) {
			$this->date_pen_hood = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_PEN_HOOD;
		}

	} 
	
	public function setDateInpBoot($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_inp_boot] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_inp_boot !== $ts) {
			$this->date_inp_boot = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_INP_BOOT;
		}

	} 
	
	public function setDateInpSboot($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_inp_sboot] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_inp_sboot !== $ts) {
			$this->date_inp_sboot = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_INP_SBOOT;
		}

	} 
	
	public function setDateInpJs($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_inp_js] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_inp_js !== $ts) {
			$this->date_inp_js = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_INP_JS;
		}

	} 
	
	public function setDateInpHood($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_inp_hood] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_inp_hood !== $ts) {
			$this->date_inp_hood = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_INP_HOOD;
		}

	} 
	
	public function setDateNaBoot($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_na_boot] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_na_boot !== $ts) {
			$this->date_na_boot = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_NA_BOOT;
		}

	} 
	
	public function setDateNaSboot($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_na_sboot] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_na_sboot !== $ts) {
			$this->date_na_sboot = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_NA_SBOOT;
		}

	} 
	
	public function setDateNaJs($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_na_js] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_na_js !== $ts) {
			$this->date_na_js = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_NA_JS;
		}

	} 
	
	public function setDateNaHood($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_na_hood] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_na_hood !== $ts) {
			$this->date_na_hood = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_NA_HOOD;
		}

	} 
	
	public function setDateComBoot($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_com_boot] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_com_boot !== $ts) {
			$this->date_com_boot = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_COM_BOOT;
		}

	} 
	
	public function setDateComSboot($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_com_sboot] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_com_sboot !== $ts) {
			$this->date_com_sboot = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_COM_SBOOT;
		}

	} 
	
	public function setDateComJs($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_com_js] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_com_js !== $ts) {
			$this->date_com_js = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_COM_JS;
		}

	} 
	
	public function setDateComHood($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_com_hood] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_com_hood !== $ts) {
			$this->date_com_hood = $ts;
			$this->modifiedColumns[] = hgasTagPeer::DATE_COM_HOOD;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->user_fullname = $rs->getString($startcol + 2);

			$this->user_gid = $rs->getString($startcol + 3);

			$this->jumpsuit_size = $rs->getString($startcol + 4);

			$this->booties_size = $rs->getString($startcol + 5);

			$this->safety_boot_size = $rs->getString($startcol + 6);

			$this->hood_size = $rs->getString($startcol + 7);

			$this->requested_by = $rs->getString($startcol + 8);

			$this->date_requested = $rs->getTimestamp($startcol + 9, null);

			$this->completed_by = $rs->getString($startcol + 10);

			$this->date_completed = $rs->getTimestamp($startcol + 11, null);

			$this->department_id = $rs->getInt($startcol + 12);

			$this->department_name = $rs->getString($startcol + 13);

			$this->team_id = $rs->getInt($startcol + 14);

			$this->team_name = $rs->getString($startcol + 15);

			$this->cell_id = $rs->getInt($startcol + 16);

			$this->cell_name = $rs->getString($startcol + 17);

			$this->rack_id = $rs->getInt($startcol + 18);

			$this->rack_name = $rs->getString($startcol + 19);

			$this->hanger_id = $rs->getInt($startcol + 20);

			$this->hanger_name = $rs->getString($startcol + 21);

			$this->slot_id = $rs->getInt($startcol + 22);

			$this->slot_name = $rs->getString($startcol + 23);

			$this->boot_condition = $rs->getString($startcol + 24);

			$this->safety_boot_condition = $rs->getString($startcol + 25);

			$this->js_condition = $rs->getString($startcol + 26);

			$this->hood_condition = $rs->getString($startcol + 27);

			$this->boot_stat = $rs->getString($startcol + 28);

			$this->sboot_stat = $rs->getString($startcol + 29);

			$this->js_stat = $rs->getString($startcol + 30);

			$this->hood_stat = $rs->getString($startcol + 31);

			$this->date_pen_boot = $rs->getTimestamp($startcol + 32, null);

			$this->date_pen_sboot = $rs->getTimestamp($startcol + 33, null);

			$this->date_pen_js = $rs->getTimestamp($startcol + 34, null);

			$this->date_pen_hood = $rs->getTimestamp($startcol + 35, null);

			$this->date_inp_boot = $rs->getTimestamp($startcol + 36, null);

			$this->date_inp_sboot = $rs->getTimestamp($startcol + 37, null);

			$this->date_inp_js = $rs->getTimestamp($startcol + 38, null);

			$this->date_inp_hood = $rs->getTimestamp($startcol + 39, null);

			$this->date_na_boot = $rs->getTimestamp($startcol + 40, null);

			$this->date_na_sboot = $rs->getTimestamp($startcol + 41, null);

			$this->date_na_js = $rs->getTimestamp($startcol + 42, null);

			$this->date_na_hood = $rs->getTimestamp($startcol + 43, null);

			$this->date_com_boot = $rs->getTimestamp($startcol + 44, null);

			$this->date_com_sboot = $rs->getTimestamp($startcol + 45, null);

			$this->date_com_js = $rs->getTimestamp($startcol + 46, null);

			$this->date_com_hood = $rs->getTimestamp($startcol + 47, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 48; 
		} catch (Exception $e) {
			throw new PropelException("Error populating hgasTag object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(hgasTagPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			hgasTagPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(hgasTagPeer::DATABASE_NAME);
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
					$pk = hgasTagPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += hgasTagPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collhgasHangerSlots !== null) {
				foreach($this->collhgasHangerSlots as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collhgasTagRequestsRelatedByBeforeTagId !== null) {
				foreach($this->collhgasTagRequestsRelatedByBeforeTagId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collhgasTagRequestsRelatedByAfterTagId !== null) {
				foreach($this->collhgasTagRequestsRelatedByAfterTagId as $referrerFK) {
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


			if (($retval = hgasTagPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collhgasHangerSlots !== null) {
					foreach($this->collhgasHangerSlots as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collhgasTagRequestsRelatedByBeforeTagId !== null) {
					foreach($this->collhgasTagRequestsRelatedByBeforeTagId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collhgasTagRequestsRelatedByAfterTagId !== null) {
					foreach($this->collhgasTagRequestsRelatedByAfterTagId as $referrerFK) {
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
		$pos = hgasTagPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUserId();
				break;
			case 2:
				return $this->getUserFullname();
				break;
			case 3:
				return $this->getUserGid();
				break;
			case 4:
				return $this->getJumpsuitSize();
				break;
			case 5:
				return $this->getBootiesSize();
				break;
			case 6:
				return $this->getSafetyBootSize();
				break;
			case 7:
				return $this->getHoodSize();
				break;
			case 8:
				return $this->getRequestedBy();
				break;
			case 9:
				return $this->getDateRequested();
				break;
			case 10:
				return $this->getCompletedBy();
				break;
			case 11:
				return $this->getDateCompleted();
				break;
			case 12:
				return $this->getDepartmentId();
				break;
			case 13:
				return $this->getDepartmentName();
				break;
			case 14:
				return $this->getTeamId();
				break;
			case 15:
				return $this->getTeamName();
				break;
			case 16:
				return $this->getCellId();
				break;
			case 17:
				return $this->getCellName();
				break;
			case 18:
				return $this->getRackId();
				break;
			case 19:
				return $this->getRackName();
				break;
			case 20:
				return $this->getHangerId();
				break;
			case 21:
				return $this->getHangerName();
				break;
			case 22:
				return $this->getSlotId();
				break;
			case 23:
				return $this->getSlotName();
				break;
			case 24:
				return $this->getBootCondition();
				break;
			case 25:
				return $this->getSafetyBootCondition();
				break;
			case 26:
				return $this->getJsCondition();
				break;
			case 27:
				return $this->getHoodCondition();
				break;
			case 28:
				return $this->getBootStat();
				break;
			case 29:
				return $this->getSbootStat();
				break;
			case 30:
				return $this->getJsStat();
				break;
			case 31:
				return $this->getHoodStat();
				break;
			case 32:
				return $this->getDatePenBoot();
				break;
			case 33:
				return $this->getDatePenSboot();
				break;
			case 34:
				return $this->getDatePenJs();
				break;
			case 35:
				return $this->getDatePenHood();
				break;
			case 36:
				return $this->getDateInpBoot();
				break;
			case 37:
				return $this->getDateInpSboot();
				break;
			case 38:
				return $this->getDateInpJs();
				break;
			case 39:
				return $this->getDateInpHood();
				break;
			case 40:
				return $this->getDateNaBoot();
				break;
			case 41:
				return $this->getDateNaSboot();
				break;
			case 42:
				return $this->getDateNaJs();
				break;
			case 43:
				return $this->getDateNaHood();
				break;
			case 44:
				return $this->getDateComBoot();
				break;
			case 45:
				return $this->getDateComSboot();
				break;
			case 46:
				return $this->getDateComJs();
				break;
			case 47:
				return $this->getDateComHood();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasTagPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getUserFullname(),
			$keys[3] => $this->getUserGid(),
			$keys[4] => $this->getJumpsuitSize(),
			$keys[5] => $this->getBootiesSize(),
			$keys[6] => $this->getSafetyBootSize(),
			$keys[7] => $this->getHoodSize(),
			$keys[8] => $this->getRequestedBy(),
			$keys[9] => $this->getDateRequested(),
			$keys[10] => $this->getCompletedBy(),
			$keys[11] => $this->getDateCompleted(),
			$keys[12] => $this->getDepartmentId(),
			$keys[13] => $this->getDepartmentName(),
			$keys[14] => $this->getTeamId(),
			$keys[15] => $this->getTeamName(),
			$keys[16] => $this->getCellId(),
			$keys[17] => $this->getCellName(),
			$keys[18] => $this->getRackId(),
			$keys[19] => $this->getRackName(),
			$keys[20] => $this->getHangerId(),
			$keys[21] => $this->getHangerName(),
			$keys[22] => $this->getSlotId(),
			$keys[23] => $this->getSlotName(),
			$keys[24] => $this->getBootCondition(),
			$keys[25] => $this->getSafetyBootCondition(),
			$keys[26] => $this->getJsCondition(),
			$keys[27] => $this->getHoodCondition(),
			$keys[28] => $this->getBootStat(),
			$keys[29] => $this->getSbootStat(),
			$keys[30] => $this->getJsStat(),
			$keys[31] => $this->getHoodStat(),
			$keys[32] => $this->getDatePenBoot(),
			$keys[33] => $this->getDatePenSboot(),
			$keys[34] => $this->getDatePenJs(),
			$keys[35] => $this->getDatePenHood(),
			$keys[36] => $this->getDateInpBoot(),
			$keys[37] => $this->getDateInpSboot(),
			$keys[38] => $this->getDateInpJs(),
			$keys[39] => $this->getDateInpHood(),
			$keys[40] => $this->getDateNaBoot(),
			$keys[41] => $this->getDateNaSboot(),
			$keys[42] => $this->getDateNaJs(),
			$keys[43] => $this->getDateNaHood(),
			$keys[44] => $this->getDateComBoot(),
			$keys[45] => $this->getDateComSboot(),
			$keys[46] => $this->getDateComJs(),
			$keys[47] => $this->getDateComHood(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = hgasTagPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUserId($value);
				break;
			case 2:
				$this->setUserFullname($value);
				break;
			case 3:
				$this->setUserGid($value);
				break;
			case 4:
				$this->setJumpsuitSize($value);
				break;
			case 5:
				$this->setBootiesSize($value);
				break;
			case 6:
				$this->setSafetyBootSize($value);
				break;
			case 7:
				$this->setHoodSize($value);
				break;
			case 8:
				$this->setRequestedBy($value);
				break;
			case 9:
				$this->setDateRequested($value);
				break;
			case 10:
				$this->setCompletedBy($value);
				break;
			case 11:
				$this->setDateCompleted($value);
				break;
			case 12:
				$this->setDepartmentId($value);
				break;
			case 13:
				$this->setDepartmentName($value);
				break;
			case 14:
				$this->setTeamId($value);
				break;
			case 15:
				$this->setTeamName($value);
				break;
			case 16:
				$this->setCellId($value);
				break;
			case 17:
				$this->setCellName($value);
				break;
			case 18:
				$this->setRackId($value);
				break;
			case 19:
				$this->setRackName($value);
				break;
			case 20:
				$this->setHangerId($value);
				break;
			case 21:
				$this->setHangerName($value);
				break;
			case 22:
				$this->setSlotId($value);
				break;
			case 23:
				$this->setSlotName($value);
				break;
			case 24:
				$this->setBootCondition($value);
				break;
			case 25:
				$this->setSafetyBootCondition($value);
				break;
			case 26:
				$this->setJsCondition($value);
				break;
			case 27:
				$this->setHoodCondition($value);
				break;
			case 28:
				$this->setBootStat($value);
				break;
			case 29:
				$this->setSbootStat($value);
				break;
			case 30:
				$this->setJsStat($value);
				break;
			case 31:
				$this->setHoodStat($value);
				break;
			case 32:
				$this->setDatePenBoot($value);
				break;
			case 33:
				$this->setDatePenSboot($value);
				break;
			case 34:
				$this->setDatePenJs($value);
				break;
			case 35:
				$this->setDatePenHood($value);
				break;
			case 36:
				$this->setDateInpBoot($value);
				break;
			case 37:
				$this->setDateInpSboot($value);
				break;
			case 38:
				$this->setDateInpJs($value);
				break;
			case 39:
				$this->setDateInpHood($value);
				break;
			case 40:
				$this->setDateNaBoot($value);
				break;
			case 41:
				$this->setDateNaSboot($value);
				break;
			case 42:
				$this->setDateNaJs($value);
				break;
			case 43:
				$this->setDateNaHood($value);
				break;
			case 44:
				$this->setDateComBoot($value);
				break;
			case 45:
				$this->setDateComSboot($value);
				break;
			case 46:
				$this->setDateComJs($value);
				break;
			case 47:
				$this->setDateComHood($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = hgasTagPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserFullname($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUserGid($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setJumpsuitSize($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setBootiesSize($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSafetyBootSize($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setHoodSize($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setRequestedBy($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateRequested($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCompletedBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDateCompleted($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDepartmentId($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDepartmentName($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setTeamId($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setTeamName($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCellId($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setCellName($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setRackId($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setRackName($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setHangerId($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setHangerName($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setSlotId($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setSlotName($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setBootCondition($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setSafetyBootCondition($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setJsCondition($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setHoodCondition($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setBootStat($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setSbootStat($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setJsStat($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setHoodStat($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setDatePenBoot($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setDatePenSboot($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setDatePenJs($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setDatePenHood($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setDateInpBoot($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setDateInpSboot($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setDateInpJs($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setDateInpHood($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setDateNaBoot($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setDateNaSboot($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setDateNaJs($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setDateNaHood($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setDateComBoot($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setDateComSboot($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setDateComJs($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setDateComHood($arr[$keys[47]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(hgasTagPeer::DATABASE_NAME);

		if ($this->isColumnModified(hgasTagPeer::ID)) $criteria->add(hgasTagPeer::ID, $this->id);
		if ($this->isColumnModified(hgasTagPeer::USER_ID)) $criteria->add(hgasTagPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(hgasTagPeer::USER_FULLNAME)) $criteria->add(hgasTagPeer::USER_FULLNAME, $this->user_fullname);
		if ($this->isColumnModified(hgasTagPeer::USER_GID)) $criteria->add(hgasTagPeer::USER_GID, $this->user_gid);
		if ($this->isColumnModified(hgasTagPeer::JUMPSUIT_SIZE)) $criteria->add(hgasTagPeer::JUMPSUIT_SIZE, $this->jumpsuit_size);
		if ($this->isColumnModified(hgasTagPeer::BOOTIES_SIZE)) $criteria->add(hgasTagPeer::BOOTIES_SIZE, $this->booties_size);
		if ($this->isColumnModified(hgasTagPeer::SAFETY_BOOT_SIZE)) $criteria->add(hgasTagPeer::SAFETY_BOOT_SIZE, $this->safety_boot_size);
		if ($this->isColumnModified(hgasTagPeer::HOOD_SIZE)) $criteria->add(hgasTagPeer::HOOD_SIZE, $this->hood_size);
		if ($this->isColumnModified(hgasTagPeer::REQUESTED_BY)) $criteria->add(hgasTagPeer::REQUESTED_BY, $this->requested_by);
		if ($this->isColumnModified(hgasTagPeer::DATE_REQUESTED)) $criteria->add(hgasTagPeer::DATE_REQUESTED, $this->date_requested);
		if ($this->isColumnModified(hgasTagPeer::COMPLETED_BY)) $criteria->add(hgasTagPeer::COMPLETED_BY, $this->completed_by);
		if ($this->isColumnModified(hgasTagPeer::DATE_COMPLETED)) $criteria->add(hgasTagPeer::DATE_COMPLETED, $this->date_completed);
		if ($this->isColumnModified(hgasTagPeer::DEPARTMENT_ID)) $criteria->add(hgasTagPeer::DEPARTMENT_ID, $this->department_id);
		if ($this->isColumnModified(hgasTagPeer::DEPARTMENT_NAME)) $criteria->add(hgasTagPeer::DEPARTMENT_NAME, $this->department_name);
		if ($this->isColumnModified(hgasTagPeer::TEAM_ID)) $criteria->add(hgasTagPeer::TEAM_ID, $this->team_id);
		if ($this->isColumnModified(hgasTagPeer::TEAM_NAME)) $criteria->add(hgasTagPeer::TEAM_NAME, $this->team_name);
		if ($this->isColumnModified(hgasTagPeer::CELL_ID)) $criteria->add(hgasTagPeer::CELL_ID, $this->cell_id);
		if ($this->isColumnModified(hgasTagPeer::CELL_NAME)) $criteria->add(hgasTagPeer::CELL_NAME, $this->cell_name);
		if ($this->isColumnModified(hgasTagPeer::RACK_ID)) $criteria->add(hgasTagPeer::RACK_ID, $this->rack_id);
		if ($this->isColumnModified(hgasTagPeer::RACK_NAME)) $criteria->add(hgasTagPeer::RACK_NAME, $this->rack_name);
		if ($this->isColumnModified(hgasTagPeer::HANGER_ID)) $criteria->add(hgasTagPeer::HANGER_ID, $this->hanger_id);
		if ($this->isColumnModified(hgasTagPeer::HANGER_NAME)) $criteria->add(hgasTagPeer::HANGER_NAME, $this->hanger_name);
		if ($this->isColumnModified(hgasTagPeer::SLOT_ID)) $criteria->add(hgasTagPeer::SLOT_ID, $this->slot_id);
		if ($this->isColumnModified(hgasTagPeer::SLOT_NAME)) $criteria->add(hgasTagPeer::SLOT_NAME, $this->slot_name);
		if ($this->isColumnModified(hgasTagPeer::BOOT_CONDITION)) $criteria->add(hgasTagPeer::BOOT_CONDITION, $this->boot_condition);
		if ($this->isColumnModified(hgasTagPeer::SAFETY_BOOT_CONDITION)) $criteria->add(hgasTagPeer::SAFETY_BOOT_CONDITION, $this->safety_boot_condition);
		if ($this->isColumnModified(hgasTagPeer::JS_CONDITION)) $criteria->add(hgasTagPeer::JS_CONDITION, $this->js_condition);
		if ($this->isColumnModified(hgasTagPeer::HOOD_CONDITION)) $criteria->add(hgasTagPeer::HOOD_CONDITION, $this->hood_condition);
		if ($this->isColumnModified(hgasTagPeer::BOOT_STAT)) $criteria->add(hgasTagPeer::BOOT_STAT, $this->boot_stat);
		if ($this->isColumnModified(hgasTagPeer::SBOOT_STAT)) $criteria->add(hgasTagPeer::SBOOT_STAT, $this->sboot_stat);
		if ($this->isColumnModified(hgasTagPeer::JS_STAT)) $criteria->add(hgasTagPeer::JS_STAT, $this->js_stat);
		if ($this->isColumnModified(hgasTagPeer::HOOD_STAT)) $criteria->add(hgasTagPeer::HOOD_STAT, $this->hood_stat);
		if ($this->isColumnModified(hgasTagPeer::DATE_PEN_BOOT)) $criteria->add(hgasTagPeer::DATE_PEN_BOOT, $this->date_pen_boot);
		if ($this->isColumnModified(hgasTagPeer::DATE_PEN_SBOOT)) $criteria->add(hgasTagPeer::DATE_PEN_SBOOT, $this->date_pen_sboot);
		if ($this->isColumnModified(hgasTagPeer::DATE_PEN_JS)) $criteria->add(hgasTagPeer::DATE_PEN_JS, $this->date_pen_js);
		if ($this->isColumnModified(hgasTagPeer::DATE_PEN_HOOD)) $criteria->add(hgasTagPeer::DATE_PEN_HOOD, $this->date_pen_hood);
		if ($this->isColumnModified(hgasTagPeer::DATE_INP_BOOT)) $criteria->add(hgasTagPeer::DATE_INP_BOOT, $this->date_inp_boot);
		if ($this->isColumnModified(hgasTagPeer::DATE_INP_SBOOT)) $criteria->add(hgasTagPeer::DATE_INP_SBOOT, $this->date_inp_sboot);
		if ($this->isColumnModified(hgasTagPeer::DATE_INP_JS)) $criteria->add(hgasTagPeer::DATE_INP_JS, $this->date_inp_js);
		if ($this->isColumnModified(hgasTagPeer::DATE_INP_HOOD)) $criteria->add(hgasTagPeer::DATE_INP_HOOD, $this->date_inp_hood);
		if ($this->isColumnModified(hgasTagPeer::DATE_NA_BOOT)) $criteria->add(hgasTagPeer::DATE_NA_BOOT, $this->date_na_boot);
		if ($this->isColumnModified(hgasTagPeer::DATE_NA_SBOOT)) $criteria->add(hgasTagPeer::DATE_NA_SBOOT, $this->date_na_sboot);
		if ($this->isColumnModified(hgasTagPeer::DATE_NA_JS)) $criteria->add(hgasTagPeer::DATE_NA_JS, $this->date_na_js);
		if ($this->isColumnModified(hgasTagPeer::DATE_NA_HOOD)) $criteria->add(hgasTagPeer::DATE_NA_HOOD, $this->date_na_hood);
		if ($this->isColumnModified(hgasTagPeer::DATE_COM_BOOT)) $criteria->add(hgasTagPeer::DATE_COM_BOOT, $this->date_com_boot);
		if ($this->isColumnModified(hgasTagPeer::DATE_COM_SBOOT)) $criteria->add(hgasTagPeer::DATE_COM_SBOOT, $this->date_com_sboot);
		if ($this->isColumnModified(hgasTagPeer::DATE_COM_JS)) $criteria->add(hgasTagPeer::DATE_COM_JS, $this->date_com_js);
		if ($this->isColumnModified(hgasTagPeer::DATE_COM_HOOD)) $criteria->add(hgasTagPeer::DATE_COM_HOOD, $this->date_com_hood);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(hgasTagPeer::DATABASE_NAME);

		$criteria->add(hgasTagPeer::ID, $this->id);

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

		$copyObj->setUserId($this->user_id);

		$copyObj->setUserFullname($this->user_fullname);

		$copyObj->setUserGid($this->user_gid);

		$copyObj->setJumpsuitSize($this->jumpsuit_size);

		$copyObj->setBootiesSize($this->booties_size);

		$copyObj->setSafetyBootSize($this->safety_boot_size);

		$copyObj->setHoodSize($this->hood_size);

		$copyObj->setRequestedBy($this->requested_by);

		$copyObj->setDateRequested($this->date_requested);

		$copyObj->setCompletedBy($this->completed_by);

		$copyObj->setDateCompleted($this->date_completed);

		$copyObj->setDepartmentId($this->department_id);

		$copyObj->setDepartmentName($this->department_name);

		$copyObj->setTeamId($this->team_id);

		$copyObj->setTeamName($this->team_name);

		$copyObj->setCellId($this->cell_id);

		$copyObj->setCellName($this->cell_name);

		$copyObj->setRackId($this->rack_id);

		$copyObj->setRackName($this->rack_name);

		$copyObj->setHangerId($this->hanger_id);

		$copyObj->setHangerName($this->hanger_name);

		$copyObj->setSlotId($this->slot_id);

		$copyObj->setSlotName($this->slot_name);

		$copyObj->setBootCondition($this->boot_condition);

		$copyObj->setSafetyBootCondition($this->safety_boot_condition);

		$copyObj->setJsCondition($this->js_condition);

		$copyObj->setHoodCondition($this->hood_condition);

		$copyObj->setBootStat($this->boot_stat);

		$copyObj->setSbootStat($this->sboot_stat);

		$copyObj->setJsStat($this->js_stat);

		$copyObj->setHoodStat($this->hood_stat);

		$copyObj->setDatePenBoot($this->date_pen_boot);

		$copyObj->setDatePenSboot($this->date_pen_sboot);

		$copyObj->setDatePenJs($this->date_pen_js);

		$copyObj->setDatePenHood($this->date_pen_hood);

		$copyObj->setDateInpBoot($this->date_inp_boot);

		$copyObj->setDateInpSboot($this->date_inp_sboot);

		$copyObj->setDateInpJs($this->date_inp_js);

		$copyObj->setDateInpHood($this->date_inp_hood);

		$copyObj->setDateNaBoot($this->date_na_boot);

		$copyObj->setDateNaSboot($this->date_na_sboot);

		$copyObj->setDateNaJs($this->date_na_js);

		$copyObj->setDateNaHood($this->date_na_hood);

		$copyObj->setDateComBoot($this->date_com_boot);

		$copyObj->setDateComSboot($this->date_com_sboot);

		$copyObj->setDateComJs($this->date_com_js);

		$copyObj->setDateComHood($this->date_com_hood);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->gethgasHangerSlots() as $relObj) {
				$copyObj->addhgasHangerSlot($relObj->copy($deepCopy));
			}

			foreach($this->gethgasTagRequestsRelatedByBeforeTagId() as $relObj) {
				$copyObj->addhgasTagRequestRelatedByBeforeTagId($relObj->copy($deepCopy));
			}

			foreach($this->gethgasTagRequestsRelatedByAfterTagId() as $relObj) {
				$copyObj->addhgasTagRequestRelatedByAfterTagId($relObj->copy($deepCopy));
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
			self::$peer = new hgasTagPeer();
		}
		return self::$peer;
	}

	
	public function inithgasHangerSlots()
	{
		if ($this->collhgasHangerSlots === null) {
			$this->collhgasHangerSlots = array();
		}
	}

	
	public function gethgasHangerSlots($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlots === null) {
			if ($this->isNew()) {
			   $this->collhgasHangerSlots = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::TAG_ID, $this->getId());

				hgasHangerSlotPeer::addSelectColumns($criteria);
				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(hgasHangerSlotPeer::TAG_ID, $this->getId());

				hgasHangerSlotPeer::addSelectColumns($criteria);
				if (!isset($this->lasthgasHangerSlotCriteria) || !$this->lasthgasHangerSlotCriteria->equals($criteria)) {
					$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lasthgasHangerSlotCriteria = $criteria;
		return $this->collhgasHangerSlots;
	}

	
	public function counthgasHangerSlots($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(hgasHangerSlotPeer::TAG_ID, $this->getId());

		return hgasHangerSlotPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addhgasHangerSlot(hgasHangerSlot $l)
	{
		$this->collhgasHangerSlots[] = $l;
		$l->sethgasTag($this);
	}


	
	public function gethgasHangerSlotsJoinhgasHanger($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlots === null) {
			if ($this->isNew()) {
				$this->collhgasHangerSlots = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::TAG_ID, $this->getId());

				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelectJoinhgasHanger($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasHangerSlotPeer::TAG_ID, $this->getId());

			if (!isset($this->lasthgasHangerSlotCriteria) || !$this->lasthgasHangerSlotCriteria->equals($criteria)) {
				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelectJoinhgasHanger($criteria, $con);
			}
		}
		$this->lasthgasHangerSlotCriteria = $criteria;

		return $this->collhgasHangerSlots;
	}


	
	public function gethgasHangerSlotsJoinhgasDepartmentTeamRelatedByDepartmentId($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlots === null) {
			if ($this->isNew()) {
				$this->collhgasHangerSlots = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::TAG_ID, $this->getId());

				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelectJoinhgasDepartmentTeamRelatedByDepartmentId($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasHangerSlotPeer::TAG_ID, $this->getId());

			if (!isset($this->lasthgasHangerSlotCriteria) || !$this->lasthgasHangerSlotCriteria->equals($criteria)) {
				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelectJoinhgasDepartmentTeamRelatedByDepartmentId($criteria, $con);
			}
		}
		$this->lasthgasHangerSlotCriteria = $criteria;

		return $this->collhgasHangerSlots;
	}


	
	public function gethgasHangerSlotsJoinhgasDepartmentTeamRelatedByTeamId($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasHangerSlotPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasHangerSlots === null) {
			if ($this->isNew()) {
				$this->collhgasHangerSlots = array();
			} else {

				$criteria->add(hgasHangerSlotPeer::TAG_ID, $this->getId());

				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelectJoinhgasDepartmentTeamRelatedByTeamId($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasHangerSlotPeer::TAG_ID, $this->getId());

			if (!isset($this->lasthgasHangerSlotCriteria) || !$this->lasthgasHangerSlotCriteria->equals($criteria)) {
				$this->collhgasHangerSlots = hgasHangerSlotPeer::doSelectJoinhgasDepartmentTeamRelatedByTeamId($criteria, $con);
			}
		}
		$this->lasthgasHangerSlotCriteria = $criteria;

		return $this->collhgasHangerSlots;
	}

	
	public function inithgasTagRequestsRelatedByBeforeTagId()
	{
		if ($this->collhgasTagRequestsRelatedByBeforeTagId === null) {
			$this->collhgasTagRequestsRelatedByBeforeTagId = array();
		}
	}

	
	public function gethgasTagRequestsRelatedByBeforeTagId($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasTagRequestPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasTagRequestsRelatedByBeforeTagId === null) {
			if ($this->isNew()) {
			   $this->collhgasTagRequestsRelatedByBeforeTagId = array();
			} else {

				$criteria->add(hgasTagRequestPeer::BEFORE_TAG_ID, $this->getId());

				hgasTagRequestPeer::addSelectColumns($criteria);
				$this->collhgasTagRequestsRelatedByBeforeTagId = hgasTagRequestPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(hgasTagRequestPeer::BEFORE_TAG_ID, $this->getId());

				hgasTagRequestPeer::addSelectColumns($criteria);
				if (!isset($this->lasthgasTagRequestRelatedByBeforeTagIdCriteria) || !$this->lasthgasTagRequestRelatedByBeforeTagIdCriteria->equals($criteria)) {
					$this->collhgasTagRequestsRelatedByBeforeTagId = hgasTagRequestPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lasthgasTagRequestRelatedByBeforeTagIdCriteria = $criteria;
		return $this->collhgasTagRequestsRelatedByBeforeTagId;
	}

	
	public function counthgasTagRequestsRelatedByBeforeTagId($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasTagRequestPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(hgasTagRequestPeer::BEFORE_TAG_ID, $this->getId());

		return hgasTagRequestPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addhgasTagRequestRelatedByBeforeTagId(hgasTagRequest $l)
	{
		$this->collhgasTagRequestsRelatedByBeforeTagId[] = $l;
		$l->sethgasTagRelatedByBeforeTagId($this);
	}


	
	public function gethgasTagRequestsRelatedByBeforeTagIdJoinhgasHangerSlot($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasTagRequestPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasTagRequestsRelatedByBeforeTagId === null) {
			if ($this->isNew()) {
				$this->collhgasTagRequestsRelatedByBeforeTagId = array();
			} else {

				$criteria->add(hgasTagRequestPeer::BEFORE_TAG_ID, $this->getId());

				$this->collhgasTagRequestsRelatedByBeforeTagId = hgasTagRequestPeer::doSelectJoinhgasHangerSlot($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasTagRequestPeer::BEFORE_TAG_ID, $this->getId());

			if (!isset($this->lasthgasTagRequestRelatedByBeforeTagIdCriteria) || !$this->lasthgasTagRequestRelatedByBeforeTagIdCriteria->equals($criteria)) {
				$this->collhgasTagRequestsRelatedByBeforeTagId = hgasTagRequestPeer::doSelectJoinhgasHangerSlot($criteria, $con);
			}
		}
		$this->lasthgasTagRequestRelatedByBeforeTagIdCriteria = $criteria;

		return $this->collhgasTagRequestsRelatedByBeforeTagId;
	}

	
	public function inithgasTagRequestsRelatedByAfterTagId()
	{
		if ($this->collhgasTagRequestsRelatedByAfterTagId === null) {
			$this->collhgasTagRequestsRelatedByAfterTagId = array();
		}
	}

	
	public function gethgasTagRequestsRelatedByAfterTagId($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasTagRequestPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasTagRequestsRelatedByAfterTagId === null) {
			if ($this->isNew()) {
			   $this->collhgasTagRequestsRelatedByAfterTagId = array();
			} else {

				$criteria->add(hgasTagRequestPeer::AFTER_TAG_ID, $this->getId());

				hgasTagRequestPeer::addSelectColumns($criteria);
				$this->collhgasTagRequestsRelatedByAfterTagId = hgasTagRequestPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(hgasTagRequestPeer::AFTER_TAG_ID, $this->getId());

				hgasTagRequestPeer::addSelectColumns($criteria);
				if (!isset($this->lasthgasTagRequestRelatedByAfterTagIdCriteria) || !$this->lasthgasTagRequestRelatedByAfterTagIdCriteria->equals($criteria)) {
					$this->collhgasTagRequestsRelatedByAfterTagId = hgasTagRequestPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lasthgasTagRequestRelatedByAfterTagIdCriteria = $criteria;
		return $this->collhgasTagRequestsRelatedByAfterTagId;
	}

	
	public function counthgasTagRequestsRelatedByAfterTagId($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasTagRequestPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(hgasTagRequestPeer::AFTER_TAG_ID, $this->getId());

		return hgasTagRequestPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addhgasTagRequestRelatedByAfterTagId(hgasTagRequest $l)
	{
		$this->collhgasTagRequestsRelatedByAfterTagId[] = $l;
		$l->sethgasTagRelatedByAfterTagId($this);
	}


	
	public function gethgasTagRequestsRelatedByAfterTagIdJoinhgasHangerSlot($criteria = null, $con = null)
	{
				include_once 'lib/model/hgas/om/BasehgasTagRequestPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collhgasTagRequestsRelatedByAfterTagId === null) {
			if ($this->isNew()) {
				$this->collhgasTagRequestsRelatedByAfterTagId = array();
			} else {

				$criteria->add(hgasTagRequestPeer::AFTER_TAG_ID, $this->getId());

				$this->collhgasTagRequestsRelatedByAfterTagId = hgasTagRequestPeer::doSelectJoinhgasHangerSlot($criteria, $con);
			}
		} else {
									
			$criteria->add(hgasTagRequestPeer::AFTER_TAG_ID, $this->getId());

			if (!isset($this->lasthgasTagRequestRelatedByAfterTagIdCriteria) || !$this->lasthgasTagRequestRelatedByAfterTagIdCriteria->equals($criteria)) {
				$this->collhgasTagRequestsRelatedByAfterTagId = hgasTagRequestPeer::doSelectJoinhgasHangerSlot($criteria, $con);
			}
		}
		$this->lasthgasTagRequestRelatedByAfterTagIdCriteria = $criteria;

		return $this->collhgasTagRequestsRelatedByAfterTagId;
	}

} 
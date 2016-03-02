<?php


abstract class BasePms6252 extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $machine_no;


	
	protected $cda_di_water = 0;


	
	protected $pre_inspect = 0;


	
	protected $fluid_leak = 0;


	
	protected $panel_inspect = 0;


	
	protected $exit_inspect = 0;


	
	protected $switch_control = 0;


	
	protected $initial;


	
	protected $remark;


	
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

	
	public function getMachineNo()
	{

		return $this->machine_no;
	}

	
	public function getCdaDiWater()
	{

		return $this->cda_di_water;
	}

	
	public function getPreInspect()
	{

		return $this->pre_inspect;
	}

	
	public function getFluidLeak()
	{

		return $this->fluid_leak;
	}

	
	public function getPanelInspect()
	{

		return $this->panel_inspect;
	}

	
	public function getExitInspect()
	{

		return $this->exit_inspect;
	}

	
	public function getSwitchControl()
	{

		return $this->switch_control;
	}

	
	public function getInitial()
	{

		return $this->initial;
	}

	
	public function getRemark()
	{

		return $this->remark;
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
			$this->modifiedColumns[] = Pms6252Peer::ID;
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
			$this->modifiedColumns[] = Pms6252Peer::TRANS_DATE;
		}

	} 
	
	public function setMachineNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_no !== $v) {
			$this->machine_no = $v;
			$this->modifiedColumns[] = Pms6252Peer::MACHINE_NO;
		}

	} 
	
	public function setCdaDiWater($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cda_di_water !== $v || $v === 0) {
			$this->cda_di_water = $v;
			$this->modifiedColumns[] = Pms6252Peer::CDA_DI_WATER;
		}

	} 
	
	public function setPreInspect($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->pre_inspect !== $v || $v === 0) {
			$this->pre_inspect = $v;
			$this->modifiedColumns[] = Pms6252Peer::PRE_INSPECT;
		}

	} 
	
	public function setFluidLeak($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fluid_leak !== $v || $v === 0) {
			$this->fluid_leak = $v;
			$this->modifiedColumns[] = Pms6252Peer::FLUID_LEAK;
		}

	} 
	
	public function setPanelInspect($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->panel_inspect !== $v || $v === 0) {
			$this->panel_inspect = $v;
			$this->modifiedColumns[] = Pms6252Peer::PANEL_INSPECT;
		}

	} 
	
	public function setExitInspect($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->exit_inspect !== $v || $v === 0) {
			$this->exit_inspect = $v;
			$this->modifiedColumns[] = Pms6252Peer::EXIT_INSPECT;
		}

	} 
	
	public function setSwitchControl($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->switch_control !== $v || $v === 0) {
			$this->switch_control = $v;
			$this->modifiedColumns[] = Pms6252Peer::SWITCH_CONTROL;
		}

	} 
	
	public function setInitial($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initial !== $v) {
			$this->initial = $v;
			$this->modifiedColumns[] = Pms6252Peer::INITIAL;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = Pms6252Peer::REMARK;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = Pms6252Peer::CREATED_BY;
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
			$this->modifiedColumns[] = Pms6252Peer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = Pms6252Peer::MODIFIED_BY;
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
			$this->modifiedColumns[] = Pms6252Peer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->machine_no = $rs->getString($startcol + 2);

			$this->cda_di_water = $rs->getInt($startcol + 3);

			$this->pre_inspect = $rs->getInt($startcol + 4);

			$this->fluid_leak = $rs->getInt($startcol + 5);

			$this->panel_inspect = $rs->getInt($startcol + 6);

			$this->exit_inspect = $rs->getInt($startcol + 7);

			$this->switch_control = $rs->getInt($startcol + 8);

			$this->initial = $rs->getString($startcol + 9);

			$this->remark = $rs->getString($startcol + 10);

			$this->created_by = $rs->getString($startcol + 11);

			$this->date_created = $rs->getTimestamp($startcol + 12, null);

			$this->modified_by = $rs->getString($startcol + 13);

			$this->date_modified = $rs->getTimestamp($startcol + 14, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 15; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Pms6252 object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Pms6252Peer::DATABASE_NAME);
		}

		try {
			$con->begin();
			Pms6252Peer::doDelete($this, $con);
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
			$con = Propel::getConnection(Pms6252Peer::DATABASE_NAME);
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
					$pk = Pms6252Peer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += Pms6252Peer::doUpdate($this, $con);
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


			if (($retval = Pms6252Peer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Pms6252Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getMachineNo();
				break;
			case 3:
				return $this->getCdaDiWater();
				break;
			case 4:
				return $this->getPreInspect();
				break;
			case 5:
				return $this->getFluidLeak();
				break;
			case 6:
				return $this->getPanelInspect();
				break;
			case 7:
				return $this->getExitInspect();
				break;
			case 8:
				return $this->getSwitchControl();
				break;
			case 9:
				return $this->getInitial();
				break;
			case 10:
				return $this->getRemark();
				break;
			case 11:
				return $this->getCreatedBy();
				break;
			case 12:
				return $this->getDateCreated();
				break;
			case 13:
				return $this->getModifiedBy();
				break;
			case 14:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = Pms6252Peer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getMachineNo(),
			$keys[3] => $this->getCdaDiWater(),
			$keys[4] => $this->getPreInspect(),
			$keys[5] => $this->getFluidLeak(),
			$keys[6] => $this->getPanelInspect(),
			$keys[7] => $this->getExitInspect(),
			$keys[8] => $this->getSwitchControl(),
			$keys[9] => $this->getInitial(),
			$keys[10] => $this->getRemark(),
			$keys[11] => $this->getCreatedBy(),
			$keys[12] => $this->getDateCreated(),
			$keys[13] => $this->getModifiedBy(),
			$keys[14] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Pms6252Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setMachineNo($value);
				break;
			case 3:
				$this->setCdaDiWater($value);
				break;
			case 4:
				$this->setPreInspect($value);
				break;
			case 5:
				$this->setFluidLeak($value);
				break;
			case 6:
				$this->setPanelInspect($value);
				break;
			case 7:
				$this->setExitInspect($value);
				break;
			case 8:
				$this->setSwitchControl($value);
				break;
			case 9:
				$this->setInitial($value);
				break;
			case 10:
				$this->setRemark($value);
				break;
			case 11:
				$this->setCreatedBy($value);
				break;
			case 12:
				$this->setDateCreated($value);
				break;
			case 13:
				$this->setModifiedBy($value);
				break;
			case 14:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = Pms6252Peer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMachineNo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCdaDiWater($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPreInspect($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFluidLeak($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPanelInspect($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setExitInspect($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSwitchControl($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setInitial($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setRemark($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCreatedBy($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDateCreated($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setModifiedBy($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateModified($arr[$keys[14]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(Pms6252Peer::DATABASE_NAME);

		if ($this->isColumnModified(Pms6252Peer::ID)) $criteria->add(Pms6252Peer::ID, $this->id);
		if ($this->isColumnModified(Pms6252Peer::TRANS_DATE)) $criteria->add(Pms6252Peer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(Pms6252Peer::MACHINE_NO)) $criteria->add(Pms6252Peer::MACHINE_NO, $this->machine_no);
		if ($this->isColumnModified(Pms6252Peer::CDA_DI_WATER)) $criteria->add(Pms6252Peer::CDA_DI_WATER, $this->cda_di_water);
		if ($this->isColumnModified(Pms6252Peer::PRE_INSPECT)) $criteria->add(Pms6252Peer::PRE_INSPECT, $this->pre_inspect);
		if ($this->isColumnModified(Pms6252Peer::FLUID_LEAK)) $criteria->add(Pms6252Peer::FLUID_LEAK, $this->fluid_leak);
		if ($this->isColumnModified(Pms6252Peer::PANEL_INSPECT)) $criteria->add(Pms6252Peer::PANEL_INSPECT, $this->panel_inspect);
		if ($this->isColumnModified(Pms6252Peer::EXIT_INSPECT)) $criteria->add(Pms6252Peer::EXIT_INSPECT, $this->exit_inspect);
		if ($this->isColumnModified(Pms6252Peer::SWITCH_CONTROL)) $criteria->add(Pms6252Peer::SWITCH_CONTROL, $this->switch_control);
		if ($this->isColumnModified(Pms6252Peer::INITIAL)) $criteria->add(Pms6252Peer::INITIAL, $this->initial);
		if ($this->isColumnModified(Pms6252Peer::REMARK)) $criteria->add(Pms6252Peer::REMARK, $this->remark);
		if ($this->isColumnModified(Pms6252Peer::CREATED_BY)) $criteria->add(Pms6252Peer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(Pms6252Peer::DATE_CREATED)) $criteria->add(Pms6252Peer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(Pms6252Peer::MODIFIED_BY)) $criteria->add(Pms6252Peer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(Pms6252Peer::DATE_MODIFIED)) $criteria->add(Pms6252Peer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(Pms6252Peer::DATABASE_NAME);

		$criteria->add(Pms6252Peer::ID, $this->id);

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

		$copyObj->setMachineNo($this->machine_no);

		$copyObj->setCdaDiWater($this->cda_di_water);

		$copyObj->setPreInspect($this->pre_inspect);

		$copyObj->setFluidLeak($this->fluid_leak);

		$copyObj->setPanelInspect($this->panel_inspect);

		$copyObj->setExitInspect($this->exit_inspect);

		$copyObj->setSwitchControl($this->switch_control);

		$copyObj->setInitial($this->initial);

		$copyObj->setRemark($this->remark);

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
			self::$peer = new Pms6252Peer();
		}
		return self::$peer;
	}

} 
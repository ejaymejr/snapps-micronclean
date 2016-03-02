<?php


abstract class BasePms1232ab extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $machine_no;


	
	protected $wash_flow_rate;


	
	protected $rinse_flow_rate;


	
	protected $cham_1 = 0;


	
	protected $cham_2 = 0;


	
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

	
	public function getWashFlowRate()
	{

		return $this->wash_flow_rate;
	}

	
	public function getRinseFlowRate()
	{

		return $this->rinse_flow_rate;
	}

	
	public function getCham1()
	{

		return $this->cham_1;
	}

	
	public function getCham2()
	{

		return $this->cham_2;
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
			$this->modifiedColumns[] = Pms1232abPeer::ID;
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
			$this->modifiedColumns[] = Pms1232abPeer::TRANS_DATE;
		}

	} 
	
	public function setMachineNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->machine_no !== $v) {
			$this->machine_no = $v;
			$this->modifiedColumns[] = Pms1232abPeer::MACHINE_NO;
		}

	} 
	
	public function setWashFlowRate($v)
	{

		if ($this->wash_flow_rate !== $v) {
			$this->wash_flow_rate = $v;
			$this->modifiedColumns[] = Pms1232abPeer::WASH_FLOW_RATE;
		}

	} 
	
	public function setRinseFlowRate($v)
	{

		if ($this->rinse_flow_rate !== $v) {
			$this->rinse_flow_rate = $v;
			$this->modifiedColumns[] = Pms1232abPeer::RINSE_FLOW_RATE;
		}

	} 
	
	public function setCham1($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cham_1 !== $v || $v === 0) {
			$this->cham_1 = $v;
			$this->modifiedColumns[] = Pms1232abPeer::CHAM_1;
		}

	} 
	
	public function setCham2($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cham_2 !== $v || $v === 0) {
			$this->cham_2 = $v;
			$this->modifiedColumns[] = Pms1232abPeer::CHAM_2;
		}

	} 
	
	public function setPanelInspect($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->panel_inspect !== $v || $v === 0) {
			$this->panel_inspect = $v;
			$this->modifiedColumns[] = Pms1232abPeer::PANEL_INSPECT;
		}

	} 
	
	public function setExitInspect($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->exit_inspect !== $v || $v === 0) {
			$this->exit_inspect = $v;
			$this->modifiedColumns[] = Pms1232abPeer::EXIT_INSPECT;
		}

	} 
	
	public function setSwitchControl($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->switch_control !== $v || $v === 0) {
			$this->switch_control = $v;
			$this->modifiedColumns[] = Pms1232abPeer::SWITCH_CONTROL;
		}

	} 
	
	public function setInitial($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initial !== $v) {
			$this->initial = $v;
			$this->modifiedColumns[] = Pms1232abPeer::INITIAL;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = Pms1232abPeer::REMARK;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = Pms1232abPeer::CREATED_BY;
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
			$this->modifiedColumns[] = Pms1232abPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = Pms1232abPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = Pms1232abPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getDate($startcol + 1, null);

			$this->machine_no = $rs->getString($startcol + 2);

			$this->wash_flow_rate = $rs->getFloat($startcol + 3);

			$this->rinse_flow_rate = $rs->getFloat($startcol + 4);

			$this->cham_1 = $rs->getInt($startcol + 5);

			$this->cham_2 = $rs->getInt($startcol + 6);

			$this->panel_inspect = $rs->getInt($startcol + 7);

			$this->exit_inspect = $rs->getInt($startcol + 8);

			$this->switch_control = $rs->getInt($startcol + 9);

			$this->initial = $rs->getString($startcol + 10);

			$this->remark = $rs->getString($startcol + 11);

			$this->created_by = $rs->getString($startcol + 12);

			$this->date_created = $rs->getTimestamp($startcol + 13, null);

			$this->modified_by = $rs->getString($startcol + 14);

			$this->date_modified = $rs->getTimestamp($startcol + 15, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Pms1232ab object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Pms1232abPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			Pms1232abPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(Pms1232abPeer::DATABASE_NAME);
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
					$pk = Pms1232abPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += Pms1232abPeer::doUpdate($this, $con);
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


			if (($retval = Pms1232abPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Pms1232abPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getWashFlowRate();
				break;
			case 4:
				return $this->getRinseFlowRate();
				break;
			case 5:
				return $this->getCham1();
				break;
			case 6:
				return $this->getCham2();
				break;
			case 7:
				return $this->getPanelInspect();
				break;
			case 8:
				return $this->getExitInspect();
				break;
			case 9:
				return $this->getSwitchControl();
				break;
			case 10:
				return $this->getInitial();
				break;
			case 11:
				return $this->getRemark();
				break;
			case 12:
				return $this->getCreatedBy();
				break;
			case 13:
				return $this->getDateCreated();
				break;
			case 14:
				return $this->getModifiedBy();
				break;
			case 15:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = Pms1232abPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getMachineNo(),
			$keys[3] => $this->getWashFlowRate(),
			$keys[4] => $this->getRinseFlowRate(),
			$keys[5] => $this->getCham1(),
			$keys[6] => $this->getCham2(),
			$keys[7] => $this->getPanelInspect(),
			$keys[8] => $this->getExitInspect(),
			$keys[9] => $this->getSwitchControl(),
			$keys[10] => $this->getInitial(),
			$keys[11] => $this->getRemark(),
			$keys[12] => $this->getCreatedBy(),
			$keys[13] => $this->getDateCreated(),
			$keys[14] => $this->getModifiedBy(),
			$keys[15] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Pms1232abPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setWashFlowRate($value);
				break;
			case 4:
				$this->setRinseFlowRate($value);
				break;
			case 5:
				$this->setCham1($value);
				break;
			case 6:
				$this->setCham2($value);
				break;
			case 7:
				$this->setPanelInspect($value);
				break;
			case 8:
				$this->setExitInspect($value);
				break;
			case 9:
				$this->setSwitchControl($value);
				break;
			case 10:
				$this->setInitial($value);
				break;
			case 11:
				$this->setRemark($value);
				break;
			case 12:
				$this->setCreatedBy($value);
				break;
			case 13:
				$this->setDateCreated($value);
				break;
			case 14:
				$this->setModifiedBy($value);
				break;
			case 15:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = Pms1232abPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMachineNo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setWashFlowRate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setRinseFlowRate($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCham1($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCham2($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPanelInspect($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setExitInspect($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setSwitchControl($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setInitial($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setRemark($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCreatedBy($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDateCreated($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setModifiedBy($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setDateModified($arr[$keys[15]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(Pms1232abPeer::DATABASE_NAME);

		if ($this->isColumnModified(Pms1232abPeer::ID)) $criteria->add(Pms1232abPeer::ID, $this->id);
		if ($this->isColumnModified(Pms1232abPeer::TRANS_DATE)) $criteria->add(Pms1232abPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(Pms1232abPeer::MACHINE_NO)) $criteria->add(Pms1232abPeer::MACHINE_NO, $this->machine_no);
		if ($this->isColumnModified(Pms1232abPeer::WASH_FLOW_RATE)) $criteria->add(Pms1232abPeer::WASH_FLOW_RATE, $this->wash_flow_rate);
		if ($this->isColumnModified(Pms1232abPeer::RINSE_FLOW_RATE)) $criteria->add(Pms1232abPeer::RINSE_FLOW_RATE, $this->rinse_flow_rate);
		if ($this->isColumnModified(Pms1232abPeer::CHAM_1)) $criteria->add(Pms1232abPeer::CHAM_1, $this->cham_1);
		if ($this->isColumnModified(Pms1232abPeer::CHAM_2)) $criteria->add(Pms1232abPeer::CHAM_2, $this->cham_2);
		if ($this->isColumnModified(Pms1232abPeer::PANEL_INSPECT)) $criteria->add(Pms1232abPeer::PANEL_INSPECT, $this->panel_inspect);
		if ($this->isColumnModified(Pms1232abPeer::EXIT_INSPECT)) $criteria->add(Pms1232abPeer::EXIT_INSPECT, $this->exit_inspect);
		if ($this->isColumnModified(Pms1232abPeer::SWITCH_CONTROL)) $criteria->add(Pms1232abPeer::SWITCH_CONTROL, $this->switch_control);
		if ($this->isColumnModified(Pms1232abPeer::INITIAL)) $criteria->add(Pms1232abPeer::INITIAL, $this->initial);
		if ($this->isColumnModified(Pms1232abPeer::REMARK)) $criteria->add(Pms1232abPeer::REMARK, $this->remark);
		if ($this->isColumnModified(Pms1232abPeer::CREATED_BY)) $criteria->add(Pms1232abPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(Pms1232abPeer::DATE_CREATED)) $criteria->add(Pms1232abPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(Pms1232abPeer::MODIFIED_BY)) $criteria->add(Pms1232abPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(Pms1232abPeer::DATE_MODIFIED)) $criteria->add(Pms1232abPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(Pms1232abPeer::DATABASE_NAME);

		$criteria->add(Pms1232abPeer::ID, $this->id);

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

		$copyObj->setWashFlowRate($this->wash_flow_rate);

		$copyObj->setRinseFlowRate($this->rinse_flow_rate);

		$copyObj->setCham1($this->cham_1);

		$copyObj->setCham2($this->cham_2);

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
			self::$peer = new Pms1232abPeer();
		}
		return self::$peer;
	}

} 
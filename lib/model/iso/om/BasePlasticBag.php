<?php


abstract class BasePlasticBag extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $type_of_plastic;


	
	protected $by_who;


	
	protected $surface_area;


	
	protected $vendor;


	
	protected $vol_in_ml;


	
	protected $lpc_blank_in_ml;


	
	protected $lpc_plastic_in_ml;


	
	protected $lpc_plastic_in_cm;


	
	protected $ic_cl_in_cm;


	
	protected $ic_no_in_cm;


	
	protected $ic_so_in_cm;


	
	protected $status;


	
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

	
	public function getTypeOfPlastic()
	{

		return $this->type_of_plastic;
	}

	
	public function getByWho()
	{

		return $this->by_who;
	}

	
	public function getSurfaceArea()
	{

		return $this->surface_area;
	}

	
	public function getVendor()
	{

		return $this->vendor;
	}

	
	public function getVolInMl()
	{

		return $this->vol_in_ml;
	}

	
	public function getLpcBlankInMl()
	{

		return $this->lpc_blank_in_ml;
	}

	
	public function getLpcPlasticInMl()
	{

		return $this->lpc_plastic_in_ml;
	}

	
	public function getLpcPlasticInCm()
	{

		return $this->lpc_plastic_in_cm;
	}

	
	public function getIcClInCm()
	{

		return $this->ic_cl_in_cm;
	}

	
	public function getIcNoInCm()
	{

		return $this->ic_no_in_cm;
	}

	
	public function getIcSoInCm()
	{

		return $this->ic_so_in_cm;
	}

	
	public function getStatus()
	{

		return $this->status;
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
			$this->modifiedColumns[] = PlasticBagPeer::ID;
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
			$this->modifiedColumns[] = PlasticBagPeer::DATE_TIME;
		}

	} 
	
	public function setTypeOfPlastic($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_of_plastic !== $v) {
			$this->type_of_plastic = $v;
			$this->modifiedColumns[] = PlasticBagPeer::TYPE_OF_PLASTIC;
		}

	} 
	
	public function setByWho($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->by_who !== $v) {
			$this->by_who = $v;
			$this->modifiedColumns[] = PlasticBagPeer::BY_WHO;
		}

	} 
	
	public function setSurfaceArea($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->surface_area !== $v) {
			$this->surface_area = $v;
			$this->modifiedColumns[] = PlasticBagPeer::SURFACE_AREA;
		}

	} 
	
	public function setVendor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->vendor !== $v) {
			$this->vendor = $v;
			$this->modifiedColumns[] = PlasticBagPeer::VENDOR;
		}

	} 
	
	public function setVolInMl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->vol_in_ml !== $v) {
			$this->vol_in_ml = $v;
			$this->modifiedColumns[] = PlasticBagPeer::VOL_IN_ML;
		}

	} 
	
	public function setLpcBlankInMl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lpc_blank_in_ml !== $v) {
			$this->lpc_blank_in_ml = $v;
			$this->modifiedColumns[] = PlasticBagPeer::LPC_BLANK_IN_ML;
		}

	} 
	
	public function setLpcPlasticInMl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lpc_plastic_in_ml !== $v) {
			$this->lpc_plastic_in_ml = $v;
			$this->modifiedColumns[] = PlasticBagPeer::LPC_PLASTIC_IN_ML;
		}

	} 
	
	public function setLpcPlasticInCm($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lpc_plastic_in_cm !== $v) {
			$this->lpc_plastic_in_cm = $v;
			$this->modifiedColumns[] = PlasticBagPeer::LPC_PLASTIC_IN_CM;
		}

	} 
	
	public function setIcClInCm($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ic_cl_in_cm !== $v) {
			$this->ic_cl_in_cm = $v;
			$this->modifiedColumns[] = PlasticBagPeer::IC_CL_IN_CM;
		}

	} 
	
	public function setIcNoInCm($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ic_no_in_cm !== $v) {
			$this->ic_no_in_cm = $v;
			$this->modifiedColumns[] = PlasticBagPeer::IC_NO_IN_CM;
		}

	} 
	
	public function setIcSoInCm($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ic_so_in_cm !== $v) {
			$this->ic_so_in_cm = $v;
			$this->modifiedColumns[] = PlasticBagPeer::IC_SO_IN_CM;
		}

	} 
	
	public function setStatus($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->status !== $v) {
			$this->status = $v;
			$this->modifiedColumns[] = PlasticBagPeer::STATUS;
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
			$this->modifiedColumns[] = PlasticBagPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = PlasticBagPeer::CREATED_BY;
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
			$this->modifiedColumns[] = PlasticBagPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = PlasticBagPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->type_of_plastic = $rs->getString($startcol + 2);

			$this->by_who = $rs->getString($startcol + 3);

			$this->surface_area = $rs->getString($startcol + 4);

			$this->vendor = $rs->getString($startcol + 5);

			$this->vol_in_ml = $rs->getString($startcol + 6);

			$this->lpc_blank_in_ml = $rs->getString($startcol + 7);

			$this->lpc_plastic_in_ml = $rs->getString($startcol + 8);

			$this->lpc_plastic_in_cm = $rs->getString($startcol + 9);

			$this->ic_cl_in_cm = $rs->getString($startcol + 10);

			$this->ic_no_in_cm = $rs->getString($startcol + 11);

			$this->ic_so_in_cm = $rs->getString($startcol + 12);

			$this->status = $rs->getString($startcol + 13);

			$this->date_created = $rs->getTimestamp($startcol + 14, null);

			$this->created_by = $rs->getString($startcol + 15);

			$this->date_modified = $rs->getTimestamp($startcol + 16, null);

			$this->modified_by = $rs->getString($startcol + 17);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 18; 
		} catch (Exception $e) {
			throw new PropelException("Error populating PlasticBag object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PlasticBagPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PlasticBagPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(PlasticBagPeer::DATABASE_NAME);
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
					$pk = PlasticBagPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PlasticBagPeer::doUpdate($this, $con);
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


			if (($retval = PlasticBagPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PlasticBagPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTypeOfPlastic();
				break;
			case 3:
				return $this->getByWho();
				break;
			case 4:
				return $this->getSurfaceArea();
				break;
			case 5:
				return $this->getVendor();
				break;
			case 6:
				return $this->getVolInMl();
				break;
			case 7:
				return $this->getLpcBlankInMl();
				break;
			case 8:
				return $this->getLpcPlasticInMl();
				break;
			case 9:
				return $this->getLpcPlasticInCm();
				break;
			case 10:
				return $this->getIcClInCm();
				break;
			case 11:
				return $this->getIcNoInCm();
				break;
			case 12:
				return $this->getIcSoInCm();
				break;
			case 13:
				return $this->getStatus();
				break;
			case 14:
				return $this->getDateCreated();
				break;
			case 15:
				return $this->getCreatedBy();
				break;
			case 16:
				return $this->getDateModified();
				break;
			case 17:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PlasticBagPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getTypeOfPlastic(),
			$keys[3] => $this->getByWho(),
			$keys[4] => $this->getSurfaceArea(),
			$keys[5] => $this->getVendor(),
			$keys[6] => $this->getVolInMl(),
			$keys[7] => $this->getLpcBlankInMl(),
			$keys[8] => $this->getLpcPlasticInMl(),
			$keys[9] => $this->getLpcPlasticInCm(),
			$keys[10] => $this->getIcClInCm(),
			$keys[11] => $this->getIcNoInCm(),
			$keys[12] => $this->getIcSoInCm(),
			$keys[13] => $this->getStatus(),
			$keys[14] => $this->getDateCreated(),
			$keys[15] => $this->getCreatedBy(),
			$keys[16] => $this->getDateModified(),
			$keys[17] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PlasticBagPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTypeOfPlastic($value);
				break;
			case 3:
				$this->setByWho($value);
				break;
			case 4:
				$this->setSurfaceArea($value);
				break;
			case 5:
				$this->setVendor($value);
				break;
			case 6:
				$this->setVolInMl($value);
				break;
			case 7:
				$this->setLpcBlankInMl($value);
				break;
			case 8:
				$this->setLpcPlasticInMl($value);
				break;
			case 9:
				$this->setLpcPlasticInCm($value);
				break;
			case 10:
				$this->setIcClInCm($value);
				break;
			case 11:
				$this->setIcNoInCm($value);
				break;
			case 12:
				$this->setIcSoInCm($value);
				break;
			case 13:
				$this->setStatus($value);
				break;
			case 14:
				$this->setDateCreated($value);
				break;
			case 15:
				$this->setCreatedBy($value);
				break;
			case 16:
				$this->setDateModified($value);
				break;
			case 17:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PlasticBagPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTypeOfPlastic($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setByWho($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSurfaceArea($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setVendor($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setVolInMl($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setLpcBlankInMl($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setLpcPlasticInMl($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setLpcPlasticInCm($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setIcClInCm($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setIcNoInCm($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setIcSoInCm($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setStatus($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateCreated($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCreatedBy($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDateModified($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setModifiedBy($arr[$keys[17]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PlasticBagPeer::DATABASE_NAME);

		if ($this->isColumnModified(PlasticBagPeer::ID)) $criteria->add(PlasticBagPeer::ID, $this->id);
		if ($this->isColumnModified(PlasticBagPeer::DATE_TIME)) $criteria->add(PlasticBagPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(PlasticBagPeer::TYPE_OF_PLASTIC)) $criteria->add(PlasticBagPeer::TYPE_OF_PLASTIC, $this->type_of_plastic);
		if ($this->isColumnModified(PlasticBagPeer::BY_WHO)) $criteria->add(PlasticBagPeer::BY_WHO, $this->by_who);
		if ($this->isColumnModified(PlasticBagPeer::SURFACE_AREA)) $criteria->add(PlasticBagPeer::SURFACE_AREA, $this->surface_area);
		if ($this->isColumnModified(PlasticBagPeer::VENDOR)) $criteria->add(PlasticBagPeer::VENDOR, $this->vendor);
		if ($this->isColumnModified(PlasticBagPeer::VOL_IN_ML)) $criteria->add(PlasticBagPeer::VOL_IN_ML, $this->vol_in_ml);
		if ($this->isColumnModified(PlasticBagPeer::LPC_BLANK_IN_ML)) $criteria->add(PlasticBagPeer::LPC_BLANK_IN_ML, $this->lpc_blank_in_ml);
		if ($this->isColumnModified(PlasticBagPeer::LPC_PLASTIC_IN_ML)) $criteria->add(PlasticBagPeer::LPC_PLASTIC_IN_ML, $this->lpc_plastic_in_ml);
		if ($this->isColumnModified(PlasticBagPeer::LPC_PLASTIC_IN_CM)) $criteria->add(PlasticBagPeer::LPC_PLASTIC_IN_CM, $this->lpc_plastic_in_cm);
		if ($this->isColumnModified(PlasticBagPeer::IC_CL_IN_CM)) $criteria->add(PlasticBagPeer::IC_CL_IN_CM, $this->ic_cl_in_cm);
		if ($this->isColumnModified(PlasticBagPeer::IC_NO_IN_CM)) $criteria->add(PlasticBagPeer::IC_NO_IN_CM, $this->ic_no_in_cm);
		if ($this->isColumnModified(PlasticBagPeer::IC_SO_IN_CM)) $criteria->add(PlasticBagPeer::IC_SO_IN_CM, $this->ic_so_in_cm);
		if ($this->isColumnModified(PlasticBagPeer::STATUS)) $criteria->add(PlasticBagPeer::STATUS, $this->status);
		if ($this->isColumnModified(PlasticBagPeer::DATE_CREATED)) $criteria->add(PlasticBagPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(PlasticBagPeer::CREATED_BY)) $criteria->add(PlasticBagPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(PlasticBagPeer::DATE_MODIFIED)) $criteria->add(PlasticBagPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(PlasticBagPeer::MODIFIED_BY)) $criteria->add(PlasticBagPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PlasticBagPeer::DATABASE_NAME);

		$criteria->add(PlasticBagPeer::ID, $this->id);

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

		$copyObj->setTypeOfPlastic($this->type_of_plastic);

		$copyObj->setByWho($this->by_who);

		$copyObj->setSurfaceArea($this->surface_area);

		$copyObj->setVendor($this->vendor);

		$copyObj->setVolInMl($this->vol_in_ml);

		$copyObj->setLpcBlankInMl($this->lpc_blank_in_ml);

		$copyObj->setLpcPlasticInMl($this->lpc_plastic_in_ml);

		$copyObj->setLpcPlasticInCm($this->lpc_plastic_in_cm);

		$copyObj->setIcClInCm($this->ic_cl_in_cm);

		$copyObj->setIcNoInCm($this->ic_no_in_cm);

		$copyObj->setIcSoInCm($this->ic_so_in_cm);

		$copyObj->setStatus($this->status);

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
			self::$peer = new PlasticBagPeer();
		}
		return self::$peer;
	}

} 
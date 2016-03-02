<?php


abstract class BaseTkWorktemplateDetail extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $day;


	
	protected $is_working;


	
	protected $date_det;


	
	protected $tk_worktemplate_no;


	
	protected $created_by;


	
	protected $date_created;


	
	protected $modified_by;


	
	protected $date_modified;

	
	protected $aTkWorktemplate;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getDay()
	{

		return $this->day;
	}

	
	public function getIsWorking()
	{

		return $this->is_working;
	}

	
	public function getDateDet($format = 'Y-m-d')
	{

		if ($this->date_det === null || $this->date_det === '') {
			return null;
		} elseif (!is_int($this->date_det)) {
						$ts = strtotime($this->date_det);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_det] as date/time value: " . var_export($this->date_det, true));
			}
		} else {
			$ts = $this->date_det;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getTkWorktemplateNo()
	{

		return $this->tk_worktemplate_no;
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

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TkWorktemplateDetailPeer::ID;
		}

	} 
	
	public function setDay($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->day !== $v) {
			$this->day = $v;
			$this->modifiedColumns[] = TkWorktemplateDetailPeer::DAY;
		}

	} 
	
	public function setIsWorking($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->is_working !== $v) {
			$this->is_working = $v;
			$this->modifiedColumns[] = TkWorktemplateDetailPeer::IS_WORKING;
		}

	} 
	
	public function setDateDet($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_det] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_det !== $ts) {
			$this->date_det = $ts;
			$this->modifiedColumns[] = TkWorktemplateDetailPeer::DATE_DET;
		}

	} 
	
	public function setTkWorktemplateNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tk_worktemplate_no !== $v) {
			$this->tk_worktemplate_no = $v;
			$this->modifiedColumns[] = TkWorktemplateDetailPeer::TK_WORKTEMPLATE_NO;
		}

		if ($this->aTkWorktemplate !== null && $this->aTkWorktemplate->getWorktempNo() !== $v) {
			$this->aTkWorktemplate = null;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = TkWorktemplateDetailPeer::CREATED_BY;
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
			$this->modifiedColumns[] = TkWorktemplateDetailPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = TkWorktemplateDetailPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = TkWorktemplateDetailPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->day = $rs->getInt($startcol + 1);

			$this->is_working = $rs->getInt($startcol + 2);

			$this->date_det = $rs->getDate($startcol + 3, null);

			$this->tk_worktemplate_no = $rs->getString($startcol + 4);

			$this->created_by = $rs->getString($startcol + 5);

			$this->date_created = $rs->getTimestamp($startcol + 6, null);

			$this->modified_by = $rs->getString($startcol + 7);

			$this->date_modified = $rs->getTimestamp($startcol + 8, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TkWorktemplateDetail object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TkWorktemplateDetailPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TkWorktemplateDetailPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TkWorktemplateDetailPeer::DATABASE_NAME);
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


												
			if ($this->aTkWorktemplate !== null) {
				if ($this->aTkWorktemplate->isModified()) {
					$affectedRows += $this->aTkWorktemplate->save($con);
				}
				$this->setTkWorktemplate($this->aTkWorktemplate);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TkWorktemplateDetailPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TkWorktemplateDetailPeer::doUpdate($this, $con);
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


												
			if ($this->aTkWorktemplate !== null) {
				if (!$this->aTkWorktemplate->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTkWorktemplate->getValidationFailures());
				}
			}


			if (($retval = TkWorktemplateDetailPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TkWorktemplateDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getDay();
				break;
			case 2:
				return $this->getIsWorking();
				break;
			case 3:
				return $this->getDateDet();
				break;
			case 4:
				return $this->getTkWorktemplateNo();
				break;
			case 5:
				return $this->getCreatedBy();
				break;
			case 6:
				return $this->getDateCreated();
				break;
			case 7:
				return $this->getModifiedBy();
				break;
			case 8:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TkWorktemplateDetailPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDay(),
			$keys[2] => $this->getIsWorking(),
			$keys[3] => $this->getDateDet(),
			$keys[4] => $this->getTkWorktemplateNo(),
			$keys[5] => $this->getCreatedBy(),
			$keys[6] => $this->getDateCreated(),
			$keys[7] => $this->getModifiedBy(),
			$keys[8] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TkWorktemplateDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setDay($value);
				break;
			case 2:
				$this->setIsWorking($value);
				break;
			case 3:
				$this->setDateDet($value);
				break;
			case 4:
				$this->setTkWorktemplateNo($value);
				break;
			case 5:
				$this->setCreatedBy($value);
				break;
			case 6:
				$this->setDateCreated($value);
				break;
			case 7:
				$this->setModifiedBy($value);
				break;
			case 8:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TkWorktemplateDetailPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDay($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIsWorking($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateDet($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTkWorktemplateNo($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedBy($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateCreated($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setModifiedBy($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateModified($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TkWorktemplateDetailPeer::DATABASE_NAME);

		if ($this->isColumnModified(TkWorktemplateDetailPeer::ID)) $criteria->add(TkWorktemplateDetailPeer::ID, $this->id);
		if ($this->isColumnModified(TkWorktemplateDetailPeer::DAY)) $criteria->add(TkWorktemplateDetailPeer::DAY, $this->day);
		if ($this->isColumnModified(TkWorktemplateDetailPeer::IS_WORKING)) $criteria->add(TkWorktemplateDetailPeer::IS_WORKING, $this->is_working);
		if ($this->isColumnModified(TkWorktemplateDetailPeer::DATE_DET)) $criteria->add(TkWorktemplateDetailPeer::DATE_DET, $this->date_det);
		if ($this->isColumnModified(TkWorktemplateDetailPeer::TK_WORKTEMPLATE_NO)) $criteria->add(TkWorktemplateDetailPeer::TK_WORKTEMPLATE_NO, $this->tk_worktemplate_no);
		if ($this->isColumnModified(TkWorktemplateDetailPeer::CREATED_BY)) $criteria->add(TkWorktemplateDetailPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(TkWorktemplateDetailPeer::DATE_CREATED)) $criteria->add(TkWorktemplateDetailPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(TkWorktemplateDetailPeer::MODIFIED_BY)) $criteria->add(TkWorktemplateDetailPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(TkWorktemplateDetailPeer::DATE_MODIFIED)) $criteria->add(TkWorktemplateDetailPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TkWorktemplateDetailPeer::DATABASE_NAME);

		$criteria->add(TkWorktemplateDetailPeer::ID, $this->id);

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

		$copyObj->setDay($this->day);

		$copyObj->setIsWorking($this->is_working);

		$copyObj->setDateDet($this->date_det);

		$copyObj->setTkWorktemplateNo($this->tk_worktemplate_no);

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
			self::$peer = new TkWorktemplateDetailPeer();
		}
		return self::$peer;
	}

	
	public function setTkWorktemplate($v)
	{


		if ($v === null) {
			$this->setTkWorktemplateNo(NULL);
		} else {
			$this->setTkWorktemplateNo($v->getWorktempNo());
		}


		$this->aTkWorktemplate = $v;
	}


	
	public function getTkWorktemplate($con = null)
	{
		if ($this->aTkWorktemplate === null && (($this->tk_worktemplate_no !== "" && $this->tk_worktemplate_no !== null))) {
						include_once 'lib/model/hr/om/BaseTkWorktemplatePeer.php';

			$this->aTkWorktemplate = TkWorktemplatePeer::retrieveByPK($this->tk_worktemplate_no, $con);

			
		}
		return $this->aTkWorktemplate;
	}

} 
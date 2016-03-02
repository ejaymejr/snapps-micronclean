<?php


abstract class BaseBacteriaTest extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trans_date;


	
	protected $cleanroom;


	
	protected $area_a;


	
	protected $area_b;


	
	protected $folding_table_a;


	
	protected $folding_table_b;


	
	protected $customer;


	
	protected $garment;


	
	protected $checked_by;


	
	protected $verified_by;


	
	protected $remark;


	
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

	
	public function getTransDate($format = 'Y-m-d H:i:s')
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

	
	public function getCleanroom()
	{

		return $this->cleanroom;
	}

	
	public function getAreaA()
	{

		return $this->area_a;
	}

	
	public function getAreaB()
	{

		return $this->area_b;
	}

	
	public function getFoldingTableA()
	{

		return $this->folding_table_a;
	}

	
	public function getFoldingTableB()
	{

		return $this->folding_table_b;
	}

	
	public function getCustomer()
	{

		return $this->customer;
	}

	
	public function getGarment()
	{

		return $this->garment;
	}

	
	public function getCheckedBy()
	{

		return $this->checked_by;
	}

	
	public function getVerifiedBy()
	{

		return $this->verified_by;
	}

	
	public function getRemark()
	{

		return $this->remark;
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
			$this->modifiedColumns[] = BacteriaTestPeer::ID;
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
			$this->modifiedColumns[] = BacteriaTestPeer::TRANS_DATE;
		}

	} 
	
	public function setCleanroom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cleanroom !== $v) {
			$this->cleanroom = $v;
			$this->modifiedColumns[] = BacteriaTestPeer::CLEANROOM;
		}

	} 
	
	public function setAreaA($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->area_a !== $v) {
			$this->area_a = $v;
			$this->modifiedColumns[] = BacteriaTestPeer::AREA_A;
		}

	} 
	
	public function setAreaB($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->area_b !== $v) {
			$this->area_b = $v;
			$this->modifiedColumns[] = BacteriaTestPeer::AREA_B;
		}

	} 
	
	public function setFoldingTableA($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->folding_table_a !== $v) {
			$this->folding_table_a = $v;
			$this->modifiedColumns[] = BacteriaTestPeer::FOLDING_TABLE_A;
		}

	} 
	
	public function setFoldingTableB($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->folding_table_b !== $v) {
			$this->folding_table_b = $v;
			$this->modifiedColumns[] = BacteriaTestPeer::FOLDING_TABLE_B;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v) {
			$this->customer = $v;
			$this->modifiedColumns[] = BacteriaTestPeer::CUSTOMER;
		}

	} 
	
	public function setGarment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment !== $v) {
			$this->garment = $v;
			$this->modifiedColumns[] = BacteriaTestPeer::GARMENT;
		}

	} 
	
	public function setCheckedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->checked_by !== $v) {
			$this->checked_by = $v;
			$this->modifiedColumns[] = BacteriaTestPeer::CHECKED_BY;
		}

	} 
	
	public function setVerifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->verified_by !== $v) {
			$this->verified_by = $v;
			$this->modifiedColumns[] = BacteriaTestPeer::VERIFIED_BY;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = BacteriaTestPeer::REMARK;
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
			$this->modifiedColumns[] = BacteriaTestPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = BacteriaTestPeer::CREATED_BY;
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
			$this->modifiedColumns[] = BacteriaTestPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = BacteriaTestPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trans_date = $rs->getTimestamp($startcol + 1, null);

			$this->cleanroom = $rs->getString($startcol + 2);

			$this->area_a = $rs->getString($startcol + 3);

			$this->area_b = $rs->getString($startcol + 4);

			$this->folding_table_a = $rs->getString($startcol + 5);

			$this->folding_table_b = $rs->getString($startcol + 6);

			$this->customer = $rs->getString($startcol + 7);

			$this->garment = $rs->getString($startcol + 8);

			$this->checked_by = $rs->getString($startcol + 9);

			$this->verified_by = $rs->getString($startcol + 10);

			$this->remark = $rs->getString($startcol + 11);

			$this->date_created = $rs->getTimestamp($startcol + 12, null);

			$this->created_by = $rs->getString($startcol + 13);

			$this->date_modified = $rs->getTimestamp($startcol + 14, null);

			$this->modified_by = $rs->getString($startcol + 15);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating BacteriaTest object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(BacteriaTestPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			BacteriaTestPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(BacteriaTestPeer::DATABASE_NAME);
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
					$pk = BacteriaTestPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += BacteriaTestPeer::doUpdate($this, $con);
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


			if (($retval = BacteriaTestPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = BacteriaTestPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCleanroom();
				break;
			case 3:
				return $this->getAreaA();
				break;
			case 4:
				return $this->getAreaB();
				break;
			case 5:
				return $this->getFoldingTableA();
				break;
			case 6:
				return $this->getFoldingTableB();
				break;
			case 7:
				return $this->getCustomer();
				break;
			case 8:
				return $this->getGarment();
				break;
			case 9:
				return $this->getCheckedBy();
				break;
			case 10:
				return $this->getVerifiedBy();
				break;
			case 11:
				return $this->getRemark();
				break;
			case 12:
				return $this->getDateCreated();
				break;
			case 13:
				return $this->getCreatedBy();
				break;
			case 14:
				return $this->getDateModified();
				break;
			case 15:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BacteriaTestPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTransDate(),
			$keys[2] => $this->getCleanroom(),
			$keys[3] => $this->getAreaA(),
			$keys[4] => $this->getAreaB(),
			$keys[5] => $this->getFoldingTableA(),
			$keys[6] => $this->getFoldingTableB(),
			$keys[7] => $this->getCustomer(),
			$keys[8] => $this->getGarment(),
			$keys[9] => $this->getCheckedBy(),
			$keys[10] => $this->getVerifiedBy(),
			$keys[11] => $this->getRemark(),
			$keys[12] => $this->getDateCreated(),
			$keys[13] => $this->getCreatedBy(),
			$keys[14] => $this->getDateModified(),
			$keys[15] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = BacteriaTestPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCleanroom($value);
				break;
			case 3:
				$this->setAreaA($value);
				break;
			case 4:
				$this->setAreaB($value);
				break;
			case 5:
				$this->setFoldingTableA($value);
				break;
			case 6:
				$this->setFoldingTableB($value);
				break;
			case 7:
				$this->setCustomer($value);
				break;
			case 8:
				$this->setGarment($value);
				break;
			case 9:
				$this->setCheckedBy($value);
				break;
			case 10:
				$this->setVerifiedBy($value);
				break;
			case 11:
				$this->setRemark($value);
				break;
			case 12:
				$this->setDateCreated($value);
				break;
			case 13:
				$this->setCreatedBy($value);
				break;
			case 14:
				$this->setDateModified($value);
				break;
			case 15:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BacteriaTestPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTransDate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCleanroom($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAreaA($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAreaB($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFoldingTableA($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFoldingTableB($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCustomer($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setGarment($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCheckedBy($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setVerifiedBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setRemark($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDateCreated($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCreatedBy($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateModified($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setModifiedBy($arr[$keys[15]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(BacteriaTestPeer::DATABASE_NAME);

		if ($this->isColumnModified(BacteriaTestPeer::ID)) $criteria->add(BacteriaTestPeer::ID, $this->id);
		if ($this->isColumnModified(BacteriaTestPeer::TRANS_DATE)) $criteria->add(BacteriaTestPeer::TRANS_DATE, $this->trans_date);
		if ($this->isColumnModified(BacteriaTestPeer::CLEANROOM)) $criteria->add(BacteriaTestPeer::CLEANROOM, $this->cleanroom);
		if ($this->isColumnModified(BacteriaTestPeer::AREA_A)) $criteria->add(BacteriaTestPeer::AREA_A, $this->area_a);
		if ($this->isColumnModified(BacteriaTestPeer::AREA_B)) $criteria->add(BacteriaTestPeer::AREA_B, $this->area_b);
		if ($this->isColumnModified(BacteriaTestPeer::FOLDING_TABLE_A)) $criteria->add(BacteriaTestPeer::FOLDING_TABLE_A, $this->folding_table_a);
		if ($this->isColumnModified(BacteriaTestPeer::FOLDING_TABLE_B)) $criteria->add(BacteriaTestPeer::FOLDING_TABLE_B, $this->folding_table_b);
		if ($this->isColumnModified(BacteriaTestPeer::CUSTOMER)) $criteria->add(BacteriaTestPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(BacteriaTestPeer::GARMENT)) $criteria->add(BacteriaTestPeer::GARMENT, $this->garment);
		if ($this->isColumnModified(BacteriaTestPeer::CHECKED_BY)) $criteria->add(BacteriaTestPeer::CHECKED_BY, $this->checked_by);
		if ($this->isColumnModified(BacteriaTestPeer::VERIFIED_BY)) $criteria->add(BacteriaTestPeer::VERIFIED_BY, $this->verified_by);
		if ($this->isColumnModified(BacteriaTestPeer::REMARK)) $criteria->add(BacteriaTestPeer::REMARK, $this->remark);
		if ($this->isColumnModified(BacteriaTestPeer::DATE_CREATED)) $criteria->add(BacteriaTestPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(BacteriaTestPeer::CREATED_BY)) $criteria->add(BacteriaTestPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(BacteriaTestPeer::DATE_MODIFIED)) $criteria->add(BacteriaTestPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(BacteriaTestPeer::MODIFIED_BY)) $criteria->add(BacteriaTestPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(BacteriaTestPeer::DATABASE_NAME);

		$criteria->add(BacteriaTestPeer::ID, $this->id);

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

		$copyObj->setCleanroom($this->cleanroom);

		$copyObj->setAreaA($this->area_a);

		$copyObj->setAreaB($this->area_b);

		$copyObj->setFoldingTableA($this->folding_table_a);

		$copyObj->setFoldingTableB($this->folding_table_b);

		$copyObj->setCustomer($this->customer);

		$copyObj->setGarment($this->garment);

		$copyObj->setCheckedBy($this->checked_by);

		$copyObj->setVerifiedBy($this->verified_by);

		$copyObj->setRemark($this->remark);

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
			self::$peer = new BacteriaTestPeer();
		}
		return self::$peer;
	}

} 
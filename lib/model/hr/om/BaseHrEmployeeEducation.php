<?php


abstract class BaseHrEmployeeEducation extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $employee_no;


	
	protected $name;


	
	protected $primary;


	
	protected $primary_grade;


	
	protected $secondary;


	
	protected $secondary_grade;


	
	protected $tertiary;


	
	protected $tertiary_grade;


	
	protected $jr_college;


	
	protected $jr_college_grade;


	
	protected $post_graduate;


	
	protected $post_graduate_grade;


	
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

	
	public function getEmployeeNo()
	{

		return $this->employee_no;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getPrimary()
	{

		return $this->primary;
	}

	
	public function getPrimaryGrade()
	{

		return $this->primary_grade;
	}

	
	public function getSecondary()
	{

		return $this->secondary;
	}

	
	public function getSecondaryGrade()
	{

		return $this->secondary_grade;
	}

	
	public function getTertiary()
	{

		return $this->tertiary;
	}

	
	public function getTertiaryGrade()
	{

		return $this->tertiary_grade;
	}

	
	public function getJrCollege()
	{

		return $this->jr_college;
	}

	
	public function getJrCollegeGrade()
	{

		return $this->jr_college_grade;
	}

	
	public function getPostGraduate()
	{

		return $this->post_graduate;
	}

	
	public function getPostGraduateGrade()
	{

		return $this->post_graduate_grade;
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
			$this->modifiedColumns[] = HrEmployeeEducationPeer::ID;
		}

	} 
	
	public function setEmployeeNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_no !== $v) {
			$this->employee_no = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::EMPLOYEE_NO;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::NAME;
		}

	} 
	
	public function setPrimary($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->primary !== $v) {
			$this->primary = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::PRIMARY;
		}

	} 
	
	public function setPrimaryGrade($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->primary_grade !== $v) {
			$this->primary_grade = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::PRIMARY_GRADE;
		}

	} 
	
	public function setSecondary($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->secondary !== $v) {
			$this->secondary = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::SECONDARY;
		}

	} 
	
	public function setSecondaryGrade($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->secondary_grade !== $v) {
			$this->secondary_grade = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::SECONDARY_GRADE;
		}

	} 
	
	public function setTertiary($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tertiary !== $v) {
			$this->tertiary = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::TERTIARY;
		}

	} 
	
	public function setTertiaryGrade($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tertiary_grade !== $v) {
			$this->tertiary_grade = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::TERTIARY_GRADE;
		}

	} 
	
	public function setJrCollege($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jr_college !== $v) {
			$this->jr_college = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::JR_COLLEGE;
		}

	} 
	
	public function setJrCollegeGrade($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jr_college_grade !== $v) {
			$this->jr_college_grade = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::JR_COLLEGE_GRADE;
		}

	} 
	
	public function setPostGraduate($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->post_graduate !== $v) {
			$this->post_graduate = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::POST_GRADUATE;
		}

	} 
	
	public function setPostGraduateGrade($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->post_graduate_grade !== $v) {
			$this->post_graduate_grade = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::POST_GRADUATE_GRADE;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::CREATED_BY;
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
			$this->modifiedColumns[] = HrEmployeeEducationPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = HrEmployeeEducationPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = HrEmployeeEducationPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getString($startcol + 0);

			$this->employee_no = $rs->getString($startcol + 1);

			$this->name = $rs->getString($startcol + 2);

			$this->primary = $rs->getString($startcol + 3);

			$this->primary_grade = $rs->getString($startcol + 4);

			$this->secondary = $rs->getString($startcol + 5);

			$this->secondary_grade = $rs->getString($startcol + 6);

			$this->tertiary = $rs->getString($startcol + 7);

			$this->tertiary_grade = $rs->getString($startcol + 8);

			$this->jr_college = $rs->getString($startcol + 9);

			$this->jr_college_grade = $rs->getString($startcol + 10);

			$this->post_graduate = $rs->getString($startcol + 11);

			$this->post_graduate_grade = $rs->getString($startcol + 12);

			$this->created_by = $rs->getString($startcol + 13);

			$this->date_created = $rs->getTimestamp($startcol + 14, null);

			$this->modified_by = $rs->getString($startcol + 15);

			$this->date_modified = $rs->getTimestamp($startcol + 16, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 17; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HrEmployeeEducation object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HrEmployeeEducationPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HrEmployeeEducationPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HrEmployeeEducationPeer::DATABASE_NAME);
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
					$pk = HrEmployeeEducationPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HrEmployeeEducationPeer::doUpdate($this, $con);
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


			if (($retval = HrEmployeeEducationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrEmployeeEducationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getEmployeeNo();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getPrimary();
				break;
			case 4:
				return $this->getPrimaryGrade();
				break;
			case 5:
				return $this->getSecondary();
				break;
			case 6:
				return $this->getSecondaryGrade();
				break;
			case 7:
				return $this->getTertiary();
				break;
			case 8:
				return $this->getTertiaryGrade();
				break;
			case 9:
				return $this->getJrCollege();
				break;
			case 10:
				return $this->getJrCollegeGrade();
				break;
			case 11:
				return $this->getPostGraduate();
				break;
			case 12:
				return $this->getPostGraduateGrade();
				break;
			case 13:
				return $this->getCreatedBy();
				break;
			case 14:
				return $this->getDateCreated();
				break;
			case 15:
				return $this->getModifiedBy();
				break;
			case 16:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrEmployeeEducationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEmployeeNo(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getPrimary(),
			$keys[4] => $this->getPrimaryGrade(),
			$keys[5] => $this->getSecondary(),
			$keys[6] => $this->getSecondaryGrade(),
			$keys[7] => $this->getTertiary(),
			$keys[8] => $this->getTertiaryGrade(),
			$keys[9] => $this->getJrCollege(),
			$keys[10] => $this->getJrCollegeGrade(),
			$keys[11] => $this->getPostGraduate(),
			$keys[12] => $this->getPostGraduateGrade(),
			$keys[13] => $this->getCreatedBy(),
			$keys[14] => $this->getDateCreated(),
			$keys[15] => $this->getModifiedBy(),
			$keys[16] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HrEmployeeEducationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setEmployeeNo($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setPrimary($value);
				break;
			case 4:
				$this->setPrimaryGrade($value);
				break;
			case 5:
				$this->setSecondary($value);
				break;
			case 6:
				$this->setSecondaryGrade($value);
				break;
			case 7:
				$this->setTertiary($value);
				break;
			case 8:
				$this->setTertiaryGrade($value);
				break;
			case 9:
				$this->setJrCollege($value);
				break;
			case 10:
				$this->setJrCollegeGrade($value);
				break;
			case 11:
				$this->setPostGraduate($value);
				break;
			case 12:
				$this->setPostGraduateGrade($value);
				break;
			case 13:
				$this->setCreatedBy($value);
				break;
			case 14:
				$this->setDateCreated($value);
				break;
			case 15:
				$this->setModifiedBy($value);
				break;
			case 16:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HrEmployeeEducationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEmployeeNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPrimary($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPrimaryGrade($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSecondary($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSecondaryGrade($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTertiary($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTertiaryGrade($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setJrCollege($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setJrCollegeGrade($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPostGraduate($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setPostGraduateGrade($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCreatedBy($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateCreated($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setModifiedBy($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDateModified($arr[$keys[16]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HrEmployeeEducationPeer::DATABASE_NAME);

		if ($this->isColumnModified(HrEmployeeEducationPeer::ID)) $criteria->add(HrEmployeeEducationPeer::ID, $this->id);
		if ($this->isColumnModified(HrEmployeeEducationPeer::EMPLOYEE_NO)) $criteria->add(HrEmployeeEducationPeer::EMPLOYEE_NO, $this->employee_no);
		if ($this->isColumnModified(HrEmployeeEducationPeer::NAME)) $criteria->add(HrEmployeeEducationPeer::NAME, $this->name);
		if ($this->isColumnModified(HrEmployeeEducationPeer::PRIMARY)) $criteria->add(HrEmployeeEducationPeer::PRIMARY, $this->primary);
		if ($this->isColumnModified(HrEmployeeEducationPeer::PRIMARY_GRADE)) $criteria->add(HrEmployeeEducationPeer::PRIMARY_GRADE, $this->primary_grade);
		if ($this->isColumnModified(HrEmployeeEducationPeer::SECONDARY)) $criteria->add(HrEmployeeEducationPeer::SECONDARY, $this->secondary);
		if ($this->isColumnModified(HrEmployeeEducationPeer::SECONDARY_GRADE)) $criteria->add(HrEmployeeEducationPeer::SECONDARY_GRADE, $this->secondary_grade);
		if ($this->isColumnModified(HrEmployeeEducationPeer::TERTIARY)) $criteria->add(HrEmployeeEducationPeer::TERTIARY, $this->tertiary);
		if ($this->isColumnModified(HrEmployeeEducationPeer::TERTIARY_GRADE)) $criteria->add(HrEmployeeEducationPeer::TERTIARY_GRADE, $this->tertiary_grade);
		if ($this->isColumnModified(HrEmployeeEducationPeer::JR_COLLEGE)) $criteria->add(HrEmployeeEducationPeer::JR_COLLEGE, $this->jr_college);
		if ($this->isColumnModified(HrEmployeeEducationPeer::JR_COLLEGE_GRADE)) $criteria->add(HrEmployeeEducationPeer::JR_COLLEGE_GRADE, $this->jr_college_grade);
		if ($this->isColumnModified(HrEmployeeEducationPeer::POST_GRADUATE)) $criteria->add(HrEmployeeEducationPeer::POST_GRADUATE, $this->post_graduate);
		if ($this->isColumnModified(HrEmployeeEducationPeer::POST_GRADUATE_GRADE)) $criteria->add(HrEmployeeEducationPeer::POST_GRADUATE_GRADE, $this->post_graduate_grade);
		if ($this->isColumnModified(HrEmployeeEducationPeer::CREATED_BY)) $criteria->add(HrEmployeeEducationPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(HrEmployeeEducationPeer::DATE_CREATED)) $criteria->add(HrEmployeeEducationPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(HrEmployeeEducationPeer::MODIFIED_BY)) $criteria->add(HrEmployeeEducationPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(HrEmployeeEducationPeer::DATE_MODIFIED)) $criteria->add(HrEmployeeEducationPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HrEmployeeEducationPeer::DATABASE_NAME);

		$criteria->add(HrEmployeeEducationPeer::ID, $this->id);

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

		$copyObj->setEmployeeNo($this->employee_no);

		$copyObj->setName($this->name);

		$copyObj->setPrimary($this->primary);

		$copyObj->setPrimaryGrade($this->primary_grade);

		$copyObj->setSecondary($this->secondary);

		$copyObj->setSecondaryGrade($this->secondary_grade);

		$copyObj->setTertiary($this->tertiary);

		$copyObj->setTertiaryGrade($this->tertiary_grade);

		$copyObj->setJrCollege($this->jr_college);

		$copyObj->setJrCollegeGrade($this->jr_college_grade);

		$copyObj->setPostGraduate($this->post_graduate);

		$copyObj->setPostGraduateGrade($this->post_graduate_grade);

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
			self::$peer = new HrEmployeeEducationPeer();
		}
		return self::$peer;
	}

} 
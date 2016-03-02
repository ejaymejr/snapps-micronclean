<?php


abstract class BaseLabelPreviewDetail extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $labeling_template_id;


	
	protected $line1_col1;


	
	protected $line1_col2;


	
	protected $line2_col1;


	
	protected $line2_col2;


	
	protected $line3_col1;


	
	protected $line3_col2;


	
	protected $line4_col1;


	
	protected $line4_col2;


	
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

	
	public function getLabelingTemplateId()
	{

		return $this->labeling_template_id;
	}

	
	public function getLine1Col1()
	{

		return $this->line1_col1;
	}

	
	public function getLine1Col2()
	{

		return $this->line1_col2;
	}

	
	public function getLine2Col1()
	{

		return $this->line2_col1;
	}

	
	public function getLine2Col2()
	{

		return $this->line2_col2;
	}

	
	public function getLine3Col1()
	{

		return $this->line3_col1;
	}

	
	public function getLine3Col2()
	{

		return $this->line3_col2;
	}

	
	public function getLine4Col1()
	{

		return $this->line4_col1;
	}

	
	public function getLine4Col2()
	{

		return $this->line4_col2;
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
			$this->modifiedColumns[] = LabelPreviewDetailPeer::ID;
		}

	} 
	
	public function setLabelingTemplateId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->labeling_template_id !== $v) {
			$this->labeling_template_id = $v;
			$this->modifiedColumns[] = LabelPreviewDetailPeer::LABELING_TEMPLATE_ID;
		}

	} 
	
	public function setLine1Col1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line1_col1 !== $v) {
			$this->line1_col1 = $v;
			$this->modifiedColumns[] = LabelPreviewDetailPeer::LINE1_COL1;
		}

	} 
	
	public function setLine1Col2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line1_col2 !== $v) {
			$this->line1_col2 = $v;
			$this->modifiedColumns[] = LabelPreviewDetailPeer::LINE1_COL2;
		}

	} 
	
	public function setLine2Col1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line2_col1 !== $v) {
			$this->line2_col1 = $v;
			$this->modifiedColumns[] = LabelPreviewDetailPeer::LINE2_COL1;
		}

	} 
	
	public function setLine2Col2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line2_col2 !== $v) {
			$this->line2_col2 = $v;
			$this->modifiedColumns[] = LabelPreviewDetailPeer::LINE2_COL2;
		}

	} 
	
	public function setLine3Col1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line3_col1 !== $v) {
			$this->line3_col1 = $v;
			$this->modifiedColumns[] = LabelPreviewDetailPeer::LINE3_COL1;
		}

	} 
	
	public function setLine3Col2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line3_col2 !== $v) {
			$this->line3_col2 = $v;
			$this->modifiedColumns[] = LabelPreviewDetailPeer::LINE3_COL2;
		}

	} 
	
	public function setLine4Col1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line4_col1 !== $v) {
			$this->line4_col1 = $v;
			$this->modifiedColumns[] = LabelPreviewDetailPeer::LINE4_COL1;
		}

	} 
	
	public function setLine4Col2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->line4_col2 !== $v) {
			$this->line4_col2 = $v;
			$this->modifiedColumns[] = LabelPreviewDetailPeer::LINE4_COL2;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = LabelPreviewDetailPeer::CREATED_BY;
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
			$this->modifiedColumns[] = LabelPreviewDetailPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = LabelPreviewDetailPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = LabelPreviewDetailPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->labeling_template_id = $rs->getString($startcol + 1);

			$this->line1_col1 = $rs->getString($startcol + 2);

			$this->line1_col2 = $rs->getString($startcol + 3);

			$this->line2_col1 = $rs->getString($startcol + 4);

			$this->line2_col2 = $rs->getString($startcol + 5);

			$this->line3_col1 = $rs->getString($startcol + 6);

			$this->line3_col2 = $rs->getString($startcol + 7);

			$this->line4_col1 = $rs->getString($startcol + 8);

			$this->line4_col2 = $rs->getString($startcol + 9);

			$this->created_by = $rs->getString($startcol + 10);

			$this->date_created = $rs->getTimestamp($startcol + 11, null);

			$this->modified_by = $rs->getString($startcol + 12);

			$this->date_modified = $rs->getTimestamp($startcol + 13, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 14; 
		} catch (Exception $e) {
			throw new PropelException("Error populating LabelPreviewDetail object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(LabelPreviewDetailPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			LabelPreviewDetailPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(LabelPreviewDetailPeer::DATABASE_NAME);
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
					$pk = LabelPreviewDetailPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += LabelPreviewDetailPeer::doUpdate($this, $con);
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


			if (($retval = LabelPreviewDetailPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LabelPreviewDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getLabelingTemplateId();
				break;
			case 2:
				return $this->getLine1Col1();
				break;
			case 3:
				return $this->getLine1Col2();
				break;
			case 4:
				return $this->getLine2Col1();
				break;
			case 5:
				return $this->getLine2Col2();
				break;
			case 6:
				return $this->getLine3Col1();
				break;
			case 7:
				return $this->getLine3Col2();
				break;
			case 8:
				return $this->getLine4Col1();
				break;
			case 9:
				return $this->getLine4Col2();
				break;
			case 10:
				return $this->getCreatedBy();
				break;
			case 11:
				return $this->getDateCreated();
				break;
			case 12:
				return $this->getModifiedBy();
				break;
			case 13:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LabelPreviewDetailPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getLabelingTemplateId(),
			$keys[2] => $this->getLine1Col1(),
			$keys[3] => $this->getLine1Col2(),
			$keys[4] => $this->getLine2Col1(),
			$keys[5] => $this->getLine2Col2(),
			$keys[6] => $this->getLine3Col1(),
			$keys[7] => $this->getLine3Col2(),
			$keys[8] => $this->getLine4Col1(),
			$keys[9] => $this->getLine4Col2(),
			$keys[10] => $this->getCreatedBy(),
			$keys[11] => $this->getDateCreated(),
			$keys[12] => $this->getModifiedBy(),
			$keys[13] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LabelPreviewDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setLabelingTemplateId($value);
				break;
			case 2:
				$this->setLine1Col1($value);
				break;
			case 3:
				$this->setLine1Col2($value);
				break;
			case 4:
				$this->setLine2Col1($value);
				break;
			case 5:
				$this->setLine2Col2($value);
				break;
			case 6:
				$this->setLine3Col1($value);
				break;
			case 7:
				$this->setLine3Col2($value);
				break;
			case 8:
				$this->setLine4Col1($value);
				break;
			case 9:
				$this->setLine4Col2($value);
				break;
			case 10:
				$this->setCreatedBy($value);
				break;
			case 11:
				$this->setDateCreated($value);
				break;
			case 12:
				$this->setModifiedBy($value);
				break;
			case 13:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LabelPreviewDetailPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setLabelingTemplateId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setLine1Col1($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setLine1Col2($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setLine2Col1($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLine2Col2($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setLine3Col1($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setLine3Col2($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setLine4Col1($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setLine4Col2($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCreatedBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDateCreated($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setModifiedBy($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDateModified($arr[$keys[13]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(LabelPreviewDetailPeer::DATABASE_NAME);

		if ($this->isColumnModified(LabelPreviewDetailPeer::ID)) $criteria->add(LabelPreviewDetailPeer::ID, $this->id);
		if ($this->isColumnModified(LabelPreviewDetailPeer::LABELING_TEMPLATE_ID)) $criteria->add(LabelPreviewDetailPeer::LABELING_TEMPLATE_ID, $this->labeling_template_id);
		if ($this->isColumnModified(LabelPreviewDetailPeer::LINE1_COL1)) $criteria->add(LabelPreviewDetailPeer::LINE1_COL1, $this->line1_col1);
		if ($this->isColumnModified(LabelPreviewDetailPeer::LINE1_COL2)) $criteria->add(LabelPreviewDetailPeer::LINE1_COL2, $this->line1_col2);
		if ($this->isColumnModified(LabelPreviewDetailPeer::LINE2_COL1)) $criteria->add(LabelPreviewDetailPeer::LINE2_COL1, $this->line2_col1);
		if ($this->isColumnModified(LabelPreviewDetailPeer::LINE2_COL2)) $criteria->add(LabelPreviewDetailPeer::LINE2_COL2, $this->line2_col2);
		if ($this->isColumnModified(LabelPreviewDetailPeer::LINE3_COL1)) $criteria->add(LabelPreviewDetailPeer::LINE3_COL1, $this->line3_col1);
		if ($this->isColumnModified(LabelPreviewDetailPeer::LINE3_COL2)) $criteria->add(LabelPreviewDetailPeer::LINE3_COL2, $this->line3_col2);
		if ($this->isColumnModified(LabelPreviewDetailPeer::LINE4_COL1)) $criteria->add(LabelPreviewDetailPeer::LINE4_COL1, $this->line4_col1);
		if ($this->isColumnModified(LabelPreviewDetailPeer::LINE4_COL2)) $criteria->add(LabelPreviewDetailPeer::LINE4_COL2, $this->line4_col2);
		if ($this->isColumnModified(LabelPreviewDetailPeer::CREATED_BY)) $criteria->add(LabelPreviewDetailPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(LabelPreviewDetailPeer::DATE_CREATED)) $criteria->add(LabelPreviewDetailPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(LabelPreviewDetailPeer::MODIFIED_BY)) $criteria->add(LabelPreviewDetailPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(LabelPreviewDetailPeer::DATE_MODIFIED)) $criteria->add(LabelPreviewDetailPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(LabelPreviewDetailPeer::DATABASE_NAME);

		$criteria->add(LabelPreviewDetailPeer::ID, $this->id);

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

		$copyObj->setLabelingTemplateId($this->labeling_template_id);

		$copyObj->setLine1Col1($this->line1_col1);

		$copyObj->setLine1Col2($this->line1_col2);

		$copyObj->setLine2Col1($this->line2_col1);

		$copyObj->setLine2Col2($this->line2_col2);

		$copyObj->setLine3Col1($this->line3_col1);

		$copyObj->setLine3Col2($this->line3_col2);

		$copyObj->setLine4Col1($this->line4_col1);

		$copyObj->setLine4Col2($this->line4_col2);

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
			self::$peer = new LabelPreviewDetailPeer();
		}
		return self::$peer;
	}

} 
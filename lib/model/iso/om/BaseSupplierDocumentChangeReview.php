<?php


abstract class BaseSupplierDocumentChangeReview extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $company;


	
	protected $document_no;


	
	protected $document_title;


	
	protected $original_rev_no;


	
	protected $mod_rev_no;


	
	protected $changes_requested;


	
	protected $scr_status;


	
	protected $capa_report_no;


	
	protected $review_by;


	
	protected $approved;


	
	protected $approved_date;


	
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

	
	public function getCompany()
	{

		return $this->company;
	}

	
	public function getDocumentNo()
	{

		return $this->document_no;
	}

	
	public function getDocumentTitle()
	{

		return $this->document_title;
	}

	
	public function getOriginalRevNo()
	{

		return $this->original_rev_no;
	}

	
	public function getModRevNo()
	{

		return $this->mod_rev_no;
	}

	
	public function getChangesRequested()
	{

		return $this->changes_requested;
	}

	
	public function getScrStatus()
	{

		return $this->scr_status;
	}

	
	public function getCapaReportNo()
	{

		return $this->capa_report_no;
	}

	
	public function getReviewBy()
	{

		return $this->review_by;
	}

	
	public function getApproved()
	{

		return $this->approved;
	}

	
	public function getApprovedDate($format = 'Y-m-d H:i:s')
	{

		if ($this->approved_date === null || $this->approved_date === '') {
			return null;
		} elseif (!is_int($this->approved_date)) {
						$ts = strtotime($this->approved_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [approved_date] as date/time value: " . var_export($this->approved_date, true));
			}
		} else {
			$ts = $this->approved_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
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
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::ID;
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
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::DATE_TIME;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v) {
			$this->company = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::COMPANY;
		}

	} 
	
	public function setDocumentNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->document_no !== $v) {
			$this->document_no = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::DOCUMENT_NO;
		}

	} 
	
	public function setDocumentTitle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->document_title !== $v) {
			$this->document_title = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::DOCUMENT_TITLE;
		}

	} 
	
	public function setOriginalRevNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->original_rev_no !== $v) {
			$this->original_rev_no = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::ORIGINAL_REV_NO;
		}

	} 
	
	public function setModRevNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mod_rev_no !== $v) {
			$this->mod_rev_no = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::MOD_REV_NO;
		}

	} 
	
	public function setChangesRequested($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->changes_requested !== $v) {
			$this->changes_requested = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::CHANGES_REQUESTED;
		}

	} 
	
	public function setScrStatus($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->scr_status !== $v) {
			$this->scr_status = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::SCR_STATUS;
		}

	} 
	
	public function setCapaReportNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->capa_report_no !== $v) {
			$this->capa_report_no = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::CAPA_REPORT_NO;
		}

	} 
	
	public function setReviewBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->review_by !== $v) {
			$this->review_by = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::REVIEW_BY;
		}

	} 
	
	public function setApproved($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->approved !== $v) {
			$this->approved = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::APPROVED;
		}

	} 
	
	public function setApprovedDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [approved_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->approved_date !== $ts) {
			$this->approved_date = $ts;
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::APPROVED_DATE;
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
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::CREATED_BY;
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
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = SupplierDocumentChangeReviewPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->company = $rs->getString($startcol + 2);

			$this->document_no = $rs->getString($startcol + 3);

			$this->document_title = $rs->getString($startcol + 4);

			$this->original_rev_no = $rs->getString($startcol + 5);

			$this->mod_rev_no = $rs->getString($startcol + 6);

			$this->changes_requested = $rs->getString($startcol + 7);

			$this->scr_status = $rs->getString($startcol + 8);

			$this->capa_report_no = $rs->getString($startcol + 9);

			$this->review_by = $rs->getString($startcol + 10);

			$this->approved = $rs->getString($startcol + 11);

			$this->approved_date = $rs->getTimestamp($startcol + 12, null);

			$this->date_created = $rs->getTimestamp($startcol + 13, null);

			$this->created_by = $rs->getString($startcol + 14);

			$this->date_modified = $rs->getTimestamp($startcol + 15, null);

			$this->modified_by = $rs->getString($startcol + 16);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 17; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SupplierDocumentChangeReview object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SupplierDocumentChangeReviewPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SupplierDocumentChangeReviewPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SupplierDocumentChangeReviewPeer::DATABASE_NAME);
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
					$pk = SupplierDocumentChangeReviewPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SupplierDocumentChangeReviewPeer::doUpdate($this, $con);
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


			if (($retval = SupplierDocumentChangeReviewPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SupplierDocumentChangeReviewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCompany();
				break;
			case 3:
				return $this->getDocumentNo();
				break;
			case 4:
				return $this->getDocumentTitle();
				break;
			case 5:
				return $this->getOriginalRevNo();
				break;
			case 6:
				return $this->getModRevNo();
				break;
			case 7:
				return $this->getChangesRequested();
				break;
			case 8:
				return $this->getScrStatus();
				break;
			case 9:
				return $this->getCapaReportNo();
				break;
			case 10:
				return $this->getReviewBy();
				break;
			case 11:
				return $this->getApproved();
				break;
			case 12:
				return $this->getApprovedDate();
				break;
			case 13:
				return $this->getDateCreated();
				break;
			case 14:
				return $this->getCreatedBy();
				break;
			case 15:
				return $this->getDateModified();
				break;
			case 16:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SupplierDocumentChangeReviewPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getCompany(),
			$keys[3] => $this->getDocumentNo(),
			$keys[4] => $this->getDocumentTitle(),
			$keys[5] => $this->getOriginalRevNo(),
			$keys[6] => $this->getModRevNo(),
			$keys[7] => $this->getChangesRequested(),
			$keys[8] => $this->getScrStatus(),
			$keys[9] => $this->getCapaReportNo(),
			$keys[10] => $this->getReviewBy(),
			$keys[11] => $this->getApproved(),
			$keys[12] => $this->getApprovedDate(),
			$keys[13] => $this->getDateCreated(),
			$keys[14] => $this->getCreatedBy(),
			$keys[15] => $this->getDateModified(),
			$keys[16] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SupplierDocumentChangeReviewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCompany($value);
				break;
			case 3:
				$this->setDocumentNo($value);
				break;
			case 4:
				$this->setDocumentTitle($value);
				break;
			case 5:
				$this->setOriginalRevNo($value);
				break;
			case 6:
				$this->setModRevNo($value);
				break;
			case 7:
				$this->setChangesRequested($value);
				break;
			case 8:
				$this->setScrStatus($value);
				break;
			case 9:
				$this->setCapaReportNo($value);
				break;
			case 10:
				$this->setReviewBy($value);
				break;
			case 11:
				$this->setApproved($value);
				break;
			case 12:
				$this->setApprovedDate($value);
				break;
			case 13:
				$this->setDateCreated($value);
				break;
			case 14:
				$this->setCreatedBy($value);
				break;
			case 15:
				$this->setDateModified($value);
				break;
			case 16:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SupplierDocumentChangeReviewPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCompany($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDocumentNo($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDocumentTitle($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setOriginalRevNo($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setModRevNo($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setChangesRequested($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setScrStatus($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCapaReportNo($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setReviewBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setApproved($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setApprovedDate($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDateCreated($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCreatedBy($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setDateModified($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setModifiedBy($arr[$keys[16]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SupplierDocumentChangeReviewPeer::DATABASE_NAME);

		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::ID)) $criteria->add(SupplierDocumentChangeReviewPeer::ID, $this->id);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::DATE_TIME)) $criteria->add(SupplierDocumentChangeReviewPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::COMPANY)) $criteria->add(SupplierDocumentChangeReviewPeer::COMPANY, $this->company);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::DOCUMENT_NO)) $criteria->add(SupplierDocumentChangeReviewPeer::DOCUMENT_NO, $this->document_no);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::DOCUMENT_TITLE)) $criteria->add(SupplierDocumentChangeReviewPeer::DOCUMENT_TITLE, $this->document_title);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::ORIGINAL_REV_NO)) $criteria->add(SupplierDocumentChangeReviewPeer::ORIGINAL_REV_NO, $this->original_rev_no);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::MOD_REV_NO)) $criteria->add(SupplierDocumentChangeReviewPeer::MOD_REV_NO, $this->mod_rev_no);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::CHANGES_REQUESTED)) $criteria->add(SupplierDocumentChangeReviewPeer::CHANGES_REQUESTED, $this->changes_requested);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::SCR_STATUS)) $criteria->add(SupplierDocumentChangeReviewPeer::SCR_STATUS, $this->scr_status);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::CAPA_REPORT_NO)) $criteria->add(SupplierDocumentChangeReviewPeer::CAPA_REPORT_NO, $this->capa_report_no);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::REVIEW_BY)) $criteria->add(SupplierDocumentChangeReviewPeer::REVIEW_BY, $this->review_by);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::APPROVED)) $criteria->add(SupplierDocumentChangeReviewPeer::APPROVED, $this->approved);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::APPROVED_DATE)) $criteria->add(SupplierDocumentChangeReviewPeer::APPROVED_DATE, $this->approved_date);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::DATE_CREATED)) $criteria->add(SupplierDocumentChangeReviewPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::CREATED_BY)) $criteria->add(SupplierDocumentChangeReviewPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::DATE_MODIFIED)) $criteria->add(SupplierDocumentChangeReviewPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(SupplierDocumentChangeReviewPeer::MODIFIED_BY)) $criteria->add(SupplierDocumentChangeReviewPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SupplierDocumentChangeReviewPeer::DATABASE_NAME);

		$criteria->add(SupplierDocumentChangeReviewPeer::ID, $this->id);

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

		$copyObj->setCompany($this->company);

		$copyObj->setDocumentNo($this->document_no);

		$copyObj->setDocumentTitle($this->document_title);

		$copyObj->setOriginalRevNo($this->original_rev_no);

		$copyObj->setModRevNo($this->mod_rev_no);

		$copyObj->setChangesRequested($this->changes_requested);

		$copyObj->setScrStatus($this->scr_status);

		$copyObj->setCapaReportNo($this->capa_report_no);

		$copyObj->setReviewBy($this->review_by);

		$copyObj->setApproved($this->approved);

		$copyObj->setApprovedDate($this->approved_date);

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
			self::$peer = new SupplierDocumentChangeReviewPeer();
		}
		return self::$peer;
	}

} 
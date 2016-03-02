<?php


abstract class BaseInternalAuditReportSummary extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $auditor;


	
	protected $audited_date;


	
	protected $area_audited;


	
	protected $nc;


	
	protected $observation;


	
	protected $findings_summary;


	
	protected $other_observation;


	
	protected $recommendation;


	
	protected $corrective_preventive_action_report_no;


	
	protected $prepared_by;


	
	protected $prepared_date;


	
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

	
	public function getAuditor()
	{

		return $this->auditor;
	}

	
	public function getAuditedDate($format = 'Y-m-d')
	{

		if ($this->audited_date === null || $this->audited_date === '') {
			return null;
		} elseif (!is_int($this->audited_date)) {
						$ts = strtotime($this->audited_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [audited_date] as date/time value: " . var_export($this->audited_date, true));
			}
		} else {
			$ts = $this->audited_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getAreaAudited()
	{

		return $this->area_audited;
	}

	
	public function getNc()
	{

		return $this->nc;
	}

	
	public function getObservation()
	{

		return $this->observation;
	}

	
	public function getFindingsSummary()
	{

		return $this->findings_summary;
	}

	
	public function getOtherObservation()
	{

		return $this->other_observation;
	}

	
	public function getRecommendation()
	{

		return $this->recommendation;
	}

	
	public function getCorrectivePreventiveActionReportNo()
	{

		return $this->corrective_preventive_action_report_no;
	}

	
	public function getPreparedBy()
	{

		return $this->prepared_by;
	}

	
	public function getPreparedDate($format = 'Y-m-d')
	{

		if ($this->prepared_date === null || $this->prepared_date === '') {
			return null;
		} elseif (!is_int($this->prepared_date)) {
						$ts = strtotime($this->prepared_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [prepared_date] as date/time value: " . var_export($this->prepared_date, true));
			}
		} else {
			$ts = $this->prepared_date;
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
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::ID;
		}

	} 
	
	public function setAuditor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->auditor !== $v) {
			$this->auditor = $v;
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::AUDITOR;
		}

	} 
	
	public function setAuditedDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [audited_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->audited_date !== $ts) {
			$this->audited_date = $ts;
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::AUDITED_DATE;
		}

	} 
	
	public function setAreaAudited($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->area_audited !== $v) {
			$this->area_audited = $v;
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::AREA_AUDITED;
		}

	} 
	
	public function setNc($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nc !== $v) {
			$this->nc = $v;
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::NC;
		}

	} 
	
	public function setObservation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->observation !== $v) {
			$this->observation = $v;
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::OBSERVATION;
		}

	} 
	
	public function setFindingsSummary($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->findings_summary !== $v) {
			$this->findings_summary = $v;
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::FINDINGS_SUMMARY;
		}

	} 
	
	public function setOtherObservation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->other_observation !== $v) {
			$this->other_observation = $v;
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::OTHER_OBSERVATION;
		}

	} 
	
	public function setRecommendation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->recommendation !== $v) {
			$this->recommendation = $v;
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::RECOMMENDATION;
		}

	} 
	
	public function setCorrectivePreventiveActionReportNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->corrective_preventive_action_report_no !== $v) {
			$this->corrective_preventive_action_report_no = $v;
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::CORRECTIVE_PREVENTIVE_ACTION_REPORT_NO;
		}

	} 
	
	public function setPreparedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->prepared_by !== $v) {
			$this->prepared_by = $v;
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::PREPARED_BY;
		}

	} 
	
	public function setPreparedDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [prepared_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->prepared_date !== $ts) {
			$this->prepared_date = $ts;
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::PREPARED_DATE;
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
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::CREATED_BY;
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
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = InternalAuditReportSummaryPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->auditor = $rs->getString($startcol + 1);

			$this->audited_date = $rs->getDate($startcol + 2, null);

			$this->area_audited = $rs->getString($startcol + 3);

			$this->nc = $rs->getInt($startcol + 4);

			$this->observation = $rs->getString($startcol + 5);

			$this->findings_summary = $rs->getString($startcol + 6);

			$this->other_observation = $rs->getString($startcol + 7);

			$this->recommendation = $rs->getString($startcol + 8);

			$this->corrective_preventive_action_report_no = $rs->getString($startcol + 9);

			$this->prepared_by = $rs->getString($startcol + 10);

			$this->prepared_date = $rs->getDate($startcol + 11, null);

			$this->date_created = $rs->getTimestamp($startcol + 12, null);

			$this->created_by = $rs->getString($startcol + 13);

			$this->date_modified = $rs->getTimestamp($startcol + 14, null);

			$this->modified_by = $rs->getString($startcol + 15);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating InternalAuditReportSummary object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(InternalAuditReportSummaryPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			InternalAuditReportSummaryPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(InternalAuditReportSummaryPeer::DATABASE_NAME);
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
					$pk = InternalAuditReportSummaryPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += InternalAuditReportSummaryPeer::doUpdate($this, $con);
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


			if (($retval = InternalAuditReportSummaryPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = InternalAuditReportSummaryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getAuditor();
				break;
			case 2:
				return $this->getAuditedDate();
				break;
			case 3:
				return $this->getAreaAudited();
				break;
			case 4:
				return $this->getNc();
				break;
			case 5:
				return $this->getObservation();
				break;
			case 6:
				return $this->getFindingsSummary();
				break;
			case 7:
				return $this->getOtherObservation();
				break;
			case 8:
				return $this->getRecommendation();
				break;
			case 9:
				return $this->getCorrectivePreventiveActionReportNo();
				break;
			case 10:
				return $this->getPreparedBy();
				break;
			case 11:
				return $this->getPreparedDate();
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
		$keys = InternalAuditReportSummaryPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getAuditor(),
			$keys[2] => $this->getAuditedDate(),
			$keys[3] => $this->getAreaAudited(),
			$keys[4] => $this->getNc(),
			$keys[5] => $this->getObservation(),
			$keys[6] => $this->getFindingsSummary(),
			$keys[7] => $this->getOtherObservation(),
			$keys[8] => $this->getRecommendation(),
			$keys[9] => $this->getCorrectivePreventiveActionReportNo(),
			$keys[10] => $this->getPreparedBy(),
			$keys[11] => $this->getPreparedDate(),
			$keys[12] => $this->getDateCreated(),
			$keys[13] => $this->getCreatedBy(),
			$keys[14] => $this->getDateModified(),
			$keys[15] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = InternalAuditReportSummaryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setAuditor($value);
				break;
			case 2:
				$this->setAuditedDate($value);
				break;
			case 3:
				$this->setAreaAudited($value);
				break;
			case 4:
				$this->setNc($value);
				break;
			case 5:
				$this->setObservation($value);
				break;
			case 6:
				$this->setFindingsSummary($value);
				break;
			case 7:
				$this->setOtherObservation($value);
				break;
			case 8:
				$this->setRecommendation($value);
				break;
			case 9:
				$this->setCorrectivePreventiveActionReportNo($value);
				break;
			case 10:
				$this->setPreparedBy($value);
				break;
			case 11:
				$this->setPreparedDate($value);
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
		$keys = InternalAuditReportSummaryPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAuditor($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAuditedDate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAreaAudited($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNc($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setObservation($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFindingsSummary($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setOtherObservation($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setRecommendation($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCorrectivePreventiveActionReportNo($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPreparedBy($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPreparedDate($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDateCreated($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCreatedBy($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateModified($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setModifiedBy($arr[$keys[15]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(InternalAuditReportSummaryPeer::DATABASE_NAME);

		if ($this->isColumnModified(InternalAuditReportSummaryPeer::ID)) $criteria->add(InternalAuditReportSummaryPeer::ID, $this->id);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::AUDITOR)) $criteria->add(InternalAuditReportSummaryPeer::AUDITOR, $this->auditor);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::AUDITED_DATE)) $criteria->add(InternalAuditReportSummaryPeer::AUDITED_DATE, $this->audited_date);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::AREA_AUDITED)) $criteria->add(InternalAuditReportSummaryPeer::AREA_AUDITED, $this->area_audited);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::NC)) $criteria->add(InternalAuditReportSummaryPeer::NC, $this->nc);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::OBSERVATION)) $criteria->add(InternalAuditReportSummaryPeer::OBSERVATION, $this->observation);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::FINDINGS_SUMMARY)) $criteria->add(InternalAuditReportSummaryPeer::FINDINGS_SUMMARY, $this->findings_summary);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::OTHER_OBSERVATION)) $criteria->add(InternalAuditReportSummaryPeer::OTHER_OBSERVATION, $this->other_observation);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::RECOMMENDATION)) $criteria->add(InternalAuditReportSummaryPeer::RECOMMENDATION, $this->recommendation);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::CORRECTIVE_PREVENTIVE_ACTION_REPORT_NO)) $criteria->add(InternalAuditReportSummaryPeer::CORRECTIVE_PREVENTIVE_ACTION_REPORT_NO, $this->corrective_preventive_action_report_no);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::PREPARED_BY)) $criteria->add(InternalAuditReportSummaryPeer::PREPARED_BY, $this->prepared_by);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::PREPARED_DATE)) $criteria->add(InternalAuditReportSummaryPeer::PREPARED_DATE, $this->prepared_date);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::DATE_CREATED)) $criteria->add(InternalAuditReportSummaryPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::CREATED_BY)) $criteria->add(InternalAuditReportSummaryPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::DATE_MODIFIED)) $criteria->add(InternalAuditReportSummaryPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(InternalAuditReportSummaryPeer::MODIFIED_BY)) $criteria->add(InternalAuditReportSummaryPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(InternalAuditReportSummaryPeer::DATABASE_NAME);

		$criteria->add(InternalAuditReportSummaryPeer::ID, $this->id);

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

		$copyObj->setAuditor($this->auditor);

		$copyObj->setAuditedDate($this->audited_date);

		$copyObj->setAreaAudited($this->area_audited);

		$copyObj->setNc($this->nc);

		$copyObj->setObservation($this->observation);

		$copyObj->setFindingsSummary($this->findings_summary);

		$copyObj->setOtherObservation($this->other_observation);

		$copyObj->setRecommendation($this->recommendation);

		$copyObj->setCorrectivePreventiveActionReportNo($this->corrective_preventive_action_report_no);

		$copyObj->setPreparedBy($this->prepared_by);

		$copyObj->setPreparedDate($this->prepared_date);

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
			self::$peer = new InternalAuditReportSummaryPeer();
		}
		return self::$peer;
	}

} 
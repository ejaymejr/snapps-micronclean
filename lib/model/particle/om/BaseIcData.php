<?php


abstract class BaseIcData extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $sample = 'null';


	
	protected $customer = 'null';


	
	protected $department = 'null';


	
	protected $type = 'null';


	
	protected $na = 0;


	
	protected $na_spec = 'null';


	
	protected $nh = 0;


	
	protected $nh_spec = 'null';


	
	protected $k = 0;


	
	protected $k_spec = 'null';


	
	protected $ca = 0;


	
	protected $ca_spec = 'null';


	
	protected $mg = 0;


	
	protected $mg_spec = 'null';


	
	protected $f = 0;


	
	protected $f_spec = 'null';


	
	protected $cl = 0;


	
	protected $cl_spec = 'null';


	
	protected $no = 0;


	
	protected $no_spec = 'null';


	
	protected $po = 0;


	
	protected $po_spec = 'null';


	
	protected $so = 0;


	
	protected $so_spec = 'null';


	
	protected $washer = 'null';


	
	protected $dryer = 'null';


	
	protected $remarks;


	
	protected $tester = 'null';


	
	protected $garment_code = 'null';


	
	protected $created_by = 'null';


	
	protected $date_created;


	
	protected $modified_by = 'null';


	
	protected $date_modified;

	
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

	
	public function getSample()
	{

		return $this->sample;
	}

	
	public function getCustomer()
	{

		return $this->customer;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getType()
	{

		return $this->type;
	}

	
	public function getNa()
	{

		return $this->na;
	}

	
	public function getNaSpec()
	{

		return $this->na_spec;
	}

	
	public function getNh()
	{

		return $this->nh;
	}

	
	public function getNhSpec()
	{

		return $this->nh_spec;
	}

	
	public function getK()
	{

		return $this->k;
	}

	
	public function getKSpec()
	{

		return $this->k_spec;
	}

	
	public function getCa()
	{

		return $this->ca;
	}

	
	public function getCaSpec()
	{

		return $this->ca_spec;
	}

	
	public function getMg()
	{

		return $this->mg;
	}

	
	public function getMgSpec()
	{

		return $this->mg_spec;
	}

	
	public function getF()
	{

		return $this->f;
	}

	
	public function getFSpec()
	{

		return $this->f_spec;
	}

	
	public function getCl()
	{

		return $this->cl;
	}

	
	public function getClSpec()
	{

		return $this->cl_spec;
	}

	
	public function getNo()
	{

		return $this->no;
	}

	
	public function getNoSpec()
	{

		return $this->no_spec;
	}

	
	public function getPo()
	{

		return $this->po;
	}

	
	public function getPoSpec()
	{

		return $this->po_spec;
	}

	
	public function getSo()
	{

		return $this->so;
	}

	
	public function getSoSpec()
	{

		return $this->so_spec;
	}

	
	public function getWasher()
	{

		return $this->washer;
	}

	
	public function getDryer()
	{

		return $this->dryer;
	}

	
	public function getRemarks()
	{

		return $this->remarks;
	}

	
	public function getTester()
	{

		return $this->tester;
	}

	
	public function getGarmentCode()
	{

		return $this->garment_code;
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
			$this->modifiedColumns[] = IcDataPeer::ID;
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
			$this->modifiedColumns[] = IcDataPeer::DATE_TIME;
		}

	} 
	
	public function setSample($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sample !== $v || $v === 'null') {
			$this->sample = $v;
			$this->modifiedColumns[] = IcDataPeer::SAMPLE;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = IcDataPeer::CUSTOMER;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = IcDataPeer::DEPARTMENT;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v || $v === 'null') {
			$this->type = $v;
			$this->modifiedColumns[] = IcDataPeer::TYPE;
		}

	} 
	
	public function setNa($v)
	{

		if ($this->na !== $v || $v === 0) {
			$this->na = $v;
			$this->modifiedColumns[] = IcDataPeer::NA;
		}

	} 
	
	public function setNaSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->na_spec !== $v || $v === 'null') {
			$this->na_spec = $v;
			$this->modifiedColumns[] = IcDataPeer::NA_SPEC;
		}

	} 
	
	public function setNh($v)
	{

		if ($this->nh !== $v || $v === 0) {
			$this->nh = $v;
			$this->modifiedColumns[] = IcDataPeer::NH;
		}

	} 
	
	public function setNhSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nh_spec !== $v || $v === 'null') {
			$this->nh_spec = $v;
			$this->modifiedColumns[] = IcDataPeer::NH_SPEC;
		}

	} 
	
	public function setK($v)
	{

		if ($this->k !== $v || $v === 0) {
			$this->k = $v;
			$this->modifiedColumns[] = IcDataPeer::K;
		}

	} 
	
	public function setKSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->k_spec !== $v || $v === 'null') {
			$this->k_spec = $v;
			$this->modifiedColumns[] = IcDataPeer::K_SPEC;
		}

	} 
	
	public function setCa($v)
	{

		if ($this->ca !== $v || $v === 0) {
			$this->ca = $v;
			$this->modifiedColumns[] = IcDataPeer::CA;
		}

	} 
	
	public function setCaSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ca_spec !== $v || $v === 'null') {
			$this->ca_spec = $v;
			$this->modifiedColumns[] = IcDataPeer::CA_SPEC;
		}

	} 
	
	public function setMg($v)
	{

		if ($this->mg !== $v || $v === 0) {
			$this->mg = $v;
			$this->modifiedColumns[] = IcDataPeer::MG;
		}

	} 
	
	public function setMgSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mg_spec !== $v || $v === 'null') {
			$this->mg_spec = $v;
			$this->modifiedColumns[] = IcDataPeer::MG_SPEC;
		}

	} 
	
	public function setF($v)
	{

		if ($this->f !== $v || $v === 0) {
			$this->f = $v;
			$this->modifiedColumns[] = IcDataPeer::F;
		}

	} 
	
	public function setFSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->f_spec !== $v || $v === 'null') {
			$this->f_spec = $v;
			$this->modifiedColumns[] = IcDataPeer::F_SPEC;
		}

	} 
	
	public function setCl($v)
	{

		if ($this->cl !== $v || $v === 0) {
			$this->cl = $v;
			$this->modifiedColumns[] = IcDataPeer::CL;
		}

	} 
	
	public function setClSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cl_spec !== $v || $v === 'null') {
			$this->cl_spec = $v;
			$this->modifiedColumns[] = IcDataPeer::CL_SPEC;
		}

	} 
	
	public function setNo($v)
	{

		if ($this->no !== $v || $v === 0) {
			$this->no = $v;
			$this->modifiedColumns[] = IcDataPeer::NO;
		}

	} 
	
	public function setNoSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->no_spec !== $v || $v === 'null') {
			$this->no_spec = $v;
			$this->modifiedColumns[] = IcDataPeer::NO_SPEC;
		}

	} 
	
	public function setPo($v)
	{

		if ($this->po !== $v || $v === 0) {
			$this->po = $v;
			$this->modifiedColumns[] = IcDataPeer::PO;
		}

	} 
	
	public function setPoSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->po_spec !== $v || $v === 'null') {
			$this->po_spec = $v;
			$this->modifiedColumns[] = IcDataPeer::PO_SPEC;
		}

	} 
	
	public function setSo($v)
	{

		if ($this->so !== $v || $v === 0) {
			$this->so = $v;
			$this->modifiedColumns[] = IcDataPeer::SO;
		}

	} 
	
	public function setSoSpec($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->so_spec !== $v || $v === 'null') {
			$this->so_spec = $v;
			$this->modifiedColumns[] = IcDataPeer::SO_SPEC;
		}

	} 
	
	public function setWasher($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->washer !== $v || $v === 'null') {
			$this->washer = $v;
			$this->modifiedColumns[] = IcDataPeer::WASHER;
		}

	} 
	
	public function setDryer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dryer !== $v || $v === 'null') {
			$this->dryer = $v;
			$this->modifiedColumns[] = IcDataPeer::DRYER;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = IcDataPeer::REMARKS;
		}

	} 
	
	public function setTester($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tester !== $v || $v === 'null') {
			$this->tester = $v;
			$this->modifiedColumns[] = IcDataPeer::TESTER;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v || $v === 'null') {
			$this->garment_code = $v;
			$this->modifiedColumns[] = IcDataPeer::GARMENT_CODE;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = IcDataPeer::CREATED_BY;
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
			$this->modifiedColumns[] = IcDataPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = IcDataPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = IcDataPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->sample = $rs->getString($startcol + 2);

			$this->customer = $rs->getString($startcol + 3);

			$this->department = $rs->getString($startcol + 4);

			$this->type = $rs->getString($startcol + 5);

			$this->na = $rs->getFloat($startcol + 6);

			$this->na_spec = $rs->getString($startcol + 7);

			$this->nh = $rs->getFloat($startcol + 8);

			$this->nh_spec = $rs->getString($startcol + 9);

			$this->k = $rs->getFloat($startcol + 10);

			$this->k_spec = $rs->getString($startcol + 11);

			$this->ca = $rs->getFloat($startcol + 12);

			$this->ca_spec = $rs->getString($startcol + 13);

			$this->mg = $rs->getFloat($startcol + 14);

			$this->mg_spec = $rs->getString($startcol + 15);

			$this->f = $rs->getFloat($startcol + 16);

			$this->f_spec = $rs->getString($startcol + 17);

			$this->cl = $rs->getFloat($startcol + 18);

			$this->cl_spec = $rs->getString($startcol + 19);

			$this->no = $rs->getFloat($startcol + 20);

			$this->no_spec = $rs->getString($startcol + 21);

			$this->po = $rs->getFloat($startcol + 22);

			$this->po_spec = $rs->getString($startcol + 23);

			$this->so = $rs->getFloat($startcol + 24);

			$this->so_spec = $rs->getString($startcol + 25);

			$this->washer = $rs->getString($startcol + 26);

			$this->dryer = $rs->getString($startcol + 27);

			$this->remarks = $rs->getString($startcol + 28);

			$this->tester = $rs->getString($startcol + 29);

			$this->garment_code = $rs->getString($startcol + 30);

			$this->created_by = $rs->getString($startcol + 31);

			$this->date_created = $rs->getTimestamp($startcol + 32, null);

			$this->modified_by = $rs->getString($startcol + 33);

			$this->date_modified = $rs->getTimestamp($startcol + 34, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 35; 
		} catch (Exception $e) {
			throw new PropelException("Error populating IcData object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(IcDataPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			IcDataPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(IcDataPeer::DATABASE_NAME);
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
					$pk = IcDataPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += IcDataPeer::doUpdate($this, $con);
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


			if (($retval = IcDataPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = IcDataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getSample();
				break;
			case 3:
				return $this->getCustomer();
				break;
			case 4:
				return $this->getDepartment();
				break;
			case 5:
				return $this->getType();
				break;
			case 6:
				return $this->getNa();
				break;
			case 7:
				return $this->getNaSpec();
				break;
			case 8:
				return $this->getNh();
				break;
			case 9:
				return $this->getNhSpec();
				break;
			case 10:
				return $this->getK();
				break;
			case 11:
				return $this->getKSpec();
				break;
			case 12:
				return $this->getCa();
				break;
			case 13:
				return $this->getCaSpec();
				break;
			case 14:
				return $this->getMg();
				break;
			case 15:
				return $this->getMgSpec();
				break;
			case 16:
				return $this->getF();
				break;
			case 17:
				return $this->getFSpec();
				break;
			case 18:
				return $this->getCl();
				break;
			case 19:
				return $this->getClSpec();
				break;
			case 20:
				return $this->getNo();
				break;
			case 21:
				return $this->getNoSpec();
				break;
			case 22:
				return $this->getPo();
				break;
			case 23:
				return $this->getPoSpec();
				break;
			case 24:
				return $this->getSo();
				break;
			case 25:
				return $this->getSoSpec();
				break;
			case 26:
				return $this->getWasher();
				break;
			case 27:
				return $this->getDryer();
				break;
			case 28:
				return $this->getRemarks();
				break;
			case 29:
				return $this->getTester();
				break;
			case 30:
				return $this->getGarmentCode();
				break;
			case 31:
				return $this->getCreatedBy();
				break;
			case 32:
				return $this->getDateCreated();
				break;
			case 33:
				return $this->getModifiedBy();
				break;
			case 34:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = IcDataPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getSample(),
			$keys[3] => $this->getCustomer(),
			$keys[4] => $this->getDepartment(),
			$keys[5] => $this->getType(),
			$keys[6] => $this->getNa(),
			$keys[7] => $this->getNaSpec(),
			$keys[8] => $this->getNh(),
			$keys[9] => $this->getNhSpec(),
			$keys[10] => $this->getK(),
			$keys[11] => $this->getKSpec(),
			$keys[12] => $this->getCa(),
			$keys[13] => $this->getCaSpec(),
			$keys[14] => $this->getMg(),
			$keys[15] => $this->getMgSpec(),
			$keys[16] => $this->getF(),
			$keys[17] => $this->getFSpec(),
			$keys[18] => $this->getCl(),
			$keys[19] => $this->getClSpec(),
			$keys[20] => $this->getNo(),
			$keys[21] => $this->getNoSpec(),
			$keys[22] => $this->getPo(),
			$keys[23] => $this->getPoSpec(),
			$keys[24] => $this->getSo(),
			$keys[25] => $this->getSoSpec(),
			$keys[26] => $this->getWasher(),
			$keys[27] => $this->getDryer(),
			$keys[28] => $this->getRemarks(),
			$keys[29] => $this->getTester(),
			$keys[30] => $this->getGarmentCode(),
			$keys[31] => $this->getCreatedBy(),
			$keys[32] => $this->getDateCreated(),
			$keys[33] => $this->getModifiedBy(),
			$keys[34] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = IcDataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setSample($value);
				break;
			case 3:
				$this->setCustomer($value);
				break;
			case 4:
				$this->setDepartment($value);
				break;
			case 5:
				$this->setType($value);
				break;
			case 6:
				$this->setNa($value);
				break;
			case 7:
				$this->setNaSpec($value);
				break;
			case 8:
				$this->setNh($value);
				break;
			case 9:
				$this->setNhSpec($value);
				break;
			case 10:
				$this->setK($value);
				break;
			case 11:
				$this->setKSpec($value);
				break;
			case 12:
				$this->setCa($value);
				break;
			case 13:
				$this->setCaSpec($value);
				break;
			case 14:
				$this->setMg($value);
				break;
			case 15:
				$this->setMgSpec($value);
				break;
			case 16:
				$this->setF($value);
				break;
			case 17:
				$this->setFSpec($value);
				break;
			case 18:
				$this->setCl($value);
				break;
			case 19:
				$this->setClSpec($value);
				break;
			case 20:
				$this->setNo($value);
				break;
			case 21:
				$this->setNoSpec($value);
				break;
			case 22:
				$this->setPo($value);
				break;
			case 23:
				$this->setPoSpec($value);
				break;
			case 24:
				$this->setSo($value);
				break;
			case 25:
				$this->setSoSpec($value);
				break;
			case 26:
				$this->setWasher($value);
				break;
			case 27:
				$this->setDryer($value);
				break;
			case 28:
				$this->setRemarks($value);
				break;
			case 29:
				$this->setTester($value);
				break;
			case 30:
				$this->setGarmentCode($value);
				break;
			case 31:
				$this->setCreatedBy($value);
				break;
			case 32:
				$this->setDateCreated($value);
				break;
			case 33:
				$this->setModifiedBy($value);
				break;
			case 34:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = IcDataPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSample($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCustomer($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDepartment($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setNa($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNaSpec($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setNh($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setNhSpec($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setK($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setKSpec($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCa($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCaSpec($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setMg($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setMgSpec($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setF($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setFSpec($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setCl($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setClSpec($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setNo($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setNoSpec($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setPo($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setPoSpec($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setSo($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setSoSpec($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setWasher($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setDryer($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setRemarks($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setTester($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setGarmentCode($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setCreatedBy($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setDateCreated($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setModifiedBy($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setDateModified($arr[$keys[34]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(IcDataPeer::DATABASE_NAME);

		if ($this->isColumnModified(IcDataPeer::ID)) $criteria->add(IcDataPeer::ID, $this->id);
		if ($this->isColumnModified(IcDataPeer::DATE_TIME)) $criteria->add(IcDataPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(IcDataPeer::SAMPLE)) $criteria->add(IcDataPeer::SAMPLE, $this->sample);
		if ($this->isColumnModified(IcDataPeer::CUSTOMER)) $criteria->add(IcDataPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(IcDataPeer::DEPARTMENT)) $criteria->add(IcDataPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(IcDataPeer::TYPE)) $criteria->add(IcDataPeer::TYPE, $this->type);
		if ($this->isColumnModified(IcDataPeer::NA)) $criteria->add(IcDataPeer::NA, $this->na);
		if ($this->isColumnModified(IcDataPeer::NA_SPEC)) $criteria->add(IcDataPeer::NA_SPEC, $this->na_spec);
		if ($this->isColumnModified(IcDataPeer::NH)) $criteria->add(IcDataPeer::NH, $this->nh);
		if ($this->isColumnModified(IcDataPeer::NH_SPEC)) $criteria->add(IcDataPeer::NH_SPEC, $this->nh_spec);
		if ($this->isColumnModified(IcDataPeer::K)) $criteria->add(IcDataPeer::K, $this->k);
		if ($this->isColumnModified(IcDataPeer::K_SPEC)) $criteria->add(IcDataPeer::K_SPEC, $this->k_spec);
		if ($this->isColumnModified(IcDataPeer::CA)) $criteria->add(IcDataPeer::CA, $this->ca);
		if ($this->isColumnModified(IcDataPeer::CA_SPEC)) $criteria->add(IcDataPeer::CA_SPEC, $this->ca_spec);
		if ($this->isColumnModified(IcDataPeer::MG)) $criteria->add(IcDataPeer::MG, $this->mg);
		if ($this->isColumnModified(IcDataPeer::MG_SPEC)) $criteria->add(IcDataPeer::MG_SPEC, $this->mg_spec);
		if ($this->isColumnModified(IcDataPeer::F)) $criteria->add(IcDataPeer::F, $this->f);
		if ($this->isColumnModified(IcDataPeer::F_SPEC)) $criteria->add(IcDataPeer::F_SPEC, $this->f_spec);
		if ($this->isColumnModified(IcDataPeer::CL)) $criteria->add(IcDataPeer::CL, $this->cl);
		if ($this->isColumnModified(IcDataPeer::CL_SPEC)) $criteria->add(IcDataPeer::CL_SPEC, $this->cl_spec);
		if ($this->isColumnModified(IcDataPeer::NO)) $criteria->add(IcDataPeer::NO, $this->no);
		if ($this->isColumnModified(IcDataPeer::NO_SPEC)) $criteria->add(IcDataPeer::NO_SPEC, $this->no_spec);
		if ($this->isColumnModified(IcDataPeer::PO)) $criteria->add(IcDataPeer::PO, $this->po);
		if ($this->isColumnModified(IcDataPeer::PO_SPEC)) $criteria->add(IcDataPeer::PO_SPEC, $this->po_spec);
		if ($this->isColumnModified(IcDataPeer::SO)) $criteria->add(IcDataPeer::SO, $this->so);
		if ($this->isColumnModified(IcDataPeer::SO_SPEC)) $criteria->add(IcDataPeer::SO_SPEC, $this->so_spec);
		if ($this->isColumnModified(IcDataPeer::WASHER)) $criteria->add(IcDataPeer::WASHER, $this->washer);
		if ($this->isColumnModified(IcDataPeer::DRYER)) $criteria->add(IcDataPeer::DRYER, $this->dryer);
		if ($this->isColumnModified(IcDataPeer::REMARKS)) $criteria->add(IcDataPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(IcDataPeer::TESTER)) $criteria->add(IcDataPeer::TESTER, $this->tester);
		if ($this->isColumnModified(IcDataPeer::GARMENT_CODE)) $criteria->add(IcDataPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(IcDataPeer::CREATED_BY)) $criteria->add(IcDataPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(IcDataPeer::DATE_CREATED)) $criteria->add(IcDataPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(IcDataPeer::MODIFIED_BY)) $criteria->add(IcDataPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(IcDataPeer::DATE_MODIFIED)) $criteria->add(IcDataPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(IcDataPeer::DATABASE_NAME);

		$criteria->add(IcDataPeer::ID, $this->id);

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

		$copyObj->setSample($this->sample);

		$copyObj->setCustomer($this->customer);

		$copyObj->setDepartment($this->department);

		$copyObj->setType($this->type);

		$copyObj->setNa($this->na);

		$copyObj->setNaSpec($this->na_spec);

		$copyObj->setNh($this->nh);

		$copyObj->setNhSpec($this->nh_spec);

		$copyObj->setK($this->k);

		$copyObj->setKSpec($this->k_spec);

		$copyObj->setCa($this->ca);

		$copyObj->setCaSpec($this->ca_spec);

		$copyObj->setMg($this->mg);

		$copyObj->setMgSpec($this->mg_spec);

		$copyObj->setF($this->f);

		$copyObj->setFSpec($this->f_spec);

		$copyObj->setCl($this->cl);

		$copyObj->setClSpec($this->cl_spec);

		$copyObj->setNo($this->no);

		$copyObj->setNoSpec($this->no_spec);

		$copyObj->setPo($this->po);

		$copyObj->setPoSpec($this->po_spec);

		$copyObj->setSo($this->so);

		$copyObj->setSoSpec($this->so_spec);

		$copyObj->setWasher($this->washer);

		$copyObj->setDryer($this->dryer);

		$copyObj->setRemarks($this->remarks);

		$copyObj->setTester($this->tester);

		$copyObj->setGarmentCode($this->garment_code);

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
			self::$peer = new IcDataPeer();
		}
		return self::$peer;
	}

} 
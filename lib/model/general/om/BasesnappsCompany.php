<?php


abstract class BasesnappsCompany extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $index_no;


	
	protected $company = 'null';


	
	protected $nickname = 'null';


	
	protected $initial = 'null';


	
	protected $address_line1 = 'null';


	
	protected $address_line2 = 'null';


	
	protected $phone = 'null';


	
	protected $fax = 'null';


	
	protected $postal_code = 'null';


	
	protected $website = 'null';


	
	protected $logo_filename = 'null';

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getIndexNo()
	{

		return $this->index_no;
	}

	
	public function getCompany()
	{

		return $this->company;
	}

	
	public function getNickname()
	{

		return $this->nickname;
	}

	
	public function getInitial()
	{

		return $this->initial;
	}

	
	public function getAddressLine1()
	{

		return $this->address_line1;
	}

	
	public function getAddressLine2()
	{

		return $this->address_line2;
	}

	
	public function getPhone()
	{

		return $this->phone;
	}

	
	public function getFax()
	{

		return $this->fax;
	}

	
	public function getPostalCode()
	{

		return $this->postal_code;
	}

	
	public function getWebsite()
	{

		return $this->website;
	}

	
	public function getLogoFilename()
	{

		return $this->logo_filename;
	}

	
	public function setIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->index_no !== $v) {
			$this->index_no = $v;
			$this->modifiedColumns[] = snappsCompanyPeer::INDEX_NO;
		}

	} 
	
	public function setCompany($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->company !== $v || $v === 'null') {
			$this->company = $v;
			$this->modifiedColumns[] = snappsCompanyPeer::COMPANY;
		}

	} 
	
	public function setNickname($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nickname !== $v || $v === 'null') {
			$this->nickname = $v;
			$this->modifiedColumns[] = snappsCompanyPeer::NICKNAME;
		}

	} 
	
	public function setInitial($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->initial !== $v || $v === 'null') {
			$this->initial = $v;
			$this->modifiedColumns[] = snappsCompanyPeer::INITIAL;
		}

	} 
	
	public function setAddressLine1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->address_line1 !== $v || $v === 'null') {
			$this->address_line1 = $v;
			$this->modifiedColumns[] = snappsCompanyPeer::ADDRESS_LINE1;
		}

	} 
	
	public function setAddressLine2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->address_line2 !== $v || $v === 'null') {
			$this->address_line2 = $v;
			$this->modifiedColumns[] = snappsCompanyPeer::ADDRESS_LINE2;
		}

	} 
	
	public function setPhone($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->phone !== $v || $v === 'null') {
			$this->phone = $v;
			$this->modifiedColumns[] = snappsCompanyPeer::PHONE;
		}

	} 
	
	public function setFax($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fax !== $v || $v === 'null') {
			$this->fax = $v;
			$this->modifiedColumns[] = snappsCompanyPeer::FAX;
		}

	} 
	
	public function setPostalCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->postal_code !== $v || $v === 'null') {
			$this->postal_code = $v;
			$this->modifiedColumns[] = snappsCompanyPeer::POSTAL_CODE;
		}

	} 
	
	public function setWebsite($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->website !== $v || $v === 'null') {
			$this->website = $v;
			$this->modifiedColumns[] = snappsCompanyPeer::WEBSITE;
		}

	} 
	
	public function setLogoFilename($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->logo_filename !== $v || $v === 'null') {
			$this->logo_filename = $v;
			$this->modifiedColumns[] = snappsCompanyPeer::LOGO_FILENAME;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->index_no = $rs->getInt($startcol + 0);

			$this->company = $rs->getString($startcol + 1);

			$this->nickname = $rs->getString($startcol + 2);

			$this->initial = $rs->getString($startcol + 3);

			$this->address_line1 = $rs->getString($startcol + 4);

			$this->address_line2 = $rs->getString($startcol + 5);

			$this->phone = $rs->getString($startcol + 6);

			$this->fax = $rs->getString($startcol + 7);

			$this->postal_code = $rs->getString($startcol + 8);

			$this->website = $rs->getString($startcol + 9);

			$this->logo_filename = $rs->getString($startcol + 10);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating snappsCompany object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(snappsCompanyPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			snappsCompanyPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(snappsCompanyPeer::DATABASE_NAME);
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
					$pk = snappsCompanyPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setIndexNo($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += snappsCompanyPeer::doUpdate($this, $con);
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


			if (($retval = snappsCompanyPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = snappsCompanyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getIndexNo();
				break;
			case 1:
				return $this->getCompany();
				break;
			case 2:
				return $this->getNickname();
				break;
			case 3:
				return $this->getInitial();
				break;
			case 4:
				return $this->getAddressLine1();
				break;
			case 5:
				return $this->getAddressLine2();
				break;
			case 6:
				return $this->getPhone();
				break;
			case 7:
				return $this->getFax();
				break;
			case 8:
				return $this->getPostalCode();
				break;
			case 9:
				return $this->getWebsite();
				break;
			case 10:
				return $this->getLogoFilename();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = snappsCompanyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIndexNo(),
			$keys[1] => $this->getCompany(),
			$keys[2] => $this->getNickname(),
			$keys[3] => $this->getInitial(),
			$keys[4] => $this->getAddressLine1(),
			$keys[5] => $this->getAddressLine2(),
			$keys[6] => $this->getPhone(),
			$keys[7] => $this->getFax(),
			$keys[8] => $this->getPostalCode(),
			$keys[9] => $this->getWebsite(),
			$keys[10] => $this->getLogoFilename(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = snappsCompanyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setIndexNo($value);
				break;
			case 1:
				$this->setCompany($value);
				break;
			case 2:
				$this->setNickname($value);
				break;
			case 3:
				$this->setInitial($value);
				break;
			case 4:
				$this->setAddressLine1($value);
				break;
			case 5:
				$this->setAddressLine2($value);
				break;
			case 6:
				$this->setPhone($value);
				break;
			case 7:
				$this->setFax($value);
				break;
			case 8:
				$this->setPostalCode($value);
				break;
			case 9:
				$this->setWebsite($value);
				break;
			case 10:
				$this->setLogoFilename($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = snappsCompanyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIndexNo($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCompany($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNickname($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setInitial($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAddressLine1($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAddressLine2($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPhone($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setFax($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPostalCode($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setWebsite($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setLogoFilename($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(snappsCompanyPeer::DATABASE_NAME);

		if ($this->isColumnModified(snappsCompanyPeer::INDEX_NO)) $criteria->add(snappsCompanyPeer::INDEX_NO, $this->index_no);
		if ($this->isColumnModified(snappsCompanyPeer::COMPANY)) $criteria->add(snappsCompanyPeer::COMPANY, $this->company);
		if ($this->isColumnModified(snappsCompanyPeer::NICKNAME)) $criteria->add(snappsCompanyPeer::NICKNAME, $this->nickname);
		if ($this->isColumnModified(snappsCompanyPeer::INITIAL)) $criteria->add(snappsCompanyPeer::INITIAL, $this->initial);
		if ($this->isColumnModified(snappsCompanyPeer::ADDRESS_LINE1)) $criteria->add(snappsCompanyPeer::ADDRESS_LINE1, $this->address_line1);
		if ($this->isColumnModified(snappsCompanyPeer::ADDRESS_LINE2)) $criteria->add(snappsCompanyPeer::ADDRESS_LINE2, $this->address_line2);
		if ($this->isColumnModified(snappsCompanyPeer::PHONE)) $criteria->add(snappsCompanyPeer::PHONE, $this->phone);
		if ($this->isColumnModified(snappsCompanyPeer::FAX)) $criteria->add(snappsCompanyPeer::FAX, $this->fax);
		if ($this->isColumnModified(snappsCompanyPeer::POSTAL_CODE)) $criteria->add(snappsCompanyPeer::POSTAL_CODE, $this->postal_code);
		if ($this->isColumnModified(snappsCompanyPeer::WEBSITE)) $criteria->add(snappsCompanyPeer::WEBSITE, $this->website);
		if ($this->isColumnModified(snappsCompanyPeer::LOGO_FILENAME)) $criteria->add(snappsCompanyPeer::LOGO_FILENAME, $this->logo_filename);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(snappsCompanyPeer::DATABASE_NAME);

		$criteria->add(snappsCompanyPeer::INDEX_NO, $this->index_no);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getIndexNo();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setIndexNo($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setCompany($this->company);

		$copyObj->setNickname($this->nickname);

		$copyObj->setInitial($this->initial);

		$copyObj->setAddressLine1($this->address_line1);

		$copyObj->setAddressLine2($this->address_line2);

		$copyObj->setPhone($this->phone);

		$copyObj->setFax($this->fax);

		$copyObj->setPostalCode($this->postal_code);

		$copyObj->setWebsite($this->website);

		$copyObj->setLogoFilename($this->logo_filename);


		$copyObj->setNew(true);

		$copyObj->setIndexNo(NULL); 
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
			self::$peer = new snappsCompanyPeer();
		}
		return self::$peer;
	}

} 
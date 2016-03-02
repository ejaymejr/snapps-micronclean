<?php


abstract class BaseAirParticleCountMicroncleanGCell extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $record_id = '0';


	
	protected $grid_label = 'null';


	
	protected $particle_count;


	
	protected $air_flow;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getRecordId()
	{

		return $this->record_id;
	}

	
	public function getGridLabel()
	{

		return $this->grid_label;
	}

	
	public function getParticleCount()
	{

		return $this->particle_count;
	}

	
	public function getAirFlow()
	{

		return $this->air_flow;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = AirParticleCountMicroncleanGCellPeer::ID;
		}

	} 
	
	public function setRecordId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->record_id !== $v || $v === '0') {
			$this->record_id = $v;
			$this->modifiedColumns[] = AirParticleCountMicroncleanGCellPeer::RECORD_ID;
		}

	} 
	
	public function setGridLabel($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->grid_label !== $v || $v === 'null') {
			$this->grid_label = $v;
			$this->modifiedColumns[] = AirParticleCountMicroncleanGCellPeer::GRID_LABEL;
		}

	} 
	
	public function setParticleCount($v)
	{

		if ($this->particle_count !== $v) {
			$this->particle_count = $v;
			$this->modifiedColumns[] = AirParticleCountMicroncleanGCellPeer::PARTICLE_COUNT;
		}

	} 
	
	public function setAirFlow($v)
	{

		if ($this->air_flow !== $v) {
			$this->air_flow = $v;
			$this->modifiedColumns[] = AirParticleCountMicroncleanGCellPeer::AIR_FLOW;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->record_id = $rs->getString($startcol + 1);

			$this->grid_label = $rs->getString($startcol + 2);

			$this->particle_count = $rs->getFloat($startcol + 3);

			$this->air_flow = $rs->getFloat($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating AirParticleCountMicroncleanGCell object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AirParticleCountMicroncleanGCellPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			AirParticleCountMicroncleanGCellPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(AirParticleCountMicroncleanGCellPeer::DATABASE_NAME);
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
					$pk = AirParticleCountMicroncleanGCellPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += AirParticleCountMicroncleanGCellPeer::doUpdate($this, $con);
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


			if (($retval = AirParticleCountMicroncleanGCellPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AirParticleCountMicroncleanGCellPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getRecordId();
				break;
			case 2:
				return $this->getGridLabel();
				break;
			case 3:
				return $this->getParticleCount();
				break;
			case 4:
				return $this->getAirFlow();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AirParticleCountMicroncleanGCellPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getRecordId(),
			$keys[2] => $this->getGridLabel(),
			$keys[3] => $this->getParticleCount(),
			$keys[4] => $this->getAirFlow(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AirParticleCountMicroncleanGCellPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setRecordId($value);
				break;
			case 2:
				$this->setGridLabel($value);
				break;
			case 3:
				$this->setParticleCount($value);
				break;
			case 4:
				$this->setAirFlow($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AirParticleCountMicroncleanGCellPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRecordId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setGridLabel($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setParticleCount($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAirFlow($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(AirParticleCountMicroncleanGCellPeer::DATABASE_NAME);

		if ($this->isColumnModified(AirParticleCountMicroncleanGCellPeer::ID)) $criteria->add(AirParticleCountMicroncleanGCellPeer::ID, $this->id);
		if ($this->isColumnModified(AirParticleCountMicroncleanGCellPeer::RECORD_ID)) $criteria->add(AirParticleCountMicroncleanGCellPeer::RECORD_ID, $this->record_id);
		if ($this->isColumnModified(AirParticleCountMicroncleanGCellPeer::GRID_LABEL)) $criteria->add(AirParticleCountMicroncleanGCellPeer::GRID_LABEL, $this->grid_label);
		if ($this->isColumnModified(AirParticleCountMicroncleanGCellPeer::PARTICLE_COUNT)) $criteria->add(AirParticleCountMicroncleanGCellPeer::PARTICLE_COUNT, $this->particle_count);
		if ($this->isColumnModified(AirParticleCountMicroncleanGCellPeer::AIR_FLOW)) $criteria->add(AirParticleCountMicroncleanGCellPeer::AIR_FLOW, $this->air_flow);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AirParticleCountMicroncleanGCellPeer::DATABASE_NAME);

		$criteria->add(AirParticleCountMicroncleanGCellPeer::ID, $this->id);

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

		$copyObj->setRecordId($this->record_id);

		$copyObj->setGridLabel($this->grid_label);

		$copyObj->setParticleCount($this->particle_count);

		$copyObj->setAirFlow($this->air_flow);


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
			self::$peer = new AirParticleCountMicroncleanGCellPeer();
		}
		return self::$peer;
	}

} 
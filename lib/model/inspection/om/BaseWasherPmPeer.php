<?php


abstract class BaseWasherPmPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'washer_pm';

	
	const CLASS_DEFAULT = 'lib.model.inspection.WasherPm';

	
	const NUM_COLUMNS = 21;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'washer_pm.ID';

	
	const TRANS_DATE = 'washer_pm.TRANS_DATE';

	
	const MACHINE_TYPE = 'washer_pm.MACHINE_TYPE';

	
	const CLEAN_MACHINE = 'washer_pm.CLEAN_MACHINE';

	
	const PURGED_WATER = 'washer_pm.PURGED_WATER';

	
	const CLEAN_DOOR = 'washer_pm.CLEAN_DOOR';

	
	const CHECK_BELT = 'washer_pm.CHECK_BELT';

	
	const CHECK_HOSE = 'washer_pm.CHECK_HOSE';

	
	const LUBRICATE_BEARINGS = 'washer_pm.LUBRICATE_BEARINGS';

	
	const CHECK_SENSORY = 'washer_pm.CHECK_SENSORY';

	
	const TEMP_CONTROL = 'washer_pm.TEMP_CONTROL';

	
	const TEMP_VERIFY = 'washer_pm.TEMP_VERIFY';

	
	const PERFORMED_BY = 'washer_pm.PERFORMED_BY';

	
	const VERIFIED_BY = 'washer_pm.VERIFIED_BY';

	
	const VERIFY_DATE = 'washer_pm.VERIFY_DATE';

	
	const CHECK_BRAKE = 'washer_pm.CHECK_BRAKE';

	
	const REMARK = 'washer_pm.REMARK';

	
	const CREATED_BY = 'washer_pm.CREATED_BY';

	
	const DATE_CREATED = 'washer_pm.DATE_CREATED';

	
	const MODIFIED_BY = 'washer_pm.MODIFIED_BY';

	
	const DATE_MODIFIED = 'washer_pm.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'MachineType', 'CleanMachine', 'PurgedWater', 'CleanDoor', 'CheckBelt', 'CheckHose', 'LubricateBearings', 'CheckSensory', 'TempControl', 'TempVerify', 'PerformedBy', 'VerifiedBy', 'VerifyDate', 'CheckBrake', 'Remark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (WasherPmPeer::ID, WasherPmPeer::TRANS_DATE, WasherPmPeer::MACHINE_TYPE, WasherPmPeer::CLEAN_MACHINE, WasherPmPeer::PURGED_WATER, WasherPmPeer::CLEAN_DOOR, WasherPmPeer::CHECK_BELT, WasherPmPeer::CHECK_HOSE, WasherPmPeer::LUBRICATE_BEARINGS, WasherPmPeer::CHECK_SENSORY, WasherPmPeer::TEMP_CONTROL, WasherPmPeer::TEMP_VERIFY, WasherPmPeer::PERFORMED_BY, WasherPmPeer::VERIFIED_BY, WasherPmPeer::VERIFY_DATE, WasherPmPeer::CHECK_BRAKE, WasherPmPeer::REMARK, WasherPmPeer::CREATED_BY, WasherPmPeer::DATE_CREATED, WasherPmPeer::MODIFIED_BY, WasherPmPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'machine_type', 'clean_machine', 'purged_water', 'clean_door', 'check_belt', 'check_hose', 'lubricate_bearings', 'check_sensory', 'temp_control', 'temp_verify', 'performed_by', 'verified_by', 'verify_date', 'check_brake', 'remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'MachineType' => 2, 'CleanMachine' => 3, 'PurgedWater' => 4, 'CleanDoor' => 5, 'CheckBelt' => 6, 'CheckHose' => 7, 'LubricateBearings' => 8, 'CheckSensory' => 9, 'TempControl' => 10, 'TempVerify' => 11, 'PerformedBy' => 12, 'VerifiedBy' => 13, 'VerifyDate' => 14, 'CheckBrake' => 15, 'Remark' => 16, 'CreatedBy' => 17, 'DateCreated' => 18, 'ModifiedBy' => 19, 'DateModified' => 20, ),
		BasePeer::TYPE_COLNAME => array (WasherPmPeer::ID => 0, WasherPmPeer::TRANS_DATE => 1, WasherPmPeer::MACHINE_TYPE => 2, WasherPmPeer::CLEAN_MACHINE => 3, WasherPmPeer::PURGED_WATER => 4, WasherPmPeer::CLEAN_DOOR => 5, WasherPmPeer::CHECK_BELT => 6, WasherPmPeer::CHECK_HOSE => 7, WasherPmPeer::LUBRICATE_BEARINGS => 8, WasherPmPeer::CHECK_SENSORY => 9, WasherPmPeer::TEMP_CONTROL => 10, WasherPmPeer::TEMP_VERIFY => 11, WasherPmPeer::PERFORMED_BY => 12, WasherPmPeer::VERIFIED_BY => 13, WasherPmPeer::VERIFY_DATE => 14, WasherPmPeer::CHECK_BRAKE => 15, WasherPmPeer::REMARK => 16, WasherPmPeer::CREATED_BY => 17, WasherPmPeer::DATE_CREATED => 18, WasherPmPeer::MODIFIED_BY => 19, WasherPmPeer::DATE_MODIFIED => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'machine_type' => 2, 'clean_machine' => 3, 'purged_water' => 4, 'clean_door' => 5, 'check_belt' => 6, 'check_hose' => 7, 'lubricate_bearings' => 8, 'check_sensory' => 9, 'temp_control' => 10, 'temp_verify' => 11, 'performed_by' => 12, 'verified_by' => 13, 'verify_date' => 14, 'check_brake' => 15, 'remark' => 16, 'created_by' => 17, 'date_created' => 18, 'modified_by' => 19, 'date_modified' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/WasherPmMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.WasherPmMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = WasherPmPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(WasherPmPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(WasherPmPeer::ID);

		$criteria->addSelectColumn(WasherPmPeer::TRANS_DATE);

		$criteria->addSelectColumn(WasherPmPeer::MACHINE_TYPE);

		$criteria->addSelectColumn(WasherPmPeer::CLEAN_MACHINE);

		$criteria->addSelectColumn(WasherPmPeer::PURGED_WATER);

		$criteria->addSelectColumn(WasherPmPeer::CLEAN_DOOR);

		$criteria->addSelectColumn(WasherPmPeer::CHECK_BELT);

		$criteria->addSelectColumn(WasherPmPeer::CHECK_HOSE);

		$criteria->addSelectColumn(WasherPmPeer::LUBRICATE_BEARINGS);

		$criteria->addSelectColumn(WasherPmPeer::CHECK_SENSORY);

		$criteria->addSelectColumn(WasherPmPeer::TEMP_CONTROL);

		$criteria->addSelectColumn(WasherPmPeer::TEMP_VERIFY);

		$criteria->addSelectColumn(WasherPmPeer::PERFORMED_BY);

		$criteria->addSelectColumn(WasherPmPeer::VERIFIED_BY);

		$criteria->addSelectColumn(WasherPmPeer::VERIFY_DATE);

		$criteria->addSelectColumn(WasherPmPeer::CHECK_BRAKE);

		$criteria->addSelectColumn(WasherPmPeer::REMARK);

		$criteria->addSelectColumn(WasherPmPeer::CREATED_BY);

		$criteria->addSelectColumn(WasherPmPeer::DATE_CREATED);

		$criteria->addSelectColumn(WasherPmPeer::MODIFIED_BY);

		$criteria->addSelectColumn(WasherPmPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(washer_pm.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT washer_pm.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(WasherPmPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(WasherPmPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = WasherPmPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = WasherPmPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return WasherPmPeer::populateObjects(WasherPmPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			WasherPmPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = WasherPmPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}
	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return WasherPmPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(WasherPmPeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(WasherPmPeer::ID);
			$selectCriteria->add(WasherPmPeer::ID, $criteria->remove(WasherPmPeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(WasherPmPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(WasherPmPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof WasherPm) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(WasherPmPeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(WasherPm $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(WasherPmPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(WasherPmPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(WasherPmPeer::DATABASE_NAME, WasherPmPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = WasherPmPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(WasherPmPeer::DATABASE_NAME);

		$criteria->add(WasherPmPeer::ID, $pk);


		$v = WasherPmPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(WasherPmPeer::ID, $pks, Criteria::IN);
			$objs = WasherPmPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseWasherPmPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/WasherPmMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.WasherPmMapBuilder');
}

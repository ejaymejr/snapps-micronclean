<?php


abstract class BasePms1232abWeeklyPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'pms_1232ab_weekly';

	
	const CLASS_DEFAULT = 'lib.model.inspection.Pms1232abWeekly';

	
	const NUM_COLUMNS = 19;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'pms_1232ab_weekly.ID';

	
	const TRANS_DATE = 'pms_1232ab_weekly.TRANS_DATE';

	
	const MACHINE_NO = 'pms_1232ab_weekly.MACHINE_NO';

	
	const SENSOR_DIAGNOSTIC = 'pms_1232ab_weekly.SENSOR_DIAGNOSTIC';

	
	const CHAMBER_TEMP = 'pms_1232ab_weekly.CHAMBER_TEMP';

	
	const ACTUATOR_DIAGNOSTIC = 'pms_1232ab_weekly.ACTUATOR_DIAGNOSTIC';

	
	const BASKET_INSPECT = 'pms_1232ab_weekly.BASKET_INSPECT';

	
	const CHAMBER_CLEAN = 'pms_1232ab_weekly.CHAMBER_CLEAN';

	
	const NOZZLE_INSPECT = 'pms_1232ab_weekly.NOZZLE_INSPECT';

	
	const PLUMBING_INSPECT = 'pms_1232ab_weekly.PLUMBING_INSPECT';

	
	const DRIVE_ROLLER = 'pms_1232ab_weekly.DRIVE_ROLLER';

	
	const DRIVE_BELT = 'pms_1232ab_weekly.DRIVE_BELT';

	
	const CHAIN_TENTION = 'pms_1232ab_weekly.CHAIN_TENTION';

	
	const INITIAL = 'pms_1232ab_weekly.INITIAL';

	
	const REMARK = 'pms_1232ab_weekly.REMARK';

	
	const CREATED_BY = 'pms_1232ab_weekly.CREATED_BY';

	
	const DATE_CREATED = 'pms_1232ab_weekly.DATE_CREATED';

	
	const MODIFIED_BY = 'pms_1232ab_weekly.MODIFIED_BY';

	
	const DATE_MODIFIED = 'pms_1232ab_weekly.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'MachineNo', 'SensorDiagnostic', 'ChamberTemp', 'ActuatorDiagnostic', 'BasketInspect', 'ChamberClean', 'NozzleInspect', 'PlumbingInspect', 'DriveRoller', 'DriveBelt', 'ChainTention', 'Initial', 'Remark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (Pms1232abWeeklyPeer::ID, Pms1232abWeeklyPeer::TRANS_DATE, Pms1232abWeeklyPeer::MACHINE_NO, Pms1232abWeeklyPeer::SENSOR_DIAGNOSTIC, Pms1232abWeeklyPeer::CHAMBER_TEMP, Pms1232abWeeklyPeer::ACTUATOR_DIAGNOSTIC, Pms1232abWeeklyPeer::BASKET_INSPECT, Pms1232abWeeklyPeer::CHAMBER_CLEAN, Pms1232abWeeklyPeer::NOZZLE_INSPECT, Pms1232abWeeklyPeer::PLUMBING_INSPECT, Pms1232abWeeklyPeer::DRIVE_ROLLER, Pms1232abWeeklyPeer::DRIVE_BELT, Pms1232abWeeklyPeer::CHAIN_TENTION, Pms1232abWeeklyPeer::INITIAL, Pms1232abWeeklyPeer::REMARK, Pms1232abWeeklyPeer::CREATED_BY, Pms1232abWeeklyPeer::DATE_CREATED, Pms1232abWeeklyPeer::MODIFIED_BY, Pms1232abWeeklyPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'machine_no', 'sensor_diagnostic', 'chamber_temp', 'actuator_diagnostic', 'basket_inspect', 'chamber_clean', 'nozzle_inspect', 'plumbing_inspect', 'drive_roller', 'drive_belt', 'chain_tention', 'initial', 'remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'MachineNo' => 2, 'SensorDiagnostic' => 3, 'ChamberTemp' => 4, 'ActuatorDiagnostic' => 5, 'BasketInspect' => 6, 'ChamberClean' => 7, 'NozzleInspect' => 8, 'PlumbingInspect' => 9, 'DriveRoller' => 10, 'DriveBelt' => 11, 'ChainTention' => 12, 'Initial' => 13, 'Remark' => 14, 'CreatedBy' => 15, 'DateCreated' => 16, 'ModifiedBy' => 17, 'DateModified' => 18, ),
		BasePeer::TYPE_COLNAME => array (Pms1232abWeeklyPeer::ID => 0, Pms1232abWeeklyPeer::TRANS_DATE => 1, Pms1232abWeeklyPeer::MACHINE_NO => 2, Pms1232abWeeklyPeer::SENSOR_DIAGNOSTIC => 3, Pms1232abWeeklyPeer::CHAMBER_TEMP => 4, Pms1232abWeeklyPeer::ACTUATOR_DIAGNOSTIC => 5, Pms1232abWeeklyPeer::BASKET_INSPECT => 6, Pms1232abWeeklyPeer::CHAMBER_CLEAN => 7, Pms1232abWeeklyPeer::NOZZLE_INSPECT => 8, Pms1232abWeeklyPeer::PLUMBING_INSPECT => 9, Pms1232abWeeklyPeer::DRIVE_ROLLER => 10, Pms1232abWeeklyPeer::DRIVE_BELT => 11, Pms1232abWeeklyPeer::CHAIN_TENTION => 12, Pms1232abWeeklyPeer::INITIAL => 13, Pms1232abWeeklyPeer::REMARK => 14, Pms1232abWeeklyPeer::CREATED_BY => 15, Pms1232abWeeklyPeer::DATE_CREATED => 16, Pms1232abWeeklyPeer::MODIFIED_BY => 17, Pms1232abWeeklyPeer::DATE_MODIFIED => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'machine_no' => 2, 'sensor_diagnostic' => 3, 'chamber_temp' => 4, 'actuator_diagnostic' => 5, 'basket_inspect' => 6, 'chamber_clean' => 7, 'nozzle_inspect' => 8, 'plumbing_inspect' => 9, 'drive_roller' => 10, 'drive_belt' => 11, 'chain_tention' => 12, 'initial' => 13, 'remark' => 14, 'created_by' => 15, 'date_created' => 16, 'modified_by' => 17, 'date_modified' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/Pms1232abWeeklyMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.Pms1232abWeeklyMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = Pms1232abWeeklyPeer::getTableMap();
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
		return str_replace(Pms1232abWeeklyPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::ID);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::TRANS_DATE);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::MACHINE_NO);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::SENSOR_DIAGNOSTIC);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::CHAMBER_TEMP);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::ACTUATOR_DIAGNOSTIC);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::BASKET_INSPECT);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::CHAMBER_CLEAN);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::NOZZLE_INSPECT);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::PLUMBING_INSPECT);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::DRIVE_ROLLER);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::DRIVE_BELT);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::CHAIN_TENTION);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::INITIAL);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::REMARK);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::CREATED_BY);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::DATE_CREATED);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::MODIFIED_BY);

		$criteria->addSelectColumn(Pms1232abWeeklyPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(pms_1232ab_weekly.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT pms_1232ab_weekly.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(Pms1232abWeeklyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(Pms1232abWeeklyPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = Pms1232abWeeklyPeer::doSelectRS($criteria, $con);
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
		$objects = Pms1232abWeeklyPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return Pms1232abWeeklyPeer::populateObjects(Pms1232abWeeklyPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			Pms1232abWeeklyPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = Pms1232abWeeklyPeer::getOMClass();
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
		return Pms1232abWeeklyPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(Pms1232abWeeklyPeer::ID); 

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
			$comparison = $criteria->getComparison(Pms1232abWeeklyPeer::ID);
			$selectCriteria->add(Pms1232abWeeklyPeer::ID, $criteria->remove(Pms1232abWeeklyPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(Pms1232abWeeklyPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(Pms1232abWeeklyPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Pms1232abWeekly) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Pms1232abWeeklyPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Pms1232abWeekly $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Pms1232abWeeklyPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Pms1232abWeeklyPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(Pms1232abWeeklyPeer::DATABASE_NAME, Pms1232abWeeklyPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = Pms1232abWeeklyPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(Pms1232abWeeklyPeer::DATABASE_NAME);

		$criteria->add(Pms1232abWeeklyPeer::ID, $pk);


		$v = Pms1232abWeeklyPeer::doSelect($criteria, $con);

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
			$criteria->add(Pms1232abWeeklyPeer::ID, $pks, Criteria::IN);
			$objs = Pms1232abWeeklyPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasePms1232abWeeklyPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/Pms1232abWeeklyMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.Pms1232abWeeklyMapBuilder');
}

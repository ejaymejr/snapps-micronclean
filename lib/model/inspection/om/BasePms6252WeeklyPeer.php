<?php


abstract class BasePms6252WeeklyPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'pms_6252_weekly';

	
	const CLASS_DEFAULT = 'lib.model.inspection.Pms6252Weekly';

	
	const NUM_COLUMNS = 18;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'pms_6252_weekly.ID';

	
	const TRANS_DATE = 'pms_6252_weekly.TRANS_DATE';

	
	const MACHINE_NO = 'pms_6252_weekly.MACHINE_NO';

	
	const SENSOR_DIAGNOSTIC = 'pms_6252_weekly.SENSOR_DIAGNOSTIC';

	
	const ACTUATOR_DIAGNOSTIC = 'pms_6252_weekly.ACTUATOR_DIAGNOSTIC';

	
	const BASKET_INSPECT = 'pms_6252_weekly.BASKET_INSPECT';

	
	const CHAMBER_CLEAN = 'pms_6252_weekly.CHAMBER_CLEAN';

	
	const NOZZLE_INSPECT = 'pms_6252_weekly.NOZZLE_INSPECT';

	
	const PLUMBING_INSPECT = 'pms_6252_weekly.PLUMBING_INSPECT';

	
	const DRIVE_ROLLER = 'pms_6252_weekly.DRIVE_ROLLER';

	
	const DRIVE_BELT = 'pms_6252_weekly.DRIVE_BELT';

	
	const CHAIN_TENTION = 'pms_6252_weekly.CHAIN_TENTION';

	
	const INITIAL = 'pms_6252_weekly.INITIAL';

	
	const REMARK = 'pms_6252_weekly.REMARK';

	
	const CREATED_BY = 'pms_6252_weekly.CREATED_BY';

	
	const DATE_CREATED = 'pms_6252_weekly.DATE_CREATED';

	
	const MODIFIED_BY = 'pms_6252_weekly.MODIFIED_BY';

	
	const DATE_MODIFIED = 'pms_6252_weekly.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'MachineNo', 'SensorDiagnostic', 'ActuatorDiagnostic', 'BasketInspect', 'ChamberClean', 'NozzleInspect', 'PlumbingInspect', 'DriveRoller', 'DriveBelt', 'ChainTention', 'Initial', 'Remark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (Pms6252WeeklyPeer::ID, Pms6252WeeklyPeer::TRANS_DATE, Pms6252WeeklyPeer::MACHINE_NO, Pms6252WeeklyPeer::SENSOR_DIAGNOSTIC, Pms6252WeeklyPeer::ACTUATOR_DIAGNOSTIC, Pms6252WeeklyPeer::BASKET_INSPECT, Pms6252WeeklyPeer::CHAMBER_CLEAN, Pms6252WeeklyPeer::NOZZLE_INSPECT, Pms6252WeeklyPeer::PLUMBING_INSPECT, Pms6252WeeklyPeer::DRIVE_ROLLER, Pms6252WeeklyPeer::DRIVE_BELT, Pms6252WeeklyPeer::CHAIN_TENTION, Pms6252WeeklyPeer::INITIAL, Pms6252WeeklyPeer::REMARK, Pms6252WeeklyPeer::CREATED_BY, Pms6252WeeklyPeer::DATE_CREATED, Pms6252WeeklyPeer::MODIFIED_BY, Pms6252WeeklyPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'machine_no', 'sensor_diagnostic', 'actuator_diagnostic', 'basket_inspect', 'chamber_clean', 'nozzle_inspect', 'plumbing_inspect', 'drive_roller', 'drive_belt', 'chain_tention', 'initial', 'remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'MachineNo' => 2, 'SensorDiagnostic' => 3, 'ActuatorDiagnostic' => 4, 'BasketInspect' => 5, 'ChamberClean' => 6, 'NozzleInspect' => 7, 'PlumbingInspect' => 8, 'DriveRoller' => 9, 'DriveBelt' => 10, 'ChainTention' => 11, 'Initial' => 12, 'Remark' => 13, 'CreatedBy' => 14, 'DateCreated' => 15, 'ModifiedBy' => 16, 'DateModified' => 17, ),
		BasePeer::TYPE_COLNAME => array (Pms6252WeeklyPeer::ID => 0, Pms6252WeeklyPeer::TRANS_DATE => 1, Pms6252WeeklyPeer::MACHINE_NO => 2, Pms6252WeeklyPeer::SENSOR_DIAGNOSTIC => 3, Pms6252WeeklyPeer::ACTUATOR_DIAGNOSTIC => 4, Pms6252WeeklyPeer::BASKET_INSPECT => 5, Pms6252WeeklyPeer::CHAMBER_CLEAN => 6, Pms6252WeeklyPeer::NOZZLE_INSPECT => 7, Pms6252WeeklyPeer::PLUMBING_INSPECT => 8, Pms6252WeeklyPeer::DRIVE_ROLLER => 9, Pms6252WeeklyPeer::DRIVE_BELT => 10, Pms6252WeeklyPeer::CHAIN_TENTION => 11, Pms6252WeeklyPeer::INITIAL => 12, Pms6252WeeklyPeer::REMARK => 13, Pms6252WeeklyPeer::CREATED_BY => 14, Pms6252WeeklyPeer::DATE_CREATED => 15, Pms6252WeeklyPeer::MODIFIED_BY => 16, Pms6252WeeklyPeer::DATE_MODIFIED => 17, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'machine_no' => 2, 'sensor_diagnostic' => 3, 'actuator_diagnostic' => 4, 'basket_inspect' => 5, 'chamber_clean' => 6, 'nozzle_inspect' => 7, 'plumbing_inspect' => 8, 'drive_roller' => 9, 'drive_belt' => 10, 'chain_tention' => 11, 'initial' => 12, 'remark' => 13, 'created_by' => 14, 'date_created' => 15, 'modified_by' => 16, 'date_modified' => 17, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/Pms6252WeeklyMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.Pms6252WeeklyMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = Pms6252WeeklyPeer::getTableMap();
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
		return str_replace(Pms6252WeeklyPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(Pms6252WeeklyPeer::ID);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::TRANS_DATE);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::MACHINE_NO);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::SENSOR_DIAGNOSTIC);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::ACTUATOR_DIAGNOSTIC);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::BASKET_INSPECT);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::CHAMBER_CLEAN);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::NOZZLE_INSPECT);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::PLUMBING_INSPECT);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::DRIVE_ROLLER);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::DRIVE_BELT);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::CHAIN_TENTION);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::INITIAL);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::REMARK);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::CREATED_BY);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::DATE_CREATED);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::MODIFIED_BY);

		$criteria->addSelectColumn(Pms6252WeeklyPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(pms_6252_weekly.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT pms_6252_weekly.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(Pms6252WeeklyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(Pms6252WeeklyPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = Pms6252WeeklyPeer::doSelectRS($criteria, $con);
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
		$objects = Pms6252WeeklyPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return Pms6252WeeklyPeer::populateObjects(Pms6252WeeklyPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			Pms6252WeeklyPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = Pms6252WeeklyPeer::getOMClass();
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
		return Pms6252WeeklyPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(Pms6252WeeklyPeer::ID); 

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
			$comparison = $criteria->getComparison(Pms6252WeeklyPeer::ID);
			$selectCriteria->add(Pms6252WeeklyPeer::ID, $criteria->remove(Pms6252WeeklyPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(Pms6252WeeklyPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(Pms6252WeeklyPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Pms6252Weekly) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Pms6252WeeklyPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Pms6252Weekly $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Pms6252WeeklyPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Pms6252WeeklyPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(Pms6252WeeklyPeer::DATABASE_NAME, Pms6252WeeklyPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = Pms6252WeeklyPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(Pms6252WeeklyPeer::DATABASE_NAME);

		$criteria->add(Pms6252WeeklyPeer::ID, $pk);


		$v = Pms6252WeeklyPeer::doSelect($criteria, $con);

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
			$criteria->add(Pms6252WeeklyPeer::ID, $pks, Criteria::IN);
			$objs = Pms6252WeeklyPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasePms6252WeeklyPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/Pms6252WeeklyMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.Pms6252WeeklyMapBuilder');
}

<?php


abstract class BaseWaterMonitoringPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'water_monitoring';

	
	const CLASS_DEFAULT = 'lib.model.iso.WaterMonitoring';

	
	const NUM_COLUMNS = 24;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'water_monitoring.ID';

	
	const DATE_TIME = 'water_monitoring.DATE_TIME';

	
	const MACHINE_NO = 'water_monitoring.MACHINE_NO';

	
	const AM_8 = 'water_monitoring.AM_8';

	
	const AM_9 = 'water_monitoring.AM_9';

	
	const AM_10 = 'water_monitoring.AM_10';

	
	const AM_11 = 'water_monitoring.AM_11';

	
	const NN_12 = 'water_monitoring.NN_12';

	
	const PM_1 = 'water_monitoring.PM_1';

	
	const PM_2 = 'water_monitoring.PM_2';

	
	const PM_3 = 'water_monitoring.PM_3';

	
	const PM_4 = 'water_monitoring.PM_4';

	
	const PM_5 = 'water_monitoring.PM_5';

	
	const PM_6 = 'water_monitoring.PM_6';

	
	const PM_7 = 'water_monitoring.PM_7';

	
	const PM_8 = 'water_monitoring.PM_8';

	
	const PM_9 = 'water_monitoring.PM_9';

	
	const PM_10 = 'water_monitoring.PM_10';

	
	const TESTER = 'water_monitoring.TESTER';

	
	const REMARK = 'water_monitoring.REMARK';

	
	const DATE_CREATED = 'water_monitoring.DATE_CREATED';

	
	const CREATED_BY = 'water_monitoring.CREATED_BY';

	
	const DATE_MODIFIED = 'water_monitoring.DATE_MODIFIED';

	
	const MODIFIED_BY = 'water_monitoring.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'MachineNo', 'Am8', 'Am9', 'Am10', 'Am11', 'Nn12', 'Pm1', 'Pm2', 'Pm3', 'Pm4', 'Pm5', 'Pm6', 'Pm7', 'Pm8', 'Pm9', 'Pm10', 'Tester', 'Remark', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (WaterMonitoringPeer::ID, WaterMonitoringPeer::DATE_TIME, WaterMonitoringPeer::MACHINE_NO, WaterMonitoringPeer::AM_8, WaterMonitoringPeer::AM_9, WaterMonitoringPeer::AM_10, WaterMonitoringPeer::AM_11, WaterMonitoringPeer::NN_12, WaterMonitoringPeer::PM_1, WaterMonitoringPeer::PM_2, WaterMonitoringPeer::PM_3, WaterMonitoringPeer::PM_4, WaterMonitoringPeer::PM_5, WaterMonitoringPeer::PM_6, WaterMonitoringPeer::PM_7, WaterMonitoringPeer::PM_8, WaterMonitoringPeer::PM_9, WaterMonitoringPeer::PM_10, WaterMonitoringPeer::TESTER, WaterMonitoringPeer::REMARK, WaterMonitoringPeer::DATE_CREATED, WaterMonitoringPeer::CREATED_BY, WaterMonitoringPeer::DATE_MODIFIED, WaterMonitoringPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'machine_no', 'am_8', 'am_9', 'am_10', 'am_11', 'nn_12', 'pm_1', 'pm_2', 'pm_3', 'pm_4', 'pm_5', 'pm_6', 'pm_7', 'pm_8', 'pm_9', 'pm_10', 'tester', 'remark', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'MachineNo' => 2, 'Am8' => 3, 'Am9' => 4, 'Am10' => 5, 'Am11' => 6, 'Nn12' => 7, 'Pm1' => 8, 'Pm2' => 9, 'Pm3' => 10, 'Pm4' => 11, 'Pm5' => 12, 'Pm6' => 13, 'Pm7' => 14, 'Pm8' => 15, 'Pm9' => 16, 'Pm10' => 17, 'Tester' => 18, 'Remark' => 19, 'DateCreated' => 20, 'CreatedBy' => 21, 'DateModified' => 22, 'ModifiedBy' => 23, ),
		BasePeer::TYPE_COLNAME => array (WaterMonitoringPeer::ID => 0, WaterMonitoringPeer::DATE_TIME => 1, WaterMonitoringPeer::MACHINE_NO => 2, WaterMonitoringPeer::AM_8 => 3, WaterMonitoringPeer::AM_9 => 4, WaterMonitoringPeer::AM_10 => 5, WaterMonitoringPeer::AM_11 => 6, WaterMonitoringPeer::NN_12 => 7, WaterMonitoringPeer::PM_1 => 8, WaterMonitoringPeer::PM_2 => 9, WaterMonitoringPeer::PM_3 => 10, WaterMonitoringPeer::PM_4 => 11, WaterMonitoringPeer::PM_5 => 12, WaterMonitoringPeer::PM_6 => 13, WaterMonitoringPeer::PM_7 => 14, WaterMonitoringPeer::PM_8 => 15, WaterMonitoringPeer::PM_9 => 16, WaterMonitoringPeer::PM_10 => 17, WaterMonitoringPeer::TESTER => 18, WaterMonitoringPeer::REMARK => 19, WaterMonitoringPeer::DATE_CREATED => 20, WaterMonitoringPeer::CREATED_BY => 21, WaterMonitoringPeer::DATE_MODIFIED => 22, WaterMonitoringPeer::MODIFIED_BY => 23, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'machine_no' => 2, 'am_8' => 3, 'am_9' => 4, 'am_10' => 5, 'am_11' => 6, 'nn_12' => 7, 'pm_1' => 8, 'pm_2' => 9, 'pm_3' => 10, 'pm_4' => 11, 'pm_5' => 12, 'pm_6' => 13, 'pm_7' => 14, 'pm_8' => 15, 'pm_9' => 16, 'pm_10' => 17, 'tester' => 18, 'remark' => 19, 'date_created' => 20, 'created_by' => 21, 'date_modified' => 22, 'modified_by' => 23, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/WaterMonitoringMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.WaterMonitoringMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = WaterMonitoringPeer::getTableMap();
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
		return str_replace(WaterMonitoringPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(WaterMonitoringPeer::ID);

		$criteria->addSelectColumn(WaterMonitoringPeer::DATE_TIME);

		$criteria->addSelectColumn(WaterMonitoringPeer::MACHINE_NO);

		$criteria->addSelectColumn(WaterMonitoringPeer::AM_8);

		$criteria->addSelectColumn(WaterMonitoringPeer::AM_9);

		$criteria->addSelectColumn(WaterMonitoringPeer::AM_10);

		$criteria->addSelectColumn(WaterMonitoringPeer::AM_11);

		$criteria->addSelectColumn(WaterMonitoringPeer::NN_12);

		$criteria->addSelectColumn(WaterMonitoringPeer::PM_1);

		$criteria->addSelectColumn(WaterMonitoringPeer::PM_2);

		$criteria->addSelectColumn(WaterMonitoringPeer::PM_3);

		$criteria->addSelectColumn(WaterMonitoringPeer::PM_4);

		$criteria->addSelectColumn(WaterMonitoringPeer::PM_5);

		$criteria->addSelectColumn(WaterMonitoringPeer::PM_6);

		$criteria->addSelectColumn(WaterMonitoringPeer::PM_7);

		$criteria->addSelectColumn(WaterMonitoringPeer::PM_8);

		$criteria->addSelectColumn(WaterMonitoringPeer::PM_9);

		$criteria->addSelectColumn(WaterMonitoringPeer::PM_10);

		$criteria->addSelectColumn(WaterMonitoringPeer::TESTER);

		$criteria->addSelectColumn(WaterMonitoringPeer::REMARK);

		$criteria->addSelectColumn(WaterMonitoringPeer::DATE_CREATED);

		$criteria->addSelectColumn(WaterMonitoringPeer::CREATED_BY);

		$criteria->addSelectColumn(WaterMonitoringPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(WaterMonitoringPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(water_monitoring.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT water_monitoring.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(WaterMonitoringPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(WaterMonitoringPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = WaterMonitoringPeer::doSelectRS($criteria, $con);
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
		$objects = WaterMonitoringPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return WaterMonitoringPeer::populateObjects(WaterMonitoringPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			WaterMonitoringPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = WaterMonitoringPeer::getOMClass();
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
		return WaterMonitoringPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(WaterMonitoringPeer::ID); 

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
			$comparison = $criteria->getComparison(WaterMonitoringPeer::ID);
			$selectCriteria->add(WaterMonitoringPeer::ID, $criteria->remove(WaterMonitoringPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(WaterMonitoringPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(WaterMonitoringPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof WaterMonitoring) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(WaterMonitoringPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(WaterMonitoring $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(WaterMonitoringPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(WaterMonitoringPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(WaterMonitoringPeer::DATABASE_NAME, WaterMonitoringPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = WaterMonitoringPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(WaterMonitoringPeer::DATABASE_NAME);

		$criteria->add(WaterMonitoringPeer::ID, $pk);


		$v = WaterMonitoringPeer::doSelect($criteria, $con);

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
			$criteria->add(WaterMonitoringPeer::ID, $pks, Criteria::IN);
			$objs = WaterMonitoringPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseWaterMonitoringPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/WaterMonitoringMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.WaterMonitoringMapBuilder');
}

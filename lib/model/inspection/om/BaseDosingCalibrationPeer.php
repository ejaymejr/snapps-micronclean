<?php


abstract class BaseDosingCalibrationPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'dosing_calibration';

	
	const CLASS_DEFAULT = 'lib.model.inspection.DosingCalibration';

	
	const NUM_COLUMNS = 16;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'dosing_calibration.ID';

	
	const TRANS_DATE = 'dosing_calibration.TRANS_DATE';

	
	const MACHINE_NO = 'dosing_calibration.MACHINE_NO';

	
	const PUMP_MODEL = 'dosing_calibration.PUMP_MODEL';

	
	const EQ_FLOW_RATE = 'dosing_calibration.EQ_FLOW_RATE';

	
	const DENSITY = 'dosing_calibration.DENSITY';

	
	const FREQUENCY = 'dosing_calibration.FREQUENCY';

	
	const FLOW_RATE = 'dosing_calibration.FLOW_RATE';

	
	const READING_TIME = 'dosing_calibration.READING_TIME';

	
	const READING = 'dosing_calibration.READING';

	
	const CHECKED_BY = 'dosing_calibration.CHECKED_BY';

	
	const REMARK = 'dosing_calibration.REMARK';

	
	const CREATED_BY = 'dosing_calibration.CREATED_BY';

	
	const DATE_CREATED = 'dosing_calibration.DATE_CREATED';

	
	const MODIFIED_BY = 'dosing_calibration.MODIFIED_BY';

	
	const DATE_MODIFIED = 'dosing_calibration.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'MachineNo', 'PumpModel', 'EqFlowRate', 'Density', 'Frequency', 'FlowRate', 'ReadingTime', 'Reading', 'CheckedBy', 'Remark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (DosingCalibrationPeer::ID, DosingCalibrationPeer::TRANS_DATE, DosingCalibrationPeer::MACHINE_NO, DosingCalibrationPeer::PUMP_MODEL, DosingCalibrationPeer::EQ_FLOW_RATE, DosingCalibrationPeer::DENSITY, DosingCalibrationPeer::FREQUENCY, DosingCalibrationPeer::FLOW_RATE, DosingCalibrationPeer::READING_TIME, DosingCalibrationPeer::READING, DosingCalibrationPeer::CHECKED_BY, DosingCalibrationPeer::REMARK, DosingCalibrationPeer::CREATED_BY, DosingCalibrationPeer::DATE_CREATED, DosingCalibrationPeer::MODIFIED_BY, DosingCalibrationPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'machine_no', 'pump_model', 'eq_flow_rate', 'density', 'frequency', 'flow_rate', 'reading_time', 'reading', 'checked_by', 'remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'MachineNo' => 2, 'PumpModel' => 3, 'EqFlowRate' => 4, 'Density' => 5, 'Frequency' => 6, 'FlowRate' => 7, 'ReadingTime' => 8, 'Reading' => 9, 'CheckedBy' => 10, 'Remark' => 11, 'CreatedBy' => 12, 'DateCreated' => 13, 'ModifiedBy' => 14, 'DateModified' => 15, ),
		BasePeer::TYPE_COLNAME => array (DosingCalibrationPeer::ID => 0, DosingCalibrationPeer::TRANS_DATE => 1, DosingCalibrationPeer::MACHINE_NO => 2, DosingCalibrationPeer::PUMP_MODEL => 3, DosingCalibrationPeer::EQ_FLOW_RATE => 4, DosingCalibrationPeer::DENSITY => 5, DosingCalibrationPeer::FREQUENCY => 6, DosingCalibrationPeer::FLOW_RATE => 7, DosingCalibrationPeer::READING_TIME => 8, DosingCalibrationPeer::READING => 9, DosingCalibrationPeer::CHECKED_BY => 10, DosingCalibrationPeer::REMARK => 11, DosingCalibrationPeer::CREATED_BY => 12, DosingCalibrationPeer::DATE_CREATED => 13, DosingCalibrationPeer::MODIFIED_BY => 14, DosingCalibrationPeer::DATE_MODIFIED => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'machine_no' => 2, 'pump_model' => 3, 'eq_flow_rate' => 4, 'density' => 5, 'frequency' => 6, 'flow_rate' => 7, 'reading_time' => 8, 'reading' => 9, 'checked_by' => 10, 'remark' => 11, 'created_by' => 12, 'date_created' => 13, 'modified_by' => 14, 'date_modified' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/DosingCalibrationMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.DosingCalibrationMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = DosingCalibrationPeer::getTableMap();
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
		return str_replace(DosingCalibrationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(DosingCalibrationPeer::ID);

		$criteria->addSelectColumn(DosingCalibrationPeer::TRANS_DATE);

		$criteria->addSelectColumn(DosingCalibrationPeer::MACHINE_NO);

		$criteria->addSelectColumn(DosingCalibrationPeer::PUMP_MODEL);

		$criteria->addSelectColumn(DosingCalibrationPeer::EQ_FLOW_RATE);

		$criteria->addSelectColumn(DosingCalibrationPeer::DENSITY);

		$criteria->addSelectColumn(DosingCalibrationPeer::FREQUENCY);

		$criteria->addSelectColumn(DosingCalibrationPeer::FLOW_RATE);

		$criteria->addSelectColumn(DosingCalibrationPeer::READING_TIME);

		$criteria->addSelectColumn(DosingCalibrationPeer::READING);

		$criteria->addSelectColumn(DosingCalibrationPeer::CHECKED_BY);

		$criteria->addSelectColumn(DosingCalibrationPeer::REMARK);

		$criteria->addSelectColumn(DosingCalibrationPeer::CREATED_BY);

		$criteria->addSelectColumn(DosingCalibrationPeer::DATE_CREATED);

		$criteria->addSelectColumn(DosingCalibrationPeer::MODIFIED_BY);

		$criteria->addSelectColumn(DosingCalibrationPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(dosing_calibration.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT dosing_calibration.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DosingCalibrationPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DosingCalibrationPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = DosingCalibrationPeer::doSelectRS($criteria, $con);
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
		$objects = DosingCalibrationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return DosingCalibrationPeer::populateObjects(DosingCalibrationPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			DosingCalibrationPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = DosingCalibrationPeer::getOMClass();
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
		return DosingCalibrationPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(DosingCalibrationPeer::ID); 

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
			$comparison = $criteria->getComparison(DosingCalibrationPeer::ID);
			$selectCriteria->add(DosingCalibrationPeer::ID, $criteria->remove(DosingCalibrationPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(DosingCalibrationPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(DosingCalibrationPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof DosingCalibration) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(DosingCalibrationPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(DosingCalibration $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(DosingCalibrationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(DosingCalibrationPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(DosingCalibrationPeer::DATABASE_NAME, DosingCalibrationPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = DosingCalibrationPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(DosingCalibrationPeer::DATABASE_NAME);

		$criteria->add(DosingCalibrationPeer::ID, $pk);


		$v = DosingCalibrationPeer::doSelect($criteria, $con);

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
			$criteria->add(DosingCalibrationPeer::ID, $pks, Criteria::IN);
			$objs = DosingCalibrationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseDosingCalibrationPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/DosingCalibrationMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.DosingCalibrationMapBuilder');
}

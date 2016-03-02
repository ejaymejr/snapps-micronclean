<?php


abstract class BaseDryerPmPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'dryer_pm';

	
	const CLASS_DEFAULT = 'lib.model.inspection.DryerPm';

	
	const NUM_COLUMNS = 19;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'dryer_pm.ID';

	
	const TRANS_DATE = 'dryer_pm.TRANS_DATE';

	
	const MACHINE_TYPE = 'dryer_pm.MACHINE_TYPE';

	
	const CLEAN_MACHINE = 'dryer_pm.CLEAN_MACHINE';

	
	const CAGE_SHAFT = 'dryer_pm.CAGE_SHAFT';

	
	const FAN_BEARING = 'dryer_pm.FAN_BEARING';

	
	const FAN_SHAFT = 'dryer_pm.FAN_SHAFT';

	
	const FAN_MOTOR = 'dryer_pm.FAN_MOTOR';

	
	const CAGE_MOTOR = 'dryer_pm.CAGE_MOTOR';

	
	const TEMP_CONTROL = 'dryer_pm.TEMP_CONTROL';

	
	const TEMP_VERIFY = 'dryer_pm.TEMP_VERIFY';

	
	const PERFORMED_BY = 'dryer_pm.PERFORMED_BY';

	
	const VERIFIED_BY = 'dryer_pm.VERIFIED_BY';

	
	const VERIFY_DATE = 'dryer_pm.VERIFY_DATE';

	
	const REMARK = 'dryer_pm.REMARK';

	
	const CREATED_BY = 'dryer_pm.CREATED_BY';

	
	const DATE_CREATED = 'dryer_pm.DATE_CREATED';

	
	const MODIFIED_BY = 'dryer_pm.MODIFIED_BY';

	
	const DATE_MODIFIED = 'dryer_pm.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'MachineType', 'CleanMachine', 'CageShaft', 'FanBearing', 'FanShaft', 'FanMotor', 'CageMotor', 'TempControl', 'TempVerify', 'PerformedBy', 'VerifiedBy', 'VerifyDate', 'Remark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (DryerPmPeer::ID, DryerPmPeer::TRANS_DATE, DryerPmPeer::MACHINE_TYPE, DryerPmPeer::CLEAN_MACHINE, DryerPmPeer::CAGE_SHAFT, DryerPmPeer::FAN_BEARING, DryerPmPeer::FAN_SHAFT, DryerPmPeer::FAN_MOTOR, DryerPmPeer::CAGE_MOTOR, DryerPmPeer::TEMP_CONTROL, DryerPmPeer::TEMP_VERIFY, DryerPmPeer::PERFORMED_BY, DryerPmPeer::VERIFIED_BY, DryerPmPeer::VERIFY_DATE, DryerPmPeer::REMARK, DryerPmPeer::CREATED_BY, DryerPmPeer::DATE_CREATED, DryerPmPeer::MODIFIED_BY, DryerPmPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'machine_type', 'clean_machine', 'cage_shaft', 'fan_bearing', 'fan_shaft', 'fan_motor', 'cage_motor', 'temp_control', 'temp_verify', 'performed_by', 'verified_by', 'verify_date', 'remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'MachineType' => 2, 'CleanMachine' => 3, 'CageShaft' => 4, 'FanBearing' => 5, 'FanShaft' => 6, 'FanMotor' => 7, 'CageMotor' => 8, 'TempControl' => 9, 'TempVerify' => 10, 'PerformedBy' => 11, 'VerifiedBy' => 12, 'VerifyDate' => 13, 'Remark' => 14, 'CreatedBy' => 15, 'DateCreated' => 16, 'ModifiedBy' => 17, 'DateModified' => 18, ),
		BasePeer::TYPE_COLNAME => array (DryerPmPeer::ID => 0, DryerPmPeer::TRANS_DATE => 1, DryerPmPeer::MACHINE_TYPE => 2, DryerPmPeer::CLEAN_MACHINE => 3, DryerPmPeer::CAGE_SHAFT => 4, DryerPmPeer::FAN_BEARING => 5, DryerPmPeer::FAN_SHAFT => 6, DryerPmPeer::FAN_MOTOR => 7, DryerPmPeer::CAGE_MOTOR => 8, DryerPmPeer::TEMP_CONTROL => 9, DryerPmPeer::TEMP_VERIFY => 10, DryerPmPeer::PERFORMED_BY => 11, DryerPmPeer::VERIFIED_BY => 12, DryerPmPeer::VERIFY_DATE => 13, DryerPmPeer::REMARK => 14, DryerPmPeer::CREATED_BY => 15, DryerPmPeer::DATE_CREATED => 16, DryerPmPeer::MODIFIED_BY => 17, DryerPmPeer::DATE_MODIFIED => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'machine_type' => 2, 'clean_machine' => 3, 'cage_shaft' => 4, 'fan_bearing' => 5, 'fan_shaft' => 6, 'fan_motor' => 7, 'cage_motor' => 8, 'temp_control' => 9, 'temp_verify' => 10, 'performed_by' => 11, 'verified_by' => 12, 'verify_date' => 13, 'remark' => 14, 'created_by' => 15, 'date_created' => 16, 'modified_by' => 17, 'date_modified' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/DryerPmMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.DryerPmMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = DryerPmPeer::getTableMap();
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
		return str_replace(DryerPmPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(DryerPmPeer::ID);

		$criteria->addSelectColumn(DryerPmPeer::TRANS_DATE);

		$criteria->addSelectColumn(DryerPmPeer::MACHINE_TYPE);

		$criteria->addSelectColumn(DryerPmPeer::CLEAN_MACHINE);

		$criteria->addSelectColumn(DryerPmPeer::CAGE_SHAFT);

		$criteria->addSelectColumn(DryerPmPeer::FAN_BEARING);

		$criteria->addSelectColumn(DryerPmPeer::FAN_SHAFT);

		$criteria->addSelectColumn(DryerPmPeer::FAN_MOTOR);

		$criteria->addSelectColumn(DryerPmPeer::CAGE_MOTOR);

		$criteria->addSelectColumn(DryerPmPeer::TEMP_CONTROL);

		$criteria->addSelectColumn(DryerPmPeer::TEMP_VERIFY);

		$criteria->addSelectColumn(DryerPmPeer::PERFORMED_BY);

		$criteria->addSelectColumn(DryerPmPeer::VERIFIED_BY);

		$criteria->addSelectColumn(DryerPmPeer::VERIFY_DATE);

		$criteria->addSelectColumn(DryerPmPeer::REMARK);

		$criteria->addSelectColumn(DryerPmPeer::CREATED_BY);

		$criteria->addSelectColumn(DryerPmPeer::DATE_CREATED);

		$criteria->addSelectColumn(DryerPmPeer::MODIFIED_BY);

		$criteria->addSelectColumn(DryerPmPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(dryer_pm.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT dryer_pm.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DryerPmPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DryerPmPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = DryerPmPeer::doSelectRS($criteria, $con);
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
		$objects = DryerPmPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return DryerPmPeer::populateObjects(DryerPmPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			DryerPmPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = DryerPmPeer::getOMClass();
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
		return DryerPmPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(DryerPmPeer::ID); 

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
			$comparison = $criteria->getComparison(DryerPmPeer::ID);
			$selectCriteria->add(DryerPmPeer::ID, $criteria->remove(DryerPmPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(DryerPmPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(DryerPmPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof DryerPm) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(DryerPmPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(DryerPm $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(DryerPmPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(DryerPmPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(DryerPmPeer::DATABASE_NAME, DryerPmPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = DryerPmPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(DryerPmPeer::DATABASE_NAME);

		$criteria->add(DryerPmPeer::ID, $pk);


		$v = DryerPmPeer::doSelect($criteria, $con);

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
			$criteria->add(DryerPmPeer::ID, $pks, Criteria::IN);
			$objs = DryerPmPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseDryerPmPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/DryerPmMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.DryerPmMapBuilder');
}

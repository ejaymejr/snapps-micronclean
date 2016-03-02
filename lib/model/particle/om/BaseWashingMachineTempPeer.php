<?php


abstract class BaseWashingMachineTempPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'washing_machine_temp';

	
	const CLASS_DEFAULT = 'lib.model.particle.WashingMachineTemp';

	
	const NUM_COLUMNS = 11;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'washing_machine_temp.ID';

	
	const DATE_TIME = 'washing_machine_temp.DATE_TIME';

	
	const MACHINE_NO = 'washing_machine_temp.MACHINE_NO';

	
	const TEMP_THERMOMETER = 'washing_machine_temp.TEMP_THERMOMETER';

	
	const TEMP_DISPLAY = 'washing_machine_temp.TEMP_DISPLAY';

	
	const REMARKS = 'washing_machine_temp.REMARKS';

	
	const VERIFIED_BY = 'washing_machine_temp.VERIFIED_BY';

	
	const CREATED_BY = 'washing_machine_temp.CREATED_BY';

	
	const DATE_CREATED = 'washing_machine_temp.DATE_CREATED';

	
	const MODIFIED_BY = 'washing_machine_temp.MODIFIED_BY';

	
	const DATE_MODIFIED = 'washing_machine_temp.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'MachineNo', 'TempThermometer', 'TempDisplay', 'Remarks', 'VerifiedBy', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (WashingMachineTempPeer::ID, WashingMachineTempPeer::DATE_TIME, WashingMachineTempPeer::MACHINE_NO, WashingMachineTempPeer::TEMP_THERMOMETER, WashingMachineTempPeer::TEMP_DISPLAY, WashingMachineTempPeer::REMARKS, WashingMachineTempPeer::VERIFIED_BY, WashingMachineTempPeer::CREATED_BY, WashingMachineTempPeer::DATE_CREATED, WashingMachineTempPeer::MODIFIED_BY, WashingMachineTempPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'machine_no', 'temp_thermometer', 'temp_display', 'remarks', 'verified_by', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'MachineNo' => 2, 'TempThermometer' => 3, 'TempDisplay' => 4, 'Remarks' => 5, 'VerifiedBy' => 6, 'CreatedBy' => 7, 'DateCreated' => 8, 'ModifiedBy' => 9, 'DateModified' => 10, ),
		BasePeer::TYPE_COLNAME => array (WashingMachineTempPeer::ID => 0, WashingMachineTempPeer::DATE_TIME => 1, WashingMachineTempPeer::MACHINE_NO => 2, WashingMachineTempPeer::TEMP_THERMOMETER => 3, WashingMachineTempPeer::TEMP_DISPLAY => 4, WashingMachineTempPeer::REMARKS => 5, WashingMachineTempPeer::VERIFIED_BY => 6, WashingMachineTempPeer::CREATED_BY => 7, WashingMachineTempPeer::DATE_CREATED => 8, WashingMachineTempPeer::MODIFIED_BY => 9, WashingMachineTempPeer::DATE_MODIFIED => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'machine_no' => 2, 'temp_thermometer' => 3, 'temp_display' => 4, 'remarks' => 5, 'verified_by' => 6, 'created_by' => 7, 'date_created' => 8, 'modified_by' => 9, 'date_modified' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/WashingMachineTempMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.WashingMachineTempMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = WashingMachineTempPeer::getTableMap();
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
		return str_replace(WashingMachineTempPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(WashingMachineTempPeer::ID);

		$criteria->addSelectColumn(WashingMachineTempPeer::DATE_TIME);

		$criteria->addSelectColumn(WashingMachineTempPeer::MACHINE_NO);

		$criteria->addSelectColumn(WashingMachineTempPeer::TEMP_THERMOMETER);

		$criteria->addSelectColumn(WashingMachineTempPeer::TEMP_DISPLAY);

		$criteria->addSelectColumn(WashingMachineTempPeer::REMARKS);

		$criteria->addSelectColumn(WashingMachineTempPeer::VERIFIED_BY);

		$criteria->addSelectColumn(WashingMachineTempPeer::CREATED_BY);

		$criteria->addSelectColumn(WashingMachineTempPeer::DATE_CREATED);

		$criteria->addSelectColumn(WashingMachineTempPeer::MODIFIED_BY);

		$criteria->addSelectColumn(WashingMachineTempPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(washing_machine_temp.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT washing_machine_temp.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(WashingMachineTempPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(WashingMachineTempPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = WashingMachineTempPeer::doSelectRS($criteria, $con);
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
		$objects = WashingMachineTempPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return WashingMachineTempPeer::populateObjects(WashingMachineTempPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			WashingMachineTempPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = WashingMachineTempPeer::getOMClass();
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
		return WashingMachineTempPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(WashingMachineTempPeer::ID); 

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
			$comparison = $criteria->getComparison(WashingMachineTempPeer::ID);
			$selectCriteria->add(WashingMachineTempPeer::ID, $criteria->remove(WashingMachineTempPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(WashingMachineTempPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(WashingMachineTempPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof WashingMachineTemp) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(WashingMachineTempPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(WashingMachineTemp $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(WashingMachineTempPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(WashingMachineTempPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(WashingMachineTempPeer::DATABASE_NAME, WashingMachineTempPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = WashingMachineTempPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(WashingMachineTempPeer::DATABASE_NAME);

		$criteria->add(WashingMachineTempPeer::ID, $pk);


		$v = WashingMachineTempPeer::doSelect($criteria, $con);

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
			$criteria->add(WashingMachineTempPeer::ID, $pks, Criteria::IN);
			$objs = WashingMachineTempPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseWashingMachineTempPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/WashingMachineTempMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.WashingMachineTempMapBuilder');
}

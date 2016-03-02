<?php


abstract class BaseAirBacteriaCountPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'air_bacteria_count';

	
	const CLASS_DEFAULT = 'lib.model.particle.AirBacteriaCount';

	
	const NUM_COLUMNS = 13;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'air_bacteria_count.ID';

	
	const DATE_TIME = 'air_bacteria_count.DATE_TIME';

	
	const BACTERIA_COUNT = 'air_bacteria_count.BACTERIA_COUNT';

	
	const X_DATA = 'air_bacteria_count.X_DATA';

	
	const FILTER_AREA = 'air_bacteria_count.FILTER_AREA';

	
	const TEMPERATURE = 'air_bacteria_count.TEMPERATURE';

	
	const RH = 'air_bacteria_count.RH';

	
	const REMARKS = 'air_bacteria_count.REMARKS';

	
	const TESTER = 'air_bacteria_count.TESTER';

	
	const CREATED_BY = 'air_bacteria_count.CREATED_BY';

	
	const DATE_CREATED = 'air_bacteria_count.DATE_CREATED';

	
	const MODIFIED_BY = 'air_bacteria_count.MODIFIED_BY';

	
	const DATE_MODIFIED = 'air_bacteria_count.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'BacteriaCount', 'XData', 'FilterArea', 'Temperature', 'Rh', 'Remarks', 'Tester', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (AirBacteriaCountPeer::ID, AirBacteriaCountPeer::DATE_TIME, AirBacteriaCountPeer::BACTERIA_COUNT, AirBacteriaCountPeer::X_DATA, AirBacteriaCountPeer::FILTER_AREA, AirBacteriaCountPeer::TEMPERATURE, AirBacteriaCountPeer::RH, AirBacteriaCountPeer::REMARKS, AirBacteriaCountPeer::TESTER, AirBacteriaCountPeer::CREATED_BY, AirBacteriaCountPeer::DATE_CREATED, AirBacteriaCountPeer::MODIFIED_BY, AirBacteriaCountPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'bacteria_count', 'x_data', 'filter_area', 'temperature', 'rh', 'remarks', 'tester', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'BacteriaCount' => 2, 'XData' => 3, 'FilterArea' => 4, 'Temperature' => 5, 'Rh' => 6, 'Remarks' => 7, 'Tester' => 8, 'CreatedBy' => 9, 'DateCreated' => 10, 'ModifiedBy' => 11, 'DateModified' => 12, ),
		BasePeer::TYPE_COLNAME => array (AirBacteriaCountPeer::ID => 0, AirBacteriaCountPeer::DATE_TIME => 1, AirBacteriaCountPeer::BACTERIA_COUNT => 2, AirBacteriaCountPeer::X_DATA => 3, AirBacteriaCountPeer::FILTER_AREA => 4, AirBacteriaCountPeer::TEMPERATURE => 5, AirBacteriaCountPeer::RH => 6, AirBacteriaCountPeer::REMARKS => 7, AirBacteriaCountPeer::TESTER => 8, AirBacteriaCountPeer::CREATED_BY => 9, AirBacteriaCountPeer::DATE_CREATED => 10, AirBacteriaCountPeer::MODIFIED_BY => 11, AirBacteriaCountPeer::DATE_MODIFIED => 12, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'bacteria_count' => 2, 'x_data' => 3, 'filter_area' => 4, 'temperature' => 5, 'rh' => 6, 'remarks' => 7, 'tester' => 8, 'created_by' => 9, 'date_created' => 10, 'modified_by' => 11, 'date_modified' => 12, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/AirBacteriaCountMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.AirBacteriaCountMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = AirBacteriaCountPeer::getTableMap();
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
		return str_replace(AirBacteriaCountPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(AirBacteriaCountPeer::ID);

		$criteria->addSelectColumn(AirBacteriaCountPeer::DATE_TIME);

		$criteria->addSelectColumn(AirBacteriaCountPeer::BACTERIA_COUNT);

		$criteria->addSelectColumn(AirBacteriaCountPeer::X_DATA);

		$criteria->addSelectColumn(AirBacteriaCountPeer::FILTER_AREA);

		$criteria->addSelectColumn(AirBacteriaCountPeer::TEMPERATURE);

		$criteria->addSelectColumn(AirBacteriaCountPeer::RH);

		$criteria->addSelectColumn(AirBacteriaCountPeer::REMARKS);

		$criteria->addSelectColumn(AirBacteriaCountPeer::TESTER);

		$criteria->addSelectColumn(AirBacteriaCountPeer::CREATED_BY);

		$criteria->addSelectColumn(AirBacteriaCountPeer::DATE_CREATED);

		$criteria->addSelectColumn(AirBacteriaCountPeer::MODIFIED_BY);

		$criteria->addSelectColumn(AirBacteriaCountPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(air_bacteria_count.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT air_bacteria_count.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AirBacteriaCountPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AirBacteriaCountPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = AirBacteriaCountPeer::doSelectRS($criteria, $con);
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
		$objects = AirBacteriaCountPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return AirBacteriaCountPeer::populateObjects(AirBacteriaCountPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			AirBacteriaCountPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = AirBacteriaCountPeer::getOMClass();
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
		return AirBacteriaCountPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(AirBacteriaCountPeer::ID); 

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
			$comparison = $criteria->getComparison(AirBacteriaCountPeer::ID);
			$selectCriteria->add(AirBacteriaCountPeer::ID, $criteria->remove(AirBacteriaCountPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(AirBacteriaCountPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(AirBacteriaCountPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof AirBacteriaCount) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AirBacteriaCountPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(AirBacteriaCount $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AirBacteriaCountPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AirBacteriaCountPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(AirBacteriaCountPeer::DATABASE_NAME, AirBacteriaCountPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = AirBacteriaCountPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(AirBacteriaCountPeer::DATABASE_NAME);

		$criteria->add(AirBacteriaCountPeer::ID, $pk);


		$v = AirBacteriaCountPeer::doSelect($criteria, $con);

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
			$criteria->add(AirBacteriaCountPeer::ID, $pks, Criteria::IN);
			$objs = AirBacteriaCountPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseAirBacteriaCountPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/AirBacteriaCountMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.AirBacteriaCountMapBuilder');
}

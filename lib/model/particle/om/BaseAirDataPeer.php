<?php


abstract class BaseAirDataPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'air_data';

	
	const CLASS_DEFAULT = 'lib.model.particle.AirData';

	
	const NUM_COLUMNS = 12;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'air_data.ID';

	
	const DATE_TIME = 'air_data.DATE_TIME';

	
	const X_DATA = 'air_data.X_DATA';

	
	const FILTER_AREA = 'air_data.FILTER_AREA';

	
	const TEMPERATURE = 'air_data.TEMPERATURE';

	
	const RH = 'air_data.RH';

	
	const REMARKS = 'air_data.REMARKS';

	
	const TESTER = 'air_data.TESTER';

	
	const CREATED_BY = 'air_data.CREATED_BY';

	
	const DATE_CREATED = 'air_data.DATE_CREATED';

	
	const MODIFIED_BY = 'air_data.MODIFIED_BY';

	
	const DATE_MODIFIED = 'air_data.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'XData', 'FilterArea', 'Temperature', 'Rh', 'Remarks', 'Tester', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (AirDataPeer::ID, AirDataPeer::DATE_TIME, AirDataPeer::X_DATA, AirDataPeer::FILTER_AREA, AirDataPeer::TEMPERATURE, AirDataPeer::RH, AirDataPeer::REMARKS, AirDataPeer::TESTER, AirDataPeer::CREATED_BY, AirDataPeer::DATE_CREATED, AirDataPeer::MODIFIED_BY, AirDataPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'x_data', 'filter_area', 'temperature', 'rh', 'remarks', 'tester', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'XData' => 2, 'FilterArea' => 3, 'Temperature' => 4, 'Rh' => 5, 'Remarks' => 6, 'Tester' => 7, 'CreatedBy' => 8, 'DateCreated' => 9, 'ModifiedBy' => 10, 'DateModified' => 11, ),
		BasePeer::TYPE_COLNAME => array (AirDataPeer::ID => 0, AirDataPeer::DATE_TIME => 1, AirDataPeer::X_DATA => 2, AirDataPeer::FILTER_AREA => 3, AirDataPeer::TEMPERATURE => 4, AirDataPeer::RH => 5, AirDataPeer::REMARKS => 6, AirDataPeer::TESTER => 7, AirDataPeer::CREATED_BY => 8, AirDataPeer::DATE_CREATED => 9, AirDataPeer::MODIFIED_BY => 10, AirDataPeer::DATE_MODIFIED => 11, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'x_data' => 2, 'filter_area' => 3, 'temperature' => 4, 'rh' => 5, 'remarks' => 6, 'tester' => 7, 'created_by' => 8, 'date_created' => 9, 'modified_by' => 10, 'date_modified' => 11, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/AirDataMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.AirDataMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = AirDataPeer::getTableMap();
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
		return str_replace(AirDataPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(AirDataPeer::ID);

		$criteria->addSelectColumn(AirDataPeer::DATE_TIME);

		$criteria->addSelectColumn(AirDataPeer::X_DATA);

		$criteria->addSelectColumn(AirDataPeer::FILTER_AREA);

		$criteria->addSelectColumn(AirDataPeer::TEMPERATURE);

		$criteria->addSelectColumn(AirDataPeer::RH);

		$criteria->addSelectColumn(AirDataPeer::REMARKS);

		$criteria->addSelectColumn(AirDataPeer::TESTER);

		$criteria->addSelectColumn(AirDataPeer::CREATED_BY);

		$criteria->addSelectColumn(AirDataPeer::DATE_CREATED);

		$criteria->addSelectColumn(AirDataPeer::MODIFIED_BY);

		$criteria->addSelectColumn(AirDataPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(air_data.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT air_data.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AirDataPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AirDataPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = AirDataPeer::doSelectRS($criteria, $con);
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
		$objects = AirDataPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return AirDataPeer::populateObjects(AirDataPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			AirDataPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = AirDataPeer::getOMClass();
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
		return AirDataPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(AirDataPeer::ID); 

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
			$comparison = $criteria->getComparison(AirDataPeer::ID);
			$selectCriteria->add(AirDataPeer::ID, $criteria->remove(AirDataPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(AirDataPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(AirDataPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof AirData) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AirDataPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(AirData $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AirDataPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AirDataPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(AirDataPeer::DATABASE_NAME, AirDataPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = AirDataPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(AirDataPeer::DATABASE_NAME);

		$criteria->add(AirDataPeer::ID, $pk);


		$v = AirDataPeer::doSelect($criteria, $con);

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
			$criteria->add(AirDataPeer::ID, $pks, Criteria::IN);
			$objs = AirDataPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseAirDataPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/AirDataMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.AirDataMapBuilder');
}

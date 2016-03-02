<?php


abstract class BaseAirParticleCountNanoGPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'air_particle_count_nano_g';

	
	const CLASS_DEFAULT = 'lib.model.particle.AirParticleCountNanoG';

	
	const NUM_COLUMNS = 11;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'air_particle_count_nano_g.ID';

	
	const DATE_RECORD = 'air_particle_count_nano_g.DATE_RECORD';

	
	const TESTER_ID = 'air_particle_count_nano_g.TESTER_ID';

	
	const HUMIDITY = 'air_particle_count_nano_g.HUMIDITY';

	
	const TEMPERATURE = 'air_particle_count_nano_g.TEMPERATURE';

	
	const DIFF_PRESSURE = 'air_particle_count_nano_g.DIFF_PRESSURE';

	
	const FREQUENCY = 'air_particle_count_nano_g.FREQUENCY';

	
	const REMARK = 'air_particle_count_nano_g.REMARK';

	
	const DELETED = 'air_particle_count_nano_g.DELETED';

	
	const DATE_CREATED = 'air_particle_count_nano_g.DATE_CREATED';

	
	const DATE_MODIFIED = 'air_particle_count_nano_g.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateRecord', 'TesterId', 'Humidity', 'Temperature', 'DiffPressure', 'Frequency', 'Remark', 'Deleted', 'DateCreated', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (AirParticleCountNanoGPeer::ID, AirParticleCountNanoGPeer::DATE_RECORD, AirParticleCountNanoGPeer::TESTER_ID, AirParticleCountNanoGPeer::HUMIDITY, AirParticleCountNanoGPeer::TEMPERATURE, AirParticleCountNanoGPeer::DIFF_PRESSURE, AirParticleCountNanoGPeer::FREQUENCY, AirParticleCountNanoGPeer::REMARK, AirParticleCountNanoGPeer::DELETED, AirParticleCountNanoGPeer::DATE_CREATED, AirParticleCountNanoGPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_record', 'tester_id', 'humidity', 'temperature', 'diff_pressure', 'frequency', 'remark', 'deleted', 'date_created', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateRecord' => 1, 'TesterId' => 2, 'Humidity' => 3, 'Temperature' => 4, 'DiffPressure' => 5, 'Frequency' => 6, 'Remark' => 7, 'Deleted' => 8, 'DateCreated' => 9, 'DateModified' => 10, ),
		BasePeer::TYPE_COLNAME => array (AirParticleCountNanoGPeer::ID => 0, AirParticleCountNanoGPeer::DATE_RECORD => 1, AirParticleCountNanoGPeer::TESTER_ID => 2, AirParticleCountNanoGPeer::HUMIDITY => 3, AirParticleCountNanoGPeer::TEMPERATURE => 4, AirParticleCountNanoGPeer::DIFF_PRESSURE => 5, AirParticleCountNanoGPeer::FREQUENCY => 6, AirParticleCountNanoGPeer::REMARK => 7, AirParticleCountNanoGPeer::DELETED => 8, AirParticleCountNanoGPeer::DATE_CREATED => 9, AirParticleCountNanoGPeer::DATE_MODIFIED => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_record' => 1, 'tester_id' => 2, 'humidity' => 3, 'temperature' => 4, 'diff_pressure' => 5, 'frequency' => 6, 'remark' => 7, 'deleted' => 8, 'date_created' => 9, 'date_modified' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/AirParticleCountNanoGMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.AirParticleCountNanoGMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = AirParticleCountNanoGPeer::getTableMap();
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
		return str_replace(AirParticleCountNanoGPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(AirParticleCountNanoGPeer::ID);

		$criteria->addSelectColumn(AirParticleCountNanoGPeer::DATE_RECORD);

		$criteria->addSelectColumn(AirParticleCountNanoGPeer::TESTER_ID);

		$criteria->addSelectColumn(AirParticleCountNanoGPeer::HUMIDITY);

		$criteria->addSelectColumn(AirParticleCountNanoGPeer::TEMPERATURE);

		$criteria->addSelectColumn(AirParticleCountNanoGPeer::DIFF_PRESSURE);

		$criteria->addSelectColumn(AirParticleCountNanoGPeer::FREQUENCY);

		$criteria->addSelectColumn(AirParticleCountNanoGPeer::REMARK);

		$criteria->addSelectColumn(AirParticleCountNanoGPeer::DELETED);

		$criteria->addSelectColumn(AirParticleCountNanoGPeer::DATE_CREATED);

		$criteria->addSelectColumn(AirParticleCountNanoGPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(air_particle_count_nano_g.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT air_particle_count_nano_g.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AirParticleCountNanoGPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AirParticleCountNanoGPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = AirParticleCountNanoGPeer::doSelectRS($criteria, $con);
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
		$objects = AirParticleCountNanoGPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return AirParticleCountNanoGPeer::populateObjects(AirParticleCountNanoGPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			AirParticleCountNanoGPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = AirParticleCountNanoGPeer::getOMClass();
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
		return AirParticleCountNanoGPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(AirParticleCountNanoGPeer::ID); 

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
			$comparison = $criteria->getComparison(AirParticleCountNanoGPeer::ID);
			$selectCriteria->add(AirParticleCountNanoGPeer::ID, $criteria->remove(AirParticleCountNanoGPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(AirParticleCountNanoGPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(AirParticleCountNanoGPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof AirParticleCountNanoG) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AirParticleCountNanoGPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(AirParticleCountNanoG $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AirParticleCountNanoGPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AirParticleCountNanoGPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(AirParticleCountNanoGPeer::DATABASE_NAME, AirParticleCountNanoGPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = AirParticleCountNanoGPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(AirParticleCountNanoGPeer::DATABASE_NAME);

		$criteria->add(AirParticleCountNanoGPeer::ID, $pk);


		$v = AirParticleCountNanoGPeer::doSelect($criteria, $con);

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
			$criteria->add(AirParticleCountNanoGPeer::ID, $pks, Criteria::IN);
			$objs = AirParticleCountNanoGPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseAirParticleCountNanoGPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/AirParticleCountNanoGMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.AirParticleCountNanoGMapBuilder');
}

<?php


abstract class BaseDryerParticleCountPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'dryer_particle_count';

	
	const CLASS_DEFAULT = 'lib.model.iso.DryerParticleCount';

	
	const NUM_COLUMNS = 11;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'dryer_particle_count.ID';

	
	const DATE_TIME = 'dryer_particle_count.DATE_TIME';

	
	const DRYER_NO = 'dryer_particle_count.DRYER_NO';

	
	const PARTICLE_COUNT = 'dryer_particle_count.PARTICLE_COUNT';

	
	const NAME = 'dryer_particle_count.NAME';

	
	const TEMPERATURE = 'dryer_particle_count.TEMPERATURE';

	
	const ACTUAL_TEMPERATURE = 'dryer_particle_count.ACTUAL_TEMPERATURE';

	
	const DATE_CREATED = 'dryer_particle_count.DATE_CREATED';

	
	const CREATED_BY = 'dryer_particle_count.CREATED_BY';

	
	const DATE_MODIFIED = 'dryer_particle_count.DATE_MODIFIED';

	
	const MODIFIED_BY = 'dryer_particle_count.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'DryerNo', 'ParticleCount', 'Name', 'Temperature', 'ActualTemperature', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (DryerParticleCountPeer::ID, DryerParticleCountPeer::DATE_TIME, DryerParticleCountPeer::DRYER_NO, DryerParticleCountPeer::PARTICLE_COUNT, DryerParticleCountPeer::NAME, DryerParticleCountPeer::TEMPERATURE, DryerParticleCountPeer::ACTUAL_TEMPERATURE, DryerParticleCountPeer::DATE_CREATED, DryerParticleCountPeer::CREATED_BY, DryerParticleCountPeer::DATE_MODIFIED, DryerParticleCountPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'dryer_no', 'particle_count', 'name', 'temperature', 'actual_temperature', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'DryerNo' => 2, 'ParticleCount' => 3, 'Name' => 4, 'Temperature' => 5, 'ActualTemperature' => 6, 'DateCreated' => 7, 'CreatedBy' => 8, 'DateModified' => 9, 'ModifiedBy' => 10, ),
		BasePeer::TYPE_COLNAME => array (DryerParticleCountPeer::ID => 0, DryerParticleCountPeer::DATE_TIME => 1, DryerParticleCountPeer::DRYER_NO => 2, DryerParticleCountPeer::PARTICLE_COUNT => 3, DryerParticleCountPeer::NAME => 4, DryerParticleCountPeer::TEMPERATURE => 5, DryerParticleCountPeer::ACTUAL_TEMPERATURE => 6, DryerParticleCountPeer::DATE_CREATED => 7, DryerParticleCountPeer::CREATED_BY => 8, DryerParticleCountPeer::DATE_MODIFIED => 9, DryerParticleCountPeer::MODIFIED_BY => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'dryer_no' => 2, 'particle_count' => 3, 'name' => 4, 'temperature' => 5, 'actual_temperature' => 6, 'date_created' => 7, 'created_by' => 8, 'date_modified' => 9, 'modified_by' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/DryerParticleCountMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.DryerParticleCountMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = DryerParticleCountPeer::getTableMap();
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
		return str_replace(DryerParticleCountPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(DryerParticleCountPeer::ID);

		$criteria->addSelectColumn(DryerParticleCountPeer::DATE_TIME);

		$criteria->addSelectColumn(DryerParticleCountPeer::DRYER_NO);

		$criteria->addSelectColumn(DryerParticleCountPeer::PARTICLE_COUNT);

		$criteria->addSelectColumn(DryerParticleCountPeer::NAME);

		$criteria->addSelectColumn(DryerParticleCountPeer::TEMPERATURE);

		$criteria->addSelectColumn(DryerParticleCountPeer::ACTUAL_TEMPERATURE);

		$criteria->addSelectColumn(DryerParticleCountPeer::DATE_CREATED);

		$criteria->addSelectColumn(DryerParticleCountPeer::CREATED_BY);

		$criteria->addSelectColumn(DryerParticleCountPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(DryerParticleCountPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(dryer_particle_count.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT dryer_particle_count.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DryerParticleCountPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DryerParticleCountPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = DryerParticleCountPeer::doSelectRS($criteria, $con);
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
		$objects = DryerParticleCountPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return DryerParticleCountPeer::populateObjects(DryerParticleCountPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			DryerParticleCountPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = DryerParticleCountPeer::getOMClass();
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
		return DryerParticleCountPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(DryerParticleCountPeer::ID); 

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
			$comparison = $criteria->getComparison(DryerParticleCountPeer::ID);
			$selectCriteria->add(DryerParticleCountPeer::ID, $criteria->remove(DryerParticleCountPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(DryerParticleCountPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(DryerParticleCountPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof DryerParticleCount) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(DryerParticleCountPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(DryerParticleCount $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(DryerParticleCountPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(DryerParticleCountPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(DryerParticleCountPeer::DATABASE_NAME, DryerParticleCountPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = DryerParticleCountPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(DryerParticleCountPeer::DATABASE_NAME);

		$criteria->add(DryerParticleCountPeer::ID, $pk);


		$v = DryerParticleCountPeer::doSelect($criteria, $con);

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
			$criteria->add(DryerParticleCountPeer::ID, $pks, Criteria::IN);
			$objs = DryerParticleCountPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseDryerParticleCountPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/DryerParticleCountMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.DryerParticleCountMapBuilder');
}

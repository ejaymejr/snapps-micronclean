<?php


abstract class BaseAirParticleCountMicroncleanGCellPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'air_particle_count_micronclean_g_cell';

	
	const CLASS_DEFAULT = 'lib.model.particle.AirParticleCountMicroncleanGCell';

	
	const NUM_COLUMNS = 5;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'air_particle_count_micronclean_g_cell.ID';

	
	const RECORD_ID = 'air_particle_count_micronclean_g_cell.RECORD_ID';

	
	const GRID_LABEL = 'air_particle_count_micronclean_g_cell.GRID_LABEL';

	
	const PARTICLE_COUNT = 'air_particle_count_micronclean_g_cell.PARTICLE_COUNT';

	
	const AIR_FLOW = 'air_particle_count_micronclean_g_cell.AIR_FLOW';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'RecordId', 'GridLabel', 'ParticleCount', 'AirFlow', ),
		BasePeer::TYPE_COLNAME => array (AirParticleCountMicroncleanGCellPeer::ID, AirParticleCountMicroncleanGCellPeer::RECORD_ID, AirParticleCountMicroncleanGCellPeer::GRID_LABEL, AirParticleCountMicroncleanGCellPeer::PARTICLE_COUNT, AirParticleCountMicroncleanGCellPeer::AIR_FLOW, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'record_id', 'grid_label', 'particle_count', 'air_flow', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'RecordId' => 1, 'GridLabel' => 2, 'ParticleCount' => 3, 'AirFlow' => 4, ),
		BasePeer::TYPE_COLNAME => array (AirParticleCountMicroncleanGCellPeer::ID => 0, AirParticleCountMicroncleanGCellPeer::RECORD_ID => 1, AirParticleCountMicroncleanGCellPeer::GRID_LABEL => 2, AirParticleCountMicroncleanGCellPeer::PARTICLE_COUNT => 3, AirParticleCountMicroncleanGCellPeer::AIR_FLOW => 4, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'record_id' => 1, 'grid_label' => 2, 'particle_count' => 3, 'air_flow' => 4, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/AirParticleCountMicroncleanGCellMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.AirParticleCountMicroncleanGCellMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = AirParticleCountMicroncleanGCellPeer::getTableMap();
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
		return str_replace(AirParticleCountMicroncleanGCellPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(AirParticleCountMicroncleanGCellPeer::ID);

		$criteria->addSelectColumn(AirParticleCountMicroncleanGCellPeer::RECORD_ID);

		$criteria->addSelectColumn(AirParticleCountMicroncleanGCellPeer::GRID_LABEL);

		$criteria->addSelectColumn(AirParticleCountMicroncleanGCellPeer::PARTICLE_COUNT);

		$criteria->addSelectColumn(AirParticleCountMicroncleanGCellPeer::AIR_FLOW);

	}

	const COUNT = 'COUNT(air_particle_count_micronclean_g_cell.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT air_particle_count_micronclean_g_cell.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AirParticleCountMicroncleanGCellPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AirParticleCountMicroncleanGCellPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = AirParticleCountMicroncleanGCellPeer::doSelectRS($criteria, $con);
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
		$objects = AirParticleCountMicroncleanGCellPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return AirParticleCountMicroncleanGCellPeer::populateObjects(AirParticleCountMicroncleanGCellPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			AirParticleCountMicroncleanGCellPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = AirParticleCountMicroncleanGCellPeer::getOMClass();
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
		return AirParticleCountMicroncleanGCellPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(AirParticleCountMicroncleanGCellPeer::ID); 

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
			$comparison = $criteria->getComparison(AirParticleCountMicroncleanGCellPeer::ID);
			$selectCriteria->add(AirParticleCountMicroncleanGCellPeer::ID, $criteria->remove(AirParticleCountMicroncleanGCellPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(AirParticleCountMicroncleanGCellPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(AirParticleCountMicroncleanGCellPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof AirParticleCountMicroncleanGCell) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AirParticleCountMicroncleanGCellPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(AirParticleCountMicroncleanGCell $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AirParticleCountMicroncleanGCellPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AirParticleCountMicroncleanGCellPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(AirParticleCountMicroncleanGCellPeer::DATABASE_NAME, AirParticleCountMicroncleanGCellPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = AirParticleCountMicroncleanGCellPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(AirParticleCountMicroncleanGCellPeer::DATABASE_NAME);

		$criteria->add(AirParticleCountMicroncleanGCellPeer::ID, $pk);


		$v = AirParticleCountMicroncleanGCellPeer::doSelect($criteria, $con);

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
			$criteria->add(AirParticleCountMicroncleanGCellPeer::ID, $pks, Criteria::IN);
			$objs = AirParticleCountMicroncleanGCellPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseAirParticleCountMicroncleanGCellPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/AirParticleCountMicroncleanGCellMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.AirParticleCountMicroncleanGCellMapBuilder');
}

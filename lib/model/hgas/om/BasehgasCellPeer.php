<?php


abstract class BasehgasCellPeer {

	
	const DATABASE_NAME = 'hgas';

	
	const TABLE_NAME = 'cell';

	
	const CLASS_DEFAULT = 'lib.model.hgas.hgasCell';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'cell.ID';

	
	const NAME = 'cell.NAME';

	
	const BUILDING = 'cell.BUILDING';

	
	const TOTAL_HANGER = 'cell.TOTAL_HANGER';

	
	const TOTAL_RESERVED = 'cell.TOTAL_RESERVED';

	
	const TOTAL_ASSIGNED = 'cell.TOTAL_ASSIGNED';

	
	const TOTAL_SLOT_RESERVED = 'cell.TOTAL_SLOT_RESERVED';

	
	const TOTAL_SLOT_ASSIGNED = 'cell.TOTAL_SLOT_ASSIGNED';

	
	const TOTAL_SLOT_PENDING = 'cell.TOTAL_SLOT_PENDING';

	
	const TOTAL_SLOT_IN_PROGRESS = 'cell.TOTAL_SLOT_IN_PROGRESS';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'Building', 'TotalHanger', 'TotalReserved', 'TotalAssigned', 'TotalSlotReserved', 'TotalSlotAssigned', 'TotalSlotPending', 'TotalSlotInProgress', ),
		BasePeer::TYPE_COLNAME => array (hgasCellPeer::ID, hgasCellPeer::NAME, hgasCellPeer::BUILDING, hgasCellPeer::TOTAL_HANGER, hgasCellPeer::TOTAL_RESERVED, hgasCellPeer::TOTAL_ASSIGNED, hgasCellPeer::TOTAL_SLOT_RESERVED, hgasCellPeer::TOTAL_SLOT_ASSIGNED, hgasCellPeer::TOTAL_SLOT_PENDING, hgasCellPeer::TOTAL_SLOT_IN_PROGRESS, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'building', 'total_hanger', 'total_reserved', 'total_assigned', 'total_slot_reserved', 'total_slot_assigned', 'total_slot_pending', 'total_slot_in_progress', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'Building' => 2, 'TotalHanger' => 3, 'TotalReserved' => 4, 'TotalAssigned' => 5, 'TotalSlotReserved' => 6, 'TotalSlotAssigned' => 7, 'TotalSlotPending' => 8, 'TotalSlotInProgress' => 9, ),
		BasePeer::TYPE_COLNAME => array (hgasCellPeer::ID => 0, hgasCellPeer::NAME => 1, hgasCellPeer::BUILDING => 2, hgasCellPeer::TOTAL_HANGER => 3, hgasCellPeer::TOTAL_RESERVED => 4, hgasCellPeer::TOTAL_ASSIGNED => 5, hgasCellPeer::TOTAL_SLOT_RESERVED => 6, hgasCellPeer::TOTAL_SLOT_ASSIGNED => 7, hgasCellPeer::TOTAL_SLOT_PENDING => 8, hgasCellPeer::TOTAL_SLOT_IN_PROGRESS => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'building' => 2, 'total_hanger' => 3, 'total_reserved' => 4, 'total_assigned' => 5, 'total_slot_reserved' => 6, 'total_slot_assigned' => 7, 'total_slot_pending' => 8, 'total_slot_in_progress' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hgas/map/hgasCellMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hgas.map.hgasCellMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = hgasCellPeer::getTableMap();
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
		return str_replace(hgasCellPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(hgasCellPeer::ID);

		$criteria->addSelectColumn(hgasCellPeer::NAME);

		$criteria->addSelectColumn(hgasCellPeer::BUILDING);

		$criteria->addSelectColumn(hgasCellPeer::TOTAL_HANGER);

		$criteria->addSelectColumn(hgasCellPeer::TOTAL_RESERVED);

		$criteria->addSelectColumn(hgasCellPeer::TOTAL_ASSIGNED);

		$criteria->addSelectColumn(hgasCellPeer::TOTAL_SLOT_RESERVED);

		$criteria->addSelectColumn(hgasCellPeer::TOTAL_SLOT_ASSIGNED);

		$criteria->addSelectColumn(hgasCellPeer::TOTAL_SLOT_PENDING);

		$criteria->addSelectColumn(hgasCellPeer::TOTAL_SLOT_IN_PROGRESS);

	}

	const COUNT = 'COUNT(cell.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT cell.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasCellPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasCellPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = hgasCellPeer::doSelectRS($criteria, $con);
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
		$objects = hgasCellPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return hgasCellPeer::populateObjects(hgasCellPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			hgasCellPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = hgasCellPeer::getOMClass();
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
		return hgasCellPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(hgasCellPeer::ID); 

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
			$comparison = $criteria->getComparison(hgasCellPeer::ID);
			$selectCriteria->add(hgasCellPeer::ID, $criteria->remove(hgasCellPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(hgasCellPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(hgasCellPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof hgasCell) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(hgasCellPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(hgasCell $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(hgasCellPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(hgasCellPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(hgasCellPeer::DATABASE_NAME, hgasCellPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = hgasCellPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(hgasCellPeer::DATABASE_NAME);

		$criteria->add(hgasCellPeer::ID, $pk);


		$v = hgasCellPeer::doSelect($criteria, $con);

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
			$criteria->add(hgasCellPeer::ID, $pks, Criteria::IN);
			$objs = hgasCellPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasehgasCellPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hgas/map/hgasCellMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hgas.map.hgasCellMapBuilder');
}

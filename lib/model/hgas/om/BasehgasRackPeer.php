<?php


abstract class BasehgasRackPeer {

	
	const DATABASE_NAME = 'hgas';

	
	const TABLE_NAME = 'rack';

	
	const CLASS_DEFAULT = 'lib.model.hgas.hgasRack';

	
	const NUM_COLUMNS = 11;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'rack.ID';

	
	const CELL_ID = 'rack.CELL_ID';

	
	const NAME = 'rack.NAME';

	
	const CAPACITY = 'rack.CAPACITY';

	
	const TOTAL_HANGER = 'rack.TOTAL_HANGER';

	
	const TOTAL_RESERVED = 'rack.TOTAL_RESERVED';

	
	const TOTAL_ASSIGNED = 'rack.TOTAL_ASSIGNED';

	
	const TOTAL_SLOT_RESERVED = 'rack.TOTAL_SLOT_RESERVED';

	
	const TOTAL_SLOT_ASSIGNED = 'rack.TOTAL_SLOT_ASSIGNED';

	
	const TOTAL_SLOT_PENDING = 'rack.TOTAL_SLOT_PENDING';

	
	const TOTAL_SLOT_IN_PROGRESS = 'rack.TOTAL_SLOT_IN_PROGRESS';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'CellId', 'Name', 'Capacity', 'TotalHanger', 'TotalReserved', 'TotalAssigned', 'TotalSlotReserved', 'TotalSlotAssigned', 'TotalSlotPending', 'TotalSlotInProgress', ),
		BasePeer::TYPE_COLNAME => array (hgasRackPeer::ID, hgasRackPeer::CELL_ID, hgasRackPeer::NAME, hgasRackPeer::CAPACITY, hgasRackPeer::TOTAL_HANGER, hgasRackPeer::TOTAL_RESERVED, hgasRackPeer::TOTAL_ASSIGNED, hgasRackPeer::TOTAL_SLOT_RESERVED, hgasRackPeer::TOTAL_SLOT_ASSIGNED, hgasRackPeer::TOTAL_SLOT_PENDING, hgasRackPeer::TOTAL_SLOT_IN_PROGRESS, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'cell_id', 'name', 'capacity', 'total_hanger', 'total_reserved', 'total_assigned', 'total_slot_reserved', 'total_slot_assigned', 'total_slot_pending', 'total_slot_in_progress', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'CellId' => 1, 'Name' => 2, 'Capacity' => 3, 'TotalHanger' => 4, 'TotalReserved' => 5, 'TotalAssigned' => 6, 'TotalSlotReserved' => 7, 'TotalSlotAssigned' => 8, 'TotalSlotPending' => 9, 'TotalSlotInProgress' => 10, ),
		BasePeer::TYPE_COLNAME => array (hgasRackPeer::ID => 0, hgasRackPeer::CELL_ID => 1, hgasRackPeer::NAME => 2, hgasRackPeer::CAPACITY => 3, hgasRackPeer::TOTAL_HANGER => 4, hgasRackPeer::TOTAL_RESERVED => 5, hgasRackPeer::TOTAL_ASSIGNED => 6, hgasRackPeer::TOTAL_SLOT_RESERVED => 7, hgasRackPeer::TOTAL_SLOT_ASSIGNED => 8, hgasRackPeer::TOTAL_SLOT_PENDING => 9, hgasRackPeer::TOTAL_SLOT_IN_PROGRESS => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'cell_id' => 1, 'name' => 2, 'capacity' => 3, 'total_hanger' => 4, 'total_reserved' => 5, 'total_assigned' => 6, 'total_slot_reserved' => 7, 'total_slot_assigned' => 8, 'total_slot_pending' => 9, 'total_slot_in_progress' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hgas/map/hgasRackMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hgas.map.hgasRackMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = hgasRackPeer::getTableMap();
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
		return str_replace(hgasRackPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(hgasRackPeer::ID);

		$criteria->addSelectColumn(hgasRackPeer::CELL_ID);

		$criteria->addSelectColumn(hgasRackPeer::NAME);

		$criteria->addSelectColumn(hgasRackPeer::CAPACITY);

		$criteria->addSelectColumn(hgasRackPeer::TOTAL_HANGER);

		$criteria->addSelectColumn(hgasRackPeer::TOTAL_RESERVED);

		$criteria->addSelectColumn(hgasRackPeer::TOTAL_ASSIGNED);

		$criteria->addSelectColumn(hgasRackPeer::TOTAL_SLOT_RESERVED);

		$criteria->addSelectColumn(hgasRackPeer::TOTAL_SLOT_ASSIGNED);

		$criteria->addSelectColumn(hgasRackPeer::TOTAL_SLOT_PENDING);

		$criteria->addSelectColumn(hgasRackPeer::TOTAL_SLOT_IN_PROGRESS);

	}

	const COUNT = 'COUNT(rack.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT rack.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasRackPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasRackPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = hgasRackPeer::doSelectRS($criteria, $con);
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
		$objects = hgasRackPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return hgasRackPeer::populateObjects(hgasRackPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			hgasRackPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = hgasRackPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinhgasCell(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasRackPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasRackPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasRackPeer::CELL_ID, hgasCellPeer::ID);

		$rs = hgasRackPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinhgasCell(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasRackPeer::addSelectColumns($c);
		$startcol = (hgasRackPeer::NUM_COLUMNS - hgasRackPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		hgasCellPeer::addSelectColumns($c);

		$c->addJoin(hgasRackPeer::CELL_ID, hgasCellPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasRackPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasCellPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->gethgasCell(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addhgasRack($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->inithgasRacks();
				$obj2->addhgasRack($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasRackPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasRackPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasRackPeer::CELL_ID, hgasCellPeer::ID);

		$rs = hgasRackPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasRackPeer::addSelectColumns($c);
		$startcol2 = (hgasRackPeer::NUM_COLUMNS - hgasRackPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasCellPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasCellPeer::NUM_COLUMNS;

		$c->addJoin(hgasRackPeer::CELL_ID, hgasCellPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasRackPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = hgasCellPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasCell(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasRack($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasRacks();
				$obj2->addhgasRack($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}

	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return hgasRackPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(hgasRackPeer::ID); 

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
			$comparison = $criteria->getComparison(hgasRackPeer::ID);
			$selectCriteria->add(hgasRackPeer::ID, $criteria->remove(hgasRackPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(hgasRackPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(hgasRackPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof hgasRack) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(hgasRackPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(hgasRack $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(hgasRackPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(hgasRackPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(hgasRackPeer::DATABASE_NAME, hgasRackPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = hgasRackPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(hgasRackPeer::DATABASE_NAME);

		$criteria->add(hgasRackPeer::ID, $pk);


		$v = hgasRackPeer::doSelect($criteria, $con);

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
			$criteria->add(hgasRackPeer::ID, $pks, Criteria::IN);
			$objs = hgasRackPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasehgasRackPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hgas/map/hgasRackMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hgas.map.hgasRackMapBuilder');
}

<?php


abstract class BasehgasDepartmentPeer {

	
	const DATABASE_NAME = 'hgas';

	
	const TABLE_NAME = 'department';

	
	const CLASS_DEFAULT = 'lib.model.hgas.hgasDepartment';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'department.ID';

	
	const NAME = 'department.NAME';

	
	const TOTAL_HANGER = 'department.TOTAL_HANGER';

	
	const TOTAL_RESERVED = 'department.TOTAL_RESERVED';

	
	const TOTAL_ASSIGNED = 'department.TOTAL_ASSIGNED';

	
	const TOTAL_SLOT_RESERVED = 'department.TOTAL_SLOT_RESERVED';

	
	const TOTAL_SLOT_ASSIGNED = 'department.TOTAL_SLOT_ASSIGNED';

	
	const TOTAL_SLOT_PENDING = 'department.TOTAL_SLOT_PENDING';

	
	const TOTAL_SLOT_IN_PROGRESS = 'department.TOTAL_SLOT_IN_PROGRESS';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'TotalHanger', 'TotalReserved', 'TotalAssigned', 'TotalSlotReserved', 'TotalSlotAssigned', 'TotalSlotPending', 'TotalSlotInProgress', ),
		BasePeer::TYPE_COLNAME => array (hgasDepartmentPeer::ID, hgasDepartmentPeer::NAME, hgasDepartmentPeer::TOTAL_HANGER, hgasDepartmentPeer::TOTAL_RESERVED, hgasDepartmentPeer::TOTAL_ASSIGNED, hgasDepartmentPeer::TOTAL_SLOT_RESERVED, hgasDepartmentPeer::TOTAL_SLOT_ASSIGNED, hgasDepartmentPeer::TOTAL_SLOT_PENDING, hgasDepartmentPeer::TOTAL_SLOT_IN_PROGRESS, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'total_hanger', 'total_reserved', 'total_assigned', 'total_slot_reserved', 'total_slot_assigned', 'total_slot_pending', 'total_slot_in_progress', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'TotalHanger' => 2, 'TotalReserved' => 3, 'TotalAssigned' => 4, 'TotalSlotReserved' => 5, 'TotalSlotAssigned' => 6, 'TotalSlotPending' => 7, 'TotalSlotInProgress' => 8, ),
		BasePeer::TYPE_COLNAME => array (hgasDepartmentPeer::ID => 0, hgasDepartmentPeer::NAME => 1, hgasDepartmentPeer::TOTAL_HANGER => 2, hgasDepartmentPeer::TOTAL_RESERVED => 3, hgasDepartmentPeer::TOTAL_ASSIGNED => 4, hgasDepartmentPeer::TOTAL_SLOT_RESERVED => 5, hgasDepartmentPeer::TOTAL_SLOT_ASSIGNED => 6, hgasDepartmentPeer::TOTAL_SLOT_PENDING => 7, hgasDepartmentPeer::TOTAL_SLOT_IN_PROGRESS => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'total_hanger' => 2, 'total_reserved' => 3, 'total_assigned' => 4, 'total_slot_reserved' => 5, 'total_slot_assigned' => 6, 'total_slot_pending' => 7, 'total_slot_in_progress' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hgas/map/hgasDepartmentMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hgas.map.hgasDepartmentMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = hgasDepartmentPeer::getTableMap();
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
		return str_replace(hgasDepartmentPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(hgasDepartmentPeer::ID);

		$criteria->addSelectColumn(hgasDepartmentPeer::NAME);

		$criteria->addSelectColumn(hgasDepartmentPeer::TOTAL_HANGER);

		$criteria->addSelectColumn(hgasDepartmentPeer::TOTAL_RESERVED);

		$criteria->addSelectColumn(hgasDepartmentPeer::TOTAL_ASSIGNED);

		$criteria->addSelectColumn(hgasDepartmentPeer::TOTAL_SLOT_RESERVED);

		$criteria->addSelectColumn(hgasDepartmentPeer::TOTAL_SLOT_ASSIGNED);

		$criteria->addSelectColumn(hgasDepartmentPeer::TOTAL_SLOT_PENDING);

		$criteria->addSelectColumn(hgasDepartmentPeer::TOTAL_SLOT_IN_PROGRESS);

	}

	const COUNT = 'COUNT(department.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT department.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasDepartmentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasDepartmentPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = hgasDepartmentPeer::doSelectRS($criteria, $con);
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
		$objects = hgasDepartmentPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return hgasDepartmentPeer::populateObjects(hgasDepartmentPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			hgasDepartmentPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = hgasDepartmentPeer::getOMClass();
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
		return hgasDepartmentPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(hgasDepartmentPeer::ID); 

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
			$comparison = $criteria->getComparison(hgasDepartmentPeer::ID);
			$selectCriteria->add(hgasDepartmentPeer::ID, $criteria->remove(hgasDepartmentPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(hgasDepartmentPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(hgasDepartmentPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof hgasDepartment) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(hgasDepartmentPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(hgasDepartment $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(hgasDepartmentPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(hgasDepartmentPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(hgasDepartmentPeer::DATABASE_NAME, hgasDepartmentPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = hgasDepartmentPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(hgasDepartmentPeer::DATABASE_NAME);

		$criteria->add(hgasDepartmentPeer::ID, $pk);


		$v = hgasDepartmentPeer::doSelect($criteria, $con);

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
			$criteria->add(hgasDepartmentPeer::ID, $pks, Criteria::IN);
			$objs = hgasDepartmentPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasehgasDepartmentPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hgas/map/hgasDepartmentMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hgas.map.hgasDepartmentMapBuilder');
}

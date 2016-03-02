<?php


abstract class BaseNamelistHeaderPeer {

	
	const DATABASE_NAME = 'hgas3';

	
	const TABLE_NAME = 'namelist_header';

	
	const CLASS_DEFAULT = 'lib.model.hgas3.NamelistHeader';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'namelist_header.ID';

	
	const COMPANY = 'namelist_header.COMPANY';

	
	const CELL = 'namelist_header.CELL';

	
	const DEPARTMENT = 'namelist_header.DEPARTMENT';

	
	const TEAM = 'namelist_header.TEAM';

	
	const DESCRIPTION = 'namelist_header.DESCRIPTION';

	
	const CREATED_BY = 'namelist_header.CREATED_BY';

	
	const DATE_CREATED = 'namelist_header.DATE_CREATED';

	
	const MODIFIED_BY = 'namelist_header.MODIFIED_BY';

	
	const DATE_MODIFIED = 'namelist_header.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Company', 'Cell', 'Department', 'Team', 'Description', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (NamelistHeaderPeer::ID, NamelistHeaderPeer::COMPANY, NamelistHeaderPeer::CELL, NamelistHeaderPeer::DEPARTMENT, NamelistHeaderPeer::TEAM, NamelistHeaderPeer::DESCRIPTION, NamelistHeaderPeer::CREATED_BY, NamelistHeaderPeer::DATE_CREATED, NamelistHeaderPeer::MODIFIED_BY, NamelistHeaderPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'company', 'cell', 'department', 'team', 'description', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Company' => 1, 'Cell' => 2, 'Department' => 3, 'Team' => 4, 'Description' => 5, 'CreatedBy' => 6, 'DateCreated' => 7, 'ModifiedBy' => 8, 'DateModified' => 9, ),
		BasePeer::TYPE_COLNAME => array (NamelistHeaderPeer::ID => 0, NamelistHeaderPeer::COMPANY => 1, NamelistHeaderPeer::CELL => 2, NamelistHeaderPeer::DEPARTMENT => 3, NamelistHeaderPeer::TEAM => 4, NamelistHeaderPeer::DESCRIPTION => 5, NamelistHeaderPeer::CREATED_BY => 6, NamelistHeaderPeer::DATE_CREATED => 7, NamelistHeaderPeer::MODIFIED_BY => 8, NamelistHeaderPeer::DATE_MODIFIED => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'company' => 1, 'cell' => 2, 'department' => 3, 'team' => 4, 'description' => 5, 'created_by' => 6, 'date_created' => 7, 'modified_by' => 8, 'date_modified' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hgas3/map/NamelistHeaderMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hgas3.map.NamelistHeaderMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = NamelistHeaderPeer::getTableMap();
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
		return str_replace(NamelistHeaderPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(NamelistHeaderPeer::ID);

		$criteria->addSelectColumn(NamelistHeaderPeer::COMPANY);

		$criteria->addSelectColumn(NamelistHeaderPeer::CELL);

		$criteria->addSelectColumn(NamelistHeaderPeer::DEPARTMENT);

		$criteria->addSelectColumn(NamelistHeaderPeer::TEAM);

		$criteria->addSelectColumn(NamelistHeaderPeer::DESCRIPTION);

		$criteria->addSelectColumn(NamelistHeaderPeer::CREATED_BY);

		$criteria->addSelectColumn(NamelistHeaderPeer::DATE_CREATED);

		$criteria->addSelectColumn(NamelistHeaderPeer::MODIFIED_BY);

		$criteria->addSelectColumn(NamelistHeaderPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(namelist_header.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT namelist_header.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(NamelistHeaderPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(NamelistHeaderPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = NamelistHeaderPeer::doSelectRS($criteria, $con);
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
		$objects = NamelistHeaderPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return NamelistHeaderPeer::populateObjects(NamelistHeaderPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			NamelistHeaderPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = NamelistHeaderPeer::getOMClass();
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
		return NamelistHeaderPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(NamelistHeaderPeer::ID); 

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
			$comparison = $criteria->getComparison(NamelistHeaderPeer::ID);
			$selectCriteria->add(NamelistHeaderPeer::ID, $criteria->remove(NamelistHeaderPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(NamelistHeaderPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(NamelistHeaderPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof NamelistHeader) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NamelistHeaderPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(NamelistHeader $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NamelistHeaderPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NamelistHeaderPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(NamelistHeaderPeer::DATABASE_NAME, NamelistHeaderPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = NamelistHeaderPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(NamelistHeaderPeer::DATABASE_NAME);

		$criteria->add(NamelistHeaderPeer::ID, $pk);


		$v = NamelistHeaderPeer::doSelect($criteria, $con);

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
			$criteria->add(NamelistHeaderPeer::ID, $pks, Criteria::IN);
			$objs = NamelistHeaderPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseNamelistHeaderPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hgas3/map/NamelistHeaderMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hgas3.map.NamelistHeaderMapBuilder');
}

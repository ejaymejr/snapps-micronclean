<?php


abstract class BaseTkFiscalYearPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'tk_fiscal_year';

	
	const CLASS_DEFAULT = 'lib.model.hr.TkFiscalYear';

	
	const NUM_COLUMNS = 8;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'tk_fiscal_year.ID';

	
	const CODE = 'tk_fiscal_year.CODE';

	
	const DESCRIPTION = 'tk_fiscal_year.DESCRIPTION';

	
	const IS_CURRENT = 'tk_fiscal_year.IS_CURRENT';

	
	const CREATED_BY = 'tk_fiscal_year.CREATED_BY';

	
	const DATE_CREATED = 'tk_fiscal_year.DATE_CREATED';

	
	const MODIFIED_BY = 'tk_fiscal_year.MODIFIED_BY';

	
	const DATE_MODIFIED = 'tk_fiscal_year.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Code', 'Description', 'IsCurrent', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (TkFiscalYearPeer::ID, TkFiscalYearPeer::CODE, TkFiscalYearPeer::DESCRIPTION, TkFiscalYearPeer::IS_CURRENT, TkFiscalYearPeer::CREATED_BY, TkFiscalYearPeer::DATE_CREATED, TkFiscalYearPeer::MODIFIED_BY, TkFiscalYearPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'code', 'description', 'is_current', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Code' => 1, 'Description' => 2, 'IsCurrent' => 3, 'CreatedBy' => 4, 'DateCreated' => 5, 'ModifiedBy' => 6, 'DateModified' => 7, ),
		BasePeer::TYPE_COLNAME => array (TkFiscalYearPeer::ID => 0, TkFiscalYearPeer::CODE => 1, TkFiscalYearPeer::DESCRIPTION => 2, TkFiscalYearPeer::IS_CURRENT => 3, TkFiscalYearPeer::CREATED_BY => 4, TkFiscalYearPeer::DATE_CREATED => 5, TkFiscalYearPeer::MODIFIED_BY => 6, TkFiscalYearPeer::DATE_MODIFIED => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'code' => 1, 'description' => 2, 'is_current' => 3, 'created_by' => 4, 'date_created' => 5, 'modified_by' => 6, 'date_modified' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/TkFiscalYearMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.TkFiscalYearMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TkFiscalYearPeer::getTableMap();
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
		return str_replace(TkFiscalYearPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TkFiscalYearPeer::ID);

		$criteria->addSelectColumn(TkFiscalYearPeer::CODE);

		$criteria->addSelectColumn(TkFiscalYearPeer::DESCRIPTION);

		$criteria->addSelectColumn(TkFiscalYearPeer::IS_CURRENT);

		$criteria->addSelectColumn(TkFiscalYearPeer::CREATED_BY);

		$criteria->addSelectColumn(TkFiscalYearPeer::DATE_CREATED);

		$criteria->addSelectColumn(TkFiscalYearPeer::MODIFIED_BY);

		$criteria->addSelectColumn(TkFiscalYearPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(tk_fiscal_year.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tk_fiscal_year.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TkFiscalYearPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TkFiscalYearPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TkFiscalYearPeer::doSelectRS($criteria, $con);
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
		$objects = TkFiscalYearPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TkFiscalYearPeer::populateObjects(TkFiscalYearPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TkFiscalYearPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TkFiscalYearPeer::getOMClass();
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
		return TkFiscalYearPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TkFiscalYearPeer::ID); 

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
			$comparison = $criteria->getComparison(TkFiscalYearPeer::ID);
			$selectCriteria->add(TkFiscalYearPeer::ID, $criteria->remove(TkFiscalYearPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TkFiscalYearPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TkFiscalYearPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TkFiscalYear) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TkFiscalYearPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TkFiscalYear $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TkFiscalYearPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TkFiscalYearPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TkFiscalYearPeer::DATABASE_NAME, TkFiscalYearPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TkFiscalYearPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(TkFiscalYearPeer::DATABASE_NAME);

		$criteria->add(TkFiscalYearPeer::ID, $pk);


		$v = TkFiscalYearPeer::doSelect($criteria, $con);

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
			$criteria->add(TkFiscalYearPeer::ID, $pks, Criteria::IN);
			$objs = TkFiscalYearPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTkFiscalYearPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/TkFiscalYearMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.TkFiscalYearMapBuilder');
}

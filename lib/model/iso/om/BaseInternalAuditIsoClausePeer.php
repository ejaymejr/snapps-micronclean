<?php


abstract class BaseInternalAuditIsoClausePeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'internal_audit_iso_clause';

	
	const CLASS_DEFAULT = 'lib.model.iso.InternalAuditIsoClause';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'internal_audit_iso_clause.ID';

	
	const SUMMARY_ID = 'internal_audit_iso_clause.SUMMARY_ID';

	
	const ISO_CLAUSE = 'internal_audit_iso_clause.ISO_CLAUSE';

	
	const DATE_CREATED = 'internal_audit_iso_clause.DATE_CREATED';

	
	const CREATED_BY = 'internal_audit_iso_clause.CREATED_BY';

	
	const DATE_MODIFIED = 'internal_audit_iso_clause.DATE_MODIFIED';

	
	const MODIFIED_BY = 'internal_audit_iso_clause.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'SummaryId', 'IsoClause', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (InternalAuditIsoClausePeer::ID, InternalAuditIsoClausePeer::SUMMARY_ID, InternalAuditIsoClausePeer::ISO_CLAUSE, InternalAuditIsoClausePeer::DATE_CREATED, InternalAuditIsoClausePeer::CREATED_BY, InternalAuditIsoClausePeer::DATE_MODIFIED, InternalAuditIsoClausePeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'summary_id', 'iso_clause', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'SummaryId' => 1, 'IsoClause' => 2, 'DateCreated' => 3, 'CreatedBy' => 4, 'DateModified' => 5, 'ModifiedBy' => 6, ),
		BasePeer::TYPE_COLNAME => array (InternalAuditIsoClausePeer::ID => 0, InternalAuditIsoClausePeer::SUMMARY_ID => 1, InternalAuditIsoClausePeer::ISO_CLAUSE => 2, InternalAuditIsoClausePeer::DATE_CREATED => 3, InternalAuditIsoClausePeer::CREATED_BY => 4, InternalAuditIsoClausePeer::DATE_MODIFIED => 5, InternalAuditIsoClausePeer::MODIFIED_BY => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'summary_id' => 1, 'iso_clause' => 2, 'date_created' => 3, 'created_by' => 4, 'date_modified' => 5, 'modified_by' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/InternalAuditIsoClauseMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.InternalAuditIsoClauseMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = InternalAuditIsoClausePeer::getTableMap();
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
		return str_replace(InternalAuditIsoClausePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(InternalAuditIsoClausePeer::ID);

		$criteria->addSelectColumn(InternalAuditIsoClausePeer::SUMMARY_ID);

		$criteria->addSelectColumn(InternalAuditIsoClausePeer::ISO_CLAUSE);

		$criteria->addSelectColumn(InternalAuditIsoClausePeer::DATE_CREATED);

		$criteria->addSelectColumn(InternalAuditIsoClausePeer::CREATED_BY);

		$criteria->addSelectColumn(InternalAuditIsoClausePeer::DATE_MODIFIED);

		$criteria->addSelectColumn(InternalAuditIsoClausePeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(internal_audit_iso_clause.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT internal_audit_iso_clause.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(InternalAuditIsoClausePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(InternalAuditIsoClausePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = InternalAuditIsoClausePeer::doSelectRS($criteria, $con);
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
		$objects = InternalAuditIsoClausePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return InternalAuditIsoClausePeer::populateObjects(InternalAuditIsoClausePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			InternalAuditIsoClausePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = InternalAuditIsoClausePeer::getOMClass();
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
		return InternalAuditIsoClausePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(InternalAuditIsoClausePeer::ID); 

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
			$comparison = $criteria->getComparison(InternalAuditIsoClausePeer::ID);
			$selectCriteria->add(InternalAuditIsoClausePeer::ID, $criteria->remove(InternalAuditIsoClausePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(InternalAuditIsoClausePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(InternalAuditIsoClausePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof InternalAuditIsoClause) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(InternalAuditIsoClausePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(InternalAuditIsoClause $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(InternalAuditIsoClausePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(InternalAuditIsoClausePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(InternalAuditIsoClausePeer::DATABASE_NAME, InternalAuditIsoClausePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = InternalAuditIsoClausePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(InternalAuditIsoClausePeer::DATABASE_NAME);

		$criteria->add(InternalAuditIsoClausePeer::ID, $pk);


		$v = InternalAuditIsoClausePeer::doSelect($criteria, $con);

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
			$criteria->add(InternalAuditIsoClausePeer::ID, $pks, Criteria::IN);
			$objs = InternalAuditIsoClausePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseInternalAuditIsoClausePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/InternalAuditIsoClauseMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.InternalAuditIsoClauseMapBuilder');
}

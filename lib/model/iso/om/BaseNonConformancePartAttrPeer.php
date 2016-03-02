<?php


abstract class BaseNonConformancePartAttrPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'non_conformance_part_attr';

	
	const CLASS_DEFAULT = 'lib.model.iso.NonConformancePartAttr';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'non_conformance_part_attr.ID';

	
	const COMPANY = 'non_conformance_part_attr.COMPANY';

	
	const PART = 'non_conformance_part_attr.PART';

	
	const DATE_CREATED = 'non_conformance_part_attr.DATE_CREATED';

	
	const CREATED_BY = 'non_conformance_part_attr.CREATED_BY';

	
	const DATE_MODIFIED = 'non_conformance_part_attr.DATE_MODIFIED';

	
	const MODIFIED_BY = 'non_conformance_part_attr.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Company', 'Part', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (NonConformancePartAttrPeer::ID, NonConformancePartAttrPeer::COMPANY, NonConformancePartAttrPeer::PART, NonConformancePartAttrPeer::DATE_CREATED, NonConformancePartAttrPeer::CREATED_BY, NonConformancePartAttrPeer::DATE_MODIFIED, NonConformancePartAttrPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'company', 'part', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Company' => 1, 'Part' => 2, 'DateCreated' => 3, 'CreatedBy' => 4, 'DateModified' => 5, 'ModifiedBy' => 6, ),
		BasePeer::TYPE_COLNAME => array (NonConformancePartAttrPeer::ID => 0, NonConformancePartAttrPeer::COMPANY => 1, NonConformancePartAttrPeer::PART => 2, NonConformancePartAttrPeer::DATE_CREATED => 3, NonConformancePartAttrPeer::CREATED_BY => 4, NonConformancePartAttrPeer::DATE_MODIFIED => 5, NonConformancePartAttrPeer::MODIFIED_BY => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'company' => 1, 'part' => 2, 'date_created' => 3, 'created_by' => 4, 'date_modified' => 5, 'modified_by' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/NonConformancePartAttrMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.NonConformancePartAttrMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = NonConformancePartAttrPeer::getTableMap();
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
		return str_replace(NonConformancePartAttrPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(NonConformancePartAttrPeer::ID);

		$criteria->addSelectColumn(NonConformancePartAttrPeer::COMPANY);

		$criteria->addSelectColumn(NonConformancePartAttrPeer::PART);

		$criteria->addSelectColumn(NonConformancePartAttrPeer::DATE_CREATED);

		$criteria->addSelectColumn(NonConformancePartAttrPeer::CREATED_BY);

		$criteria->addSelectColumn(NonConformancePartAttrPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(NonConformancePartAttrPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(non_conformance_part_attr.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT non_conformance_part_attr.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(NonConformancePartAttrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(NonConformancePartAttrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = NonConformancePartAttrPeer::doSelectRS($criteria, $con);
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
		$objects = NonConformancePartAttrPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return NonConformancePartAttrPeer::populateObjects(NonConformancePartAttrPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			NonConformancePartAttrPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = NonConformancePartAttrPeer::getOMClass();
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
		return NonConformancePartAttrPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(NonConformancePartAttrPeer::ID); 

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
			$comparison = $criteria->getComparison(NonConformancePartAttrPeer::ID);
			$selectCriteria->add(NonConformancePartAttrPeer::ID, $criteria->remove(NonConformancePartAttrPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(NonConformancePartAttrPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(NonConformancePartAttrPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof NonConformancePartAttr) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NonConformancePartAttrPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(NonConformancePartAttr $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NonConformancePartAttrPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NonConformancePartAttrPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(NonConformancePartAttrPeer::DATABASE_NAME, NonConformancePartAttrPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = NonConformancePartAttrPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(NonConformancePartAttrPeer::DATABASE_NAME);

		$criteria->add(NonConformancePartAttrPeer::ID, $pk);


		$v = NonConformancePartAttrPeer::doSelect($criteria, $con);

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
			$criteria->add(NonConformancePartAttrPeer::ID, $pks, Criteria::IN);
			$objs = NonConformancePartAttrPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseNonConformancePartAttrPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/NonConformancePartAttrMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.NonConformancePartAttrMapBuilder');
}

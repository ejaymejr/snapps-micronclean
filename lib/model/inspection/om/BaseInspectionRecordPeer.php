<?php


abstract class BaseInspectionRecordPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'inspection_record';

	
	const CLASS_DEFAULT = 'lib.model.inspection.InspectionRecord';

	
	const NUM_COLUMNS = 8;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'inspection_record.ID';

	
	const INSPECTION_TYPE = 'inspection_record.INSPECTION_TYPE';

	
	const INSPECTION_DATE = 'inspection_record.INSPECTION_DATE';

	
	const CHECKED_BY = 'inspection_record.CHECKED_BY';

	
	const MODIFIED_BY = 'inspection_record.MODIFIED_BY';

	
	const DATE_MODIFIED = 'inspection_record.DATE_MODIFIED';

	
	const CREATED_BY = 'inspection_record.CREATED_BY';

	
	const DATE_CREATED = 'inspection_record.DATE_CREATED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'InspectionType', 'InspectionDate', 'CheckedBy', 'ModifiedBy', 'DateModified', 'CreatedBy', 'DateCreated', ),
		BasePeer::TYPE_COLNAME => array (InspectionRecordPeer::ID, InspectionRecordPeer::INSPECTION_TYPE, InspectionRecordPeer::INSPECTION_DATE, InspectionRecordPeer::CHECKED_BY, InspectionRecordPeer::MODIFIED_BY, InspectionRecordPeer::DATE_MODIFIED, InspectionRecordPeer::CREATED_BY, InspectionRecordPeer::DATE_CREATED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'inspection_type', 'inspection_date', 'checked_by', 'modified_by', 'date_modified', 'created_by', 'date_created', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'InspectionType' => 1, 'InspectionDate' => 2, 'CheckedBy' => 3, 'ModifiedBy' => 4, 'DateModified' => 5, 'CreatedBy' => 6, 'DateCreated' => 7, ),
		BasePeer::TYPE_COLNAME => array (InspectionRecordPeer::ID => 0, InspectionRecordPeer::INSPECTION_TYPE => 1, InspectionRecordPeer::INSPECTION_DATE => 2, InspectionRecordPeer::CHECKED_BY => 3, InspectionRecordPeer::MODIFIED_BY => 4, InspectionRecordPeer::DATE_MODIFIED => 5, InspectionRecordPeer::CREATED_BY => 6, InspectionRecordPeer::DATE_CREATED => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'inspection_type' => 1, 'inspection_date' => 2, 'checked_by' => 3, 'modified_by' => 4, 'date_modified' => 5, 'created_by' => 6, 'date_created' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/InspectionRecordMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.InspectionRecordMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = InspectionRecordPeer::getTableMap();
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
		return str_replace(InspectionRecordPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(InspectionRecordPeer::ID);

		$criteria->addSelectColumn(InspectionRecordPeer::INSPECTION_TYPE);

		$criteria->addSelectColumn(InspectionRecordPeer::INSPECTION_DATE);

		$criteria->addSelectColumn(InspectionRecordPeer::CHECKED_BY);

		$criteria->addSelectColumn(InspectionRecordPeer::MODIFIED_BY);

		$criteria->addSelectColumn(InspectionRecordPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(InspectionRecordPeer::CREATED_BY);

		$criteria->addSelectColumn(InspectionRecordPeer::DATE_CREATED);

	}

	const COUNT = 'COUNT(inspection_record.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT inspection_record.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(InspectionRecordPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(InspectionRecordPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = InspectionRecordPeer::doSelectRS($criteria, $con);
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
		$objects = InspectionRecordPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return InspectionRecordPeer::populateObjects(InspectionRecordPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			InspectionRecordPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = InspectionRecordPeer::getOMClass();
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
		return InspectionRecordPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(InspectionRecordPeer::ID); 

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
			$comparison = $criteria->getComparison(InspectionRecordPeer::ID);
			$selectCriteria->add(InspectionRecordPeer::ID, $criteria->remove(InspectionRecordPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(InspectionRecordPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(InspectionRecordPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof InspectionRecord) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(InspectionRecordPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(InspectionRecord $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(InspectionRecordPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(InspectionRecordPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(InspectionRecordPeer::DATABASE_NAME, InspectionRecordPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = InspectionRecordPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(InspectionRecordPeer::DATABASE_NAME);

		$criteria->add(InspectionRecordPeer::ID, $pk);


		$v = InspectionRecordPeer::doSelect($criteria, $con);

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
			$criteria->add(InspectionRecordPeer::ID, $pks, Criteria::IN);
			$objs = InspectionRecordPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseInspectionRecordPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/InspectionRecordMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.InspectionRecordMapBuilder');
}

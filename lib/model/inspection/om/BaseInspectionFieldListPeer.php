<?php


abstract class BaseInspectionFieldListPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'inspection_field_list';

	
	const CLASS_DEFAULT = 'lib.model.inspection.InspectionFieldList';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'inspection_field_list.ID';

	
	const FIELD_NAME = 'inspection_field_list.FIELD_NAME';

	
	const FIELD_TYPE = 'inspection_field_list.FIELD_TYPE';

	
	const REMARK = 'inspection_field_list.REMARK';

	
	const STATUS = 'inspection_field_list.STATUS';

	
	const SEQ = 'inspection_field_list.SEQ';

	
	const MODIFIED_BY = 'inspection_field_list.MODIFIED_BY';

	
	const DATE_MODIFIED = 'inspection_field_list.DATE_MODIFIED';

	
	const CREATED_BY = 'inspection_field_list.CREATED_BY';

	
	const DATE_CREATED = 'inspection_field_list.DATE_CREATED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'FieldName', 'FieldType', 'Remark', 'Status', 'Seq', 'ModifiedBy', 'DateModified', 'CreatedBy', 'DateCreated', ),
		BasePeer::TYPE_COLNAME => array (InspectionFieldListPeer::ID, InspectionFieldListPeer::FIELD_NAME, InspectionFieldListPeer::FIELD_TYPE, InspectionFieldListPeer::REMARK, InspectionFieldListPeer::STATUS, InspectionFieldListPeer::SEQ, InspectionFieldListPeer::MODIFIED_BY, InspectionFieldListPeer::DATE_MODIFIED, InspectionFieldListPeer::CREATED_BY, InspectionFieldListPeer::DATE_CREATED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'field_name', 'field_type', 'remark', 'status', 'seq', 'modified_by', 'date_modified', 'created_by', 'date_created', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'FieldName' => 1, 'FieldType' => 2, 'Remark' => 3, 'Status' => 4, 'Seq' => 5, 'ModifiedBy' => 6, 'DateModified' => 7, 'CreatedBy' => 8, 'DateCreated' => 9, ),
		BasePeer::TYPE_COLNAME => array (InspectionFieldListPeer::ID => 0, InspectionFieldListPeer::FIELD_NAME => 1, InspectionFieldListPeer::FIELD_TYPE => 2, InspectionFieldListPeer::REMARK => 3, InspectionFieldListPeer::STATUS => 4, InspectionFieldListPeer::SEQ => 5, InspectionFieldListPeer::MODIFIED_BY => 6, InspectionFieldListPeer::DATE_MODIFIED => 7, InspectionFieldListPeer::CREATED_BY => 8, InspectionFieldListPeer::DATE_CREATED => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'field_name' => 1, 'field_type' => 2, 'remark' => 3, 'status' => 4, 'seq' => 5, 'modified_by' => 6, 'date_modified' => 7, 'created_by' => 8, 'date_created' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/InspectionFieldListMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.InspectionFieldListMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = InspectionFieldListPeer::getTableMap();
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
		return str_replace(InspectionFieldListPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(InspectionFieldListPeer::ID);

		$criteria->addSelectColumn(InspectionFieldListPeer::FIELD_NAME);

		$criteria->addSelectColumn(InspectionFieldListPeer::FIELD_TYPE);

		$criteria->addSelectColumn(InspectionFieldListPeer::REMARK);

		$criteria->addSelectColumn(InspectionFieldListPeer::STATUS);

		$criteria->addSelectColumn(InspectionFieldListPeer::SEQ);

		$criteria->addSelectColumn(InspectionFieldListPeer::MODIFIED_BY);

		$criteria->addSelectColumn(InspectionFieldListPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(InspectionFieldListPeer::CREATED_BY);

		$criteria->addSelectColumn(InspectionFieldListPeer::DATE_CREATED);

	}

	const COUNT = 'COUNT(inspection_field_list.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT inspection_field_list.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(InspectionFieldListPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(InspectionFieldListPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = InspectionFieldListPeer::doSelectRS($criteria, $con);
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
		$objects = InspectionFieldListPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return InspectionFieldListPeer::populateObjects(InspectionFieldListPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			InspectionFieldListPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = InspectionFieldListPeer::getOMClass();
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
		return InspectionFieldListPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(InspectionFieldListPeer::ID); 

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
			$comparison = $criteria->getComparison(InspectionFieldListPeer::ID);
			$selectCriteria->add(InspectionFieldListPeer::ID, $criteria->remove(InspectionFieldListPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(InspectionFieldListPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(InspectionFieldListPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof InspectionFieldList) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(InspectionFieldListPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(InspectionFieldList $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(InspectionFieldListPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(InspectionFieldListPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(InspectionFieldListPeer::DATABASE_NAME, InspectionFieldListPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = InspectionFieldListPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(InspectionFieldListPeer::DATABASE_NAME);

		$criteria->add(InspectionFieldListPeer::ID, $pk);


		$v = InspectionFieldListPeer::doSelect($criteria, $con);

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
			$criteria->add(InspectionFieldListPeer::ID, $pks, Criteria::IN);
			$objs = InspectionFieldListPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseInspectionFieldListPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/InspectionFieldListMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.InspectionFieldListMapBuilder');
}

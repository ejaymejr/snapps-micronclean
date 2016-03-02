<?php


abstract class BaseInspectionRecordItemPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'inspection_record_item';

	
	const CLASS_DEFAULT = 'lib.model.inspection.InspectionRecordItem';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'inspection_record_item.ID';

	
	const INSPECTION_RECORD_ID = 'inspection_record_item.INSPECTION_RECORD_ID';

	
	const INSPECTION_FIELD_LIST_ID = 'inspection_record_item.INSPECTION_FIELD_LIST_ID';

	
	const FIELD_NAME = 'inspection_record_item.FIELD_NAME';

	
	const FIELD_VALUE = 'inspection_record_item.FIELD_VALUE';

	
	const MODIFIED_BY = 'inspection_record_item.MODIFIED_BY';

	
	const DATE_MODIFIED = 'inspection_record_item.DATE_MODIFIED';

	
	const CREATED_BY = 'inspection_record_item.CREATED_BY';

	
	const DATE_CREATED = 'inspection_record_item.DATE_CREATED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'InspectionRecordId', 'InspectionFieldListId', 'FieldName', 'FieldValue', 'ModifiedBy', 'DateModified', 'CreatedBy', 'DateCreated', ),
		BasePeer::TYPE_COLNAME => array (InspectionRecordItemPeer::ID, InspectionRecordItemPeer::INSPECTION_RECORD_ID, InspectionRecordItemPeer::INSPECTION_FIELD_LIST_ID, InspectionRecordItemPeer::FIELD_NAME, InspectionRecordItemPeer::FIELD_VALUE, InspectionRecordItemPeer::MODIFIED_BY, InspectionRecordItemPeer::DATE_MODIFIED, InspectionRecordItemPeer::CREATED_BY, InspectionRecordItemPeer::DATE_CREATED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'inspection_record_id', 'inspection_field_list_id', 'field_name', 'field_value', 'modified_by', 'date_modified', 'created_by', 'date_created', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'InspectionRecordId' => 1, 'InspectionFieldListId' => 2, 'FieldName' => 3, 'FieldValue' => 4, 'ModifiedBy' => 5, 'DateModified' => 6, 'CreatedBy' => 7, 'DateCreated' => 8, ),
		BasePeer::TYPE_COLNAME => array (InspectionRecordItemPeer::ID => 0, InspectionRecordItemPeer::INSPECTION_RECORD_ID => 1, InspectionRecordItemPeer::INSPECTION_FIELD_LIST_ID => 2, InspectionRecordItemPeer::FIELD_NAME => 3, InspectionRecordItemPeer::FIELD_VALUE => 4, InspectionRecordItemPeer::MODIFIED_BY => 5, InspectionRecordItemPeer::DATE_MODIFIED => 6, InspectionRecordItemPeer::CREATED_BY => 7, InspectionRecordItemPeer::DATE_CREATED => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'inspection_record_id' => 1, 'inspection_field_list_id' => 2, 'field_name' => 3, 'field_value' => 4, 'modified_by' => 5, 'date_modified' => 6, 'created_by' => 7, 'date_created' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/InspectionRecordItemMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.InspectionRecordItemMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = InspectionRecordItemPeer::getTableMap();
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
		return str_replace(InspectionRecordItemPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(InspectionRecordItemPeer::ID);

		$criteria->addSelectColumn(InspectionRecordItemPeer::INSPECTION_RECORD_ID);

		$criteria->addSelectColumn(InspectionRecordItemPeer::INSPECTION_FIELD_LIST_ID);

		$criteria->addSelectColumn(InspectionRecordItemPeer::FIELD_NAME);

		$criteria->addSelectColumn(InspectionRecordItemPeer::FIELD_VALUE);

		$criteria->addSelectColumn(InspectionRecordItemPeer::MODIFIED_BY);

		$criteria->addSelectColumn(InspectionRecordItemPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(InspectionRecordItemPeer::CREATED_BY);

		$criteria->addSelectColumn(InspectionRecordItemPeer::DATE_CREATED);

	}

	const COUNT = 'COUNT(inspection_record_item.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT inspection_record_item.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(InspectionRecordItemPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(InspectionRecordItemPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = InspectionRecordItemPeer::doSelectRS($criteria, $con);
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
		$objects = InspectionRecordItemPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return InspectionRecordItemPeer::populateObjects(InspectionRecordItemPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			InspectionRecordItemPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = InspectionRecordItemPeer::getOMClass();
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
		return InspectionRecordItemPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(InspectionRecordItemPeer::ID); 

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
			$comparison = $criteria->getComparison(InspectionRecordItemPeer::ID);
			$selectCriteria->add(InspectionRecordItemPeer::ID, $criteria->remove(InspectionRecordItemPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(InspectionRecordItemPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(InspectionRecordItemPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof InspectionRecordItem) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(InspectionRecordItemPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(InspectionRecordItem $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(InspectionRecordItemPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(InspectionRecordItemPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(InspectionRecordItemPeer::DATABASE_NAME, InspectionRecordItemPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = InspectionRecordItemPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(InspectionRecordItemPeer::DATABASE_NAME);

		$criteria->add(InspectionRecordItemPeer::ID, $pk);


		$v = InspectionRecordItemPeer::doSelect($criteria, $con);

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
			$criteria->add(InspectionRecordItemPeer::ID, $pks, Criteria::IN);
			$objs = InspectionRecordItemPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseInspectionRecordItemPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/InspectionRecordItemMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.InspectionRecordItemMapBuilder');
}

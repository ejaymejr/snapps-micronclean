<?php


abstract class BasePms6252QuarterlyPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'pms_6252_quarterly';

	
	const CLASS_DEFAULT = 'lib.model.inspection.Pms6252Quarterly';

	
	const NUM_COLUMNS = 13;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'pms_6252_quarterly.ID';

	
	const TRANS_DATE = 'pms_6252_quarterly.TRANS_DATE';

	
	const QUARTER = 'pms_6252_quarterly.QUARTER';

	
	const DATE_COMPLETED = 'pms_6252_quarterly.DATE_COMPLETED';

	
	const DUE_DATE = 'pms_6252_quarterly.DUE_DATE';

	
	const CDA_FILTER = 'pms_6252_quarterly.CDA_FILTER';

	
	const DI_WATER_FILTER = 'pms_6252_quarterly.DI_WATER_FILTER';

	
	const INITIAL = 'pms_6252_quarterly.INITIAL';

	
	const REMARK = 'pms_6252_quarterly.REMARK';

	
	const CREATED_BY = 'pms_6252_quarterly.CREATED_BY';

	
	const DATE_CREATED = 'pms_6252_quarterly.DATE_CREATED';

	
	const MODIFIED_BY = 'pms_6252_quarterly.MODIFIED_BY';

	
	const DATE_MODIFIED = 'pms_6252_quarterly.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'Quarter', 'DateCompleted', 'DueDate', 'CdaFilter', 'DiWaterFilter', 'Initial', 'Remark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (Pms6252QuarterlyPeer::ID, Pms6252QuarterlyPeer::TRANS_DATE, Pms6252QuarterlyPeer::QUARTER, Pms6252QuarterlyPeer::DATE_COMPLETED, Pms6252QuarterlyPeer::DUE_DATE, Pms6252QuarterlyPeer::CDA_FILTER, Pms6252QuarterlyPeer::DI_WATER_FILTER, Pms6252QuarterlyPeer::INITIAL, Pms6252QuarterlyPeer::REMARK, Pms6252QuarterlyPeer::CREATED_BY, Pms6252QuarterlyPeer::DATE_CREATED, Pms6252QuarterlyPeer::MODIFIED_BY, Pms6252QuarterlyPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'quarter', 'date_completed', 'due_date', 'cda_filter', 'di_water_filter', 'initial', 'remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'Quarter' => 2, 'DateCompleted' => 3, 'DueDate' => 4, 'CdaFilter' => 5, 'DiWaterFilter' => 6, 'Initial' => 7, 'Remark' => 8, 'CreatedBy' => 9, 'DateCreated' => 10, 'ModifiedBy' => 11, 'DateModified' => 12, ),
		BasePeer::TYPE_COLNAME => array (Pms6252QuarterlyPeer::ID => 0, Pms6252QuarterlyPeer::TRANS_DATE => 1, Pms6252QuarterlyPeer::QUARTER => 2, Pms6252QuarterlyPeer::DATE_COMPLETED => 3, Pms6252QuarterlyPeer::DUE_DATE => 4, Pms6252QuarterlyPeer::CDA_FILTER => 5, Pms6252QuarterlyPeer::DI_WATER_FILTER => 6, Pms6252QuarterlyPeer::INITIAL => 7, Pms6252QuarterlyPeer::REMARK => 8, Pms6252QuarterlyPeer::CREATED_BY => 9, Pms6252QuarterlyPeer::DATE_CREATED => 10, Pms6252QuarterlyPeer::MODIFIED_BY => 11, Pms6252QuarterlyPeer::DATE_MODIFIED => 12, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'quarter' => 2, 'date_completed' => 3, 'due_date' => 4, 'cda_filter' => 5, 'di_water_filter' => 6, 'initial' => 7, 'remark' => 8, 'created_by' => 9, 'date_created' => 10, 'modified_by' => 11, 'date_modified' => 12, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/Pms6252QuarterlyMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.Pms6252QuarterlyMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = Pms6252QuarterlyPeer::getTableMap();
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
		return str_replace(Pms6252QuarterlyPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(Pms6252QuarterlyPeer::ID);

		$criteria->addSelectColumn(Pms6252QuarterlyPeer::TRANS_DATE);

		$criteria->addSelectColumn(Pms6252QuarterlyPeer::QUARTER);

		$criteria->addSelectColumn(Pms6252QuarterlyPeer::DATE_COMPLETED);

		$criteria->addSelectColumn(Pms6252QuarterlyPeer::DUE_DATE);

		$criteria->addSelectColumn(Pms6252QuarterlyPeer::CDA_FILTER);

		$criteria->addSelectColumn(Pms6252QuarterlyPeer::DI_WATER_FILTER);

		$criteria->addSelectColumn(Pms6252QuarterlyPeer::INITIAL);

		$criteria->addSelectColumn(Pms6252QuarterlyPeer::REMARK);

		$criteria->addSelectColumn(Pms6252QuarterlyPeer::CREATED_BY);

		$criteria->addSelectColumn(Pms6252QuarterlyPeer::DATE_CREATED);

		$criteria->addSelectColumn(Pms6252QuarterlyPeer::MODIFIED_BY);

		$criteria->addSelectColumn(Pms6252QuarterlyPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(pms_6252_quarterly.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT pms_6252_quarterly.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(Pms6252QuarterlyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(Pms6252QuarterlyPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = Pms6252QuarterlyPeer::doSelectRS($criteria, $con);
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
		$objects = Pms6252QuarterlyPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return Pms6252QuarterlyPeer::populateObjects(Pms6252QuarterlyPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			Pms6252QuarterlyPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = Pms6252QuarterlyPeer::getOMClass();
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
		return Pms6252QuarterlyPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(Pms6252QuarterlyPeer::ID); 

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
			$comparison = $criteria->getComparison(Pms6252QuarterlyPeer::ID);
			$selectCriteria->add(Pms6252QuarterlyPeer::ID, $criteria->remove(Pms6252QuarterlyPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(Pms6252QuarterlyPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(Pms6252QuarterlyPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Pms6252Quarterly) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Pms6252QuarterlyPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Pms6252Quarterly $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Pms6252QuarterlyPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Pms6252QuarterlyPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(Pms6252QuarterlyPeer::DATABASE_NAME, Pms6252QuarterlyPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = Pms6252QuarterlyPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(Pms6252QuarterlyPeer::DATABASE_NAME);

		$criteria->add(Pms6252QuarterlyPeer::ID, $pk);


		$v = Pms6252QuarterlyPeer::doSelect($criteria, $con);

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
			$criteria->add(Pms6252QuarterlyPeer::ID, $pks, Criteria::IN);
			$objs = Pms6252QuarterlyPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasePms6252QuarterlyPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/Pms6252QuarterlyMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.Pms6252QuarterlyMapBuilder');
}

<?php


abstract class BasePms1232abQuarterlyPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'pms_1232ab_quarterly';

	
	const CLASS_DEFAULT = 'lib.model.inspection.Pms1232abQuarterly';

	
	const NUM_COLUMNS = 14;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'pms_1232ab_quarterly.ID';

	
	const TRANS_DATE = 'pms_1232ab_quarterly.TRANS_DATE';

	
	const MACHINE_NO = 'pms_1232ab_quarterly.MACHINE_NO';

	
	const QUARTER = 'pms_1232ab_quarterly.QUARTER';

	
	const DATE_COMPLETED = 'pms_1232ab_quarterly.DATE_COMPLETED';

	
	const DUE_DATE = 'pms_1232ab_quarterly.DUE_DATE';

	
	const CDA_FILTER = 'pms_1232ab_quarterly.CDA_FILTER';

	
	const DI_WATER_FILTER = 'pms_1232ab_quarterly.DI_WATER_FILTER';

	
	const INITIAL = 'pms_1232ab_quarterly.INITIAL';

	
	const REMARK = 'pms_1232ab_quarterly.REMARK';

	
	const CREATED_BY = 'pms_1232ab_quarterly.CREATED_BY';

	
	const DATE_CREATED = 'pms_1232ab_quarterly.DATE_CREATED';

	
	const MODIFIED_BY = 'pms_1232ab_quarterly.MODIFIED_BY';

	
	const DATE_MODIFIED = 'pms_1232ab_quarterly.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'MachineNo', 'Quarter', 'DateCompleted', 'DueDate', 'CdaFilter', 'DiWaterFilter', 'Initial', 'Remark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (Pms1232abQuarterlyPeer::ID, Pms1232abQuarterlyPeer::TRANS_DATE, Pms1232abQuarterlyPeer::MACHINE_NO, Pms1232abQuarterlyPeer::QUARTER, Pms1232abQuarterlyPeer::DATE_COMPLETED, Pms1232abQuarterlyPeer::DUE_DATE, Pms1232abQuarterlyPeer::CDA_FILTER, Pms1232abQuarterlyPeer::DI_WATER_FILTER, Pms1232abQuarterlyPeer::INITIAL, Pms1232abQuarterlyPeer::REMARK, Pms1232abQuarterlyPeer::CREATED_BY, Pms1232abQuarterlyPeer::DATE_CREATED, Pms1232abQuarterlyPeer::MODIFIED_BY, Pms1232abQuarterlyPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'machine_no', 'quarter', 'date_completed', 'due_date', 'cda_filter', 'di_water_filter', 'initial', 'remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'MachineNo' => 2, 'Quarter' => 3, 'DateCompleted' => 4, 'DueDate' => 5, 'CdaFilter' => 6, 'DiWaterFilter' => 7, 'Initial' => 8, 'Remark' => 9, 'CreatedBy' => 10, 'DateCreated' => 11, 'ModifiedBy' => 12, 'DateModified' => 13, ),
		BasePeer::TYPE_COLNAME => array (Pms1232abQuarterlyPeer::ID => 0, Pms1232abQuarterlyPeer::TRANS_DATE => 1, Pms1232abQuarterlyPeer::MACHINE_NO => 2, Pms1232abQuarterlyPeer::QUARTER => 3, Pms1232abQuarterlyPeer::DATE_COMPLETED => 4, Pms1232abQuarterlyPeer::DUE_DATE => 5, Pms1232abQuarterlyPeer::CDA_FILTER => 6, Pms1232abQuarterlyPeer::DI_WATER_FILTER => 7, Pms1232abQuarterlyPeer::INITIAL => 8, Pms1232abQuarterlyPeer::REMARK => 9, Pms1232abQuarterlyPeer::CREATED_BY => 10, Pms1232abQuarterlyPeer::DATE_CREATED => 11, Pms1232abQuarterlyPeer::MODIFIED_BY => 12, Pms1232abQuarterlyPeer::DATE_MODIFIED => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'machine_no' => 2, 'quarter' => 3, 'date_completed' => 4, 'due_date' => 5, 'cda_filter' => 6, 'di_water_filter' => 7, 'initial' => 8, 'remark' => 9, 'created_by' => 10, 'date_created' => 11, 'modified_by' => 12, 'date_modified' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/Pms1232abQuarterlyMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.Pms1232abQuarterlyMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = Pms1232abQuarterlyPeer::getTableMap();
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
		return str_replace(Pms1232abQuarterlyPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::ID);

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::TRANS_DATE);

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::MACHINE_NO);

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::QUARTER);

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::DATE_COMPLETED);

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::DUE_DATE);

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::CDA_FILTER);

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::DI_WATER_FILTER);

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::INITIAL);

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::REMARK);

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::CREATED_BY);

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::DATE_CREATED);

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::MODIFIED_BY);

		$criteria->addSelectColumn(Pms1232abQuarterlyPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(pms_1232ab_quarterly.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT pms_1232ab_quarterly.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(Pms1232abQuarterlyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(Pms1232abQuarterlyPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = Pms1232abQuarterlyPeer::doSelectRS($criteria, $con);
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
		$objects = Pms1232abQuarterlyPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return Pms1232abQuarterlyPeer::populateObjects(Pms1232abQuarterlyPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			Pms1232abQuarterlyPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = Pms1232abQuarterlyPeer::getOMClass();
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
		return Pms1232abQuarterlyPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(Pms1232abQuarterlyPeer::ID); 

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
			$comparison = $criteria->getComparison(Pms1232abQuarterlyPeer::ID);
			$selectCriteria->add(Pms1232abQuarterlyPeer::ID, $criteria->remove(Pms1232abQuarterlyPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(Pms1232abQuarterlyPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(Pms1232abQuarterlyPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Pms1232abQuarterly) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Pms1232abQuarterlyPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Pms1232abQuarterly $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Pms1232abQuarterlyPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Pms1232abQuarterlyPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(Pms1232abQuarterlyPeer::DATABASE_NAME, Pms1232abQuarterlyPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = Pms1232abQuarterlyPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(Pms1232abQuarterlyPeer::DATABASE_NAME);

		$criteria->add(Pms1232abQuarterlyPeer::ID, $pk);


		$v = Pms1232abQuarterlyPeer::doSelect($criteria, $con);

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
			$criteria->add(Pms1232abQuarterlyPeer::ID, $pks, Criteria::IN);
			$objs = Pms1232abQuarterlyPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasePms1232abQuarterlyPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/Pms1232abQuarterlyMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.Pms1232abQuarterlyMapBuilder');
}

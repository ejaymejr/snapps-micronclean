<?php


abstract class BaseGarmentBacteriaCountPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'garment_bacteria_count';

	
	const CLASS_DEFAULT = 'lib.model.particle.GarmentBacteriaCount';

	
	const NUM_COLUMNS = 20;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'garment_bacteria_count.ID';

	
	const DATE_TIME = 'garment_bacteria_count.DATE_TIME';

	
	const CUSTOMER = 'garment_bacteria_count.CUSTOMER';

	
	const DEPARTMENT = 'garment_bacteria_count.DEPARTMENT';

	
	const GARMENT_CODE = 'garment_bacteria_count.GARMENT_CODE';

	
	const TYPE = 'garment_bacteria_count.TYPE';

	
	const BACTERIA_COUNT = 'garment_bacteria_count.BACTERIA_COUNT';

	
	const POINT_3 = 'garment_bacteria_count.POINT_3';

	
	const POINT_3_SPEC = 'garment_bacteria_count.POINT_3_SPEC';

	
	const POINT_5 = 'garment_bacteria_count.POINT_5';

	
	const POINT_5_SPEC = 'garment_bacteria_count.POINT_5_SPEC';

	
	const NO_OF_TIMES_WASH = 'garment_bacteria_count.NO_OF_TIMES_WASH';

	
	const WASHER = 'garment_bacteria_count.WASHER';

	
	const DRYER = 'garment_bacteria_count.DRYER';

	
	const REMARKS = 'garment_bacteria_count.REMARKS';

	
	const TESTER = 'garment_bacteria_count.TESTER';

	
	const CREATED_BY = 'garment_bacteria_count.CREATED_BY';

	
	const DATE_CREATED = 'garment_bacteria_count.DATE_CREATED';

	
	const MODIFIED_BY = 'garment_bacteria_count.MODIFIED_BY';

	
	const DATE_MODIFIED = 'garment_bacteria_count.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'Customer', 'Department', 'GarmentCode', 'Type', 'BacteriaCount', 'Point3', 'Point3Spec', 'Point5', 'Point5Spec', 'NoOfTimesWash', 'Washer', 'Dryer', 'Remarks', 'Tester', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (GarmentBacteriaCountPeer::ID, GarmentBacteriaCountPeer::DATE_TIME, GarmentBacteriaCountPeer::CUSTOMER, GarmentBacteriaCountPeer::DEPARTMENT, GarmentBacteriaCountPeer::GARMENT_CODE, GarmentBacteriaCountPeer::TYPE, GarmentBacteriaCountPeer::BACTERIA_COUNT, GarmentBacteriaCountPeer::POINT_3, GarmentBacteriaCountPeer::POINT_3_SPEC, GarmentBacteriaCountPeer::POINT_5, GarmentBacteriaCountPeer::POINT_5_SPEC, GarmentBacteriaCountPeer::NO_OF_TIMES_WASH, GarmentBacteriaCountPeer::WASHER, GarmentBacteriaCountPeer::DRYER, GarmentBacteriaCountPeer::REMARKS, GarmentBacteriaCountPeer::TESTER, GarmentBacteriaCountPeer::CREATED_BY, GarmentBacteriaCountPeer::DATE_CREATED, GarmentBacteriaCountPeer::MODIFIED_BY, GarmentBacteriaCountPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'customer', 'department', 'garment_code', 'type', 'bacteria_count', 'point_3', 'point_3_spec', 'point_5', 'point_5_spec', 'no_of_times_wash', 'washer', 'dryer', 'remarks', 'tester', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'Customer' => 2, 'Department' => 3, 'GarmentCode' => 4, 'Type' => 5, 'BacteriaCount' => 6, 'Point3' => 7, 'Point3Spec' => 8, 'Point5' => 9, 'Point5Spec' => 10, 'NoOfTimesWash' => 11, 'Washer' => 12, 'Dryer' => 13, 'Remarks' => 14, 'Tester' => 15, 'CreatedBy' => 16, 'DateCreated' => 17, 'ModifiedBy' => 18, 'DateModified' => 19, ),
		BasePeer::TYPE_COLNAME => array (GarmentBacteriaCountPeer::ID => 0, GarmentBacteriaCountPeer::DATE_TIME => 1, GarmentBacteriaCountPeer::CUSTOMER => 2, GarmentBacteriaCountPeer::DEPARTMENT => 3, GarmentBacteriaCountPeer::GARMENT_CODE => 4, GarmentBacteriaCountPeer::TYPE => 5, GarmentBacteriaCountPeer::BACTERIA_COUNT => 6, GarmentBacteriaCountPeer::POINT_3 => 7, GarmentBacteriaCountPeer::POINT_3_SPEC => 8, GarmentBacteriaCountPeer::POINT_5 => 9, GarmentBacteriaCountPeer::POINT_5_SPEC => 10, GarmentBacteriaCountPeer::NO_OF_TIMES_WASH => 11, GarmentBacteriaCountPeer::WASHER => 12, GarmentBacteriaCountPeer::DRYER => 13, GarmentBacteriaCountPeer::REMARKS => 14, GarmentBacteriaCountPeer::TESTER => 15, GarmentBacteriaCountPeer::CREATED_BY => 16, GarmentBacteriaCountPeer::DATE_CREATED => 17, GarmentBacteriaCountPeer::MODIFIED_BY => 18, GarmentBacteriaCountPeer::DATE_MODIFIED => 19, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'customer' => 2, 'department' => 3, 'garment_code' => 4, 'type' => 5, 'bacteria_count' => 6, 'point_3' => 7, 'point_3_spec' => 8, 'point_5' => 9, 'point_5_spec' => 10, 'no_of_times_wash' => 11, 'washer' => 12, 'dryer' => 13, 'remarks' => 14, 'tester' => 15, 'created_by' => 16, 'date_created' => 17, 'modified_by' => 18, 'date_modified' => 19, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/GarmentBacteriaCountMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.GarmentBacteriaCountMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = GarmentBacteriaCountPeer::getTableMap();
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
		return str_replace(GarmentBacteriaCountPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::ID);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::DATE_TIME);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::CUSTOMER);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::DEPARTMENT);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::GARMENT_CODE);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::TYPE);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::BACTERIA_COUNT);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::POINT_3);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::POINT_3_SPEC);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::POINT_5);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::POINT_5_SPEC);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::NO_OF_TIMES_WASH);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::WASHER);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::DRYER);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::REMARKS);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::TESTER);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::CREATED_BY);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::DATE_CREATED);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::MODIFIED_BY);

		$criteria->addSelectColumn(GarmentBacteriaCountPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(garment_bacteria_count.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT garment_bacteria_count.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(GarmentBacteriaCountPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(GarmentBacteriaCountPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = GarmentBacteriaCountPeer::doSelectRS($criteria, $con);
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
		$objects = GarmentBacteriaCountPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return GarmentBacteriaCountPeer::populateObjects(GarmentBacteriaCountPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			GarmentBacteriaCountPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = GarmentBacteriaCountPeer::getOMClass();
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
		return GarmentBacteriaCountPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(GarmentBacteriaCountPeer::ID); 

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
			$comparison = $criteria->getComparison(GarmentBacteriaCountPeer::ID);
			$selectCriteria->add(GarmentBacteriaCountPeer::ID, $criteria->remove(GarmentBacteriaCountPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(GarmentBacteriaCountPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(GarmentBacteriaCountPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof GarmentBacteriaCount) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(GarmentBacteriaCountPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(GarmentBacteriaCount $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(GarmentBacteriaCountPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(GarmentBacteriaCountPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(GarmentBacteriaCountPeer::DATABASE_NAME, GarmentBacteriaCountPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = GarmentBacteriaCountPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(GarmentBacteriaCountPeer::DATABASE_NAME);

		$criteria->add(GarmentBacteriaCountPeer::ID, $pk);


		$v = GarmentBacteriaCountPeer::doSelect($criteria, $con);

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
			$criteria->add(GarmentBacteriaCountPeer::ID, $pks, Criteria::IN);
			$objs = GarmentBacteriaCountPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseGarmentBacteriaCountPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/GarmentBacteriaCountMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.GarmentBacteriaCountMapBuilder');
}

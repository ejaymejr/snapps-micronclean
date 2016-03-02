<?php


abstract class BaseSurfaceDataPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'surface_data';

	
	const CLASS_DEFAULT = 'lib.model.particle.SurfaceData';

	
	const NUM_COLUMNS = 22;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'surface_data.ID';

	
	const DATE_TIME = 'surface_data.DATE_TIME';

	
	const CUSTOMER = 'surface_data.CUSTOMER';

	
	const DEPARTMENT = 'surface_data.DEPARTMENT';

	
	const TYPE = 'surface_data.TYPE';

	
	const SLEEVE_X1 = 'surface_data.SLEEVE_X1';

	
	const SLEEVE_X1_SPEC = 'surface_data.SLEEVE_X1_SPEC';

	
	const SLEEVE_X2 = 'surface_data.SLEEVE_X2';

	
	const SLEEVE_X2_SPEC = 'surface_data.SLEEVE_X2_SPEC';

	
	const SHOE_RIGHT = 'surface_data.SHOE_RIGHT';

	
	const SHOE_RIGHT_SPEC = 'surface_data.SHOE_RIGHT_SPEC';

	
	const SHOE_LEFT = 'surface_data.SHOE_LEFT';

	
	const SHOE_LEFT_SPEC = 'surface_data.SHOE_LEFT_SPEC';

	
	const WASHER = 'surface_data.WASHER';

	
	const DRYER = 'surface_data.DRYER';

	
	const REMARKS = 'surface_data.REMARKS';

	
	const TESTER = 'surface_data.TESTER';

	
	const GARMENT_CODE = 'surface_data.GARMENT_CODE';

	
	const CREATED_BY = 'surface_data.CREATED_BY';

	
	const DATE_CREATED = 'surface_data.DATE_CREATED';

	
	const MODIFIED_BY = 'surface_data.MODIFIED_BY';

	
	const DATE_MODIFIED = 'surface_data.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'Customer', 'Department', 'Type', 'SleeveX1', 'SleeveX1Spec', 'SleeveX2', 'SleeveX2Spec', 'ShoeRight', 'ShoeRightSpec', 'ShoeLeft', 'ShoeLeftSpec', 'Washer', 'Dryer', 'Remarks', 'Tester', 'GarmentCode', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (SurfaceDataPeer::ID, SurfaceDataPeer::DATE_TIME, SurfaceDataPeer::CUSTOMER, SurfaceDataPeer::DEPARTMENT, SurfaceDataPeer::TYPE, SurfaceDataPeer::SLEEVE_X1, SurfaceDataPeer::SLEEVE_X1_SPEC, SurfaceDataPeer::SLEEVE_X2, SurfaceDataPeer::SLEEVE_X2_SPEC, SurfaceDataPeer::SHOE_RIGHT, SurfaceDataPeer::SHOE_RIGHT_SPEC, SurfaceDataPeer::SHOE_LEFT, SurfaceDataPeer::SHOE_LEFT_SPEC, SurfaceDataPeer::WASHER, SurfaceDataPeer::DRYER, SurfaceDataPeer::REMARKS, SurfaceDataPeer::TESTER, SurfaceDataPeer::GARMENT_CODE, SurfaceDataPeer::CREATED_BY, SurfaceDataPeer::DATE_CREATED, SurfaceDataPeer::MODIFIED_BY, SurfaceDataPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'customer', 'department', 'type', 'sleeve_x1', 'sleeve_x1_spec', 'sleeve_x2', 'sleeve_x2_spec', 'shoe_right', 'shoe_right_spec', 'shoe_left', 'shoe_left_spec', 'washer', 'dryer', 'remarks', 'tester', 'garment_code', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'Customer' => 2, 'Department' => 3, 'Type' => 4, 'SleeveX1' => 5, 'SleeveX1Spec' => 6, 'SleeveX2' => 7, 'SleeveX2Spec' => 8, 'ShoeRight' => 9, 'ShoeRightSpec' => 10, 'ShoeLeft' => 11, 'ShoeLeftSpec' => 12, 'Washer' => 13, 'Dryer' => 14, 'Remarks' => 15, 'Tester' => 16, 'GarmentCode' => 17, 'CreatedBy' => 18, 'DateCreated' => 19, 'ModifiedBy' => 20, 'DateModified' => 21, ),
		BasePeer::TYPE_COLNAME => array (SurfaceDataPeer::ID => 0, SurfaceDataPeer::DATE_TIME => 1, SurfaceDataPeer::CUSTOMER => 2, SurfaceDataPeer::DEPARTMENT => 3, SurfaceDataPeer::TYPE => 4, SurfaceDataPeer::SLEEVE_X1 => 5, SurfaceDataPeer::SLEEVE_X1_SPEC => 6, SurfaceDataPeer::SLEEVE_X2 => 7, SurfaceDataPeer::SLEEVE_X2_SPEC => 8, SurfaceDataPeer::SHOE_RIGHT => 9, SurfaceDataPeer::SHOE_RIGHT_SPEC => 10, SurfaceDataPeer::SHOE_LEFT => 11, SurfaceDataPeer::SHOE_LEFT_SPEC => 12, SurfaceDataPeer::WASHER => 13, SurfaceDataPeer::DRYER => 14, SurfaceDataPeer::REMARKS => 15, SurfaceDataPeer::TESTER => 16, SurfaceDataPeer::GARMENT_CODE => 17, SurfaceDataPeer::CREATED_BY => 18, SurfaceDataPeer::DATE_CREATED => 19, SurfaceDataPeer::MODIFIED_BY => 20, SurfaceDataPeer::DATE_MODIFIED => 21, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'customer' => 2, 'department' => 3, 'type' => 4, 'sleeve_x1' => 5, 'sleeve_x1_spec' => 6, 'sleeve_x2' => 7, 'sleeve_x2_spec' => 8, 'shoe_right' => 9, 'shoe_right_spec' => 10, 'shoe_left' => 11, 'shoe_left_spec' => 12, 'washer' => 13, 'dryer' => 14, 'remarks' => 15, 'tester' => 16, 'garment_code' => 17, 'created_by' => 18, 'date_created' => 19, 'modified_by' => 20, 'date_modified' => 21, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/SurfaceDataMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.SurfaceDataMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SurfaceDataPeer::getTableMap();
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
		return str_replace(SurfaceDataPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SurfaceDataPeer::ID);

		$criteria->addSelectColumn(SurfaceDataPeer::DATE_TIME);

		$criteria->addSelectColumn(SurfaceDataPeer::CUSTOMER);

		$criteria->addSelectColumn(SurfaceDataPeer::DEPARTMENT);

		$criteria->addSelectColumn(SurfaceDataPeer::TYPE);

		$criteria->addSelectColumn(SurfaceDataPeer::SLEEVE_X1);

		$criteria->addSelectColumn(SurfaceDataPeer::SLEEVE_X1_SPEC);

		$criteria->addSelectColumn(SurfaceDataPeer::SLEEVE_X2);

		$criteria->addSelectColumn(SurfaceDataPeer::SLEEVE_X2_SPEC);

		$criteria->addSelectColumn(SurfaceDataPeer::SHOE_RIGHT);

		$criteria->addSelectColumn(SurfaceDataPeer::SHOE_RIGHT_SPEC);

		$criteria->addSelectColumn(SurfaceDataPeer::SHOE_LEFT);

		$criteria->addSelectColumn(SurfaceDataPeer::SHOE_LEFT_SPEC);

		$criteria->addSelectColumn(SurfaceDataPeer::WASHER);

		$criteria->addSelectColumn(SurfaceDataPeer::DRYER);

		$criteria->addSelectColumn(SurfaceDataPeer::REMARKS);

		$criteria->addSelectColumn(SurfaceDataPeer::TESTER);

		$criteria->addSelectColumn(SurfaceDataPeer::GARMENT_CODE);

		$criteria->addSelectColumn(SurfaceDataPeer::CREATED_BY);

		$criteria->addSelectColumn(SurfaceDataPeer::DATE_CREATED);

		$criteria->addSelectColumn(SurfaceDataPeer::MODIFIED_BY);

		$criteria->addSelectColumn(SurfaceDataPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(surface_data.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT surface_data.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SurfaceDataPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SurfaceDataPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SurfaceDataPeer::doSelectRS($criteria, $con);
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
		$objects = SurfaceDataPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SurfaceDataPeer::populateObjects(SurfaceDataPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SurfaceDataPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SurfaceDataPeer::getOMClass();
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
		return SurfaceDataPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SurfaceDataPeer::ID); 

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
			$comparison = $criteria->getComparison(SurfaceDataPeer::ID);
			$selectCriteria->add(SurfaceDataPeer::ID, $criteria->remove(SurfaceDataPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SurfaceDataPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SurfaceDataPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SurfaceData) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SurfaceDataPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SurfaceData $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SurfaceDataPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SurfaceDataPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SurfaceDataPeer::DATABASE_NAME, SurfaceDataPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SurfaceDataPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SurfaceDataPeer::DATABASE_NAME);

		$criteria->add(SurfaceDataPeer::ID, $pk);


		$v = SurfaceDataPeer::doSelect($criteria, $con);

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
			$criteria->add(SurfaceDataPeer::ID, $pks, Criteria::IN);
			$objs = SurfaceDataPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSurfaceDataPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/SurfaceDataMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.SurfaceDataMapBuilder');
}

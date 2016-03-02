<?php


abstract class BaseParticleDataPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'particle_data';

	
	const CLASS_DEFAULT = 'lib.model.particle.ParticleData';

	
	const NUM_COLUMNS = 19;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'particle_data.ID';

	
	const DATE_TIME = 'particle_data.DATE_TIME';

	
	const CUSTOMER = 'particle_data.CUSTOMER';

	
	const DEPARTMENT = 'particle_data.DEPARTMENT';

	
	const GARMENT_CODE = 'particle_data.GARMENT_CODE';

	
	const TYPE = 'particle_data.TYPE';

	
	const POINT_3 = 'particle_data.POINT_3';

	
	const POINT_3_SPEC = 'particle_data.POINT_3_SPEC';

	
	const POINT_5 = 'particle_data.POINT_5';

	
	const POINT_5_SPEC = 'particle_data.POINT_5_SPEC';

	
	const NO_OF_TIMES_WASH = 'particle_data.NO_OF_TIMES_WASH';

	
	const WASHER = 'particle_data.WASHER';

	
	const DRYER = 'particle_data.DRYER';

	
	const REMARKS = 'particle_data.REMARKS';

	
	const TESTER = 'particle_data.TESTER';

	
	const CREATED_BY = 'particle_data.CREATED_BY';

	
	const DATE_CREATED = 'particle_data.DATE_CREATED';

	
	const MODIFIED_BY = 'particle_data.MODIFIED_BY';

	
	const DATE_MODIFIED = 'particle_data.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'Customer', 'Department', 'GarmentCode', 'Type', 'Point3', 'Point3Spec', 'Point5', 'Point5Spec', 'NoOfTimesWash', 'Washer', 'Dryer', 'Remarks', 'Tester', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (ParticleDataPeer::ID, ParticleDataPeer::DATE_TIME, ParticleDataPeer::CUSTOMER, ParticleDataPeer::DEPARTMENT, ParticleDataPeer::GARMENT_CODE, ParticleDataPeer::TYPE, ParticleDataPeer::POINT_3, ParticleDataPeer::POINT_3_SPEC, ParticleDataPeer::POINT_5, ParticleDataPeer::POINT_5_SPEC, ParticleDataPeer::NO_OF_TIMES_WASH, ParticleDataPeer::WASHER, ParticleDataPeer::DRYER, ParticleDataPeer::REMARKS, ParticleDataPeer::TESTER, ParticleDataPeer::CREATED_BY, ParticleDataPeer::DATE_CREATED, ParticleDataPeer::MODIFIED_BY, ParticleDataPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'customer', 'department', 'garment_code', 'type', 'point_3', 'point_3_spec', 'point_5', 'point_5_spec', 'no_of_times_wash', 'washer', 'dryer', 'remarks', 'tester', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'Customer' => 2, 'Department' => 3, 'GarmentCode' => 4, 'Type' => 5, 'Point3' => 6, 'Point3Spec' => 7, 'Point5' => 8, 'Point5Spec' => 9, 'NoOfTimesWash' => 10, 'Washer' => 11, 'Dryer' => 12, 'Remarks' => 13, 'Tester' => 14, 'CreatedBy' => 15, 'DateCreated' => 16, 'ModifiedBy' => 17, 'DateModified' => 18, ),
		BasePeer::TYPE_COLNAME => array (ParticleDataPeer::ID => 0, ParticleDataPeer::DATE_TIME => 1, ParticleDataPeer::CUSTOMER => 2, ParticleDataPeer::DEPARTMENT => 3, ParticleDataPeer::GARMENT_CODE => 4, ParticleDataPeer::TYPE => 5, ParticleDataPeer::POINT_3 => 6, ParticleDataPeer::POINT_3_SPEC => 7, ParticleDataPeer::POINT_5 => 8, ParticleDataPeer::POINT_5_SPEC => 9, ParticleDataPeer::NO_OF_TIMES_WASH => 10, ParticleDataPeer::WASHER => 11, ParticleDataPeer::DRYER => 12, ParticleDataPeer::REMARKS => 13, ParticleDataPeer::TESTER => 14, ParticleDataPeer::CREATED_BY => 15, ParticleDataPeer::DATE_CREATED => 16, ParticleDataPeer::MODIFIED_BY => 17, ParticleDataPeer::DATE_MODIFIED => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'customer' => 2, 'department' => 3, 'garment_code' => 4, 'type' => 5, 'point_3' => 6, 'point_3_spec' => 7, 'point_5' => 8, 'point_5_spec' => 9, 'no_of_times_wash' => 10, 'washer' => 11, 'dryer' => 12, 'remarks' => 13, 'tester' => 14, 'created_by' => 15, 'date_created' => 16, 'modified_by' => 17, 'date_modified' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/ParticleDataMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.ParticleDataMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ParticleDataPeer::getTableMap();
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
		return str_replace(ParticleDataPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ParticleDataPeer::ID);

		$criteria->addSelectColumn(ParticleDataPeer::DATE_TIME);

		$criteria->addSelectColumn(ParticleDataPeer::CUSTOMER);

		$criteria->addSelectColumn(ParticleDataPeer::DEPARTMENT);

		$criteria->addSelectColumn(ParticleDataPeer::GARMENT_CODE);

		$criteria->addSelectColumn(ParticleDataPeer::TYPE);

		$criteria->addSelectColumn(ParticleDataPeer::POINT_3);

		$criteria->addSelectColumn(ParticleDataPeer::POINT_3_SPEC);

		$criteria->addSelectColumn(ParticleDataPeer::POINT_5);

		$criteria->addSelectColumn(ParticleDataPeer::POINT_5_SPEC);

		$criteria->addSelectColumn(ParticleDataPeer::NO_OF_TIMES_WASH);

		$criteria->addSelectColumn(ParticleDataPeer::WASHER);

		$criteria->addSelectColumn(ParticleDataPeer::DRYER);

		$criteria->addSelectColumn(ParticleDataPeer::REMARKS);

		$criteria->addSelectColumn(ParticleDataPeer::TESTER);

		$criteria->addSelectColumn(ParticleDataPeer::CREATED_BY);

		$criteria->addSelectColumn(ParticleDataPeer::DATE_CREATED);

		$criteria->addSelectColumn(ParticleDataPeer::MODIFIED_BY);

		$criteria->addSelectColumn(ParticleDataPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(particle_data.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT particle_data.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ParticleDataPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ParticleDataPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ParticleDataPeer::doSelectRS($criteria, $con);
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
		$objects = ParticleDataPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ParticleDataPeer::populateObjects(ParticleDataPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ParticleDataPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ParticleDataPeer::getOMClass();
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
		return ParticleDataPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ParticleDataPeer::ID); 

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
			$comparison = $criteria->getComparison(ParticleDataPeer::ID);
			$selectCriteria->add(ParticleDataPeer::ID, $criteria->remove(ParticleDataPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ParticleDataPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ParticleDataPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ParticleData) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ParticleDataPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ParticleData $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ParticleDataPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ParticleDataPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ParticleDataPeer::DATABASE_NAME, ParticleDataPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ParticleDataPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ParticleDataPeer::DATABASE_NAME);

		$criteria->add(ParticleDataPeer::ID, $pk);


		$v = ParticleDataPeer::doSelect($criteria, $con);

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
			$criteria->add(ParticleDataPeer::ID, $pks, Criteria::IN);
			$objs = ParticleDataPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseParticleDataPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/ParticleDataMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.ParticleDataMapBuilder');
}

<?php


abstract class BaseNvrFtirDataPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'nvr_ftir_data';

	
	const CLASS_DEFAULT = 'lib.model.particle.NvrFtirData';

	
	const NUM_COLUMNS = 24;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'nvr_ftir_data.ID';

	
	const DATE_TIME = 'nvr_ftir_data.DATE_TIME';

	
	const CUSTOMER = 'nvr_ftir_data.CUSTOMER';

	
	const DEPARTMENT = 'nvr_ftir_data.DEPARTMENT';

	
	const TYPE = 'nvr_ftir_data.TYPE';

	
	const LEFT_SLEEVE = 'nvr_ftir_data.LEFT_SLEEVE';

	
	const LEFT_SLEEVE_SPEC = 'nvr_ftir_data.LEFT_SLEEVE_SPEC';

	
	const RIGHT_SLEEVE = 'nvr_ftir_data.RIGHT_SLEEVE';

	
	const RIGHT_SLEEVE_SPEC = 'nvr_ftir_data.RIGHT_SLEEVE_SPEC';

	
	const SILICONE = 'nvr_ftir_data.SILICONE';

	
	const SILICONE_SPEC = 'nvr_ftir_data.SILICONE_SPEC';

	
	const AMIDE = 'nvr_ftir_data.AMIDE';

	
	const AMIDE_SPEC = 'nvr_ftir_data.AMIDE_SPEC';

	
	const DOP = 'nvr_ftir_data.DOP';

	
	const DOP_SPEC = 'nvr_ftir_data.DOP_SPEC';

	
	const WASHER = 'nvr_ftir_data.WASHER';

	
	const DRYER = 'nvr_ftir_data.DRYER';

	
	const REMARKS = 'nvr_ftir_data.REMARKS';

	
	const TESTER = 'nvr_ftir_data.TESTER';

	
	const GARMENT_CODE = 'nvr_ftir_data.GARMENT_CODE';

	
	const CREATED_BY = 'nvr_ftir_data.CREATED_BY';

	
	const DATE_CREATED = 'nvr_ftir_data.DATE_CREATED';

	
	const MODIFIED_BY = 'nvr_ftir_data.MODIFIED_BY';

	
	const DATE_MODIFIED = 'nvr_ftir_data.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'Customer', 'Department', 'Type', 'LeftSleeve', 'LeftSleeveSpec', 'RightSleeve', 'RightSleeveSpec', 'Silicone', 'SiliconeSpec', 'Amide', 'AmideSpec', 'Dop', 'DopSpec', 'Washer', 'Dryer', 'Remarks', 'Tester', 'GarmentCode', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (NvrFtirDataPeer::ID, NvrFtirDataPeer::DATE_TIME, NvrFtirDataPeer::CUSTOMER, NvrFtirDataPeer::DEPARTMENT, NvrFtirDataPeer::TYPE, NvrFtirDataPeer::LEFT_SLEEVE, NvrFtirDataPeer::LEFT_SLEEVE_SPEC, NvrFtirDataPeer::RIGHT_SLEEVE, NvrFtirDataPeer::RIGHT_SLEEVE_SPEC, NvrFtirDataPeer::SILICONE, NvrFtirDataPeer::SILICONE_SPEC, NvrFtirDataPeer::AMIDE, NvrFtirDataPeer::AMIDE_SPEC, NvrFtirDataPeer::DOP, NvrFtirDataPeer::DOP_SPEC, NvrFtirDataPeer::WASHER, NvrFtirDataPeer::DRYER, NvrFtirDataPeer::REMARKS, NvrFtirDataPeer::TESTER, NvrFtirDataPeer::GARMENT_CODE, NvrFtirDataPeer::CREATED_BY, NvrFtirDataPeer::DATE_CREATED, NvrFtirDataPeer::MODIFIED_BY, NvrFtirDataPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'customer', 'department', 'type', 'left_sleeve', 'left_sleeve_spec', 'right_sleeve', 'right_sleeve_spec', 'silicone', 'silicone_spec', 'amide', 'amide_spec', 'dop', 'dop_spec', 'washer', 'dryer', 'remarks', 'tester', 'garment_code', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'Customer' => 2, 'Department' => 3, 'Type' => 4, 'LeftSleeve' => 5, 'LeftSleeveSpec' => 6, 'RightSleeve' => 7, 'RightSleeveSpec' => 8, 'Silicone' => 9, 'SiliconeSpec' => 10, 'Amide' => 11, 'AmideSpec' => 12, 'Dop' => 13, 'DopSpec' => 14, 'Washer' => 15, 'Dryer' => 16, 'Remarks' => 17, 'Tester' => 18, 'GarmentCode' => 19, 'CreatedBy' => 20, 'DateCreated' => 21, 'ModifiedBy' => 22, 'DateModified' => 23, ),
		BasePeer::TYPE_COLNAME => array (NvrFtirDataPeer::ID => 0, NvrFtirDataPeer::DATE_TIME => 1, NvrFtirDataPeer::CUSTOMER => 2, NvrFtirDataPeer::DEPARTMENT => 3, NvrFtirDataPeer::TYPE => 4, NvrFtirDataPeer::LEFT_SLEEVE => 5, NvrFtirDataPeer::LEFT_SLEEVE_SPEC => 6, NvrFtirDataPeer::RIGHT_SLEEVE => 7, NvrFtirDataPeer::RIGHT_SLEEVE_SPEC => 8, NvrFtirDataPeer::SILICONE => 9, NvrFtirDataPeer::SILICONE_SPEC => 10, NvrFtirDataPeer::AMIDE => 11, NvrFtirDataPeer::AMIDE_SPEC => 12, NvrFtirDataPeer::DOP => 13, NvrFtirDataPeer::DOP_SPEC => 14, NvrFtirDataPeer::WASHER => 15, NvrFtirDataPeer::DRYER => 16, NvrFtirDataPeer::REMARKS => 17, NvrFtirDataPeer::TESTER => 18, NvrFtirDataPeer::GARMENT_CODE => 19, NvrFtirDataPeer::CREATED_BY => 20, NvrFtirDataPeer::DATE_CREATED => 21, NvrFtirDataPeer::MODIFIED_BY => 22, NvrFtirDataPeer::DATE_MODIFIED => 23, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'customer' => 2, 'department' => 3, 'type' => 4, 'left_sleeve' => 5, 'left_sleeve_spec' => 6, 'right_sleeve' => 7, 'right_sleeve_spec' => 8, 'silicone' => 9, 'silicone_spec' => 10, 'amide' => 11, 'amide_spec' => 12, 'dop' => 13, 'dop_spec' => 14, 'washer' => 15, 'dryer' => 16, 'remarks' => 17, 'tester' => 18, 'garment_code' => 19, 'created_by' => 20, 'date_created' => 21, 'modified_by' => 22, 'date_modified' => 23, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/NvrFtirDataMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.NvrFtirDataMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = NvrFtirDataPeer::getTableMap();
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
		return str_replace(NvrFtirDataPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(NvrFtirDataPeer::ID);

		$criteria->addSelectColumn(NvrFtirDataPeer::DATE_TIME);

		$criteria->addSelectColumn(NvrFtirDataPeer::CUSTOMER);

		$criteria->addSelectColumn(NvrFtirDataPeer::DEPARTMENT);

		$criteria->addSelectColumn(NvrFtirDataPeer::TYPE);

		$criteria->addSelectColumn(NvrFtirDataPeer::LEFT_SLEEVE);

		$criteria->addSelectColumn(NvrFtirDataPeer::LEFT_SLEEVE_SPEC);

		$criteria->addSelectColumn(NvrFtirDataPeer::RIGHT_SLEEVE);

		$criteria->addSelectColumn(NvrFtirDataPeer::RIGHT_SLEEVE_SPEC);

		$criteria->addSelectColumn(NvrFtirDataPeer::SILICONE);

		$criteria->addSelectColumn(NvrFtirDataPeer::SILICONE_SPEC);

		$criteria->addSelectColumn(NvrFtirDataPeer::AMIDE);

		$criteria->addSelectColumn(NvrFtirDataPeer::AMIDE_SPEC);

		$criteria->addSelectColumn(NvrFtirDataPeer::DOP);

		$criteria->addSelectColumn(NvrFtirDataPeer::DOP_SPEC);

		$criteria->addSelectColumn(NvrFtirDataPeer::WASHER);

		$criteria->addSelectColumn(NvrFtirDataPeer::DRYER);

		$criteria->addSelectColumn(NvrFtirDataPeer::REMARKS);

		$criteria->addSelectColumn(NvrFtirDataPeer::TESTER);

		$criteria->addSelectColumn(NvrFtirDataPeer::GARMENT_CODE);

		$criteria->addSelectColumn(NvrFtirDataPeer::CREATED_BY);

		$criteria->addSelectColumn(NvrFtirDataPeer::DATE_CREATED);

		$criteria->addSelectColumn(NvrFtirDataPeer::MODIFIED_BY);

		$criteria->addSelectColumn(NvrFtirDataPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(nvr_ftir_data.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT nvr_ftir_data.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(NvrFtirDataPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(NvrFtirDataPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = NvrFtirDataPeer::doSelectRS($criteria, $con);
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
		$objects = NvrFtirDataPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return NvrFtirDataPeer::populateObjects(NvrFtirDataPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			NvrFtirDataPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = NvrFtirDataPeer::getOMClass();
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
		return NvrFtirDataPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(NvrFtirDataPeer::ID); 

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
			$comparison = $criteria->getComparison(NvrFtirDataPeer::ID);
			$selectCriteria->add(NvrFtirDataPeer::ID, $criteria->remove(NvrFtirDataPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(NvrFtirDataPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(NvrFtirDataPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof NvrFtirData) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NvrFtirDataPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(NvrFtirData $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NvrFtirDataPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NvrFtirDataPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(NvrFtirDataPeer::DATABASE_NAME, NvrFtirDataPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = NvrFtirDataPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(NvrFtirDataPeer::DATABASE_NAME);

		$criteria->add(NvrFtirDataPeer::ID, $pk);


		$v = NvrFtirDataPeer::doSelect($criteria, $con);

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
			$criteria->add(NvrFtirDataPeer::ID, $pks, Criteria::IN);
			$objs = NvrFtirDataPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseNvrFtirDataPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/NvrFtirDataMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.NvrFtirDataMapBuilder');
}

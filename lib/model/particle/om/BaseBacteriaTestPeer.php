<?php


abstract class BaseBacteriaTestPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'bacteria_test';

	
	const CLASS_DEFAULT = 'lib.model.particle.BacteriaTest';

	
	const NUM_COLUMNS = 16;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'bacteria_test.ID';

	
	const TRANS_DATE = 'bacteria_test.TRANS_DATE';

	
	const CLEANROOM = 'bacteria_test.CLEANROOM';

	
	const AREA_A = 'bacteria_test.AREA_A';

	
	const AREA_B = 'bacteria_test.AREA_B';

	
	const FOLDING_TABLE_A = 'bacteria_test.FOLDING_TABLE_A';

	
	const FOLDING_TABLE_B = 'bacteria_test.FOLDING_TABLE_B';

	
	const CUSTOMER = 'bacteria_test.CUSTOMER';

	
	const GARMENT = 'bacteria_test.GARMENT';

	
	const CHECKED_BY = 'bacteria_test.CHECKED_BY';

	
	const VERIFIED_BY = 'bacteria_test.VERIFIED_BY';

	
	const REMARK = 'bacteria_test.REMARK';

	
	const DATE_CREATED = 'bacteria_test.DATE_CREATED';

	
	const CREATED_BY = 'bacteria_test.CREATED_BY';

	
	const DATE_MODIFIED = 'bacteria_test.DATE_MODIFIED';

	
	const MODIFIED_BY = 'bacteria_test.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'Cleanroom', 'AreaA', 'AreaB', 'FoldingTableA', 'FoldingTableB', 'Customer', 'Garment', 'CheckedBy', 'VerifiedBy', 'Remark', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (BacteriaTestPeer::ID, BacteriaTestPeer::TRANS_DATE, BacteriaTestPeer::CLEANROOM, BacteriaTestPeer::AREA_A, BacteriaTestPeer::AREA_B, BacteriaTestPeer::FOLDING_TABLE_A, BacteriaTestPeer::FOLDING_TABLE_B, BacteriaTestPeer::CUSTOMER, BacteriaTestPeer::GARMENT, BacteriaTestPeer::CHECKED_BY, BacteriaTestPeer::VERIFIED_BY, BacteriaTestPeer::REMARK, BacteriaTestPeer::DATE_CREATED, BacteriaTestPeer::CREATED_BY, BacteriaTestPeer::DATE_MODIFIED, BacteriaTestPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'cleanroom', 'area_a', 'area_b', 'folding_table_a', 'folding_table_b', 'customer', 'garment', 'checked_by', 'verified_by', 'remark', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'Cleanroom' => 2, 'AreaA' => 3, 'AreaB' => 4, 'FoldingTableA' => 5, 'FoldingTableB' => 6, 'Customer' => 7, 'Garment' => 8, 'CheckedBy' => 9, 'VerifiedBy' => 10, 'Remark' => 11, 'DateCreated' => 12, 'CreatedBy' => 13, 'DateModified' => 14, 'ModifiedBy' => 15, ),
		BasePeer::TYPE_COLNAME => array (BacteriaTestPeer::ID => 0, BacteriaTestPeer::TRANS_DATE => 1, BacteriaTestPeer::CLEANROOM => 2, BacteriaTestPeer::AREA_A => 3, BacteriaTestPeer::AREA_B => 4, BacteriaTestPeer::FOLDING_TABLE_A => 5, BacteriaTestPeer::FOLDING_TABLE_B => 6, BacteriaTestPeer::CUSTOMER => 7, BacteriaTestPeer::GARMENT => 8, BacteriaTestPeer::CHECKED_BY => 9, BacteriaTestPeer::VERIFIED_BY => 10, BacteriaTestPeer::REMARK => 11, BacteriaTestPeer::DATE_CREATED => 12, BacteriaTestPeer::CREATED_BY => 13, BacteriaTestPeer::DATE_MODIFIED => 14, BacteriaTestPeer::MODIFIED_BY => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'cleanroom' => 2, 'area_a' => 3, 'area_b' => 4, 'folding_table_a' => 5, 'folding_table_b' => 6, 'customer' => 7, 'garment' => 8, 'checked_by' => 9, 'verified_by' => 10, 'remark' => 11, 'date_created' => 12, 'created_by' => 13, 'date_modified' => 14, 'modified_by' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/BacteriaTestMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.BacteriaTestMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = BacteriaTestPeer::getTableMap();
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
		return str_replace(BacteriaTestPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(BacteriaTestPeer::ID);

		$criteria->addSelectColumn(BacteriaTestPeer::TRANS_DATE);

		$criteria->addSelectColumn(BacteriaTestPeer::CLEANROOM);

		$criteria->addSelectColumn(BacteriaTestPeer::AREA_A);

		$criteria->addSelectColumn(BacteriaTestPeer::AREA_B);

		$criteria->addSelectColumn(BacteriaTestPeer::FOLDING_TABLE_A);

		$criteria->addSelectColumn(BacteriaTestPeer::FOLDING_TABLE_B);

		$criteria->addSelectColumn(BacteriaTestPeer::CUSTOMER);

		$criteria->addSelectColumn(BacteriaTestPeer::GARMENT);

		$criteria->addSelectColumn(BacteriaTestPeer::CHECKED_BY);

		$criteria->addSelectColumn(BacteriaTestPeer::VERIFIED_BY);

		$criteria->addSelectColumn(BacteriaTestPeer::REMARK);

		$criteria->addSelectColumn(BacteriaTestPeer::DATE_CREATED);

		$criteria->addSelectColumn(BacteriaTestPeer::CREATED_BY);

		$criteria->addSelectColumn(BacteriaTestPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(BacteriaTestPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(bacteria_test.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT bacteria_test.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(BacteriaTestPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BacteriaTestPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = BacteriaTestPeer::doSelectRS($criteria, $con);
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
		$objects = BacteriaTestPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return BacteriaTestPeer::populateObjects(BacteriaTestPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			BacteriaTestPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = BacteriaTestPeer::getOMClass();
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
		return BacteriaTestPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(BacteriaTestPeer::ID); 

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
			$comparison = $criteria->getComparison(BacteriaTestPeer::ID);
			$selectCriteria->add(BacteriaTestPeer::ID, $criteria->remove(BacteriaTestPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(BacteriaTestPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(BacteriaTestPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof BacteriaTest) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(BacteriaTestPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(BacteriaTest $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(BacteriaTestPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(BacteriaTestPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(BacteriaTestPeer::DATABASE_NAME, BacteriaTestPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = BacteriaTestPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(BacteriaTestPeer::DATABASE_NAME);

		$criteria->add(BacteriaTestPeer::ID, $pk);


		$v = BacteriaTestPeer::doSelect($criteria, $con);

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
			$criteria->add(BacteriaTestPeer::ID, $pks, Criteria::IN);
			$objs = BacteriaTestPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseBacteriaTestPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/BacteriaTestMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.BacteriaTestMapBuilder');
}

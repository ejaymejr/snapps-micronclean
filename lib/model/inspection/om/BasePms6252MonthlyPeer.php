<?php


abstract class BasePms6252MonthlyPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'pms_6252_monthly';

	
	const CLASS_DEFAULT = 'lib.model.inspection.Pms6252Monthly';

	
	const NUM_COLUMNS = 12;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'pms_6252_monthly.ID';

	
	const TRANS_DATE = 'pms_6252_monthly.TRANS_DATE';

	
	const MACHINE_NO = 'pms_6252_monthly.MACHINE_NO';

	
	const DRAIN_SYSTEM = 'pms_6252_monthly.DRAIN_SYSTEM';

	
	const ELECTRICAL_SYSTEM = 'pms_6252_monthly.ELECTRICAL_SYSTEM';

	
	const HOSES_CONNECTORS = 'pms_6252_monthly.HOSES_CONNECTORS';

	
	const INITIAL = 'pms_6252_monthly.INITIAL';

	
	const REMARK = 'pms_6252_monthly.REMARK';

	
	const CREATED_BY = 'pms_6252_monthly.CREATED_BY';

	
	const DATE_CREATED = 'pms_6252_monthly.DATE_CREATED';

	
	const MODIFIED_BY = 'pms_6252_monthly.MODIFIED_BY';

	
	const DATE_MODIFIED = 'pms_6252_monthly.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'MachineNo', 'DrainSystem', 'ElectricalSystem', 'HosesConnectors', 'Initial', 'Remark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (Pms6252MonthlyPeer::ID, Pms6252MonthlyPeer::TRANS_DATE, Pms6252MonthlyPeer::MACHINE_NO, Pms6252MonthlyPeer::DRAIN_SYSTEM, Pms6252MonthlyPeer::ELECTRICAL_SYSTEM, Pms6252MonthlyPeer::HOSES_CONNECTORS, Pms6252MonthlyPeer::INITIAL, Pms6252MonthlyPeer::REMARK, Pms6252MonthlyPeer::CREATED_BY, Pms6252MonthlyPeer::DATE_CREATED, Pms6252MonthlyPeer::MODIFIED_BY, Pms6252MonthlyPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'machine_no', 'drain_system', 'electrical_system', 'hoses_connectors', 'initial', 'remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'MachineNo' => 2, 'DrainSystem' => 3, 'ElectricalSystem' => 4, 'HosesConnectors' => 5, 'Initial' => 6, 'Remark' => 7, 'CreatedBy' => 8, 'DateCreated' => 9, 'ModifiedBy' => 10, 'DateModified' => 11, ),
		BasePeer::TYPE_COLNAME => array (Pms6252MonthlyPeer::ID => 0, Pms6252MonthlyPeer::TRANS_DATE => 1, Pms6252MonthlyPeer::MACHINE_NO => 2, Pms6252MonthlyPeer::DRAIN_SYSTEM => 3, Pms6252MonthlyPeer::ELECTRICAL_SYSTEM => 4, Pms6252MonthlyPeer::HOSES_CONNECTORS => 5, Pms6252MonthlyPeer::INITIAL => 6, Pms6252MonthlyPeer::REMARK => 7, Pms6252MonthlyPeer::CREATED_BY => 8, Pms6252MonthlyPeer::DATE_CREATED => 9, Pms6252MonthlyPeer::MODIFIED_BY => 10, Pms6252MonthlyPeer::DATE_MODIFIED => 11, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'machine_no' => 2, 'drain_system' => 3, 'electrical_system' => 4, 'hoses_connectors' => 5, 'initial' => 6, 'remark' => 7, 'created_by' => 8, 'date_created' => 9, 'modified_by' => 10, 'date_modified' => 11, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/Pms6252MonthlyMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.Pms6252MonthlyMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = Pms6252MonthlyPeer::getTableMap();
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
		return str_replace(Pms6252MonthlyPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(Pms6252MonthlyPeer::ID);

		$criteria->addSelectColumn(Pms6252MonthlyPeer::TRANS_DATE);

		$criteria->addSelectColumn(Pms6252MonthlyPeer::MACHINE_NO);

		$criteria->addSelectColumn(Pms6252MonthlyPeer::DRAIN_SYSTEM);

		$criteria->addSelectColumn(Pms6252MonthlyPeer::ELECTRICAL_SYSTEM);

		$criteria->addSelectColumn(Pms6252MonthlyPeer::HOSES_CONNECTORS);

		$criteria->addSelectColumn(Pms6252MonthlyPeer::INITIAL);

		$criteria->addSelectColumn(Pms6252MonthlyPeer::REMARK);

		$criteria->addSelectColumn(Pms6252MonthlyPeer::CREATED_BY);

		$criteria->addSelectColumn(Pms6252MonthlyPeer::DATE_CREATED);

		$criteria->addSelectColumn(Pms6252MonthlyPeer::MODIFIED_BY);

		$criteria->addSelectColumn(Pms6252MonthlyPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(pms_6252_monthly.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT pms_6252_monthly.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(Pms6252MonthlyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(Pms6252MonthlyPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = Pms6252MonthlyPeer::doSelectRS($criteria, $con);
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
		$objects = Pms6252MonthlyPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return Pms6252MonthlyPeer::populateObjects(Pms6252MonthlyPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			Pms6252MonthlyPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = Pms6252MonthlyPeer::getOMClass();
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
		return Pms6252MonthlyPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(Pms6252MonthlyPeer::ID); 

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
			$comparison = $criteria->getComparison(Pms6252MonthlyPeer::ID);
			$selectCriteria->add(Pms6252MonthlyPeer::ID, $criteria->remove(Pms6252MonthlyPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(Pms6252MonthlyPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(Pms6252MonthlyPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Pms6252Monthly) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Pms6252MonthlyPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Pms6252Monthly $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Pms6252MonthlyPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Pms6252MonthlyPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(Pms6252MonthlyPeer::DATABASE_NAME, Pms6252MonthlyPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = Pms6252MonthlyPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(Pms6252MonthlyPeer::DATABASE_NAME);

		$criteria->add(Pms6252MonthlyPeer::ID, $pk);


		$v = Pms6252MonthlyPeer::doSelect($criteria, $con);

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
			$criteria->add(Pms6252MonthlyPeer::ID, $pks, Criteria::IN);
			$objs = Pms6252MonthlyPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasePms6252MonthlyPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/Pms6252MonthlyMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.Pms6252MonthlyMapBuilder');
}

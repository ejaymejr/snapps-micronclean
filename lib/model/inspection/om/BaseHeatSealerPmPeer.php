<?php


abstract class BaseHeatSealerPmPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'heat_sealer_pm';

	
	const CLASS_DEFAULT = 'lib.model.inspection.HeatSealerPm';

	
	const NUM_COLUMNS = 16;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'heat_sealer_pm.ID';

	
	const TRANS_DATE = 'heat_sealer_pm.TRANS_DATE';

	
	const MACHINE_TYPE = 'heat_sealer_pm.MACHINE_TYPE';

	
	const AIR_REGULATOR = 'heat_sealer_pm.AIR_REGULATOR';

	
	const HEAT = 'heat_sealer_pm.HEAT';

	
	const THERMOPATCH = 'heat_sealer_pm.THERMOPATCH';

	
	const DWELL = 'heat_sealer_pm.DWELL';

	
	const PISTON = 'heat_sealer_pm.PISTON';

	
	const PERFORMED_BY = 'heat_sealer_pm.PERFORMED_BY';

	
	const VERIFIED_BY = 'heat_sealer_pm.VERIFIED_BY';

	
	const VERIFY_DATE = 'heat_sealer_pm.VERIFY_DATE';

	
	const REMARK = 'heat_sealer_pm.REMARK';

	
	const CREATED_BY = 'heat_sealer_pm.CREATED_BY';

	
	const DATE_CREATED = 'heat_sealer_pm.DATE_CREATED';

	
	const MODIFIED_BY = 'heat_sealer_pm.MODIFIED_BY';

	
	const DATE_MODIFIED = 'heat_sealer_pm.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'MachineType', 'AirRegulator', 'Heat', 'Thermopatch', 'Dwell', 'Piston', 'PerformedBy', 'VerifiedBy', 'VerifyDate', 'Remark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HeatSealerPmPeer::ID, HeatSealerPmPeer::TRANS_DATE, HeatSealerPmPeer::MACHINE_TYPE, HeatSealerPmPeer::AIR_REGULATOR, HeatSealerPmPeer::HEAT, HeatSealerPmPeer::THERMOPATCH, HeatSealerPmPeer::DWELL, HeatSealerPmPeer::PISTON, HeatSealerPmPeer::PERFORMED_BY, HeatSealerPmPeer::VERIFIED_BY, HeatSealerPmPeer::VERIFY_DATE, HeatSealerPmPeer::REMARK, HeatSealerPmPeer::CREATED_BY, HeatSealerPmPeer::DATE_CREATED, HeatSealerPmPeer::MODIFIED_BY, HeatSealerPmPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'machine_type', 'air_regulator', 'heat', 'thermopatch', 'dwell', 'piston', 'performed_by', 'verified_by', 'verify_date', 'remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'MachineType' => 2, 'AirRegulator' => 3, 'Heat' => 4, 'Thermopatch' => 5, 'Dwell' => 6, 'Piston' => 7, 'PerformedBy' => 8, 'VerifiedBy' => 9, 'VerifyDate' => 10, 'Remark' => 11, 'CreatedBy' => 12, 'DateCreated' => 13, 'ModifiedBy' => 14, 'DateModified' => 15, ),
		BasePeer::TYPE_COLNAME => array (HeatSealerPmPeer::ID => 0, HeatSealerPmPeer::TRANS_DATE => 1, HeatSealerPmPeer::MACHINE_TYPE => 2, HeatSealerPmPeer::AIR_REGULATOR => 3, HeatSealerPmPeer::HEAT => 4, HeatSealerPmPeer::THERMOPATCH => 5, HeatSealerPmPeer::DWELL => 6, HeatSealerPmPeer::PISTON => 7, HeatSealerPmPeer::PERFORMED_BY => 8, HeatSealerPmPeer::VERIFIED_BY => 9, HeatSealerPmPeer::VERIFY_DATE => 10, HeatSealerPmPeer::REMARK => 11, HeatSealerPmPeer::CREATED_BY => 12, HeatSealerPmPeer::DATE_CREATED => 13, HeatSealerPmPeer::MODIFIED_BY => 14, HeatSealerPmPeer::DATE_MODIFIED => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'machine_type' => 2, 'air_regulator' => 3, 'heat' => 4, 'thermopatch' => 5, 'dwell' => 6, 'piston' => 7, 'performed_by' => 8, 'verified_by' => 9, 'verify_date' => 10, 'remark' => 11, 'created_by' => 12, 'date_created' => 13, 'modified_by' => 14, 'date_modified' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/HeatSealerPmMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.HeatSealerPmMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HeatSealerPmPeer::getTableMap();
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
		return str_replace(HeatSealerPmPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HeatSealerPmPeer::ID);

		$criteria->addSelectColumn(HeatSealerPmPeer::TRANS_DATE);

		$criteria->addSelectColumn(HeatSealerPmPeer::MACHINE_TYPE);

		$criteria->addSelectColumn(HeatSealerPmPeer::AIR_REGULATOR);

		$criteria->addSelectColumn(HeatSealerPmPeer::HEAT);

		$criteria->addSelectColumn(HeatSealerPmPeer::THERMOPATCH);

		$criteria->addSelectColumn(HeatSealerPmPeer::DWELL);

		$criteria->addSelectColumn(HeatSealerPmPeer::PISTON);

		$criteria->addSelectColumn(HeatSealerPmPeer::PERFORMED_BY);

		$criteria->addSelectColumn(HeatSealerPmPeer::VERIFIED_BY);

		$criteria->addSelectColumn(HeatSealerPmPeer::VERIFY_DATE);

		$criteria->addSelectColumn(HeatSealerPmPeer::REMARK);

		$criteria->addSelectColumn(HeatSealerPmPeer::CREATED_BY);

		$criteria->addSelectColumn(HeatSealerPmPeer::DATE_CREATED);

		$criteria->addSelectColumn(HeatSealerPmPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HeatSealerPmPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(heat_sealer_pm.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT heat_sealer_pm.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HeatSealerPmPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HeatSealerPmPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HeatSealerPmPeer::doSelectRS($criteria, $con);
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
		$objects = HeatSealerPmPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HeatSealerPmPeer::populateObjects(HeatSealerPmPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HeatSealerPmPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HeatSealerPmPeer::getOMClass();
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
		return HeatSealerPmPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HeatSealerPmPeer::ID); 

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
			$comparison = $criteria->getComparison(HeatSealerPmPeer::ID);
			$selectCriteria->add(HeatSealerPmPeer::ID, $criteria->remove(HeatSealerPmPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HeatSealerPmPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HeatSealerPmPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HeatSealerPm) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HeatSealerPmPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HeatSealerPm $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HeatSealerPmPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HeatSealerPmPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HeatSealerPmPeer::DATABASE_NAME, HeatSealerPmPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HeatSealerPmPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HeatSealerPmPeer::DATABASE_NAME);

		$criteria->add(HeatSealerPmPeer::ID, $pk);


		$v = HeatSealerPmPeer::doSelect($criteria, $con);

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
			$criteria->add(HeatSealerPmPeer::ID, $pks, Criteria::IN);
			$objs = HeatSealerPmPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHeatSealerPmPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/HeatSealerPmMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.HeatSealerPmMapBuilder');
}

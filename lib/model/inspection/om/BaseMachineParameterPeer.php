<?php


abstract class BaseMachineParameterPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'machine_parameter';

	
	const CLASS_DEFAULT = 'lib.model.inspection.MachineParameter';

	
	const NUM_COLUMNS = 19;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'machine_parameter.ID';

	
	const TRANS_DATE = 'machine_parameter.TRANS_DATE';

	
	const TRANS_TIME = 'machine_parameter.TRANS_TIME';

	
	const MACHINE_NO = 'machine_parameter.MACHINE_NO';

	
	const DI_WATER = 'machine_parameter.DI_WATER';

	
	const CDA1 = 'machine_parameter.CDA1';

	
	const CDA2 = 'machine_parameter.CDA2';

	
	const CDA_DIFF = 'machine_parameter.CDA_DIFF';

	
	const SUMPTANK = 'machine_parameter.SUMPTANK';

	
	const ULTRA_TANK = 'machine_parameter.ULTRA_TANK';

	
	const WATER_TEMP = 'machine_parameter.WATER_TEMP';

	
	const RINSE_TEMP = 'machine_parameter.RINSE_TEMP';

	
	const CHECKED_BY = 'machine_parameter.CHECKED_BY';

	
	const VERIFIED_BY = 'machine_parameter.VERIFIED_BY';

	
	const REMARK = 'machine_parameter.REMARK';

	
	const CREATED_BY = 'machine_parameter.CREATED_BY';

	
	const DATE_CREATED = 'machine_parameter.DATE_CREATED';

	
	const MODIFIED_BY = 'machine_parameter.MODIFIED_BY';

	
	const DATE_MODIFIED = 'machine_parameter.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'TransTime', 'MachineNo', 'DiWater', 'Cda1', 'Cda2', 'CdaDiff', 'Sumptank', 'UltraTank', 'WaterTemp', 'RinseTemp', 'CheckedBy', 'VerifiedBy', 'Remark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (MachineParameterPeer::ID, MachineParameterPeer::TRANS_DATE, MachineParameterPeer::TRANS_TIME, MachineParameterPeer::MACHINE_NO, MachineParameterPeer::DI_WATER, MachineParameterPeer::CDA1, MachineParameterPeer::CDA2, MachineParameterPeer::CDA_DIFF, MachineParameterPeer::SUMPTANK, MachineParameterPeer::ULTRA_TANK, MachineParameterPeer::WATER_TEMP, MachineParameterPeer::RINSE_TEMP, MachineParameterPeer::CHECKED_BY, MachineParameterPeer::VERIFIED_BY, MachineParameterPeer::REMARK, MachineParameterPeer::CREATED_BY, MachineParameterPeer::DATE_CREATED, MachineParameterPeer::MODIFIED_BY, MachineParameterPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'trans_time', 'machine_no', 'di_water', 'cda1', 'cda2', 'cda_diff', 'sumptank', 'ultra_tank', 'water_temp', 'rinse_temp', 'checked_by', 'verified_by', 'remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'TransTime' => 2, 'MachineNo' => 3, 'DiWater' => 4, 'Cda1' => 5, 'Cda2' => 6, 'CdaDiff' => 7, 'Sumptank' => 8, 'UltraTank' => 9, 'WaterTemp' => 10, 'RinseTemp' => 11, 'CheckedBy' => 12, 'VerifiedBy' => 13, 'Remark' => 14, 'CreatedBy' => 15, 'DateCreated' => 16, 'ModifiedBy' => 17, 'DateModified' => 18, ),
		BasePeer::TYPE_COLNAME => array (MachineParameterPeer::ID => 0, MachineParameterPeer::TRANS_DATE => 1, MachineParameterPeer::TRANS_TIME => 2, MachineParameterPeer::MACHINE_NO => 3, MachineParameterPeer::DI_WATER => 4, MachineParameterPeer::CDA1 => 5, MachineParameterPeer::CDA2 => 6, MachineParameterPeer::CDA_DIFF => 7, MachineParameterPeer::SUMPTANK => 8, MachineParameterPeer::ULTRA_TANK => 9, MachineParameterPeer::WATER_TEMP => 10, MachineParameterPeer::RINSE_TEMP => 11, MachineParameterPeer::CHECKED_BY => 12, MachineParameterPeer::VERIFIED_BY => 13, MachineParameterPeer::REMARK => 14, MachineParameterPeer::CREATED_BY => 15, MachineParameterPeer::DATE_CREATED => 16, MachineParameterPeer::MODIFIED_BY => 17, MachineParameterPeer::DATE_MODIFIED => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'trans_time' => 2, 'machine_no' => 3, 'di_water' => 4, 'cda1' => 5, 'cda2' => 6, 'cda_diff' => 7, 'sumptank' => 8, 'ultra_tank' => 9, 'water_temp' => 10, 'rinse_temp' => 11, 'checked_by' => 12, 'verified_by' => 13, 'remark' => 14, 'created_by' => 15, 'date_created' => 16, 'modified_by' => 17, 'date_modified' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/MachineParameterMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.MachineParameterMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = MachineParameterPeer::getTableMap();
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
		return str_replace(MachineParameterPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(MachineParameterPeer::ID);

		$criteria->addSelectColumn(MachineParameterPeer::TRANS_DATE);

		$criteria->addSelectColumn(MachineParameterPeer::TRANS_TIME);

		$criteria->addSelectColumn(MachineParameterPeer::MACHINE_NO);

		$criteria->addSelectColumn(MachineParameterPeer::DI_WATER);

		$criteria->addSelectColumn(MachineParameterPeer::CDA1);

		$criteria->addSelectColumn(MachineParameterPeer::CDA2);

		$criteria->addSelectColumn(MachineParameterPeer::CDA_DIFF);

		$criteria->addSelectColumn(MachineParameterPeer::SUMPTANK);

		$criteria->addSelectColumn(MachineParameterPeer::ULTRA_TANK);

		$criteria->addSelectColumn(MachineParameterPeer::WATER_TEMP);

		$criteria->addSelectColumn(MachineParameterPeer::RINSE_TEMP);

		$criteria->addSelectColumn(MachineParameterPeer::CHECKED_BY);

		$criteria->addSelectColumn(MachineParameterPeer::VERIFIED_BY);

		$criteria->addSelectColumn(MachineParameterPeer::REMARK);

		$criteria->addSelectColumn(MachineParameterPeer::CREATED_BY);

		$criteria->addSelectColumn(MachineParameterPeer::DATE_CREATED);

		$criteria->addSelectColumn(MachineParameterPeer::MODIFIED_BY);

		$criteria->addSelectColumn(MachineParameterPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(machine_parameter.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT machine_parameter.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(MachineParameterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MachineParameterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = MachineParameterPeer::doSelectRS($criteria, $con);
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
		$objects = MachineParameterPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return MachineParameterPeer::populateObjects(MachineParameterPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			MachineParameterPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = MachineParameterPeer::getOMClass();
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
		return MachineParameterPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(MachineParameterPeer::ID); 

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
			$comparison = $criteria->getComparison(MachineParameterPeer::ID);
			$selectCriteria->add(MachineParameterPeer::ID, $criteria->remove(MachineParameterPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(MachineParameterPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(MachineParameterPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof MachineParameter) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(MachineParameterPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(MachineParameter $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(MachineParameterPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(MachineParameterPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(MachineParameterPeer::DATABASE_NAME, MachineParameterPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = MachineParameterPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(MachineParameterPeer::DATABASE_NAME);

		$criteria->add(MachineParameterPeer::ID, $pk);


		$v = MachineParameterPeer::doSelect($criteria, $con);

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
			$criteria->add(MachineParameterPeer::ID, $pks, Criteria::IN);
			$objs = MachineParameterPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseMachineParameterPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/MachineParameterMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.MachineParameterMapBuilder');
}

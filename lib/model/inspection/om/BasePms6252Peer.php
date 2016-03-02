<?php


abstract class BasePms6252Peer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'pms_6252';

	
	const CLASS_DEFAULT = 'lib.model.inspection.Pms6252';

	
	const NUM_COLUMNS = 15;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'pms_6252.ID';

	
	const TRANS_DATE = 'pms_6252.TRANS_DATE';

	
	const MACHINE_NO = 'pms_6252.MACHINE_NO';

	
	const CDA_DI_WATER = 'pms_6252.CDA_DI_WATER';

	
	const PRE_INSPECT = 'pms_6252.PRE_INSPECT';

	
	const FLUID_LEAK = 'pms_6252.FLUID_LEAK';

	
	const PANEL_INSPECT = 'pms_6252.PANEL_INSPECT';

	
	const EXIT_INSPECT = 'pms_6252.EXIT_INSPECT';

	
	const SWITCH_CONTROL = 'pms_6252.SWITCH_CONTROL';

	
	const INITIAL = 'pms_6252.INITIAL';

	
	const REMARK = 'pms_6252.REMARK';

	
	const CREATED_BY = 'pms_6252.CREATED_BY';

	
	const DATE_CREATED = 'pms_6252.DATE_CREATED';

	
	const MODIFIED_BY = 'pms_6252.MODIFIED_BY';

	
	const DATE_MODIFIED = 'pms_6252.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'MachineNo', 'CdaDiWater', 'PreInspect', 'FluidLeak', 'PanelInspect', 'ExitInspect', 'SwitchControl', 'Initial', 'Remark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (Pms6252Peer::ID, Pms6252Peer::TRANS_DATE, Pms6252Peer::MACHINE_NO, Pms6252Peer::CDA_DI_WATER, Pms6252Peer::PRE_INSPECT, Pms6252Peer::FLUID_LEAK, Pms6252Peer::PANEL_INSPECT, Pms6252Peer::EXIT_INSPECT, Pms6252Peer::SWITCH_CONTROL, Pms6252Peer::INITIAL, Pms6252Peer::REMARK, Pms6252Peer::CREATED_BY, Pms6252Peer::DATE_CREATED, Pms6252Peer::MODIFIED_BY, Pms6252Peer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'machine_no', 'cda_di_water', 'pre_inspect', 'fluid_leak', 'panel_inspect', 'exit_inspect', 'switch_control', 'initial', 'remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'MachineNo' => 2, 'CdaDiWater' => 3, 'PreInspect' => 4, 'FluidLeak' => 5, 'PanelInspect' => 6, 'ExitInspect' => 7, 'SwitchControl' => 8, 'Initial' => 9, 'Remark' => 10, 'CreatedBy' => 11, 'DateCreated' => 12, 'ModifiedBy' => 13, 'DateModified' => 14, ),
		BasePeer::TYPE_COLNAME => array (Pms6252Peer::ID => 0, Pms6252Peer::TRANS_DATE => 1, Pms6252Peer::MACHINE_NO => 2, Pms6252Peer::CDA_DI_WATER => 3, Pms6252Peer::PRE_INSPECT => 4, Pms6252Peer::FLUID_LEAK => 5, Pms6252Peer::PANEL_INSPECT => 6, Pms6252Peer::EXIT_INSPECT => 7, Pms6252Peer::SWITCH_CONTROL => 8, Pms6252Peer::INITIAL => 9, Pms6252Peer::REMARK => 10, Pms6252Peer::CREATED_BY => 11, Pms6252Peer::DATE_CREATED => 12, Pms6252Peer::MODIFIED_BY => 13, Pms6252Peer::DATE_MODIFIED => 14, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'machine_no' => 2, 'cda_di_water' => 3, 'pre_inspect' => 4, 'fluid_leak' => 5, 'panel_inspect' => 6, 'exit_inspect' => 7, 'switch_control' => 8, 'initial' => 9, 'remark' => 10, 'created_by' => 11, 'date_created' => 12, 'modified_by' => 13, 'date_modified' => 14, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/Pms6252MapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.Pms6252MapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = Pms6252Peer::getTableMap();
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
		return str_replace(Pms6252Peer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(Pms6252Peer::ID);

		$criteria->addSelectColumn(Pms6252Peer::TRANS_DATE);

		$criteria->addSelectColumn(Pms6252Peer::MACHINE_NO);

		$criteria->addSelectColumn(Pms6252Peer::CDA_DI_WATER);

		$criteria->addSelectColumn(Pms6252Peer::PRE_INSPECT);

		$criteria->addSelectColumn(Pms6252Peer::FLUID_LEAK);

		$criteria->addSelectColumn(Pms6252Peer::PANEL_INSPECT);

		$criteria->addSelectColumn(Pms6252Peer::EXIT_INSPECT);

		$criteria->addSelectColumn(Pms6252Peer::SWITCH_CONTROL);

		$criteria->addSelectColumn(Pms6252Peer::INITIAL);

		$criteria->addSelectColumn(Pms6252Peer::REMARK);

		$criteria->addSelectColumn(Pms6252Peer::CREATED_BY);

		$criteria->addSelectColumn(Pms6252Peer::DATE_CREATED);

		$criteria->addSelectColumn(Pms6252Peer::MODIFIED_BY);

		$criteria->addSelectColumn(Pms6252Peer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(pms_6252.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT pms_6252.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(Pms6252Peer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(Pms6252Peer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = Pms6252Peer::doSelectRS($criteria, $con);
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
		$objects = Pms6252Peer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return Pms6252Peer::populateObjects(Pms6252Peer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			Pms6252Peer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = Pms6252Peer::getOMClass();
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
		return Pms6252Peer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(Pms6252Peer::ID); 

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
			$comparison = $criteria->getComparison(Pms6252Peer::ID);
			$selectCriteria->add(Pms6252Peer::ID, $criteria->remove(Pms6252Peer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(Pms6252Peer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(Pms6252Peer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Pms6252) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Pms6252Peer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Pms6252 $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Pms6252Peer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Pms6252Peer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(Pms6252Peer::DATABASE_NAME, Pms6252Peer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = Pms6252Peer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(Pms6252Peer::DATABASE_NAME);

		$criteria->add(Pms6252Peer::ID, $pk);


		$v = Pms6252Peer::doSelect($criteria, $con);

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
			$criteria->add(Pms6252Peer::ID, $pks, Criteria::IN);
			$objs = Pms6252Peer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasePms6252Peer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/Pms6252MapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.Pms6252MapBuilder');
}

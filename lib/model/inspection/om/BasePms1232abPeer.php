<?php


abstract class BasePms1232abPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'pms_1232ab';

	
	const CLASS_DEFAULT = 'lib.model.inspection.Pms1232ab';

	
	const NUM_COLUMNS = 16;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'pms_1232ab.ID';

	
	const TRANS_DATE = 'pms_1232ab.TRANS_DATE';

	
	const MACHINE_NO = 'pms_1232ab.MACHINE_NO';

	
	const WASH_FLOW_RATE = 'pms_1232ab.WASH_FLOW_RATE';

	
	const RINSE_FLOW_RATE = 'pms_1232ab.RINSE_FLOW_RATE';

	
	const CHAM_1 = 'pms_1232ab.CHAM_1';

	
	const CHAM_2 = 'pms_1232ab.CHAM_2';

	
	const PANEL_INSPECT = 'pms_1232ab.PANEL_INSPECT';

	
	const EXIT_INSPECT = 'pms_1232ab.EXIT_INSPECT';

	
	const SWITCH_CONTROL = 'pms_1232ab.SWITCH_CONTROL';

	
	const INITIAL = 'pms_1232ab.INITIAL';

	
	const REMARK = 'pms_1232ab.REMARK';

	
	const CREATED_BY = 'pms_1232ab.CREATED_BY';

	
	const DATE_CREATED = 'pms_1232ab.DATE_CREATED';

	
	const MODIFIED_BY = 'pms_1232ab.MODIFIED_BY';

	
	const DATE_MODIFIED = 'pms_1232ab.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'MachineNo', 'WashFlowRate', 'RinseFlowRate', 'Cham1', 'Cham2', 'PanelInspect', 'ExitInspect', 'SwitchControl', 'Initial', 'Remark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (Pms1232abPeer::ID, Pms1232abPeer::TRANS_DATE, Pms1232abPeer::MACHINE_NO, Pms1232abPeer::WASH_FLOW_RATE, Pms1232abPeer::RINSE_FLOW_RATE, Pms1232abPeer::CHAM_1, Pms1232abPeer::CHAM_2, Pms1232abPeer::PANEL_INSPECT, Pms1232abPeer::EXIT_INSPECT, Pms1232abPeer::SWITCH_CONTROL, Pms1232abPeer::INITIAL, Pms1232abPeer::REMARK, Pms1232abPeer::CREATED_BY, Pms1232abPeer::DATE_CREATED, Pms1232abPeer::MODIFIED_BY, Pms1232abPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'machine_no', 'wash_flow_rate', 'rinse_flow_rate', 'cham_1', 'cham_2', 'panel_inspect', 'exit_inspect', 'switch_control', 'initial', 'remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'MachineNo' => 2, 'WashFlowRate' => 3, 'RinseFlowRate' => 4, 'Cham1' => 5, 'Cham2' => 6, 'PanelInspect' => 7, 'ExitInspect' => 8, 'SwitchControl' => 9, 'Initial' => 10, 'Remark' => 11, 'CreatedBy' => 12, 'DateCreated' => 13, 'ModifiedBy' => 14, 'DateModified' => 15, ),
		BasePeer::TYPE_COLNAME => array (Pms1232abPeer::ID => 0, Pms1232abPeer::TRANS_DATE => 1, Pms1232abPeer::MACHINE_NO => 2, Pms1232abPeer::WASH_FLOW_RATE => 3, Pms1232abPeer::RINSE_FLOW_RATE => 4, Pms1232abPeer::CHAM_1 => 5, Pms1232abPeer::CHAM_2 => 6, Pms1232abPeer::PANEL_INSPECT => 7, Pms1232abPeer::EXIT_INSPECT => 8, Pms1232abPeer::SWITCH_CONTROL => 9, Pms1232abPeer::INITIAL => 10, Pms1232abPeer::REMARK => 11, Pms1232abPeer::CREATED_BY => 12, Pms1232abPeer::DATE_CREATED => 13, Pms1232abPeer::MODIFIED_BY => 14, Pms1232abPeer::DATE_MODIFIED => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'machine_no' => 2, 'wash_flow_rate' => 3, 'rinse_flow_rate' => 4, 'cham_1' => 5, 'cham_2' => 6, 'panel_inspect' => 7, 'exit_inspect' => 8, 'switch_control' => 9, 'initial' => 10, 'remark' => 11, 'created_by' => 12, 'date_created' => 13, 'modified_by' => 14, 'date_modified' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/Pms1232abMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.Pms1232abMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = Pms1232abPeer::getTableMap();
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
		return str_replace(Pms1232abPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(Pms1232abPeer::ID);

		$criteria->addSelectColumn(Pms1232abPeer::TRANS_DATE);

		$criteria->addSelectColumn(Pms1232abPeer::MACHINE_NO);

		$criteria->addSelectColumn(Pms1232abPeer::WASH_FLOW_RATE);

		$criteria->addSelectColumn(Pms1232abPeer::RINSE_FLOW_RATE);

		$criteria->addSelectColumn(Pms1232abPeer::CHAM_1);

		$criteria->addSelectColumn(Pms1232abPeer::CHAM_2);

		$criteria->addSelectColumn(Pms1232abPeer::PANEL_INSPECT);

		$criteria->addSelectColumn(Pms1232abPeer::EXIT_INSPECT);

		$criteria->addSelectColumn(Pms1232abPeer::SWITCH_CONTROL);

		$criteria->addSelectColumn(Pms1232abPeer::INITIAL);

		$criteria->addSelectColumn(Pms1232abPeer::REMARK);

		$criteria->addSelectColumn(Pms1232abPeer::CREATED_BY);

		$criteria->addSelectColumn(Pms1232abPeer::DATE_CREATED);

		$criteria->addSelectColumn(Pms1232abPeer::MODIFIED_BY);

		$criteria->addSelectColumn(Pms1232abPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(pms_1232ab.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT pms_1232ab.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(Pms1232abPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(Pms1232abPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = Pms1232abPeer::doSelectRS($criteria, $con);
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
		$objects = Pms1232abPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return Pms1232abPeer::populateObjects(Pms1232abPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			Pms1232abPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = Pms1232abPeer::getOMClass();
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
		return Pms1232abPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(Pms1232abPeer::ID); 

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
			$comparison = $criteria->getComparison(Pms1232abPeer::ID);
			$selectCriteria->add(Pms1232abPeer::ID, $criteria->remove(Pms1232abPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(Pms1232abPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(Pms1232abPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Pms1232ab) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Pms1232abPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Pms1232ab $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Pms1232abPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Pms1232abPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(Pms1232abPeer::DATABASE_NAME, Pms1232abPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = Pms1232abPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(Pms1232abPeer::DATABASE_NAME);

		$criteria->add(Pms1232abPeer::ID, $pk);


		$v = Pms1232abPeer::doSelect($criteria, $con);

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
			$criteria->add(Pms1232abPeer::ID, $pks, Criteria::IN);
			$objs = Pms1232abPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasePms1232abPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/Pms1232abMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.Pms1232abMapBuilder');
}

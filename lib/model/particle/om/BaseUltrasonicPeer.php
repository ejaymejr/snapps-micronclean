<?php


abstract class BaseUltrasonicPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'ultrasonic';

	
	const CLASS_DEFAULT = 'lib.model.particle.Ultrasonic';

	
	const NUM_COLUMNS = 16;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'ultrasonic.ID';

	
	const TRANS_DATE = 'ultrasonic.TRANS_DATE';

	
	const FREQUENCY = 'ultrasonic.FREQUENCY';

	
	const POWER = 'ultrasonic.POWER';

	
	const CAPACITANCE = 'ultrasonic.CAPACITANCE';

	
	const EQUIPMENT_NAME = 'ultrasonic.EQUIPMENT_NAME';

	
	const EQUIPMENT_NO = 'ultrasonic.EQUIPMENT_NO';

	
	const EQUIPMENT_CAL_NO = 'ultrasonic.EQUIPMENT_CAL_NO';

	
	const EQUIPMENT_CAL_DATE = 'ultrasonic.EQUIPMENT_CAL_DATE';

	
	const DONE_BY = 'ultrasonic.DONE_BY';

	
	const VERIFIED_BY = 'ultrasonic.VERIFIED_BY';

	
	const REMARK = 'ultrasonic.REMARK';

	
	const DATE_CREATED = 'ultrasonic.DATE_CREATED';

	
	const CREATED_BY = 'ultrasonic.CREATED_BY';

	
	const DATE_MODIFIED = 'ultrasonic.DATE_MODIFIED';

	
	const MODIFIED_BY = 'ultrasonic.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'Frequency', 'Power', 'Capacitance', 'EquipmentName', 'EquipmentNo', 'EquipmentCalNo', 'EquipmentCalDate', 'DoneBy', 'VerifiedBy', 'Remark', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (UltrasonicPeer::ID, UltrasonicPeer::TRANS_DATE, UltrasonicPeer::FREQUENCY, UltrasonicPeer::POWER, UltrasonicPeer::CAPACITANCE, UltrasonicPeer::EQUIPMENT_NAME, UltrasonicPeer::EQUIPMENT_NO, UltrasonicPeer::EQUIPMENT_CAL_NO, UltrasonicPeer::EQUIPMENT_CAL_DATE, UltrasonicPeer::DONE_BY, UltrasonicPeer::VERIFIED_BY, UltrasonicPeer::REMARK, UltrasonicPeer::DATE_CREATED, UltrasonicPeer::CREATED_BY, UltrasonicPeer::DATE_MODIFIED, UltrasonicPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'frequency', 'power', 'capacitance', 'equipment_name', 'equipment_no', 'equipment_cal_no', 'equipment_cal_date', 'done_by', 'verified_by', 'remark', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'Frequency' => 2, 'Power' => 3, 'Capacitance' => 4, 'EquipmentName' => 5, 'EquipmentNo' => 6, 'EquipmentCalNo' => 7, 'EquipmentCalDate' => 8, 'DoneBy' => 9, 'VerifiedBy' => 10, 'Remark' => 11, 'DateCreated' => 12, 'CreatedBy' => 13, 'DateModified' => 14, 'ModifiedBy' => 15, ),
		BasePeer::TYPE_COLNAME => array (UltrasonicPeer::ID => 0, UltrasonicPeer::TRANS_DATE => 1, UltrasonicPeer::FREQUENCY => 2, UltrasonicPeer::POWER => 3, UltrasonicPeer::CAPACITANCE => 4, UltrasonicPeer::EQUIPMENT_NAME => 5, UltrasonicPeer::EQUIPMENT_NO => 6, UltrasonicPeer::EQUIPMENT_CAL_NO => 7, UltrasonicPeer::EQUIPMENT_CAL_DATE => 8, UltrasonicPeer::DONE_BY => 9, UltrasonicPeer::VERIFIED_BY => 10, UltrasonicPeer::REMARK => 11, UltrasonicPeer::DATE_CREATED => 12, UltrasonicPeer::CREATED_BY => 13, UltrasonicPeer::DATE_MODIFIED => 14, UltrasonicPeer::MODIFIED_BY => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'frequency' => 2, 'power' => 3, 'capacitance' => 4, 'equipment_name' => 5, 'equipment_no' => 6, 'equipment_cal_no' => 7, 'equipment_cal_date' => 8, 'done_by' => 9, 'verified_by' => 10, 'remark' => 11, 'date_created' => 12, 'created_by' => 13, 'date_modified' => 14, 'modified_by' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/UltrasonicMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.UltrasonicMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = UltrasonicPeer::getTableMap();
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
		return str_replace(UltrasonicPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(UltrasonicPeer::ID);

		$criteria->addSelectColumn(UltrasonicPeer::TRANS_DATE);

		$criteria->addSelectColumn(UltrasonicPeer::FREQUENCY);

		$criteria->addSelectColumn(UltrasonicPeer::POWER);

		$criteria->addSelectColumn(UltrasonicPeer::CAPACITANCE);

		$criteria->addSelectColumn(UltrasonicPeer::EQUIPMENT_NAME);

		$criteria->addSelectColumn(UltrasonicPeer::EQUIPMENT_NO);

		$criteria->addSelectColumn(UltrasonicPeer::EQUIPMENT_CAL_NO);

		$criteria->addSelectColumn(UltrasonicPeer::EQUIPMENT_CAL_DATE);

		$criteria->addSelectColumn(UltrasonicPeer::DONE_BY);

		$criteria->addSelectColumn(UltrasonicPeer::VERIFIED_BY);

		$criteria->addSelectColumn(UltrasonicPeer::REMARK);

		$criteria->addSelectColumn(UltrasonicPeer::DATE_CREATED);

		$criteria->addSelectColumn(UltrasonicPeer::CREATED_BY);

		$criteria->addSelectColumn(UltrasonicPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(UltrasonicPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(ultrasonic.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT ultrasonic.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(UltrasonicPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(UltrasonicPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = UltrasonicPeer::doSelectRS($criteria, $con);
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
		$objects = UltrasonicPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return UltrasonicPeer::populateObjects(UltrasonicPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			UltrasonicPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = UltrasonicPeer::getOMClass();
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
		return UltrasonicPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(UltrasonicPeer::ID); 

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
			$comparison = $criteria->getComparison(UltrasonicPeer::ID);
			$selectCriteria->add(UltrasonicPeer::ID, $criteria->remove(UltrasonicPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(UltrasonicPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(UltrasonicPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Ultrasonic) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(UltrasonicPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Ultrasonic $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(UltrasonicPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(UltrasonicPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(UltrasonicPeer::DATABASE_NAME, UltrasonicPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = UltrasonicPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(UltrasonicPeer::DATABASE_NAME);

		$criteria->add(UltrasonicPeer::ID, $pk);


		$v = UltrasonicPeer::doSelect($criteria, $con);

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
			$criteria->add(UltrasonicPeer::ID, $pks, Criteria::IN);
			$objs = UltrasonicPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseUltrasonicPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/UltrasonicMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.UltrasonicMapBuilder');
}

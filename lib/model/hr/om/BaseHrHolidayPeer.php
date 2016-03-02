<?php


abstract class BaseHrHolidayPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'hr_holiday';

	
	const CLASS_DEFAULT = 'lib.model.hr.HrHoliday';

	
	const NUM_COLUMNS = 8;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_holiday.ID';

	
	const DATE_HOL = 'hr_holiday.DATE_HOL';

	
	const HOLIDAY_CODE = 'hr_holiday.HOLIDAY_CODE';

	
	const HOLIDAY = 'hr_holiday.HOLIDAY';

	
	const CREATED_BY = 'hr_holiday.CREATED_BY';

	
	const DATE_CREATED = 'hr_holiday.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_holiday.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_holiday.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateHol', 'HolidayCode', 'Holiday', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrHolidayPeer::ID, HrHolidayPeer::DATE_HOL, HrHolidayPeer::HOLIDAY_CODE, HrHolidayPeer::HOLIDAY, HrHolidayPeer::CREATED_BY, HrHolidayPeer::DATE_CREATED, HrHolidayPeer::MODIFIED_BY, HrHolidayPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_hol', 'holiday_code', 'holiday', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateHol' => 1, 'HolidayCode' => 2, 'Holiday' => 3, 'CreatedBy' => 4, 'DateCreated' => 5, 'ModifiedBy' => 6, 'DateModified' => 7, ),
		BasePeer::TYPE_COLNAME => array (HrHolidayPeer::ID => 0, HrHolidayPeer::DATE_HOL => 1, HrHolidayPeer::HOLIDAY_CODE => 2, HrHolidayPeer::HOLIDAY => 3, HrHolidayPeer::CREATED_BY => 4, HrHolidayPeer::DATE_CREATED => 5, HrHolidayPeer::MODIFIED_BY => 6, HrHolidayPeer::DATE_MODIFIED => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_hol' => 1, 'holiday_code' => 2, 'holiday' => 3, 'created_by' => 4, 'date_created' => 5, 'modified_by' => 6, 'date_modified' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/HrHolidayMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.HrHolidayMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrHolidayPeer::getTableMap();
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
		return str_replace(HrHolidayPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrHolidayPeer::ID);

		$criteria->addSelectColumn(HrHolidayPeer::DATE_HOL);

		$criteria->addSelectColumn(HrHolidayPeer::HOLIDAY_CODE);

		$criteria->addSelectColumn(HrHolidayPeer::HOLIDAY);

		$criteria->addSelectColumn(HrHolidayPeer::CREATED_BY);

		$criteria->addSelectColumn(HrHolidayPeer::DATE_CREATED);

		$criteria->addSelectColumn(HrHolidayPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrHolidayPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_holiday.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_holiday.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrHolidayPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrHolidayPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrHolidayPeer::doSelectRS($criteria, $con);
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
		$objects = HrHolidayPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrHolidayPeer::populateObjects(HrHolidayPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrHolidayPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrHolidayPeer::getOMClass();
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
		return HrHolidayPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrHolidayPeer::ID); 

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
			$comparison = $criteria->getComparison(HrHolidayPeer::ID);
			$selectCriteria->add(HrHolidayPeer::ID, $criteria->remove(HrHolidayPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrHolidayPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrHolidayPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrHoliday) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrHolidayPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrHoliday $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrHolidayPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrHolidayPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrHolidayPeer::DATABASE_NAME, HrHolidayPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrHolidayPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrHolidayPeer::DATABASE_NAME);

		$criteria->add(HrHolidayPeer::ID, $pk);


		$v = HrHolidayPeer::doSelect($criteria, $con);

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
			$criteria->add(HrHolidayPeer::ID, $pks, Criteria::IN);
			$objs = HrHolidayPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrHolidayPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/HrHolidayMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.HrHolidayMapBuilder');
}

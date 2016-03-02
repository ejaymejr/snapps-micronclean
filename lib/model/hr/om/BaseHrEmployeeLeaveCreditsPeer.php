<?php


abstract class BaseHrEmployeeLeaveCreditsPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'hr_employee_leave_credits';

	
	const CLASS_DEFAULT = 'lib.model.hr.HrEmployeeLeaveCredits';

	
	const NUM_COLUMNS = 14;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_employee_leave_credits.ID';

	
	const HR_EMPLOYEE_ID = 'hr_employee_leave_credits.HR_EMPLOYEE_ID';

	
	const EMPLOYEE_NO = 'hr_employee_leave_credits.EMPLOYEE_NO';

	
	const NAME = 'hr_employee_leave_credits.NAME';

	
	const HR_LEAVE_ID = 'hr_employee_leave_credits.HR_LEAVE_ID';

	
	const LEAVE_TYPE = 'hr_employee_leave_credits.LEAVE_TYPE';

	
	const CREDITS = 'hr_employee_leave_credits.CREDITS';

	
	const CONSUMED = 'hr_employee_leave_credits.CONSUMED';

	
	const PREVIOUS_BALANCE = 'hr_employee_leave_credits.PREVIOUS_BALANCE';

	
	const FISCAL_YEAR = 'hr_employee_leave_credits.FISCAL_YEAR';

	
	const CREATED_BY = 'hr_employee_leave_credits.CREATED_BY';

	
	const DATE_CREATED = 'hr_employee_leave_credits.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_employee_leave_credits.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_employee_leave_credits.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'HrEmployeeId', 'EmployeeNo', 'Name', 'HrLeaveId', 'LeaveType', 'Credits', 'Consumed', 'PreviousBalance', 'FiscalYear', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrEmployeeLeaveCreditsPeer::ID, HrEmployeeLeaveCreditsPeer::HR_EMPLOYEE_ID, HrEmployeeLeaveCreditsPeer::EMPLOYEE_NO, HrEmployeeLeaveCreditsPeer::NAME, HrEmployeeLeaveCreditsPeer::HR_LEAVE_ID, HrEmployeeLeaveCreditsPeer::LEAVE_TYPE, HrEmployeeLeaveCreditsPeer::CREDITS, HrEmployeeLeaveCreditsPeer::CONSUMED, HrEmployeeLeaveCreditsPeer::PREVIOUS_BALANCE, HrEmployeeLeaveCreditsPeer::FISCAL_YEAR, HrEmployeeLeaveCreditsPeer::CREATED_BY, HrEmployeeLeaveCreditsPeer::DATE_CREATED, HrEmployeeLeaveCreditsPeer::MODIFIED_BY, HrEmployeeLeaveCreditsPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'hr_employee_id', 'employee_no', 'name', 'hr_leave_id', 'leave_type', 'credits', 'consumed', 'previous_balance', 'fiscal_year', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'HrEmployeeId' => 1, 'EmployeeNo' => 2, 'Name' => 3, 'HrLeaveId' => 4, 'LeaveType' => 5, 'Credits' => 6, 'Consumed' => 7, 'PreviousBalance' => 8, 'FiscalYear' => 9, 'CreatedBy' => 10, 'DateCreated' => 11, 'ModifiedBy' => 12, 'DateModified' => 13, ),
		BasePeer::TYPE_COLNAME => array (HrEmployeeLeaveCreditsPeer::ID => 0, HrEmployeeLeaveCreditsPeer::HR_EMPLOYEE_ID => 1, HrEmployeeLeaveCreditsPeer::EMPLOYEE_NO => 2, HrEmployeeLeaveCreditsPeer::NAME => 3, HrEmployeeLeaveCreditsPeer::HR_LEAVE_ID => 4, HrEmployeeLeaveCreditsPeer::LEAVE_TYPE => 5, HrEmployeeLeaveCreditsPeer::CREDITS => 6, HrEmployeeLeaveCreditsPeer::CONSUMED => 7, HrEmployeeLeaveCreditsPeer::PREVIOUS_BALANCE => 8, HrEmployeeLeaveCreditsPeer::FISCAL_YEAR => 9, HrEmployeeLeaveCreditsPeer::CREATED_BY => 10, HrEmployeeLeaveCreditsPeer::DATE_CREATED => 11, HrEmployeeLeaveCreditsPeer::MODIFIED_BY => 12, HrEmployeeLeaveCreditsPeer::DATE_MODIFIED => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'hr_employee_id' => 1, 'employee_no' => 2, 'name' => 3, 'hr_leave_id' => 4, 'leave_type' => 5, 'credits' => 6, 'consumed' => 7, 'previous_balance' => 8, 'fiscal_year' => 9, 'created_by' => 10, 'date_created' => 11, 'modified_by' => 12, 'date_modified' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/HrEmployeeLeaveCreditsMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.HrEmployeeLeaveCreditsMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrEmployeeLeaveCreditsPeer::getTableMap();
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
		return str_replace(HrEmployeeLeaveCreditsPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::ID);

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::HR_EMPLOYEE_ID);

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::NAME);

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::HR_LEAVE_ID);

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::LEAVE_TYPE);

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::CREDITS);

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::CONSUMED);

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::PREVIOUS_BALANCE);

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::FISCAL_YEAR);

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::CREATED_BY);

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::DATE_CREATED);

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_employee_leave_credits.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_employee_leave_credits.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrEmployeeLeaveCreditsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrEmployeeLeaveCreditsPeer::doSelectRS($criteria, $con);
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
		$objects = HrEmployeeLeaveCreditsPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrEmployeeLeaveCreditsPeer::populateObjects(HrEmployeeLeaveCreditsPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrEmployeeLeaveCreditsPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrEmployeeLeaveCreditsPeer::getOMClass();
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
		return HrEmployeeLeaveCreditsPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrEmployeeLeaveCreditsPeer::ID); 

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
			$comparison = $criteria->getComparison(HrEmployeeLeaveCreditsPeer::ID);
			$selectCriteria->add(HrEmployeeLeaveCreditsPeer::ID, $criteria->remove(HrEmployeeLeaveCreditsPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrEmployeeLeaveCreditsPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrEmployeeLeaveCreditsPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrEmployeeLeaveCredits) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrEmployeeLeaveCreditsPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrEmployeeLeaveCredits $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrEmployeeLeaveCreditsPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrEmployeeLeaveCreditsPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrEmployeeLeaveCreditsPeer::DATABASE_NAME, HrEmployeeLeaveCreditsPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrEmployeeLeaveCreditsPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrEmployeeLeaveCreditsPeer::DATABASE_NAME);

		$criteria->add(HrEmployeeLeaveCreditsPeer::ID, $pk);


		$v = HrEmployeeLeaveCreditsPeer::doSelect($criteria, $con);

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
			$criteria->add(HrEmployeeLeaveCreditsPeer::ID, $pks, Criteria::IN);
			$objs = HrEmployeeLeaveCreditsPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrEmployeeLeaveCreditsPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/HrEmployeeLeaveCreditsMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.HrEmployeeLeaveCreditsMapBuilder');
}

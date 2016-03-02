<?php


abstract class BaseTkDtrsummaryPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'tk_dtrsummary';

	
	const CLASS_DEFAULT = 'lib.model.hr.TkDtrsummary';

	
	const NUM_COLUMNS = 36;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'tk_dtrsummary.ID';

	
	const EMPLOYEE_NO = 'tk_dtrsummary.EMPLOYEE_NO';

	
	const NAME = 'tk_dtrsummary.NAME';

	
	const TRANS_DATE = 'tk_dtrsummary.TRANS_DATE';

	
	const MULTIPLIER = 'tk_dtrsummary.MULTIPLIER';

	
	const ATTENDANCE = 'tk_dtrsummary.ATTENDANCE';

	
	const HOLIDAY_CODE = 'tk_dtrsummary.HOLIDAY_CODE';

	
	const LEAVE_TYPE = 'tk_dtrsummary.LEAVE_TYPE';

	
	const DAYOFF = 'tk_dtrsummary.DAYOFF';

	
	const OVERTIMES = 'tk_dtrsummary.OVERTIMES';

	
	const EXTRA_OT_PAY = 'tk_dtrsummary.EXTRA_OT_PAY';

	
	const EXTRA_OT = 'tk_dtrsummary.EXTRA_OT';

	
	const NORMAL = 'tk_dtrsummary.NORMAL';

	
	const UNDERTIME = 'tk_dtrsummary.UNDERTIME';

	
	const DURATION = 'tk_dtrsummary.DURATION';

	
	const INCOME_PREPOST_BATCH = 'tk_dtrsummary.INCOME_PREPOST_BATCH';

	
	const DEDUCTION_PREPOST_BATCH = 'tk_dtrsummary.DEDUCTION_PREPOST_BATCH';

	
	const POSTED_AMOUNT = 'tk_dtrsummary.POSTED_AMOUNT';

	
	const MEAL = 'tk_dtrsummary.MEAL';

	
	const ALLOWANCE = 'tk_dtrsummary.ALLOWANCE';

	
	const LEVY = 'tk_dtrsummary.LEVY';

	
	const INCOME_DEDUCTION = 'tk_dtrsummary.INCOME_DEDUCTION';

	
	const IS_POSTED = 'tk_dtrsummary.IS_POSTED';

	
	const POSTED_DATE = 'tk_dtrsummary.POSTED_DATE';

	
	const AC_DURA = 'tk_dtrsummary.AC_DURA';

	
	const PART_TIME_INCOME = 'tk_dtrsummary.PART_TIME_INCOME';

	
	const RATE_PER_HOUR = 'tk_dtrsummary.RATE_PER_HOUR';

	
	const TEAM = 'tk_dtrsummary.TEAM';

	
	const UNEDITED_DURATION = 'tk_dtrsummary.UNEDITED_DURATION';

	
	const CREATED_BY = 'tk_dtrsummary.CREATED_BY';

	
	const DATE_CREATED = 'tk_dtrsummary.DATE_CREATED';

	
	const MODIFIED_BY = 'tk_dtrsummary.MODIFIED_BY';

	
	const TK_ATTENDANCE_ID = 'tk_dtrsummary.TK_ATTENDANCE_ID';

	
	const HR_EMPLOYEE_LEAVE_ID = 'tk_dtrsummary.HR_EMPLOYEE_LEAVE_ID';

	
	const HR_HOLIDAY_ID = 'tk_dtrsummary.HR_HOLIDAY_ID';

	
	const DATE_MODIFIED = 'tk_dtrsummary.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'EmployeeNo', 'Name', 'TransDate', 'Multiplier', 'Attendance', 'HolidayCode', 'LeaveType', 'Dayoff', 'Overtimes', 'ExtraOtPay', 'ExtraOt', 'Normal', 'Undertime', 'Duration', 'IncomePrepostBatch', 'DeductionPrepostBatch', 'PostedAmount', 'Meal', 'Allowance', 'Levy', 'IncomeDeduction', 'IsPosted', 'PostedDate', 'AcDura', 'PartTimeIncome', 'RatePerHour', 'Team', 'UneditedDuration', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'TkAttendanceId', 'HrEmployeeLeaveId', 'HrHolidayId', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (TkDtrsummaryPeer::ID, TkDtrsummaryPeer::EMPLOYEE_NO, TkDtrsummaryPeer::NAME, TkDtrsummaryPeer::TRANS_DATE, TkDtrsummaryPeer::MULTIPLIER, TkDtrsummaryPeer::ATTENDANCE, TkDtrsummaryPeer::HOLIDAY_CODE, TkDtrsummaryPeer::LEAVE_TYPE, TkDtrsummaryPeer::DAYOFF, TkDtrsummaryPeer::OVERTIMES, TkDtrsummaryPeer::EXTRA_OT_PAY, TkDtrsummaryPeer::EXTRA_OT, TkDtrsummaryPeer::NORMAL, TkDtrsummaryPeer::UNDERTIME, TkDtrsummaryPeer::DURATION, TkDtrsummaryPeer::INCOME_PREPOST_BATCH, TkDtrsummaryPeer::DEDUCTION_PREPOST_BATCH, TkDtrsummaryPeer::POSTED_AMOUNT, TkDtrsummaryPeer::MEAL, TkDtrsummaryPeer::ALLOWANCE, TkDtrsummaryPeer::LEVY, TkDtrsummaryPeer::INCOME_DEDUCTION, TkDtrsummaryPeer::IS_POSTED, TkDtrsummaryPeer::POSTED_DATE, TkDtrsummaryPeer::AC_DURA, TkDtrsummaryPeer::PART_TIME_INCOME, TkDtrsummaryPeer::RATE_PER_HOUR, TkDtrsummaryPeer::TEAM, TkDtrsummaryPeer::UNEDITED_DURATION, TkDtrsummaryPeer::CREATED_BY, TkDtrsummaryPeer::DATE_CREATED, TkDtrsummaryPeer::MODIFIED_BY, TkDtrsummaryPeer::TK_ATTENDANCE_ID, TkDtrsummaryPeer::HR_EMPLOYEE_LEAVE_ID, TkDtrsummaryPeer::HR_HOLIDAY_ID, TkDtrsummaryPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'employee_no', 'name', 'trans_date', 'multiplier', 'attendance', 'holiday_code', 'leave_type', 'dayoff', 'overtimes', 'extra_ot_pay', 'extra_ot', 'normal', 'undertime', 'duration', 'income_prepost_batch', 'deduction_prepost_batch', 'posted_amount', 'meal', 'allowance', 'levy', 'income_deduction', 'is_posted', 'posted_date', 'ac_dura', 'part_time_income', 'rate_per_hour', 'team', 'unedited_duration', 'created_by', 'date_created', 'modified_by', 'tk_attendance_id', 'hr_employee_leave_id', 'hr_holiday_id', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'EmployeeNo' => 1, 'Name' => 2, 'TransDate' => 3, 'Multiplier' => 4, 'Attendance' => 5, 'HolidayCode' => 6, 'LeaveType' => 7, 'Dayoff' => 8, 'Overtimes' => 9, 'ExtraOtPay' => 10, 'ExtraOt' => 11, 'Normal' => 12, 'Undertime' => 13, 'Duration' => 14, 'IncomePrepostBatch' => 15, 'DeductionPrepostBatch' => 16, 'PostedAmount' => 17, 'Meal' => 18, 'Allowance' => 19, 'Levy' => 20, 'IncomeDeduction' => 21, 'IsPosted' => 22, 'PostedDate' => 23, 'AcDura' => 24, 'PartTimeIncome' => 25, 'RatePerHour' => 26, 'Team' => 27, 'UneditedDuration' => 28, 'CreatedBy' => 29, 'DateCreated' => 30, 'ModifiedBy' => 31, 'TkAttendanceId' => 32, 'HrEmployeeLeaveId' => 33, 'HrHolidayId' => 34, 'DateModified' => 35, ),
		BasePeer::TYPE_COLNAME => array (TkDtrsummaryPeer::ID => 0, TkDtrsummaryPeer::EMPLOYEE_NO => 1, TkDtrsummaryPeer::NAME => 2, TkDtrsummaryPeer::TRANS_DATE => 3, TkDtrsummaryPeer::MULTIPLIER => 4, TkDtrsummaryPeer::ATTENDANCE => 5, TkDtrsummaryPeer::HOLIDAY_CODE => 6, TkDtrsummaryPeer::LEAVE_TYPE => 7, TkDtrsummaryPeer::DAYOFF => 8, TkDtrsummaryPeer::OVERTIMES => 9, TkDtrsummaryPeer::EXTRA_OT_PAY => 10, TkDtrsummaryPeer::EXTRA_OT => 11, TkDtrsummaryPeer::NORMAL => 12, TkDtrsummaryPeer::UNDERTIME => 13, TkDtrsummaryPeer::DURATION => 14, TkDtrsummaryPeer::INCOME_PREPOST_BATCH => 15, TkDtrsummaryPeer::DEDUCTION_PREPOST_BATCH => 16, TkDtrsummaryPeer::POSTED_AMOUNT => 17, TkDtrsummaryPeer::MEAL => 18, TkDtrsummaryPeer::ALLOWANCE => 19, TkDtrsummaryPeer::LEVY => 20, TkDtrsummaryPeer::INCOME_DEDUCTION => 21, TkDtrsummaryPeer::IS_POSTED => 22, TkDtrsummaryPeer::POSTED_DATE => 23, TkDtrsummaryPeer::AC_DURA => 24, TkDtrsummaryPeer::PART_TIME_INCOME => 25, TkDtrsummaryPeer::RATE_PER_HOUR => 26, TkDtrsummaryPeer::TEAM => 27, TkDtrsummaryPeer::UNEDITED_DURATION => 28, TkDtrsummaryPeer::CREATED_BY => 29, TkDtrsummaryPeer::DATE_CREATED => 30, TkDtrsummaryPeer::MODIFIED_BY => 31, TkDtrsummaryPeer::TK_ATTENDANCE_ID => 32, TkDtrsummaryPeer::HR_EMPLOYEE_LEAVE_ID => 33, TkDtrsummaryPeer::HR_HOLIDAY_ID => 34, TkDtrsummaryPeer::DATE_MODIFIED => 35, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'employee_no' => 1, 'name' => 2, 'trans_date' => 3, 'multiplier' => 4, 'attendance' => 5, 'holiday_code' => 6, 'leave_type' => 7, 'dayoff' => 8, 'overtimes' => 9, 'extra_ot_pay' => 10, 'extra_ot' => 11, 'normal' => 12, 'undertime' => 13, 'duration' => 14, 'income_prepost_batch' => 15, 'deduction_prepost_batch' => 16, 'posted_amount' => 17, 'meal' => 18, 'allowance' => 19, 'levy' => 20, 'income_deduction' => 21, 'is_posted' => 22, 'posted_date' => 23, 'ac_dura' => 24, 'part_time_income' => 25, 'rate_per_hour' => 26, 'team' => 27, 'unedited_duration' => 28, 'created_by' => 29, 'date_created' => 30, 'modified_by' => 31, 'tk_attendance_id' => 32, 'hr_employee_leave_id' => 33, 'hr_holiday_id' => 34, 'date_modified' => 35, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/TkDtrsummaryMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.TkDtrsummaryMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TkDtrsummaryPeer::getTableMap();
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
		return str_replace(TkDtrsummaryPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TkDtrsummaryPeer::ID);

		$criteria->addSelectColumn(TkDtrsummaryPeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(TkDtrsummaryPeer::NAME);

		$criteria->addSelectColumn(TkDtrsummaryPeer::TRANS_DATE);

		$criteria->addSelectColumn(TkDtrsummaryPeer::MULTIPLIER);

		$criteria->addSelectColumn(TkDtrsummaryPeer::ATTENDANCE);

		$criteria->addSelectColumn(TkDtrsummaryPeer::HOLIDAY_CODE);

		$criteria->addSelectColumn(TkDtrsummaryPeer::LEAVE_TYPE);

		$criteria->addSelectColumn(TkDtrsummaryPeer::DAYOFF);

		$criteria->addSelectColumn(TkDtrsummaryPeer::OVERTIMES);

		$criteria->addSelectColumn(TkDtrsummaryPeer::EXTRA_OT_PAY);

		$criteria->addSelectColumn(TkDtrsummaryPeer::EXTRA_OT);

		$criteria->addSelectColumn(TkDtrsummaryPeer::NORMAL);

		$criteria->addSelectColumn(TkDtrsummaryPeer::UNDERTIME);

		$criteria->addSelectColumn(TkDtrsummaryPeer::DURATION);

		$criteria->addSelectColumn(TkDtrsummaryPeer::INCOME_PREPOST_BATCH);

		$criteria->addSelectColumn(TkDtrsummaryPeer::DEDUCTION_PREPOST_BATCH);

		$criteria->addSelectColumn(TkDtrsummaryPeer::POSTED_AMOUNT);

		$criteria->addSelectColumn(TkDtrsummaryPeer::MEAL);

		$criteria->addSelectColumn(TkDtrsummaryPeer::ALLOWANCE);

		$criteria->addSelectColumn(TkDtrsummaryPeer::LEVY);

		$criteria->addSelectColumn(TkDtrsummaryPeer::INCOME_DEDUCTION);

		$criteria->addSelectColumn(TkDtrsummaryPeer::IS_POSTED);

		$criteria->addSelectColumn(TkDtrsummaryPeer::POSTED_DATE);

		$criteria->addSelectColumn(TkDtrsummaryPeer::AC_DURA);

		$criteria->addSelectColumn(TkDtrsummaryPeer::PART_TIME_INCOME);

		$criteria->addSelectColumn(TkDtrsummaryPeer::RATE_PER_HOUR);

		$criteria->addSelectColumn(TkDtrsummaryPeer::TEAM);

		$criteria->addSelectColumn(TkDtrsummaryPeer::UNEDITED_DURATION);

		$criteria->addSelectColumn(TkDtrsummaryPeer::CREATED_BY);

		$criteria->addSelectColumn(TkDtrsummaryPeer::DATE_CREATED);

		$criteria->addSelectColumn(TkDtrsummaryPeer::MODIFIED_BY);

		$criteria->addSelectColumn(TkDtrsummaryPeer::TK_ATTENDANCE_ID);

		$criteria->addSelectColumn(TkDtrsummaryPeer::HR_EMPLOYEE_LEAVE_ID);

		$criteria->addSelectColumn(TkDtrsummaryPeer::HR_HOLIDAY_ID);

		$criteria->addSelectColumn(TkDtrsummaryPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(tk_dtrsummary.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tk_dtrsummary.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TkDtrsummaryPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TkDtrsummaryPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TkDtrsummaryPeer::doSelectRS($criteria, $con);
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
		$objects = TkDtrsummaryPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TkDtrsummaryPeer::populateObjects(TkDtrsummaryPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TkDtrsummaryPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TkDtrsummaryPeer::getOMClass();
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
		return TkDtrsummaryPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TkDtrsummaryPeer::ID); 

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
			$comparison = $criteria->getComparison(TkDtrsummaryPeer::ID);
			$selectCriteria->add(TkDtrsummaryPeer::ID, $criteria->remove(TkDtrsummaryPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TkDtrsummaryPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TkDtrsummaryPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TkDtrsummary) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TkDtrsummaryPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TkDtrsummary $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TkDtrsummaryPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TkDtrsummaryPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TkDtrsummaryPeer::DATABASE_NAME, TkDtrsummaryPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TkDtrsummaryPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(TkDtrsummaryPeer::DATABASE_NAME);

		$criteria->add(TkDtrsummaryPeer::ID, $pk);


		$v = TkDtrsummaryPeer::doSelect($criteria, $con);

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
			$criteria->add(TkDtrsummaryPeer::ID, $pks, Criteria::IN);
			$objs = TkDtrsummaryPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTkDtrsummaryPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/TkDtrsummaryMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.TkDtrsummaryMapBuilder');
}

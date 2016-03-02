<?php


abstract class BaseHrEmployeeLeavePeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'hr_employee_leave';

	
	const CLASS_DEFAULT = 'lib.model.hr.HrEmployeeLeave';

	
	const NUM_COLUMNS = 27;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_employee_leave.ID';

	
	const EMPLOYEE_NO = 'hr_employee_leave.EMPLOYEE_NO';

	
	const NAME = 'hr_employee_leave.NAME';

	
	const IC_NO = 'hr_employee_leave.IC_NO';

	
	const CONTACT_NO = 'hr_employee_leave.CONTACT_NO';

	
	const HR_LEAVE_ID = 'hr_employee_leave.HR_LEAVE_ID';

	
	const HR_EMPLOYEE_ID = 'hr_employee_leave.HR_EMPLOYEE_ID';

	
	const HR_DEPARTMENT_ID = 'hr_employee_leave.HR_DEPARTMENT_ID';

	
	const HR_COMPANY_ID = 'hr_employee_leave.HR_COMPANY_ID';

	
	const DATE_FILED = 'hr_employee_leave.DATE_FILED';

	
	const LEAVE_TYPE = 'hr_employee_leave.LEAVE_TYPE';

	
	const REASON_LEAVE = 'hr_employee_leave.REASON_LEAVE';

	
	const INCLUSIVE_DATEFROM = 'hr_employee_leave.INCLUSIVE_DATEFROM';

	
	const INCLUSIVE_DATETO = 'hr_employee_leave.INCLUSIVE_DATETO';

	
	const FISCAL_YEAR = 'hr_employee_leave.FISCAL_YEAR';

	
	const NO_DAYS = 'hr_employee_leave.NO_DAYS';

	
	const HALF_DAY = 'hr_employee_leave.HALF_DAY';

	
	const VERIFIED = 'hr_employee_leave.VERIFIED';

	
	const VERIFIED_BY = 'hr_employee_leave.VERIFIED_BY';

	
	const DATE_VERIFIED = 'hr_employee_leave.DATE_VERIFIED';

	
	const APPROVED = 'hr_employee_leave.APPROVED';

	
	const APPROVED_BY = 'hr_employee_leave.APPROVED_BY';

	
	const DATE_APPROVED = 'hr_employee_leave.DATE_APPROVED';

	
	const CREATED_BY = 'hr_employee_leave.CREATED_BY';

	
	const DATE_CREATED = 'hr_employee_leave.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_employee_leave.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_employee_leave.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'EmployeeNo', 'Name', 'IcNo', 'ContactNo', 'HrLeaveId', 'HrEmployeeId', 'HrDepartmentId', 'HrCompanyId', 'DateFiled', 'LeaveType', 'ReasonLeave', 'InclusiveDatefrom', 'InclusiveDateto', 'FiscalYear', 'NoDays', 'HalfDay', 'Verified', 'VerifiedBy', 'DateVerified', 'Approved', 'ApprovedBy', 'DateApproved', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrEmployeeLeavePeer::ID, HrEmployeeLeavePeer::EMPLOYEE_NO, HrEmployeeLeavePeer::NAME, HrEmployeeLeavePeer::IC_NO, HrEmployeeLeavePeer::CONTACT_NO, HrEmployeeLeavePeer::HR_LEAVE_ID, HrEmployeeLeavePeer::HR_EMPLOYEE_ID, HrEmployeeLeavePeer::HR_DEPARTMENT_ID, HrEmployeeLeavePeer::HR_COMPANY_ID, HrEmployeeLeavePeer::DATE_FILED, HrEmployeeLeavePeer::LEAVE_TYPE, HrEmployeeLeavePeer::REASON_LEAVE, HrEmployeeLeavePeer::INCLUSIVE_DATEFROM, HrEmployeeLeavePeer::INCLUSIVE_DATETO, HrEmployeeLeavePeer::FISCAL_YEAR, HrEmployeeLeavePeer::NO_DAYS, HrEmployeeLeavePeer::HALF_DAY, HrEmployeeLeavePeer::VERIFIED, HrEmployeeLeavePeer::VERIFIED_BY, HrEmployeeLeavePeer::DATE_VERIFIED, HrEmployeeLeavePeer::APPROVED, HrEmployeeLeavePeer::APPROVED_BY, HrEmployeeLeavePeer::DATE_APPROVED, HrEmployeeLeavePeer::CREATED_BY, HrEmployeeLeavePeer::DATE_CREATED, HrEmployeeLeavePeer::MODIFIED_BY, HrEmployeeLeavePeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'employee_no', 'name', 'ic_no', 'contact_no', 'hr_leave_id', 'hr_employee_id', 'hr_department_id', 'hr_company_id', 'date_filed', 'leave_type', 'reason_leave', 'inclusive_datefrom', 'inclusive_dateto', 'fiscal_year', 'no_days', 'half_day', 'verified', 'verified_by', 'date_verified', 'approved', 'approved_by', 'date_approved', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'EmployeeNo' => 1, 'Name' => 2, 'IcNo' => 3, 'ContactNo' => 4, 'HrLeaveId' => 5, 'HrEmployeeId' => 6, 'HrDepartmentId' => 7, 'HrCompanyId' => 8, 'DateFiled' => 9, 'LeaveType' => 10, 'ReasonLeave' => 11, 'InclusiveDatefrom' => 12, 'InclusiveDateto' => 13, 'FiscalYear' => 14, 'NoDays' => 15, 'HalfDay' => 16, 'Verified' => 17, 'VerifiedBy' => 18, 'DateVerified' => 19, 'Approved' => 20, 'ApprovedBy' => 21, 'DateApproved' => 22, 'CreatedBy' => 23, 'DateCreated' => 24, 'ModifiedBy' => 25, 'DateModified' => 26, ),
		BasePeer::TYPE_COLNAME => array (HrEmployeeLeavePeer::ID => 0, HrEmployeeLeavePeer::EMPLOYEE_NO => 1, HrEmployeeLeavePeer::NAME => 2, HrEmployeeLeavePeer::IC_NO => 3, HrEmployeeLeavePeer::CONTACT_NO => 4, HrEmployeeLeavePeer::HR_LEAVE_ID => 5, HrEmployeeLeavePeer::HR_EMPLOYEE_ID => 6, HrEmployeeLeavePeer::HR_DEPARTMENT_ID => 7, HrEmployeeLeavePeer::HR_COMPANY_ID => 8, HrEmployeeLeavePeer::DATE_FILED => 9, HrEmployeeLeavePeer::LEAVE_TYPE => 10, HrEmployeeLeavePeer::REASON_LEAVE => 11, HrEmployeeLeavePeer::INCLUSIVE_DATEFROM => 12, HrEmployeeLeavePeer::INCLUSIVE_DATETO => 13, HrEmployeeLeavePeer::FISCAL_YEAR => 14, HrEmployeeLeavePeer::NO_DAYS => 15, HrEmployeeLeavePeer::HALF_DAY => 16, HrEmployeeLeavePeer::VERIFIED => 17, HrEmployeeLeavePeer::VERIFIED_BY => 18, HrEmployeeLeavePeer::DATE_VERIFIED => 19, HrEmployeeLeavePeer::APPROVED => 20, HrEmployeeLeavePeer::APPROVED_BY => 21, HrEmployeeLeavePeer::DATE_APPROVED => 22, HrEmployeeLeavePeer::CREATED_BY => 23, HrEmployeeLeavePeer::DATE_CREATED => 24, HrEmployeeLeavePeer::MODIFIED_BY => 25, HrEmployeeLeavePeer::DATE_MODIFIED => 26, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'employee_no' => 1, 'name' => 2, 'ic_no' => 3, 'contact_no' => 4, 'hr_leave_id' => 5, 'hr_employee_id' => 6, 'hr_department_id' => 7, 'hr_company_id' => 8, 'date_filed' => 9, 'leave_type' => 10, 'reason_leave' => 11, 'inclusive_datefrom' => 12, 'inclusive_dateto' => 13, 'fiscal_year' => 14, 'no_days' => 15, 'half_day' => 16, 'verified' => 17, 'verified_by' => 18, 'date_verified' => 19, 'approved' => 20, 'approved_by' => 21, 'date_approved' => 22, 'created_by' => 23, 'date_created' => 24, 'modified_by' => 25, 'date_modified' => 26, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/HrEmployeeLeaveMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.HrEmployeeLeaveMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrEmployeeLeavePeer::getTableMap();
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
		return str_replace(HrEmployeeLeavePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrEmployeeLeavePeer::ID);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::NAME);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::IC_NO);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::CONTACT_NO);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::HR_LEAVE_ID);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::HR_EMPLOYEE_ID);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::HR_DEPARTMENT_ID);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::HR_COMPANY_ID);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::DATE_FILED);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::LEAVE_TYPE);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::REASON_LEAVE);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::INCLUSIVE_DATEFROM);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::INCLUSIVE_DATETO);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::FISCAL_YEAR);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::NO_DAYS);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::HALF_DAY);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::VERIFIED);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::VERIFIED_BY);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::DATE_VERIFIED);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::APPROVED);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::APPROVED_BY);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::DATE_APPROVED);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::CREATED_BY);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::DATE_CREATED);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrEmployeeLeavePeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_employee_leave.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_employee_leave.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrEmployeeLeavePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrEmployeeLeavePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrEmployeeLeavePeer::doSelectRS($criteria, $con);
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
		$objects = HrEmployeeLeavePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrEmployeeLeavePeer::populateObjects(HrEmployeeLeavePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrEmployeeLeavePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrEmployeeLeavePeer::getOMClass();
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
		return HrEmployeeLeavePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrEmployeeLeavePeer::ID); 

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
			$comparison = $criteria->getComparison(HrEmployeeLeavePeer::ID);
			$selectCriteria->add(HrEmployeeLeavePeer::ID, $criteria->remove(HrEmployeeLeavePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrEmployeeLeavePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrEmployeeLeavePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrEmployeeLeave) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrEmployeeLeavePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrEmployeeLeave $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrEmployeeLeavePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrEmployeeLeavePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrEmployeeLeavePeer::DATABASE_NAME, HrEmployeeLeavePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrEmployeeLeavePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrEmployeeLeavePeer::DATABASE_NAME);

		$criteria->add(HrEmployeeLeavePeer::ID, $pk);


		$v = HrEmployeeLeavePeer::doSelect($criteria, $con);

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
			$criteria->add(HrEmployeeLeavePeer::ID, $pks, Criteria::IN);
			$objs = HrEmployeeLeavePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrEmployeeLeavePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/HrEmployeeLeaveMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.HrEmployeeLeaveMapBuilder');
}

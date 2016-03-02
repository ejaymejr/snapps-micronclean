<?php


abstract class BaseTkWorktemplatePeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'tk_worktemplate';

	
	const CLASS_DEFAULT = 'lib.model.hr.TkWorktemplate';

	
	const NUM_COLUMNS = 29;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'tk_worktemplate.ID';

	
	const WORKTEMP_NO = 'tk_worktemplate.WORKTEMP_NO';

	
	const DESCRIPTION = 'tk_worktemplate.DESCRIPTION';

	
	const FISCAL_YEAR = 'tk_worktemplate.FISCAL_YEAR';

	
	const AM_PM_EV = 'tk_worktemplate.AM_PM_EV';

	
	const DAYOFF = 'tk_worktemplate.DAYOFF';

	
	const DAYOFF_DAY = 'tk_worktemplate.DAYOFF_DAY';

	
	const TEMPLATE = 'tk_worktemplate.TEMPLATE';

	
	const HRS_PER_DAY = 'tk_worktemplate.HRS_PER_DAY';

	
	const HRS_PER_WEEK = 'tk_worktemplate.HRS_PER_WEEK';

	
	const DAYS_PER_MONTH = 'tk_worktemplate.DAYS_PER_MONTH';

	
	const ACCT_CODE = 'tk_worktemplate.ACCT_CODE';

	
	const ACCT_DESC = 'tk_worktemplate.ACCT_DESC';

	
	const ALLOWANCE_DAYS = 'tk_worktemplate.ALLOWANCE_DAYS';

	
	const MEALBREAK = 'tk_worktemplate.MEALBREAK';

	
	const ALLOWANCE_AMT = 'tk_worktemplate.ALLOWANCE_AMT';

	
	const BASE_NOHOURS = 'tk_worktemplate.BASE_NOHOURS';

	
	const TIMEIN_ALLOWANCE = 'tk_worktemplate.TIMEIN_ALLOWANCE';

	
	const TIMEOUT_ALLOWANCE = 'tk_worktemplate.TIMEOUT_ALLOWANCE';

	
	const ENDURANCE = 'tk_worktemplate.ENDURANCE';

	
	const OT1 = 'tk_worktemplate.OT1';

	
	const OT2 = 'tk_worktemplate.OT2';

	
	const OT3 = 'tk_worktemplate.OT3';

	
	const MIN_OT = 'tk_worktemplate.MIN_OT';

	
	const MIN_TIME = 'tk_worktemplate.MIN_TIME';

	
	const CREATED_BY = 'tk_worktemplate.CREATED_BY';

	
	const DATE_CREATED = 'tk_worktemplate.DATE_CREATED';

	
	const MODIFIED_BY = 'tk_worktemplate.MODIFIED_BY';

	
	const DATE_MODIFIED = 'tk_worktemplate.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'WorktempNo', 'Description', 'FiscalYear', 'AmPmEv', 'Dayoff', 'DayoffDay', 'Template', 'HrsPerDay', 'HrsPerWeek', 'DaysPerMonth', 'AcctCode', 'AcctDesc', 'AllowanceDays', 'Mealbreak', 'AllowanceAmt', 'BaseNohours', 'TimeinAllowance', 'TimeoutAllowance', 'Endurance', 'Ot1', 'Ot2', 'Ot3', 'MinOt', 'MinTime', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (TkWorktemplatePeer::ID, TkWorktemplatePeer::WORKTEMP_NO, TkWorktemplatePeer::DESCRIPTION, TkWorktemplatePeer::FISCAL_YEAR, TkWorktemplatePeer::AM_PM_EV, TkWorktemplatePeer::DAYOFF, TkWorktemplatePeer::DAYOFF_DAY, TkWorktemplatePeer::TEMPLATE, TkWorktemplatePeer::HRS_PER_DAY, TkWorktemplatePeer::HRS_PER_WEEK, TkWorktemplatePeer::DAYS_PER_MONTH, TkWorktemplatePeer::ACCT_CODE, TkWorktemplatePeer::ACCT_DESC, TkWorktemplatePeer::ALLOWANCE_DAYS, TkWorktemplatePeer::MEALBREAK, TkWorktemplatePeer::ALLOWANCE_AMT, TkWorktemplatePeer::BASE_NOHOURS, TkWorktemplatePeer::TIMEIN_ALLOWANCE, TkWorktemplatePeer::TIMEOUT_ALLOWANCE, TkWorktemplatePeer::ENDURANCE, TkWorktemplatePeer::OT1, TkWorktemplatePeer::OT2, TkWorktemplatePeer::OT3, TkWorktemplatePeer::MIN_OT, TkWorktemplatePeer::MIN_TIME, TkWorktemplatePeer::CREATED_BY, TkWorktemplatePeer::DATE_CREATED, TkWorktemplatePeer::MODIFIED_BY, TkWorktemplatePeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'worktemp_no', 'description', 'fiscal_year', 'am_pm_ev', 'dayoff', 'dayoff_day', 'template', 'hrs_per_day', 'hrs_per_week', 'days_per_month', 'acct_code', 'acct_desc', 'allowance_days', 'mealbreak', 'allowance_amt', 'base_nohours', 'timein_allowance', 'timeout_allowance', 'endurance', 'ot1', 'ot2', 'ot3', 'min_ot', 'min_time', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'WorktempNo' => 1, 'Description' => 2, 'FiscalYear' => 3, 'AmPmEv' => 4, 'Dayoff' => 5, 'DayoffDay' => 6, 'Template' => 7, 'HrsPerDay' => 8, 'HrsPerWeek' => 9, 'DaysPerMonth' => 10, 'AcctCode' => 11, 'AcctDesc' => 12, 'AllowanceDays' => 13, 'Mealbreak' => 14, 'AllowanceAmt' => 15, 'BaseNohours' => 16, 'TimeinAllowance' => 17, 'TimeoutAllowance' => 18, 'Endurance' => 19, 'Ot1' => 20, 'Ot2' => 21, 'Ot3' => 22, 'MinOt' => 23, 'MinTime' => 24, 'CreatedBy' => 25, 'DateCreated' => 26, 'ModifiedBy' => 27, 'DateModified' => 28, ),
		BasePeer::TYPE_COLNAME => array (TkWorktemplatePeer::ID => 0, TkWorktemplatePeer::WORKTEMP_NO => 1, TkWorktemplatePeer::DESCRIPTION => 2, TkWorktemplatePeer::FISCAL_YEAR => 3, TkWorktemplatePeer::AM_PM_EV => 4, TkWorktemplatePeer::DAYOFF => 5, TkWorktemplatePeer::DAYOFF_DAY => 6, TkWorktemplatePeer::TEMPLATE => 7, TkWorktemplatePeer::HRS_PER_DAY => 8, TkWorktemplatePeer::HRS_PER_WEEK => 9, TkWorktemplatePeer::DAYS_PER_MONTH => 10, TkWorktemplatePeer::ACCT_CODE => 11, TkWorktemplatePeer::ACCT_DESC => 12, TkWorktemplatePeer::ALLOWANCE_DAYS => 13, TkWorktemplatePeer::MEALBREAK => 14, TkWorktemplatePeer::ALLOWANCE_AMT => 15, TkWorktemplatePeer::BASE_NOHOURS => 16, TkWorktemplatePeer::TIMEIN_ALLOWANCE => 17, TkWorktemplatePeer::TIMEOUT_ALLOWANCE => 18, TkWorktemplatePeer::ENDURANCE => 19, TkWorktemplatePeer::OT1 => 20, TkWorktemplatePeer::OT2 => 21, TkWorktemplatePeer::OT3 => 22, TkWorktemplatePeer::MIN_OT => 23, TkWorktemplatePeer::MIN_TIME => 24, TkWorktemplatePeer::CREATED_BY => 25, TkWorktemplatePeer::DATE_CREATED => 26, TkWorktemplatePeer::MODIFIED_BY => 27, TkWorktemplatePeer::DATE_MODIFIED => 28, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'worktemp_no' => 1, 'description' => 2, 'fiscal_year' => 3, 'am_pm_ev' => 4, 'dayoff' => 5, 'dayoff_day' => 6, 'template' => 7, 'hrs_per_day' => 8, 'hrs_per_week' => 9, 'days_per_month' => 10, 'acct_code' => 11, 'acct_desc' => 12, 'allowance_days' => 13, 'mealbreak' => 14, 'allowance_amt' => 15, 'base_nohours' => 16, 'timein_allowance' => 17, 'timeout_allowance' => 18, 'endurance' => 19, 'ot1' => 20, 'ot2' => 21, 'ot3' => 22, 'min_ot' => 23, 'min_time' => 24, 'created_by' => 25, 'date_created' => 26, 'modified_by' => 27, 'date_modified' => 28, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/TkWorktemplateMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.TkWorktemplateMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TkWorktemplatePeer::getTableMap();
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
		return str_replace(TkWorktemplatePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TkWorktemplatePeer::ID);

		$criteria->addSelectColumn(TkWorktemplatePeer::WORKTEMP_NO);

		$criteria->addSelectColumn(TkWorktemplatePeer::DESCRIPTION);

		$criteria->addSelectColumn(TkWorktemplatePeer::FISCAL_YEAR);

		$criteria->addSelectColumn(TkWorktemplatePeer::AM_PM_EV);

		$criteria->addSelectColumn(TkWorktemplatePeer::DAYOFF);

		$criteria->addSelectColumn(TkWorktemplatePeer::DAYOFF_DAY);

		$criteria->addSelectColumn(TkWorktemplatePeer::TEMPLATE);

		$criteria->addSelectColumn(TkWorktemplatePeer::HRS_PER_DAY);

		$criteria->addSelectColumn(TkWorktemplatePeer::HRS_PER_WEEK);

		$criteria->addSelectColumn(TkWorktemplatePeer::DAYS_PER_MONTH);

		$criteria->addSelectColumn(TkWorktemplatePeer::ACCT_CODE);

		$criteria->addSelectColumn(TkWorktemplatePeer::ACCT_DESC);

		$criteria->addSelectColumn(TkWorktemplatePeer::ALLOWANCE_DAYS);

		$criteria->addSelectColumn(TkWorktemplatePeer::MEALBREAK);

		$criteria->addSelectColumn(TkWorktemplatePeer::ALLOWANCE_AMT);

		$criteria->addSelectColumn(TkWorktemplatePeer::BASE_NOHOURS);

		$criteria->addSelectColumn(TkWorktemplatePeer::TIMEIN_ALLOWANCE);

		$criteria->addSelectColumn(TkWorktemplatePeer::TIMEOUT_ALLOWANCE);

		$criteria->addSelectColumn(TkWorktemplatePeer::ENDURANCE);

		$criteria->addSelectColumn(TkWorktemplatePeer::OT1);

		$criteria->addSelectColumn(TkWorktemplatePeer::OT2);

		$criteria->addSelectColumn(TkWorktemplatePeer::OT3);

		$criteria->addSelectColumn(TkWorktemplatePeer::MIN_OT);

		$criteria->addSelectColumn(TkWorktemplatePeer::MIN_TIME);

		$criteria->addSelectColumn(TkWorktemplatePeer::CREATED_BY);

		$criteria->addSelectColumn(TkWorktemplatePeer::DATE_CREATED);

		$criteria->addSelectColumn(TkWorktemplatePeer::MODIFIED_BY);

		$criteria->addSelectColumn(TkWorktemplatePeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(tk_worktemplate.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tk_worktemplate.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TkWorktemplatePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TkWorktemplatePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TkWorktemplatePeer::doSelectRS($criteria, $con);
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
		$objects = TkWorktemplatePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TkWorktemplatePeer::populateObjects(TkWorktemplatePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TkWorktemplatePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TkWorktemplatePeer::getOMClass();
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
		return TkWorktemplatePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TkWorktemplatePeer::ID); 

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
			$comparison = $criteria->getComparison(TkWorktemplatePeer::ID);
			$selectCriteria->add(TkWorktemplatePeer::ID, $criteria->remove(TkWorktemplatePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TkWorktemplatePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TkWorktemplatePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TkWorktemplate) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TkWorktemplatePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TkWorktemplate $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TkWorktemplatePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TkWorktemplatePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TkWorktemplatePeer::DATABASE_NAME, TkWorktemplatePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TkWorktemplatePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(TkWorktemplatePeer::DATABASE_NAME);

		$criteria->add(TkWorktemplatePeer::ID, $pk);


		$v = TkWorktemplatePeer::doSelect($criteria, $con);

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
			$criteria->add(TkWorktemplatePeer::ID, $pks, Criteria::IN);
			$objs = TkWorktemplatePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTkWorktemplatePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/TkWorktemplateMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.TkWorktemplateMapBuilder');
}

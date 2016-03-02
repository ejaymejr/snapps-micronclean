<?php


abstract class BaseTkDtrmasterPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'tk_dtrmaster';

	
	const CLASS_DEFAULT = 'lib.model.hr.TkDtrmaster';

	
	const NUM_COLUMNS = 15;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'tk_dtrmaster.ID';

	
	const EMPLOYEE_NO = 'tk_dtrmaster.EMPLOYEE_NO';

	
	const COMPANY = 'tk_dtrmaster.COMPANY';

	
	const NAME = 'tk_dtrmaster.NAME';

	
	const AM_TIME_IN = 'tk_dtrmaster.AM_TIME_IN';

	
	const PM_TIME_OUT = 'tk_dtrmaster.PM_TIME_OUT';

	
	const TYPE_OF_EMPLOYMENT = 'tk_dtrmaster.TYPE_OF_EMPLOYMENT';

	
	const DEPARTMENT = 'tk_dtrmaster.DEPARTMENT';

	
	const TK_WORKTEMPLATE_NO = 'tk_dtrmaster.TK_WORKTEMPLATE_NO';

	
	const HR_COMPANY_ID = 'tk_dtrmaster.HR_COMPANY_ID';

	
	const HR_DEPARTMENT_ID = 'tk_dtrmaster.HR_DEPARTMENT_ID';

	
	const CREATED_BY = 'tk_dtrmaster.CREATED_BY';

	
	const DATE_CREATED = 'tk_dtrmaster.DATE_CREATED';

	
	const MODIFIED_BY = 'tk_dtrmaster.MODIFIED_BY';

	
	const DATE_MODIFIED = 'tk_dtrmaster.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'EmployeeNo', 'Company', 'Name', 'AmTimeIn', 'PmTimeOut', 'TypeOfEmployment', 'Department', 'TkWorktemplateNo', 'HrCompanyId', 'HrDepartmentId', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (TkDtrmasterPeer::ID, TkDtrmasterPeer::EMPLOYEE_NO, TkDtrmasterPeer::COMPANY, TkDtrmasterPeer::NAME, TkDtrmasterPeer::AM_TIME_IN, TkDtrmasterPeer::PM_TIME_OUT, TkDtrmasterPeer::TYPE_OF_EMPLOYMENT, TkDtrmasterPeer::DEPARTMENT, TkDtrmasterPeer::TK_WORKTEMPLATE_NO, TkDtrmasterPeer::HR_COMPANY_ID, TkDtrmasterPeer::HR_DEPARTMENT_ID, TkDtrmasterPeer::CREATED_BY, TkDtrmasterPeer::DATE_CREATED, TkDtrmasterPeer::MODIFIED_BY, TkDtrmasterPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'employee_no', 'company', 'name', 'am_time_in', 'pm_time_out', 'type_of_employment', 'department', 'tk_worktemplate_no', 'hr_company_id', 'hr_department_id', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'EmployeeNo' => 1, 'Company' => 2, 'Name' => 3, 'AmTimeIn' => 4, 'PmTimeOut' => 5, 'TypeOfEmployment' => 6, 'Department' => 7, 'TkWorktemplateNo' => 8, 'HrCompanyId' => 9, 'HrDepartmentId' => 10, 'CreatedBy' => 11, 'DateCreated' => 12, 'ModifiedBy' => 13, 'DateModified' => 14, ),
		BasePeer::TYPE_COLNAME => array (TkDtrmasterPeer::ID => 0, TkDtrmasterPeer::EMPLOYEE_NO => 1, TkDtrmasterPeer::COMPANY => 2, TkDtrmasterPeer::NAME => 3, TkDtrmasterPeer::AM_TIME_IN => 4, TkDtrmasterPeer::PM_TIME_OUT => 5, TkDtrmasterPeer::TYPE_OF_EMPLOYMENT => 6, TkDtrmasterPeer::DEPARTMENT => 7, TkDtrmasterPeer::TK_WORKTEMPLATE_NO => 8, TkDtrmasterPeer::HR_COMPANY_ID => 9, TkDtrmasterPeer::HR_DEPARTMENT_ID => 10, TkDtrmasterPeer::CREATED_BY => 11, TkDtrmasterPeer::DATE_CREATED => 12, TkDtrmasterPeer::MODIFIED_BY => 13, TkDtrmasterPeer::DATE_MODIFIED => 14, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'employee_no' => 1, 'company' => 2, 'name' => 3, 'am_time_in' => 4, 'pm_time_out' => 5, 'type_of_employment' => 6, 'department' => 7, 'tk_worktemplate_no' => 8, 'hr_company_id' => 9, 'hr_department_id' => 10, 'created_by' => 11, 'date_created' => 12, 'modified_by' => 13, 'date_modified' => 14, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/TkDtrmasterMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.TkDtrmasterMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TkDtrmasterPeer::getTableMap();
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
		return str_replace(TkDtrmasterPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TkDtrmasterPeer::ID);

		$criteria->addSelectColumn(TkDtrmasterPeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(TkDtrmasterPeer::COMPANY);

		$criteria->addSelectColumn(TkDtrmasterPeer::NAME);

		$criteria->addSelectColumn(TkDtrmasterPeer::AM_TIME_IN);

		$criteria->addSelectColumn(TkDtrmasterPeer::PM_TIME_OUT);

		$criteria->addSelectColumn(TkDtrmasterPeer::TYPE_OF_EMPLOYMENT);

		$criteria->addSelectColumn(TkDtrmasterPeer::DEPARTMENT);

		$criteria->addSelectColumn(TkDtrmasterPeer::TK_WORKTEMPLATE_NO);

		$criteria->addSelectColumn(TkDtrmasterPeer::HR_COMPANY_ID);

		$criteria->addSelectColumn(TkDtrmasterPeer::HR_DEPARTMENT_ID);

		$criteria->addSelectColumn(TkDtrmasterPeer::CREATED_BY);

		$criteria->addSelectColumn(TkDtrmasterPeer::DATE_CREATED);

		$criteria->addSelectColumn(TkDtrmasterPeer::MODIFIED_BY);

		$criteria->addSelectColumn(TkDtrmasterPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(tk_dtrmaster.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tk_dtrmaster.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TkDtrmasterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TkDtrmasterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TkDtrmasterPeer::doSelectRS($criteria, $con);
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
		$objects = TkDtrmasterPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TkDtrmasterPeer::populateObjects(TkDtrmasterPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TkDtrmasterPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TkDtrmasterPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinHrCompany(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TkDtrmasterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TkDtrmasterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TkDtrmasterPeer::HR_COMPANY_ID, HrCompanyPeer::ID);

		$rs = TkDtrmasterPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinHrDepartment(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TkDtrmasterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TkDtrmasterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TkDtrmasterPeer::HR_DEPARTMENT_ID, HrDepartmentPeer::ID);

		$rs = TkDtrmasterPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinHrCompany(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TkDtrmasterPeer::addSelectColumns($c);
		$startcol = (TkDtrmasterPeer::NUM_COLUMNS - TkDtrmasterPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		HrCompanyPeer::addSelectColumns($c);

		$c->addJoin(TkDtrmasterPeer::HR_COMPANY_ID, HrCompanyPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TkDtrmasterPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = HrCompanyPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getHrCompany(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTkDtrmaster($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTkDtrmasters();
				$obj2->addTkDtrmaster($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinHrDepartment(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TkDtrmasterPeer::addSelectColumns($c);
		$startcol = (TkDtrmasterPeer::NUM_COLUMNS - TkDtrmasterPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		HrDepartmentPeer::addSelectColumns($c);

		$c->addJoin(TkDtrmasterPeer::HR_DEPARTMENT_ID, HrDepartmentPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TkDtrmasterPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = HrDepartmentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getHrDepartment(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTkDtrmaster($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTkDtrmasters();
				$obj2->addTkDtrmaster($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TkDtrmasterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TkDtrmasterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TkDtrmasterPeer::HR_COMPANY_ID, HrCompanyPeer::ID);

		$criteria->addJoin(TkDtrmasterPeer::HR_DEPARTMENT_ID, HrDepartmentPeer::ID);

		$rs = TkDtrmasterPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TkDtrmasterPeer::addSelectColumns($c);
		$startcol2 = (TkDtrmasterPeer::NUM_COLUMNS - TkDtrmasterPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		HrCompanyPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + HrCompanyPeer::NUM_COLUMNS;

		HrDepartmentPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + HrDepartmentPeer::NUM_COLUMNS;

		$c->addJoin(TkDtrmasterPeer::HR_COMPANY_ID, HrCompanyPeer::ID);

		$c->addJoin(TkDtrmasterPeer::HR_DEPARTMENT_ID, HrDepartmentPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TkDtrmasterPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = HrCompanyPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getHrCompany(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addTkDtrmaster($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initTkDtrmasters();
				$obj2->addTkDtrmaster($obj1);
			}


					
			$omClass = HrDepartmentPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getHrDepartment(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addTkDtrmaster($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initTkDtrmasters();
				$obj3->addTkDtrmaster($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptHrCompany(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TkDtrmasterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TkDtrmasterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TkDtrmasterPeer::HR_DEPARTMENT_ID, HrDepartmentPeer::ID);

		$rs = TkDtrmasterPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptHrDepartment(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TkDtrmasterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TkDtrmasterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TkDtrmasterPeer::HR_COMPANY_ID, HrCompanyPeer::ID);

		$rs = TkDtrmasterPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptHrCompany(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TkDtrmasterPeer::addSelectColumns($c);
		$startcol2 = (TkDtrmasterPeer::NUM_COLUMNS - TkDtrmasterPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		HrDepartmentPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + HrDepartmentPeer::NUM_COLUMNS;

		$c->addJoin(TkDtrmasterPeer::HR_DEPARTMENT_ID, HrDepartmentPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TkDtrmasterPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = HrDepartmentPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getHrDepartment(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addTkDtrmaster($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTkDtrmasters();
				$obj2->addTkDtrmaster($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptHrDepartment(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TkDtrmasterPeer::addSelectColumns($c);
		$startcol2 = (TkDtrmasterPeer::NUM_COLUMNS - TkDtrmasterPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		HrCompanyPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + HrCompanyPeer::NUM_COLUMNS;

		$c->addJoin(TkDtrmasterPeer::HR_COMPANY_ID, HrCompanyPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TkDtrmasterPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = HrCompanyPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getHrCompany(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addTkDtrmaster($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTkDtrmasters();
				$obj2->addTkDtrmaster($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}

	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return TkDtrmasterPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TkDtrmasterPeer::ID); 

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
			$comparison = $criteria->getComparison(TkDtrmasterPeer::ID);
			$selectCriteria->add(TkDtrmasterPeer::ID, $criteria->remove(TkDtrmasterPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TkDtrmasterPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TkDtrmasterPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TkDtrmaster) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TkDtrmasterPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TkDtrmaster $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TkDtrmasterPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TkDtrmasterPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TkDtrmasterPeer::DATABASE_NAME, TkDtrmasterPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TkDtrmasterPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(TkDtrmasterPeer::DATABASE_NAME);

		$criteria->add(TkDtrmasterPeer::ID, $pk);


		$v = TkDtrmasterPeer::doSelect($criteria, $con);

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
			$criteria->add(TkDtrmasterPeer::ID, $pks, Criteria::IN);
			$objs = TkDtrmasterPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTkDtrmasterPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/TkDtrmasterMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.TkDtrmasterMapBuilder');
}

<?php


abstract class BaseHrEmployeeEducationPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'hr_employee_education';

	
	const CLASS_DEFAULT = 'lib.model.hr.HrEmployeeEducation';

	
	const NUM_COLUMNS = 17;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_employee_education.ID';

	
	const EMPLOYEE_NO = 'hr_employee_education.EMPLOYEE_NO';

	
	const NAME = 'hr_employee_education.NAME';

	
	const PRIMARY = 'hr_employee_education.PRIMARY';

	
	const PRIMARY_GRADE = 'hr_employee_education.PRIMARY_GRADE';

	
	const SECONDARY = 'hr_employee_education.SECONDARY';

	
	const SECONDARY_GRADE = 'hr_employee_education.SECONDARY_GRADE';

	
	const TERTIARY = 'hr_employee_education.TERTIARY';

	
	const TERTIARY_GRADE = 'hr_employee_education.TERTIARY_GRADE';

	
	const JR_COLLEGE = 'hr_employee_education.JR_COLLEGE';

	
	const JR_COLLEGE_GRADE = 'hr_employee_education.JR_COLLEGE_GRADE';

	
	const POST_GRADUATE = 'hr_employee_education.POST_GRADUATE';

	
	const POST_GRADUATE_GRADE = 'hr_employee_education.POST_GRADUATE_GRADE';

	
	const CREATED_BY = 'hr_employee_education.CREATED_BY';

	
	const DATE_CREATED = 'hr_employee_education.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_employee_education.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_employee_education.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'EmployeeNo', 'Name', 'Primary', 'PrimaryGrade', 'Secondary', 'SecondaryGrade', 'Tertiary', 'TertiaryGrade', 'JrCollege', 'JrCollegeGrade', 'PostGraduate', 'PostGraduateGrade', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrEmployeeEducationPeer::ID, HrEmployeeEducationPeer::EMPLOYEE_NO, HrEmployeeEducationPeer::NAME, HrEmployeeEducationPeer::PRIMARY, HrEmployeeEducationPeer::PRIMARY_GRADE, HrEmployeeEducationPeer::SECONDARY, HrEmployeeEducationPeer::SECONDARY_GRADE, HrEmployeeEducationPeer::TERTIARY, HrEmployeeEducationPeer::TERTIARY_GRADE, HrEmployeeEducationPeer::JR_COLLEGE, HrEmployeeEducationPeer::JR_COLLEGE_GRADE, HrEmployeeEducationPeer::POST_GRADUATE, HrEmployeeEducationPeer::POST_GRADUATE_GRADE, HrEmployeeEducationPeer::CREATED_BY, HrEmployeeEducationPeer::DATE_CREATED, HrEmployeeEducationPeer::MODIFIED_BY, HrEmployeeEducationPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'employee_no', 'name', 'primary', 'primary_grade', 'secondary', 'secondary_grade', 'tertiary', 'tertiary_grade', 'jr_college', 'jr_college_grade', 'post_graduate', 'post_graduate_grade', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'EmployeeNo' => 1, 'Name' => 2, 'Primary' => 3, 'PrimaryGrade' => 4, 'Secondary' => 5, 'SecondaryGrade' => 6, 'Tertiary' => 7, 'TertiaryGrade' => 8, 'JrCollege' => 9, 'JrCollegeGrade' => 10, 'PostGraduate' => 11, 'PostGraduateGrade' => 12, 'CreatedBy' => 13, 'DateCreated' => 14, 'ModifiedBy' => 15, 'DateModified' => 16, ),
		BasePeer::TYPE_COLNAME => array (HrEmployeeEducationPeer::ID => 0, HrEmployeeEducationPeer::EMPLOYEE_NO => 1, HrEmployeeEducationPeer::NAME => 2, HrEmployeeEducationPeer::PRIMARY => 3, HrEmployeeEducationPeer::PRIMARY_GRADE => 4, HrEmployeeEducationPeer::SECONDARY => 5, HrEmployeeEducationPeer::SECONDARY_GRADE => 6, HrEmployeeEducationPeer::TERTIARY => 7, HrEmployeeEducationPeer::TERTIARY_GRADE => 8, HrEmployeeEducationPeer::JR_COLLEGE => 9, HrEmployeeEducationPeer::JR_COLLEGE_GRADE => 10, HrEmployeeEducationPeer::POST_GRADUATE => 11, HrEmployeeEducationPeer::POST_GRADUATE_GRADE => 12, HrEmployeeEducationPeer::CREATED_BY => 13, HrEmployeeEducationPeer::DATE_CREATED => 14, HrEmployeeEducationPeer::MODIFIED_BY => 15, HrEmployeeEducationPeer::DATE_MODIFIED => 16, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'employee_no' => 1, 'name' => 2, 'primary' => 3, 'primary_grade' => 4, 'secondary' => 5, 'secondary_grade' => 6, 'tertiary' => 7, 'tertiary_grade' => 8, 'jr_college' => 9, 'jr_college_grade' => 10, 'post_graduate' => 11, 'post_graduate_grade' => 12, 'created_by' => 13, 'date_created' => 14, 'modified_by' => 15, 'date_modified' => 16, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/HrEmployeeEducationMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.HrEmployeeEducationMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrEmployeeEducationPeer::getTableMap();
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
		return str_replace(HrEmployeeEducationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrEmployeeEducationPeer::ID);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::NAME);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::PRIMARY);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::PRIMARY_GRADE);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::SECONDARY);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::SECONDARY_GRADE);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::TERTIARY);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::TERTIARY_GRADE);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::JR_COLLEGE);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::JR_COLLEGE_GRADE);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::POST_GRADUATE);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::POST_GRADUATE_GRADE);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::CREATED_BY);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::DATE_CREATED);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrEmployeeEducationPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_employee_education.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_employee_education.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrEmployeeEducationPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrEmployeeEducationPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrEmployeeEducationPeer::doSelectRS($criteria, $con);
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
		$objects = HrEmployeeEducationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrEmployeeEducationPeer::populateObjects(HrEmployeeEducationPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrEmployeeEducationPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrEmployeeEducationPeer::getOMClass();
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
		return HrEmployeeEducationPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrEmployeeEducationPeer::ID); 

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
			$comparison = $criteria->getComparison(HrEmployeeEducationPeer::ID);
			$selectCriteria->add(HrEmployeeEducationPeer::ID, $criteria->remove(HrEmployeeEducationPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrEmployeeEducationPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrEmployeeEducationPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrEmployeeEducation) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrEmployeeEducationPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrEmployeeEducation $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrEmployeeEducationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrEmployeeEducationPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrEmployeeEducationPeer::DATABASE_NAME, HrEmployeeEducationPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrEmployeeEducationPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrEmployeeEducationPeer::DATABASE_NAME);

		$criteria->add(HrEmployeeEducationPeer::ID, $pk);


		$v = HrEmployeeEducationPeer::doSelect($criteria, $con);

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
			$criteria->add(HrEmployeeEducationPeer::ID, $pks, Criteria::IN);
			$objs = HrEmployeeEducationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrEmployeeEducationPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/HrEmployeeEducationMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.HrEmployeeEducationMapBuilder');
}

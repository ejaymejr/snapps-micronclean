<?php


abstract class BaseSmsServiceToEmployeePeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'sms_service_to_employee';

	
	const CLASS_DEFAULT = 'lib.model.hr.SmsServiceToEmployee';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'sms_service_to_employee.ID';

	
	const TRANS_DATE = 'sms_service_to_employee.TRANS_DATE';

	
	const EMPLOYEE_NO = 'sms_service_to_employee.EMPLOYEE_NO';

	
	const SERVICE_CODE = 'sms_service_to_employee.SERVICE_CODE';

	
	const REMARKS = 'sms_service_to_employee.REMARKS';

	
	const CREATED_BY = 'sms_service_to_employee.CREATED_BY';

	
	const DATE_CREATED = 'sms_service_to_employee.DATE_CREATED';

	
	const MODIFIED_BY = 'sms_service_to_employee.MODIFIED_BY';

	
	const DATE_MODIFIED = 'sms_service_to_employee.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'EmployeeNo', 'ServiceCode', 'Remarks', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (SmsServiceToEmployeePeer::ID, SmsServiceToEmployeePeer::TRANS_DATE, SmsServiceToEmployeePeer::EMPLOYEE_NO, SmsServiceToEmployeePeer::SERVICE_CODE, SmsServiceToEmployeePeer::REMARKS, SmsServiceToEmployeePeer::CREATED_BY, SmsServiceToEmployeePeer::DATE_CREATED, SmsServiceToEmployeePeer::MODIFIED_BY, SmsServiceToEmployeePeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'employee_no', 'service_code', 'remarks', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'EmployeeNo' => 2, 'ServiceCode' => 3, 'Remarks' => 4, 'CreatedBy' => 5, 'DateCreated' => 6, 'ModifiedBy' => 7, 'DateModified' => 8, ),
		BasePeer::TYPE_COLNAME => array (SmsServiceToEmployeePeer::ID => 0, SmsServiceToEmployeePeer::TRANS_DATE => 1, SmsServiceToEmployeePeer::EMPLOYEE_NO => 2, SmsServiceToEmployeePeer::SERVICE_CODE => 3, SmsServiceToEmployeePeer::REMARKS => 4, SmsServiceToEmployeePeer::CREATED_BY => 5, SmsServiceToEmployeePeer::DATE_CREATED => 6, SmsServiceToEmployeePeer::MODIFIED_BY => 7, SmsServiceToEmployeePeer::DATE_MODIFIED => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'employee_no' => 2, 'service_code' => 3, 'remarks' => 4, 'created_by' => 5, 'date_created' => 6, 'modified_by' => 7, 'date_modified' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/SmsServiceToEmployeeMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.SmsServiceToEmployeeMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SmsServiceToEmployeePeer::getTableMap();
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
		return str_replace(SmsServiceToEmployeePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SmsServiceToEmployeePeer::ID);

		$criteria->addSelectColumn(SmsServiceToEmployeePeer::TRANS_DATE);

		$criteria->addSelectColumn(SmsServiceToEmployeePeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(SmsServiceToEmployeePeer::SERVICE_CODE);

		$criteria->addSelectColumn(SmsServiceToEmployeePeer::REMARKS);

		$criteria->addSelectColumn(SmsServiceToEmployeePeer::CREATED_BY);

		$criteria->addSelectColumn(SmsServiceToEmployeePeer::DATE_CREATED);

		$criteria->addSelectColumn(SmsServiceToEmployeePeer::MODIFIED_BY);

		$criteria->addSelectColumn(SmsServiceToEmployeePeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(sms_service_to_employee.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT sms_service_to_employee.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SmsServiceToEmployeePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SmsServiceToEmployeePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SmsServiceToEmployeePeer::doSelectRS($criteria, $con);
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
		$objects = SmsServiceToEmployeePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SmsServiceToEmployeePeer::populateObjects(SmsServiceToEmployeePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SmsServiceToEmployeePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SmsServiceToEmployeePeer::getOMClass();
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
		return SmsServiceToEmployeePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SmsServiceToEmployeePeer::ID); 

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
			$comparison = $criteria->getComparison(SmsServiceToEmployeePeer::ID);
			$selectCriteria->add(SmsServiceToEmployeePeer::ID, $criteria->remove(SmsServiceToEmployeePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SmsServiceToEmployeePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SmsServiceToEmployeePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SmsServiceToEmployee) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SmsServiceToEmployeePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SmsServiceToEmployee $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SmsServiceToEmployeePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SmsServiceToEmployeePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SmsServiceToEmployeePeer::DATABASE_NAME, SmsServiceToEmployeePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SmsServiceToEmployeePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SmsServiceToEmployeePeer::DATABASE_NAME);

		$criteria->add(SmsServiceToEmployeePeer::ID, $pk);


		$v = SmsServiceToEmployeePeer::doSelect($criteria, $con);

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
			$criteria->add(SmsServiceToEmployeePeer::ID, $pks, Criteria::IN);
			$objs = SmsServiceToEmployeePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSmsServiceToEmployeePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/SmsServiceToEmployeeMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.SmsServiceToEmployeeMapBuilder');
}

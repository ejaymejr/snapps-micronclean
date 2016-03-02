<?php


abstract class BaseHrEmployeeMasterPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'hr_employee_master';

	
	const CLASS_DEFAULT = 'lib.model.particle.HrEmployeeMaster';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_employee_master.ID';

	
	const EMPLOYEE_NO = 'hr_employee_master.EMPLOYEE_NO';

	
	const NAME = 'hr_employee_master.NAME';

	
	const COMPANY = 'hr_employee_master.COMPANY';

	
	const COMMENCE_DATE = 'hr_employee_master.COMMENCE_DATE';

	
	const CREATED_BY = 'hr_employee_master.CREATED_BY';

	
	const DATE_CREATED = 'hr_employee_master.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_employee_master.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_employee_master.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'EmployeeNo', 'Name', 'Company', 'CommenceDate', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrEmployeeMasterPeer::ID, HrEmployeeMasterPeer::EMPLOYEE_NO, HrEmployeeMasterPeer::NAME, HrEmployeeMasterPeer::COMPANY, HrEmployeeMasterPeer::COMMENCE_DATE, HrEmployeeMasterPeer::CREATED_BY, HrEmployeeMasterPeer::DATE_CREATED, HrEmployeeMasterPeer::MODIFIED_BY, HrEmployeeMasterPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'employee_no', 'name', 'company', 'commence_date', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'EmployeeNo' => 1, 'Name' => 2, 'Company' => 3, 'CommenceDate' => 4, 'CreatedBy' => 5, 'DateCreated' => 6, 'ModifiedBy' => 7, 'DateModified' => 8, ),
		BasePeer::TYPE_COLNAME => array (HrEmployeeMasterPeer::ID => 0, HrEmployeeMasterPeer::EMPLOYEE_NO => 1, HrEmployeeMasterPeer::NAME => 2, HrEmployeeMasterPeer::COMPANY => 3, HrEmployeeMasterPeer::COMMENCE_DATE => 4, HrEmployeeMasterPeer::CREATED_BY => 5, HrEmployeeMasterPeer::DATE_CREATED => 6, HrEmployeeMasterPeer::MODIFIED_BY => 7, HrEmployeeMasterPeer::DATE_MODIFIED => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'employee_no' => 1, 'name' => 2, 'company' => 3, 'commence_date' => 4, 'created_by' => 5, 'date_created' => 6, 'modified_by' => 7, 'date_modified' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/HrEmployeeMasterMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.HrEmployeeMasterMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrEmployeeMasterPeer::getTableMap();
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
		return str_replace(HrEmployeeMasterPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrEmployeeMasterPeer::ID);

		$criteria->addSelectColumn(HrEmployeeMasterPeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(HrEmployeeMasterPeer::NAME);

		$criteria->addSelectColumn(HrEmployeeMasterPeer::COMPANY);

		$criteria->addSelectColumn(HrEmployeeMasterPeer::COMMENCE_DATE);

		$criteria->addSelectColumn(HrEmployeeMasterPeer::CREATED_BY);

		$criteria->addSelectColumn(HrEmployeeMasterPeer::DATE_CREATED);

		$criteria->addSelectColumn(HrEmployeeMasterPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrEmployeeMasterPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_employee_master.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_employee_master.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrEmployeeMasterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrEmployeeMasterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrEmployeeMasterPeer::doSelectRS($criteria, $con);
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
		$objects = HrEmployeeMasterPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrEmployeeMasterPeer::populateObjects(HrEmployeeMasterPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrEmployeeMasterPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrEmployeeMasterPeer::getOMClass();
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
		return HrEmployeeMasterPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrEmployeeMasterPeer::ID); 

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
			$comparison = $criteria->getComparison(HrEmployeeMasterPeer::ID);
			$selectCriteria->add(HrEmployeeMasterPeer::ID, $criteria->remove(HrEmployeeMasterPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrEmployeeMasterPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrEmployeeMasterPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrEmployeeMaster) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrEmployeeMasterPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrEmployeeMaster $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrEmployeeMasterPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrEmployeeMasterPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrEmployeeMasterPeer::DATABASE_NAME, HrEmployeeMasterPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrEmployeeMasterPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrEmployeeMasterPeer::DATABASE_NAME);

		$criteria->add(HrEmployeeMasterPeer::ID, $pk);


		$v = HrEmployeeMasterPeer::doSelect($criteria, $con);

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
			$criteria->add(HrEmployeeMasterPeer::ID, $pks, Criteria::IN);
			$objs = HrEmployeeMasterPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrEmployeeMasterPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/HrEmployeeMasterMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.HrEmployeeMasterMapBuilder');
}

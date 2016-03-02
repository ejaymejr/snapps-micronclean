<?php


abstract class BaseHrLeaveApproverPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'hr_leave_approver';

	
	const CLASS_DEFAULT = 'lib.model.hr.HrLeaveApprover';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_leave_approver.ID';

	
	const EMPLOYEE_NO = 'hr_leave_approver.EMPLOYEE_NO';

	
	const NAME = 'hr_leave_approver.NAME';

	
	const APPROVER = 'hr_leave_approver.APPROVER';

	
	const VERIFIER = 'hr_leave_approver.VERIFIER';

	
	const CREATED_BY = 'hr_leave_approver.CREATED_BY';

	
	const DATE_CREATED = 'hr_leave_approver.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_leave_approver.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_leave_approver.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'EmployeeNo', 'Name', 'Approver', 'Verifier', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrLeaveApproverPeer::ID, HrLeaveApproverPeer::EMPLOYEE_NO, HrLeaveApproverPeer::NAME, HrLeaveApproverPeer::APPROVER, HrLeaveApproverPeer::VERIFIER, HrLeaveApproverPeer::CREATED_BY, HrLeaveApproverPeer::DATE_CREATED, HrLeaveApproverPeer::MODIFIED_BY, HrLeaveApproverPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'employee_no', 'name', 'approver', 'verifier', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'EmployeeNo' => 1, 'Name' => 2, 'Approver' => 3, 'Verifier' => 4, 'CreatedBy' => 5, 'DateCreated' => 6, 'ModifiedBy' => 7, 'DateModified' => 8, ),
		BasePeer::TYPE_COLNAME => array (HrLeaveApproverPeer::ID => 0, HrLeaveApproverPeer::EMPLOYEE_NO => 1, HrLeaveApproverPeer::NAME => 2, HrLeaveApproverPeer::APPROVER => 3, HrLeaveApproverPeer::VERIFIER => 4, HrLeaveApproverPeer::CREATED_BY => 5, HrLeaveApproverPeer::DATE_CREATED => 6, HrLeaveApproverPeer::MODIFIED_BY => 7, HrLeaveApproverPeer::DATE_MODIFIED => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'employee_no' => 1, 'name' => 2, 'approver' => 3, 'verifier' => 4, 'created_by' => 5, 'date_created' => 6, 'modified_by' => 7, 'date_modified' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/HrLeaveApproverMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.HrLeaveApproverMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrLeaveApproverPeer::getTableMap();
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
		return str_replace(HrLeaveApproverPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrLeaveApproverPeer::ID);

		$criteria->addSelectColumn(HrLeaveApproverPeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(HrLeaveApproverPeer::NAME);

		$criteria->addSelectColumn(HrLeaveApproverPeer::APPROVER);

		$criteria->addSelectColumn(HrLeaveApproverPeer::VERIFIER);

		$criteria->addSelectColumn(HrLeaveApproverPeer::CREATED_BY);

		$criteria->addSelectColumn(HrLeaveApproverPeer::DATE_CREATED);

		$criteria->addSelectColumn(HrLeaveApproverPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrLeaveApproverPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_leave_approver.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_leave_approver.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrLeaveApproverPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrLeaveApproverPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrLeaveApproverPeer::doSelectRS($criteria, $con);
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
		$objects = HrLeaveApproverPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrLeaveApproverPeer::populateObjects(HrLeaveApproverPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrLeaveApproverPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrLeaveApproverPeer::getOMClass();
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
		return HrLeaveApproverPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrLeaveApproverPeer::ID); 

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
			$comparison = $criteria->getComparison(HrLeaveApproverPeer::ID);
			$selectCriteria->add(HrLeaveApproverPeer::ID, $criteria->remove(HrLeaveApproverPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrLeaveApproverPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrLeaveApproverPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrLeaveApprover) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrLeaveApproverPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrLeaveApprover $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrLeaveApproverPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrLeaveApproverPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrLeaveApproverPeer::DATABASE_NAME, HrLeaveApproverPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrLeaveApproverPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrLeaveApproverPeer::DATABASE_NAME);

		$criteria->add(HrLeaveApproverPeer::ID, $pk);


		$v = HrLeaveApproverPeer::doSelect($criteria, $con);

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
			$criteria->add(HrLeaveApproverPeer::ID, $pks, Criteria::IN);
			$objs = HrLeaveApproverPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrLeaveApproverPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/HrLeaveApproverMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.HrLeaveApproverMapBuilder');
}

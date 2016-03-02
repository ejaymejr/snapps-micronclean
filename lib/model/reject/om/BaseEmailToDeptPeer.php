<?php


abstract class BaseEmailToDeptPeer {

	
	const DATABASE_NAME = 'reject_photo';

	
	const TABLE_NAME = 'email_to_dept';

	
	const CLASS_DEFAULT = 'lib.model.reject.EmailToDept';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'email_to_dept.ID';

	
	const EMAIL_ADDRESS = 'email_to_dept.EMAIL_ADDRESS';

	
	const COMPANY = 'email_to_dept.COMPANY';

	
	const DEPARTMENT = 'email_to_dept.DEPARTMENT';

	
	const SHIFT = 'email_to_dept.SHIFT';

	
	const DATE_CREATED = 'email_to_dept.DATE_CREATED';

	
	const CREATED_BY = 'email_to_dept.CREATED_BY';

	
	const DATE_MODIFIED = 'email_to_dept.DATE_MODIFIED';

	
	const MODIFIED_BY = 'email_to_dept.MODIFIED_BY';

	
	const DESIGNATION = 'email_to_dept.DESIGNATION';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'EmailAddress', 'Company', 'Department', 'Shift', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', 'Designation', ),
		BasePeer::TYPE_COLNAME => array (EmailToDeptPeer::ID, EmailToDeptPeer::EMAIL_ADDRESS, EmailToDeptPeer::COMPANY, EmailToDeptPeer::DEPARTMENT, EmailToDeptPeer::SHIFT, EmailToDeptPeer::DATE_CREATED, EmailToDeptPeer::CREATED_BY, EmailToDeptPeer::DATE_MODIFIED, EmailToDeptPeer::MODIFIED_BY, EmailToDeptPeer::DESIGNATION, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'email_address', 'company', 'department', 'shift', 'date_created', 'created_by', 'date_modified', 'modified_by', 'designation', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'EmailAddress' => 1, 'Company' => 2, 'Department' => 3, 'Shift' => 4, 'DateCreated' => 5, 'CreatedBy' => 6, 'DateModified' => 7, 'ModifiedBy' => 8, 'Designation' => 9, ),
		BasePeer::TYPE_COLNAME => array (EmailToDeptPeer::ID => 0, EmailToDeptPeer::EMAIL_ADDRESS => 1, EmailToDeptPeer::COMPANY => 2, EmailToDeptPeer::DEPARTMENT => 3, EmailToDeptPeer::SHIFT => 4, EmailToDeptPeer::DATE_CREATED => 5, EmailToDeptPeer::CREATED_BY => 6, EmailToDeptPeer::DATE_MODIFIED => 7, EmailToDeptPeer::MODIFIED_BY => 8, EmailToDeptPeer::DESIGNATION => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'email_address' => 1, 'company' => 2, 'department' => 3, 'shift' => 4, 'date_created' => 5, 'created_by' => 6, 'date_modified' => 7, 'modified_by' => 8, 'designation' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/reject/map/EmailToDeptMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.reject.map.EmailToDeptMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = EmailToDeptPeer::getTableMap();
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
		return str_replace(EmailToDeptPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(EmailToDeptPeer::ID);

		$criteria->addSelectColumn(EmailToDeptPeer::EMAIL_ADDRESS);

		$criteria->addSelectColumn(EmailToDeptPeer::COMPANY);

		$criteria->addSelectColumn(EmailToDeptPeer::DEPARTMENT);

		$criteria->addSelectColumn(EmailToDeptPeer::SHIFT);

		$criteria->addSelectColumn(EmailToDeptPeer::DATE_CREATED);

		$criteria->addSelectColumn(EmailToDeptPeer::CREATED_BY);

		$criteria->addSelectColumn(EmailToDeptPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(EmailToDeptPeer::MODIFIED_BY);

		$criteria->addSelectColumn(EmailToDeptPeer::DESIGNATION);

	}

	const COUNT = 'COUNT(email_to_dept.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT email_to_dept.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(EmailToDeptPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(EmailToDeptPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = EmailToDeptPeer::doSelectRS($criteria, $con);
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
		$objects = EmailToDeptPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return EmailToDeptPeer::populateObjects(EmailToDeptPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			EmailToDeptPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = EmailToDeptPeer::getOMClass();
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
		return EmailToDeptPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(EmailToDeptPeer::ID); 

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
			$comparison = $criteria->getComparison(EmailToDeptPeer::ID);
			$selectCriteria->add(EmailToDeptPeer::ID, $criteria->remove(EmailToDeptPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(EmailToDeptPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(EmailToDeptPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof EmailToDept) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(EmailToDeptPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(EmailToDept $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(EmailToDeptPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(EmailToDeptPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(EmailToDeptPeer::DATABASE_NAME, EmailToDeptPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = EmailToDeptPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(EmailToDeptPeer::DATABASE_NAME);

		$criteria->add(EmailToDeptPeer::ID, $pk);


		$v = EmailToDeptPeer::doSelect($criteria, $con);

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
			$criteria->add(EmailToDeptPeer::ID, $pks, Criteria::IN);
			$objs = EmailToDeptPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseEmailToDeptPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/reject/map/EmailToDeptMapBuilder.php';
	Propel::registerMapBuilder('lib.model.reject.map.EmailToDeptMapBuilder');
}

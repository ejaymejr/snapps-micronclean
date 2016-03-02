<?php


abstract class BaseCustomerManagementComplainAttrPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'customer_management_complain_attr';

	
	const CLASS_DEFAULT = 'lib.model.iso.CustomerManagementComplainAttr';

	
	const NUM_COLUMNS = 6;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'customer_management_complain_attr.ID';

	
	const COMPLAIN = 'customer_management_complain_attr.COMPLAIN';

	
	const DATE_CREATED = 'customer_management_complain_attr.DATE_CREATED';

	
	const CREATED_BY = 'customer_management_complain_attr.CREATED_BY';

	
	const DATE_MODIFIED = 'customer_management_complain_attr.DATE_MODIFIED';

	
	const MODIFIED_BY = 'customer_management_complain_attr.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Complain', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (CustomerManagementComplainAttrPeer::ID, CustomerManagementComplainAttrPeer::COMPLAIN, CustomerManagementComplainAttrPeer::DATE_CREATED, CustomerManagementComplainAttrPeer::CREATED_BY, CustomerManagementComplainAttrPeer::DATE_MODIFIED, CustomerManagementComplainAttrPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'complain', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Complain' => 1, 'DateCreated' => 2, 'CreatedBy' => 3, 'DateModified' => 4, 'ModifiedBy' => 5, ),
		BasePeer::TYPE_COLNAME => array (CustomerManagementComplainAttrPeer::ID => 0, CustomerManagementComplainAttrPeer::COMPLAIN => 1, CustomerManagementComplainAttrPeer::DATE_CREATED => 2, CustomerManagementComplainAttrPeer::CREATED_BY => 3, CustomerManagementComplainAttrPeer::DATE_MODIFIED => 4, CustomerManagementComplainAttrPeer::MODIFIED_BY => 5, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'complain' => 1, 'date_created' => 2, 'created_by' => 3, 'date_modified' => 4, 'modified_by' => 5, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/CustomerManagementComplainAttrMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.CustomerManagementComplainAttrMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = CustomerManagementComplainAttrPeer::getTableMap();
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
		return str_replace(CustomerManagementComplainAttrPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(CustomerManagementComplainAttrPeer::ID);

		$criteria->addSelectColumn(CustomerManagementComplainAttrPeer::COMPLAIN);

		$criteria->addSelectColumn(CustomerManagementComplainAttrPeer::DATE_CREATED);

		$criteria->addSelectColumn(CustomerManagementComplainAttrPeer::CREATED_BY);

		$criteria->addSelectColumn(CustomerManagementComplainAttrPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(CustomerManagementComplainAttrPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(customer_management_complain_attr.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT customer_management_complain_attr.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CustomerManagementComplainAttrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CustomerManagementComplainAttrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = CustomerManagementComplainAttrPeer::doSelectRS($criteria, $con);
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
		$objects = CustomerManagementComplainAttrPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return CustomerManagementComplainAttrPeer::populateObjects(CustomerManagementComplainAttrPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			CustomerManagementComplainAttrPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = CustomerManagementComplainAttrPeer::getOMClass();
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
		return CustomerManagementComplainAttrPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(CustomerManagementComplainAttrPeer::ID); 

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
			$comparison = $criteria->getComparison(CustomerManagementComplainAttrPeer::ID);
			$selectCriteria->add(CustomerManagementComplainAttrPeer::ID, $criteria->remove(CustomerManagementComplainAttrPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(CustomerManagementComplainAttrPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(CustomerManagementComplainAttrPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof CustomerManagementComplainAttr) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CustomerManagementComplainAttrPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(CustomerManagementComplainAttr $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CustomerManagementComplainAttrPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CustomerManagementComplainAttrPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(CustomerManagementComplainAttrPeer::DATABASE_NAME, CustomerManagementComplainAttrPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = CustomerManagementComplainAttrPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(CustomerManagementComplainAttrPeer::DATABASE_NAME);

		$criteria->add(CustomerManagementComplainAttrPeer::ID, $pk);


		$v = CustomerManagementComplainAttrPeer::doSelect($criteria, $con);

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
			$criteria->add(CustomerManagementComplainAttrPeer::ID, $pks, Criteria::IN);
			$objs = CustomerManagementComplainAttrPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseCustomerManagementComplainAttrPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/CustomerManagementComplainAttrMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.CustomerManagementComplainAttrMapBuilder');
}

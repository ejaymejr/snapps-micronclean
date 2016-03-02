<?php


abstract class BaseRejectCustomerAttrPeer {

	
	const DATABASE_NAME = 'reject_photo';

	
	const TABLE_NAME = 'reject_customer_attr';

	
	const CLASS_DEFAULT = 'lib.model.reject.RejectCustomerAttr';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'reject_customer_attr.ID';

	
	const CUSTOMER = 'reject_customer_attr.CUSTOMER';

	
	const CUSTOMER_ID = 'reject_customer_attr.CUSTOMER_ID';

	
	const CREATED_BY = 'reject_customer_attr.CREATED_BY';

	
	const DATE_CREATED = 'reject_customer_attr.DATE_CREATED';

	
	const MODIFIED_BY = 'reject_customer_attr.MODIFIED_BY';

	
	const DATE_MODIFIED = 'reject_customer_attr.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Customer', 'CustomerId', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (RejectCustomerAttrPeer::ID, RejectCustomerAttrPeer::CUSTOMER, RejectCustomerAttrPeer::CUSTOMER_ID, RejectCustomerAttrPeer::CREATED_BY, RejectCustomerAttrPeer::DATE_CREATED, RejectCustomerAttrPeer::MODIFIED_BY, RejectCustomerAttrPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'customer', 'customer_id', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Customer' => 1, 'CustomerId' => 2, 'CreatedBy' => 3, 'DateCreated' => 4, 'ModifiedBy' => 5, 'DateModified' => 6, ),
		BasePeer::TYPE_COLNAME => array (RejectCustomerAttrPeer::ID => 0, RejectCustomerAttrPeer::CUSTOMER => 1, RejectCustomerAttrPeer::CUSTOMER_ID => 2, RejectCustomerAttrPeer::CREATED_BY => 3, RejectCustomerAttrPeer::DATE_CREATED => 4, RejectCustomerAttrPeer::MODIFIED_BY => 5, RejectCustomerAttrPeer::DATE_MODIFIED => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'customer' => 1, 'customer_id' => 2, 'created_by' => 3, 'date_created' => 4, 'modified_by' => 5, 'date_modified' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/reject/map/RejectCustomerAttrMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.reject.map.RejectCustomerAttrMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = RejectCustomerAttrPeer::getTableMap();
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
		return str_replace(RejectCustomerAttrPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(RejectCustomerAttrPeer::ID);

		$criteria->addSelectColumn(RejectCustomerAttrPeer::CUSTOMER);

		$criteria->addSelectColumn(RejectCustomerAttrPeer::CUSTOMER_ID);

		$criteria->addSelectColumn(RejectCustomerAttrPeer::CREATED_BY);

		$criteria->addSelectColumn(RejectCustomerAttrPeer::DATE_CREATED);

		$criteria->addSelectColumn(RejectCustomerAttrPeer::MODIFIED_BY);

		$criteria->addSelectColumn(RejectCustomerAttrPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(reject_customer_attr.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT reject_customer_attr.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RejectCustomerAttrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RejectCustomerAttrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = RejectCustomerAttrPeer::doSelectRS($criteria, $con);
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
		$objects = RejectCustomerAttrPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return RejectCustomerAttrPeer::populateObjects(RejectCustomerAttrPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			RejectCustomerAttrPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = RejectCustomerAttrPeer::getOMClass();
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
		return RejectCustomerAttrPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(RejectCustomerAttrPeer::ID); 

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
			$comparison = $criteria->getComparison(RejectCustomerAttrPeer::ID);
			$selectCriteria->add(RejectCustomerAttrPeer::ID, $criteria->remove(RejectCustomerAttrPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(RejectCustomerAttrPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(RejectCustomerAttrPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof RejectCustomerAttr) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(RejectCustomerAttrPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(RejectCustomerAttr $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(RejectCustomerAttrPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(RejectCustomerAttrPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(RejectCustomerAttrPeer::DATABASE_NAME, RejectCustomerAttrPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = RejectCustomerAttrPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(RejectCustomerAttrPeer::DATABASE_NAME);

		$criteria->add(RejectCustomerAttrPeer::ID, $pk);


		$v = RejectCustomerAttrPeer::doSelect($criteria, $con);

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
			$criteria->add(RejectCustomerAttrPeer::ID, $pks, Criteria::IN);
			$objs = RejectCustomerAttrPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseRejectCustomerAttrPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/reject/map/RejectCustomerAttrMapBuilder.php';
	Propel::registerMapBuilder('lib.model.reject.map.RejectCustomerAttrMapBuilder');
}

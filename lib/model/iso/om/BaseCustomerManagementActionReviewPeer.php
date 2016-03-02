<?php


abstract class BaseCustomerManagementActionReviewPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'customer_management_action_review';

	
	const CLASS_DEFAULT = 'lib.model.iso.CustomerManagementActionReview';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'customer_management_action_review.ID';

	
	const DATE_TIME = 'customer_management_action_review.DATE_TIME';

	
	const CASE_ACTION = 'customer_management_action_review.CASE_ACTION';

	
	const REVIEWED_BY = 'customer_management_action_review.REVIEWED_BY';

	
	const REVIEW_DATE = 'customer_management_action_review.REVIEW_DATE';

	
	const DATE_CREATED = 'customer_management_action_review.DATE_CREATED';

	
	const CREATED_BY = 'customer_management_action_review.CREATED_BY';

	
	const DATE_MODIFIED = 'customer_management_action_review.DATE_MODIFIED';

	
	const MODIFIED_BY = 'customer_management_action_review.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'CaseAction', 'ReviewedBy', 'ReviewDate', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (CustomerManagementActionReviewPeer::ID, CustomerManagementActionReviewPeer::DATE_TIME, CustomerManagementActionReviewPeer::CASE_ACTION, CustomerManagementActionReviewPeer::REVIEWED_BY, CustomerManagementActionReviewPeer::REVIEW_DATE, CustomerManagementActionReviewPeer::DATE_CREATED, CustomerManagementActionReviewPeer::CREATED_BY, CustomerManagementActionReviewPeer::DATE_MODIFIED, CustomerManagementActionReviewPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'case_action', 'reviewed_by', 'review_date', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'CaseAction' => 2, 'ReviewedBy' => 3, 'ReviewDate' => 4, 'DateCreated' => 5, 'CreatedBy' => 6, 'DateModified' => 7, 'ModifiedBy' => 8, ),
		BasePeer::TYPE_COLNAME => array (CustomerManagementActionReviewPeer::ID => 0, CustomerManagementActionReviewPeer::DATE_TIME => 1, CustomerManagementActionReviewPeer::CASE_ACTION => 2, CustomerManagementActionReviewPeer::REVIEWED_BY => 3, CustomerManagementActionReviewPeer::REVIEW_DATE => 4, CustomerManagementActionReviewPeer::DATE_CREATED => 5, CustomerManagementActionReviewPeer::CREATED_BY => 6, CustomerManagementActionReviewPeer::DATE_MODIFIED => 7, CustomerManagementActionReviewPeer::MODIFIED_BY => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'case_action' => 2, 'reviewed_by' => 3, 'review_date' => 4, 'date_created' => 5, 'created_by' => 6, 'date_modified' => 7, 'modified_by' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/CustomerManagementActionReviewMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.CustomerManagementActionReviewMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = CustomerManagementActionReviewPeer::getTableMap();
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
		return str_replace(CustomerManagementActionReviewPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(CustomerManagementActionReviewPeer::ID);

		$criteria->addSelectColumn(CustomerManagementActionReviewPeer::DATE_TIME);

		$criteria->addSelectColumn(CustomerManagementActionReviewPeer::CASE_ACTION);

		$criteria->addSelectColumn(CustomerManagementActionReviewPeer::REVIEWED_BY);

		$criteria->addSelectColumn(CustomerManagementActionReviewPeer::REVIEW_DATE);

		$criteria->addSelectColumn(CustomerManagementActionReviewPeer::DATE_CREATED);

		$criteria->addSelectColumn(CustomerManagementActionReviewPeer::CREATED_BY);

		$criteria->addSelectColumn(CustomerManagementActionReviewPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(CustomerManagementActionReviewPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(customer_management_action_review.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT customer_management_action_review.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CustomerManagementActionReviewPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CustomerManagementActionReviewPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = CustomerManagementActionReviewPeer::doSelectRS($criteria, $con);
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
		$objects = CustomerManagementActionReviewPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return CustomerManagementActionReviewPeer::populateObjects(CustomerManagementActionReviewPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			CustomerManagementActionReviewPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = CustomerManagementActionReviewPeer::getOMClass();
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
		return CustomerManagementActionReviewPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(CustomerManagementActionReviewPeer::ID); 

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
			$comparison = $criteria->getComparison(CustomerManagementActionReviewPeer::ID);
			$selectCriteria->add(CustomerManagementActionReviewPeer::ID, $criteria->remove(CustomerManagementActionReviewPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(CustomerManagementActionReviewPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(CustomerManagementActionReviewPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof CustomerManagementActionReview) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CustomerManagementActionReviewPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(CustomerManagementActionReview $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CustomerManagementActionReviewPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CustomerManagementActionReviewPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(CustomerManagementActionReviewPeer::DATABASE_NAME, CustomerManagementActionReviewPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = CustomerManagementActionReviewPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(CustomerManagementActionReviewPeer::DATABASE_NAME);

		$criteria->add(CustomerManagementActionReviewPeer::ID, $pk);


		$v = CustomerManagementActionReviewPeer::doSelect($criteria, $con);

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
			$criteria->add(CustomerManagementActionReviewPeer::ID, $pks, Criteria::IN);
			$objs = CustomerManagementActionReviewPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseCustomerManagementActionReviewPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/CustomerManagementActionReviewMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.CustomerManagementActionReviewMapBuilder');
}

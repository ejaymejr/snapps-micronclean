<?php


abstract class BaseRejectRejectAttrPeer {

	
	const DATABASE_NAME = 'reject_photo';

	
	const TABLE_NAME = 'reject_reject_attr';

	
	const CLASS_DEFAULT = 'lib.model.reject.RejectRejectAttr';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'reject_reject_attr.ID';

	
	const CUSTOMER = 'reject_reject_attr.CUSTOMER';

	
	const GARMENT_TYPE = 'reject_reject_attr.GARMENT_TYPE';

	
	const REASON = 'reject_reject_attr.REASON';

	
	const REPAIRABLE = 'reject_reject_attr.REPAIRABLE';

	
	const CREATED_BY = 'reject_reject_attr.CREATED_BY';

	
	const DATE_CREATED = 'reject_reject_attr.DATE_CREATED';

	
	const MODIFIED_BY = 'reject_reject_attr.MODIFIED_BY';

	
	const DATE_MODIFIED = 'reject_reject_attr.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Customer', 'GarmentType', 'Reason', 'Repairable', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (RejectRejectAttrPeer::ID, RejectRejectAttrPeer::CUSTOMER, RejectRejectAttrPeer::GARMENT_TYPE, RejectRejectAttrPeer::REASON, RejectRejectAttrPeer::REPAIRABLE, RejectRejectAttrPeer::CREATED_BY, RejectRejectAttrPeer::DATE_CREATED, RejectRejectAttrPeer::MODIFIED_BY, RejectRejectAttrPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'customer', 'garment_type', 'reason', 'repairable', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Customer' => 1, 'GarmentType' => 2, 'Reason' => 3, 'Repairable' => 4, 'CreatedBy' => 5, 'DateCreated' => 6, 'ModifiedBy' => 7, 'DateModified' => 8, ),
		BasePeer::TYPE_COLNAME => array (RejectRejectAttrPeer::ID => 0, RejectRejectAttrPeer::CUSTOMER => 1, RejectRejectAttrPeer::GARMENT_TYPE => 2, RejectRejectAttrPeer::REASON => 3, RejectRejectAttrPeer::REPAIRABLE => 4, RejectRejectAttrPeer::CREATED_BY => 5, RejectRejectAttrPeer::DATE_CREATED => 6, RejectRejectAttrPeer::MODIFIED_BY => 7, RejectRejectAttrPeer::DATE_MODIFIED => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'customer' => 1, 'garment_type' => 2, 'reason' => 3, 'repairable' => 4, 'created_by' => 5, 'date_created' => 6, 'modified_by' => 7, 'date_modified' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/reject/map/RejectRejectAttrMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.reject.map.RejectRejectAttrMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = RejectRejectAttrPeer::getTableMap();
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
		return str_replace(RejectRejectAttrPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(RejectRejectAttrPeer::ID);

		$criteria->addSelectColumn(RejectRejectAttrPeer::CUSTOMER);

		$criteria->addSelectColumn(RejectRejectAttrPeer::GARMENT_TYPE);

		$criteria->addSelectColumn(RejectRejectAttrPeer::REASON);

		$criteria->addSelectColumn(RejectRejectAttrPeer::REPAIRABLE);

		$criteria->addSelectColumn(RejectRejectAttrPeer::CREATED_BY);

		$criteria->addSelectColumn(RejectRejectAttrPeer::DATE_CREATED);

		$criteria->addSelectColumn(RejectRejectAttrPeer::MODIFIED_BY);

		$criteria->addSelectColumn(RejectRejectAttrPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(reject_reject_attr.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT reject_reject_attr.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RejectRejectAttrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RejectRejectAttrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = RejectRejectAttrPeer::doSelectRS($criteria, $con);
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
		$objects = RejectRejectAttrPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return RejectRejectAttrPeer::populateObjects(RejectRejectAttrPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			RejectRejectAttrPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = RejectRejectAttrPeer::getOMClass();
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
		return RejectRejectAttrPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(RejectRejectAttrPeer::ID); 

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
			$comparison = $criteria->getComparison(RejectRejectAttrPeer::ID);
			$selectCriteria->add(RejectRejectAttrPeer::ID, $criteria->remove(RejectRejectAttrPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(RejectRejectAttrPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(RejectRejectAttrPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof RejectRejectAttr) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(RejectRejectAttrPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(RejectRejectAttr $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(RejectRejectAttrPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(RejectRejectAttrPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(RejectRejectAttrPeer::DATABASE_NAME, RejectRejectAttrPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = RejectRejectAttrPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(RejectRejectAttrPeer::DATABASE_NAME);

		$criteria->add(RejectRejectAttrPeer::ID, $pk);


		$v = RejectRejectAttrPeer::doSelect($criteria, $con);

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
			$criteria->add(RejectRejectAttrPeer::ID, $pks, Criteria::IN);
			$objs = RejectRejectAttrPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseRejectRejectAttrPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/reject/map/RejectRejectAttrMapBuilder.php';
	Propel::registerMapBuilder('lib.model.reject.map.RejectRejectAttrMapBuilder');
}

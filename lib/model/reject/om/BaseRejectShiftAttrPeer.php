<?php


abstract class BaseRejectShiftAttrPeer {

	
	const DATABASE_NAME = 'reject_photo';

	
	const TABLE_NAME = 'reject_shift_attr';

	
	const CLASS_DEFAULT = 'lib.model.reject.RejectShiftAttr';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'reject_shift_attr.ID';

	
	const SHIFT = 'reject_shift_attr.SHIFT';

	
	const CUSTOMER = 'reject_shift_attr.CUSTOMER';

	
	const CREATED_BY = 'reject_shift_attr.CREATED_BY';

	
	const DATE_CREATED = 'reject_shift_attr.DATE_CREATED';

	
	const MODIFIED_BY = 'reject_shift_attr.MODIFIED_BY';

	
	const DATE_MODIFIED = 'reject_shift_attr.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Shift', 'Customer', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (RejectShiftAttrPeer::ID, RejectShiftAttrPeer::SHIFT, RejectShiftAttrPeer::CUSTOMER, RejectShiftAttrPeer::CREATED_BY, RejectShiftAttrPeer::DATE_CREATED, RejectShiftAttrPeer::MODIFIED_BY, RejectShiftAttrPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'shift', 'customer', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Shift' => 1, 'Customer' => 2, 'CreatedBy' => 3, 'DateCreated' => 4, 'ModifiedBy' => 5, 'DateModified' => 6, ),
		BasePeer::TYPE_COLNAME => array (RejectShiftAttrPeer::ID => 0, RejectShiftAttrPeer::SHIFT => 1, RejectShiftAttrPeer::CUSTOMER => 2, RejectShiftAttrPeer::CREATED_BY => 3, RejectShiftAttrPeer::DATE_CREATED => 4, RejectShiftAttrPeer::MODIFIED_BY => 5, RejectShiftAttrPeer::DATE_MODIFIED => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'shift' => 1, 'customer' => 2, 'created_by' => 3, 'date_created' => 4, 'modified_by' => 5, 'date_modified' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/reject/map/RejectShiftAttrMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.reject.map.RejectShiftAttrMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = RejectShiftAttrPeer::getTableMap();
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
		return str_replace(RejectShiftAttrPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(RejectShiftAttrPeer::ID);

		$criteria->addSelectColumn(RejectShiftAttrPeer::SHIFT);

		$criteria->addSelectColumn(RejectShiftAttrPeer::CUSTOMER);

		$criteria->addSelectColumn(RejectShiftAttrPeer::CREATED_BY);

		$criteria->addSelectColumn(RejectShiftAttrPeer::DATE_CREATED);

		$criteria->addSelectColumn(RejectShiftAttrPeer::MODIFIED_BY);

		$criteria->addSelectColumn(RejectShiftAttrPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(reject_shift_attr.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT reject_shift_attr.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RejectShiftAttrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RejectShiftAttrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = RejectShiftAttrPeer::doSelectRS($criteria, $con);
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
		$objects = RejectShiftAttrPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return RejectShiftAttrPeer::populateObjects(RejectShiftAttrPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			RejectShiftAttrPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = RejectShiftAttrPeer::getOMClass();
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
		return RejectShiftAttrPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(RejectShiftAttrPeer::ID); 

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
			$comparison = $criteria->getComparison(RejectShiftAttrPeer::ID);
			$selectCriteria->add(RejectShiftAttrPeer::ID, $criteria->remove(RejectShiftAttrPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(RejectShiftAttrPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(RejectShiftAttrPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof RejectShiftAttr) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(RejectShiftAttrPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(RejectShiftAttr $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(RejectShiftAttrPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(RejectShiftAttrPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(RejectShiftAttrPeer::DATABASE_NAME, RejectShiftAttrPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = RejectShiftAttrPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(RejectShiftAttrPeer::DATABASE_NAME);

		$criteria->add(RejectShiftAttrPeer::ID, $pk);


		$v = RejectShiftAttrPeer::doSelect($criteria, $con);

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
			$criteria->add(RejectShiftAttrPeer::ID, $pks, Criteria::IN);
			$objs = RejectShiftAttrPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseRejectShiftAttrPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/reject/map/RejectShiftAttrMapBuilder.php';
	Propel::registerMapBuilder('lib.model.reject.map.RejectShiftAttrMapBuilder');
}

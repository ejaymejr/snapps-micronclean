<?php


abstract class BaseLabelRequestPeer {

	
	const DATABASE_NAME = 'hgas3';

	
	const TABLE_NAME = 'label_request';

	
	const CLASS_DEFAULT = 'lib.model.hgas3.LabelRequest';

	
	const NUM_COLUMNS = 27;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'label_request.ID';

	
	const BATCH = 'label_request.BATCH';

	
	const COMPANY = 'label_request.COMPANY';

	
	const NAME = 'label_request.NAME';

	
	const GID = 'label_request.GID';

	
	const DEPARTMENT = 'label_request.DEPARTMENT';

	
	const DESIGNATION = 'label_request.DESIGNATION';

	
	const HANGER_NO = 'label_request.HANGER_NO';

	
	const SHIFT = 'label_request.SHIFT';

	
	const FSET = 'label_request.FSET';

	
	const CELL = 'label_request.CELL';

	
	const END = 'label_request.END';

	
	const LOCKER = 'label_request.LOCKER';

	
	const COST_CENTER = 'label_request.COST_CENTER';

	
	const PLATFORM = 'label_request.PLATFORM';

	
	const GSIZE = 'label_request.GSIZE';

	
	const TEMPLATE = 'label_request.TEMPLATE';

	
	const IS_CHECKED = 'label_request.IS_CHECKED';

	
	const IS_PRINTED = 'label_request.IS_PRINTED';

	
	const ORDER_BY = 'label_request.ORDER_BY';

	
	const PRINTED_BY = 'label_request.PRINTED_BY';

	
	const DATE_PRINTED = 'label_request.DATE_PRINTED';

	
	const QUANTITY = 'label_request.QUANTITY';

	
	const CREATED_BY = 'label_request.CREATED_BY';

	
	const DATE_CREATED = 'label_request.DATE_CREATED';

	
	const MODIFIED_BY = 'label_request.MODIFIED_BY';

	
	const DATE_MODIFIED = 'label_request.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Batch', 'Company', 'Name', 'Gid', 'Department', 'Designation', 'HangerNo', 'Shift', 'Fset', 'Cell', 'End', 'Locker', 'CostCenter', 'Platform', 'Gsize', 'Template', 'IsChecked', 'IsPrinted', 'OrderBy', 'PrintedBy', 'DatePrinted', 'Quantity', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (LabelRequestPeer::ID, LabelRequestPeer::BATCH, LabelRequestPeer::COMPANY, LabelRequestPeer::NAME, LabelRequestPeer::GID, LabelRequestPeer::DEPARTMENT, LabelRequestPeer::DESIGNATION, LabelRequestPeer::HANGER_NO, LabelRequestPeer::SHIFT, LabelRequestPeer::FSET, LabelRequestPeer::CELL, LabelRequestPeer::END, LabelRequestPeer::LOCKER, LabelRequestPeer::COST_CENTER, LabelRequestPeer::PLATFORM, LabelRequestPeer::GSIZE, LabelRequestPeer::TEMPLATE, LabelRequestPeer::IS_CHECKED, LabelRequestPeer::IS_PRINTED, LabelRequestPeer::ORDER_BY, LabelRequestPeer::PRINTED_BY, LabelRequestPeer::DATE_PRINTED, LabelRequestPeer::QUANTITY, LabelRequestPeer::CREATED_BY, LabelRequestPeer::DATE_CREATED, LabelRequestPeer::MODIFIED_BY, LabelRequestPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'batch', 'company', 'name', 'gid', 'department', 'designation', 'hanger_no', 'shift', 'fset', 'cell', 'end', 'locker', 'cost_center', 'platform', 'gsize', 'template', 'is_checked', 'is_printed', 'order_by', 'printed_by', 'date_printed', 'quantity', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Batch' => 1, 'Company' => 2, 'Name' => 3, 'Gid' => 4, 'Department' => 5, 'Designation' => 6, 'HangerNo' => 7, 'Shift' => 8, 'Fset' => 9, 'Cell' => 10, 'End' => 11, 'Locker' => 12, 'CostCenter' => 13, 'Platform' => 14, 'Gsize' => 15, 'Template' => 16, 'IsChecked' => 17, 'IsPrinted' => 18, 'OrderBy' => 19, 'PrintedBy' => 20, 'DatePrinted' => 21, 'Quantity' => 22, 'CreatedBy' => 23, 'DateCreated' => 24, 'ModifiedBy' => 25, 'DateModified' => 26, ),
		BasePeer::TYPE_COLNAME => array (LabelRequestPeer::ID => 0, LabelRequestPeer::BATCH => 1, LabelRequestPeer::COMPANY => 2, LabelRequestPeer::NAME => 3, LabelRequestPeer::GID => 4, LabelRequestPeer::DEPARTMENT => 5, LabelRequestPeer::DESIGNATION => 6, LabelRequestPeer::HANGER_NO => 7, LabelRequestPeer::SHIFT => 8, LabelRequestPeer::FSET => 9, LabelRequestPeer::CELL => 10, LabelRequestPeer::END => 11, LabelRequestPeer::LOCKER => 12, LabelRequestPeer::COST_CENTER => 13, LabelRequestPeer::PLATFORM => 14, LabelRequestPeer::GSIZE => 15, LabelRequestPeer::TEMPLATE => 16, LabelRequestPeer::IS_CHECKED => 17, LabelRequestPeer::IS_PRINTED => 18, LabelRequestPeer::ORDER_BY => 19, LabelRequestPeer::PRINTED_BY => 20, LabelRequestPeer::DATE_PRINTED => 21, LabelRequestPeer::QUANTITY => 22, LabelRequestPeer::CREATED_BY => 23, LabelRequestPeer::DATE_CREATED => 24, LabelRequestPeer::MODIFIED_BY => 25, LabelRequestPeer::DATE_MODIFIED => 26, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'batch' => 1, 'company' => 2, 'name' => 3, 'gid' => 4, 'department' => 5, 'designation' => 6, 'hanger_no' => 7, 'shift' => 8, 'fset' => 9, 'cell' => 10, 'end' => 11, 'locker' => 12, 'cost_center' => 13, 'platform' => 14, 'gsize' => 15, 'template' => 16, 'is_checked' => 17, 'is_printed' => 18, 'order_by' => 19, 'printed_by' => 20, 'date_printed' => 21, 'quantity' => 22, 'created_by' => 23, 'date_created' => 24, 'modified_by' => 25, 'date_modified' => 26, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hgas3/map/LabelRequestMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hgas3.map.LabelRequestMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = LabelRequestPeer::getTableMap();
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
		return str_replace(LabelRequestPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(LabelRequestPeer::ID);

		$criteria->addSelectColumn(LabelRequestPeer::BATCH);

		$criteria->addSelectColumn(LabelRequestPeer::COMPANY);

		$criteria->addSelectColumn(LabelRequestPeer::NAME);

		$criteria->addSelectColumn(LabelRequestPeer::GID);

		$criteria->addSelectColumn(LabelRequestPeer::DEPARTMENT);

		$criteria->addSelectColumn(LabelRequestPeer::DESIGNATION);

		$criteria->addSelectColumn(LabelRequestPeer::HANGER_NO);

		$criteria->addSelectColumn(LabelRequestPeer::SHIFT);

		$criteria->addSelectColumn(LabelRequestPeer::FSET);

		$criteria->addSelectColumn(LabelRequestPeer::CELL);

		$criteria->addSelectColumn(LabelRequestPeer::END);

		$criteria->addSelectColumn(LabelRequestPeer::LOCKER);

		$criteria->addSelectColumn(LabelRequestPeer::COST_CENTER);

		$criteria->addSelectColumn(LabelRequestPeer::PLATFORM);

		$criteria->addSelectColumn(LabelRequestPeer::GSIZE);

		$criteria->addSelectColumn(LabelRequestPeer::TEMPLATE);

		$criteria->addSelectColumn(LabelRequestPeer::IS_CHECKED);

		$criteria->addSelectColumn(LabelRequestPeer::IS_PRINTED);

		$criteria->addSelectColumn(LabelRequestPeer::ORDER_BY);

		$criteria->addSelectColumn(LabelRequestPeer::PRINTED_BY);

		$criteria->addSelectColumn(LabelRequestPeer::DATE_PRINTED);

		$criteria->addSelectColumn(LabelRequestPeer::QUANTITY);

		$criteria->addSelectColumn(LabelRequestPeer::CREATED_BY);

		$criteria->addSelectColumn(LabelRequestPeer::DATE_CREATED);

		$criteria->addSelectColumn(LabelRequestPeer::MODIFIED_BY);

		$criteria->addSelectColumn(LabelRequestPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(label_request.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT label_request.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LabelRequestPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LabelRequestPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = LabelRequestPeer::doSelectRS($criteria, $con);
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
		$objects = LabelRequestPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return LabelRequestPeer::populateObjects(LabelRequestPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			LabelRequestPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = LabelRequestPeer::getOMClass();
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
		return LabelRequestPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(LabelRequestPeer::ID); 

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
			$comparison = $criteria->getComparison(LabelRequestPeer::ID);
			$selectCriteria->add(LabelRequestPeer::ID, $criteria->remove(LabelRequestPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(LabelRequestPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(LabelRequestPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof LabelRequest) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(LabelRequestPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(LabelRequest $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(LabelRequestPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(LabelRequestPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(LabelRequestPeer::DATABASE_NAME, LabelRequestPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = LabelRequestPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(LabelRequestPeer::DATABASE_NAME);

		$criteria->add(LabelRequestPeer::ID, $pk);


		$v = LabelRequestPeer::doSelect($criteria, $con);

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
			$criteria->add(LabelRequestPeer::ID, $pks, Criteria::IN);
			$objs = LabelRequestPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseLabelRequestPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hgas3/map/LabelRequestMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hgas3.map.LabelRequestMapBuilder');
}

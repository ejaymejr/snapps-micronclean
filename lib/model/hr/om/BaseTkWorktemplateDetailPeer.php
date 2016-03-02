<?php


abstract class BaseTkWorktemplateDetailPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'tk_worktemplate_detail';

	
	const CLASS_DEFAULT = 'lib.model.hr.TkWorktemplateDetail';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'tk_worktemplate_detail.ID';

	
	const DAY = 'tk_worktemplate_detail.DAY';

	
	const IS_WORKING = 'tk_worktemplate_detail.IS_WORKING';

	
	const DATE_DET = 'tk_worktemplate_detail.DATE_DET';

	
	const TK_WORKTEMPLATE_NO = 'tk_worktemplate_detail.TK_WORKTEMPLATE_NO';

	
	const CREATED_BY = 'tk_worktemplate_detail.CREATED_BY';

	
	const DATE_CREATED = 'tk_worktemplate_detail.DATE_CREATED';

	
	const MODIFIED_BY = 'tk_worktemplate_detail.MODIFIED_BY';

	
	const DATE_MODIFIED = 'tk_worktemplate_detail.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Day', 'IsWorking', 'DateDet', 'TkWorktemplateNo', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (TkWorktemplateDetailPeer::ID, TkWorktemplateDetailPeer::DAY, TkWorktemplateDetailPeer::IS_WORKING, TkWorktemplateDetailPeer::DATE_DET, TkWorktemplateDetailPeer::TK_WORKTEMPLATE_NO, TkWorktemplateDetailPeer::CREATED_BY, TkWorktemplateDetailPeer::DATE_CREATED, TkWorktemplateDetailPeer::MODIFIED_BY, TkWorktemplateDetailPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'day', 'is_working', 'date_det', 'tk_worktemplate_no', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Day' => 1, 'IsWorking' => 2, 'DateDet' => 3, 'TkWorktemplateNo' => 4, 'CreatedBy' => 5, 'DateCreated' => 6, 'ModifiedBy' => 7, 'DateModified' => 8, ),
		BasePeer::TYPE_COLNAME => array (TkWorktemplateDetailPeer::ID => 0, TkWorktemplateDetailPeer::DAY => 1, TkWorktemplateDetailPeer::IS_WORKING => 2, TkWorktemplateDetailPeer::DATE_DET => 3, TkWorktemplateDetailPeer::TK_WORKTEMPLATE_NO => 4, TkWorktemplateDetailPeer::CREATED_BY => 5, TkWorktemplateDetailPeer::DATE_CREATED => 6, TkWorktemplateDetailPeer::MODIFIED_BY => 7, TkWorktemplateDetailPeer::DATE_MODIFIED => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'day' => 1, 'is_working' => 2, 'date_det' => 3, 'tk_worktemplate_no' => 4, 'created_by' => 5, 'date_created' => 6, 'modified_by' => 7, 'date_modified' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/TkWorktemplateDetailMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.TkWorktemplateDetailMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TkWorktemplateDetailPeer::getTableMap();
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
		return str_replace(TkWorktemplateDetailPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TkWorktemplateDetailPeer::ID);

		$criteria->addSelectColumn(TkWorktemplateDetailPeer::DAY);

		$criteria->addSelectColumn(TkWorktemplateDetailPeer::IS_WORKING);

		$criteria->addSelectColumn(TkWorktemplateDetailPeer::DATE_DET);

		$criteria->addSelectColumn(TkWorktemplateDetailPeer::TK_WORKTEMPLATE_NO);

		$criteria->addSelectColumn(TkWorktemplateDetailPeer::CREATED_BY);

		$criteria->addSelectColumn(TkWorktemplateDetailPeer::DATE_CREATED);

		$criteria->addSelectColumn(TkWorktemplateDetailPeer::MODIFIED_BY);

		$criteria->addSelectColumn(TkWorktemplateDetailPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(tk_worktemplate_detail.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tk_worktemplate_detail.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TkWorktemplateDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TkWorktemplateDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TkWorktemplateDetailPeer::doSelectRS($criteria, $con);
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
		$objects = TkWorktemplateDetailPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TkWorktemplateDetailPeer::populateObjects(TkWorktemplateDetailPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TkWorktemplateDetailPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TkWorktemplateDetailPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinTkWorktemplate(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TkWorktemplateDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TkWorktemplateDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TkWorktemplateDetailPeer::TK_WORKTEMPLATE_NO, TkWorktemplatePeer::WORKTEMP_NO);

		$rs = TkWorktemplateDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinTkWorktemplate(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TkWorktemplateDetailPeer::addSelectColumns($c);
		$startcol = (TkWorktemplateDetailPeer::NUM_COLUMNS - TkWorktemplateDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TkWorktemplatePeer::addSelectColumns($c);

		$c->addJoin(TkWorktemplateDetailPeer::TK_WORKTEMPLATE_NO, TkWorktemplatePeer::WORKTEMP_NO);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TkWorktemplateDetailPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TkWorktemplatePeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTkWorktemplate(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTkWorktemplateDetail($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTkWorktemplateDetails();
				$obj2->addTkWorktemplateDetail($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TkWorktemplateDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TkWorktemplateDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TkWorktemplateDetailPeer::TK_WORKTEMPLATE_NO, TkWorktemplatePeer::WORKTEMP_NO);

		$rs = TkWorktemplateDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TkWorktemplateDetailPeer::addSelectColumns($c);
		$startcol2 = (TkWorktemplateDetailPeer::NUM_COLUMNS - TkWorktemplateDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TkWorktemplatePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TkWorktemplatePeer::NUM_COLUMNS;

		$c->addJoin(TkWorktemplateDetailPeer::TK_WORKTEMPLATE_NO, TkWorktemplatePeer::WORKTEMP_NO);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TkWorktemplateDetailPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = TkWorktemplatePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTkWorktemplate(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addTkWorktemplateDetail($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initTkWorktemplateDetails();
				$obj2->addTkWorktemplateDetail($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}

	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return TkWorktemplateDetailPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TkWorktemplateDetailPeer::ID); 

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
			$comparison = $criteria->getComparison(TkWorktemplateDetailPeer::ID);
			$selectCriteria->add(TkWorktemplateDetailPeer::ID, $criteria->remove(TkWorktemplateDetailPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TkWorktemplateDetailPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TkWorktemplateDetailPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TkWorktemplateDetail) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TkWorktemplateDetailPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TkWorktemplateDetail $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TkWorktemplateDetailPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TkWorktemplateDetailPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TkWorktemplateDetailPeer::DATABASE_NAME, TkWorktemplateDetailPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TkWorktemplateDetailPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(TkWorktemplateDetailPeer::DATABASE_NAME);

		$criteria->add(TkWorktemplateDetailPeer::ID, $pk);


		$v = TkWorktemplateDetailPeer::doSelect($criteria, $con);

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
			$criteria->add(TkWorktemplateDetailPeer::ID, $pks, Criteria::IN);
			$objs = TkWorktemplateDetailPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTkWorktemplateDetailPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/TkWorktemplateDetailMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.TkWorktemplateDetailMapBuilder');
}

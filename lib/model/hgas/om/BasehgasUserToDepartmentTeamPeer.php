<?php


abstract class BasehgasUserToDepartmentTeamPeer {

	
	const DATABASE_NAME = 'hgas';

	
	const TABLE_NAME = 'user_to_department_team';

	
	const CLASS_DEFAULT = 'lib.model.hgas.hgasUserToDepartmentTeam';

	
	const NUM_COLUMNS = 5;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'user_to_department_team.ID';

	
	const USER_ID = 'user_to_department_team.USER_ID';

	
	const ROLE = 'user_to_department_team.ROLE';

	
	const DEPARTMENT_ID = 'user_to_department_team.DEPARTMENT_ID';

	
	const TEAM_ID = 'user_to_department_team.TEAM_ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'UserId', 'Role', 'DepartmentId', 'TeamId', ),
		BasePeer::TYPE_COLNAME => array (hgasUserToDepartmentTeamPeer::ID, hgasUserToDepartmentTeamPeer::USER_ID, hgasUserToDepartmentTeamPeer::ROLE, hgasUserToDepartmentTeamPeer::DEPARTMENT_ID, hgasUserToDepartmentTeamPeer::TEAM_ID, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'user_id', 'role', 'department_id', 'team_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UserId' => 1, 'Role' => 2, 'DepartmentId' => 3, 'TeamId' => 4, ),
		BasePeer::TYPE_COLNAME => array (hgasUserToDepartmentTeamPeer::ID => 0, hgasUserToDepartmentTeamPeer::USER_ID => 1, hgasUserToDepartmentTeamPeer::ROLE => 2, hgasUserToDepartmentTeamPeer::DEPARTMENT_ID => 3, hgasUserToDepartmentTeamPeer::TEAM_ID => 4, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user_id' => 1, 'role' => 2, 'department_id' => 3, 'team_id' => 4, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hgas/map/hgasUserToDepartmentTeamMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hgas.map.hgasUserToDepartmentTeamMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = hgasUserToDepartmentTeamPeer::getTableMap();
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
		return str_replace(hgasUserToDepartmentTeamPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::ID);

		$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::USER_ID);

		$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::ROLE);

		$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::DEPARTMENT_ID);

		$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::TEAM_ID);

	}

	const COUNT = 'COUNT(user_to_department_team.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT user_to_department_team.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = hgasUserToDepartmentTeamPeer::doSelectRS($criteria, $con);
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
		$objects = hgasUserToDepartmentTeamPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return hgasUserToDepartmentTeamPeer::populateObjects(hgasUserToDepartmentTeamPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			hgasUserToDepartmentTeamPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = hgasUserToDepartmentTeamPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinhgasDepartmentTeamRelatedByDepartmentId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasUserToDepartmentTeamPeer::DEPARTMENT_ID, hgasDepartmentTeamPeer::DEPARTMENT_ID);

		$rs = hgasUserToDepartmentTeamPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinhgasDepartmentTeamRelatedByTeamId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasUserToDepartmentTeamPeer::TEAM_ID, hgasDepartmentTeamPeer::TEAM_ID);

		$rs = hgasUserToDepartmentTeamPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinhgasDepartmentTeamRelatedByDepartmentId(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasUserToDepartmentTeamPeer::addSelectColumns($c);
		$startcol = (hgasUserToDepartmentTeamPeer::NUM_COLUMNS - hgasUserToDepartmentTeamPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		hgasDepartmentTeamPeer::addSelectColumns($c);

		$c->addJoin(hgasUserToDepartmentTeamPeer::DEPARTMENT_ID, hgasDepartmentTeamPeer::DEPARTMENT_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasUserToDepartmentTeamPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasDepartmentTeamPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->gethgasDepartmentTeamRelatedByDepartmentId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addhgasUserToDepartmentTeamRelatedByDepartmentId($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->inithgasUserToDepartmentTeamsRelatedByDepartmentId();
				$obj2->addhgasUserToDepartmentTeamRelatedByDepartmentId($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinhgasDepartmentTeamRelatedByTeamId(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasUserToDepartmentTeamPeer::addSelectColumns($c);
		$startcol = (hgasUserToDepartmentTeamPeer::NUM_COLUMNS - hgasUserToDepartmentTeamPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		hgasDepartmentTeamPeer::addSelectColumns($c);

		$c->addJoin(hgasUserToDepartmentTeamPeer::TEAM_ID, hgasDepartmentTeamPeer::TEAM_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasUserToDepartmentTeamPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasDepartmentTeamPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->gethgasDepartmentTeamRelatedByTeamId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addhgasUserToDepartmentTeamRelatedByTeamId($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->inithgasUserToDepartmentTeamsRelatedByTeamId();
				$obj2->addhgasUserToDepartmentTeamRelatedByTeamId($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasUserToDepartmentTeamPeer::DEPARTMENT_ID, hgasDepartmentTeamPeer::DEPARTMENT_ID);

		$criteria->addJoin(hgasUserToDepartmentTeamPeer::TEAM_ID, hgasDepartmentTeamPeer::TEAM_ID);

		$rs = hgasUserToDepartmentTeamPeer::doSelectRS($criteria, $con);
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

		hgasUserToDepartmentTeamPeer::addSelectColumns($c);
		$startcol2 = (hgasUserToDepartmentTeamPeer::NUM_COLUMNS - hgasUserToDepartmentTeamPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasDepartmentTeamPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasDepartmentTeamPeer::NUM_COLUMNS;

		hgasDepartmentTeamPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + hgasDepartmentTeamPeer::NUM_COLUMNS;

		$c->addJoin(hgasUserToDepartmentTeamPeer::DEPARTMENT_ID, hgasDepartmentTeamPeer::DEPARTMENT_ID);

		$c->addJoin(hgasUserToDepartmentTeamPeer::TEAM_ID, hgasDepartmentTeamPeer::TEAM_ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasUserToDepartmentTeamPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = hgasDepartmentTeamPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasDepartmentTeamRelatedByDepartmentId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasUserToDepartmentTeamRelatedByDepartmentId($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasUserToDepartmentTeamsRelatedByDepartmentId();
				$obj2->addhgasUserToDepartmentTeamRelatedByDepartmentId($obj1);
			}


					
			$omClass = hgasDepartmentTeamPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->gethgasDepartmentTeamRelatedByTeamId(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addhgasUserToDepartmentTeamRelatedByTeamId($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->inithgasUserToDepartmentTeamsRelatedByTeamId();
				$obj3->addhgasUserToDepartmentTeamRelatedByTeamId($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExcepthgasDepartmentTeamRelatedByDepartmentId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = hgasUserToDepartmentTeamPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExcepthgasDepartmentTeamRelatedByTeamId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasUserToDepartmentTeamPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = hgasUserToDepartmentTeamPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExcepthgasDepartmentTeamRelatedByDepartmentId(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasUserToDepartmentTeamPeer::addSelectColumns($c);
		$startcol2 = (hgasUserToDepartmentTeamPeer::NUM_COLUMNS - hgasUserToDepartmentTeamPeer::NUM_LAZY_LOAD_COLUMNS) + 1;


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasUserToDepartmentTeamPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExcepthgasDepartmentTeamRelatedByTeamId(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasUserToDepartmentTeamPeer::addSelectColumns($c);
		$startcol2 = (hgasUserToDepartmentTeamPeer::NUM_COLUMNS - hgasUserToDepartmentTeamPeer::NUM_LAZY_LOAD_COLUMNS) + 1;


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasUserToDepartmentTeamPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

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
		return hgasUserToDepartmentTeamPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(hgasUserToDepartmentTeamPeer::ID); 

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
			$comparison = $criteria->getComparison(hgasUserToDepartmentTeamPeer::ID);
			$selectCriteria->add(hgasUserToDepartmentTeamPeer::ID, $criteria->remove(hgasUserToDepartmentTeamPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(hgasUserToDepartmentTeamPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(hgasUserToDepartmentTeamPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof hgasUserToDepartmentTeam) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(hgasUserToDepartmentTeamPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(hgasUserToDepartmentTeam $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(hgasUserToDepartmentTeamPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(hgasUserToDepartmentTeamPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(hgasUserToDepartmentTeamPeer::DATABASE_NAME, hgasUserToDepartmentTeamPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = hgasUserToDepartmentTeamPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(hgasUserToDepartmentTeamPeer::DATABASE_NAME);

		$criteria->add(hgasUserToDepartmentTeamPeer::ID, $pk);


		$v = hgasUserToDepartmentTeamPeer::doSelect($criteria, $con);

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
			$criteria->add(hgasUserToDepartmentTeamPeer::ID, $pks, Criteria::IN);
			$objs = hgasUserToDepartmentTeamPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasehgasUserToDepartmentTeamPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hgas/map/hgasUserToDepartmentTeamMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hgas.map.hgasUserToDepartmentTeamMapBuilder');
}

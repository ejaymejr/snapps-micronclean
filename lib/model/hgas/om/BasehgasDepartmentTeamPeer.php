<?php


abstract class BasehgasDepartmentTeamPeer {

	
	const DATABASE_NAME = 'hgas';

	
	const TABLE_NAME = 'department_team';

	
	const CLASS_DEFAULT = 'lib.model.hgas.hgasDepartmentTeam';

	
	const NUM_COLUMNS = 6;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const DEPARTMENT_ID = 'department_team.DEPARTMENT_ID';

	
	const TEAM_ID = 'department_team.TEAM_ID';

	
	const TOTAL_SLOT_RESERVED = 'department_team.TOTAL_SLOT_RESERVED';

	
	const TOTAL_SLOT_ASSIGNED = 'department_team.TOTAL_SLOT_ASSIGNED';

	
	const TOTAL_SLOT_PENDING = 'department_team.TOTAL_SLOT_PENDING';

	
	const TOTAL_SLOT_IN_PROGRESS = 'department_team.TOTAL_SLOT_IN_PROGRESS';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('DepartmentId', 'TeamId', 'TotalSlotReserved', 'TotalSlotAssigned', 'TotalSlotPending', 'TotalSlotInProgress', ),
		BasePeer::TYPE_COLNAME => array (hgasDepartmentTeamPeer::DEPARTMENT_ID, hgasDepartmentTeamPeer::TEAM_ID, hgasDepartmentTeamPeer::TOTAL_SLOT_RESERVED, hgasDepartmentTeamPeer::TOTAL_SLOT_ASSIGNED, hgasDepartmentTeamPeer::TOTAL_SLOT_PENDING, hgasDepartmentTeamPeer::TOTAL_SLOT_IN_PROGRESS, ),
		BasePeer::TYPE_FIELDNAME => array ('department_id', 'team_id', 'total_slot_reserved', 'total_slot_assigned', 'total_slot_pending', 'total_slot_in_progress', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('DepartmentId' => 0, 'TeamId' => 1, 'TotalSlotReserved' => 2, 'TotalSlotAssigned' => 3, 'TotalSlotPending' => 4, 'TotalSlotInProgress' => 5, ),
		BasePeer::TYPE_COLNAME => array (hgasDepartmentTeamPeer::DEPARTMENT_ID => 0, hgasDepartmentTeamPeer::TEAM_ID => 1, hgasDepartmentTeamPeer::TOTAL_SLOT_RESERVED => 2, hgasDepartmentTeamPeer::TOTAL_SLOT_ASSIGNED => 3, hgasDepartmentTeamPeer::TOTAL_SLOT_PENDING => 4, hgasDepartmentTeamPeer::TOTAL_SLOT_IN_PROGRESS => 5, ),
		BasePeer::TYPE_FIELDNAME => array ('department_id' => 0, 'team_id' => 1, 'total_slot_reserved' => 2, 'total_slot_assigned' => 3, 'total_slot_pending' => 4, 'total_slot_in_progress' => 5, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hgas/map/hgasDepartmentTeamMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hgas.map.hgasDepartmentTeamMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = hgasDepartmentTeamPeer::getTableMap();
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
		return str_replace(hgasDepartmentTeamPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(hgasDepartmentTeamPeer::DEPARTMENT_ID);

		$criteria->addSelectColumn(hgasDepartmentTeamPeer::TEAM_ID);

		$criteria->addSelectColumn(hgasDepartmentTeamPeer::TOTAL_SLOT_RESERVED);

		$criteria->addSelectColumn(hgasDepartmentTeamPeer::TOTAL_SLOT_ASSIGNED);

		$criteria->addSelectColumn(hgasDepartmentTeamPeer::TOTAL_SLOT_PENDING);

		$criteria->addSelectColumn(hgasDepartmentTeamPeer::TOTAL_SLOT_IN_PROGRESS);

	}

	const COUNT = 'COUNT(department_team.DEPARTMENT_ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT department_team.DEPARTMENT_ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasDepartmentTeamPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasDepartmentTeamPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = hgasDepartmentTeamPeer::doSelectRS($criteria, $con);
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
		$objects = hgasDepartmentTeamPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return hgasDepartmentTeamPeer::populateObjects(hgasDepartmentTeamPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			hgasDepartmentTeamPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = hgasDepartmentTeamPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinhgasDepartment(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasDepartmentTeamPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasDepartmentTeamPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasDepartmentTeamPeer::DEPARTMENT_ID, hgasDepartmentPeer::ID);

		$rs = hgasDepartmentTeamPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinhgasTeam(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasDepartmentTeamPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasDepartmentTeamPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasDepartmentTeamPeer::TEAM_ID, hgasTeamPeer::ID);

		$rs = hgasDepartmentTeamPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinhgasDepartment(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasDepartmentTeamPeer::addSelectColumns($c);
		$startcol = (hgasDepartmentTeamPeer::NUM_COLUMNS - hgasDepartmentTeamPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		hgasDepartmentPeer::addSelectColumns($c);

		$c->addJoin(hgasDepartmentTeamPeer::DEPARTMENT_ID, hgasDepartmentPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasDepartmentTeamPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasDepartmentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->gethgasDepartment(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addhgasDepartmentTeam($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->inithgasDepartmentTeams();
				$obj2->addhgasDepartmentTeam($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinhgasTeam(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasDepartmentTeamPeer::addSelectColumns($c);
		$startcol = (hgasDepartmentTeamPeer::NUM_COLUMNS - hgasDepartmentTeamPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		hgasTeamPeer::addSelectColumns($c);

		$c->addJoin(hgasDepartmentTeamPeer::TEAM_ID, hgasTeamPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasDepartmentTeamPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasTeamPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->gethgasTeam(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addhgasDepartmentTeam($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->inithgasDepartmentTeams();
				$obj2->addhgasDepartmentTeam($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasDepartmentTeamPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasDepartmentTeamPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasDepartmentTeamPeer::DEPARTMENT_ID, hgasDepartmentPeer::ID);

		$criteria->addJoin(hgasDepartmentTeamPeer::TEAM_ID, hgasTeamPeer::ID);

		$rs = hgasDepartmentTeamPeer::doSelectRS($criteria, $con);
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

		hgasDepartmentTeamPeer::addSelectColumns($c);
		$startcol2 = (hgasDepartmentTeamPeer::NUM_COLUMNS - hgasDepartmentTeamPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasDepartmentPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasDepartmentPeer::NUM_COLUMNS;

		hgasTeamPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + hgasTeamPeer::NUM_COLUMNS;

		$c->addJoin(hgasDepartmentTeamPeer::DEPARTMENT_ID, hgasDepartmentPeer::ID);

		$c->addJoin(hgasDepartmentTeamPeer::TEAM_ID, hgasTeamPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasDepartmentTeamPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = hgasDepartmentPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasDepartment(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasDepartmentTeam($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasDepartmentTeams();
				$obj2->addhgasDepartmentTeam($obj1);
			}


					
			$omClass = hgasTeamPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->gethgasTeam(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addhgasDepartmentTeam($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->inithgasDepartmentTeams();
				$obj3->addhgasDepartmentTeam($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExcepthgasDepartment(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasDepartmentTeamPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasDepartmentTeamPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasDepartmentTeamPeer::TEAM_ID, hgasTeamPeer::ID);

		$rs = hgasDepartmentTeamPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExcepthgasTeam(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasDepartmentTeamPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasDepartmentTeamPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasDepartmentTeamPeer::DEPARTMENT_ID, hgasDepartmentPeer::ID);

		$rs = hgasDepartmentTeamPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExcepthgasDepartment(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasDepartmentTeamPeer::addSelectColumns($c);
		$startcol2 = (hgasDepartmentTeamPeer::NUM_COLUMNS - hgasDepartmentTeamPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasTeamPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasTeamPeer::NUM_COLUMNS;

		$c->addJoin(hgasDepartmentTeamPeer::TEAM_ID, hgasTeamPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasDepartmentTeamPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasTeamPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasTeam(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasDepartmentTeam($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasDepartmentTeams();
				$obj2->addhgasDepartmentTeam($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExcepthgasTeam(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasDepartmentTeamPeer::addSelectColumns($c);
		$startcol2 = (hgasDepartmentTeamPeer::NUM_COLUMNS - hgasDepartmentTeamPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasDepartmentPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasDepartmentPeer::NUM_COLUMNS;

		$c->addJoin(hgasDepartmentTeamPeer::DEPARTMENT_ID, hgasDepartmentPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasDepartmentTeamPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasDepartmentPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasDepartment(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasDepartmentTeam($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasDepartmentTeams();
				$obj2->addhgasDepartmentTeam($obj1);
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
		return hgasDepartmentTeamPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}


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
			$comparison = $criteria->getComparison(hgasDepartmentTeamPeer::DEPARTMENT_ID);
			$selectCriteria->add(hgasDepartmentTeamPeer::DEPARTMENT_ID, $criteria->remove(hgasDepartmentTeamPeer::DEPARTMENT_ID), $comparison);

			$comparison = $criteria->getComparison(hgasDepartmentTeamPeer::TEAM_ID);
			$selectCriteria->add(hgasDepartmentTeamPeer::TEAM_ID, $criteria->remove(hgasDepartmentTeamPeer::TEAM_ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(hgasDepartmentTeamPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(hgasDepartmentTeamPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof hgasDepartmentTeam) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
												if(count($values) == count($values, COUNT_RECURSIVE))
			{
								$values = array($values);
			}
			$vals = array();
			foreach($values as $value)
			{

				$vals[0][] = $value[0];
				$vals[1][] = $value[1];
			}

			$criteria->add(hgasDepartmentTeamPeer::DEPARTMENT_ID, $vals[0], Criteria::IN);
			$criteria->add(hgasDepartmentTeamPeer::TEAM_ID, $vals[1], Criteria::IN);
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

	
	public static function doValidate(hgasDepartmentTeam $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(hgasDepartmentTeamPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(hgasDepartmentTeamPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(hgasDepartmentTeamPeer::DATABASE_NAME, hgasDepartmentTeamPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = hgasDepartmentTeamPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK( $department_id, $team_id, $con = null) {
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$criteria = new Criteria();
		$criteria->add(hgasDepartmentTeamPeer::DEPARTMENT_ID, $department_id);
		$criteria->add(hgasDepartmentTeamPeer::TEAM_ID, $team_id);
		$v = hgasDepartmentTeamPeer::doSelect($criteria, $con);

		return !empty($v) ? $v[0] : null;
	}
} 
if (Propel::isInit()) {
			try {
		BasehgasDepartmentTeamPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hgas/map/hgasDepartmentTeamMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hgas.map.hgasDepartmentTeamMapBuilder');
}

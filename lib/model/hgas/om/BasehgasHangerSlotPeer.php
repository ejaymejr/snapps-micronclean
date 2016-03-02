<?php


abstract class BasehgasHangerSlotPeer {

	
	const DATABASE_NAME = 'hgas';

	
	const TABLE_NAME = 'hanger_slot';

	
	const CLASS_DEFAULT = 'lib.model.hgas.hgasHangerSlot';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hanger_slot.ID';

	
	const NAME = 'hanger_slot.NAME';

	
	const HANGER_ID = 'hanger_slot.HANGER_ID';

	
	const RACK_ID = 'hanger_slot.RACK_ID';

	
	const CELL_ID = 'hanger_slot.CELL_ID';

	
	const DEPARTMENT_ID = 'hanger_slot.DEPARTMENT_ID';

	
	const TEAM_ID = 'hanger_slot.TEAM_ID';

	
	const TAG_ID = 'hanger_slot.TAG_ID';

	
	const STATUS = 'hanger_slot.STATUS';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'HangerId', 'RackId', 'CellId', 'DepartmentId', 'TeamId', 'TagId', 'Status', ),
		BasePeer::TYPE_COLNAME => array (hgasHangerSlotPeer::ID, hgasHangerSlotPeer::NAME, hgasHangerSlotPeer::HANGER_ID, hgasHangerSlotPeer::RACK_ID, hgasHangerSlotPeer::CELL_ID, hgasHangerSlotPeer::DEPARTMENT_ID, hgasHangerSlotPeer::TEAM_ID, hgasHangerSlotPeer::TAG_ID, hgasHangerSlotPeer::STATUS, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'hanger_id', 'rack_id', 'cell_id', 'department_id', 'team_id', 'tag_id', 'status', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'HangerId' => 2, 'RackId' => 3, 'CellId' => 4, 'DepartmentId' => 5, 'TeamId' => 6, 'TagId' => 7, 'Status' => 8, ),
		BasePeer::TYPE_COLNAME => array (hgasHangerSlotPeer::ID => 0, hgasHangerSlotPeer::NAME => 1, hgasHangerSlotPeer::HANGER_ID => 2, hgasHangerSlotPeer::RACK_ID => 3, hgasHangerSlotPeer::CELL_ID => 4, hgasHangerSlotPeer::DEPARTMENT_ID => 5, hgasHangerSlotPeer::TEAM_ID => 6, hgasHangerSlotPeer::TAG_ID => 7, hgasHangerSlotPeer::STATUS => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'hanger_id' => 2, 'rack_id' => 3, 'cell_id' => 4, 'department_id' => 5, 'team_id' => 6, 'tag_id' => 7, 'status' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hgas/map/hgasHangerSlotMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hgas.map.hgasHangerSlotMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = hgasHangerSlotPeer::getTableMap();
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
		return str_replace(hgasHangerSlotPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(hgasHangerSlotPeer::ID);

		$criteria->addSelectColumn(hgasHangerSlotPeer::NAME);

		$criteria->addSelectColumn(hgasHangerSlotPeer::HANGER_ID);

		$criteria->addSelectColumn(hgasHangerSlotPeer::RACK_ID);

		$criteria->addSelectColumn(hgasHangerSlotPeer::CELL_ID);

		$criteria->addSelectColumn(hgasHangerSlotPeer::DEPARTMENT_ID);

		$criteria->addSelectColumn(hgasHangerSlotPeer::TEAM_ID);

		$criteria->addSelectColumn(hgasHangerSlotPeer::TAG_ID);

		$criteria->addSelectColumn(hgasHangerSlotPeer::STATUS);

	}

	const COUNT = 'COUNT(hanger_slot.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hanger_slot.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = hgasHangerSlotPeer::doSelectRS($criteria, $con);
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
		$objects = hgasHangerSlotPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return hgasHangerSlotPeer::populateObjects(hgasHangerSlotPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			hgasHangerSlotPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = hgasHangerSlotPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinhgasHanger(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasHangerSlotPeer::HANGER_ID, hgasHangerPeer::ID);

		$rs = hgasHangerSlotPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinhgasDepartmentTeamRelatedByDepartmentId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasHangerSlotPeer::DEPARTMENT_ID, hgasDepartmentTeamPeer::DEPARTMENT_ID);

		$rs = hgasHangerSlotPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasHangerSlotPeer::TEAM_ID, hgasDepartmentTeamPeer::TEAM_ID);

		$rs = hgasHangerSlotPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinhgasTag(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasHangerSlotPeer::TAG_ID, hgasTagPeer::ID);

		$rs = hgasHangerSlotPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinhgasHanger(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasHangerSlotPeer::addSelectColumns($c);
		$startcol = (hgasHangerSlotPeer::NUM_COLUMNS - hgasHangerSlotPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		hgasHangerPeer::addSelectColumns($c);

		$c->addJoin(hgasHangerSlotPeer::HANGER_ID, hgasHangerPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasHangerSlotPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasHangerPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->gethgasHanger(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addhgasHangerSlot($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->inithgasHangerSlots();
				$obj2->addhgasHangerSlot($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinhgasDepartmentTeamRelatedByDepartmentId(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasHangerSlotPeer::addSelectColumns($c);
		$startcol = (hgasHangerSlotPeer::NUM_COLUMNS - hgasHangerSlotPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		hgasDepartmentTeamPeer::addSelectColumns($c);

		$c->addJoin(hgasHangerSlotPeer::DEPARTMENT_ID, hgasDepartmentTeamPeer::DEPARTMENT_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasHangerSlotPeer::getOMClass();

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
										$temp_obj2->addhgasHangerSlotRelatedByDepartmentId($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->inithgasHangerSlotsRelatedByDepartmentId();
				$obj2->addhgasHangerSlotRelatedByDepartmentId($obj1); 			}
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

		hgasHangerSlotPeer::addSelectColumns($c);
		$startcol = (hgasHangerSlotPeer::NUM_COLUMNS - hgasHangerSlotPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		hgasDepartmentTeamPeer::addSelectColumns($c);

		$c->addJoin(hgasHangerSlotPeer::TEAM_ID, hgasDepartmentTeamPeer::TEAM_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasHangerSlotPeer::getOMClass();

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
										$temp_obj2->addhgasHangerSlotRelatedByTeamId($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->inithgasHangerSlotsRelatedByTeamId();
				$obj2->addhgasHangerSlotRelatedByTeamId($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinhgasTag(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasHangerSlotPeer::addSelectColumns($c);
		$startcol = (hgasHangerSlotPeer::NUM_COLUMNS - hgasHangerSlotPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		hgasTagPeer::addSelectColumns($c);

		$c->addJoin(hgasHangerSlotPeer::TAG_ID, hgasTagPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasHangerSlotPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasTagPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->gethgasTag(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addhgasHangerSlot($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->inithgasHangerSlots();
				$obj2->addhgasHangerSlot($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasHangerSlotPeer::HANGER_ID, hgasHangerPeer::ID);

		$criteria->addJoin(hgasHangerSlotPeer::DEPARTMENT_ID, hgasDepartmentTeamPeer::DEPARTMENT_ID);

		$criteria->addJoin(hgasHangerSlotPeer::TEAM_ID, hgasDepartmentTeamPeer::TEAM_ID);

		$criteria->addJoin(hgasHangerSlotPeer::TAG_ID, hgasTagPeer::ID);

		$rs = hgasHangerSlotPeer::doSelectRS($criteria, $con);
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

		hgasHangerSlotPeer::addSelectColumns($c);
		$startcol2 = (hgasHangerSlotPeer::NUM_COLUMNS - hgasHangerSlotPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasHangerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasHangerPeer::NUM_COLUMNS;

		hgasDepartmentTeamPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + hgasDepartmentTeamPeer::NUM_COLUMNS;

		hgasDepartmentTeamPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + hgasDepartmentTeamPeer::NUM_COLUMNS;

		hgasTagPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + hgasTagPeer::NUM_COLUMNS;

		$c->addJoin(hgasHangerSlotPeer::HANGER_ID, hgasHangerPeer::ID);

		$c->addJoin(hgasHangerSlotPeer::DEPARTMENT_ID, hgasDepartmentTeamPeer::DEPARTMENT_ID);

		$c->addJoin(hgasHangerSlotPeer::TEAM_ID, hgasDepartmentTeamPeer::TEAM_ID);

		$c->addJoin(hgasHangerSlotPeer::TAG_ID, hgasTagPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasHangerSlotPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = hgasHangerPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasHanger(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasHangerSlot($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasHangerSlots();
				$obj2->addhgasHangerSlot($obj1);
			}


					
			$omClass = hgasDepartmentTeamPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->gethgasDepartmentTeamRelatedByDepartmentId(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addhgasHangerSlotRelatedByDepartmentId($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->inithgasHangerSlotsRelatedByDepartmentId();
				$obj3->addhgasHangerSlotRelatedByDepartmentId($obj1);
			}


					
			$omClass = hgasDepartmentTeamPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->gethgasDepartmentTeamRelatedByTeamId(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addhgasHangerSlotRelatedByTeamId($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->inithgasHangerSlotsRelatedByTeamId();
				$obj4->addhgasHangerSlotRelatedByTeamId($obj1);
			}


					
			$omClass = hgasTagPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->gethgasTag(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addhgasHangerSlot($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->inithgasHangerSlots();
				$obj5->addhgasHangerSlot($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExcepthgasHanger(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasHangerSlotPeer::DEPARTMENT_ID, hgasDepartmentTeamPeer::DEPARTMENT_ID);

		$criteria->addJoin(hgasHangerSlotPeer::TEAM_ID, hgasDepartmentTeamPeer::TEAM_ID);

		$criteria->addJoin(hgasHangerSlotPeer::TAG_ID, hgasTagPeer::ID);

		$rs = hgasHangerSlotPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExcepthgasDepartmentTeamRelatedByDepartmentId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasHangerSlotPeer::HANGER_ID, hgasHangerPeer::ID);

		$criteria->addJoin(hgasHangerSlotPeer::TAG_ID, hgasTagPeer::ID);

		$rs = hgasHangerSlotPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasHangerSlotPeer::HANGER_ID, hgasHangerPeer::ID);

		$criteria->addJoin(hgasHangerSlotPeer::TAG_ID, hgasTagPeer::ID);

		$rs = hgasHangerSlotPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExcepthgasTag(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasHangerSlotPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasHangerSlotPeer::HANGER_ID, hgasHangerPeer::ID);

		$criteria->addJoin(hgasHangerSlotPeer::DEPARTMENT_ID, hgasDepartmentTeamPeer::DEPARTMENT_ID);

		$criteria->addJoin(hgasHangerSlotPeer::TEAM_ID, hgasDepartmentTeamPeer::TEAM_ID);

		$rs = hgasHangerSlotPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExcepthgasHanger(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasHangerSlotPeer::addSelectColumns($c);
		$startcol2 = (hgasHangerSlotPeer::NUM_COLUMNS - hgasHangerSlotPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasDepartmentTeamPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasDepartmentTeamPeer::NUM_COLUMNS;

		hgasDepartmentTeamPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + hgasDepartmentTeamPeer::NUM_COLUMNS;

		hgasTagPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + hgasTagPeer::NUM_COLUMNS;

		$c->addJoin(hgasHangerSlotPeer::DEPARTMENT_ID, hgasDepartmentTeamPeer::DEPARTMENT_ID);

		$c->addJoin(hgasHangerSlotPeer::TEAM_ID, hgasDepartmentTeamPeer::TEAM_ID);

		$c->addJoin(hgasHangerSlotPeer::TAG_ID, hgasTagPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasHangerSlotPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasDepartmentTeamPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasDepartmentTeamRelatedByDepartmentId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasHangerSlotRelatedByDepartmentId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasHangerSlotsRelatedByDepartmentId();
				$obj2->addhgasHangerSlotRelatedByDepartmentId($obj1);
			}

			$omClass = hgasDepartmentTeamPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->gethgasDepartmentTeamRelatedByTeamId(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addhgasHangerSlotRelatedByTeamId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->inithgasHangerSlotsRelatedByTeamId();
				$obj3->addhgasHangerSlotRelatedByTeamId($obj1);
			}

			$omClass = hgasTagPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->gethgasTag(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addhgasHangerSlot($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->inithgasHangerSlots();
				$obj4->addhgasHangerSlot($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExcepthgasDepartmentTeamRelatedByDepartmentId(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasHangerSlotPeer::addSelectColumns($c);
		$startcol2 = (hgasHangerSlotPeer::NUM_COLUMNS - hgasHangerSlotPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasHangerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasHangerPeer::NUM_COLUMNS;

		hgasTagPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + hgasTagPeer::NUM_COLUMNS;

		$c->addJoin(hgasHangerSlotPeer::HANGER_ID, hgasHangerPeer::ID);

		$c->addJoin(hgasHangerSlotPeer::TAG_ID, hgasTagPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasHangerSlotPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasHangerPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasHanger(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasHangerSlot($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasHangerSlots();
				$obj2->addhgasHangerSlot($obj1);
			}

			$omClass = hgasTagPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->gethgasTag(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addhgasHangerSlot($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->inithgasHangerSlots();
				$obj3->addhgasHangerSlot($obj1);
			}

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

		hgasHangerSlotPeer::addSelectColumns($c);
		$startcol2 = (hgasHangerSlotPeer::NUM_COLUMNS - hgasHangerSlotPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasHangerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasHangerPeer::NUM_COLUMNS;

		hgasTagPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + hgasTagPeer::NUM_COLUMNS;

		$c->addJoin(hgasHangerSlotPeer::HANGER_ID, hgasHangerPeer::ID);

		$c->addJoin(hgasHangerSlotPeer::TAG_ID, hgasTagPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasHangerSlotPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasHangerPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasHanger(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasHangerSlot($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasHangerSlots();
				$obj2->addhgasHangerSlot($obj1);
			}

			$omClass = hgasTagPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->gethgasTag(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addhgasHangerSlot($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->inithgasHangerSlots();
				$obj3->addhgasHangerSlot($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExcepthgasTag(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasHangerSlotPeer::addSelectColumns($c);
		$startcol2 = (hgasHangerSlotPeer::NUM_COLUMNS - hgasHangerSlotPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasHangerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasHangerPeer::NUM_COLUMNS;

		hgasDepartmentTeamPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + hgasDepartmentTeamPeer::NUM_COLUMNS;

		hgasDepartmentTeamPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + hgasDepartmentTeamPeer::NUM_COLUMNS;

		$c->addJoin(hgasHangerSlotPeer::HANGER_ID, hgasHangerPeer::ID);

		$c->addJoin(hgasHangerSlotPeer::DEPARTMENT_ID, hgasDepartmentTeamPeer::DEPARTMENT_ID);

		$c->addJoin(hgasHangerSlotPeer::TEAM_ID, hgasDepartmentTeamPeer::TEAM_ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasHangerSlotPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasHangerPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasHanger(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasHangerSlot($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasHangerSlots();
				$obj2->addhgasHangerSlot($obj1);
			}

			$omClass = hgasDepartmentTeamPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->gethgasDepartmentTeamRelatedByDepartmentId(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addhgasHangerSlotRelatedByDepartmentId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->inithgasHangerSlotsRelatedByDepartmentId();
				$obj3->addhgasHangerSlotRelatedByDepartmentId($obj1);
			}

			$omClass = hgasDepartmentTeamPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->gethgasDepartmentTeamRelatedByTeamId(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addhgasHangerSlotRelatedByTeamId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->inithgasHangerSlotsRelatedByTeamId();
				$obj4->addhgasHangerSlotRelatedByTeamId($obj1);
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
		return hgasHangerSlotPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(hgasHangerSlotPeer::ID); 

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
			$comparison = $criteria->getComparison(hgasHangerSlotPeer::ID);
			$selectCriteria->add(hgasHangerSlotPeer::ID, $criteria->remove(hgasHangerSlotPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(hgasHangerSlotPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(hgasHangerSlotPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof hgasHangerSlot) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(hgasHangerSlotPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(hgasHangerSlot $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(hgasHangerSlotPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(hgasHangerSlotPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(hgasHangerSlotPeer::DATABASE_NAME, hgasHangerSlotPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = hgasHangerSlotPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(hgasHangerSlotPeer::DATABASE_NAME);

		$criteria->add(hgasHangerSlotPeer::ID, $pk);


		$v = hgasHangerSlotPeer::doSelect($criteria, $con);

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
			$criteria->add(hgasHangerSlotPeer::ID, $pks, Criteria::IN);
			$objs = hgasHangerSlotPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasehgasHangerSlotPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hgas/map/hgasHangerSlotMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hgas.map.hgasHangerSlotMapBuilder');
}

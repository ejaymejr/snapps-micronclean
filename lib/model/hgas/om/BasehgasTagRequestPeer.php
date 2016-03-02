<?php


abstract class BasehgasTagRequestPeer {

	
	const DATABASE_NAME = 'hgas';

	
	const TABLE_NAME = 'tag_request';

	
	const CLASS_DEFAULT = 'lib.model.hgas.hgasTagRequest';

	
	const NUM_COLUMNS = 11;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'tag_request.ID';

	
	const HANGER_SLOT_ID = 'tag_request.HANGER_SLOT_ID';

	
	const BEFORE_TAG_ID = 'tag_request.BEFORE_TAG_ID';

	
	const AFTER_TAG_ID = 'tag_request.AFTER_TAG_ID';

	
	const STATUS = 'tag_request.STATUS';

	
	const REQUESTED_BY = 'tag_request.REQUESTED_BY';

	
	const DATE_REQUESTED = 'tag_request.DATE_REQUESTED';

	
	const IP_SET_BY = 'tag_request.IP_SET_BY';

	
	const DATE_IP_SET = 'tag_request.DATE_IP_SET';

	
	const COMPLETED_BY = 'tag_request.COMPLETED_BY';

	
	const DATE_COMPLETED = 'tag_request.DATE_COMPLETED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'HangerSlotId', 'BeforeTagId', 'AfterTagId', 'Status', 'RequestedBy', 'DateRequested', 'IpSetBy', 'DateIpSet', 'CompletedBy', 'DateCompleted', ),
		BasePeer::TYPE_COLNAME => array (hgasTagRequestPeer::ID, hgasTagRequestPeer::HANGER_SLOT_ID, hgasTagRequestPeer::BEFORE_TAG_ID, hgasTagRequestPeer::AFTER_TAG_ID, hgasTagRequestPeer::STATUS, hgasTagRequestPeer::REQUESTED_BY, hgasTagRequestPeer::DATE_REQUESTED, hgasTagRequestPeer::IP_SET_BY, hgasTagRequestPeer::DATE_IP_SET, hgasTagRequestPeer::COMPLETED_BY, hgasTagRequestPeer::DATE_COMPLETED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'hanger_slot_id', 'before_tag_id', 'after_tag_id', 'status', 'requested_by', 'date_requested', 'ip_set_by', 'date_ip_set', 'completed_by', 'date_completed', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'HangerSlotId' => 1, 'BeforeTagId' => 2, 'AfterTagId' => 3, 'Status' => 4, 'RequestedBy' => 5, 'DateRequested' => 6, 'IpSetBy' => 7, 'DateIpSet' => 8, 'CompletedBy' => 9, 'DateCompleted' => 10, ),
		BasePeer::TYPE_COLNAME => array (hgasTagRequestPeer::ID => 0, hgasTagRequestPeer::HANGER_SLOT_ID => 1, hgasTagRequestPeer::BEFORE_TAG_ID => 2, hgasTagRequestPeer::AFTER_TAG_ID => 3, hgasTagRequestPeer::STATUS => 4, hgasTagRequestPeer::REQUESTED_BY => 5, hgasTagRequestPeer::DATE_REQUESTED => 6, hgasTagRequestPeer::IP_SET_BY => 7, hgasTagRequestPeer::DATE_IP_SET => 8, hgasTagRequestPeer::COMPLETED_BY => 9, hgasTagRequestPeer::DATE_COMPLETED => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'hanger_slot_id' => 1, 'before_tag_id' => 2, 'after_tag_id' => 3, 'status' => 4, 'requested_by' => 5, 'date_requested' => 6, 'ip_set_by' => 7, 'date_ip_set' => 8, 'completed_by' => 9, 'date_completed' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hgas/map/hgasTagRequestMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hgas.map.hgasTagRequestMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = hgasTagRequestPeer::getTableMap();
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
		return str_replace(hgasTagRequestPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(hgasTagRequestPeer::ID);

		$criteria->addSelectColumn(hgasTagRequestPeer::HANGER_SLOT_ID);

		$criteria->addSelectColumn(hgasTagRequestPeer::BEFORE_TAG_ID);

		$criteria->addSelectColumn(hgasTagRequestPeer::AFTER_TAG_ID);

		$criteria->addSelectColumn(hgasTagRequestPeer::STATUS);

		$criteria->addSelectColumn(hgasTagRequestPeer::REQUESTED_BY);

		$criteria->addSelectColumn(hgasTagRequestPeer::DATE_REQUESTED);

		$criteria->addSelectColumn(hgasTagRequestPeer::IP_SET_BY);

		$criteria->addSelectColumn(hgasTagRequestPeer::DATE_IP_SET);

		$criteria->addSelectColumn(hgasTagRequestPeer::COMPLETED_BY);

		$criteria->addSelectColumn(hgasTagRequestPeer::DATE_COMPLETED);

	}

	const COUNT = 'COUNT(tag_request.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tag_request.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = hgasTagRequestPeer::doSelectRS($criteria, $con);
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
		$objects = hgasTagRequestPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return hgasTagRequestPeer::populateObjects(hgasTagRequestPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			hgasTagRequestPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = hgasTagRequestPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinhgasHangerSlot(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasTagRequestPeer::HANGER_SLOT_ID, hgasHangerSlotPeer::ID);

		$rs = hgasTagRequestPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinhgasTagRelatedByBeforeTagId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasTagRequestPeer::BEFORE_TAG_ID, hgasTagPeer::ID);

		$rs = hgasTagRequestPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinhgasTagRelatedByAfterTagId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasTagRequestPeer::AFTER_TAG_ID, hgasTagPeer::ID);

		$rs = hgasTagRequestPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinhgasHangerSlot(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasTagRequestPeer::addSelectColumns($c);
		$startcol = (hgasTagRequestPeer::NUM_COLUMNS - hgasTagRequestPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		hgasHangerSlotPeer::addSelectColumns($c);

		$c->addJoin(hgasTagRequestPeer::HANGER_SLOT_ID, hgasHangerSlotPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasTagRequestPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasHangerSlotPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->gethgasHangerSlot(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addhgasTagRequest($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->inithgasTagRequests();
				$obj2->addhgasTagRequest($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinhgasTagRelatedByBeforeTagId(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasTagRequestPeer::addSelectColumns($c);
		$startcol = (hgasTagRequestPeer::NUM_COLUMNS - hgasTagRequestPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		hgasTagPeer::addSelectColumns($c);

		$c->addJoin(hgasTagRequestPeer::BEFORE_TAG_ID, hgasTagPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasTagRequestPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasTagPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->gethgasTagRelatedByBeforeTagId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addhgasTagRequestRelatedByBeforeTagId($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->inithgasTagRequestsRelatedByBeforeTagId();
				$obj2->addhgasTagRequestRelatedByBeforeTagId($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinhgasTagRelatedByAfterTagId(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasTagRequestPeer::addSelectColumns($c);
		$startcol = (hgasTagRequestPeer::NUM_COLUMNS - hgasTagRequestPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		hgasTagPeer::addSelectColumns($c);

		$c->addJoin(hgasTagRequestPeer::AFTER_TAG_ID, hgasTagPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasTagRequestPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasTagPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->gethgasTagRelatedByAfterTagId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addhgasTagRequestRelatedByAfterTagId($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->inithgasTagRequestsRelatedByAfterTagId();
				$obj2->addhgasTagRequestRelatedByAfterTagId($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasTagRequestPeer::HANGER_SLOT_ID, hgasHangerSlotPeer::ID);

		$criteria->addJoin(hgasTagRequestPeer::BEFORE_TAG_ID, hgasTagPeer::ID);

		$criteria->addJoin(hgasTagRequestPeer::AFTER_TAG_ID, hgasTagPeer::ID);

		$rs = hgasTagRequestPeer::doSelectRS($criteria, $con);
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

		hgasTagRequestPeer::addSelectColumns($c);
		$startcol2 = (hgasTagRequestPeer::NUM_COLUMNS - hgasTagRequestPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasHangerSlotPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasHangerSlotPeer::NUM_COLUMNS;

		hgasTagPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + hgasTagPeer::NUM_COLUMNS;

		hgasTagPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + hgasTagPeer::NUM_COLUMNS;

		$c->addJoin(hgasTagRequestPeer::HANGER_SLOT_ID, hgasHangerSlotPeer::ID);

		$c->addJoin(hgasTagRequestPeer::BEFORE_TAG_ID, hgasTagPeer::ID);

		$c->addJoin(hgasTagRequestPeer::AFTER_TAG_ID, hgasTagPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasTagRequestPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = hgasHangerSlotPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasHangerSlot(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasTagRequest($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasTagRequests();
				$obj2->addhgasTagRequest($obj1);
			}


					
			$omClass = hgasTagPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->gethgasTagRelatedByBeforeTagId(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addhgasTagRequestRelatedByBeforeTagId($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->inithgasTagRequestsRelatedByBeforeTagId();
				$obj3->addhgasTagRequestRelatedByBeforeTagId($obj1);
			}


					
			$omClass = hgasTagPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->gethgasTagRelatedByAfterTagId(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addhgasTagRequestRelatedByAfterTagId($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->inithgasTagRequestsRelatedByAfterTagId();
				$obj4->addhgasTagRequestRelatedByAfterTagId($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExcepthgasHangerSlot(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasTagRequestPeer::BEFORE_TAG_ID, hgasTagPeer::ID);

		$criteria->addJoin(hgasTagRequestPeer::AFTER_TAG_ID, hgasTagPeer::ID);

		$rs = hgasTagRequestPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExcepthgasTagRelatedByBeforeTagId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasTagRequestPeer::HANGER_SLOT_ID, hgasHangerSlotPeer::ID);

		$rs = hgasTagRequestPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExcepthgasTagRelatedByAfterTagId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasTagRequestPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(hgasTagRequestPeer::HANGER_SLOT_ID, hgasHangerSlotPeer::ID);

		$rs = hgasTagRequestPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExcepthgasHangerSlot(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasTagRequestPeer::addSelectColumns($c);
		$startcol2 = (hgasTagRequestPeer::NUM_COLUMNS - hgasTagRequestPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasTagPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasTagPeer::NUM_COLUMNS;

		hgasTagPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + hgasTagPeer::NUM_COLUMNS;

		$c->addJoin(hgasTagRequestPeer::BEFORE_TAG_ID, hgasTagPeer::ID);

		$c->addJoin(hgasTagRequestPeer::AFTER_TAG_ID, hgasTagPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasTagRequestPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasTagPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasTagRelatedByBeforeTagId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasTagRequestRelatedByBeforeTagId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasTagRequestsRelatedByBeforeTagId();
				$obj2->addhgasTagRequestRelatedByBeforeTagId($obj1);
			}

			$omClass = hgasTagPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->gethgasTagRelatedByAfterTagId(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addhgasTagRequestRelatedByAfterTagId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->inithgasTagRequestsRelatedByAfterTagId();
				$obj3->addhgasTagRequestRelatedByAfterTagId($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExcepthgasTagRelatedByBeforeTagId(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasTagRequestPeer::addSelectColumns($c);
		$startcol2 = (hgasTagRequestPeer::NUM_COLUMNS - hgasTagRequestPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasHangerSlotPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasHangerSlotPeer::NUM_COLUMNS;

		$c->addJoin(hgasTagRequestPeer::HANGER_SLOT_ID, hgasHangerSlotPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasTagRequestPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasHangerSlotPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasHangerSlot(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasTagRequest($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasTagRequests();
				$obj2->addhgasTagRequest($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExcepthgasTagRelatedByAfterTagId(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		hgasTagRequestPeer::addSelectColumns($c);
		$startcol2 = (hgasTagRequestPeer::NUM_COLUMNS - hgasTagRequestPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		hgasHangerSlotPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + hgasHangerSlotPeer::NUM_COLUMNS;

		$c->addJoin(hgasTagRequestPeer::HANGER_SLOT_ID, hgasHangerSlotPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = hgasTagRequestPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = hgasHangerSlotPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->gethgasHangerSlot(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addhgasTagRequest($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->inithgasTagRequests();
				$obj2->addhgasTagRequest($obj1);
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
		return hgasTagRequestPeer::CLASS_DEFAULT;
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
			$comparison = $criteria->getComparison(hgasTagRequestPeer::ID);
			$selectCriteria->add(hgasTagRequestPeer::ID, $criteria->remove(hgasTagRequestPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(hgasTagRequestPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(hgasTagRequestPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof hgasTagRequest) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(hgasTagRequestPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(hgasTagRequest $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(hgasTagRequestPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(hgasTagRequestPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(hgasTagRequestPeer::DATABASE_NAME, hgasTagRequestPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = hgasTagRequestPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(hgasTagRequestPeer::DATABASE_NAME);

		$criteria->add(hgasTagRequestPeer::ID, $pk);


		$v = hgasTagRequestPeer::doSelect($criteria, $con);

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
			$criteria->add(hgasTagRequestPeer::ID, $pks, Criteria::IN);
			$objs = hgasTagRequestPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasehgasTagRequestPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hgas/map/hgasTagRequestMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hgas.map.hgasTagRequestMapBuilder');
}

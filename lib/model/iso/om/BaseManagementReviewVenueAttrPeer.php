<?php


abstract class BaseManagementReviewVenueAttrPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'management_review_venue_attr';

	
	const CLASS_DEFAULT = 'lib.model.iso.ManagementReviewVenueAttr';

	
	const NUM_COLUMNS = 6;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'management_review_venue_attr.ID';

	
	const VENUE = 'management_review_venue_attr.VENUE';

	
	const DATE_CREATED = 'management_review_venue_attr.DATE_CREATED';

	
	const CREATED_BY = 'management_review_venue_attr.CREATED_BY';

	
	const DATE_MODIFIED = 'management_review_venue_attr.DATE_MODIFIED';

	
	const MODIFIED_BY = 'management_review_venue_attr.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Venue', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (ManagementReviewVenueAttrPeer::ID, ManagementReviewVenueAttrPeer::VENUE, ManagementReviewVenueAttrPeer::DATE_CREATED, ManagementReviewVenueAttrPeer::CREATED_BY, ManagementReviewVenueAttrPeer::DATE_MODIFIED, ManagementReviewVenueAttrPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'venue', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Venue' => 1, 'DateCreated' => 2, 'CreatedBy' => 3, 'DateModified' => 4, 'ModifiedBy' => 5, ),
		BasePeer::TYPE_COLNAME => array (ManagementReviewVenueAttrPeer::ID => 0, ManagementReviewVenueAttrPeer::VENUE => 1, ManagementReviewVenueAttrPeer::DATE_CREATED => 2, ManagementReviewVenueAttrPeer::CREATED_BY => 3, ManagementReviewVenueAttrPeer::DATE_MODIFIED => 4, ManagementReviewVenueAttrPeer::MODIFIED_BY => 5, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'venue' => 1, 'date_created' => 2, 'created_by' => 3, 'date_modified' => 4, 'modified_by' => 5, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/ManagementReviewVenueAttrMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.ManagementReviewVenueAttrMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ManagementReviewVenueAttrPeer::getTableMap();
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
		return str_replace(ManagementReviewVenueAttrPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ManagementReviewVenueAttrPeer::ID);

		$criteria->addSelectColumn(ManagementReviewVenueAttrPeer::VENUE);

		$criteria->addSelectColumn(ManagementReviewVenueAttrPeer::DATE_CREATED);

		$criteria->addSelectColumn(ManagementReviewVenueAttrPeer::CREATED_BY);

		$criteria->addSelectColumn(ManagementReviewVenueAttrPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(ManagementReviewVenueAttrPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(management_review_venue_attr.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT management_review_venue_attr.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ManagementReviewVenueAttrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ManagementReviewVenueAttrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ManagementReviewVenueAttrPeer::doSelectRS($criteria, $con);
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
		$objects = ManagementReviewVenueAttrPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ManagementReviewVenueAttrPeer::populateObjects(ManagementReviewVenueAttrPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ManagementReviewVenueAttrPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ManagementReviewVenueAttrPeer::getOMClass();
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
		return ManagementReviewVenueAttrPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ManagementReviewVenueAttrPeer::ID); 

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
			$comparison = $criteria->getComparison(ManagementReviewVenueAttrPeer::ID);
			$selectCriteria->add(ManagementReviewVenueAttrPeer::ID, $criteria->remove(ManagementReviewVenueAttrPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ManagementReviewVenueAttrPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ManagementReviewVenueAttrPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ManagementReviewVenueAttr) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ManagementReviewVenueAttrPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ManagementReviewVenueAttr $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ManagementReviewVenueAttrPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ManagementReviewVenueAttrPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ManagementReviewVenueAttrPeer::DATABASE_NAME, ManagementReviewVenueAttrPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ManagementReviewVenueAttrPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ManagementReviewVenueAttrPeer::DATABASE_NAME);

		$criteria->add(ManagementReviewVenueAttrPeer::ID, $pk);


		$v = ManagementReviewVenueAttrPeer::doSelect($criteria, $con);

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
			$criteria->add(ManagementReviewVenueAttrPeer::ID, $pks, Criteria::IN);
			$objs = ManagementReviewVenueAttrPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseManagementReviewVenueAttrPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/ManagementReviewVenueAttrMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.ManagementReviewVenueAttrMapBuilder');
}

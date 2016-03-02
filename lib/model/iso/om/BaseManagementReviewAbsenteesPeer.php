<?php


abstract class BaseManagementReviewAbsenteesPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'management_review_absentees';

	
	const CLASS_DEFAULT = 'lib.model.iso.ManagementReviewAbsentees';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'management_review_absentees.ID';

	
	const MANAGEMENT_REVIEW_ID = 'management_review_absentees.MANAGEMENT_REVIEW_ID';

	
	const NAME = 'management_review_absentees.NAME';

	
	const DATE_CREATED = 'management_review_absentees.DATE_CREATED';

	
	const CREATED_BY = 'management_review_absentees.CREATED_BY';

	
	const DATE_MODIFIED = 'management_review_absentees.DATE_MODIFIED';

	
	const MODIFIED_BY = 'management_review_absentees.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ManagementReviewId', 'Name', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (ManagementReviewAbsenteesPeer::ID, ManagementReviewAbsenteesPeer::MANAGEMENT_REVIEW_ID, ManagementReviewAbsenteesPeer::NAME, ManagementReviewAbsenteesPeer::DATE_CREATED, ManagementReviewAbsenteesPeer::CREATED_BY, ManagementReviewAbsenteesPeer::DATE_MODIFIED, ManagementReviewAbsenteesPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'management_review_id', 'name', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ManagementReviewId' => 1, 'Name' => 2, 'DateCreated' => 3, 'CreatedBy' => 4, 'DateModified' => 5, 'ModifiedBy' => 6, ),
		BasePeer::TYPE_COLNAME => array (ManagementReviewAbsenteesPeer::ID => 0, ManagementReviewAbsenteesPeer::MANAGEMENT_REVIEW_ID => 1, ManagementReviewAbsenteesPeer::NAME => 2, ManagementReviewAbsenteesPeer::DATE_CREATED => 3, ManagementReviewAbsenteesPeer::CREATED_BY => 4, ManagementReviewAbsenteesPeer::DATE_MODIFIED => 5, ManagementReviewAbsenteesPeer::MODIFIED_BY => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'management_review_id' => 1, 'name' => 2, 'date_created' => 3, 'created_by' => 4, 'date_modified' => 5, 'modified_by' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/ManagementReviewAbsenteesMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.ManagementReviewAbsenteesMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ManagementReviewAbsenteesPeer::getTableMap();
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
		return str_replace(ManagementReviewAbsenteesPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ManagementReviewAbsenteesPeer::ID);

		$criteria->addSelectColumn(ManagementReviewAbsenteesPeer::MANAGEMENT_REVIEW_ID);

		$criteria->addSelectColumn(ManagementReviewAbsenteesPeer::NAME);

		$criteria->addSelectColumn(ManagementReviewAbsenteesPeer::DATE_CREATED);

		$criteria->addSelectColumn(ManagementReviewAbsenteesPeer::CREATED_BY);

		$criteria->addSelectColumn(ManagementReviewAbsenteesPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(ManagementReviewAbsenteesPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(management_review_absentees.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT management_review_absentees.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ManagementReviewAbsenteesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ManagementReviewAbsenteesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ManagementReviewAbsenteesPeer::doSelectRS($criteria, $con);
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
		$objects = ManagementReviewAbsenteesPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ManagementReviewAbsenteesPeer::populateObjects(ManagementReviewAbsenteesPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ManagementReviewAbsenteesPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ManagementReviewAbsenteesPeer::getOMClass();
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
		return ManagementReviewAbsenteesPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ManagementReviewAbsenteesPeer::ID); 

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
			$comparison = $criteria->getComparison(ManagementReviewAbsenteesPeer::ID);
			$selectCriteria->add(ManagementReviewAbsenteesPeer::ID, $criteria->remove(ManagementReviewAbsenteesPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ManagementReviewAbsenteesPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ManagementReviewAbsenteesPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ManagementReviewAbsentees) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ManagementReviewAbsenteesPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ManagementReviewAbsentees $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ManagementReviewAbsenteesPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ManagementReviewAbsenteesPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ManagementReviewAbsenteesPeer::DATABASE_NAME, ManagementReviewAbsenteesPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ManagementReviewAbsenteesPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ManagementReviewAbsenteesPeer::DATABASE_NAME);

		$criteria->add(ManagementReviewAbsenteesPeer::ID, $pk);


		$v = ManagementReviewAbsenteesPeer::doSelect($criteria, $con);

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
			$criteria->add(ManagementReviewAbsenteesPeer::ID, $pks, Criteria::IN);
			$objs = ManagementReviewAbsenteesPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseManagementReviewAbsenteesPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/ManagementReviewAbsenteesMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.ManagementReviewAbsenteesMapBuilder');
}

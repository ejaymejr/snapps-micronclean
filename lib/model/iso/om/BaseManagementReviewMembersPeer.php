<?php


abstract class BaseManagementReviewMembersPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'management_review_members';

	
	const CLASS_DEFAULT = 'lib.model.iso.ManagementReviewMembers';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'management_review_members.ID';

	
	const MANAGEMENT_REVIEW_ID = 'management_review_members.MANAGEMENT_REVIEW_ID';

	
	const NAME = 'management_review_members.NAME';

	
	const DATE_CREATED = 'management_review_members.DATE_CREATED';

	
	const CREATED_BY = 'management_review_members.CREATED_BY';

	
	const DATE_MODIFIED = 'management_review_members.DATE_MODIFIED';

	
	const MODIFIED_BY = 'management_review_members.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ManagementReviewId', 'Name', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (ManagementReviewMembersPeer::ID, ManagementReviewMembersPeer::MANAGEMENT_REVIEW_ID, ManagementReviewMembersPeer::NAME, ManagementReviewMembersPeer::DATE_CREATED, ManagementReviewMembersPeer::CREATED_BY, ManagementReviewMembersPeer::DATE_MODIFIED, ManagementReviewMembersPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'management_review_id', 'name', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ManagementReviewId' => 1, 'Name' => 2, 'DateCreated' => 3, 'CreatedBy' => 4, 'DateModified' => 5, 'ModifiedBy' => 6, ),
		BasePeer::TYPE_COLNAME => array (ManagementReviewMembersPeer::ID => 0, ManagementReviewMembersPeer::MANAGEMENT_REVIEW_ID => 1, ManagementReviewMembersPeer::NAME => 2, ManagementReviewMembersPeer::DATE_CREATED => 3, ManagementReviewMembersPeer::CREATED_BY => 4, ManagementReviewMembersPeer::DATE_MODIFIED => 5, ManagementReviewMembersPeer::MODIFIED_BY => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'management_review_id' => 1, 'name' => 2, 'date_created' => 3, 'created_by' => 4, 'date_modified' => 5, 'modified_by' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/ManagementReviewMembersMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.ManagementReviewMembersMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ManagementReviewMembersPeer::getTableMap();
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
		return str_replace(ManagementReviewMembersPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ManagementReviewMembersPeer::ID);

		$criteria->addSelectColumn(ManagementReviewMembersPeer::MANAGEMENT_REVIEW_ID);

		$criteria->addSelectColumn(ManagementReviewMembersPeer::NAME);

		$criteria->addSelectColumn(ManagementReviewMembersPeer::DATE_CREATED);

		$criteria->addSelectColumn(ManagementReviewMembersPeer::CREATED_BY);

		$criteria->addSelectColumn(ManagementReviewMembersPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(ManagementReviewMembersPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(management_review_members.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT management_review_members.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ManagementReviewMembersPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ManagementReviewMembersPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ManagementReviewMembersPeer::doSelectRS($criteria, $con);
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
		$objects = ManagementReviewMembersPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ManagementReviewMembersPeer::populateObjects(ManagementReviewMembersPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ManagementReviewMembersPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ManagementReviewMembersPeer::getOMClass();
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
		return ManagementReviewMembersPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ManagementReviewMembersPeer::ID); 

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
			$comparison = $criteria->getComparison(ManagementReviewMembersPeer::ID);
			$selectCriteria->add(ManagementReviewMembersPeer::ID, $criteria->remove(ManagementReviewMembersPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ManagementReviewMembersPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ManagementReviewMembersPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ManagementReviewMembers) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ManagementReviewMembersPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ManagementReviewMembers $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ManagementReviewMembersPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ManagementReviewMembersPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ManagementReviewMembersPeer::DATABASE_NAME, ManagementReviewMembersPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ManagementReviewMembersPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ManagementReviewMembersPeer::DATABASE_NAME);

		$criteria->add(ManagementReviewMembersPeer::ID, $pk);


		$v = ManagementReviewMembersPeer::doSelect($criteria, $con);

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
			$criteria->add(ManagementReviewMembersPeer::ID, $pks, Criteria::IN);
			$objs = ManagementReviewMembersPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseManagementReviewMembersPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/ManagementReviewMembersMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.ManagementReviewMembersMapBuilder');
}

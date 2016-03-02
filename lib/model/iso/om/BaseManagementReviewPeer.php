<?php


abstract class BaseManagementReviewPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'management_review';

	
	const CLASS_DEFAULT = 'lib.model.iso.ManagementReview';

	
	const NUM_COLUMNS = 15;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'management_review.ID';

	
	const DATE = 'management_review.DATE';

	
	const VENUE = 'management_review.VENUE';

	
	const CHAIR_PERSON = 'management_review.CHAIR_PERSON';

	
	const DISCUSSION = 'management_review.DISCUSSION';

	
	const PROP_ACTION = 'management_review.PROP_ACTION';

	
	const ACTION_DATE = 'management_review.ACTION_DATE';

	
	const CONCLUSION = 'management_review.CONCLUSION';

	
	const SECRETARY = 'management_review.SECRETARY';

	
	const REVIEW_BY = 'management_review.REVIEW_BY';

	
	const VERIFY_BY = 'management_review.VERIFY_BY';

	
	const DATE_CREATED = 'management_review.DATE_CREATED';

	
	const CREATED_BY = 'management_review.CREATED_BY';

	
	const DATE_MODIFIED = 'management_review.DATE_MODIFIED';

	
	const MODIFIED_BY = 'management_review.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Date', 'Venue', 'ChairPerson', 'Discussion', 'PropAction', 'ActionDate', 'Conclusion', 'Secretary', 'ReviewBy', 'VerifyBy', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (ManagementReviewPeer::ID, ManagementReviewPeer::DATE, ManagementReviewPeer::VENUE, ManagementReviewPeer::CHAIR_PERSON, ManagementReviewPeer::DISCUSSION, ManagementReviewPeer::PROP_ACTION, ManagementReviewPeer::ACTION_DATE, ManagementReviewPeer::CONCLUSION, ManagementReviewPeer::SECRETARY, ManagementReviewPeer::REVIEW_BY, ManagementReviewPeer::VERIFY_BY, ManagementReviewPeer::DATE_CREATED, ManagementReviewPeer::CREATED_BY, ManagementReviewPeer::DATE_MODIFIED, ManagementReviewPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date', 'venue', 'chair_person', 'discussion', 'prop_action', 'action_date', 'conclusion', 'secretary', 'review_by', 'verify_by', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Date' => 1, 'Venue' => 2, 'ChairPerson' => 3, 'Discussion' => 4, 'PropAction' => 5, 'ActionDate' => 6, 'Conclusion' => 7, 'Secretary' => 8, 'ReviewBy' => 9, 'VerifyBy' => 10, 'DateCreated' => 11, 'CreatedBy' => 12, 'DateModified' => 13, 'ModifiedBy' => 14, ),
		BasePeer::TYPE_COLNAME => array (ManagementReviewPeer::ID => 0, ManagementReviewPeer::DATE => 1, ManagementReviewPeer::VENUE => 2, ManagementReviewPeer::CHAIR_PERSON => 3, ManagementReviewPeer::DISCUSSION => 4, ManagementReviewPeer::PROP_ACTION => 5, ManagementReviewPeer::ACTION_DATE => 6, ManagementReviewPeer::CONCLUSION => 7, ManagementReviewPeer::SECRETARY => 8, ManagementReviewPeer::REVIEW_BY => 9, ManagementReviewPeer::VERIFY_BY => 10, ManagementReviewPeer::DATE_CREATED => 11, ManagementReviewPeer::CREATED_BY => 12, ManagementReviewPeer::DATE_MODIFIED => 13, ManagementReviewPeer::MODIFIED_BY => 14, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date' => 1, 'venue' => 2, 'chair_person' => 3, 'discussion' => 4, 'prop_action' => 5, 'action_date' => 6, 'conclusion' => 7, 'secretary' => 8, 'review_by' => 9, 'verify_by' => 10, 'date_created' => 11, 'created_by' => 12, 'date_modified' => 13, 'modified_by' => 14, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/ManagementReviewMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.ManagementReviewMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ManagementReviewPeer::getTableMap();
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
		return str_replace(ManagementReviewPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ManagementReviewPeer::ID);

		$criteria->addSelectColumn(ManagementReviewPeer::DATE);

		$criteria->addSelectColumn(ManagementReviewPeer::VENUE);

		$criteria->addSelectColumn(ManagementReviewPeer::CHAIR_PERSON);

		$criteria->addSelectColumn(ManagementReviewPeer::DISCUSSION);

		$criteria->addSelectColumn(ManagementReviewPeer::PROP_ACTION);

		$criteria->addSelectColumn(ManagementReviewPeer::ACTION_DATE);

		$criteria->addSelectColumn(ManagementReviewPeer::CONCLUSION);

		$criteria->addSelectColumn(ManagementReviewPeer::SECRETARY);

		$criteria->addSelectColumn(ManagementReviewPeer::REVIEW_BY);

		$criteria->addSelectColumn(ManagementReviewPeer::VERIFY_BY);

		$criteria->addSelectColumn(ManagementReviewPeer::DATE_CREATED);

		$criteria->addSelectColumn(ManagementReviewPeer::CREATED_BY);

		$criteria->addSelectColumn(ManagementReviewPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(ManagementReviewPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(management_review.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT management_review.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ManagementReviewPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ManagementReviewPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ManagementReviewPeer::doSelectRS($criteria, $con);
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
		$objects = ManagementReviewPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ManagementReviewPeer::populateObjects(ManagementReviewPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ManagementReviewPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ManagementReviewPeer::getOMClass();
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
		return ManagementReviewPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ManagementReviewPeer::ID); 

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
			$comparison = $criteria->getComparison(ManagementReviewPeer::ID);
			$selectCriteria->add(ManagementReviewPeer::ID, $criteria->remove(ManagementReviewPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ManagementReviewPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ManagementReviewPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ManagementReview) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ManagementReviewPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ManagementReview $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ManagementReviewPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ManagementReviewPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ManagementReviewPeer::DATABASE_NAME, ManagementReviewPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ManagementReviewPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ManagementReviewPeer::DATABASE_NAME);

		$criteria->add(ManagementReviewPeer::ID, $pk);


		$v = ManagementReviewPeer::doSelect($criteria, $con);

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
			$criteria->add(ManagementReviewPeer::ID, $pks, Criteria::IN);
			$objs = ManagementReviewPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseManagementReviewPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/ManagementReviewMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.ManagementReviewMapBuilder');
}

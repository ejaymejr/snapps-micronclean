<?php


abstract class BaseOutOfControlPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'out_of_control';

	
	const CLASS_DEFAULT = 'lib.model.particle.OutOfControl';

	
	const NUM_COLUMNS = 11;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'out_of_control.ID';

	
	const DATE_TIME = 'out_of_control.DATE_TIME';

	
	const OBSERVATION = 'out_of_control.OBSERVATION';

	
	const INVESTIGATE_BY = 'out_of_control.INVESTIGATE_BY';

	
	const PROP_ACTION = 'out_of_control.PROP_ACTION';

	
	const REVIEW_BY = 'out_of_control.REVIEW_BY';

	
	const USER_ID = 'out_of_control.USER_ID';

	
	const CREATED_BY = 'out_of_control.CREATED_BY';

	
	const DATE_CREATED = 'out_of_control.DATE_CREATED';

	
	const MODIFIED_BY = 'out_of_control.MODIFIED_BY';

	
	const DATE_MODIFIED = 'out_of_control.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'Observation', 'InvestigateBy', 'PropAction', 'ReviewBy', 'UserId', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (OutOfControlPeer::ID, OutOfControlPeer::DATE_TIME, OutOfControlPeer::OBSERVATION, OutOfControlPeer::INVESTIGATE_BY, OutOfControlPeer::PROP_ACTION, OutOfControlPeer::REVIEW_BY, OutOfControlPeer::USER_ID, OutOfControlPeer::CREATED_BY, OutOfControlPeer::DATE_CREATED, OutOfControlPeer::MODIFIED_BY, OutOfControlPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'observation', 'investigate_by', 'prop_action', 'review_by', 'user_id', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'Observation' => 2, 'InvestigateBy' => 3, 'PropAction' => 4, 'ReviewBy' => 5, 'UserId' => 6, 'CreatedBy' => 7, 'DateCreated' => 8, 'ModifiedBy' => 9, 'DateModified' => 10, ),
		BasePeer::TYPE_COLNAME => array (OutOfControlPeer::ID => 0, OutOfControlPeer::DATE_TIME => 1, OutOfControlPeer::OBSERVATION => 2, OutOfControlPeer::INVESTIGATE_BY => 3, OutOfControlPeer::PROP_ACTION => 4, OutOfControlPeer::REVIEW_BY => 5, OutOfControlPeer::USER_ID => 6, OutOfControlPeer::CREATED_BY => 7, OutOfControlPeer::DATE_CREATED => 8, OutOfControlPeer::MODIFIED_BY => 9, OutOfControlPeer::DATE_MODIFIED => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'observation' => 2, 'investigate_by' => 3, 'prop_action' => 4, 'review_by' => 5, 'user_id' => 6, 'created_by' => 7, 'date_created' => 8, 'modified_by' => 9, 'date_modified' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/OutOfControlMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.OutOfControlMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = OutOfControlPeer::getTableMap();
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
		return str_replace(OutOfControlPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(OutOfControlPeer::ID);

		$criteria->addSelectColumn(OutOfControlPeer::DATE_TIME);

		$criteria->addSelectColumn(OutOfControlPeer::OBSERVATION);

		$criteria->addSelectColumn(OutOfControlPeer::INVESTIGATE_BY);

		$criteria->addSelectColumn(OutOfControlPeer::PROP_ACTION);

		$criteria->addSelectColumn(OutOfControlPeer::REVIEW_BY);

		$criteria->addSelectColumn(OutOfControlPeer::USER_ID);

		$criteria->addSelectColumn(OutOfControlPeer::CREATED_BY);

		$criteria->addSelectColumn(OutOfControlPeer::DATE_CREATED);

		$criteria->addSelectColumn(OutOfControlPeer::MODIFIED_BY);

		$criteria->addSelectColumn(OutOfControlPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(out_of_control.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT out_of_control.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(OutOfControlPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(OutOfControlPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = OutOfControlPeer::doSelectRS($criteria, $con);
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
		$objects = OutOfControlPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return OutOfControlPeer::populateObjects(OutOfControlPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			OutOfControlPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = OutOfControlPeer::getOMClass();
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
		return OutOfControlPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(OutOfControlPeer::ID); 

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
			$comparison = $criteria->getComparison(OutOfControlPeer::ID);
			$selectCriteria->add(OutOfControlPeer::ID, $criteria->remove(OutOfControlPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(OutOfControlPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(OutOfControlPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof OutOfControl) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(OutOfControlPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(OutOfControl $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(OutOfControlPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(OutOfControlPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(OutOfControlPeer::DATABASE_NAME, OutOfControlPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = OutOfControlPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(OutOfControlPeer::DATABASE_NAME);

		$criteria->add(OutOfControlPeer::ID, $pk);


		$v = OutOfControlPeer::doSelect($criteria, $con);

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
			$criteria->add(OutOfControlPeer::ID, $pks, Criteria::IN);
			$objs = OutOfControlPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseOutOfControlPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/OutOfControlMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.OutOfControlMapBuilder');
}

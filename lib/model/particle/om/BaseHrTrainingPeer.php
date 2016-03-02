<?php


abstract class BaseHrTrainingPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'hr_training';

	
	const CLASS_DEFAULT = 'lib.model.particle.HrTraining';

	
	const NUM_COLUMNS = 13;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_training.ID';

	
	const DESCRIPTION = 'hr_training.DESCRIPTION';

	
	const PLACE_HELD = 'hr_training.PLACE_HELD';

	
	const DATE_FROM = 'hr_training.DATE_FROM';

	
	const DATE_TO = 'hr_training.DATE_TO';

	
	const NO_HRS = 'hr_training.NO_HRS';

	
	const REMARKS = 'hr_training.REMARKS';

	
	const NAME_TRAINOR = 'hr_training.NAME_TRAINOR';

	
	const LICENSE_NO = 'hr_training.LICENSE_NO';

	
	const CREATED_BY = 'hr_training.CREATED_BY';

	
	const DATE_CREATED = 'hr_training.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_training.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_training.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Description', 'PlaceHeld', 'DateFrom', 'DateTo', 'NoHrs', 'Remarks', 'NameTrainor', 'LicenseNo', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrTrainingPeer::ID, HrTrainingPeer::DESCRIPTION, HrTrainingPeer::PLACE_HELD, HrTrainingPeer::DATE_FROM, HrTrainingPeer::DATE_TO, HrTrainingPeer::NO_HRS, HrTrainingPeer::REMARKS, HrTrainingPeer::NAME_TRAINOR, HrTrainingPeer::LICENSE_NO, HrTrainingPeer::CREATED_BY, HrTrainingPeer::DATE_CREATED, HrTrainingPeer::MODIFIED_BY, HrTrainingPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'description', 'place_held', 'date_from', 'date_to', 'no_hrs', 'remarks', 'name_trainor', 'license_no', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Description' => 1, 'PlaceHeld' => 2, 'DateFrom' => 3, 'DateTo' => 4, 'NoHrs' => 5, 'Remarks' => 6, 'NameTrainor' => 7, 'LicenseNo' => 8, 'CreatedBy' => 9, 'DateCreated' => 10, 'ModifiedBy' => 11, 'DateModified' => 12, ),
		BasePeer::TYPE_COLNAME => array (HrTrainingPeer::ID => 0, HrTrainingPeer::DESCRIPTION => 1, HrTrainingPeer::PLACE_HELD => 2, HrTrainingPeer::DATE_FROM => 3, HrTrainingPeer::DATE_TO => 4, HrTrainingPeer::NO_HRS => 5, HrTrainingPeer::REMARKS => 6, HrTrainingPeer::NAME_TRAINOR => 7, HrTrainingPeer::LICENSE_NO => 8, HrTrainingPeer::CREATED_BY => 9, HrTrainingPeer::DATE_CREATED => 10, HrTrainingPeer::MODIFIED_BY => 11, HrTrainingPeer::DATE_MODIFIED => 12, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'description' => 1, 'place_held' => 2, 'date_from' => 3, 'date_to' => 4, 'no_hrs' => 5, 'remarks' => 6, 'name_trainor' => 7, 'license_no' => 8, 'created_by' => 9, 'date_created' => 10, 'modified_by' => 11, 'date_modified' => 12, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/HrTrainingMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.HrTrainingMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrTrainingPeer::getTableMap();
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
		return str_replace(HrTrainingPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrTrainingPeer::ID);

		$criteria->addSelectColumn(HrTrainingPeer::DESCRIPTION);

		$criteria->addSelectColumn(HrTrainingPeer::PLACE_HELD);

		$criteria->addSelectColumn(HrTrainingPeer::DATE_FROM);

		$criteria->addSelectColumn(HrTrainingPeer::DATE_TO);

		$criteria->addSelectColumn(HrTrainingPeer::NO_HRS);

		$criteria->addSelectColumn(HrTrainingPeer::REMARKS);

		$criteria->addSelectColumn(HrTrainingPeer::NAME_TRAINOR);

		$criteria->addSelectColumn(HrTrainingPeer::LICENSE_NO);

		$criteria->addSelectColumn(HrTrainingPeer::CREATED_BY);

		$criteria->addSelectColumn(HrTrainingPeer::DATE_CREATED);

		$criteria->addSelectColumn(HrTrainingPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrTrainingPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_training.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_training.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrTrainingPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrTrainingPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrTrainingPeer::doSelectRS($criteria, $con);
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
		$objects = HrTrainingPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrTrainingPeer::populateObjects(HrTrainingPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrTrainingPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrTrainingPeer::getOMClass();
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
		return HrTrainingPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrTrainingPeer::ID); 

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
			$comparison = $criteria->getComparison(HrTrainingPeer::ID);
			$selectCriteria->add(HrTrainingPeer::ID, $criteria->remove(HrTrainingPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrTrainingPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrTrainingPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrTraining) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrTrainingPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrTraining $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrTrainingPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrTrainingPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrTrainingPeer::DATABASE_NAME, HrTrainingPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrTrainingPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrTrainingPeer::DATABASE_NAME);

		$criteria->add(HrTrainingPeer::ID, $pk);


		$v = HrTrainingPeer::doSelect($criteria, $con);

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
			$criteria->add(HrTrainingPeer::ID, $pks, Criteria::IN);
			$objs = HrTrainingPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrTrainingPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/HrTrainingMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.HrTrainingMapBuilder');
}

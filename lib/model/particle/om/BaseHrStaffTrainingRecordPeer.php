<?php


abstract class BaseHrStaffTrainingRecordPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'hr_staff_training_record';

	
	const CLASS_DEFAULT = 'lib.model.particle.HrStaffTrainingRecord';

	
	const NUM_COLUMNS = 11;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_staff_training_record.ID';

	
	const TRAINING_DATE = 'hr_staff_training_record.TRAINING_DATE';

	
	const STAFF = 'hr_staff_training_record.STAFF';

	
	const TRAINING_DESCRIPTION = 'hr_staff_training_record.TRAINING_DESCRIPTION';

	
	const TRAINING_EVALUATION_DATE = 'hr_staff_training_record.TRAINING_EVALUATION_DATE';

	
	const EVALUATE_BY = 'hr_staff_training_record.EVALUATE_BY';

	
	const REMARK = 'hr_staff_training_record.REMARK';

	
	const CREATED_BY = 'hr_staff_training_record.CREATED_BY';

	
	const DATE_CREATED = 'hr_staff_training_record.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_staff_training_record.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_staff_training_record.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TrainingDate', 'Staff', 'TrainingDescription', 'TrainingEvaluationDate', 'EvaluateBy', 'Remark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrStaffTrainingRecordPeer::ID, HrStaffTrainingRecordPeer::TRAINING_DATE, HrStaffTrainingRecordPeer::STAFF, HrStaffTrainingRecordPeer::TRAINING_DESCRIPTION, HrStaffTrainingRecordPeer::TRAINING_EVALUATION_DATE, HrStaffTrainingRecordPeer::EVALUATE_BY, HrStaffTrainingRecordPeer::REMARK, HrStaffTrainingRecordPeer::CREATED_BY, HrStaffTrainingRecordPeer::DATE_CREATED, HrStaffTrainingRecordPeer::MODIFIED_BY, HrStaffTrainingRecordPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'training_date', 'staff', 'training_description', 'training_evaluation_date', 'evaluate_by', 'remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TrainingDate' => 1, 'Staff' => 2, 'TrainingDescription' => 3, 'TrainingEvaluationDate' => 4, 'EvaluateBy' => 5, 'Remark' => 6, 'CreatedBy' => 7, 'DateCreated' => 8, 'ModifiedBy' => 9, 'DateModified' => 10, ),
		BasePeer::TYPE_COLNAME => array (HrStaffTrainingRecordPeer::ID => 0, HrStaffTrainingRecordPeer::TRAINING_DATE => 1, HrStaffTrainingRecordPeer::STAFF => 2, HrStaffTrainingRecordPeer::TRAINING_DESCRIPTION => 3, HrStaffTrainingRecordPeer::TRAINING_EVALUATION_DATE => 4, HrStaffTrainingRecordPeer::EVALUATE_BY => 5, HrStaffTrainingRecordPeer::REMARK => 6, HrStaffTrainingRecordPeer::CREATED_BY => 7, HrStaffTrainingRecordPeer::DATE_CREATED => 8, HrStaffTrainingRecordPeer::MODIFIED_BY => 9, HrStaffTrainingRecordPeer::DATE_MODIFIED => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'training_date' => 1, 'staff' => 2, 'training_description' => 3, 'training_evaluation_date' => 4, 'evaluate_by' => 5, 'remark' => 6, 'created_by' => 7, 'date_created' => 8, 'modified_by' => 9, 'date_modified' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/HrStaffTrainingRecordMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.HrStaffTrainingRecordMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrStaffTrainingRecordPeer::getTableMap();
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
		return str_replace(HrStaffTrainingRecordPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrStaffTrainingRecordPeer::ID);

		$criteria->addSelectColumn(HrStaffTrainingRecordPeer::TRAINING_DATE);

		$criteria->addSelectColumn(HrStaffTrainingRecordPeer::STAFF);

		$criteria->addSelectColumn(HrStaffTrainingRecordPeer::TRAINING_DESCRIPTION);

		$criteria->addSelectColumn(HrStaffTrainingRecordPeer::TRAINING_EVALUATION_DATE);

		$criteria->addSelectColumn(HrStaffTrainingRecordPeer::EVALUATE_BY);

		$criteria->addSelectColumn(HrStaffTrainingRecordPeer::REMARK);

		$criteria->addSelectColumn(HrStaffTrainingRecordPeer::CREATED_BY);

		$criteria->addSelectColumn(HrStaffTrainingRecordPeer::DATE_CREATED);

		$criteria->addSelectColumn(HrStaffTrainingRecordPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrStaffTrainingRecordPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_staff_training_record.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_staff_training_record.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrStaffTrainingRecordPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrStaffTrainingRecordPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrStaffTrainingRecordPeer::doSelectRS($criteria, $con);
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
		$objects = HrStaffTrainingRecordPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrStaffTrainingRecordPeer::populateObjects(HrStaffTrainingRecordPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrStaffTrainingRecordPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrStaffTrainingRecordPeer::getOMClass();
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
		return HrStaffTrainingRecordPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrStaffTrainingRecordPeer::ID); 

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
			$comparison = $criteria->getComparison(HrStaffTrainingRecordPeer::ID);
			$selectCriteria->add(HrStaffTrainingRecordPeer::ID, $criteria->remove(HrStaffTrainingRecordPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrStaffTrainingRecordPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrStaffTrainingRecordPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrStaffTrainingRecord) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrStaffTrainingRecordPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrStaffTrainingRecord $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrStaffTrainingRecordPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrStaffTrainingRecordPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrStaffTrainingRecordPeer::DATABASE_NAME, HrStaffTrainingRecordPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrStaffTrainingRecordPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrStaffTrainingRecordPeer::DATABASE_NAME);

		$criteria->add(HrStaffTrainingRecordPeer::ID, $pk);


		$v = HrStaffTrainingRecordPeer::doSelect($criteria, $con);

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
			$criteria->add(HrStaffTrainingRecordPeer::ID, $pks, Criteria::IN);
			$objs = HrStaffTrainingRecordPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrStaffTrainingRecordPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/HrStaffTrainingRecordMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.HrStaffTrainingRecordMapBuilder');
}

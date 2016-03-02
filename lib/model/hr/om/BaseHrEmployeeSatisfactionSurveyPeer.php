<?php


abstract class BaseHrEmployeeSatisfactionSurveyPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'hr_employee_satisfaction_survey';

	
	const CLASS_DEFAULT = 'lib.model.hr.HrEmployeeSatisfactionSurvey';

	
	const NUM_COLUMNS = 8;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_employee_satisfaction_survey.ID';

	
	const QUESTIONAIRE_ID = 'hr_employee_satisfaction_survey.QUESTIONAIRE_ID';

	
	const RATING = 'hr_employee_satisfaction_survey.RATING';

	
	const RECOMMENDATION = 'hr_employee_satisfaction_survey.RECOMMENDATION';

	
	const CREATED_BY = 'hr_employee_satisfaction_survey.CREATED_BY';

	
	const DATE_CREATED = 'hr_employee_satisfaction_survey.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_employee_satisfaction_survey.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_employee_satisfaction_survey.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'QuestionaireId', 'Rating', 'Recommendation', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrEmployeeSatisfactionSurveyPeer::ID, HrEmployeeSatisfactionSurveyPeer::QUESTIONAIRE_ID, HrEmployeeSatisfactionSurveyPeer::RATING, HrEmployeeSatisfactionSurveyPeer::RECOMMENDATION, HrEmployeeSatisfactionSurveyPeer::CREATED_BY, HrEmployeeSatisfactionSurveyPeer::DATE_CREATED, HrEmployeeSatisfactionSurveyPeer::MODIFIED_BY, HrEmployeeSatisfactionSurveyPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'questionaire_id', 'rating', 'recommendation', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'QuestionaireId' => 1, 'Rating' => 2, 'Recommendation' => 3, 'CreatedBy' => 4, 'DateCreated' => 5, 'ModifiedBy' => 6, 'DateModified' => 7, ),
		BasePeer::TYPE_COLNAME => array (HrEmployeeSatisfactionSurveyPeer::ID => 0, HrEmployeeSatisfactionSurveyPeer::QUESTIONAIRE_ID => 1, HrEmployeeSatisfactionSurveyPeer::RATING => 2, HrEmployeeSatisfactionSurveyPeer::RECOMMENDATION => 3, HrEmployeeSatisfactionSurveyPeer::CREATED_BY => 4, HrEmployeeSatisfactionSurveyPeer::DATE_CREATED => 5, HrEmployeeSatisfactionSurveyPeer::MODIFIED_BY => 6, HrEmployeeSatisfactionSurveyPeer::DATE_MODIFIED => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'questionaire_id' => 1, 'rating' => 2, 'recommendation' => 3, 'created_by' => 4, 'date_created' => 5, 'modified_by' => 6, 'date_modified' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/HrEmployeeSatisfactionSurveyMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.HrEmployeeSatisfactionSurveyMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrEmployeeSatisfactionSurveyPeer::getTableMap();
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
		return str_replace(HrEmployeeSatisfactionSurveyPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrEmployeeSatisfactionSurveyPeer::ID);

		$criteria->addSelectColumn(HrEmployeeSatisfactionSurveyPeer::QUESTIONAIRE_ID);

		$criteria->addSelectColumn(HrEmployeeSatisfactionSurveyPeer::RATING);

		$criteria->addSelectColumn(HrEmployeeSatisfactionSurveyPeer::RECOMMENDATION);

		$criteria->addSelectColumn(HrEmployeeSatisfactionSurveyPeer::CREATED_BY);

		$criteria->addSelectColumn(HrEmployeeSatisfactionSurveyPeer::DATE_CREATED);

		$criteria->addSelectColumn(HrEmployeeSatisfactionSurveyPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrEmployeeSatisfactionSurveyPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_employee_satisfaction_survey.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_employee_satisfaction_survey.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrEmployeeSatisfactionSurveyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrEmployeeSatisfactionSurveyPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrEmployeeSatisfactionSurveyPeer::doSelectRS($criteria, $con);
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
		$objects = HrEmployeeSatisfactionSurveyPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrEmployeeSatisfactionSurveyPeer::populateObjects(HrEmployeeSatisfactionSurveyPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrEmployeeSatisfactionSurveyPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrEmployeeSatisfactionSurveyPeer::getOMClass();
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
		return HrEmployeeSatisfactionSurveyPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrEmployeeSatisfactionSurveyPeer::ID); 

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
			$comparison = $criteria->getComparison(HrEmployeeSatisfactionSurveyPeer::ID);
			$selectCriteria->add(HrEmployeeSatisfactionSurveyPeer::ID, $criteria->remove(HrEmployeeSatisfactionSurveyPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrEmployeeSatisfactionSurveyPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrEmployeeSatisfactionSurveyPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrEmployeeSatisfactionSurvey) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrEmployeeSatisfactionSurveyPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrEmployeeSatisfactionSurvey $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrEmployeeSatisfactionSurveyPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrEmployeeSatisfactionSurveyPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrEmployeeSatisfactionSurveyPeer::DATABASE_NAME, HrEmployeeSatisfactionSurveyPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrEmployeeSatisfactionSurveyPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrEmployeeSatisfactionSurveyPeer::DATABASE_NAME);

		$criteria->add(HrEmployeeSatisfactionSurveyPeer::ID, $pk);


		$v = HrEmployeeSatisfactionSurveyPeer::doSelect($criteria, $con);

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
			$criteria->add(HrEmployeeSatisfactionSurveyPeer::ID, $pks, Criteria::IN);
			$objs = HrEmployeeSatisfactionSurveyPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrEmployeeSatisfactionSurveyPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/HrEmployeeSatisfactionSurveyMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.HrEmployeeSatisfactionSurveyMapBuilder');
}

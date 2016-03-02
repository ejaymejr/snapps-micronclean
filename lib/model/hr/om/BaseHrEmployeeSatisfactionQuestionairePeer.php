<?php


abstract class BaseHrEmployeeSatisfactionQuestionairePeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'hr_employee_satisfaction_questionaire';

	
	const CLASS_DEFAULT = 'lib.model.hr.HrEmployeeSatisfactionQuestionaire';

	
	const NUM_COLUMNS = 8;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_employee_satisfaction_questionaire.ID';

	
	const HEADER = 'hr_employee_satisfaction_questionaire.HEADER';

	
	const QUESTION = 'hr_employee_satisfaction_questionaire.QUESTION';

	
	const GROUP = 'hr_employee_satisfaction_questionaire.GROUP';

	
	const CREATED_BY = 'hr_employee_satisfaction_questionaire.CREATED_BY';

	
	const DATE_CREATED = 'hr_employee_satisfaction_questionaire.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_employee_satisfaction_questionaire.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_employee_satisfaction_questionaire.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Header', 'Question', 'Group', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrEmployeeSatisfactionQuestionairePeer::ID, HrEmployeeSatisfactionQuestionairePeer::HEADER, HrEmployeeSatisfactionQuestionairePeer::QUESTION, HrEmployeeSatisfactionQuestionairePeer::GROUP, HrEmployeeSatisfactionQuestionairePeer::CREATED_BY, HrEmployeeSatisfactionQuestionairePeer::DATE_CREATED, HrEmployeeSatisfactionQuestionairePeer::MODIFIED_BY, HrEmployeeSatisfactionQuestionairePeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'header', 'question', 'group', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Header' => 1, 'Question' => 2, 'Group' => 3, 'CreatedBy' => 4, 'DateCreated' => 5, 'ModifiedBy' => 6, 'DateModified' => 7, ),
		BasePeer::TYPE_COLNAME => array (HrEmployeeSatisfactionQuestionairePeer::ID => 0, HrEmployeeSatisfactionQuestionairePeer::HEADER => 1, HrEmployeeSatisfactionQuestionairePeer::QUESTION => 2, HrEmployeeSatisfactionQuestionairePeer::GROUP => 3, HrEmployeeSatisfactionQuestionairePeer::CREATED_BY => 4, HrEmployeeSatisfactionQuestionairePeer::DATE_CREATED => 5, HrEmployeeSatisfactionQuestionairePeer::MODIFIED_BY => 6, HrEmployeeSatisfactionQuestionairePeer::DATE_MODIFIED => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'header' => 1, 'question' => 2, 'group' => 3, 'created_by' => 4, 'date_created' => 5, 'modified_by' => 6, 'date_modified' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/HrEmployeeSatisfactionQuestionaireMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.HrEmployeeSatisfactionQuestionaireMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrEmployeeSatisfactionQuestionairePeer::getTableMap();
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
		return str_replace(HrEmployeeSatisfactionQuestionairePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrEmployeeSatisfactionQuestionairePeer::ID);

		$criteria->addSelectColumn(HrEmployeeSatisfactionQuestionairePeer::HEADER);

		$criteria->addSelectColumn(HrEmployeeSatisfactionQuestionairePeer::QUESTION);

		$criteria->addSelectColumn(HrEmployeeSatisfactionQuestionairePeer::GROUP);

		$criteria->addSelectColumn(HrEmployeeSatisfactionQuestionairePeer::CREATED_BY);

		$criteria->addSelectColumn(HrEmployeeSatisfactionQuestionairePeer::DATE_CREATED);

		$criteria->addSelectColumn(HrEmployeeSatisfactionQuestionairePeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrEmployeeSatisfactionQuestionairePeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_employee_satisfaction_questionaire.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_employee_satisfaction_questionaire.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrEmployeeSatisfactionQuestionairePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrEmployeeSatisfactionQuestionairePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrEmployeeSatisfactionQuestionairePeer::doSelectRS($criteria, $con);
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
		$objects = HrEmployeeSatisfactionQuestionairePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrEmployeeSatisfactionQuestionairePeer::populateObjects(HrEmployeeSatisfactionQuestionairePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrEmployeeSatisfactionQuestionairePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrEmployeeSatisfactionQuestionairePeer::getOMClass();
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
		return HrEmployeeSatisfactionQuestionairePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrEmployeeSatisfactionQuestionairePeer::ID); 

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
			$comparison = $criteria->getComparison(HrEmployeeSatisfactionQuestionairePeer::ID);
			$selectCriteria->add(HrEmployeeSatisfactionQuestionairePeer::ID, $criteria->remove(HrEmployeeSatisfactionQuestionairePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrEmployeeSatisfactionQuestionairePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrEmployeeSatisfactionQuestionairePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrEmployeeSatisfactionQuestionaire) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrEmployeeSatisfactionQuestionairePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrEmployeeSatisfactionQuestionaire $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrEmployeeSatisfactionQuestionairePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrEmployeeSatisfactionQuestionairePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrEmployeeSatisfactionQuestionairePeer::DATABASE_NAME, HrEmployeeSatisfactionQuestionairePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrEmployeeSatisfactionQuestionairePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrEmployeeSatisfactionQuestionairePeer::DATABASE_NAME);

		$criteria->add(HrEmployeeSatisfactionQuestionairePeer::ID, $pk);


		$v = HrEmployeeSatisfactionQuestionairePeer::doSelect($criteria, $con);

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
			$criteria->add(HrEmployeeSatisfactionQuestionairePeer::ID, $pks, Criteria::IN);
			$objs = HrEmployeeSatisfactionQuestionairePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrEmployeeSatisfactionQuestionairePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/HrEmployeeSatisfactionQuestionaireMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.HrEmployeeSatisfactionQuestionaireMapBuilder');
}

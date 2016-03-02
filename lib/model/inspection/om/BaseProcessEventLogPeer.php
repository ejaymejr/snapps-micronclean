<?php


abstract class BaseProcessEventLogPeer {

	
	const DATABASE_NAME = 'inspection';

	
	const TABLE_NAME = 'process_event_log';

	
	const CLASS_DEFAULT = 'lib.model.inspection.ProcessEventLog';

	
	const NUM_COLUMNS = 15;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'process_event_log.ID';

	
	const TRANS_DATE = 'process_event_log.TRANS_DATE';

	
	const TRANS_TIME = 'process_event_log.TRANS_TIME';

	
	const MACHINE_NO = 'process_event_log.MACHINE_NO';

	
	const FAILURE_MODE = 'process_event_log.FAILURE_MODE';

	
	const AFFECTED = 'process_event_log.AFFECTED';

	
	const PROBABLE_CAUSE = 'process_event_log.PROBABLE_CAUSE';

	
	const CORRECTIVE_ACTION = 'process_event_log.CORRECTIVE_ACTION';

	
	const DESCRIPTION_OF_PARTS = 'process_event_log.DESCRIPTION_OF_PARTS';

	
	const CHECKED_BY = 'process_event_log.CHECKED_BY';

	
	const VERIFIED_BY = 'process_event_log.VERIFIED_BY';

	
	const CREATED_BY = 'process_event_log.CREATED_BY';

	
	const DATE_CREATED = 'process_event_log.DATE_CREATED';

	
	const MODIFIED_BY = 'process_event_log.MODIFIED_BY';

	
	const DATE_MODIFIED = 'process_event_log.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'TransTime', 'MachineNo', 'FailureMode', 'Affected', 'ProbableCause', 'CorrectiveAction', 'DescriptionOfParts', 'CheckedBy', 'VerifiedBy', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (ProcessEventLogPeer::ID, ProcessEventLogPeer::TRANS_DATE, ProcessEventLogPeer::TRANS_TIME, ProcessEventLogPeer::MACHINE_NO, ProcessEventLogPeer::FAILURE_MODE, ProcessEventLogPeer::AFFECTED, ProcessEventLogPeer::PROBABLE_CAUSE, ProcessEventLogPeer::CORRECTIVE_ACTION, ProcessEventLogPeer::DESCRIPTION_OF_PARTS, ProcessEventLogPeer::CHECKED_BY, ProcessEventLogPeer::VERIFIED_BY, ProcessEventLogPeer::CREATED_BY, ProcessEventLogPeer::DATE_CREATED, ProcessEventLogPeer::MODIFIED_BY, ProcessEventLogPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'trans_time', 'machine_no', 'failure_mode', 'affected', 'probable_cause', 'corrective_action', 'description_of_parts', 'checked_by', 'verified_by', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'TransTime' => 2, 'MachineNo' => 3, 'FailureMode' => 4, 'Affected' => 5, 'ProbableCause' => 6, 'CorrectiveAction' => 7, 'DescriptionOfParts' => 8, 'CheckedBy' => 9, 'VerifiedBy' => 10, 'CreatedBy' => 11, 'DateCreated' => 12, 'ModifiedBy' => 13, 'DateModified' => 14, ),
		BasePeer::TYPE_COLNAME => array (ProcessEventLogPeer::ID => 0, ProcessEventLogPeer::TRANS_DATE => 1, ProcessEventLogPeer::TRANS_TIME => 2, ProcessEventLogPeer::MACHINE_NO => 3, ProcessEventLogPeer::FAILURE_MODE => 4, ProcessEventLogPeer::AFFECTED => 5, ProcessEventLogPeer::PROBABLE_CAUSE => 6, ProcessEventLogPeer::CORRECTIVE_ACTION => 7, ProcessEventLogPeer::DESCRIPTION_OF_PARTS => 8, ProcessEventLogPeer::CHECKED_BY => 9, ProcessEventLogPeer::VERIFIED_BY => 10, ProcessEventLogPeer::CREATED_BY => 11, ProcessEventLogPeer::DATE_CREATED => 12, ProcessEventLogPeer::MODIFIED_BY => 13, ProcessEventLogPeer::DATE_MODIFIED => 14, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'trans_time' => 2, 'machine_no' => 3, 'failure_mode' => 4, 'affected' => 5, 'probable_cause' => 6, 'corrective_action' => 7, 'description_of_parts' => 8, 'checked_by' => 9, 'verified_by' => 10, 'created_by' => 11, 'date_created' => 12, 'modified_by' => 13, 'date_modified' => 14, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/inspection/map/ProcessEventLogMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.inspection.map.ProcessEventLogMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ProcessEventLogPeer::getTableMap();
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
		return str_replace(ProcessEventLogPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ProcessEventLogPeer::ID);

		$criteria->addSelectColumn(ProcessEventLogPeer::TRANS_DATE);

		$criteria->addSelectColumn(ProcessEventLogPeer::TRANS_TIME);

		$criteria->addSelectColumn(ProcessEventLogPeer::MACHINE_NO);

		$criteria->addSelectColumn(ProcessEventLogPeer::FAILURE_MODE);

		$criteria->addSelectColumn(ProcessEventLogPeer::AFFECTED);

		$criteria->addSelectColumn(ProcessEventLogPeer::PROBABLE_CAUSE);

		$criteria->addSelectColumn(ProcessEventLogPeer::CORRECTIVE_ACTION);

		$criteria->addSelectColumn(ProcessEventLogPeer::DESCRIPTION_OF_PARTS);

		$criteria->addSelectColumn(ProcessEventLogPeer::CHECKED_BY);

		$criteria->addSelectColumn(ProcessEventLogPeer::VERIFIED_BY);

		$criteria->addSelectColumn(ProcessEventLogPeer::CREATED_BY);

		$criteria->addSelectColumn(ProcessEventLogPeer::DATE_CREATED);

		$criteria->addSelectColumn(ProcessEventLogPeer::MODIFIED_BY);

		$criteria->addSelectColumn(ProcessEventLogPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(process_event_log.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT process_event_log.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProcessEventLogPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProcessEventLogPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ProcessEventLogPeer::doSelectRS($criteria, $con);
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
		$objects = ProcessEventLogPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ProcessEventLogPeer::populateObjects(ProcessEventLogPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ProcessEventLogPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ProcessEventLogPeer::getOMClass();
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
		return ProcessEventLogPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ProcessEventLogPeer::ID); 

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
			$comparison = $criteria->getComparison(ProcessEventLogPeer::ID);
			$selectCriteria->add(ProcessEventLogPeer::ID, $criteria->remove(ProcessEventLogPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ProcessEventLogPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ProcessEventLogPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ProcessEventLog) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ProcessEventLogPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ProcessEventLog $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ProcessEventLogPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ProcessEventLogPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ProcessEventLogPeer::DATABASE_NAME, ProcessEventLogPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ProcessEventLogPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ProcessEventLogPeer::DATABASE_NAME);

		$criteria->add(ProcessEventLogPeer::ID, $pk);


		$v = ProcessEventLogPeer::doSelect($criteria, $con);

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
			$criteria->add(ProcessEventLogPeer::ID, $pks, Criteria::IN);
			$objs = ProcessEventLogPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseProcessEventLogPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/inspection/map/ProcessEventLogMapBuilder.php';
	Propel::registerMapBuilder('lib.model.inspection.map.ProcessEventLogMapBuilder');
}

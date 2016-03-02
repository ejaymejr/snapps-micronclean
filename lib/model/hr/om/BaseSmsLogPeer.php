<?php


abstract class BaseSmsLogPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'sms_log';

	
	const CLASS_DEFAULT = 'lib.model.hr.SmsLog';

	
	const NUM_COLUMNS = 16;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'sms_log.ID';

	
	const SENDER = 'sms_log.SENDER';

	
	const RECEIVER = 'sms_log.RECEIVER';

	
	const MSG = 'sms_log.MSG';

	
	const SENTTIME = 'sms_log.SENTTIME';

	
	const RECEIVEDTIME = 'sms_log.RECEIVEDTIME';

	
	const OPERATOR = 'sms_log.OPERATOR';

	
	const MSGTYPE = 'sms_log.MSGTYPE';

	
	const PERIOD_CODE = 'sms_log.PERIOD_CODE';

	
	const EMPLOYEE_NO = 'sms_log.EMPLOYEE_NO';

	
	const MODULE = 'sms_log.MODULE';

	
	const BANK_CASH = 'sms_log.BANK_CASH';

	
	const DATE_MODIFIED = 'sms_log.DATE_MODIFIED';

	
	const MODIFIED_BY = 'sms_log.MODIFIED_BY';

	
	const DATE_CREATED = 'sms_log.DATE_CREATED';

	
	const CREATED_BY = 'sms_log.CREATED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Sender', 'Receiver', 'Msg', 'Senttime', 'Receivedtime', 'Operator', 'Msgtype', 'PeriodCode', 'EmployeeNo', 'Module', 'BankCash', 'DateModified', 'ModifiedBy', 'DateCreated', 'CreatedBy', ),
		BasePeer::TYPE_COLNAME => array (SmsLogPeer::ID, SmsLogPeer::SENDER, SmsLogPeer::RECEIVER, SmsLogPeer::MSG, SmsLogPeer::SENTTIME, SmsLogPeer::RECEIVEDTIME, SmsLogPeer::OPERATOR, SmsLogPeer::MSGTYPE, SmsLogPeer::PERIOD_CODE, SmsLogPeer::EMPLOYEE_NO, SmsLogPeer::MODULE, SmsLogPeer::BANK_CASH, SmsLogPeer::DATE_MODIFIED, SmsLogPeer::MODIFIED_BY, SmsLogPeer::DATE_CREATED, SmsLogPeer::CREATED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'sender', 'receiver', 'msg', 'senttime', 'receivedtime', 'operator', 'msgtype', 'period_code', 'employee_no', 'module', 'bank_cash', 'date_modified', 'modified_by', 'date_created', 'created_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Sender' => 1, 'Receiver' => 2, 'Msg' => 3, 'Senttime' => 4, 'Receivedtime' => 5, 'Operator' => 6, 'Msgtype' => 7, 'PeriodCode' => 8, 'EmployeeNo' => 9, 'Module' => 10, 'BankCash' => 11, 'DateModified' => 12, 'ModifiedBy' => 13, 'DateCreated' => 14, 'CreatedBy' => 15, ),
		BasePeer::TYPE_COLNAME => array (SmsLogPeer::ID => 0, SmsLogPeer::SENDER => 1, SmsLogPeer::RECEIVER => 2, SmsLogPeer::MSG => 3, SmsLogPeer::SENTTIME => 4, SmsLogPeer::RECEIVEDTIME => 5, SmsLogPeer::OPERATOR => 6, SmsLogPeer::MSGTYPE => 7, SmsLogPeer::PERIOD_CODE => 8, SmsLogPeer::EMPLOYEE_NO => 9, SmsLogPeer::MODULE => 10, SmsLogPeer::BANK_CASH => 11, SmsLogPeer::DATE_MODIFIED => 12, SmsLogPeer::MODIFIED_BY => 13, SmsLogPeer::DATE_CREATED => 14, SmsLogPeer::CREATED_BY => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'sender' => 1, 'receiver' => 2, 'msg' => 3, 'senttime' => 4, 'receivedtime' => 5, 'operator' => 6, 'msgtype' => 7, 'period_code' => 8, 'employee_no' => 9, 'module' => 10, 'bank_cash' => 11, 'date_modified' => 12, 'modified_by' => 13, 'date_created' => 14, 'created_by' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/SmsLogMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.SmsLogMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SmsLogPeer::getTableMap();
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
		return str_replace(SmsLogPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SmsLogPeer::ID);

		$criteria->addSelectColumn(SmsLogPeer::SENDER);

		$criteria->addSelectColumn(SmsLogPeer::RECEIVER);

		$criteria->addSelectColumn(SmsLogPeer::MSG);

		$criteria->addSelectColumn(SmsLogPeer::SENTTIME);

		$criteria->addSelectColumn(SmsLogPeer::RECEIVEDTIME);

		$criteria->addSelectColumn(SmsLogPeer::OPERATOR);

		$criteria->addSelectColumn(SmsLogPeer::MSGTYPE);

		$criteria->addSelectColumn(SmsLogPeer::PERIOD_CODE);

		$criteria->addSelectColumn(SmsLogPeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(SmsLogPeer::MODULE);

		$criteria->addSelectColumn(SmsLogPeer::BANK_CASH);

		$criteria->addSelectColumn(SmsLogPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(SmsLogPeer::MODIFIED_BY);

		$criteria->addSelectColumn(SmsLogPeer::DATE_CREATED);

		$criteria->addSelectColumn(SmsLogPeer::CREATED_BY);

	}

	const COUNT = 'COUNT(sms_log.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT sms_log.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SmsLogPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SmsLogPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SmsLogPeer::doSelectRS($criteria, $con);
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
		$objects = SmsLogPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SmsLogPeer::populateObjects(SmsLogPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SmsLogPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SmsLogPeer::getOMClass();
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
		return SmsLogPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SmsLogPeer::ID); 

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
			$comparison = $criteria->getComparison(SmsLogPeer::ID);
			$selectCriteria->add(SmsLogPeer::ID, $criteria->remove(SmsLogPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SmsLogPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SmsLogPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SmsLog) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SmsLogPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SmsLog $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SmsLogPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SmsLogPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SmsLogPeer::DATABASE_NAME, SmsLogPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SmsLogPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SmsLogPeer::DATABASE_NAME);

		$criteria->add(SmsLogPeer::ID, $pk);


		$v = SmsLogPeer::doSelect($criteria, $con);

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
			$criteria->add(SmsLogPeer::ID, $pks, Criteria::IN);
			$objs = SmsLogPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSmsLogPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/SmsLogMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.SmsLogMapBuilder');
}

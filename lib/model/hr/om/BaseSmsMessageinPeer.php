<?php


abstract class BaseSmsMessageinPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'sms_messagein';

	
	const CLASS_DEFAULT = 'lib.model.hr.SmsMessagein';

	
	const NUM_COLUMNS = 12;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'sms_messagein.ID';

	
	const SENDER = 'sms_messagein.SENDER';

	
	const RECEIVER = 'sms_messagein.RECEIVER';

	
	const MSG = 'sms_messagein.MSG';

	
	const SENTTIME = 'sms_messagein.SENTTIME';

	
	const RECEIVEDTIME = 'sms_messagein.RECEIVEDTIME';

	
	const OPERATOR = 'sms_messagein.OPERATOR';

	
	const MSGTYPE = 'sms_messagein.MSGTYPE';

	
	const IS_UPDATED = 'sms_messagein.IS_UPDATED';

	
	const UPDATE_REMARK = 'sms_messagein.UPDATE_REMARK';

	
	const EMPLOYEE_NO = 'sms_messagein.EMPLOYEE_NO';

	
	const NAME = 'sms_messagein.NAME';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Sender', 'Receiver', 'Msg', 'Senttime', 'Receivedtime', 'Operator', 'Msgtype', 'IsUpdated', 'UpdateRemark', 'EmployeeNo', 'Name', ),
		BasePeer::TYPE_COLNAME => array (SmsMessageinPeer::ID, SmsMessageinPeer::SENDER, SmsMessageinPeer::RECEIVER, SmsMessageinPeer::MSG, SmsMessageinPeer::SENTTIME, SmsMessageinPeer::RECEIVEDTIME, SmsMessageinPeer::OPERATOR, SmsMessageinPeer::MSGTYPE, SmsMessageinPeer::IS_UPDATED, SmsMessageinPeer::UPDATE_REMARK, SmsMessageinPeer::EMPLOYEE_NO, SmsMessageinPeer::NAME, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'sender', 'receiver', 'msg', 'senttime', 'receivedtime', 'operator', 'msgtype', 'is_updated', 'update_remark', 'employee_no', 'name', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Sender' => 1, 'Receiver' => 2, 'Msg' => 3, 'Senttime' => 4, 'Receivedtime' => 5, 'Operator' => 6, 'Msgtype' => 7, 'IsUpdated' => 8, 'UpdateRemark' => 9, 'EmployeeNo' => 10, 'Name' => 11, ),
		BasePeer::TYPE_COLNAME => array (SmsMessageinPeer::ID => 0, SmsMessageinPeer::SENDER => 1, SmsMessageinPeer::RECEIVER => 2, SmsMessageinPeer::MSG => 3, SmsMessageinPeer::SENTTIME => 4, SmsMessageinPeer::RECEIVEDTIME => 5, SmsMessageinPeer::OPERATOR => 6, SmsMessageinPeer::MSGTYPE => 7, SmsMessageinPeer::IS_UPDATED => 8, SmsMessageinPeer::UPDATE_REMARK => 9, SmsMessageinPeer::EMPLOYEE_NO => 10, SmsMessageinPeer::NAME => 11, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'sender' => 1, 'receiver' => 2, 'msg' => 3, 'senttime' => 4, 'receivedtime' => 5, 'operator' => 6, 'msgtype' => 7, 'is_updated' => 8, 'update_remark' => 9, 'employee_no' => 10, 'name' => 11, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/SmsMessageinMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.SmsMessageinMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SmsMessageinPeer::getTableMap();
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
		return str_replace(SmsMessageinPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SmsMessageinPeer::ID);

		$criteria->addSelectColumn(SmsMessageinPeer::SENDER);

		$criteria->addSelectColumn(SmsMessageinPeer::RECEIVER);

		$criteria->addSelectColumn(SmsMessageinPeer::MSG);

		$criteria->addSelectColumn(SmsMessageinPeer::SENTTIME);

		$criteria->addSelectColumn(SmsMessageinPeer::RECEIVEDTIME);

		$criteria->addSelectColumn(SmsMessageinPeer::OPERATOR);

		$criteria->addSelectColumn(SmsMessageinPeer::MSGTYPE);

		$criteria->addSelectColumn(SmsMessageinPeer::IS_UPDATED);

		$criteria->addSelectColumn(SmsMessageinPeer::UPDATE_REMARK);

		$criteria->addSelectColumn(SmsMessageinPeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(SmsMessageinPeer::NAME);

	}

	const COUNT = 'COUNT(sms_messagein.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT sms_messagein.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SmsMessageinPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SmsMessageinPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SmsMessageinPeer::doSelectRS($criteria, $con);
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
		$objects = SmsMessageinPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SmsMessageinPeer::populateObjects(SmsMessageinPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SmsMessageinPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SmsMessageinPeer::getOMClass();
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
		return SmsMessageinPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SmsMessageinPeer::ID); 

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
			$comparison = $criteria->getComparison(SmsMessageinPeer::ID);
			$selectCriteria->add(SmsMessageinPeer::ID, $criteria->remove(SmsMessageinPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SmsMessageinPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SmsMessageinPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SmsMessagein) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SmsMessageinPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SmsMessagein $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SmsMessageinPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SmsMessageinPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SmsMessageinPeer::DATABASE_NAME, SmsMessageinPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SmsMessageinPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SmsMessageinPeer::DATABASE_NAME);

		$criteria->add(SmsMessageinPeer::ID, $pk);


		$v = SmsMessageinPeer::doSelect($criteria, $con);

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
			$criteria->add(SmsMessageinPeer::ID, $pks, Criteria::IN);
			$objs = SmsMessageinPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSmsMessageinPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/SmsMessageinMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.SmsMessageinMapBuilder');
}

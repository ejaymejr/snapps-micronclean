<?php


abstract class BaseSmsMessageoutPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'sms_messageout';

	
	const CLASS_DEFAULT = 'lib.model.hr.SmsMessageout';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'sms_messageout.ID';

	
	const SENDER = 'sms_messageout.SENDER';

	
	const RECEIVER = 'sms_messageout.RECEIVER';

	
	const MSG = 'sms_messageout.MSG';

	
	const SENTTIME = 'sms_messageout.SENTTIME';

	
	const STATUS = 'sms_messageout.STATUS';

	
	const RECEIVEDTIME = 'sms_messageout.RECEIVEDTIME';

	
	const OPERATOR = 'sms_messageout.OPERATOR';

	
	const MSGTYPE = 'sms_messageout.MSGTYPE';

	
	const PERIOD_CODE = 'sms_messageout.PERIOD_CODE';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Sender', 'Receiver', 'Msg', 'Senttime', 'Status', 'Receivedtime', 'Operator', 'Msgtype', 'PeriodCode', ),
		BasePeer::TYPE_COLNAME => array (SmsMessageoutPeer::ID, SmsMessageoutPeer::SENDER, SmsMessageoutPeer::RECEIVER, SmsMessageoutPeer::MSG, SmsMessageoutPeer::SENTTIME, SmsMessageoutPeer::STATUS, SmsMessageoutPeer::RECEIVEDTIME, SmsMessageoutPeer::OPERATOR, SmsMessageoutPeer::MSGTYPE, SmsMessageoutPeer::PERIOD_CODE, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'sender', 'receiver', 'msg', 'senttime', 'status', 'receivedtime', 'operator', 'msgtype', 'period_code', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Sender' => 1, 'Receiver' => 2, 'Msg' => 3, 'Senttime' => 4, 'Status' => 5, 'Receivedtime' => 6, 'Operator' => 7, 'Msgtype' => 8, 'PeriodCode' => 9, ),
		BasePeer::TYPE_COLNAME => array (SmsMessageoutPeer::ID => 0, SmsMessageoutPeer::SENDER => 1, SmsMessageoutPeer::RECEIVER => 2, SmsMessageoutPeer::MSG => 3, SmsMessageoutPeer::SENTTIME => 4, SmsMessageoutPeer::STATUS => 5, SmsMessageoutPeer::RECEIVEDTIME => 6, SmsMessageoutPeer::OPERATOR => 7, SmsMessageoutPeer::MSGTYPE => 8, SmsMessageoutPeer::PERIOD_CODE => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'sender' => 1, 'receiver' => 2, 'msg' => 3, 'senttime' => 4, 'status' => 5, 'receivedtime' => 6, 'operator' => 7, 'msgtype' => 8, 'period_code' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/SmsMessageoutMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.SmsMessageoutMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SmsMessageoutPeer::getTableMap();
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
		return str_replace(SmsMessageoutPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SmsMessageoutPeer::ID);

		$criteria->addSelectColumn(SmsMessageoutPeer::SENDER);

		$criteria->addSelectColumn(SmsMessageoutPeer::RECEIVER);

		$criteria->addSelectColumn(SmsMessageoutPeer::MSG);

		$criteria->addSelectColumn(SmsMessageoutPeer::SENTTIME);

		$criteria->addSelectColumn(SmsMessageoutPeer::STATUS);

		$criteria->addSelectColumn(SmsMessageoutPeer::RECEIVEDTIME);

		$criteria->addSelectColumn(SmsMessageoutPeer::OPERATOR);

		$criteria->addSelectColumn(SmsMessageoutPeer::MSGTYPE);

		$criteria->addSelectColumn(SmsMessageoutPeer::PERIOD_CODE);

	}

	const COUNT = 'COUNT(sms_messageout.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT sms_messageout.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SmsMessageoutPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SmsMessageoutPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SmsMessageoutPeer::doSelectRS($criteria, $con);
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
		$objects = SmsMessageoutPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SmsMessageoutPeer::populateObjects(SmsMessageoutPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SmsMessageoutPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SmsMessageoutPeer::getOMClass();
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
		return SmsMessageoutPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SmsMessageoutPeer::ID); 

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
			$comparison = $criteria->getComparison(SmsMessageoutPeer::ID);
			$selectCriteria->add(SmsMessageoutPeer::ID, $criteria->remove(SmsMessageoutPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SmsMessageoutPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SmsMessageoutPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SmsMessageout) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SmsMessageoutPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SmsMessageout $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SmsMessageoutPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SmsMessageoutPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SmsMessageoutPeer::DATABASE_NAME, SmsMessageoutPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SmsMessageoutPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SmsMessageoutPeer::DATABASE_NAME);

		$criteria->add(SmsMessageoutPeer::ID, $pk);


		$v = SmsMessageoutPeer::doSelect($criteria, $con);

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
			$criteria->add(SmsMessageoutPeer::ID, $pks, Criteria::IN);
			$objs = SmsMessageoutPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSmsMessageoutPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/SmsMessageoutMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.SmsMessageoutMapBuilder');
}

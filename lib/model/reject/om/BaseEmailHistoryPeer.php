<?php


abstract class BaseEmailHistoryPeer {

	
	const DATABASE_NAME = 'reject_photo';

	
	const TABLE_NAME = 'email_history';

	
	const CLASS_DEFAULT = 'lib.model.reject.EmailHistory';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'email_history.ID';

	
	const FILE_DETAIL_ID = 'email_history.FILE_DETAIL_ID';

	
	const EMAIL_ADDRESS = 'email_history.EMAIL_ADDRESS';

	
	const EMAIL_DATE = 'email_history.EMAIL_DATE';

	
	const EMAIL_TOKEN = 'email_history.EMAIL_TOKEN';

	
	const DATE_CREATED = 'email_history.DATE_CREATED';

	
	const CREATED_BY = 'email_history.CREATED_BY';

	
	const DATE_MODIFIED = 'email_history.DATE_MODIFIED';

	
	const MODIFIED_BY = 'email_history.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'FileDetailId', 'EmailAddress', 'EmailDate', 'EmailToken', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (EmailHistoryPeer::ID, EmailHistoryPeer::FILE_DETAIL_ID, EmailHistoryPeer::EMAIL_ADDRESS, EmailHistoryPeer::EMAIL_DATE, EmailHistoryPeer::EMAIL_TOKEN, EmailHistoryPeer::DATE_CREATED, EmailHistoryPeer::CREATED_BY, EmailHistoryPeer::DATE_MODIFIED, EmailHistoryPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'file_detail_id', 'email_address', 'email_date', 'email_token', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'FileDetailId' => 1, 'EmailAddress' => 2, 'EmailDate' => 3, 'EmailToken' => 4, 'DateCreated' => 5, 'CreatedBy' => 6, 'DateModified' => 7, 'ModifiedBy' => 8, ),
		BasePeer::TYPE_COLNAME => array (EmailHistoryPeer::ID => 0, EmailHistoryPeer::FILE_DETAIL_ID => 1, EmailHistoryPeer::EMAIL_ADDRESS => 2, EmailHistoryPeer::EMAIL_DATE => 3, EmailHistoryPeer::EMAIL_TOKEN => 4, EmailHistoryPeer::DATE_CREATED => 5, EmailHistoryPeer::CREATED_BY => 6, EmailHistoryPeer::DATE_MODIFIED => 7, EmailHistoryPeer::MODIFIED_BY => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'file_detail_id' => 1, 'email_address' => 2, 'email_date' => 3, 'email_token' => 4, 'date_created' => 5, 'created_by' => 6, 'date_modified' => 7, 'modified_by' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/reject/map/EmailHistoryMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.reject.map.EmailHistoryMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = EmailHistoryPeer::getTableMap();
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
		return str_replace(EmailHistoryPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(EmailHistoryPeer::ID);

		$criteria->addSelectColumn(EmailHistoryPeer::FILE_DETAIL_ID);

		$criteria->addSelectColumn(EmailHistoryPeer::EMAIL_ADDRESS);

		$criteria->addSelectColumn(EmailHistoryPeer::EMAIL_DATE);

		$criteria->addSelectColumn(EmailHistoryPeer::EMAIL_TOKEN);

		$criteria->addSelectColumn(EmailHistoryPeer::DATE_CREATED);

		$criteria->addSelectColumn(EmailHistoryPeer::CREATED_BY);

		$criteria->addSelectColumn(EmailHistoryPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(EmailHistoryPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(email_history.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT email_history.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(EmailHistoryPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(EmailHistoryPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = EmailHistoryPeer::doSelectRS($criteria, $con);
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
		$objects = EmailHistoryPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return EmailHistoryPeer::populateObjects(EmailHistoryPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			EmailHistoryPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = EmailHistoryPeer::getOMClass();
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
		return EmailHistoryPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(EmailHistoryPeer::ID); 

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
			$comparison = $criteria->getComparison(EmailHistoryPeer::ID);
			$selectCriteria->add(EmailHistoryPeer::ID, $criteria->remove(EmailHistoryPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(EmailHistoryPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(EmailHistoryPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof EmailHistory) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(EmailHistoryPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(EmailHistory $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(EmailHistoryPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(EmailHistoryPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(EmailHistoryPeer::DATABASE_NAME, EmailHistoryPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = EmailHistoryPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(EmailHistoryPeer::DATABASE_NAME);

		$criteria->add(EmailHistoryPeer::ID, $pk);


		$v = EmailHistoryPeer::doSelect($criteria, $con);

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
			$criteria->add(EmailHistoryPeer::ID, $pks, Criteria::IN);
			$objs = EmailHistoryPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseEmailHistoryPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/reject/map/EmailHistoryMapBuilder.php';
	Propel::registerMapBuilder('lib.model.reject.map.EmailHistoryMapBuilder');
}

<?php


abstract class BaseEmailContactPeer {

	
	const DATABASE_NAME = 'reject_photo';

	
	const TABLE_NAME = 'email_contact';

	
	const CLASS_DEFAULT = 'lib.model.reject.EmailContact';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'email_contact.ID';

	
	const NAME = 'email_contact.NAME';

	
	const EMAIL_ADDRESS = 'email_contact.EMAIL_ADDRESS';

	
	const WEBSITE = 'email_contact.WEBSITE';

	
	const DATE_CREATED = 'email_contact.DATE_CREATED';

	
	const CREATED_BY = 'email_contact.CREATED_BY';

	
	const DATE_MODIFIED = 'email_contact.DATE_MODIFIED';

	
	const MODIFIED_BY = 'email_contact.MODIFIED_BY';

	
	const DESIGNATION = 'email_contact.DESIGNATION';

	
	const MOBILE = 'email_contact.MOBILE';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'EmailAddress', 'Website', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', 'Designation', 'Mobile', ),
		BasePeer::TYPE_COLNAME => array (EmailContactPeer::ID, EmailContactPeer::NAME, EmailContactPeer::EMAIL_ADDRESS, EmailContactPeer::WEBSITE, EmailContactPeer::DATE_CREATED, EmailContactPeer::CREATED_BY, EmailContactPeer::DATE_MODIFIED, EmailContactPeer::MODIFIED_BY, EmailContactPeer::DESIGNATION, EmailContactPeer::MOBILE, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'email_address', 'website', 'date_created', 'created_by', 'date_modified', 'modified_by', 'designation', 'mobile', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'EmailAddress' => 2, 'Website' => 3, 'DateCreated' => 4, 'CreatedBy' => 5, 'DateModified' => 6, 'ModifiedBy' => 7, 'Designation' => 8, 'Mobile' => 9, ),
		BasePeer::TYPE_COLNAME => array (EmailContactPeer::ID => 0, EmailContactPeer::NAME => 1, EmailContactPeer::EMAIL_ADDRESS => 2, EmailContactPeer::WEBSITE => 3, EmailContactPeer::DATE_CREATED => 4, EmailContactPeer::CREATED_BY => 5, EmailContactPeer::DATE_MODIFIED => 6, EmailContactPeer::MODIFIED_BY => 7, EmailContactPeer::DESIGNATION => 8, EmailContactPeer::MOBILE => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'email_address' => 2, 'website' => 3, 'date_created' => 4, 'created_by' => 5, 'date_modified' => 6, 'modified_by' => 7, 'designation' => 8, 'mobile' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/reject/map/EmailContactMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.reject.map.EmailContactMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = EmailContactPeer::getTableMap();
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
		return str_replace(EmailContactPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(EmailContactPeer::ID);

		$criteria->addSelectColumn(EmailContactPeer::NAME);

		$criteria->addSelectColumn(EmailContactPeer::EMAIL_ADDRESS);

		$criteria->addSelectColumn(EmailContactPeer::WEBSITE);

		$criteria->addSelectColumn(EmailContactPeer::DATE_CREATED);

		$criteria->addSelectColumn(EmailContactPeer::CREATED_BY);

		$criteria->addSelectColumn(EmailContactPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(EmailContactPeer::MODIFIED_BY);

		$criteria->addSelectColumn(EmailContactPeer::DESIGNATION);

		$criteria->addSelectColumn(EmailContactPeer::MOBILE);

	}

	const COUNT = 'COUNT(email_contact.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT email_contact.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(EmailContactPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(EmailContactPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = EmailContactPeer::doSelectRS($criteria, $con);
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
		$objects = EmailContactPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return EmailContactPeer::populateObjects(EmailContactPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			EmailContactPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = EmailContactPeer::getOMClass();
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
		return EmailContactPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(EmailContactPeer::ID); 

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
			$comparison = $criteria->getComparison(EmailContactPeer::ID);
			$selectCriteria->add(EmailContactPeer::ID, $criteria->remove(EmailContactPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(EmailContactPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(EmailContactPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof EmailContact) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(EmailContactPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(EmailContact $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(EmailContactPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(EmailContactPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(EmailContactPeer::DATABASE_NAME, EmailContactPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = EmailContactPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(EmailContactPeer::DATABASE_NAME);

		$criteria->add(EmailContactPeer::ID, $pk);


		$v = EmailContactPeer::doSelect($criteria, $con);

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
			$criteria->add(EmailContactPeer::ID, $pks, Criteria::IN);
			$objs = EmailContactPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseEmailContactPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/reject/map/EmailContactMapBuilder.php';
	Propel::registerMapBuilder('lib.model.reject.map.EmailContactMapBuilder');
}

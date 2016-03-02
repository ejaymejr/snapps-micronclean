<?php


abstract class BaseContractManagementLogPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'contract_management_log';

	
	const CLASS_DEFAULT = 'lib.model.iso.ContractManagementLog';

	
	const NUM_COLUMNS = 13;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'contract_management_log.ID';

	
	const CUSTOMER = 'contract_management_log.CUSTOMER';

	
	const CONTRACT_NO = 'contract_management_log.CONTRACT_NO';

	
	const CONTACT_PERSON = 'contract_management_log.CONTACT_PERSON';

	
	const CONTACT_NO = 'contract_management_log.CONTACT_NO';

	
	const CONTRACT_INITIATOR = 'contract_management_log.CONTRACT_INITIATOR';

	
	const REMARKS = 'contract_management_log.REMARKS';

	
	const START_DATE = 'contract_management_log.START_DATE';

	
	const END_DATE = 'contract_management_log.END_DATE';

	
	const DATE_CREATED = 'contract_management_log.DATE_CREATED';

	
	const CREATED_BY = 'contract_management_log.CREATED_BY';

	
	const DATE_MODIFIED = 'contract_management_log.DATE_MODIFIED';

	
	const MODIFIED_BY = 'contract_management_log.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Customer', 'ContractNo', 'ContactPerson', 'ContactNo', 'ContractInitiator', 'Remarks', 'StartDate', 'EndDate', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (ContractManagementLogPeer::ID, ContractManagementLogPeer::CUSTOMER, ContractManagementLogPeer::CONTRACT_NO, ContractManagementLogPeer::CONTACT_PERSON, ContractManagementLogPeer::CONTACT_NO, ContractManagementLogPeer::CONTRACT_INITIATOR, ContractManagementLogPeer::REMARKS, ContractManagementLogPeer::START_DATE, ContractManagementLogPeer::END_DATE, ContractManagementLogPeer::DATE_CREATED, ContractManagementLogPeer::CREATED_BY, ContractManagementLogPeer::DATE_MODIFIED, ContractManagementLogPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'customer', 'contract_no', 'contact_person', 'contact_no', 'contract_initiator', 'remarks', 'start_date', 'end_date', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Customer' => 1, 'ContractNo' => 2, 'ContactPerson' => 3, 'ContactNo' => 4, 'ContractInitiator' => 5, 'Remarks' => 6, 'StartDate' => 7, 'EndDate' => 8, 'DateCreated' => 9, 'CreatedBy' => 10, 'DateModified' => 11, 'ModifiedBy' => 12, ),
		BasePeer::TYPE_COLNAME => array (ContractManagementLogPeer::ID => 0, ContractManagementLogPeer::CUSTOMER => 1, ContractManagementLogPeer::CONTRACT_NO => 2, ContractManagementLogPeer::CONTACT_PERSON => 3, ContractManagementLogPeer::CONTACT_NO => 4, ContractManagementLogPeer::CONTRACT_INITIATOR => 5, ContractManagementLogPeer::REMARKS => 6, ContractManagementLogPeer::START_DATE => 7, ContractManagementLogPeer::END_DATE => 8, ContractManagementLogPeer::DATE_CREATED => 9, ContractManagementLogPeer::CREATED_BY => 10, ContractManagementLogPeer::DATE_MODIFIED => 11, ContractManagementLogPeer::MODIFIED_BY => 12, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'customer' => 1, 'contract_no' => 2, 'contact_person' => 3, 'contact_no' => 4, 'contract_initiator' => 5, 'remarks' => 6, 'start_date' => 7, 'end_date' => 8, 'date_created' => 9, 'created_by' => 10, 'date_modified' => 11, 'modified_by' => 12, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/ContractManagementLogMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.ContractManagementLogMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ContractManagementLogPeer::getTableMap();
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
		return str_replace(ContractManagementLogPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ContractManagementLogPeer::ID);

		$criteria->addSelectColumn(ContractManagementLogPeer::CUSTOMER);

		$criteria->addSelectColumn(ContractManagementLogPeer::CONTRACT_NO);

		$criteria->addSelectColumn(ContractManagementLogPeer::CONTACT_PERSON);

		$criteria->addSelectColumn(ContractManagementLogPeer::CONTACT_NO);

		$criteria->addSelectColumn(ContractManagementLogPeer::CONTRACT_INITIATOR);

		$criteria->addSelectColumn(ContractManagementLogPeer::REMARKS);

		$criteria->addSelectColumn(ContractManagementLogPeer::START_DATE);

		$criteria->addSelectColumn(ContractManagementLogPeer::END_DATE);

		$criteria->addSelectColumn(ContractManagementLogPeer::DATE_CREATED);

		$criteria->addSelectColumn(ContractManagementLogPeer::CREATED_BY);

		$criteria->addSelectColumn(ContractManagementLogPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(ContractManagementLogPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(contract_management_log.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT contract_management_log.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ContractManagementLogPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ContractManagementLogPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ContractManagementLogPeer::doSelectRS($criteria, $con);
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
		$objects = ContractManagementLogPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ContractManagementLogPeer::populateObjects(ContractManagementLogPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ContractManagementLogPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ContractManagementLogPeer::getOMClass();
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
		return ContractManagementLogPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ContractManagementLogPeer::ID); 

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
			$comparison = $criteria->getComparison(ContractManagementLogPeer::ID);
			$selectCriteria->add(ContractManagementLogPeer::ID, $criteria->remove(ContractManagementLogPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ContractManagementLogPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ContractManagementLogPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ContractManagementLog) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ContractManagementLogPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ContractManagementLog $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ContractManagementLogPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ContractManagementLogPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ContractManagementLogPeer::DATABASE_NAME, ContractManagementLogPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ContractManagementLogPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ContractManagementLogPeer::DATABASE_NAME);

		$criteria->add(ContractManagementLogPeer::ID, $pk);


		$v = ContractManagementLogPeer::doSelect($criteria, $con);

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
			$criteria->add(ContractManagementLogPeer::ID, $pks, Criteria::IN);
			$objs = ContractManagementLogPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseContractManagementLogPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/ContractManagementLogMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.ContractManagementLogMapBuilder');
}

<?php


abstract class BaseCustomerManagementComplaintFormPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'customer_management_complaint_form';

	
	const CLASS_DEFAULT = 'lib.model.iso.CustomerManagementComplaintForm';

	
	const NUM_COLUMNS = 30;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'customer_management_complaint_form.ID';

	
	const COMPLAIN_DATE_TIME = 'customer_management_complaint_form.COMPLAIN_DATE_TIME';

	
	const COMPANY_NAME = 'customer_management_complaint_form.COMPANY_NAME';

	
	const CUSTOMER_NUMBER = 'customer_management_complaint_form.CUSTOMER_NUMBER';

	
	const COMPLAINEE_NAME = 'customer_management_complaint_form.COMPLAINEE_NAME';

	
	const COMPLAINEE_DESIGNATION = 'customer_management_complaint_form.COMPLAINEE_DESIGNATION';

	
	const COMPLAINEE_DEPARTMENT = 'customer_management_complaint_form.COMPLAINEE_DEPARTMENT';

	
	const COMPLAINEE_CONTACT_NO = 'customer_management_complaint_form.COMPLAINEE_CONTACT_NO';

	
	const COMPLAINEE_EMAIL = 'customer_management_complaint_form.COMPLAINEE_EMAIL';

	
	const COMPLAIN_DESCRIPTION = 'customer_management_complaint_form.COMPLAIN_DESCRIPTION';

	
	const RECEIVED_BY_NAME = 'customer_management_complaint_form.RECEIVED_BY_NAME';

	
	const RECEIVED_BY_DESIGNATION = 'customer_management_complaint_form.RECEIVED_BY_DESIGNATION';

	
	const RECEIVED_BY_DEPARTMENT = 'customer_management_complaint_form.RECEIVED_BY_DEPARTMENT';

	
	const CHANNEL = 'customer_management_complaint_form.CHANNEL';

	
	const COMPLAIN_CONCERNING = 'customer_management_complaint_form.COMPLAIN_CONCERNING';

	
	const CORRECTION_ACTION_TAKEN = 'customer_management_complaint_form.CORRECTION_ACTION_TAKEN';

	
	const UNDERTAKEN_BY_DATE = 'customer_management_complaint_form.UNDERTAKEN_BY_DATE';

	
	const UNDERTAKEN_BY = 'customer_management_complaint_form.UNDERTAKEN_BY';

	
	const UNDERTAKEN_BY_DESIGNATION = 'customer_management_complaint_form.UNDERTAKEN_BY_DESIGNATION';

	
	const UNDERTAKEN_BY_DEPARTMENT = 'customer_management_complaint_form.UNDERTAKEN_BY_DEPARTMENT';

	
	const UNDERTAKEN_BY_INITIALS = 'customer_management_complaint_form.UNDERTAKEN_BY_INITIALS';

	
	const VERIFIED_BY_DATE = 'customer_management_complaint_form.VERIFIED_BY_DATE';

	
	const VERIFIED_BY = 'customer_management_complaint_form.VERIFIED_BY';

	
	const VERIFIED_BY_DESIGNATION = 'customer_management_complaint_form.VERIFIED_BY_DESIGNATION';

	
	const VERIFIED_BY_DEPARTMENT = 'customer_management_complaint_form.VERIFIED_BY_DEPARTMENT';

	
	const VERIFIED_BY_INITIALS = 'customer_management_complaint_form.VERIFIED_BY_INITIALS';

	
	const DATE_CREATED = 'customer_management_complaint_form.DATE_CREATED';

	
	const CREATED_BY = 'customer_management_complaint_form.CREATED_BY';

	
	const DATE_MODIFIED = 'customer_management_complaint_form.DATE_MODIFIED';

	
	const MODIFIED_BY = 'customer_management_complaint_form.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ComplainDateTime', 'CompanyName', 'CustomerNumber', 'ComplaineeName', 'ComplaineeDesignation', 'ComplaineeDepartment', 'ComplaineeContactNo', 'ComplaineeEmail', 'ComplainDescription', 'ReceivedByName', 'ReceivedByDesignation', 'ReceivedByDepartment', 'Channel', 'ComplainConcerning', 'CorrectionActionTaken', 'UndertakenByDate', 'UndertakenBy', 'UndertakenByDesignation', 'UndertakenByDepartment', 'UndertakenByInitials', 'VerifiedByDate', 'VerifiedBy', 'VerifiedByDesignation', 'VerifiedByDepartment', 'VerifiedByInitials', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (CustomerManagementComplaintFormPeer::ID, CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME, CustomerManagementComplaintFormPeer::COMPANY_NAME, CustomerManagementComplaintFormPeer::CUSTOMER_NUMBER, CustomerManagementComplaintFormPeer::COMPLAINEE_NAME, CustomerManagementComplaintFormPeer::COMPLAINEE_DESIGNATION, CustomerManagementComplaintFormPeer::COMPLAINEE_DEPARTMENT, CustomerManagementComplaintFormPeer::COMPLAINEE_CONTACT_NO, CustomerManagementComplaintFormPeer::COMPLAINEE_EMAIL, CustomerManagementComplaintFormPeer::COMPLAIN_DESCRIPTION, CustomerManagementComplaintFormPeer::RECEIVED_BY_NAME, CustomerManagementComplaintFormPeer::RECEIVED_BY_DESIGNATION, CustomerManagementComplaintFormPeer::RECEIVED_BY_DEPARTMENT, CustomerManagementComplaintFormPeer::CHANNEL, CustomerManagementComplaintFormPeer::COMPLAIN_CONCERNING, CustomerManagementComplaintFormPeer::CORRECTION_ACTION_TAKEN, CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DATE, CustomerManagementComplaintFormPeer::UNDERTAKEN_BY, CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DESIGNATION, CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DEPARTMENT, CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_INITIALS, CustomerManagementComplaintFormPeer::VERIFIED_BY_DATE, CustomerManagementComplaintFormPeer::VERIFIED_BY, CustomerManagementComplaintFormPeer::VERIFIED_BY_DESIGNATION, CustomerManagementComplaintFormPeer::VERIFIED_BY_DEPARTMENT, CustomerManagementComplaintFormPeer::VERIFIED_BY_INITIALS, CustomerManagementComplaintFormPeer::DATE_CREATED, CustomerManagementComplaintFormPeer::CREATED_BY, CustomerManagementComplaintFormPeer::DATE_MODIFIED, CustomerManagementComplaintFormPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'complain_date_time', 'company_name', 'customer_number', 'complainee_name', 'complainee_designation', 'complainee_department', 'complainee_contact_no', 'complainee_email', 'complain_description', 'received_by_name', 'received_by_designation', 'received_by_department', 'channel', 'complain_concerning', 'correction_action_taken', 'undertaken_by_date', 'undertaken_by', 'undertaken_by_designation', 'undertaken_by_department', 'undertaken_by_initials', 'verified_by_date', 'verified_by', 'verified_by_designation', 'verified_by_department', 'verified_by_initials', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ComplainDateTime' => 1, 'CompanyName' => 2, 'CustomerNumber' => 3, 'ComplaineeName' => 4, 'ComplaineeDesignation' => 5, 'ComplaineeDepartment' => 6, 'ComplaineeContactNo' => 7, 'ComplaineeEmail' => 8, 'ComplainDescription' => 9, 'ReceivedByName' => 10, 'ReceivedByDesignation' => 11, 'ReceivedByDepartment' => 12, 'Channel' => 13, 'ComplainConcerning' => 14, 'CorrectionActionTaken' => 15, 'UndertakenByDate' => 16, 'UndertakenBy' => 17, 'UndertakenByDesignation' => 18, 'UndertakenByDepartment' => 19, 'UndertakenByInitials' => 20, 'VerifiedByDate' => 21, 'VerifiedBy' => 22, 'VerifiedByDesignation' => 23, 'VerifiedByDepartment' => 24, 'VerifiedByInitials' => 25, 'DateCreated' => 26, 'CreatedBy' => 27, 'DateModified' => 28, 'ModifiedBy' => 29, ),
		BasePeer::TYPE_COLNAME => array (CustomerManagementComplaintFormPeer::ID => 0, CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME => 1, CustomerManagementComplaintFormPeer::COMPANY_NAME => 2, CustomerManagementComplaintFormPeer::CUSTOMER_NUMBER => 3, CustomerManagementComplaintFormPeer::COMPLAINEE_NAME => 4, CustomerManagementComplaintFormPeer::COMPLAINEE_DESIGNATION => 5, CustomerManagementComplaintFormPeer::COMPLAINEE_DEPARTMENT => 6, CustomerManagementComplaintFormPeer::COMPLAINEE_CONTACT_NO => 7, CustomerManagementComplaintFormPeer::COMPLAINEE_EMAIL => 8, CustomerManagementComplaintFormPeer::COMPLAIN_DESCRIPTION => 9, CustomerManagementComplaintFormPeer::RECEIVED_BY_NAME => 10, CustomerManagementComplaintFormPeer::RECEIVED_BY_DESIGNATION => 11, CustomerManagementComplaintFormPeer::RECEIVED_BY_DEPARTMENT => 12, CustomerManagementComplaintFormPeer::CHANNEL => 13, CustomerManagementComplaintFormPeer::COMPLAIN_CONCERNING => 14, CustomerManagementComplaintFormPeer::CORRECTION_ACTION_TAKEN => 15, CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DATE => 16, CustomerManagementComplaintFormPeer::UNDERTAKEN_BY => 17, CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DESIGNATION => 18, CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DEPARTMENT => 19, CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_INITIALS => 20, CustomerManagementComplaintFormPeer::VERIFIED_BY_DATE => 21, CustomerManagementComplaintFormPeer::VERIFIED_BY => 22, CustomerManagementComplaintFormPeer::VERIFIED_BY_DESIGNATION => 23, CustomerManagementComplaintFormPeer::VERIFIED_BY_DEPARTMENT => 24, CustomerManagementComplaintFormPeer::VERIFIED_BY_INITIALS => 25, CustomerManagementComplaintFormPeer::DATE_CREATED => 26, CustomerManagementComplaintFormPeer::CREATED_BY => 27, CustomerManagementComplaintFormPeer::DATE_MODIFIED => 28, CustomerManagementComplaintFormPeer::MODIFIED_BY => 29, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'complain_date_time' => 1, 'company_name' => 2, 'customer_number' => 3, 'complainee_name' => 4, 'complainee_designation' => 5, 'complainee_department' => 6, 'complainee_contact_no' => 7, 'complainee_email' => 8, 'complain_description' => 9, 'received_by_name' => 10, 'received_by_designation' => 11, 'received_by_department' => 12, 'channel' => 13, 'complain_concerning' => 14, 'correction_action_taken' => 15, 'undertaken_by_date' => 16, 'undertaken_by' => 17, 'undertaken_by_designation' => 18, 'undertaken_by_department' => 19, 'undertaken_by_initials' => 20, 'verified_by_date' => 21, 'verified_by' => 22, 'verified_by_designation' => 23, 'verified_by_department' => 24, 'verified_by_initials' => 25, 'date_created' => 26, 'created_by' => 27, 'date_modified' => 28, 'modified_by' => 29, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/CustomerManagementComplaintFormMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.CustomerManagementComplaintFormMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = CustomerManagementComplaintFormPeer::getTableMap();
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
		return str_replace(CustomerManagementComplaintFormPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::ID);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::COMPLAIN_DATE_TIME);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::COMPANY_NAME);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::CUSTOMER_NUMBER);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::COMPLAINEE_NAME);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::COMPLAINEE_DESIGNATION);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::COMPLAINEE_DEPARTMENT);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::COMPLAINEE_CONTACT_NO);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::COMPLAINEE_EMAIL);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::COMPLAIN_DESCRIPTION);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::RECEIVED_BY_NAME);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::RECEIVED_BY_DESIGNATION);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::RECEIVED_BY_DEPARTMENT);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::CHANNEL);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::COMPLAIN_CONCERNING);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::CORRECTION_ACTION_TAKEN);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DATE);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DESIGNATION);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_DEPARTMENT);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::UNDERTAKEN_BY_INITIALS);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::VERIFIED_BY_DATE);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::VERIFIED_BY);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::VERIFIED_BY_DESIGNATION);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::VERIFIED_BY_DEPARTMENT);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::VERIFIED_BY_INITIALS);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::DATE_CREATED);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::CREATED_BY);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(customer_management_complaint_form.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT customer_management_complaint_form.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CustomerManagementComplaintFormPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = CustomerManagementComplaintFormPeer::doSelectRS($criteria, $con);
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
		$objects = CustomerManagementComplaintFormPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return CustomerManagementComplaintFormPeer::populateObjects(CustomerManagementComplaintFormPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			CustomerManagementComplaintFormPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = CustomerManagementComplaintFormPeer::getOMClass();
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
		return CustomerManagementComplaintFormPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(CustomerManagementComplaintFormPeer::ID); 

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
			$comparison = $criteria->getComparison(CustomerManagementComplaintFormPeer::ID);
			$selectCriteria->add(CustomerManagementComplaintFormPeer::ID, $criteria->remove(CustomerManagementComplaintFormPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(CustomerManagementComplaintFormPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(CustomerManagementComplaintFormPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof CustomerManagementComplaintForm) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CustomerManagementComplaintFormPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(CustomerManagementComplaintForm $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CustomerManagementComplaintFormPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CustomerManagementComplaintFormPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(CustomerManagementComplaintFormPeer::DATABASE_NAME, CustomerManagementComplaintFormPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = CustomerManagementComplaintFormPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(CustomerManagementComplaintFormPeer::DATABASE_NAME);

		$criteria->add(CustomerManagementComplaintFormPeer::ID, $pk);


		$v = CustomerManagementComplaintFormPeer::doSelect($criteria, $con);

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
			$criteria->add(CustomerManagementComplaintFormPeer::ID, $pks, Criteria::IN);
			$objs = CustomerManagementComplaintFormPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseCustomerManagementComplaintFormPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/CustomerManagementComplaintFormMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.CustomerManagementComplaintFormMapBuilder');
}

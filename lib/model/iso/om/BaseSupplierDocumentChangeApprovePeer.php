<?php


abstract class BaseSupplierDocumentChangeApprovePeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'supplier_document_change_approve';

	
	const CLASS_DEFAULT = 'lib.model.iso.SupplierDocumentChangeApprove';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'supplier_document_change_approve.ID';

	
	const DATE_TIME = 'supplier_document_change_approve.DATE_TIME';

	
	const COMPANY = 'supplier_document_change_approve.COMPANY';

	
	const REVIEW_INDEX_NO = 'supplier_document_change_approve.REVIEW_INDEX_NO';

	
	const APPROVE_BY = 'supplier_document_change_approve.APPROVE_BY';

	
	const NO_OF_EMAIL_SEND = 'supplier_document_change_approve.NO_OF_EMAIL_SEND';

	
	const DATE_CREATED = 'supplier_document_change_approve.DATE_CREATED';

	
	const CREATED_BY = 'supplier_document_change_approve.CREATED_BY';

	
	const DATE_MODIFIED = 'supplier_document_change_approve.DATE_MODIFIED';

	
	const MODIFIED_BY = 'supplier_document_change_approve.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'Company', 'ReviewIndexNo', 'ApproveBy', 'NoOfEmailSend', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (SupplierDocumentChangeApprovePeer::ID, SupplierDocumentChangeApprovePeer::DATE_TIME, SupplierDocumentChangeApprovePeer::COMPANY, SupplierDocumentChangeApprovePeer::REVIEW_INDEX_NO, SupplierDocumentChangeApprovePeer::APPROVE_BY, SupplierDocumentChangeApprovePeer::NO_OF_EMAIL_SEND, SupplierDocumentChangeApprovePeer::DATE_CREATED, SupplierDocumentChangeApprovePeer::CREATED_BY, SupplierDocumentChangeApprovePeer::DATE_MODIFIED, SupplierDocumentChangeApprovePeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'company', 'review_index_no', 'approve_by', 'no_of_email_send', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'Company' => 2, 'ReviewIndexNo' => 3, 'ApproveBy' => 4, 'NoOfEmailSend' => 5, 'DateCreated' => 6, 'CreatedBy' => 7, 'DateModified' => 8, 'ModifiedBy' => 9, ),
		BasePeer::TYPE_COLNAME => array (SupplierDocumentChangeApprovePeer::ID => 0, SupplierDocumentChangeApprovePeer::DATE_TIME => 1, SupplierDocumentChangeApprovePeer::COMPANY => 2, SupplierDocumentChangeApprovePeer::REVIEW_INDEX_NO => 3, SupplierDocumentChangeApprovePeer::APPROVE_BY => 4, SupplierDocumentChangeApprovePeer::NO_OF_EMAIL_SEND => 5, SupplierDocumentChangeApprovePeer::DATE_CREATED => 6, SupplierDocumentChangeApprovePeer::CREATED_BY => 7, SupplierDocumentChangeApprovePeer::DATE_MODIFIED => 8, SupplierDocumentChangeApprovePeer::MODIFIED_BY => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'company' => 2, 'review_index_no' => 3, 'approve_by' => 4, 'no_of_email_send' => 5, 'date_created' => 6, 'created_by' => 7, 'date_modified' => 8, 'modified_by' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/SupplierDocumentChangeApproveMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.SupplierDocumentChangeApproveMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SupplierDocumentChangeApprovePeer::getTableMap();
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
		return str_replace(SupplierDocumentChangeApprovePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SupplierDocumentChangeApprovePeer::ID);

		$criteria->addSelectColumn(SupplierDocumentChangeApprovePeer::DATE_TIME);

		$criteria->addSelectColumn(SupplierDocumentChangeApprovePeer::COMPANY);

		$criteria->addSelectColumn(SupplierDocumentChangeApprovePeer::REVIEW_INDEX_NO);

		$criteria->addSelectColumn(SupplierDocumentChangeApprovePeer::APPROVE_BY);

		$criteria->addSelectColumn(SupplierDocumentChangeApprovePeer::NO_OF_EMAIL_SEND);

		$criteria->addSelectColumn(SupplierDocumentChangeApprovePeer::DATE_CREATED);

		$criteria->addSelectColumn(SupplierDocumentChangeApprovePeer::CREATED_BY);

		$criteria->addSelectColumn(SupplierDocumentChangeApprovePeer::DATE_MODIFIED);

		$criteria->addSelectColumn(SupplierDocumentChangeApprovePeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(supplier_document_change_approve.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT supplier_document_change_approve.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SupplierDocumentChangeApprovePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SupplierDocumentChangeApprovePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SupplierDocumentChangeApprovePeer::doSelectRS($criteria, $con);
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
		$objects = SupplierDocumentChangeApprovePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SupplierDocumentChangeApprovePeer::populateObjects(SupplierDocumentChangeApprovePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SupplierDocumentChangeApprovePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SupplierDocumentChangeApprovePeer::getOMClass();
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
		return SupplierDocumentChangeApprovePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SupplierDocumentChangeApprovePeer::ID); 

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
			$comparison = $criteria->getComparison(SupplierDocumentChangeApprovePeer::ID);
			$selectCriteria->add(SupplierDocumentChangeApprovePeer::ID, $criteria->remove(SupplierDocumentChangeApprovePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SupplierDocumentChangeApprovePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SupplierDocumentChangeApprovePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SupplierDocumentChangeApprove) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SupplierDocumentChangeApprovePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SupplierDocumentChangeApprove $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SupplierDocumentChangeApprovePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SupplierDocumentChangeApprovePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SupplierDocumentChangeApprovePeer::DATABASE_NAME, SupplierDocumentChangeApprovePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SupplierDocumentChangeApprovePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SupplierDocumentChangeApprovePeer::DATABASE_NAME);

		$criteria->add(SupplierDocumentChangeApprovePeer::ID, $pk);


		$v = SupplierDocumentChangeApprovePeer::doSelect($criteria, $con);

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
			$criteria->add(SupplierDocumentChangeApprovePeer::ID, $pks, Criteria::IN);
			$objs = SupplierDocumentChangeApprovePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSupplierDocumentChangeApprovePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/SupplierDocumentChangeApproveMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.SupplierDocumentChangeApproveMapBuilder');
}

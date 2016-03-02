<?php


abstract class BaseSupplierDocumentChangeReviewPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'supplier_document_change_review';

	
	const CLASS_DEFAULT = 'lib.model.iso.SupplierDocumentChangeReview';

	
	const NUM_COLUMNS = 17;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'supplier_document_change_review.ID';

	
	const DATE_TIME = 'supplier_document_change_review.DATE_TIME';

	
	const COMPANY = 'supplier_document_change_review.COMPANY';

	
	const DOCUMENT_NO = 'supplier_document_change_review.DOCUMENT_NO';

	
	const DOCUMENT_TITLE = 'supplier_document_change_review.DOCUMENT_TITLE';

	
	const ORIGINAL_REV_NO = 'supplier_document_change_review.ORIGINAL_REV_NO';

	
	const MOD_REV_NO = 'supplier_document_change_review.MOD_REV_NO';

	
	const CHANGES_REQUESTED = 'supplier_document_change_review.CHANGES_REQUESTED';

	
	const SCR_STATUS = 'supplier_document_change_review.SCR_STATUS';

	
	const CAPA_REPORT_NO = 'supplier_document_change_review.CAPA_REPORT_NO';

	
	const REVIEW_BY = 'supplier_document_change_review.REVIEW_BY';

	
	const APPROVED = 'supplier_document_change_review.APPROVED';

	
	const APPROVED_DATE = 'supplier_document_change_review.APPROVED_DATE';

	
	const DATE_CREATED = 'supplier_document_change_review.DATE_CREATED';

	
	const CREATED_BY = 'supplier_document_change_review.CREATED_BY';

	
	const DATE_MODIFIED = 'supplier_document_change_review.DATE_MODIFIED';

	
	const MODIFIED_BY = 'supplier_document_change_review.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'Company', 'DocumentNo', 'DocumentTitle', 'OriginalRevNo', 'ModRevNo', 'ChangesRequested', 'ScrStatus', 'CapaReportNo', 'ReviewBy', 'Approved', 'ApprovedDate', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (SupplierDocumentChangeReviewPeer::ID, SupplierDocumentChangeReviewPeer::DATE_TIME, SupplierDocumentChangeReviewPeer::COMPANY, SupplierDocumentChangeReviewPeer::DOCUMENT_NO, SupplierDocumentChangeReviewPeer::DOCUMENT_TITLE, SupplierDocumentChangeReviewPeer::ORIGINAL_REV_NO, SupplierDocumentChangeReviewPeer::MOD_REV_NO, SupplierDocumentChangeReviewPeer::CHANGES_REQUESTED, SupplierDocumentChangeReviewPeer::SCR_STATUS, SupplierDocumentChangeReviewPeer::CAPA_REPORT_NO, SupplierDocumentChangeReviewPeer::REVIEW_BY, SupplierDocumentChangeReviewPeer::APPROVED, SupplierDocumentChangeReviewPeer::APPROVED_DATE, SupplierDocumentChangeReviewPeer::DATE_CREATED, SupplierDocumentChangeReviewPeer::CREATED_BY, SupplierDocumentChangeReviewPeer::DATE_MODIFIED, SupplierDocumentChangeReviewPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'company', 'document_no', 'document_title', 'original_rev_no', 'mod_rev_no', 'changes_requested', 'scr_status', 'capa_report_no', 'review_by', 'approved', 'approved_date', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'Company' => 2, 'DocumentNo' => 3, 'DocumentTitle' => 4, 'OriginalRevNo' => 5, 'ModRevNo' => 6, 'ChangesRequested' => 7, 'ScrStatus' => 8, 'CapaReportNo' => 9, 'ReviewBy' => 10, 'Approved' => 11, 'ApprovedDate' => 12, 'DateCreated' => 13, 'CreatedBy' => 14, 'DateModified' => 15, 'ModifiedBy' => 16, ),
		BasePeer::TYPE_COLNAME => array (SupplierDocumentChangeReviewPeer::ID => 0, SupplierDocumentChangeReviewPeer::DATE_TIME => 1, SupplierDocumentChangeReviewPeer::COMPANY => 2, SupplierDocumentChangeReviewPeer::DOCUMENT_NO => 3, SupplierDocumentChangeReviewPeer::DOCUMENT_TITLE => 4, SupplierDocumentChangeReviewPeer::ORIGINAL_REV_NO => 5, SupplierDocumentChangeReviewPeer::MOD_REV_NO => 6, SupplierDocumentChangeReviewPeer::CHANGES_REQUESTED => 7, SupplierDocumentChangeReviewPeer::SCR_STATUS => 8, SupplierDocumentChangeReviewPeer::CAPA_REPORT_NO => 9, SupplierDocumentChangeReviewPeer::REVIEW_BY => 10, SupplierDocumentChangeReviewPeer::APPROVED => 11, SupplierDocumentChangeReviewPeer::APPROVED_DATE => 12, SupplierDocumentChangeReviewPeer::DATE_CREATED => 13, SupplierDocumentChangeReviewPeer::CREATED_BY => 14, SupplierDocumentChangeReviewPeer::DATE_MODIFIED => 15, SupplierDocumentChangeReviewPeer::MODIFIED_BY => 16, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'company' => 2, 'document_no' => 3, 'document_title' => 4, 'original_rev_no' => 5, 'mod_rev_no' => 6, 'changes_requested' => 7, 'scr_status' => 8, 'capa_report_no' => 9, 'review_by' => 10, 'approved' => 11, 'approved_date' => 12, 'date_created' => 13, 'created_by' => 14, 'date_modified' => 15, 'modified_by' => 16, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/SupplierDocumentChangeReviewMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.SupplierDocumentChangeReviewMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SupplierDocumentChangeReviewPeer::getTableMap();
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
		return str_replace(SupplierDocumentChangeReviewPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::ID);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::DATE_TIME);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::COMPANY);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::DOCUMENT_NO);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::DOCUMENT_TITLE);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::ORIGINAL_REV_NO);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::MOD_REV_NO);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::CHANGES_REQUESTED);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::SCR_STATUS);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::CAPA_REPORT_NO);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::REVIEW_BY);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::APPROVED);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::APPROVED_DATE);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::DATE_CREATED);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::CREATED_BY);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(supplier_document_change_review.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT supplier_document_change_review.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SupplierDocumentChangeReviewPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SupplierDocumentChangeReviewPeer::doSelectRS($criteria, $con);
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
		$objects = SupplierDocumentChangeReviewPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SupplierDocumentChangeReviewPeer::populateObjects(SupplierDocumentChangeReviewPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SupplierDocumentChangeReviewPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SupplierDocumentChangeReviewPeer::getOMClass();
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
		return SupplierDocumentChangeReviewPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SupplierDocumentChangeReviewPeer::ID); 

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
			$comparison = $criteria->getComparison(SupplierDocumentChangeReviewPeer::ID);
			$selectCriteria->add(SupplierDocumentChangeReviewPeer::ID, $criteria->remove(SupplierDocumentChangeReviewPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SupplierDocumentChangeReviewPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SupplierDocumentChangeReviewPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SupplierDocumentChangeReview) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SupplierDocumentChangeReviewPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SupplierDocumentChangeReview $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SupplierDocumentChangeReviewPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SupplierDocumentChangeReviewPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SupplierDocumentChangeReviewPeer::DATABASE_NAME, SupplierDocumentChangeReviewPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SupplierDocumentChangeReviewPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SupplierDocumentChangeReviewPeer::DATABASE_NAME);

		$criteria->add(SupplierDocumentChangeReviewPeer::ID, $pk);


		$v = SupplierDocumentChangeReviewPeer::doSelect($criteria, $con);

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
			$criteria->add(SupplierDocumentChangeReviewPeer::ID, $pks, Criteria::IN);
			$objs = SupplierDocumentChangeReviewPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSupplierDocumentChangeReviewPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/SupplierDocumentChangeReviewMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.SupplierDocumentChangeReviewMapBuilder');
}

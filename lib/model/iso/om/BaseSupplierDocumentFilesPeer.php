<?php


abstract class BaseSupplierDocumentFilesPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'supplier_document_files';

	
	const CLASS_DEFAULT = 'lib.model.iso.SupplierDocumentFiles';

	
	const NUM_COLUMNS = 12;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'supplier_document_files.ID';

	
	const DATE_TIME = 'supplier_document_files.DATE_TIME';

	
	const SUPPLIER_DOCUMENT_CHANGE_REVIEW_ID = 'supplier_document_files.SUPPLIER_DOCUMENT_CHANGE_REVIEW_ID';

	
	const FILENAME = 'supplier_document_files.FILENAME';

	
	const PATH = 'supplier_document_files.PATH';

	
	const MIME_TYPE = 'supplier_document_files.MIME_TYPE';

	
	const SIZE = 'supplier_document_files.SIZE';

	
	const DESCRIPTION = 'supplier_document_files.DESCRIPTION';

	
	const DATE_CREATED = 'supplier_document_files.DATE_CREATED';

	
	const CREATED_BY = 'supplier_document_files.CREATED_BY';

	
	const DATE_MODIFIED = 'supplier_document_files.DATE_MODIFIED';

	
	const MODIFIED_BY = 'supplier_document_files.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'SupplierDocumentChangeReviewId', 'Filename', 'Path', 'MimeType', 'Size', 'Description', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (SupplierDocumentFilesPeer::ID, SupplierDocumentFilesPeer::DATE_TIME, SupplierDocumentFilesPeer::SUPPLIER_DOCUMENT_CHANGE_REVIEW_ID, SupplierDocumentFilesPeer::FILENAME, SupplierDocumentFilesPeer::PATH, SupplierDocumentFilesPeer::MIME_TYPE, SupplierDocumentFilesPeer::SIZE, SupplierDocumentFilesPeer::DESCRIPTION, SupplierDocumentFilesPeer::DATE_CREATED, SupplierDocumentFilesPeer::CREATED_BY, SupplierDocumentFilesPeer::DATE_MODIFIED, SupplierDocumentFilesPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'supplier_document_change_review_id', 'filename', 'path', 'mime_type', 'size', 'description', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'SupplierDocumentChangeReviewId' => 2, 'Filename' => 3, 'Path' => 4, 'MimeType' => 5, 'Size' => 6, 'Description' => 7, 'DateCreated' => 8, 'CreatedBy' => 9, 'DateModified' => 10, 'ModifiedBy' => 11, ),
		BasePeer::TYPE_COLNAME => array (SupplierDocumentFilesPeer::ID => 0, SupplierDocumentFilesPeer::DATE_TIME => 1, SupplierDocumentFilesPeer::SUPPLIER_DOCUMENT_CHANGE_REVIEW_ID => 2, SupplierDocumentFilesPeer::FILENAME => 3, SupplierDocumentFilesPeer::PATH => 4, SupplierDocumentFilesPeer::MIME_TYPE => 5, SupplierDocumentFilesPeer::SIZE => 6, SupplierDocumentFilesPeer::DESCRIPTION => 7, SupplierDocumentFilesPeer::DATE_CREATED => 8, SupplierDocumentFilesPeer::CREATED_BY => 9, SupplierDocumentFilesPeer::DATE_MODIFIED => 10, SupplierDocumentFilesPeer::MODIFIED_BY => 11, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'supplier_document_change_review_id' => 2, 'filename' => 3, 'path' => 4, 'mime_type' => 5, 'size' => 6, 'description' => 7, 'date_created' => 8, 'created_by' => 9, 'date_modified' => 10, 'modified_by' => 11, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/SupplierDocumentFilesMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.SupplierDocumentFilesMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SupplierDocumentFilesPeer::getTableMap();
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
		return str_replace(SupplierDocumentFilesPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SupplierDocumentFilesPeer::ID);

		$criteria->addSelectColumn(SupplierDocumentFilesPeer::DATE_TIME);

		$criteria->addSelectColumn(SupplierDocumentFilesPeer::SUPPLIER_DOCUMENT_CHANGE_REVIEW_ID);

		$criteria->addSelectColumn(SupplierDocumentFilesPeer::FILENAME);

		$criteria->addSelectColumn(SupplierDocumentFilesPeer::PATH);

		$criteria->addSelectColumn(SupplierDocumentFilesPeer::MIME_TYPE);

		$criteria->addSelectColumn(SupplierDocumentFilesPeer::SIZE);

		$criteria->addSelectColumn(SupplierDocumentFilesPeer::DESCRIPTION);

		$criteria->addSelectColumn(SupplierDocumentFilesPeer::DATE_CREATED);

		$criteria->addSelectColumn(SupplierDocumentFilesPeer::CREATED_BY);

		$criteria->addSelectColumn(SupplierDocumentFilesPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(SupplierDocumentFilesPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(supplier_document_files.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT supplier_document_files.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SupplierDocumentFilesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SupplierDocumentFilesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SupplierDocumentFilesPeer::doSelectRS($criteria, $con);
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
		$objects = SupplierDocumentFilesPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SupplierDocumentFilesPeer::populateObjects(SupplierDocumentFilesPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SupplierDocumentFilesPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SupplierDocumentFilesPeer::getOMClass();
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
		return SupplierDocumentFilesPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SupplierDocumentFilesPeer::ID); 

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
			$comparison = $criteria->getComparison(SupplierDocumentFilesPeer::ID);
			$selectCriteria->add(SupplierDocumentFilesPeer::ID, $criteria->remove(SupplierDocumentFilesPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SupplierDocumentFilesPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SupplierDocumentFilesPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SupplierDocumentFiles) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SupplierDocumentFilesPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SupplierDocumentFiles $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SupplierDocumentFilesPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SupplierDocumentFilesPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SupplierDocumentFilesPeer::DATABASE_NAME, SupplierDocumentFilesPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SupplierDocumentFilesPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SupplierDocumentFilesPeer::DATABASE_NAME);

		$criteria->add(SupplierDocumentFilesPeer::ID, $pk);


		$v = SupplierDocumentFilesPeer::doSelect($criteria, $con);

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
			$criteria->add(SupplierDocumentFilesPeer::ID, $pks, Criteria::IN);
			$objs = SupplierDocumentFilesPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSupplierDocumentFilesPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/SupplierDocumentFilesMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.SupplierDocumentFilesMapBuilder');
}

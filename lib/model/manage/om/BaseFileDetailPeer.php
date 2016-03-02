<?php


abstract class BaseFileDetailPeer {

	
	const DATABASE_NAME = 'reject_photo';

	
	const TABLE_NAME = 'file_detail';

	
	const CLASS_DEFAULT = 'lib.model.manage.FileDetail';

	
	const NUM_COLUMNS = 13;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'file_detail.ID';

	
	const BATCH_ID = 'file_detail.BATCH_ID';

	
	const GARMENT_CODE = 'file_detail.GARMENT_CODE';

	
	const FILE_NAME = 'file_detail.FILE_NAME';

	
	const PATH = 'file_detail.PATH';

	
	const FILE_NAME_ORIGINAL = 'file_detail.FILE_NAME_ORIGINAL';

	
	const MIME_TYPE = 'file_detail.MIME_TYPE';

	
	const SIZE = 'file_detail.SIZE';

	
	const DESCRIPTION = 'file_detail.DESCRIPTION';

	
	const DATE_CREATED = 'file_detail.DATE_CREATED';

	
	const CREATED_BY = 'file_detail.CREATED_BY';

	
	const DATE_MODIFIED = 'file_detail.DATE_MODIFIED';

	
	const MODIFIED_BY = 'file_detail.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'BatchId', 'GarmentCode', 'FileName', 'Path', 'FileNameOriginal', 'MimeType', 'Size', 'Description', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (FileDetailPeer::ID, FileDetailPeer::BATCH_ID, FileDetailPeer::GARMENT_CODE, FileDetailPeer::FILE_NAME, FileDetailPeer::PATH, FileDetailPeer::FILE_NAME_ORIGINAL, FileDetailPeer::MIME_TYPE, FileDetailPeer::SIZE, FileDetailPeer::DESCRIPTION, FileDetailPeer::DATE_CREATED, FileDetailPeer::CREATED_BY, FileDetailPeer::DATE_MODIFIED, FileDetailPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'batch_id', 'garment_code', 'file_name', 'path', 'file_name_original', 'mime_type', 'size', 'description', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'BatchId' => 1, 'GarmentCode' => 2, 'FileName' => 3, 'Path' => 4, 'FileNameOriginal' => 5, 'MimeType' => 6, 'Size' => 7, 'Description' => 8, 'DateCreated' => 9, 'CreatedBy' => 10, 'DateModified' => 11, 'ModifiedBy' => 12, ),
		BasePeer::TYPE_COLNAME => array (FileDetailPeer::ID => 0, FileDetailPeer::BATCH_ID => 1, FileDetailPeer::GARMENT_CODE => 2, FileDetailPeer::FILE_NAME => 3, FileDetailPeer::PATH => 4, FileDetailPeer::FILE_NAME_ORIGINAL => 5, FileDetailPeer::MIME_TYPE => 6, FileDetailPeer::SIZE => 7, FileDetailPeer::DESCRIPTION => 8, FileDetailPeer::DATE_CREATED => 9, FileDetailPeer::CREATED_BY => 10, FileDetailPeer::DATE_MODIFIED => 11, FileDetailPeer::MODIFIED_BY => 12, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'batch_id' => 1, 'garment_code' => 2, 'file_name' => 3, 'path' => 4, 'file_name_original' => 5, 'mime_type' => 6, 'size' => 7, 'description' => 8, 'date_created' => 9, 'created_by' => 10, 'date_modified' => 11, 'modified_by' => 12, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/manage/map/FileDetailMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.manage.map.FileDetailMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = FileDetailPeer::getTableMap();
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
		return str_replace(FileDetailPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(FileDetailPeer::ID);

		$criteria->addSelectColumn(FileDetailPeer::BATCH_ID);

		$criteria->addSelectColumn(FileDetailPeer::GARMENT_CODE);

		$criteria->addSelectColumn(FileDetailPeer::FILE_NAME);

		$criteria->addSelectColumn(FileDetailPeer::PATH);

		$criteria->addSelectColumn(FileDetailPeer::FILE_NAME_ORIGINAL);

		$criteria->addSelectColumn(FileDetailPeer::MIME_TYPE);

		$criteria->addSelectColumn(FileDetailPeer::SIZE);

		$criteria->addSelectColumn(FileDetailPeer::DESCRIPTION);

		$criteria->addSelectColumn(FileDetailPeer::DATE_CREATED);

		$criteria->addSelectColumn(FileDetailPeer::CREATED_BY);

		$criteria->addSelectColumn(FileDetailPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(FileDetailPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(file_detail.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT file_detail.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FileDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FileDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = FileDetailPeer::doSelectRS($criteria, $con);
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
		$objects = FileDetailPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return FileDetailPeer::populateObjects(FileDetailPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			FileDetailPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = FileDetailPeer::getOMClass();
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
		return FileDetailPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(FileDetailPeer::ID); 

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
			$comparison = $criteria->getComparison(FileDetailPeer::ID);
			$selectCriteria->add(FileDetailPeer::ID, $criteria->remove(FileDetailPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(FileDetailPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(FileDetailPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof FileDetail) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(FileDetailPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(FileDetail $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(FileDetailPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(FileDetailPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(FileDetailPeer::DATABASE_NAME, FileDetailPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = FileDetailPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(FileDetailPeer::DATABASE_NAME);

		$criteria->add(FileDetailPeer::ID, $pk);


		$v = FileDetailPeer::doSelect($criteria, $con);

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
			$criteria->add(FileDetailPeer::ID, $pks, Criteria::IN);
			$objs = FileDetailPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseFileDetailPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/manage/map/FileDetailMapBuilder.php';
	Propel::registerMapBuilder('lib.model.manage.map.FileDetailMapBuilder');
}
<?php


abstract class BasePhotoDetailPeer {

	
	const DATABASE_NAME = 'reject_photo';

	
	const TABLE_NAME = 'photo_detail';

	
	const CLASS_DEFAULT = 'lib.model.reject.PhotoDetail';

	
	const NUM_COLUMNS = 21;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'photo_detail.ID';

	
	const TRANS_DATE = 'photo_detail.TRANS_DATE';

	
	const BATCH_ID = 'photo_detail.BATCH_ID';

	
	const CUSTOMER_ID = 'photo_detail.CUSTOMER_ID';

	
	const NAME = 'photo_detail.NAME';

	
	const GARMENT_CODE = 'photo_detail.GARMENT_CODE';

	
	const COLOR = 'photo_detail.COLOR';

	
	const GARMENT = 'photo_detail.GARMENT';

	
	const REASON = 'photo_detail.REASON';

	
	const SIZE = 'photo_detail.SIZE';

	
	const NO_OF_TIMES_WASH = 'photo_detail.NO_OF_TIMES_WASH';

	
	const DEPARTMENT = 'photo_detail.DEPARTMENT';

	
	const SHIFT = 'photo_detail.SHIFT';

	
	const GARMENT_ACTION = 'photo_detail.GARMENT_ACTION';

	
	const CREATED_BY = 'photo_detail.CREATED_BY';

	
	const DATE_CREATED = 'photo_detail.DATE_CREATED';

	
	const MODIFIED_BY = 'photo_detail.MODIFIED_BY';

	
	const DATE_MODIFIED = 'photo_detail.DATE_MODIFIED';

	
	const DESCRIPTION = 'photo_detail.DESCRIPTION';

	
	const FILELINK = 'photo_detail.FILELINK';

	
	const FILENAME = 'photo_detail.FILENAME';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'BatchId', 'CustomerId', 'Name', 'GarmentCode', 'Color', 'Garment', 'Reason', 'Size', 'NoOfTimesWash', 'Department', 'Shift', 'GarmentAction', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', 'Description', 'Filelink', 'Filename', ),
		BasePeer::TYPE_COLNAME => array (PhotoDetailPeer::ID, PhotoDetailPeer::TRANS_DATE, PhotoDetailPeer::BATCH_ID, PhotoDetailPeer::CUSTOMER_ID, PhotoDetailPeer::NAME, PhotoDetailPeer::GARMENT_CODE, PhotoDetailPeer::COLOR, PhotoDetailPeer::GARMENT, PhotoDetailPeer::REASON, PhotoDetailPeer::SIZE, PhotoDetailPeer::NO_OF_TIMES_WASH, PhotoDetailPeer::DEPARTMENT, PhotoDetailPeer::SHIFT, PhotoDetailPeer::GARMENT_ACTION, PhotoDetailPeer::CREATED_BY, PhotoDetailPeer::DATE_CREATED, PhotoDetailPeer::MODIFIED_BY, PhotoDetailPeer::DATE_MODIFIED, PhotoDetailPeer::DESCRIPTION, PhotoDetailPeer::FILELINK, PhotoDetailPeer::FILENAME, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'batch_id', 'customer_id', 'name', 'garment_code', 'color', 'garment', 'reason', 'size', 'no_of_times_wash', 'department', 'shift', 'garment_action', 'created_by', 'date_created', 'modified_by', 'date_modified', 'description', 'filelink', 'filename', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'BatchId' => 2, 'CustomerId' => 3, 'Name' => 4, 'GarmentCode' => 5, 'Color' => 6, 'Garment' => 7, 'Reason' => 8, 'Size' => 9, 'NoOfTimesWash' => 10, 'Department' => 11, 'Shift' => 12, 'GarmentAction' => 13, 'CreatedBy' => 14, 'DateCreated' => 15, 'ModifiedBy' => 16, 'DateModified' => 17, 'Description' => 18, 'Filelink' => 19, 'Filename' => 20, ),
		BasePeer::TYPE_COLNAME => array (PhotoDetailPeer::ID => 0, PhotoDetailPeer::TRANS_DATE => 1, PhotoDetailPeer::BATCH_ID => 2, PhotoDetailPeer::CUSTOMER_ID => 3, PhotoDetailPeer::NAME => 4, PhotoDetailPeer::GARMENT_CODE => 5, PhotoDetailPeer::COLOR => 6, PhotoDetailPeer::GARMENT => 7, PhotoDetailPeer::REASON => 8, PhotoDetailPeer::SIZE => 9, PhotoDetailPeer::NO_OF_TIMES_WASH => 10, PhotoDetailPeer::DEPARTMENT => 11, PhotoDetailPeer::SHIFT => 12, PhotoDetailPeer::GARMENT_ACTION => 13, PhotoDetailPeer::CREATED_BY => 14, PhotoDetailPeer::DATE_CREATED => 15, PhotoDetailPeer::MODIFIED_BY => 16, PhotoDetailPeer::DATE_MODIFIED => 17, PhotoDetailPeer::DESCRIPTION => 18, PhotoDetailPeer::FILELINK => 19, PhotoDetailPeer::FILENAME => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'batch_id' => 2, 'customer_id' => 3, 'name' => 4, 'garment_code' => 5, 'color' => 6, 'garment' => 7, 'reason' => 8, 'size' => 9, 'no_of_times_wash' => 10, 'department' => 11, 'shift' => 12, 'garment_action' => 13, 'created_by' => 14, 'date_created' => 15, 'modified_by' => 16, 'date_modified' => 17, 'description' => 18, 'filelink' => 19, 'filename' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/reject/map/PhotoDetailMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.reject.map.PhotoDetailMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = PhotoDetailPeer::getTableMap();
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
		return str_replace(PhotoDetailPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(PhotoDetailPeer::ID);

		$criteria->addSelectColumn(PhotoDetailPeer::TRANS_DATE);

		$criteria->addSelectColumn(PhotoDetailPeer::BATCH_ID);

		$criteria->addSelectColumn(PhotoDetailPeer::CUSTOMER_ID);

		$criteria->addSelectColumn(PhotoDetailPeer::NAME);

		$criteria->addSelectColumn(PhotoDetailPeer::GARMENT_CODE);

		$criteria->addSelectColumn(PhotoDetailPeer::COLOR);

		$criteria->addSelectColumn(PhotoDetailPeer::GARMENT);

		$criteria->addSelectColumn(PhotoDetailPeer::REASON);

		$criteria->addSelectColumn(PhotoDetailPeer::SIZE);

		$criteria->addSelectColumn(PhotoDetailPeer::NO_OF_TIMES_WASH);

		$criteria->addSelectColumn(PhotoDetailPeer::DEPARTMENT);

		$criteria->addSelectColumn(PhotoDetailPeer::SHIFT);

		$criteria->addSelectColumn(PhotoDetailPeer::GARMENT_ACTION);

		$criteria->addSelectColumn(PhotoDetailPeer::CREATED_BY);

		$criteria->addSelectColumn(PhotoDetailPeer::DATE_CREATED);

		$criteria->addSelectColumn(PhotoDetailPeer::MODIFIED_BY);

		$criteria->addSelectColumn(PhotoDetailPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(PhotoDetailPeer::DESCRIPTION);

		$criteria->addSelectColumn(PhotoDetailPeer::FILELINK);

		$criteria->addSelectColumn(PhotoDetailPeer::FILENAME);

	}

	const COUNT = 'COUNT(photo_detail.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT photo_detail.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PhotoDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PhotoDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = PhotoDetailPeer::doSelectRS($criteria, $con);
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
		$objects = PhotoDetailPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return PhotoDetailPeer::populateObjects(PhotoDetailPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			PhotoDetailPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = PhotoDetailPeer::getOMClass();
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
		return PhotoDetailPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(PhotoDetailPeer::ID); 

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
			$comparison = $criteria->getComparison(PhotoDetailPeer::ID);
			$selectCriteria->add(PhotoDetailPeer::ID, $criteria->remove(PhotoDetailPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(PhotoDetailPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(PhotoDetailPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof PhotoDetail) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PhotoDetailPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(PhotoDetail $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PhotoDetailPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PhotoDetailPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(PhotoDetailPeer::DATABASE_NAME, PhotoDetailPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = PhotoDetailPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(PhotoDetailPeer::DATABASE_NAME);

		$criteria->add(PhotoDetailPeer::ID, $pk);


		$v = PhotoDetailPeer::doSelect($criteria, $con);

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
			$criteria->add(PhotoDetailPeer::ID, $pks, Criteria::IN);
			$objs = PhotoDetailPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasePhotoDetailPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/reject/map/PhotoDetailMapBuilder.php';
	Propel::registerMapBuilder('lib.model.reject.map.PhotoDetailMapBuilder');
}

<?php


abstract class BaseLabelPreviewDetailPeer {

	
	const DATABASE_NAME = 'hgas3';

	
	const TABLE_NAME = 'label_preview_detail';

	
	const CLASS_DEFAULT = 'lib.model.hgas3.LabelPreviewDetail';

	
	const NUM_COLUMNS = 14;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'label_preview_detail.ID';

	
	const LABELING_TEMPLATE_ID = 'label_preview_detail.LABELING_TEMPLATE_ID';

	
	const LINE1_COL1 = 'label_preview_detail.LINE1_COL1';

	
	const LINE1_COL2 = 'label_preview_detail.LINE1_COL2';

	
	const LINE2_COL1 = 'label_preview_detail.LINE2_COL1';

	
	const LINE2_COL2 = 'label_preview_detail.LINE2_COL2';

	
	const LINE3_COL1 = 'label_preview_detail.LINE3_COL1';

	
	const LINE3_COL2 = 'label_preview_detail.LINE3_COL2';

	
	const LINE4_COL1 = 'label_preview_detail.LINE4_COL1';

	
	const LINE4_COL2 = 'label_preview_detail.LINE4_COL2';

	
	const CREATED_BY = 'label_preview_detail.CREATED_BY';

	
	const DATE_CREATED = 'label_preview_detail.DATE_CREATED';

	
	const MODIFIED_BY = 'label_preview_detail.MODIFIED_BY';

	
	const DATE_MODIFIED = 'label_preview_detail.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'LabelingTemplateId', 'Line1Col1', 'Line1Col2', 'Line2Col1', 'Line2Col2', 'Line3Col1', 'Line3Col2', 'Line4Col1', 'Line4Col2', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (LabelPreviewDetailPeer::ID, LabelPreviewDetailPeer::LABELING_TEMPLATE_ID, LabelPreviewDetailPeer::LINE1_COL1, LabelPreviewDetailPeer::LINE1_COL2, LabelPreviewDetailPeer::LINE2_COL1, LabelPreviewDetailPeer::LINE2_COL2, LabelPreviewDetailPeer::LINE3_COL1, LabelPreviewDetailPeer::LINE3_COL2, LabelPreviewDetailPeer::LINE4_COL1, LabelPreviewDetailPeer::LINE4_COL2, LabelPreviewDetailPeer::CREATED_BY, LabelPreviewDetailPeer::DATE_CREATED, LabelPreviewDetailPeer::MODIFIED_BY, LabelPreviewDetailPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'labeling_template_id', 'line1_col1', 'line1_col2', 'line2_col1', 'line2_col2', 'line3_col1', 'line3_col2', 'line4_col1', 'line4_col2', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'LabelingTemplateId' => 1, 'Line1Col1' => 2, 'Line1Col2' => 3, 'Line2Col1' => 4, 'Line2Col2' => 5, 'Line3Col1' => 6, 'Line3Col2' => 7, 'Line4Col1' => 8, 'Line4Col2' => 9, 'CreatedBy' => 10, 'DateCreated' => 11, 'ModifiedBy' => 12, 'DateModified' => 13, ),
		BasePeer::TYPE_COLNAME => array (LabelPreviewDetailPeer::ID => 0, LabelPreviewDetailPeer::LABELING_TEMPLATE_ID => 1, LabelPreviewDetailPeer::LINE1_COL1 => 2, LabelPreviewDetailPeer::LINE1_COL2 => 3, LabelPreviewDetailPeer::LINE2_COL1 => 4, LabelPreviewDetailPeer::LINE2_COL2 => 5, LabelPreviewDetailPeer::LINE3_COL1 => 6, LabelPreviewDetailPeer::LINE3_COL2 => 7, LabelPreviewDetailPeer::LINE4_COL1 => 8, LabelPreviewDetailPeer::LINE4_COL2 => 9, LabelPreviewDetailPeer::CREATED_BY => 10, LabelPreviewDetailPeer::DATE_CREATED => 11, LabelPreviewDetailPeer::MODIFIED_BY => 12, LabelPreviewDetailPeer::DATE_MODIFIED => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'labeling_template_id' => 1, 'line1_col1' => 2, 'line1_col2' => 3, 'line2_col1' => 4, 'line2_col2' => 5, 'line3_col1' => 6, 'line3_col2' => 7, 'line4_col1' => 8, 'line4_col2' => 9, 'created_by' => 10, 'date_created' => 11, 'modified_by' => 12, 'date_modified' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hgas3/map/LabelPreviewDetailMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hgas3.map.LabelPreviewDetailMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = LabelPreviewDetailPeer::getTableMap();
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
		return str_replace(LabelPreviewDetailPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(LabelPreviewDetailPeer::ID);

		$criteria->addSelectColumn(LabelPreviewDetailPeer::LABELING_TEMPLATE_ID);

		$criteria->addSelectColumn(LabelPreviewDetailPeer::LINE1_COL1);

		$criteria->addSelectColumn(LabelPreviewDetailPeer::LINE1_COL2);

		$criteria->addSelectColumn(LabelPreviewDetailPeer::LINE2_COL1);

		$criteria->addSelectColumn(LabelPreviewDetailPeer::LINE2_COL2);

		$criteria->addSelectColumn(LabelPreviewDetailPeer::LINE3_COL1);

		$criteria->addSelectColumn(LabelPreviewDetailPeer::LINE3_COL2);

		$criteria->addSelectColumn(LabelPreviewDetailPeer::LINE4_COL1);

		$criteria->addSelectColumn(LabelPreviewDetailPeer::LINE4_COL2);

		$criteria->addSelectColumn(LabelPreviewDetailPeer::CREATED_BY);

		$criteria->addSelectColumn(LabelPreviewDetailPeer::DATE_CREATED);

		$criteria->addSelectColumn(LabelPreviewDetailPeer::MODIFIED_BY);

		$criteria->addSelectColumn(LabelPreviewDetailPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(label_preview_detail.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT label_preview_detail.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LabelPreviewDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LabelPreviewDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = LabelPreviewDetailPeer::doSelectRS($criteria, $con);
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
		$objects = LabelPreviewDetailPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return LabelPreviewDetailPeer::populateObjects(LabelPreviewDetailPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			LabelPreviewDetailPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = LabelPreviewDetailPeer::getOMClass();
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
		return LabelPreviewDetailPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(LabelPreviewDetailPeer::ID); 

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
			$comparison = $criteria->getComparison(LabelPreviewDetailPeer::ID);
			$selectCriteria->add(LabelPreviewDetailPeer::ID, $criteria->remove(LabelPreviewDetailPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(LabelPreviewDetailPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(LabelPreviewDetailPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof LabelPreviewDetail) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(LabelPreviewDetailPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(LabelPreviewDetail $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(LabelPreviewDetailPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(LabelPreviewDetailPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(LabelPreviewDetailPeer::DATABASE_NAME, LabelPreviewDetailPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = LabelPreviewDetailPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(LabelPreviewDetailPeer::DATABASE_NAME);

		$criteria->add(LabelPreviewDetailPeer::ID, $pk);


		$v = LabelPreviewDetailPeer::doSelect($criteria, $con);

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
			$criteria->add(LabelPreviewDetailPeer::ID, $pks, Criteria::IN);
			$objs = LabelPreviewDetailPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseLabelPreviewDetailPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hgas3/map/LabelPreviewDetailMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hgas3.map.LabelPreviewDetailMapBuilder');
}

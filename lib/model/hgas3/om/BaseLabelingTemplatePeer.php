<?php


abstract class BaseLabelingTemplatePeer {

	
	const DATABASE_NAME = 'hgas3';

	
	const TABLE_NAME = 'labeling_template';

	
	const CLASS_DEFAULT = 'lib.model.hgas3.LabelingTemplate';

	
	const NUM_COLUMNS = 43;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'labeling_template.ID';

	
	const LABEL_DESCRIPTION_ID = 'labeling_template.LABEL_DESCRIPTION_ID';

	
	const LABEL_FIELD1_ID = 'labeling_template.LABEL_FIELD1_ID';

	
	const LABEL_FIELD2_ID = 'labeling_template.LABEL_FIELD2_ID';

	
	const LABEL_FIELD3_ID = 'labeling_template.LABEL_FIELD3_ID';

	
	const LABEL_COMPANY_ID = 'labeling_template.LABEL_COMPANY_ID';

	
	const DEPARTMENT = 'labeling_template.DEPARTMENT';

	
	const LINE1_COL1 = 'labeling_template.LINE1_COL1';

	
	const LINE2_COL1 = 'labeling_template.LINE2_COL1';

	
	const LINE3_COL1 = 'labeling_template.LINE3_COL1';

	
	const LINE4_COL1 = 'labeling_template.LINE4_COL1';

	
	const LINE1_COL2 = 'labeling_template.LINE1_COL2';

	
	const LINE2_COL2 = 'labeling_template.LINE2_COL2';

	
	const LINE3_COL2 = 'labeling_template.LINE3_COL2';

	
	const LINE4_COL2 = 'labeling_template.LINE4_COL2';

	
	const L1_FONT = 'labeling_template.L1_FONT';

	
	const L1_FONT_SIZE = 'labeling_template.L1_FONT_SIZE';

	
	const L2_FONT = 'labeling_template.L2_FONT';

	
	const L2_FONT_SIZE = 'labeling_template.L2_FONT_SIZE';

	
	const L3_FONT = 'labeling_template.L3_FONT';

	
	const L3_FONT_SIZE = 'labeling_template.L3_FONT_SIZE';

	
	const L4_FONT = 'labeling_template.L4_FONT';

	
	const L4_FONT_SIZE = 'labeling_template.L4_FONT_SIZE';

	
	const LABEL_HEIGHT_IN_CM = 'labeling_template.LABEL_HEIGHT_IN_CM';

	
	const LABEL_WIDTH_IN_CM = 'labeling_template.LABEL_WIDTH_IN_CM';

	
	const POSITION = 'labeling_template.POSITION';

	
	const GARMENT_TYPE = 'labeling_template.GARMENT_TYPE';

	
	const COLOR = 'labeling_template.COLOR';

	
	const COLOR_HEX = 'labeling_template.COLOR_HEX';

	
	const PRINT_ORIENTATION = 'labeling_template.PRINT_ORIENTATION';

	
	const REMARK = 'labeling_template.REMARK';

	
	const L1_FONT_STYLE = 'labeling_template.L1_FONT_STYLE';

	
	const L2_FONT_STYLE = 'labeling_template.L2_FONT_STYLE';

	
	const L3_FONT_STYLE = 'labeling_template.L3_FONT_STYLE';

	
	const L4_FONT_STYLE = 'labeling_template.L4_FONT_STYLE';

	
	const L1_SEPARATOR = 'labeling_template.L1_SEPARATOR';

	
	const L2_SEPARATOR = 'labeling_template.L2_SEPARATOR';

	
	const L3_SEPARATOR = 'labeling_template.L3_SEPARATOR';

	
	const L4_SEPARATOR = 'labeling_template.L4_SEPARATOR';

	
	const CREATED_BY = 'labeling_template.CREATED_BY';

	
	const DATE_CREATED = 'labeling_template.DATE_CREATED';

	
	const MODIFIED_BY = 'labeling_template.MODIFIED_BY';

	
	const DATE_MODIFIED = 'labeling_template.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'LabelDescriptionId', 'LabelField1Id', 'LabelField2Id', 'LabelField3Id', 'LabelCompanyId', 'Department', 'Line1Col1', 'Line2Col1', 'Line3Col1', 'Line4Col1', 'Line1Col2', 'Line2Col2', 'Line3Col2', 'Line4Col2', 'L1Font', 'L1FontSize', 'L2Font', 'L2FontSize', 'L3Font', 'L3FontSize', 'L4Font', 'L4FontSize', 'LabelHeightInCm', 'LabelWidthInCm', 'Position', 'GarmentType', 'Color', 'ColorHex', 'PrintOrientation', 'Remark', 'L1FontStyle', 'L2FontStyle', 'L3FontStyle', 'L4FontStyle', 'L1Separator', 'L2Separator', 'L3Separator', 'L4Separator', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (LabelingTemplatePeer::ID, LabelingTemplatePeer::LABEL_DESCRIPTION_ID, LabelingTemplatePeer::LABEL_FIELD1_ID, LabelingTemplatePeer::LABEL_FIELD2_ID, LabelingTemplatePeer::LABEL_FIELD3_ID, LabelingTemplatePeer::LABEL_COMPANY_ID, LabelingTemplatePeer::DEPARTMENT, LabelingTemplatePeer::LINE1_COL1, LabelingTemplatePeer::LINE2_COL1, LabelingTemplatePeer::LINE3_COL1, LabelingTemplatePeer::LINE4_COL1, LabelingTemplatePeer::LINE1_COL2, LabelingTemplatePeer::LINE2_COL2, LabelingTemplatePeer::LINE3_COL2, LabelingTemplatePeer::LINE4_COL2, LabelingTemplatePeer::L1_FONT, LabelingTemplatePeer::L1_FONT_SIZE, LabelingTemplatePeer::L2_FONT, LabelingTemplatePeer::L2_FONT_SIZE, LabelingTemplatePeer::L3_FONT, LabelingTemplatePeer::L3_FONT_SIZE, LabelingTemplatePeer::L4_FONT, LabelingTemplatePeer::L4_FONT_SIZE, LabelingTemplatePeer::LABEL_HEIGHT_IN_CM, LabelingTemplatePeer::LABEL_WIDTH_IN_CM, LabelingTemplatePeer::POSITION, LabelingTemplatePeer::GARMENT_TYPE, LabelingTemplatePeer::COLOR, LabelingTemplatePeer::COLOR_HEX, LabelingTemplatePeer::PRINT_ORIENTATION, LabelingTemplatePeer::REMARK, LabelingTemplatePeer::L1_FONT_STYLE, LabelingTemplatePeer::L2_FONT_STYLE, LabelingTemplatePeer::L3_FONT_STYLE, LabelingTemplatePeer::L4_FONT_STYLE, LabelingTemplatePeer::L1_SEPARATOR, LabelingTemplatePeer::L2_SEPARATOR, LabelingTemplatePeer::L3_SEPARATOR, LabelingTemplatePeer::L4_SEPARATOR, LabelingTemplatePeer::CREATED_BY, LabelingTemplatePeer::DATE_CREATED, LabelingTemplatePeer::MODIFIED_BY, LabelingTemplatePeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'label_description_id', 'label_field1_id', 'label_field2_id', 'label_field3_id', 'label_company_id', 'department', 'line1_col1', 'line2_col1', 'line3_col1', 'line4_col1', 'line1_col2', 'line2_col2', 'line3_col2', 'line4_col2', 'l1_font', 'l1_font_size', 'l2_font', 'l2_font_size', 'l3_font', 'l3_font_size', 'l4_font', 'l4_font_size', 'label_height_in_cm', 'label_width_in_cm', 'position', 'garment_type', 'color', 'color_hex', 'print_orientation', 'remark', 'l1_font_style', 'l2_font_style', 'l3_font_style', 'l4_font_style', 'l1_separator', 'l2_separator', 'l3_separator', 'l4_separator', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'LabelDescriptionId' => 1, 'LabelField1Id' => 2, 'LabelField2Id' => 3, 'LabelField3Id' => 4, 'LabelCompanyId' => 5, 'Department' => 6, 'Line1Col1' => 7, 'Line2Col1' => 8, 'Line3Col1' => 9, 'Line4Col1' => 10, 'Line1Col2' => 11, 'Line2Col2' => 12, 'Line3Col2' => 13, 'Line4Col2' => 14, 'L1Font' => 15, 'L1FontSize' => 16, 'L2Font' => 17, 'L2FontSize' => 18, 'L3Font' => 19, 'L3FontSize' => 20, 'L4Font' => 21, 'L4FontSize' => 22, 'LabelHeightInCm' => 23, 'LabelWidthInCm' => 24, 'Position' => 25, 'GarmentType' => 26, 'Color' => 27, 'ColorHex' => 28, 'PrintOrientation' => 29, 'Remark' => 30, 'L1FontStyle' => 31, 'L2FontStyle' => 32, 'L3FontStyle' => 33, 'L4FontStyle' => 34, 'L1Separator' => 35, 'L2Separator' => 36, 'L3Separator' => 37, 'L4Separator' => 38, 'CreatedBy' => 39, 'DateCreated' => 40, 'ModifiedBy' => 41, 'DateModified' => 42, ),
		BasePeer::TYPE_COLNAME => array (LabelingTemplatePeer::ID => 0, LabelingTemplatePeer::LABEL_DESCRIPTION_ID => 1, LabelingTemplatePeer::LABEL_FIELD1_ID => 2, LabelingTemplatePeer::LABEL_FIELD2_ID => 3, LabelingTemplatePeer::LABEL_FIELD3_ID => 4, LabelingTemplatePeer::LABEL_COMPANY_ID => 5, LabelingTemplatePeer::DEPARTMENT => 6, LabelingTemplatePeer::LINE1_COL1 => 7, LabelingTemplatePeer::LINE2_COL1 => 8, LabelingTemplatePeer::LINE3_COL1 => 9, LabelingTemplatePeer::LINE4_COL1 => 10, LabelingTemplatePeer::LINE1_COL2 => 11, LabelingTemplatePeer::LINE2_COL2 => 12, LabelingTemplatePeer::LINE3_COL2 => 13, LabelingTemplatePeer::LINE4_COL2 => 14, LabelingTemplatePeer::L1_FONT => 15, LabelingTemplatePeer::L1_FONT_SIZE => 16, LabelingTemplatePeer::L2_FONT => 17, LabelingTemplatePeer::L2_FONT_SIZE => 18, LabelingTemplatePeer::L3_FONT => 19, LabelingTemplatePeer::L3_FONT_SIZE => 20, LabelingTemplatePeer::L4_FONT => 21, LabelingTemplatePeer::L4_FONT_SIZE => 22, LabelingTemplatePeer::LABEL_HEIGHT_IN_CM => 23, LabelingTemplatePeer::LABEL_WIDTH_IN_CM => 24, LabelingTemplatePeer::POSITION => 25, LabelingTemplatePeer::GARMENT_TYPE => 26, LabelingTemplatePeer::COLOR => 27, LabelingTemplatePeer::COLOR_HEX => 28, LabelingTemplatePeer::PRINT_ORIENTATION => 29, LabelingTemplatePeer::REMARK => 30, LabelingTemplatePeer::L1_FONT_STYLE => 31, LabelingTemplatePeer::L2_FONT_STYLE => 32, LabelingTemplatePeer::L3_FONT_STYLE => 33, LabelingTemplatePeer::L4_FONT_STYLE => 34, LabelingTemplatePeer::L1_SEPARATOR => 35, LabelingTemplatePeer::L2_SEPARATOR => 36, LabelingTemplatePeer::L3_SEPARATOR => 37, LabelingTemplatePeer::L4_SEPARATOR => 38, LabelingTemplatePeer::CREATED_BY => 39, LabelingTemplatePeer::DATE_CREATED => 40, LabelingTemplatePeer::MODIFIED_BY => 41, LabelingTemplatePeer::DATE_MODIFIED => 42, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'label_description_id' => 1, 'label_field1_id' => 2, 'label_field2_id' => 3, 'label_field3_id' => 4, 'label_company_id' => 5, 'department' => 6, 'line1_col1' => 7, 'line2_col1' => 8, 'line3_col1' => 9, 'line4_col1' => 10, 'line1_col2' => 11, 'line2_col2' => 12, 'line3_col2' => 13, 'line4_col2' => 14, 'l1_font' => 15, 'l1_font_size' => 16, 'l2_font' => 17, 'l2_font_size' => 18, 'l3_font' => 19, 'l3_font_size' => 20, 'l4_font' => 21, 'l4_font_size' => 22, 'label_height_in_cm' => 23, 'label_width_in_cm' => 24, 'position' => 25, 'garment_type' => 26, 'color' => 27, 'color_hex' => 28, 'print_orientation' => 29, 'remark' => 30, 'l1_font_style' => 31, 'l2_font_style' => 32, 'l3_font_style' => 33, 'l4_font_style' => 34, 'l1_separator' => 35, 'l2_separator' => 36, 'l3_separator' => 37, 'l4_separator' => 38, 'created_by' => 39, 'date_created' => 40, 'modified_by' => 41, 'date_modified' => 42, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hgas3/map/LabelingTemplateMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hgas3.map.LabelingTemplateMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = LabelingTemplatePeer::getTableMap();
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
		return str_replace(LabelingTemplatePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(LabelingTemplatePeer::ID);

		$criteria->addSelectColumn(LabelingTemplatePeer::LABEL_DESCRIPTION_ID);

		$criteria->addSelectColumn(LabelingTemplatePeer::LABEL_FIELD1_ID);

		$criteria->addSelectColumn(LabelingTemplatePeer::LABEL_FIELD2_ID);

		$criteria->addSelectColumn(LabelingTemplatePeer::LABEL_FIELD3_ID);

		$criteria->addSelectColumn(LabelingTemplatePeer::LABEL_COMPANY_ID);

		$criteria->addSelectColumn(LabelingTemplatePeer::DEPARTMENT);

		$criteria->addSelectColumn(LabelingTemplatePeer::LINE1_COL1);

		$criteria->addSelectColumn(LabelingTemplatePeer::LINE2_COL1);

		$criteria->addSelectColumn(LabelingTemplatePeer::LINE3_COL1);

		$criteria->addSelectColumn(LabelingTemplatePeer::LINE4_COL1);

		$criteria->addSelectColumn(LabelingTemplatePeer::LINE1_COL2);

		$criteria->addSelectColumn(LabelingTemplatePeer::LINE2_COL2);

		$criteria->addSelectColumn(LabelingTemplatePeer::LINE3_COL2);

		$criteria->addSelectColumn(LabelingTemplatePeer::LINE4_COL2);

		$criteria->addSelectColumn(LabelingTemplatePeer::L1_FONT);

		$criteria->addSelectColumn(LabelingTemplatePeer::L1_FONT_SIZE);

		$criteria->addSelectColumn(LabelingTemplatePeer::L2_FONT);

		$criteria->addSelectColumn(LabelingTemplatePeer::L2_FONT_SIZE);

		$criteria->addSelectColumn(LabelingTemplatePeer::L3_FONT);

		$criteria->addSelectColumn(LabelingTemplatePeer::L3_FONT_SIZE);

		$criteria->addSelectColumn(LabelingTemplatePeer::L4_FONT);

		$criteria->addSelectColumn(LabelingTemplatePeer::L4_FONT_SIZE);

		$criteria->addSelectColumn(LabelingTemplatePeer::LABEL_HEIGHT_IN_CM);

		$criteria->addSelectColumn(LabelingTemplatePeer::LABEL_WIDTH_IN_CM);

		$criteria->addSelectColumn(LabelingTemplatePeer::POSITION);

		$criteria->addSelectColumn(LabelingTemplatePeer::GARMENT_TYPE);

		$criteria->addSelectColumn(LabelingTemplatePeer::COLOR);

		$criteria->addSelectColumn(LabelingTemplatePeer::COLOR_HEX);

		$criteria->addSelectColumn(LabelingTemplatePeer::PRINT_ORIENTATION);

		$criteria->addSelectColumn(LabelingTemplatePeer::REMARK);

		$criteria->addSelectColumn(LabelingTemplatePeer::L1_FONT_STYLE);

		$criteria->addSelectColumn(LabelingTemplatePeer::L2_FONT_STYLE);

		$criteria->addSelectColumn(LabelingTemplatePeer::L3_FONT_STYLE);

		$criteria->addSelectColumn(LabelingTemplatePeer::L4_FONT_STYLE);

		$criteria->addSelectColumn(LabelingTemplatePeer::L1_SEPARATOR);

		$criteria->addSelectColumn(LabelingTemplatePeer::L2_SEPARATOR);

		$criteria->addSelectColumn(LabelingTemplatePeer::L3_SEPARATOR);

		$criteria->addSelectColumn(LabelingTemplatePeer::L4_SEPARATOR);

		$criteria->addSelectColumn(LabelingTemplatePeer::CREATED_BY);

		$criteria->addSelectColumn(LabelingTemplatePeer::DATE_CREATED);

		$criteria->addSelectColumn(LabelingTemplatePeer::MODIFIED_BY);

		$criteria->addSelectColumn(LabelingTemplatePeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(labeling_template.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT labeling_template.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LabelingTemplatePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LabelingTemplatePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = LabelingTemplatePeer::doSelectRS($criteria, $con);
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
		$objects = LabelingTemplatePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return LabelingTemplatePeer::populateObjects(LabelingTemplatePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			LabelingTemplatePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = LabelingTemplatePeer::getOMClass();
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
		return LabelingTemplatePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(LabelingTemplatePeer::ID); 

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
			$comparison = $criteria->getComparison(LabelingTemplatePeer::ID);
			$selectCriteria->add(LabelingTemplatePeer::ID, $criteria->remove(LabelingTemplatePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(LabelingTemplatePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(LabelingTemplatePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof LabelingTemplate) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(LabelingTemplatePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(LabelingTemplate $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(LabelingTemplatePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(LabelingTemplatePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(LabelingTemplatePeer::DATABASE_NAME, LabelingTemplatePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = LabelingTemplatePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(LabelingTemplatePeer::DATABASE_NAME);

		$criteria->add(LabelingTemplatePeer::ID, $pk);


		$v = LabelingTemplatePeer::doSelect($criteria, $con);

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
			$criteria->add(LabelingTemplatePeer::ID, $pks, Criteria::IN);
			$objs = LabelingTemplatePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseLabelingTemplatePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hgas3/map/LabelingTemplateMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hgas3.map.LabelingTemplateMapBuilder');
}

<?php


abstract class BaseIcCalibrationPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'ic_calibration';

	
	const CLASS_DEFAULT = 'lib.model.particle.IcCalibration';

	
	const NUM_COLUMNS = 52;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'ic_calibration.ID';

	
	const TRANS_DATE = 'ic_calibration.TRANS_DATE';

	
	const STD0F = 'ic_calibration.STD0F';

	
	const STD0CL = 'ic_calibration.STD0CL';

	
	const STD0NO2 = 'ic_calibration.STD0NO2';

	
	const STD0NO3 = 'ic_calibration.STD0NO3';

	
	const STD0PO4 = 'ic_calibration.STD0PO4';

	
	const STD0SO4 = 'ic_calibration.STD0SO4';

	
	const STD0BR = 'ic_calibration.STD0BR';

	
	const STD0LI = 'ic_calibration.STD0LI';

	
	const STD0NA = 'ic_calibration.STD0NA';

	
	const STD0NH4 = 'ic_calibration.STD0NH4';

	
	const STD0K = 'ic_calibration.STD0K';

	
	const STD0MG = 'ic_calibration.STD0MG';

	
	const STD0CA = 'ic_calibration.STD0CA';

	
	const STD1F = 'ic_calibration.STD1F';

	
	const STD1CL = 'ic_calibration.STD1CL';

	
	const STD1NO2 = 'ic_calibration.STD1NO2';

	
	const STD1NO3 = 'ic_calibration.STD1NO3';

	
	const STD1PO4 = 'ic_calibration.STD1PO4';

	
	const STD1SO4 = 'ic_calibration.STD1SO4';

	
	const STD1BR = 'ic_calibration.STD1BR';

	
	const STD1LI = 'ic_calibration.STD1LI';

	
	const STD1NA = 'ic_calibration.STD1NA';

	
	const STD1NH4 = 'ic_calibration.STD1NH4';

	
	const STD1K = 'ic_calibration.STD1K';

	
	const STD1MG = 'ic_calibration.STD1MG';

	
	const STD1CA = 'ic_calibration.STD1CA';

	
	const STD2F = 'ic_calibration.STD2F';

	
	const STD2CL = 'ic_calibration.STD2CL';

	
	const STD2NO2 = 'ic_calibration.STD2NO2';

	
	const STD2NO3 = 'ic_calibration.STD2NO3';

	
	const STD2PO4 = 'ic_calibration.STD2PO4';

	
	const STD2SO4 = 'ic_calibration.STD2SO4';

	
	const STD2BR = 'ic_calibration.STD2BR';

	
	const STD2LI = 'ic_calibration.STD2LI';

	
	const STD2NA = 'ic_calibration.STD2NA';

	
	const STD2NH4 = 'ic_calibration.STD2NH4';

	
	const STD2K = 'ic_calibration.STD2K';

	
	const STD2MG = 'ic_calibration.STD2MG';

	
	const STD2CA = 'ic_calibration.STD2CA';

	
	const X7PEAK = 'ic_calibration.X7PEAK';

	
	const X6PEAK = 'ic_calibration.X6PEAK';

	
	const PPBSTD1 = 'ic_calibration.PPBSTD1';

	
	const PPBSTD2 = 'ic_calibration.PPBSTD2';

	
	const CHECKED_BY = 'ic_calibration.CHECKED_BY';

	
	const VERIFIED_BY = 'ic_calibration.VERIFIED_BY';

	
	const REMARK = 'ic_calibration.REMARK';

	
	const DATE_CREATED = 'ic_calibration.DATE_CREATED';

	
	const CREATED_BY = 'ic_calibration.CREATED_BY';

	
	const DATE_MODIFIED = 'ic_calibration.DATE_MODIFIED';

	
	const MODIFIED_BY = 'ic_calibration.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'Std0f', 'Std0cl', 'Std0no2', 'Std0no3', 'Std0po4', 'Std0so4', 'Std0br', 'Std0li', 'Std0na', 'Std0nh4', 'Std0k', 'Std0mg', 'Std0ca', 'Std1f', 'Std1cl', 'Std1no2', 'Std1no3', 'Std1po4', 'Std1so4', 'Std1br', 'Std1li', 'Std1na', 'Std1nh4', 'Std1k', 'Std1mg', 'Std1ca', 'Std2f', 'Std2cl', 'Std2no2', 'Std2no3', 'Std2po4', 'Std2so4', 'Std2br', 'Std2li', 'Std2na', 'Std2nh4', 'Std2k', 'Std2mg', 'Std2ca', 'X7peak', 'X6peak', 'Ppbstd1', 'Ppbstd2', 'CheckedBy', 'VerifiedBy', 'Remark', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (IcCalibrationPeer::ID, IcCalibrationPeer::TRANS_DATE, IcCalibrationPeer::STD0F, IcCalibrationPeer::STD0CL, IcCalibrationPeer::STD0NO2, IcCalibrationPeer::STD0NO3, IcCalibrationPeer::STD0PO4, IcCalibrationPeer::STD0SO4, IcCalibrationPeer::STD0BR, IcCalibrationPeer::STD0LI, IcCalibrationPeer::STD0NA, IcCalibrationPeer::STD0NH4, IcCalibrationPeer::STD0K, IcCalibrationPeer::STD0MG, IcCalibrationPeer::STD0CA, IcCalibrationPeer::STD1F, IcCalibrationPeer::STD1CL, IcCalibrationPeer::STD1NO2, IcCalibrationPeer::STD1NO3, IcCalibrationPeer::STD1PO4, IcCalibrationPeer::STD1SO4, IcCalibrationPeer::STD1BR, IcCalibrationPeer::STD1LI, IcCalibrationPeer::STD1NA, IcCalibrationPeer::STD1NH4, IcCalibrationPeer::STD1K, IcCalibrationPeer::STD1MG, IcCalibrationPeer::STD1CA, IcCalibrationPeer::STD2F, IcCalibrationPeer::STD2CL, IcCalibrationPeer::STD2NO2, IcCalibrationPeer::STD2NO3, IcCalibrationPeer::STD2PO4, IcCalibrationPeer::STD2SO4, IcCalibrationPeer::STD2BR, IcCalibrationPeer::STD2LI, IcCalibrationPeer::STD2NA, IcCalibrationPeer::STD2NH4, IcCalibrationPeer::STD2K, IcCalibrationPeer::STD2MG, IcCalibrationPeer::STD2CA, IcCalibrationPeer::X7PEAK, IcCalibrationPeer::X6PEAK, IcCalibrationPeer::PPBSTD1, IcCalibrationPeer::PPBSTD2, IcCalibrationPeer::CHECKED_BY, IcCalibrationPeer::VERIFIED_BY, IcCalibrationPeer::REMARK, IcCalibrationPeer::DATE_CREATED, IcCalibrationPeer::CREATED_BY, IcCalibrationPeer::DATE_MODIFIED, IcCalibrationPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'std0f', 'std0cl', 'std0no2', 'std0no3', 'std0po4', 'std0so4', 'std0br', 'std0li', 'std0na', 'std0nh4', 'std0k', 'std0mg', 'std0ca', 'std1f', 'std1cl', 'std1no2', 'std1no3', 'std1po4', 'std1so4', 'std1br', 'std1li', 'std1na', 'std1nh4', 'std1k', 'std1mg', 'std1ca', 'std2f', 'std2cl', 'std2no2', 'std2no3', 'std2po4', 'std2so4', 'std2br', 'std2li', 'std2na', 'std2nh4', 'std2k', 'std2mg', 'std2ca', 'x7peak', 'x6peak', 'ppbstd1', 'ppbstd2', 'checked_by', 'verified_by', 'remark', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'Std0f' => 2, 'Std0cl' => 3, 'Std0no2' => 4, 'Std0no3' => 5, 'Std0po4' => 6, 'Std0so4' => 7, 'Std0br' => 8, 'Std0li' => 9, 'Std0na' => 10, 'Std0nh4' => 11, 'Std0k' => 12, 'Std0mg' => 13, 'Std0ca' => 14, 'Std1f' => 15, 'Std1cl' => 16, 'Std1no2' => 17, 'Std1no3' => 18, 'Std1po4' => 19, 'Std1so4' => 20, 'Std1br' => 21, 'Std1li' => 22, 'Std1na' => 23, 'Std1nh4' => 24, 'Std1k' => 25, 'Std1mg' => 26, 'Std1ca' => 27, 'Std2f' => 28, 'Std2cl' => 29, 'Std2no2' => 30, 'Std2no3' => 31, 'Std2po4' => 32, 'Std2so4' => 33, 'Std2br' => 34, 'Std2li' => 35, 'Std2na' => 36, 'Std2nh4' => 37, 'Std2k' => 38, 'Std2mg' => 39, 'Std2ca' => 40, 'X7peak' => 41, 'X6peak' => 42, 'Ppbstd1' => 43, 'Ppbstd2' => 44, 'CheckedBy' => 45, 'VerifiedBy' => 46, 'Remark' => 47, 'DateCreated' => 48, 'CreatedBy' => 49, 'DateModified' => 50, 'ModifiedBy' => 51, ),
		BasePeer::TYPE_COLNAME => array (IcCalibrationPeer::ID => 0, IcCalibrationPeer::TRANS_DATE => 1, IcCalibrationPeer::STD0F => 2, IcCalibrationPeer::STD0CL => 3, IcCalibrationPeer::STD0NO2 => 4, IcCalibrationPeer::STD0NO3 => 5, IcCalibrationPeer::STD0PO4 => 6, IcCalibrationPeer::STD0SO4 => 7, IcCalibrationPeer::STD0BR => 8, IcCalibrationPeer::STD0LI => 9, IcCalibrationPeer::STD0NA => 10, IcCalibrationPeer::STD0NH4 => 11, IcCalibrationPeer::STD0K => 12, IcCalibrationPeer::STD0MG => 13, IcCalibrationPeer::STD0CA => 14, IcCalibrationPeer::STD1F => 15, IcCalibrationPeer::STD1CL => 16, IcCalibrationPeer::STD1NO2 => 17, IcCalibrationPeer::STD1NO3 => 18, IcCalibrationPeer::STD1PO4 => 19, IcCalibrationPeer::STD1SO4 => 20, IcCalibrationPeer::STD1BR => 21, IcCalibrationPeer::STD1LI => 22, IcCalibrationPeer::STD1NA => 23, IcCalibrationPeer::STD1NH4 => 24, IcCalibrationPeer::STD1K => 25, IcCalibrationPeer::STD1MG => 26, IcCalibrationPeer::STD1CA => 27, IcCalibrationPeer::STD2F => 28, IcCalibrationPeer::STD2CL => 29, IcCalibrationPeer::STD2NO2 => 30, IcCalibrationPeer::STD2NO3 => 31, IcCalibrationPeer::STD2PO4 => 32, IcCalibrationPeer::STD2SO4 => 33, IcCalibrationPeer::STD2BR => 34, IcCalibrationPeer::STD2LI => 35, IcCalibrationPeer::STD2NA => 36, IcCalibrationPeer::STD2NH4 => 37, IcCalibrationPeer::STD2K => 38, IcCalibrationPeer::STD2MG => 39, IcCalibrationPeer::STD2CA => 40, IcCalibrationPeer::X7PEAK => 41, IcCalibrationPeer::X6PEAK => 42, IcCalibrationPeer::PPBSTD1 => 43, IcCalibrationPeer::PPBSTD2 => 44, IcCalibrationPeer::CHECKED_BY => 45, IcCalibrationPeer::VERIFIED_BY => 46, IcCalibrationPeer::REMARK => 47, IcCalibrationPeer::DATE_CREATED => 48, IcCalibrationPeer::CREATED_BY => 49, IcCalibrationPeer::DATE_MODIFIED => 50, IcCalibrationPeer::MODIFIED_BY => 51, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'std0f' => 2, 'std0cl' => 3, 'std0no2' => 4, 'std0no3' => 5, 'std0po4' => 6, 'std0so4' => 7, 'std0br' => 8, 'std0li' => 9, 'std0na' => 10, 'std0nh4' => 11, 'std0k' => 12, 'std0mg' => 13, 'std0ca' => 14, 'std1f' => 15, 'std1cl' => 16, 'std1no2' => 17, 'std1no3' => 18, 'std1po4' => 19, 'std1so4' => 20, 'std1br' => 21, 'std1li' => 22, 'std1na' => 23, 'std1nh4' => 24, 'std1k' => 25, 'std1mg' => 26, 'std1ca' => 27, 'std2f' => 28, 'std2cl' => 29, 'std2no2' => 30, 'std2no3' => 31, 'std2po4' => 32, 'std2so4' => 33, 'std2br' => 34, 'std2li' => 35, 'std2na' => 36, 'std2nh4' => 37, 'std2k' => 38, 'std2mg' => 39, 'std2ca' => 40, 'x7peak' => 41, 'x6peak' => 42, 'ppbstd1' => 43, 'ppbstd2' => 44, 'checked_by' => 45, 'verified_by' => 46, 'remark' => 47, 'date_created' => 48, 'created_by' => 49, 'date_modified' => 50, 'modified_by' => 51, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/IcCalibrationMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.IcCalibrationMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = IcCalibrationPeer::getTableMap();
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
		return str_replace(IcCalibrationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(IcCalibrationPeer::ID);

		$criteria->addSelectColumn(IcCalibrationPeer::TRANS_DATE);

		$criteria->addSelectColumn(IcCalibrationPeer::STD0F);

		$criteria->addSelectColumn(IcCalibrationPeer::STD0CL);

		$criteria->addSelectColumn(IcCalibrationPeer::STD0NO2);

		$criteria->addSelectColumn(IcCalibrationPeer::STD0NO3);

		$criteria->addSelectColumn(IcCalibrationPeer::STD0PO4);

		$criteria->addSelectColumn(IcCalibrationPeer::STD0SO4);

		$criteria->addSelectColumn(IcCalibrationPeer::STD0BR);

		$criteria->addSelectColumn(IcCalibrationPeer::STD0LI);

		$criteria->addSelectColumn(IcCalibrationPeer::STD0NA);

		$criteria->addSelectColumn(IcCalibrationPeer::STD0NH4);

		$criteria->addSelectColumn(IcCalibrationPeer::STD0K);

		$criteria->addSelectColumn(IcCalibrationPeer::STD0MG);

		$criteria->addSelectColumn(IcCalibrationPeer::STD0CA);

		$criteria->addSelectColumn(IcCalibrationPeer::STD1F);

		$criteria->addSelectColumn(IcCalibrationPeer::STD1CL);

		$criteria->addSelectColumn(IcCalibrationPeer::STD1NO2);

		$criteria->addSelectColumn(IcCalibrationPeer::STD1NO3);

		$criteria->addSelectColumn(IcCalibrationPeer::STD1PO4);

		$criteria->addSelectColumn(IcCalibrationPeer::STD1SO4);

		$criteria->addSelectColumn(IcCalibrationPeer::STD1BR);

		$criteria->addSelectColumn(IcCalibrationPeer::STD1LI);

		$criteria->addSelectColumn(IcCalibrationPeer::STD1NA);

		$criteria->addSelectColumn(IcCalibrationPeer::STD1NH4);

		$criteria->addSelectColumn(IcCalibrationPeer::STD1K);

		$criteria->addSelectColumn(IcCalibrationPeer::STD1MG);

		$criteria->addSelectColumn(IcCalibrationPeer::STD1CA);

		$criteria->addSelectColumn(IcCalibrationPeer::STD2F);

		$criteria->addSelectColumn(IcCalibrationPeer::STD2CL);

		$criteria->addSelectColumn(IcCalibrationPeer::STD2NO2);

		$criteria->addSelectColumn(IcCalibrationPeer::STD2NO3);

		$criteria->addSelectColumn(IcCalibrationPeer::STD2PO4);

		$criteria->addSelectColumn(IcCalibrationPeer::STD2SO4);

		$criteria->addSelectColumn(IcCalibrationPeer::STD2BR);

		$criteria->addSelectColumn(IcCalibrationPeer::STD2LI);

		$criteria->addSelectColumn(IcCalibrationPeer::STD2NA);

		$criteria->addSelectColumn(IcCalibrationPeer::STD2NH4);

		$criteria->addSelectColumn(IcCalibrationPeer::STD2K);

		$criteria->addSelectColumn(IcCalibrationPeer::STD2MG);

		$criteria->addSelectColumn(IcCalibrationPeer::STD2CA);

		$criteria->addSelectColumn(IcCalibrationPeer::X7PEAK);

		$criteria->addSelectColumn(IcCalibrationPeer::X6PEAK);

		$criteria->addSelectColumn(IcCalibrationPeer::PPBSTD1);

		$criteria->addSelectColumn(IcCalibrationPeer::PPBSTD2);

		$criteria->addSelectColumn(IcCalibrationPeer::CHECKED_BY);

		$criteria->addSelectColumn(IcCalibrationPeer::VERIFIED_BY);

		$criteria->addSelectColumn(IcCalibrationPeer::REMARK);

		$criteria->addSelectColumn(IcCalibrationPeer::DATE_CREATED);

		$criteria->addSelectColumn(IcCalibrationPeer::CREATED_BY);

		$criteria->addSelectColumn(IcCalibrationPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(IcCalibrationPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(ic_calibration.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT ic_calibration.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IcCalibrationPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IcCalibrationPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = IcCalibrationPeer::doSelectRS($criteria, $con);
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
		$objects = IcCalibrationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return IcCalibrationPeer::populateObjects(IcCalibrationPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			IcCalibrationPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = IcCalibrationPeer::getOMClass();
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
		return IcCalibrationPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(IcCalibrationPeer::ID); 

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
			$comparison = $criteria->getComparison(IcCalibrationPeer::ID);
			$selectCriteria->add(IcCalibrationPeer::ID, $criteria->remove(IcCalibrationPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(IcCalibrationPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(IcCalibrationPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof IcCalibration) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(IcCalibrationPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(IcCalibration $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(IcCalibrationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(IcCalibrationPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(IcCalibrationPeer::DATABASE_NAME, IcCalibrationPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = IcCalibrationPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(IcCalibrationPeer::DATABASE_NAME);

		$criteria->add(IcCalibrationPeer::ID, $pk);


		$v = IcCalibrationPeer::doSelect($criteria, $con);

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
			$criteria->add(IcCalibrationPeer::ID, $pks, Criteria::IN);
			$objs = IcCalibrationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseIcCalibrationPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/IcCalibrationMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.IcCalibrationMapBuilder');
}

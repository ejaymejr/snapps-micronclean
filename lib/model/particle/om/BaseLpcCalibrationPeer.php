<?php


abstract class BaseLpcCalibrationPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'lpc_calibration';

	
	const CLASS_DEFAULT = 'lib.model.particle.LpcCalibration';

	
	const NUM_COLUMNS = 51;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'lpc_calibration.ID';

	
	const COMPANY = 'lpc_calibration.COMPANY';

	
	const TRANS_DATE = 'lpc_calibration.TRANS_DATE';

	
	const DUE_DATE = 'lpc_calibration.DUE_DATE';

	
	const CALIBRATED_BY = 'lpc_calibration.CALIBRATED_BY';

	
	const VERIFIED_BY = 'lpc_calibration.VERIFIED_BY';

	
	const POINT_2_MANUFACTURER = 'lpc_calibration.POINT_2_MANUFACTURER';

	
	const POINT_2_STD_DEVIATION = 'lpc_calibration.POINT_2_STD_DEVIATION';

	
	const POINT_2_LOT_NO = 'lpc_calibration.POINT_2_LOT_NO';

	
	const POINT_2_EXPIRY_DATE = 'lpc_calibration.POINT_2_EXPIRY_DATE';

	
	const POINT_5_MANUFACTURER = 'lpc_calibration.POINT_5_MANUFACTURER';

	
	const POINT_5_STD_DEVIATION = 'lpc_calibration.POINT_5_STD_DEVIATION';

	
	const POINT_5_LOT_NO = 'lpc_calibration.POINT_5_LOT_NO';

	
	const POINT_5_EXPIRY_DATE = 'lpc_calibration.POINT_5_EXPIRY_DATE';

	
	const EMM_SERIAL_NO = 'lpc_calibration.EMM_SERIAL_NO';

	
	const EMM_CAL_DATE = 'lpc_calibration.EMM_CAL_DATE';

	
	const EMM_CAL_DUE_DATE = 'lpc_calibration.EMM_CAL_DUE_DATE';

	
	const TP_1_BEFORE = 'lpc_calibration.TP_1_BEFORE';

	
	const TP_1_AFTER = 'lpc_calibration.TP_1_AFTER';

	
	const TP_2_BEFORE = 'lpc_calibration.TP_2_BEFORE';

	
	const TP_2_AFTER = 'lpc_calibration.TP_2_AFTER';

	
	const TP_3_BEFORE = 'lpc_calibration.TP_3_BEFORE';

	
	const TP_3_AFTER = 'lpc_calibration.TP_3_AFTER';

	
	const TP_4_BEFORE = 'lpc_calibration.TP_4_BEFORE';

	
	const TP_4_AFTER = 'lpc_calibration.TP_4_AFTER';

	
	const TP_5_BEFORE = 'lpc_calibration.TP_5_BEFORE';

	
	const TP_5_AFTER = 'lpc_calibration.TP_5_AFTER';

	
	const TP_6_BEFORE = 'lpc_calibration.TP_6_BEFORE';

	
	const TP_6_AFTER = 'lpc_calibration.TP_6_AFTER';

	
	const TP_7_BEFORE = 'lpc_calibration.TP_7_BEFORE';

	
	const TP_7_AFTER = 'lpc_calibration.TP_7_AFTER';

	
	const TP_8_BEFORE = 'lpc_calibration.TP_8_BEFORE';

	
	const TP_8_AFTER = 'lpc_calibration.TP_8_AFTER';

	
	const TP_9_BEFORE = 'lpc_calibration.TP_9_BEFORE';

	
	const TP_9_AFTER = 'lpc_calibration.TP_9_AFTER';

	
	const TP_10_BEFORE = 'lpc_calibration.TP_10_BEFORE';

	
	const TP_10_AFTER = 'lpc_calibration.TP_10_AFTER';

	
	const TP_11_BEFORE = 'lpc_calibration.TP_11_BEFORE';

	
	const TP_11_AFTER = 'lpc_calibration.TP_11_AFTER';

	
	const TP_12_BEFORE = 'lpc_calibration.TP_12_BEFORE';

	
	const TP_12_AFTER = 'lpc_calibration.TP_12_AFTER';

	
	const TEMPERATURE = 'lpc_calibration.TEMPERATURE';

	
	const HUMIDITY = 'lpc_calibration.HUMIDITY';

	
	const ZERO_COUNT = 'lpc_calibration.ZERO_COUNT';

	
	const IN_HOUSE_REF = 'lpc_calibration.IN_HOUSE_REF';

	
	const UNIT_UNDER_TEST = 'lpc_calibration.UNIT_UNDER_TEST';

	
	const TOLERANCE = 'lpc_calibration.TOLERANCE';

	
	const CREATED_BY = 'lpc_calibration.CREATED_BY';

	
	const DATE_CREATED = 'lpc_calibration.DATE_CREATED';

	
	const MODIFIED_BY = 'lpc_calibration.MODIFIED_BY';

	
	const DATE_MODIFIED = 'lpc_calibration.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Company', 'TransDate', 'DueDate', 'CalibratedBy', 'VerifiedBy', 'Point2Manufacturer', 'Point2StdDeviation', 'Point2LotNo', 'Point2ExpiryDate', 'Point5Manufacturer', 'Point5StdDeviation', 'Point5LotNo', 'Point5ExpiryDate', 'EmmSerialNo', 'EmmCalDate', 'EmmCalDueDate', 'Tp1Before', 'Tp1After', 'Tp2Before', 'Tp2After', 'Tp3Before', 'Tp3After', 'Tp4Before', 'Tp4After', 'Tp5Before', 'Tp5After', 'Tp6Before', 'Tp6After', 'Tp7Before', 'Tp7After', 'Tp8Before', 'Tp8After', 'Tp9Before', 'Tp9After', 'Tp10Before', 'Tp10After', 'Tp11Before', 'Tp11After', 'Tp12Before', 'Tp12After', 'Temperature', 'Humidity', 'ZeroCount', 'InHouseRef', 'UnitUnderTest', 'Tolerance', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (LpcCalibrationPeer::ID, LpcCalibrationPeer::COMPANY, LpcCalibrationPeer::TRANS_DATE, LpcCalibrationPeer::DUE_DATE, LpcCalibrationPeer::CALIBRATED_BY, LpcCalibrationPeer::VERIFIED_BY, LpcCalibrationPeer::POINT_2_MANUFACTURER, LpcCalibrationPeer::POINT_2_STD_DEVIATION, LpcCalibrationPeer::POINT_2_LOT_NO, LpcCalibrationPeer::POINT_2_EXPIRY_DATE, LpcCalibrationPeer::POINT_5_MANUFACTURER, LpcCalibrationPeer::POINT_5_STD_DEVIATION, LpcCalibrationPeer::POINT_5_LOT_NO, LpcCalibrationPeer::POINT_5_EXPIRY_DATE, LpcCalibrationPeer::EMM_SERIAL_NO, LpcCalibrationPeer::EMM_CAL_DATE, LpcCalibrationPeer::EMM_CAL_DUE_DATE, LpcCalibrationPeer::TP_1_BEFORE, LpcCalibrationPeer::TP_1_AFTER, LpcCalibrationPeer::TP_2_BEFORE, LpcCalibrationPeer::TP_2_AFTER, LpcCalibrationPeer::TP_3_BEFORE, LpcCalibrationPeer::TP_3_AFTER, LpcCalibrationPeer::TP_4_BEFORE, LpcCalibrationPeer::TP_4_AFTER, LpcCalibrationPeer::TP_5_BEFORE, LpcCalibrationPeer::TP_5_AFTER, LpcCalibrationPeer::TP_6_BEFORE, LpcCalibrationPeer::TP_6_AFTER, LpcCalibrationPeer::TP_7_BEFORE, LpcCalibrationPeer::TP_7_AFTER, LpcCalibrationPeer::TP_8_BEFORE, LpcCalibrationPeer::TP_8_AFTER, LpcCalibrationPeer::TP_9_BEFORE, LpcCalibrationPeer::TP_9_AFTER, LpcCalibrationPeer::TP_10_BEFORE, LpcCalibrationPeer::TP_10_AFTER, LpcCalibrationPeer::TP_11_BEFORE, LpcCalibrationPeer::TP_11_AFTER, LpcCalibrationPeer::TP_12_BEFORE, LpcCalibrationPeer::TP_12_AFTER, LpcCalibrationPeer::TEMPERATURE, LpcCalibrationPeer::HUMIDITY, LpcCalibrationPeer::ZERO_COUNT, LpcCalibrationPeer::IN_HOUSE_REF, LpcCalibrationPeer::UNIT_UNDER_TEST, LpcCalibrationPeer::TOLERANCE, LpcCalibrationPeer::CREATED_BY, LpcCalibrationPeer::DATE_CREATED, LpcCalibrationPeer::MODIFIED_BY, LpcCalibrationPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'company', 'trans_date', 'due_date', 'calibrated_by', 'verified_by', 'point_2_manufacturer', 'point_2_std_deviation', 'point_2_lot_no', 'point_2_expiry_date', 'point_5_manufacturer', 'point_5_std_deviation', 'point_5_lot_no', 'point_5_expiry_date', 'emm_serial_no', 'emm_cal_date', 'emm_cal_due_date', 'tp_1_before', 'tp_1_after', 'tp_2_before', 'tp_2_after', 'tp_3_before', 'tp_3_after', 'tp_4_before', 'tp_4_after', 'tp_5_before', 'tp_5_after', 'tp_6_before', 'tp_6_after', 'tp_7_before', 'tp_7_after', 'tp_8_before', 'tp_8_after', 'tp_9_before', 'tp_9_after', 'tp_10_before', 'tp_10_after', 'tp_11_before', 'tp_11_after', 'tp_12_before', 'tp_12_after', 'temperature', 'humidity', 'zero_count', 'in_house_ref', 'unit_under_test', 'tolerance', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Company' => 1, 'TransDate' => 2, 'DueDate' => 3, 'CalibratedBy' => 4, 'VerifiedBy' => 5, 'Point2Manufacturer' => 6, 'Point2StdDeviation' => 7, 'Point2LotNo' => 8, 'Point2ExpiryDate' => 9, 'Point5Manufacturer' => 10, 'Point5StdDeviation' => 11, 'Point5LotNo' => 12, 'Point5ExpiryDate' => 13, 'EmmSerialNo' => 14, 'EmmCalDate' => 15, 'EmmCalDueDate' => 16, 'Tp1Before' => 17, 'Tp1After' => 18, 'Tp2Before' => 19, 'Tp2After' => 20, 'Tp3Before' => 21, 'Tp3After' => 22, 'Tp4Before' => 23, 'Tp4After' => 24, 'Tp5Before' => 25, 'Tp5After' => 26, 'Tp6Before' => 27, 'Tp6After' => 28, 'Tp7Before' => 29, 'Tp7After' => 30, 'Tp8Before' => 31, 'Tp8After' => 32, 'Tp9Before' => 33, 'Tp9After' => 34, 'Tp10Before' => 35, 'Tp10After' => 36, 'Tp11Before' => 37, 'Tp11After' => 38, 'Tp12Before' => 39, 'Tp12After' => 40, 'Temperature' => 41, 'Humidity' => 42, 'ZeroCount' => 43, 'InHouseRef' => 44, 'UnitUnderTest' => 45, 'Tolerance' => 46, 'CreatedBy' => 47, 'DateCreated' => 48, 'ModifiedBy' => 49, 'DateModified' => 50, ),
		BasePeer::TYPE_COLNAME => array (LpcCalibrationPeer::ID => 0, LpcCalibrationPeer::COMPANY => 1, LpcCalibrationPeer::TRANS_DATE => 2, LpcCalibrationPeer::DUE_DATE => 3, LpcCalibrationPeer::CALIBRATED_BY => 4, LpcCalibrationPeer::VERIFIED_BY => 5, LpcCalibrationPeer::POINT_2_MANUFACTURER => 6, LpcCalibrationPeer::POINT_2_STD_DEVIATION => 7, LpcCalibrationPeer::POINT_2_LOT_NO => 8, LpcCalibrationPeer::POINT_2_EXPIRY_DATE => 9, LpcCalibrationPeer::POINT_5_MANUFACTURER => 10, LpcCalibrationPeer::POINT_5_STD_DEVIATION => 11, LpcCalibrationPeer::POINT_5_LOT_NO => 12, LpcCalibrationPeer::POINT_5_EXPIRY_DATE => 13, LpcCalibrationPeer::EMM_SERIAL_NO => 14, LpcCalibrationPeer::EMM_CAL_DATE => 15, LpcCalibrationPeer::EMM_CAL_DUE_DATE => 16, LpcCalibrationPeer::TP_1_BEFORE => 17, LpcCalibrationPeer::TP_1_AFTER => 18, LpcCalibrationPeer::TP_2_BEFORE => 19, LpcCalibrationPeer::TP_2_AFTER => 20, LpcCalibrationPeer::TP_3_BEFORE => 21, LpcCalibrationPeer::TP_3_AFTER => 22, LpcCalibrationPeer::TP_4_BEFORE => 23, LpcCalibrationPeer::TP_4_AFTER => 24, LpcCalibrationPeer::TP_5_BEFORE => 25, LpcCalibrationPeer::TP_5_AFTER => 26, LpcCalibrationPeer::TP_6_BEFORE => 27, LpcCalibrationPeer::TP_6_AFTER => 28, LpcCalibrationPeer::TP_7_BEFORE => 29, LpcCalibrationPeer::TP_7_AFTER => 30, LpcCalibrationPeer::TP_8_BEFORE => 31, LpcCalibrationPeer::TP_8_AFTER => 32, LpcCalibrationPeer::TP_9_BEFORE => 33, LpcCalibrationPeer::TP_9_AFTER => 34, LpcCalibrationPeer::TP_10_BEFORE => 35, LpcCalibrationPeer::TP_10_AFTER => 36, LpcCalibrationPeer::TP_11_BEFORE => 37, LpcCalibrationPeer::TP_11_AFTER => 38, LpcCalibrationPeer::TP_12_BEFORE => 39, LpcCalibrationPeer::TP_12_AFTER => 40, LpcCalibrationPeer::TEMPERATURE => 41, LpcCalibrationPeer::HUMIDITY => 42, LpcCalibrationPeer::ZERO_COUNT => 43, LpcCalibrationPeer::IN_HOUSE_REF => 44, LpcCalibrationPeer::UNIT_UNDER_TEST => 45, LpcCalibrationPeer::TOLERANCE => 46, LpcCalibrationPeer::CREATED_BY => 47, LpcCalibrationPeer::DATE_CREATED => 48, LpcCalibrationPeer::MODIFIED_BY => 49, LpcCalibrationPeer::DATE_MODIFIED => 50, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'company' => 1, 'trans_date' => 2, 'due_date' => 3, 'calibrated_by' => 4, 'verified_by' => 5, 'point_2_manufacturer' => 6, 'point_2_std_deviation' => 7, 'point_2_lot_no' => 8, 'point_2_expiry_date' => 9, 'point_5_manufacturer' => 10, 'point_5_std_deviation' => 11, 'point_5_lot_no' => 12, 'point_5_expiry_date' => 13, 'emm_serial_no' => 14, 'emm_cal_date' => 15, 'emm_cal_due_date' => 16, 'tp_1_before' => 17, 'tp_1_after' => 18, 'tp_2_before' => 19, 'tp_2_after' => 20, 'tp_3_before' => 21, 'tp_3_after' => 22, 'tp_4_before' => 23, 'tp_4_after' => 24, 'tp_5_before' => 25, 'tp_5_after' => 26, 'tp_6_before' => 27, 'tp_6_after' => 28, 'tp_7_before' => 29, 'tp_7_after' => 30, 'tp_8_before' => 31, 'tp_8_after' => 32, 'tp_9_before' => 33, 'tp_9_after' => 34, 'tp_10_before' => 35, 'tp_10_after' => 36, 'tp_11_before' => 37, 'tp_11_after' => 38, 'tp_12_before' => 39, 'tp_12_after' => 40, 'temperature' => 41, 'humidity' => 42, 'zero_count' => 43, 'in_house_ref' => 44, 'unit_under_test' => 45, 'tolerance' => 46, 'created_by' => 47, 'date_created' => 48, 'modified_by' => 49, 'date_modified' => 50, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/LpcCalibrationMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.LpcCalibrationMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = LpcCalibrationPeer::getTableMap();
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
		return str_replace(LpcCalibrationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(LpcCalibrationPeer::ID);

		$criteria->addSelectColumn(LpcCalibrationPeer::COMPANY);

		$criteria->addSelectColumn(LpcCalibrationPeer::TRANS_DATE);

		$criteria->addSelectColumn(LpcCalibrationPeer::DUE_DATE);

		$criteria->addSelectColumn(LpcCalibrationPeer::CALIBRATED_BY);

		$criteria->addSelectColumn(LpcCalibrationPeer::VERIFIED_BY);

		$criteria->addSelectColumn(LpcCalibrationPeer::POINT_2_MANUFACTURER);

		$criteria->addSelectColumn(LpcCalibrationPeer::POINT_2_STD_DEVIATION);

		$criteria->addSelectColumn(LpcCalibrationPeer::POINT_2_LOT_NO);

		$criteria->addSelectColumn(LpcCalibrationPeer::POINT_2_EXPIRY_DATE);

		$criteria->addSelectColumn(LpcCalibrationPeer::POINT_5_MANUFACTURER);

		$criteria->addSelectColumn(LpcCalibrationPeer::POINT_5_STD_DEVIATION);

		$criteria->addSelectColumn(LpcCalibrationPeer::POINT_5_LOT_NO);

		$criteria->addSelectColumn(LpcCalibrationPeer::POINT_5_EXPIRY_DATE);

		$criteria->addSelectColumn(LpcCalibrationPeer::EMM_SERIAL_NO);

		$criteria->addSelectColumn(LpcCalibrationPeer::EMM_CAL_DATE);

		$criteria->addSelectColumn(LpcCalibrationPeer::EMM_CAL_DUE_DATE);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_1_BEFORE);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_1_AFTER);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_2_BEFORE);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_2_AFTER);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_3_BEFORE);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_3_AFTER);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_4_BEFORE);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_4_AFTER);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_5_BEFORE);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_5_AFTER);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_6_BEFORE);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_6_AFTER);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_7_BEFORE);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_7_AFTER);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_8_BEFORE);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_8_AFTER);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_9_BEFORE);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_9_AFTER);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_10_BEFORE);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_10_AFTER);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_11_BEFORE);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_11_AFTER);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_12_BEFORE);

		$criteria->addSelectColumn(LpcCalibrationPeer::TP_12_AFTER);

		$criteria->addSelectColumn(LpcCalibrationPeer::TEMPERATURE);

		$criteria->addSelectColumn(LpcCalibrationPeer::HUMIDITY);

		$criteria->addSelectColumn(LpcCalibrationPeer::ZERO_COUNT);

		$criteria->addSelectColumn(LpcCalibrationPeer::IN_HOUSE_REF);

		$criteria->addSelectColumn(LpcCalibrationPeer::UNIT_UNDER_TEST);

		$criteria->addSelectColumn(LpcCalibrationPeer::TOLERANCE);

		$criteria->addSelectColumn(LpcCalibrationPeer::CREATED_BY);

		$criteria->addSelectColumn(LpcCalibrationPeer::DATE_CREATED);

		$criteria->addSelectColumn(LpcCalibrationPeer::MODIFIED_BY);

		$criteria->addSelectColumn(LpcCalibrationPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(lpc_calibration.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT lpc_calibration.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LpcCalibrationPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LpcCalibrationPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = LpcCalibrationPeer::doSelectRS($criteria, $con);
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
		$objects = LpcCalibrationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return LpcCalibrationPeer::populateObjects(LpcCalibrationPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			LpcCalibrationPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = LpcCalibrationPeer::getOMClass();
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
		return LpcCalibrationPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}


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
			$comparison = $criteria->getComparison(LpcCalibrationPeer::ID);
			$selectCriteria->add(LpcCalibrationPeer::ID, $criteria->remove(LpcCalibrationPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(LpcCalibrationPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(LpcCalibrationPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof LpcCalibration) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(LpcCalibrationPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(LpcCalibration $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(LpcCalibrationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(LpcCalibrationPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(LpcCalibrationPeer::DATABASE_NAME, LpcCalibrationPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = LpcCalibrationPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(LpcCalibrationPeer::DATABASE_NAME);

		$criteria->add(LpcCalibrationPeer::ID, $pk);


		$v = LpcCalibrationPeer::doSelect($criteria, $con);

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
			$criteria->add(LpcCalibrationPeer::ID, $pks, Criteria::IN);
			$objs = LpcCalibrationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseLpcCalibrationPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/LpcCalibrationMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.LpcCalibrationMapBuilder');
}

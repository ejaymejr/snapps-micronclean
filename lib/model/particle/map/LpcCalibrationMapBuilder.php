<?php



class LpcCalibrationMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.LpcCalibrationMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('particle');

		$tMap = $this->dbMap->addTable('lpc_calibration');
		$tMap->setPhpName('LpcCalibration');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DUE_DATE', 'DueDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('CALIBRATED_BY', 'CalibratedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('VERIFIED_BY', 'VerifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('POINT_2_MANUFACTURER', 'Point2Manufacturer', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('POINT_2_STD_DEVIATION', 'Point2StdDeviation', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('POINT_2_LOT_NO', 'Point2LotNo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('POINT_2_EXPIRY_DATE', 'Point2ExpiryDate', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('POINT_5_MANUFACTURER', 'Point5Manufacturer', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('POINT_5_STD_DEVIATION', 'Point5StdDeviation', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('POINT_5_LOT_NO', 'Point5LotNo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('POINT_5_EXPIRY_DATE', 'Point5ExpiryDate', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('EMM_SERIAL_NO', 'EmmSerialNo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('EMM_CAL_DATE', 'EmmCalDate', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('EMM_CAL_DUE_DATE', 'EmmCalDueDate', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_1_BEFORE', 'Tp1Before', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_1_AFTER', 'Tp1After', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_2_BEFORE', 'Tp2Before', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_2_AFTER', 'Tp2After', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_3_BEFORE', 'Tp3Before', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_3_AFTER', 'Tp3After', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_4_BEFORE', 'Tp4Before', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_4_AFTER', 'Tp4After', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_5_BEFORE', 'Tp5Before', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_5_AFTER', 'Tp5After', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_6_BEFORE', 'Tp6Before', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_6_AFTER', 'Tp6After', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_7_BEFORE', 'Tp7Before', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_7_AFTER', 'Tp7After', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_8_BEFORE', 'Tp8Before', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_8_AFTER', 'Tp8After', 'string', CreoleTypes::VARCHAR, false, 11);

		$tMap->addColumn('TP_9_BEFORE', 'Tp9Before', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_9_AFTER', 'Tp9After', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_10_BEFORE', 'Tp10Before', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_10_AFTER', 'Tp10After', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_11_BEFORE', 'Tp11Before', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_11_AFTER', 'Tp11After', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_12_BEFORE', 'Tp12Before', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TP_12_AFTER', 'Tp12After', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TEMPERATURE', 'Temperature', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('HUMIDITY', 'Humidity', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('ZERO_COUNT', 'ZeroCount', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('IN_HOUSE_REF', 'InHouseRef', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('UNIT_UNDER_TEST', 'UnitUnderTest', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TOLERANCE', 'Tolerance', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
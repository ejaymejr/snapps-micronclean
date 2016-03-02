<?php



class Pms1232abWeeklyMapBuilder {

	
	const CLASS_NAME = 'lib.model.inspection.map.Pms1232abWeeklyMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('inspection');

		$tMap = $this->dbMap->addTable('pms_1232ab_weekly');
		$tMap->setPhpName('Pms1232abWeekly');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('MACHINE_NO', 'MachineNo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('SENSOR_DIAGNOSTIC', 'SensorDiagnostic', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CHAMBER_TEMP', 'ChamberTemp', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('ACTUATOR_DIAGNOSTIC', 'ActuatorDiagnostic', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('BASKET_INSPECT', 'BasketInspect', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CHAMBER_CLEAN', 'ChamberClean', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('NOZZLE_INSPECT', 'NozzleInspect', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('PLUMBING_INSPECT', 'PlumbingInspect', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DRIVE_ROLLER', 'DriveRoller', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DRIVE_BELT', 'DriveBelt', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CHAIN_TENTION', 'ChainTention', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('INITIAL', 'Initial', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
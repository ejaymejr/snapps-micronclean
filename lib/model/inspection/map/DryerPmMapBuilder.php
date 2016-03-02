<?php



class DryerPmMapBuilder {

	
	const CLASS_NAME = 'lib.model.inspection.map.DryerPmMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('dryer_pm');
		$tMap->setPhpName('DryerPm');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('MACHINE_TYPE', 'MachineType', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('CLEAN_MACHINE', 'CleanMachine', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('CAGE_SHAFT', 'CageShaft', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('FAN_BEARING', 'FanBearing', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('FAN_SHAFT', 'FanShaft', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('FAN_MOTOR', 'FanMotor', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('CAGE_MOTOR', 'CageMotor', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('TEMP_CONTROL', 'TempControl', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('TEMP_VERIFY', 'TempVerify', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('PERFORMED_BY', 'PerformedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('VERIFIED_BY', 'VerifiedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('VERIFY_DATE', 'VerifyDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
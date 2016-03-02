<?php



class WasherPmMapBuilder {

	
	const CLASS_NAME = 'lib.model.inspection.map.WasherPmMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('washer_pm');
		$tMap->setPhpName('WasherPm');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('MACHINE_TYPE', 'MachineType', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('CLEAN_MACHINE', 'CleanMachine', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('PURGED_WATER', 'PurgedWater', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('CLEAN_DOOR', 'CleanDoor', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('CHECK_BELT', 'CheckBelt', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('CHECK_HOSE', 'CheckHose', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('LUBRICATE_BEARINGS', 'LubricateBearings', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('CHECK_SENSORY', 'CheckSensory', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('TEMP_CONTROL', 'TempControl', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('TEMP_VERIFY', 'TempVerify', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('PERFORMED_BY', 'PerformedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('VERIFIED_BY', 'VerifiedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('VERIFY_DATE', 'VerifyDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CHECK_BRAKE', 'CheckBrake', 'string', CreoleTypes::CHAR, true, 3);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
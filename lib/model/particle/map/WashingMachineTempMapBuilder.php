<?php



class WashingMachineTempMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.WashingMachineTempMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('washing_machine_temp');
		$tMap->setPhpName('WashingMachineTemp');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('MACHINE_NO', 'MachineNo', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('TEMP_THERMOMETER', 'TempThermometer', 'double', CreoleTypes::FLOAT, false, 10);

		$tMap->addColumn('TEMP_DISPLAY', 'TempDisplay', 'double', CreoleTypes::FLOAT, false, 10);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('VERIFIED_BY', 'VerifiedBy', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, true, null);

	} 
} 
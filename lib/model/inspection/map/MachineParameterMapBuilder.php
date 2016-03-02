<?php



class MachineParameterMapBuilder {

	
	const CLASS_NAME = 'lib.model.inspection.map.MachineParameterMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('machine_parameter');
		$tMap->setPhpName('MachineParameter');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('TRANS_TIME', 'TransTime', 'int', CreoleTypes::TIME, false, null);

		$tMap->addColumn('MACHINE_NO', 'MachineNo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DI_WATER', 'DiWater', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CDA1', 'Cda1', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CDA2', 'Cda2', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CDA_DIFF', 'CdaDiff', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('SUMPTANK', 'Sumptank', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('ULTRA_TANK', 'UltraTank', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('WATER_TEMP', 'WaterTemp', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('RINSE_TEMP', 'RinseTemp', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CHECKED_BY', 'CheckedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('VERIFIED_BY', 'VerifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
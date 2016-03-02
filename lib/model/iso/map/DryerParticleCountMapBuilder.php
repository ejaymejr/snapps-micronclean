<?php



class DryerParticleCountMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.DryerParticleCountMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('iso');

		$tMap = $this->dbMap->addTable('dryer_particle_count');
		$tMap->setPhpName('DryerParticleCount');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DRYER_NO', 'DryerNo', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('PARTICLE_COUNT', 'ParticleCount', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TEMPERATURE', 'Temperature', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('ACTUAL_TEMPERATURE', 'ActualTemperature', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 
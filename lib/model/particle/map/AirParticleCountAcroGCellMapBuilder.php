<?php



class AirParticleCountAcroGCellMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.AirParticleCountAcroGCellMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('air_particle_count_acro_g_cell');
		$tMap->setPhpName('AirParticleCountAcroGCell');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('RECORD_ID', 'RecordId', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('GRID_LABEL', 'GridLabel', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('PARTICLE_COUNT', 'ParticleCount', 'double', CreoleTypes::DECIMAL, false, 11);

		$tMap->addColumn('AIR_FLOW', 'AirFlow', 'double', CreoleTypes::DECIMAL, false, 11);

	} 
} 
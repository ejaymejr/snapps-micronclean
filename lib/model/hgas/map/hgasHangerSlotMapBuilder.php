<?php



class hgasHangerSlotMapBuilder {

	
	const CLASS_NAME = 'lib.model.hgas.map.hgasHangerSlotMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('hgas');

		$tMap = $this->dbMap->addTable('hanger_slot');
		$tMap->setPhpName('hgasHangerSlot');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addForeignKey('HANGER_ID', 'HangerId', 'int', CreoleTypes::INTEGER, 'hanger', 'ID', true, null);

		$tMap->addColumn('RACK_ID', 'RackId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CELL_ID', 'CellId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addForeignKey('DEPARTMENT_ID', 'DepartmentId', 'int', CreoleTypes::INTEGER, 'department_team', 'DEPARTMENT_ID', true, null);

		$tMap->addForeignKey('TEAM_ID', 'TeamId', 'int', CreoleTypes::INTEGER, 'department_team', 'TEAM_ID', true, null);

		$tMap->addForeignKey('TAG_ID', 'TagId', 'string', CreoleTypes::BIGINT, 'tag', 'ID', false, null);

		$tMap->addColumn('STATUS', 'Status', 'string', CreoleTypes::VARCHAR, true, 45);

	} 
} 
<?php



class hgasDepartmentTeamMapBuilder {

	
	const CLASS_NAME = 'lib.model.hgas.map.hgasDepartmentTeamMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('department_team');
		$tMap->setPhpName('hgasDepartmentTeam');

		$tMap->setUseIdGenerator(false);

		$tMap->addForeignPrimaryKey('DEPARTMENT_ID', 'DepartmentId', 'int' , CreoleTypes::INTEGER, 'department', 'ID', true, null);

		$tMap->addForeignPrimaryKey('TEAM_ID', 'TeamId', 'int' , CreoleTypes::INTEGER, 'team', 'ID', true, null);

		$tMap->addColumn('TOTAL_SLOT_RESERVED', 'TotalSlotReserved', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TOTAL_SLOT_ASSIGNED', 'TotalSlotAssigned', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TOTAL_SLOT_PENDING', 'TotalSlotPending', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TOTAL_SLOT_IN_PROGRESS', 'TotalSlotInProgress', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 
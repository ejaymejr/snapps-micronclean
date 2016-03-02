<?php



class hgasUserToDepartmentTeamMapBuilder {

	
	const CLASS_NAME = 'lib.model.hgas.map.hgasUserToDepartmentTeamMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('user_to_department_team');
		$tMap->setPhpName('hgasUserToDepartmentTeam');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('USER_ID', 'UserId', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('ROLE', 'Role', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addForeignKey('DEPARTMENT_ID', 'DepartmentId', 'int', CreoleTypes::INTEGER, 'department_team', 'DEPARTMENT_ID', false, null);

		$tMap->addForeignKey('TEAM_ID', 'TeamId', 'int', CreoleTypes::INTEGER, 'department_team', 'TEAM_ID', false, null);

	} 
} 
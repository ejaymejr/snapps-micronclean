<?php



class NamelistHeaderMapBuilder {

	
	const CLASS_NAME = 'lib.model.hgas3.map.NamelistHeaderMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('hgas3');

		$tMap = $this->dbMap->addTable('namelist_header');
		$tMap->setPhpName('NamelistHeader');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CELL', 'Cell', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('TEAM', 'Team', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::VARCHAR, false, 250);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
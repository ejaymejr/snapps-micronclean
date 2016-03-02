<?php



class hgasHangerMapBuilder {

	
	const CLASS_NAME = 'lib.model.hgas.map.hgasHangerMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hanger');
		$tMap->setPhpName('hgasHanger');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('RACK_ID', 'RackId', 'int', CreoleTypes::INTEGER, 'rack', 'ID', false, null);

		$tMap->addColumn('CELL_ID', 'CellId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DEPARTMENT_ID', 'DepartmentId', 'int', CreoleTypes::INTEGER, false, null);

	} 
} 
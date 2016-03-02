<?php



class AccessAttrMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.AccessAttrMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('access_attr');
		$tMap->setPhpName('AccessAttr');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('ACCESS', 'Access', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 
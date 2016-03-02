<?php



class snappsNameListMapBuilder {

	
	const CLASS_NAME = 'lib.model.general.map.snappsNameListMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('general');

		$tMap = $this->dbMap->addTable('namelist');
		$tMap->setPhpName('snappsNameList');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('NAME_ID', 'NameId', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('NAME_CODE', 'NameCode', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 200);

	} 
} 
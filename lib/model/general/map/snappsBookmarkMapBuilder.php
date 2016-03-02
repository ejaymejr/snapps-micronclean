<?php



class snappsBookmarkMapBuilder {

	
	const CLASS_NAME = 'lib.model.general.map.snappsBookmarkMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('bookmark');
		$tMap->setPhpName('snappsBookmark');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 255);

		$tMap->addColumn('PATH', 'Path', 'string', CreoleTypes::VARCHAR, true, 255);

	} 
} 
<?php



class snappsCurrencyMapBuilder {

	
	const CLASS_NAME = 'lib.model.general.map.snappsCurrencyMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('currency');
		$tMap->setPhpName('snappsCurrency');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('CODE', 'Code', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('SYMBOL', 'Symbol', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('SORT_ORDER', 'SortOrder', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 
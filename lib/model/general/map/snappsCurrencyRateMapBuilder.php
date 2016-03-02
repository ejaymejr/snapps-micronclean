<?php



class snappsCurrencyRateMapBuilder {

	
	const CLASS_NAME = 'lib.model.general.map.snappsCurrencyRateMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('currency_rate');
		$tMap->setPhpName('snappsCurrencyRate');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('CODE_FROM', 'CodeFrom', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('CODE_TO', 'CodeTo', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('DATE_FROM', 'DateFrom', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('DATE_TO', 'DateTo', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('RATE', 'Rate', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 
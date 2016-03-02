<?php



class AirDataMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.AirDataMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('air_data');
		$tMap->setPhpName('AirData');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('X_DATA', 'XData', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('FILTER_AREA', 'FilterArea', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('TEMPERATURE', 'Temperature', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('RH', 'Rh', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('TESTER', 'Tester', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
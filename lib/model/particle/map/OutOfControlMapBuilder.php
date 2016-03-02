<?php



class OutOfControlMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.OutOfControlMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('out_of_control');
		$tMap->setPhpName('OutOfControl');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('OBSERVATION', 'Observation', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('INVESTIGATE_BY', 'InvestigateBy', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('PROP_ACTION', 'PropAction', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('REVIEW_BY', 'ReviewBy', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('USER_ID', 'UserId', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
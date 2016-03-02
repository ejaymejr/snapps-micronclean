<?php



class FiscalYearMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.FiscalYearMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('hr');

		$tMap = $this->dbMap->addTable('fiscal_year');
		$tMap->setPhpName('FiscalYear');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('PREVIOUS_YEAR', 'PreviousYear', 'string', CreoleTypes::VARCHAR, true, 5);

		$tMap->addColumn('START_DATE', 'StartDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('END_DATE', 'EndDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::VARCHAR, true, 255);

		$tMap->addColumn('IS_CURRENT', 'IsCurrent', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
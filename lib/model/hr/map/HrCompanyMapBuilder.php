<?php



class HrCompanyMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.HrCompanyMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hr_company');
		$tMap->setPhpName('HrCompany');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('COMP_CODE', 'CompCode', 'string', CreoleTypes::VARCHAR, true, 12);

		$tMap->addColumn('COMP_NAME', 'CompName', 'string', CreoleTypes::VARCHAR, true, 40);

		$tMap->addColumn('COMP_ADDRESS', 'CompAddress', 'string', CreoleTypes::VARCHAR, false, 250);

		$tMap->addColumn('COMP_HEADER', 'CompHeader', 'string', CreoleTypes::VARCHAR, false, 250);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
<?php



class HrEmployeeMasterMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.HrEmployeeMasterMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hr_employee_master');
		$tMap->setPhpName('HrEmployeeMaster');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 90);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('COMMENCE_DATE', 'CommenceDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
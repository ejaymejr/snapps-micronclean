<?php



class TkDtrmasterMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.TkDtrmasterMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tk_dtrmaster');
		$tMap->setPhpName('TkDtrmaster');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('AM_TIME_IN', 'AmTimeIn', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('PM_TIME_OUT', 'PmTimeOut', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TYPE_OF_EMPLOYMENT', 'TypeOfEmployment', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('TK_WORKTEMPLATE_NO', 'TkWorktemplateNo', 'string', CreoleTypes::CHAR, true, 30);

		$tMap->addForeignKey('HR_COMPANY_ID', 'HrCompanyId', 'string', CreoleTypes::BIGINT, 'hr_company', 'ID', false, null);

		$tMap->addForeignKey('HR_DEPARTMENT_ID', 'HrDepartmentId', 'string', CreoleTypes::BIGINT, 'hr_department', 'ID', false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
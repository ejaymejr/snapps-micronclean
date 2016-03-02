<?php



class HrDepartmentMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.HrDepartmentMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hr_department');
		$tMap->setPhpName('HrDepartment');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('DEPT_CODE', 'DeptCode', 'string', CreoleTypes::VARCHAR, true, 12);

		$tMap->addColumn('DEPT_NAME', 'DeptName', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('COMP_CODE', 'CompCode', 'string', CreoleTypes::VARCHAR, false, 12);

		$tMap->addColumn('DEPT_HEAD', 'DeptHead', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('BUILDING', 'Building', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('TEL_NO', 'TelNo', 'string', CreoleTypes::VARCHAR, false, 17);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
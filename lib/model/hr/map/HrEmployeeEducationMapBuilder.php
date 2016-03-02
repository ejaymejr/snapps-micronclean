<?php



class HrEmployeeEducationMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.HrEmployeeEducationMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hr_employee_education');
		$tMap->setPhpName('HrEmployeeEducation');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('PRIMARY', 'Primary', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('PRIMARY_GRADE', 'PrimaryGrade', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('SECONDARY', 'Secondary', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('SECONDARY_GRADE', 'SecondaryGrade', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('TERTIARY', 'Tertiary', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('TERTIARY_GRADE', 'TertiaryGrade', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('JR_COLLEGE', 'JrCollege', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('JR_COLLEGE_GRADE', 'JrCollegeGrade', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('POST_GRADUATE', 'PostGraduate', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('POST_GRADUATE_GRADE', 'PostGraduateGrade', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
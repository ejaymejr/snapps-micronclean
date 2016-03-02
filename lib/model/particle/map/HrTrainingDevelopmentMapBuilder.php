<?php



class HrTrainingDevelopmentMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.HrTrainingDevelopmentMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hr_training_development');
		$tMap->setPhpName('HrTrainingDevelopment');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 90);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('HR_TRAINING_ID', 'HrTrainingId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('PLACE_HELD', 'PlaceHeld', 'string', CreoleTypes::VARCHAR, false, 500);

		$tMap->addColumn('DATE_FROM', 'DateFrom', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DATE_TO', 'DateTo', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('NO_HRS', 'NoHrs', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('NAME_TRAINOR', 'NameTrainor', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LICENSE_NO', 'LicenseNo', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
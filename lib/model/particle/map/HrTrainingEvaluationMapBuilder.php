<?php



class HrTrainingEvaluationMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.HrTrainingEvaluationMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hr_training_evaluation');
		$tMap->setPhpName('HrTrainingEvaluation');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('HR_TRAINING_RECORD_ID', 'HrTrainingRecordId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('NO_HRS', 'NoHrs', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('BASIC_TRAINING', 'BasicTraining', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('SOIL_SORTING', 'SoilSorting', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('LOADING_WASHER', 'LoadingWasher', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('UNLOADING_WASHER', 'UnloadingWasher', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('CLEANROOM_DRYER', 'CleanroomDryer', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('FOLDING', 'Folding', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('VACUUM_PACKER', 'VacuumPacker', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('AIR_PARTICLE_COUNTER', 'AirParticleCounter', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('HELMKE_DRUM', 'HelmkeDrum', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('WATER_PARTICLE_COUNTER', 'WaterParticleCounter', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('THERMO_PATCH', 'ThermoPatch', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('SEWING_MACHINE', 'SewingMachine', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('STUD_MACHINE', 'StudMachine', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('DISPATCH', 'Dispatch', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('SHOE_DRYER', 'ShoeDryer', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('SHOE_WASHER', 'ShoeWasher', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('EXTERNAL_COURSE', 'ExternalCourse', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('ESD_MEASUREMENT', 'EsdMeasurement', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('BEYOND_REPAIR', 'BeyondRepair', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('BIO_BURDEN_TEST', 'BioBurdenTest', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('EVALUATED', 'Evaluated', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, true, null);

	} 
} 
<?php



class HrStaffTrainingRecordMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.HrStaffTrainingRecordMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hr_staff_training_record');
		$tMap->setPhpName('HrStaffTrainingRecord');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRAINING_DATE', 'TrainingDate', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('STAFF', 'Staff', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('TRAINING_DESCRIPTION', 'TrainingDescription', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('TRAINING_EVALUATION_DATE', 'TrainingEvaluationDate', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('EVALUATE_BY', 'EvaluateBy', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, true, null);

	} 
} 
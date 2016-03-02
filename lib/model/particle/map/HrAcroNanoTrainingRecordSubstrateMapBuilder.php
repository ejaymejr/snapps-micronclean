<?php



class HrAcroNanoTrainingRecordSubstrateMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.HrAcroNanoTrainingRecordSubstrateMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hr_acro_nano_training_record_substrate');
		$tMap->setPhpName('HrAcroNanoTrainingRecordSubstrate');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('DATE_NEXT_TIME', 'DateNextTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('TYPE_OF_TRAINING', 'TypeOfTraining', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('POLICY_AND_OBJECTIVES', 'PolicyAndObjectives', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('CLEANROOM_DISCIPLINE', 'CleanroomDiscipline', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('INITIAL_INSPECTION', 'InitialInspection', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('DELABELING_JELLY_REMOVAL', 'DelabelingJellyRemoval', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('PRE_WASH', 'PreWash', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('LOADING', 'Loading', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('MACHINE_WASH', 'MachineWash', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('UNLOADING', 'Unloading', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('INPROCESS_VISUAL_INSPECTION', 'InprocessVisualInspection', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('LPC', 'Lpc', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('IC', 'Ic', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('NVR', 'Nvr', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('QA_SAMPLE_INSPECTION', 'QaSampleInspection', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('PACKING', 'Packing', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('VERIFY', 'Verify', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('LAST_ISSUE_DATE', 'LastIssueDate', 'int', CreoleTypes::TIMESTAMP, true, null);

	} 
} 
<?php



class HrAcroNanoTrainingRecordMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.HrAcroNanoTrainingRecordMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hr_acro_nano_training_record');
		$tMap->setPhpName('HrAcroNanoTrainingRecord');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('DATE_FROM', 'DateFrom', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DATE_TO', 'DateTo', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('NO_HRS', 'NoHrs', 'int', CreoleTypes::INTEGER, false, null);

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

		$tMap->addColumn('PURGING_MACHINE', 'PurgingMachine', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('PACKING', 'Packing', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('QUALITY_POLICY', 'QualityPolicy', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('SPC_AWARENESS', 'SpcAwareness', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('VISUAL_INSPECTION', 'VisualInspection', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('VERIFY', 'Verify', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('PHARMAG_WASHER', 'PharmagWasher', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('PVA_VMI', 'PvaVmi', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('PRE_WASH_LOADING', 'PreWashLoading', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('PRE_WASH_UNLOADING', 'PreWashUnloading', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('SOAKING_LOADING', 'SoakingLoading', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('SOAKING_UNLOADING', 'SoakingUnloading', 'string', CreoleTypes::VARCHAR, false, 10);

	} 
} 
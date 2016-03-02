<?php



class ProcessEventLogMapBuilder {

	
	const CLASS_NAME = 'lib.model.inspection.map.ProcessEventLogMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('inspection');

		$tMap = $this->dbMap->addTable('process_event_log');
		$tMap->setPhpName('ProcessEventLog');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('TRANS_TIME', 'TransTime', 'int', CreoleTypes::TIME, false, null);

		$tMap->addColumn('MACHINE_NO', 'MachineNo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('FAILURE_MODE', 'FailureMode', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('AFFECTED', 'Affected', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('PROBABLE_CAUSE', 'ProbableCause', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CORRECTIVE_ACTION', 'CorrectiveAction', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DESCRIPTION_OF_PARTS', 'DescriptionOfParts', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CHECKED_BY', 'CheckedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('VERIFIED_BY', 'VerifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
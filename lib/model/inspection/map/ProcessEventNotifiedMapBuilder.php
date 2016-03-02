<?php



class ProcessEventNotifiedMapBuilder {

	
	const CLASS_NAME = 'lib.model.inspection.map.ProcessEventNotifiedMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('process_event_notified');
		$tMap->setPhpName('ProcessEventNotified');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('PROCESS_EVENT_LOG_ID', 'ProcessEventLogId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, true, 3);

		$tMap->addColumn('SMS', 'Sms', 'string', CreoleTypes::VARCHAR, true, 3);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
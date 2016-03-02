<?php



class EmailHistoryMapBuilder {

	
	const CLASS_NAME = 'lib.model.manage.map.EmailHistoryMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('reject_photo');

		$tMap = $this->dbMap->addTable('email_history');
		$tMap->setPhpName('EmailHistory');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FILE_DETAIL_ID', 'FileDetailId', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('EMAIL_ADDRESS', 'EmailAddress', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('EMAIL_DATE', 'EmailDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('EMAIL_TOKEN', 'EmailToken', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 100);

	} 
} 
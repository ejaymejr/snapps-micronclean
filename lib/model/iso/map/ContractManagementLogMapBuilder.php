<?php



class ContractManagementLogMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.ContractManagementLogMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('iso');

		$tMap = $this->dbMap->addTable('contract_management_log');
		$tMap->setPhpName('ContractManagementLog');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('CONTRACT_NO', 'ContractNo', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CONTACT_PERSON', 'ContactPerson', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CONTACT_NO', 'ContactNo', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('CONTRACT_INITIATOR', 'ContractInitiator', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('START_DATE', 'StartDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('END_DATE', 'EndDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 
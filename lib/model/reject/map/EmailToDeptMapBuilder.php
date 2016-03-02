<?php



class EmailToDeptMapBuilder {

	
	const CLASS_NAME = 'lib.model.reject.map.EmailToDeptMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('email_to_dept');
		$tMap->setPhpName('EmailToDept');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('EMAIL_ADDRESS', 'EmailAddress', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('SHIFT', 'Shift', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('DESIGNATION', 'Designation', 'string', CreoleTypes::VARCHAR, true, 30);

	} 
} 
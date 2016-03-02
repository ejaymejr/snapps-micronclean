<?php



class snappsCompanyMapBuilder {

	
	const CLASS_NAME = 'lib.model.general.map.snappsCompanyMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('general');

		$tMap = $this->dbMap->addTable('company');
		$tMap->setPhpName('snappsCompany');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('INDEX_NO', 'IndexNo', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NICKNAME', 'Nickname', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('INITIAL', 'Initial', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('ADDRESS_LINE1', 'AddressLine1', 'string', CreoleTypes::VARCHAR, true, 255);

		$tMap->addColumn('ADDRESS_LINE2', 'AddressLine2', 'string', CreoleTypes::VARCHAR, true, 255);

		$tMap->addColumn('PHONE', 'Phone', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('FAX', 'Fax', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('POSTAL_CODE', 'PostalCode', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('WEBSITE', 'Website', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('LOGO_FILENAME', 'LogoFilename', 'string', CreoleTypes::VARCHAR, true, 100);

	} 
} 
<?php



class sfGuardUserProfileMapBuilder {

	
	const CLASS_NAME = 'plugins.sfGuardPlugin.lib.model.map.sfGuardUserProfileMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('sfguard');

		$tMap = $this->dbMap->addTable('sf_guard_user_profile');
		$tMap->setPhpName('sfGuardUserProfile');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'sf_guard_user', 'ID', true, null);

		$tMap->addColumn('FIRST_NAME', 'FirstName', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LAST_NAME', 'LastName', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('HOMEPAGE', 'Homepage', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('BIRTHDAY', 'Birthday', 'int', CreoleTypes::DATE, false, null);

	} 
} 
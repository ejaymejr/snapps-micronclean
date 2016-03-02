<?php



class snappsSettingMapBuilder {

	
	const CLASS_NAME = 'lib.model.general.map.snappsSettingMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('application_setting');
		$tMap->setPhpName('snappsSetting');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('APPLICATION', 'Application', 'string', CreoleTypes::VARCHAR, true, 255);

		$tMap->addColumn('MODULE', 'Module', 'string', CreoleTypes::VARCHAR, true, 255);

		$tMap->addColumn('SETTING_NAME', 'SettingName', 'string', CreoleTypes::VARCHAR, true, 255);

		$tMap->addColumn('SETTING_VALUE', 'SettingValue', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('SETTING_NICENAME', 'SettingNicename', 'string', CreoleTypes::VARCHAR, true, 255);

		$tMap->addColumn('SETTING_DESCRIPTION', 'SettingDescription', 'string', CreoleTypes::VARCHAR, true, 255);

	} 
} 
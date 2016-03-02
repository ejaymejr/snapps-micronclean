<?php



class hgasTagMapBuilder {

	
	const CLASS_NAME = 'lib.model.hgas.map.hgasTagMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('hgas');

		$tMap = $this->dbMap->addTable('tag');
		$tMap->setPhpName('hgasTag');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('USER_FULLNAME', 'UserFullname', 'string', CreoleTypes::VARCHAR, true, 255);

		$tMap->addColumn('USER_GID', 'UserGid', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('JUMPSUIT_SIZE', 'JumpsuitSize', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('BOOTIES_SIZE', 'BootiesSize', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('SAFETY_BOOT_SIZE', 'SafetyBootSize', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('HOOD_SIZE', 'HoodSize', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('REQUESTED_BY', 'RequestedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_REQUESTED', 'DateRequested', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('COMPLETED_BY', 'CompletedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_COMPLETED', 'DateCompleted', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('DEPARTMENT_ID', 'DepartmentId', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DEPARTMENT_NAME', 'DepartmentName', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('TEAM_ID', 'TeamId', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TEAM_NAME', 'TeamName', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('CELL_ID', 'CellId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CELL_NAME', 'CellName', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('RACK_ID', 'RackId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('RACK_NAME', 'RackName', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('HANGER_ID', 'HangerId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('HANGER_NAME', 'HangerName', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('SLOT_ID', 'SlotId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('SLOT_NAME', 'SlotName', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('BOOT_CONDITION', 'BootCondition', 'string', CreoleTypes::VARCHAR, false, 15);

		$tMap->addColumn('SAFETY_BOOT_CONDITION', 'SafetyBootCondition', 'string', CreoleTypes::VARCHAR, false, 15);

		$tMap->addColumn('JS_CONDITION', 'JsCondition', 'string', CreoleTypes::VARCHAR, false, 15);

		$tMap->addColumn('HOOD_CONDITION', 'HoodCondition', 'string', CreoleTypes::VARCHAR, false, 15);

		$tMap->addColumn('BOOT_STAT', 'BootStat', 'string', CreoleTypes::VARCHAR, false, 2);

		$tMap->addColumn('SBOOT_STAT', 'SbootStat', 'string', CreoleTypes::VARCHAR, false, 2);

		$tMap->addColumn('JS_STAT', 'JsStat', 'string', CreoleTypes::VARCHAR, false, 2);

		$tMap->addColumn('HOOD_STAT', 'HoodStat', 'string', CreoleTypes::VARCHAR, false, 2);

		$tMap->addColumn('DATE_PEN_BOOT', 'DatePenBoot', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_PEN_SBOOT', 'DatePenSboot', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_PEN_JS', 'DatePenJs', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_PEN_HOOD', 'DatePenHood', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_INP_BOOT', 'DateInpBoot', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_INP_SBOOT', 'DateInpSboot', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_INP_JS', 'DateInpJs', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_INP_HOOD', 'DateInpHood', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_NA_BOOT', 'DateNaBoot', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_NA_SBOOT', 'DateNaSboot', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_NA_JS', 'DateNaJs', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_NA_HOOD', 'DateNaHood', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_COM_BOOT', 'DateComBoot', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_COM_SBOOT', 'DateComSboot', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_COM_JS', 'DateComJs', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_COM_HOOD', 'DateComHood', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
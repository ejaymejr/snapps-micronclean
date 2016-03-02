<?php



class Pms1232abMapBuilder {

	
	const CLASS_NAME = 'lib.model.inspection.map.Pms1232abMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('pms_1232ab');
		$tMap->setPhpName('Pms1232ab');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('MACHINE_NO', 'MachineNo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('WASH_FLOW_RATE', 'WashFlowRate', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('RINSE_FLOW_RATE', 'RinseFlowRate', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('CHAM_1', 'Cham1', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CHAM_2', 'Cham2', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('PANEL_INSPECT', 'PanelInspect', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('EXIT_INSPECT', 'ExitInspect', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('SWITCH_CONTROL', 'SwitchControl', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('INITIAL', 'Initial', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
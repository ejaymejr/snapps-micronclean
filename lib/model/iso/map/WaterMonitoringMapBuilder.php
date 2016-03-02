<?php



class WaterMonitoringMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.WaterMonitoringMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('water_monitoring');
		$tMap->setPhpName('WaterMonitoring');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('MACHINE_NO', 'MachineNo', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('AM_8', 'Am8', 'double', CreoleTypes::FLOAT, false, 7);

		$tMap->addColumn('AM_9', 'Am9', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('AM_10', 'Am10', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('AM_11', 'Am11', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('NN_12', 'Nn12', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('PM_1', 'Pm1', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('PM_2', 'Pm2', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('PM_3', 'Pm3', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('PM_4', 'Pm4', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('PM_5', 'Pm5', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('PM_6', 'Pm6', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('PM_7', 'Pm7', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('PM_8', 'Pm8', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('PM_9', 'Pm9', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('PM_10', 'Pm10', 'double', CreoleTypes::FLOAT, true, 7);

		$tMap->addColumn('TESTER', 'Tester', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 
<?php



class DosingCalibrationMapBuilder {

	
	const CLASS_NAME = 'lib.model.inspection.map.DosingCalibrationMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('dosing_calibration');
		$tMap->setPhpName('DosingCalibration');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('MACHINE_NO', 'MachineNo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('PUMP_MODEL', 'PumpModel', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('EQ_FLOW_RATE', 'EqFlowRate', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DENSITY', 'Density', 'double', CreoleTypes::FLOAT, false, 9);

		$tMap->addColumn('FREQUENCY', 'Frequency', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('FLOW_RATE', 'FlowRate', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('READING_TIME', 'ReadingTime', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('READING', 'Reading', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CHECKED_BY', 'CheckedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
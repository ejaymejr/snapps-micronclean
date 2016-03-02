<?php



class Pms6252MonthlyMapBuilder {

	
	const CLASS_NAME = 'lib.model.inspection.map.Pms6252MonthlyMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('pms_6252_monthly');
		$tMap->setPhpName('Pms6252Monthly');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('MACHINE_NO', 'MachineNo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DRAIN_SYSTEM', 'DrainSystem', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('ELECTRICAL_SYSTEM', 'ElectricalSystem', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('HOSES_CONNECTORS', 'HosesConnectors', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('INITIAL', 'Initial', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
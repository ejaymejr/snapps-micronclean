<?php



class HeatSealerPmMapBuilder {

	
	const CLASS_NAME = 'lib.model.inspection.map.HeatSealerPmMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('heat_sealer_pm');
		$tMap->setPhpName('HeatSealerPm');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('MACHINE_TYPE', 'MachineType', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('AIR_REGULATOR', 'AirRegulator', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('HEAT', 'Heat', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('THERMOPATCH', 'Thermopatch', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('DWELL', 'Dwell', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('PISTON', 'Piston', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('PERFORMED_BY', 'PerformedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('VERIFIED_BY', 'VerifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('VERIFY_DATE', 'VerifyDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
<?php



class IcCalibrationMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.IcCalibrationMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('particle');

		$tMap = $this->dbMap->addTable('ic_calibration');
		$tMap->setPhpName('IcCalibration');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('STD0F', 'Std0f', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD0CL', 'Std0cl', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD0NO2', 'Std0no2', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD0NO3', 'Std0no3', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD0PO4', 'Std0po4', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD0SO4', 'Std0so4', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD0BR', 'Std0br', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD0LI', 'Std0li', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD0NA', 'Std0na', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD0NH4', 'Std0nh4', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD0K', 'Std0k', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD0MG', 'Std0mg', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD0CA', 'Std0ca', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD1F', 'Std1f', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD1CL', 'Std1cl', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD1NO2', 'Std1no2', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD1NO3', 'Std1no3', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD1PO4', 'Std1po4', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD1SO4', 'Std1so4', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD1BR', 'Std1br', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD1LI', 'Std1li', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD1NA', 'Std1na', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD1NH4', 'Std1nh4', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD1K', 'Std1k', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD1MG', 'Std1mg', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD1CA', 'Std1ca', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD2F', 'Std2f', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD2CL', 'Std2cl', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD2NO2', 'Std2no2', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD2NO3', 'Std2no3', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD2PO4', 'Std2po4', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD2SO4', 'Std2so4', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD2BR', 'Std2br', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD2LI', 'Std2li', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD2NA', 'Std2na', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD2NH4', 'Std2nh4', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD2K', 'Std2k', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD2MG', 'Std2mg', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('STD2CA', 'Std2ca', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('X7PEAK', 'X7peak', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('X6PEAK', 'X6peak', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('PPBSTD1', 'Ppbstd1', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('PPBSTD2', 'Ppbstd2', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('CHECKED_BY', 'CheckedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('VERIFIED_BY', 'VerifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

	} 
} 
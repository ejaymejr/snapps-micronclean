<?php



class IcDataMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.IcDataMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('ic_data');
		$tMap->setPhpName('IcData');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('SAMPLE', 'Sample', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('TYPE', 'Type', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NA', 'Na', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('NA_SPEC', 'NaSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NH', 'Nh', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('NH_SPEC', 'NhSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('K', 'K', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('K_SPEC', 'KSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('CA', 'Ca', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('CA_SPEC', 'CaSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('MG', 'Mg', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('MG_SPEC', 'MgSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('F', 'F', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('F_SPEC', 'FSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('CL', 'Cl', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('CL_SPEC', 'ClSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NO', 'No', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('NO_SPEC', 'NoSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('PO', 'Po', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('PO_SPEC', 'PoSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('SO', 'So', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('SO_SPEC', 'SoSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('WASHER', 'Washer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DRYER', 'Dryer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('TESTER', 'Tester', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('GARMENT_CODE', 'GarmentCode', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
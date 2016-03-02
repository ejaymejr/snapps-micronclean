<?php



class NvrFtirDataMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.NvrFtirDataMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('nvr_ftir_data');
		$tMap->setPhpName('NvrFtirData');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('TYPE', 'Type', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('LEFT_SLEEVE', 'LeftSleeve', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('LEFT_SLEEVE_SPEC', 'LeftSleeveSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('RIGHT_SLEEVE', 'RightSleeve', 'double', CreoleTypes::DECIMAL, true, 10);

		$tMap->addColumn('RIGHT_SLEEVE_SPEC', 'RightSleeveSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('SILICONE', 'Silicone', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('SILICONE_SPEC', 'SiliconeSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('AMIDE', 'Amide', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('AMIDE_SPEC', 'AmideSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DOP', 'Dop', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DOP_SPEC', 'DopSpec', 'string', CreoleTypes::VARCHAR, true, 50);

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
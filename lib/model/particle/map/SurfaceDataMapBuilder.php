<?php



class SurfaceDataMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.SurfaceDataMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('surface_data');
		$tMap->setPhpName('SurfaceData');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('TYPE', 'Type', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SLEEVE_X1', 'SleeveX1', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SLEEVE_X1_SPEC', 'SleeveX1Spec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('SLEEVE_X2', 'SleeveX2', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SLEEVE_X2_SPEC', 'SleeveX2Spec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('SHOE_RIGHT', 'ShoeRight', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SHOE_RIGHT_SPEC', 'ShoeRightSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('SHOE_LEFT', 'ShoeLeft', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SHOE_LEFT_SPEC', 'ShoeLeftSpec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('WASHER', 'Washer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DRYER', 'Dryer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('TESTER', 'Tester', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('GARMENT_CODE', 'GarmentCode', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
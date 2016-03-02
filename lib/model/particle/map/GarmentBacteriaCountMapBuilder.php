<?php



class GarmentBacteriaCountMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.GarmentBacteriaCountMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('garment_bacteria_count');
		$tMap->setPhpName('GarmentBacteriaCount');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('GARMENT_CODE', 'GarmentCode', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('TYPE', 'Type', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('BACTERIA_COUNT', 'BacteriaCount', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('POINT_3', 'Point3', 'double', CreoleTypes::DECIMAL, false, 10);

		$tMap->addColumn('POINT_3_SPEC', 'Point3Spec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('POINT_5', 'Point5', 'double', CreoleTypes::DECIMAL, false, 10);

		$tMap->addColumn('POINT_5_SPEC', 'Point5Spec', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NO_OF_TIMES_WASH', 'NoOfTimesWash', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('WASHER', 'Washer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DRYER', 'Dryer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('TESTER', 'Tester', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
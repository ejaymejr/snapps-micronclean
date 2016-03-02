<?php



class GarmentinformationMapBuilder {

	
	const CLASS_NAME = 'lib.model.reject.map.GarmentinformationMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('reject_photo');

		$tMap = $this->dbMap->addTable('garmentInformation');
		$tMap->setPhpName('Garmentinformation');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('GARMENT_CODE', 'GarmentCode', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('TYPE', 'Type', 'string', CreoleTypes::VARCHAR, true, 80);

		$tMap->addColumn('SIZE', 'Size', 'string', CreoleTypes::VARCHAR, true, 80);

		$tMap->addColumn('COLOR', 'Color', 'string', CreoleTypes::VARCHAR, true, 80);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NO_OF_TIMES_WASH', 'NoOfTimesWash', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NUMBER', 'Number', 'string', CreoleTypes::VARCHAR, false, 15);

		$tMap->addColumn('HANGER_NO', 'HangerNo', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('INSERTED_DATE', 'InsertedDate', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('STATUS', 'Status', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 
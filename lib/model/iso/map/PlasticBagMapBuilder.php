<?php



class PlasticBagMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.PlasticBagMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('plastic_bag');
		$tMap->setPhpName('PlasticBag');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('TYPE_OF_PLASTIC', 'TypeOfPlastic', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('BY_WHO', 'ByWho', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('SURFACE_AREA', 'SurfaceArea', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('VENDOR', 'Vendor', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('VOL_IN_ML', 'VolInMl', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('LPC_BLANK_IN_ML', 'LpcBlankInMl', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('LPC_PLASTIC_IN_ML', 'LpcPlasticInMl', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('LPC_PLASTIC_IN_CM', 'LpcPlasticInCm', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('IC_CL_IN_CM', 'IcClInCm', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('IC_NO_IN_CM', 'IcNoInCm', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('IC_SO_IN_CM', 'IcSoInCm', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('STATUS', 'Status', 'string', CreoleTypes::VARCHAR, false, 9);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 
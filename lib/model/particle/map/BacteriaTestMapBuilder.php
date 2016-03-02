<?php



class BacteriaTestMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.BacteriaTestMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('bacteria_test');
		$tMap->setPhpName('BacteriaTest');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CLEANROOM', 'Cleanroom', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('AREA_A', 'AreaA', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('AREA_B', 'AreaB', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('FOLDING_TABLE_A', 'FoldingTableA', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('FOLDING_TABLE_B', 'FoldingTableB', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('GARMENT', 'Garment', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('CHECKED_BY', 'CheckedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('VERIFIED_BY', 'VerifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

	} 
} 
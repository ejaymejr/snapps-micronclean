<?php



class RejectRejectAttrMapBuilder {

	
	const CLASS_NAME = 'lib.model.manage.map.RejectRejectAttrMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('reject_reject_attr');
		$tMap->setPhpName('RejectRejectAttr');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('GARMENT_TYPE', 'GarmentType', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('REASON', 'Reason', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('REPAIRABLE', 'Repairable', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
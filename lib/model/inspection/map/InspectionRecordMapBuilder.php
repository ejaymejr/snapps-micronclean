<?php



class InspectionRecordMapBuilder {

	
	const CLASS_NAME = 'lib.model.inspection.map.InspectionRecordMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('inspection_record');
		$tMap->setPhpName('InspectionRecord');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('INSPECTION_TYPE', 'InspectionType', 'string', CreoleTypes::VARCHAR, true, 15);

		$tMap->addColumn('INSPECTION_DATE', 'InspectionDate', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('CHECKED_BY', 'CheckedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
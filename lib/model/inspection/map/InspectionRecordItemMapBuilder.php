<?php



class InspectionRecordItemMapBuilder {

	
	const CLASS_NAME = 'lib.model.inspection.map.InspectionRecordItemMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('inspection_record_item');
		$tMap->setPhpName('InspectionRecordItem');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('INSPECTION_RECORD_ID', 'InspectionRecordId', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('INSPECTION_FIELD_LIST_ID', 'InspectionFieldListId', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FIELD_NAME', 'FieldName', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('FIELD_VALUE', 'FieldValue', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
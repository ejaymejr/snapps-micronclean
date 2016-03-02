<?php



class InspectionFieldListMapBuilder {

	
	const CLASS_NAME = 'lib.model.inspection.map.InspectionFieldListMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('inspection_field_list');
		$tMap->setPhpName('InspectionFieldList');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FIELD_NAME', 'FieldName', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('FIELD_TYPE', 'FieldType', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('STATUS', 'Status', 'string', CreoleTypes::CHAR, true, 1);

		$tMap->addColumn('SEQ', 'Seq', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
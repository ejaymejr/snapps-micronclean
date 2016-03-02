<?php



class LabelDepartmentMapBuilder {

	
	const CLASS_NAME = 'lib.model.hgas3.map.LabelDepartmentMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('hgas3');

		$tMap = $this->dbMap->addTable('label_department');
		$tMap->setPhpName('LabelDepartment');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('LABEL_COMPANY_ID', 'LabelCompanyId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, false, 40);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 
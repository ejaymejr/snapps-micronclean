<?php



class InternalAuditIsoClauseMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.InternalAuditIsoClauseMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('internal_audit_iso_clause');
		$tMap->setPhpName('InternalAuditIsoClause');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SUMMARY_ID', 'SummaryId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('ISO_CLAUSE', 'IsoClause', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 
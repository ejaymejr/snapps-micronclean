<?php



class InternalAuditReportSummaryMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.InternalAuditReportSummaryMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('internal_audit_report_summary');
		$tMap->setPhpName('InternalAuditReportSummary');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('AUDITOR', 'Auditor', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('AUDITED_DATE', 'AuditedDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('AREA_AUDITED', 'AreaAudited', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('NC', 'Nc', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('OBSERVATION', 'Observation', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('FINDINGS_SUMMARY', 'FindingsSummary', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('OTHER_OBSERVATION', 'OtherObservation', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('RECOMMENDATION', 'Recommendation', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CORRECTIVE_PREVENTIVE_ACTION_REPORT_NO', 'CorrectivePreventiveActionReportNo', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('PREPARED_BY', 'PreparedBy', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('PREPARED_DATE', 'PreparedDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 
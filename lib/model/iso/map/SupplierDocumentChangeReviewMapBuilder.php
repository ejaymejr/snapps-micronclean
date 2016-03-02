<?php



class SupplierDocumentChangeReviewMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.SupplierDocumentChangeReviewMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('supplier_document_change_review');
		$tMap->setPhpName('SupplierDocumentChangeReview');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DOCUMENT_NO', 'DocumentNo', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DOCUMENT_TITLE', 'DocumentTitle', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('ORIGINAL_REV_NO', 'OriginalRevNo', 'string', CreoleTypes::VARCHAR, false, 8);

		$tMap->addColumn('MOD_REV_NO', 'ModRevNo', 'string', CreoleTypes::VARCHAR, false, 8);

		$tMap->addColumn('CHANGES_REQUESTED', 'ChangesRequested', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('SCR_STATUS', 'ScrStatus', 'string', CreoleTypes::VARCHAR, false, 6);

		$tMap->addColumn('CAPA_REPORT_NO', 'CapaReportNo', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('REVIEW_BY', 'ReviewBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('APPROVED', 'Approved', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('APPROVED_DATE', 'ApprovedDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 
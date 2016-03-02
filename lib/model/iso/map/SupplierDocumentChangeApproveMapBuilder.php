<?php



class SupplierDocumentChangeApproveMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.SupplierDocumentChangeApproveMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('supplier_document_change_approve');
		$tMap->setPhpName('SupplierDocumentChangeApprove');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('REVIEW_INDEX_NO', 'ReviewIndexNo', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('APPROVE_BY', 'ApproveBy', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('NO_OF_EMAIL_SEND', 'NoOfEmailSend', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 
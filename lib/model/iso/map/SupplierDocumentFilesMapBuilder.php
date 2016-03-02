<?php



class SupplierDocumentFilesMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.SupplierDocumentFilesMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('supplier_document_files');
		$tMap->setPhpName('SupplierDocumentFiles');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('SUPPLIER_DOCUMENT_CHANGE_REVIEW_ID', 'SupplierDocumentChangeReviewId', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('FILENAME', 'Filename', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('PATH', 'Path', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('MIME_TYPE', 'MimeType', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('SIZE', 'Size', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 
<?php



class FileDetailMapBuilder {

	
	const CLASS_NAME = 'lib.model.manage.map.FileDetailMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('file_detail');
		$tMap->setPhpName('FileDetail');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('BATCH_ID', 'BatchId', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('GARMENT_CODE', 'GarmentCode', 'string', CreoleTypes::VARCHAR, true, 40);

		$tMap->addColumn('FILE_NAME', 'FileName', 'string', CreoleTypes::VARCHAR, true, 255);

		$tMap->addColumn('PATH', 'Path', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('FILE_NAME_ORIGINAL', 'FileNameOriginal', 'string', CreoleTypes::VARCHAR, true, 255);

		$tMap->addColumn('MIME_TYPE', 'MimeType', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('SIZE', 'Size', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 100);

	} 
} 